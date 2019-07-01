<style>

        .dropdown-menu > li.kopie > a {
            padding-left:5px !important;
        }
        
        .dropdown-submenu {
            position:relative !important;
            color: #fff !important;
        }
        .dropdown-submenu>.dropdown-menu {
           top:0 !important; left:100% !important;
           margin-top:0px !important;margin-left:2px !important;
        color: #fff !important;
         }
        
        .dropdown-submenu > a:after {
          border-color: transparent transparent transparent #333 !important;
          border-style: solid !important;
          border-width: 5px 0 5px 5px !important;
          content: " " !important;
          display: block !important;
          float: right !important;
          height: 0 !important;
          margin-right: -10px !important;
          margin-top: 5px !important;
          width: 0 !important;
        color: #fff !important;
        }
        
        .dropdown-submenu:hover>a:after {
            border-left-color:#555 !important;
        color: #fff !important;
         }
        
        .dropdown-menu > li > a:hover, .dropdown-menu > .active > a:hover {
          text-decoration: underline !important;
        color: #fff;
        
        }
        
        @media (max-width: 767px) {
        
          .navbar-nav  {
             display: inline !important;
             color: #fff !important;
          }
          .navbar-default .navbar-brand {
            display: inline !important;
            color: #fff !important;
          }
          .navbar-default .navbar-toggle .icon-bar {
            background-color: #ffe066 !important;
            color: #fff !important;
          }
        
          .navbar-default .navbar-nav .dropdown-menu > li > a {
            color: #fff !important;
            background-color: #ffc800 !important;
            border-radius: 1px !important;
            margin-top: 2px !important;
            text-decoration: none;
          }
          .navbar-default .navbar-nav .dropdown-menu > li {
            color: #fff !important;
            background-color: #ffc800 !important;
            border-radius: 1px !important;
            margin-top: 2px !important;
            text-decoration: none;
          }
          .navbar-default .navbar-nav .dropdown-menu > li > a:hover {
            color: #fff !important;
            background-color: #ffe066 !important;
            border-radius: 1px !important;
            margin-top: 2px !important;
            text-decoration: none !important;
          }
           .navbar-default .navbar-nav .open .dropdown-menu > li > a {
             color: #ffe066 !important;
             color: #fff !important;
           }
           .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
           .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
             background-color: #ffe066 !important;
           }
        
           .navbar-nav .open .dropdown-menu {
             border-bottom: 1px solid white !important;
             border-radius: 0 !important;
           }
          .dropdown-menu {
              padding-left: 0px !important;
          }
          .dropdown-menu .dropdown-menu {
              padding-left: 0px !important;
           }
           .dropdown-menu .dropdown-menu .dropdown-menu {
              padding-left: 0px !important;
           }
           li.dropdown.open {
            border: 0px solid red !important;
           }
        
        }
        
        @media (min-width: 768px) {
          ul.nav li:hover > ul.dropdown-menu {
            display: block !important;
          }
          #navbar {
            text-align: center !important;
          }
        }
        
        .dropdown-backdrop{
            position: static;
        }
        
        ul.nav li.dropdown:hover > ul.dropdown-menu {
        display: block;
        }
        @media (min-width: 979px) {
          ul.nav li.dropdown:hover > ul.dropdown-menu {
            display: block;
          }
        }
        
            @media all and (max-width: 599px) and (min-width: 320px) {
            ul.nav li.dropdown:hover > ul.dropdown-menu {
            display: block;
          }
        
        
        
        }
        
        
        </style>
        <style>
                    @media all and (max-width: 1600px) and (min-width: 599px) {
                        .my-content { display: none;
                                      overflow:hidden !important;
                                      visibility: hidden;
        /*                             margin-top: -2350px;*/
                        }
        
                    }
                </style>
        <script>
        $(function () {
            $('#header_nav').data('size', 'big');
        });
        
        $(window).scroll(function () {
            var $nav = $('#header_nav');
            if ($('body').scrollTop() > 0) {
                if ($nav.data('size') == 'big') {
                    $nav.data('size', 'small').stop().animate({
                        height: '-80px'
        
                    }, 600);
                }
            } else {
                if ($nav.data('size') == 'small') {
                    $nav.data('size', 'big').stop().animate({
                        height: '20px'
                    }, 600);
                }
            }
        });
        </script>
        
        <!--navbar-fixed-top-->
        
        <header id="header" >
        
                <nav id="main-nav" class="navbar navbar-default navbar-fixed-top    menu-bar " role="banner" >
        
                   <div id="header_nav" style="box-shadow: none;">
                    <p align="center" style="font-size: 10px; padding-top: 5px; font-weight: bold; " class="mast_box" id="header_nav">
        
                        <a style="text-decoration: none; color: #333;">酒々井の不動産、佐倉の不動産、一戸建て・アパート賃貸情報・中古マンション・分譲マンション・新築マンションなど</a>
        <!--            <img src="image/mast_bg.png"  class="img-responsive" />-->
                     </p>
                  </div>
        
                   <div class="container-edit-fluid" style="background: #fff;position: relative; " id="header_nav">
                    <div align="center" style="background: #fff; position: relative;"><a href="{{url('/')}}">
                            <img src="{{asset('images/header1.jpg')}}"  class="img-responsive" style="" /> </a></div>
                    </div>
        
                        <div style="background: #ffc800; height: 10px;"></div>
        
        
        
                    <div class=" menu-pad container-edit " style="padding-bottom:0 !important;  margin-bottom:0 !important; bottom:0; ">
        
        
                        <div class="navbar-header">
                              <p class="my-content" style="margin-bottom: -30px;margin-right: 20px;text-align: right;">Menu</p>
                            <button type="button" class="navbar-toggle"  data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
        
                        </div>
        
        
        
                        <div class="collapse navbar-collapse" align="center"  >
        
        <!--        <div class="col-sm-2 "><a href="http://sunwebjapan4.link/">
                        <img src="image/logo.png" class="img-responsive" style="box-shadow: 4px 5px 5px #ffc800; height: 80px;" align="center"  /></a>
                </div>-->
        <div class="col-sm-12" align="center"style="background: #009966;  color: #fff; "  >
        
                    <ul class="nav  navbar-nav header " style="text-align:center; padding-left: 50px;  padding-right: 50px; " >
        
        
        <li class="scroll" id="it1"><a href="{{url('/rental_category')}}" style="color: #fff; font-weight: bold;">賃貸物件</a></li>
        <!-- <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: #fff; font-weight: bold;"> 賃貸物件
                <span class="caret"></span>
                </a>
            <ul class="dropdown-menu">
                <li><a href="http://www.daiichihome.com/rent/apartment.php">アパート</a></li>
                <li><a href="http://www.daiichihome.com/rent/mansion.php">マンション</a></li>
                <li><a href="http://www.daiichihome.com/rent/detached.php">戸建</a></li>
                <li><a href="http://www.daiichihome.com/rent/shops_office.php">店舗・事務所</a></li>
        
            </ul>
        </li> -->
        <li class="dropdown" >
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: #fff; font-weight: bold;"> 売買物件
               <span class="caret"></span>
                </a>
                 <ul class="dropdown-menu" > 
                {{-- <li><a href="http://www.daiichihome.com/sale/mansion.php?name=新築マンション&name1=中古マンション">マンション</a></li>
                <li><a href="http://www.daiichihome.com/sale/mansion.php?name=新築戸建て&name1=中古戸建て">戸建</a></li>
                <li><a href="http://www.daiichihome.com/sale/mansion.php?name=土地">土地</a></li>
                <li><a href="http://www.daiichihome.com/sale/mansion.php?name=事業用・リゾート">事業用・リゾート</a></li>
                <li><a href="http://www.daiichihome.com/sale/mansion.php?name=収益物件">収益物件・アパート・ビル</a></li> --}}
                <li><a href="{{url('/mansion')}}">マンション</a></li>
                <li><a href="{{url('/mansion')}}">戸建</a></li>
                <li><a href="{{url('/mansion')}}">土地</a></li>
                <li><a href="{{url('/mansion')}}">事業用・リゾート</a></li>
                <li><a href="{{url('/mansion')}}">収益物件・アパート・ビル</a></li>
            </ul>
        </li>
        <li class="scroll" id="it1"><a href="{{url('/system')}}" style="color: #fff; font-weight: bold;">賃貸管理システム</a></li>
        
        <li class="scroll" id="it1"><a href="#" style="color: #fff; font-weight: bold;">タウン情報
           <span class="caret"></span>  </a>
           <ul class="dropdown-menu">
                <li><a href="{{url('/town_shisui')}}">酒々井町</a></li>
                <li><a href="{{url('/town_sakura')}}">佐倉市</a></li>
        <!--        <li><a href="http://sunwebjapan4.link/rent/detached.php">戸建</a></li>
                <li><a href="http://sunwebjapan4.link/rent/shops_office.php">店舗・事務所</a></li>-->
        
            </ul>
        </li>
        
        <li class="scroll" id="it1"><a href="{{url('/link')}}" style="color: #fff; font-weight: bold;">お役立ち情報</a></li>
        <li class="scroll" id="it1"><a href="{{url('/access')}}" style="color: #fff; font-weight: bold;">アクセス</a></li>
        
        <li class="scroll" id="it1"><a href="{{url('/company')}}" style="color: #fff; font-weight: bold;">会社案内</a></li> <!--company-->
        <li class="scroll" id="it1"><a href="{{url('/inquire')}}" style="color: #fff; font-weight: bold;">お問合せ</a></li>
        <!--<li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"> 情報
                <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="#">会社案内</a></li>
                <li><a href="#">求人情報</a></li>
        
                <li><a href="#">お問合せ</a></li>
            </ul>
        </li>-->
        
        <!--<li class="scroll" id="it1"><a href="#">私たちに関しては</a></li>-->
        
        <!--        <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                     <li><a href="#">COMPANY PROFILE</a></li>
        
                  <li><a href="#">MESSAGE FROM CEO</a></li>
        
                  <li><a href="#">MISSION AND VISION</a></li>
                  <li><a href="#">QUALITY POLICY</a></li>
        
        
                </ul>
              </li>-->
        
        <!--<li class="scroll" id="it1" style="background: #ffc800; ">
            <a href="http://sunwebjapan4.link/login.php" style="margin-top: -5px; font-size: 28px; ">
                <i  class="fa fa-user" aria-hidden="true"></i></a>
            <a href="http://sunwebjapan4.link/login.php" style="color: #fff; font-weight: bold;"> 管理者</a>
        </li>-->
        
        <!--         <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Contact Us
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                     <li><a href="#">COMPANY PROFILE</a></li>
        
                  <li><a href="#">MESSAGE FROM CEO</a></li>
        
                  <li><a href="#">MISSION AND VISION</a></li>
                  <li><a href="#">QUALITY POLICY</a></li>
        
        
                </ul>
              </li>-->
        
        
        </ul>
        
            </div>
        
        <!--        <div class="col-sm-1" >
                    <p style="margin-top: 15px; font-size: 30px; ">
                        <a href="#"><i  class="fa fa-user" aria-hidden="true"></i></a>
                    </p>
                </div>-->
        
            </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        
        </header><!--/header-->
        