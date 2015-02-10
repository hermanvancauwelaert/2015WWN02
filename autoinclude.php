<?php

/*
 * Includes all files and classes automaticly
 */

/**
 * Description of autoinclude
 *
 * @author hermanvancauwelaert
 */
final class autoinclude {
    
    static function FilesIn($folder){
        foreach (glob("{$folder}/*.php") as $filename)
        {
            echo 'file:'.$filename;
            echo '<br>';
            if ($filename<>'autoinclude.php')
            require($filename) ;
        }
    }
    
}
