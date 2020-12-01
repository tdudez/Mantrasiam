<?php
    include("action/server.php");
    $rtype = '1';
    if(isset($_POST['submit'])){
        $rtype = $_POST['type'];
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
    <div id="fullscreen_bg" class="fullscreen_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel panel-primary">
                                <div class="col text-right">
                                    <a href="menu.php">
                                        <button type="button" class="btn btn-primary">Menu</button>
                                    </a>
                                </div>
                                <div class="text-center">
                                    <h3 style="color:#2C3E50" >Financial Reports</h3>
                                </div>
                            <div class="text-center">
                                <form action="report.php" method="post">
                                    <h4><label for="Choose Report"  style="color:#E74C3C">Choose Report</label></h4>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-tasks"></span>
                                        </span>
                                        <select class="form-control" id="type" name="type">
                                            <option value="1" selected>วัตถุมงคล</option>
                                        </select>
                                    </div>                        
                                    </br>
                                    <button type="submit" class="btn btn-primary btn-lg btn3d" name="submit"><span class="glyphicon glyphicon-search"></span> View</button> 
                                </form>
                            </div>