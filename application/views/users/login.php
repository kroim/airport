<?php
/**
 * Created by PhpStorm.
 * User: GaoComet
 * Date: 12/1/2017
 * Time: 8:54 AM
 */
?>

<!DOCTYPE html>
<html>
<head>
    <title> Aircraft Login </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="icon" href="<?php echo base_url('assets/images/icon1.png'); ?>">
</head>
<body style="background-image: url('<?php echo base_url("assets/images/aircraft-01.png")?>'); width: 100%; height: 100%; margin: 0;">
<div style="padding-top: 12%; margin: 0;">
    <div class="col-lg-7 col-md-7 col-xs-2"></div>
    <div class="col-lg-2 col-md-2 col-xs-8" style="background-color: #00ff1f70; padding: 2% 2%">
        <h2 style="text-align: center; color: orange;"><?php echo $this->lang->line('aircraft');?></h2>
        <form action="" method="post">
            <?php echo $this->lang->line('user_email');?>
            <input type="email" style="font-size: 20px;" id="user-email" class="form-control" name="user-email" required>
            <br>
            <?php echo $this->lang->line('password');?>
            <input type="password" style="font-size: 20px;" id="user-password" class="form-control" name="user-password" required>
            <br>
            <input type="submit" class="btn btn-default" name="loginSubmit" id="login-button" value="<?php echo $this->lang->line('login');?>">
            <?php
            if(!empty($success_msg)){
                echo '<p class="statusMsg">'.$success_msg.'</p>';
            }elseif(!empty($error_msg)){
                echo '<p class="statusMsg" style="color: red; margin-top: 3px;">'.$error_msg.'</p>';
            }
            ?>
        </form>
        <p class="footInfo" style="margin: 0;"><?php echo $this->lang->line('account_check_msg2')?></p>
        <p style="margin: 0;">
            <a href="<?php echo site_url("user/register"); ?>" style="color: blue"><?php echo $this->lang->line('register')." ".$this->lang->line('here')?></a></p>
    </div>
</div>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>