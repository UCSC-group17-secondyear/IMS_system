<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a Booking</title>
    <link rel="stylesheet" href="../css/main.css">
</head>

<body>
    <div class="container">

        <div class="header">
            <!-- <div class="nameLogo"> -->
            <img src="../img/ims.jpg" alt="ims" class="logo">
            <!-- </div> -->
            <div class="options">
                <a href="asmHomeV.php">Home</a>
                <a href="asmProfileV.php">Profile</a>
                <a href="#">Logout</a>
            </div>
        </div>

        <div class="header">breadcrums</div>

        <?php
            require_once('asmSideNavV.php');
        ?>

        <div class="content">
            <div>
                <h3>Details</h3>
            </div>
            <br>
            <table>
                <tr>
                    <th>Name</th>
                    <th>AC / Non AC</th>
                    <th>Capacity</th>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
            <br>
            <a href="asmHallDetailsV.php"><button type="submit" name="">Ok</button></a>
        </div>

        <div class="footer">
            <?php
                require_once('../include/footer.php');
            ?>
        </div>
    </div>
</body>

</html>