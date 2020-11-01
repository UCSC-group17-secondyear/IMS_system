<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Remove a use role</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li>Remove a User role</li>
        </ul>
    
        <div class="row">
            <div class="col left20">
                <?php
                    require 'aSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Remove a User role</h2>
                </div>
                <div class="contentForm">
                    <form action="../../controller/adminControllers/manageUSerRoleController.php" method="post">
                        <div class="row">
                            <div class="col-25">
                              <label>Enter User role</label>
                            </div>
                            <div class="col-75">
                              <input input type="text" name="userRole" placeholder="User role" required/> <br>
                            </div>
                        </div>

                        <button class="mainbtn" type="submit" name="remove-submit">Remove user role</button>
                    </form>
                    <form>
                        <button class="subbtn" type="submit" name="userroleList-submit">
                            <a href="aViewUserRolesPopupV.php">View Current user roles</a>
                        </button>
                        <button type="submit" class="cancelbtn">
                            <a href="aHomeV.php">Cancel</a>
                        </button>
                    </form>
                    <!-- <form>
                        <form action="../../controller/adminControllers/manageUserRoleController.php" method="post">
                        <button class="subbtn" type="submit" name="userroleList-submit">View Current user roles</button>
                        <a href="aHomeV.php"><button type="submit" name="cancel-submit" class="cancelbtn">Cancel</button></a>
                    </form> -->
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>