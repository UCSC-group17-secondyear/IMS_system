<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Medical Member List</title>
    <link rel="stylesheet" href="../css/main.css">
</head>

<body>
    <div class="container">
        <div class="header">
            <!-- <div class="nameLogo"> -->
            <img src="../img/ims.jpg" alt="ims" class="logo">
            <!-- </div> -->
            <div class="options">
                <a href="msmHomeV.php">Home</a>
                <a href="msmProfileV.php">Profile</a>
                <a href="#">Logout</a>
            </div>
        </div>

        <div class="header">breadcrums</div>

        <?php
            require_once('msmSideNavV.php');
        ?>

        <div class="content">
            <div>
                <h3>Select a Scheme</h3>
            </div>

            <select name="scheme" id="">
                <option value="">Select a Scheme</option>
                <option value="scheme1">Scheme 1</option>
                <option value="scheme2">Scheme 2</option>
                <option value="scheme3">Scheme 3</option>
            </select>
            <br>
            <select name="memberType" id="">
                <option value="">Select a Member Type</option>
                <option value="academic">Academic</option>
                <option value="non-academic">Non - Academic</option>
                <option value="temporary">Temporary</option>
            </select>
            <br>

            <a href="msmMedicalMemberlistV.php"><button type="submit"
                    name="viewMedicalMemberlist-submit">Select</button></a>
        </div>

        <div class="footer">
            <?php
                require_once('../include/footer.php');
            ?>
        </div>
    </div>
</body>

</html>