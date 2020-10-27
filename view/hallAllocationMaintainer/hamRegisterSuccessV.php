<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Remove a booking</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <!-- <li><a href="hamHomeV.php">Home</a></li>
            <li>Remove a booking</li> -->
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'hamSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div class="contentForm">
                    <form>
                        <h3>Your membership form has been sent for the approval. You will be inform about the membership later.<br>
                        Thank you.</h3>

                        <a href="hamHomeV.php"><button class="mainbtn" type="submit" name="registerSuccess-submit">OK</button></a><br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>