<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center">Update Record</h2>
    <form method="post">
        <div class="mb-3">
            <label>Name:</label>
            <input type="text" name="name" value="<?php echo $work->name ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Age:</label>
            <input type="number" name="age" value="<?php echo $work->age ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Place:</label>
            <input type="text" name="place" value="<?php echo $work->place ?>" class="form-control" required>
        </div>
        <button name="update" class="btn btn-warning">Update</button>
        <a href="<?php echo base_url('index.php/main/read') ?>" class="btn btn-secondary">Back</a>
    </form>
</div>
</body>
</html>