<?php
/**
 * Created by PhpStorm.
 * User: GaoComet
 * Date: 3/5/2018
 * Time: 1:42 AM
 */
?>
<link rel="stylesheet" href="<?php echo base_url('assets/table/font-awesome/4.5.0/css/font-awesome.min.css'); ?>" />
<link rel="stylesheet" href="<?php echo base_url('assets/table/css/ace.min.css'); ?>" class="ace-main-stylesheet" id="main-ace-style" />
<div class="dashboard-content">
    <!-- Titlebar -->
    <div id="titlebar">
        <div class="row">
            <div class="col-md-12">
                <h2><?php echo $this->lang->line('side_audit');?></h2>
            </div>
        </div>
    </div>

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
                        <th class="center" style="display: none;">
                            <label class="pos-rel">
                                <input type="checkbox" class="ace" />
                                <span class="lbl"></span>
                            </label>
                        </th>
                        <th><?php echo $this->lang->line('category'); ?></th>
                        <th><?php echo $this->lang->line('reference')." ".$this->lang->line('number'); ?></th>
                        <th class="hidden-480"><?php echo $this->lang->line('user_name'); ?></th>
                        <th class="hidden-480"><?php echo $this->lang->line('user_email'); ?></th>
                        <th class="hidden-480"><?php echo $this->lang->line('action'); ?></th>
                        <th class="hidden-480"><?php echo $this->lang->line('date'); ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($logs as $log) {?>
                        <tr id="log_<?php echo $log->id; ?>">
                            <td class="center" style="display: none;">
                                <label class="pos-rel">
                                    <input id="c_check_<?php echo $log->id; ?>" type="checkbox" class="ace" />
                                    <span class="lbl"></span>
                                </label>
                            </td>
                            <td id="log_category_<?php echo $log->id; ?>"><?php echo $log->log_category; ?></td>
                            <td id="log_ref_num_<?php echo $log->id; ?>"><?php echo $log->log_ref_num;?></td>
                            <td id="log_user_n_<?php echo $log->id; ?>"><?php echo $log->log_user_n; ?></td>
                            <td class="hidden-480" id="log_user_e<?php echo $log->id; ?>"><?php echo $log->log_user_e; ?></td>
                            <td class="hidden-480" id="log_action_<?php echo $log->id; ?>"><?php echo $log->action; ?></td>
                            <td class="hidden-480" id="log_date_<?php echo $log->id; ?>"><?php echo $log->date; ?></td>
                        </tr>
                    <?php }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


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
                        { "bSortable": false },
                        null, null,null, null, null,
                        { "bSortable": true }
                    ],
                    "aaSorting": [],
                    select: {
                        style: 'multi'
                    }
                } );
    })
</script>