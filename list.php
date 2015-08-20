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


<script type="text/javascript">
    $(document).ready(function(){
        $("#filter").keyup(function(){

            // Retrieve the input field text and reset the count to zero
            var filter = $(this).val(), count = 0;

            // Loop through the comment list
            $(".spec").each(function(){

                // If the list item does not contain the text phrase fade it out
                if ($(this).text().search(new RegExp(filter, "i")) < 0) {
                    $(this).closest('tr').fadeOut();

                    // Show the list item if the phrase matches and increase the count by 1
                } else {
                    $(this).closest('tr').show();
                    count++;
                }
            });

            // Update the count
            var numberItems = count;
            $("#filter-count").text("Number of Comments = "+count);
        });
    });
</script>


<style>


    .table{
        -webkit-box-shadow: 0px 3px 29px -8px rgba(115,115,115,1);
        -moz-box-shadow: 0px 3px 29px -8px rgba(115,115,115,1);
        box-shadow: 0px 3px 29px -8px rgba(115,115,115,1);
        margin-top: 80px;
    }

    tr{
        transition: all 0.5s;
     }



    .commentlist:nth-child(even)
    {
        background-color:rgb(252, 252, 252)
    }
    .commentlist:hover{
        background-color: rgb(243, 243, 243);
    }



</style>
</head>
<body>

<div class="container-list">
    <nav class="navbar navbar-default navbar-fixed-top">

    <div class="container-fluid">

        <div class="navbar-header">

            <h3>Admin Panel</h3>

        </div>



        <form class="navbar-form navbar-left" role="search">

            <div class="form-group">

                <input type="text" class="form-control" id="filter" value="" placeholder="Search"/>

                <a  href="<?php echo site_url('manage/show')?>"><button type="button"  class="btn btn-default navbar-btn">Show List</button></a>
                <a  href="<?php echo site_url('manage/add')?>"><button type="button"  class="btn btn-default navbar-btn">Add</button></a>
                <a  href="<?php echo site_url('manage/category')?>"><button type="button"  class="btn btn-default navbar-btn">Category Edit</button></a>
                <a  href="<?php echo site_url('admin/logout')?>"><button type="button"  class="btn btn-default navbar-btn">Log Out</button></a>

            </div>

        </form>
    </div>
</nav>

<script>
    $('#filter').on('keyup', function() {
        $('#export').attr('href', '<?php echo site_url("manage/export/"); ?>/' + $(this).val());
    });
</script>




<div class="table">

    <table class="table table-bordered">

        <tr>
            <th>კატეგორია</th>
            <th>Category</th>
            <th>სახელი</th>
            <th>Name</th>
            <th>დახასიათება</th>
            <th>Description</th>
            <th>რეცეპტი</th>
            <th>Recipe</th>
            <th>სურათი</th>
            <th>რეიტინგი</th>
            <th>მართვა</th>
        </tr>

        <?php
        foreach($list as $id => $item_name)
        {
            ?>

            <tr class="commentlist" id="id">

                <td class="spec"><p style="width: 150px;"><?=$item_name["category_name"];?></p></td>
                <td class="spec"><p style="width: 150px;"><?=$item_name["name_en"];?></p></td>
                <td><p style="width: 150px;"><?=$item_name["name"];?></p></td>
                <td><p style="width: 150px;"><?=$item_name["name_en"];?></p></td>
                <td><p style="width: 150px;"><?=$item_name["description"];?></p></td>
                <td><p style="width: 150px;"><?=$item_name["description_en"];?></p></td>
                <td><p style="width: 150px;"><?=$item_name["recipe"];?></p></td>
                <td><p style="width: 150px;"><?=$item_name["recipe_en"];?></p></td>
                <td><p style="width: 150px;"><img src="<?php echo base_url('uploads/'.$item_name["image"]);?>" height="80" width="80"></p></td>
                <td><p style="width: 150px;"><?=$item_name["rating"];?>    (<?=$item_name["votenumber"];?>)</p></td>

                <td>
                    <a  href="<?php echo site_url('manage/update/'.$item_name['id']);?>"><button type="button"  class="btn btn-default navbar-btn">Edit</button></a>
                    <a  href="<?php echo site_url('manage/row_delete/'.$item_name['id']);?>"><button type="button"  class="btn btn-default navbar-btn">Delete</button></a>
                    <input type="hidden" name="id" value="<?=$item_name["id"];?>">
                </td>
            </tr>
            <?php
        }
        ?>

    </table>
</div>
</div>

</body>
</html>