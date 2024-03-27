<section class="">
    <!-- Prview shopping cart -->
    <div class="preview-area container py-[100px] gap-[30px] !items-start [&:not(.active)]:!hidden active">
        <div class="px-[60px] py-[60px] w-[calc(72%-15px)] bg-white border-[1px] border-solid border-[#EEE]">
            <!--<div class="flex items-center w-full">
                <img class="w-[200px]" src="/images/upload/bowie.jpg" />
                <div class="p-[20px] w-[calc(100%-20px)]">
                    <p class="font-bold text-xl mb-2">生物課程</p>
                    <p class="text-sm text-slate-600 mb-1">Bowie Choi</p>
                    <p class="text-sm text-slate-600">
                        課程類型: 現場<br>
                        上課時間: (三) 06:15 – 07:30 PM<br>
                        上課地點: 佐敦
                    </p>
                    <div class="flex justify-between items-center mt-6 w-full">
                        <div class="flex items-center justify-center">
                            <span>-</span>
                            <input class="text-center" type="text" value="1" />
                            <span>+</span>
                        </div>
                        <p class="font-bold"><del class="text-sm">HKD$ 1000</del><span class="ml-4 text-orange-600 text-xl">HKD$ 800</span></p>
                    </div>
                </div>
            </div>    -->       
            <div class="flex items-center w-full">
                <img class="w-[200px]" src="/images/upload/product-tem.jpg" />
                <div class="p-[20px] w-[calc(100%-20px)]">
                    <p class="font-bold text-xl mb-2">物理 - 電和磁（筆記和練習）</p>
                    <p class="text-sm text-slate-600 mb-1">產品類型: 書本</p>
                    <p class="text-sm text-slate-600">
                        本產品旨在幫助學生深入理解和掌握電學和磁學的相關知識。它包含了豐富而詳細的學習筆記和相關練習題，涵蓋了電荷、電場、電勢、電流、電路、磁場等重要主題。
                <br><br>
                學習筆記部分提供了清晰的理論講解和示例，幫助學生理解基本概念和原理。這些筆記旨在簡潔明了地闡述各個概念，幫助學生快速掌握知識點，並為後續的練習和考試做好準備。
                <br><br>
                練習題部分涵蓋了各種難度級別的問題，包括選擇題、填空題、計算題等，旨在幫助學生鞏固所學知識，並提高解決問題的能力。練習題設計靈活多樣，涵蓋了各種典型情況和實際應用場景，能夠幫助學生將理論知識與實際問題相結合，更好地理解和應用所學內容。
                    </p>
                    <div class="flex justify-between items-center mt-6 w-full">
                        <div class="flex items-center justify-center">
                            <span>-</span>
                            <input class="text-center" type="text" value="1" />
                            <span>+</span>
                        </div>
                        <p class="font-bold"><del class="text-sm">HKD$ 120</del><span class="ml-4 text-orange-600 text-xl">HKD$ 100</span></p>
                    </div>
                </div>
            </div>   
        </div>
        <div class="px-[30px] py-[30px] w-[calc(28%-15px)] bg-white border-[1px] border-solid border-[#EEE] margin-auto">
            <p class="font-bold mb-[20px] pb-[15px]" style="border-bottom:1px solid #eee">訂單摘要</p>
            <div class="flex justify-between mb-[10px]">
                <p>小計</p>
                <p>$100</p>
            </div>
            <div class="flex justify-between mb-[10px]">
                <p>運費</p>
                <p>-</p>
            </div>
            <div class="flex justify-between mb-[10px]">
                <p>折扣</p>
                <p>-</p>
            </div>
            <div class="flex justify-between mb-[30px]">
                <p class="font-bold">總值</p>
                <p class="font-bold">$100</p>
            </div>
            <p class="font-bold mb-[10px]">優惠碼</p>
            <div class="flex justify-between mb-[20px]">
                <input class="py-[10px] px-[20px] w-full border-[1px] border-solid border-[#EEE]" type="text" />
            </div>
            <button class="py-[10px] px-[20px] bg-black w-full font-bold text-LG text-white text-center"
            onClick="
                document.querySelector('.checkout-area').classList.add('active');
                document.querySelector('.preview-area').classList.remove('active');
            ">結帳</button>      
        </div>
    </div>


    <!-- Checkout -->
    <div class="checkout-area container pt-[60px] pb-[100px] gap-[30px] flex-wrap !items-start [&:not(.active)]:!hidden">
        <p class="font-bold w-full text-xl cursor-pointer"
        onClick="
            document.querySelector('.checkout-area').classList.remove('active');
            document.querySelector('.preview-area').classList.add('active');
        ">< 返回</p>
        <form class="px-[100px] py-[60px] w-[calc(72%-15px)] bg-white border-[1px] border-solid border-[#EEE]">
            <!-- Shipping Method -->
            
                <p class="text-2xl font-bold border-b-[1px] border-solid border-[#EEE] pb-4 mb-[20px]">送貨方式</p>
                <div class="flex mb-[30px]">
                <div class="ditto-custom-radioBtn group active
                flex items-center
                relative px-[30px] py-[20px] mr-[20px] rounded border-[1px] border-solid border-[#EEE] overflow-hidden
                [&.active]:text-[#EBA000] [&.active]:border-[#EBA000]">
                    <img class="w-[25px] group-[&.active]:hidden" src="/images/template/shopping-cart-1/shipping.svg" />
                    <img class="w-[25px] group-[&.active]:block hidden" src="/images/template/shopping-cart-1/shipping-active.svg" />
                    <p class="ml-3">送貨</p>
                    <input type="radio" name="shipping_method" checked class="absolute left-0 top-0 h-full w-full z-10 opacity-0 cursor-pointer" />
                </div>
                <div class="ditto-custom-radioBtn group
                flex items-center
                relative px-[30px] py-[20px] mr-[20px] rounded border-[1px] border-solid border-[#EEE] overflow-hidden
                [&.active]:text-[#EBA000] [&.active]:border-[#EBA000]">
                    <img class="w-[17px] group-[&.active]:hidden" src="/images/template/shopping-cart-1/take-out.svg" />
                    <img class="w-[17px] group-[&.active]:block hidden" src="/images/template/shopping-cart-1/take-out-active.svg" />
                    <p class="ml-3">門市自取</p>
                    <input type="radio" name="shipping_method" class="absolute left-0 top-0 h-full w-full z-10 opacity-0 cursor-pointer" />
                </div>
            </div>
            
            <div class="w-[calc(50%-7.5px)] mb-[30px]">
                <label class="mb-[5px] block">聯絡人姓名 *</label>
                <input class="py-[10px] px-[20px] w-full border-[1px] border-solid border-[#EEE] rounded" type="text" />
            </div>
            <div class="flex gap-[15px]">
                <div class="w-[calc(50%-7.5px)]">
                    <label class="mb-[5px] block">電郵地址 *</label>
                    <input class="py-[10px] px-[20px] w-full border-[1px] border-solid border-[#EEE] rounded" type="text" />
                </div>
                <div class="w-[calc(50%-7.5px)]">
                    <label class="mb-[5px] block">聯絡電話號碼 *</label>
                    <input class="py-[10px] px-[20px] w-full border-[1px] border-solid border-[#EEE] rounded" type="text" />
                </div>
            </div>

            <div class="shipping-method-area active hidden [&.active]:block">
                <!-- Address -->
                <p class="text-2xl font-bold border-b-[1px] border-solid border-[#EEE] pb-4 mb-[20px] mt-[50px]">送貨地址</p>
                <div class="mb-[30px]">
                    <label class="mb-[5px] block">地址 *</label>
                    <input class="py-[10px] px-[20px] w-full border-[1px] border-solid border-[#EEE] rounded" type="text" />
                </div>
                <div class="w-full">
                    <label class="mb-[5px] block">聯絡電話號碼 *</label>
                    <input class="py-[10px] px-[20px] w-full border-[1px] border-solid border-[#EEE] rounded" type="text" />
                </div>
            </div>
            <div class="takeout-method-area hidden [&.active]:block">
                <!-- Takeout -->
                <p class="text-2xl font-bold border-b-[1px] border-solid border-[#EEE] pb-4 mb-[20px] mt-[50px]">自取方法</p>
                <p class="leading-7 text-lg">
                    請在付款確認翌日，於辦公時間3天內到門市顯示單號取貨。<br>
                    營業時間: 星期一至五 10:00 - 19:00<br>
                    關於門市自取安排，如有任何疑問，請聯絡我們。
                </p>
            </div>

            <!-- Address -->
            <p class="text-2xl font-bold border-b-[1px] border-solid border-[#EEE] pb-4 mb-[20px] mt-[50px]">帳單地址</p>
            <div class="mb-[30px]">
                <label class="mb-[5px] block">地址 *</label>
                <input class="py-[10px] px-[20px] w-full border-[1px] border-solid border-[#EEE] rounded" type="text" />
            </div>
            <div class="w-full">
                <label class="mb-[5px] block">聯絡電話號碼 *</label>
                <input class="py-[10px] px-[20px] w-full border-[1px] border-solid border-[#EEE] rounded" type="text" />
            </div>

            <!-- Payment Method -->
            <p class="text-2xl font-bold border-b-[1px] border-solid border-[#EEE] pb-4 mb-[20px] mt-[50px]">付款方式</p>
            <div class="flex mb-[50px]">
                <div class="ditto-custom-radioBtn group active
                flex items-center
                relative px-[30px] py-[20px] mr-[20px] rounded border-[1px] border-solid border-[#EEE] overflow-hidden
                [&.active]:text-[#EBA000] [&.active]:border-[#EBA000]">
                    <img class="w-[25px] group-[&.active]:hidden" src="/images/template/shopping-cart-1/cash.png" />
                    <img class="w-[25px] group-[&.active]:block hidden" src="/images/template/shopping-cart-1/cash-active.png" />
                    <p class="ml-3">現金支付</p>
                    <input type="radio" name="payment_method" checked class="absolute left-0 top-0 h-full w-full z-10 opacity-0 cursor-pointer" />
                </div>
                <div class="ditto-custom-radioBtn group
                flex items-center
                relative px-[30px] py-[20px] mr-[20px] rounded border-[1px] border-solid border-[#EEE] overflow-hidden
                [&.active]:text-[#EBA000] [&.active]:border-[#EBA000]">
                    <!--<button class="px-[20px] py-[30px] rounded border-[1px] border-solid border-[#EEE] active:text-[#EBA000] active:border-[#EBA000] active">送貨</button>-->
                    <img class="w-[17px] group-[&.active]:hidden" src="/images/template/shopping-cart-1/bank-building.png" />
                    <img class="w-[17px] group-[&.active]:block hidden" src="/images/template/shopping-cart-1/bank-building-active.png" />
                    <p class="ml-3">銀行轉帳</p>
                    <input type="radio" name="payment_method" class="absolute left-0 top-0 h-full w-full z-10 opacity-0 cursor-pointer" />
                </div>
            </div>

            <button class="py-[10px] px-[20px] bg-black w-full max-w-[350px] font-bold text-LG text-white text-center"
            onClick="
                document.querySelector('.checkout-area').classList.add('active');
                document.querySelector('.preview-area').classList.remove('active');
            ">提交</button>    
        </form>
        <div class="px-[30px] py-[30px] w-[calc(28%-15px)] bg-white border-[1px] border-solid border-[#EEE] margin-auto">
            <p class="font-bold mb-[20px] pb-[15px]" style="border-bottom:1px solid #eee">訂單摘要</p>
            <div class="flex justify-between mb-[10px]">
                <p>小計</p>
                <p>$100</p>
            </div>
            <div class="flex justify-between mb-[10px]">
                <p>運費</p>
                <p>-</p>
            </div>
            <div class="flex justify-between mb-[10px]">
                <p>折扣</p>
                <p>-</p>
            </div>
            <div class="flex justify-between mb-[30px]">
                <p class="font-bold">總值</p>
                <p class="font-bold">$100</p>
            </div> 
        </div>
    </div>
</section>