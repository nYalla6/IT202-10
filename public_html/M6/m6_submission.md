<table><tr><td> <em>Assignment: </em> HW HTML5 Canvas Game</td></tr>
<tr><td> <em>Student: </em> Namitha Yalla(ny6)</td></tr>
<tr><td> <em>Generated: </em> 3/27/2022 4:36:52 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-010-S22/hw-html5-canvas-game/grade/ny6" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol>
<li>Create a branch for this assignment called <em>M6-HTML5-Canvas</em></li>
<li>Pick a base HTML5 game from <a href="https://bencentra.com/2017-07-11-basic-html5-canvas-games.html">https://bencentra.com/2017-07-11-basic-html5-canvas-games.html</a></li>
<li>Create a folder inside public_html called  <em>M6</em></li>
<li>Create an html5.html file in your M6 folder (do not put it in Project even if you&#39;re doing arcade)</li>
<li>Copy one of the base games (from the above link)</li>
<li>Add/Commit the baseline of the game you&#39;ll mod for this assignment <em>(Do this before you start any mods/changes)</em></li>
<li>Make two significant changes<ol>
<li>Static changes like hard-coded colors/values will not count at all (i.e., changing shapes/colors/values that are globally defined and set only once.</li>
<li>Direct copies of my class example changes will not be accepted (i.e., just having an AI player for pong, rotating canvas, or multi-ball unless you make a significant tweak to it)</li>
<li>Significant changes are things that change with game logic or modify how the game works. Static changes like hard-coded colors/values will not count at all (i.e., changing shapes/colors/values that are globally defined and set only once). You may however change such values through game logic during runtime. (i.e., when points are scored, boundaries are hit, some action occurs, etc)</li>
</ol>
</li>
<li>Evidence/Screenshots<ol>
<li>As best as you can, gather evidence for your first significant change and fill in the deliverable items below.</li>
<li>As best as you can, gather evidence for your significant change and fill in the deliverable items below.</li>
<li>Remember to include your ucid/date as comments in any screenshots that have code</li>
<li>Ensure your screenshots load and are visible from the md file in step 9</li>
</ol>
</li>
<li>In the M6 folder create a new file called m6_submission.md</li>
<li>Save your below responses, generate the markdown, and paste the output to this file</li>
<li>Add/commit/push all related files as necessary</li>
<li>Merge your pull request once you&#39;re satisfied with the .md file and the canvas game mods</li>
<li>Create a new pull request from dev to prod and merge it</li>
<li>Locally checkout dev and pull the merged changes from step 12</li>
</ol>
<p>Each missed or failed to follow instruction is eligible for -0.25 from the final grade</p>
</td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Game Info </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> What game did you pick to edit/modify?</td></tr>
<tr><td> <em>Response:</em> <p>I chose to modify Eat the Square game.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the direct link to the html5.html file from Heroku Prod (i.e., https://mt85-prod.herokuapp.com/M6/html5.html)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href=" https://ny6-prod.herokuapp.com/M6/html5.html"> https://ny6-prod.herokuapp.com/M6/html5.html</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the pull request link for this assignment from M6-HTML5-Canvas to dev</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nYalla6/IT202-10/pull/36">https://github.com/nYalla6/IT202-10/pull/36</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Significant Change #1 </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Describe your change/modification</td></tr>
<tr><td> <em>Response:</em> <p>I added an enemy square, which is purple, that when collided with, reduces<br>the score by 2. I used the target square variable and move method<br>as a template, created similar variables and move methods, and called the check<br>to collide immediately after the target square check.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Screenshot of the change while playing (try your best as some changes may be nearly impossible to capture)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/160298739-5dd3a012-214f-4e72-9664-ae8dbf061aec.jpg"/></td></tr>
<tr><td> <em>Caption:</em> <p>A picture that shows that the enemy square pops up.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/160298764-ba6beed8-220c-450f-a118-89e52e7b3f3d.jpg"/></td></tr>
<tr><td> <em>Caption:</em> <p>This image shows the score has been reduced by 2. Also shows that<br>by colliding with the enemy square, the target and enemy square are repopulated.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Screenshot of the relevant lines of code that implement your change (make sure your ucid and the date are shown in comments) In the caption briefly describe/explain how the code snippet works.</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/160299287-4e4b229f-57e9-41b1-b167-2ac1780c1616.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This is the moveEnemy function, which is almost exactly the same as the<br>moveTarget, except the variables are for the enemy square. It is called to<br>repopulate the enemy square at a new location, and the updated code keeps<br>it within bounds.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/160299348-290d99f6-a39f-40eb-a358-a3ddd8b3a8c2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This snippet of code shows that when either the target or the enemy<br>square is hit, both are repopulated. This is to make the game a<br>little bit harder. Also the score is decreased by 2 here. We can<br>also see that a moveSnitch is being called but that is part of<br>the second significant change.<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Significant Change #2 </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Describe your change/modification</td></tr>
<tr><td> <em>Response:</em> <p>My second significant change is adding a small golden square (called the golden<br>snitch), that only appears after the eleven-second mark. It increases the speed of<br>the square by 4, and can only be obtained once per game. <br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Screenshot of the change while playing (try your best as some changes may be nearly impossible to capture)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/160299013-41641645-138a-46cd-810a-0fe6c2bbf86a.jpg"/></td></tr>
<tr><td> <em>Caption:</em> <p>This is a picture of the golden snitch populating after the 11-second mark.<br><br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Screenshot of the relevant lines of code that implement your change (make sure your ucid and the date are shown in comments) In the caption briefly describe/explain how the code snippet works.</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/160299591-672a3bb0-de4a-4b46-91b6-08b1ea5f3e1a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This is the move snitch function, it is the exact same as the<br>moveEnemy function, but the X, Y, and Length variables are that of the<br>golden snitch.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/160299647-991e0c95-a4ee-447e-acba-aa3e10c22569.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This is the collide with the snitch function. It checks only if spawn<br>is true, meaning that the player has not already claimed the snitch. If<br>the user has not claimed the snitch, it sets spawn to false, so<br>they cannot grab it again, and increases the speed by 4.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/160299687-cb8ee8ce-daed-4c04-bdeb-04c318073000.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This piece of code is to show that the snitch is shown on<br>the board only after the 11 second mark and only if the user<br>has not previously claimed the snitch.<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Discuss </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Talk about what you learned during this assignment and the related HTML5 Canvas readings (at least a few sentences for full credit)</td></tr>
<tr><td> <em>Response:</em> <p>I learned about how to animate different features of the game, through constant<br>looping of the canvas frames. Also, I learned that because of how these<br>shapes are drawn by the context, it is important to take precautions with<br>the random populating to make sure they appear within the frame. By modifying<br>the Eat the Square game, I was able to work with the countdown<br>variable and see how that worked as well.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-010-S22/hw-html5-canvas-game/grade/ny6" target="_blank">Grading</a></td></tr></table>