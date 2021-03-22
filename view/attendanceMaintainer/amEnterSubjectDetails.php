<?php
    require '../basic/topnav.php';
?>

<main>
    <ul class="breadcrumbs">
        <li><a href="amHomeV.php">Home</a></li>
        <li class="active">Add Subject</li>
    </ul>

    <div class="row" style="margin-bottom: 4%;" >
        <div class="col left20">
            <?php
                require 'amSideNavV.php';
            ?>
        </div>

        <div class="col right80">
            <div>
                <h2>Add Subject</h2>
            </div>
            <div class="contentForm">
                <form action="../../controller/amControllers/manageSubjectsC.php" method="post">
                    <div class="row">
                        <div class="col-25">
                            <label>Enter Subject Code</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="subject_code" placeholder="Subject Code" required/> <br>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label>Enter Subject Name</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="subject_name" placeholder="Subject Name" required/> <br>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label>Select relevant degree</label>
                        </div>
                        <div class="col-75">
                            <select name="degree" id="degree">
                                <!-- <option value="">Select degree: </option> -->
                                <?php echo $_SESSION['degreeList'] ?>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label>Enter Relevant Academic year</label>
                        </div>
                        <div class="col-75">
                            <input type="number" name="academic_year" placeholder="Academic Year" min="1" max="4"required/> <br>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label>Enter Relevant Semester</label>
                        </div>
                        <div class="col-75">
                            <input type="number" name="semester" placeholder="Semester" min="1" max="2" required/> <br>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label>Subject Category</label>
                        </div>
                        <div class="col-75">
                            <select name="mandatory_subject">
                                <option value="1">A mandatorysubject</option>
                                <option value="0">Not a mandatory subject</option>
                            </select>
                        </div>
                    </div>

                    <button class="subbtn" type="submit" name="addSubject-submit">Add Subject</button>
                    
                    <button class="cancelbtn">
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