
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
                ?><tr><td><?php echo $requestRow->request_id;?></td><?php
                ?><td><?php echo $requestRow->aircraft;?></td><?php
                ?><td><?php echo $requestRow->from;?></td><?php
                ?><td><?php echo $requestRow->to;?></td><?php
                ?><td><?php echo $requestRow->airport;?></td><?php
                ?><td><?php echo $requestRow->airport_ar;?></td><?php
                ?><td><?php echo $requestRow->purpose;?></td><?php
                ?><td><?php
                    $currentDate = date("Y-m-d");
                    if($currentDate<$requestRow->from){
                        echo "Stand By";
                    }elseif ($currentDate>$requestRow->to){
                        echo "Complete";
                    }else{
                        echo "Active";
                    }
                    ?></td></tr><?php
            }
        ?>
        </tbody>
    </table>

</div>