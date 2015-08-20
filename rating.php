<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>



    <style>

        @import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

        fieldset, label {
            margin: 0;
            padding: 0;
        }
        body {
            margin: 20px;
        }
        h1 {
            font-size: 1.5em;
            margin: 10px;
        }



        /****** Style Star Rating Widget *****/

        .rating {
            border: none;
            float: left;
        }

        .rating > input { display: none; }
        .rating > label:before {
            margin: 5px;
            font-size: 1.25em;
            font-family: FontAwesome;
            display: inline-block;
            content: "\f005";
        }

        .rating > .half:before {
            content: "\f089";
            position: absolute;
        }

        .rating > label {
            color: #ddd;
            float: right;
        }

        /***** CSS Magic to Highlight Stars on Hover *****/

        .rating > input:checked ~ label, /* show gold star when clicked */
        .rating:not(:checked) > label:hover, /* hover current star */
        .rating:not(:checked) > label:hover ~ label { color: #FFD700;  } /* hover previous stars in list */

        .rating > input:checked + label:hover, /* hover current star when changing rating */
        .rating > input:checked ~ label:hover,
        .rating > label:hover ~ input:checked ~ label, /* lighten current selection */
        .rating > input:checked ~ label:hover ~ label { color: #FFED85;  }



    </style>

    <script type="text/javascript" language="javascript" src="http://code.jquery.com/jquery-latest.js">  </script>

    <script>
        $(document).ready(function(){
            console.log("Function")
            $(".star_rating").click(function() {
                //echo("Click");
                console.log("Click");
                var voteId = this.id;
                console.log("VoteId - " + voteId)
             //   echo("VoteId - " + voteId);
                var value= this.value;
             //   echo(voteId + " - " + value);
                console.log(voteId + " - " + value);
                document.getElementById('star').value=value;
                alert(value)

                $.ajax({
                    type: "post",
                    url: "http://localhost:8080/foodbook/manage/rating",
                    data:'voteId='+voteId + '&value=' +value,
                    success: function(response){
                        try{
                            if(response){
                                alert('dawera');
                            }else{
                                alert('Sorry Unable to update..');
                            }
                        }catch(e) {
                            alert('Exception while request..');
                        }
                    },
                    error: function(){
                        alert('Error while request..');
                    }
                });
            });
        });
    </script>
</head>

<body>

<div id="container">

    <?php echo form_open('manage/rating');?>

<fieldset class="rating">
    <input type="radio" id="star5" class= "star_rating" name="rating" value="5" /><label class = "full" for="star5" title="5 stars"></label>
    <input type="hidden" id="star" name="star">
<!--    <input type="hidden" id="id" name="star" value="--><?php //echo $item['id'];?><!--">-->
    <input type="radio" id="star4half"  class = "star_rating"  name="rating" value="4.5" /><label class="half" for="star4half" title="4.5 stars"></label>

    <input type="radio" id="star4" class = "star_rating"  name="rating" value="4" /><label class = "full" for="star4" title="4 stars"></label>

    <input type="radio" id="star3half" class = "star_rating"  name="rating" value="3.5" /><label class="half" for="star3half" title="3.5 stars"></label>

    <input type="radio" id="star3" class = "star_rating" name="rating" value="3" /><label class = "full" for="star3" title="3 stars"></label>

    <input type="radio" id="star2half" class = "star_rating" name="rating" value="2.5" /><label class="half" for="star2half" title="2.5 stars"></label>

    <input type="radio" id="star2" class = "star_rating" name="rating" value="2" /><label class = "full" for="star2" title="2 stars"></label>

    <input type="radio" id="star1half" class = "star_rating" name="rating" value="1.5" /><label class="half" for="star1half" title="1.5 stars"></label>

    <input type="radio" id="star1" class = "star_rating" name="rating" value="1" /><label class = "full" for="star1" title="1 star"></label>

    <input type="radio" id="starhalf" class = "star_rating" name="rating" value="0.5" /><label class="half" for="starhalf" title="0.5 stars"></label>
</fieldset>
<?php echo form_close();?>
</div>
</body>
</html>
