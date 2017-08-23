<?php 
include ("include/header.php");
include('include/classes/User.php');
include('include/classes/Post.php');
   
    if(isset($_POST['post'])) {
      $post = new Post ($con, $userLoggedIn);
       $post->submitPost($_POST['post_text'],'none');
    }
    ?>

<!DOCTYPE html>
<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
<body>
   <div class= "user_details column">
   <a href= "#"> <img src= "<?php echo $user['profile_pic']; ?>"> </a>

    <div class= "user_details_left_right">
    <a href="#">
   <?php 
    echo $user["first_name"]. " ". $user["last_name"];
    ?>

    </a>
     <br>
    <?php echo "Posts: ". $user['num_posts']. "<br>";
    echo "likes: " . $user['num_likes'];
    ?> 
    </div>

   </div>
    <div class = "main_column column">
      <form class= "post_form" action="index.php" method= "POST">
       <textarea name="post_text" id="post_text" placeholder="Got something to say?"></textarea>
       <input type="submit" name="post" id="post_button" value="POST">
       <hr>

      </form>
    
       
           <div class="posts_area"></div>
           <img  id="#loading" src="assets/images/spinner.gif" width="50px" height="50px">
         </div>
         <script>
         var userLoggedIn = "<?php echo $userLoggedIn; ?>";

         $(document).ready(function() {
          
           $("#loading").show();


           //original ajax request for loading first posts
           $.ajax({
            url: "include/form handler/ajax_load_post.php",
            type:"POST",
            data: "page=1&userLoggedIn=" + userLoggedIn,
            cache:false,

            success: function(data){
              $('#loading').hide();
              $('.posts_area').html(data);

            }

           });
           $(window).scroll(function(){
            var height = $('.posts_area').height();
            var scroll_top = $(this).scrollTop();
            var page = $('.posts_area').find('.nextPage').val();
            var noMorePosts = $('.posts_area').find('.noMorePosts').val();

            if((document.body.scrollHeight == (document.documentElement.scrollTop || document.body.scrollTop) + window.innerHeight) && noMorePosts == 'false') {
              $('#loading').show();
              alert("hello");

                var ajaxReq = $.ajax({
                url: "include/form handler/ajax_load_post.php",
                type: "POST",
                data: "page=" + page + "&userLoggedIn=" + userLoggedIn,
                cache:false,

                success: function(response) {
                    $('.posts_area').find('.nextPage').remove();
                    $('.posts_area').find('.noMorePosts').remove();

                  $('#loading').hide();
                  $('.posts_area').append(response);
                }
               });
            }//End if statement

            return false;
           });// End (window)....
           


         });

          </script>
          </div>
</body>
</html>
