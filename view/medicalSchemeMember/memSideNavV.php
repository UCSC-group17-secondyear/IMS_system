<main>
    <div class="side-nav">
        <a href="memRenewMembershipV.php"><button type="submit" name="" class="button">Renew Membership</button></a><br>
        
        <a href="memViewSchemeDetailsV.php"><button type="submit" name="" class="button">View Medical Scheme Details</button></a><br>
        
        <!-- <a href="memFillClaimFormsV.php" ><button type="submit" name="" class="button">Fill Claim Forms</button></a><br> -->
        
        <button class="button accordion">Fill Claim Forms</button>
        <div class="panel">
            <a href="../../controller/opdFormControllerOne.php?user_id=<?php echo $_SESSION['userId'] ?>" class="buttonTwo">OPD Form</a> <br>
            <a href="../../controller/surgicalFormControllerOne.php?user_id=<?php echo $_SESSION['userId'] ?>" class="buttonTwo">Surgical Hospitalization Form</a>
        </div>
        
        <a href="../../controller/updateClaimFormControllerOne.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Update Claim
                Form</button></a><br>
        
        <!-- <a href="memViewClaimFormsV.php" ><button type="submit" name="" class="button">View Claim Forms</button></a><br> -->
        
        <button class="button accordion">View Claim Forms</button>
        <div class="panel">
            <a href="memSearchByReferenceFormV.php?user_id=<?php echo $_SESSION['userId'] ?>" class="buttonTwo">Search By Ref. Number</a> <br>
            <a href="../../controller/claimFormListControllerOne.php?user_id=<?php echo $_SESSION['userId'] ?>" class="buttonTwo">Display Form List</a>
        </div>

        <script>
            var acc = document.getElementsByClassName("accordion");
            var i;

            for (i = 0; i < acc.length; i++) {
                acc[i].addEventListener("click", function() {
                    this.classList.toggle("active");
                    var panel = this.nextElementSibling;
                    if (panel.style.display === "block") {
                        panel.style.display = "none";
                    } else {
                        panel.style.display = "block";
                    }
                });
            }
        </script>
    </div>
</main>