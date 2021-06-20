{{-- @extends('./welcome') --}}
@section('title', 'ciao')
<header>
<nav>
    <div class="section_nav_1">
        <div class="white_space">
        </div>
        
        <div>
            <ul>
                <li>
                    DC POWER&#8480; VISA&reg;
                </li>
                <li>
                    <a href="#">
                        ADDITIONAL DC SITES <span><i class="fa fa-sort-desc" aria-hidden="true"></i></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="section_nav_2">
        <div class="logo_nav">
            <img src="{{ asset('images/dc-logo.png') }}" alt="DC-logo" >
        </div>

        <div class="nav_links">
            <ul>
                <li>
                    <a href="#">CHARACTERS</a> 
                </li>
                <li>
                    <a href="#">COMICS</a>                            
                </li>
                <li>
                    <a href="#">MOVIES</a> 
                </li>
                <li>
                    <a href="#">TV</a>                            
                </li>
                <li>
                    <a href="#">GAMES</a> 
                </li>
                <li>
                    <a href="#">COLLECTLIBLES</a>                            
                </li>
                <li>
                    <a href="#">VIDEOS</a> 
                </li>
                <li>
                    <a href="#">FANS</a>                            
                </li>
                <li>
                    <a href="#">NEWS</a>                            
                </li>
                <li>
                    <a href="#">
                        SHOP <span><i class="fa fa-sort-desc" aria-hidden="true"></i></span>
                    </a>                            
                </li>
            </ul>
        </div>
        <div class="search_style">  
            <input type="search" placeholder="search">
            <span>
                <i class="fa fa-search" aria-hidden="true"></i>
            </span>
        
        </div>
    </div>
</nav>
</header>
