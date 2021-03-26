<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Student Details</title>
        <div class="sansserif">
            <ul class="breadcrumbs">
                <li><a href="mmHomeV.php">Home</a></li>
                <li class="active">Student Details</li>
            </ul>
            
            <div class="row" style="margin-bottom: 4%;">
                <div class="col left20">
                    <?php 
                        require('mmSideNavV.php');
                    ?>
                </div>

                <div class="col right80">
                    <div>
                        <h2>Student Details</h2>
                    </div>

                    <div class="contentForm" style="margin-bottom: 1%;">
                        <form name="mahapola_stu" action="../../controller/mmControllers/markMahapolaController.php" onsubmit="return validateForm()" method="POST">

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Regsitration Number</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="student_reg_no" value="<?php echo $_SESSION['stu_reg_no'] ?>" readonly><br>
                                </div>
                            </div>  

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Index Number</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="student_index" value="<?php echo $_SESSION['stu_index'] ?>" readonly><br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Initials</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="student_initials" value="<?php echo $_SESSION['stu_initials'] ?>" readonly><br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">   
                                <label for="">Surname</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="student_surname" value="<?php echo $_SESSION['stu_surname'] ?>" readonly><br>
                                </div>
                            </div>

                            

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Degree</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="degree" value="<?php echo $_SESSION['stu_degree'] ?>" readonly><br>
                                </div>
                            </div>

                                <div class="row">
                                    <div class="col-25">
                                        <label for="">Mahapola Nominated</label>
                                    </div>
                                    <div class="col-75">
                                        <label>
                                            <input type="radio" class="option-input radio" id="yes" value="1" name="mahapola-nominated" onclick="showHide()" required  />
                                            &nbsp;Yes
                                        </label>
                                        <label>
                                            <input type="radio" class="option-input radio" id="no" value="0" name="mahapola-nominated" onclick="showHide()"  checked/>
                                            &nbsp;&nbsp;No
                                        </label>   
                                    </div>
                                </div>

                                <div id="selectType" class="row" style="display: none">
                                    <div class="col-25">
                                        <label for="">Mahapola Scheme Type</label>
                                    </div>
                                    <div class="col-75">
                                        <label>
                                            <input type="radio" class="option-input radio" id="merit" value="merit" name="mahapola-category"  />
                                            &nbsp;&nbsp;&nbsp;M
                                        </label>
                                        <label>
                                            <input type="radio" class="option-input radio" id="ordinary" value="ordinary" name="mahapola-category"/>
                                            &nbsp;&nbsp;&nbsp;O
                                        </label> 
                                    </div>    
                                </div>

                                <button class="subbtn" type="submit" name="mark-submit" >Update</button></a>
                                <button type="submit" class="cancelbtn">
                                    <a href="mmHomeV.php">Cancel</a>
                                </button>
                        </form> 
                        
                    </div>
                </div>
            </div>
        </div>
</main>

<?php
    require_once('../basic/footer.php');
?>


<script>
    function showHide(){
        var yes = document.getElementById("yes");
        var schemeType = document.getElementById("selectType");
        schemeType.style.display = yes.checked ? "block" : "none";
    }

    function validateForm() {
        var x = document.forms["mahapola_stu"]["mahapola-nominated"].value;
        var y = document.forms["mahapola_stu"]["mahapola-category"].value;
        if (x == "1" && y == "") {
            alert("Scheme Type must be filled out");
            return false;
        }
    }
</script>