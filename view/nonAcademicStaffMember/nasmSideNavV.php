<main>
    <div class="sansserif">
        <ul id="tree_view">
            <li>
                <a href="asmViewSchemeDetailsV.php">
                    <button type="submit" name="" class="tree_list">View Scheme Details</button>
                </a>    
            </li>
            <li>
                <a href="../../controller/memregisterMSController.php?user_id=<?php echo $_SESSION['userId'] ?>">
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