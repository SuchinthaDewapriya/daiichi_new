@extends('layouts.main')


@section('content')




 
<style>
  .label-default {
  background-color: #e6e6e6;
  font-size: 14px;
  font-weight: 100; 
  color: #00284d;
}
.label-default[href]:hover,
.label-default[href]:focus {
  background-color: #5e5e5e;
}
form{border: none;}
.breadcrumb{background: #fff;}
</style>




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
form {
    border: 3px solid #f1f1f1;
}

.input1 {
     width: 80%;
    padding: 18px 18px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}


.container1 {
    padding: 26px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}

</style>

<style>
    /* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 20px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5px auto; /* 15% from the top and centered */
    border: 1px solid #888;
    width: 50%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
    /* Position it in the top right corner outside of the modal */
    position: absolute;
    right: 25px;
    top: 0; 
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

/* Close button on hover */

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}

@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}
    </style>
    
  <script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>  

<script>
function myFunction() {
    window.print();
}
</script> 
   


    <script>
    jQuery(function($) {
  $('#bookmark-this').click(function(e) {
    var bookmarkURL = window.location.href;
    var bookmarkTitle = document.title;

    if ('addToHomescreen' in window && addToHomescreen.isCompatible) {
      // Mobile browsers
      addToHomescreen({ autostart: false, startDelay: 0 }).show(true);
    } else if (window.sidebar && window.sidebar.addPanel) {
      // Firefox <=22
      window.sidebar.addPanel(bookmarkTitle, bookmarkURL, '');
    } else if ((window.sidebar && /Firefox/i.test(navigator.userAgent)) || (window.opera && window.print)) {
      // Firefox 23+ and Opera <=14
      $(this).attr({
        href: bookmarkURL,
        title: bookmarkTitle,
        rel: 'sidebar'
      }).off(e);
      return true;
    } else if (window.external && ('AddFavorite' in window.external)) {
      // IE Favorites
      window.external.AddFavorite(bookmarkURL, bookmarkTitle);
    } else {
      // Other browsers (mainly WebKit & Blink - Safari, Chrome, Opera 15+)
      alert('Press ' + (/Mac/i.test(navigator.userAgent) ? 'Cmd' : 'Ctrl') + '+D to bookmark this page.');
    }

    return false;
  });
});
    </script>
 <style>
            @media all and (max-width: 1600px) and (min-width: 599px) {
                .my-content { display: none;
                              overflow:hidden !important;
                              visibility: hidden;
/*                             margin-top: -2350px;*/
                } 

            }  
        </style>
         <style>
            @media all and (max-width: 599px) and (min-width: 200px) {
                .my-content1 { display: none;
                               overflow:hidden !important;
                               visibility: hidden;
                               position: relative;
                        }
                .fnt{font-size: 9px;}        
            }
          

            @media only screen
            and (min-device-width : 320px)
            and (max-device-width : 480px) {
                .my-content1 { display: none;
                               overflow:hidden !important;
                               visibility: hidden;
                               position: relative;
                        
                } 
                .my-content { display: block;
                              overflow:visible !important;
                              visibility: visible;
                             
                 
                }
                .fnt{font-size: 6px;
               } 
               h1{font-size: 30px;}
/*                .my-content2{margin-top: -2000px !important;}*/

            }
            
           @media only screen 
and (min-device-width : 320px) 
and (max-device-width : 568px) { 
.my-content1 { display: none;
                               overflow:hidden !important;
                               visibility: hidden;
                               position: relative;
                        
                } 
                .my-content { display: block;
                              overflow:visible !important;
                              visibility: visible;
                             
                 
                }
                .fnt{font-size: 6px;
               } 
               h1{font-size: 30px;}
               
               .slider{padding-right: 100px;}
}




        </style>  
    






  

    <body onload="initialize()" id="body">



      <a href="slider2.php?id=<?php $iddd ?>" class="slider"/>


            <div style="margin-top: 200px;"></div>


    
<div class="container-edit-fluid">
 <div class="container-edit">
    <h1 align="center">{{$apartmentdata->property_type}}</h1>

    <ol class="breadcrumb" style="background: #fff;">
            <li><a href="index.php">ホーム</a></li>
            <li class="active">{{$apartmentdata->property_type}}</li>
        </ol>



 </div>


<div class="container-edit">

<div class="panel panel-default" >
  <div class="panel-body">

<!--      desktop-->
      <div class="row my-content1">

      <div class="col-sm-4">
          <p style="color: #BD2C61; padding-left: 20px;"><b> {{$apartmentdata->property_type}}</b> <span style="padding-left: 20px;"> {{$apartmentdata->property_type}}</span><br>
            <b>{{$apartmentdata->flag_display}}</b>
        </p>
      </div>

        <div class="col-sm-8 my-content1" align="right" >
      <button type="submit" onclick="document.getElementById('id01').style.display='block'"  class="btn btn-info " style=" background-color:#FADD64; color:#000; border:0; padding-left: 20px; padding-right: 20px; margin-left: 10px; margin-right: 10px;" name="submit" id="submit">物件問合せ</button>
      <button type="submit" id="bookmark-this" class="btn btn-info " style=" background-color:#FADD64; color:#000; border:0; padding-left: 20px; padding-right: 20px; margin-left: 10px; margin-right: 10px;" name="submit" id="submit"> お気に入り登録</button>
      <button type="submit" onclick="myFunction()" class="btn btn-info " style=" background-color:#FADD64; color:#000; border:0; padding-left: 20px; padding-right: 20px; margin-left: 10px; margin-right: 10px;" name="submit" id="submit">プリント</button>

   <!-- Button to open the modal login form -->

