@echo off
cd /d "./apache2.0/bin"
start http://localhost:8345/index.php
cmd /c "httpd.exe"
pause