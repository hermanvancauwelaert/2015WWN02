<?php
echo $_SERVER['PHP_SELF'];
?>
<form name="form1" method="post" action="<?php echo 'html/frontpage.html'; ?>" >
    <input type="number" name="veld1" 
                    value="<?php echo $_POST['veld1']; ?>"
                    >
    <input type="number" name="veld2" 
                    value="<?php echo $_POST['veld2']; ?>"
                    >
    <INPUT TYPE="submit" NAME="send" VALUE="send">
</form>