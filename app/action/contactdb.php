     
<?php 
 require_once '../../config.php';
 require_once CLASS_DIR.'/dbclass.php';
 



 if(isset($_POST['action'])){
     $errorMSG = '';
   // NAME
if (empty($_POST["name"])) {
    $errorMSG = "Name is required <br>";
}
 else {
    $name = $_POST["name"];
}

//EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email is required <br>";
} 
else {
    $email = $_POST["email"];
}
 
//PHONE
if (empty($_POST["phone"])) {
    $errorMSG .= "Phone is required <br>";
} else {
    $phone = $_POST["phone"];
}

//MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Message is required <br>";
} else {
    $message = $_POST["message"];
}


if($errorMSG!=''){
    echo "no data".$errorMSG;
}

else{
    echo "data";

    $sql = "INSERT INTO contact_form (name, email, phone, message )   VALUES ('$name', '$email', '$phone','$message')";

    $result = $db->_query($sql);
    header("Location: ../../contact.php");
    print_r($result);
}
 }
?>



 