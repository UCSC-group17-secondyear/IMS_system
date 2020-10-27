<main>
     <div class="sansserif">
        <ul id="tree_view">
            <li>
                <button type="submit" class="tree_list"><a href="memRenewMembershipV.php">Renew Membership</a></button> <br>
            </li>

            <li>
                <button type="submit" class="tree_list"><a href="memViewSchemeDetailsV.php">View Medical Scheme Details</a></button> <br>
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
                <button type="submit" class="tree_list"><a href="../../controller/updateClaimFormControllerOne.php?user_id=<?php echo $_SESSION['userId'] ?>">Update / Delete Claim Form</a></button> <br>
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
                <button type="submit" class="tree_list"><a href="memGetClaimDetailsV.php?user_id=<?php echo $_SESSION['userId'] ?>">Get Claim Details</a></button> <br>
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