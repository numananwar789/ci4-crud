<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Application in CI4</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
</head>

<body>
    <div class="container-fluid bg_color">
        <div class="container pb-3 pt-3">
            <div class="text-white h5">CRUD Application in CI4</div>
        </div>
    </div>
    <div class="bg-white shadow-sm">
        <div class="container">
            <div class="row">
                <nav class="nav nav-underline">
                    <div class="nav-link">Books / View</div>
                </nav>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12 text-right">
                <a href="/books/create" class="btn btn-primary btn-sm">Add</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                if (!empty($session->getFlashdata('success'))) {
                ?>
                    <div class="alert alert-success mt-3">
                        <?php echo $session->getFlashdata('success') ?>
                    </div>
                <?php
                }
                ?>

                <?php
                if (!empty($session->getFlashdata('error'))) {
                ?>
                    <div class="alert alert-danger mt-3">
                        <?php echo $session->getFlashdata('error') ?>
                    </div>
                <?php
                }
                ?>
            </div>
            <div class="col-md-12 mt-3">
                <div class="card">
                    <div class="card-header bg_color">
                        <div class="card-header-title text-white"> Books </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-hover">
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>ISBN No</th>
                                <th>Action</th>
                            </tr>
                            <?php if (!empty($books)) {
                                foreach ($books as $book) {
                            ?>
                                    <tr>
                                        <td><?php echo $book['id'] ?></td>
                                        <td><?php echo $book['title'] ?></td>
                                        <td><?php echo $book['author'] ?></td>
                                        <td><?php echo $book['isbn_no'] ?></td>
                                        <td>
                                            <a href="<?php echo base_url('books/edit/' . $book['id']) ?>" class="btn btn-primary btn-sm">Edit</a>
                                            <a href="#" onclick="deleteConfirm(<?php echo $book['id'] ?>)" class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            <?php } else { ?>
                                <tr>
                                    <td colspan='5' class="text-center">No Record Found.</td>
                                </tr>
                            <?php } ?>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function deleteConfirm(id) {
            if (confirm('Are you sure you want to delete the record?')) {
                window.location.href = '<?php echo base_url('books/delete/') ?>/' + id;
            }
        }
    </script>
</body>

</html>