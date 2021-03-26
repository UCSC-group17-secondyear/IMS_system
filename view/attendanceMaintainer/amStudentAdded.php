<?php
    require '../basic/topnav.php';
?>

<main>
    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="amHomeV.php">Home</a></li>
            <li><a href="amEnterStudentDetailsV.php">Add Student</a></li>
            <li class="active">Action Success!</li>
        </ul>

        <div class="row" style="margin-bottom: 4%;" >
            <div class="col left20">
                <?php
                    require 'amSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div class="contentForm">
                    <form action="../../controller/amControllers/manageStudentsC.php" method="post">
                        <div class="row">
                            <h2>The student is added successfully.
                            </h2>
                        </div>

                        <button class="subbtn" name="getMandatory_submit">View student's compulsory subjects
                            <!-- <a href="amDisplayStudentsSubjectsV.php">View student's compulsory subjects</a>  -->
                        </button>
                        <button class="cancelbtn">
                            <a href="amHomeV.php">Exit</a> 
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