# CalculatorCodeChallenge
A multi-user calculator with feed of operations

# Application details:
Create a web app (using any programming languages) which logs calculations as they happen and shares those calculations with everyone connected to the website.
 
For example, user A and user B go to your site at the same time. User A calculates "5 + 5", which equals "10". This is logged below the calculator as "5 + 5 = 10". User B is updated about this calculation right after user A posts it. Now, user B calculates "3 x 4".This calculates to “12” and displays "3 x 4=12" right below the prior calculation. User A sees this update immediately after user B posts it.
 
Results should remain between sessions. Only show the last 10 calculations descending from most recent to oldest.

# Implemented using:
Html, Css, Javascript, jQuery, PHP, JSON;
Calculator feed saved to a .json file to persist between sessions, concurrency is limited. Server Sent Events used to update the feed in the index.html, chosen for it's simplicity
to implement. Would have liked to implement WebSockets for full duplex communication but decided against it due to the chosen hosting platform and time constraints.
