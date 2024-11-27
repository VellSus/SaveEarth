<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./CeritaBunga.css" />
</head>

<body>
@include('layout.navbar')
  <div class="flipbook">
    <!-- Cover Page -->
    <div class="hard ">
    <img src="CeritaPohonCover.png" style="object-fit:cover;width: 100%; height: 100%;">
    </div>
    <div class="hard"></div>

    <!-- Page 1 -->
    <div>
      <div class="page-content">
        <h2>Menentukan jenis pohon yang ditanam</h2>
        <div class="actions">
          <div class="action-item">
            <img src="pertimbangkantujuan.jpg"/>
            <p>Pertimbangkan tujuan Anda</p>
          </div>
          <div class="action-item">
            <img src="pikirkaniklim.jpg"/>
            <p>Pikirkan iklim di tempat anda</p>
          </div>
          <div class="action-item">
            <img src="pertimbangkankondisi.jpg"/>
            <p>Pertimbangkan kondisi tanah</p>
          </div>
          <div class="action-item">
            <img src="pelajariaturan.jpg"/>
            <p>Pelajari aturan di daerah Anda untuk menggali lubang dan menanam pohon</p>
          </div>
          <div class="action-item">
            <img src="konsultasi.jpg"/>
            <p>Berkonsultasilah kepada orang yang profesional</p>
          </div>
          <div class="action-item">
            <img src="belilah.jpg"/>
            <p>Belilah pohon</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Page 2 -->
    <div>
      <div class="page-content">
        <h2>Persiapan untuk menanam pohon</h2>
        <div class="actions">
          <div class="action-item">
            <img src="pilihlahwaktu.jpg"/>
            <p>Pilihlah waktu yang tepat untuk menanam pohon</p>
          </div>
          <div class="action-item">
            <img src="indomanaada.jpg"/>
            <p>Pilihlah musim yang tepat untuk menanam pohon</p>
          </div>
          <div class="action-item">
            <img src="siapkanpohon.jpg"/>
            <p>Siapkan pohon untuk ditanam</p>
          </div>
          <div class="action-item">
            <img src="ketahuilah.jpg"/>
            <p>Ketahuilah jika menanam pohon dari biji buah, maka Anda tidak akan mendapatkan jenis pohon yang sama</p>
          </div>
        </div>
      </div>
    </div>

        <!-- Page 3 -->
        <div>
      <div class="page-content">
        <h2>Menanam Pohon</h2>
        <div class="actions">
          <div class="action-item">
            <img src="tentukan.jpg"/>
            <p>Tentukan di mana akan menanam pohon dan menandai lokasinya</p>
          </div>
          <div class="action-item">
            <img src="ukurlah.jpg"/>
            <p>Ukurlah bola akar</p>
          </div>
          <div class="action-item">
            <img src="siapkanlubang.jpg"/>
            <p>Siapkan lubang untuk pohon</p>
          </div>
          <div class="action-item">
            <img src="masukan.jpg"/>
            <p>Masukkan pohon ke dalam lubang pelan-pelan</p>
          </div>
          <div class="action-item">
            <img src="posisikan.jpg"/>
            <p>Posisikan pohon</p>
          </div>
          <div class="action-item">
            <img src="isikembali.jpg"/>
            <p>Isi kembali lubang</p>
          </div>
          <div class="action-item">
            <img src="tonggak.png"/>
            <p>Pasang tonggak kayu jika perlu</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Page 4 -->
    <div>
      <div class="page-content">
        <h2>Merawat Pohon</h2>
        <div class="actions">
          <div class="action-item">
            <img src="merawat.png"/>
            <p>Sirami pohon yang baru ditanam</p>
          </div>
          <div class="action-item">
            <img src="mulsa.jpg"/>
            <p>Gunakan mulsa</p>
          </div>
          <div class="action-item">
            <img src="pangkas.jpg"/>
            <p>Pangkaslah pohon jika perlu</p>
          </div>
          <div class="action-item">
            <img src="nikmati.jpg"/>
            <p>Nikmati pohon ketika tumbuh selama bertahun-tahun</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Back Cover -->
    <div class="hard"></div>
    <div class="hard"></div>
  </div>
  
  <!-- Scripts -->
  <script src="./jquerybagaimana.js"></script>
  <script src="./turnBagaimana.js"></script>
  <script>
    $(document).ready(function () {
      $(".flipbook").turn();
    });
  </script>
</body>

