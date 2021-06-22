
@section('btn_style')
    <div class="style_btn">
                <button class="btn">
                    curent series
                </button>
            </div>
@endsection
@section('card_section')

    <div class="container_card_style max_container">
        @foreach($comics_List as $comic)
            <div class="card">
                <div class="img_card">
                    <a href="{{ route('pagina_singola') }}"><img src="{{ $comic['thumb'] }}" alt=""></a>
                </div>
                <div class="title_card">
                    <h5>{{ $comic['series']}}</h5>
                </div>
            </div>
        @endforeach
    </div>
    <div class="container_load_btn">
            <div >
                <a href="#" >
                    load more
                </a>  
            </div>
    </div>            
@endsection