<main>
    <div class="sansserif">
        <ul id="tree_view">
            <li><button class="tree_list">Manage Students' Details</button>
                <ul class="tree_nest">
                    <form action="../../controller/amControllers/manageStudentsC.php" method="post">
                        <button name="viewStudents-submit">
                            <a href="#">
                                <li><i class="fa fa-user"></i> View Students List</li>
                            </a>
                        </button>
                    </form>

                    <form action="../../controller/amControllers/manageStudentsC.php" method="post">
                        <button name="enterStudents-submit">
                            <a href="#">
                                <li><i class="fa fa-user"></i> Add Students</li>
                            </a>
                        </button>
                    </form>

                    <form action="../../controller/amControllers/manageStudentsC.php" method="post">
                        <button name="fetchStudents-submit">
                            <a href="#">
                                <li><i class="fa fa-user"></i> Update or Remove Students</li>
                            </a>
                        </button>
                    </form>
                </ul>
            </li>

            <li><button class="tree_list">Manage Subjects' Details</button>
                <ul class="tree_nest">
                    <form action="../../controller/amControllers/manageSubjectsC.php" method="post">
                        <button name="viewSubjects-submit">
                            <a href="#">
                                <li><i class="fa fa-book"></i> View Subjects List</li>
                            </a>
                        </button>
                    </form>

                    <form action="../../controller/amControllers/manageSubjectsC.php" method="post">
                        <button name="fetchDegress-submit">
                            <a href="#">
                                <li><i class="fa fa-user"></i> Add Subjects</li>
                            </a>
                        </button>
                    </form>

                    <form action="../../controller/amControllers/manageSubjectsC.php" method="post">
                        <button name="fetchSubjects-submit">
                            <a href="#">
                                <li><i class="fa fa-user"></i> Update or Remove Subjects</li>
                            </a>
                        </button>
                    </form>
                </ul>
            </li>

            <li><button class="tree_list">Manage Attendance</button>
                <ul class="tree_nest">
                    <form action="../../controller/amControllers/manageAttendanceC.php" method="post">
                        <button name="enterupdateAttendance-submit">
                            <a href="#">
                                <li><i class="fa fa-plus-circle"></i> Enter or Update Attendance</li>
                            </a>
                        </button>
                        <button name="deleteAttendance-submit">
                            <a href="#">
                                <li><i class="fa fa-minus-circle"></i> Delete Attendance</li>
                            </a>
                        </button>
                    </form>
                </ul>
            </li>

            <li><button class="tree_list">View Attendance</button>
                <ul class="tree_nest">
                    <form action="../../controller/amControllers/amViewAttendanceC.php" method="post">
                        <button name="fetchStudents-submit">
                            <a href="#">
                                <li><i class="fa fa-check-circle"></i> Student Wise Attendance </li>
                            </a>
                        </button>
                    </form>

                    <form action="../../controller/amControllers/amViewAttendanceC.php" method="post">
                        <button name="fetchDegrees-submit">
                            <a href="#">
                                <li><i class="fa fa-check-circle"></i> Month-Wise Attendance </li>
                            </a>
                        </button>
                    </form>

                    <form action="../../controller/amControllers/amViewAttendanceC.php" method="post">
                        <button name="fetchSubjects-submit">
                            <a href="#">
                                <li><i class="fa fa-check-circle"></i> Subject Wise Attendance </li>
                            </a>
                        </button>
                    </form>

                   <!--  <button>
                        <a href="amSubjectWiseAttendanceV.php">
                            <li><i class="fa fa-check-circle"></i> Subject Wise Attendance</li>
                        </a>
                    </button> -->
                    <button>
                        <a href="amBatchWiseAttendanceV.php">
                            <li><i class="fa fa-check-circle"></i> Batch Wise Attendance</li>
                        </a>
                    </button>
                    <button>
                        <a href="amSemesterWiseAttendanceV.php">
                            <li><i class="fa fa-check-circle"></i> Semester Wise Attendance</li>
                        </a>
                    </button>
                </ul>
            </li>
            <li>
                <a href="../../controller/amControllers/amViewSchemeDetails.php">
                    <button name="" class="tree_list"> View Scheme Details
                    </button>
                </a>
            </li>
            <li>
                <a href="../../controller/basicControllers/registerMSController1.php?user_id=<?php echo $_SESSION['userId'] ?>">
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