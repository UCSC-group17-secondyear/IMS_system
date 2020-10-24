<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Update user role</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li>Update User role</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'aSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Update User role</h2>
                </div>
                <div class="contentForm">
                    <form action="../../controller/adminControllers/manageUserRoleController.php" method="post">
                        <div class="row">
                            <div class="col-25">
                              <label>Select user by user name</label>
                            </div>
                            <div class="col-75">
                                <select name="empid" id="">
                                    <option value="">User Name</option>
                                    <?php echo $_SESSION['userlist'] ?>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                              <label>Select user role</label>
                            </div>
                            <div class="col-75">
                                <select name="userRole" id="">
                                    <option value="">User Role</option>
                                    <?php echo $_SESSION['userroles'] ?>
                                </select>
                            </div>
                        </div>

                        <button class="mainbtn" type="submit" name="updateUserRole-submit">Save</button>
                    </form>
                    <form action="../../controller/adminControllers/manageUserRoleController.php" method="post">
                        <button class="subbtn" type="submit" name="userroleList-submit">View Current user roles</button>
                        <a href="aHomeV.php"><button type="submit" class="cancelbtn">Cancel</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>