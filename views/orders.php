<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DOX CAFFE | PoS</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Hind:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="icon" href="../img/logo.png" type="image/x-icon" />
    <!-- Default style -->
    <link rel="stylesheet" href="../css/index.css" />
    <!-- Custom Style -->
    <link rel="stylesheet" href="../css/orders.css" />
  </head>
  <body id="body-pd">
    <!-- wrap sidebar + title -->
    <div class="wrap-top">
      <!-- Sidebar -->
      <div class="header_toggle" id="header">
        <button class="btn-toggle fa fa-bars" id="header-toggle"></button>
      </div>

      <div class="left-sidebar" id="side-bar">
        <nav class="nav">
          <div>
            <a href="index.html" class="nav_logo">
              <img src="../img/logo.png" alt="" class="nav_logo-icon" />
            </a>

            <div class="padding-list">
              <div class="side-outlet">Jl. Buahbatu, Kec. Bandung</div>
              <div class="nav_list">
                <a href="/" class="nav_link">
                  <i class="fa-solid fa-chart-simple nav_icon"></i>
                  <span class="nav_name">Dashboard</span>
                </a>
                <a href="menu.html" class="nav_link">
                  <i class="fa-solid fa-utensils nav_icon"></i>
                  <span class="nav_name">Menus</span>
                </a>
                <a href="menu-cashier.html" class="nav_link">
                  <i class="fa-solid fa-utensils nav_icon"></i>
                  <span class="nav_name">Menus (Cashier)</span>
                </a>
                <a href="outlets.html" class="nav_link">
                  <i class="fa-solid fa-shop nav_icon"></i>
                  <span class="nav_name">Outlets</span>
                </a>
                <a href="orders.html" class="nav_link active">
                  <i class="fa-solid fa-pen-to-square nav_icon"></i>
                  <span class="nav_name">Orders</span>
                </a>
                <a href="employees.html" class="nav_link">
                  <i class="fa-solid fa-user-group nav_icon"></i>
                  <span class="nav_name">Employees</span>
                </a>
              </div>
            </div>
          </div>
          <div class="nav_bottom">
            <div class="nav_bottom-profil">
              <img src="../img/profil.png" alt="" class="profil_image" />
              <span class="profil_name"
                >John Doe <br />
                <span class="profil_role">Cashier</span></span
              >
              <button
                class="btn-logout nav_bottom-link fa-solid fa-right-from-bracket"
              ></button>
            </div>
          </div>
        </nav>
      </div>
      <!-- End Sidebar -->

      <!-- title -->
      <h2 class="title">Orders</h2>
      <!-- end title -->

      <!-- end wrap sidebar + title -->
    </div>

    <!-- Content Boody -->
    <main>
      <!-- Coding disini -->

      <!-- start container orders -->
      <div class="container-orders">
        <!-- start wrap button filter and date -->
        <div class="wrap-filter-date">
          <!-- start button filter -->
          <div class="dropdown">
            <button class="btn btn-secondary filter-employees">
              <i class="fa-solid fa-filter filter-icon"></i>
              Filter
            </button>
            <div class="dropdown-content">
              <a href="../pages/employees.html">Outlet Bandung I</a>
              <a href="#">Outlet Bandung II</a>
              <a href="#">Outlet Surabaya</a>
              <a href="#">Outlet Yogyakarta</a>
              <a href="#">Outlet Jakarta</a>
              <a href="#">Outlet Tasik</a>
              <a href="#">Outlet Bekasi</a>
              <a href="#">Outlet Garut</a>
            </div>
          </div>
          <!-- end button filter -->

          <!-- select date -->
          <form class="date-orders">
            <input type="date" name="date-orders" />
          </form>
        </div>
        <!-- end wrap button filter dan date-->

        <!-- orders table -->
        <div class="form-group">
          <select
            name="state"
            id="maxRows"
            class="form-control"
            style="width: 150px"
          >
            <option value="5000">Show All</option>
            <option value="5">5</option>
            <option value="10">10</option>
            <option value="15">15</option>
            <option value="20">20</option>
            <option value="50">50</option>
            <option value="100">100</option>
          </select>
        </div>
        <div class="container_table">
          <table class="table" id="pager">
            <thead>
              <tr>
                <th>Menu</th>
                <th>ID</th>
                <th>Price</th>
                <th>Qty</th>
                <th>Total</th>
                <th>Date</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>Hamburger</td>
                <td>DC - 01012205</td>
                <td>45.000</td>
                <td>2</td>
                <td>90.000</td>
                <td>26 March 2022</td>
              </tr>

              <tr>
                <td>Pizza</td>
                <td>DC - 01012204</td>
                <td>100.000</td>
                <td>2</td>
                <td>200.000</td>
                <td>26 March 2022</td>
              </tr>

              <tr>
                <td>Iced Coffe</td>
                <td>DC - 01012203</td>
                <td>30.000</td>
                <td>2</td>
                <td>60.000</td>
                <td>26 March 2022</td>
              </tr>

              <tr>
                <td>Toast</td>
                <td>DC - 01012202</td>
                <td>35.000</td>
                <td>2</td>
                <td>70.000</td>
                <td>26 March 2022</td>
              </tr>

              <tr>
                <td>Hamburger</td>
                <td>DC - 01012201</td>
                <td>45.000</td>
                <td>2</td>
                <td>90.000</td>
                <td>26 March 2022</td>
              </tr>
              <tr>
                <td>Hamburger</td>
                <td>DC - 01012201</td>
                <td>45.000</td>
                <td>2</td>
                <td>90.000</td>
                <td>26 March 2022</td>
              </tr>
              <tr>
                <td>Hamburger</td>
                <td>DC - 01012201</td>
                <td>45.000</td>
                <td>2</td>
                <td>90.000</td>
                <td>26 March 2022</td>
              </tr>
              <tr>
                <td>Hamburger</td>
                <td>DC - 01012201</td>
                <td>45.000</td>
                <td>2</td>
                <td>90.000</td>
                <td>26 March 2022</td>
              </tr>
              <tr>
                <td>Hamburger</td>
                <td>DC - 01012201</td>
                <td>45.000</td>
                <td>2</td>
                <td>90.000</td>
                <td>26 March 2022</td>
              </tr>
              <tr>
                <td>Hamburger</td>
                <td>DC - 01012201</td>
                <td>45.000</td>
                <td>2</td>
                <td>90.000</td>
                <td>26 March 2022</td>
              </tr>
              <tr>
                <td>Hamburger</td>
                <td>DC - 01012201</td>
                <td>45.000</td>
                <td>2</td>
                <td>90.000</td>
                <td>26 March 2022</td>
              </tr>
              <tr>
                <td>Hamburger</td>
                <td>DC - 01012201</td>
                <td>45.000</td>
                <td>2</td>
                <td>90.000</td>
                <td>26 March 2022</td>
              </tr>
            </tbody>
          </table>

          <!-- end container table -->
        </div>
        <div class="pagination-container">
          <nav>
            <ul class="pagination"></ul>
          </nav>
        </div>
        <!-- end container orders -->
      </div>
    </main>
    <!-- End Content Body -->

    <!-- Import JS -->

    <!-- Jquery -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.js"
      integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://kit.fontawesome.com/94fce472e4.js"
      crossorigin="anonymous"
    ></script>
    <!-- Default js -->
    <script src="../js/index.js"></script>
    <!-- Custom js -->
    <script src="../js/custom.js"></script>
    <!-- Paginate -->
    <script src="../js/orders/paginate.js"></script>
  </body>
</html>