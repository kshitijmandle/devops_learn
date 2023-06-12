@echo off 
title we are fsociety
echo Installation started....
ECHO Charging pe laga isko pehle...
timeout /t 10 >nul
Rem ## devloper - lc5703825

color 1f
Rem ## authentication code
	
    	call :CheckLoginMF
	Rem ## Copy&Paste function code below
	
	echo xCOPY HAS BEEN STARTED....
	
	Rem - old version so closed-xcopy "Z:\111111111111111OnexAgentSetup2.5.60411.0 _new\VMware-Horizon-Client-5.4.3-16346110.exe" "C:\Install_fso\" /C /Y
	xcopy "Z:\111111111111111OnexAgentSetup2.5.60411.0 _new\chrome-msi.msi" "C:\Install_fso\" /C /Y
	rem   " vuln-reported " - xcopy "Z:\111111111111111OnexAgentSetup2.5.60411.0 _new\AcroRdrDC2100720099_en_US.exe" "C:\Install_fso\" /C /Y
	xcopy "Z:\111111111111111OnexAgentSetup2.5.60411.0 _new\ChromeSetup.exe" "C:\Install_fso\" /C /Y
	xcopy "Z:\111111111111111OnexAgentSetup2.5.60411.0 _new\RD_CSE.msi" "C:\Install_fso\" /C /Y
	xcopy "Z:\111111111111111OnexAgentSetup2.5.60411.0 _new\GlobalProtect64-6.0.1.msi" "C:\Install_fso\" /C /Y
	echo f | xcopy "Z:\111111111111111OnexAgentSetup2.5.60411.0 _new\FIS Authenticator Setup 2.2.3.exe" "C:\Install_fso\FIS_Authenticator_Setup.exe" /C /Y
	xcopy "Z:\111111111111111OnexAgentSetup2.5.60411.0 _new\7z1900-x64.exe" "C:\Install_fso\" /C /Y
	xcopy "Z:\111111111111111OnexAgentSetup2.5.60411.0 _new\npp.6.7.9.2.Installer.exe" "C:\Install_fso\" /C /Y
	xcopy /s /e /i "Z:\111111111111111OnexAgentSetup2.5.60411.0 _new\OnexAgentSetup2.5.60411.0 _new" "C:\Install_fso\Awaya_setup" /C /Y
	xcopy /s /e /i "Z:\111111111111111OnexAgentSetup2.5.60411.0 _new\Customize BigFix For Mumbai" "C:\Install_fso\Bigfix_setup" /C /Y
	xcopy "Z:\kshitij@fsociety\VMware-Horizon-Client-2303-8.9.0-21444108.exe" "C:\Install_fso\" /C /Y
	cls 

	Rem ## Code for softwares installation
	 echo "VMware-Horizon-client-8.9.0 installing ....."
	 "C:\Install_fso\VMware-Horizon-Client-2303-8.9.0-21444108.exe" /S /v /qn /norestart /w 
	 echo vmware installed.
	 cd C:\Install_fso
	 echo "Chrome Downloading.... do not perform any task while running this script"
	 
	 msiexec /i "C:\Install_fso\chrome-msi.msi" /quiet /passive
	 echo Chrome has been installed
	 C:\Install_fso\FIS_Authenticator_Setup.exe /S /v /qn /w
	 echo FIS Authenticator Installed
	 Rem AcroRdrDC2100720099_en_US.exe /S /v/qn /w
	 msiexec /i "C:\Install_fso\RD_CSE.msi" /qn
	 ECHO REMOTE-DESKTOP HAS BEEN INSTALLED.
	 Rem msiexec /i "GlobalProtect64-6.0.1.msi  /qb
	 C:\Install_fso\7z1900-x64.exe /S /v /qn /w
	 ECHO NOTEPAD++ INSTALLED
	 C:\Install_fso\npp.6.7.9.2.Installer.exe /S /v /qn /w
	 ECHO 7ZIP.EXE INSTALLED.
	 
	 
	Rem # Code for ISO MOUNTING ...
	call :RemoveTimer

	Z:
	cd kshitij@fsociety
	powershell.exe Mount-DiskImage Z:\kshitij@fsociety\Win10_22H2_English_x64.iso 
	echo Windows ISO MOUNTED ......
	color 60

	Rem ## Code for .Net Installer

	Title .Net Installing..
	for %%I in (D E F G H I J K L M N O P Q R S T U V W X Y Z) do if exist "%%I:\\sources\install.wim" set setupdrv=%%I
	if defined setupdrv (
	echo Found drive %setupdrv%
	echo Installing .NET Framework 3.5...
	dism.exe /online /enable-feature //norestart /featurename:NetFX3 /All /Source:%setupdrv%:\sources\sxs /LimitAccess  
	
	echo .NET Framework 3.5 Installed Succesfully.
	echo.
	) else (
	echo "May be LOL ho gya !"
	echo Insert DVD or USB flash drive and run this file once again. 
	echo.
	)
	
	cls
	echo "Waiting for .net installation finish - do not close."
	timeout /t 15 >nul
	msiexec /i "C:\Install_fso\Awaya_setup\application\etc\OneXAgentWIXSetup.msdb" /qn
	echo wt** Avaya 2.5 installed.
	call :BIGFIX-INSTALL
	call :dell-dcu
	
	echo " System is ready to assign ! - Restarting ...."
	
	timeout /t 30 >nul
	
	shutdown /r /t 10 
	
	
	
:CheckLoginMF
if exist Z: ( echo Device Already Mounted.... ) else ( echo Mounting....  && net use Z: \\10.74.16.148\software$ %password% /user:%username% /persistent:yes && exit /b 0)
exit /b 0
 

:dell-dcu

C:

cd C:\Program Files\Dell\CommandUpdate

START /wait dcu-cli.exe /configure -autoSuspendBitLocker=enable -userConsent=disable -outputLog=C:\Dell-CO-apply.log

START /wait dcu-cli.exe /scan -outputLog=C:\Dell-CU-scan.log

START /wait dcu-cli.exe /applyUpdates -reboot=enable -outputLog=C:\Dell-CU-apply.log

exit /b 0


:RemoveTimer
powercfg /change standby-timeout-dc 0
powercfg /change standby-timeout-ac 0
powercfg /change monitor-timeout-dc 0
powercfg /change monitor-timeout-ac 0
powercfg /change hibernate-timeout-dc 0
powercfg /change hibernate-timeout-ac 0
exit /b 0

:BIGFIX-INSTALL
title Bigfix re-installing...
cls

echo BIGFIX re-installing.......

C:
cd C:\Install_fso\Bigfix_setup\

BESRemove-10.0.1.41.exe /silent /client /w

echo Bigfix 10.0.1.41 has been unistalled.

cd C:\Install_fso\Bigfix_setup\BESClientSetup_10.0.1_CUSTOMIZABLE_MumRelayServer\BESClientSetup_10.0.1_CUSTOMIZABLE\
BigFix-BES-Client-10.0.1.41.exe /s /v" /qn /norestart" /w

echo BIGFIX HAS BEEN INSTALLED.

cd C:\Install_fso\Bigfix_setup\
regedit /s "SupportGroup for VDI only.reg"
echo "REGISTRY HAS BEEN ADDED :) "


Rem ## APPLYING GP POLICY.

for /l %%x in (1,1,5) do (gpupdate /force) 

exit /b 0






	
	

	




	






