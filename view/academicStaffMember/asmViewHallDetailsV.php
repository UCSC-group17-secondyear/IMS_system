<?php
    require_once('../header.php');
    require_once('asmSideNavV.php');
?>

<main>
    <link rel="stylesheet" href="../assests/css/main.css">

    <div class="container">
        <!-- <div class="header">
            <img src="../img/ims.jpg" alt="ims" class="logo">
            <div class="options">
                <a href="asmHomeV.php">Home</a>
                <a href="asmProfileV.php">Profile</a>
                <a href="#">Logout</a>
            </div>
        </div> -->

        <ul class="breadcrumb">
            <li><a href="asmHomeV.php">Home</a></li>
            <li>Hall Details</li>
        </ul>

        <div class="content">
            <div>
                <h3>Hall Details</h3>
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
    </div>
</main>

<?php
    require_once('../include/footer.php');
?>