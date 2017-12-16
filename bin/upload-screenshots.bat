@ECHO OFF
setlocal DISABLEDELAYEDEXPANSION
SET BIN_TARGET=%~dp0/../vendor/lakion/mink-debug-extension/travis/tools/upload-screenshots
bash "%BIN_TARGET%" %*
