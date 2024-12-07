<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./bagaimana.css" />
  <title>Bagaimana?</title>
</head>
@include('layout.navbar')
<body>
  <div class="flipbook">
    <!-- Cover Page -->
    <div class="hard ">
    <img src="GlobalWarmingCover.png" style="object-fit:cover;width: 100%; height: 100%;">
    </div>
    <div class="hard"></div>

    <!-- Page 1 -->
    <div>
      <div class="page-content">
        <h2>Apa yang Bisa Kamu Lakukan untuk Mengurangi Pemanasan Global?</h2>
        <div class="actions">
          <div class="action-item">
            <img src="./plastic-bag.jpeg" alt="Reduce Plastic Bags" />
            <p>Kurangi kantong plastik untuk belanja</p>
          </div>
          <div class="action-item">
            <img src="./tree.jpeg" alt="Plant Trees" />
            <p>Tanam Pohon</p>
          </div>
          <div class="action-item">
            <img src="./electronics.jpeg" alt="Turn Off Electronics" />
            <p>Matikan peralatan elektronika jika tidak dipakai</p>
          </div>
          <div class="action-item">
            <img src="./lamp.jpeg" alt="Turn Off Lights" />
            <p>Matikan lampu jika tidak di ruangan</p>
          </div>
          <div class="action-item">
            <img src="./secondhand.jpeg" alt="Buy Secondhand" />
            <p>Beli baju preloved/secondhand</p>
          </div>
          <div class="action-item">
            <img src="./bicycle.jpeg" alt="Use a Bicycle" />
            <p>Gunakan Sepeda</p>
          </div>
          <div class="action-item">
            <img src="./compost.jpeg" alt="Compost" />
            <p>Kompos</p>
          </div>
          <div class="action-item">
            <img src="./tissue.jpeg" alt="Reduce Tissue Usage" />
            <p>Kurangi penggunaan tisu</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Page 2 -->
    <div>
      <div class="page-content">
        <h2>Apa yang akan kita lakukan</h2>
        <img src="public/images/river.jpeg" alt="river" class="page-image" />
        <p>
          Tanggal 29 November, kami akan melaksanakan aksi bersih-bersih sampah dan sungai sebagai bagian dari upaya untuk mengurangi dampak pemanasan global. Sampah yang mencemari lingkungan, terutama di sungai-sungai, bukan hanya merusak keindahan alam, tetapi juga memperburuk perubahan iklim. Sampah yang terbuang sembarangan dapat menghambat aliran air, meningkatkan emisi gas rumah kaca, dan memperburuk polusi. Melalui kegiatan ini, kami berupaya mengurangi pencemaran dan mendorong kesadaran masyarakat untuk menjaga kebersihan lingkungan, sehingga turut berkontribusi dalam mitigasi pemanasan global dan menciptakan ekosistem yang lebih sehat bagi generasi mendatang.
        </p>
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
</html>
