<main>
    <div class="sansserif">
        <ul id="tree_view">
            <li><button class="tree_list">Manage Medical Year</button>
                <ul class="tree_nest">
                    <button>
                        <a href="msmaddMYV.php"><li><i class="fa fa-plus-circle"></i> Add a Medical Year</li></a>
                    </button>
                    <form action="../../controller/msmControllers/msmManageMedicalYearC.php" method="post">
                        <button name="viweMYList-submit" type="submit">
                            <a href="#"><li><i class="fa fa-pencil-square-o"></i> Update a Medical Year</li></a>
                        </button>
                        <button name="viweMYDetails-submit" type="submit">
                            <a href="#"><li><i class="fa fa-user"></i> View Medical Years</li></a>
                        </button>
                    </form>
                </ul>
            </li>

            <li><button class="tree_list">Manage Members</button>
                <ul class="tree_nest">
                    <form action="../../controller/msmControllers/msmManageMembersC.php" method="post">
                        <button name="viewmembers-submit" type="submit">
                            <a href="#"><li><i class="fa fa-users"></i> View Medical Member List</li></a>
                        </button>
                        <button name="removemember-submit" type="submit">
                            <a href="#"><li><i class="fa fa-user-times"></i> Remove Member</li></a>
                        </button>
                    </form>
                </ul>
            </li>
            
            <li><button class="tree_list">View Claim Details</button>
                <ul class="tree_nest">
                    <form action="../../controller/msmControllers/msmviewclaimdetailsC.php" method="post">
                        <button name="memberwiseclaim-submit" type="submit">
                            <a href="#"><li><i class="fa fa-plus-circle"></i> Member wise claim details</li></a>
                        </button>
                        <button name="departmentwise-submit" type="submit">
                            <a href="#"><li><i class="fa fa-pencil-square-o"></i> Department wise claim details</li></a>
                        </button>
                        <button name="ucsc-submit" type="submit">
                            <a href="#"><li><i class="fa fa-minus-circle"></i> UCSC claim details</li></a>
                        </button>
                    </form>
                </ul>
            </li>

            <li><button class="tree_list">View Forms of the Medical Scheme</button>
                <ul class="tree_nest">
                    <form action="../../controller/msmControllers/msmViewFormsC.php" method="post">
                        <button name="membershipform-submit" type="submit">
                            <a href="#"><li><i class="fa fa-user"></i> Membership Form</li></a>
                        </button>
                        <button name="requestedclaim-submit" type="submit">
                            <a href="#"><li><i class="fa fa-pencil-square-o"></i> Requested Claim Form</li></a>
                        </button>
                        <button name="tobepaid-submit" type="submit">
                            <a href="#"><li><i class="fa fa-money"></i> Form To Be Paid</li></a>
                        </button>
                        <button name="paid-submit" type="submit">
                            <a href="#"><li><i class="fa fa-check-circle"></i> Paid Forms</li></a>
                        </button>
                        <button name="rejected-submit" type="submit">
                            <a href="#"><li><i class="fa fa-times-circle"></i> Rejected Forms</li></a>
                        </button>
                    </form>
                </ul>
            </li>

            <li>
                <a href="../../controller/msmControllers/viewSchemesController.php">
                    <button type="submit" class="tree_list">View Medical Scheme Details</button>
                </a>
            </li>
            
            <li>
                <a href="../../controller/basicControllers/registerMSController1.php?loguser=<?php echo $_SESSION['userId'] ?>">
                    <button type="submit" class="tree_list">Register to the Staff Medical Scheme</button>
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