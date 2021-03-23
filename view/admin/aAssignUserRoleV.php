<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Assign a use role</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li class="active">Assign a user role</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'aSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Assign a user role</h2>
                </div>
                <div class="contentForm">
                    <form action="../../controller/adminControllers/manageUserRoleController.php" method="post">
                        <div class="row">
                            <div class="col-25">
                              <label>Employee Username</label>
                            </div>
                            <div class="col-75">
                                <select name="empid" id="">
                                    <option value="">Select employee id</option>
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
                                    <option value="">Select role</option>
                                    <?php echo $_SESSION['userroles'] ?>
                                </select>
                            </div>
                        </div>

                        <button class="subbtn" type="submit" name="setUserRole-submit">Save role</button>
                        <button class="cancelbtn">
                            <a href="aHomeV.php">Cancel</a>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>