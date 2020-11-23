<?php
    require '../basic/topnav.php';
?>

<main>
    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="memHomeV.php">Home</a></li>
            <li class="active">Request Failed!</li>
        </ul>

        <div class="row" style="margin-bottom: 5%;">
            <div class="col left20">
                <?php
                    require 'memSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2></h2>
                </div>
                <div class="contentForm">
                    <div class="row">
                        <h2>Sorry!
                            There are no schemes available in the system.
                        </h2>
                    </div>

                    <button style="background-color:crimson"  class="mainbtn">
                        <a href="memHomeV.php">Exit</a> 
                    </button>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>