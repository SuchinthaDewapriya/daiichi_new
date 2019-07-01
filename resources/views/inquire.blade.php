@extends('layouts.main')


@section('content')
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
  
  
      $("img1").mousedown(function(){
          return false;
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
  @media all and (max-width: 599px) and (min-width: 320px) {
      h3{
          font-size: 13px;
          font-weight: bold;
      }
  
  }
  .main_box {
      margin: 0px;
      padding: 5px;
      max-width: 100%;
      border-collapse: collapse;
      border-spacing: 0px;
      border: 1px solid #990000;
  }
  
  
  
  .data_box {
  
      color: #666666;
      font-weight: bold;
      
      
  }
  
  </style>
  <!--<script>
  $('#mc-embedded-subscribe').attr('disabled', 'disabled').addClass('button3');
  
  $('#mce-EMAIL, #mce-EMAIL2').change(function () {
      if ($('#mce-EMAIL').val() == $('#mce-EMAIL2').val()) {
          $('#mc-embedded-subscribe').removeAttr('disabled').removeClass('button3');
      } else {
          $('#mc-embedded-subscribe').attr('disabled', 'disabled').removeAttr('disabled').addClass('button3');
      }
  });
  </script>-->
  <script type="text/javascript">
      function confirmEmail() {
          var email = document.getElementById("email").value
          var confemail = document.getElementById("confemail").value
          if(email != confemail) {
              alert('Email Not Matching!');
          }
      }
  </script>
  </head>
  
  <body oncontextmenu="return false" id="body">

      <div style="margin-top: 280px;"></div>
  
      <div class="container-edit" style="margin-top: 20px; ">
  
          <div class="panel panel-default" >
              <div class="panel-body">
  
                  <div class="col-sm-2"></div>   
                  <div class="col-sm-8">
                      <h1 style=" margin-bottom: 30px; text-align: center;">お問合わせ</h1>    
                      <p style=" font-size: 12px; line-height: 25px;">下記フォームの項目に内容をご記入して送信してください。<br>
                      何でもお気軽にお問合わせ下さい。</p>
  
                      <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" name="form1" id="form1" method="POST" enctype="multipart/form-data" style="border: none;">
  
                          <table class="table table-bordered"  >
                              <tbody>
                                  <tr >
                                      <th style="background: #d9e8f7; color:#4d4d4d; border: 1px solid #bbb;  ">お名前</th>
                                      <td style=" border: 1px solid #bbb;">
                                          <input type='text' name='name' size='60' value='' required></td>
  
                                      </tr>
                                      <tr>
                                          <th style="background: #d9e8f7; color:#4d4d4d; border: 1px solid #bbb;">フリガナ</th>
                                          <td style=" border: 1px solid #bbb;"> 
                                              <input type='text' name='phonetic' size='60' value='' required></td>
                                          </tr>
  
                                          <tr>
                                              <th style="background: #d9e8f7; color:#4d4d4d; border: 1px solid #bbb;">電話番号</th>
                                              <td style=" border: 1px solid #bbb;"> 
                                                  <input type='text' name='phone' size='40' value='' required></td>
                                              </tr>
  
                                              <tr>
                                                  <th style="background: #d9e8f7; color:#4d4d4d; border: 1px solid #bbb;">メールアドレス</th>
                                                  <td style=" border: 1px solid #bbb;"> 
                                                      <!--                        <input type='email' name="EMAIL" size='60' value='' required="required" id="mce-EMAIL">-->
                                                      <!--                        <input name="author_email" id="author_email"  maxlength="254" title="Email address required" /> -->
                                                      <input name="email" type="email" required="" id="email" />
  
                                                  </td>
  
                                              </tr>
  
                                              <tr>
                                                  <th style="background: #d9e8f7; color:#4d4d4d; border: 1px solid #bbb;">メールアドレス確認</th>
                                                  <td style=" border: 1px solid #bbb;"> 
                                                      <!--                        <input type='email' name="EMAIL2" size='60' value='' id="mce-EMAIL2" required="required">-->
  <!--   <input name="author_confirm_email" id="author_confirm_email"  equalTo:"#author_email" maxlength="254" title="Please confirm your email address" /> 
  -->
  <input name="emailConfirm" type="email" required="" id="confemail" onblur="confirmEmail()"/>
  </td>
  </tr>
  
  <tr>
      <th style="background: #d9e8f7; color:#4d4d4d; border: 1px solid #bbb;">郵便番号</th>
      <td style=" border: 1px solid #bbb;"> 
          <input type='text' name='post_code' size='10' value='' required>
          <button type="submit" value="" name=""  >〒から住所を自動入力郵便番号を調べる</button>&nbsp;&nbsp;<span style="font-size: 11px;">郵便番号を調べる</span>
      </td>
  </tr>
  
  <tr>
      <th style="background: #d9e8f7; color:#4d4d4d; border: 1px solid #bbb;">住所</th>
      <td style=" border: 1px solid #bbb;">
          <input type='text' name='address' size='60' value='' required></td>
      </tr>
  
      <tr>
          <th style="background: #d9e8f7; color:#4d4d4d; border: 1px solid #bbb;">お問合わせ内容</th>
          <td style=" border: 1px solid #bbb;"> 
             <input type='checkbox' name='content1' value='売りたい'> &nbsp;売りたい &nbsp;&nbsp;&nbsp;
             <input type='checkbox' name='content2' value='買いたい'>&nbsp;買いたい &nbsp;&nbsp;&nbsp;
             <input type='checkbox' name='content3' value='借りたい'>&nbsp;借りたい &nbsp;<br>
             <input type='checkbox' name='content4' value='リフォーム'>&nbsp;リフォーム &nbsp;&nbsp;&nbsp;
             <input type='checkbox' name='content5' value='建て替え'>&nbsp;建て替え &nbsp;&nbsp;&nbsp;
             <input type='checkbox' name='content6' value='新築 '>&nbsp;新築 &nbsp;&nbsp;&nbsp;
             <input type='checkbox' name='content7' value='その他 '>&nbsp;その他 
         </td>
     </tr>
  
     <tr>
      <th style="background: #d9e8f7; color:#4d4d4d; border: 1px solid #bbb;">具体的な内容</th>
      <td style=" border: 1px solid #bbb;">
       <textarea name='inquire' cols='60' required class='inactive' rows='4'></textarea></td>
   </tr>
  
   <tr>
      <th style="background: #d9e8f7; color:#4d4d4d; border: 1px solid #bbb;">送信確認</th>
      <td style=" border: 1px solid #bbb;">  
          <input type='checkbox' name='confirm' value='この内容で送信する' required=""> &nbsp;この内容で送信する</td>
      </tr>
  </tbody>
  
  </table>
  <p style="text-align: center; font-size: 11px;">入力ありがとうございました。送信ボタンをクリックしてください。  </p>
  <p style="text-align: center; "> 
      <button type="submit" value="" name="subscribe" id="mc-embedded-subscribe"  class="button2">送 信</button>
  </p> 
  
  </form>   
  </div> 
  
  
  
  
  <div class="col-sm-2"></div> 
  
  
  
  
  
  </div>     
  </div>    
  
  
  
  </div>
@endsection