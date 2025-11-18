 <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>Our Shop</h3>
          <span class="breadcrumb"><a href="{{ url('/') }}">Home</a> > Our Shop</span>
        </div>
      </div>
    </div>
  </div>

  <div class="section trending">
    <div class="container">
      <ul class="trending-filter">
        <li>
          <a class="is_active" href="#!" data-filter="*">Show All</a>
        </li>
        <li>
          <a href="#!" data-filter=".moba">moba</a>
        </li>
        <li>
          <a href="#!" data-filter=".rpg">Rpg</a>
        </li>
        <li>
          <a href="#!" data-filter=".explore">Explorer</a>
        </li>
      </ul>
      <div class="row trending-box">
        @foreach ( $games as $game )
          <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 {{ strtolower($game->genre) }}" >
          <div class="item">
            <div class="thumb">
              <a href="{{ url('details') }}"><img src="{{ asset('game/' . $game->gambar) }}" alt="{{ $game->nama_game }}"></a>
              <span class="price"><em>${{ $game->harga + 100 }}</em>${{ $game->harga }}
              </span>
            </div>
            <div class="down-content">
              <span class="category">{{ ucfirst($game->genre) }}</span>
              <h4>{{ $game->nama_game }}</h4>
              <a href="{{ url('details') }}"><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul class="pagination">
          <li><a href="#"> &lt; </a></li>
            <li><a class="is_active" href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#"> &gt; </a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  @section('scripts')