<!-- The Modal -->
<div id="id01" class="modal" style="margin-top:170px;">
    <p align='right'>
        <button align='right' style="font-size: 35px; margin-right: 30px; color: #fff;  background: none; border: none;"  onclick="document.getElementById('id01').style.display='none'">&times;</button>
    </p>
  <!-- Modal Content -->
<div class="modal-content animate">
    <form  method="POST" name="contact_form" action="{{('/apartmentData')}}">
{{ csrf_field() }}

    <div class="container1">
        <div class="row">
            <div class="col-sm-12">
                <p style="font-size: 30px; text-align: center;">物件問合せ</p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-2">
               <p style="font-size: 16px; text-align: left;">物件名</p>
            </div>

           <div class="col-sm-10" align="left">
                <div class="form-group">
                    <p style="border: 1px solid #ccc; padding: 7px; background: #F2F2F2; border-radius: 4px; max-width: 430px; margin-left: 105px;">
                        <span align="left">{{$apartmentdata->property_type}} - {{$apartmentdata->flag_display}}</span>
                    </p>

                    <input type="hidden" style="color:#00284d;" class="form-control input1" id="pro_name" placeholder="" value='{{$apartmentdata->property_type}} - {{$apartmentdata->flag_display}}' name="pro_name" readonly="">
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-sm-2">
                <p style=" font-size: 16px; text-align: left;">物件所在地</p>
            </div>

             <div class="col-sm-10" align="left">
                <div class="form-group">
                    <p style="border: 1px solid #ccc; padding: 7px; background: #F2F2F2; border-radius: 4px; max-width: 430px; margin-left: 105px;">
                        <span align="left">{{$apartmentdata->location}}</span> code here
                    </p>
                    <input type="hidden" class="form-control input1" id="pro_location" placeholder="" value='{{$apartmentdata->location}}' name="pro_location" readonly="">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-2">
                <p style=" font-size: 16px;text-align: left;">お問合せ内容</p>
            </div>

            <div class="col-sm-10">
                 <div class="form-group" align="left" style="margin-left: 120px;">
                <input type="checkbox" id="content1"  value='物件を見たい' name="content[]"> &nbsp; 物件を見たい <br>
                <input type="checkbox" id="content2"  value='物件について詳しく知りたい' name="content[]"> &nbsp; 物件について詳しく知りたい <br>
                <input type="checkbox" id="content3"  value=' 購入に関して相談がしたい ' name="content[]"> &nbsp;  購入に関して相談がしたい<br>
                <input type="checkbox" id="content4"  value='資料を送ってほしい ' name="content[]"> &nbsp; 資料を送ってほしい <br>
                <br>
                備考欄 <br>（その他にご質問等ございましたらご記入ください。）

                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-sm-2">
                <p style=" font-size: 16px;text-align: left;">希望連絡方法</p>
            </div>

            <div class="col-sm-10">
                <div class="form-group" align="left" style="margin-left: 120px;">
                    <input type="radio"  id="contact_method"  value=' Eメール　' name="contact_method"> &nbsp;  Eメール　
                    <input type="radio"  id="contact_method"  value='電話　' name="contact_method" style="margin-left: 40px;"> &nbsp; 電話　　　
                    <input type="radio"  id="contact_method"  value='ファックス' name="contact_method" style="margin-left: 30px;"> &nbsp; ファックス

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-2">
                <p style=" font-size: 16px; margin-top: 15px;text-align: left;">	お名前</p>
            </div>

            <div class="col-sm-10">
                <div class="form-group">
                    <input type="text" class="form-control input1" id="name" placeholder="" value='' name="name" required>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-sm-2">
                <p style=" font-size: 16px;text-align: left; ">メールアドレス</p>
            </div>
            <div class="col-sm-10">
                <div class="form-group">
                    <input type="text" class="form-control input1" id="email"  value='' name="email" required>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-sm-2">
                <p style=" font-size: 16px; text-align: left;">	お電話番号</p>
            </div>

            <div class="col-sm-10">
                <div class="form-group">
                    <input type="text" class="form-control input1" id="phone" placeholder="" value='' name="phone">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-2">
                <p style=" font-size: 16px;text-align: left; ">	ファックス番号</p>
            </div>

            <div class="col-sm-10">
                <div class="form-group">
                    <input type="text" class="form-control input1" id="fax" placeholder="" value='' name="fax">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-2">
            </div>

            <div class="col-sm-10">
                <div class="form-group" align="left">
                    <button type="submit" class="btn btn-info" style=" background-color:#96bc6d; color:#FFF; border:0;" name="submit" id="submit">送信する</button>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button class="btn btn-info" onclick="document.getElementById('id01').style.display='none'" style=" background-color:#b52b27; color:#FFF; border:0;" >キャンセル</button>

                </div>
            </div>

        </div>

    </div>
  </form>

</div>
</div>
<!-- model end -->



</div>
      </div>



