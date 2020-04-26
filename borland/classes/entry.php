<?php
class Entry {
    private $id;
    private $date;
    private $author;
    private $title;
    private $content;
}

$id = 1;
$date = '2020/01/01';
$author = 'me';
$title = $_POST['title'] ;
$content = $_POST['content'];


$conn = new mysqli("localhost", "root", "", "borland");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO bejegyzes VALUES ($id, '$date', '$author', '$title', '$content')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

