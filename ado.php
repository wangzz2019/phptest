<?php 
include_once("adodb5/adodb.inc.php");

$db = adoNewConnection('mysqli'); 
$db->debug=true;
$db->connect('127.0.0.1', 'root', 'Password123!', 'testdb');
$rs=$db->execute("select * from employee");
print "<pre>";
#print_r($rs->getRows());
while(!$rs->EOF){
    print_r($rs->fields['name']);
    $rs->MoveNext();
    print '<br>';
}
$rs->Close();
print "</pre>";
?>