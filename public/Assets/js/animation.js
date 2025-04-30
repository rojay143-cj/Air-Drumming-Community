$(document).ready(function() {
    var prevScrollpos = $(window).scrollTop();

    $(window).scroll(function() {
        var currentScrollPos = $(window).scrollTop();

        if (prevScrollpos < currentScrollPos) {
            $("#navBar").css("top", "-100px");
            $("#menu_burger").slideUp();
        } else {
            $("#navBar").css("top", "0");
        }

        prevScrollpos = currentScrollPos;
    });
});

$(document).ready(function () {
    $("#btn_burger").on("click", function () {
        if ($("#menu_burger").is(":visible")) {
            $("#menu_burger").slideUp();
        } else {
            $("#menu_burger").slideDown();
        }
    });
});

$(document).ready(function () {
    const Observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            const target = entry.target;
            const isIntersecting = entry.isIntersecting;

            const classMap = {
                'right': 'rightshow',
                'left': 'leftshow',
                'top': 'topshow',
                'bottom': 'bottomshow',
                'scale1': 'scale1show',
                'phone1': 'phoneShow',
                'phone2': 'phoneShow2',
                'fadeRight': 'faderightShow',
                'fadeRight2': 'faderightShow2',
                'fade': 'fadeShow',
            };

            Object.keys(classMap).forEach((cls) => {
                if (target.classList.contains(cls)) {
                    const action = isIntersecting ? 'add' : 'remove';
                    target.classList[action](classMap[cls]);
                }
            });
        });
    });

    const elements = [
        '.phone1', '.phone2', '.right', '.left', '.top', '.bottom', '.scale1', '.fadeRight','.fadeRight2','.fade'
    ];

    elements.forEach((selector) => {
        document.querySelectorAll(selector).forEach((el) => Observer.observe(el));
    });
});


$(document).ready(function () {
    let lastScrollY = 0;

    function isScreenWidthLargeEnough() {
        return window.innerWidth <= 1024;
    }

    document.addEventListener("scroll", function () {
        if (!isScreenWidthLargeEnough()) {
            return;
        }

        const scrollY = window.scrollY;
        const planets = document.querySelectorAll(".planets");

        window.requestAnimationFrame(() => {
            planets.forEach(planet => {
                const speed = planet.dataset.speed || 0.2;
                planet.style.transition = "transform 0.1s ease-out";
                planet.style.transform = `translateY(${scrollY * speed}px)`;
            });
        });

        if (Math.abs(scrollY - lastScrollY) > 5) {
            lastScrollY = scrollY;
        }
    });

    window.addEventListener('resize', function() {
        if (!isScreenWidthLargeEnough()) {
        }
    });
});


