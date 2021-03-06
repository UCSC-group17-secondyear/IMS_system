<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Updated Department</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li><a href="aUpdateDepartmentV.php">Update Department</a></li>
            <li class="active">Action Failed!</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'aSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div class="contentForm">
                    <!-- <form action="../../controller/adminControllers/manageUserRoleController.php" method="post"> -->
                        <div class="row">
                            <h2>Sorry!
                                The department you entered already exists.
                            </h2>
                        </div>

                        <button class="subbtn">
                            <a href="aUpdateDepartmentV.php">Try again</a>  
                        </button>
                        <button class="cancelbtn">
                            <a href="aHomeV.php">Exit</a> 
                        </button>
                    <!-- </form> -->
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>