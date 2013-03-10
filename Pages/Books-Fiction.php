<script>
// var urlPath = window.location.pathname;
var urlPath = 'fiction';
console.log('urlPath',urlPath);
</script>

<?php
function curPageURL() {
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}

echo curPageURL();
?>

<?php
$params = array( 'limit' => 1 ); // Get the CSS in the bookscss template. limiting to one so it only loads once
$pod_books = pods( 'books', $params ); // Maps to the new find method
echo $pod_books->template( 'bookscss' ); // Display the template
?>

<?php
$params = array( 'orderby' => 'name ASC', 'where'   => 'genre.permalink = "fiction"', 'limit' => 12 ); // Get 12 records per page, ordered by name ascending
$pod_books = pods( 'books', $params ); // Maps to the new find method
echo $pod_books->find( $params )->template( 'booklist' ); // Display it to the template
echo $pod_books->pagination(); // Display the pagination
?>