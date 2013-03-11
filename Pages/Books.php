<?php
// Load the Header Code (CSS & JS on Doc Ready)
$params = array( 'limit' => 1 ); // Get the CSS in the bookscss template. limiting to one so it only loads once
$pod_books = pods( 'books', $params ); // Maps to the new find method
echo $pod_books->template( 'bookscss' ); // Display the template

// Grab the featured book pod record
$params = array( 'where'   => 't.featured_book = true', 'limit' => 1 ); // Get 3 records per page, ordered by name ascending
$pod_featured_book = pods( 'books', $params ); // Maps to the new find method
echo $pod_featured_book->find( $params )->template( 'featuredbook' ); // Display it to the template

// Grab the pod records
$params = array( 'orderby' => 'name ASC', 'limit' => 3 ); // Get 3 records per page, ordered by name ascending
$pod_books = pods( 'books', $params ); // Maps to the new find method
echo $pod_books->find( $params )->template( 'booklist' ); // Display it to the template
echo $pod_books->pagination(); // Display the pagination
?>