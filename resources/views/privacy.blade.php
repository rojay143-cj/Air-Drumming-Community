@extends('components.layout')
@section('title', 'Privacy Policy - Air+ Community')
@section('body')
@include('sections.about_page.header')
<section class="bg-[url('{{asset('Assets/01_Home_Page/Home_Section_1/Galaxy_Background.jpg')}}')] bg-no-repeat bg-cover bg-center w-full h-full relative">
    <div class="absolute bg-[#1C0949] bg-opacity-65 z-20 w-full h-full top-0 left-0"></div>
    <div class="flex flex-col gap-7 w-[80%] xl:w-[63%] mx-auto py-40 text-white relative z-40">
        <div class="flex flex-col">
            <h4 class="roboto font-[700] xl:text-[24px] lg:text-[20px] text-[16px]">Privacy  Policy</h4>
            <p class="roboto font-[400] leading-[23.44px] text-left mt-3 text-[18px] xl:text-[20px]">This privacy policy applies to the AIR DRUMMING app (hereby referred to as "Application") on your mobile devices and on our website https://www.airdrumming.sg (hereby referred to as “Website”) that was created by A.I.R TECHNOLOGY PTE. LTD. (hereby referred to as "Service Provider") as a Free service. This service is intended for use "AS IS". It also applies to our Marketing and Advertising activities across all platforms and services that we will provide to you including campaigns with brands and influencers, customer support, social media and other community channels that we may operate from time to time.</p>
        </div>
        <div class="flex flex-col roboto font-[400] leading-[23.44px] text-left text-[18px] xl:text-[20px]">
            <h4 class="roboto font-[700] xl:text-[24px] lg:text-[20px] text-[16px]">Information Collection and Use</h4>
            <p class="mt-5">The Application collects information when you download and use it. This information may include information such as </p>
            <ul class="mt-5 list-disc leading-[23.44px]">
                <li class="ml-10">Your device's Internet Protocol address (e.g. IP address)</li>
                <li class="ml-10">The pages of the Application that you visit, the time and date of your visit, the time spent on those pages</li>
                <li class="ml-10">The time spent on the Application</li>
                <li class="ml-10">The operating system you use on your mobile device</li>
            </ul>
            <p class="mt-5">The Application collects your device's location, which helps the Service Provider determine your approximate geographical location and make use of in below ways: </p>
            <ul class="mt-5 list-disc leading-[23.44px]">
                <li class="ml-10">Geolocation Services: The Service Provider utilizes location data to provide features such as personalized content, relevant recommendations, and location-based services.</li>
                <li class="ml-10">Analytics and Improvements: Aggregated and anonymized location data helps the Service Provider to analyze user behavior, identify trends, and improve the overall performance and functionality of the Application.</li>
                <li class="ml-10">Third-Party Services: Periodically, the Service Provider may transmit anonymized location data to external services. These services assist them in enhancing the Application and optimizing their offerings.</li>
            </ul>
            <p class="leading-[23.44px] mt-5">
                The Service Provider may use the information you provided to contact you from time to time to provide important information, including required notices, preventing fraud, optimizing user experience, customizing in-game offers, verifying in-game purchases and marketing promotions.
            </p>
            <p class="leading-[23.44px] mt-5">
                For a better experience, while using the Application, the Service Provider may require you to provide us with certain personally identifiable information, including but not limited to Email, User Id. The information that the Service Provider request will be retained by them and used as described in this privacy policy
            </p>
        </div>
        <div class="flex flex-col roboto font-[400] leading-[23.44px] text-left text-[18px] xl:text-[20px]">
            <h4 class="roboto font-[700] xl:text-[24px] lg:text-[20px] text-[16px]">Third Party Access</h4>
            <p class="mt-5">Only aggregated, anonymized data is periodically transmitted to external services to aid the Service Provider in improving the Application and their service. The Service Provider may share your information with third parties in the ways that are described in this privacy statement.</p>
            <p class="mt-5">Please note that the Application utilizes third-party services that have their own Privacy Policy about handling data. Below are the links to the Privacy Policy of the third-party service providers used by the Application: </p>
            <ul class="mt-5 list-disc leading-[23.44px]">
                <li class="ml-10">Google Play Services </li>
                <li class="ml-10">Facebook</li>
                <li class="ml-10">Unity</li>
            </ul>
            <p class="leading-[23.44px] mt-5">The Service Provider may disclose User Provided and Automatically Collected Information: </p>
            <ul class="mt-5 list-disc leading-[23.44px]">
                <li class="ml-10">as required by law, such as to comply with a subpoena, or similar legal process;</li>
                <li class="ml-10">when they believe in good faith that disclosure is necessary to protect their rights, protect your safety or the safety of others, investigate fraud, or respond to a government request;</li>
                <li class="ml-10">with their trusted services providers who work on their behalf, do not have an independent use of the information we disclose to them, and have agreed to adhere to the rules set forth in this privacy statement.</li>
            </ul>
        </div>
        <div class="flex flex-col roboto font-[400] leading-[23.44px] text-left text-[18px] xl:text-[20px]">
            <h4 class="roboto font-[700] xl:text-[24px] lg:text-[20px] text-[16px]">Marketing</h4>
            <p class="mt-5">Where we record your preferences as permitting us to do so, we and our third-party partners use information collected about you to send you marketing communications about our Application and other services based on your interests. For example, we will send emails, serve ads within our services or place ads on third party websites, apps and Internet-connected devices. We will use the information that we hold about you to promote our Application and other Services. This might include: </p>
            <ul class="mt-5 list-disc">
                <li class="ml-10">advertising within third party websites, apps and Internet-connect devices; </li>
                <li class="ml-10">showing you promotions for brand-related campaigns and activities; </li>
                <li class="ml-10">sending you marketing materials by email.</li>
            </ul>
        </div>
        <div class="flex flex-col roboto font-[400] leading-[23.44px] text-left text-[18px] xl:text-[20px]">
            <h4 class="roboto font-[700] xl:text-[24px] lg:text-[20px] text-[16px]">Advertising</h4>
            <p class="mt-5">Our Application include advertising for third party products and services. The Service Provider and partners collect and use information about you to improve advertising, targeting and measurement systems so that we can show you relevant third party ads in our Application.</p>
        </div>
        <div class="flex flex-col roboto font-[400] leading-[23.44px] text-left text-[18px] xl:text-[20px]">
            <h4 class="roboto font-[700] xl:text-[24px] lg:text-[20px] text-[16px]">Opt-Out Rights</h4>
            <p class="mt-5">You can stop all collection of information by the Application easily by uninstalling it. You may use the standard uninstall processes as may be available as part of your mobile device or via the mobile application marketplace or network.</p>
        </div>
        <div class="flex flex-col roboto font-[400] leading-[23.44px] text-left text-[18px] xl:text-[20px]">
            <h4 class="roboto font-[700] xl:text-[24px] lg:text-[20px] text-[16px]">Data Retention Policy</h4>
            <p class="mt-5">The Service Provider will retain User Provided data for as long as you use the Application and for a reasonable time thereafter. If you'd like them to delete User Provided Data that you have provided via the Application, please contact them at airdrumming@airtech.sg and they will respond in a reasonable time.</p>
        </div>
        <div class="flex flex-col roboto font-[400] leading-[23.44px] text-left text-[18px] xl:text-[20px]">
            <h4 class="roboto font-[700] xl:text-[24px] lg:text-[20px] text-[16px]">Children</h4>
            <p class="mt-5">The Service Provider does not use the Application to knowingly solicit data from or market to children under the age of 13.</p>
            <p class="mt-5">The Application does not address anyone under the age of 13. The Service Provider does not knowingly collect personally identifiable information from or direct interest-based advertising to children under 13 years of age. In the case the Service Provider discover that a child under 13 has provided personal information, the Service Provider will immediately delete this from their servers. If you are a parent or guardian and you are aware that your child has provided us with personal information, please contact the Service Provider (airdrumming@airtech.sg) so that they will be able to take the necessary actions.</p>
        </div>
        <div class="flex flex-col roboto font-[400] leading-[23.44px] text-left text-[18px] xl:text-[20px]">
            <h4 class="roboto font-[700] xl:text-[24px] lg:text-[20px] text-[16px]">Security</h4>
            <p class="mt-5">The Service Provider is concerned about safeguarding the confidentiality of your information. The Service Provider provides physical, electronic, and procedural safeguards to protect information the Service Provider processes and maintains.</p>
        </div>
        <div class="flex flex-col roboto font-[400] leading-[23.44px] text-left text-[18px] xl:text-[20px]">
            <h4 class="roboto font-[700] xl:text-[24px] lg:text-[20px] text-[16px]">Changes</h4>
            <p class="mt-5">This Privacy Policy may be updated from time to time for any reason. The Service Provider will notify you of any changes to the Privacy Policy by updating this page with the new Privacy Policy. You are advised to consult this Privacy Policy regularly for any changes, as continued use is deemed approval of all changes.</p>
            <p class="mt-5">This privacy policy is effective as of 2024-06-28</p>
        </div>
        <div class="flex flex-col roboto font-[400] leading-[23.44px] text-left text-[18px] xl:text-[20px]">
            <h4 class="roboto font-[700] xl:text-[24px] lg:text-[20px] text-[16px]">Your Consent</h4>
            <p class="mt-5">When you download, access and/or play our Application, or interact with our Website or other services you give consent to the collection and use of your information in accordance with this Privacy Policy, including Air Drumming’s and our advertising partners’ use of your data for targeted advertising purposes. If you have any concerns about providing information to us, or it being used as described in this Privacy Policy, you should not use our Application.</p>
        </div>
        <div class="flex flex-col roboto font-[400] leading-[23.44px] text-left text-[18px] xl:text-[20px]">
            <h4 class="roboto font-[700] xl:text-[24px] lg:text-[20px] text-[16px]">Contact Us</h4>
            <p class="mt-5">If you have any questions regarding privacy while using the Application, or have questions about the practices, please contact the Service Provider via email at airdrumming@airtech.sg.</p>
            <p class="mt-5">This privacy policy page was updated by A.I.R Technology Pte Ltd.</p>
        </div>
    </div>
</section>
@include('sections.about_page.section_05')
@endsection
