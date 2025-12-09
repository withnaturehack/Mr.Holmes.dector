::ORIGINAL karzo: karzo (hackwithnature)
::AUTHOR: karzo (hackwithnature)
::Copyright (C) 2025-26 hackwithnature <withnaturehack@gmail.com>
::License: GNU General Public License v3.0

@ECHO OFF

START /B pip3 install -r requirements.txt  2>NUL >NUL
echo INSTALLING REQUIREMENTS DO NOT CLOSE THIS WINDOW MANUALLY...
cd ../
echo path= %CD% >>Mr.Holmes/Configuration/Configuration.ini
echo Desktop>Mr.Holmes/Display/Display.txt