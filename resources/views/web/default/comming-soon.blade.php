<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="noindex,nofollow">
    <title>NTC Coming Soon Page</title>
    <meta name="description" content="">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i,800,800i,900,900i" rel="stylesheet">
    <style>
        /*
Template Name: Shortly
Version: 1.0.0
Theme URL: https://romanpixel.com/themes/shortly-free-coming-soon-page-template/
Author: RomanPixel
License: RomanPixel License
License URI: https://romanpixel.com/license/
*/
        html {
            box-sizing: border-box;
        }

        * {
            box-sizing: inherit;
        }

        body,
        html {
            height: 100%;
        }

        body {
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.7)), url("{{asset('assets/default/bg.jpg')}}");
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            font-family: 'Open Sans', sans-serif;
            margin: 0;
            position: relative;
        }
        textarea,
        input[type="text"],
        input[type="button"],
        input[type="submit"]{
            -webkit-appearance: none;
            opacity:1;
        }
        ::-webkit-input-placeholder {
            color: #dcdcdc;
        }

        ::-moz-placeholder {
            color: #dcdcdc;
        }

        :-ms-input-placeholder {
            color: #dcdcdc;
        }

        :-moz-placeholder {
            color: #dcdcdc;
        }

        .highlight {
            color: #ff303c;
        }


        /*-- loader  --*/
        .preloader.fade {
            opacitgy: 0;
        }
        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background:#312a2b;
            z-index:999;
        }
        #loader {
            display: block;
            position: relative;
            left: 50%;
            top: 50%;
            width: 150px;
            height: 150px;
            margin: -75px 0 0 -75px;
            border-radius: 50%;
            border: 3px solid transparent;
            border-top-color: #ff3f22;
            -webkit-animation: spin 2s linear infinite;
            animation: spin 2s linear infinite;
        }
        #loader:before {
            content: "";
            position: absolute;
            top: 5px;
            left: 5px;
            right: 5px;
            bottom: 5px;
            border-radius: 50%;
            border: 3px solid transparent;
            border-top-color: #ff3b00;
            -webkit-animation: spin 3s linear infinite;
            animation: spin 3s linear infinite;
        }
        #loader:after {
            content: "";
            position: absolute;
            top: 15px;
            left: 15px;
            right: 15px;
            bottom: 15px;
            border-radius: 50%;
            border: 3px solid transparent;
            border-top-color: #FF00FF;
            -webkit-animation: spin 1.5s linear infinite;
            animation: spin 1.5s linear infinite;
        }
        @-webkit-keyframes spin {
            0%   {
                -webkit-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
        @keyframes spin {
            0%   {
                -webkit-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        /*-- loader  --*/

        .content-wrap {
            margin: 20px auto 40px auto;
            max-width: 700px;
            padding: 0 15px;
            text-align: center;
        }

        .logo-box img {
            max-width: 110px;
        }

        .cta-box {}

        .cta-box h1 {
            color: #fff;
            font-size: 58px;
            font-weight: 800;
            text-shadow: 0 5px 10px rgba(0, 0, 0, 0.7);
        }

        .cta-box p {
            color: #fff;
            font-size: 20px;
            margin-top: 20px;
        }

        .newsletter {
            margin: 40px auto 0 auto;
            max-width: 450px;
            position: relative;
        }

        .newsletter .form-field {
            background: rgba(99, 99, 99, 0.5);
            border: 1px solid rgba(0, 0, 0, 0.17);
            border-radius: 30px;
            box-shadow: 0 0 0px 4px rgba(132, 115, 115, 0.28);
            color: #fff;
            font-size: 16px;
            height: 52px;
            padding: 0 20px 0 20px;
            width: 100%;
        }

        .newsletter .form-field:focus {
            border: 1px solid rgba(0, 0, 0, 0.17);
            box-shadow: 0 0 0px 4px rgba(132, 115, 115, 0.28);
            outline: none
        }

        .btn-main {
            background: linear-gradient(45deg, #ff0785, #ff5200);
            border: none;
            border-radius: 30px;
            color: #fff;
            cursor: pointer;
            font-size: 14px;
            font-weight: 600;
            height: 52px;
            position: absolute;
            top: 0;
            right: 0;
            padding: 0 20px;
            text-transform: uppercase;
            z-index: 11;
        }

        .btn-verify {
            background: linear-gradient(45deg, #077d0f, #16d423);
            border: none;
            border-radius: 30px;
            color: #fff;
            cursor: pointer;
            font-size: 14px;
            font-weight: 600;
            height: 52px;
            top: 0;
            right: 0;
            padding: 10px 20px;
            text-transform: uppercase;
            z-index: 11;
        }

        .btn-main:hover {
            background: linear-gradient(45deg, #ff5200, #ff0785);
            color: #fff;
        }

        .btn-main:focus {
            outline: none
        }

        .social-icons {
            margin-top: 20px
        }

        .social-icons a {
            padding: 0 10px;
        }

        .social-icons a:hover,
        .social-icons a:active,
        .social-icons a:visited {
            color: #fff;
        }

        .social-icons svg {
            fill: #fff;
            transition: all.2s ease-in-out;
            width: 20px;
        }

        .social-icons a:hover svg {
            transform: scale(1.1);
        }

        .countdown {
            color: #fff;
            margin-top: 40px;
        }

        .timer-cta {
            font-size: 18px;
        }

        .countdown ul {
            margin-top: 20px;
            padding-left: 0;
        }

        .countdown ul li {
            background: rgba(230, 230, 230, 0.12);
            border-radius: 100%;
            display: inline-block;
            height: 100px;
            list-style: none;
            position: relative;
            text-align: center;
            margin-right: 15px;
            width: 100px;
        }

        .time-box {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .time {
            font-size: 32px;
            font-weight: 800;
        }

        .time-txt {
            display: block;
            font-size: 12px;
        }

        @media screen and (min-width:1200px) {
            .content-wrap {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 700px;
            }
        }

        @media screen and (max-width:767px) {
            .content-wrap {
                margin-top: 80px;
                width: 100%;
            }
            .cta-box h1 {
                font-size: 28px;
            }
            .cta-box p {
                font-size: 17px;
            }
            .time {
                font-size: 22px;
            }
            .newsletter .form-field,
            .btn-main {
                height: 46px;
            }
            .countdown ul li {
                height: 75px;
                width: 75px;
            }
        }
    </style>
</head>
<body>
<div class="preloader" id="preloader">
    <div id="loader"></div>
</div>
<div class="content-wrap">
    <div class="cta-box">
        <h1>We Will Be Back <span class="highlight">Soon!</span></h1>
        <p>We are using this time to give our website a revamp!
            Please leave us your email and we will let you know when we are back up.
        </p>
    </div>
    <form action="" class="newsletter" name="newsletter" method="post">
        <input type="email" class="form-field" name="email" placeholder="Your Email">
        <button type="submit" class="btn-main">Notify me!</button>
    </form>
    <div class="social-icons">
        <a href="mailto: headoffice@unc-ac.us">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                <title>Mailto</title>
                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
            </svg>
        </a>
    </div>

    <form action="https://verify.ntc-ac.org/" class="newsletter" name="newsletter" method="post">
        <button type="submit" class="btn-verify">Verify Your Id</button>
    </form>
    <br>
</div>
<script>
    window.onload = function() {
        var preloader = document.getElementsByClassName('preloader')[0];
        setTimeout(function(){
            preloader.style.display = 'none';
        }, 2000);
    };

</script>
</body>
</html>
