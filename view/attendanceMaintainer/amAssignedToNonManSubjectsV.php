<?php
    require '../basic/topnav.php';
?>

<main>
    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="amHomeV.php">Home</a></li>
            <li><a href="amGetStudentV.php">Assign to Non-mandatory Subjects</a></li>
            <li class="active">Request Succeeded!</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'aSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div class="contentForm">
                    <div class="row">
                        <h2>The student has been assigned to the given non-mandatory subject/s successfully.
                        </h2>
                    </div>

                    <button class="subbtn">
                        <a href="amGetStudentV.php">Assign another student</a> 
                    </button>
                    <button class="cancelbtn">
                        <a href="amHomeV.php">Exit</a> 
                    </button>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>