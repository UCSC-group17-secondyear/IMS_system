<main>
    <div class="sansserif">
        <ul id="tree_view">
            <li>
                <a href="../../controller/hamControllers/hamViewTimeTableController.php">
                    <button type="submit" class="tree_list">View Weekly Time Table</button>
                </a> <br>
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

            <li>
                <a href="hamViewHallAllocationScheduleV.php">
                    <button type="submit" class="tree_list">View Hall Allocation Schedule</button>
                </a><br>
            </li>

            <li>
                <a href="../../controller/asmControllers/asmViewHallController.php?user_id=<?php echo $_SESSION['userId'] ?>">
                    <button type="submit" class="tree_list">View Hall Details</button>
                </a> <br>
            </li>
            
            <li>
                <a href="../../controller/asmControllers/addBookingController.php?user_id=<?php echo $_SESSION['userId'] ?>">
                    <button type="submit" class="tree_list">Add a Booking</button>
                </a>
            </li>

            <li>
                <a href="../../controller/hamControllers/hamViewSchemeDetails.php">
                    <button type="submit" class="tree_list">View Scheme Details</button>
                </a><br>
            </li>

            <li>
                <a href="../../controller/basicControllers/registerMSController1.php?user_id=<?php echo $_SESSION['userId'] ?>">
                    <button type="submit" class="tree_list">Register to the Staff Medical Scheme</button>
                </a><br>
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