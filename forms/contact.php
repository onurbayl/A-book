<?php
  // Simulate always successful response

  header('Content-Type: application/json');
  echo json_encode([
    'status' => 'success',
    'message' => 'Your message has been sent. Thank you!'
  ]);
  exit;
?>
