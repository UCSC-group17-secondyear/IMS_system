<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Update or Remove a subject</title>

    <ul class="breadcrumbs">
        <li><a href="amHomeV.php">home</a></li>
        <li><a href="amDeleteUpdateSubjectSearch.php">Update or Delete Subjects</a></li>
        <li class="active">Subject Details</li>
    </ul>

    <div class="row" style="margin-bottom: 4%;" >
        <div class="col left20">
            <?php
                require 'amSideNavV.php';
            ?>
        </div>

        <div class="col right80">
            <div>
                <h2>Subject Details</h2>
            </div>
            <div class="contentForm">
                <form action="../../controller/amControllers/manageSubjectsC.php" method="post">
                    <div class="row">
                        <div class="col-25">
                            <label>Subject Code</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="subject_code"  <?php echo 'value="'.$_SESSION['subject_code'].'"' ?> />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label>Subject Name</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="subject_name"  <?php echo 'value="'.$_SESSION['subject_name'].'"' ?> />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label>Degree</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="degree"  <?php echo 'value="'.$_SESSION['degree'].'"' ?> />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label>Academic Year</label>
                        </div>
                        <div class="col-75">
                            <input type="number" name="academic_year"  <?php echo 'value="'.$_SESSION['academic_year'].'"' ?> />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label>Semester</label>
                        </div>
                        <div class="col-75">
                            <input type="number" name="semester"  <?php echo 'value="'.$_SESSION['semester'].'"' ?> />
                        </div>
                    </div>

                    <button class="subbtn" type="submit" name="updateSubject-submit">Save Updates</button>
                    <button class="cancelbtn" type="submit" name="remeoveSubject-submit">Remove Subject
                       <!--  <a href="amSubjectRemoved.php">Remove Subject</a>  -->
                    </button>
                </form>
            </div>
        </div>
    </div>

</main>

<?php
    require '../basic/footer.php';
?>