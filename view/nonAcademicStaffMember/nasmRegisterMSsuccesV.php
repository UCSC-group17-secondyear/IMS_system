<?php
    require '../basic/topnav.php';
?>

<main>
    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="nasmHomeV.php">Home</a></li>
            <li><a href="#">Register to the Medical scheme</a></li>
            <li class="active">Action Success!</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'nasmSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div class="contentForm">
                    <div class="row">
                        <h2>Your membership request has been sent for the approval. You will be inform about the approval later. Thank you.</h2>
                    </div>

                    <button class="subbtn">
                        <a href="nasmHomeV.php">Ok</a> 
                    </button>
                    <button class="cancelbtn">
                        <a href="nasmHomeV.php">Exit</a> 
                    </button>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>