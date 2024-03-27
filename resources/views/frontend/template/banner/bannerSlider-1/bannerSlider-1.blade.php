@vite(['resources/views/template/banner/bannerSlider-1/script.js'])
@vite(['resources/views/template/banner/bannerSlider-1/style.css'])

@php 
    $slides = $template['slide'];
@endphp
<section class="template_bannerSlider-1">
    <div class="swiper">
        <div class="swiper-wrapper">
            @foreach ($slides as $slide)
                @php
                    $detail = [];

                    foreach ($slide->child as $item) {
                        if (isset($detail[$item["name"]])) {
                            if (!is_array($detail[$item["name"]])) {
                                $detail[$item["name"]] = array($detail[$item["name"]]);
                            }
                            $detail[$item["name"]][] = $item;
                        } else {
                            $detail[$item["name"]] = $item;
                        }
                    }
                @endphp
                <div class="swiper-slide relative h-auto pt-[60%]
                lg:pt-[40%]">
                    <img  
                        class="absolute left-0 top-0 object-cover h-full w-full"
                        src="{{$detail['image']->value}}" 
                        alt="" 
                    />
                    @if($detail['title']->value)
                        <div class="absolute left-0 bottom-0 bg-stone-950 bg-opacity-80 w-full z-10 shadow px-14 py-6
                            lg:w-2/5 lg:px-14 lg:py-12
                        ">
                            <p class="text-white font-bold text-xl lg:text-xl">{{$detail['title']->value}}</p>
                        </div>
                    @endif
                </div>
            @endforeach
            
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</section>