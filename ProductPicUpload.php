<?php
if(!empty($_FILES)){
   $file = $_FILES['productPic'];
   $fileName = $file['name'];
   $puthFile = __DIR__ . '/imgProduct/' .$fileName;
   move_uploaded_file($file['tmp_name'], $puthFile);
}