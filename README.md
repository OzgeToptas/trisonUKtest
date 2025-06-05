# PHP Proxy Task

This is a simple PHP-based proxy script developed as part of a practical task.

## ✅ Overview

The goal of this script is to:

- Fetch an external XML feed
- Convert it to JSON
- Cache the result locally for 2 minutes
- Return the JSON output to the client

## 🔧 How It Works

1. When the `proxy.php` script is accessed:

   - It checks if a cached version (`cache.json`) exists and is still valid (under 2 minutes old).
   - If so, it returns the cached version.
   - If not, it fetches the XML from the external feed:  
     `https://clients.trison.uk/task/example.xml`
   - It then converts the XML to JSON.
   - Stores it locally in `cache.json` for future requests.
   - Returns the converted JSON to the client.

2. If the feed cannot be reached and no cache is available, it returns an error.

## 💻 Requirements

- PHP 7.0 or higher
- No external dependencies or frameworks required

## 🚀 Running Locally

```bash
php -S localhost:8000

Then open in your browser:
http://localhost:8000/proxy.php

📁 Files
proxy.php — Main script

cache.json — Automatically generated cache file (2-minute lifespan)

README.md — This file

```
# trisonUKtest
