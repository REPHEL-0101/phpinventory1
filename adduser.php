<?php include('./constant/layout/head.php');?>
<?php include('./constant/layout/header.php');?>
<?php include('./constant/layout/sidebar.php');?> 

<?php include('./constant/connect.php'); ?>

<div class="page-wrapper">
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Add User Management</h3> 
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Add User</li>
            </ol>
        </div>
    </div>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8" style="margin-left: 10%;">
                <div class="card">
                    <div class="card-title">
                        <h4>Add User Form</h4>
                    </div>
                    <div id="add-brand-messages"></div>
                    <div class="card-body">
                        <div class="input-states">
                            <form class="form-horizontal" method="POST" id="addUserForm" action="php_action/createUser.php" enctype="multipart/form-data">
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Username</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="userName" id="userName" class="form-control" placeholder="Username" required="" pattern="^[a-zA-z0-9]+$">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" id="password" placeholder="Password" name="password" required="">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" name="create" id="createUserBtn" class="btn btn-primary btn-flat m-b-30 m-t-30">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('./constant/layout/footer.php');?>