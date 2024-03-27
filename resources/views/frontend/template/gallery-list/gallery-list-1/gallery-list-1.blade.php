@php 
    $gallery = $template['gallery-item'];
@endphp
<section class="template_gallery-list-1 py-[100px]">
    <div class="container gap-[15px] flex-wrap">
        @foreach ($gallery as $gallery_item)
            @php
                $detail = [];

                foreach ($gallery_item->child as $item) {
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
            <div class="relative pt-[30%] w-[calc(100%/3-10px)]">
                <img  
                    class="absolute left-0 top-0 object-cover h-full w-full"
                    src="{{$detail['image']->value}}" 
                    alt="" 
                />
            </div>
        @endforeach
    </div>
</section>
<div class="gallery-modal fixed left-0 top-0 h-full w-full bg-[rgba(0,0,0,.7)] z-50">
    <div class="container h-full !max-w-[1200px]">
        <div class="flex gap-[30px]">
            <img class="w-[35%]" src="/images/upload/case-3.jpg" /> 
            <div class="text-white py-[30px]">
                <p class="text-3xl font-bold mb-[20px]">翠綠時刻</p>
                <p class="leading-8">在這幅作品中，時間被巧妙地鑲嵌在光與影的交織之間，如同流金溢彩的翠綠夢。 腕錶不僅是計時的工具，更是優雅的藝術品，它的每個細節都經過精心的琢磨，從錶帶上連續的綠寶石到錶盤的珠光寶氣，每一刻都閃爍著獨特的光芒。 這不只是時間的流逝，更是對美好生活的一種讚頌，每一個刻度都在默默地述說著時間的寶貴。 透過鏡頭，我們捕捉了時間的精華，定格了這一刻的永恆。</p>
            </div>
        </div>
    </div>
</div>
<script>

</script>