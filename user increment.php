<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 03.01.16
 * Time: 0:13
 */
$file = fopen("data.txt", "a+"); //Open file and set priorities to read and addind data to the end of file.
flock($file,LOCK_EX);//file locked
$count = fread($file,100);//read txt file
$count++;// + number in txt file
ftruncate($file,0);//clean the file with previous number
fwrite($file,$count);//write the number++1
flock($file,LOCK_UN);// Unlock the file(because we want to write in it)
fclose($file);// Lock file. So, we clean the memory and work more)
echo "Our site has been visites by $count users.";