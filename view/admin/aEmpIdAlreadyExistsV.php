<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Already Exists</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="../../controller/basicControllers/homeController.php?user_id=<?php echo $_SESSION['userId'] ?>">Home</a></li>
            <li class="active">Action Failed!</li>
        </ul>

        <div class="row">

            <div class="col right80">
                <div class="contentForm">
                        <div class="row">
                            <h2>Sorry!
                                This Emp Id you entered already exists.
                            </h2>
                        </div>

                        <button class="mainbtn">
                            <a href="../../controller/basicControllers/homeController.php?user_id=<?php echo $_SESSION['userId'] ?>">Home</a>  
                        </button>
                        
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>