@echo off

@setlocal

set H2O_PATH=%~dp0

if "%PHP_COMMAND%" == "" set PHP_COMMAND=php.exe

"%PHP_COMMAND%" "%H2O_PATH%command" %*

@endlocal