<?php 
$arrFiles = array();
$iterator = new FilesystemIterator("assets/images/promos/");
foreach($iterator as $entry) {
    $arrFiles[] = $entry->getFilename();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="promociones, cerveza, modelhogar, mode, cordoba veracruz"/>
  <meta name="description" content="Depositos mode de venta de cerveza, refrescos, vinos y licores del centro de veracruz, siempre precios bajos"/>
  <meta http-equiv="cache-control" content="no-cache"/>
  <meta http-equiv="expires" content="0"/>
  <title>Promociones MODE</title>
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="assets/css/genstyle.css">
</head>
<body class="bg-c-blue">
  <header class="bg-head text-center py-1">
    <img src="assets/images/modelogo.png" height="50rem">
  </header>
  <div id="carouselPromos" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner bg-c-blue" id="promotionList">
     
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselPromos" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bg-control" aria-hidden="true"></span>
      <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselPromos" data-bs-slide="next">
      <span class="carousel-control-next-icon bg-control" aria-hidden="true"></span>
      <span class="visually-hidden">Siguiente</span>
    </button>
  </div>
  <footer class="bg-dark text-white text-center py-3 fixed-bottom">
    <span><i class="bi bi-telephone-inbound-fill mx-1"></i> QUEJAS Y SUGERENCIAS A LOS TELEFONOS <br> 271 712 4050 Y 271 712 9090</span>
  </footer>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded',function(){
      const arrayPromos = ["<?= implode('","',$arrFiles); ?>"];
      const uploadImages = document.querySelector('#promotionList');
      var statusone = true;
      
      arrayPromos.forEach(itemimage => {
        var divC = document.createElement("div");
        let img = document.createElement("img");
        if (statusone) {
          divC.classList.add("carousel-item","active");
          statusone = false;
        } else {
          divC.classList.add("carousel-item");
        }
        img.classList.add("d-block", "img-center", "img-fluid");
        img.setAttribute("src","assets/images/promos/"+itemimage);
        divC.append(img);
        uploadImages.append(divC);
      });
    });
  </script>
</body>
</html>