<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Enter Students' Details</title>

    <ul class="breadcrumbs">
        <li><a href="amHomeV.php">Home</a></li>
        <li class="active">Enter Students' Details</li>
    </ul>

    <div class="row">
        <div class="col left20">
            <?php
                require 'amSideNavV.php';
            ?>
        </div>

        <div class="col right80">
            <div>
                <h2>Students' Details</h2>
            </div>
            <div class="contentForm">
                <form action="../../controller/amControllers/addStudentC.php" method="post">
                    <div class="row">
                        <div class="col-25">
                          <label>Enter Student Index No</label>
                        </div>
                        <div class="col-75">
                          <input type="text" name="index_no" placeholder="Student Index No" required/><br>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                          <label>Enter Student Registration Number</label>
                        </div>
                        <div class="col-75">
                          <input type="text" name="registrstion_no" placeholder="Student Registration No" required/><br>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label>Enter Student's Initials</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="initials" placeholder="Initials" required/> <br>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label>Enter Student's Last name</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="last_name" placeholder="Last Name" required/> <br>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label>Enter email</label>
                        </div>
                        <div class="col-75">
                            <input type="email" name="email" placeholder="Mail Address" required/> <br>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label>Select Academic Year</label>
                        </div>
                        <div class="col-75">
                            <select name="academic_year" id="academic_year">
                                <option value="2019">2019</option>
                                <option value="2018">2018</option>
                                <option value="2017">2017</option>
                                <option value="2016">2016</option>
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
                    <button class="subbtn" type="submit" name="addStudent-submit">Enter Student</button>
                    <button class="cancelbtn" type="submit" name="cancel-submit">
                        <a href="amHomeV.php">Cancel</a>
                    </button>
                </form>
            </div>
        </div>
    </div>
</main>

<!-- <?php
    // require '../basic/footer.php';
?> -->