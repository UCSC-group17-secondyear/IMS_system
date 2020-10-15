<main>
    <title>Member Details</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="msmHomeV.php">Home</a></li>
            <li>Member Details</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require 'msmSideNavV.php';
        ?>
    </div>

    <div class="content">
        <div>
            <h3>Member Details</h3>
        </div>
        <table class="mytable">
            <tr>
                <th>Employee ID</th>
            <?php echo $_SESSION['member'] ?>
        </table>

        <script>
            function myFunction() {
                alert("The employee has been removed successfully.");
            }
        </script>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>