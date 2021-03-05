<div class="container">
    <h3 style="color: #154ecc; text-align: center; background-color: #ffc349">User Management</h3>
    <div class="row" style="padding: 1% 1% 1% 1%;">
        <div class="col-md-7">
            <a href="<?php echo site_url('user/register');?>"><button class="btn btn-success" > Add User </button></a>
            <button type="button" class="btn btn-success" id="delete-user-modal" data-toggle="modal" data-target="#deleteUserLine" disabled> Delete Request </button>
        </div>
    </div>
    <!-- Delete User Modal -->
    <div class="modal fade" id="deleteUserLine" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="background-color: orange">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Delete User</h3>
                </div>
                <form method="post" action="<?php echo site_url('user/delete_user'); ?>">
                    <div class="modal-body">
                        <h4> Do you agree to delete this data? </h4>
                        <h5 id="user-id-text" style="color: darkmagenta"></h5>
                        <h5 id="user-name-text" style="color: darkmagenta"></h5>
                        <h5 id="user-permission-text" style="color: darkmagenta"></h5>
                        <input id="delete-user-id" name="delete-user-id" style="display: none">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info" name="delete-user-button"> Delete </button>
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
                <th> UserID </th>
                <th> UserName </th>
                <th> Permission </th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($user_data as $user_line){
            ?><tr id="user-line<?php echo $user_line->id; ?>" onclick='edit_user_line(<?php echo json_encode($user_line); ?>, <?php echo json_encode($user_data); ?>)'><td><?php echo $user_line->id;?></td><?php
                ?><td><?php echo $user_line->name;?></td><?php
                ?><td><?php echo $user_line->permission;?></td></tr><?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>