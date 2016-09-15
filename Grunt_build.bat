@echo off
:: fire up Ruby
call C:\Ruby22-x64\bin\setrbvars.bat

:: set Directory to same as this batch file
cd /d %~dp0

:: run Grunt command
grunt build