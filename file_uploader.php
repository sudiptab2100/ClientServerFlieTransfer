<?php
    if(isset($_FILES['file_name'])){
        $errors = array();
        $file_name = $_FILES['file_name']['name'];
        $file_tmp = $_FILES['file_name']['tmp_name'];
        // $file_size = $_FILES['file_name']['size'];
        // $file_type = $_FILES['file_name']['type'];
        // $file_ext = strtolower(end(explode('.',$_FILES['file_name']['name'])));
        
        // $extensions = array("jpeg","jpg","png");
        
        // if(in_array($file_ext, $extensions) === false) {
        //     $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
        // }
        
        // if($file_size > 2097152) {
        //     $errors[] = 'File size must be excately 2 MB';
        // }
        
        if(empty($errors) == true) {
            move_uploaded_file($file_tmp, "files/".$file_name);
            echo "Success";
            header('Location:/util/'); // redirect back to the main site
        } else {
            print_r($errors);
        }
    }
?>