<div>
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="/" class="logo">
                            <img src="{{ asset('assets/images/logo1.png') }}" alt="" style="width: 80%;" >
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                          <li><a href="{{ url('/') }}" class="active">Home</a></li>
                          <li><a href="{{ url('shop') }}">Our Shop</a></li>
                          <li><a href="{{ url('details') }}">Product Details</a></li>
                          <li><a href="{{ url('contact') }}">Contact Us</a></li>
                          @if (Route::has('login'))
                            @auth
                                <x-app-layout>
                                    
                                </x-app-layout>
                                @else
                                    <li><a href="{{ url('login') }}">Login</a></li>
                                @if (Route::has('register'))
                                    <li><a href="{{ url('register') }}">Register</a></li>
                                @endif 
                            @endauth        
                          @endif
                      </ul>   
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
      </header>
</div>