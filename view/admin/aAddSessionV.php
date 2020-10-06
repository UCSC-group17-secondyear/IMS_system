<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academic Staff Member Home Page</title>
    <link rel="stylesheet" href="../css/main.css">
</head>

<body>
    <div class="container">

        <div class="header">
            <!-- <div class="nameLogo"> -->
            <img src="../img/ims.jpg" alt="ims" class="logo">
            <!-- </div> -->
            <div class="options">
                <a href="aHomeV.php">Home</a>
                <a href="#">Profile</a>
                <a href="#">Logout</a>
            </div>
        </div>

        <div class="header">breadcrums</div>

        <div class="side-nav">
            <a href="aManageUserRolesV.php"><button type="submit" name="" class="button">Manage User
                    Roles</button></a><br>
            <a href="aManageMedicalPoliciesV.php"><button type="submit" name="" class="button">Manage Medical
                    Policies</button></a><br>
            <a href="aManageDegreesV.php"><button type="submit" name="" class="button">Manage Degrees</button></a><br>
            <a href="aManageSessionsV.php"><button type="submit" name="" class="button">Manage Sessions</button></a><br>
            <a href="aManageSessionPerMonthV.php"><button type="submit" name="" class="button">Manage Sessions Per
                    Month</button></a><br>
            <a href="aManageSemestersV.php"><button type="submit" name="" class="button">Manage
                    Semesters</button></a><br>
            <a href="aManageHallsV.php"><button type="submit" name="" class="button">Manage Halls</button></a><br>
            <a href="aManageDepartmentV.php"><button type="submit" name="" class="button">Manage
                    Departments</button></a><br>
            <a href="aManageDesignationV.php"><button type="submit" name="" class="button">Manage
                    Designations</button></a><br>
            <a href="aViewHallDetailsV.php"><button type="submit" name="" class="button">View Hall
                    Details</button></a><br>
        </div>

        <div class="content">
            <div>
                <h3>Add Desgination</h3>
            </div>

            <div class="formStyle">
                <form action="aAddSession.php" method="post">
                    Session Type: <input type="text" name="sessionType" placeholder="Enter session type" required><br>
                    Subject: <input type="text" name="subject" placeholder="Enter subject" required><br>
                    Number of sessions per Month: <input type="text" name="numOfSessions"
                        placeholder="Enter number of sessions per smester" required><br>
                    <button type="submit" name="addSession-submit">Add session type</button>
                </form>
            </div>

        </div>

        <div class="footer">
            <?php
                require_once('../include/footer.php');
            ?>
        </div>

    </div>
</body>

</html>