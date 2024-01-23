<?php
include_once './repository/userRepository.php';
include_once './models/user.php';

session_start();


if (isset($_POST['loginBtn'])) {
    if (
        empty($_POST['email']) ||
        empty($_POST['password'])
    ) {
        echo "Fill all fields!";
    } else {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $userRepository = new UserRepository();

        $user = $userRepository->getUserByEmailAndPassword($email, $password);

        if ($user) {
            $_SESSION['user_email'] = $user['email'];
            header('Location: HomePage.php');
        } else {
            echo 'Email or password is incorrect!';
        }

    }
}
?>