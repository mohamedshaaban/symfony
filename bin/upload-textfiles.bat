@ECHO OFF
setlocal DISABLEDELAYEDEXPANSION
SET BIN_TARGET=%~dp0/../vendor/lakion/mink-debug-extension/travis/tools/upload-textfiles
bash "%BIN_TARGET%" %*
