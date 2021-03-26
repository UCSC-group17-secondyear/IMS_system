<main>
     <div class="sansserif">
        <ul id="tree_view">
            <form action="../../controller/memControllers/currentMemberDetailsController1.php?user_id=<?php echo $_SESSION['userId'] ?>" method="POST">
                <li>
                    <a >
                        <button name="check-renew" type="submit" class="tree_list">Renew Membership</button>
                    </a><br>
                </li>
            </form>

            <li>
                <a href="../../controller/memControllers/viewSchemesController.php">
                    <button type="submit" class="tree_list">View Medical Scheme Details</button>
                </a><br>
            </li>

            <li><button class="tree_list">Fill Claim Forms</button>
                <ul class="tree_nest">
                    <form action="../../controller/memControllers/fillFormController.php?user_id=<?php echo $_SESSION['userId'] ?>" method="POST">
                        <button name="fill-opd" type="submit">
                            <a href="#"><li><i class="fa fa-pencil-square-o"></i>OPD Form</li></a>
                        </button>
                        <button name="fill-sur" type="submit">
                            <a href="#"><li><i class="fa fa-pencil-square-o"></i>Surgical Hospitalization Form</li></a>
                        </button>
                    </form>
                </ul>
            </li>

            <form action="../../controller/memControllers/updateClaimFormControllerOne.php?user_id=<?php echo $_SESSION['userId'] ?>" method="POST">
                <li>
                    <a href="">
                        <button type="submit" class="tree_list" name="to-update-form-submit">Update / Delete Claim Form</button>
                    </a><br>
                </li>
            </form>

            <li>
                <a href="../../controller/memControllers/claimFormListControllerOne.php?user_id=<?php echo $_SESSION['userId'] ?>">
                    <button type="submit" class="tree_list">View Requested Claim Forms</button>
                </a><br>
            </li>

            <li>
                <a href="../../controller/memControllers/refferedClaimFormListController.php?user_id=<?php echo $_SESSION['userId'] ?>">
                    <button type="submit" class="tree_list">View Reffered Claim Forms</button>
                </a><br>
            </li>

            <form action="../../controller/memControllers/getMemClaimDetailsController.php?user_id=<?php echo $_SESSION['userId'] ?>" method="POST">
            <li>
                <a href="">
                    <button name="get-years-submit" type="submit" class="tree_list">Get Claim Details</button>
                </a><br>
            </li>
            </form>

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