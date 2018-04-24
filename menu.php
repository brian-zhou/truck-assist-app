<?php
//session_start();
		echo"<header>
					<nav class='navbar navbar-default navbar-fixed-top' role='navigation'>
						<div class='container'>
							<div class='navbar-header'>
				                <button type='button' class='navbar-toggle collapsed' >
				                  <span class='sr-only'>Toggle navigation</span>
				                  <span class='icon-bar'></span>
				                  <span class='icon-bar'></span>
				                  <span class='icon-bar'></span>
				                </button>
							  <!-- offcanvas-trigger-effects -->
								<h1 class='logo'><a class='navbar-brand' href='login-home.php'><img src='img/logo.png' alt=''></a></h1>
							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class='collapse navbar-collapse navbar-collapse'>
								<ul class='nav navbar-nav navbar-right'>
									<li class='active'><a href='login-home.php'>HOME</a></li>

									<li class='dropdown'><a href='' >QUALITY CONTROL <b class='caret'></b></a>
										<!-- submenu-wrapper -->
										<div class='submenu-wrapper submenu-wrapper-topbottom'>
											<div class='submenu-inner  submenu-inner-topbottom'>
												<ul class='dropdown-menu'>
													<li><a href='qc-details.php'>QC Details</a></li>
													<li><a href=''>Device Repairs</a></li>
													<li><a href=''>MDVR Device Repair</a></li>
													<li><a href=''>Bulk SMS</a></li>
												</ul>
											</div><!-- /.submenu-inner -->
										</div> <!-- /.submenu-wrapper -->
									</li>

									<li class='dropdown'><a href='#' >IT SUPPORT <b class='caret'></b></a>
										<!-- submenu-wrapper -->
										<div class='submenu-wrapper submenu-wrapper-topbottom'>
											<div class='submenu-inner  submenu-inner-topbottom'>
												<ul class='dropdown-menu'>
													<li><a href=''>Server Maintenance</a></li>
													<li><a href=''>Database Maintenance</a></li>
												</ul>
											</div><!-- /.submenu-inner -->
										</div> <!-- /.submenu-wrapper --> 
									</li>

									<li class='dropdown'><a href='#' >OPERATIONS <b class='caret'></b></a>
										<!-- submenu-wrapper -->
										<div class='submenu-wrapper submenu-wrapper-topbottom'>
											<div class='submenu-inner  submenu-inner-topbottom'>
												<ul class='dropdown-menu'>
													<li><a href='faults-log-ajax-search.php'>Faults Log</a></li>
													<li><a href=''>Technicians Job Card</a></li>
													<li><a href=''>Driver Tamper</a></li>
												</ul>
											</div><!-- /.submenu-inner -->
										</div> <!-- /.submenu-wrapper -->
									</li>

									<li class='dropdown'><a href='' >LOGISTICS <b class='caret'></b></a>
										<!-- submenu-wrapper -->
										<div class='submenu-wrapper submenu-wrapper-topbottom'>
                                                                                <div class='submenu-inner  submenu-inner-topbottom'>
												<ul class='dropdown-menu'>
													<li><a href=''>Stock Control System</a></li>
												</ul>
											</div><!-- /.submenu-inner -->
										</div> <!-- /.submenu-wrapper -->
									</li>
                                                                        
                                      <li class='dropdown'><a href='' >ADMINISTRATION <b class='caret'></b></a>
										<!-- submenu-wrapper -->
										<div class='submenu-wrapper submenu-wrapper-topbottom'>
											<div class='submenu-inner  submenu-inner-topbottom'>
												<ul class='dropdown-menu'>
                                                     <li><a href='suspended-accounts-records.php'>Suspended Clients</a></li>             
													 <li><a href='leave-application-form-employee.php'>Leave Application Form</a></li>
                                                     <li><a href='leave-application-status-employee.php'>View all submitted leave requests</a></li>
                                                     <li><a href='http://tech.truckassist.co.za' target='_blank'>Password Manager</a></li>
                                                     <li><a href='https://app.truckassist.co.za/signature/truckassist-new-signature.html' target='_blank'>E-mail Signature Template</a></li>
												</ul>
											</div><!-- /.submenu-inner -->
										</div> <!-- /.submenu-wrapper --> 
									</li>

									<li><a href='contact.php'>FEEDBACK</a></li>
									<li class=''><a href='logout.php'><span class='glyphicon glyphicon-log-out'> Logout </span></a></li>
								</ul>
							</div><!-- /.navbar-collapse -->
						</div><!-- /.container -->
					</nav>
				</header>";