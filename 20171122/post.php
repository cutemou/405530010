<form action="post.php" method="post" enctype="multipart/form-data">
height:<input type="text" name="height">m<br/>
weight:<input type="text" name="weight">kg<br/>
<input type="file" name="file" id="file" /><br />
<input type="submit" name="submit" value="提交" />
</form>




<?php
if (empty($_POST["height"]))
{
    echo "please type in all information";
    echo '<br>';  
}
else if(empty($_POST["weight"])){
        echo "please type in all information";
        echo '<br>';  
}
else{
echo "height:".$_POST["height"];
echo '<br>';  
echo "weight:".$_POST["weight"];
echo '<br>';  
}
if($_FILES["file"]["error"]>0){     
    echo "empty";
}
// if($_FILES["file"]["type"]>0){
//     echo "wrong file type";
// }
     else{
        //  echo "檔案名稱:" . $_FILES["file"]["name"]."<br/>";
        //  echo "檔案類型:" . $_FILES["file"]["type"]."<br/>";
        //  echo "檔案大小:" . ($_FILES["file"]["size"]/1024)."Kb<br/>";
        //  echo "暫存名稱:" . $_FILES["file"]["tmp_name"]."<br/>";
    

    $filename = $_FILES["file"]["name"];
    move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$filename);
    echo '<img src="upload/'.$filename.'"/>';
     }
?>

