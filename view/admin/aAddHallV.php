<?php
    require "../header.php";
    require "aSideNavV.php";
?>

<main>
    <link rel="stylesheet" href="../assests/css/style.css">

    <div class="container">
        <ul class="breadcrumb">
            <li><a href="adminV.php">Home</a></li>
            <li>Add a new hall</li>
        </ul>
            
        <div class="content">
            <div>
                <h3>Add a new hall</h3>
            </div>

            <div class="formStyle">
                <form action="aAddHall.php" method="post">
                    Hall Name: <input type="text" name="hallName" placeholder="Enter hall name" required><br>
                    Hall Location: <input type="text" name="hallLocation" placeholder="Enter hall location"
                        required><br>
                    Seating Capacity: <br><input type="text" name="seatingCapacity" placeholder="Enter seating capacity"
                        required><br>
                    AC availability: <input type="text" name="acAvailability" placeholder="Enter AC availability"
                        required><br>
                    <button type="submit" name="addHall-submit">Add hall</button>
                </form>
            </div>
        </div>
    </div>
</main>

<?php
    require_once('../include/footer.php');
?>