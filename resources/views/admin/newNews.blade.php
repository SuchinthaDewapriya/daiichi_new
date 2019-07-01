@php
    error_reporting(0);
@endphp
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name=viewport content="width=device-width,initial-scale=1">
        <title>セール情報</title>
        <link rel="shortcut icon" type="../image/home-icon1.png" href="../image/home-icon1.png">
        <meta name="description" content="勝田台駅前の不動産会社です。【物件豊富】　女性スタッフがお待ちしています">
        <meta name="keyword" content="勝田台,不動産,勝田台駅,不動産屋,八千代市,佐倉市 一戸建て,土地,マンション,売買,賃貸物件情報" >

        <meta name="owner" content="">

        <!-- This website developed by sunwebJapan. all source codes are copy right @ sunweb japan. Cannot distribute without permission -->

        <link href="{{ asset('css/bootstrap-responsive.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/custom.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/style1.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/styles.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/responsive.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css"/>

        <script src="{{ asset('js/jquery.min.js')}}" type="text/javascript"></script>
        <script type='text/javascript' src='{{ asset('js/bootstrap.js')}}'></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <script src="{{ asset('js/custom-js.js')}}" type="text/javascript"></script>

        <script language="javascript">
            document.onmousedown = disableclick;
            status = "Right Click Disabled"
                    Function disableclick(e)
            {
                if (event.button == 2)
                {
                    alert(status);
                            return false;
                }
            }
        </script>
    </head>

    <body style="background: #CCFFCC;">
  
        <div class="container-edit-fluid" style="margin-top: 30px;">
           
            <div class="panel panel-default">
                <div class="panel-body">
          
                <ol class="breadcrumb" style="background: #fff;">
                    <li><a href="https://ameba-lk.link/seiki-bill//">ホーム</a></li>
                    <li><a href="{{ url('home')}}">管理パネル</a></li>
                    <li class="active">ビューアパートを追加</li>
                </ol>
          
            <br>
         
    <div class="col-sm-12 table-responsive" style="font-size: 12px;">
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <td style="width: 50%">
                            <div align='center'>
            <b style="font-size:22pt;color:#003366;font-family:'ＭＳ Ｐゴシック'">編集セール情報</b></div>
                <font size='2'><!-- *ここから* -->
                    <UL>
                        <LI>ここで、登録ページのリストがあります。
                        <LI>データの1,000人以上が自動的に削除されます。
                        <LI>このデータベースは、/変更、自由にデータを削除/登録することができます。
                    </UL>
    <!-- *ここまでに記述* -->
                </font> 
            </td>               
        <td style="width: 50%"><span style="margin-left: 250px;">セール情報を編集</span>
                        
    </table>  
                                              
    </td>              
    </tr>
    </tbody>
    </table>
    <!-- <div class="panel panel-default">
      <div class="panel-body">
            <form action="<?php $_PHP_SELF ?>" method="POST" enctype="multipart/form-data">
                <h4>最新ニュース</h4>
             <input name='news' cols='80' class='inactive' rows='8'></input><br>
             <input type="text" name="link"><br>
          <button type="submit" class="btn btn-info" style=" background-color:#96bc6d; color:#FFF; border:0;" name="insert" id="insert">Insert</button>
            </form>   
      </div>
     </div> 
    </div>  -->
     
    <div class="panel panel-default">
    <div class="panel-body col-sm-offset-3">
      <form action="" id="newsForm" method="POST" enctype="multipart/form-data">
        @csrf
        <h4>最新ニュース</h4><br>
        <p>
          ニュースの見出し</p>
          <input type="text" class="clear" name="news" value="" style="width: 56%;"><br><br><br>
          <p>
            リンク</p>
            <input type="text" class="clear" name='link' value="" style="width: 56%;">
    
            <br>
            <br>
            <button type="button" onclick="Newnews()" class="btn btn-info" style=" background-color:#96bc6d; color:#FFF; border:0;" name="update" id="insert">追加する</button>
    
    
          </form>   
        </div></div>
    
      </div>
    </div>  
    </div> 
     <style>
    #map_container{ 
      width: 100%;
      height: 400px;;
      
    }
    #map_canvas{
      width: 100%;
      height: 97%;
      
      border: 1px solid darkgrey;
    }
    </style>   
    
    <script>
        function Newnews(){
            var newsForm = $("#newsForm").serialize();
            $.ajax({
                type: "POST",
                url: "{{ url('submitNewNews')}}",
                data: newsForm,
                success: function (response) {
                    swal('Great job!', 'Successfully added news!', 'success');
                    $('.clear').val("");
                }
            });
        }
    </script>
    
    </body>
    </html>