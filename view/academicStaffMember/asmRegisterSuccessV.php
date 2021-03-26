<?php
    require '../basic/topnav.php';
?>

<main>
    <ul class="breadcrumbs">
        <li><a href="asmHomeV.php">Home</a></li>
        <li class="active">Registration Approval</li>
    </ul>

    <div class="row">
        <div class="col left20">
            <?php
                require 'asmSideNavV.php';
            ?>
        </div>

        <div class="col right80">
            <div class="contentForm">
                <div class="row">
                    <h2>Your membership request has been sent for the approval. You will be inform about the approval later. Thank you.</h2>
                </div>

                <button class="subbtn">
                    <a href="asmHomeV.php">Ok</a> 
                </button>
                <button class="cancelbtn">
                    <a href="asmHomeV.php">Exit</a> 
                </button>
            </div>
        </div>
    </div>
</main>
    
<?php
    require '../basic/footer.php';
?>