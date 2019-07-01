@extends('layouts.app')
@section('pageTitle', 'Daiichi Home - Sale Details')
@section('content')

<body onload="initialize()" id="body">


 
      <div style="margin-top: 200px;"></div>

<div class="container-edit-fluid">
 <div class="container-edit">
     <h1 align="center">{{$salename->property_type}}</h1>

        <ol class="breadcrumb">
        <li><a href="{{ url('/')}}">ホーム</a></li>
        <li class="active">{{$salename->property_type}}</li>
        </ol>
 </div>



 <div class="container-edit">

 <div class="panel panel-default " >
  <div class="panel-body ">



<!--    desktop view  -->

     <div class="row my-content1" style="margin-bottom: 10px;">
      <div class="col-sm-4"  >
          <p style="color: #BD2C61; padding-left: 20px;"><b> {{$salename->property_type}}</b>  <span style="padding-left: 20px;"> {{$salename->flag_display}}</span><br>
         </p>
      </div>
    <div class="col-sm-8 my-content1" align="right">
      <button type="submit" onclick="document.getElementById('id01').style.display='block'"  class="btn btn-info"  style=" background-color:#FADD64; color:#000; border:0; padding-left: 20px; padding-right: 20px; margin-left: 10px; margin-right: 10px;" name="submit" id="submit">物件問合せ</button>
      <button type="submit" id="bookmark-this" class="btn btn-info" style=" background-color:#FADD64; color:#000; border:0; padding-left: 20px; padding-right: 20px; margin-left: 10px; margin-right: 10px;" name="submit" id="submit">お気に入り登録</button>
      <button type="submit" onclick="myFunction()" class="btn btn-info" style=" background-color:#FADD64; color:#000; border:0; padding-left: 20px; padding-right: 20px; margin-left: 10px; margin-right: 10px;" name="submit" id="submit">プリント</button>

      <br>

    <!-- Button to open the modal login form -->

<!-- The Modal -->
<div id="id01" class="modal" style="margin-top:150px;">
    <p align='right'>
        <button align='right' style="font-size: 35px; margin-right: 30px; color: #fff;  background: none; border: none;"  onclick="document.getElementById('id01').style.display='none'">&times;</button>
    </p>
  <!-- Modal Content -->
    <div class="modal-content animate">
    <form  method="post" name="contact_form" action="{{ url('property-inquiry-mail')}}">

            {{csrf_field()}}
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
                        <span align="left">{{$salename->property_type}} - {{$salename->flag_display}}</span>
                    </p>
 
                    <input type="hidden" style="color:#00284d;" class="form-control input1" id="pro_name" placeholder="" value='{{$salename->property_type}} - <?php echo strtoupper ($salename->flag_display);  ?>' name="pro_name" readonly="">
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
                        <span align="left">{{$salename->location}}</span>
                    </p>
                    <input type="hidden" class="form-control input1" id="pro_location" placeholder="" value='{{$salename->location}}' name="pro_location" readonly="">
                </div>
            </div>
            <input type="hidden" name="type" value="sale">


        </div>

        <div class="row">
            <div class="col-sm-2">
                <p style=" font-size: 16px; text-align: left;">お問合せ内容</p>
            </div>

            <div class="col-sm-10">
                 <div class="form-group" align="left" style="margin-left: 120px;">
                <input type="checkbox" id="content1"  value='物件を見たい' name="content1"> &nbsp; 物件を見たい<br>
                <input type="checkbox" id="content2"  value=' 物件について詳しく知りたい' name="content2"> &nbsp;  物件について詳しく知りたい<br>
                <input type="checkbox" id="content3"  value='購入に関して相談がしたい ' name="content3"> &nbsp; 購入に関して相談がしたい<br>
                <input type="checkbox" id="content4"  value='資料を送ってほしい ' name="content4"> &nbsp; 資料を送ってほしい<br>
                <br>
                備考欄 <br>
