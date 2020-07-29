
<?php

$sId = bin2hex(random_bytes(16));
$sName = $_POST['name'];
$sEmail = $_POST['semail'];
$sPassword = $_POST['spassword'];




try{
$db = new PDO('sqlite:company.db');
$db->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$stmt = $db->prepare('INSERT INTO agents VALUES(:id, :name, :semail, :spassword, :age)');

$stmt->bindValue(':id', $sId);
$stmt->bindValue(':name', $sName);
$stmt->bindValue(':semail', $sEmail);
$stmt->bindValue(':spassword', $sPassword);
$stmt->execute();
echo'{"id":"'.$sId.'"}';
}catch (PDOException $ex ){

echo '{"status": 0, "line": '.__LINE__.'}';
exit;

}
