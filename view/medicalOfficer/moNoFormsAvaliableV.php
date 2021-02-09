<?php
    require "../basic/topnav.php";
?>

<main>
    <title>No Form Avaliable</title>
    <div class="sansserif">
        
            <ul class="breadcrumbs">
                <li><a href="moHomeV.php">Home</a></li>
                <li class="active">No Forms Avaliable</li>
            </ul>
        
        <div class="row" style="margin-bottom: 5%;">
            <div class="col left20">
                <?php 
                    require('moSideNavV.php');
                ?>
            </div>
            
            <div class="col right80">
                <form action="moHomeV.php" class="contentForm">
                    <div>
                        <h2>No Forms Avaliable</h2>
                    </div>

                    <a href="moHomeV.php">
                        <button style="background-color:crimson" type="submit" class="mainbtn">Exit</button>
                    </a>
                </form>
            </div>
        </div>
    </div>
</main>

<?php
    require_once('../basic/footer.php');
?>