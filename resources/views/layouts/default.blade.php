<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/nav_bar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media_responsive.css') }}">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}}
</head>
<body>

    @include('layouts.include.header')

    @section('main-content')
    <main>

    </main>
    @show

    @include('layouts.include.footer')


<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
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

    function myFunction(x) {
      var nav_bar_handle = document.querySelector('.navbar_class_handle');
      if (x.matches) { // If media query matches
        console.log("match");
        nav_bar_handle.classList.remove('navbar-expand-lg');
       
      } else {
        nav_bar_handle.classList.add('navbar-expand-lg');
        console.log("not match");
      
      }
    }

    var x = window.matchMedia("(max-width: 1199px)");
    console
    myFunction(x); // Call listener function at run time
    x.addListener(myFunction); // Attach listener function on state changes

    // $(document).on('click','.nav-link',function(event){
     
    //   // alert('hi');
    //   var get_active_index = $('.nav-link');
    //   var find_active_index = get_active_index.index($(this));
    //   console.log(find_active_index);
    //   var x_width = window.matchMedia("(max-width:1199px)");
      
    //   $('.nav-item').removeClass('active_bg');
    //   $('.nav-item:eq('+find_active_index+')').addClass('active_bg');

    //   //   window.location.href="/";
    // });
</script>

</body>
</html>
