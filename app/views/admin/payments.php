

<?php

session_start();

if (isset($_SESSION['email'])) {
    // echo $_SESSION['email'];
} else {
    echo '<br>You are not logged in';
}

?>



<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/admin_styles.css">


<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />


<body>
    <div class="container">
    <aside>
            <div class="top">
                <div class="logo">
                    <img src="<?php echo BASEURL ?>/images/logo1.png" alt="logo">
                    <h2>Events
                        <span class="logo-colour">Lab</span>
                    </h2>
                </div>
                <div class="close" id="close-btn"><span class="material-symbols-rounded">close</span>
                </div>
            </div>
            <div class="sidebar">
                <a href="<?php echo BASEURL ?>/adminFunction/admin" ><span class="material-symbols-rounded">
                        dashboard
                    </span>
                    <h3>Dashboard</h3>
                </a>
                <a href="<?php echo BASEURL ?>/adminFunction/customer" ><span class="material-symbols-rounded">
                        person
                    </span>
                    <h3>Customers</h3>
                </a>
                <a href="<?php echo BASEURL ?>/adminFunction/service"class="active"><span class="material-symbols-rounded">
                        storefront
                    </span>
                    <h3>Service Providers</h3>
                </a>
                </a>
                <a href="<?php echo BASEURL ?>/adminFunction/orders"><span class="material-symbols-rounded">
                        order_approve
                    </span>
                    <h3>Orders</h3>
                </a>
                <a href=""><span class="material-symbols-rounded">
                        mail
                    </span>
                    <h3>Verify Users</h3>
                    <span class="message-count">31</span>
                </a>

                <a href=""><span class="material-symbols-rounded">
                        mail
                    </span>
                    <h3>Messages</h3>
                    <span class="message-count">31</span>
                </a>


                <a href="<?php echo BASEURL ?>/adminFunction/packages"><span class="material-symbols-rounded">
                        inventory_2
                    </span>
                    <h3>Packages</h3>
                </a>

                <a href=""><span class="material-symbols-rounded">
                        payments
                    </span>
                    <h3>Payments</h3>
                </a>

                <a href=""><span class="material-symbols-rounded">
                        summarize
                    </span>
                    <h3>Reports</h3>
                </a>

                <a href=""><span class="material-symbols-rounded">
                        settings
                    </span>
                    <h3>Settings</h3>
                </a>


                <a href="<?php echo BASEURL ?>/welcome/signout"><span class="material-symbols-rounded">
                        logout
                    </span>
                    <h3>Logout</h3>
                </a>
        </aside>

        <!-- ------- end of side bar ----- -->
        <main>
            <h1>Payments</h1>

       
           
            <!-- -------orders table----- -->
            <div class="recent-orders">
                <h2>Payments</h2>
                <table>
  <thead>
    <tr>
      <th>Date</th>
      <th>Service Provider</th>
      <th>Order ID</th>
      <th>Payment Amount</th>
      <th>Payment Status</th>
      <th>Select</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>04/01/2023</td>
      <td>John Doe</td>
      <td>12345</td>
      <td>$90.00</td>
      <td>Paid</td>
      <td><input type="checkbox" name="pay[]" value="john_doe"></td>
    </tr>
    <tr>
      <td>04/01/2023</td>
      <td>Jane Smith</td>
      <td>54321</td>
      <td>$45.00</td>
      <td>Pending</td>
      <td><input type="checkbox" name="pay[]" value="jane_smith"></td>
    </tr>
    <tr>
      <td>04/01/2023</td>
      <td>Bob Johnson</td>
      <td>98765</td>
      <td>$67.50</td>
      <td>Unpaid</td>
      <td><input type="checkbox" name="pay[]" value="bob_johnson"></td>
    </tr>
  </tbody>
</table>

                <a href="">Show all</a>
            </div>
        </main>
        <!-- ------- end of main ----- -->

        <div class="right">
            <div class="top">
                <button id="menu-btn">
                    <span class="material-symbols-rounded">menu</span>
                </button>
                <div class="theme-toggler">
                    <span class="material-symbols-rounded active"> light_mode</span>
                    <span class="material-symbols-rounded">dark_mode</span>
                </div>
                <div class="profile">
                    <div class="info">
                        <p>Hey ,<b> Dushanee</b></p>
                        <small class="text-muted">Admin</small>
                    </div>
                    <div class="profile-photo">
                        <img src="1.jpg" alt="">
                    </div>
                </div>
            </div>


            <!-- =====end of top=== -->

            <!-- <div class="recent-updates">
                <h2>Add Service Provider</h2>
                <div class="updates">
                    <div class="">
                        
                    <form action="<?php echo BASEURL ?>/user/addServiceProvider" method="post">
                    <div class="col">
                        <label>Service Provider Id</label><br>
                        <input type="text" name="sp_id" placeholder="3"><br>
                    </div>
                    <div class="col">
                        <label>Email Address</label><br>
                        <input type="text" name="sp_email" placeholder="user@gmail.com"><br>
                    </div>
                    <div class="col">
                        <label>Name</label><br>
                        <input type="text" name="sp_name" placeholder="user"><br>
                    </div>
                    <div class="col">
                        <label>Temporary Password</label><br>
                        <input type="password" name="sp_password" placeholder="123456"><br>
                    </div>
                    <div class="col">
                     <button type="submit"  class="login-btn btn-primary btn">Submit</button>
                    </div>
                </div>
                </form>
            </div> -->
            <!-- =====end of recent updates === -->

            
        </div>

        </div>

</body>

</html>