<!--mobile-->

   <div class="row my-content">

      <div class="row fnt">
          <p style="color: #BD2C61; padding-left: 20px;"><b> {{$apartmentdata->property_type}}</b> <span style="padding-left: 20px;"> {{$apartmentdata->flag_display}}</span><br>
            <b>{{$apartmentdata->property_type}}</b>
        </p>
      </div>

        <div class="col-sm-12 " align="left" >
      <button type="submit" onclick="document.getElementById('id01').style.display='block'"  class="btn btn-info fnt" style=" background-color:#FADD64; color:#000; border:0; padding-left: 10px; padding-right: 10px; margin-left: 5px; margin-right: 5px;" name="submit" id="submit">物件問合せ</button>
      <button type="submit" id="bookmark-this" class="btn btn-info fnt" style=" background-color:#FADD64; color:#000; border:0; padding-left: 10px; padding-right: 10px; margin-left: 5px; margin-right:5px;" name="submit" id="submit">お気に入り登録</button>
      <button type="submit" onclick="myFunction()" class="btn btn-info fnt" style=" background-color:#FADD64; color:#000; border:0; padding-left: 10px; padding-right: 10px; margin-left: 5px; margin-right: 5px;" name="submit" id="submit"> プリント</button>

   <!-- Button to open the modal login form -->

<!-- The Modal -->
<div id="id01" class="modal" >
    <p align='right'>
        <button align='right' style="font-size: 35px; margin-right: 30px; color: #fff;  background: none; border: none;"  onclick="document.getElementById('id01').style.display='none'">&times;</button>
    </p>
  <!-- Modal Content -->
<div class="modal-content animate">
    <form  method="POST" name="contact_form" action="">


    <div class="container1">
        <div class="row">
            <div class="col-sm-12">
                <p style="font-size: 30px; text-align: center;">物件問合せ</p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-2">
               <p style="font-size: 16px; text-align: left;">物件名</p>
            </div>

           <div class="col-sm-10" align="left">
                <div class="form-group">
                    <p style="border: 1px solid #ccc; padding: 7px; background: #F2F2F2; border-radius: 4px; max-width: 430px; margin-left: 105px;">
                        <span align="left">{{$apartmentdata->property_type}} - {{$apartmentdata->flag_display}}</span>
                    </p>

                    <input type="hidden" style="color:#00284d;" class="form-control input1" id="pro_name" placeholder="" value='{{$apartmentdata->property_type}} - {{$apartmentdata->flag_display}}' name="pro_name" readonly="">
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-sm-2">
                <p style=" font-size: 16px; text-align: left;">物件所在地</p>
            </div>

             <div class="col-sm-10" align="left">
                <div class="form-group">
                    <p style="border: 1px solid #ccc; padding: 7px; background: #F2F2F2; border-radius: 4px; max-width: 430px; margin-left: 105px;">
                        <span align="left">{{$apartmentdata->property_type}}</span>
                    </p>
                    <input type="hidden" class="form-control input1" id="pro_location" placeholder="" value='{{$apartmentdata->property_type}}' name="pro_location" readonly="">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-2">
                <p style=" font-size: 16px;text-align: left;">お問合せ内容</p>
            </div>

            <div class="col-sm-10">
                 <div class="form-group" align="left" style="margin-left: 120px;">
                <input type="checkbox" id="content1"  value='物件を見たい' name="content1"> &nbsp; 物件を見たい <br>
                <input type="checkbox" id="content2"  value='物件について詳しく知りたい' name="content2"> &nbsp; 物件について詳しく知りたい <br>
                <input type="checkbox" id="content3"  value=' 購入に関して相談がしたい ' name="content3"> &nbsp;  購入に関して相談がしたい<br>
                <input type="checkbox" id="content4"  value='資料を送ってほしい ' name="content4"> &nbsp; 資料を送ってほしい <br>
                <br>
                備考欄 <br>（その他にご質問等ございましたらご記入ください。）

                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-sm-2">
                <p style=" font-size: 16px;text-align: left;">希望連絡方法</p>
            </div>

            <div class="col-sm-10">
                <div class="form-group" align="left" style="margin-left: 120px;">
                    <input type="radio"  id="contact_method"  value=' Eメール　' name="contact_method"> &nbsp;  Eメール　
                    <input type="radio"  id="contact_method"  value='電話　' name="contact_method" style="margin-left: 40px;"> &nbsp; 電話　　　
                    <input type="radio"  id="contact_method"  value='ファックス' name="contact_method" style="margin-left: 30px;"> &nbsp; ファックス

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-2">
                <p style=" font-size: 16px; margin-top: 15px;text-align: left;">	お名前</p>
            </div>

            <div class="col-sm-10">
                <div class="form-group">
                    <input type="text" class="form-control input1" id="name" placeholder="" value='' name="name" required>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-sm-2">
                <p style=" font-size: 16px;text-align: left; ">メールアドレス</p>
            </div>
            <div class="col-sm-10">
                <div class="form-group">
                    <input type="text" class="form-control input1" id="email"  value='' name="email" required>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-sm-2">
                <p style=" font-size: 16px; text-align: left;">	お電話番号</p>
            </div>

            <div class="col-sm-10">
                <div class="form-group">
                    <input type="text" class="form-control input1" id="phone" placeholder="" value='' name="phone">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-2">
                <p style=" font-size: 16px;text-align: left; ">	ファックス番号</p>
            </div>

            <div class="col-sm-10">
                <div class="form-group">
                    <input type="text" class="form-control input1" id="fax" placeholder="" value='' name="fax">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-2">
            </div>

            <div class="col-sm-10">
                <div class="form-group" align="left">
                    <button type="submit" class="btn btn-info" style=" background-color:#96bc6d; color:#FFF; border:0;" name="submit" id="submit">送信する</button>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button class="btn btn-info" onclick="document.getElementById('id01').style.display='none'" style=" background-color:#b52b27; color:#FFF; border:0;" >キャンセル</button>

                </div>
            </div>

        </div>

    </div>
  </form>

