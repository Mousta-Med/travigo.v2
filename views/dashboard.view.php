<?php
session_start();
if (!isset($_SESSION['name']) && !isset($_SESSION['password'])) {
    header("location: login?login=you must login");
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <a href="views/login.view.php?logout=1" type="button" class="btn btn-danger">Log out</a>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Tour Details
                            <a href="dashboard/add" class="btn btn-primary float-end">Add Tour</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tour image</th>
                                    <th>Tour Place</th>
                                    <th>Tour description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($tours = mysqli_fetch_assoc($sql)) { ?>
                                    <tr>
                                        <td><?= $tours['id'] ?></td>
                                        <td><?= $tours['tour_place'] ?></td>
                                        <td><?= $tours['tour_description'] ?></td>
                                        <td><img src="./public/img/<?= $tours['tour_image'] ?>" width="50" height="50" style="border-radius:5px;"></td>
                                        <td>
                                            <a href="dashboard/update/<?= $tours['id'] ?>" class="btn btn-success btn-sm">Edit</a>
                                            <a href="dashboard/delete/<?= $tours['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>


</html>