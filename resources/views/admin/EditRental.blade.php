<?php error_reporting(0); ?>

@php
    $rental = DB::table('apartment')->where('id',$idd)->first()
@endphp

<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8" />
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

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="{{ asset('js/jquery.min.js')}}" type="text/javascript"></script>
        <script type='text/javascript' src='{{ asset('js/bootstrap.js')}}'></script>

        <script src="{{ asset('js/custom-js.js')}}" type="text/javascript"></script>

        <script language="javascript">
            document.onmousedown = disableclick;
            status = "Right Click Disabled";
                    Function disableclick(e)
            {
                if (event.button == 2)
                {
                    alert(status);
                            return false;
                }
            }
        </script>

<!-- <script language="javascript">
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



</script> -->

    </head>

</head>

<body onload="initialize()" style="background: #CCFFCC;">

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

                                            <!-- <div style="float:left; position:relative; width:100%; ">
                                                        <div id="map_canvas" style="width:100%;height:400px; border:1px darkgrey solid;"></div>
                                                    </div>-->


                                            <div id="map_container">
                                                <div id="map_canvas"></div>
                                            </div>


                                            <!-- <form action="<?php $_PHP_SELF ?>" method="POST" enctype="multipart/form-data">
                                                <h4>最新ニュース</h4>
                                                <textarea name='news' cols='80' class='inactive' rows='8'></textarea>

                                                <br>
                                                <button type="submit" class="btn btn-info" style=" background-color:#96bc6d; color:#FFF; border:0;" name="insert" id="insert">insert</button>


                                            </form>    -->
                                        </div></div>

                                </td>

                                <td style="width: 50%"><span style="margin-left: 250px;">現在のアパートを編集します</span>

                                    <table class="table table-bordered" >
                                    <form method="post"  action="{{ url('update-rental')}}"  enctype="multipart/form-data">
                                        @csrf
                                            <tbody>
                                                <tr>
                                                    <th style="background: #66CC99; color:#4d4d4d;  width: 25% ">物件名</th>
                                                    <td> <input type='text' name='property_name' size='60' value='{{$rental->property_name}}' ></td>

                                                </tr>
                                                <tr>
                                                    <th style="background: #66CC99; color:#4d4d4d; width: 25% ">物件のタイプ</th>
                                                    <td> <font size='2'>
                                                        <input type='radio' name='property_type' value="アパート" <?php echo ($rental->property_type == 'アパート') ? 'checked' : ''; ?>> アパート &nbsp;
                                                        <input type='radio' name='property_type' value="マンション" <?php echo ($rental->property_type == 'マンション') ? 'checked' : ''; ?>> マンション &nbsp;
                                                        <input type='radio' name='property_type' value="戸建て" <?php echo ($rental->property_type == '戸建て') ? 'checked' : ''; ?>> 戸建て &nbsp;
                                                        <input type='radio' name='property_type' value="店舗やオフィス" <?php echo ($rental->property_type == '店舗やオフィス') ? 'checked' : ''; ?>>  店舗やオフィス &nbsp;
                                                        <input type='radio' name='property_type' value="店舗・事務所" <?php echo ($rental->property_type == '店舗・事務所') ? 'checked' : ''; ?>> 店舗・事務所 &nbsp;
                                                        <input type='radio' name='property_type' value="倉庫" <?php echo ($rental->property_type == '倉庫') ? 'checked' : ''; ?>> 倉庫 &nbsp;
                                                        <input type='radio' name='property_type' value="駐車場" <?php echo ($rental->property_type == '駐車場') ? 'checked' : ''; ?>> 駐車場 &nbsp;
                                                        <input type='radio' name='property_type' value="その他" <?php echo ($rental->property_type == 'その他') ? 'checked' : ''; ?>>  その他 &nbsp;
                                                        
                                                        </font>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <th style="background: #66CC99; color:#4d4d4d; width: 25% ">部屋番号</th>
                                                <td> <input type='text' name='room_no' size='60' value='{{$rental->room_no}}'></td>

                                                </tr>
                                                <tr>
                                                    <th style="background: #66CC99; color:#4d4d4d; width: 25% ">エリア</th>
                                                    <td>
                                                      <select name="twon" id="twon" style="min-width: 150px; min-height: 25px;">
                                                    <option value=''>-- select here --
                                                      <option <?php echo ($rental->twon == 'つくば市北部' ? 'selected' : '' ); ?> value='つくば市北部'>つくば市北部
                                                        <option <?php echo ($rental->twon == 'つくば市中央部' ? 'selected' : '' ); ?> value='つくば市中央部'>つくば市中央部
                                                        <option <?php echo ($rental->twon == 'つくば市南部' ? 'selected' : '' ); ?> value='つくば市南部'>つくば市南部
                                                        <option <?php echo ($rental->twon == '土浦市' ? 'selected' : '' ); ?> value='土浦市'>土浦市
                                                        <option <?php echo ($rental->twon == '牛久市' ? 'selected' : '' ); ?> value='牛久市'>牛久市
                                                        <option <?php echo ($rental->twon == 'その他' ? 'selected' : '' ); ?> value='その他'>その他
                                                              </select>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <th style="background: #66CC99; color:#4d4d4d; width: 25% ">所在地</th>
                                                    <td> <input type='text' name='location' size='60' value='{{$rental->location}}' ></td>
                                                </tr>


<!--                 <tr>
    <th style="background: #009966; color:#fff; width: 25% ">地図上のプロパティの場所
  </th>
    <td>
        <input type="text" placeholder="Search New Places" id="search_new_places" size='40' autofocus  > <span style="color: #FF0000;">* これは必須です</span>
