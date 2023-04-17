@extends('users.layouts.app')

@section('content')
<section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
        <div class="carousel-inner" role="listbox">
          @foreach ($slide as $key => $item)
          <!-- Slide 1 -->
          <div class="carousel-item {{ $key == 0 ? 'active' : '' }}" style="background-image: url('{{ $item->slide_image }}');">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">{{ $item->slide_heading }}</h2>
                <p class="animate__animated animate__fadeInUp">{{ $item->slide_paragraph }}</p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Get Started</a>
              </div>
            </div>
          </div>
          @endforeach

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-double-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-double-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
</section>

<section class="counts section-bg">
  <div class="container">

    <div class="row no-gutters">

      <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
        <div class="count-box">
          <i class="bi bi-file-earmark"></i>
          <br>
          {{-- <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span> --}}
          <p><strong>Register</strong> melalui website atau link yang diberikan.</p>
          <a href="#">Find out more &raquo;</a>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
        <div class="count-box">
          <i class="bi bi-journal-richtext"></i>
          <br>
          {{-- <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span> --}}
          <p><strong>Isi Formulir</strong> Isi data personal pada formulir yang disediakan.</p>
          <a href="#">Find out more &raquo;</a>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
        <div class="count-box">
          <i class="bi bi-send"></i>
          <br>
          {{-- <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span> --}}
          <p><strong>Submit</strong> Isi data yang sesuai dan kemudian submit.</p>
          <a href="#">Find out more &raquo;</a>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
        <div class="count-box">
          <i class="bi-emoji-smile""></i>
          <br>
          {{-- <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span> --}}
          <p><strong>Nikmati Layanan</strong> 
            Selamat anda sudah tergabung
          </p>
          <a href="#">Find out more &raquo;</a>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ======= Cta Section ======= -->
    <section id="about" class="cta">
      <div class="container">

        <div class="text-center">
          <h3>Tentang Kami</h3>
          <p>Gas adalah aplikasi untuk memudahkan pelaku usaha menjangkau calon pembeli lebih luas. GAS mengajak untuk menjelajah dan mendukung usaha-usaha sekitar</p>
          <a class="cta-btn" href="#">Get Started</a>
        </div>

      </div>
    </section>
    <!-- End Cta Section -->

<section id="services" class="services">
  <div class="container">

    <div class="section-title">
      <h2>Layanan</h2>
      <p>Kami memahami bahwa setiap pelanggan memiliki kebutuhan yang unik. Oleh karena itu, kami menyediakan layanan spesial yang dapat disesuaikan dengan kebutuhan bisnis Anda, mulai dari pengembangan perangkat lunak, desain website, hingga pemeliharaan dan dukungan teknis.</p>
    </div>

    <div class="row">
      <div class="col-md-4 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-laptop"></i></div>
          <h4 class="title"><a href="">Web Development</a></h4>
          <p class="description">Layanan web development yang responsif, mudah digunakan, dan dapat diakses oleh semua perangkat</p>
        </div>
      </div>

      <div class="col-md-4 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-mobile-alt"></i></div>
          <h4 class="title"><a href="">Mobile Apps</a></h4>
          <p class="description">Menyediakan fitur yang dibutuhkan oleh pengguna, seperti notifikasi push, integrasi dengan kamera atau mikrofon</p>
        </div>
      </div>

      <div class="col-md-4 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-group"></i></div>
          <h4 class="title"><a href="">Maintenance</a></h4>
          <p class="description">Layanan ini, dilakukan oleh tim ahli untuk pemeliharaan rutin, pemantauan, dan pengaturan server Anda.</p>
        </div>
      </div>

    </div>

  </div>
</section>
@endsection