<html>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    @vite(['resources/frontend-assets/css/reset.css', 'resources/frontend-assets/css/app.scss', 'resources/frontend-assets/js/app.js'])
    <style>
        :root {
            --primaryColor: #1F4E5F;
            --containerMaxWidth: 1600px;
        }
    </style>
</head>

<body class="ditto-frontend">
    <!-- Header -->
    @if (!($page->attribute->fullPage ?? false))
        @includeIf('frontend/template/header/header-1/header-1')
    @endif

    <!-- Main -->
    <main>
        @foreach ($page->child as $template)
            @if ($template->active)
                @php
                    $dataSet = [];
                    $templatePath = $template->path;

                    foreach ($template->child as $item) {
                        if (isset($dataSet[$item['name']])) {
                            if (!is_array($dataSet[$item['name']])) {
                                $dataSet[$item['name']] = [$dataSet[$item['name']]];
                            }
                            $dataSet[$item['name']][] = $item;
                        } else {
                            $dataSet[$item['name']] = $item;
                        }
                    }
                @endphp

                @includeIf('frontend/template/' . $templatePath, ['template' => $dataSet])

                <script>
                    var data = {!! json_encode($dataSet) !!};
                    console.log("Template: {{ $template->name }}")
                    console.log(data);
                </script>
            @endif
        @endforeach
    </main>

    <!-- Main -->
    @if (!($page->attribute->fullPage ?? false))
        @includeIf('frontend/template/footer/footer-1/footer-1')
    @endif


    <script>
        var data = {!! json_encode($page) !!};
        console.log('Page Data Set');
        console.log(data);
    </script>
</body>

</html>
