<?php include 'includes/header.php';?>
    <!-- Navigation -->
<?php include 'includes/navbar.php';?>
<?php
if (isset($_GET['post'])) {
    $post = $_GET['post'];
    if (!is_numeric($post)) {
      header("location:index.php");

    } 
}
else {
    header('location: index.php');
}
$query = "SELECT * FROM posts WHERE id=$post";
$run_query = mysqli_query($conn, $query) or die(mysqli_error($conn)) ;
if (mysqli_num_rows($run_query) > 0 ) {
while ($row = mysqli_fetch_array($run_query)) {
	$post_title = $row['title'];
	$post_id = $row['id'];
	$post_author = $row['author'];
	$post_date = $row['postdate'];
	$post_image = $row['image'];
	$post_content = $row['content'];
	$post_tags = $row['tag'];
	$post_status = $row['status'];

	?>
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-8">

                <!--First Post -->
                <hr>
	       		<p><h2><a href="#"><?php echo $post_title; ?></a></h2></p>
                <p><h3>by <a href="#"><?php echo $post_author; ?></a></h3></p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $post_date; ?></p>
                <hr>
                <img class="img-responsive img-rounded" src="allpostpics/<?php echo $post_image; ?>" alt="900 * 300">
                <hr>
                <div style="text-align:center; margin-top:50px;"><p><?php echo $post_content; ?></p></div>
                <hr>
                <?php }} else { header("location: index.php"); } ?>
                
                <a type="button" name="cancel" class="btn btn-primary" href="index.php" >Back</a>
                <hr>
                
                <div id="disqus_thread"></div>
                <script>
                    /**
                    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                    
                    var disqus_config = function () {
                    this.page.url = 'http://localhost/Amini-zambia/blog/publicposts.php?post=<?php echo $post_id; ?>';  // Replace PAGE_URL with your page's canonical URL variable
                    this.page.identifier = '/publicposts.php?post=<?php echo $post_id; ?>'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                    };
                    
                    (function() { // DON'T EDIT BELOW THIS LINE
                    var d = document, s = d.createElement('script');
                    s.src = 'https://aminicpr-org.disqus.com/embed.js';
                    s.setAttribute('data-timestamp', +new Date());
                    (d.head || d.body).appendChild(s);
                })();
                </script>
                <!-- <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript> -->
    </div>


            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

               <?php include 'includes/sidebar.php';
?>
            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
       <?php include 'includes/footer.php';?>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script id="dsq-count-scr" src="//aminicpr-org.disqus.com/count.js" async></script>
</body>
</html>