（その他にご質問等ございましたらご記入ください。）

                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-sm-2">
                <p style=" font-size: 16px; text-align: left;">希望連絡方法</p>
            </div>

            <div class="col-sm-10">
                <div class="form-group" align="left" style="margin-left: 120px;">
                    <input type="radio"  id="contact_method"  value='Eメール' name="contact_method"> &nbsp;  Eメール
                    <input type="radio"  id="contact_method"  value='電話' name="contact_method" style="margin-left: 40px;"> &nbsp; 電話　　　
                    <input type="radio"  id="contact_method"  value='ファックス' name="contact_method" style="margin-left: 30px;"> &nbsp; ファックス
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-2">
                <p style=" font-size: 16px; margin-top: 15px; text-align: left;">	お名前</p>
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
                <p style=" font-size: 16px; text-align: left;">お電話番号</p>
            </div>

            <div class="col-sm-10">
                <div class="form-group">
                    <input type="text" class="form-control input1" id="phone" placeholder="" value='' name="phone">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-2">
                <p style=" font-size: 16px; text-align: left;">ファックス番号</p>
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



    </div></div>


    </div></div>




      <br>
       <hr style="margin: 0; padding: 0;">
<!-- 1st table     -->

<!--<table class="table table-bordered" style="text-align: center;">
  <thead>
      <tr style="background: #BE2E62; color: #fff;">
      <th>所在地</th>
      <th>最寄駅</th>
      <th>間取</th>
      <th>建物面積</th>
      <th>土地面積</th>
      <th>築年月</th>
      <th>接道状況</th>
      <th>賃料</th>
    </tr>
  </thead>
  <tbody>
      <tr style="color: #CC0000;">
      <td scope="row">{{$salename->location}}</td>
      <td>{{$salename->nearst_station}}</td>
      <td>{{$salename->floor_type}}</td>
      <td>{{$salename->building_area}}</td>
        <td>{{$salename->land_area}}</td>
      <td>{{$salename->built_years}}</td>
      <td>{{$salename->road_situation}}</td>

      <td>{{$salename->price}}</td>
    </tr>


  </tbody>
</table> -->


 <!-- 1st table     -->
<!--  <div class="container-edit">-->


<!--width="300" height="600"-->
<!--<Iframe src="slider.php" ></Iframe>-->
@php
    $getsale = DB::table('sale')->where('id', $id)->first();
@endphp
<div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:960px;height:480px;overflow:hidden;visibility:hidden;background-color:#24262e;">
    <!-- Loading Screen -->
    <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7']);">
        <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
    </div>
    <div data-u="slides" style="cursor:default;position:relative;top:0px;left:240px;width:720px;height:480px;overflow:hidden;">
        @if (!empty($getsale->img1))
        <div>
            <img data-u="image" src="../public/images/salephotos/{{$getsale->img1}}" />
            <img data-u="thumb" src="../public/images/salephotos/{{$getsale->img1}}" />
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
            <img data-u="image" src="../public/images/salephotos/{{$getsale->img2}}" />
            <img data-u="thumb" src="../public/images/salephotos/{{$getsale->img2}}" />
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
            <img data-u="image" src="../public/images/salephotos/{{$getsale->img3}}" />
            <img data-u="thumb" src="../public/images/salephotos/{{$getsale->img3}}" />
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
            <img data-u="image" src="../public/images/salephotos/{{$getsale->img4}}" />
            <img data-u="thumb" src="../public/images/salephotos/{{$getsale->img4}}" />
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
            <img data-u="image" src="../public/images/salephotos/{{$getsale->img5}}" />
            <img data-u="thumb" src="../public/images/salephotos/{{$getsale->img5}}" />
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
            <img data-u="image" src="../public/images/salephotos/{{$getsale->img6}}" />
            <img data-u="thumb" src="../public/images/salephotos/{{$getsale->img6}}" />
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
            <img data-u="image" src="../public/images/salephotos/{{$getsale->img7}}" />
            <img data-u="thumb" src="../public/images/salephotos/{{$getsale->img7}}" />
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
            <img data-u="image" src="../public/images/salephotos/{{$getsale->img8}}" />
            <img data-u="thumb" src="../public/images/salephotos/{{$getsale->img8}}" />
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
            <img data-u="image" src="../public/images/salephotos/{{$getsale->img9}}" />
            <img data-u="thumb" src="../public/images/salephotos/{{$getsale->img9}}" />
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
            <img data-u="image" src="../public/images/salephotos/{{$getsale->img10}}" />
            <img data-u="thumb" src="../public/images/salephotos/{{$getsale->img10}}" />
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
            <img data-u="image" src="../public/images/salephotos/{{$getsale->img11}}" />
            <img data-u="thumb" src="../public/images/salephotos/{{$getsale->img11}}" />
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
            <img data-u="image" src="../public/images/salephotos/{{$getsale->img12}}" />
            <img data-u="thumb" src="../public/images/salephotos/{{$getsale->img12}}" />
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
            <img data-u="image" src="../public/images/salephotos/{{$getsale->img13}}" />
            <img data-u="thumb" src="../public/images/salephotos/{{$getsale->img13}}" />
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
            <img data-u="image" src="../public/images/salephotos/{{$getsale->img14}}" />
            <img data-u="thumb" src="../public/images/salephotos/{{$getsale->img14}}" />
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
            <img data-u="image" src="../public/images/salephotos/{{$getsale->img15}}" />
            <img data-u="thumb" src="../public/images/salephotos/{{$getsale->img15}}" />
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
            <img data-u="image" src="../public/images/salephotos/{{$getsale->img16}}" />
            <img data-u="thumb" src="../public/images/salephotos/{{$getsale->img16}}" />
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
<!-- <style>
    @media all and (max-width: 1600px) and (min-width: 599px) {
  .my-content { display: none;
  overflow:hidden !important;
  visibility: hidden;
  }

}
</style>
<style>
    @media all and (max-width: 599px) and (min-width: 200px) {
  .my-content1 { display: none;
  overflow:hidden !important;
  visibility: hidden;
  }
    }