</div>
</div>
<!-- model end -->



</div>
      </div>

<br>
      <hr style="margin: 0; padding: 0;">



      @php
      $getsale = DB::table('apartment')->where('id', $id)->first();
      @endphp
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:960px;height:480px;overflow:hidden;visibility:hidden;background-color:#24262e;">
      <!-- Loading Screen -->
      <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7']);">
          <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
      </div>
      <div data-u="slides" style="cursor:default;position:relative;top:0px;left:240px;width:720px;height:480px;overflow:hidden;">
          @if (!empty($getsale->img1))
          <div>
              <img data-u="image" src="../images/photos/{{$getsale->img1}}" />
              <img data-u="thumb" src="../images/photos/{{$getsale->img1}}" />
              <div u="caption" t="MCLIP|B" style="position: absolute; top: 430px; left: 0px; right: 0; width: 100%; height: 50px; background: #000; opacity: 0.8; color: #fff;">
              <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 50px; background-color: Black; opacity: 0.1; filter: alpha(opacity=80);"></div>
                <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 50px; color: White; font-size: 20px; font-weight: bold; line-height: 50px; text-align: center;">
                  <?php echo $getsale->comment1;  ?>
                </div>
              </div>
          </div>
          @endif
          @if (!empty($getsale->img2))
          <div>
              <img data-u="image" src="../images/photos/{{$getsale->img2}}" />
              <img data-u="thumb" src="../images/photos/{{$getsale->img2}}" />
              <div u="caption" t="MCLIP|B" style="position: absolute; top: 430px; left: 0px; right: 0; width: 100%; height: 50px; background: #000; opacity: 0.8; color: #fff;">
              <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 50px; background-color: Black; opacity: 0.1; filter: alpha(opacity=80);"></div>
                <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 50px; color: White; font-size: 20px; font-weight: bold; line-height: 50px; text-align: center;">
                  <?php echo $getsale->comment2;  ?>
                </div>
              </div>
          </div>
          @endif
          @if (!empty($getsale->img3))
          <div>
              <img data-u="image" src="../images/photos/{{$getsale->img3}}" />
              <img data-u="thumb" src="../images/photos/{{$getsale->img3}}" />
              <div u="caption" t="MCLIP|B" style="position: absolute; top: 430px; left: 0px; right: 0; width: 100%; height: 50px; background: #000; opacity: 0.8; color: #fff;">
              <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 50px; background-color: Black; opacity: 0.1; filter: alpha(opacity=80);"></div>
                <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 50px; color: White; font-size: 20px; font-weight: bold; line-height: 50px; text-align: center;">
                  <?php echo $getsale->comment3;  ?>
                </div>
              </div>
          </div>
          @endif
          @if (!empty($getsale->img4))
          <div>
              <img data-u="image" src="../images/photos/{{$getsale->img4}}" />
              <img data-u="thumb" src="../images/photos/{{$getsale->img4}}" />
              <div u="caption" t="MCLIP|B" style="position: absolute; top: 430px; left: 0px; right: 0; width: 100%; height: 50px; background: #000; opacity: 0.8; color: #fff;">
              <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 50px; background-color: Black; opacity: 0.1; filter: alpha(opacity=80);"></div>
                <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 50px; color: White; font-size: 20px; font-weight: bold; line-height: 50px; text-align: center;">
                  <?php echo $getsale->comment4;  ?>
                </div>
              </div>
          </div>
          @endif
          @if (!empty($getsale->img5))
          <div>
              <img data-u="image" src="../images/photos/{{$getsale->img5}}" />
              <img data-u="thumb" src="../images/photos/{{$getsale->img5}}" />
              <div u="caption" t="MCLIP|B" style="position: absolute; top: 430px; left: 0px; right: 0; width: 100%; height: 50px; background: #000; opacity: 0.8; color: #fff;">
                  <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 50px; background-color: Black; opacity: 0.1; filter: alpha(opacity=80);"></div>
                    <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 50px; color: White; font-size: 20px; font-weight: bold; line-height: 50px; text-align: center;">
                      <?php echo $getsale->comment5;  ?>
                    </div>
                  </div>
          </div>
          @endif
          @if (!empty($getsale->img6))
          <div>
              <img data-u="image" src="../images/photos/{{$getsale->img6}}" />
              <img data-u="thumb" src="../images/photos/{{$getsale->img6}}" />
              <div u="caption" t="MCLIP|B" style="position: absolute; top: 430px; left: 0px; right: 0; width: 100%; height: 50px; background: #000; opacity: 0.8; color: #fff;">
                  <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 50px; background-color: Black; opacity: 0.1; filter: alpha(opacity=80);"></div>
                    <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 50px; color: White; font-size: 20px; font-weight: bold; line-height: 50px; text-align: center;">
                      <?php echo $getsale->comment6;  ?>
                    </div>
                  </div>
          </div>
          @endif
          @if (!empty($getsale->img7))
          <div>
              <img data-u="image" src="../images/photos/{{$getsale->img7}}" />
              <img data-u="thumb" src="../images/photos/{{$getsale->img7}}" />
              <div u="caption" t="MCLIP|B" style="position: absolute; top: 430px; left: 0px; right: 0; width: 100%; height: 50px; background: #000; opacity: 0.8; color: #fff;">
                  <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 50px; background-color: Black; opacity: 0.1; filter: alpha(opacity=80);"></div>
                    <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 50px; color: White; font-size: 20px; font-weight: bold; line-height: 50px; text-align: center;">
                      <?php echo $getsale->comment7;  ?>
                    </div>
                  </div>
          </div>
          @endif
          @if (!empty($getsale->img8))
          <div>
              <img data-u="image" src="../images/photos/{{$getsale->img8}}" />
              <img data-u="thumb" src="../images/photos/{{$getsale->img8}}" />
              <div u="caption" t="MCLIP|B" style="position: absolute; top: 430px; left: 0px; right: 0; width: 100%; height: 50px; background: #000; opacity: 0.8; color: #fff;">
                  <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 50px; background-color: Black; opacity: 0.1; filter: alpha(opacity=80);"></div>
                    <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 50px; color: White; font-size: 20px; font-weight: bold; line-height: 50px; text-align: center;">
                      <?php echo $getsale->comment8;  ?>
                    </div>
                  </div>
          </div>
          @endif
          @if (!empty($getsale->img9))
          <div>
              <img data-u="image" src="../images/photos/{{$getsale->img9}}" />
              <img data-u="thumb" src="../images/photos/{{$getsale->img9}}" />
              <div u="caption" t="MCLIP|B" style="position: absolute; top: 430px; left: 0px; right: 0; width: 100%; height: 50px; background: #000; opacity: 0.8; color: #fff;">
                  <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 50px; background-color: Black; opacity: 0.1; filter: alpha(opacity=80);"></div>
                    <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 50px; color: White; font-size: 20px; font-weight: bold; line-height: 50px; text-align: center;">
                      <?php echo $getsale->comment9;  ?>
                    </div>
                  </div>
          </div>
          @endif
          @if (!empty($getsale->img10))
          <div>
              <img data-u="image" src="../images/photos/{{$getsale->img10}}" />
              <img data-u="thumb" src="../images/photos/{{$getsale->img10}}" />
              <div u="caption" t="MCLIP|B" style="position: absolute; top: 430px; left: 0px; right: 0; width: 100%; height: 50px; background: #000; opacity: 0.8; color: #fff;">
                  <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 50px; background-color: Black; opacity: 0.1; filter: alpha(opacity=80);"></div>
                    <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 50px; color: White; font-size: 20px; font-weight: bold; line-height: 50px; text-align: center;">
                      <?php echo $getsale->comment10;  ?>
                    </div>
                  </div>
          </div>
          @endif
          @if (!empty($getsale->img11))
          <div>
              <img data-u="image" src="../images/photos/{{$getsale->img11}}" />
              <img data-u="thumb" src="../images/photos/{{$getsale->img11}}" />
              <div u="caption" t="MCLIP|B" style="position: absolute; top: 430px; left: 0px; right: 0; width: 100%; height: 50px; background: #000; opacity: 0.8; color: #fff;">
                  <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 50px; background-color: Black; opacity: 0.1; filter: alpha(opacity=80);"></div>
                    <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 50px; color: White; font-size: 20px; font-weight: bold; line-height: 50px; text-align: center;">
                      <?php echo $getsale->comment11;  ?>
                    </div>
                  </div>
          </div>
          @endif
          @if (!empty($getsale->img12))
          <div>
              <img data-u="image" src="../images/photos/{{$getsale->img12}}" />
              <img data-u="thumb" src="../images/photos/{{$getsale->img12}}" />
              <div u="caption" t="MCLIP|B" style="position: absolute; top: 430px; left: 0px; right: 0; width: 100%; height: 50px; background: #000; opacity: 0.8; color: #fff;">
                  <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 50px; background-color: Black; opacity: 0.1; filter: alpha(opacity=80);"></div>
                    <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 50px; color: White; font-size: 20px; font-weight: bold; line-height: 50px; text-align: center;">
                      <?php echo $getsale->comment12;  ?>
                    </div>
                  </div>
          </div>
          @endif
          @if (!empty($getsale->img13))
          <div>
              <img data-u="image" src="../images/photos/{{$getsale->img13}}" />
              <img data-u="thumb" src="../images/photos/{{$getsale->img13}}" />
              <div u="caption" t="MCLIP|B" style="position: absolute; top: 430px; left: 0px; right: 0; width: 100%; height: 50px; background: #000; opacity: 0.8; color: #fff;">
                  <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 50px; background-color: Black; opacity: 0.1; filter: alpha(opacity=80);"></div>
                    <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 50px; color: White; font-size: 20px; font-weight: bold; line-height: 50px; text-align: center;">
                      <?php echo $getsale->comment13;  ?>
                    </div>
                  </div>
          </div>
          @endif
          @if (!empty($getsale->img14))
          <div>
              <img data-u="image" src="../images/photos/{{$getsale->img14}}" />
              <img data-u="thumb" src="../images/photos/{{$getsale->img14}}" />
              <div u="caption" t="MCLIP|B" style="position: absolute; top: 430px; left: 0px; right: 0; width: 100%; height: 50px; background: #000; opacity: 0.8; color: #fff;">
                  <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 50px; background-color: Black; opacity: 0.1; filter: alpha(opacity=80);"></div>
                    <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 50px; color: White; font-size: 20px; font-weight: bold; line-height: 50px; text-align: center;">
                      <?php echo $getsale->comment14;  ?>
                    </div>
                  </div>
          </div>
          @endif
          @if (!empty($getsale->img15))
          <div>
              <img data-u="image" src="../images/photos/{{$getsale->img15}}" />
              <img data-u="thumb" src="../images/photos/{{$getsale->img15}}" />
              <div u="caption" t="MCLIP|B" style="position: absolute; top: 430px; left: 0px; right: 0; width: 100%; height: 50px; background: #000; opacity: 0.8; color: #fff;">
                  <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 50px; background-color: Black; opacity: 0.1; filter: alpha(opacity=80);"></div>
                    <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 50px; color: White; font-size: 20px; font-weight: bold; line-height: 50px; text-align: center;">
                      <?php echo $getsale->comment15;  ?>
                    </div>
                  </div>
          </div>
          @endif
          @if (!empty($getsale->img16))
          <div>
              <img data-u="image" src="../images/photos/{{$getsale->img16}}" />
              <img data-u="thumb" src="../images/photos/{{$getsale->img16}}" />
              <div u="caption" t="MCLIP|B" style="position: absolute; top: 430px; left: 0px; right: 0; width: 100%; height: 50px; background: #000; opacity: 0.8; color: #fff;">
                  <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 50px; background-color: Black; opacity: 0.1; filter: alpha(opacity=80);"></div>
                    <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 50px; color: White; font-size: 20px; font-weight: bold; line-height: 50px; text-align: center;">
                      <?php echo $getsale->comment16;  ?>
                    </div>
                  </div>
          </div>
          @endif
      </div>
      <!-- Thumbnail Navigator -->
      <div data-u="thumbnavigator" class="jssort101" style="position:absolute;left:0px;top:0px;width:240px;height:480px;background-color:#000;" data-autocenter="2" data-scale-left="0.75">
          <div data-u="slides">
              <div data-u="prototype" class="p" style="width:99px;height:66px;">
                  <div data-u="thumbnailtemplate" class="t"></div>
                  <svg viewbox="0 0 16000 16000" class="cv">
                      <circle class="a" cx="8000" cy="8000" r="3238.1"></circle>
                      <line class="a" x1="6190.5" y1="8000" x2="9809.5" y2="8000"></line>
                      <line class="a" x1="8000" y1="9809.5" x2="8000" y2="6190.5"></line>
                  </svg>
              </div>
          </div>
      </div>
      <!-- Arrow Navigator -->
      <div data-u="arrowleft" class="jssora093" style="width:50px;height:50px;top:0px;left:270px;" data-autocenter="2">
          <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
              <circle class="c" cx="8000" cy="8000" r="5920"></circle>
              <polyline class="a" points="7777.8,6080 5857.8,8000 7777.8,9920 "></polyline>
              <line class="a" x1="10142.2" y1="8000" x2="5857.8" y2="8000"></line>
          </svg>
      </div>
      <div data-u="arrowright" class="jssora093" style="width:50px;height:50px;top:0px;right:30px;" data-autocenter="2">
          <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
              <circle class="c" cx="8000" cy="8000" r="5920"></circle>
              <polyline class="a" points="8222.2,6080 10142.2,8000 8222.2,9920 "></polyline>
              <line class="a" x1="5857.8" y1="8000" x2="10142.2" y2="8000"></line>
          </svg>
      </div>
    </div>



