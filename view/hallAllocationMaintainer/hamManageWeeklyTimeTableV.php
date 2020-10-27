<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Manage Weekly Timetable</title>
    
    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="hamHomeV.php">Home</a></li>
            <li><a href="hamProfileV.php">Profile</a></li>
            <li><a href="#">Logout</a></li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'hamSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Manage Weekly Time Table</h2>
                </div>

                <div class="contentForm">
                    <form action="" method="POST">
                        <div class="row">
                            <a href="hamEnterTimeTableV.php"><button type="submit" class="subbtn" name="">Enter Time Table</button></a>
                            
                            <a href="hamUpdateTimeTableV.php"><button class="cancelbtn" type="submit" name="">Update/Remove Time Table</button></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
        
<?php
    require_once('../include/footer.php');
?>