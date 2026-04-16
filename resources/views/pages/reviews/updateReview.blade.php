@extends('master')

@section('content')

<style>
  .destination-hero {
    background: url('https://wallpapershome.com/images/pages/ico_h/572.jpg') center/cover no-repeat;
    position: relative;
    padding: 100px 0;
    margin-bottom: 40px;
  }

  .destination-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.658);
  }

  .destination-hero > * {
    position: relative;
    z-index: 1;
  }

  .destination-hero h1 {
    font-size: 3rem;
    font-weight: 800;
    margin-bottom: 10px;
  }

  .destination-hero p {
    font-size: 1.2rem;
    opacity: 0.9;
  }.

  .form-card {
    background: white;
    border-radius: 20px;
    padding: 40px;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
    margin-bottom: 30px;
  }

  .form-card h2 {
    font-size: 1.8rem;
    font-weight: 700;
    color: #2d3748;
    margin-bottom: 30px;
    padding-bottom: 15px;
    border-bottom: 3px solid #667eea;
    display: inline-block;
  }

  .form-group {
    margin-bottom: 25px;
  }

  .form-group label {
    font-weight: 600;
    color: #2d3748;
    margin-bottom: 8px;
    display: block;
  }

  .form-group label i {
    color: #667eea;
    margin-right: 8px;
  }

  .form-control {
    border: 2px solid #e2e8f0;
    border-radius: 12px;
    padding: 12px 16px;
    font-size: 1rem;
    transition: all 0.3s;
  }

  .form-control:focus {
    border-color: #667eea;
    box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
    outline: none;
  }

  textarea.form-control {
    min-height: 120px;
    resize: vertical;
  }

  .btn-submit {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border: none;
    color: white;
    padding: 14px 40px;
    border-radius: 25px;
    font-weight: 600;
    font-size: 1.1rem;
    transition: all 0.3s;
    box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
  }

  .btn-submit:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(102, 126, 234, 0.4);
    color: white;
  }

  .btn-submit i {
    margin-right: 8px;
  }

  .btn-back {
    background: #e2e8f0;
    border: none;
    color: #4a5568;
    padding: 14px 40px;
    border-radius: 25px;
    font-weight: 600;
    font-size: 1.1rem;
    text-decoration: none;
    display: inline-block;
    transition: all 0.3s;
    margin-right: 15px;
  }

  .btn-back:hover {
    background: #cbd5e0;
    color: #2d3748;
    transform: translateY(-2px);
  }

  .btn-back i {
    margin-right: 8px;
  }

  .form-actions {
    margin-top: 30px;
    display: flex;
    gap: 15px;
    align-items: center;
  }

  .input-hint {
    font-size: 0.85rem;
    color: #718096;
    margin-top: 5px;
  }

  .alert-error {
    background: linear-gradient(135deg, #fc8181 0%, #f56565 100%);
    color: white;
    border: none;
    border-radius: 12px;
    padding: 15px 20px;
    margin-bottom: 30px;
    box-shadow: 0 4px 15px rgba(245, 101, 101, 0.3);
  }

  .alert-error i {
    margin-right: 8px;
  }
</style>

<!-- Hero Section -->
<section class="destination-hero text-white">
  <div class="container">
    <h1>✏️ Edit Review</h1>
    <p>Perbarui informasi review</p>
  </div>
</section>

<!-- Form Content -->
<section class="pb-5">
  <div class="container">
    <div class="form-card">
      <h2><i class="bi bi-pencil-square text-primary"></i> Form Review</h2>

      @if ($errors->any())
        <div class="alert-error">
          <i class="bi bi-exclamation-triangle-fill"></i>
          <ul class="mb-0 mt-2">
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <form action="{{ route('review.update', $review->id) }}" method="POST">
        @csrf

        @method('PUT')

        <div class="form-group">
          <label for="destination_id">
            <i class="bi bi-geo-alt-fill"></i> Destinasi
          </label>
          <select name="attraction_id" id="attraction_id" class="form-control" required>
            <option value="">Pilih Attraksi</option>
            @foreach($attraction as $a)
              <option value="{{ $a->id }}" {{ $review->attraction_id == $a->id ? 'selected' : '' }}>
                {{ $a->name }}
              </option>
            @endforeach
          </select>
          <div class="input-hint">Pilih Attraksi untuk direview</div>  

        <div class="form-group">
          <label for="name">
            <i class="bi bi-bookmark-fill"></i> Nama Reviewer
          </label>
          <input 
            type="text" 
            value="{{ $review->name }}"
            name="name" 
            id="name" 
            class="form-control" 
            placeholder="Contoh: Roller Coaster, Water Park, dll"
            required
          >
          <div class="input-hint">Masukkan nama reviewer</div>
        </div>

        <div class="form-group">
          <label for="description">
            <i class="bi bi-card-text"></i> Comment
          </label>
          <textarea 
            name="comment" 
            id="description" 
            class="form-control" 
            placeholder="Jelaskan tentang attraksi ini..."
          >{{ $review->comment }}</textarea>
          <div class="input-hint">Deskripsi singkat tentang attraksi (opsional)</div>
        </div>

    

        <div class="form-actions">
          <a href="{{ route('review.index') }}" class="btn-back">
            <i class="bi bi-arrow-left"></i> Kembali
          </a>
          <button type="submit" class="btn-submit">
            <i class="bi bi-check-circle"></i> Simpan Review
          </button>
        </div>
      </form>
    </div>
  </div>
</section>

@endsection