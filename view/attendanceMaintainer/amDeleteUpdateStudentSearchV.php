<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Delete or Update Students' Details</title>

    <ul class="breadcrumbs">
        <li><a href="amHomeV.php">Home</a></li>
        <li>Delete or Update Students' Details</li>
    </ul>
    <div class="row">
        <div class="col left20">
            <?php
                require 'amSideNavV.php';
            ?>
        </div>

        <div class="col right80">
            <div>
                <h2>Delete or Update Students' Details</h2>
            </div>
            <div class="contentForm">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-25">
                            <label>Enter Student Index Number</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="index_no" placeholder="Student Index No" required/> <br>
                        </div>
                    </div>
                    <button class="mainbtn" type="submit" name="deleteupdateStudent-submit" href="amDeleteUpdateStudentV.php">Select</button>
                </form>
                <form>
                    <button class="cancelbtn" type="submit" name="cancel-submit">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>