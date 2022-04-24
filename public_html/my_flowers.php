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
   <title>Document</title>
</head>
<body>
    <div class="container-fluid" style="min-height: 100%;">
   <?php
      include 'view/header.php';
   ?>

   <div class="container" style="margin-top: 180px; max-width: 780px;">
      <h2 class="text-center mflower-header">Мои растения</h2>
      <?php include"db_connects/db_list_flowers.php";?>
      <style type="text/css">
        .my-flower-child{
          margin-top: 20px;
        }
        .my-flower-child p{
          padding-top:10px;
        }
        .mflower-header{
          font-size: 24px;
          font-weight: 500;
        }
      </style>
   </div>
   <div style="margin-top: 200px;"></div>
    <?php
      include 'view/footer.php';
      ?>
    </div>
     <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  <script src='assets/js/script.js'></script>
</body>
</html>