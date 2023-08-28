<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>

    @include('layouts.include.header')

    @section('main-content')
    <main>

    </main>
    @show

    @include('layouts.include.footer')


    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    {{-- @section('script-tag')

    @show() --}}


<script>

    let valueDisplays = document.querySelectorAll(".num");
    let interval = 1000;
    valueDisplays.forEach((valueDisplay) => {
        let startvalue = 0;
        let endvalue = parseInt(valueDisplay.getAttribute("data-val"));
        let duration = Math.floor(interval / endvalue);
        let counter = setInterval(function () {
            startvalue += 1;
            valueDisplay.textContent = startvalue;
            if (startvalue == endvalue) {
                clearInterval(counter);
            }
        },duration);
    });
    </script>

</body>
</html>
