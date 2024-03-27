@php 
    $title = $template['title']->value;
    $desc = $template['description']->value;
    $bgImage = $template['background']->value;
    $image1 = $template['image']->value;
    $image2 = $template['image2']->value;
@endphp

<section 
    class="relative bg-cover"
    style="background-image:url('{{$bgImage}}')"
>
    <div class="flex flex-col items-center min-h-[500px] w-[90%] mx-auto pt-[100px]">
        <p class="text-[var(--primaryColor)] font-bold text-[40px] text-center leading-normal">{!! $title !!}</p>
        <p class="text-[#959CB6] mt-[20px] text-xl">{{$desc}}</p>

        <button class="primaryBtn">
            查看所有方案
        </button>

        <!-- Bottom Image -->
        <div class="relative w-[90%] max-w-[1600px] overflow-hidden flex justify-end mt-[80px]">
            <img
                class="absolute w-3/5 left-0 top-[60px] z-10"
                src="{{$image1}}" style="border-radius: 16px; box-shadow: 6px 8px 24px 2px rgba(22, 41, 34, 0.15);" />
            <img 
                class="relative w-3/5 z-20 top-[30px]"
                src="{{$image2}}" style="border-radius: 16px; box-shadow: 6px 8px 24px 2px rgba(22, 41, 34, 0.15);" />
        </div>
    </div>
</section>
