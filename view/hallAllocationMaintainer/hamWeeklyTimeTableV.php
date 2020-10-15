<main>
    <title>Weekly Time Table</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="hamHomeV.php">Home</a></li>
            <li>Weekly Time Table</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../hallAllocationMaintainer/hamSideNavV.php';
        ?>
    </div>

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
        <a href="hamHomeV.php"><button type="submit" name="">OK</button></a> 
        <!-- if lecturer registered as a medical scheme member then redirect to the lecturer home page without "Register to the medical scheme button"  -->
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>