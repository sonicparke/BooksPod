<?php
// Load the Header Code (CSS & JS on Doc Ready)
$params = array( 'limit' => 1 ); // Get the CSS in the bookscss template. limiting to one so it only loads once
$pod_books = pods( 'books', $params ); // Maps to the new find method
echo $pod_books->template( 'bookscss' ); // Display the template

// Grab the pod record
$id = pods_url_variable('last'); // Get the latest variable from Pods URL
$params = array( 'where' => 'permalink = "'.$id.'"' ); // Define the params to find the Pods Item based on the $id
echo pods( 'books' )->find( $params )->template( 'bookdetail' ); // Display it by using Pods Template
?>