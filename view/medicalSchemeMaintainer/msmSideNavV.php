<main>
    <div class="sansserif">
        <ul id="tree_view">
            <li>
                <a href="../../controller/msmviewMemberListC.php">
                    <button type="submit" class="tree_list">View Medical Member List</button>
                </a>
            </li>
            <li>
                <a href="#">
                    <button type="submit" class="tree_list">Remove Member</button>
                </a>
            </li>
            <li>
                <a href="msmViewClaimDetailsV.php">
                    <button type="submit" class="tree_list">View Claim Details</button>
                </a>
            </li>
            <li><button class="tree_list">View Forms of the Medical Scheme</button>
                <ul class="tree_nest">
                    <button>
                        <a href="msmViewMembershipFormsV.php" name="membership-submit"><li><i class="fa fa-plus-circle"></i>Membership Form</li></a>
                    </button>
                    <button>
                        <a href="msmViewRequestedClaimFormV.php" name="requestedClaim-submit"><li><i class="fa fa-pencil-square-o"></i>Requested Claim Form</li></a>
                    </button>
                    <button>
                        <a href="msmViewRefferedCLaimFormsV.php" name="refferedClaim-submit"><li><i class="fa fa-minus-circle"></i>Reffered Claim Form</li></a></button>
                    </button>
                </ul>
            </li>
            <li>
                <a href="msmViewSchemeDetailsV.php">
                    <button type="submit" class="tree_list">View Medical Scheme Details</button>
                </a>
            </li>
            <li>
                <a href="../../controller/basicControllers/registerMSController.php?user_id=<?php echo $_SESSION['userId'] ?>">
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