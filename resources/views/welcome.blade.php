<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- fontAwsome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>  @yield('')Welcome page comix </title>
  
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>
<body>
     @include('partials.homeHeader')
     @include('partials.homeMain')
     @include('partials.comers')

    <main class="">
       


        <section class="section_2 max_container">
             @yield('btn_style')
        </section>

        <section class="card_container">
            @yield('card_section')
        </section>

        <section class="section_3 ">
             @yield('commers')
        </section>
        
    </main>


     @include('partials.footer')
     
</body>
</html>



