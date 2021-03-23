<?php
    require '../basic/topnav.php';
?>

<main>
    <ul class="breadcrumbs">
        <li><a href="amHomeV.php">Home</a></li>
        <li class="active">Enter or Update Attendance</li>
    </ul>

    <div class="row" style="margin-bottom: 4%;" >
        <div class="col left20">
            <?php
                require 'amSideNavV.php';
            ?>
        </div>

        <div class="col right80">
            <div>
                <h2>Enter or Update Attendance</h2>
            </div>
            <div class="contentForm">
                <form action="../../controller/amControllers/manageAttendanceC.php" method="post">
                    <div class="row">
                        <div class="col-25">
                            <label>Enter date</label>
                        </div>
                        <div class="col-75">
                            <input type="date" name="date" placeholder="Date" <?php echo 'max="'.$_SESSION['max_date'].'"' ?> <?php echo 'min="'.$_SESSION['min_date'].'"' ?> ><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label>Subject</label>
                        </div>
                        <div class="col-75">
                            <select name="subject" required>
                                <option>Select a subject</option>
                                <?php echo $_SESSION['subject'] ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label>Degree</label>
                        </div>
                        <div class="col-75">
                            <select name="subject" required>
                                <option>Select a Degree</option>
                                <?php echo $_SESSION['degree'] ?>
                            </select>
                        </div>
                    </div>
                    <button class="subbtn" type="submit" name="markattendance-submit">Mark Attendance</button>
                    <button class="cancelbtn" type="submit" name="updateattendance-submit">Update Attendance</button>
                </form>
            </div>
        </div>
    </div>
</main>

<script>
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1; //January is 0!
    var yyyy = today.getFullYear();
    if(dd<10){
            dd='0'+dd
        } 
        if(mm<10){
            mm='0'+mm
        } 

    today = yyyy+'-'+mm+'-'+dd;
    document.getElementById("datefield").setAttribute("max", today);
</script>

<?php
    require '../basic/footer.php';
?>