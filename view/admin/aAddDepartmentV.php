<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Add a department</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li>Add a new Department</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'aSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Add a new Department</h2>
                </div>

                <div class="contentForm">
                    <form action="../../controller/aAddDepartmentController.php" method="POST">
                        <div class="row">
                            <div class="col-25">
                              <label>Department Name</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="dept_name" placeholder="Enter department name" required/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                              <label>Department Head</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="dept_head" placeholder="Enter department head name" required/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                              <label>Description</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="description" placeholder="Enter description" required/>
                            </div>
                        </div>
                        <button class="mainbtn" type="submit" name="addDepartment-submit">Add Department</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>