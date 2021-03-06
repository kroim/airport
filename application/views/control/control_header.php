<!DOCTYPE html>
<html>
<head>
    <title><?php
        echo $title;
        ?></title>
    <link href="<?php echo base_url('assets/bootstrap/dist/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/DataTables/css/dataTables.bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/custom.css')?>" rel="stylesheet">
    <link rel="icon" href="<?php echo base_url(); ?>assets/images/icon1.png">

    <style>
        /* Style the tab */
        div.tab {
            overflow: hidden;
            text-align: center;
        }

        /* Style the buttons inside the tab */
        div.tab button {
            background-color: inherit;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
            font-size: 19px;
            font-family: fantasy;
        }

        /* Change background color of buttons on hover */
        div.tab button:hover {
            background-color: lightblue;
        }
    </style>
</head>
<body>
<div style="background-color: #ffffff; height: 150px; overflow: hidden;">
    <div class="row">
        <div class="col-md-3" style="height: 150px; text-align: center; padding-left: 2%;">
            <img src="<?php echo base_url('assets/images/logo.png')?>" style="height: 100%;">
        </div>
        <div class="col-md-7" style="height: 150px; position: relative;">
            <div class="tab" style="position: absolute; bottom: 0; left: 0; right: 10%; margin: auto;">
                <a href="<?php echo site_url('control/control_aircraft') ?>"><button class="tablinks" style="color: black">Aircraft</button></a>
                <a href="<?php echo site_url('control/control_airport') ?>"><button class="tablinks" style="color: black">Airport</button></a>
                <a href="<?php echo site_url('control/control_mission') ?>"><button class="tablinks" style="color: black">Mission</button></a>
                <a href="<?php echo site_url('control/control_request') ?>"><button class="tablinks" style="color: black">Request</button></a>
                <?php
                if($user['permission'] == 'admin'){
                    ?><a href="<?php echo site_url('user/get_users') ?>"><button class="tablinks" style="color: black">User</button></a><?php
                }
                ?>

            </div>
        </div>
        <div class="col-md-2" style="text-align: right; padding-right: 3%">

            <a href="<?php echo site_url('main/request') ?>" style="color: #fbfff6; background-color: #0b1eff"><button class="btn btn-info">Home Page</button></a>


        </div>
    </div>
</div>

