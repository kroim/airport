
<div class="main-search" style="background: rgb(0,0,0); overflow: hidden">
    <div class="row">
        <div class="col-md-10" style="padding-left: 5%">
            <form method="post" action="<?php echo site_url('main/mission')?>">
                <div class="row" style="color: white;">
                    <div class="col-md-3">Request No: <input class="request-input" type="text" name="mission-no" style="color: black"></div>
                    <div class="col-md-3" style="color: black">
                        <div class="button-group">
                            <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">Select Aircraft <span class="glyphicon glyphicon-cog"></span> <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <?php
                                $aircraftNum = sizeof($aircraftData);
                                for($i = 0; $i < $aircraftNum; $i++){
                                    ?>
                                    <li><input id="req-aircraft<?php echo $i+1;?>" name="mission-aircraft[]" type="checkbox" value="<?php echo $aircraftData[$i]->aircraft_name;?>" /><label onclick="checkAircraft(<?php echo $i+1;?>)">&nbsp;<?php echo $aircraftData[$i]->aircraft_name;?></label></li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">Date From: <input class="request-input" type="date" name="mission-from" style="color: black"></div>
                    <div class="col-md-3">Date To: <input class="request-input" type="date" name="mission-to" style="color: black"></div>
                </div>
                <div class="row" style="padding-top: 3%;">
                    <div style="text-align: center;">
                        <input type="submit" class="btn btn-info" name="request-search" value="Search" style="margin-top: 10px;">
                        <a href="<?php echo site_url('main/mission') ?>" class="btn btn-info" style="margin-top: 10px;">Refresh(All)</a>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-2">
            <img src="<?php echo base_url('assets/images/search-01.jpg')?>" style="width: 100%; padding-right: 10%">
        </div>
    </div>

</div>
<h2 style="color: dodgerblue; text-align: center;">Mission Lists</h2>
<style>
    th{
        text-align: center;
    }
</style>
<div class="request-table">
    <table id="example-02" class="table table-striped table-bordered" cellspacing="0" width="100%" style="text-align: center">
        <thead>
        <tr>
            <th class="col-md-1" onclick="sortTable02(0)">ACFT</th>
            <th class="col-md-1" onclick="sortTable02(1)">Date</th>
            <th class="col-md-1" onclick="sortTable02(2)">Flying Hours</th>
            <th class="col-md-1" onclick="sortTable02(3)">Cycles</th>
            <th class="col-md-1" onclick="sortTable02(4)">Request No.</th>
            <th class="col-md-1" onclick="sortTable02(5)">Airport</th>
            <th class="col-md-3" onclick="sortTable02(6)">Purpose Of Operation</th>
            <th class="col-md-3" onclick="sortTable02(7)">Notes</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($searchData as $requestRow){
            ?><tr><td><?php echo $requestRow->aircraft_name;?></td><?php
            ?><td><?php echo $requestRow->date;?></td><?php
            $hours = floatval($requestRow->hours);
            if ($hours>=8){
                ?><td style="background-color: red"><?php echo $requestRow->hours;?></td><?php
            }else{
                ?><td><?php echo $requestRow->hours;?></td><?php
            }
            $cycles = floatval($requestRow->cycles);
            if ($cycles>=12){
                ?><td style="background-color: red"><?php echo $requestRow->cycles;?></td><?php
            }else{
                ?><td><?php echo $requestRow->cycles;?></td><?php
            }
            ?><td><?php echo $requestRow->mission_request_no;?></td><?php
            ?><td><?php echo $requestRow->airport_name;?></td><?php
            ?><td><?php echo $requestRow->purpose_en;?></td><?php
            ?><td><?php echo $requestRow->notes;?></td><?php
        }
        ?>
        </tbody>
    </table>
</div>
<div class="getReport-class" style="display: none">
    <form action="<?php echo site_url('main/getReport')?>" method="post">
        <input type="text" name="search-data" value='<?php echo json_encode($searchData); ?>'>
        <input type="text" name="airport-data" value='<?php echo json_encode($airportData); ?>'>
        <input type="text" name="aircraft-data" value='<?php echo json_encode($aircraftData); ?>'>
        <input type="text" name="report-category" id="mission-report-category">
        <input type="text" name="report-title" id="mission-report-title">
        <input type="text" name="report-title-size" id="mission-report-title-size">
        <input type="text" name="report-table-header-size" id="mission-table-header-size">
        <input type="text" name="report-table-body-size" id="mission-table-body-size">
        <input type="submit" id="get-report-mission" name="get-report" value="mission">
    </form>
</div>
<!--report table format-->

<div class="download-mission-table" style="display: none;">
    <table class="table table-striped table-bordered" id="table-mi-en" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>Request No.</th>
            <th>ACFT</th>
            <th>Date</th>
            <th>Purpose of Operation</th>
            <th>Airport</th>
            <th>City</th>
            <th>Flying Hours</th>
            <th>Cycles</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($searchData as $missionRow){
            ?><tr><td><?php echo $missionRow->mission_request_no;?></td>
            <td><?php echo $missionRow->aircraft_name;?></td>
            <td><?php echo $missionRow->date;?></td>
            <td><?php echo $missionRow->purpose_en;?></td>
            <td><?php echo $missionRow->airport_name;?></td>
            <td><?php
                for($index = 0; $index < sizeof($airportData); $index++){
                    if($airportData[$index]->airport_icao == $missionRow->airport_name){
                        echo $airportData[$index]->airport_city;
                        break;
                    }
                }
                ?></td>
            <td><?php echo $missionRow->hours;?></td>
            <td><?php echo $missionRow->cycles;?></td></tr><?php
        }
        ?>
        </tbody>
        <tr><td></td></tr>
        <tr><td></td></tr>
        <tr><td></td></tr><?php
        $total = 0;
        for($count1 = 0; $count1 < sizeof($aircraftData); $count1++){
            $sum = 0;
            for($count2 = 0; $count2 < sizeof($searchData); $count2++){
                if($aircraftData[$count1]->aircraft_name == $searchData[$count2]->aircraft_name){
                    $sum += floatval($searchData[$count2]->hours);
                }
            }
            $total += $sum;
            ?><tr>
                <td></td><td></td><td></td>
                <td><?php echo $aircraftData[$count1]->aircraft_name." + ".$aircraftData[$count1]->aircraft_model; ?></td>
                <td><?php echo $sum; ?></td>
            </tr><?php
        }
        ?><tr><td></td></tr><tr>
            <td></td><td></td><td></td>
            <td><?php echo "TOTAL FLYING HOURS" ?></td>
            <td><?php echo $total; ?></td>
        </tr>
    </table>
</div>

<div class="download-mission-table" style="display: none;">
    <table class="table table-striped table-bordered" id="table-mi-ar" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>Request No.</th>
            <th>ACFT</th>
            <th>Date</th>
            <th>Purpose of Operation</th>
            <th>Airport</th>
            <th>City</th>
            <th>Flying Hours</th>
            <th>Cycles</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($searchData as $missionRow){
            ?><tr><td><?php echo $missionRow->mission_request_no;?></td>
            <td><?php echo $missionRow->aircraft_name;?></td>
            <td><?php echo $missionRow->date;?></td>
            <td><?php echo $missionRow->purpose_ar;?></td>
            <td><?php echo $missionRow->airport_ar_name;?></td>
            <td><?php
                for($index = 0; $index < sizeof($airportData); $index++){
                    if($airportData[$index]->airport_icao == $missionRow->airport_name){
                        echo $airportData[$index]->airport_city;
                        break;
                    }
                }
                ?></td>
            <td><?php echo $missionRow->hours;?></td>
            <td><?php echo $missionRow->cycles;?></td></tr><?php
        }
        ?>
        </tbody>
        <tr><td></td></tr>
        <tr><td></td></tr>
        <tr><td></td></tr><?php
        $total = 0;
        for($count1 = 0; $count1 < sizeof($aircraftData); $count1++){
            $sum = 0;
            for($count2 = 0; $count2 < sizeof($searchData); $count2++){
                if($aircraftData[$count1]->aircraft_name == $searchData[$count2]->aircraft_name){
                    $sum += floatval($searchData[$count2]->hours);
                }
            }
            $total += $sum;
            ?><tr>
            <td></td><td></td><td></td>
            <td><?php echo $aircraftData[$count1]->aircraft_name." + ".$aircraftData[$count1]->aircraft_model; ?></td>
            <td><?php echo $sum; ?></td>
            </tr><?php
        }
        ?><tr><td></td></tr><tr>
            <td></td><td></td><td></td>
            <td><?php echo "TOTAL FLYING HOURS" ?></td>
            <td><?php echo $total; ?></td>
        </tr>
    </table>
</div>

