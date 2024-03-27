@php 
    $title = $template['title']->value;
    $image = $template['background']->value;
    $button = $template['button']->value;
@endphp

<div style="background:url({{$image}});background-size:cover;"
    class="py-[60px]"
>   
    <div class="container" style="align-items: flex-end">
        <p class="w-full text-white text-[30px] leading-relaxed cms-block">{!!$title!!}</p>
        <button class="tertiaryBtn whitespace-nowrap py-[5px] px-8">{{$button}}</button>
    </div>
</div>