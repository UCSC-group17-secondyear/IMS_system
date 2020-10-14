<main>
    <a href="asmWeeklyTimeTableV.php"><button type="submit" name="" class="button">View Weekly Time Table</button></a><br>

    <a href="asmViewHallAllocationScheduleV.php"><button type="submit" name="" class="button">View Hall Allocation Schedule</button></a><br>

    <a href="asmViewSchemeDetailsV.php"><button type="submit" name="" class="button">View Scheme Details</button></a><br>

    <a href="asmHallDetailsV.php"><button type="submit" name="" class="button">View Hall Details</button></a><br>

    <button class="button accordion">Manage Booking</button>
        <div class="panel">
            <a href="../../controller/addBookingController.php?user_id=<?php echo $_SESSION['userId'] ?>" class="buttonTwo">Add a Booking</a>
            <a href="../../controller/viewBookingController.php?user_id=<?php echo $_SESSION['userId'] ?>" class="buttonTwo">My Bookings</a>
        </div>

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