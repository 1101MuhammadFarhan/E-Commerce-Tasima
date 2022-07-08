<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">

      <a class="simple-text logo-normal ms-3 font-weight-bold">
        TaSiMa
        <!-- <div class="logo-image-big">
          <img src="../assets/img/logo-big.png">
        </div> -->
      </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item {{ (Request::is('user-dashboard')) ? 'active': '' }}">
            <a class= "nav-link font-weight-bold" href="{{ url('user-dashboard') }}">
                <i class="nc-icon nc-bank"></i>
                <p>Dashboard</p>
            </a>
            </li>
            <li class="nav-item {{ (Request::is('user-ProfilUser')) ? 'active': '' }}">
                <a class= "nav-link font-weight-bold" href="{{ url('user-ProfilUser') }}">
                    <i class="nc-icon nc-single-02"></i>
                    <p>Profil</p>
                </a>
                </li>
            <li class="nav-item {{ (request()->is('user-produk')) ? 'active': '' }}">
            <a class= "nav-link font-weight-bold" href="{{ url('user-produk') }}">
                <i class="nc-icon nc-diamond"></i>
                <p>Produk</p>
            </a>
            </li>
            <li class="nav-item {{ (request()->is('user-profilUsaha')) ? 'active': '' }}">
                <a class= "nav-link font-weight-bold" href="{{ url('user-profilUsaha') }}">
                <i class="nc-icon nc-shop"></i>
                <p>Profil Usaha</p>
            </a>
            </li>
            <li class="nav-item {{ (request()->is('cart')) ? 'active': '' }}">
                <a class= "font-weight-bold" href="{{ url('cart') }}">
                <i class="nc-icon nc-basket"></i>
                <p>Keranjang</p>
            </a>
            </li>
            <li class="nav-item {{ (request()->is('my-orders')) ? 'active': '' }}">
            <a class= "font-weight-bold" href="{{ url('my-orders') }}">
                <i class="nc-icon nc-tile-56"></i>
                <p>Transaksi</p>
            </a>
            </li>
        </ul>
    </div>
</div>
