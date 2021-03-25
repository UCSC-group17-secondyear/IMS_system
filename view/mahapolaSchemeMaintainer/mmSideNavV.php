<main>
     <div class="sansserif">
        <ul id="tree_view">
            <form action="../../controller/mmControllers/markMahapolaController.php" method="POST">
                <li>
                    <a href="">    
                        <button type="submit" class="tree_list" name="view-degree-list">Mark Mahapola Selected Students</button>
                    </a>
                </li>
            </form>
            <form action="../../controller/mmControllers/mahapolaNominatedListController.php" method="POST">
                <li>
                    <a href="">    
                        <button type="submit" class="tree_list" name="view-nom-degree-list">View Mahapola Nominated Student List</button>
                    </a>
                </li>
            </form>
            <form action="../../controller/mmControllers/mahapolaListController.php" method="POST">
                <li>
                    <a href="">    
                        <button type="submit" class="tree_list" name="view-mahapola-report">View Reports in Mahapola Scheme</button>
                    </a>
                </li>
            </form>
            <li><button class="tree_list">View Student Attendance Reports</button>
                <ul class="tree_nest">
                    <form action="../../controller/mmControllers/mmViewAttendanceC.php" method="post">
                        <button name="fetchStudents-submit">
                            <a href="#">
                                <li><i class="fa fa-check-circle"></i> Student Wise Attendance </li>
                            </a>
                        </button>
                    </form>

                    <form action="../../controller/mmControllers/mmViewAttendanceC.php" method="post">
                        <button name="fetchDegrees-submit">
                            <a href="#">
                                <li><i class="fa fa-check-circle"></i> Month-Wise Attendance </li>
                            </a>
                        </button>
                    </form>

                    <!-- <button>
                        <a href="mmMonthWiseAttendanceV.php"><li><i class="fa fa-check-circle"></i>View Attendance Month Wise</li></a></button>
                    </button> -->
                    
                    <button>
                        <a href="mmSubjectWiseAttendanceV.php"><li><i class="fa fa-check-circle"></i>View Attendance Subject Wise</li></a>
                    </button>
                    <button>
                        <a href="mmBatchWiseAttendanceV.php"><li><i class="fa fa-check-circle"></i>View Attendance Batch Wise</li></a>
                    </button>
                    <button>
                        <a href="mmSemesterWiseAttendanceV.php"><li><i class="fa fa-check-circle"></i>View Attendance Semester Wise</li></a>
                    </button>
                </ul>
            </li>
            <li>
                <a href="../../controller/mmControllers/viewSchemesController.php">
                    <button type="submit" class="tree_list">View Scheme Details</button>
                </a>
            </li>
            <li>
                <a href="../../controller/basicControllers/registerMSController1.php?loguser=<?php echo $_SESSION['userId'] ?>">
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