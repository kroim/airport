<div class="container">
    <h3 style="color: #154ecc; text-align: center; background-color: #ffc349">Mission Management</h3>
    <div class="row" style="padding: 1% 1% 1% 1%;">
        <div class="col-md-7">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addMissionLine"> Add Mission </button>
            <?php if($user['permission'] == 'admin'){?>
            <button type="button" class="btn btn-success" id="edit-mission-modal" data-toggle="modal" data-target="#editMissionLine" disabled> Edit Mission </button>
            <button type="button" class="btn btn-success" id="delete-mission-modal" data-toggle="modal" data-target="#deleteMissionLine" disabled> Delete Mission </button>
                <?php
            }?>
        </div>
        <div class="col-md-5" style="text-align: right;">
            <form method="post" action="<?php echo site_url('control/control_mission'); ?>">
                <input type="text" id="search-mission-m" name="search-mission-m" style="height: 30px;" placeholder="Request No.">
                <input class="btn btn-success" type="submit" id="search-mission-button-m" value="Search">
            </form>
        </div>
    </div>
    <!-- Add Mission Modal -->
    <div class="modal fade" id="addMissionLine" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="background-color: orange">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Add Mission</h3>
                </div>
                <form method="post" action="<?php echo site_url('control/add_mission'); ?>">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h4> Request No. </h4>
                                <input class="form-control" id="add-mission-request-no" name="add-mission-request-no" onchange='select_request_for_mission(event, <?php echo json_encode($request);?>)' required>
<!--                                    <option label="Select"></option>-->
<!--                                    --><?php //foreach ($request as $request_line){
//                                        ?><!--<option value="--><?php //echo $request_line->request_id; ?><!--">--><?php //echo $request_line->request_id; ?><!--</option>--><?php
//                                    }?>
<!--                                </input>-->
                            </div>
                            <div class="col-md-6">
                                <h4> Aircraft </h4>
                                <input type="text" class="form-control" id="add-mission-aircraft-name" name="add-mission-aircraft-name" readonly />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h4> Airport En </h4>
                                <input type="text" class="form-control" id="add-mission-airport-en-name" name="add-mission-airport-en-name" readonly />
                            </div>
                            <div class="col-md-6">
                                <h4> Airport Ar </h4>
                                <input type="text" class="form-control" id="add-mission-airport-ar-name" name="add-mission-airport-ar-name" readonly />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h4> Date </h4>
                                <input type="date" id="add-mission-date" name="add-mission-date" class="form-control" onchange='select_mission_date(event, <?php echo json_encode($request);?>)' required disabled/>
                            </div>
                            <div class="col-md-3">
                                <h4> Hours </h4>
                                <input type="number" step="any" class="form-control" id="add-mission-hours" name="add-mission-hours">
                            </div>
                            <div class="col-md-3">
                                <h4> Cycles </h4>
                                <input type="number" class="form-control" id="add-mission-cycles" name="add-mission-cycles">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h4> Purpose En </h4>
                                <textarea class="form-control" id="add-mission-purpose-en" name="add-mission-purpose-en" style="height: 50px;"></textarea>
                            </div>
                            <div class="col-md-6">
                                <h4> Purpose Ar </h4>
                                <textarea class="form-control" id="add-mission-purpose-ar" name="add-mission-purpose-ar" style="height: 50px;"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h4> Notes </h4>
                                <textarea class="form-control" id="add-mission-notes" name="add-mission-notes" style="height: 60px;"></textarea>
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
    <!-- Edit Mission Modal -->
    <div class="modal fade" id="editMissionLine" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="background-color: orange">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Edit Mission</h3>
                </div>
                <form method="post" action="<?php echo site_url('control/edit_mission'); ?>">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h4> Request No. </h4>
                                <input id="edit-mission-id" name="edit-mission-id" style="display: none;">
                                <input class="form-control" id="edit-mission-request-no" name="edit-mission-request-no" onchange='edit_request_for_mission(event, <?php echo json_encode($request);?>)' required>
