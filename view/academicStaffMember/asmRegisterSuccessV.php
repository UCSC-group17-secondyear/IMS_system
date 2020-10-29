<?php
    require '../basic/topnav.php';
?>

<main>
    <ul class="breadcrumbs">
        <li><a href="asmHomeV.php">Home</a></li>
        <li>Registration Approval</li>
    </ul>

    <div class="row">
        <div class="col left20">
            <?php
                require 'asmSideNavV.php';
            ?>
        </div>

        <div class="col right80">
            <div class="contentForm">
                <form>
                    <p>Your membership request has been sent for the approval. You will be inform about the approval later.</p> <br>
                    <p>Thank you..</p>

                    <a href="asmHomeV.php"><button class="mainbtn" type="submit" name="registerSuccess-submit">OK</button></a><br>
                </form>
            </div>
        </div>
    </div>
</main>
    
<?php
    require '../basic/footer.php';
?>