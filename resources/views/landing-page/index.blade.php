<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <link href="{{ asset('css/landing-page.css') }}" rel="stylesheet">

    <!-- Swipper CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Tailwind Styles -->
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}" />

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- AOS Styles -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link href="{{ asset('NiceAdmin/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('NiceAdmin/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('NiceAdmin/assets/css/style.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
</head>

<body class="antialiased">

    @include('landing-page/section-one')
    @include('landing-page/section-two')
    @include('landing-page/section-three')
    @include('landing-page/section-four')
    @include('landing-page/section-five')
    @include('landing-page/section-six')


    <script>
        // Set the date we're counting down to (replace with your target date)
        var countDownDate = new Date("Jan 31, 2024 00:00:00").getTime();

        // Update the countdown every 1 second
        var countdownInterval = setInterval(function() {
            // Get the current date and time
            var now = new Date().getTime();

            // Calculate the remaining time
            var distance = countDownDate - now;

            // Calculate days, hours, minutes, and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Update the HTML with the new values
            document.getElementById("days").innerHTML = "<span>" + days + "</span> Days";
            document.getElementById("hours").innerHTML = "<span>" + hours + "</span> Hours";
            document.getElementById("minutes").innerHTML = "<span>" + minutes + "</span> Minutes";
            document.getElementById("seconds").innerHTML = "<span>" + seconds + "</span> Seconds";

            // If the countdown is over, display a message
            if (distance < 0) {
                clearInterval(countdownInterval);
                document.getElementById("countdown").innerHTML = "EXPIRED";
            }
        }, 1000); // Update every 1000 milliseconds (1 second)
    </script>
    <!-- Swipper CDN & Custom -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // And if we need scrollbar
            /*             scrollbar: {
                            el: '.swiper-scrollbar',
                        }, */
        });
    </script>
    <!-- AOS CDN & Custom -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>


    <script>
        var map = L.map('map').setView([5.9765, 116.1157], 13); // Latitude, Longitude, Zoom level


        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);


        var marker = L.marker([5.9765, 116.1157]).addTo(map);

        var circle = L.circle([5.9765, 116.1157], {
            color: 'red',
            fillColor: '#f03',
            fillOpacity: 0.5,
            radius: 1500
        }).addTo(map);

        marker.bindPopup("<b>Hello world!</b><br>I am a popup.").openPopup();
        circle.bindPopup("I am a circle.");
        polygon.bindPopup("I am a polygon.");
    </script>

</body>

</html>