@media only screen
and (min-device-width : 320px)
and (max-device-width : 480px) {
.my-content1 { display: none;
  overflow:hidden !important;
  visibility: hidden;
  }
 .my-content { display: block;
  overflow:visible !important;
  visibility: visible;
  }


}

</style>

  hide table only use mobile screen
  <div class="my-content " >
<table class="table table-bordered">

    <tbody>

        <tr>
      <th scope="row" style="color:#fff;background: #BE2E62; width: 25% ">賃料</th>
      <td colspan="1"style="color:#BE2E62;">{{$salename->price}}</td>
       <th scope="row" style="color:#fff;background: #BE2E62; width: 25% ">接道状況</th>
      <td colspan="1"style="color:#BE2E62;">{{$salename->road_situation}}</td>
    </tr>


      <tr>
      <th scope="row" style="color:#fff;background: #BE2E62; width: 25% ">所在地</th>
      <td colspan="1"style="color:#BE2E62;">{{$salename->location}}</td>
       <th scope="row" style="color:#fff;background: #BE2E62; width: 25% ">最寄駅</th>
      <td colspan="1"style="color:#BE2E62;">{{$salename->nearst_station}}</td>
    </tr>

    <tr>
      <th scope="row" style="color:#fff;background: #BE2E62; width: 25% ">間取</th>
      <td colspan="1"style="color:#BE2E62;">{{$salename->floor_type}}</td>
       <th scope="row" style="color:#fff;background: #BE2E62; width: 25% ">建物面積</th>
      <td colspan="1"style="color:#BE2E62;">{{$salename->building_area}}</td>
    </tr>

       <tr>
      <th scope="row" style="color:#fff;background: #BE2E62; width: 25% ">土地面積</th>
      <td colspan="1"style="color:#BE2E62;">{{$salename->land_area}}</td>
       <th scope="row" style="color:#fff;background: #BE2E62; width: 25% ">築年月</th>
      <td colspan="1"style="color:#BE2E62;">{{$salename->built_years}}</td>
    </tr>




      <tr>
      <th scope="row" style="color:#BE2E62; width: 25% ">交通機関</th>
      <td colspan="1"style="color:#BE2E62;">{{$salename->transpotation}}</td>
    <th scope="row" style="color:#BE2E62; width: 25% ">間取り</th>
      <td colspan="1"style="color:#BE2E62;">{{$salename->floor_plan}}</td>

    </tr>


    <tr>
      <th scope="row" style="color:#BE2E62; width: 25% ">所在階/階数</th>
      <td colspan="1"style="color:#BE2E62;">{{$salename->whereabouts_floor}}</td>
     <th scope="row" style="color:#BE2E62; width: 25% ">建物構造</th>
      <td colspan="1"style="color:#BE2E62;">{{$salename->building_structure}}</td>

    </tr>


    <tr>
      <th scope="row" style="color:#BE2E62; width: 25% ">土地権利</th>
      <td colspan="1"style="color:#BE2E62;">{{$salename->land_rights}}</td>
     <th scope="row" style="color:#BE2E62; width: 25% ">修繕積立金</th>
      <td colspan="1"style="color:#BE2E62;">{{$salename->repair_reserve}}</td>

    </tr>

    <tr>
      <th scope="row" style="color:#BE2E62; width: 25% ">都市計画</th>
      <td colspan="1"style="color:#BE2E62;">{{$salename->urban_planning}}</td>
    <th scope="row" style="color:#BE2E62; width: 25% ">地目</th>
      <td colspan="1"style="color:#BE2E62;">{{$salename->land_category}}</td>

    </tr>

    <tr>
      <th scope="row" style="color:#BE2E62; width: 25% ">用途地域</th>
      <td colspan="1"style="color:#BE2E62;">{{$salename->use_district}}</td>
     <th scope="row" style="color:#BE2E62; width: 25% ">建ぺい率/容積率</th>
      <td colspan="1"style="color:#BE2E62;">{{$salename->building_coverage}}</td>

    </tr>

    <tr>
      <th scope="row" style="color:#BE2E62; width: 25% ">現況</th>
      <td colspan="3"style="color:#BE2E62;">{{$salename->current_state}}</td>

    </tr>

      <tr>
      <th scope="row" style="color:#BE2E62; width: 25% ">トップページ表示</th>
      <td colspan="3"style="color:#BE2E62;">{{$salename->page_display}}</td>

    </tr>
     <tr>
      <th scope="row" style="color:#BE2E62; width: 25% ">駐車場</th>
      <td colspan="1"style="color:#BE2E62;">{{$salename->parking_lot}}</td>
     <th scope="row" style="color:#BE2E62; width: 25% ">引渡</th>
      <td colspan="1"style="color:#BE2E62;">{{$salename->delivery}}</td>

    </tr>
     <tr>
      <th scope="row" style="color:#BE2E62; width: 25% ">ポイント</th>
      <td colspan="1"style="color:#BE2E62;">{{$salename->point}}</td>
    <th scope="row" style="color:#BE2E62; width: 25% ">備考</th>
         <td colspan="1"style="color:#BE2E62;">{{$salename->remarks}}</td>

    </tr>


    <tr>
       <th scope="row" style="color:#BE2E62; width: 25% ">設備・条件</th>
         <td colspan="3"style="color:#BE2E62;">{{$salename->facilities_conditions}}</td>

    </tr>

    <tr>
        <th scope="row" style="color:#BE2E62; width: 25% ">登録日時</th>
         <td colspan="3"style="color:#BE2E62;">{{$salename->registration_time}}</td>

    </tr>
    <tr>
        <th scope="row" style="color:#BE2E62; width: 25% ">情報 登録</th>
         <td colspan="3"style="color:#BE2E62;">{{$salename->information_reg}}</td>

    </tr>



  </tbody>
