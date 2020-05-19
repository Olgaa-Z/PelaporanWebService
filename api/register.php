<?php 
include_once "connect.php";

    class usr{}

    $user_username = $_POST["user_username"];
    $user_password = md5($_POST["user_password"]);
    $confirm_password = md5($_POST["confirm_password"]);
    $user_email = $_POST["user_email"];
    $user_fullname = $_POST["user_fullname"];
    $user_phone = $_POST["user_phone"];
    $user_address = $_POST["user_address"];


    if ((empty($user_username))) {
        $response = new usr();
        $response->success = 0;
        $response->message = "Kolom username tidak boleh kosong";
        die(json_encode($response));
    } else if ((empty($user_password))) {
        $response = new usr();
        $response->success = 0;
        $response->message = "Kolom password tidak boleh kosong";
        die(json_encode($response));
    }   else if ((empty($user_email))) {
        $response = new usr();
        $response->success = 0;
        $response->message = "Kolom Email tidak boleh kosong";
        die(json_encode($response));
    }   else if ((empty($user_fullname))) {
        $response = new usr();
        $response->success = 0;
        $response->message = "Kolom Full Name tidak boleh kosong";
        die(json_encode($response)); 
    }   else if ((empty($user_phone))) {
        $response = new usr();
        $response->success = 0;
        $response->message = "Kolom Phone tidak boleh kosong";
        die(json_encode($response)); 
    }   else if ((empty($user_address))) {
        $response = new usr();
        $response->success = 0;
        $response->message = "Kolom Address tidak boleh kosong";
        die(json_encode($response)); 
    } else if ((empty($confirm_password)) || $user_password != $confirm_password) {
        $response = new usr();
        $response->success = 0;
        $response->message = "Konfirmasi password tidak sama";
        die(json_encode($response));
    
    } else {
        if (!empty($user_username) && $user_password == $confirm_password ){
            $num_rows = mysqli_num_rows(mysqli_query($connect, "SELECT * FROM usert WHERE user_username='".$user_username."'"));

            if ($num_rows == 0){
                $query = mysqli_query($connect, "INSERT INTO usert (user_id, user_username, user_password, user_email, user_fullname, user_phone, user_address) VALUES(0,'".$user_username."','".$user_password."','".$user_email."','".$user_fullname."','".$user_phone."','".$user_address."')");

                if ($query){
                    $response = new usr();
                    $response->success = 1;
                    $response->message = "Register berhasil, silahkan login.";
                    die(json_encode($response));

                } else {
                    $response = new usr();
                    $response->success = 0;
                    $response->message = "username sudah ada";
                    die(json_encode($response));
                }
            } else {
                $response = new usr();
                $response->success = 0;
                $response->message = "username sudah ada";
                die(json_encode($response));
            }
        }
    }

    mysqli_close($connect);

 ?>





























