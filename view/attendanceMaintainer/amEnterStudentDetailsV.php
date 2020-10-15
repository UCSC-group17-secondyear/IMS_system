<main>
    <title>Enter Students' Details</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="amHomeV.php">Home</a></li>
            <li>Enter Students' Details</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../attendanceMaintainer/amSideNavV.php';
        ?>
    </div>

    <div class="content">
        <div>
            <h3>Students' Details</h3>
        </div>
        <form action="../../controller/amControllers/addStudentC.php" method="post">
            Enter Student Index No<input type="text" name="index_no" placeholder="Student Index No" required/> <br>

            Enter Student Registration Number<input type="text" name="registrstion_no" placeholder="Student Registration No" required/> <br>

            Enter Student's Initials<input type="text" name="initials" placeholder="Initials" required/> <br>

            Enter Student's Last name<input type="text" name="last_name" placeholder="Last Name" required/> <br>
            
            Enter email<input type="email" name="email" placeholder="Mail Address" required/> <br>
            
            Select Academic Year <select name="academic_year" id="academic_year">
                <option value="2019">2019</option>
                <option value="2018">2018</option>
                <option value="2017">2017</option>
                <option value="2016">2016</option>
            </select> <br>
            
            Select degree <select name="degree" id="degree">
                <option value="CS">Computer Science</option>
                <option value="IS">Information System</option>
                <option value="SE">Software Engineering</option>
            </select> <br>
            
            <button type="submit" name="addStudent-submit">Enter Student</button>
            <button type="submit" name="cancel-submit">Cancel</button>
        </form>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>