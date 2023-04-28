<style type="text/css">
  #leftCol {
    position: fixed;
    width: 309px;
    overflow-y: scroll;
    top: 0;
    bottom: 0;
  }
</style>

<div class=" sidebar" role="navigation">
  <div class="navbar-collapse">
    <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
      <ul class="nav" id="leftCol" style="margin-top:7%;background: #1e1e1e;">
        <li>
          <a href="dashboard.php"><i class="fa fa-home nav_icon"></i>Dashboard</a>
        </li>
        <li>
          <a href="add-services.php"><i class="fa fa-cogs nav_icon"></i>Services<span class="fa arrow"></span> </a>
          <ul class="nav nav-second-level collapse">
            <li>
              <a href="add-services.php">Add Services</a>
            </li>
            <li>
              <a href="manage-services.php">Manage Services</a>
            </li>
          </ul>
          <!-- /nav-second-level -->
        </li>
        <li class="">
          <a href="about-us.php"><i class="fa fa-book nav_icon"></i>Pages <span class="fa arrow"></span></a>
          <ul class="nav nav-second-level collapse">
            <li>
              <a href="about-us.php">About Us</a>
            </li>
            <li>
              <a href="contact-us.php">Contact Us</a>
            </li>
          </ul>
          <!-- /nav-second-level -->
        </li>

        
        <li>
          <a href="subcriber.php" class="chart-nav"><i class="fa fa-user nav_icon"></i>Subscribe</a>
        </li>
        <!-- <li>
          <a href="customer-enquiry.php" class="chart-nav"><i class="fa fa-user nav_icon"></i>Customer Enquiry</a>
        </li> -->
        
        <li>
          <a href="customer-list.php" class="chart-nav"><i class="fa fa-users nav_icon"></i>Appointments</a>
        </li>


        <li>
          <a href="submit_message.php" class="chart-nav"><i class="fa fa-comments nav_icon"></i>Send Message</a>
        </li>

        <li class="dropdown">
          <a href="#" class="chart-nav"><i class="fa fa-file-text-o nav_icon"></i>Reports<span
              class="fa arrow"></span></a>
          <ul class="dropdown-content nav nav-second-level collapse">
            <li>
              <a href="bwdates-reports-ds.php" class="chart-nav"><i class="fa fa-file-text-o nav_icon"></i>B/W Dates
                Report</a>
            </li>
            <li>
              <a href="sales-reports.php" class="chart-nav"><i class="fa fa-file-text-o nav_icon"></i>Sales Report</a>
            </li>
          </ul>
        </li>



        <li class="dropdown">
          <a href="" class="chart-nav"><i class="fa fa-file-text-o nav_icon"></i>Invoices<span
              class="fa arrow"></span></a>
          <ul class="dropdown-content nav nav-second-level collapse">
            <li><a href="invoices.php"><i class="fa fa-eye nav_icon"></i>View Invoices</a></li>
            <li><a href="search-invoices.php"><i class="fa fa-search nav_icon"></i>Search Invoices</a></li>
          </ul>
        </li>
      </ul>
     
      <style>
        .dropdown-content {
          display: none;
        }

        .dropdown:hover .dropdown-content {
          display: block;
        }
      </style>

      <div class="clearfix"> </div>
      <!-- //sidebar-collapse -->
    </nav>
  </div>
</div>