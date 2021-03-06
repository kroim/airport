<?php
/**
 * Created by PhpStorm.
 * User: GaoComet
 * Date: 12/1/2017
 * Time: 1:03 PM
 */

?>
<!-- Content
	================================================== -->
<div class="dashboard-content">

    <!-- Titlebar -->
    <div id="titlebar">
        <div class="row">
            <div class="col-md-12">
                <h2><?php echo $this->lang->line('side_dashboard');?></h2>
            </div>
        </div>
    </div>

    <!-- Content -->
    <div class="row">
        <!-- Item -->
        <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="dashboard-stat color-1">
                <div class="dashboard-stat-content"><h4>5</h4> <span><?php echo $this->lang->line('da_due');?></span></div>
                <div class="dashboard-stat-icon"><i class="im im-icon-Map2"></i></div>
            </div>
        </div>
        <!-- Item -->
        <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="dashboard-stat color-2">
                <div class="dashboard-stat-content"><h4>25</h4> <span><?php echo $this->lang->line('da_critical');?></span></div>
                <div class="dashboard-stat-icon"><i class="im im-icon-Line-Chart"></i></div>
            </div>
        </div>
        <!-- Item -->
        <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="dashboard-stat color-3">
                <div class="dashboard-stat-content"><h4>5</h4> <span><?php echo $this->lang->line('da_over')." ".$this->lang->line('da_due');?></span></div>
                <div class="dashboard-stat-icon"><i class="im im-icon-Add-UserStar"></i></div>
            </div>
        </div>

    </div>

    <div class="row">

        <!-- Recent Activity -->
        <div class="col-lg-8 col-md-7 col-xs-12">
            <div class="dashboard-list-box with-icons margin-top-20">
                <h4><?php echo $this->lang->line('da_recent_activities');?></h4>
            </div>
        </div>
        <div class="col-lg-4 col-md-5 col-xs-12">
            <div class="dashboard-list-box with-icons margin-top-20">
                <h4><?php echo $this->lang->line('da_calendar');?></h4>
                <div id="calendar"></div>
            </div>
        </div>
    </div>

</div>
<!-- Content / End -->
