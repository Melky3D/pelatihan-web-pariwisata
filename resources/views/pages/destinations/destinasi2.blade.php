@extends('master')

@section('content')

<style>
  .detail-hero {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    padding: 60px 0;
    margin-bottom: 40px;
    position: relative;
    overflow: hidden;
  }

  .detail-hero::before {
    content: '';
    position: absolute;
    top: -50%;
    right: -10%;
    width: 300px;
    height: 300px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 50%;
  }

  .detail-hero::after {
    content: '';
    position: absolute;
    bottom: -30%;
    left: -5%;
    width: 200px;
    height: 200px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 50%;
  }

  .detail-hero h1 {
    font-size: 3rem;
    font-weight: 800;
    margin-bottom: 10px;
    position: relative;
    z-index: 1;
  }

  .detail-hero .subtitle {
    font-size: 1.2rem;
    opacity: 0.9;
    position: relative;
    z-index: 1;
  }

  .detail-card {
    background: white;
    border-radius: 20px;
    padding: 40px;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
    margin-bottom: 30px;
  }

  .detail-card h2 {
    font-size: 1.8rem;
    font-weight: 700;
    color: #2d3748;
    margin-bottom: 25px;
    padding-bottom: 15px;
    border-bottom: 3px solid #667eea;
    display: inline-block;
  }

  .info-item {
    display: flex;
    align-items: flex-start;
    margin-bottom: 25px;
    padding: 20px;
    background: #f7fafc;
    border-radius: 12px;
    transition: all 0.3s ease;
  }

  .info-item:hover {
    background: #edf2f7;
    transform: translateX(5px);
  }

  .info-icon {
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 20px;
    flex-shrink: 0;
  }

  .info-icon i {
    font-size: 1.5rem;
    color: white;
  }

  .info-content {
    flex: 1;
  }

  .info-label {
    font-size: 0.85rem;
    color: #718096;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 5px;
    font-weight: 600;
  }

  .info-value {
    font-size: 1.1rem;
    color: #2d3748;
    font-weight: 600;
    line-height: 1.6;
  }

  .price-highlight {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 30px;
    border-radius: 16px;
    text-align: center;
    margin-top: 30px;
  }

  .price-highlight .price-label {
    font-size: 1rem;
    opacity: 0.9;
    margin-bottom: 10px;
    text-transform: uppercase;
    letter-spacing: 1px;
  }

  .price-highlight .price-amount {
    font-size: 3rem;
    font-weight: 800;
    margin-bottom: 5px;
  }

  .price-highlight .price-note {
    font-size: 0.9rem;
    opacity: 0.85;
  }

  .btn-back {
    background: linear-gradient(135deg, #762c80 0%, #764ba2 100%);
    border: none;
    color: white;
    padding: 12px 30px;
    border-radius: 25px;
    font-weight: 600;
    text-decoration: none;
    display: inline-block;
    transition: all 0.3s ease;
    margin-bottom: 30px;
  }

  .btn-back:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(102, 126, 234, 0.4);
    color: white;
  }

  .btn-back i {
    margin-right: 8px;
  }

  .badge-info {
    display: inline-block;
    background: white;
    color: #667eea;
    padding: 6px 14px;
    border-radius: 20px;
    font-size: 0.85rem;
    font-weight: 600;
    margin-top: 8px;
  }
</style>

<!-- Hero Section -->
<section class="detail-hero text-white">
  <div class="container position-relative">
    <a href="{{ url()->previous() }}" class="btn-back text-white mb-3">
      <i class="bi bi-arrow-left"></i> Kembali
    </a>
    <h1>{{ $destinasi->name }}</h1>
    <p class="subtitle">
      <i class="bi bi-geo-alt-fill"></i> {{ $destinasi->location }}
    </p>
  </div>
</section>

<!-- Detail Content -->
<section class="pb-5">
  <div class="container">
    <div class="detail-card">
      <h2><i class="bi bi-info-circle-fill text-primary"></i> Informasi Destinasi</h2>

      <div class="row">
        <div class="col-12">
          <div class="info-item">
            <div class="info-icon">
              <i class="bi bi-card-text"></i>
            </div>
            <div class="info-content">
              <div class="info-label">Deskripsi</div>
              <div class="info-value">{{ $destinasi->description }}</div>
            </div>
          </div>

          <div class="info-item">
            <div class="info-icon">
              <i class="bi bi-geo-alt"></i>
            </div>
            <div class="info-content">
              <div class="info-label">Lokasi</div>
              <div class="info-value">{{ $destinasi->location }}</div>
              <span class="badge-info">
                <i class="bi bi-check-circle"></i> Terverifikasi
              </span>
            </div>
          </div>

          <div class="info-item">
            <div class="info-icon">
              <i class="bi bi-calendar-week"></i>
            </div>
            <div class="info-content">
              <div class="info-label">Hari Buka</div>
              <div class="info-value">{{ $destinasi->working_day }}</div>
            </div>
          </div>

          <div class="info-item">
            <div class="info-icon">
              <i class="bi bi-clock"></i>
            </div>
            <div class="info-content">
              <div class="info-label">Jam Buka</div>
              <div class="info-value">{{ $destinasi->working_hour }}</div>
            </div>
          </div>

          <div class="info-item">
            <div class="info-icon">
              <i class="bi bi-calendar-plus"></i>
            </div>
            <div class="info-content">
              <div class="info-label">Created At</div>
              <div class="info-value">{{ $destinasi->created_at }}</div>
            </div>
          </div>

          <div class="info-item">
            <div class="info-icon">
              <i class="bi bi-calendar-week"></i>
            </div>
            <div class="info-content">
              <div class="info-label">Updated At</div>
              <div class="info-value">{{ $destinasi->updated_at }}</div>
            </div>
          </div>


        </div>
      </div>

      <!-- Price Section -->
      <div class="price-highlight">
        <div class="price-label">Harga Tiket Masuk</div>
        <div class="price-amount">Rp {{ number_format($destinasi->ticket_price, 0, ',', '.') }}</div>
        <div class="price-note">Harga per orang</div>
      </div>
    </div>
  </div>
</section>

@endsection