<?php

$sId = bin2hex(random_bytes(16));
$AgentId = $_POST ['agentId'];
$Price = $_POST ['price'];
$Address = $_POST ['address'];


try{

$db = new PDO('sqlite:properties.db');
$db->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$stmt = $db->prepare('INSERT INTO properties VALUES(:id, :agentId, :price, :address');

$stmt->bindValue(':id', $sId);
$stmt->bindValue(':agentId', $AgentId);
$stmt->bindValue(':price', $Price);
$stmt->bindValue(':address', $Address);
$stmt->execute();
echo'{"id":"'.$sId.'"}';
}catch (PDOException $ex ){

echo '{"status": 0, "line": '.__LINE__.'}';
exit;

}