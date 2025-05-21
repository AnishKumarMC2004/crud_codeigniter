<!DOCTYPE html>
<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Add Form</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
        <h2 class="text-center">ADD FORM</h2>
        <div class="row">
                <div class="col-sm-4 col-sm-offset-4">
                        <form method="POST" action="<?php echo base_url(); ?>index.php/users/insert">
                                <div class="form-group">
                                        <label>Username:</label>
                                        <input type="text" class="form-control" name="name" required>
                                </div>
                                <div class="form-group">
                                        <label>Password:</label>
                                        <input type="text" class="form-control" name="password">
                                </div>
                                <div class="form-group">
                                        <label>Place:</label>
                                        <input type="text" class="form-control" name="place" required>
                                </div><br><br>
                               <center> <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button></center>
                        </form>
                </div>
        </div>
</div>
</body>
</html>