<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="./beranda.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Climate Change | Web Prog Project</title>
</head>
<body>
  <div class="logo-container text-center" style="width:250px;height:200px;position:absolute;top:100px;">
    <img src="LogoWithName.png" style="width:100%;height:100%;">
  </div>
       <!-- 3D hover -->
       <div class="all">

        <div class="left" id="CarbonCalculator">
          <div class="text">Karbon kalkulator</div>
        </div>

        <div class="center" id="Donasi">
          <div class="explainer"><span>Start</span></div>
          <div class="text">Donasi</div>
        </div>

        <div class="right" id="Katalog">
          <div class="text">Katalog Informasi</div>
        </div>
        
      </div>
      <img src="FieldBackground.png" class="fixed-bottom w-100" style="height:300px;">
      <script>
       document.getElementById("Donasi").addEventListener('click', function() {
          window.location.href = '/donasi'; 
       });
       document.getElementById("CarbonCalculator").addEventListener('click', function() {
          window.location.href = '/kalkulatorkarbon'; 
       });
       document.getElementById("Katalog").addEventListener('click', function() {
          window.location.href = '/katalog'; 
       });
      </script>
       
 <script src="./beranda.js"></script>
</body>
</html>
