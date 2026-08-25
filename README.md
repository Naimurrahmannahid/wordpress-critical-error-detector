# WordPress Critical Error Detector 🐛

A lightweight, highly efficient Must-Use Plugin (MU-Plugin) for WordPress developers to automatically detect fatal errors and send instant email notifications with exact debug details. 

## 🚀 Features
* Catches PHP Fatal Errors, Parse Errors, and Core Errors.
* Bypasses standard plugin loading restrictions (runs as an MU-Plugin).
* Dynamically fetches the site's admin email.
* Highlights the exact file and line number causing the conflict (e.g., Elementor or Theme conflicts).
* Extremely lightweight with zero performance impact.

## 🛠️ Installation
1. Download the `fatal-error-catcher.php` file.
2. Connect to your WordPress site via FTP or File Manager.
3. Navigate to the `wp-content/mu-plugins/` directory. (Create the `mu-plugins` folder if it doesn't exist).
4. Upload the `fatal-error-catcher.php` file into this folder.
5. That's it! The plugin will automatically run in the background.

## 💡 Use Case
If your site experiences the "White Screen of Death" or a 500 Internal Server Error due to strict PHP 8+ rules or plugin conflicts, this tool will instantly email you the exact stack trace so you can fix it immediately.
