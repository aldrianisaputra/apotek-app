<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
	<meta property="og:title" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
	<meta property="og:description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
	<meta property="og:image" content="https:/fillow.dexignlab.com/xhtml/social-image.png">
	<meta name="format-detection" content="telephone=no">
	
	<!-- PAGE TITLE HERE -->
	<title>F apoték</title>
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="images/favicon.png">
  <link rel="stylesheet" href="{{asset('AdminLTE2/vendor/nouislider/nouislider.min.css')}}">
  <link rel="stylesheet" href="{{asset('AdminLTE2/vendor/jquery-nice-select/css/nice-select.css')}}">
  <link rel="stylesheet" href="{{asset('AdminLTE2/vendor/owl-carousel/owl.carousel.css')}}">
  

	
	<!-- Style css -->
  <link rel="stylesheet" href="{{asset('AdminLTE2/css/style.css')}}">
    
	
</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
		<div class="lds-ripple">
			<div></div>
			<div></div>
		</div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
		<div class="nav-header">
            <a href="index.html" class="brand-logo">
				<svg class="logo-abbr" width="55" height="55" viewbox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M27.5 0C12.3122 0 0 12.3122 0 27.5C0 42.6878 12.3122 55 27.5 55C42.6878 55 55 42.6878 55 27.5C55 12.3122 42.6878 0 27.5 0ZM28.0092 46H19L19.0001 34.9784L19 27.5803V24.4779C19 14.3752 24.0922 10 35.3733 10V17.5571C29.8894 17.5571 28.0092 19.4663 28.0092 24.4779V27.5803H36V34.9784H28.0092V46Z" fill="url(#paint0_linear)"></path>
					<defs>
					</defs>
				</svg>
				<div class="brand-title">
					<h2 class="">apoték</h2>
					
				</div>
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
		
	
		
		<!--**********************************
            Header start
        ***********************************-->
        <div class="header border-bottom">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
							<div class="dashboard_bar">
                                Dashboard
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">							
							<li class="nav-item dropdown  header-profile">
								<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
									<img src="images/user.jpg" width="56" alt="">
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="app-profile.html" class="dropdown-item ai-icon">
										<svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
										<span class="ms-2">Profile </span>
									</a>
									<a href="email-inbox.html" class="dropdown-item ai-icon">
										<svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
										<span class="ms-2">Inbox </span>
									</a>
									<a href="page-error-404.html" class="dropdown-item ai-icon">
										<svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
										<span class="ms-2">Logout </span>
									</a>
								</div>
							</li>
                        </ul>
                    </div>
				</nav>
			</div>
		</div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="dlabnav">
            <div class="dlabnav-scroll">
				<ul class="metismenu" id="menu">
                    <li>
                        <a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="fa-solid fa-pills"></i>
                            <span class="nav-text">Obat</span>
                            </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('dataobat')}}">Data Obat</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="fa-solid fa-user"></i>
                            <span class="nav-text">Pegawai</span>
                            </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('datapegawai')}}">Data Pegawai</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="fa-solid fa-building"></i>
                            <span class="nav-text">Supplier</span>
                            </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('datasupplier')}}">Data Supplier</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-file-alt"></i>
                            <span class="nav-text">Penjualan</span>
                            </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('datapenjualan')}}">Data Penjualan</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-file-alt"></i>
                            <span class="nav-text">Pembelian</span>
                            </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('datapembelian')}}">Data Pembelian</a></li>
                        </ul>
                    </li>
                </ul>

				</div>
				
				<div class="copyright">
					<p><strong>Fillow Saas Admin</strong> © 2021 All Rights Reserved</p>
					<p class="fs-12">Made with <span class="heart"></span> by DexignLabs</p>
				</div>
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <center><h3>Edit Data</h3></center>
            </div>
          <div class="card-body">
              <div class="basic-form">
                <form method="POST" action="{{route('updatepegawai',$peg->id)}}" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <section class="base">
                    <div>
                      <label>Nama Pegawai</label>
                      <input type="text" name="nama" id="nama"  value="{{ $peg->nama }}" class="form-control input-default mb-3 "  autofocus="" required="" />
                    </div>
                    <div>
                      <label>Jenis Kelamin</label>
                     <input type="text" id="jk" name="jk" value="{{$peg->jk}}" class="form-control input-default mb-3"  />
                    </div>
                    <div>
                      <label>Alamat </label>
                     <input type="text" id="alamat" name="alamat" value="{{$peg->alamat}}" required="" class="form-control input-default mb-3"  />
                    </div>
                    <div>
                      <label> Jabatan</label>
                     <input type="text" id="jabatan" name="jabatan" value="{{$peg->jabatan}}" required="" class="form-control input-default mb-3"/>
                    </div>
                    <div>
                      <button type="submit" name="submit" value="submit" class="btn btn-square btn-primary" style="text-align: center">Simpan</button>
                    </div>
                    </section>
                </form>
  
              </div>
          </div>
       </div>
       
        {{-- </div> --}}
        
        <!--**********************************
            Content body end
        ***********************************-->
		


		
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="../index.htm" target="_blank">DexignLab</a> 2021</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->
		
        <!--**********************************
           Support ticket button end
        ***********************************-->


	</div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
  <script src= "{{asset('AdminLTE2/vendor/global/global.min.js')}}"></script>
	<script src="{{asset('AdminLTE2/vendor/chart.js/Chart.bundle.min.js ')}} "></script>
	<script src="{{asset('AdminLTE2/vendor/jquery-nice-select/js/jquery.nice-select.min.js')}}"></script>

	
	<!-- Apex Chart -->
	<script src="{{asset('AdminLTE2/vendor/apexchart/apexchart.js')}}"></script>
	
	<script src="{{asset('AdminLTE2/vendor/chart.js/Chart.bundle.min.js')}}"></script>
	
	<!-- Chart piety plugin files -->
  <script src="{{asset('AdminLTE2/vendor/peity/jquery.peity.min.js')}}"></script>
	<!-- Dashboard 1 -->
	<script src="{{asset('AdminLTE2/js/dashboard/dashboard-1.js')}}"></script>
  
	
	<script src="{{asset('AdminLTE2/vendor/owl-carousel/owl.carousel.js')}}vendor/owl-carousel/owl.carousel.js"></script>
	
    <script src="{{asset('AdminLTE2/js/custom.min.js')}}"></script>
	<script src="{{asset('AdminLTE2/js/dlabnav-init.js')}}"></script>
	<script src="{{asset('AdminLTE2/js/demo.js')}}"></script>
    <script src="{{asset('AdminLTE2/js/styleSwitcher.js')}}"></script>
	<script src="https://kit.fontawesome.com/68bf759ce7.js" crossorigin="anonymous"></script>
	<script>
		function cardsCenter()
		{
			
			/*  testimonial one function by = owl.carousel.js */
			
	
			
			jQuery('.card-slider').owlCarousel({
				loop:true,
				margin:0,
				nav:true,
				//center:true,
				slideSpeed: 3000,
				paginationSpeed: 3000,
				dots: true,
				navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
				responsive:{
					0:{
						items:1
					},
					576:{
						items:1
					},	
					800:{
						items:1
					},			
					991:{
						items:1
					},
					1200:{
						items:1
					},
					1600:{
						items:1
					}
				}
			})
		}
		
		jQuery(window).on('load',function(){
			setTimeout(function(){
				cardsCenter();
			}, 1000); 
		});
		
	</script>

</body>
</html>