@ECHO OFF
SET BIN_TARGET=%~dp0/../symfony/phpunit-bridge/bin/simple-phpunit
php "%BIN_TARGET%" %*
