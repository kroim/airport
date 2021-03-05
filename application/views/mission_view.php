
<div class="main-search" style="background: cornflowerblue">
    <form method="post" action="<?php echo site_url('main/mission')?>">
        <div class="row">
            <div class="col-md-3">Request No: <input class="request-input" type="text" name="mission-no" ></div>
            <div class="col-md-3">
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
            <div class="col-md-3">Date From: <input class="request-input" type="date" name="mission-from" ></div>
            <div class="col-md-3">Date To: <input class="request-input" type="date" name="mission-to" ></div>
        </div>
        <div class="row" style="padding-top: 1%;">
            <div style="text-align: center;">
                <input type="submit" class="btn btn-success" name="request-search" value="Search" style="margin-top: 10px;">
                <a href="<?php echo site_url('main/mission') ?>" class="btn btn-success" style="margin-top: 10px;">Refresh(All)</a>
            </div>
        </div>
    </form>
</div>
<h2 style="color: dodgerblue; text-align: center;">Mission Lists</h2>
<div class="request-table">
    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>ACFT</th>
            <th>Date</th>
            <th>Flying Hours</th>
            <th>Cycles</th>
            <th>Request No.</th>
            <th>Airport</th>
            <th>Purpose Of Operation</th>
            <th>Notes</th>
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