<input type='text' name='id' size='60' id='id' value='<?php
                                                if (isset($rental->id)) {
                                                    echo $rental->id;
                                                }
                                                ?>'>
<input type='text' name='location' size='60' value='{{$rental->lat}}' >
<input type='text' name='location' size='60' value='{{$rental->lng}}' >
    </td>

</tr>-->

                                                <tr>
                                                    <th style="background: #009966; color:#fff; width: 25% ">地図上のプロパティの場所
                                                    </th>
                                                    <td>
                                                        <!-- <input type="text" value="{{$rental->loadsearch}}" placeholder="Search New Places" id="search_new_places" name="search_new_places" size='40' autofocus > -->
                                                        <input type="text" placeholder="Search New Places" id="search_new_places" name="search_new_places" size='40' autofocus value="{{$rental->loadsearch}}"> <span style="color: #FF0000;">* これは必須です</span>
                                <!--                <input type='text' name='id' size='60' id='id' value='<?php
                                                if (isset($rental->id)) {
                                                    echo $rental->id;
                                                }
                                                ?>'>-->
                                                        <input type='hidden' name='id' size='60' id='id' value='{{$rental->id}}'>
                                                    </td>

                                                </tr>


                                                <tr>
                                                    <th style="background: #66CC99; color:#4d4d4d; width: 25% ">最寄駅</th>
                                                    <td>
                                                                <input type="text" value="{{$rental->nearst_station}}" name="nearst_station" id="nearst_station" style="min-width: 150px; min-height: 25px;">
                                                                                                <!--<select name='nearst_station' id="nearst_station" style="min-width: 150px; min-height: 25px;">-->
                                                                                                <!--    <option value='京成酒々井'>京成酒々井-->
                                                                                                <!--    <option value='京成佐倉'>京成佐倉-->
                                                                                                <!--    <option value='公津の杜'>公津の杜-->
                                                                                                <!--    <option value='JR酒々井'>JR酒々井-->
                                                                                                <!--    <option value='JR佐倉'>JR佐倉-->
                                                                                                <!--        </select>-->
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <th style="background: #66CC99; color:#4d4d4d; width: 25% ">交通機関</th>
                                                    <td> <input type='text' name='transpotation' size='60' value='{{$rental->transpotation}}' ></td>

                                                </tr>
                                                <tr>
                                                    <th style="background: #66CC99; color:#4d4d4d; width: 25% ">間取</th>
                                                    <td> <input type='text' name='floor_type' size='60' value='{{$rental->floor_type}}' ></td>

                                                </tr>
                                                <tr>
                                                    <th style="background: #66CC99; color:#4d4d4d; width: 25% ">間取詳細</th>
                                                    <td> <input type='text' name='floor_plan' size='60' value='{{$rental->floor_plan}}' ></td>

                                                </tr>



                                                <tr>
                                                    <th style="background: #66CC99; color:#4d4d4d; width: 25% ">賃料</th>
                                                    <td> <input type='text' name='price' size='60' value='{{$rental->price}}' ></td>
                                                </tr>
                                                <tr>
                                                    <th style="background: #66CC99; color:#4d4d4d; width: 25% ">管理費など</th>
                                                    <td> <input type='text' name='admin_expences' size='60' value='{{$rental->admin_expences}}' ></td>
                                                </tr>
                                                <tr>
                                                    <th style="background: #66CC99; color:#4d4d4d; width: 25% ">敷・礼</th>
                                                    <td> <input type='text' name='mat_rei' size='60' value='{{$rental->mat_rei}}' ></td>
                                                </tr>
                                                <tr>
                                                    <th style="background: #66CC99; color:#4d4d4d; width: 25% ">専有面積</th>
                                                    <td> <input type='text' name='occupied_area' size='60' value='{{$rental->occupied_area}}' ></td>
                                                </tr>
                                                <tr>
                                                    <th style="background: #66CC99; color:#4d4d4d; width: 25% ">築年月</th>
                                                    <td> <input type='text' name='built_years' size='60' value='{{$rental->built_years}}' ></td>
                                                </tr>
                                                <tr>
                                                    <th style="background: #66CC99; color:#4d4d4d; width: 25% ">建物構造</th>
                                                    <td> <input type='text' name='building_structure' size='60' value='{{$rental->building_structure}}' ></td>
                                                </tr>
                                                <tr>
                                                    <th style="background: #66CC99; color:#4d4d4d; width: 25% ">所在階/階数</th>
                                                    <td> <input type='text' name='wherebouts_floor' size='60' value='{{$rental->wherebouts_floor}}' ></td>
                                                </tr>
                                                <tr>
                                                    <th style="background: #66CC99; color:#4d4d4d; width: 25% ">バルコニー面積</th>
                                                    <td> <input type='text' name='balcony_area' size='60' value='{{$rental->balcony_area}}' ></td>
                                                </tr>
                                                <tr>
                                                    <th style="background: #66CC99; color:#4d4d4d; width: 25% ">主要採光面</th>
                                                    <td> <input type='text' name='lighting_surface' size='60' value='{{$rental->lighting_surface}}' ></td>
                                                </tr>
                                                <tr>
                                                    <th style="background: #66CC99; color:#4d4d4d; width: 25% ">住宅保険料/期間</th>
                                                    <td> <input type='text' name='home_insurance' size='60' value='{{$rental->home_insurance}}' ></td>
                                                </tr>
                                                <tr>
                                                    <th style="background: #66CC99; color:#4d4d4d; width: 25% ">契約期間</th>
                                                    <td> <input type='text' name='contract_period' size='60' value='{{$rental->contract_period}}' ></td>
                                                </tr>
                                                <tr>
                                                    <th style="background: #66CC99; color:#4d4d4d; width: 25% ">更新料</th>
                                                    <td> <input type='text' name='renewalfee' size='60' value='{{$rental->renewalfee}}' ></td>
                                                </tr>
                                                <tr>
                                                    <th style="background: #66CC99; color:#4d4d4d; width: 25% ">償却・敷引</th>
                                                    <td> <input type='text' name='write_offs' size='60' value='{{$rental->write_offs}}' ></td>
                                                </tr>
                                                <tr>
                                                    <th style="background: #66CC99; color:#4d4d4d; width: 25% ">引渡</th>
                                                    <td> <input type='text' name='delivery' size='60' value='{{$rental->delivery}}' ></td>
                                                </tr>
                                                <tr>
                                                    <th style="background: #66CC99; color:#4d4d4d; width: 25% ">現況</th>
                                                    <td> <input type='text' name='current_state' size='60' value='{{$rental->current_state}}' ></td>
                                                </tr>
                                                <tr>
                                                    <th style="background: #66CC99; color:#4d4d4d; width: 25% ">駐車場</th>
                                                    <td> <input type='text' name='parking_lot' size='60' value='{{$rental->parking_lot}}' ></td>
                                                </tr>
                                                <tr>
                                                    <th style="background: #66CC99; color:#4d4d4d; width: 25% ">設備・条件</th>
                                                    <td>
                                                        <input type='checkbox' name='facility1' value='角部屋'  <?php
                                                        if (strpos($rental->facilities_conditions, '角部屋') !== false) {
                                                            echo 'checked';
                                                        }
                                                        ?>> 角部屋 &nbsp;
                                                        <input type='checkbox' name='facility2' value='駐車場付'  <?php
                                                        if (strpos($rental->facilities_conditions, '駐車場付') !== false) {
                                                            echo 'checked';
                                                        }
                                                        ?>> 駐車場付 &nbsp;
                                                        <input type='checkbox' name='facility3' value='2階以上'  <?php
                                                               if (strpos($rental->facilities_conditions, '2階以上') !== false) {
                                                                   echo 'checked';
                                                               }
                                                               ?>> 2階以上 &nbsp;
                                                        <input type='checkbox' name='facility4' value='最上階'  <?php
                                                        if (strpos($rental->facilities_conditions, '最上階') !== false) {
                                                            echo 'checked';
                                                        }
                                                        ?>> 最上階 &nbsp;<br>
                                                        <input type='checkbox' name='facility5' value='礼金無'  <?php
                                                        if (strpos($rental->facilities_conditions, '礼金無') !== false) {
                                                            echo 'checked';
                                                        }
                                                        ?>> 礼金無 &nbsp;
                                                        <input type='checkbox' name='facility6' value='敷金無'  <?php
                                                               if (strpos($rental->facilities_conditions, '敷金無') !== false) {
                                                                   echo 'checked';
                                                               }
                                                               ?>> 敷金無 &nbsp;
                                                        <input type='checkbox' name='facility7' value='公営水道'  <?php
                                                        if (strpos($rental->facilities_conditions, '公営水道') !== false) {
                                                            echo 'checked';
                                                        }
                                                        ?>> 公営水道 &nbsp;
                                                        <input type='checkbox' name='facility8' value='ガスストーブ'  <?php
                                                        if (strpos($rental->facilities_conditions, 'ガスストーブ') !== false) {
                                                            echo 'checked';
                                                        }
                                                        ?>> ガスストーブ &nbsp; <br>
                                                        <input type='checkbox' name='facility9' value='バス・トイレ別'  <?php
                                                               if (strpos($rental->facilities_conditions, 'バス・トイレ別') !== false) {
                                                                   echo 'checked';
                                                               }
                                                               ?>> バス・トイレ別 &nbsp;
                                                        <input type='checkbox' name='facility10' value='給湯'  <?php
                                                        if (strpos($rental->facilities_conditions, '給湯') !== false) {
                                                            echo 'checked';
                                                        }
                                                        ?>> 給湯 &nbsp;
                                                        <input type='checkbox' name='facility11' value='追い焚き'  <?php
                                                        if (strpos($rental->facilities_conditions, '追い焚き') !== false) {
                                                            echo 'checked';
                                                        }
                                                        ?>> 追い焚き &nbsp;
                                                        <input type='checkbox' name='facility12' value='エアコン'  <?php
                                                               if (strpos($rental->facilities_conditions, 'エアコン') !== false) {
                                                                   echo 'checked';
                                                               }
                                                               ?>> エアコン &nbsp;
                                                        <input type='checkbox' name='facility13' value='ロフト付き'  <?php
                                                        if (strpos($rental->facilities_conditions, 'ロフト付き') !== false) {
                                                            echo 'checked';
                                                        }
                                                               ?>> ロフト付き
                                                        <input type='checkbox' name='facility14' value='室内洗濯機置場'  <?php
                                                        if (strpos($rental->facilities_conditions, '室内洗濯機置場') !== false) {
                                                            echo 'checked';
                                                        }
                                                               ?>> 室内洗濯機置場 &nbsp;
                                                        <input type='checkbox' name='facility15' value='CATV'  <?php
                                                        if (strpos($rental->facilities_conditions, 'CATV') !== false) {
                                                            echo 'checked';
                                                        }
                                                               ?>> CATV &nbsp;
                                                        <input type='checkbox' name='facility16' value='CSアンテナ'  <?php
                                                        if (strpos($rental->facilities_conditions, 'CSアンテナ') !== false) {
                                                            echo 'checked';
                                                        }
                                                               ?>> CSアンテナ &nbsp; <br>
                                                        <input type='checkbox' name='facility17' value='BS用アンテナ'  <?php
                                                        if (strpos($rental->facilities_conditions, 'BS用アンテナ') !== false) {
                                                            echo 'checked';
                                                        }
                                                               ?>> BS用アンテナ &nbsp;
                                                        <input type='checkbox' name='facility18' value='オートロック'  <?php
                                                        if (strpos($rental->facilities_conditions, 'オートロック') !== false) {
                                                            echo 'checked';
                                                        }
                                                               ?>>オートロック &nbsp;
                                                        <input type='checkbox' name='facility19' value='フローリング'  <?php
                                                        if (strpos($rental->facilities_conditions, 'フローリング') !== false) {
                                                            echo 'checked';
                                                        }
                                                               ?>> フローリング &nbsp;
                                                        <input type='checkbox' name='facility20' value='楽器相談'  <?php
                                                        if (strpos($rental->facilities_conditions, '楽器相談') !== false) {
                                                            echo 'checked';
                                                        }
                                                               ?>> 楽器相談 &nbsp;
                                                        <input type='checkbox' name='facility21' value='オフィス可'  <?php
                                                        if (strpos($rental->facilities_conditions, 'オフィス可') !== false) {
                                                            echo 'checked';
                                                        }
                                                               ?>> オフィス可 &nbsp;
                                                        <input type='checkbox' name='facility22' value='応相談ペット'   <?php
                                                        if (strpos($rental->facilities_conditions, '応相談ペット') !== false) {
                                                            echo 'checked';
                                                        }
                                                               ?>> 応相談ペット &nbsp;
                                                        <input type='checkbox' name='facility30' value='都市ガス'   <?php
                                                        if (strpos($rental->facilities_conditions, '都市ガス') !== false) {
                                                            echo 'checked';
                                                        }
                                                               ?>> 都市ガス &nbsp;

                                                        <input type='checkbox' name='facility31' value='プロパン'   <?php
                                                        if (strpos($rental->facilities_conditions, 'プロパン') !== false) {
                                                            echo 'checked';
                                                        }
                                                               ?>> プロパン &nbsp;

                                                        <input type='checkbox' name='facility32' value='オール電化'   <?php
                                                        if (strpos($rental->facilities_conditions, 'オール電化') !== false) {
                                                            echo 'checked';
                                                        }
                                                               ?>> オール電化 &nbsp;
                                                               
                                                        <input type='checkbox' name='facility33' value='浄化槽'   <?php
                                                        if (strpos($rental->facilities_conditions, '浄化槽') !== false) {
                                                            echo 'checked';
                                                        }
                                                               ?>> オール電化 &nbsp;
                                                               
                                                     <input type='checkbox' name='facility34' value='公共下水'   <?php
                                                        if (strpos($rental->facilities_conditions, '公共下水') !== false) {
                                                            echo 'checked';
                                                        }
                                                               ?>> オール電化 &nbsp;
                                                    </td>
                                                </tr>

                                                    <tr>
                                                        <th style="background: #66CC99; color:#4d4d4d; width: 25% ">新築・築浅</th>


                                                        <td> <input type='checkbox' name='facility23' value='新築・築浅' <?php
                                                        if (strpos($rental->construction, '新築・築浅') !== false) { 
                                                            echo 'checked';
                                                        }
                                                               ?>> 新築・築浅 &nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <th style="background: #66CC99; color:#4d4d4d; width: 25% ">駅近物件</th>
                                                        <td> <input type='checkbox' name='facility24' value='駅近物件' <?php
                                                        if (strpos($rental->pronear_station, '駅近物件') !== false) {
                                                            echo 'checked';
                                                        }
                                                               ?>> 駅近物件 &nbsp;</td>

                                                    </tr>
                                                    <tr>
                                                        <th style="background: #66CC99; color:#4d4d4d; width: 25% ">ペットも同居</th>
                                                        <td> <input type='checkbox' name='facility25' value='ペットも同居' <?php
                                                        if (strpos($rental->pets_live, 'ペットも同居') !== false) {
                                                            echo 'checked';
                                                        }
                                                               ?>>ペットも同居 &nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <th style="background: #66CC99; color:#4d4d4d; width: 25% ">敷金ゼロ・フリーレント</th>
                                                        <td> <input type='checkbox' name='facility26' value='敷金ゼロ・フリーレント' <?php
                                                        if (strpos($rental->deposit, '敷金ゼロ・フリーレント') !== false) {
                                                            echo 'checked';
                                                        }
                                                               ?>> 敷金ゼロ・フリーレント &nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <th style="background: #66CC99; color:#4d4d4d; width: 25% ">事業用・駐車場等</th>
                                                        <td> <input type='checkbox' name='facility27' value='事業用・駐車場等' <?php
                                                        if (strpos($rental->business_prk, '事業用・駐車場等') !== false) {
                                                            echo 'checked';
                                                        }
                                                               ?>> 事業用・駐車場等 &nbsp;</td>
                                                    </tr>


                                                <tr>
                                                    <th style="background: #66CC99; color:#4d4d4d; width: 25% ">備考</th>
                                                    <td>  <textarea name='remarks' cols='60' class='inactive' rows='4' >{{$rental->remarks}}</textarea></td>
                                                </tr>
                                                <tr>
                                                    <th style="background: #66CC99; color:#4d4d4d; width: 25% ">ポイント</th>
                                                    <td> <input type='text' name='point' size='60' value='{{$rental->point}}'></td>
                                                </tr>

                                                <tr>
                                                    <th style="background: #66CC99; color:#4d4d4d; width: 25% ">* あなたのカテゴリを検索</th>
                                                    <td>
                                                        <select name='search_ur_category'>
                                                            <option value=''>-- select here --
                                                            <option value="1R"  <?php echo ($rental->search_ur_category == '1R') ? 'selected = "selected"' : ''; ?>>1R
                                                            <option value="1K"  <?php echo ($rental->search_ur_category == '1K') ? 'selected = "selected"' : ''; ?>>1K
                                                            <option value="1DK"  <?php echo ($rental->search_ur_category == '1DK') ? 'selected = "selected"' : ''; ?>>1DK
                                                            <option value="2DK - 2LDK"  <?php echo ($rental->search_ur_category == '2DK - 2LDK') ? 'selected = "selected"' : ''; ?>>2DK - 2LDK
                                                            <option value="3DK"  <?php echo ($rental->search_ur_category == '3DK') ? 'selected = "selected"' : ''; ?>>3DK
                                                            <option value="戸建て"  <?php echo ($rental->search_ur_category == '戸建て') ? 'selected = "selected"' : ''; ?>>戸建て
                                                            <option value="店舗・オフィス"  <?php echo ($rental->search_ur_category == '店舗・オフィス') ? 'selected = "selected"' : ''; ?>>店舗・オフィス
                                                        </select>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th style="background: #66CC99; color:#4d4d4d; width: 25% ">フラグ表示（空白ボタンが表示されていないために）</th>
                                                    <td>
                                                        <input type='radio' name='flag_display' value="NEW!"  <?php echo ($rental->flag_display == 'NEW!') ? 'checked' : ''; ?>>  NEW! &nbsp;
                                                        <input type='radio' name='flag_display' value="更新" <?php echo ($rental->flag_display == '更新') ? 'checked' : ''; ?>> 更新  &nbsp;
                                                        <input type='radio' name='flag_display' value="契約済" <?php echo ($rental->flag_display == '契約済') ? 'checked' : ''; ?>> 契約済  &nbsp;
                                                        <input type='radio' name='flag_display' value="値下げ" <?php echo ($rental->flag_display == '値下げ') ? 'checked' : ''; ?>> 値下げ &nbsp;
                                                        <input type='radio' name='flag_display' value="商談中" <?php echo ($rental->flag_display == '商談中') ? 'checked' : ''; ?>> 商談中 &nbsp;
                                                        <input type='radio' name='flag_display' value="None" <?php echo ($rental->flag_display == 'None') ? 'checked' : ''; ?>> None
                                                        </td>


                                                </tr>
                                                <tr>
                                                    <th style="background: #66CC99; color:#4d4d4d; width: 25% ">トップページ表示</th>
                                                    <!-- <td>
                                                        <input type='radio' name='page_display' value="表示しない" <?php echo ($rental->page_display == '表示しない') ? 'checked' : ''; ?>> 表示しない &nbsp;

                                                        <input type='radio' name='page_display' value="アパート・マンション" <?php echo ($rental->page_display == 'アパート・マンション') ? 'checked' : ''; ?>> アパート・マンション  &nbsp;<br>
                                                        <input type='radio' name='page_display' value="戸建・事業用" <?php echo ($rental->page_display == '戸建・事業用') ? 'checked' : ''; ?>> 戸建・事業用   &nbsp;
                                                    </td> -->
                                                    <td>
                                                        <input type='radio' name='page_display' value="表示しない" <?php echo ($rental->page_display == '表示しない') ? 'checked' : ''; ?>> 表示しない &nbsp;
                                                        
                                                        <input type='radio' name='page_display' value="表示する" <?php echo ($rental->page_display == '表示する') ? 'checked' : ''; ?>> 表示する   &nbsp;
                                                    </td>
                                                </tr>
                                <!--                 <tr>
                                                    <th style="background: #66CC99; color:#4d4d4d; width: 25% ">* この情報に登録する（必須）</th>
                                                    <td>
                                                     <input type='radio' name='information_reg'  value="登録" <?php echo ($rental->information_reg == '登録') ? 'checked' : ''; ?>> 登録  &nbsp;
                                                     <input type='radio' name='information_reg'  value="やめる" <?php echo ($rental->information_reg == 'やめる') ? 'checked' : ''; ?>> やめる  &nbsp;
                                                    </td>
                                                </tr>-->
                                                <tr>
                                                    <th style="background: #66CC99; color:#4d4d4d; width: 25% ">編集用パスワード</th>
                                                    <td> <input type='text' name='editpsword' size='60' value='{{$rental->editpsword}}' ></td>
                                                </tr>
                                                <!--                image upload-->
                                                <tr>
                                                    <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像01</th>

                                                    <td>
                                                        <input type="hidden" name="e_img1" value="{{$rental->img1}}">

                                                        <input type="file" name="img1" value="{{$rental->img1}}" onChange="checkOneFileUpload(this, 'GIF,JPG,JPEG,BMP,PNG', false, 10000000000000000000000000000000000000, '', '', '', '', '', '')"  >

                                                        <img src='../images/photos/{{$rental->img1}}' height="50px" width="50px" >
