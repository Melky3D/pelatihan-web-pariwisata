@extends('master')

@section('content')

<style>
  .destination-hero {
    background: url('https://images.unsplash.com/photo-1506929562872-bb421503ef21?w=1920&q=80') center/cover no-repeat;
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
  }

  .section-title {
    font-size: 2rem;
    font-weight: 700;
    color: #2d3748;
    margin-bottom: 30px;
  }

  .table-container {
    background: white;
    border-radius: 16px;
    padding: 30px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
  }

  .table thead {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
  }

  .table thead th {
    border: none;
    padding: 15px;
    font-weight: 600;
  }

  .table tbody tr {
    transition: all 0.2s;
  }

  .table tbody tr:hover {
    background-color: #f7fafc;
    transform: scale(1.01);
  }

  .table tbody td, .table tbody th {
    padding: 15px;
    vertical-align: middle;
  }

  .table tbody th a {
    color: #667eea;
    text-decoration: none;
    font-weight: 600;
  }

  .table tbody th a:hover {
    text-decoration: underline;
  }

  .btn-add {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border: none;
    color: white;
    padding: 12px 30px;
    border-radius: 25px;
    font-weight: 600;
    text-decoration: none;
    display: inline-block;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
  }

  .btn-add:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(102, 126, 234, 0.4);
    color: white;
  }

  .btn-add i {
    margin-right: 8px;
  }

  .action-buttons {
    display: flex;
    gap: 8px;
  }

  .btn-view {
    background: #3f96a5;
    color: white;
    padding: 6px 16px;
    border-radius: 8px;
    text-decoration: none;
    font-size: 0.85rem;
    font-weight: 600;
    transition: all 0.3s;
  }


  .btn-delete {
    background: #f56565;      /* Red color */
    color: white;
    padding: 6px 16px;
    border-radius: 8px;
    border: none;
    font-size: 0.85rem;
    font-weight: 600;
    transition: all 0.3s;
    cursor: pointer;
  }

  .btn-delete:hover {
    background: #e53e3e;      /* Darker red on hover */
    color: white;
    transform: translateY(-2px);
  }

  .btn-update {
    background: #dab205;      /* Red color */
    color: white;
    padding: 6px 16px;
    border-radius: 8px;
    border: none;
    font-size: 0.85rem;
    font-weight: 600;
    transition: all 0.3s;
    cursor: pointer;
  }

  .btn-update:hover {
    background: #caa21e;      /* Darker red on hover */
    color: white;
    transform: translateY(-2px);
  }

  .btn-view:hover {
    background: #5568d3;
    color: white;
    transform: translateY(-2px);
  }

  .alert-success {
    background: linear-gradient(135deg, #48bb78 0%, #38a169 100%);
    color: white;
    border: none;
    border-radius: 12px;
    padding: 15px 20px;
    margin-bottom: 30px;
    box-shadow: 0 4px 15px rgba(72, 187, 120, 0.3);
  }

  .alert-success i {
    margin-right: 8px;
  }

  .empty-state {
    text-align: center;
    padding: 60px 20px;
  }

  .empty-state i {
    font-size: 4rem;
    color: #cbd5e0;
    margin-bottom: 20px;
  }

  .empty-state h3 {
    color: #4a5568;
    margin-bottom: 10px;
  }

  .empty-state p {
    color: #718096;
  }

  .search-form {
    position: relative;
  }

  .search-form input {
    border: 2px solid #e2e8f0;
    border-radius: 25px;
    padding: 10px 20px;
    padding-left: 45px;
    font-size: 0.95rem;
    transition: all 0.3s ease;
    width: 280px;
  }

  .search-form input:focus {
    outline: none;
    border-color: #667eea;
    box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.15);
  }

  .search-form input::placeholder {
    color: #a0aec0;
  }

  .search-form .search-icon {
    position: absolute;
    left: 18px;
    top: 50%;
    transform: translateY(-50%);
    color: #a0aec0;
    font-size: 1rem;
    pointer-events: none;
    transition: color 0.3s;
  }

  .search-form input:focus + .search-icon {
    color: #667eea;
  }

  .search-form button {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border: none;
    color: white;
    padding: 10px 24px;
    border-radius: 25px;
    font-weight: 600;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
  }

  .search-form button:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(102, 126, 234, 0.4);
  }

  .pagination-wrapper {
    display: flex;
    justify-content: center;
    margin-top: 24px;
  }

  .pagination-wrapper .pagination {
    gap: 6px;
    background: #f1f5f9;
    padding: 8px 16px;
    border-radius: 50px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
  }

  .pagination-wrapper .page-item .page-link {
    border: none;
    border-radius: 50px;
    padding: 6px 14px;
    font-size: 0.85rem;
    font-weight: 500;
    color: #64748b;
    background: transparent;
    transition: all 0.25s ease;
  }

  .pagination-wrapper .page-item .page-link:hover {
    background: rgba(102, 126, 234, 0.15);
    color: #667eea;
    transform: translateY(-1px);
  }

  .pagination-wrapper .page-item.active .page-link {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    box-shadow: 0 3px 10px rgba(102, 126, 234, 0.35);
  }

  .pagination-wrapper .page-item.disabled .page-link {
    color: #94a3b8;
    background: transparent;
  }

  .pagination-wrapper .page-item.disabled .page-link:hover {
    background: transparent;
    color: #94a3b8;
    transform: none;
  }
