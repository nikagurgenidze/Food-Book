<!DOCTYPE html>
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
</head>
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

        <form action="<?php echo site_url('manage/update/'.$id['id']);?>" method="post" enctype="multipart/form-data">


            <p class="contact"><label>კატეგორია</label></p>
            <select id="txtHint" name="cat_id">
                <option>აირჩიე კატეგორია</option>
                <?php foreach($list as $item) { ?><?php if($item['name']==$id['category_name']){ ?>
                    <option value="<?php echo $item['id']; ?>" selected> <?php echo $item['name']; ?> </option>
                <?php }
                else {?>
                <option value="<?php echo $item['id']; ?>" > <?php echo $item['name']; ?> </option>
                <?php }}?>
            </select>




        <p class="contact"><label>სახელი</label></p>
        <input type="text" name="name" placeholder="სახელი" value="<?php echo $id['name']; ?>">

        <p class="contact"><label>დახასიათება</label></p>
        <textarea type="text" name="description" placeholder="დახასიათება"><?php echo $id['description']; ?></textarea>

        <p class="contact"><label>რეცეპტი</label></p>
        <textarea type="text" name="recipe" placeholder="რეცეპტი" ><?php echo $id['recipe']; ?></textarea>
        <p>
            <img src="<?php echo base_url('uploads/'.$id['image']);?>" alt="" height="90px">
        </p>
        <p class="contact"><label>ფაილის ატვირთვა</label></p>
        <input type="file" name="userfile" size="20" />


        <button type="submit" class='animated infinite pulse'>კერძის ცვლილება</button>
        </form>

    </div>
</div>


</body>
</html>

