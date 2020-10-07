<main>
    <div class="side-nav">
        <a href="moClaimReqestingFormsV.php"><button type="submit" name="" class="button">View Claim Requesting
                Forms</button></a><br>
        <button class="button accordion">View Claim Requesting Forms</button>
        <div class="panel">
            <a href="moApprovedClaimFormsV.php" class="buttonTwo">Approved claim forms</a>
            <a href="moRejectedClaimFormsV.php" class="buttonTwo">Rejected claim forms</a>
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