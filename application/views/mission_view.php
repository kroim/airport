
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