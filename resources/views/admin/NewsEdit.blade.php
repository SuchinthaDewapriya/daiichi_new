<?php
error_reporting(0);

?>

<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name=viewport content="width=device-width,initial-scale=1">
        <title>ニュース編集</title>
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

    </head>

    
<body style="background: #CCFFCC;" >
 
    <div class="container-edit-fluid" style="margin-top: 30px;">
    <div class="panel panel-default">
    <div class="panel-body">
       
         <ol class="breadcrumb" style="background: #fff;">
                <li><a href="{{ url('/')}}">ホーム</a></li>
                <li><a href="{{ url('home')}}">管理パネル</a></li>
            <li class="active">編集アパート</li>
         </ol>
       
 
   
 <br>
 <br><br>
     
 <div class="col-sm-12 table-responsive" style="font-size: 12px;">
        
 
     <table class="table table-bordered">
            
         <tbody>
             <tr>
                 <td style="width: 50%">
                     <div align='center'>
    <b style="font-size:22pt;color:#003366;font-family:'ＭＳ Ｐゴシック'">賃貸物件情報</b>
                     </div>
     <font size='2'><!-- *ここから* -->
         <UL>
             <LI>ここは物件の登録ページです。
             <LI>1000件以上のデータは自動削除されます。
             <LI>このデータベースは自由にデータを登録/修正/削除することができます。
         </UL>
 
 
 <!-- *ここまでに記述* -->
     </font> 
     
     
       <hr>
         <br><br><br><br><br><br><br><br><br>
         <div class="panel panel-default">
   <div class="panel-body">
         <form action="" id ="updateForm" method="POST" enctype="multipart/form-data">
            @csrf
             <h4>最新ニュース</h4>
            <table class="table table-bordered">
                
           
 
             <tr>
                <td> News</td>
                <td> <input type='text' name='news' size='60' value=<?php  echo  $NewsEdit->news; ?> ></td>
 
             </tr>
 
               <tr>
                <td> Link</td>
                <td> <input type='text' name='link' size='60'   value= <?php  echo  $NewsEdit->link; ?> ></td>
 
             </tr>
 
            </table>
          
         
        
         
          <br>
            <button type="button" onclick="updateFunction({{$NewsEdit->id}})" class="btn btn-info" style=" background-color:#96bc6d; color:#FFF; border:0;" >Update</button>     
         </form>   
   </div></div>
                
                 </td>
          
                    
                 </tr>
             </tbody>
         </table>
     </div>  
      
    
           
       
   </div>
 </div>  
     </div> 
     
  
     <script>
         function updateFunction(id) {
            var updateForm = $('#updateForm').serialize();
            $.ajax({
                type: "POST",
                url: "{{ url('updateNews')}}" + '/' + id,
                data: updateForm,
                success: function (response) {
                    swal('Great Job!','Update Successfullt!','success');

                }
            });
         }
     </script>
     
     
 </body>
 </html>
