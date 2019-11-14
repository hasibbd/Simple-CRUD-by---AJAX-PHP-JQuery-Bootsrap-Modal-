<?php
include ("main.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="/css/style.css" rel="stylesheet"/>
    <title>Bootstrap 4 Starting Package</title>
</head>
<body>
<!--Header-->
<header class="pt-5 text-center">
    <div class="container">
        <h1 class="display-5">Ajax Simple CRUD With Bootstrap 4 Modal</h1>
    </div>
</header>
<hr>
<!--Header Close-->
<!--Section-->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <button class="btn btn-primary float-right" data-toggle="modal" data-target="#addModal">Add User
                </button>
            </div>
        </div>
        <p class="lead text-center bg-primary text-light my-3">All User</p>
        <div class="row">
            <div class="col-md-12" id="records_content">

            </div>
        </div>
    </div>
</section>
<!-- Section Close -->
<!-- Modal -->
<!--Modal For Add-->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="AddUserModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="AddUserModal">Add User Informations</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-group" action="" method="post">
                    <label for="add_user">User Names</label>
                    <input class="form-control" type="text" name="user" placeholder="User name" id="add_user">
                    <label for="add_user_contact">User Contact</label>
                    <input class="form-control" type="text" name="user_contact" placeholder="User Contact"
                           id="add_user_contact">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="add_user_submit">Add User</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!--Modal For Add Close-->
<!--Modal For Edit-->
<div class="modal fade" id="editMoadl" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit User Informations</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form class="form-group" action="" method="post" id="records_content_edit">

            </div>
            <div class="modal-footer">
                <form action="" method="post">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" name="update" class="btn btn-primary" id="edit_final">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!--Modal For Edit Close-->
<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/ajax.js"></script>
</body>
</html>
