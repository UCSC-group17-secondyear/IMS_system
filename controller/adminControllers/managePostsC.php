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

    elseif(isset($_POST['viwePostList-submit'])) {
        $records = adminModel::viewPosts($connect);
        $_SESSION['postNamesList'] = '';

        if ($records) {
            while ($record = mysqli_fetch_array($records)) {
                $_SESSION['postNamesList'] .= "<option value='".$record['post_name']."'>".$record['post_name']."</option>";
            }
            header('Location:../../view/admin/aRemovePostV.php');
        }

        else {
            header('Location:../../view/admin/aNoPostsAvailableV.php');
        }
    }

    elseif(isset($_POST['removePost-submit'])) {
        $post_name = mysqli_real_escape_string($connect, $_POST['post_name']);

        $records = adminModel::removePosts($post_name, $connect);

        if ($records) {
            header('Location:../../view/admin/aPostRemoved.php');
        }
        else {
            header('Location:../../view/admin/aPostNotRemoved.php');
        }
    }
?>