<?php //echo $pic1 = $row['img1'];   ?>
<?php //echo $pic2 = $row['img2'];   ?>
<?php //echo $pic3 =$row['img3'];   ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像01の説明</th>
                                                    <td> <input type='text' name='comment1' size='60' value='{{$rental->comment1}}' ></td>
                                                </tr>
                                                <tr>
                                                    <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像02</th>
                                                    <td>
                                                        <input type="hidden" name="e_img2" value="{{$rental->img2}}">
                                                        <input type="file" name="img2" onChange="checkOneFileUpload(this, 'GIF,JPG,JPEG,BMP,PNG', false, 10000000000000000000000000000000000000, '', '', '', '', '', '')" >
                                                        <img src='../images/photos/{{$rental->img2}}' height="50px" width="50px" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像02の説明</th>
                                                    <td> <input type='text' name='comment2' size='60' value='{{$rental->comment2}}' ></td>
                                                </tr>
                                                <tr>
                                                    <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像03</th>
                                                    <td>
                                                        <input type="hidden" name="e_img3" value="{{$rental->img3}}">
                                                        <input type="file" name="img3" onChange="checkOneFileUpload(this, 'GIF,JPG,JPEG,BMP,PNG', false, 10000000000000000000000000000000000000, '', '', '', '', '', '')">
                                                        <img src='../images/photos/{{$rental->img3}}' height="50px" width="50px" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像03の説明</th>
                                                    <td> <input type='text' name='comment3' size='60' value='{{$rental->comment3}}' ></td>
                                                </tr>
                                                <tr>
                                                    <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像04</th>
                                                    <td>
                                                        <input type="hidden" name="e_img4" value="{{$rental->img4}}">
                                                        <input type="file" name="img4" onChange="checkOneFileUpload(this, 'GIF,JPG,JPEG,BMP,PNG', false, 10000000000000000000000000000000000000, '', '', '', '', '', '')">
                                                        <img src='../images/photos/{{$rental->img4}}' height="50px" width="50px" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像04の説明</th>
                                                    <td> <input type='text' name='comment4' size='60' value='{{$rental->comment4}}' ></td>
                                                </tr>
                                                <tr>
                                                    <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像05</th>
                                                    <td>
                                                        <input type="hidden" name="e_img5" value="{{$rental->img5}}">
                                                        <input type="file" name="img5" onChange="checkOneFileUpload(this, 'GIF,JPG,JPEG,BMP,PNG', false, 10000000000000000000000000000000000000, '', '', '', '', '', '')">
                                                        <img src='../images/photos/{{$rental->img5}}' height="50px" width="50px" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像05の説明</th>
                                                    <td> <input type='text' name='comment5' size='60' value='{{$rental->comment5}}' ></td>
                                                </tr>
                                                <tr>
                                                    <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像06</th>
                                                    <td>
                                                        <input type="hidden" name="e_img6" value="{{$rental->img6}}">
                                                        <input type="file" name="img6" onChange="checkOneFileUpload(this, 'GIF,JPG,JPEG,BMP,PNG', false, 10000000000000000000000000000000000000, '', '', '', '', '', '')">
                                                        <img src='../images/photos/{{$rental->img6}}' height="50px" width="50px" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像06の説明</th>
                                                    <td> <input type='text' name='comment6' size='60' value='{{$rental->comment6}}' ></td>
                                                </tr>
                                                <tr>
                                                    <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像07</th>
                                            <input type="hidden" name="e_img7" value="{{$rental->img7}}">
                                            <td>
                                                <input type="file" name="img7" onChange="checkOneFileUpload(this, 'GIF,JPG,JPEG,BMP,PNG', false, 10000000000000000000000000000000000000, '', '', '', '', '', '')">
                                                <img src='../images/photos/{{$rental->img7}}' height="50px" width="50px" >

                                            </td>
                                            </tr>
                                            <tr>
                                                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像07の説明</th>
                                                <td> <input type='text' name='comment7' size='60' value='{{$rental->comment7}}' ></td>
                                            </tr>
                                            <tr>
                                                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像08</th>
                                            <input type="hidden" name="e_img8" value="{{$rental->img8}}">
                                            <td>
                                                <input type="file" name="img8" onChange="checkOneFileUpload(this, 'GIF,JPG,JPEG,BMP,PNG', false, 10000000000000000000000000000000000000, '', '', '', '', '', '')">
                                                <img src='../images/photos/{{$rental->img8}}' height="50px" width="50px" >


                                            </td>
                                            </tr>
                                            <tr>
                                                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像08の説明</th>
                                                <td> <input type='text' name='comment8' size='60' value='{{$rental->comment8}}' ></td>
                                            </tr>
                                            <tr>
                                                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像09</th>
                                            <input type="hidden" name="e_img9" value="{{$rental->img9}}">
                                            <td> <input type="file" name="img9" onChange="checkOneFileUpload(this, 'GIF,JPG,JPEG,BMP,PNG', false, 10000000000000000000000000000000000000, '', '', '', '', '', '')">
                                                <img src='../images/photos/{{$rental->img9}}' height="50px" width="50px" >

                                            </td>
                                            </tr>
                                            <tr>
                                                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像09の説明</th>
                                                <td> <input type='text' name='comment9' size='60' value='{{$rental->comment9}}' ></td>
                                            </tr>
                                            <tr>
                                                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像10</th>
                                            <input type="hidden" name="e_img10" value="{{$rental->img10}}">
                                            <td> <input type="file" name="img10" onChange="checkOneFileUpload(this, 'GIF,JPG,JPEG,BMP,PNG', false, 10000000000000000000000000000000000000, '', '', '', '', '', '')">
                                                <img src='../images/photos/{{$rental->img10}}' height="50px" width="50px" >

                                            </td>
                                            </tr>
                                            <tr>
                                                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像10の説明</th>
                                                <td> <input type='text' name='comment10' size='60' value='{{$rental->comment10}}' ></td>
                                            </tr>
                                            <tr>
                                                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像11</th>
                                            <input type="hidden" name="e_img11" value="{{$rental->img11}}">
                                            <td> <input type="file" name="img11" onChange="checkOneFileUpload(this, 'GIF,JPG,JPEG,BMP,PNG', false, 10000000000000000000000000000000000000, '', '', '', '', '', '')">
                                                <img src='../images/photos/{{$rental->img11}}' height="50px" width="50px" >

                                            </td>
                                            </tr>
                                            <tr>
                                                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像11の説明</th>
                                                <td> <input type='text' name='comment11' size='60' value='{{$rental->comment11}}' ></td>
                                            </tr>
                                            <tr>
                                                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像12</th>
                                            <input type="hidden" name="e_img12" value="{{$rental->img12}}">
                                            <td>
                                                <input type="file" name="img12" onChange="checkOneFileUpload(this, 'GIF,JPG,JPEG,BMP,PNG', false, 10000000000000000000000000000000000000, '', '', '', '', '', '')">
                                                <img src='../images/photos/{{$rental->img12}}' height="50px" width="50px" >

                                            </td>
                                            </tr>
                                            <tr>
                                                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像12の説明</th>
                                                <td> <input type='text' name='comment12' size='60' value='{{$rental->comment12}}' ></td>
                                            </tr>
                                            <tr>
                                                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像13</th>
                                            <input type="hidden" name="e_img13" value="{{$rental->img13}}">
                                            <td> <input type="file" name="img13" onChange="checkOneFileUpload(this, 'GIF,JPG,JPEG,BMP,PNG', false, 10000000000000000000000000000000000000, '', '', '', '', '', '')">
                                                <img src='../images/photos/{{$rental->img13}}' height="50px" width="50px" >

                                            </td>
                                            </tr>
                                            <tr>
                                                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像13の説明</th>
                                                <td> <input type='text' name='comment13' size='60' value='{{$rental->comment13}}' ></td>
                                            </tr>
                                            <tr>
                                                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像14</th>
                                            <input type="hidden" name="e_img14" value="{{$rental->img14}}">
                                            <td> <input type="file" name="img14" onChange="checkOneFileUpload(this, 'GIF,JPG,JPEG,BMP,PNG', false, 10000000000000000000000000000000000000, '', '', '', '', '', '')">
                                                <img src='../images/photos/{{$rental->img14}}' height="50px" width="50px" >

                                            </td>
                                            </tr>
                                            <tr>
                                                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像14の説明</th>
                                                <td> <input type='text' name='comment14' size='60' value='{{$rental->comment14}}' ></td>
                                            </tr>
                                            <tr>
                                                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像15</th>
                                            <input type="hidden" name="e_img15" value="{{$rental->img15}}">
                                            <td> <input type="file" name="img15" onChange="checkOneFileUpload(this, 'GIF,JPG,JPEG,BMP,PNG', false, 10000000000000000000000000000000000000, '', '', '', '', '', '')">
                                                <img src='../images/photos/{{$rental->img15}}' height="50px" width="50px" >

                                            </td>
                                            </tr>
                                            <tr>
                                                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像15の説明</th>
                                                <td> <input type='text' name='comment15' size='60' value='{{$rental->comment15}}' ></td>
                                            </tr>
                                            <tr>
                                                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像16</th>
                                            <input type="hidden" name="e_img16" value="{{$rental->img16}}">
                                            <td> <input type="file" name="img16" onChange="checkOneFileUpload(this, 'GIF,JPG,JPEG,BMP,PNG', false, 10000000000000000000000000000000000000, '', '', '', '', '', '')">
                                                <img src='../images/photos/{{$rental->img16}}' height="50px" width="50px" >

                                            </td>
                                            </tr>
                                            <tr>
                                                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像16の説明</th>
                                                <td> <input type='text' name='comment16' size='60' value='{{$rental->comment16}}' ></td>
                                            </tr>

                                            <tr>

                                                <th colspan="2" style="text-align: center;">
                                                    <font size='2' color='#FF0000'>Available file is (GIF / JPG / JPEG / BMP / PNG). </font><br>
                                                    <font size='2' color='#FF0000'>Image size must be width - 1300px, height - 900px
                                                    The total size is 2 MB. Please send from pre-computed. </font><br>

                                                </th>
                                            </tr>
                                            <tr>
                                                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">* この情報に登録する（必須）</th>
                                                <td>
                                                    <input type='radio' name='information_reg'  value="登録" <?php echo ($rental->information_reg == '登録') ? 'checked' : ''; ?>> 登録  &nbsp;
                                                    <input type='radio' name='information_reg'  value="やめる" <?php echo ($rental->information_reg == 'やめる') ? 'checked' : ''; ?>> やめる  &nbsp;
                                                </td>
                                            </tr>

                                            <tr>
                                                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">* データの表示・非表示</th>
                                                <td>
                                                    <input type='radio' name='rent_out'  value="1" <?php echo ($rental->rent_out == '1') ? 'checked' : ''; ?>> 表示する  &nbsp;
                                                    <input type='radio' name='rent_out'  value="0" <?php echo ($rental->rent_out == '0') ? 'checked' : ''; ?>> 表示しない  &nbsp;
                                                </td>
                                                <input type="hidden" name="lat" id="lat">
                                                <input type="hidden" name="lng" id="lng">
                                            </tr>

                                            <tr>

                                                <th colspan="2" style="text-align: center;">
                                                    <button type="submit" onclick="myFunction()" class="btn btn-info" style=" background-color:#96bc6d; color:#FFF; border:0;" name="update" id="update">Update</button>
                                                    <button  type="button" onclick="deleteFunction({{$rental->id}})" class="btn btn-danger deletebutton" aria-label="Try me! Example: A warning message, with a function attached to the 'Confirm'-button">Delete</button>

                                                </th>
                                            </tr>


                                        </form>
                        </tbody>
                    </table>

                    <script>
                        function myFunction() {
                            confirm("Do you really want to do this?");
                        }

                        function myFunction1() {
                            confirm("Do you really want to Delete this?");
                        }
                    </script>
                    </td>

                    </tr>
                    </tbody>
                    </table>
                </div>


