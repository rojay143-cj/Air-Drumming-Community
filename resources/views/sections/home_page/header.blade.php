<header class="relative z-50">
    <div id="parallax-bg" class="absolute top-0 left-0 w-full h-full overflow-hidden bg-none lg:bg-[url('{{asset('Assets/01_Home_Page/Home_Section_1/Galaxy_Background.jpg')}}')] bg-no-repeat bg-cover">
    </div>
    @include('sections.about_page.header')
    <div class="py-10 lg:py-0">
        <div id="Banner" class="relative bannerLogo z-20 mb-[30%] translate-y-[35%] w-[80%] md:w-[70%] lg:w-[63%] mx-auto">
            <div class="flex justify-center -translate-y-10 lg:translate-y-0 w-full lg:w-[37rem] mx-auto">
                <img src="{{ asset('Assets/Air Drumming Logo/AirDrumming_Logo-03.png') }}"
                    class="logoBanner w-full h-[12rem] sm:h-full object-cover" alt="Air Drumming">
            </div>
            <div id="bannerText"
                class="text-white text-center mx-auto -translate-y-12 roboto font-[400] text-[16px] md:text-[18px] w-[740px] leading-relaxed">
                <p class="">Air Drumming is a rhythmic exploration, a lifestyle statement, and a social movement,
                    that integrates users seamlessly across the mobile application, the physical experience, and their
                    connection with the larger communities.</p>
            </div>
            <div class="flex justify-center">
                <div class="flex flex-col md:flex-row justify-center gap-5">
                    <button id="btn_g-a" class="bg-black rounded-lg w-[272px] h-[67px]"><img
                            src="{{ asset('Assets/01_Home_Page/Home_Section_1/google.png') }}" alt=""
                            class="w-full h-full rounded-lg"></button>
                    <button id="btn_g-a" class="bg-black rounded-lg w-[272px] h-[67px]"><img
                            src="{{ asset('Assets/01_Home_Page/Home_Section_1/apple.png') }}" alt=""
                            class="w-full h-full rounded-lg"></button>
                </div>
            </div>
        </div>
        <div id="planets-container" class="absolute inset-0 h-[1117px] pointer-events-none overflow-x-hidden overflow-y-clip z-0">
            <!-- Planets -->
            <img src="{{ asset('Assets/01_Home_Page/Home_Section_1/AD_Mylocritas.png') }}" alt="" id="p1" class="planet planets absolute top-[20%] left-[17%] w-[138px] transition-opacity duration-500" data-speed="0.8">
            <img src="{{ asset('Assets/01_Home_Page/Home_Section_1/AD_Devorah.png') }}" alt="" id="p2" class="planet planets absolute top-[35%] left-[-15%] md:left-[-3%] lg:left-[5%] w-[123.75px] lg:w-[220px] transition-opacity duration-500" data-speed="0.5">
            <img src="{{ asset('Assets/01_Home_Page/Home_Section_1/AD_Aurelia.png') }}" alt="" id="p3" class="planet planets absolute top-[45%] md:top-[30%] right-[-25%] md:right-[-12%] lg:right-[-2%] w-[230.63px] lg:w-[360px] transition-opacity duration-500" data-speed="0.6">
            <img src="{{ asset('Assets/01_Home_Page/Home_Section_1/AD_Earth.png') }}" alt="" id="p4" class="planets absolute top-[65%] lg:top-[60%] left-0 md:left-[0%] lg:left-[10%] w-[207.13px] lg:w-[446px] transition-opacity duration-500" data-speed="0.3">
            <img src="{{ asset('Assets/01_Home_Page/Home_Section_1/AD_Comet_Asteroid.png') }}" alt="" id="p5" class="planet planets absolute top-[65%] lg:top-[60%] right-[-35%] md:right-[-15%] lg:right-[-5%] w-[554.63px] lg:w-[986px] transition-opacity duration-500" data-speed="0.3">
        </div>
    </div>
    @include('sections.home_page.section_01')
</header>
<script>
    $(document).ready(function() {
        const $parallaxBg = $('#parallax-bg');
        const $planets = $('.planet');

        // Configurable factors for movement
        const bgMovementFactor = 300; // Background movement sensitivity
        const planetMovementBase = 0.008; // Base movement for planets
        const planetMovementFactor = 0.1; // Additional movement scaling for planets
        const smoothingFactor = 0.1; // Smoothing for background movement
        const planetSmoothingFactor = 0.8; // Smoothing for planet movement
        const fadeStart = 500; // Height where planets start fading out
        const fadeEnd = 1024;
        let mouseY = 0;
        let scrollY = 0;
        let targetBgPositionY = 0;
        let currentBgPositionY = 0;
        let targetPlanetPositions = Array($planets.length).fill(0);
        let currentPlanetPositions = Array($planets.length).fill(0);

        function isScreenWidthLargeEnough() {
            return $(window).width() > 1025;
        }

        function onMouseMove(event) {
            mouseY = event.clientY;
            updateTargets();
        }

        function onScroll() {
            scrollY = $(window).scrollTop();
            // We no longer directly modify the background position on scroll.
            updateTargets();
        }

        function updateTargets() {
            if (!isScreenWidthLargeEnough()) {
                return;
            }

            const viewportHeight = $(window).height();
            const mouseRatio = mouseY / viewportHeight;

            // Apply background movement only based on mouseY, not on scroll.
            targetBgPositionY = (mouseRatio * -bgMovementFactor);

            $planets.each(function(index, planet) {
                const planetIntensity = planetMovementBase + ($planets.length - index - 1) * planetMovementFactor;
                targetPlanetPositions[index] = (mouseY - viewportHeight / 2 + scrollY) * planetIntensity;
                const planetTop = targetPlanetPositions[index];
                const opacity = calculateOpacity(planetTop);
                $(planet).css('opacity', opacity);
            });

            requestAnimationFrame(animateParallax);
        }

        function calculateOpacity(position) {
            if (position < fadeStart) return 1;
            if (position > fadeEnd) return 0;
            return 1 - (position - fadeStart) / (fadeEnd - fadeStart);
        }

        function animateParallax() {
            const bgDiff = targetBgPositionY - currentBgPositionY;
            currentBgPositionY += bgDiff * smoothingFactor;

            // Apply the background position only based on mouse movement
            $parallaxBg.css('background-position-y', `${currentBgPositionY}px`);

            $planets.each(function(index, planet) {
                const diff = targetPlanetPositions[index] - currentPlanetPositions[index];
                currentPlanetPositions[index] += diff * planetSmoothingFactor;
                $(planet).css('transform', `translateY(${currentPlanetPositions[index]}px)`);
            });

            requestAnimationFrame(animateParallax);
        }

        function initAnimation() {
            if (isScreenWidthLargeEnough()) {
                $(document).on('mousemove', onMouseMove);
                $(document).on('scroll', onScroll);
                animateParallax();
            }
        }

        function stopAnimation() {
            $(document).off('mousemove', onMouseMove);
            $(document).off('scroll', onScroll);
            $parallaxBg.css('background-position-y', '');
            $planets.each(function() {
                $(this).css('transform', '');
            });
        }

        initAnimation();

        $(window).resize(function() {
            if (isScreenWidthLargeEnough()) {
                initAnimation();
            } else {
                stopAnimation();
            }
        });
    });
</script>
