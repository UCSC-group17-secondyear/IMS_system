<main>
    <div class="sansserif">
        <ul id="tree_view">
            <li>
                <button type="submit" class="tree_list">
                    <a href="../../controller/msmviewMemberListC.php">View Medical Member List</a>
                </button> <br>
            </li>
            <li>
                <button type="submit" class="tree_list">
                    <a href="msmRemoveMemberV.php">Remove Member</a>
                </button> <br>
            </li>
            <li>
                <button type="submit" class="tree_list">
                    <a href="msmViewClaimDetailsV.php">View Claim Details</a>
                </button> <br>
            </li>
            <li><button class="tree_list">View Forms of the Medical Scheme</button>
                <ul class="tree_nest">
                    <button>
                        <a href="#" name="membership-submit"><li><i class="fa fa-plus-circle"></i>Membership Form</li></a>
                    </button>
                    <button>
                        <a href="#" name="refferedClaim-submit"><li><i class="fa fa-minus-circle"></i>Reffered Claim Form</li></a></button>
                    </button>
                    <button>
                        <a href="#" name="requestedClaim-submit"><li><i class="fa fa-pencil-square-o"></i>Requested Claim Form</li></a>
                    </button>
                </ul>
            </li>
            <li>
                <button type="submit" class="tree_list">
                    <a href="msmViewSchemeDetailsV.php">View Medical Scheme Details</a>
                </button> <br>
            </li>
            <li>
                <button type="submit" class="tree_list">
                    <a href="../../controller/memregisterMSController.php?user_id=<?php echo $_SESSION['userId'] ?>">Register to the Staff Medical Scheme</a>
                </button> <br>
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