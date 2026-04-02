<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login - Startup</title>
</head>
<body>
    <h2>Login Area</h2>
    <form action="/auth/process" method="POST">
        <label>Username:</label><br>
        <input type="text" name="username" required><br><br>
        
        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>
        
        <button type="submit">Masuk</button>
    </form>
</body>
</html>