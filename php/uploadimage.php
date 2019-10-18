<?php

$target_dir = "../images/galerij/"; 
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
        //image uploaded succesfully.
    } else {
        header("Location: ../galerij.php?error=noimg");
        $uploadOk = 0;
    }

    
} else {
    //Submit is not set, user should not be on this page!
    header("Location: ../galerij.php");
}


if(file_exists($target_file)) {
    //File already exists
    echo "File alrdy exists";
    header("Location: ../galerij.php?error=fileexists");
} else if($_FILES["image"]["size"] > 35000 ) {
    header("Location: ../galerij.php?error=filesize");
    echo "img too large";
} else if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
    //Only JPG, JPEG, PNG & Gifs are allowed.
    echo "only jpg jpeg png gif";
    header("Location: ../galerij.php?error=filetype");
} else {
    //User is allowed to upload.
    if(move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        echo basename($_FILES["image"]["name"]). "has been uploaded";
        header("Location: ../galerij.php?success=uploadtrue");
    }
}

//error
//noimg
//fileexists
//filesize
//filetype
//success
//uploadtrue





?>