@extends('master')

@section('content')

<style>
  .hero {
    background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.7)),
                url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e');
    background-size: cover;
    background-position: center;
    min-height: 90vh;
    display: flex;
    align-items: center;
  }

  .search-box {
    background: white;
    border-radius: 15px;
    padding: 20px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.2);
  }

  .ticket-card {
    border-radius: 20px;
    overflow: hidden;
    transition: 0.3s;
  }

  .ticket-card:hover {
    transform: scale(1.03);
    box-shadow: 0 15px 40px rgba(0,0,0,0.2);
  }

  .price {
    font-size: 24px;
    font-weight: bold;
    color: #007bff;
  }

  .cta {
    background: linear-gradient(135deg, #007bff, #00c6ff);
    border-radius: 20px;
  }
</style>

<!-- HERO -->
<section class="hero text-white text-center">
  <div class="container">
    <h1 class="display-3 fw-bold">Jelajahi Dunia 🌍</h1>
    <p class="lead mb-4">Cari tiket perjalanan terbaik dengan harga santai 😎</p>

   

  </div>
</section>

<!-- DESTINATIONS -->
<section class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center fw-bold mb-5">Destinasi Populer ✈️</h2>

    <div class="row g-4">

      <div class="col-md-4">
        <div class="card ticket-card border-0 shadow-sm">
          <img src="https://images.unsplash.com/photo-1502602898657-3e91760cbb34"
               class="card-img-top">
          <div class="card-body">
            <h5>Bali</h5>
            <p class="text-muted">Surga wisata Indonesia 🌴</p>
            <div class="price">Rp 1.200.000</div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card ticket-card border-0 shadow-sm">
          <img src="https://images.unsplash.com/photo-1499856871958-5b9627545d1a"
               class="card-img-top">
          <div class="card-body">
            <h5>Jakarta</h5>
            <p class="text-muted">Kota metropolitan 🏙️</p>
            <div class="price">Rp 850.000</div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card ticket-card border-0 shadow-sm">
          <img src="https://images.unsplash.com/photo-1526772662000-3f88f10405ff"
               class="card-img-top">
          <div class="card-body">
            <h5>Yogyakarta</h5>
            <p class="text-muted">Kota budaya & sejarah 🏯</p>
            <div class="price">Rp 950.000</div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- FEATURES -->
<section class="py-5">
  <div class="container text-center">
    <h2 class="fw-bold mb-5">Kenapa Pilih Kami?</h2>

    <div class="row g-4">
      <div class="col-md-4">
        <h5>⚡ Booking Cepat</h5>
        <p class="text-muted">Pesan tiket cuma beberapa klik</p>
      </div>

      <div class="col-md-4">
        <h5>💰 Harga Terbaik</h5>
        <p class="text-muted">Harga bersaing, kantong aman</p>
      </div>

      <div class="col-md-4">
        <h5>🛡️ Aman</h5>
        <p class="text-muted">Transaksi terjamin dan terpercaya</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="py-5">
  <div class="container">
    <div class="cta text-white text-center p-5">
      <h2 class="fw-bold">Siap Liburan? 😎</h2>
      <p class="lead">Pesan tiket sekarang sebelum kehabisan!</p>
      <a href="#" class="btn btn-light btn-lg px-4">Pesan Sekarang</a>
    </div>
  </div>
</section>

@endsection