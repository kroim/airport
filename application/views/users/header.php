<!DOCTYPE html>
<html>
<head>
    <title>title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">

    <link rel="stylesheet" href="<?php echo base_url('assets/back/css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/back/css/colors/main.css'); ?>" id="colors">

    <link rel="stylesheet" href="<?php echo base_url('assets/back/calendar/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/back/calendar/fullcalendar.min.css'); ?>">


    <script type="text/javascript" src="<?php echo base_url('assets/back/scripts/jquery-2.2.0.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/table/js/jquery-2.1.4.min.js')?>"></script>
    <script src="<?php echo base_url('assets/back/calendar/bootstrap.min.js')?>"></script>

    <link rel="icon" href="<?php echo base_url('assets/images/icon1.png'); ?>">
    <style>
        .modal-dialog{
            margin: 200px auto;
        }
        a{
            text-decoration: none !important;
        }
        /* For Firefox */
        input[type='number'] {
            -moz-appearance:textfield;
        }
        /* Webkit browsers like Safari and Chrome */
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
</head>
<body>

<!-- Wrapper -->
<div id="wrapper">

    <!-- Header Container
    ================================================== -->
    <header id="header-container" class="fixed fullwidth dashboard">

        <!-- Header -->
        <div id="header" class="not-sticky">
            <div class="container">

                <!-- Left Side Content -->
                <div class="left-side">

                    <!-- Logo -->
                    <div id="logo">
                        <a href="<?php echo site_url('main');?>"><img src="<?php echo base_url('assets/images/logo.png')?>" alt=""></a>
                        <a href="<?php echo site_url('main');?>" class="dashboard-logo"><img src="<?php echo base_url('assets/images/logo.png')?>" alt=""></a>
                    </div>

                    <div class="clearfix"></div>
                    <!-- Main Navigation -->
                    <!-- Main Navigation / End -->
                </div>
                <!-- Left Side Content / End -->

                <!-- Right Side Content / End -->
                <div class="right-side">
                    <!-- Header Widget -->
                    <div class="header-widget">
                        <div class="user-menu">
                            <select onchange="javascript:window.location.href='<?php echo base_url(); ?>LanguageSwitcher/switchLang/'+this.value;"
                            style="padding: 0 5px; height: 30px;">
                                <option value="english" <?php if($this->session->userdata('site_lang') == 'english') echo 'selected="selected"'; ?>>English</option>
                                <option value="arabic" <?php if($this->session->userdata('site_lang') == 'arabic') echo 'selected="selected"'; ?>>Arabic</option>
                            </select>
                        </div>

                        <!-- User Menu -->
                        <div class="user-menu">
                            <div class="user-name"><?php echo $user['name'];?></div>
                        </div>

                        <a href="<?php echo site_url('user/logout') ?>" class="button"><?php echo $this->lang->line('logout');?></a>
                    </div>
                    <!-- Header Widget / End -->
                </div>
                <!-- Right Side Content / End -->

            </div>
        </div>
        <!-- Header / End -->

    </header>
    <div class="clearfix"></div>
    <!-- Header Container / End -->

    <!-- Dashboard -->
    <div id="dashboard">

        <!-- Navigation
        ================================================== -->

        <!-- Responsive Navigation Trigger -->
        <a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> <?php echo $this->lang->line('side_dashboard')." ".$this->lang->line('side_navigation');?></a>

        <div class="dashboard-nav">
            <div class="dashboard-nav-inner">

                <ul data-submenu-title="<?php echo $this->lang->line('side_main');?>">
                    <li><a href="<?php echo site_url('main');?>"><i class="sl sl-icon-home"></i> <?php echo $this->lang->line('side_dashboard');?></a></li>
                </ul>

                <ul data-submenu-title="<?php echo $this->lang->line('side_categories');?>">
                    <?php if ($user['permission'] == 'admin'){?>
                        <li><a href="#" data-toggle="modal" data-target="#select-table-modal">
                                <i class="sl sl-icon-plus"></i> <?php echo $this->lang->line('add')." ".$this->lang->line('side_categories');?>
                            </a></li>
                        <li><a href="<?php echo site_url('main/viewAllCategory')?>">
                                <i class="sl sl-icon-notebook"></i> <?php echo $this->lang->line('view')." ".$this->lang->line('side_categories');?>
                            </a></li>
                    <?php }?>
                    <?php if ($user['permission'] == 'manager'){
                        foreach ($user_categories as $user_category) {?>
                            <li><a href="<?php echo site_url('main/category/'.$user_category->id); ?>"> <?php echo $user_category->name;?></a></li>
                        <?php }
                        ?>
                    <?php }?>
                </ul>

                <ul data-submenu-title="<?php echo $this->lang->line('side_settings');?>">
                    <?php if ($user['permission'] == 'admin'){?>
                        <li>
                            <a href="<?php echo site_url('main/general')?>"><i class="sl sl-icon-settings">
                                </i> <?php echo $this->lang->line('side_general');?></a></li>
                    <?php }?>
                    <li><a href="<?php echo site_url('main/myAccount');?>"><i class="sl sl-icon-user"></i> <?php echo $this->lang->line('side_my_account');?></a></li>
                    <?php if ($user['permission'] == 'admin'){?>
                        <li>
                            <a href="<?php echo site_url('main/auditLog');?>"><i class="sl sl-icon-list">
                                </i> <?php echo $this->lang->line('side_audit');?></a></li>
                    <?php }?>
                    <li><a href="<?php echo site_url('user/logout') ?>"><i class="sl sl-icon-power"></i> <?php echo $this->lang->line('logout');?></a></li>
                </ul>

            </div>
        </div>
        <!-- Navigation / End -->


        <div class="modal fade" id="select-table-modal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header" style="background-color: rgba(42,30,214,0.22); border-bottom-color: blue;">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title" style="font-family: 'Times New Roman'"><?php echo $this->lang->line('modal_title');?></h3>
                    </div>
                    <form method="post" action="<?php echo site_url('main/addCategoryName') ?>">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4><?php echo $this->lang->line('modal_category_name');?></h4>
                                    <input class="form-control" name="m_category_name" required>
                                </div>
                            </div>
                            <div class="row">
