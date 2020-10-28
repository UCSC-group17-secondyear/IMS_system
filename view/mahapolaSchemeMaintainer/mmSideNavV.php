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
                <button type="submit" class="tree_list"><a href="mmViewMahapolaNominatedListV.php">View Mahapola Nominated Student List</a></button> <br>
            </li>

            <li>
                <button type="submit" class="tree_list"><a href="mmViewReportsMahapolaSchemeV.php">View Reports in Mahapola Scheme</a></button> <br>
            </li>

            <li>
                <button type="submit" class="tree_list"><a href="#">View Attendance Student Records</a></button> <br>
            </li>

            <li>
                <button type="submit" class="tree_list"><a href="mmViewSchemeDetailsV.php">View Scheme Detailss</a></button> <br>
            </li>

            <li>
                <button type="submit" class="tree_list"><a href="../../controller/memregisterMSController.php?user_id=<?php echo $_SESSION['userId'] ?>">Register to the Staff Medical Scheme</a></button> <br>
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