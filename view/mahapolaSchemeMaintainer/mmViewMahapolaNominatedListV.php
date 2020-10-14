<main>
    <title>Mahapola Nominated List</title>

    <?php
        require('../basic/header.php');        
    ?>
        
    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="mmHomeV.php">Home</a></li>
            <li>View Mahapola Nominated List</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php 
            require('../mahapolaSchemeMaintainer/mmSideNavV.php');
        ?>
    </div>

    <div class="content">
        <div>
            <h4>View Mahapola Nominated Student List</h4>
        </div>

        <input type="text" value="" placeholder="Enter batch no"> <br><br>
        <select name="degree" id="">
            <option value="">Select Degree</option>
            <option value="CS">CS</option>
            <option value="IS">IS</option>
        </select>
        <br>
        <br>
        <a href="mmNominatedListV.php" ><button type="submit" name="" >Display Student List</button></a><br>
    </div>
    
    <?php
        require_once('../basic/footer.php');
    ?>
</main>