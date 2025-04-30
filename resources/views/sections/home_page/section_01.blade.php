<section id="section_1" class="h-full w-full relative mt-[20rem] lg:mt-[25rem] overflow-hidden bg-[#100D39] lg:bg-transparent">
    <div class="w-full flex justify-center relative">
        <!-- Planet Images -->
        <div data-aos="zoom-in" data-aos-delay="100" data-aos-duration="500" id="planetgreen" class="scale1 duration-1000 delay-[1000ms] hidden lg:block absolute w-[40px] left-28 top-20">
            <img src="{{ asset('Assets/Planets/Planet_Green.png') }}" alt="" class="hidden md:block">
        </div>
        <div data-aos="zoom-in" data-aos-delay="200" data-aos-duration="500" id="planetpink" class="scale1 duration-1000 delay-[1300ms] hidden lg:block absolute w-[120px] right-16 top-[30rem]">
            <img src="{{ asset('Assets/Planets/Planet_violet.png') }}" alt="" class="hidden md:block">
        </div>

        <!-- Main Grid -->
        <div id="homesec1" class="grid grid-col-3 gap-2 lg:gap-5 w-[90%] lg:w-[63%] py-10 sm:py-32">
            <!-- First Row -->
            <div id="boxwrap" class="flex flex-col sm:flex-row justify-evenly items-center gap-5 overflow-hidden">
                <div id="airdrummingLogo" data-aos="slide-right" data-aos-delay="100" data-aos-offset="50" class="right duration-[500ms] delay-[100ms] w-full h-full lg:h-[16rem] basis-[60%] bg-gradient-to-b from-[#0F2D80] to-[#1C0949] rounded-3xl mx-auto lg:mx-0">
                    <img src="{{ asset('Assets/Air Drumming Logo/AirDrumming_logo.svg') }}" class="w-full h-full" alt="">
                </div>
                <div id="airciting" data-aos="slide-down" data-aos-delay="150" data-aos-offset="50" class="top duration-[500ms] delay-[300ms] flex flex-col lg:flex-row justify-center items-center p-5 lg:p-0 px-5 lg:px-20 bg-gradient-to-b from-[#69FF97] to-[#00E4FF] rounded-3xl w-full h-full lg:h-[16rem]">
                    <div class="flex flex-col justify-center p-3 px-10">
                        <h4 id="aircitingh4" class="text-[#1C0949] uppercase text-[24px] lg:text-[36px] w-full lg:w-40 text-left futurefont text-nowrap lg:text-wrap">airciting features</h4>
                        <dd id="ddciting1" class="text-[#100D39] w-full font-[400] text-[14px] lg:text-[16px] hidden lg:block">Explore your <br> celestial adventure!</dd>
                        <dd id="ddciting2" class="text-[#100D39] w-full font-bold text-center text-[14px] lg:text-[16px] block lg:hidden text-nowrap">Explore your celestial adventure!</dd>
                    </div>
                    <img src="{{ asset('Assets/01_Home_Page/Home_Section_2/PhoneScene_01.png') }}" alt="" class="w-full h-full lg:w-[80%] lg:h-[80%]">
                </div>
            </div>

            <!-- Second Row -->
            <div id="boxwrap" class="flex flex-col sm:flex-row justify-evenly items-center gap-2 lg:gap-5 overflow-hidden">
                <div id="airciting" data-aos="slide-right" data-aos-delay="200" data-aos-offset="50" class="right duration-[500ms] delay-[100ms] flex flex-col lg:flex-row justify-center items-center p-5 lg:p-0 px-5 lg:px-20 bg-gradient-to-b from-[#FFF6B7] to-[#F6416C] rounded-3xl w-full h-full lg:h-[16rem]">
                    <div class="flex flex-col justify-center p-3 px-10">
                        <h4 id="aircitingh4" class="text-[#1C0949] uppercase text-[24px] lg:text-[36px] w-full lg:w-40 text-center lg:text-left futurefont text-nowrap lg:text-wrap">Star Tracks</h4>
                        <dd id="ddciting1" class="text-[#100D39] w-full font-[400] truncate text-[14px] lg:text-[16px] hidden lg:block">Drum N'Roll to your <br> all-time favorite songs!</dd>
                        <dd id="ddciting2" class="text-[#100D39] w-full font-[400] text-center text-[14px] lg:text-[16px] block lg:hidden text-nowrap">Drum N'Roll to your all-time favorite songs!</dd>
                    </div>
                    <img src="{{ asset('Assets/01_Home_Page/Home_Section_2/PhoneScene_02.png') }}" alt="" class="w-full h-full lg:w-[80%] lg:h-[80%]">
                </div>
                <div id="airdrummingLogo" data-aos="slide-left" data-aos-delay="250" data-aos-offset="50" class="left duration-[500ms] delay-[300ms] w-full h-full flex justify-center items-center lg:h-[16rem] basis-[60%] bg-gradient-to-br from-[#F5CBFF] to-[#C346C2] rounded-3xl mx-auto lg:mx-0">
                    <div class="font-[400] futurefont text-[32px] lg:text-[52px] text-left my-20">
                        <h4 class="leading-[1.2]">Feel D' <br> Cosmic <br> Beat</h4>
                    </div>
                </div>
            </div>

            <!-- Third Row -->
            <div id="boxwrap" class="flex flex-col sm:flex-row justify-evenly items-center gap-2 lg:gap-5 overflow-hidden">
                <div id="airdrummingLogo" data-aos="slide-up" data-aos-delay="300" data-aos-offset="50" class="bottom duration-[500ms] delay-[100ms] w-full h-full flex justify-center items-center lg:h-[16rem] basis-[60%] bg-gradient-to-b from-[#41E5BE] to-[#0C7034] rounded-3xl mx-auto lg:mx-0">
                    <div class="flex flex-row justify-center items-center gap-3 h-[11rem] md:h-full">
                        <h4 class="text-[24px] lg:text-[36px] font-[700] roboto">Learn More</h4>
                        <i class="fa-solid fa-arrow-right text-[36px]"></i>
                    </div>
                </div>
                <div id="airciting" data-aos="slide-left" data-aos-delay="350" data-aos-offset="50" class="left duration-[500ms] delay-[300ms] flex flex-col lg:flex-row justify-center items-center p-5 lg:p-0 px-5 lg:px-20 bg-gradient-to-tl from-[#5961F9] to-[#EE9AE5] rounded-3xl w-full h-full lg:h-[16rem]">
                    <div class="flex flex-col justify-center p-3 px-10">
                        <h4 id="aircitingh4" class="text-[#1C0949] uppercase text-[24px] lg:text-[36px] w-full lg:w-40 text-center lg:text-left futurefont text-nowrap lg:text-wrap">Drumplay</h4>
                        <dd id="ddciting1" class="text-[#100D39] w-full font-[400] text-[14px] truncate lg:text-[16px] hidden lg:block">Electrify the universe with <br> your best score!</dd>
                        <dd id="ddciting2" class="text-[#100D39] w-full font-[400] text-center text-[14px] lg:text-[16px] block lg:hidden text-nowrap">Electrify the universe with your best score!</dd>
                    </div>
                    <img src="{{ asset('Assets/01_Home_Page/Home_Section_2/PhoneScene_01.png') }}" alt="" class="w-full h-full lg:w-[80%] lg:h-[80%]">
                </div>
            </div>
        </div>
    </div>
</section>
