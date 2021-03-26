<?php
    require '../basic/topnav.php';
?>

<main>
    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="amHomeV.php">Home</a></li>
            <li class="active">Request Failed!</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'amSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div class="contentForm">
                    <div class="row">
                        <h2>Sorry!
                            There are no students' details available in the system currently.
                        </h2>
                    </div>

                    <button class="subbtn">
                        <a href="amEnterStudentDetailsV.php">Add students</a> 
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