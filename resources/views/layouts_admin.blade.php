<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
        name="viewport">
    <title>admin.com</title>
    <!--favicon-->
    <link rel="icon" href="{{ asset('public/admin/img/avatar/avatar1.webp') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('public/admin/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/admin/modules/ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('public/admin/modules/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/admin/modules/summernote/summernote-lite.css') }}">
    <link rel="stylesheet" href="{{ asset('public/admin/modules/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{asset('public/admin/css/style-responsive.css')}}" />
    <link rel="stylesheet" href="{{ asset('public/admin/css/style.css') }}">

</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            {{-- navbar --}}
            @include('pages_admin.navbar_admin')
            {{-- Sidebar --}}
            @include('pages_admin.sidebar_admin')
            {{-- Content --}}
            @yield('content')
            {{-- footer --}}
            @include('pages_admin.footer_admin')
        </div>
    </div>
    <script src="{{ asset('public/admin/modules/jquery.min.js') }}"></script>
    <script src="{{ asset('public/admin/modules/popper.js') }}"></script>
    <script src="{{ asset('public/admin/modules/tooltip.js') }}"></script>
    <script src="{{ asset('public/admin/modules/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/admin/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('public/admin/modules/scroll-up-bar/dist/scroll-up-bar.min.js') }}"></script>
    <script src="{{ asset('public/admin/modules/js/sa-functions.js') }}"></script>
    <script src="{{ asset('public/admin/modules/chart.min.js') }}"></script>
    <script src="{{ asset('public/admin/modules/summernote/summernote-lite.js') }}"></script>
    <script>
        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                datasets: [{
                    label: 'Statistics',
                    data: [460, 458, 330, 502, 430, 610, 488],
                    borderWidth: 2,
                    backgroundColor: 'rgb(87,75,144)',
                    borderColor: 'rgb(87,75,144)',
                    borderWidth: 2.5,
                    pointBackgroundColor: '#ffffff',
                    pointRadius: 4
                }]
            },
            options: {
                legend: {
                    display: false
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                            stepSize: 150
                        }
                    }],
                    xAxes: [{
                        gridLines: {
                            display: false
                        }
                    }]
                },
            }
        });
    </script>

    <script src="{{ asset('public/admin/js/scripts.js') }}"></script>
    <script src="{{ asset('public/admin/js/custom.js') }}"></script>
</body>

</html>
