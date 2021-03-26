<?php
    require '../basic/topnav.php';
?>

<main> <ul class="breadcrumbs">
        <li><a href="amHomeV.php">Home</a></li>
        <li class="active">Update or Delete Subjects</li>
    </ul>

    <div class="row" style="margin-bottom: 4%;" >
        <div class="col left20">
            <?php
                require 'amSideNavV.php';
            ?>
        </div>

        <div class="col right80">
            <div>
                <h2>Update or Delete Subjects</h2>
            </div>
            <div class="contentForm">
                <form action="../../controller/amControllers/manageSubjectsC.php" method="post">
                    <div class="row">
                        <div class="col-25">
                            <label>Select subject</label>
                        </div>
                        <div class="col-75">
                            <select name="subject_name" id="subject_name">
                                <?php echo $_SESSION['subjectList'] ?>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label>Select degree</label>
                        </div>
                        <div class="col-75">
                            <select name="degree_name">
                                <?php echo $_SESSION['degreeList'] ?>
                            </select>
                        </div>
                    </div>

                    <button class="subbtn" type="submit" name="deleteupdateSubject-submit">Select</button>
                    <button class="cancelbtn" type="submit" name="cancel-submit">
                        <a href="amHomeV.php">Cancel</a> 
                    </button>
                </form>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>