<br>


    <h4>この物件に関する詳細</h4>
    <hr>


<!--  use only mobile screen -->
<div class="my-content">
  <table class="table table-bordered">

    <tbody>
    <div>
        <tr >
            <th  style="color:#fff;background: #BE2E62; min-width: 120px; "> </th>
      <td colspan="3"  style="color:#BE2E62;  ">{{$apartmentdata->price}}  '円'</td>
    </tr>

    <tr>
      <th  scope="row" style="color:#fff;background: #BE2E62; width: 25% ">敷金・礼金</th>
      <td  colspan="3"style="color:#BE2E62;">{{$apartmentdata->road_situation}}</td>
    </tr>

    <tr>
      <th scope="row" style="color:#fff;background: #BE2E62; width: 25% ">管理費など </th>
      <td colspan="3"style="color:#BE2E62;">{{$apartmentdata->location}} '円' </td>
    </tr>

    <tr>
      <th scope="row" style="color:#fff;background: #BE2E62; width: 25% ">所在地</th>
      <td colspan="3"style="color:#BE2E62;">{{$apartmentdata->nearst_station}}</td>
    </tr>
    <tr>
      <th scope="row" style="color:#fff;background: #BE2E62; width: 25% ">最寄駅</th>
      <td colspan="3"style="color:#BE2E62;">{{$apartmentdata->floor_type}}</td>
    </tr>
    <tr>
      <th scope="row" style="color:#fff;background: #BE2E62; width: 25% ">間取</th>
      <td colspan="3"style="color:#BE2E62;">{{$apartmentdata->building_area}}</td>
    </tr>
    <tr>
      <th scope="row" style="color:#fff;background: #BE2E62; width: 25% ">専有面積</th>
      <td colspan="3"style="color:#BE2E62;">{{$apartmentdata->land_area}} <sup>2</sup></td>
    </tr>
    <tr>
      <th scope="row" style="color:#fff;background: #BE2E62; width: 25% ">築年月</th>
      <td colspan="3"style="color:#BE2E62;">{{$apartmentdata->built_years}}</td>
    </tr>





     <tr>
      <th scope="row" style="color:#BE2E62; width: 25% ">交通機関</th>
      <td colspan="3"style="color:#BE2E62;">{{$apartmentdata->transpotation}}</td>

    </tr>

    <tr>
      <th scope="row" style="color:#BE2E62; width: 25% ">間取詳細</th>
      <td colspan="3"style="color:#BE2E62;">{{$apartmentdata->floor_plan}}</td>

    </tr>
    <tr>
      <th scope="row" style="color:#BE2E62; width: 25% ">所在階/階数</th>
      <td colspan="3"style="color:#BE2E62;">{{$apartmentdata->whereabouts_floor}}</td>

    </tr>

    <tr>
      <th scope="row" style="color:#BE2E62; width: 25% ">建物構造</th>
      <td colspan="3"style="color:#BE2E62;">{{$apartmentdata->building_structure}}</td>

    </tr>
    <tr>
      <th scope="row" style="color:#BE2E62; width: 25% ">バルコニー面積</th>
      <td colspan="3"style="color:#BE2E62;">{{$apartmentdata->land_rights}}</td>

    </tr>
      <tr>
      <th scope="row" style="color:#BE2E62; width: 25% ">主要採光面</th>
      <td colspan="3"style="color:#BE2E62;">{{$apartmentdata->repair_reserve}}</td>

    </tr>
     <tr>
      <th scope="row" style="color:#BE2E62; width: 25% ">契約期間</th>
      <td colspan="3"style="color:#BE2E62;">{{$apartmentdata->urban_planning}}</td>

    </tr>
      <tr>
      <th scope="row" style="color:#BE2E62; width: 25% ">住宅保険料/期間</th>
      <td colspan="3"style="color:#BE2E62;">{{$apartmentdata->land_category}}</td>

    </tr>
    <tr>
      <th scope="row" style="color:#BE2E62; width: 25% ">償却・敷引</th>
      <td colspan="3"style="color:#BE2E62;">{{$apartmentdata->use_district}}</td>

    </tr>
    <tr>
      <th scope="row" style="color:#BE2E62; width: 25% ">更新料</th>
      <td colspan="3"style="color:#BE2E62;">{{$apartmentdata->building_coverage}}</td>

    </tr>
    <tr>
      <th scope="row" style="color:#BE2E62; width: 25% ">現況</th>
      <td colspan="3"style="color:#BE2E62;">{{$apartmentdata->current_state}}</td>

    </tr>

      <tr>
      <th scope="row" style="color:#BE2E62; width: 25% ">引渡</th>
      <td colspan="3"style="color:#BE2E62;">{{$apartmentdata->delivery}}</td>

    </tr>

     <tr>
      <th scope="row" style="color:#BE2E62; width: 25% ">駐車場</th>
      <td colspan="3"style="color:#BE2E62;">{{$apartmentdata->parking_lot}}</td>

    </tr>
    <tr>
      <th scope="row" style="color:#BE2E62; width: 25% ">ポイント</th>
      <td colspan="3"style="color:#BE2E62;">{{$apartmentdata->point}}</td>

    </tr>


                <tr>
                    <th scope="row" style="color:#BE2E62; width: 25% ">設備・条件</th>
                    <td colspan="3"style="color:#BE2E62;">{{$apartmentdata->facilities_conditions}}</td>

                </tr>

                <tr>
                    <th scope="row" style="color:#BE2E62; width: 25% ">備考</th>
                    <td colspan="3"style="color:#BE2E62;">{{$apartmentdata->remarks}}</td>

                </tr>

  </tbody>
