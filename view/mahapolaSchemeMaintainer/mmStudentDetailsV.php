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
                        <form action="../../controller/mmControllers/markMahapolaStuDetailsController.php" method="POST">
                            <div class="row">
                                <div class="col-25">
                                    <label for="">Student Initials</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="student_initials" value="<?php echo $_SESSION['stu_initials'] ?>" disabled><br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">   
                                <label for="">Student Surname</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="student_surname" value="<?php echo $_SESSION['stu_surname'] ?>" disabled><br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Student Index Number</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="student_index" value="<?php echo $_SESSION['stu_index'] ?>" disabled><br>
                                </div>
                            </div>  

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Degree</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="degree" value="<?php echo $_SESSION['stu_degree'] ?>" disabled><br>
                                </div>
                            </div>

                                <div class="row">
                                        <div>
                                            <label for="">Selected to the Mahapola Scheme</label>
                                        </div>
                                    
                                        <label class="radio">
                                            <input type="radio" id="yes" value="1" name="mahapola-nominated" onclick="showHide()" required>
                                            Yes
                                            <span></span>
                                        </label>
                                        <label class="radio">
                                            <input type="radio" id="no" value="0" name="mahapola-nominated" onclick="showHide()">
                                            No
                                            <span></span>
                                        </label>
                                </div>

                                <div id="selectType" class="row" style="display: none">
                                        <div>
                                            <label for="">Mahapola Scheme type</label>
                                        </div>
                    
                                        <label class="radio">
                                            <input type="radio" id="merit" value="merit" name="mahapola-category" >
                                             &nbsp;M
                                            <span></span>
                                        </label>
                                        <label class="radio">
                                            <input type="radio" id="ordinary" value="ordinary" name="mahapola-category">
                                             &nbsp;O
                                            <span></span>
                                        </label>    
                                </div>

                                <button class="subbtn" type="submit" name="mark-submit" >Save</button></a>
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
</script>