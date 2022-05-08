<table><tr><td> <em>Assignment: </em> IT202 Milestone 2 Shop Project</td></tr>
<tr><td> <em>Student: </em> Namitha Yalla(ny6)</td></tr>
<tr><td> <em>Generated: </em> 4/20/2022 7:36:44 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-010-S22/it202-milestone-2-shop-project/grade/ny6" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol>
<li>Checkout Milestone2 branch </li>
<li>Create a new markdown file called milestone2.md</li>
<li>git add/commit/push immediate</li>
<li>Fill in the milestone2.md link (from Milestone2) into the proposal.md file under each milestone2 feature</li>
<li>For each feature in the proposal add a related direct link to Heroku prod for a file related to it the feature</li>
<li>Fill in the below deliverables</li>
<li>At the end copy the markdown and paste it into milestone2.md</li>
<li>Add/commit/push the changes to Milestone2</li>
<li>PR Milestone2 to dev and verify</li>
<li>PR dev to prod and verify</li>
<li>Checkout dev locally and pull changes to get ready for Milestone 3</li>
<li>Submit the direct link to this new milestone2.md file from your GitHub prod branch to Canvas</li>
</ol>
<p>Note: Ensure all images appear properly on github and everywhere else.
Images are only accepted from dev or prod, not local host.
All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod). </p>
</td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Users with admin or shop owner will be able to add products </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of admin create item page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/164158792-0b27b421-2551-4135-af97-e336816f5f94.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Create Inventory page<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/164159244-f7d974ae-c923-49fb-8dc7-aff64a2d1d06.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>When updated with a new item<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/164159370-ca2b8050-f55a-4ba1-a95b-dafcfedfb168.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The error that appears if the correct permissions aren&#39;t there<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot of populated Products table clearly showing the columns</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/164159738-aeb72f9b-4f17-4b8b-aeb3-eea368e0b520.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The product table, updated with item 42<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly describe the code flow for creating a Product</td></tr>
<tr><td> <em>Response:</em> <p>First I checked for the correct roles. I save the data to an<br>array and then iterate through the array to get the data table&#39;s columns,<br>column names, and the values (for the form).   Then I used<br>the save_data method from the library in the PHP section to save it<br>to the Products table.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nYalla6/IT202-10/pull/73">https://github.com/nYalla6/IT202-10/pull/73</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ny6-prod.herokuapp.com/Project/admin/create_invent2.php">https://ny6-prod.herokuapp.com/Project/admin/create_invent2.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Any user can see visible products on the Shop Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the Shop page showing 10 items without filters/sorting applied</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/164162958-40c4293c-e635-4213-b28b-955eff9f2e49.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Page 1 of 4,  items of a user not logged in<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/164163077-05229965-bb79-43fa-975d-5f529435ff22.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Page 2 of 4, items listed for a user not logged in<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/164163277-8f7b4e2f-4451-41a7-824f-c84c4c4929b4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Page 3 of 4, items listed for a user not logged in<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/164163356-be1c9349-6939-450c-ab71-3ac1b88ef683.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Page 4 of 4, items listed for a user not logged in<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the Shop page showing both filters and a different sorting applied (should be more than 1 sample product)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/164341516-13b359c8-edb7-4bb3-af92-800cc74ac302.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Page 1 of 2, items sorted under the toys filter<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/164341541-0f2704b1-f7fd-408a-b15e-8be371f4456f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Page 2 of 2, items sorted under the toys filter<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the filter/sort logic from the code (ensure ucid and date is shown)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/164285982-4fdeff4e-065e-4d53-b207-b052886ae717.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This is the form that accepts data from the user, and we use<br>the GET method to retrieve the data.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/164286498-5818b317-81e5-48f8-807e-334385206db7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This is the query that is used to sort based on name, category,<br> or ascending/descending order based on price.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly explain how the results are shown and how the filters are applied</td></tr>
<tr><td> <em>Response:</em> <p>The filters are applied dynamically based on the form results. If the name<br>is partially input, we look for a name in the Products table that<br>is like that name. If a particular category is selected, we look for<br>the matching category, and with Up or Down, we order based on price.<br>They are displayed based on the results array that is created based on<br>the above query. <br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nYalla6/IT202-10/pull/78">https://github.com/nYalla6/IT202-10/pull/78</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nYalla6/IT202-10/pull/80">https://github.com/nYalla6/IT202-10/pull/80</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ny6-prod.herokuapp.com/Project/home.php">https://ny6-prod.herokuapp.com/Project/home.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Show Admin/Shop Owner Product List (this is not the Shop page and should show visibility status) </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshot of the Admin List page/results</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/164289695-c8c71097-cdcf-4f1c-853c-9f706f6c3fdf.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of list items page, which is only available to Admin/Shop Owner<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly explain how the results are shown</td></tr>
<tr><td> <em>Response:</em> <p>I used the HTML tabling, to display the results. I used PHP to<br>iterate through the array of results that were produced by the DB-prepare statement<br>which got all of the required attributes (at first I forgot visibility). At<br>the beginning of the page, there is a form, which asks for a<br>category, if no category is given all the products are listed.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nYalla6/IT202-10/pull/79">https://github.com/nYalla6/IT202-10/pull/79</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ny6-prod.herokuapp.com/Project/admin/list_items.php">https://ny6-prod.herokuapp.com/Project/admin/list_items.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Admin/Shop Owner Edit button </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a sceenshot showing the edit button visible to the Admin on the Shop page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/164291795-d2da3c59-f085-4fe4-ad82-2597daa40685.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The edit button is visible to the admin (test2) on the home/shop page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a sceenshot showing the edit button visible to the Admin on the Product Details Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/164292447-5f971def-3766-4ee6-9275-b5268d131900.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The edit button is visible on the details page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a sceenshot showing the edit button visible to the Admin on the Admin Product List Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/164292821-a7ccd950-3829-4e64-a4b5-0f14b6dd205a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The admin list item page, showing the edit button<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a before and after screenshot of Editing a Product via the Admin Edit Product Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/164293227-37c29863-9c8a-4baf-9120-dd7926574f6b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The before editing Apple<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/164293407-3cfaf90d-e4ac-4fbe-b69d-30e9e80cf39a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Edited apple&#39;s description to &quot;a red fruit&quot; and stock to 600<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Briefly explain the code process/flow</td></tr>
<tr><td> <em>Response:</em> <p>In the form, I use a foreach loop to iterate through all of<br>the columns in the results array to display the column name and fill<br>in their current value.  Then when the update (submit) button is clicked,<br>I call the update_data functions page that is in the lib folder. First,<br>the current values are unset, and then dynamically updated via the query variable<br>where id = id.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nYalla6/IT202-10/pull/79">https://github.com/nYalla6/IT202-10/pull/79</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nYalla6/IT202-10/pull/81">https://github.com/nYalla6/IT202-10/pull/81</a> </td></tr>
<tr><td> <em>Sub-Task 7: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ny6-prod.herokuapp.com/Project/admin/edit_item.php?id=1">https://ny6-prod.herokuapp.com/Project/admin/edit_item.php?id=1</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Product Details Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the button (clickable item) that directs the user to the Product Details Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/164294986-ea3b7d8a-6fe3-452f-8ed6-b9b44a4123b7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shop page, showing the details clickable item<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the result of the Product Details Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/164295159-dc595a89-ae30-48b8-8fc0-ad54d6fab4e9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>When more details is clicked on Orange, the details about orange product is<br>shown<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain the code process/flow</td></tr>
<tr><td> <em>Response:</em> <p>Each product was linked to details.php with its unique id. Then the details<br>page would populate the card with the information where id = its id.<br>I again used a foreach loop to iterate through all the attribute columns.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nYalla6/IT202-10/pull/81">https://github.com/nYalla6/IT202-10/pull/81</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file (can be any specific item)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ny6-prod.herokuapp.com/Project/details.php?id=42">https://ny6-prod.herokuapp.com/Project/details.php?id=42</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Add to Cart </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the success message of adding to cart</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/164296003-fe847e11-bc26-49e0-a691-e68b9f37389d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Success message flashed when adding Orange to cart<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the error message of adding to cart (i.e., when not logged in)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/164296114-b5a8a60f-2acc-4ae4-9146-b9e65c0b4c90.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Not logged in error message flashing, when a user tries to add to<br>cart if not logged in<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the Cart table with data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/164296462-d91f6f7d-267f-43c9-9129-8c2c7da27ce9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Cart with objects from two different users<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Tell how your cart works (1 cart per user; multiple carts per user)</td></tr>
<tr><td> <em>Response:</em> <p>My cart has multiple users, so the item and user id is a<br>composite key.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Explain the process of add to cart</td></tr>
<tr><td> <em>Response:</em> <p>When the Buy button on the card is pressed it sends a POST<br>to the add_to_cart in the api folder. Here we bind the item id,<br>quantity (quantity  + 1 if it is a duplicate item_id), and user<br>id and try to insert them into the cart, if it succeeds, a<br>success message populates, otherwise the appropriate error is displayed.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nYalla6/IT202-10/pull/82">https://github.com/nYalla6/IT202-10/pull/82</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> User will be able to see their Cart </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the Cart View (show subtotal, total, and the link to Product Details Page)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/164333873-8d655f8e-fc3f-4775-ad11-a1cef5a6027b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Image of cart with subtotal, total, and a link to product details page<br>for each product<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explain how the cart is being shown from a code perspective along with the subtotal and total calculations</td></tr>
<tr><td> <em>Response:</em> <p>The cart is defined using the javascript function in cart.php. Then I create<br>a table element in the inner HTML.  Then I create a variable<br>for the total before creating the HTML elements for the table body. I<br>iterate through the data.data (which is all of the columns from the Carts.<br> Subtotal is stored as unit_price*quantity. The total adds each subtotal to itself<br>during every iteration. To display the total with the correct formatting, however, <br>I had to use a parseFloat and specify a decimal place at the<br>very end.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nYalla6/IT202-10/pull/82">https://github.com/nYalla6/IT202-10/pull/82</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ny6-prod.herokuapp.com/Project/home.php">https://ny6-prod.herokuapp.com/Project/home.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> User can update cart quantity </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Show a before and after screenshot of Cart Quantity update</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/164333873-8d655f8e-fc3f-4775-ad11-a1cef5a6027b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Before updating the quantity<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/164335386-64877d89-dffc-4736-819d-2c1480330fd5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Updated oranges from quantity 1 to quantity 3<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Show a before and after screenshot of setting Cart Quantity to 0</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/164335386-64877d89-dffc-4736-819d-2c1480330fd5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Before setting oranges to 0<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/164335494-e03975e2-e14c-4f3a-8807-67920da104db.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>After setting oranges to 0, it is deleted from Cart<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Show how a negative quantity is handled</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/164335893-5a357630-3a43-40dc-9c49-41f70adeeae5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>When a negative 1 is entered, the image shows an error updating cart,<br>and leaves the last entered data<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain the update process including how a value of 0 and negatives are handled</td></tr>
<tr><td> <em>Response:</em> <p>There was a check in the SQL table itself to check that the<br>quantity was greater than 0, so for negative values, I didn&#39;t add anything<br>else. However, for the quantity of 0, deletion of that item was needed.<br>So in the PHP of the cart, I got the quantity submitted and<br>if it was zero the stmt that was executed was a delete from<br>the table where the id matched.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nYalla6/IT202-10/pull/83">https://github.com/nYalla6/IT202-10/pull/83</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Cart Item Removal </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a before and after screenshot of deleting a single item from the Cart</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/164337535-9e769ea3-2c00-4a89-80fe-333bea18c52d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Before deleting oranges<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/164337614-79d85998-311d-4938-83b8-5eb6177537ef.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>after deleting only oranges<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a before and after screenshot of clearing the cart</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/164337696-b31566cd-fbdd-4361-8f69-b0deba0c7e7d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Image of before clearing cart<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/164337946-25d4fedc-1d4a-4364-a4c1-2310fdfb3956.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Image of after clearing cart<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how each delete process works</td></tr>
<tr><td> <em>Response:</em> <p>For deleting a single item, the PHP checks that the item id and<br>user id are matching. However to clear the entire cart I will only<br>check that the user id matches,  so it will delete all items<br>with that user_id<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <em>Response:</em> <p><a href="https://github.com/nYalla6/IT202-10/pull/82">https://github.com/nYalla6/IT202-10/pull/82</a><br><a href="https://github.com/nYalla6/IT202-10/pull/83">https://github.com/nYalla6/IT202-10/pull/83</a><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 10: </em> Proposal.md </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em>  Add screenshots showing your updated proposal.md file with checkmarks, dates, and link to milestone1.md accordingly and a direct link to the path on Heroku prod (see instructions)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/164340632-6829f476-c271-48a7-bcf5-278e35b3d093.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Image of checked boxes (1)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/164340705-54bbf831-cfd5-4cf2-a953-20f262d97b0a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Image of checked boxes (2)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone2 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/164340846-483a05ba-5a06-427e-a2d7-18bca16b9c2f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Image 1 of the closed issues<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/164340933-8bf9429b-3c1f-4598-9f15-a5572677a6c2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Image 2 of the closed issues<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120848/164340978-d2fbd7e2-5260-46b4-99d0-ad6af6067f2c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Image 3 of the closed issues, also shows that none are incomplete<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-010-S22/it202-milestone-2-shop-project/grade/ny6" target="_blank">Grading</a></td></tr></table>