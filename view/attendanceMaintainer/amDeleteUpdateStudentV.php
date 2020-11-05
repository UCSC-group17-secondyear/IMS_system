<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Search Student</title>

    <ul class="breadcrumbs">
        <li><a href="amHomeV.php">Home</a></li>
        <li>Search Student</li>
    </ul>

    <div class="row">
        <div class="col left20">
            <?php
                require 'amSideNavV.php';
            ?>
        </div>

        <div class="col right80">
            <div>
                <h2>Search Student</h2>
            </div>
            <div class="contentForm">
                <form action="../../controller/amControllers/updateRemoveStdC.php" method="post">
                    <div class="row">
                        <div class="col-25">
                            <label>Enter Student Index Number</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="index_no" placeholder="Student Index No" required/><br>
                        </div>
                    </div>
                    <button class="subbtn" type="submit" name="getStudent-submit">Enter</button>
                    <button class="cancelbtn" type="submit" name="cancel-submit">
                        <a href="amHomeV.php">Cancel</a>
                    </button>
                </form>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>