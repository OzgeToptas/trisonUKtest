<?php
// Configuration
$feedUrl = "https://clients.trison.uk/task/example.xml";
$cacheFile = __DIR__ . "/cache.json";
$cacheDuration = 120; // seconds (2 minutes)

// Set JSON response header
header('Content-Type: application/json');

// Check if cache is valid
if (file_exists($cacheFile) && (time() - filemtime($cacheFile) < $cacheDuration)) {
    echo file_get_contents($cacheFile);
    exit;
}

// Fetch the XML feed
$xmlString = @file_get_contents($feedUrl);

if ($xmlString === false) {
    // If fetching fails and cache exists, return cached content
    if (file_exists($cacheFile)) {
        echo file_get_contents($cacheFile);
    } else {
        http_response_code(500);
        echo json_encode(["error" => "Unable to reach the source and no cache available."]);
    }
    exit;
}

// Convert XML to JSON
libxml_use_internal_errors(true);
$xml = simplexml_load_string($xmlString);
if ($xml === false) {
    http_response_code(500);
    echo json_encode(["error" => "Failed to parse XML."]);
    exit;
}

$json = json_encode($xml, JSON_PRETTY_PRINT);

// Write to cache
file_put_contents($cacheFile, $json);

// Return the JSON output
echo $json;
