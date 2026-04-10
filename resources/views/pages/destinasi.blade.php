@extends('master')

@section('content')

<style>
  .ticket {
    border-radius: 25px;
    overflow: hidden;
    background: white;
    box-shadow: 0 20px 50px rgba(0,0,0,0.2);
    transition: 0.4s;
  }

  .ticket:hover {
    transform: scale(1.02) rotateX(2deg);
  }

  .ticket-header {
    position: relative;
    height: 250px;
    overflow: hidden;
  }

  .ticket-header img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: 0.5s;
  }

  .ticket:hover .ticket-header img {
    transform: scale(1.1);
  }

  .overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
  }

  .title-overlay {
    position: absolute;
    bottom: 20px;
    left: 20px;
    color: white;
  }

  .price-box {
    background: linear-gradient(135deg, #007bff, #00c6ff);
    color: white;
    padding: 20px;
    border-radius: 20px;
    margin-top: -40px;
    position: relative;
    z-index: 2;
  }

  .info-item {
    display: flex;
    justify-content: space-between;
    padding: 8px 0;
  }

  .facility {
    padding: 8px 14px;
    border-radius: 20px;
    background: #f1f3f5;
    font-size: 14px;
    transition: 0.3s;
  }

  .facility:hover {
    background: #007bff;
    color: white;
  }

  .btn-book {
    border-radius: 30px;
    padding: 12px 40px;
    font-weight: bold;
    transition: 0.3s;
  }

  .btn-book:hover {
    transform: scale(1.05);
  }
</style>

<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-lg-8">

      <div class="ticket">
        <!-- IMAGE HEADER -->
        <div class="ticket-header">
          <img src="https://www.indonesia.travel/contentassets/6a369640e8f542cfa87529d75fad588d/pantai-bali.jpeg">
          <div class="overlay"></div>

          <div class="title-overlay">
            <h2 class="fw-bold">📍{{ $destinasi['nama'] }}</h2>
            <p class="mb-5">{{ $destinasi['lokasi'] }}</p>
          </div>
        </div>

        <!-- PRICE -->
        <div class="text-center px-4">
          <div class="price-box">
            <h4>Mulai dari</h4>
            <h2 class="fw-bold">Rp {{ number_format($destinasi['harga'], 0, ',', '.') }}</h2>
            <span class="badge bg-warning text-dark mt-2">
              ⭐ {{ $destinasi['rating'] }}/5
            </span>
          </div>
        </div>

        <!-- INFO -->
        <div class="p-4">
          <div class="info-item">
            <span>⏱️ Durasi</span>
            <strong>{{ $destinasi['durasi'] }}</strong>
          </div>

          <div class="info-item">
            <span>✈️ Transportasi</span>
            <strong>{{ $destinasi['transportasi'] }}</strong>
          </div>

          <div class="info-item">
            <span>🏨 Hotel</span>
            <strong>{{ $destinasi['hotel'] }}</strong>
          </div>
        </div>

        <!-- FACILITIES -->
        <div class="px-4 pb-3">
          <h6 class="fw-bold mb-3">Fasilitas</h6>
          <div class="d-flex flex-wrap gap-2">
            @foreach ($destinasi['fasilitas'] as $facility)
            <span class="facility">{{ $facility }}</span>
            @endforeach
          </div>
        </div>

        <!-- CTA -->
        <div class="text-center pb-4">
          <button class="btn btn-primary btn-book">
            💳 Pesan Sekarang
          </button>
        </div>

      </div>

    </div>
  </div>
</div>
@endsection