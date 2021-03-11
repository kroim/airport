<?php
/**
 * Created by PhpStorm.
 * User: GaoComet
 * Date: 3/3/2018
 * Time: 2:12 PM
 */
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
                <h2><?php echo $this->lang->line('view')." ".$this->lang->line('side_categories');?></h2>
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
                <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th class="center">
                            <label class="pos-rel">
                                <input type="checkbox" class="ace" />
                                <span class="lbl"></span>
                            </label>
                        </th>
                        <th>Name</th>
                        <th>Critical</th>
                        <th>Reference Number Name</th>
                        <th class="hidden-480">Description Name</th>
                        <th class="hidden-480">Due On Name</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($all_categories as $all_category) {?>
                    <tr id="c_tr_<?php echo $all_category->id; ?>">
                        <td class="center">
                            <label class="pos-rel">
                                <input id="c_check_<?php echo $all_category->id; ?>" type="checkbox" class="ace" />
                                <span class="lbl"></span>
                            </label>
                        </td>
                        <td id="c_name_<?php echo $all_category->id; ?>"><?php echo $all_category->name; ?></td>
                        <td id="c_critical_<?php echo $all_category->id; ?>"><?php echo $all_category->critical;?></td>
                        <td id="c_ref_num_name_<?php echo $all_category->id; ?>"><?php echo $all_category->ref_num_name; ?></td>
                        <td class="hidden-480" id="c_desc_name_<?php echo $all_category->id; ?>"><?php echo $all_category->desc_name; ?></td>
                        <td class="hidden-480" id="c_due_on_name_<?php echo $all_category->id; ?>"><?php echo $all_category->due_on_name; ?></td>
                        <td>
                            <div class="action-buttons">
                                <button onclick='edit_category(<?php echo $all_category->id;?>)'>
                                    <i class="ace-icon fa fa-pencil bigger-130"></i>
                                </button>
                                <button onclick='delete_category(<?php echo $all_category->id;?>)'>
                                    <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <?php }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </div>
</div>

<button id="edit_category_btn" data-toggle="modal" data-target="#edit-category-modal" style="display: none"></button>
<div class="modal fade" id="edit-category-modal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="background-color: rgba(42,30,214,0.22); border-bottom-color: blue;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title" style="00font-family: 'Times New Roman'"><?php echo $this->lang->line('edit_modal_title');?></h3>
            </div>
            <form method="post" action="<?php echo site_url('main/editCategoryName') ?>">
                <div class="modal-body">
                    <input name="m_category_id" id="em_category_id" style="display: none" required>
                    <div class="row">
                        <div class="col-md-12">
                            <h4><?php echo $this->lang->line('modal_category_name');?></h4>
                            <input class="form-control" id="em_category_name" name="m_category_name" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h4><?php echo $this->lang->line('modal_critical');?></h4>
                            <input type="number" class="form-control" id="em_critical" name="m_critical" required>
                        </div>
                        <div class="col-md-6">
                            <h4><?php echo $this->lang->line('modal_due_name');?></h4>
                            <input type="text" class="form-control" id="em_due_on_name" name="m_due_on_name" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h4><?php echo $this->lang->line('modal_ref_name');?></h4>
                            <input type="text" class="form-control" id="em_ref_num_name" name="m_ref_num_name" required>
                        </div>
                        <div class="col-md-6">
                            <h4><?php echo $this->lang->line('modal_desc_name');?></h4>
                            <input type="text" class="form-control" id="em_desc_name" name="m_desc_name" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h4><?php echo $this->lang->line('modal_enabled');?></h4>
                            <input type="radio" id="em_enabled_y" name="m_enabled" value="yes" style="display: inline-block"> <?php echo $this->lang->line('modal_yes');?>
                            &nbsp;&nbsp;
                            <input type="radio" id="em_enabled_n" name="m_enabled" value="no" style="display: inline-block" checked><?php echo $this->lang->line('modal_no');?>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info" name="em_category_submit" value="em_category_submit"><?php echo $this->lang->line('modal_save');?></button>
                    <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $this->lang->line('modal_close');?></button>
                </div>
            </form>
        </div>

    </div>
</div>

<button id="delete_category_btn" data-toggle="modal" data-target="#delete-category-modal" style="display: none"></button>
<div class="modal fade" id="delete-category-modal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="background-color: rgba(255,143,0,0.62); border-bottom-color: blue;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title" style="00font-family: 'Times New Roman'"><?php echo $this->lang->line('delete_modal_title');?></h3>
            </div>
            <form method="post" action="<?php echo site_url('main/deleteCategoryName') ?>">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Are you sure to delete this category?</h4>
                            <input class="form-control" id="dm_category_id" name="dm_category_id" style="display: none" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info" name="em_category_submit" value="em_category_submit"><?php echo $this->lang->line('modal_yes');?></button>
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
    function edit_category(id){
        $("#em_category_id").val(id);
        $("#em_category_name").val($("#c_name_"+id).html());
        $("#em_critical").val($("#c_critical_"+id).html());
        $("#em_ref_num_name").val($("#c_ref_num_name_"+id).html());
        $("#em_desc_name").val($("#c_desc_name_"+id).html());
        $("#em_due_on_name").val($("#c_due_on_name_"+id).html());
        $("#edit_category_btn").click();
    }
    function delete_category(id){
        $("#dm_category_id").val(id);
        $("#delete_category_btn").click();
    }
    jQuery(function($) {
        //initiate dataTables plugin
        var myTable =
            $('#dynamic-table')
            //.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
                .DataTable( {
                    bAutoWidth: false,
                    "aoColumns": [
                        { "bSortable": false },
                        null, null,null, null, null,
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
                    message: '<h2>Print button for DataTables</h2>'
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
        $('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function(){
            var th_checked = this.checked;//checkbox inside "TH" table header

            $('#dynamic-table').find('tbody > tr').each(function(){
                var row = this;
                if(th_checked) myTable.row(row).select();
                else  myTable.row(row).deselect();
            });
        });

        //select/deselect a row when the checkbox is checked/unchecked
        $('#dynamic-table').on('click', 'td input[type=checkbox]' , function(){
            var row = $(this).closest('tr').get(0);
            if(this.checked) myTable.row(row).deselect();
            else myTable.row(row).select();
        });



        $(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
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