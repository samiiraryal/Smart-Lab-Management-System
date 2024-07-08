$Action = New-ScheduledTaskAction -Execute 'python' -Argument 'C:\Users\samir\Desktop\finalyearproject\client\client.py'
$Trigger = New-ScheduledTaskTrigger -AtStartup
$Settings = New-ScheduledTaskSettingsSet -AllowStartIfOnBatteries -DontStopIfGoingOnBatteries -StartWhenAvailable
$Task = New-ScheduledTask -Action $Action -Trigger $Trigger -Settings $Settings -Description "Computer Expert System Data Collection"
Register-ScheduledTask -TaskName "ComputerExpertSystem" -InputObject $Task -User "SYSTEM" -RunLevel Highest
