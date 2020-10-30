<main>
    <div class="sansserif">
        <ul id="tree_view">
            <li><button class="tree_list">Manage Students' Details</button>
                <ul class="tree_nest">
                    <button>
                        <a href="amEnterStudentDetailsV.php">
                            <li><i class="fa fa-plus-circle"></i>Enter Students' Details</li>
                        </a>
                    </button>
                    <button>
                        <a href="amDeleteUpdateStudentV.php">
                            <li><i class="fa fa-pencil-square-o"></i>Delete/Update Students' Details</li>
                        </a>
                    </button>
                </ul>
            </li>
            <li><button class="tree_list">Manage Subjects' Details</button>
                <ul class="tree_nest">
                    <button>
                        <a href="amEnterSubjectDetails.php">
                            <li><i class="fa fa-plus-circle"></i>Enter Subjects' Details</li>
                        </a>
                    </button>
                    <button>
                        <a href="amDeleteUpdateSubjectV.php">
                            <li><i class="fa fa-pencil-square-o"></i>Delete/Update Subjects' Details</li>
                        </a>
                    </button>
                </ul>
            </li>
            <li><button class="tree_list">Manage Attendance</button>
                <ul class="tree_nest">
                    <button>
                        <a href="amEnterUpdateAttendaceSelectV.php">
                            <li><i class="fa fa-plus-circle"></i>Enter/Update Attendance</li>
                        </a>
                    </button>
                    <button>
                        <a href="amDeleteAttendaceSearchV.php">
                            <li><i class="fa fa-minus-circle"></i>Delete Attendance</li>
                        </a>
                    </button>
                </ul>
            </li>
            <li><button class="tree_list">View Attendance</button>
                <ul class="tree_nest">
                    <button>
                        <a href="amStudentWiseAttendanceV.php">
                            <li><i class="fa fa-check-circle"></i>Student Wise Attendance</li>
                        </a>
                    </button>
                    <button>
                        <a href="amMonthWiseAttendanceV.php">
                            <li><i class="fa fa-check-circle"></i>Month Wise Attendance</li>
                        </a>
                    <button>
                        <a href="amSubjectWiseAttendanceV.php">
                            <li><i class="fa fa-check-circle"></i>Subject Wise Attendance</li>
                        </a>
                    </button>
                    <button>
                        <a href="amBatchWiseAttendanceV.php">
                            <li><i class="fa fa-check-circle"></i>Batch Wise Attendance</li>
                        </a>
                    </button>
                    <button>
                        <a href="amSemesterWiseAttendanceV.php">
                            <li><i class="fa fa-check-circle"></i>Semester Wise Attendance</li>
                        </a>
                    </button>
                </ul>
            </li>
            <li>
                <a href="amMedicalSchemDetailsV.php">
                    <button type="submit" name="" class="tree_list"> View Scheme Details
                    </button>
                </a>
            </li>
            <li>
                <button type="submit" class="tree_list">
                    <a href="../../controller/memregisterMSController.php?user_id=<?php echo $_SESSION['userId'] ?>">Register to the Staff Medical Scheme</a>
                </button> <br>
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