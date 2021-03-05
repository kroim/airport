
<div class="main-search" style="background: cornflowerblue">
    <form method="post" action="<?php echo site_url('main/request')?>">
        <div class="row">
            <div class="col-md-3">Request No: <input class="request-input" type="text" name="request-no" ></div>
            <div class="col-md-3">
                <div class="button-group">
                    <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">Select Aircraft <span class="glyphicon glyphicon-cog"></span> <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <?php
                        $aircraftNum = sizeof($aircraftData);
                        for($i = 0; $i < $aircraftNum; $i++){
                            ?>
                            <li><input id="req-aircraft<?php echo $i+1;?>" name="request-aircraft[]" type="checkbox" value="<?php echo $aircraftData[$i]->aircraft_name;?>" /><label onclick="checkAircraft(<?php echo $i+1;?>)">&nbsp;<?php echo $aircraftData[$i]->aircraft_name;?></label></li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">Date From: <input class="request-input" type="date" name="request-from" ></div>
            <div class="col-md-3">Date To: <input class="request-input" type="date" name="request-to" ></div>
        </div>
        <div class="row" style="padding-top: 1%;">
            <div style="text-align: center;">
                <input type="submit" class="btn btn-success" name="request-search" value="Search" style="margin-top: 10px;">
                <a href="<?php echo site_url('main/request') ?>" class="btn btn-success" style="margin-top: 10px;">Refresh(All)</a>
            </div>
        </div>
    </form>
</div>
<h2 style="color: dodgerblue; text-align: center;">Request Lists</h2>
<div class="request-table">
    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>Request No.</th>
            <th>Aircraft</th>
            <th>date From</th>
            <th>date To</th>
            <th>Airport</th>
            <th>Airport Ar</th>
            <th>Purpose</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
        <?php
            foreach ($searchData as $requestRow){
                ?><tr id="main-request-<?php echo $requestRow->request_id;?>" onclick='main_request_line(<?php echo json_encode($requestRow);?>, <?php echo json_encode($searchData);?>)'><td><?php echo $requestRow->request_id;?></td><?php
                ?><td><?php echo $requestRow->aircraft;?></td><?php
                ?><td><?php echo $requestRow->from;?></td><?php
                ?><td><?php echo $requestRow->to;?></td><?php
                ?><td><?php echo $requestRow->airport;?></td><?php
                ?><td><?php echo $requestRow->airport_ar;?></td><?php
                ?><td><?php echo $requestRow->purpose;?></td><?php
                ?><?php
                    $currentDate = date("Y-m-d");
                    if($currentDate<$requestRow->from){
                        ?><td style='color: blue'><div class="col-md-4">Scheduled</div>
                        <div class="col-md-8"><img src="<?php echo base_url('assets/images/btn2.png')?>" style="height: 20px;"></div>
                        </td><?php
                    }elseif ($currentDate>$requestRow->to){
                        ?><td><div class="col-md-4">Completed</div></td><?php
                    }else{
                        ?><td style='color: green'><div class="col-md-4">Active</div>
                        <div class="col-md-8"><img src="<?php echo base_url('assets/images/btn1.png')?>" style="height: 20px;"></div>
                        </td><?php
                    }
                    ?></tr><?php
            }
        ?>
        </tbody>
    </table>

    <button ctype="button" data-toggle="modal" id="image-modal-button1" data-target="#image-modal" style="display: none;"></button>
    <!-- The Modal -->
    <div class="modal fade" id="image-modal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <form method="post" action="<?php echo site_url('main/download_image'); ?>" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div style="padding-bottom: 1%;">
                            <input id="request_image_data" name="request_image_data" style="display: none;">
                            <img src="" id="requestImg" style="height: 400px; width: 100%;">
                        </div>
                        <input id="request_image_filename" class="form-control" name="request_image_filename" placeholder="download name" required/>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info" name="download-image-button"> Download </button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>