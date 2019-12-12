<?php
    require_once 'DB_Conn.php';
    $name = null;
    $bezeichung = null;
    $position = null;


    if ($_SERVER['REQUEST_METHOD'] = 'POST') {

        $name = $_POST["name"];
        $bezeichung = $_POST["bezeichnung"];
        $position = $_POST["position"];
        $benutzerName = $_SESSION['username'];

    }

    if (!$conn) {
        echo mysqli_connect_errno();
    }
    $sql = "INSERT INTO geraetedaten (Name, Position, Bezeichnung, Benutzer) VALUES ( '$name', '$position', '$bezeichung', '$benutzerName')";

    if (mysqli_query($conn, $sql)) {
        echo 'Geräte wurden Eingefügt! ';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }


    mysqli_close($conn);


if (isset($_POST["submit"])) {

    datenSpeichern();
}

?>