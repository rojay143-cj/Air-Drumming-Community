<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="air+community2024" content="{{csrf_token()}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
    <link rel="stylesheet" href="{{asset('Assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('Assets/css/media.css')}}">
    <title>@yield('title')</title>
    <style>
        ::-webkit-scrollbar {
          width: 5px;
        }

        ::-webkit-scrollbar-track {
          box-shadow: inset 0 0 5px rgb(28, 3, 31);
          border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb {
          background: #1C0949;
          border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
          background: #1c0949a1;
        }
        /* Background Images */
        .bg-headerImage {
            background-image: url('../Assets/01_Home_Page/Home_Section_1/Galaxy_Background.jpg');
        }
        .bg-body {
            background-image: url('../Assets/01_Home_Page/Home_Section_1/body.jpg');
        }

        .bg-homeSection3 {
            background-image: url('../Assets/01_Home_Page/Home_Section_3/section3.jpg');
        }

        .bg-homeSection4 {
            background-image: url('../Assets/01_Home_Page/Home_Section_4/drumming.jpg');
        }

        .bg-Event{
            background-image: url('../Assets/01_Home_Page/Home_Section_4/Event.png');
        }

        .bg-vector {
            background-image: url('../Assets/02_About Page/About_Section  1/vector.png');
        }

        .bg-phone1 {
            background-image: url('../Assets/02_About Page/About_Section  1/Phone_burstup_top.png');
        }

        .bg-phone2 {
            background-image: url('../Assets/02_About Page/About_Section  1/Phone_burstup_mid.png');
        }

        .bg-phone3 {
            background-image: url('../Assets/02_About Page/About_Section  1/Phone_burstup_base.png');
        }

        .bg-aboutPageWhat {
            background-image: url('../Assets/02_About Page/About_Section  2/whoweare.png');
        }

        .bg-aboutMilestones {
            background-image: url('../Assets/02_About Page/About_Section  2/universe.png');
        }

        .bg-aboutAIRCOM {
            background-image: url('../Assets/02_About Page/About_Section  4/section_04.png');
        }

        .bg-sevicesblueBackdrop {
            background-image: url('../Assets/03_Services Page/backdrop/universe.png');
        }

        .bg-aboutMilestone {
            background-image: url('../Assets/02_About Page/About_Section 3 Milestone/Milestone_BG.png');
        }

        .bg-sevicesblueBackdrop1 {
            background-image: url('../Assets/03_Services Page/school_back.webp');
        }

        .bg-servicesBackground {
            background-image: url('../Assets/03_Services Page/background.png');
        }
        </style>
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="body bg-body bg-top bg-no-repeat bg-cover bg-fixed text-gray-300 overflow-x-hidden overflow-y-scroll scroll-smooth tracking-wide min-w-[20rem]" style="background-position-y: 20%;">
    @yield('body')

    <script src="{{asset('Assets/js/animation.js')}}"></script>
    <script src="{{asset('Assets/js/feature.js')}}"></script>
</body>
</html>
