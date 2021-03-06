<?php
/**
 * Created by PhpStorm.
 * User: GaoComet
 * Date: 12/18/2017
 * Time: 8:49 AM
 */
?>
<!DOCTYPE html>
<html>
<head>
    <link href="<?php echo base_url('assets/bootstrap/dist/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/DataTables/css/dataTables.bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/custom.css')?>" rel="stylesheet">
    <link rel="icon" href="<?php echo base_url(); ?>assets/images/icon1.png">
    <title>Report Page</title>
</head>
<body class="container">
<div class="report-header" style="text-align: center; padding-top: 3%;">
    <div class="report-logo" style="padding-bottom: 50px;">
        <a href="<?php echo site_url('/')?>">
            <img src="<?php echo base_url('assets/images/logo.png')?>">
        </a>

    </div>
    <p style="font-size: <?php echo $t_size;?>px;"><?php echo $title;?></p>
</div>
<?php
if($switching == 'request'){
    ?>
    <div class="report-table" style="padding: 2% 2% 2% 2%">
        <table class="table table-striped table-bordered">
            <thead style="font-size: <?php echo $th_size;?>px;">
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
            <tbody style="font-size: <?php echo $tb_size;?>px;">
            <?php
            foreach ($search_data as $requestRow){
                ?><tr><td><?php echo $requestRow->request_id;?></td>
                <td><?php echo $requestRow->aircraft;?></td>
                <td><?php echo $requestRow->from;?></td>
                <td><?php echo $requestRow->to;?></td>
                <td><?php
                    if($category == "en"){
                        echo $requestRow->purpose;
                    }else{
                        echo $requestRow->purpose_ar;
                    }?></td>
                <td><?php
                    if($category == "en"){
                        echo $requestRow->airport;
                    }else{
                        echo $requestRow->airport_ar;
                    }?></td>
                <td><?php
                    for($index = 0; $index < sizeof($airport_data); $index++){
                        if($airport_data[$index]->airport_icao == $requestRow->airport){
                            echo $airport_data[$index]->airport_city;
                            break;
                        }
                    }
                    ?></td><?php
                ?><td><?php
                    $sum = 0;
                    for ($index1 = 0; $index1 < sizeof($mission_data); $index1++){
                        if ($mission_data[$index1]->mission_request_no == $requestRow->request_id){
                            $sum += floatval($mission_data[$index1]->hours);
                        }
                    }
                    echo $sum;?></td></tr><?php
            }
            ?>
            </tbody>

        </table>
    </div>
    <div class="report-total-result" style="padding-left: 30%; padding-right: 30%;">
            <h3 style="text-align: center;">Total Result</h3>
            <table class="table table-bordered">
                <?php
                $total_hours = 0;
                foreach ($search_data as $requestRow){
                    ?><tr><td><?php echo $requestRow->aircraft;?></td><?php
                    ?><td><?php
                        for($index = 0; $index < sizeof($aircraft_data); $index++){
                            if($aircraft_data[$index]->aircraft_name == $requestRow->aircraft){
                                echo $aircraft_data[$index]->aircraft_model;
                                break;
                            }
                        }
                        ?></td><?php
                    ?><td><?php
                        $sum = 0;
                        for ($index1 = 0; $index1 < sizeof($mission_data); $index1++){
                            if ($mission_data[$index1]->mission_request_no == $requestRow->request_id){
                                $sum += floatval($mission_data[$index1]->hours);
                            }
                        }
                        $total_hours += $sum;
                        echo $sum;?></td></tr><?php
                }
                ?>
                <tr>
                    <td>Total Hours</td>
                    <td></td>
                    <td><?php echo $total_hours;?></td>
                </tr>
            </table>
        </div>
    </div>
    <?php
}elseif ($switching == 'mission'){
    ?>
    <table class="table table-striped table-bordered" id="table-mi-en" cellspacing="0" width="100%">
        <thead style="font-size: <?php echo $th_size;?>px;">
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
        <tbody style="font-size: <?php echo $tb_size;?>px;">
        <?php
        foreach ($search_data as $missionRow){
            ?><tr><td><?php echo $missionRow->mission_request_no;?></td>
            <td><?php echo $missionRow->aircraft_name;?></td>
            <td><?php echo $missionRow->date;?></td>
            <td><?php
                if($category == "en"){
                    echo $missionRow->purpose_en;
                }else{
                    echo $missionRow->purpose_ar;
                }
            ?></td>
            <td><?php
                if($category == "en"){
                    echo $missionRow->airport_name;
                }else{
                    echo $missionRow->airport_ar_name;
                }
                ?></td>
            <td><?php
                for($index = 0; $index < sizeof($airport_data); $index++){
                    if($airport_data[$index]->airport_icao == $missionRow->airport_name){
                        echo $airport_data[$index]->airport_city;
                        break;
                    }
                }
                ?></td>
            <td><?php echo $missionRow->hours;?></td>
            <td><?php echo $missionRow->cycles;?></td></tr><?php
        }
        ?>
        </tbody>
    </table>
    <div style="padding-right: 30%; padding-left: 30%;">
        <h3 style="text-align: center;">Total Result</h3>
        <table class="table table-bordered">
            <?php
            $total = 0;
            for($count1 = 0; $count1 < sizeof($aircraft_data); $count1++){
                $sum = 0;
                for($count2 = 0; $count2 < sizeof($search_data); $count2++){
                    if($aircraft_data[$count1]->aircraft_name == $search_data[$count2]->aircraft_name){
                        $sum += floatval($search_data[$count2]->hours);
                    }
                }
                $total += $sum;
                ?><tr>
                <td><?php echo $aircraft_data[$count1]->aircraft_name?><td><?php echo $aircraft_data[$count1]->aircraft_model; ?></td>
                <td><?php echo $sum; ?></td>
                </tr><?php
            }
            ?><tr>
                <td><?php echo "TOTAL FLYING HOURS" ?></td>
                <td></td>
                <td><?php echo $total; ?></td>
            </tr>
        </table>
    </div>

    <?php
}
?>

</body>
</html>
