@php 
    $title = $template['title']->value;
    $desc = $template['description']->value;
@endphp

<section class="template_text-only">
    <div class="container py-[100px] text-xl flex-col justify-start items-start">
        {!!$desc!!}
    </div>
</section>

<style>
    .template_text-only ul{
        margin-top:20px;
    }
    .template_text-only img{

    }
</style>