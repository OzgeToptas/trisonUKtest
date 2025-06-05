# PHP Proxy Task — Vue.js Version

This project is an extended version of the original PHP proxy script, featuring a basic visual interface using Vue.js (via CDN).

## ✅ What It Does

- Fetches an external XML feed
- Converts it to JSON
- Caches the result locally for 2 minutes
- Displays the JSON data in a simple UI
- Shows the last update time
- Provides a "Refresh" button
- Includes a toggleable dark mode

## 🔧 How It Works

- The core logic is handled in `proxy.php`.
- A cached version (`cache.json`) is stored for 2 minutes.
- `index.html` uses Vue.js to call `proxy.php` and render the result with enhancements.
- Vue is included via CDN — no build steps are required.

## 🚀 How to Run Locally

Make sure you have PHP installed, then run:

```bash
php -S localhost:8000

Then open in your browser:

http://localhost:8000/index.html — Vue.js interface

http://localhost:8000/proxy.php — Raw JSON output

📁 Files Included
proxy.php — PHP script that fetches, caches and converts the feed

index.html — Vue-based interface (uses CDN, no build tools)

cache.json — Automatically generated file (excluded from Git)

README.md — This file

📷 UI Features

🟢 Refresh button

🕓 Last updated timestamp

🌙 Dark mode toggle

🎨 Clean, modern design with Google Fonts

✅ Fully responsive and ready to run out of the box

```
