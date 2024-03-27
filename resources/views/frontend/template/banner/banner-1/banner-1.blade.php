@php 
    $title = $template['title']->value;
    $image = $template['image']->value;
@endphp

<section class="template_banner-1">
    <div class="relative bg-cover pt-[15%] bg-center
    before:absolute before:content-[''] before:left-0 before:top-0 before:w-full before:h-full before:bg-[rgba(0,0,0,.6)]
    " style="background-image:url('{{$image}}')">
        <div class="absolute left-0 top-1/2 translate-y-[-50%] w-full">
            <div class="container" style="justify-content: flex-start">
                <p class="text-white font-bold text-[40px]">{{$title}}</p>
            </div>
        </div>
    </div>
</section>