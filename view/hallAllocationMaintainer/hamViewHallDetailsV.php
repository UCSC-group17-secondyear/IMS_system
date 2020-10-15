<main>
    <title>View hall details</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="hamHomeV.php">Home</a></li>
            <li>View hall details</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../hallAllocationMaintainer/hamSideNavV.php';
        ?>
    </div>
        
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

    <?php
        require '../basic/footer.php';
    ?>
</main>