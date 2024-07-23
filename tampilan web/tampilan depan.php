<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perpustakaan</title>
  <style>
    body {
      background: url('../gambar/pengadaan-buku-perpustakaan.jpg') no-repeat center center fixed;
      background-size: cover;
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      color: white;
    }

    header {
      position: fixed;
      top: 0;
      width: 100%;
      padding: 10px;
      background-color: #2979ff;
      z-index: 1000;
      display: flex;
      justify-content: space-between;
      align-items: center;
      text-shadow: 2px 2px 2px black;
      border-bottom: 4px solid rgba(255, 255, 255, .3);
    }

    h1 {
      margin: 0;
      float: left;
      /* Menempatkan h1 di sebelah kiri */
      text-shadow: 2px 2px 2px black;
    }

    nav {
      float: right;

      /* Menempatkan nav di sebelah kanan */

    }

    nav ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
    }

    nav ul li {
      display: inline;
      margin-left: 15px;

    }

    nav ul li a {
      text-decoration: none;
      color: white;
      font-weight: bold;
    }

    .section {
      text-align: center;
      padding-top: 120px;
      text-shadow: 2px 2px 2px black;
    }

    .section h2 {
      font-size: 2em;
      margin-bottom: 10px;

    }

    .section p {
      font-size: 1.2em;
      line-height: 1.6;
    }

    img.img-logo {
      display: block;
      margin: 0 auto;
      width: 7%;
    }

    h3 {
      text-align: center;
      font-size: 2em;
      margin-top: 0;
      text-shadow: 2px 2px 2px black;
    }
  </style>
</head>

<body>
  <header>
    <h1>PERPUSTAKAAN</h1>
    <nav>
      <ul>
        <li><a href="akses.php">Login</a></li>
        <li><a href="tambah-registrasi.php">Registrasi</a></li>
        <!-- Add more menu items as needed -->
      </ul>
    </nav>
  </header>

  <section>
    <article class="section">
      <h2><abbr title="Pusat Pelatihan Kerja Pengembangan Industri">Tentang Kami</abbr></h2>
      <p>
        Perpustakaan Ilmu Pengetahuan adalah sebuah lembaga pendidikan dan penelitian yang didedikasikan untuk
        menyediakan akses luas terhadap pengetahuan dan informasi bagi masyarakat umum. Didirikan pada tahun 1990, kami
        telah berkomitmen untuk menjadi pusat kegiatan literasi, pendidikan, dan penelitian di Kota Buku.
      </p>
      <p>
        Kami membuka pintu untuk semua pencari pengetahuan, mahasiswa, akademisi, dan masyarakat umum. Jadilah bagian
        dari komunitas kami yang bersemangat dalam mengeksplorasi dunia ilmu pengetahuan dan pengetahuan. Ikuti kami di
        media sosial untuk mendapatkan informasi terbaru tentang acara, koleksi baru, dan kegiatan komunitas kami!
      </p>
    </article>
  </section>

  <img class="img-logo" src="../gambar/LOGO-PPKPI500.png" alt="Logo PPKPI">

  <h3>CINDAGA</h3>

</body>

</html>