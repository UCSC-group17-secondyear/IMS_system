<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Updated a department</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li>Update Department</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'aSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Update a Department</h2>
                </div>

                <div class="contentForm">
                    <form action="../../controller/aUpdateDepartmentController.php" method="POST">
                        
                        <div class="row">
                            <div class="col-25">
                                <label>Enter department</label>
                            </div>
                            <div class="col-75">
                                <select name="department"required>
                                <option value="">Select department: </option>
                                <?php echo $_SESSION['deps'] ?>
                                </select>
                            </div>
                        </div>
                    
                        <button class="mainbtn" type="submit" name="updateDepartment">Update Department</button>
                    </form>
                    <form>
                        <button type="submit" class="subbtn">
                            <a href="../../controller/aViewDepartmentController.php">View current departments</a>
                        </button>
                        <button type="submit" class="cancelbtn">
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