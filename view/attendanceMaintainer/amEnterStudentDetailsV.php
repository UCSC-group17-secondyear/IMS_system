<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Enter Students' Details</title>

    <ul class="breadcrumbs">
        <li><a href="amHomeV.php">Home</a></li>
        <li class="active">Enter Students' Details</li>
    </ul>

    <div class="row"  style="margin-bottom: 1.5%;" >
        <div class="col left20">
            <?php
                require 'amSideNavV.php';
            ?>
        </div>

        <div class="col right80">
            <div>
                <h2>Add Student</h2>
            </div>
            <div class="contentForm">
                <form action="../../controller/amControllers/manageStudentsC.php" method="post">
                    <div class="row">
                        <div class="col-25">
                            <label>Enter Index Number</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="index_no" placeholder="Student Index No" min="0" required/>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label>Enter Registration Number</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="registration_no" placeholder="Student Registration No" required/>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label>Enter Initials of the student</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="initials" placeholder="Initials" required/>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label>Enter Last name of the student</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="last_name" placeholder="Last Name" required/>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label>Enter email of the student</label>
                        </div>
                        <div class="col-75">
                            <input type="email" name="email" placeholder="Mail Address" required/>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label>Select Academic Year</label>
                        </div>
                        <div class="col-75">
                            <select name="academic_year" id="academic_year">
                                <!-- <option>Academic Year of the student</option> -->
                                <option value="1">1st year</option>
                                <option value="2">2nd year</option>
                                <option value="3">3rd year</option>
                                <option value="4">4th year</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label>Select Semester</label>
                        </div>
                        <div class="col-75">
                            <select name="semester" id="semester">
                                <!-- <option>Academic Year of the student</option> -->
                                <option value="1">1st semester</option>
                                <option value="2">2nd semester</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label>Select degree</label>
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
                            <label>Enter batch number of the student</label>
                        </div>
                        <div class="col-75">
                            <input type="batch_number" name="batch_number" placeholder="Batch Number" required/>
                        </div>
                    </div>

                    <button class="subbtn" type="submit" name="addStudent-submit">Add Student</button>
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