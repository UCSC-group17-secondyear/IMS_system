<main>
     <div class="sansserif">
        <ul id="tree_view">
            <li><button class="tree_list">Mark Mahapola Selected Students</button>
                <ul class="tree_nest">
                    <button>
                        <a href="mmMarkMahapolaStudentsIndexV.php?user_id=<?php echo $_SESSION['userId'] ?>"><li><i class="fa fa-pencil-square-o"></i>Search By Index Number</li></a>
                    </button>
                    <button>
                        <a href="mmMarkMahapolaStudentsNameV.php?user_id=<?php echo $_SESSION['userId'] ?>"><li><i class="fa fa-pencil-square-o"></i>Search By Student Name</li></a>
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
            <li>
                <a href="#">
                    <button type="submit" class="tree_list">View Attendance Student Records</button>
                </a>
            </li>
            <li>
                <a href="mmViewSchemeDetailsV.php">
                    <button type="submit" class="tree_list">View Scheme Detailss</button>
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