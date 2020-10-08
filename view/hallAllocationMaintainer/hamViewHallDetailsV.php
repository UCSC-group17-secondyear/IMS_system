<?php
    require "../header.php";
    require "hamSideNavV.php";
?>

<main>
    <link rel="stylesheet" href="../assests/css/main.css">
    
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="hamHomeV.php">Home</a></li>
            <li>View hall details</li>
        </ul>

        <!-- <div class="header">
            <img src="../img/ims.jpg" alt="ims" class="logo">
            <div class="options">
                <a href="hamHomeV.php">Home</a>
                <a href="hamProfileV.php">Profile</a>
                <a href="#">Logout</a>
            </div>
        </div> -->
        
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
            <a href="hamHallDetailsV.php"><button type="submit" name="">Ok</button></a>
        </div>
    </div>
</main>
        
<?php
    require_once('../include/footer.php');
?>