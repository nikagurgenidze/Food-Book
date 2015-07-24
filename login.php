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
            background: url(<?php echo base_url('assets/image/2.jpg');?>) no-repeat center center fixed;
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
            width: 100%;
            height: 100%;
        }
        .form {
            border-radius: 5px;
            opacity: .7;
            position: absolute;
            top: 39.5%;
            height: 131px;
            left: 53.2%;
            width: 181px;
            margin: -140px 0 0 -182px;
            padding: 40px;
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
            background:#CB7B3C;
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
            background: #311200;
        }

    </style>

</head>
<body>

<h1 align="center">FOOD BOOK</h1>

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
