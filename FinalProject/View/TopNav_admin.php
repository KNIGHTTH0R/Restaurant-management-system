<ul>
  <li><a href="./index.php" class="active">Home</a></li>
  <li><a href="./showAll_adminAccountView.php">Show All Admin Account</a></li>
  <li><a href="./showAll_managerAccountView.php">Show All manager acount </a></li>
  <li><a href="./showAll_customerAccountView.php">Show All customer Account</a></li>
  
  <li><a href="./signupAdminView.php">Add New Admin Account</a></li>
  <li><a href="./signupManagerView.php">Add New Manager Account</a></li>
  <li><a href="./signupCustomerView.php">Add New Customer Account</a></li>
  <li><a href="./productAdminView.php">Product Management</a></li>
  <li><a href="./orderAdminShowAllView.php">Order History</a></li>
  <li><a href="./About.php">About</a></li>
  <li><a href="../Controller/logoutController.php">Sign Out</a></li>
</ul>

<div id="src">
  <br> 
  <form action="./productAdminSearchView.php" method="post">
  <span class="pink-head">Search Products:</span>
    <input type="text" name="productName" id="productName">
    <input type="submit" Value="Search" ></input>
</form>
</div>
