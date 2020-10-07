<main>
    <div class="side-nav">
                <a href="hamWeeklyTimeTableV.php"><button type="submit" name="" class="button">View Weekly Time Table</button></a><br>
                <a href="hamViewHallAllocationScheduleV.php"><button type="submit" name="" class="button">View Hall Allocation Schedule</button></a><br>
                <a href="hamViewSchemeDetailsV.php"><button type="submit" name="" class="button">View Scheme Details</button></a><br>
                <a href="hamHallDetailsV.php"><button type="submit" name="" class="button">View Hall Details</button></a><br>
                <button class="button accordion">Manage Weekly Time Table</button>
                <div class="panel">
                    <a href="hamEnterTimeTableV.php" class="buttonTwo">Enter Time Table</a> <br>
                    <a href="hamUpdateTimeTableV.php" class="buttonTwo">Update/Remove Time Table</a> 
                </div>
                <button class="button accordion">Manage Booking</button>
                <div class="panel">
                    <a href="hamAddBookingV.php" class="buttonTwo">Add a Booking</a> <br>
                    <a href="hamUpdateBookingV.php" class="buttonTwo">Update/ Remove Booking</a> 
                </div>
                <a href="hamRegisterToMedicalSchemeV.php"><button type="submit" name="" class="button">Register to the Staff Medical Scheme</button></a><br>
    
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
    
    </div>
</main>