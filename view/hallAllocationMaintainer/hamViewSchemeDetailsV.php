<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scheme Details</title>
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <!-- <div class="nameLogo"> -->
            <img src="../img/ims.jpg" alt="ims" class="logo">
            <!-- </div> -->
            <div class="options">
                <a href="hamHomeV.php">Home</a>
                <a href="hamProfileV.php">Profile</a>
                <a href="#">Logout</a>
            </div>
        </div>
        <div class="header">breadcrums</div>
        <div class="side-nav">
            

        <!-- <div> -->
                <a href="hamWeeklyTimeTableV.php"><button type="submit" name="" class="button">View Weekly Time Table</button></a><br>
                <a href="hamViewHallAllocationScheduleV.php"><button type="submit" name="" class="button">View Hall Allocation Schedule</button></a><br>
                <a href="hamViewSchemeDetailsV.php"><button type="submit" name="" class="button">View Scheme Details</button></a><br>
                <a href="hamHallDetailsV.php"><button type="submit" name="" class="button">View Hall Details</button></a><br>
                <a href="hamManageWeeklyTimeTableV.php"><button type="submit" name="" class="button">Manage Weekly Time Table</button></a><br>
                <a href="hamManageBookingV.php"><button type="submit" name="" class="button">Manage Booking</button></a><br>
                <a href="hamRegisterToMedicalSchemeV.php"><button type="submit" name="" class="button">Register to the Staff Medical Scheme</button></a><br>
            <!-- </div> -->
        </div>
        <div class="banner">
            <div>
                <h2>Hall Allocation Maintainer</h2>
            </div>
        </div>
        <div class="content">
           
            <div>
                <h3>Scheme Details</h3>
            </div>
            <h4>Scheme 1 : </h4>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, voluptas cupiditate tenetur incidunt
            ab autem maiores optio inventore sunt dolor. Voluptate tenetur totam similique molestias labore ipsum 
            architecto eius amet.</p>

            <h4>Scheme 2 : </h4>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, voluptas cupiditate tenetur incidunt
            ab autem maiores optio inventore sunt dolor. Voluptate tenetur totam similique molestias labore ipsum 
            architecto eius amet.</p>

            <h4>Scheme 3 : </h4>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, voluptas cupiditate tenetur incidunt
            ab autem maiores optio inventore sunt dolor. Voluptate tenetur totam similique molestias labore ipsum 
            architecto eius amet.</p>

            <a href="hamHomeV.php"><button type="submit" name="">OK</button></a>
                    
        </div>
        <div class="footer">
            <?php
                require_once('../include/footer.php');
            ?>
        </div>
    </div>
</body>
</html>