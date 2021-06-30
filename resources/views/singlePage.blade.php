@extends('layouts/layout')
@section('title', 'Single Card')


@section('single_card')
    <div class="blue_div">
    </div>
 <div class=" min_container">

        <div class="thumb_style">
            <img src="{{$comicSingle["thumb"]}}" alt="">
        </div>

        <div> 
            <h2 class="title_style">{{$comicSingle['title']}}</h2>
        </div>

        <div class="info_card">


            <div class="price_style">
            
                <div class="price">
                
                    <h4>U.S Price: <span>{{$comicSingle['price']}}</span></h4>
                    <h3>AVAILABLE</h3>
                
                    <select name="" id="" class="select_style">
                        <option value="Check Availability">Check Availability</option>
                        <option value="Check Availability">Not Availabil</option>
                    </select>
                
                </div>
                <div class="description_style">
                    <p>
                        {{$comicSingle["description"] }}
                    </p>
                </div>
                
                
            </div>

            <div class="grow_div"></div>


            <div class="container_adv_style">

                    <h4>advertisement</h4>
                    <div class="img_adv">
                        <img src="{{ asset('images/adv.jpg') }}" alt="adv contest">
                    </div>
                
            </div>

        

        </div>


        </div>
       @dump($comicSingle)
    </div>
@endsection


@section('comers')

@endsection





