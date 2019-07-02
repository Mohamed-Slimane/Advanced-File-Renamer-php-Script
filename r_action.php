<?php

header('Content-Type: text/html; charset=utf-8');

$folder = $_REQUEST['folder'];
$type = $_REQUEST['type'];
$before = $_REQUEST['before'];
$after = $_REQUEST['after'];
$s_before = $_REQUEST['s_before'];
$s_after = $_REQUEST['s_after'];

$dir = opendir($folder);

$i = 1;

// loop through all the files in the directory
while (false !== ($file = readdir($dir)))
{
    // if the extension is '.jpg'
    if (strtolower(pathinfo($file, PATHINFO_EXTENSION)) == $type)
    {
        // do the rename based on the current iteration
        $newName = $before . $s_before . $i . $s_after . $after . '.' . $type;
        rename($folder . '/' . $file,$folder . '/' . $newName);

        // increase for the next loop
        $i++;
    }else{
        header ("Location:rename.php");
    }
}

// close the directory handle
closedir($dir);

?>