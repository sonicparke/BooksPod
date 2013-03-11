<?php
// Get the URL
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
// Parse the URL to get the last part of Path which in this case is the genre permalink
$parts=parse_url(curPageURL());
$path_parts=explode('/', $parts['path']);
$genre_url =  $path_parts[count($path_parts)-1];

// Load the Header Code (CSS & JS on Doc Ready)
$params = array( 'limit' => 1 ); // Get the CSS in the bookscss template. limiting to one so it only loads once
$pod_books = pods( 'books', $params ); // Maps to the new find method
echo $pod_books->template( 'bookscss' ); // Display the template

// Grab the pod records
$params = array( 'orderby' => 'name ASC', 'where'   => 'genre.permalink = "' . $genre_url . '"', 'limit' => 12 ); // Get 12 records per page, ordered by name ascending
$pod_books = pods( 'books', $params ); // Maps to the new find method
echo $pod_books->find( $params )->template( 'booklist' ); // Display it to the template
echo $pod_books->pagination(); // Display the pagination
?>