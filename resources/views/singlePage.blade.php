@extends('layouts/layout')
@section('title', 'Single Card')


@section('single_card')
 <div class=" max_container">
        @foreach($comics_List as $comic)
            <div class="">
                <div class="">
                    <img src="{{ $comic['thumb'] }}" alt="">
                </div>
                <div class="">
                    <h5>{{ $comic['series']}}</h5>
                </div>
            </div>
        @endforeach
    </div>
@endsection


@section('comers')

@endsection





