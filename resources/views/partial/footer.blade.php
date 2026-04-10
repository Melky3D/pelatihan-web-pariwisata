<style>
  .footer {
    background: linear-gradient(135deg, #0d1117, #1f2937);
    color: #ccc;
    padding: 50px 0 20px;
  }

  .footer h5 {
    color: white;
    margin-bottom: 15px;
  }

  .footer a {
    color: #aaa;
    text-decoration: none;
    transition: 0.3s;
  }

  .footer a:hover {
    color: #0d6efd;
    transform: translateX(3px);
  }

  .social-icon {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: #111;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: 0.3s;
  }

  .social-icon:hover {
    background: #0d6efd;
    transform: scale(1.1);
  }

  .footer-bottom {
    border-top: 1px solid rgba(255,255,255,0.1);
    margin-top: 30px;
    padding-top: 15px;
    text-align: center;
    font-size: 14px;
    color: #888;
  }
</style>

<footer class="footer">
  <div class="container">

    <div class="row">

      <!-- BRAND -->
      <div class="col-md-4 mb-4">
        <h5>✈️ TravelKu</h5>
        <p>
          Temukan destinasi impianmu dengan pengalaman terbaik.
          Liburan jadi lebih mudah dan menyenangkan 😎
        </p>
      </div>

      <!-- MENU -->
      <div class="col-md-4 mb-4">
        <h5>Menu</h5>
        <ul class="list-unstyled">
          <li><a href="/master">Home</a></li>
          <li><a href="/about">About</a></li>
          <li><a href="/destinasi">Destination</a></li>
          <li><a href="#">Pricing</a></li>
        </ul>
      </div>

      <!-- SOCIAL -->
      <div class="col-md-4 mb-4">
        <h5>Follow Us</h5>
        <div class="d-flex gap-3">

          <a href="#" class="social-icon">
            <i class="bi bi-instagram text-white"></i>
          </a>

          <a href="#" class="social-icon">
            <i class="bi bi-facebook text-white"></i>
          </a>

          <a href="#" class="social-icon">
            <i class="bi bi-twitter text-white"></i>
          </a>

        </div>
      </div>

    </div>

    <!-- BOTTOM -->
    <div class="footer-bottom">
      © 2026 TravelKu — Dibuat oleh Melky 😎
    </div>

  </div>
</footer>