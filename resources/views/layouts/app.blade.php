<!DOCTYPE html>
<html>
    <head>
        <title>Website</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>

    <body>
    @include('inc.navbar')

    <div class="container" >
        @if(Request::is('/'))
        @include('showcase.show')
        @endif

         <div class="row">
         <div class="col-md-8 col-lg-8">
             @yield('content')

             @include('inc.message')

         </div>


        <div class="col-md-4 col-lg-4">

            @include('inc.sidebar')

        </div>
        </div>
        <footer class="text-center">Copyright 2019 &copy; Laravel</footer>
    </div>






    </body>
</html>
