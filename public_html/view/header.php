
<header class="d-none d-lg-flex align-items-center" id="head">
      <div class="container">
        <div class="row d-flex align-items-center">
          <div class="col-md-3 text-left">
            <a href="http://v845316.hosted-by-vdsina.ru/"><img src="gallery/logo.png" alt="Agrotime.ru" style="display: inline; width: 100%;"></a>
          </div>
          <div class="col-md-1 text-center" style="padding: 0;">
            <a href="#about" style="font-size: 16px !important;">О нас</a>
          </div>
          <div class="col-md-2 text-center" style="padding: 0;">
            <a href="3d/"  style="font-size: 16px !important;">Топ растений</a>
          </div>
          <div class="col-md-1 text-center" style="padding: 0;">
            <a href="catalog.php"  style="font-size: 16px !important;">Каталог</a>
          </div>
          <div class="col-md-3 offset-md-2 d-flex justify-content-end align-items-center dropdown">
            <?php if($_COOKIE['name'] == ""): ?>
              <a href="auth.html">Вход / Регистрация</a>
            <?php else: ?>
                <span class="dropdown-toggle" id="dropdownMenuButton1" data-toggle="dropdown">Привет, <?=$_COOKIE['name']?></span>
            <?php endif;?>  
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="#">Личные данные</a></li>
              <li><a class="dropdown-item" href="/my_flowers.php">Мои растения</a></li>
              <li><a class="dropdown-item" href="/exit.php">Выйти</a></li>
            </ul>
            <img class="user-photo" src="gallery/user-icon-dev.jpg" alt="">
          </div>
        </div>

      </div>
    </header>



    <img id="burger" class="d-lg-none" src="gallery/burger.png" alt="BURGER!">
    <div class="sidebar d-lg-none d-flex flex-column w-100">
      <div class="sidebar-up d-flex flex-column align-items-center w-100">
        <a href="http://v845316.hosted-by-vdsina.ru/" style="width: 50%;min-width: 220px;"><img src="gallery/logo.png" alt="Agrotime.ru" style="display: block; width: 100%;"></a>
        <div class="d-flex align-items-center " style="font-size: 16px; color: antiquewhite;">
        <?php if($_COOKIE['name'] == ""): ?>
              <a href="auth.html">Вход / Регистрация</a>
            <?php else: ?>
                <span class="dropdown-toggle" id="dropdownMenuButton1" data-toggle="dropdown">Привет, <?=$_COOKIE['name']?></span>
            <?php endif;?>  
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="#">Личные данные</a></li>
              <li><a class="dropdown-item" href="/my_flowers.php">Мои растения</a></li>
              <li><a class="dropdown-item" href="/exit.php">Выйти</a></li>
            </ul>
            <img class="user-photo" src="gallery/user-icon-dev.jpg" alt="">
        </div>
      </div>
      <ul class="sidebar-up d-flex flex-column w-100" style="margin-top: 12px;">
        <a href="#about"><li class="text-center">О нас</li></a>
        <a href="/3d"><li class="text-center">Топ растений</li></a>
        <a href="catalog.php"><li class="text-center">Каталог</li></a>
      </ul>
    </div>



    <style>
      #burger{
        width: 50px;
        height: auto;
        position: fixed;
        top: 8px;
        right: 8px;
        z-index: 100;
        filter: hue-rotate(317deg);
        cursor: pointer;
      }
      .sidebar{
        z-index: 10;
        position: fixed;
        left: 0;
        top: 0;
        filter: drop-shadow(0 6px 6px #00000060);
        transform: translateY(-100%);
        }
        
      .show_sb{
        transform: translateY(0%);
      }

      .sidebar-up li{
        font-size: 17.5px;
        color: antiquewhite;
        padding: 8px;
      }
    header,.sidebar{
      transition: all 0.4s;
      background-color: var(--background_green_0);
    }
    .hide_head{
      transform: translateY(-80px);
    }
    .dropdown-menu{
      margin-top: 10px;
      width: 230px;
    }
    .dropdown-item{
      color: black !important;
      font-size: 18.5px !important;
      padding: 15px 8px;
      transition: all 0.25s;
    }
    .dropdown-item:hover{
      color: black !important;
    }
    #dropdownMenuButton1{
      user-select: none;
      cursor: pointer;
    }
  </style>