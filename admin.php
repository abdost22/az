<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="styleAdmin.css">

	<title>Administration</title>
	<link rel="icon" href="./logo1.icon">
</head>
<body  class="logged-out env-production page-responsive height-full d-flex flex-column header-overlay" style="word-wrap: break-word;"></body>
  <form action="db_connnection.php" method="post">
    <section id="sidebar">
        <a href="#" class="brand">
			<i class="bx bxs-smile"></i>
			<span class="text">Admin</span>
		</a>
        <ul class="side-menu top">
            
            <li>
                <a href="#">
                    <i class='bx bxs-group' ></i>
                    <span class="text">Users</span>
                </a>
            </li>
            <li>
                <a href="./sign up1.html">
                    <i class='bx bxs-doughnut-chart' ></i>
                    <span class="text">Hotel</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-message-dots' ></i>
                    <span class="text">Email</span>
                </a>
            </li>
           
        </ul>
        <ul class="side-menu">
           
            <li>
                <a href="./hiadmin.php" class="logout">
                    <i class='bx bxs-log-out-circle' ></i>
                    <span class="text">Logout</span>
                </a>

            </li>
            </ul>

        </section>
    </form> 





	<!-- CONTENT -->
	<form action="db_connnection.php" method="post">
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="imgadmin/people.jpg">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Administration</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Administration</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
				
			</div>

			<ul class="box-info">
				<li>
				 
					 <button> <i class='bx bxs-home-smile' ></i></button>
					<span class="text">
						
						<h3> Hotel Management</h3>
					</span>
				 
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>User Management</h3>
					</span>
				</li>
				
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Recent Orders</h3>
						
					</div>
					<table>
						<thead>
							<tr>
								<th>#</th>
								<th>Date Order</th>
								<th>review Request</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<img src="صورة تجي من عند لي سجل">
									<p>اسم فندق/مستخدم</p>
								</td>
								<td>تاريخ تسجيل </td>
								<td><button class="status Acceptance">Acceptance</button>or<button class="status Refusal">Refusal</button></td>

							</tr>
							<tr>
								<td>
									<img src="صورة تجي من عند لي سجل">
									<p>اسم فندق/مستخدم</p>
								</td>
								<td>تاريخ تسجيل </td>
								<td><button class="status Acceptance">Acceptance</button>or<button class="status Refusal">Refusal</button></td>


							</tr>
							<td>
                                <img src="صورة تجي من عند لي سجل">
                                <p>اسم فندق/مستخدم</p>
                            </td>
                            <td>تاريخ تسجيل </td>
                            <td><button class="status Acceptance">Acceptance</button>or<button class="status Refusal">Refusal</button></td>

                        </tr>
                        <td>
                            <img src="صورة تجي من عند لي سجل">
                            <p>اسم فندق/مستخدم</p>
                        </td>
                        <td>تاريخ تسجيل </td>
                        <td><button class="status Acceptance">Acceptance</button>or<button class="status Refusal">Refusal</button></td>

                    </tr>
                    <td>
                        <img src="صورة تجي من عند لي سجل">
                        <p>اسم فندق/مستخدم</p>
                    </td>
                    <td>تاريخ تسجيل </td>
                    <td><button class="status Acceptance">Acceptance</button>or<button class="status Refusal">Refusal</button></td>

                </tr>
						</tbody>
					</table>
				</div>
				
			</div>
		</main>
		<!-- MAIN -->
	</section>
	</form>
	<!-- CONTENT -->
	

	<script src="scriptAdmin.js"></script>
</body>
</html>