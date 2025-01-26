<?php
// Simple PHP example for an API response

// Set content type to JSON
header('Content-Type: application/json');

// Create response
$response = [
    'status' => 'success',
    'message' => 'Hello World from Simple PHP!'
];

// Return the response
echo json_encode($response);
