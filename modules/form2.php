<?php
echo $_SERVER['PHP_SELF'];
?>
<form name="form2" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
    <input type="txt" name="veld3" 
                    value="<?php echo $_POST['veld3']; ?>"
                    >
    <input type="txt" name="veld4" 
                    value="<?php echo $_POST['veld4']; ?>"
                    >
    <INPUT TYPE="submit" NAME="send2" VALUE="send2">
</form>