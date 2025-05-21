<!DOCTYPE html>
<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>CodeIgniter CRUD </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>">
</head>
<body>
<div class="container">
        <h1 class="page-header text-center">READ PAGE</h1>
 <div class="row">
    <div class="col-m-3">
        <a href="<?php echo base_url(); ?>index.php/users/addnew" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add New</a><br><br>
        
 <table class="table table-bordered table-striped">
  <thead>
         <tr>
           <th>ID</th>
           <th>Name</th>
           <th>Password</th>
           <th>Place</th>
           <th>Action</th>
        </tr>
  </thead>
 <tbody>
  <?php foreach($users as $user){?>   
        <tr>
            <td><?php echo $user->id; ?></td>
            <td><?php echo $user->name; ?></td>
            <td><?php echo $user->password; ?></td>
            <td><?php echo $user->place; ?></td>
            <td><a href="<?php echo base_url(); ?>index.php/users/edit/<?php echo $user->id; ?>" class="btn btn-success" onclick="return confirm('You Want to Edit this record?');">Edit</a>
            <a href="<?php echo base_url(); ?>index.php/users/delete/<?php echo $user->id; ?>" class="btn btn-danger" onclick="return confirm('Are You Sure To Delete this record?');">Delete</a
            ></td>
        </tr>
 <?php } ?>
</tbody>
</table>
  </div>
</div>
</div>
</body>
</html>