<?php error_reporting(0); ?>

<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name=viewport content="width=device-width,initial-scale=1"> 
  <title>賃貸物件情報</title>
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

  <script src="{{ asset('js/custom-js.js')}}" type="text/javascript"></script>

  <!-- Data table includes start -->
  <link href="{{ asset('admin/css/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>
  <link href="{{ asset('admin/css/dataTables.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
  <link href="{{ asset('admin/css/fixed_header.css')}}" rel="stylesheet" type="text/css"/>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <script type='text/javascript' src='{{ asset('admin/js/jquery.dataTables.min.js')}}'></script>
  <script type="text/javascript" src="{{ asset('admin/js/dataTables.bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('admin/js/fixed_header.js')}}"></script>
  <!-- Data table includes end -->

<script language="javascript">
$(document).ready(function(){
//Data table define start
$('#data_table').DataTable({
  "pageLength": 50,
  "lengthMenu": [50, 100, 150, 200, 250],
  "bFilter": false,
fixedHeader: { 
header: true
}
}); 
//Data table define end
});
</script>
  <!-- Data table includes end -->
  <script>
      $(document).ready(function(){
        $("#search_button").on("keyup", function() {
          var value = $(this).val().toLowerCase();
          $("#data_table tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
          });
        });
      });
      </script>

  <script language="javascript">
  var qs = (function (a) {
    if (a == "")
    return {};
    var b = {};
    for (var i = 0; i < a.length; ++i)
    {
      var p = a[i].split('=', 2);
      if (p.length == 1)
      b[p[0]] = "
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

<body style="background: #CCFFCC;" id="body">

  <div class="container-edit-fluid" style="margin-top: 30px;">

    <div class="panel panel-default">
      <div class="panel-body">

        <ol class="breadcrumb" style="background: #fff;">
            <li><a href="{{ url('/')}}">ホーム</a></li>
            <li><a href="{{ url('home')}}">管理パネル</a></li>
          <li class="active">ビューアパートを追加</li>
        </ol>



        <br>
        @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
        @endif

        <div class="col-sm-12 table-responsive" style="font-size: 12px;">


          <table class="table table-bordered">

            <tbody>
              <tr>
                <td style="width: 50%">
                  <div align='center'>
                    <b style="font-size:22pt;color:#003366;font-family:'ＭＳ Ｐゴシック'">賃貸物件情報</b></div>
                    <font size='2'><!-- *ここから* -->
                      <UL>
                        <LI>ここは物件の登録ページです。
                          <LI>1000件以上のデータは自動削除されます。
                            <LI>このデータベースは自由にデータを登録/修正/削除することができます。
                            </UL>


                            <!-- *ここまでに記述* -->
                          </font>


                          <hr>


                          <div id="map_container">
                            <div id="map_canvas"></div>
                          </div>





                        </td>

                        <td style="width: 50%"><span style="margin-left: 250px;">データを新しく追加します</span>

                          <table class="table table-bordered" >
                          <form action="" id="saverentalForm" method="POST" enctype="multipart/form-data" accept-charset="utf-8">
                            @csrf  
                            <tbody>
                                <tr>
                                  <th style="background: #66CC99; color:#4d4d4d;  width: 25% ">物件名</th>
                                  <td> <input type='text' class="inputclear" name='property_name' size='60' id="property_name" value='' ></td>

                                </tr>
                                <tr>
                                  <th style="background: #66CC99; color:#4d4d4d; width: 25% ">物件のタイプ</th>
                                  <td> <font size='2'>
                                    <input type='radio' class="inputclear" name='property_type' id="property_type" value='アパート'> アパート &nbsp;
                                    <input type='radio' class="inputclear" name='property_type' id="property_type" value='マンション'> マンション &nbsp;
                                    <input type='radio' class="inputclear" name='property_type' id="property_type" value='戸建て '> 戸建て  &nbsp;
                                    <input type='radio' class="inputclear" name='property_type' id="property_type" value='店舗やオフィス'> 店舗やオフィス &nbsp;
                                    <input type='radio' class="inputclear" name='property_type' id="property_type" value='店舗・事務所'> 店舗・事務所  &nbsp;
                                    <input type='radio' class="inputclear" name='property_type' id="property_type" value='倉庫'> 倉庫 &nbsp;
                                    <input type='radio' class="inputclear" name='property_type' id="property_type" value='駐車場 '> 駐車場  &nbsp;
                                    <input type='radio' class="inputclear" name='property_type' id="property_type" value='その他'> その他 &nbsp;
                                    
                                  </font></td>

                                </tr>
                                <tr>
                                  <th style="background: #66CC99; color:#4d4d4d; width: 25% ">部屋番号</th>
                                  <td> <input type='text' class="inputclear" name='room_no' id="room_no" size='60' onblur=" validation(value,'room_no','spn1')" >
                                  </br>
                                  <span id="spn1" style="display:none;color:#F70707;" >無効入力 </span>
                                </td>

                              </tr>
                              <tr>
                                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">エリア</th>
                                <td>
                                  <select name='twon' class="inputclear" id="twon" style="min-width: 150px; min-height: 25px;">
                                    <option value=''>-- select here --
                                      <option value='つくば市北部'>つくば市北部
                                        <option value='つくば市中央部'>つくば市中央部
                                          <option value='つくば市南部'>つくば市南部
                                          <option value='土浦市'>土浦市
                                          <option value='牛久市'>牛久市
                                          <option value='その他'>その他
                                          </select>
                                        </td>

                                      </tr>
                                      <tr>
                                        <th style="background: #66CC99; color:#4d4d4d; width: 25% ">住所 </th>
                                        <td> <input type='text' class="inputclear" name='location' id="location" size='60' value='' ></td>

                                      </tr>

                                      <tr>
                                        <th style="background: #009966; color:#fff; width: 25% ">地図上のプロパティの場所
                                        </th>
                                        <td>
                                          <input type="text" class="inputclear" placeholder="Search New Places" id="search_new_places" name="search_new_places" size='40' autofocus > <span style="color: #FF0000;">* これは必須です</span>
                                          <!--                <input type='text' name='id' size='60' id='id' value='<?php
                                          if (isset($id)) {
                                          echo $id;
                                        }
                                        ?>'>-->

                                      </td>

                                    </tr>


                                    <tr>
                                      <th style="background: #66CC99; color:#4d4d4d; width: 25% ">最寄り駅</th>
                                      <td>
                                        <input type="text" class="inputclear" name='nearst_station' id="nearst_station" style="min-width: 150px; min-height: 25px;">

                                      </td>

                                    </tr>
                                    <tr>
                                      <th style="background: #66CC99; color:#4d4d4d; width: 25% ">交通機関</th>
                                      <td> <input type='text' class="inputclear" name='transpotation' id="transpotation" size='60' value='' ></td>

                                    </tr>
                                    <tr>
                                      <th style="background: #66CC99; color:#4d4d4d; width: 25% ">フロアタイプ</th>
                                      <td> <input type='text' class="inputclear" name='floor_type' id="floor_type" size='60' value='' ></td>

                                    </tr>
                                    <tr>
                                      <th style="background: #66CC99; color:#4d4d4d; width: 25% ">フロアプラン詳細</th>
                                      <td> <input type='text' class="inputclear" name='floor_plan' id="floor_plan" size='60' value='' ></td>

                                    </tr>
                                    <tr>
                                      <th style="background: #66CC99; color:#4d4d4d; width: 25% ">賃料</th>
                                      <td> <input type='text' class="inputclear" name='price' id="price" size='60' onblur=" validation(value,'price','spn2')"  >
                                      </br>
                                      <span id="spn2" style="display:none;color:#F70707;" >無効入力 </span>
                                    </td>
                                  </tr>
                                  <tr>
                                    <th style="background: #66CC99; color:#4d4d4d; width: 25% ">管理費など</th>
                                    <td> <input type='text' class="inputclear" name='admin_expences' id="admin_expences" size='60' onblur=" validation(value,'admin_expences','spn3')"  >
                                    </br>
                                    <span id="spn3" style="display:none;color:#F70707;" >無効入力 </span>
                                  </td>
                                </tr>
                                <tr>
                                  <th style="background: #66CC99; color:#4d4d4d; width: 25% ">敷・礼</th>
                                  <td> <input type='text' class="inputclear" name='mat_rei' size='60' id="mat_rei" value='' ></td>
                                </tr>
                                <tr>
                                  <th style="background: #66CC99; color:#4d4d4d; width: 25% ">専有面積</th>
                                  <td> <input type='text' class="inputclear" name='occupied_area' id="occupied_area" size='60' onblur=" validation(value,'occupied_area','spn4')"  >
                                  </br>
                                  <span id="spn4" style="display:none;color:#F70707;" >無効入力 </span>
                                </td>
                              </tr>
                              <tr>
                                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">築年月</th>
                                <td> <input type='text' class="inputclear" name='built_years' id="built_years" size='60' value='' ></td>
                              </tr>
                              <tr>
                                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">建物構造</th>
                                <td> <input type='text' class="inputclear" name='building_structure' id="building_structure" size='60' value='' ></td>
                              </tr>
                              <tr>
                                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">所在階/階数</th>
                                <td> <input type='text' class="inputclear" name='wherebouts_floor' id="wherebouts_floor" size='60' value='' ></td>
                              </tr>
                              <tr>
                                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">バルコニー面積</th>
                                <td> <input type='text' class="inputclear" name='balcony_area' id="balcony_area" size='60' onblur=" validation(value,'balcony_area','spn5')"  >
                                </br>
                                <span id="spn5" style="display:none;color:#F70707;" >無効入力 </span>
                              </td>
                            </tr>
                            <tr>
                              <th style="background: #66CC99; color:#4d4d4d; width: 25% ">主要採光面</th>
                              <td> <input type='text' class="inputclear" name='lighting_surface' id="lighting_surface" size='60' value='' ></td>
                            </tr>
                            <tr>
                              <th style="background: #66CC99; color:#4d4d4d; width: 25% ">住宅保険料/期間</th>
                              <td> <input type='text' class="inputclear" name='home_insurance' id="home_insurance" size='60' value='' ></td>
                            </tr>
                            <tr>
                              <th style="background: #66CC99; color:#4d4d4d; width: 25% ">契約期間</th>
                              <td> <input type='text' class="inputclear" name='contract_period' id="contract_period" size='60' value='' ></td>
                            </tr>
                            <tr>
                              <th style="background: #66CC99; color:#4d4d4d; width: 25% ">更新料</th>
                              <td> <input type='text' class="inputclear" name='renewalfee' id="renewalfee" size='60' onblur=" validation(value,'renewalfee','spn6')"  >
                              </br>
                              <span id="spn6" style="display:none;color:#F70707;" >無効入力 </span>
                            </td>
                          </tr>
                          <tr>
                            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">償却・敷引</th>
                            <td> <input type='text' class="inputclear" name='write_offs' id="write_offs" size='60' value='' ></td>
                          </tr>
                          <tr>
                            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">引渡</th>
                            <td> <input type='text' class="inputclear" name='delivery' id="delivery" size='60' value='' ></td>
                          </tr>
                          <tr>
                            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">現況</th>
                            <td> <input type='text' class="inputclear" name='current_state' id="current_state" size='60' value='' ></td>
                          </tr>
                          <tr>
                            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">駐車場</th>
                            <td> <input type='text' class="inputclear" name='parking_lot' id="parking_lot" size='60' value='' ></td>
                          </tr>
                          <tr>
                            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">設備・条件</th>
                            <td>
                              <input type='checkbox' class="inputclear" name='facility1' id="facilities_conditions" value='角部屋'> 角部屋 &nbsp;
                              <input type='checkbox' class="inputclear" name='facility2'id="facilities_conditions"   value='駐車場付'> 駐車場付 &nbsp;
                              <input type='checkbox' class="inputclear" name='facility3' id="facilities_conditions"  value='2階以上'> 2階以上 &nbsp;
                              <input type='checkbox' class="inputclear" name='facility4' id="facilities_conditions"  value='最上階'> 最上階 &nbsp;
                              <input type='checkbox' class="inputclear" name='facility5' id="facilities_conditions"  value='礼金無'> 礼金無 &nbsp;
                              <input type='checkbox' class="inputclear" name='facility6' id="facilities_conditions"  value='預金ミュー'> 預金ミュー &nbsp; <br>
                              <input type='checkbox' class="inputclear" name='facility7' id="facilities_conditions"  value='公営水道'> 公営水道 &nbsp;
                              <input type='checkbox' class="inputclear" name='facility8' id="facilities_conditions"  value='ガスストーブ'> ガスストーブ &nbsp;
                              <input type='checkbox' class="inputclear" name='facility9' id="facilities_conditions"  value='バス・トイレ別 '> バス・トイレ別 &nbsp;
                              <input type='checkbox' class="inputclear" name='facility10' id="facilities_conditions"   value='給湯'> 給湯 &nbsp;
                              <input type='checkbox' class="inputclear" name='facility11' id="facilities_conditions"  value='追い焚き'> 追い焚き &nbsp;<br>
                              <input type='checkbox' class="inputclear" name='facility12' id="facilities_conditions"  value='エアコン'> エアコン &nbsp;
                              <input type='checkbox' class="inputclear" name='facility13' id="facilities_conditions"  value='ロフト付き'> ロフト付き &nbsp;
                              <input type='checkbox' class="inputclear" name='facility14' id="facilities_conditions"  value='室内洗濯機置場'> 室内洗濯機置場 &nbsp;
                              <input type='checkbox' class="inputclear" name='facility15' id="facilities_conditions"  value='CATV'> CATV &nbsp;
                              <input type='checkbox' class="inputclear" name='facility16' id="facilities_conditions"  value='CSアンテナ'> CSアンテナ &nbsp; <br>
                              <input type='checkbox' class="inputclear" name='facility17' id="facilities_conditions"  value='BS用アンテナ'> BS用アンテナ &nbsp;
                              <input type='checkbox' class="inputclear" name='facility18' id="facilities_conditions"  value='オートロック'>オートロック &nbsp;
                              <input type='checkbox' class="inputclear" name='facility19' id="facilities_conditions"  value='フローリング'> フローリング &nbsp;
                              <input type='checkbox' class="inputclear" name='facility20' id="facilities_conditions"  value='楽器相談'>楽器相談 &nbsp;
                              <input type='checkbox' class="inputclear" name='facility21' id="facilities_conditions"  value='オフィス可'> オフィス可
                              <input type='checkbox' class="inputclear" name='facility22' id="facilities_conditions"  value='応相談ペット'> 応相談ペット &nbsp;
                              <input type='checkbox' class="inputclear" name='facility23' id="facilities_conditions"  value='都市ガス'> 都市ガス &nbsp;
                              <input type='checkbox' class="inputclear" name='facility24' id="facilities_conditions"  value='プロパン'> プロパン &nbsp;
                              <input type='checkbox' class="inputclear" name='facility25' id="facilities_conditions"  value='オール電化'> オール電化 &nbsp;
                              <input type='checkbox' class="inputclear" name='facility26' id="facilities_conditions"  value='公共下水'> 公共下水 &nbsp;
                              <input type='checkbox' class="inputclear" name='facility27' id="facilities_conditions"  value='浄化槽'> 浄化槽 &nbsp;
                            </td>
                          </tr>

                          <tr>
                            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">新築・築浅</th>


                            <td> <input type='checkbox' class="inputclear" name='facility23' id="facilities_conditions1"  value='新築・築浅'> 新築・築浅 &nbsp;;</td>
                          </tr>
                          <tr>
                            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">駅近物件</th>
                            <td> <input type='checkbox' class="inputclear" name='facility24' id="facilities_conditions2"  value='駅近物件'> 駅近物件 &nbsp;</td>

                          </tr>
                          <tr>
                            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">ペットも同居</th>
                            <td> <input type='checkbox' class="inputclear" name='facility25' id="facilities_conditions3"  value='ペットも同居'>ペットも同居 &nbsp;</td>
                          </tr>
                          <tr>
                            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">礼金ゼロ・敷金ゼロ・フリーレント</th>
                            <td> <input type='checkbox' class="inputclear" name='facility26' id="facilities_conditions4"  value='礼金ゼロ・敷金ゼロ・フリーレント'> 礼金ゼロ・敷金ゼロ・フリーレント &nbsp;</td>
                          </tr>
                          <tr>
                            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">事業用・駐車場等</th>
                            <td> <input type='checkbox' class="inputclear" name='facility27' id="facilities_conditions5"  value='事業用・駐車場等'> 事業用・駐車場等 &nbsp;</td>
                          </tr>

                          <tr>
                            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">備考</th>
                            <td>  <textarea name='remarks' class="inputclear" cols='60' id="remarks" class='inactive' rows='4'></textarea></td>
                          </tr>
                          <tr>
                            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">ポイント</th>
                            <td> <input type='text' class="inputclear" name='point' id="point" size='60' value=''></td>
                          </tr>

                          <tr>
                            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">* あなたのカテゴリを検索</th>
                            <td>  <select class="inputclear" name='search_ur_category' id="search_ur_category">
                              <option value=''>-- select here --
                                <option value='1R'>1R
                                <option value='1K'>1K
                                <option value='1DK'>1DK
                                  <option value='2DK - 2LDK'>2DK - 2LDK
                                    <option value='3DK'>3DK
                                      <option value='戸建て'>戸建て
                                        <option value='店舗・オフィス'>店舗・オフィス
                                        </select></td>
                                      </tr>

                                      <tr>
                                        <th style="background: #66CC99; color:#4d4d4d; width: 25% ">フラグ表示（空白ボタンが表示されていないために）</th>
                                        <td>
                                          <input type='radio' class="inputclear" name='flag_display' id="flag_display" value='NEW!'> NEW! &nbsp;
                                          <input type='radio' class="inputclear" name='flag_display' id="flag_display" value='更新'> 更新  &nbsp;
                                          <input type='radio' class="inputclear" name='flag_display' id="flag_display" value=' 契約済'>  契約済  &nbsp;
                                          <input type='radio' class="inputclear" name='flag_display' id="flag_display" value='値下げ'> 値下げ！ &nbsp;
                                          <input type='radio' class="inputclear" name='flag_display' id="flag_display" value='商談中'> 商談中  &nbsp;
                                          <input type='radio' class="inputclear" name='flag_display' id="flag_display" value='None'> None  </td>
                                        </tr>
                                        <tr>
                                          <th style="background: #66CC99; color:#4d4d4d; width: 25% ">トップページ表示</th>
                                          <td>  
                                            <input type='radio' class="inputclear" name='page_display' id="page_display" value='表示しない'> 表示しない &nbsp;
                                            <input type='radio' class="inputclear" name='page_display' id="page_display" value='表示する'> 表示する &nbsp;
                                          </td>
                                        </tr>

                                        <tr>
                                          <th style="background: #66CC99; color:#4d4d4d; width: 25% ">編集用パスワード</th>
                                          <td> <input type='text' class="inputclear" name='editpsword' id="editpsword" size='60' value='' ></td>
                                        </tr>
                                        <!--                image upload-->
                                        <tr>
                                          <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像01</th>
                                          <td> <input type="file" class="inputclear1" name="img1" id="img1"><br> <font size='2' color='#FF0000'>* 注目のメインハウス画像を挿入してください. </font>
                                          </td>
                                        </tr>
                                        <tr>
                                          <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像01の説明</th>
                                          <td> <input type='text' class="inputclear" name='comment1' id="comment1" size='60' value='' ></td>
                                        </tr>
                                        <tr>
                                          <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像02</th>
                                          <td> <input type="file" class="inputclear1" name="img2" id="img2">
                                          </td>
                                        </tr>
                                        <tr>
                                          <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像02の説明</th>
                                          <td> <input type='text' class="inputclear" name='comment2' id="comment2" size='60' value='' ></td>
                                        </tr>
                                        <tr>
                                          <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像03</th>
                                          <td> <input type="file" class="inputclear1" name="img3" id="img3" onchange="fun(this.value); checkOneFileUpload(this, 'GIF,JPG,JPEG,BMP,PNG', false, 10000000000000000000000000000000000000000, '', '', '', '', '', '');" >
                                          </td>
                                        </tr>
                                        <tr>
                                          <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像03の説明</th>
                                          <td> <input type='text' class="inputclear" name='comment3' id="comment3" size='60' value='' ></td>
                                        </tr>
                                        <tr>
                                          <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像04</th>
                                          <td> <input type="file" class="inputclear1" name="img4" id="img4">
                                          </td>
                                        </tr>
                                        <tr>
                                          <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像04の説明</th>
                                          <td> <input type='text' class="inputclear" name='comment4' id="comment4" size='60' value='' ></td>
                                        </tr>
                                        <tr>
                                          <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像05</th>
                                          <td> <input type="file" class="inputclear1" name="img5" id="img5">
                                          </td>
                                        </tr>
                                        <tr>
                                          <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像05の説明</th>
                                          <td> <input type='text' class="inputclear" name='comment5' id="comment5" size='60' value='' ></td>
                                        </tr>
                                        <tr>
                                          <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像06</th>
                                          <td> <input type="file" class="inputclear1" name="img6" id="img6">
                                          </td>
                                        </tr>
                                        <tr>
                                          <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像06の説明</th>
                                          <td> <input type='text' class="inputclear" name='comment6' id="comment6" size='60' value='' ></td>
                                        </tr>
                                        <tr>
                                          <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像07</th>
                                          <td> <input type="file" class="inputclear1" name="img7" id="img7">
                                          </td>
                                        </tr>
                                        <tr>
                                          <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像07の説明</th>
                                          <td> <input type='text' class="inputclear" name='comment7' id="comment7" size='60' value='' ></td>
                                        </tr>
                                        <tr>
                                          <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像08</th>
                                          <td> <input type="file" class="inputclear1" name="img8" id="img8">
                                          </td>
                                        </tr>
                                        <tr>
                                          <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像08の説明</th>
                                          <td> <input type='text' class="inputclear" name='comment8' id="comment8" size='60' value='' ></td>
                                        </tr>
                                        <tr>
                                          <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像09</th>
                                          <td> <input type="file" class="inputclear1" name="img9" id="img9">
                                          </td>
                                        </tr>
                                        <tr>
                                          <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像09の説明</th>
                                          <td> <input type='text' class="inputclear" name='comment9' id="comment9" size='60' value='' ></td>
                                        </tr>
                                        <tr>
                                          <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像10</th>
                                          <td> <input type="file" class="inputclear1" name="img10" id="img10">
                                          </td>
                                        </tr>
                                        <tr>
                                          <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像10の説明</th>
                                          <td> <input type='text' class="inputclear" name='comment10' id="comment10" size='60' value='' ></td>
                                        </tr>
                                        <tr>
                                          <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像11</th>
                                          <td> <input type="file" class="inputclear1" name="img11" id="img11">
                                          </td>
                                        </tr>
                                        <tr>
                                          <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像11の説明</th>
                                          <td> <input type='text' class="inputclear" name='comment11' id="comment11" size='60' value='' ></td>
                                        </tr>
                                        <tr>
                                          <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像12</th>
                                          <td> <input type="file" class="inputclear1" name="img12" id="img12">
                                          </td>
                                        </tr>
                                        <tr>
                                          <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像12の説明</th>
                                          <td> <input type='text' class="inputclear" name='comment12' id="comment12" size='60' value='' ></td>
                                        </tr>
                                        <tr>
                                          <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像13</th>
                                          <td> <input type="file" class="inputclear1" name="img13" id="img13">
                                          </td>
                                        </tr>
                                        <tr>
                                          <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像13の説明</th>
                                          <td> <input type='text' class="inputclear" name='comment13' id="comment13" size='60' value='' ></td>
                                        </tr>
                                        <tr>
                                          <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像14</th>
                                          <td> <input type="file" class="inputclear1" name="img14" id="img14">
                                          </td>
                                        </tr>
                                        <tr>
                                          <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像14の説明</th>
                                          <td> <input type='text' class="inputclear" name='comment14' id="comment14" size='60' value='' ></td>
                                        </tr>
                                        <tr>
                                          <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像15</th>
                                          <td> <input type="file" class="inputclear1" name="img15" id="img15">
                                          </td>
                                        </tr>
                                        <tr>
                                          <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像15の説明</th>
                                          <td> <input type='text' class="inputclear" name='comment15' id="comment15" size='60' value='' ></td>
                                        </tr>
                                        <tr>
                                          <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像16</th>
                                          <td> <input type="file" class="inputclear1" name="img16" id="img16">
                                          </td>
                                        </tr>
                                        <tr>
                                          <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像15の説明</th>
                                          <td> <input type='text' class="inputclear" name='comment16' id="comment16" size='60' value='' ></td>
                                        </tr>
                                        <tr>

                                          <th colspan="2" style="text-align: center;">
                                            <font size='2' color='#FF0000'>Available file is (JPG). </font><br>
                                            <font size='2' color='#FF0000'>The total size is up to 2 MB. Please send from pre-computed. </font><br>

                                          </th>
                                        </tr>

                                        <tr>
                                          <th style="background: #66CC99; color:#4d4d4d; width: 25% ">* この情報に登録する（必須）</th>
                                          <td>  <input type='radio' class="inputclear" name='information_reg' id="information_reg" value='登録'> 登録  &nbsp;
                                            <input type='radio' class="inputclear" name='information_reg' id="information_reg" value='やめる'> やめる  &nbsp;
                                          </td>
                                        </tr>

                                        <tr>
                                          <th style="background: #66CC99; color:#4d4d4d; width: 25% ">* データの表示・非表示</th>
                                          <td>
                                            <input type='radio' class="inputclear" name='rent_out'  value="1" > 表示する  &nbsp;
                                            <input type='radio' class="inputclear" name='rent_out'  value="0" > 表示しない  &nbsp;
                                          </td>
                                          <input type="hidden" class="inputclear" name="lat" id="lat">
                                          <input type="hidden" class="inputclear" name="lng" id="lng">
                                        </tr>

                                        <tr>

                                          <th colspan="2" style="text-align: center;">
                                            <button type="submit" class="btn btn-info" style=" background-color:#96bc6d; color:#FFF; border:0;" name="submit" id="submit">Submit</button>

                                          </th>
                                        </tr>

                                      </form>
                                    </tbody>
                                  </table>


                                </td>

                              </tr>
                            </tbody>
                          </table>
                        </div>
                           
                        <div class="col-sm-12">

                          <div class="col-sm-12 table-responsive" style="font-size: 12px;" >
                            <table class="table table-bordered" >
                              <tr>
                                <li class="sidebar-search">
                                  <div class="input-group custom-search-form">
                                    <form id="searcheq" >
                                      <input type="text" class="form-control" placeholder="Search..." id="search_button">
                                      <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"  id="search_button">
                                          <i class="fa fa-search"></i>
                                        </button>
                                      </span>
                                    </form>
                                  </div>
                                  <!-- /input-group -->

                                </li>
                              </tr>
                            </table>

                          </div>
                          
                          <div class="col-sm-12" id="posttable">
                            
                              <div class='table-responsive'>
                              <table class='table' id='data_table' border='2' cellpadding='3' style='width:100%; margin-top:30px; border-collapse: collapse; text-align:center;'>
                              <thead>
                              <tr style='background: #66CC99; color:#4d4d4d; padding-left:30px;  text-align: center;'>

                              <th style='padding-left:10px; padding-right:10px;'>イド</th>
                              <th style='padding-left:10px; padding-right:10px;'>登録日時</th>

                              <th style='padding-left:10px; padding-right:10px;'>物件名</th>

                              <th style='padding-left:10px; padding-right:10px;'>物件のタイプ</th>
                              <th style='padding-left:10px; padding-right:10px;'>部屋番号</th>

                              <th style='padding-left:10px; padding-right:10px;'>エリア</th>
                              <th style='padding-left:10px; padding-right:10px;'>所在地</th>
                              <th style='padding-left:10px; padding-right:10px;'>最寄駅</th>
                              <th style='padding-left:50px; padding-right:50px;'>交通機関</th>
                              <th style='padding-left:10px; padding-right:10px;'>間取</th>
                              <th style='padding-left:10px; padding-right:10px;'>間取詳細</th>
                              <th style='padding-left:10px; padding-right:10px;'>賃料</th>
                              <th style='padding-left:10px; padding-right:10px;'>管理費</th>
                              <th style='padding-left:10px; padding-right:10px;'>敷・礼</th>

                              <th style='padding-left:10px; padding-right:10px;'>専有面積</th>
                              <th style='padding-left:10px; padding-right:10px;'>築年月</th>
                              <th style='padding-left:10px; padding-right:10px;'>建物構造</th>
                              <th style='padding-left:10px; padding-right:10px;'>所在階/階数</th>
                              <th style='padding-left:10px; padding-right:10px;'>バルコニー面積</th>
                              <th style='padding-left:10px; padding-right:10px;'>主要採光面</th>
                              <th style='padding-left:10px; padding-right:10px;'>住宅保険料/期間</th>
                              <th style='padding-left:10px; padding-right:10px;'>契約期間</th>
                              <th style='padding-left:10px; padding-right:10px;'>更新料</th>
                              <th style='padding-left:10px; padding-right:10px;'>償却・敷引</th>
                              <th style='padding-left:10px; padding-right:10px;'>引渡</th>
                              <th style='padding-left:10px; padding-right:10px;'>現況</th>
                              <th style='padding-left:10px; padding-right:10px;'>駐車場</th>

                              <th style='padding-left:160px; padding-right:160px;'>設備・条件</th>

                              <th style='padding-left:10px; padding-right:10px;'>新築・築浅</th>
                              <th style='padding-left:10px; padding-right:10px;'>駅近物件</th>
                              <th style='padding-left:10px; padding-right:10px;'>ペットも同居</th>
                              <th style='padding-left:10px; padding-right:10px;'>敷金ゼロ・フリーレント</th>
                              <th style='padding-left:10px; padding-right:10px;'>事業用・駐車場等</th>

                              <th style='padding-left:10px; padding-right:10px;'>備考</th>
                              <th style='padding-left:10px; padding-right:10px;'>ポイント</th>
                              <th style='padding-left:10px; padding-right:10px;'>検索用カテゴリー</th>
                              <th style='padding-left:10px; padding-right:10px;'>フラッグ表示（空欄ボタンは表示なし用）</th>
                              <th style='padding-left:10px; padding-right:10px;'>トップページ表示</th>
                              <th style='padding-left:10px; padding-right:10px;'>データの表示・非表示</th>

                              <th style='padding-left:10px; padding-right:10px;'>情報 登録</th>
                              <th style='padding-left:10px; padding-right:10px;'>編集パスワード</th>

                              <th style='padding-left:10px; padding-right:10px;'>画像01</th>
                              <th style='padding-left:10px; padding-right:10px;'>画像01の説明</th>
                              <th style='padding-left:10px; padding-right:10px;'>画像02</th>
                              <th style='padding-left:10px; padding-right:10px;'>画像02の説明</th> 
                              <th style='padding-left:10px; padding-right:10px;'>画像03</th>
                              <th style='padding-left:10px; padding-right:10px;'>画像03の説明</th>
                              <th style='padding-left:10px; padding-right:10px;'>画像04</th>
                              <th style='padding-left:10px; padding-right:10px;'>画像04の説明</th>
                              <th style='padding-left:10px; padding-right:10px;'>画像05</th>
                              <th style='padding-left:10px; padding-right:10px;'>画像05の説明</th>
                              <th style='padding-left:10px; padding-right:10px;'>画像06</th>
                              <th style='padding-left:10px; padding-right:10px;'>画像06の説明</th>
                              <th style='padding-left:10px; padding-right:10px;'>画像07</th>
                              <th style='padding-left:10px; padding-right:10px;'>画像07の説明</th>
                              <th style='padding-left:10px; padding-right:10px;'>画像08</th>
                              <th style='padding-left:10px; padding-right:10px;'>画像08の説明</th>
                              <th style='padding-left:10px; padding-right:10px;'>画像09</th>
                              <th style='padding-left:10px; padding-right:10px;'>画像09の説明</th>
                              <th style='padding-left:10px; padding-right:10px;'>画像10</th>
                              <th style='padding-left:10px; padding-right:10px;'>画像10の説明</th>
                              <th style='padding-left:10px; padding-right:10px;'>画像11</th>
                              <th style='padding-left:10px; padding-right:10px;'>画像11の説明</th>
                              <th style='padding-left:10px; padding-right:10px;'>画像12</th>
                              <th style='padding-left:10px; padding-right:10px;'>画像12の説明</th>
                              <th style='padding-left:10px; padding-right:10px;'>画像13</th>
                              <th style='padding-left:10px; padding-right:10px;'>画像13の説明</th>
                              <th style='padding-left:10px; padding-right:10px;'>画像14</th>
                              <th style='padding-left:10px; padding-right:10px;'>画像14の説明</th>
                              <th style='padding-left:10px; padding-right:10px;'>画像15</th>
                              <th style='padding-left:10px; padding-right:10px;'>画像15の説明</th>
                              <th style='padding-left:10px; padding-right:10px;'>画像16</th>
                              <th style='padding-left:10px; padding-right:10px;'>画像16の説明</th>


                              </tr>
                              </thead>
                              <tbody>
                              @foreach($rental as $item)
                                <tr style='background: #fff;'>
                                <td ><a href='{{url('edit-rental')}}/{{($item->id)}}' > EDIT {{$item->id}}</a></td>
                                <td>{{$item->registration_time}}</td>
                                <td>{{mb_convert_encoding($item->property_name, "UTF-8", "auto") }}</td>
                                <td>{{mb_convert_encoding($item->property_type, "UTF-8", "auto") }}</td>
                                <td>{{mb_convert_encoding($item->room_no, "UTF-8", "auto") }}</td>
                                <td>{{mb_convert_encoding($item->twon, "UTF-8", "auto") }}</td>
                                <td>{{mb_convert_encoding($item->location, "UTF-8", "auto") }}</td>
                                <td>{{mb_convert_encoding($item->nearst_station, "UTF-8", "auto") }}</td>
                                <td>{{mb_convert_encoding($item->transpotation, "UTF-8", "auto") }}</td>
                                <td>{{mb_convert_encoding($item->floor_type, "UTF-8", "auto") }}</td>
                                <td>{{mb_convert_encoding($item->floor_plan, "UTF-8", "auto") }}</td>
                                <td>{{mb_convert_encoding($item->price, "UTF-8", "auto") }}</td>
                                <td>{{mb_convert_encoding($item->admin_expences, "UTF-8", "auto") }}</td>

                                <td>{{mb_convert_encoding($item->mat_rei, "UTF-8", "auto") }}</td>
                                <td>{{mb_convert_encoding($item->occupied_area, "UTF-8", "auto") }}</td>
                                <td>{{mb_convert_encoding($item->built_years, "UTF-8", "auto") }}</td>
                                <td>{{mb_convert_encoding($item->building_structure, "UTF-8", "auto") }}</td>
                                <td>{{mb_convert_encoding($item->wherebouts_floor, "UTF-8", "auto") }}</td>
                                <td>{{mb_convert_encoding($item->balcony_area, "UTF-8", "auto") }}</td>
                                <td>{{mb_convert_encoding($item->lighting_surface, "UTF-8", "auto") }}</td>

                                <td>{{mb_convert_encoding($item->home_insurance, "UTF-8", "auto") }}</td>
                                <td>{{mb_convert_encoding($item->contract_period, "UTF-8", "auto") }}</td>

                                <td>{{mb_convert_encoding($item->renewalfee, "UTF-8", "auto") }}</td>
                                <td>{{mb_convert_encoding($item->write_offs, "UTF-8", "auto") }}</td>
                                <td>{{mb_convert_encoding($item->delivery, "UTF-8", "auto") }}</td>
                                <td>{{mb_convert_encoding($item->current_state, "UTF-8", "auto") }}</td>
                                <td>{{mb_convert_encoding($item->parking_lot, "UTF-8", "auto") }}</td>

                                <td>{{mb_convert_encoding($item->facilities_conditions, "UTF-8", "auto") }}</td>

                                <td>{{mb_convert_encoding($item->construction, "UTF-8", "auto") }}</td>
                                <td>{{mb_convert_encoding($item->pronear_station, "UTF-8", "auto") }}</td>
                                <td>{{mb_convert_encoding($item->pets_live, "UTF-8", "auto") }}</td>
                                <td>{{mb_convert_encoding($item->deposit, "UTF-8", "auto") }}</td>
                                <td>{{mb_convert_encoding($item->business_prk, "UTF-8", "auto") }}</td>

                                <td>{{mb_convert_encoding($item->remarks, "UTF-8", "auto") }}</td>
                                <td>{{mb_convert_encoding($item->point, "UTF-8", "auto") }}</td>
                                <td>{{mb_convert_encoding($item->search_ur_category, "UTF-8", "auto") }}</td>
                                <td>{{mb_convert_encoding($item->flag_display, "UTF-8", "auto") }}</td>
                                <td>{{mb_convert_encoding($item->page_display, "UTF-8", "auto") }}</td>

                                <td>{{mb_convert_encoding(($item->rent_out == 1 ? '表示する' : '表示しない'), "UTF-8", "auto") }}</td>

                                <td>{{mb_convert_encoding($item->information_reg, "UTF-8", "auto") }}</td>
                                <td>{{$item->editpsword }}</td>
                                <td><img src='images/photos/{{($item->img1 ? strtolower($item->img1) : '.jpg') }}'  height='75px' width='100px'  ></td>
                                <td>{{$item->comment1 }}</td>
                                <td><img src='images/photos/{{($item->img2 ? strtolower($item->img2) : '.jpg') }}'  height='75px' width='100px'  ></td>
                                <td>{{$item->comment2 }}</td>
                                <td><img src='images/photos/{{($item->img3 ? strtolower($item->img3) : '.jpg') }}'   height='75px' width='100px'></td>
                                <td>{{$item->comment3 }}</td>
                                <td><img src='images/photos/{{($item->img4 ? strtolower($item->img4) : '.jpg') }}'   height='75px' width='100px'></td>
                                <td>{{$item->comment4 }}</td>
                                <td><img src='images/photos/{{($item->img5 ? strtolower($item->img5) : '.jpg') }}'   height='75px' width='100px'></td>
                                <td>{{$item->comment5 }}</td>
                                <td><img src='images/photos/{{($item->img6 ? strtolower($item->img6) : '.jpg') }}'   height='75px' width='100px'></td>
                                <td>{{$item->comment6 }}</td>
                                <td><img src='images/photos/{{($item->img7 ? strtolower($item->img7) : '.jpg') }}'  height='75px' width='100px' ></td>
                                <td>{{$item->comment7 }}</td>
                                <td><img src='images/photos/{{($item->img8 ? strtolower($item->img8) : '.jpg') }}'   height='75px' width='100px'></td>
                                <td>{{$item->comment8 }}</td>
                                <td><img src='images/photos/{{($item->img9 ? strtolower($item->img9) : '.jpg') }}'   height='75px' width='100px'></td>
                                <td>{{$item->comment9 }}</td>
                                <td><img src='images/photos/{{($item->img10 ? strtolower($item->img10) : '.jpg') }}'  height='75px' width='100px'></td>
                                <td>{{$item->comment10 }}</td>
                                <td><img src='images/photos/{{($item->img11 ? strtolower($item->img11) : '.jpg') }}'   height='75px' width='100px'></td>
                                <td>{{$item->comment11 }}</td>
                                <td><img src='images/photos/{{($item->img12 ? strtolower($item->img12) : '.jpg') }}'   height='75px' width='100px'></td>
                                <td>{{$item->comment12 }}</td>
                                <td><img src='images/photos/{{($item->img13 ? strtolower($item->img13) : '.jpg') }}'  height='75px' width='100px' ></td>
                                <td>{{$item->comment13 }}</td>
                                <td><img src='images/photos/{{($item->img14 ? strtolower($item->img14) : '.jpg') }}'   height='75px' width='100px'></td>
                                <td>{{$item->comment14 }}</td>
                                <td><img src='images/photos/{{($item->img15 ? strtolower($item->img15) : '.jpg') }}'   height='75px' width='100px'></td>
                                <td>{{$item->comment15 }}</td>
                                <td><img src='images/photos/{{($item->img16 ? strtolower($item->img16) : '.jpg') }}'  height='75px' width='100px'></td>
                                <td>{{$item->comment16 }}</td>


                                </tr>
                                @endforeach
                              </tbody>

                              </table>
                              </div>



                          </div>
                        </div>


                      </div>
                    </div>
                  </div>


                  <script type="text/javascript"
                  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCb3DceRNZYYf8GcFtSCIHT-Rby9P_BYYQ&sensor=false&libraries=places">
                  </script>

                  <script>
                  var lat = 35.658995; //default latitude
                  var lng = 140.109880; //default longitude
                  var homeLatlng = new google.maps.LatLng(lat, lng); //set default coordinates
                  var homeMarker = new google.maps.Marker({//set marker
                    position: homeLatlng, //set marker position equal to the default coordinates
                    map: map, //set map to be used by the marker
                    draggable: true //make the marker draggable
                  });



                  var myOptions = {
                    center: new google.maps.LatLng(35.658995, 140.109880), //set map center
                    zoom: 17, //set zoom level to 17
                    mapTypeId: google.maps.MapTypeId.ROADMAP //set map type to road map
                  };
                  var map = new google.maps.Map(document.getElementById("map_canvas"),
                  myOptions); //initialize the map
                  //if the position of the marker changes set latitude and longitude to
                  //current position of the marker
                  google.maps.event.addListener(homeMarker, 'position_changed', function () {
                    var lat = homeMarker.getPosition().lat(); //set lat current latitude where the marker is plotted
                    var lng = homeMarker.getPosition().lng(); //set lat current longitude where the marker is plotted
                    $('#lat').val(lat);
                    $('#lng').val(lng);
                  });

                  //if the center of the map has changed
                  google.maps.event.addListener(map, 'center_changed', function () {
                    var lat = homeMarker.getPosition().lat(); //set lat to current latitude where the marker is plotted
                    var lng = homeMarker.getPosition().lng(); //set lng current latitude where the marker is plotted
                  });
                  var input = document.getElementById('search_new_places'); //get element to use as input for autocomplete
                  var autocomplete = new google.maps.places.Autocomplete(input); //set it as the input for autocomplete
                  autocomplete.bindTo('bounds', map); //bias the results to the maps viewport

                  //executed when a place is selected from the search field
                  google.maps.event.addListener(autocomplete, 'place_changed', function () {

                    //get information about the selected place in the autocomplete text field
                    var place = autocomplete.getPlace();

                    if (place.geometry.viewport) { //for places within the default view port (continents, countries)
                      map.fitBounds(place.geometry.viewport); //set map center to the coordinates of the location
                    } else { //for places that are not on the default view port (cities, streets)
                      map.setCenter(place.geometry.location);  //set map center to the coordinates of the location
                      map.setZoom(17); //set a custom zoom level of 17
                    }
                    homeMarker.setMap(map); //set the map to be used by the  marker
                    homeMarker.setPosition(place.geometry.location); //plot marker into the coordinates of the location

                  });


                  $('#submit').click(function () {

                   


                    var lat = homeMarker.getPosition().lat();
                    var lng = homeMarker.getPosition().lng();

                    document.getElementById('lat').value = lat;
                    document.getElementById('lng').value = lng;

                    // alert(lat);
                    // alert(lng);
                    $.post('save_place.php', {lat: lat, lng: lng},
                    function (data) {
                      //   alert(data);



                      //          var place_id = data;
                      //          var new_option = $('<option>').attr({'data-id' : place_id, 'data-place' : place, 'data-lat' : lat, 'data-lng' : lng, 'data-description' : description}).text(place);
                      //          new_option.appendTo($('#saved_places'));
                    }
                  );

                  // $('input[type=text], input[type=hidden]').val('');
                });






                </script>



              <script>
              $(document).ready(function () {
                $('body').append('<div id="toTop" class="btn btn-info">\n\
                <span class="fa fa-arrow-up" style="font-size:30px;color:#fff;"></span></div>');
                $(window).scroll(function () {
                  if ($(this).scrollTop() != 0) {
                    $('#toTop').fadeIn();
                  } else {
                    $('#toTop').fadeOut();
                  }
                });
                $('#toTop').click(function () {
                  $("html, body").animate({scrollTop: 0}, 600);
                  return false;
                });
              });
              </script>
<script>
    $(document).ready(function (e) {
       $( "#saverentalForm" ).on('submit',(function(e) {
       e.preventDefault();
       var rentForm = new FormData(this);
       $.ajax({
               url: "{{ url('newrental')}}",
               type: 'POST',
               data: rentForm, 
               cache:false,
               contentType: false,
               processData: false,
               success: function (result) {
                   console.log(result) 
                   swal('Good job!','Successfully added new rental property.','success');
                   $('.inputclear').val('').attr('checked', false);
                   $(".inputclear1").val('');
               },
               error: function (result) {
                   swal(({
               title: "Oops",
               text: "We ran into an issue trying to save this resource",
               icon: "error",
               button: "Dismiss",
           }));
               }
           });  
       }));
    });

</script>
</body>
              </html>
