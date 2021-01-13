<main>
    <div class="sansserif">
        <ul id="tree_view">
            <li>
                <a href="../../controller/moControllers/reqClaimFormListControllerOne.php">
                    <button type="submit" class="tree_list">View Claim Requesting Forms</button>
                </a>
            </li>
            <li><button class="tree_list">View Reffered Claim Forms</button>
                <ul class="tree_nest">
                    <button name="approve_list">
                        <a href="../../controller/moControllers/refferedClaimFormListController.php" class="buttonTwo"><li><i class="fa fa-plus-circle"></i>Approved claim forms</li></a>
                    </button>
                    <button name="reject_list">
                        <a href="../../controller/moControllers/refferedClaimFormListController.php" class="buttonTwo"><li><i class="fa fa-minus-circle"></i>Rejected claim forms</li></a>
                    <button>
                </ul>
            </li>
            <li>
                <a href="../../controller/moControllers/viewSchemesController.php">
                    <button type="submit" class="tree_list">View Scheme Details</button>
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