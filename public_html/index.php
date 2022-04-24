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
  <title>agrotime.ru</title>
  <style>
    main,section{
      width: 100%;
    }
    .iframe_spliter{
      width: 100%;
      height: 1px;
      border-radius: 50%;
      margin: 0;
      padding: 0;
      background: -moz-linear-gradient(left,  rgba(30,87,153,0) 0%, rgba(52,102,159,0) 5%, rgba(250,235,215,1) 50%, rgba(138,190,230,0) 95%, rgba(125,185,232,0) 100%);
      background: -webkit-linear-gradient(left,  rgba(30,87,153,0) 0%,rgba(52,102,159,0) 5%,rgba(250,235,215,1) 50%,rgba(138,190,230,0) 95%,rgba(125,185,232,0) 100%);
      background: linear-gradient(to right,  rgba(30,87,153,0) 0%,rgba(52,102,159,0) 5%,rgba(250,235,215,1) 50%,rgba(138,190,230,0) 95%,rgba(125,185,232,0) 100%);
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#001e5799', endColorstr='#007db9e8',GradientType=1 );
    }
    .main_block2{
      height: 580px;
    }
    .main2-contentChild2{
      padding-top: 80px;
    }
  </style>
</head>
<body>
  <div class="container-fluid">
    <?php
    include 'view/header.php';
    ?>
      <main>
        
        <section class="main-block1 d-flex align-items-center">
          <div class="container main1-text w-lg-50 w-100 h-lg-50 d-flex flex-column justify-content-between text-center">
            <h1>AGROTIME</h1>
            <p>
              Сажай. Выращивай. Запечатляй.
            </p>
            <span>
              <a href="#footer"><button>Информация</button></a>
              <button>Топ растений</button>
              <button type="button" class="d-none btn btn-primary" id="liveToastBtn" >Показать лайв тосты</button>

<div class="position-fixed top-0 end-0 p-3" style="z-index: 5" >
  <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <img src="..." class="rounded me-2" alt="...">
      <strong class="me-auto">Bootstrap</strong>
      <small>11 мин назад</small>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Закрыть"></button>
    </div>
    <div class="toast-body">
      Привет, мир! Это тост-сообщение.
    </div>
  </div>
</div>
            </span>
          </div>
        </section>
        <section class="main-block2 d-flex align-items-center">
          <div class="container main2-content text-center d-flex flex-column justify-content-between">
            <div class="main2-contentChild1">
              <h2 id="about">О нас</h2>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Fugit quam eos debitis excepturi rem repellat veritatis 
                blanditiis nobis? Ratione porro alias maiores eos possimus 
                sit quibusdam, ipsum ut unde optio.
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                Voluptate rem placeat temporibus, fugiat voluptatibus repudiandae 
                dignissimos adipisci quam soluta voluptates?
              </p>
            </div>
            <div class="row main2-contentChild2 text-left">
              <div class="col-md-4 d-flex flex-row justify-content-center" style="padding-bottom: 8px;">
                <img style="height: 70px; margin-right: 20px;" src="gallery/icon (1).png" alt="icon1">
                <p style="width: 200px;">Добавляй растения и следи за этапами роста.</p>
              </div>
              <div class="col-md-4 d-flex flex-row justify-content-center" style="padding-bottom: 8px;">
                <img style="height: 70px; margin-right: 20px;" src="gallery/icon (2).png" alt="icon2">
                <p style="width: 200px;">Ищи информацию по уходу за своими саженцами.</p>
              </div>
              <div class="col-md-4 d-flex flex-row justify-content-center" style="padding-bottom: 8px;">
                <img style="height: 70px; margin-right: 20px;" src="gallery/icon (3).png" alt="icon3">
                <p style="width: 200px;">Делись достижениями в карточке своего растения.</p>
              </div>
            </div>
          </div>
        </section>
        <section class="main-block4" style="background-color: #272935;">
          <hr class="iframe_spliter">
          <iframe src="3d/index.html" frameborder="0" style="width: 100%;height: 560px;"></iframe>
          <hr class="iframe_spliter">
        </section>
      </main>

      <?php
      include 'view/footer.php';
      ?>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  <script src='assets/js/script.js'></script>
 
</body>
</html>
