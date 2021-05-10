<?php
$connect_error = 'Sorry, we\'re experiencing connection issues.';
$conn = mysqli_connect('localhost', 'root', '');
mysqli_select_db($conn,'qlsv') or die($connect_error);
?>
