<table><tr><td> <em>Assignment: </em> M2 PHP-HW</td></tr>
<tr><td> <em>Student: </em> Namitha Yalla(ny6)</td></tr>
<tr><td> <em>Generated: </em> 2/12/2022 7:26:31 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-010-S22/m2-php-hw/grade/ny6" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <p>Make sure you have the dev/prod branches created before starting this assignment.</p>
<p>Setup steps:</p>
<ol>
<li><code>git checkout dev</code> </li>
<li><code>git pull origin dev</code></li>
<li><code>git checkout -b M2-PHP-HW</code></li>
</ol>
<p>You&#39;ll have 3 problems to save for this assignment.</p>
<p>Each problem you&#39;re given a template <strong>Do not edit anything in the template except where the comments tell you to</strong>.</p>
<p>The templates are done in such a way to make it easier to capture the output in a screenshot (if it&#39;s still not able to fit well, you can zoom out in your browser).</p>
<p>You&#39;ll copy each template into their own separate .php files, immediately git add, git commit these files (you can do it together) so we can capture the difference/changes between the templates and your additions. This part is required for full credit.</p>
<p>HW steps:</p>
<ol>
<li>Open VS Code at the root of your repository folder (you should see the Procfile and all from the Heroku setup)</li>
<li>In VS Code create a new folder/directory in public_html called M2</li>
<li>Create 3 new files in this new M2 folder (problem1.php, problem2.php, problem3.php)</li>
<li>Paste each template into their respective files</li>
<li><code>git add .</code></li>
<li><code>git commit -m &quot;adding template baselines</code></li>
<li>Do the related work (you may do steps 8 and 9 as often as needed or you can do it all at once at the end)</li>
<li><code>git add .</code></li>
<li><code>git commit -m &quot;completed hw&quot;</code></li>
<li>When you&#39;re done push the branch<ol>
<li><code>git push origin M2-PHP-HW</code></li>
</ol>
</li>
<li>Go to heroku dev, and manually deploy the M2-PHP-HW branch</li>
<li>After it deploys go to <a href="https://ucid-dev.herokuapp.com/M2/problem1.php">https://ucid-dev.herokuapp.com/M2/problem1.php</a> (replace ucid with your ucid if you followed the setup instructions)</li>
<li>Update the URL to check that each problem file displays properly</li>
<li>Create the Pull Request with <strong>dev</strong> as base and <strong>M2-PHP-HW</strong> as compare</li>
<li>Create a new file in the M2 folder in VS Code called m2_submission.md</li>
<li>Fill out the below deliverable items, save the submission, and copy to markdown<ol>
<li>For this assignment you may get screenshots from your heroku dev instance, you do not need to move it to prod then come back and update it</li>
</ol>
</li>
<li>Paste the markdown into the m2_submission.md</li>
<li>add/commit/push the md file<ol>
<li><code>git add m2_submission.md</code></li>
<li><code>git commit -m &quot;adding submission file&quot;</code></li>
<li><code>git push origin M2-PHP-HW</code></li>
</ol>
</li>
<li>Merge the pull request from step 14</li>
<li>Create a new pull request with prod as base and dev as compare</li>
<li>Immediately create/merge/confirm, this is just to deploy it to prod and you don&#39;t need to adjust anything during this step</li>
<li>On your local machine sync the changes<ol>
<li><code>git checkout dev</code></li>
<li><code>git pull origin dev</code></li>
</ol>
</li>
<li>Submit the link to the m2_submission.md file from the prod branch to Canvas</li>
</ol>
<p><strong>Template Files</strong>
You can find all 3 template files in this gist: <a href="https://gist.github.com/MattToegel/48b48377eaa1937c886b7840c449750a">https://gist.github.com/MattToegel/48b48377eaa1937c886b7840c449750a</a> </p>
</td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Problem 1 - Only output Odd values of the Array under "Odds output" </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Clearly screenshot the output of Problem 1 showing the data and the code output in the proper part of the page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/153732436-4d152017-f1d6-49d3-8ec4-357dafdf2956.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Problem 1 Output From Heroku<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Describe how you solved the problem</td></tr>
<tr><td> <em>Response:</em> <p>The problem asked to output only the odd values. I created a foreach<br>loop iterating through the given array and checked the remainder when divided by<br>2. If the remainder was equal to 1, then I echoed it. <br><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Problem 2 - Only output the sum/total of the array values by assigning it to the $total variable (the number must end in 2 decimal places, if it ends in 1 it must have a 0 at the end) </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Clearly screenshot the output of Problem 2 showing the data and the code output in the proper part of the page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/153732523-28d61a80-e978-44b7-b4c0-3d49bdd71b56.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Problem 2 Output from Heroku<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Describe how you solved the problem</td></tr>
<tr><td> <em>Response:</em> <p>First I created a foreach loop that iterated through the given array and<br>added the numbers to $total. Next, I rounded the number to the hundredths<br>place using the round method given in PHP. I saw that for the<br>third array it was not outputting 0.10, so I used the number_format method<br>to always display 2 decimal places.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Problem 3 - Output the given values as positive under the "Positive Output" message (the data otherwise shouldn't change) </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Clearly screenshot the output of Problem 3 showing the data and the code output in the proper part of the page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/153732647-398624d3-358a-4595-a3e6-6599986e1bc2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Problem 3 Output from Heroku<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Describe how you solved the problem</td></tr>
<tr><td> <em>Response:</em> <p>I iterated through the array using a foreach loop. While iterating, I checked<br>if the current value was negative, and if it was I multiplied by<br>-1 to make it positive.  Then I echoed the current value in<br>the loop.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Misc Items </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add the prod URL for problem1.php (remember you can assume this based on how the domain gets built (i.e., ucid-prod.herokuapp.com/...)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ny6-prod.herokuapp.com/M2/problem1.php">https://ny6-prod.herokuapp.com/M2/problem1.php</a> </td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the prod URL for problem2.php (remember you can assume this based on how the domain gets built (i.e., ucid-prod.herokuapp.com/...)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ny6-prod.herokuapp.com/M2/problem2.php">https://ny6-prod.herokuapp.com/M2/problem2.php</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the prod URL for problem3.php (remember you can assume this based on how the domain gets built (i.e., ucid-prod.herokuapp.com/...)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ny6-prod.herokuapp.com/M2/problem3.php">https://ny6-prod.herokuapp.com/M2/problem3.php</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Pull Request URL for M2-PHP-HW to dev</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nYalla6/IT202-10/pull/7">https://github.com/nYalla6/IT202-10/pull/7</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Talk about what you learned, any issues you had, how you resolve them</td></tr>
<tr><td> <em>Response:</em> <p>The main issue I had was in problem 2 with formatting. To resolve<br>the formatting issues, I just googled methods that could be used to format<br>to 2 decimal places always, and found number_format. I tested it and it<br>worked pretty well with this assignment.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-010-S22/m2-php-hw/grade/ny6" target="_blank">Grading</a></td></tr></table>