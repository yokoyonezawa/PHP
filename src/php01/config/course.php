<?php
$my_name = htmlspecialchars($_POST['my_name'], ENT_QUOTES);
print "お名前は" . $my_name . "ですね";
$choices = htmlspecialchars($_POST['choices'], ENT_QUOTES);
print "ご希望商品は" . $choices . "ですね";
$number = htmlspecialchars($_POST['number'], ENT_QUOTES);
print "注文数は" . $number . "ですね";