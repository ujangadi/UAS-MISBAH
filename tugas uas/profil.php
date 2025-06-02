<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Portofolio muhammad misbachul syiroth, mahasiswa informatika dengan minat di teknologi dan inovasi digital." />
  <title>Muhammad misbachul syiroth - Portfolio</title>
  <link rel="icon" href="favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" href="Style.css" />
</head>
<body>
  <nav>
    <div class="nav-container">
      </a>
      <ul class="nav-menu">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About Me</a></li>
        <li><a href="#portfolio">Portfolio</a></li>
        <li><a href="#opini">Opini</a></li>
        <li><a href="#kontak">Contact Me</a></li>
        <li class="dropdown">
          <a href="#">More</a>
          <ul class="dropdown-content">
            <li><a href="#" target="_blank">Facebook</a></li>
            <li><a href="#" target="_blank">Instagram</a></li>
            <li><a href="#" target="_blank">Tiktok</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>

  <section id="home" class="hero-section">
    <div class="hero-container">
      <img src="misbah.jpeg" alt="Muhammad misbachul syiroth" class="hero-photo">
      <div class="hero-text">
        <h1>Halo, saya <span class="highlight">Hi, I'm Muhammad misbachul syiroth.</span></h1>
        <h2>Informatics Student & Programming.</h2>
        <a href="#about"><input type="submit" name="Submit" value="Kenali saya" id="submit"></a>
      </div>
    </div>
  </section>

  <section id="about" class="about">
    <div class="about-container">
      <div class="about-text">
        <h2>Tentang Saya</h2>
        <p>Saya adalah mahasiswa Program Studi Teknik Informatika di Universitas Nahdlatul Ulama Sunan Giri (UNUGIRI) Bojonegoro yang memiliki semangat tinggi dalam mempelajari dan mengembangkan ilmu di bidang teknologi informasi. Saya tertarik pada pemrograman, pengembangan perangkat lunak, serta pemecahan masalah berbasis teknologi digital. Selain aktif dalam kegiatan perkuliahan, saya juga berusaha untuk mengembangkan keterampilan melalui proyek-proyek mandiri dan kerja tim. Dengan latar belakang ini, saya terus berupaya meningkatkan kompetensi teknis dan soft skill guna mempersiapkan diri menghadapi tantangan di dunia industri yang terus berkembang. </p>
      </div>
      <div class="about-image">
        <img src="misbah2.jpeg" alt="Muhammad misbachul syiroth">
      </div>
    </div>
  </section>

  <section id="portfolio" class="portfolio-section">
    <h2 class="section-title">Portfolio</h2>
     <a href="index.php" class="btn-tambah">Tambah</a>
    <div class="table-wrapper">
      <table class="portfolio-table">
        <thead>
          <tr>
            <th>No.</th>
            <th>Nama Kegiatan</th>
            <th>Tanggal Kegiatan</th>
            <th>Bukti</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $query = "SELECT * FROM portofolio";
          $result = mysqli_query($koneksi, $query);
          $no = 1;
          while ($row = mysqli_fetch_assoc($result)) {
              echo "<tr>";
              echo "<td>" . $no++ . "</td>";
              echo "<td>" . $row['nama_kegiatan'] . "</td>";
              echo "<td>" . $row['tanggal'] . "</td>";
              echo "<td><img src='uploads/" . $row['bukti'] . "' alt='Bukti' class='sertifikat-img'></td>";
          }
          ?>
        </tbody>
      </table>
    </div>
  </section>

  <section id="opini" class="opini-section">
    <h2 class="section-title">Opini</h2>
    <div class="opini-grid">
      <!-- Baris Atas -->
      <a href="https://www.w3schools.com/html/default.asp" target="_blank" class="opini-card-link">
        <div class="opini-card">
          <img src="web.avif" alt="Google Solution Challenge">
          <div class="opini-info">
            <h3>Belajar HTML</h3>
          </div>
        </div>
      </a>
      
      <a href="https://medium.com/amcc-amikom/langkah-awal-dalam-web-development-pengenalan-dasar-html-0cee1e9fd19a" target="_blank" class="opini-card-link">
        <div class="opini-card">
          <img src="images.png" alt="Google Solution Challenge">
          <div class="opini-info">
            <h3>Dasar Web Development</h3>
          </div>
        </div>
      </a>
  
      <a href="https://dash.infinityfree.com/" target="_blank" class="opini-card-link">
        <div class="opini-card">
          <img src="untitled.png" alt="Google Solution Challenge">
          <div class="opini-info">
            <h3>Web Hosting</h3>
          </div>
        </div>
      </a>
  
  </section>

  <section id="kontak" class="kontak-section">
    <h2 class="section-title">Hubungi saya</h2>
    <div class="kontak-container">
      <form class="kontak-form">
        <label for="email">E-mail</label>
        <input type="email" id="email" placeholder="Masukkan email anda" required />
  
        <label for="name">Nama</label>
        <input type="text" id="name" placeholder="Masukkan nama anda" required />
  
        <label for="subject">Subjek</label>
        <input type="text" id="subject" placeholder="Subjek pesan" required />
  
        <label for="message">Isi</label>
        <textarea id="message" rows="4" placeholder="Tulis pesan anda disini" required></textarea>
        
  
        <button type="submit">Kirim</button>
      </form>
  
      <div class="kontak-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.3944124353579!2d111.85005077652677!3d-7.205361689841547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e777f8ec5e3bd45%3A0x33f466d1853ab426!2sSDN%20Sumodikaran%20I!5e0!3m2!1sid!2sid!4v1748767050910!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </section> 

  <footer>
    <p>Copyright © 2025 by DAY</p>
    <p>Temukan saya di: 
      <a href="https://www.facebook.com/share/1AdPx3mYbS/" target="_blank">Facebook</a> | 
      <a href="https://www.instagram.com/kangujang759?igsh=MXEyMmx2dzNsbHUxaQ==" target="_blank">Instagram</a> | 
      <a href="https://www.tiktok.com/@m2s_m2s?_t=ZS-8wpyMNlUSX4&_r=1" target="_blank">Tiktok</a>
    </p>
  </footer>
</body>
</html>