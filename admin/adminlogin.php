<?php 
session_start();
include "adminpartials/adminhead.php";
?>

<div class="row">
  <div class="col-sm-4"></div>
  <div class="col-sm-4">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Admin Login</h3>
      </div>
      <form class="form-horizontal" action="handler/loginhandler.php" method="POST">
        <div class="box-body">
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
            </div>
          </div>
        </div>
        <div class="box-footer">
          <button type="submit" class="btn btn-info pull-right" name="Login">Login</button>
        </div>
      </form>
    </div>
  </div>
  <div class="col-sm-4"></div>
</div>