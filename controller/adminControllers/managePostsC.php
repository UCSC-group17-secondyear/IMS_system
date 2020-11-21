<?php
    session_start();
    require_once('../../config/database.php');
    require_once('../../model/adminModel/managePostsModel.php');

    if(isset($_POST['viwePostDetails-submit'])) {
        $_SESSION['post_list'] = '';

        $records = adminModel::viewPosts($connect);

        if ($records) {
            while ($record = mysqli_fetch_assoc($records)) {
                $_SESSION['post_list'] .= "<tr>";
                $_SESSION['post_list'] .= "<td>{$record['post_name']}</td>";
                $_SESSION['post_list'] .= "</tr>";

                header('Location:../../view/admin/aViewPostsDetailsV.php');
            }
        }
        else {
            header('Location:../../view/admin/aNoPostsAvailableV.php');
        }
    }

    elseif(isset($_POST['addPost-submit'])) {
        $post_name = mysqli_real_escape_string($connect, $_POST['post_name']);

        $checkPost = adminModel::checkPost($post_name, $connect);

        if (mysqli_num_rows($schemeExists) != 0) {
            header('Location:../../view/admin/aPostExists.php');
        }
        else {
            $result = adminModel::addPost($post_name, $connect);

            if ($result) {
                header('Location:../../view/admin/aPostAdded.php');
            }
            else {
                header('Location:../../view/admin/aPostNotAdded.php');
            }
        }
    }
?>