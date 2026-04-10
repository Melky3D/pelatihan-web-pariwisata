@extends('master')

@section('content')

<style>
  .hero {
  position: relative;
  background: url('https://images.unsplash.com/photo-1492724441997-5dc865305da7') center/cover no-repeat;
  min-height: 60vh;
  display: flex;
  align-items: center;
}

.hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg, rgba(0,123,255,0.6), rgba(0,0,0,0.8));
}

.hero-content {
  position: relative;
  z-index: 2;
}

  .glass {
    background: rgba(255,255,255,0.1);
    backdrop-filter: blur(10px);
    border-radius: 15px;
    padding: 30px;
  }

  .section-title {
    position: relative;
    display: inline-block;
  }

  .section-title::after {
    content: '';
    width: 50%;
    height: 3px;
    background: #007bff;
    display: block;
    margin-top: 8px;
  }

  .card-modern {
    border-radius: 20px;
    transition: 0.3s;
  }

  .card-modern:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 40px rgba(0,0,0,0.2);
  }

  .team-img {
    width: 140px;
    height: 140px;
    object-fit: cover;
    border-radius: 50%;
    border: 4px solid white;
  }

  .gallery img {
    border-radius: 15px;
    transition: 0.3s;
  }

  .gallery img:hover {
    transform: scale(1.05);
  }
</style>

<!-- HERO -->
<section class="hero text-white text-center">
  <div class="container hero-content">
    <div class="glass">
      <h1 class="display-4 fw-bold">Tentang Kami ✨</h1>
      <p class="lead">Kami bukan sekadar tim... kami squad yang bikin ide jadi nyata 🚀</p>
    </div>
  </div>
</section>

<!-- VISI MISI -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="row g-4 align-items-center">

      <div class="col-lg-6">
        <div class="card card-modern p-4 border-0 shadow-sm">
          <h3 class="fw-bold section-title">Misi Kami</h3>
          <p class="text-muted mt-3">
            Membantu orang berkembang lewat teknologi yang simpel, powerful,
            dan nggak bikin pusing 😌
          </p>
          <img src="https://picsum.photos/500/300?random=11"
               class="img-fluid rounded mt-3">
        </div>
      </div>

      <div class="col-lg-6">
        <div class="card card-modern p-4 border-0 shadow-sm">
          <h3 class="fw-bold section-title">Visi Kami</h3>
          <p class="text-muted mt-3">
            Menjadi platform digital yang impactful dan dipakai banyak orang
            (bukan cuma jadi tugas kampus 😭)
          </p>
          <img src="https://picsum.photos/500/300?random=12"
               class="img-fluid rounded mt-3">
        </div>
      </div>

    </div>
  </div>
</section>

<!-- TIM -->
<section class="py-5">
  <div class="container">
    <h2 class="text-center fw-bold mb-5">Tim Kami 👨‍💻</h2>

    <div class="row g-4">

      <div class="col-md-4 text-center">
        <div class="card card-modern border-0 shadow-sm p-4">
          <img src="https://picsum.photos/200?random=21" class="team-img mx-auto mb-3">
          <h5>John Doe</h5>
          <p class="text-muted">Founder</p>
        </div>
      </div>

      <div class="col-md-4 text-center">
        <div class="card card-modern border-0 shadow-sm p-4">
          <img src="https://picsum.photos/200?random=22" class="team-img mx-auto mb-3">
          <h5>Jane Smith</h5>
          <p class="text-muted">CTO</p>
        </div>
      </div>

      <div class="col-md-4 text-center">
        <div class="card card-modern border-0 shadow-sm p-4">
          <img src="https://picsum.photos/200?random=23" class="team-img mx-auto mb-3">
          <h5>Bob Johnson</h5>
          <p class="text-muted">Developer</p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- GALLERY -->
<section class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center fw-bold mb-5">Galeri 📸</h2>

    <div class="row g-3 gallery">

      <div class="col-md-3">
        <img src="https://picsum.photos/400/300?random=31" class="img-fluid">
      </div>

      <div class="col-md-3">
        <img src="https://picsum.photos/400/300?random=32" class="img-fluid">
      </div>

      <div class="col-md-3">
        <img src="https://picsum.photos/400/300?random=33" class="img-fluid">
      </div>

      <div class="col-md-3">
        <img src="https://picsum.photos/400/300?random=34" class="img-fluid">
      </div>

    </div>
  </div>
</section>

@endsection