<?php
function db_query($pdo, $query, $data = [])
{

  $sql = $pdo->prepare($query);
  if ($sql->execute($data)) {
    return $sql->fetchAll(PDO::FETCH_ASSOC);
  } else {
    return [];
  }
}
