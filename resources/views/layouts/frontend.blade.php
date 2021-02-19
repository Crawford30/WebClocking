<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Web Clocking</title>

    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <link
    rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    />
    <link
    href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,700;1,700&display=swap"
    rel="stylesheet"
    />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" > 
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
</head>



<body class="body">

    <!-- Header/nav -->
    <div class="custom-navbar">
       @include('layouts.includes.front-navbar')
   </div>
   


   <!-- Main content -->
   <!-- <main>
    @yield('content')
</main> -->

<div class="middle-container">

    <h6>{{date('H:i')}} Hrs</h6>

     <h6>{{date('D,d/M/y')}}</h6>

    
</div>


<!-- footer -->
@include('layouts.includes.front-footer')


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>

</html>
