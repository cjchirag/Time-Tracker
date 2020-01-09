<?php
//application functions

function getProjectList() {
  include 'connection.php';
  try {
  $sql = 'SELECT project_id, title, category FROM projects';
  return $db->query($sql);
} catch (Exception $e) {
  echo "Error!: " . $e->getMessage() . "</br>";
  return array();
}
}
