<!DOCTYPE html>
<html>

<head>
    <title>Tecnology Company - @yield("title")</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="{{asset('tamkeen-proj/assets/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('tamkeen-proj/assets/css/font-awesome.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('tamkeen-proj/assets/css/slick.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset('tamkeen-proj/assets/css/slick-theme.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset('tamkeen-proj/assets/css/animate.min.css')}}" />
        <link rel="stylesheet" href="{{asset('tamkeen-proj/assets/css/style.css')}}">

        @yield("css")
</head>

<body>

    @include("layouts.home.header")

    @yield("content")

    @include("layouts.home.footer")
    <script type="text/javascript" src="{{asset('tamkeen-proj/assets/js/jquery-3.5.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('tamkeen-proj/assets/js/bootstrap.js')}}"></script>
    <script type="text/javascript" src="{{asset('tamkeen-proj/assets/js/slick.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('tamkeen-proj/assets/js/count-up.js')}}"></script>
    <script type="text/javascript" src="{{asset('tamkeen-proj/assets/js/custom.js')}}"></script>
    <script>
    var cu = new counterUp({
        start: 0,
        duration: 3000,
        intvalues: true,
        interval: 100,
    });
    cu.start();
    </script>
    @yield("js")

</body>

</html>