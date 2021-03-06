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
            /*background-color: #5cb85c;*/
            text-align: center;
        }

        /* Style the buttons inside the tab */
        div.tab button {
            background-color: inherit;
            color: black;
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
<!--<div style="background-image: url(--><?php //echo base_url('assets/images/header1.png'); ?><!--); height: 150px; overflow: hidden;">-->
<div style="background-color: #ffffff; height: 150px; overflow: hidden;">
    <div class="row">
        <div class="col-md-3" style="height: 150px; text-align: center; padding-left: 2%;">
            <img src="<?php echo base_url('assets/images/logo.png')?>" style="height: 100%;">
        </div>
        <div class="col-md-8" style="height: 150px; position: relative;">
            <div class="tab" style="position: absolute; bottom: 0; left: 0; right: 10%; margin: auto;">
                <a href="<?php echo site_url('main/request') ?>"><button class="tablinks">Request List</button></a>
                <?php
                if($user['permission'] == 'manager'){
                    ?>
                    <a href="<?php echo site_url('main/mission') ?>"><button class="tablinks">Mission List</button></a>
                    <?php
                }elseif ($user['permission'] == 'dispatcher'){
                    ?>
                    <a href="<?php echo site_url('main/mission') ?>"><button class="tablinks">Mission List</button></a>
                    <a href="<?php echo site_url('control') ?>"><button class="tablinks">Control Panel</button></a>
                    <a href="#"><button class="tablinks" data-toggle="modal" data-target="#select-table-modal">Get Report</button></a>
                    <a><button class="tablinks" onclick="get_request_image()">Get Request Image</button></a>
                    <?php
                }elseif ($user['permission'] == 'admin'){
                    ?>
                    <a href="<?php echo site_url('main/mission') ?>"><button class="tablinks">Mission List</button></a>
                    <a href="<?php echo site_url('control') ?>"><button class="tablinks">Control Panel</button></a>
                    <a href="#"><button class="tablinks" data-toggle="modal" data-target="#select-table-modal">Get Report</button></a>
                    <a><button class="tablinks" onclick="get_request_image()">Get Request Image</button></a>
                    <?php
                }
                ?>
            </div>
        </div>
        <div class="col-md-1">
            <ul class="nav nav-pills">
                <li><a href="<?php echo site_url('user/logout') ?>">Logout</a></li>
            </ul>
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
                        <div class="col-md-4">
                            <h4>Title Size</h4>
                            <input type="number" id="report-title-fontsize" value="14">
                        </div>
                        <div class="col-md-4">
                            <h4>Table header Size</h4>
                            <input type="number" id="report-table-header-fontsize" value="14">
                        </div>
                        <div class="col-md-4">
                            <h4>Table body Size</h4>
                            <input type="number" id="report-table-body-fontsize" value="14">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <h4 style="text-align: center;">Report Title</h4>
                            <input class="form-control" id="report-title" placeholder="Report Title" required>
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