<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assets/js/bootstrap.min.js');?>"/>


    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="jquery.quicksearch.js"></script>
</head>

<style>
    .form{
        background-color: #8ba8af;
        width:470px;
        height: 390px;
        margin:80px auto;
        padding-left:38px;
        padding-top:15px;
</style>


<body>



<nav class="navbar navbar-default navbar-fixed-top">

    <div class="container-fluid">

        <div class="navbar-header">

            <h3>Admin Panel</h3>

        </div>



        <form class="navbar-form navbar-left" role="search">

            <div class="form-group">

                <a  href="<?php echo site_url('manage/show')?>"><button type="button"  class="btn btn-default navbar-btn">Show List</button></a>
                <a  href="<?php echo site_url('manage/add')?>"><button type="button"  class="btn btn-default navbar-btn">Add</button></a>
                <a  href="<?php echo site_url('manage/category')?>"><button type="button"  class="btn btn-default navbar-btn">Category Edit</button></a>
                <a  href="<?php echo site_url('admin/logout')?>"><button type="button"  class="btn btn-default navbar-btn">Log Out</button></a>

            </div>

        </form>
    </div>
</nav>


<div class="continer">
    <div class="form">
        <?php echo form_open_multipart('manage/category_update');?>
        <p class="contact"><label>კატეგორია</label></p>
        <select id="txtHint" name="cat_id">
            <option>აირჩიე კატეგორია</option>
            <?php foreach($list as $item) { ?>
                <option value="<?php echo $item['id']; ?>"><?php echo $item['name']; ?></option>
            <?php }?>
        </select>

        <p class="contact"><label>კატეგორია</label></p>
        <input type="text" name="category" placeholder="კატეგორია" >

        <p class="contact"><label>Category</label></p>
        <input type="text" name="category_en" placeholder="Category" >

        <p class="contact"><label>ფაილის ატვირთვა</label></p>
        <input type="file" name="userfile" size="20" />



        <button type="submit" class='animated infinite pulse'>კატეგორიის ცვლილება</button>
        <a  href="<?php echo site_url('manage/cat_delete/'.$item['id']);?>"><button type="submit"  class="animated infinite pulse">Cetegory Delete</button></a>
        </form>

    </div>
</div>


<?php
$json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';


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