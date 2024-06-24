   <?php
$num1=$_POST['num1'];
$num2=$_POST['num2']; 
echo $num1+$num2;

   ?>
   
   <form method="post">
    <input type="textbox" name="num1" placeholder="num1"/><br/><br/>
    <input type="textbox" name="num2" placeholder="num2"/><br/><br/>

    <input type="submit" name="submit"/>

</form> 