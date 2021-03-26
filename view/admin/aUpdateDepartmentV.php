<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Update Department</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li><a href="../../controller/aViewDepartmentController.php">Departments list</a></li>
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
                    <form action="../../controller/adminControllers/aUpdateDepartmentController.php" method="POST">
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
                                <label for="">Department Abbriviation</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="abbriviation" <?php echo 'value="'.$_SESSION['abbriviation'].'"' ?> required/><br>  
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                              <label>Post of the department head</label>
                            </div>
                            <div class="col-75">
                                <select name="post" required>
						            <option value="<?php echo $_SESSION['post'] ?>"><?php echo $_SESSION['post'] ?></option>
						            <?php echo $_SESSION['post'] ?>
					            </select>
                            </div>
                        </div>
                                             
                        <button type="submit" name="updateDepartment-submit" class="subbtn">Update Department</button>
                        <button type="submit" name="cancel-submit" class="cancelbtn"><a href="aHomeV.php" class="cancelbtn">Cancel</a></button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>