# Project Name: Simple Shop
## Project Summary: This project will create a simple e-commerce site for users. Administrators or store owners will be able to manage inventory and users will be able to manage their cart and place orders.
## Github Link: (Prod Branch of Project Folder)
## Project Board Link: 
## Website Link: (Heroku Prod of Project folder)
## Your Name: Namitha Yalla

<!-- Line item / Feature template (use this for each bullet point) -- DO NOT DELETE THIS SECTION


- [ ] \(mm/dd/yyyy of completion) Feature Title (from the proposal bullet point, if it's a sub-point indent it properly)
  -  Link to related .md file: [Link Name](link url)

 End Line item / Feature Template -- DO NOT DELETE THIS SECTION --> 
 

 
 
### Proposal Checklist and Evidence

- Milestone 1
    - [X] \(02/13/2022) User will be able to register a new account
      - Form Fields
        - Username, email, password, confirm password(other fields optional)
        - Email is required and must be validated
        - Username is required
        - Confirm password’s match
      - Users Table
        -  Id, username, email, password (60 characters), created, modified
      - Password must be hashed (plain text passwords will lose points)
      - Email should be unique
      - Username should be unique
      - System should let user know if username or email is taken and allow the user to correct the error without wiping/clearing the form
        -  The only fields that may be cleared are the password fields
    -  Link to .md file: [Link Name](link url)

    - [X] \(02/14/2022) User will be able to login to their account (given they enter the correct credentials)
      * Form
          * User can login with **email **or **username**
              * This can be done as a single field or as two separate fields
          * Password is required
      * User should see friendly error messages when an account either doesn’t exist or if passwords don’t match
      * Logging in should fetch the user’s details (and roles) and save them into the session.
      * User will be directed to a landing page upon login
        * This is a protected page (non-logged in users shouldn’t have access)
        * This can be home, profile, a dashboard, etc
    - [X] \(mm/dd/yyyy of completion) User will be able to logout
      * Logging out will redirect to login page
      * User should see a message that they’ve successfully logged out
      * Session should be destroyed (so the back button doesn’t allow them access back in)
    - [X] \(mm/dd/yyyy of completion) Basic security rules implemented
      * Authentication:
          * Function to check if user is logged in
          * Function should be called on appropriate pages that only allow logged in users
      * Roles/Authorization:
          * Have a roles table (see below)
          
    - [X] \(mm/dd/yyyy of completion) Basic Roles implemented
      * Have a <span style="text-decoration:underline;">Roles</span> table	(id, name, description, is_active, modified, created)
      * Have a <span style="text-decoration:underline;">User Roles</span> table (id, user_id, role_id, is_active, created, modified)
      * Include a function to check if a user has a specific role (we won’t use it for this milestone but it should be usable in the future)
    
    - [ ] \(mm/dd/yyyy of completion) Site should have basic styles/theme applied; everything should be styled
      *  I.e., forms/input, navigation bar, etc
    * [ ] \(mm/dd/yyyy of completion) Any output messages/errors should be “user friendly”
      * Any technical errors or debug output displayed will result in a loss of points
    * [ ] \(mm/dd/yyyy of completion) User will be able to see their profile
      * Email, username, etc
    * [ ] \(mm/dd/yyyy of completion) User will be able to edit their profile
      * Changing username/email should properly check to see if it’s available before allowing the change
      * Any other fields should be properly validated
      * Allow password reset (only if the existing correct password is provided)
          * Hint: logic for the password check would be similar to login
    

- Milestone 2
  * [ ] \(mm/dd/yyyy of completion) User with an admin role or shop owner role will be able to add products to inventory
    * Table should be called <span style="text-decoration:underline;">Products</span> (id, name, description, category, stock, created, modified, unit_price, visibility [true, false])
  * [ ] \(mm/dd/yyyy of completion) Any user will be able to see products with visibility = true on the Shop page
    * Product list page will be public (i.e. doesn’t require login)
    * For now limit results to 10 most recent
    * User will be able to filter results by category
    * User will be able to filter results by partial matches on the name
    * User will be able to sort results by price
    * All filters are additive
  * [ ] \(mm/dd/yyyy of completion) Admin/Shop owner will be able to see products with any visibility
    * This should be a separate page from Shop, but will be similar
    * This page should only be accessible to the appropriate role(s)
  * [ ] \(mm/dd/yyyy of completion) Admin/Shop owner will be able to edit any product
    * Edit button should be accessible for the appropriate role(s) anywhere a product is shown (Shop list, Product Details Page, etc)
    * Edit name, description, category, stock, unit_price, visibility
  * [ ] \(mm/dd/yyyy of completion) User will be able to click an item from a list and view a full page with more info about the item (Product Details Page)
    * Name, description, unit_price, stock, category
  * [ ] \(mm/dd/yyyy of completion) User must be logged in for any Cart related activity below
  * [ ] \(mm/dd/yyyy of completion) User will be able to add items to Cart
    * <span style="text-decoration:underline;">Cart</span> will be table-based (id, product_id, user_id, desired_quantity, unit_price, created, modified)
        * **Choose one and cross out which one you won’t support**
            * If a user can have only 1 cart product_id and user_id should be a composite unique key
            * If a user can have more than 1 cart, add a field called cart_id and cart_id, user_id, and product_id will be a composite unique key
    * Adding items to Cart will **not** affect the Product's quantity in the Products table
  * User will be able to see their cart
    * List all the items
    * Show subtotal for each line item based on desired_quantity * unit_price (from the cart)
    * Show total cart value (sum of line item subtotals)
    * Will be able to click an item to see more details (Product Details Page)
  * User will be able to change quantity of items in their cart
    * Quantity of 0 should also remove from cart
    * A negative Quantity is not valid
  * User will be able to remove a single item from their cart via button click
  * User will be able to clear their entire cart via a button click
 
- Milestone 3
  - (duplicate template here for Milestone 1 features)
- Milestone 4
  - (duplicate template here for Milestone 1 features)
  - 
### Intructions
#### Don't delete this
1. Pick one project type
2. Create a proposal.md file in the root of your project directory of your GitHub repository
3. Copy the contents of the Google Doc into this readme file per the template
4. Convert the list items to markdown checkboxes (apply any other markdown for organizational purposes)
5. Create a new Project Board on GitHub
   - Choose the Automated Kanban Board Template
   - For each major line item (or sub line item if applicable) create a GitHub issue
   - The title should be the line item text
   - The first comment should be the acceptance criteria (i.e., what you need to accomplish for it to be "complete")
   - Leave these in "to do" status until you start working on them
   - Assign each issue to your Project Board (the right-side panel)
   - Assign each issue to yourself (the right-side panel)
6. As you work
  1. As you work on features, create separate branches for the code in the style of Feature-ShortDescription (using the Milestone# branch as the source to branch from and to merge into)
  2. Add, commit, push the related file changes to this branch
  3. Add evidence to the PR (Feat to Milestone) conversation view comments showing the feature being implemented (these will be used to populate the related .md files for each milestone, forgetting to capture this will give you more work later on)
     - Screenshot(s) of the site view (make sure they clearly show the feature)
     - Screenshot of the database data if applicable
     - Describe each screenshot to specify exactly what's being shown
     - A code snippet screenshot or reference via GitHub markdown may be used as an alternative for evidence that can't be captured on the screen
  4. Update the checklist of the proposal.md file for each feature this branch is completing (ideally should be 1 branch/pull request per feature, but some cases may have multiple)
    - Basically add an x to the checkbox markdown along with a date after
      - (i.e.,   - [x] (mm/dd/yy) ....) See Template above
    - Add the pull request link as a new indented line for each line item being completed
    - Attach any related issue items on the right-side panel
  5. Merge the Feature Branch into your Milestone branch (this should close the pull request and the attached issues)
    - Merge the Milestone branch into dev, then dev into prod as needed (be sure it doesn't break anything in prod)
    - Last two steps are mostly for getting it to prod for delivery of the assignment 
  7. If the attached issues don't close wait until the next step
  8. Merge the updated dev branch into your production branch via a pull request
  9. Close any related issues that didn't auto close
    - You can edit the dropdown on the issue or drag/drop it to the proper column on the project board