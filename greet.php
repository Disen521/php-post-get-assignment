<!DOCTYPE html>
<html>
<head>
<title>Greeting</title>
<style>
body {
    margin: 0;
    height: 100vh;
    font-family: Arial, sans-serif;
    background: linear-gradient(135deg, #0f172a, #1e1b4b);
    display: flex;
    justify-content: center;
    align-items: center;
}

.card {
    background: rgba(255, 255, 255, 0.05);
    padding: 50px;
    border-radius: 25px;
    text-align: center;
    width: 400px;
    backdrop-filter: blur(10px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.5);
}

h1 {
    color: #a78bfa;
    font-size: 32px;
}

a {
    display: block;
    margin-top: 20px;
    color: #cbd5f5;
    text-decoration: none;
}
</style>
</head>
<body>

<div class="card">

<?php
if (isset($_GET["name"])) {
    $name = $_GET["name"];
    echo "<h1>Hello, $name!</h1>";
}
?>

<a href="index.php">Go Back</a>

</div>

</body>
</html>