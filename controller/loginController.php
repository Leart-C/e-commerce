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
            $_SESSION['is_authenticated'] = true;
            $_SESSION['authenticated_user'] = [
                "id" => $user["id"],
                "name" => $user["name"],    
                "surname" =>$user['surname'],
                "email" => $user["email"],  
                "username"=>$user['username'],
                "user_role"=>$user['user_role']
            ];

            header('Location: HomePage.php');
        } else {
            echo 'Email or password is incorrect!';
        }

    }
}
?>