<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weekly Time Table</title>
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
                <h3>Weekly Time Table</h3>
            </div>

            <table>
                <tr>
                    <th>Date</th>
                    <th>Time Duration</th>
                    <th>Hall Name</th>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>

            <a href="asmHomeV.php"><button type="submit" name="">OK</button></a>

            <!-- if lecturer registered as a medical scheme member then redirect to the lecturer home page without "Register to the medical scheme button"  -->

        </div>

        <div class="footer">
            <?php
                require_once('../include/footer.php');
            ?>
        </div>
    </div>
</body>

</html>