<?php
if (isset($_POST['SUBMIT'])){
move_uploaded_file($_FILES['doc']['tmp_name'],
$_FILES['doc']['name']);
}

   ?>
   
   <form method="post" enctype="multipart/form-data">
    <input type="file" name="doc"/>
    <input type="submit" name="submit"/>

</form> 