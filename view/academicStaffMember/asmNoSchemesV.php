<?php
    require '../basic/topnav.php';
?>

<main>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="asmHomeV.php">Home</a></li>
            <li class="active">Request Failed!</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'asmSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <div>
                        <h2>Sorry! <br>
                            No schemes are availabl in the system right now.
                        </h2>
                    </div>

                    <button class="mainbtn">
                        <a href="asmHomeV.php">Ok</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>