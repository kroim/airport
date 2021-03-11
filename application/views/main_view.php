<?php
/**
 * Created by PhpStorm.
 * User: GaoComet
 * Date: 12/1/2017
 * Time: 1:03 PM
 */
$critical_num = 0;
$overdue_num = 0;
$due_num = 0;
foreach ($user_tasks as $user_task) {
    if ($user_task->type != 'renew') {
        if ($user_task->severity == "Due") $due_num++;
        elseif ($user_task->severity == "Critical") $critical_num++;
        elseif ($user_task->severity == "Overdue") $overdue_num++;
    }
}
?>
<!-- Content
	================================================== -->
<link rel="stylesheet" href="<?php echo base_url('assets/table/font-awesome/4.5.0/css/font-awesome.min.css'); ?>" />
<link rel="stylesheet" href="<?php echo base_url('assets/table/css/ace.min.css'); ?>" class="ace-main-stylesheet" id="main-ace-style" />
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
                <div class="dashboard-stat-content"><h4><?php echo $due_num; ?></h4> <span><?php echo $this->lang->line('da_due');?></span></div>
                <div class="dashboard-stat-icon"><i class="im im-icon-Map2"></i></div>
            </div>
        </div>
        <!-- Item -->
        <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="dashboard-stat color-2">
                <div class="dashboard-stat-content"><h4><?php echo $critical_num; ?></h4> <span><?php echo $this->lang->line('da_critical');?></span></div>
                <div class="dashboard-stat-icon"><i class="im im-icon-Line-Chart"></i></div>
            </div>
        </div>
        <!-- Item -->
        <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="dashboard-stat color-3">
                <div class="dashboard-stat-content"><h4><?php echo $overdue_num; ?></h4> <span><?php echo $this->lang->line('da_over')." ".$this->lang->line('da_due');?></span></div>
                <div class="dashboard-stat-icon"><i class="im im-icon-Add-UserStar"></i></div>
            </div>
        </div>

    </div>

    <div class="row">

        <!-- Recent Activity -->
        <div class="col-lg-8 col-md-7 col-xs-12">
            <div class="dashboard-list-box with-icons margin-top-20">
                <h4><?php echo $this->lang->line('da_recent_activities');?></h4>
                <div class="row">
                    <div class="col-md-12">
                        <div class="clearfix">
                            <div class="pull-right tableTools-container"></div>
                        </div>
                        <!-- div.dataTables_borderWrap -->
                        <div>
                            <table id="log-table" class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th><?php echo $dashboardText[0] -> referencenumbertext; ?></th>
                                    <th><?php echo $this->lang->line('category'); ?></th>
                                    <th class="hidden-480"><?php echo $dashboardText[0] -> descriptiontext; ?></th>
                                    <th class="hidden-480"><?php echo $dashboardText[0] -> dueontext; ?></th>
                                    <th class="hidden-480"><?php echo $this->lang->line('severity'); ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($user_tasks as $user_task) {
                                    if ($user_task->type != 'renew') {
                                        ?>
                                        <tr>
                                            <td><?php echo $user_task->ref_num; ?></td>
                                            <td><?php echo $user_task->categoryName; ?></td>
                                            <td><?php echo $user_task->desc; ?></td>
                                            <td><?php echo $user_task->due_on; ?></td>
                                            <td><?php  echo $user_task->severity; ?></td>
                                        </tr>
                                        <?php
                                    }
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-5 col-xs-12">
            <div class="dashboard-list-box with-icons margin-top-20">
                <h4><?php echo $this->lang->line('da_calendar');?></h4>
                <div id="calendar"></div>
            </div>
            <div class="row" style="padding-bottom: 5%;">
                <div class="col-md-12">
                    <canvas id="chart-area"  style="padding: 0 -100px !important;"></canvas>
                </div>

            </div>
        </div>
    </div>

</div>
<!-- Content / End -->

<!-- page specific plugin scripts -->
<script type="text/javascript" src="<?php echo base_url('assets/table/js/jquery-2.1.4.min.js')?>"></script>
<!--<script type="text/javascript" src="--><?php //echo base_url('assets/back/scripts/jquery-2.2.0.min.js')?><!--"></script>-->
<script src="<?php echo base_url('assets/table/js/bootstrap.min.js')?>"></script>

<script src="<?php echo base_url('assets/table/js/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/table/js/jquery.dataTables.bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/table/js/dataTables.buttons.min.js')?>"></script>
<script src="<?php echo base_url('assets/table/js/buttons.flash.min.js')?>"></script>
<script src="<?php echo base_url('assets/table/js/buttons.html5.min.js')?>"></script>
<script src="<?php echo base_url('assets/table/js/buttons.print.min.js')?>"></script>
<script src="<?php echo base_url('assets/table/js/buttons.colVis.min.js')?>"></script>
<script src="<?php echo base_url('assets/table/js/dataTables.select.min.js')?>"></script>

<script>
    jQuery(function($) {
        // initiate dataTables plugin
        var myTable =
            $('#log-table')
            //.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
                .DataTable( {
                    bAutoWidth: false,
                    "aoColumns": [
                        null, null,null, null,
                        { "bSortable": true }
                    ],
                    "aaSorting": [],
                    select: {
                        style: 'multi'
                    }
                } );
        new $.fn.dataTable.Buttons( myTable, {
            buttons: [
                {
                    "extend": "csv",
                    "text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
                    "className": "btn btn-white btn-primary btn-bold"
                },
                {
                    "extend": "print",
                    "text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
                    "className": "btn btn-white btn-primary btn-bold",
                    autoPrint: false,
                    message: '<h2>This print was produced using the Print button for DataTables</h2>'
                }
            ]
        } );
        myTable.buttons().container().appendTo( $('.tableTools-container') );
    })
</script>

<script src="<?php echo base_url('assets/chart/Chart.bundle.js')?>"></script>
<script src="<?php echo base_url('assets/chart/utils.js')?>"></script>
<script>
    var config = {
        type: 'pie',
        data: {
            datasets: [{
                data: [
                    <?php echo $due_num;?>,
                    <?php echo $critical_num;?>,
                    <?php echo $overdue_num;?>
                ],
                backgroundColor: [
                    window.chartColors.due,
                    window.chartColors.critical,
                    window.chartColors.overdue
                ],
                label: 'Dataset 1'
            }],
            labels: [
                'due',
                'Critical',
                'OverDue'
            ]
        },
        options: {
            responsive: true
        }
    };
    window.onload = function() {
        var ctx = document.getElementById('chart-area').getContext('2d');
        window.myPie = new Chart(ctx, config);
    };
    var colorNames = Object.keys(window.chartColors);

</script>
