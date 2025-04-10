<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <title>Login Page</title>
</head>
<body>
    <div class="login-container">
        <div class="image-container">
            <img src="{{ asset('image/pnlogo.png') }}" alt="Logo">
        </div>
        <div class="login-form">
            <form>
                <div class="form-group">
                    <label for="student-id">Faculty ID | Student ID:</label>
                    <input type="text" id="student-id" name="student-id" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit">Login</button>
                <div class="forgot-password">
                    <p><a href="#">Forgot Password?</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>