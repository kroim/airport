
<div class="container">
    <h3 style="color: #154ecc; text-align: center; background-color: #ffc349">Request Management</h3>
    <div class="row" style="padding: 1% 1% 1% 1%;">
        <div class="col-md-7">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addRequestLine"> Add Request </button>
            <?php if($user['permission'] == 'admin'){?>
            <button type="button" class="btn btn-success" id="edit-request-modal" data-toggle="modal" data-target="#editRequestLine" disabled> Edit Request </button>
            <button type="button" class="btn btn-success" id="delete-request-modal" data-toggle="modal" data-target="#deleteRequestLine" disabled> Delete Request </button>
                <?php
            }?>
        </div>
        <div class="col-md-5" style="text-align: right;">
            <form method="post" action="<?php echo site_url('control/control_request'); ?>">
                <input type="text" id="search-request-m" name="search-request-m" style="height: 30px;" placeholder="Request No.">
                <input class="btn btn-success" type="submit" id="search-request-button-m" value="Search">
            </form>
        </div>
    </div>
    <!-- Add Request Modal -->
    <div class="modal fade" id="addRequestLine" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="background-color: orange">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Add Request</h3>
                </div>
                <form method="post" action="<?php echo site_url('control/add_request'); ?>" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h4> Aircraft </h4>
                                <select class="form-control" id="add-request-aircraft-m-line" name="add-request-aircraft-line-m">
                                    <?php foreach ($aircraft as $aircraft_line){
                                        ?><option value="<?php echo $aircraft_line->aircraft_name?>"><?php echo $aircraft_line->aircraft_name;?></option><?php
                                    }?>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <h4> Image of Request </h4>
                                <input type="file" class="form-control" id="add-request-image" name="add-request-image" accept="image/*">
                                <div style="height: 150px; width: 100%;">
                                    <img src="" style="width: 100%; height: 100%" id="add-request-image-prev">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h4> Airport En </h4>
                                <select class="form-control" id="add-request-airport-m-line-en" name="add-request-airport-line-m-en" onchange='airport_same1(event, <?php echo json_encode($airport); ?>)'>
                                    <?php foreach ($airport as $airport_line){
                                        ?><option value="<?php echo $airport_line->airport_icao?>"><?php echo $airport_line->airport_icao;?></option><?php
                                    }?>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <h4> Airport Ar </h4>
                                <select class="form-control" id="add-request-airport-m-line-ar" name="add-request-airport-line-m-ar" onchange='airport_same2(event, <?php echo json_encode($airport); ?>)'>
                                    <?php foreach ($airport as $airport_line){
                                        ?><option value="<?php echo $airport_line->airport_arabic?>"><?php echo $airport_line->airport_arabic;?></option><?php
                                    }?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h4> Date From </h4>
                                <input type="date" id="add-request-from-m" name="add-request-from-m">
                            </div>
                            <div class="col-md-6">
                                <h4> Date To </h4>
                                <input type="date" id="add-request-to-m" name="add-request-to-m">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h4> Purpose En </h4>
                                <textarea class="form-control" id="add-request-purpose-m-en" name="add-request-purpose-m-en" style="height: 60px;"></textarea>
                            </div>
                            <div class="col-md-6">
                                <h4> Purpose Ar </h4>
                                <textarea class="form-control" id="add-request-purpose-m-ar" name="add-request-purpose-m-ar" style="height: 60px;"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info" name="add-request-button"> Add </button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Edit Request Modal -->
    <div class="modal fade" id="editRequestLine" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="background-color: orange">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Edit Request</h3>
                </div>
                <form method="post" action="<?php echo site_url('control/edit_request'); ?>" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h4> Request No. </h4>
                                <input class="form-control" id="origin-request-id" name="origin-request-id" style="display: none;">
                                <input class="form-control" id="edit-request-id-m" name="edit-request-id-m">
                                <h4> Aircraft </h4>
                                <select class="form-control" id="edit-request-aircraft-m-line" name="edit-request-aircraft-line-m">
                                    <?php foreach ($aircraft as $aircraft_line){
                                        ?><option value="<?php echo $aircraft_line->aircraft_name?>"><?php echo $aircraft_line->aircraft_name;?></option><?php
                                    }?>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <h4> Image of Request </h4>
                                <input type="file" class="form-control" id="edit-request-image" name="edit-request-image" accept="image/*">
                                <div style="height: 150px; width: 100%;">
                                    <img src="" style="width: 100%; height: 100%" id="edit-request-image-prev">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h4> Airport En </h4>
                                <select class="form-control" id="edit-request-airport-m-line-en" name="edit-request-airport-line-m-en" onchange='airport_same3(event, <?php echo json_encode($airport); ?>)'>
                                    <?php foreach ($airport as $airport_line){
                                        ?><option value="<?php echo $airport_line->airport_icao?>"><?php echo $airport_line->airport_icao;?></option><?php
                                    }?>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <h4> Airport Ar </h4>
                                <select class="form-control" id="edit-request-airport-m-line-ar" name="edit-request-airport-line-m-ar" onchange='airport_same4(event, <?php echo json_encode($airport); ?>)'>
                                    <?php foreach ($airport as $airport_line){
                                        ?><option value="<?php echo $airport_line->airport_arabic?>"><?php echo $airport_line->airport_arabic;?></option><?php
                                    }?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h4> Date From </h4>
                                <input type="date" id="edit-request-from-m" name="edit-request-from-m">
                            </div>
                            <div class="col-md-6">
                                <h4> Date To </h4>
                                <input type="date" id="edit-request-to-m" name="edit-request-to-m">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h4> Purpose En </h4>
                                <textarea class="form-control" id="edit-request-purpose-m-en" name="edit-request-purpose-m-en" style="height: 60px;"></textarea>
                            </div>
                            <div class="col-md-6">
                                <h4> Purpose Ar </h4>
                                <textarea class="form-control" id="edit-request-purpose-m-ar" name="edit-request-purpose-m-ar" style="height: 60px;"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info" name="edit-request-button"> Edit </button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <!-- Delete Aircraft Modal -->
    <div class="modal fade" id="deleteRequestLine" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="background-color: orange">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Delete Request</h3>
                </div>
                <form method="post" action="<?php echo site_url('control/delete_request'); ?>">
                    <div class="modal-body">
                        <h4> Do you agree to delete this data? </h4>
                        <h5 id="request-no-text" style="color: darkmagenta"></h5>
                        <h5 id="request-aircraft-text" style="color: darkmagenta"></h5>
                        <h5 id="request-airport-text" style="color: darkmagenta"></h5>
                        <input id="delete-request-id" name="delete-request-id" style="display: none">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info" name="delete-request-button"> Delete </button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <div class="control-table">
        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th> Request No. </th>
                <th> Aircraft </th>
                <th> Date From </th>
                <th> Date To </th>
                <th> Airport </th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($request as $request_line){
            ?><tr id="request-line<?php echo $request_line->request_id; ?>" onclick='edit_request_line(<?php echo json_encode($request_line); ?>, <?php echo json_encode($request); ?>, <?php echo json_encode($aircraft); ?>, <?php echo json_encode($airport); ?>)'><td><?php echo $request_line->request_id;?></td><?php
                ?><td><?php echo $request_line->aircraft;?></td><?php
                ?><td><?php echo $request_line->from;?></td><?php
                ?><td><?php echo $request_line->to;?></td><?php
                ?><td><?php echo $request_line->airport;?></td><?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
