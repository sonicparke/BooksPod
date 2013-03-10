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

// Get the latest variable from Pods URL
$id = pods_url_variable('last');

// Define the params to find the Pods Item based on the $id
$params = array( 'where' => 'permalink = "'.$id.'"' );

// Display it by using Pods Template
echo pods( 'books' )->find( $params )->template( 'bookdetail' );

?>