<main>
     <div class="sansserif">
        <ul id="tree_view">
            <li><button class="tree_list">Mark Mahapola Selected Students</button>
                <ul class="tree_nest">
                    <button>
                        <a href="mmMarkMahapolaStudentsIndexV.php"><li><i class="fa fa-pencil-square-o"></i>Search By Index Number</li></a>
                    </button>
                    <button>
                        <a href="mmMarkMahapolaStudentsNameV.php"><li><i class="fa fa-pencil-square-o"></i>Search By Student Name</li></a>
                    </button>
                </ul>
            </li>
            <li>
                <a href="mmViewMahapolaNominatedListV.php">    
                    <button type="submit" class="tree_list">View Mahapola Nominated Student List</button>
                </a>
            </li>
            <li>
                <a href="mmViewReportsMahapolaSchemeV.php">    
                    <button type="submit" class="tree_list">View Reports in Mahapola Scheme</button>
                </a>
            </li>
            <li><button class="tree_list">View Student Attendance Reports</button>
                <ul class="tree_nest">
                    <button>
                        <a href="mmStudentWiseAttendanceV.php"><li><i class="fa fa-plus-circle"></i>View Attendance Student Wise</li></a>
                    </button>
                    <button>
                        <a href="mmMonthWiseAttendanceV.php"><li><i class="fa fa-minus-circle"></i>View Attendance Month Wise</li></a></button>
                    </button>
                    <button>
                        <a href="mmSubjectWiseAttendanceV.php"><li><i class="fa fa-pencil-square-o"></i>View Attendance Subject Wise</li></a>
                    </button>
                    <button>
                        <a href="mmBatchWiseAttendanceV.php"><li><i class="fa fa-pencil-square"></i>View Attendance Batch Wise</li></a>
                    </button>
                    <button>
                        <a href="mmSemesterWiseAttendanceV.php"><li><i class="fa fa-pencil-square"></i>View Attendance Semester Wise</li></a>
                    </button>
                </ul>
            </li>
            <li>
                <a href="../../controller/mmControllers/viewSchemesController.php">
                    <button type="submit" class="tree_list">View Scheme Details</button>
                </a>
            </li>
            <li>
                <a href="../../controller/basicControllers/registerMSController1.php?user_id=<?php echo $_SESSION['userId'] ?>">
                    <button type="submit" class="tree_list">Register to the Staff Medical Scheme</button>
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