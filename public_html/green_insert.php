<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/default.css">
  <link rel="stylesheet" href="assets/css/reset.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Document</title>
</head>
<body>
  <?php 
    include "view/header.php";
  ?>
   <div style="max-width: 700px; margin: 0 auto;">
    <style type="text/css">
      input{
        margin-top: 10px;
      }
    </style>
      <form action="db_connects/flowers_ins.php" method="post" class="d-flex flex-column justify-content-evenly" style="margin: 120px 0 50px 0">
        <br/>
         <h3 class="text-center">Добавить растение</h3>
         <div class="d-flex flex-column justify-content-around h-100">
            <input type="text" class="form form-control" name="name" placeholder="Название" id="">
            <textarea name="inf" class="form form-control" placeholder="Информация"></textarea>
            <select name="category" class="form-select" required>
              <option selected value="Хвойные">Хвойные</option>
              <option selected value="Папоротниковые">Папоротниковые</option>
              <option selected value="Деревья">Деревья</option>
              <option selected value="Кустарники">Кустарники</option>
              <option selected value="Цветы">Цветы</option>
            </select>
<!--             <input type="text" class="form form-control" name="category" placeholder="Категория" id="">
 -->            <input type="text" class="form form-control" name="climate" placeholder="Климат" id="">
            <input type="text" class="form form-control" name="light" placeholder="Освещение" id="">
            <input type="text" class="form form-control" name="water" placeholder="Полив" id="">
            <input type="text" class="form form-control" name="fertilize" placeholder="Удобрение" id="">
            <input type="text" class="form form-control" name="image" placeholder="Url картинки" id="">
            <input type="text" class="form form-control" name="time_water" placeholder="Период полива (в часах)" id="">
            <input type="text" class="form form-control" name="season" placeholder="Сезон (месяц числом)" id="">
            <input type="text" class="form form-control" name="step_1" placeholder="Семя (дни числом)" id="">
            <input type="text" class="form form-control" name="step_2" placeholder="Прорастание (дни числом)" id="">
            <input type="text" class="form form-control" name="step_3" placeholder="Проросток (дни числом)" id="">
            <input type="text" class="form form-control" name="step_4" placeholder="Взрослое растение (дни числом)" id="">
            <input type="submit" value="Добавить" class="btn btn-success">
         </div>
      </form>
   </div>
   <?php 
      include "view/footer.php";
    ?>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  <script src="assets/js/script.js"></script>
</body>
</html>