</style>

<!-- Hero Section -->
<section class="destination-hero text-white text-center">
  <div class="container">
    <h1>Destinasi Wisata 🌴</h1>
    <p>Temukan tempat-tempat menakjubkan untuk dikunjungi</p>
  </div>
</section>

<!-- Destination List -->
<section class="pb-5">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h2 class="section-title mb-0">Semua Destinasi</h2>

      <form action="/destination" method="GET" class="search-form d-flex align-items-center gap-2">
        <input type="text" name="search" class="form-control" placeholder="Cari destinasi..." value="{{ request('search') }}">
        <i class="bi bi-search search-icon"></i>
        <button type="submit" class="btn">Cari</button>
      </form>

      <a href="/destination/create" class="btn-add ms-3">
        <i class="bi bi-plus-circle"></i> Tambah Destinasi
      </a>
    </div>

    @if (session('success'))
      <div id="alertSuccess" class="alert-success">
        <i class="bi bi-check-circle-fill"></i> {{ session('success') }}
      </div>
    @endif

    <div class="table-container">
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nama</th>
              <th scope="col">Deskripsi</th>
              <th scope="col">Lokasi</th>
              <th scope="col">Hari Buka</th>
              <th scope="col">Jam Buka</th>
              <th scope="col">Harga Tiket</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($destinations as $destination)
            <tr>
              <th>{{ $destination->id }}</th>
              <td><strong>{{ $destination->name }}</strong></td>
              <td>{{ Str::limit($destination->description, 50) }}</td>
              <td><i class="bi bi-geo-alt-fill text-primary"></i> {{ $destination->location }}</td>
              <td>{{ $destination->working_day }}</td>
              <td>{{ $destination->working_hour }}</td>
              <td><strong class="text-primary">Rp {{ number_format($destination->ticket_price, 0, ',', '.') }}</strong></td>
              <td>
                <div class="action-buttons">


                  <a href="{{ route('destinasi2', $destination->id) }}" class="btn-view">
                    <i class="bi bi-eye"></i>
                  </a>

                  <a href="{{ route('destinasi2.edit', $destination->id) }}" class="btn-update">
                    <i class="bi bi-pencil"></i>
                  </a>

                  <form action="{{ route('destinasi2.delete', $destination->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-delete" onclick="return confirm('Are you sure you want to delete this destination?')">
                      <i class="bi bi-trash"></i>
                    </button>
                  </form>
                </div>
              </td>
            </tr>
            @empty
            <tr>
              <td colspan="8">
                <div class="empty-state">
                  <i class="bi bi-inbox"></i>
                  <h3>Belum Ada Destinasi</h3>
                  <p>Klik tombol "Tambah Destinasi" untuk menambahkan destinasi baru</p>
                </div>
              </td>
            </tr>
            @endforelse 
          </tbody>
        </table>
      </div>
    </div>

    <div class="pagination-wrapper">
      {{ $destinations->appends(['search' => request('search')])->links('pagination::bootstrap-5') }}
    </div>
  </div>
</section>


@endsection

@push('scripts')
<script>
   class alert {
    constructor(message) {
      this.message = message;
    }

    show() {
      alert(this.message);
    }
   }
   let alertElement = document.getElementById('alertSuccess');
   if (alertElement) {
    setTimeout(() => {
      alertElement.style.transition = 'opacity 0.5s ease';
      alertElement.style.opacity = '0';
      setTimeout(() => alertElement.remove(), 1000);
    }, 3000);
   }
  </script>
@endpush