</table>
</div>



<!-- hide table only use desktop screen-->
<div class="my-content1">
  <table class="table table-bordered">

    <tbody>
    <div>
        <tr >
            <th  style="color:#fff;background: #BE2E62; width: 25% ">賃料</th>
      <td colspan="3"  style="color:#BE2E62;  ">{{$apartmentdata->price}} '万円'</td>
    </tr>

    <tr>
      <th  scope="row" style="color:#fff;background: #BE2E62; width: 25% ">敷金・礼金</th>
      <td  colspan="3"style="color:#BE2E62;">{{$apartmentdata->road_situation}}</td>
    </tr>

    <tr>
      <th scope="row" style="color:#fff;background: #BE2E62; width: 25% ">管理費など</th>
      <td colspan="3"style="color:#BE2E62;">{{$apartmentdata->location}} '円'</td>
    </tr>

    <tr>
      <th scope="row" style="color:#fff;background: #BE2E62; width: 25% ">所在地</th>
      <td colspan="3"style="color:#BE2E62;">{{$apartmentdata->nearst_station}}</td>
    </tr>
    <tr>
      <th scope="row" style="color:#fff;background: #BE2E62; width: 25% ">最寄駅</th>
      <td colspan="3"style="color:#BE2E62;">{{$apartmentdata->floor_type}}</td>
    </tr>
    <tr>
      <th scope="row" style="color:#fff;background: #BE2E62; width: 25% ">間取</th>
      <td colspan="3"style="color:#BE2E62;">{{$apartmentdata->building_area}}</td>
    </tr>
    <tr>
      <th scope="row" style="color:#fff;background: #BE2E62; width: 25% ">専有面積</th>
      <td colspan="3"style="color:#BE2E62;">{{$apartmentdata->land_area}} m<sup>2</sup></td>
    </tr>
    <tr>
      <th scope="row" style="color:#fff;background: #BE2E62; width: 25% ">築年月</th>
      <td colspan="3"style="color:#BE2E62;">{{$apartmentdata->built_years}}</td>
    </tr>





     <tr>
      <th scope="row" style="color:#BE2E62; width: 25% ">交通機関</th>
      <td colspan="3"style="color:#BE2E62;">{{$apartmentdata->transpotation}}</td>

    </tr>

    <tr>
      <th scope="row" style="color:#BE2E62; width: 25% ">間取詳細</th>
      <td colspan="3"style="color:#BE2E62;">{{$apartmentdata->floor_plan}}</td>

    </tr>
    <tr>
      <th scope="row" style="color:#BE2E62; width: 25% ">所在階/階数</th>
      <td colspan="3"style="color:#BE2E62;">{{$apartmentdata->whereabouts_floor}}</td>

    </tr>

    <tr>
      <th scope="row" style="color:#BE2E62; width: 25% ">建物構造</th>
      <td colspan="3"style="color:#BE2E62;">{{$apartmentdata->building_structure}}</td>

    </tr>
    <tr>
      <th scope="row" style="color:#BE2E62; width: 25% ">バルコニー面積</th>
      <td colspan="3"style="color:#BE2E62;">{{$apartmentdata->land_rights}}</td>

    </tr>
      <tr>
      <th scope="row" style="color:#BE2E62; width: 25% ">主要採光面</th>
      <td colspan="3"style="color:#BE2E62;">{{$apartmentdata->repair_reserve}}</td>

    </tr>
     <tr>
      <th scope="row" style="color:#BE2E62; width: 25% ">契約期間</th>
      <td colspan="3"style="color:#BE2E62;">{{$apartmentdata->urban_planning}}</td>

    </tr>
      <tr>
      <th scope="row" style="color:#BE2E62; width: 25% ">住宅保険料/期間</th>
      <td colspan="3"style="color:#BE2E62;">{{$apartmentdata->land_category}}</td>

    </tr>
    <tr>
      <th scope="row" style="color:#BE2E62; width: 25% ">償却・敷引</th>
      <td colspan="3"style="color:#BE2E62;">{{$apartmentdata->use_district}}</td>

    </tr>
    <tr>
      <th scope="row" style="color:#BE2E62; width: 25% ">更新料</th>
      <td colspan="3"style="color:#BE2E62;">{{$apartmentdata->building_coverage}}</td>

    </tr>
    <tr>
      <th scope="row" style="color:#BE2E62; width: 25% ">現況</th>
      <td colspan="3"style="color:#BE2E62;">{{$apartmentdata->current_state}}</td>

    </tr>

      <tr>
      <th scope="row" style="color:#BE2E62; width: 25% ">引渡</th>
      <td colspan="3"style="color:#BE2E62;">{{$apartmentdata->delivery}}</td>

    </tr>

     <tr>
      <th scope="row" style="color:#BE2E62; width: 25% ">駐車場</th>
      <td colspan="3"style="color:#BE2E62;">{{$apartmentdata->parking_lot}}</td>

    </tr>
    <tr>
      <th scope="row" style="color:#BE2E62; width: 25% ">ポイント</th>
      <td colspan="3"style="color:#BE2E62;">{{$apartmentdata->point}}</td>

    </tr>


                <tr>
                    <th scope="row" style="color:#BE2E62; width: 25% ">設備・条件</th>
                    <td colspan="3"style="color:#BE2E62;">{{$apartmentdata->facilities_conditions}}</td>

                </tr>

                <tr>
                    <th scope="row" style="color:#BE2E62; width: 25% ">備考</th>
                    <td colspan="3"style="color:#BE2E62;">{{$apartmentdata->remarks}}</td>

                </tr>



  </tbody>