<!--                                    <option label="Select"></option>-->
<!--                                    --><?php //foreach ($request as $request_line){
//                                        ?><!--<option value="--><?php //echo $request_line->request_id; ?><!--">--><?php //echo $request_line->request_id; ?><!--</option>--><?php
//                                    }?>
<!--                                </input>-->
                            </div>
                            <div class="col-md-6">
                                <h4> Aircraft </h4>
                                <input type="text" class="form-control" id="edit-mission-aircraft-name" name="edit-mission-aircraft-name" readonly />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h4> Airport En </h4>
                                <input type="text" class="form-control" id="edit-mission-airport-en-name" name="edit-mission-airport-en-name" readonly />
                            </div>
                            <div class="col-md-6">
                                <h4> Airport Ar </h4>
                                <input type="text" class="form-control" id="edit-mission-airport-ar-name" name="edit-mission-airport-ar-name" readonly />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h4> Date </h4>
                                <input type="date" id="edit-mission-date" name="edit-mission-date" class="form-control" onchange='edit_mission_date(event, <?php echo json_encode($request);?>)' required />
                            </div>
                            <div class="col-md-3">
                                <h4> Hours </h4>
                                <input type="number" step="any" class="form-control" id="edit-mission-hours" name="edit-mission-hours">
                            </div>
                            <div class="col-md-3">
                                <h4> Cycles </h4>
                                <input type="number" class="form-control" id="edit-mission-cycles" name="edit-mission-cycles">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h4> Purpose En </h4>
                                <textarea class="form-control" id="edit-mission-purpose-en" name="edit-mission-purpose-en" style="height: 50px;"></textarea>
                            </div>
                            <div class="col-md-6">
                                <h4> Purpose Ar </h4>
                                <textarea class="form-control" id="edit-mission-purpose-ar" name="edit-mission-purpose-ar" style="height: 50px;"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h4> Notes </h4>
                                <textarea class="form-control" id="edit-mission-notes" name="edit-mission-notes" style="height: 60px;"></textarea>
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
    <div class="modal fade" id="deleteMissionLine" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="background-color: orange">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Delete Mission</h3>
                </div>
                <form method="post" action="<?php echo site_url('control/delete_mission'); ?>">
                    <div class="modal-body">
                        <h4> Do you agree to delete this data? </h4>
                        <h5 id="mission-request-no-text" style="color: darkmagenta"></h5>
                        <h5 id="mission-aircraft-text" style="color: darkmagenta"></h5>
                        <h5 id="mission-airport-text" style="color: darkmagenta"></h5>
                        <h5 id="mission-hours-text" style="color: darkmagenta"></h5>
                        <h5 id="mission-cycles-text" style="color: darkmagenta"></h5>
                        <input id="delete-mission-id" name="delete-mission-id" style="display: none">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info" name="delete-request-button"> Delete </button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <button id="check_mission_date_button" type="button" data-toggle="modal" data-target="#checkMissionDate" style="display: none;"></button>
    <div class="modal fade" id="checkMissionDate" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="background-color: red;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="color: white;"> Error For Date Interval </h4>
                </div>
                <div class="modal-body">
                    <p>You have to choose valid date from request.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="control-table">
        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th> Request No. </th>
                <th> Aircraft </th>
                <th> Airport </th>
                <th> Date </th>
                <th> Hours </th>
                <th> Cycles </th>
                <th> Notes </th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($mission as $mission_line){
            ?><tr id="mission-line<?php echo $mission_line->mission_id; ?>" onclick='edit_mission_line(<?php echo json_encode($mission_line); ?>, <?php echo json_encode($mission); ?>, <?php echo json_encode($request); ?>)'><?php
                ?><td><?php echo $mission_line->mission_request_no;?></td><?php
                ?><td><?php echo $mission_line->aircraft_name;?></td><?php
                ?><td><?php echo $mission_line->airport_name;?></td><?php
                ?><td><?php echo $mission_line->date;?></td><?php
                ?><td><?php echo $mission_line->hours;?></td><?php
                ?><td><?php echo $mission_line->cycles;?></td><?php
                ?><td><?php echo $mission_line->notes;?></td></tr><?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>