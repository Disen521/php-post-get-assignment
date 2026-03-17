<!DOCTYPE html>
<html>
<head>
<title>Welcome</title>
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
    padding: 40px;
    border-radius: 20px;
    text-align: center;
    width: 350px;
    backdrop-filter: blur(10px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.5);
}

h1 {
    color: #a78bfa;
    margin-bottom: 10px;
}

p {
    color: #cbd5f5;
    margin-bottom: 20px;
}

input {
    width: 100%;
    padding: 12px;
    border-radius: 10px;
    border: none;
    outline: none;
    margin-bottom: 20px;
    background: rgba(255,255,255,0.1);
    color: white;
}

button {
    width: 100%;
    padding: 12px;
    border: none;
    border-radius: 10px;
    background: linear-gradient(90deg, #6366f1, #8b5cf6);
    color: white;
    font-weight: bold;
    cursor: pointer;
    transition: 0.3s;
}

button:hover {
    opacity: 0.8;
}
</style>
</head>
<body>

<div class="card">
    <h1>Welcome</h1>
    <p>Please enter your name to receive a greeting.</p>

    <form method="POST" action="process.php">
        <input type="text" name="username" placeholder="Enter your name" required>
        <button type="submit">Get Greeting</button>
    </form>
</div>

</body>
</html>