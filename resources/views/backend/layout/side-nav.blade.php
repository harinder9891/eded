
		<!--Loader-->
		<div id="global-loader">
			<img src={{asset("common/assets/images/loader.svg")}} class="loader-img" alt="">
		</div>
		<!--/Loader-->

		<!--Page-->


				<!--Header-->
                @include('backend.layout.header')


				<!-- Sidebar menu-->
				<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
				<aside class="app-sidebar doc-sidebar">
					 <div class="app-sidebar__user clearfix">
						<div class="dropdown user-pro-body">
						<!--	<div>
								<img src={{asset("common/assets/images/users/male/25.jpg")}} alt="user-img" class="avatar avatar-lg brround">
								<a href="editprofile.html" class="profile-img">
									<span class="fa fa-pencil" aria-hidden="true"></span>
								</a>
							</div>
							<div class="user-info">
								<h2>Rubin Carmody</h2>
								<span>Web Designer</span>
							</div>
						</div>
					</div>
					<ul class="side-menu">
						<li>
							<a class="side-menu__item" href="index.php"><i class="side-menu__icon fe fe-airplay"></i><span class="side-menu__label">Dashboard</span></a>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-users"></i><span class="side-menu__label">Users</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a class="slide-item" href="newuser.php">New User</a></li>
								<li><a class="slide-item" href="allusers.php">All Users</a></li>

							</ul>
						</li> -->
						
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-folder"></i><span class="side-menu__label">Products</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a class="slide-item" href={{url('admin/products')}}>All Products</a></li>
								<li><a class="slide-item" href={{url('admin/products/create')}}>Add Product</a></li>

							</ul>
						</li>
						<!-- <li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-folder"></i><span class="side-menu__label">Reviews</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a class="slide-item" href={{url('admin/reviews')}}>All Reviews</a></li>
								<li><a class="slide-item" href={{url('admin/reviews/create')}}>Add Review</a></li>

							</ul>
						</li> -->
						<li class="slide">
						<a class="side-menu__item" href="{{url('admin/enquiries')}}"><i class="side-menu__icon fe fe-folder"></i><span class="side-menu__label">Enquiries</span></a>
						</li>
						<!-- <li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-pencil"></i><span class="side-menu__label">Reviews</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a class="slide-item" href="reviews.php">All Reviews</a></li>
								<li><a class="slide-item" href="new-reviews.php">Add New Reviews</a></li>

							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-caret-down"></i><span class="side-menu__label">Sidebar</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a class="slide-item" href="sidebar.php">All Sidebar</a></li>
								<li><a class="slide-item" href="new-sidebar.php">Add New Sidebar</a></li>

							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-file-text"></i><span class="side-menu__label">Certification Exam</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a class="slide-item" href="certification-exam.php">All Certification Exam</a></li>
								<li><a class="slide-item" href="new-certification-exam.php">Add New Certification Examr</a></li>

							</ul>
						</li>

						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-file"></i><span class="side-menu__label">Exam Voucher</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a class="slide-item" href="exam-voucher.php">All Exam Voucher</a></li>
								<li><a class="slide-item" href="new-exam-voucher.php">Add New Exam Voucher</a></li>

							</ul>
						</li>

						<li>
							<a class="side-menu__item" href="order.php"><i class="side-menu__icon fa fa-dollar"></i><span class="side-menu__label">Order</span></a>
						</li>
						<li>
							<a class="side-menu__item" href="#"><i class="side-menu__icon fa fa-th"></i><span class="side-menu__label">Navigation</span></a>
						</li>
						<li>
							<a class="side-menu__item" href="email-contact.php"><i class="side-menu__icon fa fa-paper-plane"></i><span class="side-menu__label">Contact Messages</span></a>
						</li>


						<li class="slide">
							<a href="documentation.html" class="btn btn-light btn-block mt-3">Documentation</a>
						</li> -->
					</ul>
				</aside>
				<!-- /Sidebar menu-->
