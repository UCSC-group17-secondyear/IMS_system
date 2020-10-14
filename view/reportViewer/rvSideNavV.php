<main>
    <button class="button accordion">View Student Attendance Reports</button>
    <div class="panel">
        <a href="rvStudentWiseAttendanceV.php" class="buttonTwo">View Attendance Student Wise</a>
        <a href="rvMonthWiseAttendanceV.php" class="buttonTwo">View Attendance Montth Wise</a>
        <a href="rvSubjectWiseAttendanceV.php" class="buttonTwo">View Attendance Subject Wise</a>
        <a href="rvBatchWiseAttendanceV.php" class="buttonTwo">View Attendance Batch Wise</a>
        <a href="rvSemesterWiseAttendanceV.php" class="buttonTwo">View Attendance Semester Wise</a>
    </div>

    <a href=""><button type="submit" name="" class="button">View Mahapola Nominated Student List</button></a><br>

    <a href=""><button type="submit" name="" class="button">View Reports in Mahapola Scheme</button></a><br>

    <a href=""><button type="submit" name="" class="button">View Member list of Medical Scheme</button></a><br>

    <a href=""><button type="submit" name="" class="button">View Forms of the Medical Scheme</button></a><br>

    <a href=""><button type="submit" name="" class="button">View Claim Details</button></a><br>

    <a href="../../controller/memControllers/registerMSController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Register to the Staff Medical Scheme</button></a>

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