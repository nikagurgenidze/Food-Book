<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to CodeIgniter</title>

    <style type="text/css">
        body {
            /*background:url("https://fbcdn-sphotos-f-a.akamaihd.net/hphotos-ak-xfp1/t31.0-8/11083784_1458723654417928_77452602206025597_o.jpg") no-repeat center center fixed;*/
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            font-family: "Roboto";
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        body::before {
            z-index: -1;
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            /*background: #2ecc71;*/
            /* IE Fallback */
            /*background: rgba(46, 204, 113, 0.8);*/
            width: 100%;
            height: 100%;
        }
        .form {
            background-color: #8ba8af;
            position: absolute;
            top: 39.5%;
            height: 131px;
            border-radius: 22px;
            left: 51%;
            width: 181px;
            margin: -140px 0 0 -182px;
            padding: 40px;
            box-shadow: 0 0 3px rgba(0, 0, 0, 0.3);
        }

        .form input {
            outline: none;
            display: block;
            width: 100%;
            margin: 0 0 20px;
            padding: 10px 15px;
            border: 1px solid #ccc;
            color: #ccc;
            font-family: "Roboto";
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            font-size: 14px;
            font-wieght: 400;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            -webkit-transition: 0.2s linear;
            -moz-transition: 0.2s linear;
            -ms-transition: 0.2s linear;
            -o-transition: 0.2s linear;
            transition: 0.2s linear;
        }
        .form input:focus {
            color: #333;
            border: 1px solid#886EA5;
        }
        .form button {
            border-radius: 5px;
            cursor: pointer;
            background:#5749D8;
            width: 100%;
            padding: 10px 15px;
            border: 0;
            color: #fff;
            font-family: "Roboto";
            font-size: 14px;
            font-weight: 400;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            -webkit-transition: 0.2s linear;
            -moz-transition: 0.2s linear;
            -ms-transition: 0.2s linear;
            -o-transition: 0.2s linear;
            transition: 0.2s linear;
        }
        .form button:hover {
            background: #160F54;
        }
    </style>

</head>
<body>

<div id="container">
    <?php echo form_open('admin/login');?>


    <div class='form animated flipInX'>
        <form>
            <input placeholder='Username' name="username" type='text'>
            <input placeholder='Password'  name="password" type='password'>
            <button type="submit" class='animated infinite pulse'>Login</button>
        </form>
    </div>

    <?php echo form_close();?>
</div>

</body>
</html>