<?php
// this code block contains some test stuff
$lat = $rental->lat;
$lng = $rental->lng;


// mimic a result array from MySQL
//$result = array(array('latitude'=>$lat_d,'longitude'=>$long_d));
?>

            </div>
        </div>
    </div>

    <script>
        function deleteFunction(id) {
            swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this imaginary file!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    url : "{{ url('deleterental')}}" + '/' + id,
                    type : "GET",
                    data : {'_method' : 'GET'},
                    success: function(){
                        window.location.href ="{{url('rental-information')}}";
                    },
                    error : function(){
                        swal({
                            title: 'Opps...',
                            text : data.message,
                            type : 'error',
                            timer : '1500'
                        })
                    }
                })
            } else {
                swal("Your imaginary file is safe!");
            }
            });
        }
        
    </script>

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



    <script src="../js/jquery172.js" type="text/javascript"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCb3DceRNZYYf8GcFtSCIHT-Rby9P_BYYQ&sensor=false&libraries=places">
    </script>

    <script>
        var lat = <?php echo $lat; ?>; //default latitude
        var lng = <?php echo $lng; ?>; //default longitude
        var homeLatlng = new google.maps.LatLng(lat, lng); //set default coordinates
        var homeMarker = new google.maps.Marker({//set marker
            position: homeLatlng, //set marker position equal to the default coordinates
            map: map, //set map to be used by the marker
            draggable: true //make the marker draggable
        });

        var myOptions = {
            center: new google.maps.LatLng(lat, lng), //set map center
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

        $('#update').click(function () {

            var lat = homeMarker.getPosition().lat();
            var lng = homeMarker.getPosition().lng();
            //     var id = ('#id').val();
            document.getElementById('lat').value = lat;
            document.getElementById('lng').value = lng;
            var id = $("#id").val();
            //     alert(id);
            //      alert(lat);
            //       alert(lng);

            $.post('update_place.php', {lat: lat, lng: lng, id: id},
                    function (data) {
                        //              alert(data);
                        //          var place_id = data;
                        //          var new_option = $('<option>').attr({'data-id' : place_id, 'data-place' : place, 'data-lat' : lat, 'data-lng' : lng, 'data-description' : description}).text(place);
                        //          new_option.appendTo($('#saved_places'));
                    }
            );

            // $('input[type=text], input[type=hidden]').val('');
        });






    </script>
    
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




<!--  <script src="../js/jquery172.js" type="text/javascript"></script>
        <script type="text/javascript"
  src="http://maps.googleapis.com/maps/api/js?key=AIzaSyD9uiyFbXfbSOsY6umTUtl4_rvl_LkQKxE&sensor=false&libraries=places">
</script>

<script>
    var lat = <?php echo $lat; ?>; //default latitude
    var lng = <?php echo $lng; ?>; //default longitude
    var homeLatlng = new google.maps.LatLng(lat, lng); //set default coordinates
    var homeMarker = new google.maps.Marker({ //set marker
      position: homeLatlng, //set marker position equal to the default coordinates
      map: map, //set map to be used by the marker
      draggable: true //make the marker draggable
    });



    var myOptions = {
      center: new google.maps.LatLng(<?php echo $lat; ?>, <?php echo $lng; ?>), //set map center
      zoom: 17, //set zoom level to 17
      mapTypeId: google.maps.MapTypeId.ROADMAP //set map type to road map
    };
    var map = new google.maps.Map(document.getElementById("map_canvas"),
        myOptions);
<?php
// uncomment the 2 lines below to get real data from the db
// $result = mysql_query("SELECT * FROM parkings");
// while ($row = mysql_fetch_array($result))
foreach ($result as $row) // <- remove this line
    echo "addMarker(new google.maps.LatLng(" . $row['lat'] . ", " . $row['lng'] . "), map);";
?>//initialize the map
    //if the position of the marker changes set latitude and longitude to
    //current position of the marker
    google.maps.event.addListener(homeMarker, 'position_changed', function(){
      var lat = homeMarker.getPosition().lat(); //set lat current latitude where the marker is plotted
      var lng = homeMarker.getPosition().lng(); //set lat current longitude where the marker is plotted
    });

    //if the center of the map has changed
    google.maps.event.addListener(map, 'center_changed', function(){
      var lat = homeMarker.getPosition().lat(); //set lat to current latitude where the marker is plotted
      var lng = homeMarker.getPosition().lng(); //set lng current latitude where the marker is plotted
    });
    var input = document.getElementById('search_new_places'); //get element to use as input for autocomplete
    var autocomplete = new google.maps.places.Autocomplete(input); //set it as the input for autocomplete
    autocomplete.bindTo('bounds', map); //bias the results to the maps viewport

    //executed when a place is selected from the search field
    google.maps.event.addListener(autocomplete, 'place_changed', function(){

        //get information about the selected place in the autocomplete text field
        var place = autocomplete.getPlace();

        if (place.geometry.viewport){ //for places within the default view port (continents, countries)
          map.fitBounds(place.geometry.viewport); //set map center to the coordinates of the location
        } else { //for places that are not on the default view port (cities, streets)
          map.setCenter(place.geometry.location);  //set map center to the coordinates of the location
          map.setZoom(17); //set a custom zoom level of 17
        }
        homeMarker.setMap(map); //set the map to be used by the  marker
        homeMarker.setPosition(place.geometry.location); //plot marker into the coordinates of the location

    });


   $('#submit').click(function(){

      var lat = homeMarker.getPosition().lat();
      var lng = homeMarker.getPosition().lng();
     // alert(lat);
       // alert(lng);
      $.post('save_place.php', { lat : lat, lng : lng},
        function(data){

          new_option.appendTo($('#saved_places'));
        }
      );


    });



 


</script>
    -->



</body>
</html>
