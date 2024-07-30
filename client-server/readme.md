--app.py is the server (now been replace by server.py)

--we have also tried using the score based system in order to overcome the limitation of server being correct during normal and low usage only

--incorporated the flexibility to address the above issue while using rule-based system

--included loop to run the client 15 times in the interval of 15 seconds to test and verify the results in different scenario

--added the susatained high usage metric to judge the maintenance more accurately

--setup.py only needs to be run once to do all the setup on the client side that includes adding the requirements(packages) and the start_monitor.bat

--by going into the task manager and on the start-up section we can verify that our batch file is added to the system start up

--working on metrics left are storage and prolonged usage confirmation
