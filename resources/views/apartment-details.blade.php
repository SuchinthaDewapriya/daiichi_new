@extends('layouts.main')


@section('content')











  

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



<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKXnfQtiaDrs5F6HV9GvnAa-bHqEm94Zo&sensor=false&libraries=places"></script>

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