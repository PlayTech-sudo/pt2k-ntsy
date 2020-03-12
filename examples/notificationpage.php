<?php

session_start();
error_reporting(0);




?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Material Dashboard by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-4">
              <div class="card">
                <?php
                $con=mysqli_connect("Localhost", "root", "", "form");
                if(mysqli_connect_errno()){
                  echo "Connection Fail".mysqli_connect_error();
                }

                $query="SELECT * FROM `notification` WHERE no='1'";
                $data=mysqli_query($con,$query);
                ?>
                <?php while($result=mysqli_fetch_assoc($data)): ?>
                
                <div class="card-header card-header-primary">
                  <h4 class="card-title"><?=$result['header'];?> </h4>
                  <p class="card-category"><br></p>
                </div>
                <div class="card-body">
                  <form action="databaseconn.php" method="POST">
                    <div class="row">
                      <div class="col-md-8">
                        <div class="form-group">
                          <label class="bmd-label-floating"></label>
                          <?php
                          echo $result['random'];
                          ?>
                          <input type="text" name="visiter_heading" class="form-control">
                        </div>
                      </div>
                      <?php endwhile; ?>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-4">
              <div class="card">
                <?php
                $con=mysqli_connect("Localhost", "root", "", "form");
                if(mysqli_connect_errno()){
                  echo "Connection Fail".mysqli_connect_error();
                }

                $query="SELECT * FROM `notification` WHERE no='2'";
                $data=mysqli_query($con,$query);
                ?>
                <?php while($result=mysqli_fetch_assoc($data)): ?>
                
                <div class="card-header card-header-primary">
                  <h4 class="card-title"><?=$result['header'];?> </h4>
                  <p class="card-category"><br></p>
                </div>
                <div class="card-body">
                  <form action="databaseconn.php" method="POST">
                    <div class="row">
                      <div class="col-md-8">
                        <div class="form-group">
                          <label class="bmd-label-floating"></label>
                          <?php
                          echo $result['random'];
                          ?>
                          <input type="text" name="visiter_heading" class="form-control">
                        </div>
                      </div>
                      <?php endwhile; ?>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-4">
              <div class="card">
                <?php
                $con=mysqli_connect("Localhost", "root", "", "form");
                if(mysqli_connect_errno()){
                  echo "Connection Fail".mysqli_connect_error();
                }

                $query="SELECT * FROM `notification` WHERE no='3'";
                $data=mysqli_query($con,$query);
                ?>
                <?php while($result=mysqli_fetch_assoc($data)): ?>
                
                <div class="card-header card-header-primary">
                  <h4 class="card-title"><?=$result['header'];?> </h4>
                  <p class="card-category"><br></p>
                </div>
                <div class="card-body">
                  <form action="databaseconn.php" method="POST">
                    <div class="row">
                      <div class="col-md-8">
                        <div class="form-group">
                          <label class="bmd-label-floating"></label>
                          <?php
                          echo $result['random'];
                          ?>
                          <input type="text" name="visiter_heading" class="form-control">
                        </div>
                      </div>
                      <?php endwhile; ?>
                    </div>
                  </form>
      </div>
    </body>
    </html>