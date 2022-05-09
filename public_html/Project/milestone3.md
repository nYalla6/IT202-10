<table><tr><td> <em>Assignment: </em> IT202 Milestone 3 Shop Project</td></tr>
<tr><td> <em>Student: </em> Namitha Yalla(ny6)</td></tr>
<tr><td> <em>Generated: </em> 5/8/2022 11:56:30 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-010-S22/it202-milestone-3-shop-project/grade/ny6" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol>
<li>Checkout Milestone3 branch </li>
<li>Create a new markdown file called milestone3.md</li>
<li>git add/commit/push immediate</li>
<li>Fill in the milestone3.md link (from Milestone3) into the proposal.md file under each milestone3 feature</li>
<li>For each feature in the proposal add a related direct link to Heroku prod for a file related to it the feature</li>
<li>Fill in the below deliverables</li>
<li>At the end copy the markdown and paste it into milestone3.md</li>
<li>Add/commit/push the changes to Milestone3</li>
<li>PR Milestone3 to dev and verify</li>
<li>PR dev to prod and verify</li>
<li>Checkout dev locally and pull changes to get ready for Milestone 4</li>
<li>Submit the direct link to this new milestone3.md file from your GitHub prod branch to Canvas</li>
</ol>
<p>Note: Ensure all images appear properly on GitHub and everywhere else.
Images are only accepted from dev or prod, not localhost.
All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod). </p>
</td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> User will be able to purchase their cart </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the Orders table with valid data in it</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://user-images.githubusercontent.com/98120848/167320366-c19636c9-58f1-4cf1-9090-2144a7de5680.png">https://user-images.githubusercontent.com/98120848/167320366-c19636c9-58f1-4cf1-9090-2144a7de5680.png</a> </td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of OrderItems table with validate data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/167320419-5cebd4c0-4eea-46a0-9669-99a0a646ee17.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of the order items data<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the purchase form UI from Heroku</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/167320471-233d6547-6aae-464a-9bb1-5a1d5dc39497.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Checkout form screenshot<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot of the purchase validation code (ensure your ucid and date are included) (Payment method, purchase value, shipping info)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/167320561-882739e8-2a80-4438-9a5d-b561276b89e2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This code validates the zipcode as a five digit number and checks that<br>the address is in the format (number street and some common street id<br>(ave, rd, blvd)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a screenshot showing the Order Process validations from the UI (Price check, Quantity/Stock check)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/167320588-54c410cf-f4e7-41ef-81a8-bd8a82103fbd.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Checks that the payed amount is equal to or greater than the purchase<br>price<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/167320644-87bf709e-f8fe-46d5-8610-e251de44caf9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Checks that there is enough stock<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 6: </em> Briefly describe the code flow/process of the purchase process</td></tr>
<tr><td> <em>Response:</em> <p>In the purchase process I select from the cart and products table where<br>the user ID matches to get all of the products, their names, prices,<br>and stock. Then I get the form data which includes the amount paid,<br>payment method, and address in parts, and I get the ID using the<br>get_user_id method. Then I concatenate the address before inserting it into the orders<br>table. Before inserting I perform some checks on the price vs money received<br>and the stock vs desired quantity. If there is no error the order<br>table records the id, payment type, payment amount, and address using the add_order<br>method. Then I select the Id from the orders table to insert it<br>into the order_items table, which includes a list of the same attributes as<br>cart but includes order_id as well. After the orders and order_items tables were<br>successfully completed, I decrease the stock amount by 1 in the products table.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 7: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nYalla6/IT202-10/pull/92">https://github.com/nYalla6/IT202-10/pull/92</a> </td></tr>
<tr><td> <em>Sub-Task 8: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="http://ny6-prod.herokuapp.com/Project/order.php?">http://ny6-prod.herokuapp.com/Project/order.php?</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Order Confirmation Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshot showing the order details from the purchase form and the related items that were purchased with a thank you message</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/167320950-1a5dbf7f-ddb6-4224-afa9-cac3fc556abc.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Order confirmation page, with the thank you message<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly explain how this information is retrieved and displayed from a code logic perspective</td></tr>
<tr><td> <em>Response:</em> <p>I select the information from the orders table where the user id matches.<br>Then I get the order ID using the $GET method from the url,<br>since I send that information with it. I save the results of the<br>order_items retrieval to an array and then in the html I parse through<br>each element to display it.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nYalla6/IT202-10/pull/93">https://github.com/nYalla6/IT202-10/pull/93</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ny6-prod.herokuapp.com/Project/order_confirmation.php?id=10">https://ny6-prod.herokuapp.com/Project/order_confirmation.php?id=10</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> User will be able to see their Purchase History </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing purchase history for a user</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/167321089-15084da1-37c8-449f-afa4-00651b3f8332.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Image of the order history tab, which shows all previous purchases<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing full details of a purchase (Order Details Page)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/167321112-c8e17695-0bc3-46b4-9cfa-f423a2791880.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Order details page, has no thank you message, and also has the order<br>id in the url<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain the logic for showing the purchase list and click/displaying the Order Details</td></tr>
<tr><td> <em>Response:</em> <p>I selected all the relevant information (total price, address, payment method) from the<br>order table, where the user id matches. Then I used the $GET method<br>to get the order_id from the URL.  I selected from the order_items<br>table where the order_id matches. Then similar to the order confirmation page, I<br>iterated through each item in the results and displayed it as a card.<br>In fact, most of the layout for this page is copied from the<br>confirmation page.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nYalla6/IT202-10/pull/95">https://github.com/nYalla6/IT202-10/pull/95</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ny6-prod.herokuapp.com/Project/order_details.php?id=8">https://ny6-prod.herokuapp.com/Project/order_details.php?id=8</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ny6-prod.herokuapp.com/Project/order_history.php">https://ny6-prod.herokuapp.com/Project/order_history.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Store Owner Purchase History </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing purchase history from multiple users</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/167329097-78f7450e-0ed3-47d2-9e33-d8b29a868a50.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of order history from shop_owner&#39;s perspective<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing full details of a purchase (Order Details Page) (from a user that's not the Store Owner)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/167329232-e89d7d21-2448-4f2b-ab11-1c9cf43f6d3c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Order details from a user that&#39;s not store owner<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain the logic for showing the purchase list and click/displaying the Order Details (mostly how it differs from the user's purchase history feature)</td></tr>
<tr><td> <em>Response:</em> <p>The purchase list for the shop owner is mostly the same, however, I<br>use the has_role() function at the beginning to change the query and params<br>array to nothing. In the user history, it would store the query when<br>user-id matched, but with that removed, it shows the entire table.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nYalla6/IT202-10/pull/96">https://github.com/nYalla6/IT202-10/pull/96</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ny6-prod.herokuapp.com/Project/order_history.php">https://ny6-prod.herokuapp.com/Project/order_history.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Proposal.md </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em>  Add screenshots showing your updated proposal.md file with checkmarks, dates, and link to milestone3.md accordingly and a direct link to the path on Heroku prod (see instructions)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/167337992-22ef36fc-b206-4105-9607-dabb8dba0584.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of the proposal MD with the links and dates<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone3 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/167336597-097677db-eb96-496e-b04f-57f566876fbd.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screen shot of all the completed issues in done <br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-010-S22/it202-milestone-3-shop-project/grade/ny6" target="_blank">Grading</a></td></tr></table>