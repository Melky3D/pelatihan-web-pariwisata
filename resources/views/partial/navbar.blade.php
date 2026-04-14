<style>
  .navbar-custom {
    position: sticky;
    top: 0;
    z-index: 999;
    backdrop-filter: blur(12px);
    background: rgb(0, 0, 0);
    transition: 0.3s;
  }

  .navbar-custom.scrolled {
    background: rgba(0, 0, 0, 0.85);
  }

  .nav-link {
    position: relative;
    transition: 0.3s;
  }

  .nav-link::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0%;
    height: 2px;
    background: #0d6efd;
    transition: 0.3s;
  }

  .nav-link:hover::after {
    width: 100%;
  }

  .btn-modern {
    border-radius: 25px;
    padding: 6px 18px;
  }

  .logo-text {
    font-weight: bold;
    font-size: 20px;
    letter-spacing: 1px;
  }
</style>

<header class="navbar navbar-expand-lg navbar-custom">
  <div class="container">

    <!-- LOGO -->
    <a href="/" class="text-white text-decoration-none logo-text">
      ✈️ TravelKu
    </a>

    <!-- TOGGLE MOBILE -->
    <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      ☰
    </button>

    <!-- MENU -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">

        <li class="nav-item">
          <a href="/master" class="nav-link text-white">Home</a>
        </li>

        <li class="nav-item">
          <a href="/about" class="nav-link text-white">About</a>
        </li>

        <li class="nav-item">
          <a href="/destinasi" class="nav-link text-white">Destination</a>
        </li>

        <li class="nav-item">
          <a href="/destination" class="nav-link text-white">Tabel Destination</a>
        </li>

        <li class="nav-item">
          <a href="/user" class="nav-link text-white">Tabel User</a>
        </li>

        <li class="nav-item">
          <a href="/attraction" class="nav-link text-white">Tabel Attraksi</a>
        </li>

      </ul>

      <!-- SEARCH -->
      <form class="d-flex me-3">
        <input class="form-control rounded-pill px-3" type="search" placeholder="Cari destinasi...">
      </form>

      <!-- BUTTON -->
      <div class="d-flex gap-2">
        <button class="btn btn-outline-light btn-modern">Login</button>
        <button class="btn btn-primary btn-modern">Sign Up</button>
      </div>
    </div>

  </div>
</header>

<!-- SCRIPT SCROLL EFFECT -->
<script>
  window.addEventListener("scroll", function () {
    const navbar = document.querySelector(".navbar-custom");
    navbar.classList.toggle("scrolled", window.scrollY > 50);
  });
</script>