<!DOCTYPE html>
<html>
<head>
    <title>title</title>
    <link href="<?php echo base_url('assets/bootstrap/dist/css/bootstrap.min.css')?>" rel="stylesheet">

    <script src="<?php echo base_url('assets/bootstrap/dist/js/bootstrap.min.js')?>"></script>

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
<div class="container" style="margin-bottom: 20px;">
    <div class="row" style="text-align: right">
        <div class="col-lg-1 col-sm-3">
            <ul class="nav nav-pills">
                <li><a href="<?php echo site_url('user/logout') ?>">Logout</a></li>
            </ul>
        </div>
    </div>
    <div class="tab">
        <a href="<?php echo site_url('clients') ?>"><button class="tablinks" style="color: black">Request List</button></a>
        <a href="<?php echo site_url('staff') ?>"><button class="tablinks" style="color: black">Mission List</button></a>
    </div>
</div>

