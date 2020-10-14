<main>
    <title>Medical Member List</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="rvHomeV.php">Home</a></li>
            <li>Medical Scheme Member List</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require 'rvSideNavV.php';
        ?>
    </div>

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

    <?php
        require '../basic/footer.php';
    ?>

</main>
