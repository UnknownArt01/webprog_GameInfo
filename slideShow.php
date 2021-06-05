<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slide Show</title>
    <link rel="stylesheet" href="style.css">
</head>
<body >
    <div class="unknown">
        <div class="slider">
        <div class="sliders">
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">
            <input type="radio" name="radio-btn" id="radio5">

            <div class="slide first">
                <img src="pict1.jpg" alt="">
            </div>
            <div class="slide">
                <img src="pict2.jpg" alt="">
            </div>
            <div class="slide">
                <img src="pict3.jpg" alt="">
            </div>
            <div class="slide">
                <img src="pict1.jpg" alt="">
            </div>
            <div class="slide">
                <img src="pict2.jpg" alt="">
            </div>
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
    </div>
    
    
</body>
</html>