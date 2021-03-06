<?php
/**
 * Created by PhpStorm.
 * User: GaoComet
 * Date: 12/1/2017
 * Time: 5:31 PM
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title> Aircraft Register</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


</head>
<body style="background-image: url('<?php echo base_url("assets/images/aircraft-01.png")?>'); ">
<div>
    <div class="row" style="padding-top: 10%; margin: 0;">
        <div class="col-lg-6 col-md-6 col-xs-2"></div>
        <div class="col-lg-3 col-md-3 col-xs-8" style="background-color: #008000ab; padding: 2% 3%">
            <h2 style="text-align: center; color: orange;"><?php echo $this->lang->line('aircraft');?></h2>
            <?php echo form_error('name','<span class="help-block">','</span>'); ?>
            <?php echo form_error('email','<span class="help-block">','</span>'); ?>
            <?php echo form_error('conf_password','<span class="help-block">','</span>'); ?>
            <form action="" method="post" >
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="<?php echo $this->lang->line('name');?>" required value="<?php echo !empty($user['name'])?$user['name']:''; ?>">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="<?php echo $this->lang->line('email');?>" required value="<?php echo !empty($user['email'])?$user['email']:''; ?>">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="<?php echo $this->lang->line('password');?>" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="conf_password" placeholder="<?php echo $this->lang->line('confirm_password');?>" required>
                </div>
                <div class="form-group">
                    <?php
                    if(!empty($user['permission'])){
                        $permission = $user['permission'];
                    }else{
                        $permission = '';
                    }
                    ?>
                    <div class="register-permission" style="display: none">
                        <input type="radio" name="permission" value="manager" checked> manager<br>
                        <!--                <input type="radio" name="permission" value="admin" --><?php //if($permission == 'admin' || $permission == '') echo 'checked'?><!-- > admin<br>-->
                        <!--                <input type="radio" name="permission" value="dispatcher" --><?php //if($permission == 'dispatcher') echo 'checked'?><!-- > dispatcher<br>-->
                        <!--                <input type="radio" name="permission" value="manager" --><?php //if($permission == 'manager') echo 'checked'?><!-- > customer1<br>-->
                        <!--                <input type="radio" name="permission" value="general MGR" --><?php //if($permission == 'general MGR') echo 'checked'?><!-- > customer2-->
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" name="registerSubmit" class="btn btn-warning" value="<?php echo $this->lang->line('register');?>"/>
                </div>
            </form>
            <p class="footInfo"><?php echo $this->lang->line('account_check_msg1')?>
                <a href="<?php echo site_url("user/login"); ?>" style="color: white;"><?php echo $this->lang->line('login')." ".$this->lang->line('here')?></a>
            </p>
        </div>
        <div class="col-lg-3 col-md-3 col-xs-2"></div>
    </div>


</div>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>

