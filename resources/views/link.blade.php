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
      </head>
      
          <body id="body">
              
            
              <div class="container-edit" style="margin-top: 250px; margin-bottom: 50px;">
                  <div class="panel panel-default" style="font: 20px Helvetica, sans-serif; color: #333;">
        <div class="panel-body">
            <div class="col-sm-1"></div>
            <div class="col-sm-10" align="center">
                <h1>お役立ちリンク集</h1><br>
                
              <table class="table table-bordered table-responsive main_box" style="border-color: #f09883 !important; font-size: 14px;  ">
       
        <tbody>
            
           <tr>
                 <th colspan="3" style="background: #ffffdf; text-align: center;">緊急のダイヤル</th> 
          </tr>
            <tr >
                <td width="25%"style="background: #ffecec;"></td>
                <td width="35%" style="background: #ffecec;">　</td> 
                <td width="35%" style="background: #ffecec;">関連リンク</td> 
          </tr>
          <tr>
              <td width="25%" style="background: #f0ffff;">警察への急報</td>
                <td width="35%" style="background: #eaeaea;">　（局番なし）110</td> 
                <td width="35%" style="background: #f7eeff;"></td> 
          </tr>
          <tr>
              <td width="25%" style="background: #f0ffff;">火事・救助・救急車</td>
                <td width="35%" style="background: #eaeaea;">　（局番なし）119</td> 
                <td width="35%" style="background: #f7eeff;"></td> 
          </tr>
           <tr>
              <td width="25%" style="background: #f0ffff;">電気の故障（漏電、停電等）</td>
                <td width="35%" style="background: #eaeaea;">　043-247-8511</td> 
                <td width="35%" style="background: #f7eeff;"><a href="http://www.tepco.co.jp/" target="_blank">東京電力</a></td> 
          </tr>
          <tr>
              <td width="25%" style="background: #f0ffff;">ガスについて</td>
                <td width="35%" style="background: #eaeaea;">　043-464-0111</td> 
                <td width="35%" style="background: #f7eeff;"><a href="http://www.chiba-gas.co.jp/" target="_blank">千葉ガス</a></td> 
          </tr>
           <tr>
              <td width="25%" style="background: #f0ffff;">電話の故障</td>
                <td width="35%" style="background: #eaeaea;">（局番なし）113</td> 
                <td width="35%" style="background: #f7eeff;"></td> 
          </tr>
          <tr>
              <td width="25%" style="background: #f0ffff;">金融機関</td>
              <td colspan="2" style="background: #fff4ff; text-align: center;">
                  <a href="http://www.chibabank.co.jp/" target="_blank">
                      <font size="-1">千葉銀行</font></a><font size="-1">／</font>
                      <font size="-2"><font size="-2"><font size="-2">
                      <a href="http://www.keiyobank.co.jp/" target="_blank">
                          <font size="-1">京葉銀行</font></a></font></font>
                      </font><font size="-1"><br>
              </font><font size="-2"><font size="-2">
                      <font size="-2"><a href="http://www.chibakogyo-bank.co.jp/index.html" target="_blank">
                          <font size="-1">千葉興業銀行</font></a></font></font></font><font size="-1">／</font>
                          <font size="-2"><font size="-2"><font size="-2">
                          <font size="-2"><a href="http://www.shinkin.co.jp/chibaskb/" target="_blank">
                              <font size="-1">千葉信用金庫</font></a><br>
       <a href="http://www.smbc.co.jp/" target="_blank">
                                  <font size="-2"><font size="-2"><font size="-2"><font size="-1">三井住友銀行</font>
                                      
                                  </font></font></font></a>
              </td> 
                
          </tr>
           <tr>
              <td width="25%" style="background: #f0ffff;">役所・役場</td>
              <td colspan="2" style="background: #fff4ff; text-align: center;">
                  <font size="-1"><a href="http://www.city.sakura.chiba.jp/" target="_blank">佐倉市役所</a>／
                  <a href="http://www.town.shisui.chiba.jp/" target="_blank">酒々井町役場<br>
                        </a></font><a href="http://www.city.narita.chiba.jp/" target="_blank">
                                            <font size="-1">成田市</font></a><font size="-1">／</font><font size="-1">
                                            <a href="http://www.city.tomisato.chiba.jp" target="_blank">富里市</a>
                                            </font><font size="-1">／</font><font size="-1">
                                            <a href="http://homepage2.nifty.com/yachimata/" target="_blank">八街市</a></font>／
                                            <font size="-1">
                            <a href="http://www.chosei-sanbu.gr.jp/16city/sanbu/index.htm" target="_blank">山武町役場</a>
                            </font>
              </td> 
                
          </tr>
        </tbody>
                 </table>   
                
            </div>   
      <div class="col-sm-1"></div>
        </div>
      </div>
              </div> 
              
           

          </body>
      <style>
          #toTop{
          position: fixed;
          bottom: 10px;
          right: 10px;
          cursor: pointer;
          display: none;
      }
      </style>
        <script>
         $(document).ready(function(){
            $('body').append('<div id="toTop" class="btn btn-info">\n\
      <span class="fa fa-arrow-up" style="font-size:30px;color:#fff;"></span></div>');
              $(window).scroll(function () {
                  if ($(this).scrollTop() != 0) {
                      $('#toTop').fadeIn();
                  } else {
                      $('#toTop').fadeOut();
                  }
              }); 
          $('#toTop').click(function(){
              $("html, body").animate({ scrollTop: 0 }, 600);
              return false;
          });
      });  
       </script>
@endsection