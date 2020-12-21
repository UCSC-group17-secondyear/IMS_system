<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Search Student</title>

    <ul class="breadcrumbs">
        <li><a href="amHomeV.php">Home</a></li>
        <li><a href="amDeleteUpdateStudentSearchV.php">Update or Delete Students</a></li>
        <li class="active">Student Details</li>
    </ul>

    <div class="row" style="margin-bottom: 1%;" >
        <div class="col left20">
            <?php
                require 'amSideNavV.php';
            ?>
        </div>

        <div class="col right80">
            <div>
                <h2>Student Details</h2>
            </div>
            <div class="contentForm"  style="margin-bottom: 1%;" >
                <form action="../../controller/amControllers/manageStudentsC.php" method="post">
                    <div class="row">
                        <div class="col-25">
                          <label>Enter Student Index No</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="index_no"  <?php echo 'value="'.$_SESSION['index_no'].'"' ?> />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label>Enter Student Registration Number</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="registrstion_no"  <?php echo 'value="'.$_SESSION['registrstion_no'].'"' ?> />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label>Enter Student's Initials</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="initials"  <?php echo 'value="'.$_SESSION['initials'].'"' ?> />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label>Enter Student's Last name</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="last_name"  <?php echo 'value="'.$_SESSION['last_name'].'"' ?> />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label>Enter email</label>
                        </div>
                        <div class="col-75">
                            <input type="email" name="email"  <?php echo 'value="'.$_SESSION['email'].'"' ?> />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label>Select Academic Year</label>
                        </div>
                        <div class="col-75">
                            <select name="academic_year" id="academic_year">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select> <br>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label>Select degree</label>
                        </div>
                        <div class="col-75">
                            <select name="degree" id="degree">
                                <option value="CS">Computer Science</option>
                                <option value="IS">Information System</option>
                                <option value="SE">Software Engineering</option>
                            </select> <br>
                        </div>
                    </div>

                    <button class="subbtn" type="submit" name="updateStudent-submit">Update Student</button>

                    <button class="cancelbtn" type="submit" name="removeStudent-submit">Remove Student</button>
                </form>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>