<?php
$user_name=htmlspecialchars($_POST['user_name'], ENT_QUOTES);
$set_name=htmlspecialchars($_POST['set_name'],ENT_QUOTES);
$num = htmlspecialchars($_POST['num'],ENT_QUOTES);
print "私の名前は".user_name."です";
echo "<br />";
print set_name."です";
echo "<br />";
print "注文数量は".num."です";

