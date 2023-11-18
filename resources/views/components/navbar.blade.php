<nav class="navbar navbar-expand-lg bg-body-tertiary sticky">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img class="imgcostum" src="/media/logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-danger active ms-5 ps-5" aria-current="page" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-link link-a" href="{{route('index.game')}}"> Games</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-link" href="{{route('form')}}">Contattaci</a>
                </li>
                @auth      
                <li class="nav-item dropdown">  
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" 
                    aria-expanded="false">        
                    {{Auth::user()->name}}              
                    </a>  
                    
                    <ul class="dropdown-menu">      
                        <li><a class="dropdown-item navbar-a" href="{{route('game.create')}}">Crea Gioco</a></li> 
                        
                        <li><hr class="dropdown-divider"></li>  
                        <li>           
                            <form action="{{route('logout')}}" method="post"> 
                                
                                @csrf 
                                <button class="btn navbar-a mx-1">Logout</button>
                                
                            </form>     
                        </li>      
                    </ul> 
                </li>  
            </ul>   
            @else     
            <a class="nav-link px-1 navbar-a" href="{{route('register')}}">Registrati</a>    
            <a class="nav-link px-2 navbar-a" href="{{route('login')}}">Login</a>  
            @endauth
        </ul>
    </li> 
</ul>
</div>
</div>
</nav>