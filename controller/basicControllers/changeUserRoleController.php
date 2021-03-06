<?php 
    session_start();
    require_once('../../model/basicModel/changeUserRoleModel.php');
    require_once('../../config/database.php');

    if (isset($_GET['user_id'])) {
        $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);
        $_SESSION['user_id'] = $user_id;
        $result_set = basicModel::changeUserRole($user_id, $connect);

        if ($result_set) {
            if (mysqli_num_rows($result_set)==1) {
                $result = mysqli_fetch_assoc($result_set);

                if ($result['ham_flag']==1) {
                    $_SESSION['ham_flag'] = 'Hall Allocation Maintainer';
                }
                if ($result['mo_flag']==1) {
                    $_SESSION['mo_flag'] = 'Medical Officer';
                }
                if ($result['dh_flag']==1) {
                    $_SESSION['dh_flag'] = 'Department Head';
                }
                if ($result['msm_flag']==1) {
                    $_SESSION['msm_flag'] = 'Medical Scheme Maintainer';
                }
                if ($result['mem_flag']==1) {
                    $_SESSION['mem_flag'] = 'Medical Scheme Member';
                }
                if ($result['a_flag']==1) {
                    $_SESSION['a_flag'] = 'Admin';
                }
                if ($result['rv_flag']==1) {
                    $_SESSION['rv_flag'] = 'Report Viewer';
                }
                if ($result['am_flag']==1) {
                    $_SESSION['am_flag'] = 'Attendance Maintainer';
                }
                if ($result['mm_flag']==1) {
                    $_SESSION['mm_flag'] = 'Mahapola Scheme Maintainer';
                }
                if ($result['asm_flag']==1) {
                    $_SESSION['asm_flag'] = 'Academic Staff Member';
                }
                if ($result['nasm_flag']==1) {
                    $_SESSION['nasm_flag'] = 'Non Academic Staff Member';
                }

                header('Location:../../view/basic/aChangeUserRoleV.php');
            }
        }
    }

    if (isset($_POST['change-role'])) {
        $userrole = mysqli_real_escape_string($connect, $_POST['userRole']);
        //echo $userrole;
        $user_id = $_SESSION['user_id'];

        if ($userrole=='Hall Allocation Maintainer') {
            $userRll = 2;
            $result = basicModel::setUserRoleTwo($user_id, $userRll, $connect);
            header('Location:../../view/hallAllocationMaintainer/hamHomeV.php');
        }
        if ($userrole=='Medical Officer') {
            $userRll = 3;
            $result = basicModel::setUserRoleTwo($user_id, $userRll, $connect);
            header('Location:../../view/medicalOfficer/moHomeV.php');
        }
        if ($userrole=='Department Head') {
            $userRll = 8;
            $result = basicModel::setUserRoleTwo($user_id, $userRll, $connect);
            header('Location:../../view/departmentHead/dhHomeV.php');
        }
        if ($userrole=='Medical Scheme Maintainer') {
            $userRll = 4;
            $result = basicModel::setUserRoleTwo($user_id, $userRll, $connect);
            header('Location:../../view/medicalSchemeMaintainer/msmHomeV.php');
        }
        if ($userrole=='Medical Scheme Member') {
            $userRll = 5;
            $result = basicModel::setUserRoleTwo($user_id, $userRll, $connect);
            header('Location:../../view/medicalSchemeMember/memHomeV.php');
        }
        if ($userrole=='Admin') {
            $userRll = 1;
            $result = basicModel::setUserRoleTwo($user_id, $userRll, $connect);
            header('Location:../../view/admin/aHomeV.php');
        }
        if ($userrole=='Report Viewer') {
            $userRll = 6;
            $result = basicModel::setUserRoleTwo($user_id, $userRll, $connect);
            header('Location:../../view/reportViewer/rvHomeV.php');
        }
        if ($userrole=='Attendance Maintainer') {
            $userRll = 9;
            $result = basicModel::setUserRoleTwo($user_id, $userRll, $connect);
            header('Location:../../view/attendanceMaintainer/amHomeV.php');
        }
        if ($userrole=='Mahapola Scheme Maintainer') {
            $userRll = 7;
            $result = basicModel::setUserRoleTwo($user_id, $userRll, $connect);
            header('Location:../../view/mahapolaSchemeMaintainer/mmHomeV.php');
        }
        if ($userrole=='Academic Staff Member') {
            $userRll = 10;
            $result = basicModel::setUserRoleTwo($user_id, $userRll, $connect);
            header('Location:../../view/academicStaffMember/asmHomeV.php');
        }
        if ($userrole=='Non Academic Staff Member') {
            $userRll = 11;
            $result = basicModel::setUserRoleTwo($user_id, $userRll, $connect);
            header('Location:../../view/nonAcademicStaffMember/nasmHomeV.php');
        }
    }
?>