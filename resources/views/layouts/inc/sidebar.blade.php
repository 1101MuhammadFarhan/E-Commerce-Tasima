<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">

      <a class="simple-text logo-normal ms-3 font-weight-bold"">
        TaSiMa
        <!-- <div class="logo-image-big">
          <img src="../assets/img/logo-big.png">
        </div> -->
      </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="{{ Request::is('dashboard') ? 'active':''}}">
            <a class= "font-weight-bold" href="{{ url('dashboard') }}">
                <i class="nc-icon nc-bank"></i>
                <p>Dashboard</p>
            </a>
            </li>
            <li class="{{ Request::is('produk') ? 'active':''}}">
            <a class= "font-weight-bold" href="{{ url('produk') }}">
                <i class="nc-icon nc-diamond"></i>
                <p>Produk</p>
            </a>
            </li>
            <li class="{{ Request::is('profil-usaha') ? 'active':''}}">
            <a class= "font-weight-bold" href="{{ url('profil-usaha') }}">
                <i class="nc-icon nc-single-02"></i>
                <p>Profil Usaha</p>
            </a>
            </li>
            <li class="{{ Request::is('orders', 'orders-produksi','orders-diterima','orders-pengiriman','orders-sampai') ? 'active':''}}">
            <a class= "font-weight-bold" href="{{ url('orders') }}">
                <i class="nc-icon nc-tile-56"></i>
                <p>Transaksi</p>
            </a>
            </li>
            <li class="{{ Request::is('rekap-penjualan') ? 'active':''}}">
            <a class= "font-weight-bold" href="{{ url('rekap-penjualan') }}">
                <i class="nc-icon nc-book-bookmark"></i>
                <h6>Rekapitulasi Penjualan</h6>
            </a>
            </li>
        </ul>
    </div>
</div>
