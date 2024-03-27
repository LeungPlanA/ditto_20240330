@php 
    $title = $template['title']->value;
    $desc = $template['description']->value;
    $commentGroup = $template['comment-group']->value;
@endphp

<div class="w-full py-[100px]">
    <div class="container">
        <p>{{$title}}</p>
        <p>{{$desc}}</p>
        <div class="w-1/2">
            <img class="w-full" src="{{$image}}" />
        </div>
        <div class="w-1/2 pl-[80px]">
            <div class="
                relative
                flex items-center
                pl-[15px] mb-[30px] text-[var(--primaryColor)] text-4xl leading-normal
                before:content-[''] before:absolute before:w-[4px] before:h-full before:block before:bg-[#F1D18A] before:left-0
            ">
                
            </div>
            
            <button class="secondaryBtn mt-[30px]">
                
            </button>
        </div>
    </div>
</div>