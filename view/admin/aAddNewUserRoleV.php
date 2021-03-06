<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Add a new user role</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li class="active">Add User role</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'aSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Add a new User role</h2>
                </div>
                <div class="contentForm">
                    <form action="../../controller/adminControllers/manageUserRoleController.php" method="post">
                        <div class="row">
                            <div class="col-25">
                              <label>Enter User role</label>
                            </div>
                            <div class="col-75">
                              <input input type="text" name="userRole" placeholder="User role" required/> <br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                              <label>Enter its description</label>
                            </div>
                            <div class="col-75">
                              <input type="text" name="description" placeholder="Description" required/> <br>
                            </div>
                        </div>

                        <button class="subbtn" type="submit" name="addUserrole-submit">Add user role</button>
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