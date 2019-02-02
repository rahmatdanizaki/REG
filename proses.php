<?php
$v=$_POST['v'];
// $hostsplit=shell_exec('..\modul\console.exe net view 2>&1');
// $hostsplit=str_replace('-------------------------------------------------------------------------------','',$hostsplit);
// $hostsplit=str_replace('Server Name            Remark','',$hostsplit);
// $hostsplit=str_replace(' ','',$hostsplit);
// $hostsplit=str_replace('\\\\',';',$hostsplit);
// $hostsplit=str_replace('\n','',$hostsplit);
// $hostsplit=str_replace('Thecommandcompletedsuccessfully.','',$hostsplit);

$pattern="/OS:.*/";
preg_match($pattern, $v, $match);
echo str_replace('OS:','',$match[0]);
// $sp=explode(';',$match[0]);
// $html="<div class=\"list-group\">";
// for($i=0;$i<count($sp);$i++){
	// $hostname=$sp[$i];
	// $ipaddress=shell_exec("..\modul\console.exe ping -f;$hostname;-n;1 2>&1");
	// $pattern2="/[0-9].{1,3}.[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}/";
	// preg_match($pattern2, $ipaddress, $ip);
	// $ipaddress=$ip[0];
	// $html=$html."<a href=\"#\" class=\"list-group-item\" onclick=\"setAddHost('$hostname','$ipaddress')\">".$hostname."</a>";
// }
// $html.="</div>";
// echo $html;
?>