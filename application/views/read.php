<!DOCTYPE html>
<html lang="en">
<head>
    <head>
    <title>All Records</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- jQuery and DataTables -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
</head>

</head>
<body>
<div class="container mt-5">
    <h2 class="text-center mb-4">Employee Details</h2>
<table id="employeeTable" class="table table-bordered ">
        <thead>

            <tr>
                <th>ID</th><th>Name</th><th>Age</th><th>Place</th><th>Action</th>
            </tr>
        </thead>
        <tbody>
            
        <?php foreach($workers as $work): ?>
            <tr>
                <td><?php echo $work->id ?></td>
                <td><?php echo $work->name ?></td>
                <td><?php echo $work->age ?></td>
                <td><?php echo $work->place ?></td>
                <td>
                    <a href="<?php echo base_url('index.php/main/update/'.$work->id) ?>" class="btn btn-primary btn-sm">Edit</a>
                    <a href="<?php echo base_url('index.php/main/delete/'.$work->id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Delete this record?');">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="<?php echo base_url('index.php/main/logout') ?>" class="btn btn-success">Logout</a>
</div>
</body>

<script>
    $(document).ready(function () {
        $('#employeeTable').DataTable();
    });
</script>

</html>
