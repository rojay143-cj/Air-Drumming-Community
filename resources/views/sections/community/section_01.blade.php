<section class="flex flex-col justify-center py-0 md:py-20 mt-20 md:mt-0 w-full xl:w-[63%] mx-auto h-full">
    <div class="my-10 text-center flex flex-col gap-5 fade duration-700">
        <h1 class="text-[24px] xl:text-[32px] futurefont">Air+ Community</h1>
        <p class="w-full md:w-[75%] xl:w-[95%] text-white font-[400] text-[16px] xl:text-[20px] roboto px-0 mx-auto leading-relaxed">Welcome to our Air+ Community - where our AIRbassadors (users), AIRtists (music creators), and AIR partners (brands) connect.</p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-5 w-fit mx-auto justify-center items-center relative">
        <div class="relative z-40">
            <img src="{{asset('Assets/05_Air Community Page/Illustration - Harmony Singing.png')}}" alt="" class="rounded-[2.25rem] w-[215px] h-[236px]  md:w-[364px] md:h-full hidden md:block scale1 duration-1000">
            <img src="{{asset('Assets/05_Air Community Page/mobile1.png')}}" alt="" class="rounded-[2.25rem] object-cover w-full h-full  md:w-[364px] md:h-full block md:hidden scale1 duration-1000">
            <img src="{{asset('Assets/03_Services Page/backdrop/planet_service/4.png')}}" alt="" class="absolute -top-5 -left-5 z-40 w-16 grow1 block md:hidden scale1 duration-1000 delay-[0.5s]">
        </div>
        <div class="relative z-40">
            <img src="{{asset('Assets/05_Air Community Page/Illustration - CometHolding A phone.png')}}" alt="" class="rounded-[2.25rem] w-[215px] h-[236px]  md:w-[364px] md:h-full object-contain hidden md:block scale1 duration-1000 delay-[0.3s]">
            <img src="{{asset('Assets/05_Air Community Page/mobile2.png')}}" alt="" class="rounded-[2.25rem] object-cover w-full h-full  md:w-[364px] md:h-full block md:hidden scale1 duration-1000 delay-[0.3s]">
            <img src="{{asset('Assets/03_Services Page/backdrop/planet_service/2.png')}}" alt="" class="absolute top-[20%] right-[-5%] w-8 block md:hidden delay-[0.5s]">
        </div>
        <div class="relative z-40">
            <img src="{{asset('Assets/05_Air Community Page/Community_AirPartner.png')}}" alt="" class="rounded-[2.25rem] w-[215px] h-[236px] md:w-[364px] md:h-full object-contain hidden md:block scale1 duration-1000 delay-[0.5s]">
            <img src="{{asset('Assets/05_Air Community Page/mobile3.png')}}" alt="" class="rounded-[2.25rem] object-cover w-full h-full md:w-[364px] md:h-full block md:hidden scale1 duration-1000 delay-[0.5s]">
            <img src="{{asset('Assets/03_Services Page/backdrop/planet_service/3.png')}}" alt="" class="absolute -bottom-7 -left-8 z-30 w-16 block md:hidden scale1 duration-1000 delay-[0.5s]">
        </div>
        {{-- pink --}}
        <img src="{{asset('Assets/03_Services Page/backdrop/planet_service/4.png')}}" alt="" class="absolute top-[200%] lg:top-[165%] xl:top-[-20%] left-[95%] xl:left-[-15%] z-40 w-14 lg:w-16 xl:w-10 scale1 duration-1000 delay-[0.8s]">
        {{-- green --}}
        <img src="{{asset('Assets/03_Services Page/backdrop/planet_service/2.png')}}" alt="" class="absolute top-[-70%] lg:top-[-45%] xl:top-[55%] right-[5%] lg:right-[10%] xl:right-[-15%] w-8 xl:w-14 scale1 duration-1000 delay-[0.8s]z-40">
        {{-- yellow --}}
        <img src="{{asset('Assets/03_Services Page/backdrop/planet_service/3.png')}}" alt="" class="absolute bottom-[-110%] lg:bottom-[-70%] xl:bottom-[-85%] left-[0%] lg:left-[5%] xl:left-[-10%] z-30 w-28 lg:w-36 scale1 duration-1000 delay-[0.8s]">
    </div>
    <div class="mt-10 flex flex-col gap-5 mb-5 relative z-40 mx-auto w-fit">
        <p class="w-full xl:w-[85%] text-white font-[400] text-[16px] xl:text-[20px] roboto text-center px-4 md:px-0 mx-auto leading-relaxed fade duration-700">Sign up for our Air Drumming mobile application to access the latest features, updates, and rewards!</p>
        <a href="{{route('contact')}}" class="md:text-[24px] text-[18px] p-5 py-3 md:py-6 bg-gradient-to-t from-[#C50E0E] to-[#FF8585] text-center w-[300px] lg:w-[26rem] mx-auto shadow-2xl hover:shadow-black scale1 duration-1000 delay-[0.5s]">
            Chat with us
        </a>
    </div>
</section>
