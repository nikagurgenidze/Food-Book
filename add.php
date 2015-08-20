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
    .container-list{
        background: url(../assets/image/12.jpg) no-repeat;
        filter: blur(10px);
       background-attachment: fixed;

    }
</style>


<body class="container-list">



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

            <p class="contact"><label>Category</label></p>
            <input type="text" name="category_en" placeholder="Category" disabled="disabled">

            <p class="contact"><label>სახელი</label></p>
            <input type="text" name="name" placeholder="სახელი">

            <p class="contact"><label>Name</label></p>
            <input type="text" name="name_en" placeholder="Name">

            <p class="contact"><label>დახასიათება</label></p>
            <textarea type="text" name="description" placeholder="დახასიათება"></textarea>

            <p class="contact"><label>Description</label></p>
            <textarea type="text" name="description_en" placeholder="Description"></textarea>

            <p class="contact"><label>რეცეპტი</label></p>
            <textarea type="text" name="recipe" placeholder="რეცეპტი" ></textarea>

            <p class="contact"><label>Recipe</label></p>
            <textarea type="text" name="recipe_en" placeholder="Recipe" ></textarea>

            <p class="contact"><label>ფაილის ატვირთვა</label></p>
            <input type="file" name="userfile" size="20" />


        <button type="submit" class='animated infinite pulse'>კერძის დამატება</button>
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