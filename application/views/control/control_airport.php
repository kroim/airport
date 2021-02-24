
<div class="container">
    <h3 style="color: #154ecc; text-align: center; background-color: #ffc349">Airport Management</h3>
    <div class="row" style="padding: 1% 1% 1% 1%;">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addAirportLine"> Add Airport </button>
        <button type="button" class="btn btn-success" id="edit-airport-modal" data-toggle="modal" data-target="#editAirportLine" disabled> Edit Airport </button>
        <button type="button" class="btn btn-success" id="delete-airport-modal" data-toggle="modal" data-target="#deleteAirportLine" disabled> Delete Airport </button>
    </div>
    <!-- Add Aircraft Modal -->
    <div class="modal fade" id="addAirportLine" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="background-color: orange">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Add Airport</h3>
                </div>
                <form method="post" action="<?php echo site_url('control/add_airport'); ?>">
                    <div class="modal-body">
                        <h4> Airport ICAO </h4>
                        <input class="form-control" name="add-airport-icao" style="height: 40px;" required>
                        <h4> Airport Arabic </h4>
                        <input class="form-control" name="add-airport-arabic" style="height: 40px;" required>
                        <h4> Airport City </h4>
                        <input class="form-control" name="add-airport-city" style="height: 40px;" required>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info" name="add-airport-button"> Add </button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <!-- Edit Airport Modal -->
    <div class="modal fade" id="editAirportLine" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="background-color: #d6ff1e">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Edit Airport</h3>
                </div>
                <form method="post" action="<?php echo site_url('control/edit_airport'); ?>">
                    <div class="modal-body">
                        <input id="edit-airport-id" name="edit-airport-id" style="display: none;" required>
                        <h4> Airport ICAO </h4>
                        <input class="form-control" id="edit-airport-icao" name="edit-airport-icao" style="height: 40px;" required>
                        <h4> Airport Arabic </h4>
                        <input class="form-control" id="edit-airport-arabic" name="edit-airport-arabic" style="height: 40px;" required>
                        <h4> Airport City </h4>
                        <input class="form-control" id="edit-airport-city" name="edit-airport-city" style="height: 40px;" required>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info" id="edit-airport-button" name="edit-airport-button"> Edit </button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Delete Aircport Modal -->
    <div class="modal fade" id="deleteAirportLine" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="background-color: orange">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Delete Airport</h3>
                </div>
                <form method="post" action="<?php echo site_url('control/delete_airport'); ?>">
                    <div class="modal-body">
                        <h4> Do you agree to delete this data? </h4>
                        <h5 id="airport-icao-text" style="color: darkmagenta"></h5>
                        <h5 id="airport-arabic-text" style="color: darkmagenta"></h5>
                        <h5 id="airport-city-text" style="color: darkmagenta"></h5>
                        <input id="delete-airport-id" name="delete-airport-id" style="display: none">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info" name="delete-airport-button"> Delete </button>
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
                <th> Airport ICAO</th>
                <th> Airport Arabic </th>
                <th> Airport City </th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($airport as $airport_line){
            ?><tr id="airport-line<?php echo $airport_line->airport_id; ?>" onclick='edit_airport_line(<?php echo json_encode($airport_line); ?>, <?php echo json_encode($airport); ?>)'><td style="display: none"><?php echo $airport_line->airport_id;?></td><?php
                ?><td><?php echo $airport_line->airport_icao;?></td><?php
                ?><td><?php echo $airport_line->airport_arabic;?></td><?php
                ?><td><?php echo $airport_line->airport_city;?></td></tr><?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
