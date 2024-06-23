$Action = New-ScheduledTaskAction -Execute 'start_script.bat'
$Trigger = New-ScheduledTaskTrigger -AtStartup
$Principal = New-ScheduledTaskPrincipal -UserId "NT AUTHORITY\\SYSTEM" -LogonType ServiceAccount -RunLevel Highest
$Settings = New-ScheduledTaskSettingsSet -AllowStartIfOnBatteries -DontStopIfGoingOnBatteries -StartWhenAvailable -DontStopOnIdleEnd

Register-ScheduledTask -TaskName "ComputerExpertSystem" -Action $Action -Trigger $Trigger -Principal $Principal -Settings $Settings
