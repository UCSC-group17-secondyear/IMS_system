<?php
	require '../basic/topnav.php';
?>

<main>
	<div class="sansserif">
		<ul class="breadcrumbs">
			<li><a href="amHomeV.php">Home</a></li>
			<li><a href="amViewStudentDetailsV.php">Students' Details</a></li>
            <li class="active">Get Batch</li>
		</ul>

		<div class="row" style="margin-bottom: 4%;" >
            <div class="col left20">
                <?php
                    require 'amSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Get Batch</h2>
                </div>

                <div class="contentForm">
                    <form action="../../controller/amControllers/manageStudentsC.php" method="post">
                    	<div class="row">
                            <div class="col-25">
                                <label for="">Select a batch</label>
                            </div>
                            <div class="col-75">
                            	<select name="batch_number">
                            		<?php echo $_SESSION['batchList']; ?>
                            	</select>
	                        </div>
                        </div>

                        <button class="subbtn" type="submit" name="getBatch-submit">Enter</button>
	                    <button class="cancelbtn" type="submit" name="cancel-submit">
	                        <a href="amHomeV.php">Cancel</a>
	                    </button>
                    </form>
                </div>
            </div>
	</div>
</main>