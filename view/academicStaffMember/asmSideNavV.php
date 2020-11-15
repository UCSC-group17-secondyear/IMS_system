<main>
    <div class="sansserif">
        <ul id="tree_view">
            <li>
                <a href="asmWeeklyTimeTableV.php">
                    <button type="submit" name="" class="tree_list">View Weekly Time Table</button>
                </a><br>
            </li>
            <li>
                <a href="asmViewHallAllocationScheduleV.php">
                    <button type="submit" name="" class="tree_list">View Hall Allocation Schedule</button>
                </a>    
            </li>
            <li>
                <a href="../../controller/asmViewHallController.php">
                    <button type="submit" name="" class="tree_list">View Hall Details</button>
                </a>    
            </li>
            <li><button class="tree_list">Manage Booking</button>
                <ul class="tree_nest">
                    <button>
                        <a href="../../controller/addBookingController.php?user_id=<?php echo $_SESSION['userId'] ?>" class="buttonTwo">
                            <li><i class="fa fa-plus-circle"></i>Add a Booking</li>
                        </a>
                    </button>
                    <button>
                        <a href="../../controller/viewBookingController.php?user_id=<?php echo $_SESSION['userId'] ?>" class="buttonTwo">
                            <li><i class="fa fa-user"></i>My Bookings</li>
                        </a>
                    </button>
                </ul>
            </li>
            <li>
                <a href="asmViewSchemeDetailsV.php">
                    <button type="submit" name="" class="tree_list">View Scheme Details</button>
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