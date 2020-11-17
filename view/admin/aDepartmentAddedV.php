<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Add a Department</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li><a href="aAddDepartmentV.php">Add Department</a></li>
            <li class="active">Action was success!</li>
        </ul>
    
        <div class="row">
            <div class="col left20">
                <?php
                    require 'aSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2></h2>
                </div>
                <div class="contentForm">
                    <div class="row">
                        <h2>The Department is added successfully!</h2>
                    </div>

                    <button class="subbtn" type="submit">
                        <a href="aAddDepartmentV.php">Add Department</a>
                    </button>
                    <button class="cancelbtn" type="submit">
                        <a href="aHomeV.php">Leave</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
    
</main>

<?php
    require '../basic/footer.php';
?>