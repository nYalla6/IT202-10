<table><tr><td> <em>Assignment: </em> IT202 Milestone1 Deliverable</td></tr>
<tr><td> <em>Student: </em> Namitha Yalla(ny6)</td></tr>
<tr><td> <em>Generated: </em> 4/3/2022 5:28:47 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-010-S22/it202-milestone1-deliverable/grade/ny6" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol>
<li>Checkout Milestone1 branch</li>
<li>Create a milestone1.md file in your Project folder</li>
<li>Git add/commit/push this empty file to Milestone1 (you&#39;ll need the link later) </li>
<li>Fill in the deliverable items<ol>
<li>For the proposal.md file use the direct link to milestone1.md from the Milestone1 branch for all of the features  </li>
<li>For each feature, add a direct link (or links) to the expected file the implements the feature from Heroku Prod (I.e, <a href="https://mt85-prod.herokuapp.com/Project/register.php">https://mt85-prod.herokuapp.com/Project/register.php</a>)</li>
</ol>
</li>
<li>Ensure your images display correctly in the sample markdown at the bottom</li>
<li>Save the submission items</li>
<li>Copy/paste the markdown from the &quot;Copy markdown to clipboard link&quot;</li>
<li>Paste the code into the milestone1.md file</li>
<li>Git add/commit/push the md file to Milestone1</li>
<li>Double check the images load when viewing the markdown file (points will be lost for invalid/non-loading images)</li>
<li>Make a pull request from Milestone1 to dev and merge it (resolve any conflicts)<ol>
<li>Make sure everything looks ok on heroku</li>
</ol>
</li>
<li>Make a pull request from dev to prod (resolve any conflicts) <ol>
<li>Make sure everything looks ok on heroku</li>
</ol>
</li>
<li>Submit the direct link from github prod branch to the milestone1.md file (no other links will be accepted and will result in 0)</li>
</ol>
</td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Feature: User will be able to register a new account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/161403070-5c83fae4-b019-4d56-a16e-43256a509c06.jpg"/></td></tr>
<tr><td> <em>Caption:</em> <p>Fields shown on the registration page are filled out.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/161403088-aa8bda38-df09-4adf-a11d-9246284c0199.jpg"/></td></tr>
<tr><td> <em>Caption:</em> <p>Submission of the previous screenshot is a success<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/161405224-b2e813a4-ea99-4105-9890-1d0d011718c5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>When the email is already in the table, warning error pops up saying<br>email is already used<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/161405239-c99bc2cc-41a4-4930-9438-f2f27544e41e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>When the username is already used, warning error pops up saying username is<br>already used<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the Users table with data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/161404136-bf21b84e-d409-4448-bb41-279344247c6a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The users data table, with the data (username, id, email, and password hashed)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nYalla6/IT202-10/pull/14">https://github.com/nYalla6/IT202-10/pull/14</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>The HTML section of it, defines the format of the input. There&#39;s email,<br>of type email, password and confirm password which is of type password, and<br>username which is of type text. In the register.php, we have the PHP<br>validation, which gets the data using the se function. We then sanitize the<br>data, and check if email is empty or invalid, if username is invalid,<br>and if password and confirm password don&#39;t match. The corresponding appropriate message is<br>then flashed and hasError is set to true. If there are no errors,<br>then we add the data to the users table. To make sure that<br>the form didn&#39;t clear completely on submit, I inserted php code to set<br>email and username to their previous value and empty otherwise.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Feature: User will be able to login to their account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/161405382-ad74adac-a1c6-4a06-86f4-f0d7ad37f139.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Image of the login page, with the correct input fields<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/161405438-d1eadca7-96f0-48d3-91f5-3898ea8e775f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Image of unsuccessful login because password doesn&#39;t match<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/161405478-9eba8e2a-1780-453f-8fad-df8a99f15887.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Image of error because account doesn&#39;t exist with the invalid test case shown<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of successful login</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/161405705-4d7b35ad-d5c0-48e6-908a-cf5be02b2ab7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Image of what happens after successful login: flash message pops up, and redirected<br>to home page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nYalla6/IT202-10/pull/15">https://github.com/nYalla6/IT202-10/pull/15</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nYalla6/IT202-10/pull/42">https://github.com/nYalla6/IT202-10/pull/42</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>Similar to register, first comes the html with the structural layout of the<br>form. Then I have the java script in the script tag that checks<br>for the email regex for the email/username if the entry has an &#39;@&#39;.<br> In the php we get the input that&#39;s in email and password<br>and check. It checks if its a valid email or username, and after<br>we get the database, checks if it is an entry.  We also<br>check the password after the account name is valid. In this step we<br>also save the roles to the session, if they have one. At every<br>step of the way if there is any error then there will be<br>a flash message that tells the user what is wrong.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Feat: Users will be able to logout </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the successful logout message</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/161406877-41d6efc8-c8a4-43da-a632-304430abd29a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Image of a successful logout. Redirects you to the login page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the logged out user can't access a login-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/161406898-82cbea92-108b-4adc-a6d5-f9807f09214a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>When I manually typed in the home.php this was the error that I<br>got.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nYalla6/IT202-10/pull/15">https://github.com/nYalla6/IT202-10/pull/15</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>The updated version of logout, resets the session according to the  function<br>in the lib folder. This will unset, destroy, and start a new one<br>where the user is directed to the login page by setting the header<br>location to login page.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Feature: Basic Security Rules Implemented / Basic Roles Implemented </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the logged out user can't access a login-protected page (may be the same as similar request)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/161406898-82cbea92-108b-4adc-a6d5-f9807f09214a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>When I manually typed in the home.php this was the error that I<br>got.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing a user without an appropriate role can't access the role-protected page (a test/dummy page is fine)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/161441203-9cae083c-174e-47e5-82f1-d75c428e8e2b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>What happens when a non-admin user tries to access the admin folder&#39;s list_roles<br>page. A flash message appears saying that the user doesn&#39;t have the necessary<br>permissions.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the Roles table with data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/161441498-c8b441eb-886f-416b-9b29-b8ef2f9fd6fd.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The Roles table, has only one admin role.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot of the UserRoles table with data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/161441526-bac4b7e1-cc15-487b-86a7-0eb6b13a2e51.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>UserRoles table, maps the user with id 2, to the admin role<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add the related pull request(s) for these features</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nYalla6/IT202-10/pull/38">https://github.com/nYalla6/IT202-10/pull/38</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nYalla6/IT202-10/pull/39">https://github.com/nYalla6/IT202-10/pull/39</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Explain briefly how the process/code works for login-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>At the beginning of the home page code, we call a function called<br>is_logged_in, and only if it returns true, is the user allowed access to<br>this page. This is logged-in function makes use of the session variable. If<br>the user is not logged in and the redirect is set to true,<br>then a  warning is flashed, and the user is redirected to the<br>login page.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 7: </em> Explain briefly how the process/code works for role-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>Similarly to the login protected, we have the has_role(&quot;role name&quot;) to check if<br>the user has the specified role at the beginning of the admin protected<br>pages. This function checks if the user is logged in and uses the<br>session data to determine if the user has the role the same as<br>the role that was specified.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Feature: Site should have basic styles/theme applied; everything should be styled </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots to show examples of your site's styles/theme</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/161441875-efc49069-087c-4157-a55c-bd15eeeb7dc7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of the home page. When the mouse is hovering on one of<br>the navigation links, the box shadow goes away. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/161441935-b03f0e1c-46cd-4d65-8d26-15ad15d41ec7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Image of the login page, with the layout and form input styled.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nYalla6/IT202-10/pull/40">https://github.com/nYalla6/IT202-10/pull/40</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nYalla6/IT202-10/pull/41">https://github.com/nYalla6/IT202-10/pull/41</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain your CSS at a high level</td></tr>
<tr><td> <em>Response:</em> <p>I changed the alert info color to be a light purple and changed<br>the background from bright pink to a pastel blue. I changed the font<br>color to dark blue instead of black. I gave the navigation links a<br>box-shadow, but that disappears when a user hovers. Also, I liked the roundedness<br>of the input forms as opposed to harsh edges, so I kept the<br>border-radius but made it very small instead. I also created a layout that<br>aligned the input fields.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Feature: Any output messages/errors should be "user friendly" </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of some examples of errors/messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/161406898-82cbea92-108b-4adc-a6d5-f9807f09214a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Error message when the user tries to access a login protected page<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/161405438-d1eadca7-96f0-48d3-91f5-3898ea8e775f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Invalid password error, when trying to login<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/161405478-9eba8e2a-1780-453f-8fad-df8a99f15887.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Account doesn&#39;t exist error message<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a related pull request</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nYalla6/IT202-10/pull/16">https://github.com/nYalla6/IT202-10/pull/16</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nYalla6/IT202-10/pull/18">https://github.com/nYalla6/IT202-10/pull/18</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how you made messages user friendly</td></tr>
<tr><td> <em>Response:</em> <p>In combination with the sanitizers that checked for validity in the lib folder,<br> when an error was detected an appropriate message was flashed instead of<br>echoed.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> Feature: Users will be able to see their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/161446300-b1e1caff-e852-4b90-8923-3b757e15a5d0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The user profile page, with username and email autofilled.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/161446369-cc5794be-8ff8-4120-8292-c3149a7b893a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Image of error when new username is not available<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nYalla6/IT202-10/pull/19">https://github.com/nYalla6/IT202-10/pull/19</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Explain briefly how the process/code works (view only)</td></tr>
<tr><td> <em>Response:</em> <p>For the initial form setup, we call get_username and get_email and insert PHP<br>into the value attribute of the email and username section. This allows for<br>the form to be filled with the current data and the user can<br>see what changes they want to make. The other input fields are left<br>blank.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> Feature: User will be able to edit their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page validation messages and success messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/161446951-22178852-42b1-45a7-92b4-dcff4055b3c4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The validation page when the username has been updated<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add before and after screenshots of the Users table when a user edits their profile</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/161404136-bf21b84e-d409-4448-bb41-279344247c6a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Users tables before the username has been changed<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/161447072-8941111f-f13a-4d4f-9fd6-f084ad31532e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Users table after the username for <a href="mailto:&#x74;&#x65;&#115;&#116;&#x33;&#x40;&#x67;&#x6d;&#x61;&#105;&#108;&#x2e;&#99;&#x6f;&#x6d;">&#x74;&#x65;&#115;&#116;&#x33;&#x40;&#x67;&#x6d;&#x61;&#105;&#108;&#x2e;&#99;&#x6f;&#x6d;</a> was changed (test3 to test4)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nYalla6/IT202-10/pull/20">https://github.com/nYalla6/IT202-10/pull/20</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nYalla6/IT202-10/pull/21">https://github.com/nYalla6/IT202-10/pull/21</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works (edit only)</td></tr>
<tr><td> <em>Response:</em> <p>Check if the user is already logged in first. Then we select the<br>data from the database to insert the new data into that space. .<br>If the save is successful, then a message will pop up saying the<br>update was successful. If the account doesn&#39;t exist, then an error will be<br>returned. The password is not preloaded (that&#39;s a security issue). We have three<br>password-type input fields. The original, the new and confirm new. The original will<br>check to see if it matches what&#39;s in the table and if that<br>is true<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Proposal and Issues </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing your updated proposal.md file with checkmarks, dates, and link to milestone1.md accordingly and a direct link to the path on heroku prod (see instructions)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/161449160-73f03cd4-e132-4a24-b6e8-f958fa368fa6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>When hovering over the Milestone1 link, the correct URL is shown in the<br>bottom left. Also includes some of the marked tasks.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/161449206-54108e89-0408-4f3f-95b4-aeeff4d354cf.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Includes more marked off tasks, (login to basic security rules)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/161449237-f51bb411-2190-405b-86b6-5677744e3902.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>More of the tasks that are marked off(Basic Roles to edit profile)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/161449292-2140558b-599b-4bbb-9a29-73148c9e90f0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Project board showing no issues in To Do or In Progress<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/161449321-fb317e04-5bd4-4b2c-b65d-3d98d88afbdc.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>More issues in done are shown (logout to see profile)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/161449352-dda3ca72-ae30-4fbb-afa4-6bb28db2ed1a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>More issues that are in done (register account to basic roles implemented)<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-010-S22/it202-milestone1-deliverable/grade/ny6" target="_blank">Grading</a></td></tr></table>