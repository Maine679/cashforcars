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

        <div class="hamburger-menu">
            <input id="menu__toggle" type="checkbox" />
            <label class="menu__btn" for="menu__toggle">
                <span></span>
            </label>
            <ul class="menu__box">
                <li><a class="menu__item" href="#">How it works</a></li>
                <li><a class="menu__item" href="#">Why choose us</a></li>
                <li><a class="menu__item" href="#">FAQs</a></li>
                <li><a class="menu__item" href="#">Contact</a></li>
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

<div class="second-screen">
    <div class="wrapper">
        <div class="div-block">
            <div class="for-description">
                <h1>We Pay Cash For Cars</h1>
                <div class="text">
                    <p>CashForCars is the safe, easy and cost effective alternative to selling your car to a dealer or through private advertisement. We guarantee to buy your car whatever the make, age, model or condition. No hassle, no time wasters, no bouncing cheques and no fees. Sell your car in Belfast today!</p>
                    <p>We operate from premises in the Belfast area and will buy cars throughout Northern Ireland.</p>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="gradient-container">
                <div class="gradient">
                    <div class="normalize-block">
                        <h1>How it works</h1>
                        <p>It's so easy to sell your car with CashForCars!</p>

                        <div class="container">
                            <div class="advantage">
                                <h1>1. Enter Your Details</h1>
                                <p>It takes just a few minutes to complete a form providing us with details of your vehicle. Answer a few questions about your cars mileage, age, condition, etc and fill in your personal details.</p>
                            </div>
                            <div class="advantage">
                                <h1>2. Receive a Price</h1>
                                <p>We will contact you within 24hrs. If you are satisfied with our valuation we will arrange for you to meet at our premises or for a member of the CashForCars team to visit you.</p>
                            </div>
                            <div class="advantage">
                                <h1>3. Sell Your Car</h1>
                                <p>Once you have met a member of our team the whole process should be concluded within 15–20 minutes. We will pay you by draft cheque or transfer the money securely by Faster Payments there and then, with no fees.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="third-screen">
    <div class="wrapper">

    </div>
</div>

@yield('content')

</body>
</html>
