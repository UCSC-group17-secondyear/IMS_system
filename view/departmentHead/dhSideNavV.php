<main>
    <div class="sansserif">
        <ul id="tree_view">
            <li>
                <button type="submit" class="tree_list">
                    <a href="dhMembRequestFormV.php">View Memebership Request Forms</a>
                </button> <br>
            </li>
            <li>
                <button type="submit" class="tree_list">
                    <a href="dhCertifiedFormV.php">View Certified Memebership Forms</a>
                </button> <br>
            </li>
            <li>
                <button type="submit" class="tree_list">
                    <a href="dhMedicalSchemDetailsV.php">View Scheme Details</a>
                </button> <br>
            </li>
            <li>
                <button type="submit" class="tree_list">
                    <a href="../../controller/memregisterMSController.php?user_id=<?php echo $_SESSION['userId'] ?>">Register to the Staff Medical Scheme</a>
                </button> <br>
            </li>
        </ul>
    </div>
</main>