</table>
  </div>-->

<!--use only mobile screen   -->

 <div class="my-content">
  <table class="table table-bordered">

    <tbody>

        <tr>
      <th scope="row" style="color:#fff;background: #BE2E62; min-width: 120px;  ">価格</th>
      <td colspan="3"style="color:#BE2E62;">{{intval($salename->price)}} 万円</td>
    </tr>
    <tr>
      <th scope="row" style="color:#fff;background: #BE2E62; width: 25% ">接道状況</th>
      <td colspan="3"style="color:#BE2E62;">{{$salename->road_situation}}</td>
    </tr>

      <tr>
      <th scope="row" style="color:#fff;background: #BE2E62; width: 25% ">所在地</th>
      <td colspan="3"style="color:#BE2E62;">{{$salename->location}}</td>
    </tr>
    <tr>
      <th scope="row" style="color:#fff;background: #BE2E62; width: 25% ">最寄駅</th>
      <td colspan="3"style="color:#BE2E62;">{{$salename->nearst_station}}</td>
    </tr>
    <tr>
      <th scope="row" style="color:#fff;background: #BE2E62; width: 25% ">間取</th>
      <td colspan="3"style="color:#BE2E62;">{{$salename->floor_type}}</td>
    </tr>
    <tr>
      <th scope="row" style="color:#fff;background: #BE2E62; width: 25% ">建物面積</th>
      <td colspan="3"style="color:#BE2E62;">{{$salename->building_area}}</td>
    </tr>
    <tr>
      <th scope="row" style="color:#fff;background: #BE2E62; width: 25% ">土地面積</th>
      <td colspan="3"style="color:#BE2E62;">{{$salename->land_area}}</td>
    </tr>
    <tr>
      <th scope="row" style="color:#fff;background: #BE2E62; width: 25% ">築年月</th>
      <td colspan="3"style="color:#BE2E62;">{{$salename->built_years}}</td>
    </tr>




      <tr>
      <th scope="row" style="color:#BE2E62; width: 25% ">交通機関</th>
      <td colspan="3"style="color:#BE2E62;">{{$salename->transpotation}}</td>

    </tr>
    <tr>
      <th scope="row" style="color:#BE2E62; width: 25% ">間取り</th>
      <td colspan="3"style="color:#BE2E62;">{{$salename->floor_plan}}</td>

    </tr>

    <tr>
      <th scope="row" style="color:#BE2E62; width: 25% ">所在階/階数</th>
      <td colspan="3"style="color:#BE2E62;">{{$salename->whereabouts_floor}}</td>

    </tr>

    <tr>
      <th scope="row" style="color:#BE2E62; width: 25% ">建物構造</th>
      <td colspan="3"style="color:#BE2E62;">{{$salename->building_structure}}</td>

    </tr>
    <tr>
      <th scope="row" style="color:#BE2E62; width: 25% ">土地権利</th>
      <td colspan="3"style="color:#BE2E62;">{{$salename->land_rights}}</td>

    </tr>
    <tr>
      <th scope="row" style="color:#BE2E62; width: 25% ">修繕積立金</th>
      <td colspan="3"style="color:#BE2E62;">{{$salename->repair_reserve}}</td>

    </tr>
    <tr>
      <th scope="row" style="color:#BE2E62; width: 25% ">都市計画</th>
      <td colspan="3"style="color:#BE2E62;">{{$salename->urban_planning}}</td>

    </tr>
    <tr>
      <th scope="row" style="color:#BE2E62; width: 25% ">地目</th>
      <td colspan="3"style="color:#BE2E62;">{{$salename->land_category}}</td>

    </tr>
    <tr>
      <th scope="row" style="color:#BE2E62; width: 25% ">用途地域</th>
      <td colspan="3"style="color:#BE2E62;">{{$salename->use_district}}</td>

    </tr>
     <tr>
      <th scope="row" style="color:#BE2E62; width: 25% ">建ぺい率/容積率</th>
      <td colspan="3"style="color:#BE2E62;">{{$salename->building_coverage}}</td>

    </tr>
    <tr>
      <th scope="row" style="color:#BE2E62; width: 25% ">現況</th>
      <td colspan="3"style="color:#BE2E62;">{{$salename->current_state}}</td>

    </tr>
    <tr>
      <th scope="row" style="color:#BE2E62; width: 25% ">引渡</th>
      <td colspan="3"style="color:#BE2E62;">{{$salename->delivery}}</td>

    </tr>
