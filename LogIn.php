<?php
    $password = $_POST["password"];
    $user = $_POST["username"];
    require_once 'DB_Conn.php';

    $sql = mysqli_real_escape_string("SELECT * FROM benutzer WHERE username = $user");

    $response = mysqli_query($conn, $sql);

    $result = array();
    $result['login'] = array();

    if(mysqli_num_rows($response)==1) {
        $row = mysqli_fetch_assoc($response);

        if (password_verify($password, $row['password'])) {

            $index['vName'] = $row['name'];
            $index['email'] = $row['email'];
            $index['id'] = $row['id'];

            array_push($result['login'], $index);

            $result['success'] = "1";
            $result['message'] = "success";
            echo json_encode($result);

            mysqli_close($conn);

        }else{
            $result['success'] = '0';
            $result['message'] = 'error';
            echo json_encode($result);

            mysqli_close($conn);
        }
    }
    ?>

