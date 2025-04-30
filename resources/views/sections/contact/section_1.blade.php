<section id="contactPage"
    class="w-full h-full relative z-40 bg-header bg-no-repeat bg-top bg-[length:100%] py-20 overflow-hidden">
    <div
        class="flex justify-between w-[80%] h-full xl:w-[63%] mx-auto lg:flex-nowrap flex-wrap-reverse relative py-0 md:py-40">
        <form action="{{ route('contact.send') }}" method="POST" id="form_contact"
            class="grid grid-cols-1 md:grid-cols-2 md:flex flex-col gap-3 relative z-40 flex-wrap w-full right duration-1000">
            @csrf
            <div class="flex flex-col w-full mb-1 roboto font-[400]">
                <label for="name" class="text-[14px] md:text-[16px] text-white">Name*</label>
                <input type="text" id="name" name="name" class="h-8 p-6 w-full text-[#07061C]"
                    placeholder="Your name">
            </div>
            <div class="flex flex-row gap-5 items-center w-full max-w-full flex-wrap md:flex-nowrap roboto font-[400]">
                <div class="flex flex-col w-full">
                    <label for="organization" class="text-[14px] md:text-[16px] text-white">Organization*</label>
                    <input type="text" name="organization" id="organization" class="h-8 p-6 w-full text-[#07061C]"
                        placeholder="Organization">
                </div>
                <div class="flex flex-col w-full">
                    <label for="inquiry" class="text-[14px] md:text-[16px] text-white">Type of Inquiry*</label>
                    <select name="inquiry" id="inquiry" class="h-12 px-5 w-full text-[#07061C]">
                        <option value="" disabled selected>Type of inquiry</option>
                        <option value="General Inquiry">General Inquiry</option>
                        <option value="Support">Support</option>
                        <option value="Sales">Sales</option>
                        <option value="User deletion">User deletion</option>
                    </select>
                </div>
            </div>
            <div class="flex flex-row gap-5 items-center w-full max-w-full flex-wrap md:flex-nowrap roboto font-[400]">
                <div class="flex flex-col w-full">
                    <label for="email" class="text-[14px] md:text-[16px] text-white">Email*</label>
                    <input type="text" name="email" id="email" class="h-8 p-6 w-full text-[#07061C]"
                        placeholder="Your email address">
                </div>
                <div class="flex flex-col w-full text-black">
                    <label for="number" class="text-[14px] md:text-[16px] text-white">Contact*</label>
                    <input type="text" name="number" id="number" class="h-8 p-6 w-full text-[#07061C]"
                        placeholder="Your contact number">
                </div>
            </div>
            <div class="flex flex-col roboto font-[400]">
                <label for="message" class="text-[14px] md:text-[16px] text-white">Message*</label>
                <textarea class="text-black px-5 py-5" name="message" id="message" cols="30" rows="8"
                    placeholder="What do you want to say..."></textarea>
            </div>
            <button type="button" name="send" id="btn_send" class="roboto font-[400] text-white text-xl text-center bg-blue-600 rounded-none md:rounded-lg mt-5 py-3">
                send
            </button>
            <div id="contact_msg" class="absolute -bottom-10 text-red-600 text-[14px] md:text-[16px] flex flex-col roboto font-[700] text-center"></div>
        </form>
        <div class="mb-10 md:mb-0 lg:mb-10 relative flex flex-row items-center justify-between lg:justify-center z-40 w-fit md:w-full lg:w-fit xl:w-[80%] translate-x-0 lg:translate-x-[4rem] xl:translate-x-[0rem]">
            <div
                class="text-white text-[14px] md:text-[16px] flex flex-col roboto font-[400] self-center md:self-end lg:self-start">
                <img src="{{ asset('Assets/06_Contact page/get in touch.png') }}" alt=""
                    class="h-5 md:h-7 w-32 md:w-52 fade duration-1000">
                <p class="text-wrap md:text-nowrap w-full mt-2 fade duration-1000">Let us know how can we help you.</p>
                <div class="absolute h-[30rem] w-[40rem] z-40 left-0 translate-x-[-8rem] bottom-0 translate-y-[6rem] hidden lg:block">
                    <img src="{{ asset('Assets/06_Contact page/Comet_01.png') }}" alt=""
                        class="w-[85%] xl:w-full h-full object-contain ml-[-2rem] xl:ml-[0rem] mt-[2rem] xl:mt-0 scale1 duration-1000">
                </div>
            </div>
            <img src="{{ asset('Assets/06_Contact page/Comet_02.png') }}" alt=""
                class="object-cover block lg:hidden h-36 md:h-96 object-left scale1 duration-1000">
            <img src="{{ asset('Assets/03_Services Page/backdrop/planet_service/2.png') }}" alt=""
                class="absolute right-0 md:right-[40%] top-[-4rem] md:top-[85%] w-7 md:w-12 block lg:hidden scale1 duration-1000 delay-[0.8s]">
            <img src="{{ asset('Assets/03_Services Page/backdrop/planet_service/3.png') }}" alt=""
                class="absolute left-0 md:left-[95%] top-[-4rem] md:top-[10%] w-5 md:w-7 block lg:hidden scale1 duration-1000 delay-[0.8s]">
            <img src="{{ asset('Assets/03_Services Page/backdrop/planet_service/4.png') }}" alt=""
                class="absolute right-[10rem] md:right-[83%] bottom-[-2rem] md:bottom-[20%] w-12 md:w-28 block lg:hidden scale1 duration-1000 delay-[0.8s]">
        </div>
        <img src="{{ asset('Assets/03_Services Page/backdrop/planet_service/3.png') }}" alt=""
            class="absolute right-[-5%] xl:right-0 top-[10%] xl:top-0 w-8 xl:w-12 hidden lg:block scale1 duration-1000 delay-[0.8s]">
        <img src="{{ asset('Assets/03_Services Page/backdrop/planet_service/2.png') }}" alt=""
            class="absolute left-[-10%] xl:left-[-10rem] w-14 xl:w-20 top-[24rem] hidden lg:block scale1 duration-1000 delay-[0.8s]">
        <img src="{{ asset('Assets/03_Services Page/backdrop/planet_service/4.png') }}" alt=""
            class="absolute right-[5%] xl:right-[-10rem] bottom-0 w-32 hidden lg:block scale1 duration-1000 delay-[0.8s]">
    </div>
    <div id="status" class="absolute top-0 w-full h-full"></div>
    @include('components.loadAnimation')
</section>