<!--      <tr>
      <th scope="row" style="color:#BE2E62; width: 25% ">トップページ表示</th>
      <td colspan="3"style="color:#BE2E62;">{{$salename->page_display}}</td>

    </tr>           -->
     <tr>
      <th scope="row" style="color:#BE2E62; width: 25% ">駐車場</th>
      <td colspan="3"style="color:#BE2E62;">{{$salename->parking_lot}}</td>

    </tr>
     <tr>
      <th scope="row" style="color:#BE2E62; width: 25% ">ポイント</th>
      <td colspan="3"style="color:#BE2E62;">{{$salename->point}}</td>

    </tr>

  <tr>
        <th scope="row" style="color:#BE2E62; width: 25% ">設備・条件</th>
         <td colspan="3"style="color:#BE2E62;">{{$salename->facilities_conditions}}</td>

    </tr>

    <tr>
        <th scope="row" style="color:#BE2E62; width: 25% ">備考</th>
         <td colspan="3"style="color:#BE2E62;">{{$salename->remarks}}</td>

    </tr>

<!--    <tr>
        <th scope="row" style="color:#BE2E62; width: 25% ">登録日時</th>
         <td colspan="3"style="color:#BE2E62;">{{$salename->registration_time}}</td>

    </tr>
    <tr>
        <th scope="row" style="color:#BE2E62; width: 25% ">情報 登録</th>
         <td colspan="3"style="color:#BE2E62;">{{$salename->information_reg}}</td>

    </tr>-->



  </tbody>
  </table>
