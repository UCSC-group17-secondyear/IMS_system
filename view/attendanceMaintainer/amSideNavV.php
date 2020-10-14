<main>
    <button class="button accordion">Manage Students' Details</button>
        <div class="panel">
            <a href="amEnterStudentDetailsV.php"><button type="submit" name="" class="buttonTwo">Enter Details</button></a><br>
            <a href="amDeleteUpdateStudentV.php"><button type="submit" name="" class="buttonTwo">Delete/Update Details </button></a><br>
        </div>

    <button class="button accordion">Manage Subjects' Details</button>
        <div class="panel">
            <a href="amEnterSubjectDetails.php"><button type="submit" name="" class="buttonTwo">Enter Details</button></a><br>
            <a href="amDeleteUpdateSubjectV.php"><button type="submit" name="" class="buttonTwo">Delete/Update Details </button></a><br>
        </div>
        
    <button class="button accordion">Manage Attendance</button>
        <div class="panel">
            <a href="amEnterUpdateAttendaceSelectV.php"><button type="submit" name="" class="buttonTwo">Enter/Update </button></a><br>
            <a href="amDeleteAttendaceSearchV.php"><button type="submit" name="" class="buttonTwo">Delete </button></a><br>
        </div>

    <button class="button accordion">View Attendance</button>
        <div class="panel">
            <a href="amStudentWiseAttendanceV.php"><button type="submit" name="" class="buttonTwo"> Student Wise </button></a><br>
            <a href="amMonthWiseAttendanceV.php"><button type="submit" name="" class="buttonTwo"> Month Wise </button></a><br>
            <a href="amSubjectWiseAttendanceV.php"><button type="submit" name="" class="buttonTwo"> Subject Wise </button></a><br>
            <a href="amBatchWiseAttendanceV.php"><button type="submit" name="" class="buttonTwo"> Batch Wise </button></a><br>
            <a href="amSemesterWiseAttendanceV.php"><button type="submit" name="" class="buttonTwo"> Semester Wise </button></a><br>
        </div>

    <a href="amMedicalSchemDetailsV.php"><button type="submit" name="" class="button">View Scheme Details</button></a><br>

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