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
            border: 1px solid #ccc;
            background-color: #5cb85c;
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
            font-size: 17px;
        }

        /* Change background color of buttons on hover */
        div.tab button:hover {
            background-color: #ddd;
        }

        /* Create an active/current tablink class */
        div.tab button.active {
            background-color: #ccc;
        }

    </style>
</head>
<body>
<div style="background-image: url(<?php echo base_url('assets/images/header1.png'); ?>">
    <div class="container">
        <div class="row" style="text-align: right">
            <div class="col-lg-11 col-sm-9"></div>
            <div class="col-lg-2 col-sm-4">
                <ul class="nav nav-pills">
                    <li><a href="<?php echo site_url('main/request') ?>" style="color: #fbfff6; background-color: #0b1eff">Home Page</a></li>
                </ul>
            </div>
        </div>
        <div class="tab">
            <a href="<?php echo site_url('control/control_aircraft') ?>"><button class="tablinks" style="color: black">Aircraft</button></a>
            <a href="<?php echo site_url('control/control_airport') ?>"><button class="tablinks" style="color: black">Airport</button></a>
            <a href="<?php echo site_url('control/control_mission') ?>"><button class="tablinks" style="color: black">Mission</button></a>
            <a href="<?php echo site_url('control/control_request') ?>"><button class="tablinks" style="color: black">Request</button></a>
            <?php
            if($user['permission'] == 'admin'){
                ?><a href="<?php echo site_url('user/get_users') ?>"><button class="tablinks" style="color: black">User Management</button></a><?php
            }
            ?>

        </div>
    </div>
</div>