</div>

<!-- hide table only use desktop screen-->



<div class="my-content1">
  <table class="table table-bordered">

    <tbody>

        <tr>
      <th scope="row" style="color:#fff;background: #BE2E62; width: 25% ">価格</th>
      <td colspan="3"style="color:#BE2E62;">{{intval($salename->price)}} 万円</td>
    </tr>
    <tr>
      <th scope="row" style="color:#fff;background: #BE2E62; width: 25% ">接道状況</th>
      <td colspan="3"style="color:#BE2E62;">{{$salename->road_situation}}</td>
    </tr>

      <tr>
      <th scope="row" style="color:#fff;background: #BE2E62; width: 25% ">所在地</th>
      <td colspan="3"style="color:#BE2E62;">{{$salename->location}}</td>
    </tr>
    <tr>
      <th scope="row" style="color:#fff;background: #BE2E62; width: 25% ">最寄駅</th>
      <td colspan="3"style="color:#BE2E62;">{{$salename->nearst_station}}</td>
    </tr>
    <tr>
      <th scope="row" style="color:#fff;background: #BE2E62; width: 25% ">間取</th>
      <td colspan="3"style="color:#BE2E62;">{{$salename->floor_type}}</td>
    </tr>
    <tr>
      <th scope="row" style="color:#fff;background: #BE2E62; width: 25% ">建物面積</th>
      <td colspan="3"style="color:#BE2E62;">{{$salename->building_area}}</td>
    </tr>
    <tr>
      <th scope="row" style="color:#fff;background: #BE2E62; width: 25% ">土地面積</th>
      <td colspan="3"style="color:#BE2E62;">{{$salename->land_area}}</td>
    </tr>
    <tr>
      <th scope="row" style="color:#fff;background: #BE2E62; width: 25% ">築年月</th>
      <td colspan="3"style="color:#BE2E62;">{{$salename->built_years}}</td>
    </tr>




      <tr>
      <th scope="row" style="color:#BE2E62; width: 25% ">交通機関</th>
      <td colspan="3"style="color:#BE2E62;">{{$salename->transpotation}}</td>

    </tr>
    <tr>
      <th scope="row" style="color:#BE2E62; width: 25% ">間取り</th>
      <td colspan="3"style="color:#BE2E62;">{{$salename->floor_plan}}</td>

    </tr>

    <tr>
      <th scope="row" style="color:#BE2E62; width: 25% ">所在階/階数</th>
      <td colspan="3"style="color:#BE2E62;">{{$salename->whereabouts_floor}}</td>

    </tr>

    <tr>
      <th scope="row" style="color:#BE2E62; width: 25% ">建物構造</th>
      <td colspan="3"style="color:#BE2E62;">{{$salename->building_structure}}</td>

    </tr>
    <tr>
      <th scope="row" style="color:#BE2E62; width: 25% ">土地権利</th>
      <td colspan="3"style="color:#BE2E62;">{{$salename->land_rights}}</td>

    </tr>
    <tr>
      <th scope="row" style="color:#BE2E62; width: 25% ">修繕積立金</th>
      <td colspan="3"style="color:#BE2E62;">{{$salename->repair_reserve}}</td>

    </tr>
    <tr>
      <th scope="row" style="color:#BE2E62; width: 25% ">都市計画</th>
      <td colspan="3"style="color:#BE2E62;">{{$salename->urban_planning}}</td>

    </tr>
    <tr>
      <th scope="row" style="color:#BE2E62; width: 25% ">地目</th>
      <td colspan="3"style="color:#BE2E62;">{{$salename->land_category}}</td>

    </tr>
    <tr>
      <th scope="row" style="color:#BE2E62; width: 25% ">用途地域</th>
      <td colspan="3"style="color:#BE2E62;">{{$salename->use_district}}</td>

    </tr>
     <tr>
      <th scope="row" style="color:#BE2E62; width: 25% ">建ぺい率/容積率</th>
      <td colspan="3"style="color:#BE2E62;">{{$salename->building_coverage}}</td>

    </tr>
    <tr>
      <th scope="row" style="color:#BE2E62; width: 25% ">現況</th>
      <td colspan="3"style="color:#BE2E62;">{{$salename->current_state}}</td>

    </tr>
    <tr>
      <th scope="row" style="color:#BE2E62; width: 25% ">引渡</th>
      <td colspan="3"style="color:#BE2E62;">{{$salename->delivery}}</td>

    </tr>
