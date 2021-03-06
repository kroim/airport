
<div class="main-search" style="background: rgb(0,0,0);">
    <div class="row">
        <div class="col-md-10" style="padding-left: 5%">
            <form method="post" action="<?php echo site_url('main/request')?>">
                <div class="row" style="color: white">
                    <div class="col-md-3">Request No: <input class="request-input" type="text" name="request-no" style="color: black"></div>
                    <div class="col-md-3" style="color: black">
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
                    <div class="col-md-3">Date From: <input class="request-input" type="date" name="request-from" style="color: black"></div>
                    <div class="col-md-3">Date To: <input class="request-input" type="date" name="request-to" style="color: black"></div>
                </div>
                <div class="row" style="padding-top: 3%;">
                    <div style="text-align: center;">
                        <input type="submit" class="btn btn-info" name="request-search" value="Search" style="margin-top: 10px;">
                        <a href="<?php echo site_url('main/request') ?>" class="btn btn-info" style="margin-top: 10px;">Refresh(All)</a>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-2">
            <img src="<?php echo base_url('assets/images/search-01.jpg')?>" style="width: 100%; padding-right: 10%">
        </div>
    </div>
</div>
<h2 style="color: dodgerblue; text-align: center;">Request Lists</h2>
<div class="request-table">
    <table id="example-01" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th onclick="sortTable01(0)">Request No.</th>
            <th onclick="sortTable01(1)">Aircraft</th>
            <th id="refresh-request-click1" onclick="sortTable01(2)">date From</th>
            <th onclick="sortTable01(3)">date To</th>
            <th onclick="sortTable01(4)">Airport</th>
            <th onclick="sortTable01(5)">Airport Ar</th>
            <th onclick="sortTable01(6)">Purpose</th>
            <th onclick="sortTable01(7)">Status</th>
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

    <button type="button" data-toggle="modal" id="image-modal-button1" data-target="#image-modal" style="display: none;"></button>
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
<div class="getReport-class" style="display: none">
    <form action="<?php echo site_url('main/getReport')?>" method="post">
        <input type="text" name="search-data" value='<?php echo json_encode($searchData); ?>'>
        <input type="text" name="airport-data" value='<?php echo json_encode($airportData); ?>'>
        <input type="text" name="aircraft-data" value='<?php echo json_encode($aircraftData); ?>'>
        <input type="text" name="mission-data" value='<?php echo json_encode($missionData); ?>'>
        <input type="text" name="report-category" id="request-report-category">
        <input type="text" name="report-title" id="request-report-title">
        <input type="text" name="report-title-size" id="request-report-title-size">
        <input type="text" name="report-table-header-size" id="request-table-header-size">
        <input type="text" name="report-table-body-size" id="request-table-body-size">
        <input type="submit" id="get-report-request" name="get-report" value="request">
    </form>
</div>
<div class="download-request-table" style="display: none">
    <table class="table table-striped table-bordered" id="table-re-en" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>Request No.</th>
            <th>ACFT</th>
            <th>Date From</th>
            <th>Date To</th>
            <th>Purpose of Operation</th>
            <th>Airport</th>
            <th>City</th>
            <th>Total Flying Hours</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($searchData as $requestRow){
            ?><tr><td><?php echo $requestRow->request_id;?></td><?php
            ?><td><?php echo $requestRow->aircraft;?></td><?php
            ?><td><?php echo $requestRow->from;?></td><?php
            ?><td><?php echo $requestRow->to;?></td><?php
            ?><td><?php echo $requestRow->purpose;?></td><?php
            ?><td><?php echo $requestRow->airport;?></td><?php
            ?><td><?php
                for($index = 0; $index < sizeof($airportData); $index++){
                    if($airportData[$index]->airport_icao == $requestRow->airport){
                        echo $airportData[$index]->airport_city;
                        break;
                    }
                }
                ?></td><?php
            ?><td><?php
                $sum = 0;
                for ($index1 = 0; $index1 < sizeof($missionData); $index1++){
                    if ($missionData[$index1]->mission_request_no == $requestRow->request_id){
                        $sum += floatval($missionData[$index1]->hours);
                    }
                }
                echo $sum;?></td></tr><?php
        }
        ?>
        </tbody>
    </table>
</div>
<div class="download-request-table" style="display: none;">
    <table class="table table-striped table-bordered" id="table-re-ar" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>Request No.</th>
            <th>ACFT</th>
            <th>Date From</th>
            <th>Date To</th>
            <th>Purpose of Operation</th>
            <th>Airport</th>
            <th>City</th>
            <th>Total Flying Hours</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($searchData as $requestRow){
            ?><tr><td><?php echo $requestRow->request_id;?></td><?php
            ?><td><?php echo $requestRow->aircraft;?></td><?php
            ?><td><?php echo $requestRow->from;?></td><?php
            ?><td><?php echo $requestRow->to;?></td><?php
            ?><td><?php echo $requestRow->purpose_ar;?></td><?php
            ?><td><?php echo $requestRow->airport_ar;?></td><?php
            ?><td><?php
                for($index = 0; $index < sizeof($airportData); $index++){
                    if($airportData[$index]->airport_icao == $requestRow->airport){
                        echo $airportData[$index]->airport_city;
                        break;
                    }
                }
                ?></td><?php
            ?><td><?php
                $sum = 0;
                for ($index1 = 0; $index1 < sizeof($missionData); $index1++){
                    if ($missionData[$index1]->mission_request_no == $requestRow->request_id){
                        $sum += floatval($missionData[$index1]->hours);
                    }
                }
                echo $sum;?></td></tr><?php
        }
        ?>
        </tbody>
    </table>
</div>