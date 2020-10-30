<main>
    <div class="sansserif">
        <ul id="tree_view">
            <li>
                <a href="moClaimReqestingFormsV.php">
                    <button type="submit" name="" class="button">View Claim Requesting Forms</button>
                </a><br>
            </li>
            <li><button class="tree_list">View Reffered Claim Forms</button>
                <ul class="tree_nest">
                    <button>
                        <a href="moApprovedClaimFormsV.php" class="buttonTwo"><i class="fa fa-plus-circle"></i>Approved claim forms</a>
                    </button>
                    <button>
                        <a href="moRejectedClaimFormsV.php" class="buttonTwo"><i class="fa fa-minus-circle"></i>Rejected claim forms</a>
                    <button>
                </ul>
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