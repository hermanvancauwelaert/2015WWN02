<?php
if (!IsSet($_POST['submit'])) {
    $_POST['veld3']="poes";
    $_POST['veld4']="test";
} else
{
    print '<h2> test '.$_POST['veld3'].' '.$_POST['veld4'].'</h2>';
}
