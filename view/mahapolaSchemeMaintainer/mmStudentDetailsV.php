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
            
            <div class="row">
                <div class="col left20">
                    <?php 
                        require('mmSideNavV.php');
                    ?>
                </div>

                <div class="col right80">
                    <div>
                        <h2>Student Details</h2>
                    </div>

                    <div class="contentForm">
                        <form action="../../controller/markMahapolaStuDetailsController.php?user_id=<?php echo $_SESSION['userId'] ?>" method="POST">
                            <div class="row">
                                <div class="col-25">
                                    <label for="">Student Initials</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="student_initials" <?php echo 'value="'.$_SESSION['student_initials'].'"' ?> disabled><br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">   
                                <label for="">Student Surname</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="student_surname" <?php echo 'value="'.$_SESSION['student_surname'].'"' ?> disabled><br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Student Index Number</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="student_index" <?php echo 'value="'.$_SESSION['student_index'].'"' ?> disabled><br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Degree</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="degree" <?php echo 'value="'.$_SESSION['degree'].'"' ?> disabled><br>
                                </div>
                            </div>

                                <div class="row">
                                        <div>
                                            <label for="">Selected to the Mahapola Scheme</label>
                                        </div>
                                    
                                        <div class="row">
                                            <div class="col-25">
                                                <label for="yes">Yes</label>
                                            </div>
                                            <div class="col-75">
                                                <input type="radio" id="yes" name="mahapola_eligibility" value="yes">
                                            </div>
                                        </div>
                                    
                                        <div class="row">
                                            <div class="col-25">
                                                <label for="no">No</label><br>
                                            </div>
                                            <div class="col-75">
                                                <input type="radio" id="no" name="mahapola_eligibility" value="no">
                                            </div>
                                        </div>
                                </div>
                                
                                <div class="row">
                                    <div>
                                        <label>Mahapola Scheme Type</label>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-25">
                                            <label for="m">M</label>
                                        </div>
                                        <div class="col-75">
                                            <input type="radio" id="m" name="mahapola_category" value="m">
                                        </div>
                                    </div>
                                        
                                    <div class="row">
                                        <div class="col-25">
                                            <label for="o">O</label>
                                        </div>
                                        <div class="col-75">
                                            <input type="radio" id="o" name="mahapola_category" value="o">
                                        </div>
                                    </div>
                                        
                                </div>

                                <button class="mainbtn" type="submit" name="mark-submit" >Save</button></a><br>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
</main>

<?php
    require_once('../basic/footer.php');
?>