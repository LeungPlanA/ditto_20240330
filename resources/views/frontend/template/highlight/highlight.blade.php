@php 
    $title = $template['title']->value;
    $desc = $template['description']->value;
    $bgImage = $template['background']->value;
@endphp

<section 
    class="relative bg-cover"
    style="background-image:url('{{$bgImage}}')"
>
    <div class="flex flex-col items-center min-h-[500px] w-3/5 max-w-[1360px] mx-auto pt-[150px]">
        <p class="text-[var(--primaryColor)] font-bold text-[40px] text-center leading-normal">{!! $title !!}</p>
        <p class="text-[#959CB6] mt-[20px] text-xl">{{$desc}}</p>

        <button 
            class="bg-[#F89D26] text-white px-[24px] py-[6px] mt-[80px] rounded-2xl font-bold"
            style="box-shadow: 0px 2px 9px 0px rgba(24, 59, 86, 0.15);"
        >
            查看所有方案
        </button>
    </div>
</section>
