<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/reset.css">
  <link rel="stylesheet" href="assets/css/default.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/media.css">
  <title>Каталог растений</title>
</head>
<body>
  <div class="container-fluid">
    <?php 
      include 'view/header.php';
    ?>
    <div style="width: 100; height: 80px;"></div>
      <main class="d-flex flex-column justify-content-between">
         <h3 class="text-center" style="margin: 30px;">Каталог</h3>
         <div class="container d-flex flex-row">
            <div class="catalog-category ">
               <ul class="d-flex flex-column justify-content-between">
                  <h5>Категории</h5>
                  <li><a href="/catalog.php?category=Хвойные">Хвойные</a></li>
                  <li><a href="/catalog.php?category=Папоротниковые">Папоротниковые</a></li>
                  <li><a href="/catalog.php?category=Деревья">Деревья</a></li>
                  <li><a href="/catalog.php?category=Кустарники">Кустарники</a></li>
                  <li><a href="/catalog.php?category=Цветы">Цветы</a></li>
               </ul>
             </div>
             <div class="row catalog" style="justify-content: space-evenly">
              <?php include"db_connects/select_catalog.php"; ?>
             </div>
         </div>
      </main>
      <?php 
        include 'view/footer.php';
      ?>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  <script src="assets/js/script.js"></script>
</body>
</html>
