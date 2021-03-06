<?php
/**
 * Created by PhpStorm.
 * User: GaoComet
 * Date: 3/4/2018
 * Time: 4:17 AM
 */
?>

<div class="dashboard-content">
    <!-- Titlebar -->
    <div id="titlebar">
        <div class="row">
            <div class="col-md-12">
                <h2><?php echo $this->lang->line('view')." ".$this->lang->line('side_my_account');?></h2>
            </div>
        </div>
    </div>
    <div>
        <div class="col-md-12">

            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="#tab_profile" data-toggle="tab" aria-expanded="true">
                        <?php echo $this->lang->line('my_profile');?>   </a>
                </li>
                <li class="">
                    <a href="#tab_notification" data-toggle="tab" aria-expanded="false">
                        <?php echo $this->lang->line('notifications');?>   </a>
                </li>

            </ul>
            <div class="tab-content">
                <div class="tab-pane fade active in" id="tab_profile">
                </div>
            </div>
        </div>
    </div>
</div>
