<main>
    <div class="sansserif">
        <ul id="tree_view">
            <li><button class="tree_list">View Student Attendance Reports</button>
                <ul class="tree_nest">
                    <form action="../../controller/rvControllers/rvViewAttendanceC.php" method="post">
                        <button name="fetchStudents-submit">
                            <a href="#">
                                <li><i class="fa fa-check-circle"></i> Student Wise Attendance </li>
                            </a>
                        </button>
                    </form>

                    <form action="../../controller/rvControllers/rvViewAttendanceC.php" method="post">
                        <button name="fetchDegrees-submit">
                            <a href="#">
                                <li><i class="fa fa-check-circle"></i> Month-Wise Attendance </li>
                            </a>
                        </button>
                    </form>
                    
                    <form action="../../controller/rvControllers/rvViewAttendanceC.php" method="post">
                        <button name="fetchSubjects-submit">
                            <a href="#">
                                <li><i class="fa fa-check-circle"></i> Subject Wise Attendance </li>
                            </a>
                        </button>
                    </form>

                    <button>
                        <a href="rvSubjectWiseAttendanceV.php"><li><i class="fa fa-pencil-square-o"></i>View Attendance Subject Wise</li></a>
                    </button>

                    <button>
                        <a href="rvBatchWiseAttendanceV.php"><li><i class="fa fa-pencil-square"></i>View Attendance Batch Wise</li></a>
                    </button>
                    
                    <button>
                        <a href="rvSemesterWiseAttendanceV.php"><li><i class="fa fa-pencil-square"></i>View Attendance Semester Wise</li></a>
                    </button>
                </ul>
            </li>

            <li><button class="tree_list">View Forms of the Medical Scheme</button>
                <ul class="tree_nest">
                    <form action="../../controller/rvControllers/rvViewFormsController.php" method="post">
                        <button name="membershipform-submit" type="submit">
                            <a href="#"><li><i class="fa fa-plus-circle"></i> Membership Form</li></a>
                        </button>
                        <button name="refferedclaim-submit" type="submit">
                            <a href="#" ><li><i class="fa fa-minus-circle"></i> Reffered Claim Form</li></a></button>
                        </button>
                        <button name="requestedclaim-submit" type="submit">
                            <a href="#" ><li><i class="fa fa-pencil-square-o"></i> Requested Claim Form</li></a>
                        </button>
                    </form>
                </ul>
            </li>
            <form action="../../controller/rvControllers/mahapolaNominatedListC1.php" method="POST">
                <li>
                    <a href="">    
                        <button type="submit" class="tree_list" name="view-nom-degree-list">View Mahapola Nominated Student List</button>
                    </a>
                </li>
            </form>

            <form action="rvViewReportsMahapolaSchemeV.php" method="POST">
                <li>
                    <a href="">    
                        <button type="submit" class="tree_list" name="view-mahapola-report">View Reports in Mahapola Scheme</button>
                    </a>
                </li>
            </form>
            
            <li>
                <a href="../../controller/rvControllers/rvviewMedicalMemberListC.php">
                    <button type="submit" class="tree_list">View Member list of Medical Scheme</button>
                </a>
            </li>

            <li><button class="tree_list">View Claim Details</button>
                <ul class="tree_nest">
                    <form action="../../controller/rvControllers/viewClaimDetailsController.php" method="post">
                        <button name="memberwise-submit" type="submit">
                            <a href="#"><li><i class="fa fa-plus-circle"></i>Member wise claim details</li></a>
                        </button>
                        <button name="departmentwise-submit" type="submit">
                            <a href="#"><li><i class="fa fa-pencil-square-o"></i>Department wise claim details</li></a>
                        </button>
                        <button name="ucsc-submit" type="submit">
                            <a href="#"><li><i class="fa fa-minus-circle"></i>UCSC claim details</li></a>
                        </button>
                    </form>
                </ul>
            </li>

            <li>
                <a href="../../controller/rvControllers/rvviewSchemesController.php">
                    <button type="submit" class="tree_list">View Medical Scheme Details</button>
                </a>
            </li>

            <li>
                <a href="../../controller/basicControllers/registerMSController1.php?loguser=<?php echo $_SESSION['userId'] ?>">
                    <button type="submit" class="tree_list"> Register to the Staff Medical Scheme</button>
                </a>
            </li>
        </ul>
    </div>

    <script>
        var toggler = document.getElementsByClassName("tree_list");
        var i;

        for (i = 0; i < toggler.length; i++) {
          toggler[i].addEventListener("click", function() {
            this.parentElement.querySelector(".tree_nest").classList.toggle("active");
            this.classList.toggle("tree_list-down");
          });
        }
    </script>
</main>