</table>
</div>
  </div></div>


 </div>


            </div>

            <br>
<div class="container-edit-fluid " style="background: #F2F2F2;">

   <div class="container-edit" style="margin-top: 50px; margin-bottom: 50px;">
       <h3>Property Location</h3><br>


 <div style="float:left; position:relative; width:100%; ">
            <div id="map_canvas" style="width:100%;height:400px; border:1px darkgrey solid;"></div>
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



<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCb3DceRNZYYf8GcFtSCIHT-Rby9P_BYYQ"></script>

    <script type="text/javascript">
        var map;
        function initialize() {
            // Set static latitude, longitude value
            var latlng = new google.maps.LatLng(<?php echo (isset($lat)? $lat : "35.658995"); ?>, <?php echo (isset($lng)? $lng : "140.109880"); ?>);
            // Set map options
            var myOptions = {
                zoom: 16,
                center: latlng,
                panControl: true,
                zoomControl: true,
                scaleControl: true,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            // Create map object with options
            map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
            addMarker(new google.maps.LatLng(<?php echo (isset($lat)? $lat : "35.658995"); ?>, <?php echo (isset($lng)? $lng : "140.109880"); ?>), map);
        }
        function addMarker(latLng, map) {
            var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                draggable: true, // enables drag & drop
                animation: google.maps.Animation.DROP
            });

            return marker;
        }
        </script>


</div>

    </div>






@endsection