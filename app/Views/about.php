<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Employee List </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <div class="d-flex justify-content-end">
        <a href="<?php echo site_url('/add') ?>" class="btn btn-success mb-2">Add User</a>
    </div>
    <div class="mt-3">
        <table class="table table-bordered" id="users-list">
            <thead>
            <tr>
                <th>UID</th>
                <th>Name</th>
                <th>Email</th>
                <th>ContactNumber</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>

            <?php foreach($Users as $SQL)

            {?>
            <tr>
                <td><?php echo$SQL['UID'];?></td>
                <td><?php echo$SQL ['Name'];?></td>
                <td><?php echo$SQL ['Email'];?></td>
                <td><?php echo $SQL ['ContactNumber'];?></td>

                <td>
                    <a href="<?php echo base_url('update/'.$SQL['UID']); ?>" class="btn btn-primary btn-sm">Edit</a>
                    <a href="<?php echo base_url('delete/'.$SQL['UID']); ?>" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>
</body>
<script>
    function DeleteUser(ID) {
        // alert(name);
        alert(name);
    }
</script>
</html>
