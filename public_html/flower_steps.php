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
    <style>
        html,body{
            width: 100%;
            height: 100%;
        }
        body{
            padding-top: 160px;
        }
        .steps-container{
            width: 80%;
            height: auto;
            background-color: white;
            border-radius: 30px;
            padding: 60px 100px;
        }
        .steps-container>*{
            margin-bottom: 5px;
        }
        .steps-container h2{
            font-size: 41px;
            font-weight: 500;
        }
        .steps-container>span{
            letter-spacing: 1px; 
            line-height: 22px;
        }
        .progress_bar{
            width: 100%;
            margin: 30px 0;
            transform: translateX(-12.5%);
            filter: drop-shadow(0px 6px 6px #00000070);
        }
        .progress_part{
            width: 25%;
            height: 60px;
        }
        .part_up{
            width: 100%;
            height: 80px;
            display: flex;
            align-items: center;
            position: relative;
            filter: brightness(0.4);
            transition: filter 0.7s;
        }
        .part_up hr{
            height: 3px;
            width: 100%;
            background-color: rgb(101 249 78 / 85%);
            border-radius: 50%;
        }

        .part_up.filed{
            filter: brightness(1);
        }
        
        .point{
            cursor: pointer;
            position: absolute;
            right: -18px;
            top: calc(50%-18px);
            width: 36px;
            height: 36px;
            background: rgb(239,211,28);
            background: -moz-radial-gradient(center, ellipse cover,  rgba(239,211,28,1) 28%, rgba(254,252,234,1) 90%);
            background: -webkit-radial-gradient(center, ellipse cover,  rgba(239,211,28,1) 28%,rgba(254,252,234,1) 90%);
            background: radial-gradient(ellipse at center,  rgba(239,211,28,1) 28%,rgba(254,252,234,1) 90%);
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#efd31c', endColorstr='#fefcea',GradientType=1 );
            border-radius: 50%;
            z-index: 10;
            transition: all 0.25s;
        }
        .point:hover{
            transform: scale(1.1);
        }
        .point:active{
            transform: scale(0.95);
        }
        .part_down span{
            transform: translateX(calc(50%));
        }
        .step-text_block{   
            width: 100%;
            height: auto;
            min-height: 200px;
            border-radius: 10px;
            border: 2px solid rgb(101 249 78);
            outline: 2px solid rgba(250, 235, 215, 0.844);
            background-color: antiquewhite;
            padding: 15px;
        }
        .step-note-name {
            font-size: 16px;
            margin-bottom: 10px;
            font-weight: 500;
        }
        .step-note-inf {
            margin-top: 10px;
            font-size: 14px;
        }
        .step-note-image > img{
            width: 250px;
            height: auto;
        }
        .step-text_block>div{
            display: none;
            opacity: 0;
            width: 100%;
            font-size: 1.5em;
            transition: all 0.6s;
        }
        .show_p{
            display: block !important;
            opacity: 1 !important;
        }
    </style>
    <link rel="stylesheet" href="assets/css/media.css">

    <title>"Flower Steps"</title>
</head>

<body class="d-flex flex-column justify-content-center align-items-center">
    <?php
    include 'view/header.php';
    include 'db_connects/db_steps.php';
    ?>
    <div style="margin-top: 200px;" class="steps-container d-flex flex-column justify-content-center align-items-center">
        <h2>Этап роста</h2>
        <span>*<?=$row_history['name'];?>*</span>
        <span>Следующий полив через <?=$time_water_hour;?> часов.</span>
        <div class="progress_bar d-flex">

            <div class="progress_part d-flex flex-column">
                <div class="part_up" style="z-index: 5;">
                    <div class="point" step=1></div>
                </div>
                <div class="part_down d-flex justify-content-end">
                    <span>Семя</span>
                </div>
            </div>
            
            <div class="progress_part d-flex flex-column">
                <div class="part_up" style="z-index: 4;">
                    <div class="point" step=2></div>
                    <hr>
                </div>
                <div class="part_down d-flex justify-content-end">
                    <span>Проростание</span>
                </div>
            </div>
            
            <div class="progress_part d-flex flex-column">
                <div class="part_up" style="z-index: 3;">
                    <div class="point" step=3></div>
                    <hr>
                </div>
                <div class="part_down d-flex justify-content-end">
                    <span>Проросток</span>
                </div>
            </div>
            
            <div class="progress_part d-flex flex-column">
                <div class="part_up" style="z-index: 2;">
                    <div class="point" step=4></div>
                    <hr>
                </div>
                <div class="part_down d-flex justify-content-end">
                    <span>Взрослое растение</span>
                </div>
            </div>

        </div>
        <div class="step-text_block">
            <div>
                <?php include 'db_connects/inf_step1.php';?>
            </div>
            <div>
                <?php include 'db_connects/inf_step2.php';?>
            </div>
            <div>
                <?php include 'db_connects/inf_step3.php';?>
            </div>
            <div>
                <?php include 'db_connects/inf_step4.php';?>
            </div>
        </div>
    </div>
        <?php include 'view/footer.php';?>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <!-- <script src='assets/js/script.js'></script> -->
    <script type="text/javascript">
        let stepsss = $('.part_up')
        let step_text = $('.step-text_block>div')

        function fill_steps(step) {
            $(step_text[step-1]).addClass('show_p')
          setTimeout(() => {
            for (let index = 0; index < step; index++) {
                const element = stepsss[index];
                $(element).addClass('filed');
            }
          }, 1300);
        }
        $('.point').click(function(){
            step_text.removeClass('show_p');
            let step_now = $(this).attr('step') - 1;
            $(step_text[step_now]).addClass('show_p');
        })
        // <?php $step?>
        // Функсия куда подставлять цифру этапа роста ///   <?php echo $echo;?>  <-- ставишь вместо цифры///
            fill_steps( <?=$row_history['step'];?> )
        // ---------------------------------------
    </script>
</body>
</html>