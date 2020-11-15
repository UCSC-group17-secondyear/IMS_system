<main>
    <div class="sansserif">
        <ul id="tree_view">
            <li>
                <a href="../../controller/dhMemeberRequestFormC.php?user_id=<?php echo $_SESSION['userId'] ?>">
                    <button type="submit" class="tree_list">View Memebership Request Forms</button>
                </a>
            </li>
            <li>
                <a href="dhCertifiedFormV.php">
                    <button type="submit" class="tree_list">View Certified Memebership Forms</button>
                </a>
            </li>
            <li>
                <a href="dhMedicalSchemDetailsV.php">
                    <button type="submit" class="tree_list">View Scheme Details</button>
                </a>
            </li>
            <li>
                <a href="../../controller/basicControllers/registerMSController1.php?user_id=<?php echo $_SESSION['userId'] ?>">
                    <button type="submit" class="tree_list"> Register to the Staff Medical Scheme</button>
                </a>
            </li>
        </ul>
    </div>
</main>