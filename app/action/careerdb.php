 
<?php 
 require_once '../../config.php';
 require_once CLASS_DIR.'/dbclass.php';
 
 $_SESSION['message']='';
  
  // NAME
if (empty($_POST["name"])) {
    $_SESSION['message'] = "Name is required <br>";
} else {
   $name = $_POST["name"];
}

//EMAIL
if (empty($_POST["email"])) {
    $_SESSION['message']= "Email is required <br>";
} else {
   $email = $_POST["email"];
}

//PHONE
if (empty($_POST["phone"])) {
    $_SESSION['message']= "Phone is required <br>";
} else {
   $phone = $_POST["phone"];
}

//MESSAGE
if (empty($_POST["message"])) {
    $_SESSION['message'] = "Message is required <br>";
} else {
   $message = $_POST["message"];
}

//FILE UPLOAD
if (isset($_POST['submit']))
{
    $file = $_FILES['chooseFile'];
    
    $file_name =$_FILES['chooseFile']['name'];
    $file_type =$_FILES['chooseFile']['type'];
    $file_size =$_FILES['chooseFile']['size'];
    $file_tem_loc =$_FILES['chooseFile']['tmp_name'];
    
    $file_error =$_FILES['chooseFile']['error'];

    $file_ext = explode('.',$file_name);
    $file_actual_ext = strtolower(end($file_ext));

    $allowed = array('jpg','png','jpeg','gif','pdf','docx');
    if(in_array($file_actual_ext, $allowed)){
        if($file_error===0){
           if($file_size<1000000){
              $file_name_new = uniqid('',true).".".$file_actual_ext;
              $file_store = '../../uploads/'.$file_name_new;
              move_uploaded_file($file_tem_loc,$file_store);
             

           }
           else{
            $_SESSION['message'] = "your file is too big";
           }
        }
        else{
            $_SESSION['message'] = "there was an error uploading your file";
        }
    }
    else {
        $_SESSION['message'] = "you cannot upload files of this type";
    }


    if( $_SESSION['message'] !=''){
        print_r($_SESSION['message']) ;
    }
    
    else{
        echo "data";
    
        $sql = "INSERT INTO career_form (name, email, phone, message,filename)"  ." VALUES ('$name', '$email', '$phone','$message','$file_name_new')";
    
        $result = $db->_query($sql);
        header("Location: ../../career.php");
    
        if($result){
            $_SESSION['message']= "The file has been uploaded successfully.";
        }
        else{
            $_SESSION['message'] = "File upload failed, please try again.";
        } 
    }
}
  ?>