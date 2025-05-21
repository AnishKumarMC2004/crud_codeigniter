<!DOCTYPE html>
<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Edit page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
        <h1 class="page-header text-center">Update</h1>
        <div class="row">
                <div class="col-sm-4 col-sm-offset-4">
                        <?php extract($user); ?>
                        <form method="POST" action="<?php echo base_url(); ?>index.php/users/update/<?php echo $id; ?>">
                                <div class="form-group">
                                        <label>Name:</label>
                                        <input type="text" class="form-control" value="<?php echo $name; ?>" name="name">
                                </div>
                                <div class="form-group">
                                        <label>Place:</label>
                                        <input type="text" class="form-control" value="<?php echo $place; ?>" name="place">
                                </div> <br>
                                <center><button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</button></center>
                        </form>
                </div>
        </div>
</div>
</body>
</html>