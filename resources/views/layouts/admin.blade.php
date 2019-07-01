<!DOCTYPE html>
<html lang="en-US">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="勝田台駅前の不動産会社です。【物件豊富】　女性スタッフがお待ちしています">
    <meta name="keyword" content="勝田台,不動産,勝田台駅,不動産屋,八千代市,佐倉市 一戸建て,土地,マンション,売買,賃貸物件情報" >

    <meta name="author" content="">

    <title>Daiichi Home Admin Dash Board</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('admin/css/plugins/metisMenu/metisMenu.min.css')}}" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="{{ asset('admin/css/plugins/timeline.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('admin/css/sb-admin-2.css')}}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{ asset('admin/css/plugins/morris.css')}}" rel="stylesheet">
<link rel="shortcut icon" type="../image/home-icon1.png" href="{{ asset('admin/image/home-icon1.png')}}">
    <!-- Custom Fonts -->
    <link href="{{ asset('admin/font-awesome-4.1.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">


    <script language="javascript">
  document.onmousedown = disableclick;
  status = "Right Click Disabled";
  Function disableclick(e)
  {
    if(event.button == 2)
    {
      alert(status);
      return false; 
    }
  }
</script>
 <script language="javascript">
$(document).keydown(function(event){
    if(event.keyCode==123){
    return false;
   }
else if(event.ctrlKey && event.shiftKey && event.keyCode==73){        
      return false;  //Prevent from ctrl+shift+i
   }
});

document.onkeydown = function(e) {
        if (e.ctrlKey && 
            (e.keyCode === 67 || 
             e.keyCode === 86 || 
             e.keyCode === 85 || 
             e.keyCode === 117)) {
//            alert('not allowed');
            return false;
        } else {
            return true;
        }
};


</script>  
<style>
#pbc{ background-color:#F8F8F8;}
</style>

<script src="{{ asset('admin/js/jquery-1.11.0.js')}}" type="text/javascript"></script>
<script src="{{ asset('admin/js/Jquery_new.js')}}" type="text/javascript"></script>
<script type='{{ asset('admin/text/javascript')}}' src='../js/bootstrap.js'></script>

<script src="{{ asset('admin/js/custom-js.js')}}" type="text/javascript"></script>

<!-- Data table includes start -->
<link href="{{ asset('admin/css/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('admin/css/dataTables.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('admin/css/fixed_header.css')}}" rel="stylesheet" type="text/css"/>

<script type='text/javascript' src='{{ asset('admin/js/jquery.dataTables.min.js')}}'></script>
<script type="text/javascript" src="{{ asset('admin/js/dataTables.bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('admin/js/fixed_header.js')}}"></script>
<!-- Data table includes end -->

<script language="javascript">
var qs = (function (a) {
  if (a == "")
  return {};
  var b = {};
  for (var i = 0; i < a.length; ++i)
  {
    var p = a[i].split('=', 2);
    if (p.length == 1)
    b[p[0]] = "";
    else
    b[p[0]] = decodeURIComponent(p[1].replace(/\+/g, " "));
  }
  return b;
})(window.location.search.substr(1).split('&'));

</script>
<style>
#map_container{
  width: 600px;
  height: 400px;;
  float: left;
}
#map_canvas{
  width: 90%;
  height: 97%;

  border: 1px solid darkgrey;
}
</style>


<script type=text/javascript>

function fun(value) {
  if (value.val != "") {
    var a = value.split("\\");

    var lastsegment = a[a.length - 1];

    ddd(lastsegment);
    //console.log(lastsegment);
  }

}
</script>


</head>

<style>
form{border: none;}
</style>

</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" id="pbc" href="{{ url('/home')}}"><font color="#000">ホーム &nbsp;&nbsp; /</font></a>
            <a class="navbar-brand" id="pbc" href="#"><font color="#000">管理パネル</font></a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    
                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-fw"></i> {{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                        </form>  
                  </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
            
                <ul class="nav" id="side-menu">
                   
                    <li>
                        <a class="@yield('active1')" href="{{ url('/home')}}"><i class="fa fa-dashboard fa-fw"></i> ダッシュボード</a>
                   
                    <li>
                    <a  class="@yield('active2')" href="{{ url('rental-information')}}"><i class="fa fa-edit fa-fw"></i> 賃貸物件情報</a>
                    </li>
                    
                    <li>
                        <a class="@yield('active3')" href="{{ url('sale-information')}}"><i class="fa fa-table fa-fw"></i> 売買物件情報</a>
                    </li>
                    
                    
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>
    @yield('content')
    

<!-- jQuery Version 1.11.0 -->
<script src="{{ asset('admin/js/jquery-1.11.0.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('admin/js/bootstrap.min.js')}}"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{ asset('admin/js/plugins/metisMenu/metisMenu.min.js')}}"></script>

<!-- Morris Charts JavaScript -->
<script src="{{ asset('admin/js/plugins/morris/raphael.min.js')}}"></script>
<script src="{{ asset('admin/js/plugins/morris/morris.min.js')}}"></script>
<script src="{{ asset('admin/js/plugins/morris/morris-data.js')}}"></script>

<!-- Custom Theme JavaScript -->
<script src="{{ asset('admin/js/sb-admin-2.js')}}"></script>

<!--Fresh Job Ajax-->


</body>

</html>

