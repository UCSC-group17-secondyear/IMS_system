<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Update Department</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li><a href="aViewDepartmentV.php">Departments List</a></li>
            <li class="active">Update Department</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'aSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Update Department</h2>
                </div>

                <div class="contentForm">
                    <form action="../../controller/aUpdateDepartmentController.php" method="POST">
                        <div class="row">
                            <div class="col-25">
                                <label for="">Department</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="department" <?php echo 'value="'.$_SESSION['department'].'"' ?> required/><br>
                            </div>
                        </div>
                            
                        <div class="row">
                            <div class="col-25">
                                <label for="">Department Head</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="dept_head" <?php echo 'value="'.$_SESSION['dept_head'].'"' ?> required/><br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label for="">Department Head's Email</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="dept_head_email" <?php echo 'value="'.$_SESSION['dept_head_email'].'"' ?> required/><br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label for="">Description</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="description" <?php echo 'value="'.$_SESSION['description'].'"' ?> required/><br>  
                            </div>
                        </div>
                                             
                        <button type="submit" name="updateDepartment-submit" class="subbtn">Update Department</button>
                        <button type="submit" name="cancel-submit" class="cancelbtn"><a href="aHomeV.php">Cancel</a></button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>