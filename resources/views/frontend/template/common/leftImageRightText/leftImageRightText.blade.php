@php 
    $title = $template['title']->value;
    $desc = $template['description']->value;
    $image = $template['image']->value;
    $button = $template['button']->value;
@endphp

<div class="bg-[#F4F7F7] w-full py-[100px]">
    <div class="container flex-wrap">
        <div class="w-full !order-2 mt-[40px] lg:mt-0 lg:!order-1 lg:w-1/2">
            <img class="w-full" src="{{$image}}" />
        </div>
        <div class="w-full lg:w-1/2 !order-1 lg:!order-2 lg:pl-[80px]">
            <div class="
                relative
                flex items-center
                pl-[15px] mb-[30px] text-[var(--primaryColor)] text-4xl leading-normal
                before:content-[''] before:absolute before:w-[4px] before:h-full before:block before:bg-[#F1D18A] before:left-0
            ">
                <p>{!!$title!!}</p>
            </div>
            {!!$desc!!}
            <button class="secondaryBtn mt-[30px]">
                {{$button}}
            </button>
        </div>
    </div>
</div>