<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slide Show</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="slider">
        <div class="sliders">
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">
            <input type="radio" name="radio-btn" id="radio5">

            <div class="slide first">
                <img src="img\town.jpg" alt="">
            </div>
            <div class="slide">
                <img src="img\village.jpg" alt="">
            </div>
            <div class="slide">
                <img src="img\town.jpg" alt="">
            </div>
            <div class="slide">
                <img src="img\village.jpg" alt="">
            </div>
            <div class="slide">
                <img src="img\town.jpg" alt="">
            </div>
            <!--automatic navigation start-->
            <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
                <div class="auto-btn4"></div>
                <div class="auto-btn5"></div>
            </div>
            <!--automatic navigation end-->
        </div>
        <!--MANUAL NAV START-->
        <div class="navigation-manual">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
            <label for="radio4" class="manual-btn"></label>
            <label for="radio5" class="manual-btn"></label>
        </div>
        <!--MANUAL NAV END-->
    </div>
</body>
</html>