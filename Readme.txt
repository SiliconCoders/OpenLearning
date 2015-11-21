**************************
	OpenLearning
**************************

->We used PHP,MySQL and WampServer.

Functionalities -

1 USER REGISTRATION
•	Open Learning shall allow users to register for the system. Users can register as one of two types:
•	Student
•	Instructor
•	Administrators must be added to the system by other administrators.
•	During registration, Open Learning shall ask for the user’s:
- Name (first and last name required, middle name optional)
- Gender (required)
- Date of Birth (optional)
- Password (always masked with ‘*’, requires two entries upon registration)
•	In response to a user’s submission of registration data, Open Learning will supply a user
ID to the student using the following syntax:
U-FLLLLLLLLLL##
Where, U = user type (‘s’ if student, ‘i’ if instructor, and ‘a’ if administrator)
	F = first letter of first name
	L = last name (max length of 10) 
# = number (to ensure that each user has a unique ID)
•	When a user is registering, their password shall meet the following criteria:
- At least 6 characters in length
- At least one number
•	When a user is registering for Open Learning, the system shall validate all user inputs according to the following criteria:
- Ensure there is an entry for first and last name.
- Ensure the birth-date entered is a valid date
- Ensure the password is compliant with the password rules
If an entry is not valid, system shall notify user of the issue and shall not process the registration until the issue is fixed.
To use the application after successful registration, user needs to login so we give second priority to Login.
#2 USER LOGIN
•	Open Learning shall allow registered users to log in using:
- Username
- Password (masked with ‘*’ character)
If the given username and password correspond to the same user, the system shall allow the user to view their main Open Learning page (dashboard). If the username and/or password is blank, system shall a display an error saying “Username and password are required”. If the username and password combination is not found in the database, the system shall display an error saying “Invalid username and/or password”. In both cases, the system shall allow the user to try again. 
3. Upon login, Open Learning shall display a dashboard to the student with the following options: 
•	Search for courses 
•	View announcements pertaining to currently enrolled courses 
•	View messages 
•	View course schedule and optionally drop courses 
•	View grades
4.	Upon login, Open Learning shall display a dashboard to the instructor with the following options: - 
•	Create course 
•	Cancel course 
•	View information about current courses they’re teaching 
•	Post announcements about current courses they’re teaching
•	View messages 
•	Enter grades
5.	Open Learning shall be delivered with at least one administrator user already configured, this will allow the approvID shall be: 
a-superuser00. 
Development will determine the password. All administrators shall have access to this account and it cannot be deleted, as a safeguard against accidental deletion of all administrator accounts. It will be up to administrators to secure this account including changing the password when any administrator is removed.
6.	Upon log in, Open Learning shall display a dashboard for an administrator. The dashboard shall include the following options: 
•	Approve Instructors 
•	Approve Administrators 
•	Approve Courses 
•	Modify Enrollment 
•	View Messages
7.	Open Learning shall allow instructors to create courses with the following attributes: 
•	Title (required) 
•	Description (required) 
•	Subject (required) 
•	Class Size (required) 
•	Start Date (required) 
•	End Date (required) 
•	Days of the week that the class meets (optional) 
•	Time that the class meets (optional) 
8.	Open Learning shall not allow an instructor to create courses until the instructor has been approved by an administrator.
9.	Open Learning shall allow an instructor to submit sample course materials to all administrators for review.


Steps to Execute -

->Download and Install Wampserver from "http://www.wampserver.com/en/"
->Copy all the files From zip folder and paste it in wampserver/www/OpenLearning
->Now open web browser and type "localhost/OpenLearning/login.html"
->Have to register first and then login.