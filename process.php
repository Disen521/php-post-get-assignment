<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$name = $_POST["username"];

header("Location: greet.php?name=" . urlencode($name));
exit();

}

?>