<?php include 'includes/connection.php';
?>
<?php include 'includes/header.php';?>

   <?php include 'includes/navbar.php';?>


    <div class="container">
        <div class="row">

	        <div class="col-md-8">

<?php
$query = "SELECT * FROM posts WHERE status='published' ORDER BY updated_on DESC";
$run_query = mysqli_query($conn, $query) or die(mysqli_error($conn));

// find out the number of results stored in database
$number_of_results = mysqli_num_rows($run_query);
// define how many results you want per page
$results_per_page = 5;

// determine number of total pages available
$number_of_pages = ceil($number_of_results/$results_per_page);
// determine which page number visitor is currently on
if (!isset($_GET['page'])) {
  $page = 1;
} else {
  $page = $_GET['page'];
}

// determine the sql LIMIT starting number for the results on the displaying page
$this_page_first_result = ($page-1)*$results_per_page;
// retrieve selected results from database and display them on page
$sql="SELECT * FROM posts WHERE status='published' ORDER BY updated_on DESC LIMIT " . $this_page_first_result . ',' .  $results_per_page;
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));


if (mysqli_num_rows($result) > 0) {
while ($row = mysqli_fetch_assoc($result)) {
  $post_title = $row['title'];
  $post_id = $row['id'];
  $post_author = $row['author'];
  $post_date = $row['postdate'];
  $post_image = $row['image'];
  $post_content = $row['content'];
  $post_tags = $row['tag'];
  $post_status = $row['status'];
  if ($post_status !== 'published') {
    echo "NO POST exist";
  } else {

    ?>
<p><h2><a href="publicposts.php?post=<?php echo $post_id; ?>"><?php echo $post_title; ?></a></h2></p>
            <p><h3>by <a href="#"><?php echo $post_author; ?></a></h3></p>
            <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $post_date; ?></p>
            <hr><a href="publicposts.php?post=<?php echo $post_id; ?>">
            <img class="img-responsive img-rounded" src="allpostpics/<?php echo $post_image; ?>" alt="900 * 300"></a>
            <hr>
            <p><?php echo substr($post_content, 0, 300) . '.........'; ?></p>
            <a href="publicposts.php?post=<?php echo $post_id; ?>"><button type="button" class="btn btn-primary">Read More<span class="glyphicon glyphicon-chevron-right"></span></button></a>
            <hr>

            <?php }}}?>

            <hr>

        <ul class="pager">
              <li><a href="?page=1">First</a></li>
              <li class="<?php if($page <= 1){ echo 'disabled'; } ?>">
                  <a href="<?php if($page <= 1){ echo 'javascript:void(0)'; } else { echo "?page=".($page - 1); } ?>">Prev</a>
              </li>
              <li class="<?php if($page >= $number_of_pages){ echo 'disabled'; } ?>">
                  <a href="<?php if($page >= $number_of_pages){ echo 'javascript:void(0)'; } else { echo "?page=".($page + 1); } ?>">Next</a>
              </li>
              <li><a href="?page=<?php echo $number_of_pages; ?>">Last</a></li>
        </ul>
          </div>
	        <div class="col-md-4">
               <?php include 'includes/sidebar.php';
?>

	        </div>

        </div>

        <?php include 'includes/footer.php';?>

    </div>
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>

</body>
</html>
