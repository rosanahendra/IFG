<?php
$color = '#000000';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Metas -->
    <title>IFG</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="" type="image/x-icon" />
    <link rel="apple-touch-icon" href="" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="asset_frontend/css/bootstrap.min.css" />
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="asset_frontend/css/pogo-slider.min.css" />
    <!-- Site CSS -->
    <link rel="stylesheet" href="asset_frontend/css/style.css" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="asset_frontend/css/responsive.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="asset_frontend/css/custom.css" />

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<style>
    @media (max-width: 380px) {    
    	#message {
    		position:fixed;
    		right: 1%; 
    		z-index:80; 
    		top:2%; 
    		font-size:14px;
		    width:250px;
		    font-weight:normal;
    	}
    }
    
    @media (min-width: 381px) {
    	#message {
    		position:fixed;
    		right: 3%;
    		z-index:80; 
    		top:2%;
    		font-size:14px;
		    width:250px;
		    font-weight:normal;
    	}
    }
    
     @media (max-width: 980px) {	
        .tab-font{
            font-size:14px; 
            font-weight:bold;
        }
        
        #img-bg{
            margin-top:60px;
        }
        
        .tab-font{
            
        }
        
        .bottom-navigation {
            position: fixed;
            bottom: 0;
            height: 60px;
            width: 100%;
            display: flex;
            flex-wrap: nowrap;
            -webkit-box-pack: justify;
            justify-content: space-between;
            align-items: flex-start;
            z-index: 200;
            color:#ffffff;
            background-color: #ffffff;
            box-shadow: rgba(108,114,124,.16) 0 -2px 4px 0;
            right: 0;
            left: 0;
            margin-right: auto;
            margin-left: auto;
            padding: 0;
            margin: 0 auto;
        }
        
        .bottom-navigation__item {
            display: flex;
            -webkit-box-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            align-items: center;
            position: relative;
            z-index: 0;
            text-align: center;
            white-space: nowrap;
            flex-flow: column nowrap;
            padding: 8px;
            transition: color .2s ease-out 0s;
            cursor: pointer;
            width: 33%;
            text-decoration: none !important;
            color: <?php echo $color; ?>;
        }
        
        
        .bottom-navigation__item .menu--icons {
            display: block;
            position: relative;
            height: 24px;
            width: 30px;
            margin: auto auto 5px;
            overflow: hidden;
        }
        
        .bottom-navigation__item .menu--text {
            display: block;
            position: relative;
            font-weight: 600;
            font-size: 11px;
            line-height: 16px;
            color: <?php echo $color; ?>;
            text-decoration: initial;
            margin: -2px 0px 0px 0px;
        }      
    }     
    
    @media (min-width: 981px) {
        .tab-font{
            font-size:20px; 
            font-weight:bold;
        }
        
        .bottom-navigation {
            padding:0px;
    	    margin: 0 auto;
    	    /*max-width: 30em;
    	    min-width: 18.75em;*/
    	    width:100%;
    	    background-color:#ffffff;
            position: fixed;
            bottom: 0;
            height: 60px;
            display: flex;
            flex-wrap: nowrap;
            -webkit-box-pack: justify;
            justify-content: space-between;
            align-items: flex-start;
            z-index: 200;
            box-shadow: rgba(108,114,124,.16) 0 -2px 4px 0;
            right: 0;
            left: 0;
            margin-right: auto;
            margin-left: auto;
            padding: 0;
            margin: 0 auto;
        }
        
        .bottom-navigation__item {
            display: flex;
            -webkit-box-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            align-items: center;
            position: relative;
            z-index: 0;
            text-align: center;
            white-space: nowrap;
            flex-flow: column nowrap;
            padding: 8px;
            transition: color .2s ease-out 0s;
            cursor: pointer;
            width: 33%;
            text-decoration: none !important;
            color: <?php echo $color; ?>;
        }
        
        .bottom-navigation__item .menu--icons {
            display: block;
            position: relative;
            height: 24px;
            width: 30px;
            margin: auto auto 5px;
            overflow: hidden;
        }
        
        .bottom-navigation__item .menu--icons2 {
            display: block;
            position: relative;
            height: 34px;
            width: 40px;
            margin: auto auto 5px;
            overflow: hidden;
        }
        
        .bottom-navigation__item .menu--text {
            display: block;
            position: relative;
            font-weight: 600;
            font-size: 13px;
            line-height: 16px;
            color: <?php echo $color; ?>;
            text-decoration: initial;
            margin: -2px 0px 0px 0px;
        }     
    }

    @media (min-width: 701px) {  
    	#chatss {
            position:fixed;
            right: 1%;
            font-size:16px;
            font-weight:bold; 
            z-index:1; 
            color:#333333;
            top:83%; 
        }
        
        #chatss2 {
            display:none;
        }
	}
    
	@media (max-width: 700px) {  
	    #width-logo{
	        width:250px;
	    }
	    
    	#chatss {
            display:none;
        }
        
        #chatss2 {
            position:fixed;
            right: 4%;
            font-size:16px;
            font-weight:bold; 
            z-index:1; 
            color:#333333;
            top:80.5%; 
        }
	}

    #mixedSlider {
      position: relative;
    }
    #mixedSlider .MS-content {
      white-space: nowrap;
      overflow: hidden;
      margin: 0 0%;
    }
    #mixedSlider .MS-content .item {
      display: inline-block;
      width: 50%;
      position: relative;
      vertical-align: top;
      overflow: hidden;
      height: 100%;
      white-space: normal;
      padding: 0 10px;
    }
    @media (max-width: 991px) {
      #mixedSlider .MS-content .item {
        width: 50%;
      }
    }
    @media (max-width: 767px) {
      #mixedSlider .MS-content .item {
        width: 100%;
      }
    }
    #mixedSlider .MS-content .item .imgTitle {
      position: relative;
    }
    #mixedSlider .MS-content .item .imgTitle .blogTitle {
      margin: 0;
      text-align: left;
      letter-spacing: 2px;
      color: #252525;
      font-style: italic;
      position: absolute;
      background-color: rgba(255, 255, 255, 0.5);
      width: 100%;
      bottom: 0;
      font-weight: bold;
      padding: 0 0 2px 10px;
    }
    #mixedSlider .MS-content .item .imgTitle img {
      height: auto;
      width: 100%;
    }
    #mixedSlider .MS-content .item p {
      font-size: 16px;
      margin: 2px 10px 0 5px;
      text-indent: 15px;
    }
    #mixedSlider .MS-content .item a {
      float: right;
      margin: 0 20px 0 0;
      font-size: 16px;
      font-style: italic;
      color: rgba(173, 0, 0, 0.82);
      font-weight: bold;
      letter-spacing: 1px;
      transition: linear 0.1s;
    }
    #mixedSlider .MS-content .item a:hover {
      text-shadow: 0 0 1px grey;
    }
    #mixedSlider .MS-controls button {
      position: absolute;
      border: none;
      background-color: #ffffff;
      padding:5px;
      border-radius:15px;
      outline: 0;
      font-size: 20px;
      top: 40%;
      color: rgba(0, 0, 0, 0.4);
      transition: 0.15s linear;
    }
    #mixedSlider .MS-controls button:hover {
      color: rgba(0, 0, 0, 0.8);
    }
    @media (max-width: 992px) {
      #mixedSlider .MS-controls button {
        font-size: 30px;
      }
    }
    @media (max-width: 767px) {
      #mixedSlider .MS-controls button {
        font-size: 20px;
      }
    }
    #mixedSlider .MS-controls .MS-left {
      left:15px;
    }
    @media (max-width: 767px) {
      #mixedSlider .MS-controls .MS-left {
        left: 20px;
      }
    }
    #mixedSlider .MS-controls .MS-right {
      right: 15px;
    }
    
    @media (max-width: 992px) {
        #slider{
            display:inline;
            margin-top:-85px;
        }
        
        #slider2{
            display:none;
        }
        
        #menu-icon{
            margin-top:15px;
            padding:0px; 
        }
        
        #melancong{
            display:none;
        }
        
        #melancong2{
            display:inline;
            padding:0px; 
            margin-top:-25px;
        }
        
        #box-travel{
            margin-top:20px;
            padding:15px;
        }
    }
    
    @media (min-width: 993px) {
        #slider{
            display:none;
        }
        
        #slider2{
            display:inline;
            margin-top:-30px;
        }
        
        #menu-icon{
            margin-top:10px;
            padding-left:20px; 
            padding-right:20px;
        }
        
        #melancong{
            display:inline;
        }
        
        #melancong2{
            display:none;
        }
        
        #box-travel{
            margin-top:10px;
            padding:15px;    
        }
    }
    
    @media (max-width: 990px) {
        #left_slider{
            margin-left:-30px;
            background-color:none;
        }
        
        .carousel a.carousel-control-prev{
            background-color:none;
            padding:0px;
        }
        
        #right_slider{
            margin-right:-30px;
            background-color:none;
        }
        
        .carousel a.carousel-control-next{
            background-color:none;
            padding:0px;
        }
        
        .img-trx{
            display:none;
        }
    }
    
    @media (min-width: 991px) {
        #left_slider{
            margin-left:100px;
        }
        
        #right_slider{
            margin-right:100px;
        }
        
        #left_slider2{
            margin-left:60px;
        }
        
        #right_slider2{
            margin-right:60px;
        }
        
        .img-trx{
            display:inline;
            padding-right:0px;
        }
    }
    
    @media (max-width: 500px) {
        #left_slider{
            margin-top:-7px;
        }
        
        #right_slider{
            margin-top:-7px;
        }
        
        #left_slider2{
            margin-left:-34px;
        }
        
        #right_slider2{
            margin-right:-34px;
        }
    }
    
    @media (min-width: 991px) {
        #product-div{ 
            margin-top:90px;
        }
    }
    
    @media (max-width: 990px) {
        #product-div{ 
            margin-top:15px;
        }
    }
    
    @media (min-width: 767px) {
        #title-news{
            font-size:21px;    
        }
        
        #title-news2{
            font-size:24px;    
        }
        
        #title-news3{
            font-size:28px;    
        }
    }

    @media (max-width: 990px) {
        #title-all{
            margin-top:-30px;
        }
        
        #title-all2{
            margin-top:0px;
        }
    }
    
    @media (min-width: 991px) {
        #title-all{
            margin-top:50px;
        }
        
        #title-all2{
            margin-top:60px;
        }
    }

    @media (max-width: 400px) {
        #dws{
            display:none;
        } 
        
        #dws2{
            display:inline;
            margin-bottom:5px;
        }
        
        #anak{
            display:none;
        } 
        
        #anak2{
            display:inline;
        }
        
        #bayi{
            display:none;
        } 
        
        #bayi2{
            display:inline;
        }
    }

    @media (min-width: 401px) {
        #dws{
            display:inline;
            margin-bottom:5px;
        } 
        
        #dws2{
            display:none;
        }
        
        #anak{
            display:inline;
        } 
        
        #anak2{
            display:none;
        }
        
        #bayi{
            display:inline;
        } 
        
        #bayi2{
            display:none;
        }
    }    
    .icon2{
		font-size:26px;
		color:<?php echo $color; ?>;
	}
	
	#cart_items{
    	font-size:14px;
    	color:#ffffff;
    	background-color:#f2184f;
    	padding:3px 5px 3px 5px;
    	border:2px solid #ffffff;
    	border-radius:10px;
    	font-weight:600;
    	cursor:pointer;
    	margin-top:10px;
    	opacity:0.85;
    }

    @media (max-width: 766px) {    
    	#cart {
    		position:fixed;
            right: 4%;
            font-size:18px;
            font-weight:bold; 
            z-index:1; 
            color:<?php echo $color; ?>;
            top:78%;
    	}
    }
    
    @media (min-width: 767px) {
    	#cart {
    		position:fixed;
            right: 1%;
            font-size:18px;
            font-weight:bold; 
            z-index:1; 
            color:<?php echo $color; ?>;
            top:76%; 
    	}
    }
	
	#bar-div{
		background-image: linear-gradient(#cccccc, #ffffff);
		color:#333333; 
		font-weight:bold; 
		font-size:27px;
		padding:5%;
	}
	
	#bar-div:hover{
		background-image: linear-gradient(#ff0000, #F76675);
		color:#fff; 
	}
	
	#bar-div2{
		background-image: linear-gradient(#cccccc, #ffffff);
		color:#333333; 
		font-weight:bold; 
		font-size:27px;
		padding:5%;
	}
	
	#bar-div2:hover{
		background-image: linear-gradient(#ff0000, #F76675);
		color:#fff; 
	}

    @media (max-width: 766px) { 
		#logo-web{ 
			height:40px;
			width:90px;
		}
	}

    @media (min-width: 767px) { 
		#logo-web{ 
			height:50px;
		}
	}

    @media (min-width: 991px) { 
		.layout_padding{
			margin-top:90px;
		}
	}

    @media (min-width:767px) and (max-width:900px) {
		.layout_padding{
			margin-top:0px;
		}
	}

    @media (max-width: 766px) { 
		.layout_padding{
			margin-top:-10px;
		}
	}
	
	.line-width{
		border:3px solid #fff;
		width:70px;
		margin-bottom:30px;
		background-color:#fff;
		-webkit-border-radius: 1px;
		-moz-border-radius: 1px;
		border-radius: 1px;
		-webkit-transition: all 0.2s linear;
		-moz-transition: all 0.2s linear;
		-o-transition: all 0.2s linear;
	}
	
	.part-pointer{
		background-image: linear-gradient(#ff0000, #F76675, #ff0000); 
		color:#FFFFFF; 
		padding:18px; 
		position:absolute; 
		width:92%; 
		height:100%; 
		z-index:15;
		display:none;
	}
	
	.part-pointer2{
		background-image: linear-gradient(#ff0000, #F76675, #ff0000); 
		color:#FFFFFF; 
		padding:18px; 
		position:absolute; 
		width:92%; 
		height:100%; 
		z-index:15;
		display:none;
	}
	
	.part-pointer3{
		background-image: linear-gradient(#ff0000, #F76675, #ff0000); 
		color:#FFFFFF; 
		padding:18px; 
		position:absolute; 
		width:92%; 
		height:100%; 
		z-index:15;
		display:none;
	}
	
	.part-pointer4{
		background-image: linear-gradient(#ff0000, #F76675, #ff0000); 
		color:#FFFFFF; 
		padding:18px; 
		position:absolute; 
		width:92%; 
		height:100%; 
		z-index:15;
		display:none;
	}
</style>

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98" style="font-family:'Montserrat';">

    <header class="top-header">
        <nav class="navbar header-nav navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href=""><img src="image/image/logo.PNG" alt="image" id="logo-web"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav" style="font-family:'Montserrat';">
                        <li><a class="nav-link" href="">Beranda</a></li>
                        <li><a class="nav-link" href="">Profil EPPID</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							  Informasi
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							  <a class="dropdown-item" href="#">Informasi Berkala</a>
							  <a class="dropdown-item" href="#">Informasi Tersedia Setiap Saat</a>
							  <a class="dropdown-item" href="#">Informasi Serta Merta</a>
							</div>
						</li>
						<li><a class="nav-link" href="">Alur Pengajuan KIP</a></li>
                        <li><a class="nav-link"><font class="fa fa-search" style="font-size:23px; color:#999999; margin-top:5px;"></font></a></li>
						<!--
                        <li style="padding-top:5px;">
							<table>
								<tr>
									<td>
										<img src="image/image/ina.png" style="height:30px;">
									</td>
									<td width-"10"></td>
									<td>
										<img src="image/image/eng.png" style="height:30px;">
									</td>
								</tr>
							</table>
						</li>
						-->
                    </ul>
                </div>
            </div>
        </nav>
    </header>
	
	<?php 
	if(isset($_GET['page'])){
		if($_GET['page'] == 'informasi'){
			include "page/informasi.php";
		} else if($_GET['page'] == 'profil'){
			include "page/profil.php";
		} else if($_GET['page'] == 'kontak'){
			include "page/kontak.php";
		} else if($_GET['page'] == 'jalur_pelayanan'){
			include "page/jalur_pelayanan.php";
		}
	} else {
		include "page/index.php";
	}
	?>
	
    <!-- Start Footer -->
    <footer class="footer-box" style="background-color:#191919;">
        <div style="width:90%; padding-left:5%;">
            <div class="row">
				<div class="col-md-12">
				   <a href=""><img src="image/image/logo-white.png" alt="image" style="height:70px;"></a>
				</div>
                <div class="col-md-5 margin-bottom_30">
				   <div style="margin-top:20px;">
				       <table>
				           <tr>
				               <td valign="top" style="padding-top:5px;">
				                   <font class="fa fa-map-marker" style="color:#FFFFFF; font-size:25px;"></font>
				               </td>
				               <td style="padding-left:15px;">
				                   <div style="color:#fff; font-size:15px; margin-bottom:3px;">PT Bahana Pembinaan Usaha Indonesia (Persero)</div>
				                   <div style="color:#fff;">Gedung Graha CIMB Niaga, 18th Floor</div>
				                   <div style="color:#fff;">Jl. Jendral Sudirman Kav.58</div>
				                   <div style="color:#fff;">RT.5/RW.3, Senayan, Kebayoran Baru</div>
				                   <div style="color:#fff;">Kota Jakarta Selatan, DKI Jakarta 12190</div>
				               </td>
				           </tr>
						   <!--
				           <tr>
				               <td valign="top">
				                   <font class="fa fa-phone" style="color:#FFFFFF;"></font>
				               </td>
				               <td style="padding-left:5px;">
				                   <div style="color:#fff; font-size:15px; margin-bottom:3px;">(+62) 021 2505080</div>
				               </td>
				           </tr>
				           <tr>
				               <td valign="top">
				                   <font class="fa fa-map-marker" style="color:#FFFFFF;"></font>
				               </td>
				               <td style="padding-left:5px;">
				                   <div style="color:#fff; font-size:15px; margin-bottom:3px;">cs@ifg.id</div>
				               </td>
				           </tr>
						   -->
				       </table>
				   </div>
				</div>
				<!--
				<div class="col-md-3 text-left" style="margin-bottom:35px;">
			     <div class="footer_blog footer_menu">
				    <div style="font-weight:bold; color:#FFF; font-size:21px; margin-bottom:7px;">Profil EPPID IFG</div>
				    <div>
						<ul> 
							<li><a href=""><font style="font-size:16px; color:#FFF;">Tentang EPPID IFG</font></a></li>
							<li><a href=""><font style="font-size:16px; color:#FFF;">Jalur dan Waktu Pelayanan</font></a></li>
						</ul>
					</div>
					<div style="height:20px;"></div>
				    <div style="font-weight:bold; color:#FFF; font-size:21px; margin-bottom:7px;">Informasi</div>
					<div>
						<ul> 
							<li><a href=""><font style="font-size:16px; color:#FFF;">Informasi Berkala</font></a></li>
							<li><a href=""><font style="font-size:16px; color:#FFF;">Informasi Tersedia Setiap Saat</font></a></li>
							<li><a href=""><font style="font-size:16px; color:#FFF;">Informasi Serta Merta</font></a></li>
						</ul>
					</div>	
				 </div>
				</div>
                
                <div class="col-md-3 text-left">
				    <div style="color:#000000; font-size:17px; margin-bottom:-15px;">
				    	<div style="font-weight:bold; color:#FFF; font-size:21px; margin-bottom:7px;">Alur Pengajuan KIP</div>
						<div style="color:#FFF; line-height:1.3;">Alur Pengajuan Informasi Publik Indonesia Financial Group</div>
						<div style="color:#FFF; line-height:1.3; margin-top:15px;">Alur Pengajuan Keberatan Publik Indonesia Financial Group</div>
				    </div>
                </div>
				-->
                <div class="col-md-4 text-left">
				    <div style="font-weight:bold; color:#000000; font-size:17px; margin-bottom:15px;">
				    	<div style="font-weight:bold; color:#FFF; font-size:21px; margin-bottom:7px;">Hubungi Kami</div>
				    </div>
					<table>
					   <tr>
						   <td valign="top">
						   	   <div style="border:1px solid #fff; background-color:#fff; padding:5px 8px 1px 8px;">
							   		<font class="fa fa-phone" style="color:#000; font-size:20px;"></font>
							   </div>		
						   </td>
						   <td style="padding-left:5px;">
							   <div style="color:#fff; font-size:17px; margin-bottom:3px;">(+62) 021 2505080</div>
						   </td>
					   </tr>
					   <tr>
					   		<td colspan="2" height="10"></td>
					   </tr>
					   <tr>
						   <td valign="top">
						   	   <div style="border:1px solid #fff; background-color:#fff; padding:5px 8px 1px 8px;">
							   		<font class="fa fa-envelope" style="color:#000; font-size:20px;"></font>
							   </div>		
						   </td>
						   <td style="padding-left:5px;">
							   <div style="color:#fff; font-size:17px; margin-bottom:3px;">cs@ifg.id</div>
						   </td>
					   </tr>
					</table>
				</div>
				
                <div class="col-md-3 text-left">
				    <div style="font-weight:bold; color:#000000; font-size:17px; margin-bottom:-15px;">
				    	<div style="font-weight:bold; color:#FFF; font-size:21px; margin-bottom:7px;">Ikuti Kami</div>
				    </div>
					<div>
						<table>
						  <tr>
							<td>
								<a href="https://" style="margin:5px 5px 5px 5px;" target="_blank">
									<div style="border:1px solid #fff; background-color:#fff; padding:7px 7px 5px 7px;">
										<font class="fa fa-instagram" style="color:#000; font-size:27px;"></font>
									</div>
								</a>
							</td>
							<td style="padding-left:10px;">
								<a href="https://" style="margin:5px 5px 5px 5px;" target="_blank">
									<div style="border:1px solid #fff; background-color:#fff; padding:7px 10px 5px 10px;">
										<font class="fa fa-facebook" style="color:#000; font-size:27px;"></font>
									</div>
								</a>
							</td>
							<td style="padding-left:10px;">
								<a href="https://" style="margin:5px 5px 5px 5px;" target="_blank">
									<div style="border:1px solid #fff; background-color:#fff; padding:7px 7px 5px 7px;">
										<font class="fa fa-twitter" style="color:#000; font-size:27px;"></font>
									</div>
								</a>
							</td>
							<td style="padding-left:10px;">
								<a href="https://" style="margin:5px 5px 5px 5px;" target="_blank">
									<div style="border:1px solid #fff; background-color:#fff; padding:9px 9px 9px 9px;">
										<img src="image/image/linkedin.png" width="20px;">
									</div>
								</a>
							</td>
						  </tr>
						</table>
					</div>
					<div style="position:absolute; margin-top:-210px; margin-left:-150px;">
						<img src="image/image/ifg_white.png" style="width:500px;">
					</div>
                </div>
                <div class="col-12">
					<p class="crp" style="color:#FFFFFF;">© 2022 IFG . All Rights Reserved.</p>
				</div>
            </div>
            
        </div>
    </footer>
    
    
    
    <a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="asset_frontend/js/jquery.min.js"></script>
	<script src="asset_frontend/js/popper.min.js"></script>
    <script src="asset_frontend/js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="asset_frontend/js/jquery.magnific-popup.min.js"></script>
    <script src="asset_frontend/js/jquery.pogo-slider.min.js"></script>
    <script src="asset_frontend/js/slider-index.js"></script>
    <script src="asset_frontend/js/smoothscroll.js"></script>
    <script src="asset_frontend/js/form-validator.min.js"></script>
    <script src="asset_frontend/js/contact-form-script.js"></script>
    <script src="asset_frontend/js/isotope.min.js"></script>
    <script src="asset_frontend/js/images-loded.min.js"></script>
    <script src="asset_frontend/js/custom.js"></script>
    <script src="asset_frontend/asset_frontend/slider/multislider.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    
    <script>
	$(document).ready(function(){
        $(".part-pointer-hover").hover(function(){
            $('.part-pointer').toggle();
        });
        $(".part-pointer-hover2").hover(function(){
            $('.part-pointer2').toggle();
        });
        $(".part-pointer-hover3").hover(function(){
            $('.part-pointer3').toggle();
        });
        $(".part-pointer-hover4").hover(function(){
            $('.part-pointer4').toggle();
        });
    });
	
    $(document).ready(function() {
		$('.datepicker').datepicker({
		  format: 'yyyy-mm-dd'
		});
		$('.timepicker').timepicker();
	});	
	
	(function ($) {
		$.fn.countTo = function (options) {
			options = options || {};
			
			return $(this).each(function () {
				// set options for current element
				var settings = $.extend({}, $.fn.countTo.defaults, {
					from:            $(this).data('from'),
					to:              $(this).data('to'),
					speed:           $(this).data('speed'),
					refreshInterval: $(this).data('refresh-interval'),
					decimals:        $(this).data('decimals')
				}, options);
				
				// how many times to update the value, and how much to increment the value on each update
				var loops = Math.ceil(settings.speed / settings.refreshInterval),
					increment = (settings.to - settings.from) / loops;
				
				// references & variables that will change with each update
				var self = this,
					$self = $(this),
					loopCount = 0,
					value = settings.from,
					data = $self.data('countTo') || {};
				
				$self.data('countTo', data);
				
				// if an existing interval can be found, clear it first
				if (data.interval) {
					clearInterval(data.interval);
				}
				data.interval = setInterval(updateTimer, settings.refreshInterval);
				
				// initialize the element with the starting value
				render(value);
				
				function updateTimer() {
					value += increment;
					loopCount++;
					
					render(value);
					
					if (typeof(settings.onUpdate) == 'function') {
						settings.onUpdate.call(self, value);
					}
					
					if (loopCount >= loops) {
						// remove the interval
						$self.removeData('countTo');
						clearInterval(data.interval);
						value = settings.to;
						
						if (typeof(settings.onComplete) == 'function') {
							settings.onComplete.call(self, value);
						}
					}
				}
				
				function render(value) {
					var formattedValue = settings.formatter.call(self, value, settings);
					$self.html(formattedValue);
				}
			});
		};
		
		$.fn.countTo.defaults = {
			from: 0,               // the number the element should start at
			to: 0,                 // the number the element should end at
			speed: 1000,           // how long it should take to count between the target numbers
			refreshInterval: 100,  // how often the element should be updated
			decimals: 0,           // the number of decimal places to show
			formatter: formatter,  // handler for formatting the value before rendering
			onUpdate: null,        // callback method for every time the element is updated
			onComplete: null       // callback method for when the element finishes updating
		};
		
		function formatter(value, settings) {
			return value.toFixed(settings.decimals);
		}
	}(jQuery));
	
	jQuery(function ($) {
	  // custom formatting example
	  $('.count-number').data('countToOptions', {
		formatter: function (value, options) {
		  return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
		}
	  });
	  
	  // start all the timers
	  $('.timer').each(count);  
	  
	  function count(options) {
		var $this = $(this);
		options = $.extend({}, options || {}, $this.data('countToOptions') || {});
		$this.countTo(options);
	  }
	});
</script>
</body>

</html>