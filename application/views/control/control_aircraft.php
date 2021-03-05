
<div class="container">
    <h3 style="color: #154ecc; text-align: center; background-color: #ffc349">Aircraft Management</h3>
    <div class="row" style="padding: 1% 1% 1% 1%;">
        <div class="col-md-7">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addAircraftLine"> Add Aircraft </button>
            <?php if($user['permission'] == 'admin'){?>
                <button type="button" class="btn btn-success" id="edit-aircraft-modal" data-toggle="modal" data-target="#editAircraftLine" disabled> Edit Aircraft </button>
                <button type="button" class="btn btn-success" id="delete-aircraft-modal" data-toggle="modal" data-target="#deleteAircraftLine" disabled> Delete Aircraft </button>
                <?php
            }?>
        </div>
    </div>
    <!-- Add Aircraft Modal -->
    <div class="modal fade" id="addAircraftLine" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="background-color: orange">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Add Aircraft</h3>
                </div>
                <form method="post" action="<?php echo site_url('control/add_aircraft'); ?>">
                    <div class="modal-body">
                        <h4> Aircraft Registeration </h4>
                        <input class="form-control" name="add-aircraft-name" style="height: 40px;" required>
                        <h4> Aircraft Model </h4>
                        <input class="form-control" name="add-aircraft-model" style="height: 40px;" required>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info" name="add-aircraft-button"> Add </button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <!-- Edit Aircraft Modal -->
    <div class="modal fade" id="editAircraftLine" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="background-color: #d6ff1e">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Edit Aircraft</h3>
                </div>
                <form method="post" action="<?php echo site_url('control/edit_aircraft'); ?>">
                    <div class="modal-body">
                        <input id="edit-aircraft-id" name="edit-aircraft-id" style="display: none;">
                        <h4> Aircraft Registeration </h4>
                        <input class="form-control" id="edit-aircraft-name" name="edit-aircraft-name" style="height: 40px;">
                        <h4> Aircraft Model </h4>
                        <input class="form-control" id="edit-aircraft-model" name="edit-aircraft-model" style="height: 40px;">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info" id="edit-aircraft-button" name="edit-aircraft-button"> Edit </button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Delete Aircraft Modal -->
    <div class="modal fade" id="deleteAircraftLine" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="background-color: orange">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Delete Aircraft</h3>
                </div>
                <form method="post" action="<?php echo site_url('control/delete_aircraft'); ?>">
                    <div class="modal-body">
                        <h4> Do you agree to delete this data? </h4>
                        <h5 id="aircraft-name-text" style="color: darkmagenta"></h5>
                        <h5 id="aircraft-model-text" style="color: darkmagenta"></h5>
                        <input id="delete-aircraft-id" name="delete-aircraft-id" style="display: none">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info" name="delete-aircraft-button"> Delete </button>
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
                <th> Aircraft Registeration</th>
                <th> Aircraft Model </th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($aircraft as $aircraft_line){
            ?><tr id="aircraft-line<?php echo $aircraft_line->aircraft_id; ?>" onclick='edit_aircraft_line(<?php echo json_encode($aircraft_line); ?>, <?php echo json_encode($aircraft); ?>)'><td style="display: none"><?php echo $aircraft_line->aircraft_id;?></td><?php
                ?><td><?php echo $aircraft_line->aircraft_name;?></td><?php
                ?><td><?php echo $aircraft_line->aircraft_model;?></td><?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
