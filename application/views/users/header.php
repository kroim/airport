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
<div style="background-image: url(<?php echo base_url('assets/images/header1.png'); ?>);">
    <div class="container">
        <div class="logo" style="text-align: center; height: 100px; padding-top: 1%;">
            <img src="<?php echo base_url('assets/images/logo.png')?>" style="height: 100%;">
        </div>
        <div class="row" style="text-align: right; padding-right: 1%;">
            <div class="col-lg-11 col-sm-9"></div>
            <div class="col-lg-1 col-sm-3">
                <ul class="nav nav-pills">
                    <li><a href="<?php echo site_url('user/logout') ?>" style="color: yellow; background-color: coral">Logout</a></li>
                </ul>
            </div>
        </div>
        <div class="tab">
            <a href="<?php echo site_url('main/request') ?>"><button class="tablinks" style="color: black">Request List</button></a>
            <?php
            if($user['permission'] == 'manager'){
                ?>
                <a href="<?php echo site_url('main/mission') ?>"><button class="tablinks" style="color: black">Mission List</button></a>
                <?php
            }elseif ($user['permission'] == 'dispatcher'){
                ?>
                <a href="<?php echo site_url('main/mission') ?>"><button class="tablinks" style="color: black">Mission List</button></a>
                <a href="<?php echo site_url('control') ?>"><button class="tablinks" style="color: black">Control Panel</button></a>
                <?php
            }elseif ($user['permission'] == 'admin'){
                ?>
                <a href="<?php echo site_url('main/mission') ?>"><button class="tablinks" style="color: black">Mission List</button></a>
                <a href="<?php echo site_url('control') ?>"><button class="tablinks" style="color: black">Control Panel</button></a>
                <?php
            }
            ?>
            <a href="#"><button class="tablinks" data-toggle="modal" data-target="#select-table-modal" style="color: black">Get Report</button></a>
            <a><button class="tablinks" onclick="get_request_image()" style="color: black">Get Request Image</button></a>
        </div>
    </div>
</div>

<div class="modal fade" id="select-table-modal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="background-color: #d5d6d5">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title" style="font-family: 'Times New Roman'">Select Report Format</h3>
            </div>
            <form>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Request / Mission</h4>
                            <select class="form-control" id="select-re-mi">
                                <option value="re">Request</option>
                                <option value="mi">Mission</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <h4>English / Arabic</h4>
                            <select class="form-control" id="select-lang">
                                <option value="en">English</option>
                                <option value="ar">Arabic</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <h4 style="text-align: center;">Input Report Name</h4>
                            <input class="form-control" id="select-rname" placeholder="Report Name">
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" onclick="select_report_format()"> Get Report </button>
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>

    </div>
</div>