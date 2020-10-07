<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Memeber List</title>
    <link rel="stylesheet" href="../css/main.css">
</head>

<body>
    <div class="container">

        <div class="header">
            <!-- <div class="nameLogo"> -->
            <img src="../img/ims.jpg" alt="ims" class="logo">
            <!-- </div> -->
            <div class="options">
                <a href="rvHomeV.php">Home</a>
                <a href="rvProfileV.php">Profile</a>
                <a href="#">Logout</a>
            </div>
        </div>

        <div class="header">breadcrums</div>

        <?php
            require_once('rvSideNavV.php');
        ?>

        <div class="content">
            <div>
                <h3>Member List</h3>
            </div>

            <table>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
            </table>
            <br>

            <a href="rvViewMedicalMemberlistV.php"><button type="submit" name="MedicalMemberlist-submit">OK</button></a>
        </div>

        <div class="footer">
            <?php
                require_once('../include/footer.php');
            ?>
        </div>
    </div>
</body>

</html>