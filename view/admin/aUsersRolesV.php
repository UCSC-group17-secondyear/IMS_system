<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Update user role</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li><a href="aRemoveUsersUserRoleV.php">Remove User's user-role</a></li>
            <li class="active">User's user-roles</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'aSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>User's user-role</h2>
                </div>
                <div class="contentForm">
                    <form action="../../controller/adminControllers/manageUserRoleController.php" method="post">
                        <div class="row">
                            <div class="col-25">
                              <label>Selected user</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="empid" disabled <?php echo 'value="'.$_SESSION['empid'].'"' ?> /><br>
                            </div>
                        </div>

                        <button class="subbtn" type="submit" name="getUserRole-submit">Get user-roles</button>
                        <button class="cancelbtn">
                            <a href="aHomeV.php">Cancel</a>
                        </button>
                    </form>
                </div>

                <table id="tableStyle" class="mytable" style="margin-left: 35%;" >
                    <tr>
                        <th>User Roles</th>
                    </tr>
                    <?php echo $_SESSION['user_role']; ?>
                </table>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>