// About Us
//section 2
$(document).ready(function () {
    const planets = $(".small_planets .tab");

    planets.on("click", function () {
        const index = $(this).index();
        planets.removeClass('scale-up');
        $(this).toggleClass('scale-up');
        $('.tab span').fadeOut();
        $('.tab .year').fadeOut();
        $('.tab span').eq(index).fadeIn();
        $('.tab .year').eq(index).fadeIn();
        switch (index) {
            case 7:
                $('.small_planets').css('transform', 'translateX(0%)');
                break;
            case 6:
                $('.small_planets').css('transform', 'translateX(15%)');
                break;
            case 5:
                $('.small_planets').css('transform', 'translateX(25%)');
                break;
            case 4:
                $('.small_planets').css('transform', 'translateX(35%)');
                break;
            case 3:
                $('.small_planets').css('transform', 'translateX(45%)');
                break;
            case 2:
                $('.small_planets').css('transform', 'translateX(55%)');
                break;
            case 1:
                $('.small_planets').css('transform', 'translateX(65%)');
                break;
            case 0:
                $('.small_planets').css('transform', 'translateX(65%)');
                break;
            default:
                break;
        }
        // Apply rotation for all orbits based on the clicked index
        switch (index) {
            case 0:
                $('.orbit1').css('transform', 'rotate(620deg)');
                $('.orbit2').css('transform', 'rotate(1120deg)');
                $('.orbit3').css('transform', 'rotate(920deg)');
                $('.orbit4').css('transform', 'rotate(1020deg)');
                $('.c2014').removeClass('hidden');
                $('.c2015').addClass('hidden');
                $('.c2017').addClass('hidden');
                $('.c2019').addClass('hidden');
                $('.c2021').addClass('hidden');
                $('.c2022').addClass('hidden');
                $('.c2023').addClass('hidden');
                $('.c2024').addClass('hidden');
                break;
            case 1:
                $('.orbit1').css('transform', 'rotate(540deg)');
                $('.orbit2').css('transform', 'rotate(970deg)');
                $('.orbit3').css('transform', 'rotate(740deg)');
                $('.orbit4').css('transform', 'rotate(880deg)');
                $('.c2014').addClass('hidden');
                $('.c2015').removeClass('hidden');
                $('.c2017').addClass('hidden');
                $('.c2019').addClass('hidden');
                $('.c2021').addClass('hidden');
                $('.c2022').addClass('hidden');
                $('.c2023').addClass('hidden');
                $('.c2024').addClass('hidden');
                break;
            case 2:
                $('.orbit1').css('transform', 'rotate(460deg)');
                $('.orbit2').css('transform', 'rotate(820deg)');
                $('.orbit3').css('transform', 'rotate(560deg)');
                $('.orbit4').css('transform', 'rotate(740deg)');
                $('.c2014').addClass('hidden');
                $('.c2015').addClass('hidden');
                $('.c2017').removeClass('hidden');
                $('.c2019').addClass('hidden');
                $('.c2021').addClass('hidden');
                $('.c2022').addClass('hidden');
                $('.c2023').addClass('hidden');
                $('.c2024').addClass('hidden');
                break;
            case 3:
                $('.orbit1').css('transform', 'rotate(380deg)');
                $('.orbit2').css('transform', 'rotate(670deg)');
                $('.orbit3').css('transform', 'rotate(480deg)');
                $('.orbit4').css('transform', 'rotate(580deg)');
                $('.c2014').addClass('hidden');
                $('.c2015').addClass('hidden');
                $('.c2017').addClass('hidden');
                $('.c2019').removeClass('hidden');
                $('.c2021').addClass('hidden');
                $('.c2022').addClass('hidden');
                $('.c2023').addClass('hidden');
                $('.c2024').addClass('hidden');
                break;
            case 4:
                $('.orbit1').css('transform', 'rotate(300deg)');
                $('.orbit2').css('transform', 'rotate(520deg)');
                $('.orbit3').css('transform', 'rotate(380deg)');
                $('.orbit4').css('transform', 'rotate(420deg)');
                $('.c2014').addClass('hidden');
                $('.c2015').addClass('hidden');
                $('.c2017').addClass('hidden');
                $('.c2019').addClass('hidden');
                $('.c2021').removeClass('hidden');
                $('.c2022').addClass('hidden');
                $('.c2023').addClass('hidden');
                $('.c2024').addClass('hidden');
                break;
            case 5:
                $('.orbit1').css('transform', 'rotate(220deg)');
                $('.orbit2').css('transform', 'rotate(370deg)');
                $('.orbit3').css('transform', 'rotate(280deg)');
                $('.orbit4').css('transform', 'rotate(290deg)');
                $('.c2014').addClass('hidden');
                $('.c2015').addClass('hidden');
                $('.c2017').addClass('hidden');
                $('.c2019').addClass('hidden');
                $('.c2021').addClass('hidden');
                $('.c2022').removeClass('hidden');
                $('.c2023').addClass('hidden');
                $('.c2024').addClass('hidden');
                break;
            case 6:
                $('.orbit1').css('transform', 'rotate(140deg)');
                $('.orbit2').css('transform', 'rotate(220deg)');
                $('.orbit3').css('transform', 'rotate(140deg)');
                $('.orbit4').css('transform', 'rotate(260deg)');
                $('.c2014').addClass('hidden');
                $('.c2015').addClass('hidden');
                $('.c2017').addClass('hidden');
                $('.c2019').addClass('hidden');
                $('.c2021').addClass('hidden');
                $('.c2022').addClass('hidden');
                $('.c2023').removeClass('hidden');
                $('.c2024').addClass('hidden');
                break;
            case 7:
                $('.orbit1').css('transform', 'rotate(60deg)');
                $('.orbit2').css('transform', 'rotate(70deg)');
                $('.orbit3').css('transform', 'rotate(30deg)');
                $('.orbit4').css('transform', 'rotate(80deg)');
                $('.c2014').addClass('hidden');
                $('.c2015').addClass('hidden');
                $('.c2017').addClass('hidden');
                $('.c2019').addClass('hidden');
                $('.c2021').addClass('hidden');
                $('.c2022').addClass('hidden');
                $('.c2023').addClass('hidden');
                $('.c2024').removeClass('hidden');
                break;
            default:
                $('.orbit1, .orbit2, .orbit3, .orbit4').css('transform', 'rotate(0deg)');
            break;
        }
    });
});




$(document).ready(function () {
    // $('.services').empty();
    $('.services').on('click',function(){
        if ($(".service_sub_menu").is(":visible")) {
            $(".service_sub_menu").slideUp();
        } else {
            $(".service_sub_menu").slideDown();
        }
    });
    $('.services2').on('click',function(){
        if ($(".service_sub_menu2").is(":visible")) {
            $(".service_sub_menu2").slideUp();
        } else {
            $(".service_sub_menu2").slideDown();
        }
    });
});
