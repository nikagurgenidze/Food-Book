<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

</head>
<style>

    .form{
        background-color: #8ba8af;
        width:470px;
        height: 610px;
        margin:0 auto;
        padding-left:38px;
        padding-top:15px;
    }
    .form fieldset{
        border:0px;
        padding:0px;
        margin:0px;}
    .form p.contact {
        font-size: 15px;
        margin:0px 0px 15px 0;
        line-height: 14px;
        font-family:Arial, Helvetica;
    }
    .form label {
        color: #886EA5;
        font-weight:bold;
        font-size: 18px;
        font-family:Arial, Helvetica;
    }
    .form input, #txtHint, #type, textarea {
        /*background-color: rgba(255, 255, 255, 0.4);*/
        border: 1px solid rgba(122, 192, 0, 0.15);
        padding: 7px;
        font-family: Keffeesatz, Arial;
        color: #4b4b4b;
        font-size: 17px;
        -webkit-border-radius: 5px;
        margin-bottom: 15px;
        margin-top: -10px; }
    .form input: focus, textarea:focus {
        border: 1px solid #ff5400;
        background-color: rgba(255, 255, 255, 1);
    }
    .form input, textarea {
        width: 400px;
    }
    #txtHint {
        width: 399.215px;
    }
    #type {
        width: 416.215px;
    }

    button
    {
        background: #5749D8;
        display: inline-block;
        padding: 5px 10px 6px;
        color: #fbf7f7;
        text-decoration: none;
        font-weight: bold;
        line-height: 1;
        -moz-border-radius: 5px;
        -webkit-border-radius: 5px;
        border-radius: 5px;
        -moz-box-shadow: 0 1px 3px #999;
        -webkit-box-shadow: 0 1px 3px #999;
        box-shadow: 0 1px 3px #999;
        text-shadow: 0 -1px 1px #222;
        border: none;
        position: relative;
        cursor: pointer;
        font-size: 14px;
        font-family:Verdana, Geneva, sans-serif;
    }
    button:hover
    {
        background-color: #160F54;
    }
    button
    {
        width:  399.215px;
        height: 50px;
    }


</style>
</head>
<body>


<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            </button>
            <a class="navbar-brand" href="<?php echo site_url('admin/logout')?>">Log Out</a>
        </div>
        </div></nav>


<div class="continer">
    <div class="form">
        <?php echo form_open_multipart('manage/information');?>
            <p class="contact"><label>კატეგორია</label></p>
            <select id="txtHint" name="cat_id">
                <option>აირჩიე კატეგორია</option>
                <option value="new">ახალი კატეგორია</option>
                <?php foreach($list as $item) { ?>
                    <option value="<?php echo $item['id']; ?>"><?php echo $item['name']; ?></option>
                <?php }?>
            </select>

            <p class="contact"><label>კატეგორია</label></p>
            <input type="text" name="category" placeholder="კატეგორია" disabled="disabled">

            <p class="contact"><label>სახელი</label></p>
            <input type="text" name="name" placeholder="სახელი">

            <p class="contact"><label>დახასიათება</label></p>
            <textarea type="text" name="description" placeholder="დახასიათება"></textarea>

            <p class="contact"><label>რეცეპტი</label></p>

            <textarea type="text" name="description" placeholder="რეცეპტი" ></textarea>

            <p class="contact"><label>ფაილის ატვირთვა</label></p>
            <input type="file" name="userfile" size="20" />


        <button type="submit" class='animated infinite pulse'>კერძის დამატება</button>
        </form>

    </div>
</div>


<?php
$json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';

var_dump(json_decode($json));
var_dump(json_decode($json, true));

?>





<script>

$('#txtHint').on('change', function() {
    if ( $(this).val() == 'new' ) {
        $('input[name="category"]').prop('disabled', false);
    }
});

</script>

</body>
</html>