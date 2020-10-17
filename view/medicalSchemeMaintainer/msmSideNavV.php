<main>
    <a href="../../controller/msmviewMemberListC.php"><button type="submit" name="" class="button">View Medical Member List</button></a><br>
    
    <a href="msmRemoveMemberV.php"><button type="submit" name="" class="button">Remove Member</button></a><br>
    
    <a href="msmViewClaimDetailsV.php"><button type="submit" name="" class="button">View Claim Details</button></a><br>

    <button class="button accordion">View Forms Of the Medical Scheme</button>
    <div class="panel">
        <a href="msmViewFormListV.php" class="buttonTwo">Membership Form</a>
        <a href="msmViewFormListV.php" class="buttonTwo">Referred Claim Forms</a>
        <a href="msmViewFormListV.php" class="buttonTwo">Requested Claim Form</a>
    </div>

    <a href="msmViewSchemeDetailsV.php"><button type="submit" name="" class="button">View Medical Scheme Details</button></a><br>
    
    <a href="../../controller/memregisterMSController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Register to the Staff Medical Scheme</button></a>

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
</main>