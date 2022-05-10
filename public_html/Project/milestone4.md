<table><tr><td> <em>Assignment: </em> IT202 Milestone 4 Shop Project</td></tr>
<tr><td> <em>Student: </em> Namitha Yalla(ny6)</td></tr>
<tr><td> <em>Generated: </em> 5/10/2022 2:53:12 AM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-010-S22/it202-milestone-4-shop-project/grade/ny6" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol>
<li>Checkout Milestone4 branch </li>
<li>Create a new markdown file called milestone4.md</li>
<li>git add/commit/push immediate</li>
<li>Fill in the milestone4.md link (from Milestone4) into the proposal.md file under each milestone4 feature</li>
<li>For each feature in the proposal add a related direct link to Heroku prod for a file related to it the feature</li>
<li>Fill in the below deliverables</li>
<li>At the end copy the markdown and paste it into milestone4.md</li>
<li>Add/commit/push the changes to Milestone4</li>
<li>PR Milestone4 to dev and verify</li>
<li>PR dev to prod and verify</li>
<li>Checkout dev locally and pull changes</li>
<li>Submit the direct link to this new milestone4.md file from your GitHub prod branch to Canvas</li>
</ol>
<p>Note: Ensure all images appear properly on GitHub and everywhere else.
Images are only accepted from dev or prod, not localhost.
All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod). </p>
</td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> User can set their profile to public or private </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of new column on the Users table</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/167546802-26a885d4-58b1-4a7c-941d-c521006dd66b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of the visibility column added<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot of updated profile edit view</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/167550217-fb685d68-63c9-47ee-aaa8-b14bb4a2ef37.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Updated profile edit, has visibility as a toggle<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot of profile view view (ensure email isn't shown publicly)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/167550822-8f1c3731-e8ce-49e2-8e78-92cb3513d9f0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This is my user profile view<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/167558199-18db614a-7586-4cb4-9c1e-51e58bc17bff.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Error message saying that you cannot access a private username<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request(s) links</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nYalla6/IT202-10/pull/108">https://github.com/nYalla6/IT202-10/pull/108</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add direct link to a public profile from heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ny6-prod.herokuapp.com/Project/profile.php?id=22">https://ny6-prod.herokuapp.com/Project/profile.php?id=22</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Briefly explain the logic behind how public/private profile works</td></tr>
<tr><td> <em>Response:</em> <p>There is a public/private setting in the user&#39;s table which I can access<br>to see if the user is public or not. If they are not<br>but it is their ID that they are trying to access, then it<br>shows the profile. I use the isMe variable to track this. Also I<br>variable called isEdit to see if the user wants to edit their own<br>profile<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> User will be able to rate a product they purchased </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the Ratings table with some data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/167558676-9a79be95-05cb-4101-a325-ecf53b7a0c5b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Ratings table, with some data <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot of the Product Details page with comments/ratings and the form to add another and the average rating</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/167558872-034d6b8f-7f75-470a-aac3-85063837ef11.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This is an image of the product details, with ratings, however since this<br>user hasn&#39;t purchased it they can&#39;t rate it.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/167559047-d31bb664-ce2f-4f31-88f1-5d5ef8b25238.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This is a product that the user has purchased so they can rate<br>it.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot of the error message for a user trying to rate/comment that hasn't purchased the product</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/167561587-a8a7951e-f7dc-4bbb-8aca-5c7490316965.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>So the user has no access to the rate me button if they<br>haven&#39;t purchased it, but if they try &quot;hacking in&quot;, they get redirected to<br>the home page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nYalla6/IT202-10/pull/109">https://github.com/nYalla6/IT202-10/pull/109</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add link to a product details page with ratings/comments</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ny6-prod.herokuapp.com/Project/details.php?id=42">https://ny6-prod.herokuapp.com/Project/details.php?id=42</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Briefly explain the logic being adding comment/rating and validations</td></tr>
<tr><td> <em>Response:</em> <p>I validated the purchase by checking if that product id had been purchased<br>by the user id using an inner join between order and order_items and<br>then checking if the product id matches. If not the $purchase variable was<br>set to false. In the ratings.php it should give an error, and on<br>the other pages, the rating button would not appear. <br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> User's Purchase History Changes </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots demonstrating examples of the filters/pagination applied</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/167562039-d4b0a9b7-c27d-4fd5-8544-87304176e191.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Image of filters on order history, category: general, past day, time, order: desc<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nYalla6/IT202-10/pull/111">https://github.com/nYalla6/IT202-10/pull/111</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nYalla6/IT202-10/pull/112">https://github.com/nYalla6/IT202-10/pull/112</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a link to the purchase history page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ny6-prod.herokuapp.com/Project/order_history.php">https://ny6-prod.herokuapp.com/Project/order_history.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Store Owner Purchase History Changes </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots demonstrating examples of the filters/pagination applied (ensure the calculated total price is clearly visible)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/167562496-5df3b0d4-f093-4a3a-80cd-d283b2f4f17e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Store Owner&#39;s order history, with the total spending at top<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nYalla6/IT202-10/pull/113">https://github.com/nYalla6/IT202-10/pull/113</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a link to the store owner's purchase history page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ny6-prod.herokuapp.com/Project/order_history.php">https://ny6-prod.herokuapp.com/Project/order_history.php</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly explain how the total price is calculated based on the filtered/paginated results</td></tr>
<tr><td> <em>Response:</em> <p>There is a variable that iterates through the total prices of all the<br>filtered items, which was done using a for each loop on the results.<br>It returns the value at the very top of the page.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Add pagination to Shop and any other product lists not covered </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot(s) of the newly paginated pages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/167562905-8590e10d-233b-4cfa-918c-349676ca38b0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of the ratings paginated <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nYalla6/IT202-10/pull/113">https://github.com/nYalla6/IT202-10/pull/113</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add links to related pages</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ny6-prod.herokuapp.com/Project/details.php?id=2">https://ny6-prod.herokuapp.com/Project/details.php?id=2</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Store Owner will be able to see all products out of stock </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the out of stock results</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/167563048-e7b9beda-d9c7-44b3-badb-d9b2ea037b78.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of list_items, only showing apples, which are stock 0 so out of<br>stock<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nYalla6/IT202-10/pull/115">https://github.com/nYalla6/IT202-10/pull/115</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add links to related page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ny6-prod.herokuapp.com/Project/admin/list_items.php?itemName=&stock=0">https://ny6-prod.herokuapp.com/Project/admin/list_items.php?itemName=&stock=0</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly explain your approach to this view</td></tr>
<tr><td> <em>Response:</em> <p>I used a filter similar to the other pages (shop, user products, order_history)<br>and then also added a quantity check. This meant that the store owner<br>can check for quantity less than or equal to 0, which will return<br>all out-of-stock items.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> User can sort products by average rating on the shop page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing the sort in effect</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/167563710-00a8fa15-ba8d-4c92-84dc-0d6a36336af7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The shop page filtered using the rating filter, and then ordered desc.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot of the Products table (or your implementation/approach to average rating)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/167563834-2c790247-aefe-4ea7-b051-a79054c08546.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This image includes the avg_rating and num_rating additions to the product table. I<br>didn&#39;t actually end up using num_rating because I thought of an easier function,<br>but the additions remain.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nYalla6/IT202-10/pull/116">https://github.com/nYalla6/IT202-10/pull/116</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nYalla6/IT202-10/pull/109">https://github.com/nYalla6/IT202-10/pull/109</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add links to related page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ny6-prod.herokuapp.com/Project/home.php?name=&category=&col=avg_rating&order=desc">https://ny6-prod.herokuapp.com/Project/home.php?name=&category=&col=avg_rating&order=desc</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Briefly explain how you implemented the average rating recording logic and how it applies to this sort on sho</td></tr>
<tr><td> <em>Response:</em> <p>I saved the products and their avg_rating, which is an attribute they have<br>from the products table. Then when I filtered it from shop page, I<br>used a $_GET method and desc would order it from the most rated<br>to the least, and asc would order from the least to the most<br>rated. <br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> Proposal.md </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em>  Add screenshots showing your updated proposal.md file with checkmarks, dates, and link to milestone4.md accordingly and a direct link to the path on Heroku prod (see instructions)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/167566220-9a2b74bf-2cca-459a-988d-73e199d8b5fa.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>proposal file from the prod, has the checked boxes, dates, and links<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone4 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/167565800-98baa71f-dc06-4074-8006-014e1a8a2ac1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>no more issues to or in progress, all are completed<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-010-S22/it202-milestone-4-shop-project/grade/ny6" target="_blank">Grading</a></td></tr></table>