<!--                                <div class="col-md-6 col-xs-12">-->
<!--                                    <h4>--><?php //echo $this->lang->line('modal_due');?><!--</h4>-->
<!--                                    <input type="number" class="form-control" name="m_due">-->
<!--                                </div>-->
                                <div class="col-md-6">
                                    <h4><?php echo $this->lang->line('modal_critical');?></h4>
                                    <input type="number" class="form-control" name="m_critical" required>
                                </div>
                                <div class="col-md-6">
                                    <h4><?php echo $this->lang->line('modal_due_name');?></h4>
                                    <input type="text" class="form-control" name="m_due_on_name" value="Due on" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <h4><?php echo $this->lang->line('modal_ref_name');?></h4>
                                    <input type="text" class="form-control" name="m_ref_num_name" value="Reference number" required>
                                </div>
                                <div class="col-md-6">
                                    <h4><?php echo $this->lang->line('modal_desc_name');?></h4>
                                    <input type="text" class="form-control" name="m_desc_name" value="Description" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h4><?php echo $this->lang->line('modal_enabled');?></h4>
                                    <input type="radio" name="m_enabled" value="yes" style="display: inline-block"> <?php echo $this->lang->line('modal_yes');?>
                                    &nbsp;&nbsp;
                                    <input type="radio" name="m_enabled" value="no" style="display: inline-block" checked><?php echo $this->lang->line('modal_no');?>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info" name="m_category_submit" value="m_category_submit"><?php echo $this->lang->line('modal_save');?></button>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $this->lang->line('modal_close');?></button>
                        </div>
                    </form>
                </div>

            </div>
        </div>