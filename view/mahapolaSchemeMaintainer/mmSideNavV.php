<main>
    <!-- <a href="mmMarkMahapolaSelectedStudentsV.php" ><button type="submit" name="" class="button">Mark Mahapola Selected Students</button></a><br> -->
    <button class="button accordion">Mark Mahapola Selected Students</button>
        <div class="panel">
            <a href="mmMarkMahapolaStudentsIndexV.php" class="buttonTwo">Search By Index Number</a> <br>
            <a href="mmMarkMahapolaStudentsNameV.php" class="buttonTwo">Search By Student Name</a> 
        </div>

    <a href="mmViewMahapolaNominatedListV.php" ><button type="submit" name="" class="button">View Mahapola Nominated Student List</button></a><br>

    <a href="mmViewReportsMahapolaSchemeV.php" ><button type="submit" name="" class="button">View Reports in Mahapola Scheme</button></a><br>

    <a href="#" ><button type="submit" name="" class="button">View Attendance Student Records</button></a><br>
    <!-- attendance maintainerge ui flow eke aran demu -->
    <a href="mmViewSchemeDetailsV.php" ><button type="submit" name="" class="button">View Scheme Details</button></a><br>
    
    <a href="../../controller/registerMSController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Register to the Staff Medical Scheme</button></a>

    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
                if (panel.style.display === "block") {
                    panel.style.display = "none";
                } else {
                    panel.style.display = "block";
                }
            });
        }
    </script>  
</main>