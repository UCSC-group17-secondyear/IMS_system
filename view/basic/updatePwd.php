                    <form action="../../controller/basicControllers/updatePasswordControllerTwo.php?user_id=<?php echo $_SESSION['userId'] ?>" method="post">
                        <div class="row">
                            <div class="col-25">
                              <label for="">New Password: </label>
                            </div>
                            <div class="col-75">
                              <input type="password" name="password" required> <br>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-25">
                              <label for="">Confirm Password: </label>
                            </div>
                            <div class="col-75">
                              <input type="password" name="conpassword" required> <br>
                            </div>
                        </div>

                        <button type="submit" name="submit" class="subbtn">Save Password</button>
                    </form>