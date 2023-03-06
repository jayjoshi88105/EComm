<?php
require('db.php');

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$emailid = $_POST['emailid'];
$phone = $_POST['phone'];
$city = $_POST['city'];

/////
if (isset($_FILES['profilepic'])) {
    $errors = array();
    

    $file_size = $_FILES['profilepic']['size'];
    $file_tmp = $_FILES['profilepic']['tmp_name'];
    $file_type = $_FILES['profilepic']['type'];
    $file_ext = strtolower(end(explode('.', $_FILES['profilepic']['name'])));
    $file_name = strtotime(date("Y-m-d H:i:s")).".".$file_ext;

    $extensions = array("jpeg", "jpg", "png");

    if (in_array($file_ext, $extensions) === false) {
        $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
    }

    if ($file_size > 2097152) {
        $errors[] = 'File size must be excately 2 MB';
    }

    if (empty($errors) == true) {
        chmod("../images/", 0755);
        move_uploaded_file($file_tmp, "../images/" . $file_name);
        echo "Success";
    } else {
        print_r($errors);
    }
}
/////


try {
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO users (firstname, lastname, emailid, phone, city, profilepic) VALUES ('$firstname', '$lastname', '$emailid', '$phone', '$city', '$file_name')";
    $result = $conn->exec($sql);

    if ($result == 1) {
        header('Location: ../../');
    }
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>