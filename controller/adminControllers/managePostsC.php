<?php
    require_once('../../config/database.php');
    require_once('../../model/adminModel/managePostsModel.php');

    if(isset($_POST['viwePostDetails-submit'])) {
        session_start();
        $_SESSION['post_list'] = '';

        $records = adminModel::viewPosts ($connect);

        if ($records) {
            while ($record = mysqli_fetch_assoc($records)) {
                $userId = $record['userId'];
                $get_userName = adminModel::get_userName ($userId, $connect);
                $result_userName = mysqli_fetch_assoc($get_userName);

                $initials = $result_userName['initials'];
                $sname = $result_userName['sname'];
                $userName = $initials." ".$sname;
                
                $_SESSION['post_list'] .= "<tr>";
                $_SESSION['post_list'] .= "<td>{$record['post_name']}</td>";
                $_SESSION['post_list'] .= "<td>{$userName}</td>";
                $_SESSION['post_list'] .= "</tr>";

                header('Location:../../view/admin/aViewPostsDetailsV.php');
            }
        }
        else {
            header('Location:../../view/admin/aNoPostsAvailableV.php');
        }
    }

    elseif(isset($_POST['getUsers-submit'])) {
        session_start();
        $_SESSION['users_list'] = '';

        $records = adminModel::getUsers($connect);

        if ($records) {
            while ($record = mysqli_fetch_assoc($records)) {
                $_SESSION['users_list'] .= "<option value='".$record['empid']."'>".$record['empid']."</option>";

                header('Location:../../view/admin/aAddPostV.php');
            }
        }
        else {
            header('Location:../../view/admin/aNoPostsAvailableV.php');
        }

    }

    elseif(isset($_POST['addPost-submit'])) {
        $post_name = $_POST['post_name'];
        $empid = $_POST['empid'];

        $do_checkPost = adminModel::checkPost($post_name, $connect); 
        $result_checkPost = mysqli_fetch_assoc($do_checkPost);
        $pst_id = $result_checkPost['pst_id'];

        if ($pst_id) {
            header('Location:../../view/admin/aPostExists.php');
        }
        else {
            $get_userId = adminModel::get_userId($empid, $connect);
            $result_userId = mysqli_fetch_assoc($get_userId);
            $userId = $result_userId['userId'];

            if ($userId) {
                $result = adminModel::addPost ($post_name, $userId, $connect);

                if ($result) {
                    header('Location:../../view/admin/aPostAdded.php');
                }
                else {
                    header('Location:../../view/admin/aPostNotAdded.php');
                }
            }
            else {
                header('Location:../../view/admin/aPostNotAdded.php');
            }
        }
    }

    elseif(isset($_POST['viwePostList-submit'])) {
        session_start();
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

    elseif(isset($_POST['getPosts-submit'])) {
        session_start();
        $records = adminModel::viewPosts($connect);
        $_SESSION['postNamesList'] = '';

        if ($records) {
            while ($record = mysqli_fetch_array($records)) {
                $_SESSION['postNamesList'] .= "<option value='".$record['post_name']."'>".$record['post_name']."</option>";
            }
            header('Location:../../view/admin/aUpdateUserPost.php');
        }

        else {
            header('Location:../../view/admin/aNoPostsAvailableV.php');
        }
    }

    elseif(isset($_POST['updatePost-submit'])) {
        $post_name = $_POST['post_name'];

        $get_Post = adminModel::getPost ($post_name, $connect);
        $result_Post = mysqli_fetch_assoc($get_Post);

        if ($result_Post) {
            session_start();
            $_SESSION['post_name'] = $result_Post['post_name'];
            $userId = $result_Post['userId'];

            $get_empid = adminModel::get_empid ($userId, $connect);
            $result_empid = mysqli_fetch_assoc($get_empid);
            
            if ($result_empid) {
                $_SESSION['empid'] = $result_empid['empid'];

                $_SESSION['users_list'] = '';
                $records = adminModel::getUsers($connect);

                if ($records) {
                    while ($record = mysqli_fetch_assoc($records)) {
                        $_SESSION['users_list'] .= "<option value='".$record['empid']."'>".$record['empid']."</option>";

                        header('Location:../../view/admin/aNewUserToPost.php');
                    }
                }
                else {
                    echo "not updated";
                }
            }
            else {
                echo "query failed";
            }
        }
        else {
            echo "query failed";
        }
        
    }

    elseif(isset($_POST['updateUser-submit'])) {
        session_start();
        $post_name = $_SESSION['post_name'];
        $empid = $_POST['empid'];

        $get_userId = adminModel::get_userId($empid, $connect);
        $result_userId = mysqli_fetch_assoc($get_userId);
        $userId = $result_userId['userId'];

        if ($userId) {
            $updateUser = adminModel::updateUser ($post_name, $userId, $connect);

            if ($updateUser) {
                echo "upated";
            }
            else {
                echo "not updated";
            }
        }
        else {
            echo "not assigned";
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