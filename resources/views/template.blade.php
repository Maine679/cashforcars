<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="format-detection" content="telephone-no">
    <link rel="stylesheet" href="css/app.css">
    <link rel="shortcut icon" href="favicon.ico">

    <meta name="viewport" content="width=device-width">
</head>

<body>
<header class="header">
    <div class="header-content">

        <div class="logo">
            <a href="#" class="header__logo">
            <img src="image/logo.svg"  alt="CashForCars"/>
            </a>
        </div>

        <div class="menu-full">
            <ul id="navbar">
                <li><a href="#">How it works</a></li>
                <li><a href="#">Why choose us</a></li>
                <li><a href="#">FAQs</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </div>
</header>

<div class="first-screen">


    <div class="wrapper">

        <div class="for-details">
            <h1>Enter your vehicle details to receive a free valuation.</h1>
            <p>If your vehicle has <b>less than 100,000 miles</b> enter your vehicle and contact details and we will contact you with a cash valuation within 24 hours.</p>
        </div>
        <form name="" class="form-registration" method="" action="#">
                <input id="registration" type="text" placeholder="ENTER REG" size="40">

            <div class="checkboxes">
                <div class="checkbox-group"><input type="checkbox" class="checkbox"><label for="checkbox-1" class="label">I confirm that the vehicle I am enquiring about has less than 100,000 miles.</label></div>
            </div>
            <button class="button-reg" type="submit" value="Отправить"><i class="fa fa-arrow"><b>Get Started<b></b></i></button>
        </form>
    </div>
</div>



@yield('content')


</body>
</html>
