<main>
     <div class="sansserif">
        <ul id="tree_view">
            <li>
                <a href="memRenewMembershipV.php">
                    <button type="submit" class="tree_list">Renew Membership</button>
                </a>
            </li>

            <li>
                <a href="memViewSchemeDetailsV.php">
                    <button type="submit" class="tree_list">View Medical Scheme Details</button>
                </a>
            </li>

            <li><button class="tree_list">Fill Claim Forms</button>
                <ul class="tree_nest">
                    <button>
                        <a href="../../controller/opdFormControllerOne.php?user_id=<?php echo $_SESSION['userId'] ?>"><li><i class="fa fa-pencil-square-o"></i>OPD Form</li></a>
                    </button>
                    <button>
                        <a href="../../controller/surgicalFormControllerOne.php?user_id=<?php echo $_SESSION['userId'] ?>"><li><i class="fa fa-pencil-square-o"></i>Surgical Hospitalization Form</li></a>
                    </button>
                </ul>
            </li>

            <li>
                <a href="../../controller/updateClaimFormControllerOne.php?user_id=<?php echo $_SESSION['userId'] ?>">
                    <button type="submit" class="tree_list">Update / Delete Claim Form</button>
                </a>
            </li>

            <li><button class="tree_list">View Claim Forms</button>
                <ul class="tree_nest">
                    <button>
                        <a href="memSearchByReferenceFormV.php?user_id=<?php echo $_SESSION['userId'] ?>"><li><i class="fa fa-plus-circle"></i>Search By Ref. Number</li></a>
                    </button>
                    <button>
                        <a href="../../controller/claimFormListControllerOne.php?user_id=<?php echo $_SESSION['userId'] ?>"><li><i class="fa fa-plus-circle"></i>Display Form List</li></a>
                    </button>
                </ul>
            </li>
            <li>
                <a href="memGetClaimDetailsV.php?user_id=<?php echo $_SESSION['userId'] ?>">
                    <button type="submit" class="tree_list">Get Claim Details</button>
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