<!--      <tr>
      <th scope="row" style="color:#BE2E62; width: 25% ">トップページ表示</th>
      <td colspan="3"style="color:#BE2E62;">{{$salename->page_display}}</td>

    </tr>           -->
     <tr>
      <th scope="row" style="color:#BE2E62; width: 25% ">駐車場</th>
      <td colspan="3"style="color:#BE2E62;">{{$salename->parking_lot}}</td>

    </tr>
     <tr>
      <th scope="row" style="color:#BE2E62; width: 25% ">ポイント</th>
      <td colspan="3"style="color:#BE2E62;">{{$salename->point}}</td>

    </tr>

  <tr>
        <th scope="row" style="color:#BE2E62; width: 25% ">設備・条件</th>
         <td colspan="3"style="color:#BE2E62;">{{$salename->facilities_conditions}}</td>

    </tr>

    <tr>
        <th scope="row" style="color:#BE2E62; width: 25% ">備考</th>
         <td colspan="3"style="color:#BE2E62;">{{$salename->remarks}}</td>

    </tr>

<!--    <tr>
        <th scope="row" style="color:#BE2E62; width: 25% ">登録日時</th>
         <td colspan="3"style="color:#BE2E62;">{{$salename->registration_time}}</td>

    </tr>
    <tr>
        <th scope="row" style="color:#BE2E62; width: 25% ">情報 登録</th>
         <td colspan="3"style="color:#BE2E62;">{{$salename->information_reg}}</td>

    </tr>-->



  </tbody>
  </table>
</div>
  </div></div>


 </div>

            </div>


<div class="container-edit-fluid " style="background: #F2F2F2;">

  <div class="container-edit" style="margin-top: 50px; margin-bottom: 50px;">
       <h3>Property Location</h3><br>
<!--       <input type="text" name="lat" value="{{$salename->lat}}" id="lat" />
        <input type="text" name="lng" value="{{$salename->lng}}" id="lng" />-->

<!--       <h5>    Url : -  <a href="" target="blank"></a></h5>
       -->
<!--          <div id="map_container">
  <div id="map_canvas"></div>
</div>-->

 <div style="float:left; position:relative; width:100%; ">
            <div id="map_canvas" style="width:100%;height:400px; border:1px darkgrey solid;"></div>
        </div>

</div>
    </div>
  </body>


@stop