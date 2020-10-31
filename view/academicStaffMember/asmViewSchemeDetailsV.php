<?php
    require '../basic/topnav.php';
?>

<main>
    <title>View Medical Scheme Details</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="asmHomeV.php">Home</a></li>
            <li>View Medical Scheme Details</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'asmSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Scheme Details</h2>
                </div>
                <div class="contentForm">
                    <?php
                        require '../basic/schemeDetailsV.php';
                    ?>
                    <form>
                        <button type="submit" class="subbtn">
                            <a href="">Register to medical scheme</a>
                        </button>
                        <button type="submit" class="cancelbtn">
                            <a href="asmHomeV.php">Back</a>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>