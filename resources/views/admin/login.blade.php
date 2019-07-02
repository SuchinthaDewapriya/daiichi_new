


<!DOCTYPE html> 
<html lang="en-US">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name=viewport content="width=device-width,initial-scale=1">
<title> つくば市の不動産売却、土地 - Login</title>
<link rel="shortcut icon" type="../image/x-icon" href="image/home-icon1.png">
<meta name="description" content="勝田台駅前の不動産会社です。【物件豊富】　女性スタッフがお待ちしています">
<meta name="keyword" content="勝田台,不動産,勝田台駅,不動産屋,八千代市,佐倉市 一戸建て,土地,マンション,売買,賃貸物件情報" >

<meta name="owner" content="">

<!-- This website developed by roshika. all source codes are copy right @ sunweb japan. Cannot distribute without permission -->

   <link href="{{ asset('admin/css/bootstrap-responsive.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('admin/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('admin/css/custom.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('admin/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('admin/css/style1.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('admin/css/styles.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('admin/css/responsive.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('admin/css/bootstrap.css')}}" rel="stylesheet" type="text/css"/>
        
        <style>
            .btn-refresh{
                cursor: pointer;
            }
        </style>
        
        <script type='text/javascript' src='{{ asset('admin/js/bootstrap.js')}}'></script>

        <script src="{{ asset('admin/js/custom-js.js')}}" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
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

</head>

<body>

    <div style="background-image: url({{ asset('images/image/logbg.jpg')}}); width: 100%;
      height: 100%; position: fixed; background-size:cover;">

     <div class="container-edit-fluid img-responsive" style="background-image: url({{ asset('images/image/bg.png')}}); width: 100%;
          height: 100%; position: absolute; background-size:cover;">
         <div class="col-sm-4" style="margin-top: 65px;">
             <style>

input[type=text], input[type=password] {
    width: 100%;
    padding: 8px 15px;
    margin: 5px 0;
    display: inline-block;
    border: 1px solid #0d233e;
    box-sizing: border-box;
    background: #0d233e;
    color: #fff;
}

button {
    background-color: #048fd8;
    color: white;
    padding: 10px 15px;
    margin: 5px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 30%;
    border-radius: 50%;
}

.container {
    padding: 40px;
    width: 100%
}
.container1 {
    padding-top: 10px;
    padding-left: 40px;
    padding-right: 40px;
    width: 100%
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
form{border: none;}
</style>




<form method="POST" action="{{ route('login') }}">
        @csrf
  <div class="imgcontainer">
      <img src="{{ asset('images/image/img_avatar3.png')}}" alt="Avatar" class="avatar">
  </div>

  <div class="container">
      <label style="color: #b6b8b9;"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="email" >
    @error('email')
    <span class="alert alert-warning" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror

    <label style="color: #b6b8b9;"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" >
    @error('password')
    <span class="alert alert-warning" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
    <p></p>

     <p>
        <div class="form-group">
            <div class="captcha">
                <span>{!! captcha_img() !!}</span> 
            </div>
        </div>
        <small for='message' style="color: #999;">Enter the code above here :</small><br>
        <input id="captcha" name="captcha" type="text" class="form-control"><br>
        @error('captcha')
        <span class="alert alert-warning" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <small style="color: #999;">Can't read the image? <a  class="btn-refresh">click</a> to refresh</small>
    </p>
    <button type="submit" name="login">Login</button>
<!--    <input type="checkbox" checked="checked"> <font color="#fff">Remember me</font>-->
<!--    <p style="color: #fff; text-align: center;">
        Don't have a Bitdefender account?<br>
        <a href="">Create one</a>
    </p>-->
    
    
  </div>
    

<!--  <div class="container1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw" style="color: #fff;">Forgot <a href="#">password?</a></span>
  </div>-->
</form>

 
     </div>

         <div class="col-sm-8"></div>

     </div></div>

<!--   <script>
   /* PLEASE DO NOT COPY AND PASTE THIS CODE. */
   (function() {if (!window['___grecaptcha_cfg']) { window['___grecaptcha_cfg'] = {}; };
       if (!window['___grecaptcha_cfg']['render']) { window['___grecaptcha_cfg']['render'] = 'onload'; };
       window['__google_recaptcha_client'] = true;var po = document.createElement('script');
       po.type = 'text/javascript';
       po.async = true;po.src = 'https://www.gstatic.com/recaptcha/api2/r20161215161951/recaptcha__en.js';
       var elem = document.querySelector('script[nonce]');var nonce = elem && elem.getAttribute('nonce');
       if (nonce) { po.setAttribute('nonce', nonce); }var s = document.getElementsByTagName('script')[0];
       s.parentNode.insertBefore(po, s);})();
   </script>
   <script src='https://www.google.com/recaptcha/api.js'></script>-->
   <script>
                $(".btn-refresh").click(function () {
                   $.ajax({
                       type: 'GET',
                       url: '{{ url('refresh_captcha')}}',
                       success:function (data){
                           $(".captcha span").html(data.captcha);
                       }
                   });
               });
               
           </script>
</body>

</html> 