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
   <title>Document</title>
</head>
<body>
   <?php
      include 'view/header.php';
      include"db_connects/db_flower.php";
   ?>
   <div class="container flower-main ">
      <div class="flower-child1 row">
         <img src="<?=$result_inf['image']?>" alt="">
         <div class="flower-text d-flex flex-column">
            <h3><?=$result_inf['name']?></h3>
            <p>
               <?=$result_inf['inf']?>
            </p>
            <form action="db_connects/add_flow.php" method="post">
            <input type="hidden" value="<?=$_GET['id']?>" name="id">
            <input style="font-size: 26px;
            text-transform: uppercase;
            padding: 14px 28px;
            border: 3px solid lightgreen;
            margin: 0 10px;
            margin-top: 50px;
            background-color: #0000005c;
            color: lightgreen;
            border-radius: 40px;
            transition: all 0.25s;" type="submit" value="Добавить">
          </form>
         </div>
      </div>
      <div style="height: 400px;" class="tabs">
      <div class="flower-child2 d-flex">
         <button class="tabs-btn" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false">Климат</button>
         <button class="tabs-btn" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false">Освещение</button>
         <button class="tabs-btn" data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false">Поливка</button>
         <button class="tabs-btn" data-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false">Удобрения</button>
      </div>
        <div class="collapse show" id="collapseExample1">
           <div class="card card-body">
              <?=$result_inf['climate']?>
           </div>
        </div>
        <div class="collapse" id="collapseExample2">
           <div class="card card-body">
              <?=$result_inf['light']?>
           </div>
        </div>
        <div class="collapse" id="collapseExample3">
           <div class="card card-body">
              <?=$result_inf['water']?>
           </div>
        </div>
        <div class="collapse" id="collapseExample4">
           <div class="card card-body">
              <?=$result_inf['fertilize']?>
           </div>
        </div>
      </div>
      <?php
      include 'view/footer.php';
      ?>
   </div>
     <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
   <script type="text/javascript">
    $(document).ready(function(){
      $('.tabs-btn').click(function(){
        $('.collapse').removeClass("show");
      })
    })
  </script>
  <script src='assets/js/script.js'></script>
</body>
</html>