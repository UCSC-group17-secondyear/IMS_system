<?php
    require '../basic/topnav.php';
?>

<main>
    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="amHomeV.php">Home</a></li>
            <li><a href="amEnterSubjectDetails.php">Add Subject</a></li>
            <li class="active">Action Success!</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'amSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2></h2>
                </div>
                <div class="contentForm">
                    <div class="row">
                        <h2>The subject is added successfully.
                        </h2>
                    </div>

                    <button class="subbtn">
                        <a href="amEnterSubjectDetails.php">Add another subject</a> 
                    </button>
                    <button class="cancelbtn">
                        <a href="amHomeV.php">Leave</a> 
                    </button>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>