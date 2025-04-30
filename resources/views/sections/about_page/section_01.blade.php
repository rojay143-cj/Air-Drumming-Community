<section
    class="bg-[url('{{ asset('Assets/01_Home_Page/Home_Section_1/Galaxy_Background.jpg') }}')] bg-no-repeat bg-top bg-cover w-full h-full" style="background-position-y: 10%;">
    <div class="absolute top-0 left-0 w-full h-full bg-[#07061C] bg-opacity-50"></div>
    <div class="w-full max-w-[1870px] mx-auto">
        <div id="aboutsection1"
        class="translate-y-0 xl:translate-y-14 h-full xl:h-[917px] w-[80%] xl:w-[63%] mx-auto flex justify-center items-center gap-5 flex-wrap-reverse relative my-52 xl:my-0 mt-40 xl:mt-20 mb-0 xl:pb-0 pb-20">
        <div
            class="relative xl:absolute left-0 top-[15%] w-full lg:w-[80%] xl:w-[505px] flex flex-col mx-auto md:mx-auto mt-20 xl:mt-0 overflow-hidden">
            <div class="futurefont font-[400] text-[24px] xl:text-[36px] uppercase mb-5 w-52 md:w-full">
                <h4 class="fadeRight duration-[1000ms]">What is <br> Air drumming?</h4>
            </div>
            <div
                class="fadeRight2 duration-[1.5s] flex flex-col gap-5 tracking-widest text-[12px] sm:text-[14px] md:text-[16px] roboto text-white font-[400] leading-snug">
                <p>
                    Air is shapeless, formless, limitless - and we believe drumming can be too. We imagine a creative
                    expression with no obstacles, a language with no barriers, and a world with no one left behind.
                </p>
                <p>
                    Air Drumming is a rhythmic exploration, a lifestyle statement, and a social movement, that
                    integrates users seamlessly across the md application, the physical experience, and their
                    connection with the larger communities.
                </p>
                <p>
                    Air Drumming is part of A.I.R Technology, a newly founded gaming company that specialises in
                    developing rhythm-based md applications that bridge AI technology and reality to promote
                    inclusion among the communities.
                </p>
                <p>
                    We develop applications that are entertaining, educational, and inclusive.
                </p>
            </div>
        </div>
        <div id="phones"
            class="relative xl:absolute right-0 top-[20%] mx-auto translate-x-0 xl:translate-x-20 -translate-y-10 md:translate-y-5 xl:translate-y-0">
            <div class="flex flex-col">
                <div class="flex flex-col relative translate-y-[-2rem] md:-translate-y-36">
                    <div class="bg-phone1 w-[15rem] h-[15rem] md:w-[28rem] md:h-[25rem] bg-cover bg-center z-40 phone1"
                        style="background-size: 160%;background-position-y: 70%"></div>
                    <div class="absolute bg-phone2 w-[15rem] h-[15rem] md:w-[28rem] md:h-[25rem] bg-cover bg-center top-16 md:top-28 z-30 phone2"
                        style="background-size: 160%;background-position-y: 70%"></div>
                    <div class="absolute bg-phone3 w-[15rem] h-[15rem] md:w-[28rem] md:h-[25rem] bg-cover bg-center top-[7.8rem] md:top-[14rem]"
                        style="background-size: 155%;background-position-y: 70%"></div>
                </div>
                <img src="{{ asset('Assets/02_About Page/About_Section  1/vector.png') }}" alt=""
                    class="absolute -z-10 translate-x-[-10%] md:-translate-x-20 translate-y-10 md:-translate-y-10 h-full min-w-[20rem] md:min-w-[35rem]">
            </div>
            <div class="absolute right-0 top-0 md:-top-16 translate-x-0 md:-translate-x-16">
                <img src="{{ asset('Assets/Planets/Planet Red.png') }}" alt="" class="w-8 h-8 lg:w-12 lg:h-12 scale1 duration-1000 delay-[1000ms]">
            </div>
            <div class="scale1 duration-1000 delay-[1300ms] w-full">
                <img src="{{ asset('Assets/Planets/Planet_blue.png') }}" alt=""
                    class="w-16 h-16 md:w-24 md:h-24 absolute right-0 bottom-0 translate-y-36 md:translate-y-16 translate-x-10 md:translate-x-12">
            </div>
            <div class="scale1 duration-1000 delay-[1500ms] w-full">
                <img src="{{ asset('Assets/Planets/Planet_Green.png') }}" alt=""
                    class="w-10 h-10 md:w-16 md:h-16 absolute left-0 bottom-0 translate-y-10 md:-translate-y-8 -translate-x-14 md:-translate-x-10">
            </div>
        </div>
    </div>
    </div>
    <div class="block lg:hidden">
        @include('sections.about_page.section_02')
    </div>
</section>
