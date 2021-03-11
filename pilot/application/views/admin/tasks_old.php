<?php
/**
 * Created by PhpStorm.
 * User: GaoComet
 * Date: 3/5/2018
 * Time: 10:16 AM
 */
?>

<!-- Content
	================================================== -->
<link rel="stylesheet" href="<?php echo base_url('assets/table/font-awesome/4.5.0/css/font-awesome.min.css'); ?>" />
<link rel="stylesheet" href="<?php echo base_url('assets/table/css/ace.min.css'); ?>" class="ace-main-stylesheet" id="main-ace-style" />
<style>
    .modal-backdrop{
        z-index: auto;
    }
</style>
<div class="dashboard-content">
    <!-- Titlebar -->
    <div id="titlebar">
        <div class="row">
            <div class="col-md-12">
                <h2><?php echo $category_names[0]->name;?></h2>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <button class="btn btn-success" data-toggle="modal" data-target="#add-task-modal"><i class="fa fa-plus"></i> Add New</button>
            <div class="modal fade" id="add-task-modal" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header" style="background-color: rgba(42,30,214,0.22); border-bottom-color: blue;">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h3 class="modal-title" style="00font-family: 'Times New Roman'"><?php echo $this->lang->line('add')." ".$this->lang->line('tasks');?></h3>
                        </div>
                        <form method="post" action="<?php echo site_url('main/addTask') ?>">
                            <div class="modal-body">
                                <div class="row">
                                    <input name="am_task_category_id" value="<?php echo $category_names[0]->id;?>" style="display: none" required>
                                    <div class="col-md-12">
                                        <h4><?php echo $this->lang->line('reference')." ".$this->lang->line('number');?></h4>
                                        <input class="form-control" id="am_task_ref_num" name="am_task_ref_num" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4><?php echo $this->lang->line('description');?></h4>
                                        <input type="text" class="form-control" id="am_description" name="am_description" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4><?php echo $this->lang->line('due_on');?></h4>
                                        <input type="date" class="form-control" id="am_due_on" name="am_due_on" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4><?php echo $this->lang->line('notes');?></h4>
                                        <input type="text" class="form-control" id="am_notes" name="am_notes" required>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-info" name="am_task_submit" value="am_task_submit"><?php echo $this->lang->line('modal_save');?></button>
                                <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $this->lang->line('modal_close');?></button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
            <div class="clearfix">
                <div class="pull-right tableTools-container"></div>
            </div>
            <!-- div.dataTables_borderWrap -->
            <div>
                <table id="task-table" class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th class="center">
                            <label class="pos-rel">
                                <input type="checkbox" class="ace" />
                                <span class="lbl"></span>
                            </label>
                        </th>
                        <th><?php echo $category_names[0]->ref_num_name;?></th>
                        <th class="hidden-480"><?php echo $category_names[0]->desc_name;?></th>
                        <th class="hidden-480"><?php echo $category_names[0]->due_on_name;?></th>
                        <th class="hidden-480">Notes</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($tasks as $task) {
                        if ($task->type != "renew") {
                            ?>
                            <tr id="task_<?php echo $task->id; ?>">
                                <td class="center">
                                    <label class="pos-rel">
                                        <input id="task_check_<?php echo $task->id; ?>" type="checkbox" class="ace"/>
                                        <span class="lbl"></span>
                                    </label>
                                </td>
                                <td id="task_ref_num_<?php echo $task->id; ?>"><?php echo $task->ref_num; ?></td>
                                <td id="task_desc_<?php echo $task->id; ?>"><?php echo $task->desc; ?></td>
                                <td id="task_due_on_<?php echo $task->id; ?>"><?php echo $task->due_on; ?></td>
                                <td class="hidden-480"
                                    id="task_notes_<?php echo $task->id; ?>"><?php echo $task->notes; ?></td>
                                <td>
                                    <div class="action-buttons">
                                        <button onclick='edit_task(<?php echo $task->id; ?>)'>
                                            <i class="ace-icon fa fa-pencil bigger-130"></i>
                                        </button>
                                        <button onclick='renew_task(<?php echo $task->id; ?>)'>
                                            <i class="ace-icon fa fa-newspaper-o bigger-130"></i>
                                        </button>
                                        <button onclick='delete_task(<?php echo $task->id; ?>)'>
                                            <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        <?php }
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!--Edit Task-->
<button id="edit_task_btn" data-toggle="modal" data-target="#edit-task-modal" style="display: none"></button>
<div class="modal fade" id="edit-task-modal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="background-color: rgba(42,30,214,0.22); border-bottom-color: blue;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title" style="00font-family: 'Times New Roman'"><?php echo $this->lang->line('edit')." ".$this->lang->line('tasks');?></h3>
            </div>
            <form method="post" action="<?php echo site_url('main/editTask') ?>">
                <div class="modal-body">
                    <div class="row">
                        <input name="em_task_category_id" value="<?php echo $category_names[0]->id;?>" style="display: none" required>
                        <input name="em_task_id" id="em_task_id" style="display: none" required>
                        <div class="col-md-12">
                            <h4><?php echo $this->lang->line('reference')." ".$this->lang->line('number');?></h4>
                            <input class="form-control" id="em_task_ref_num" name="em_task_ref_num" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h4><?php echo $this->lang->line('description');?></h4>
                            <input type="text" class="form-control" id="em_description" name="em_description" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h4><?php echo $this->lang->line('due_on');?></h4>
                            <input type="date" class="form-control" id="em_due_on" name="em_due_on" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h4><?php echo $this->lang->line('notes');?></h4>
                            <input type="text" class="form-control" id="em_notes" name="em_notes" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info" name="em_task_submit" value="em_task_submit"><?php echo $this->lang->line('modal_save');?></button>
                    <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $this->lang->line('modal_close');?></button>
                </div>
            </form>
        </div>

    </div>
</div>

<!--Renew Task-->
<button id="renew_task_btn" data-toggle="modal" data-target="#renew-task-modal" style="display: none"></button>
<div class="modal fade" id="renew-task-modal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="background-color: rgba(42,30,214,0.22); border-bottom-color: blue;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title" style="00font-family: 'Times New Roman'"><?php echo $this->lang->line('renew')." ".$this->lang->line('tasks');?></h3>
            </div>
            <form method="post" action="<?php echo site_url('main/renewTask') ?>">
                <div class="modal-body">
                    <p style="color: orange;">Are you sure to renew this project?</p>
                    <div class="row"  style="display: none">
                        <input id="rm_task_id" name="rm_task_id" required>
                        <input name="rm_task_category_id" value="<?php echo $category_names[0]->id;?>" required>
                        <input id="rm_task_ref_num" name="rm_task_ref_num" required>
                        <input type="text" id="rm_description" name="rm_description" required>
                        <input type="text" id="rm_notes" name="rm_notes" required>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h4><?php echo $this->lang->line('renew')." ".$this->lang->line('due_on');?></h4>
                            <input type="date" class="form-control" id="rm_due_on" name="rm_due_on" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info" name="rm_task_submit" value="rm_task_submit"><?php echo $this->lang->line('modal_save');?></button>
                    <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $this->lang->line('modal_close');?></button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--Delete Task-->
<button id="delete_task_btn" data-toggle="modal" data-target="#delete-task-modal" style="display: none"></button>
<div class="modal fade" id="delete-task-modal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="background-color: rgba(255,143,0,0.62); border-bottom-color: blue;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title" style="00font-family: 'Times New Roman'"><?php echo $this->lang->line('delete')." ".$this->lang->line('tasks');?></h3>
            </div>
            <form method="post" action="<?php echo site_url('main/deleteTask') ?>">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Are you sure to delete this category?</h4>
                            <input name="dm_task_category_id" value="<?php echo $category_names[0]->id;?>" style="display: none" required>
                            <input id="dm_task_id" name="dm_task_id" style="display: none" required>
                            <input id="dm_task_ref_num" name="dm_task_ref_num" style="display: none" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info" name="dm_task_submit" value="dm_task_submit"><?php echo $this->lang->line('modal_yes');?></button>
                    <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $this->lang->line('modal_no');?></button>
                </div>
            </form>
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

<script type="text/javascript">
    function edit_task(id){
        $("#em_task_id").val(id);
        $("#em_task_ref_num").val($("#task_ref_num_"+id).html());
        $("#em_description").val($("#task_desc_"+id).html());
        $("#em_due_on").val($("#task_due_on_"+id).html());
        $("#em_notes").val($("#task_notes_"+id).html());
        $("#edit_task_btn").click();
    }
    function renew_task(id){
        $("#rm_task_id").val(id);
        $("#rm_task_ref_num").val($("#task_ref_num_"+id).html());
        $("#rm_description").val($("#task_desc_"+id).html());
        $("#rm_due_on").val($("#task_due_on_"+id).html());
        $("#rm_notes").val($("#task_notes_"+id).html());
        $("#renew_task_btn").click();
    }
    function delete_task(id){
        $("#dm_task_id").val(id);
        $("#dm_task_ref_num").val($("#task_ref_num_"+id).html());
        $("#delete_task_btn").click();
    }
    jQuery(function($) {
        //initiate dataTables plugin
        var myTable =
            $('#task-table')
            //.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
                .DataTable( {
                    bAutoWidth: false,
                    "aoColumns": [
                        { "bSortable": false },
                        null, null,null, null,
                        { "bSortable": false }
                    ],
                    "aaSorting": [],
                    select: {
                        style: 'multi'
                    }
                } );

        $.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';

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

        myTable.on( 'select', function ( e, dt, type, index ) {
            if ( type === 'row' ) {
                $( myTable.row( index ).node() ).find('input:checkbox').prop('checked', true);
            }
        } );
        myTable.on( 'deselect', function ( e, dt, type, index ) {
            if ( type === 'row' ) {
                $( myTable.row( index ).node() ).find('input:checkbox').prop('checked', false);
            }
        } );




        /////////////////////////////////
        //table checkboxes
        $('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);

        //select/deselect all rows according to table header checkbox
        $('#task-table > thead > tr > th input[type=checkbox], #task-table_wrapper input[type=checkbox]').eq(0).on('click', function(){
            var th_checked = this.checked;//checkbox inside "TH" table header

            $('#task-table').find('tbody > tr').each(function(){
                var row = this;
                if(th_checked) myTable.row(row).select();
                else  myTable.row(row).deselect();
            });
        });

        //select/deselect a row when the checkbox is checked/unchecked
        $('#task-table').on('click', 'td input[type=checkbox]' , function(){
            var row = $(this).closest('tr').get(0);
            if(this.checked) myTable.row(row).deselect();
            else myTable.row(row).select();
        });



        $(document).on('click', '#task-table .dropdown-toggle', function(e) {
            e.stopImmediatePropagation();
            e.stopPropagation();
            e.preventDefault();
        });



        //And for the first simple table, which doesn't have TableTools or dataTables
        //select/deselect all rows according to table header checkbox
        var active_class = 'active';
        $('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
            var th_checked = this.checked;//checkbox inside "TH" table header

            $(this).closest('table').find('tbody > tr').each(function(){
                var row = this;
                if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
                else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
            });
        });

        //select/deselect a row when the checkbox is checked/unchecked
        $('#simple-table').on('click', 'td input[type=checkbox]' , function(){
            var $row = $(this).closest('tr');
            if($row.is('.detail-row ')) return;
            if(this.checked) $row.addClass(active_class);
            else $row.removeClass(active_class);
        });

    });
</script>
