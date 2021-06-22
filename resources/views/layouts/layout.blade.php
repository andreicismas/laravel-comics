<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- fontAwsome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>  @yield('title') </title>
  
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>
<body>
     @include('partials.homeHeader')
     @include('partials.comers')

    <main>
    <div>
    @yield('single_card')
    </div>
    
    <div>
    @yield('comers')
    </div>
    </main>
    


     @include('partials.footer')
     
</body>
</html>



