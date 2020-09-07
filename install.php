<?php
include_once "_common.php";
$_head["title"] = "라이센스 정보";
$_head["tip"] = "설치를 시작하는것은 동의함으로 인정합니다.";

$_head["step"] = 1;
head();
?>
<div id="license"><?= file_get_contents(getPath("absolute") . "/LICENSE.txt"); ?></div>
<label><input type="checkbox" name="agree" id="agree"> 위의 라이센스를 모두 읽었으며 동의합니다.</label>
<?php
tail();
?>