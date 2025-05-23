<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src = "https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
<div class="container mt-3">
    <h2 class="text-center">Login</h2>
    <form method="post">
        <div class="mb-3">
            <label>NAME:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Password:</label>
            <input type="password" name="password" class="form-control" required>
        </div>
<center>
    <div class="g-recaptcha" data-sitekey="6LfJXRorAAAAALJacbwq9AGnofbGdEjkUhL-jS5A"></div>
</center>
        <button class="btn btn-danger">Login</button>
        <a href="<?php echo base_url('index.php/main/register') ?>" class="btn btn-success">Create </a>
    </form>
</div>
</body>
</html>