<a 
    class="absolute left-[5%] top-[5%] z-50"
    href="/index"   
>
    <img class="h-[43px]" src="/images/common/logo.png" alt="Booking" />
    <!--<span class="font-bold text-3xl" style="font-family: fantasy;">SUNWERKS</span>-->
</a>
<section class="flex items-center justify-center relative h-full w-full overflow-hidden">
    <div class="absolute left-0 top-0 h-full w-full blur-[6px] z-0 bg-cover scale-[1.1]" style="background-image:url('/images/template/login-1/bg.jpg')"></div>
    <div class="w-full max-w-[700px] z-10" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
        <div class="login-cate w-full px-[50px] py-[100px] bg-white text-center">
            <p class="font-bold text-3xl mb-[50px]">登入</p>
            <input class="w-full py-[10px] px-[20px] bg-gray-300 mb-[20px]" type="text" placeholder="登入名稱" >
            <input class="w-full py-[10px] px-[20px] bg-gray-300" type="password" placeholder="密碼" >
            <p class="mt-[10px] text-right cursor-pointer" onclick="
                document.querySelector('.forgot-password-cate').style.display='block';
                document.querySelector('.forgot-password-success-cate').style.display='none';
                document.querySelector('.login-cate').style.display='none';
            ">忘記密碼</p>
            <button class="bg-black text-white px-[20px] py-[10px] mt-[50px]">提交</button>
            <a href="register" class="text-black px-[20px] py-[10px] mt-[50px] ml-[10px]">註冊</a>
        </div>
        <div class="forgot-password-cate hidden w-full px-[50px] py-[100px] bg-white text-center">
            <p class="font-bold text-3xl mb-[50px]">忘記密碼</p>
            <input class="w-full py-[10px] px-[20px] bg-gray-300 mb-[20px]" type="text" placeholder="電子郵件" >
            <button class="bg-black text-white px-[20px] py-[10px] mt-[30px]" onclick="
                document.querySelector('.forgot-password-cate').style.display='none';
                document.querySelector('.forgot-password-success-cate').style.display='block';
                document.querySelector('.login-cate').style.display='none';
            ">提交</button>
            <a class="text-black px-[20px] py-[10px] mt-[50px] ml-[10px]"  onclick="
                document.querySelector('.forgot-password-cate').style.display='none';
                document.querySelector('.forgot-password-success-cate').style.display='none';
                document.querySelector('.login-cate').style.display='block';
            ">返回</a>
        </div>
        <div class="forgot-password-success-cate hidden w-full px-[50px] py-[100px] bg-white text-center">
            <p class="font-bold text-3xl mb-[50px]">找回密碼請求已提交</p>
            <p>
                我們已經收到了您的密碼重置請求。請檢查您注冊時提供的郵箱，我們已向您發送了一封包含重置密碼說明的電子郵件。
                <br><br>
                請打開您的郵箱，並點擊郵件中的鏈接以完成密碼重置流程。如果您未收到郵件，請檢查您的垃圾郵件文件夾或嘗試重新提交找回密碼請求。
                <br><br>
                感謝您的配合！
            </p>
            <button class="bg-black text-white px-[20px] py-[10px] mt-[50px]" onclick="
                document.querySelector('.forgot-password-cate').style.display='none';
                document.querySelector('.forgot-password-success-cate').style.display='none';
                document.querySelector('.login-cate').style.display='block';
            ">完成</button>
        </div>
    </div>
</section>