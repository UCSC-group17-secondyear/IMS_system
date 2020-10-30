<main>
    <div class="sansserif">
        <ul id="tree_view">
            <li>
                <button type="submit" class="tree_list">
                    <a href="hamWeeklyTimeTableV.php">View Weekly Time Table</a>
                </button> <br>
            </li>
            <li>
                <button type="submit" class="tree_list">
                    <a href="hamViewHallAllocationScheduleV.php">View Hall Allocation Schedule</a>
                </button> <br>
            </li>
            <li>
                <button type="submit" class="tree_list">
                    <a href="hamViewSchemeDetailsV.php">View Scheme Details</a>
                </button> <br>
            </li>
            <li>
                <button type="submit" class="tree_list">
                    <a href="hamViewSchemeDetailsV.php">View Scheme Details</a>
                </button> <br>
            </li>
            <li>
                <button type="submit" class="tree_list">
                    <a href="hamHallDetailsV.php">View Hall Details</a>
                </button> <br>
            </li>
            <li><button class="tree_list">Manage Weekly Time Table</button>
                <ul class="tree_nest">
                    <button>
                        <a href="hamEnterTimeTableV.php"><li><i class="fa fa-plus-circle"></i>Enter Time Table</li></a>
                    </button>

                    <button>
                        <a href="hamUpdateTimeTableV.php"><li><i class="fa fa-plus-circle"></i>Update/Remove TimeTable</li></a>
                    </button>
                </ul>
            </li>
            <li><button class="tree_list">Manage Booking</button>
                <ul class="tree_nest">
                    <button>
                        <a href="../../controller/addBookingController.php?user_id=<?php echo $_SESSION['userId'] ?>" class="buttonTwo"><li><i class="fa fa-plus-circle"></i>Add a Booking</li></a>
                    </button>
                    <button>
                        <a href="../../controller/viewBookingController.php?user_id=<?php echo $_SESSION['userId'] ?>" class="buttonTwo">My Bookings</a>
                    </button>
                </ul>
            </li>
            <li>
                <button type="submit" class="tree_list">
                    <a href="../../controller/memregisterMSController.php?user_id=<?php echo $_SESSION['userId'] ?>">Register to the Staff Medical Scheme</a>
                </button> <br>
            </li>
        </div>
    </ul>

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