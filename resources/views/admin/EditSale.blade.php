<?php error_reporting(0); ?>

@php
    $rental = DB::table('sale')->where('id',$idd)->first()
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
        <b style="font-size:22pt;color:#003366;font-family:'ＭＳ Ｐゴシック'">編集セール情報</b></div>
            <font size='2'><!-- *ここから* -->
                <UL>
                    <LI>ここで、登録ページのリストがあります。
                    <LI>データの1,000人以上が自動的に削除されます。
                    <LI>このデータベースは、/変更、自由にデータを削除/登録することができます。
                </UL>


<!-- *ここまでに記述* -->
            </font>

            <div id="map_container">
  <div id="map_canvas"></div>
</div>

           <hr>
        <br><br><br><br><br><br><br><br><br>
        <div class="panel panel-default">
  <div class="panel-body">
        <form action="" id="newsform" method="POST" enctype="multipart/form-data">
            @csrf
            <h4>最新ニュース</h4>
         <textarea name='news' cols='80' class='inactive' rows='8'></textarea>

         <br>
      <button type="button" id="newsbtn"  class="btn btn-info" style=" background-color:#96bc6d; color:#FFF; border:0;" name="insert" id="insert">insert</button>


        </form>
  </div></div>


        </td>

    <td style="width: 50%"><span style="margin-left: 250px;">セール情報を編集</span>

<table class="table table-bordered" >
    <form method="POST"  action="{{ url('update-sale')}}"  enctype="multipart/form-data">
        @csrf
        <tbody>
            <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">*物件タイプ</th>
                    <td>
                        <font size='2'>
                            <input type='radio' name='property_type' value="新築戸建て" <?php echo ($rental->property_type == '新築戸建て' ? 'checked' : '' ); ?>> 新築戸建て &nbsp;
                            <input type='radio' name='property_type' value="中古戸建て" <?php echo ($rental->property_type == '中古戸建て' ? 'checked' : '' ); ?>> 中古戸建て &nbsp;
                            <input type='radio' name='property_type' value="新築マンション" <?php echo ($rental->property_type == '新築マンション' ? 'checked' : '' ); ?>> 新築マンション  &nbsp;
                            <input type='radio' name='property_type' value="中古マンション" <?php echo ($rental->property_type == '中古マンション' ? 'checked' : '' ); ?>> 中古マンション &nbsp;
                            <input type='radio' name='property_type' value="土地" <?php echo ($rental->property_type == '土地' ? 'checked' : '' ); ?>> 土地  &nbsp;
                            <input type='radio' name='property_type' value="事業用・リゾート" <?php echo ($rental->property_type == '事業用・リゾート' ? 'checked' : '' ); ?>> 事業用・リゾート &nbsp;
                            <input type='radio' name='property_type' value="収益物件" <?php echo ($rental->property_type == '収益物件' ? 'checked' : '' ); ?>> 収益物件 &nbsp;
                        </font>
                    </td>

            </tr>
            <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">エリア</th>
                <td>
    <!--                <input type='text' name='city' size='60' value=''>-->
                  <select name='city' style="min-width: 150px; min-height: 25px;">
                       <option value=''>-- select here --
                             <option <?php echo ($rental->city == 'つくば市北部' ? 'selected' : '' ); ?> value='つくば市北部'>つくば市北部
                             <option <?php echo ($rental->city == 'つくば市中央部' ? 'selected' : '' ); ?> value='つくば市中央部'>つくば市中央部
                             <option <?php echo ($rental->city == 'つくば市南部' ? 'selected' : '' ); ?> value='つくば市南部'>つくば市南部
                             <option <?php echo ($rental->city == '土浦市' ? 'selected' : '' ); ?> value='土浦市'>八街エリア
                             <option <?php echo ($rental->city == '牛久市' ? 'selected' : '' ); ?> value='牛久市'>牛久市
                          <option <?php echo ($rental->city == 'その他' ? 'selected' : '' ); ?> value='その他'>その他
                         </select>
                </td>

            </tr>
            <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">所在地</th>
                <td><input type='text' name='location' size='60' value='<?php echo $rental->location; ?>' ></td>

            </tr>

             <tr>
                    <th style="background: #009966; color:#fff; width: 25% ">地図上のプロパティの場所
                  </th>
                    <td>
                        <input type="text" placeholder="Search New Places" id="search_new_places" name="search_new_places" size='40' autofocus value="<?php echo $rental->loadsearch; ?>"> <span style="color: #FF0000;">* これは必須です</span>
<!--                <input type='text' name='id' size='60' id='id' value='<?php if(isset($idd)){echo $idd;}?>'>-->
                        <input type='hidden' name='id' size='60' id='id' value='<?php if(isset($idd)){echo $idd;}?>'>
                    </td>

                </tr>

            <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">最寄駅</th>
                <td>
                    <input type="text" name='nearst_station' id="nearst_station" style="min-width: 150px; min-height: 25px;">
                      <!--<select name='nearst_station' id="nearst_station" style="min-width: 150px; min-height: 25px;">-->
                      <!--  <option <?php echo ($rental->nearst_station == '京成酒々井' ? 'selected' : '' ); ?> value='京成酒々井'>京成酒々井-->
                      <!--  <option <?php echo ($rental->nearst_station == '京成佐倉' ? 'selected' : '' ); ?> value='京成佐倉'>京成佐倉-->
                      <!--  <option <?php echo ($rental->nearst_station == '公津の杜' ? 'selected' : '' ); ?> value='公津の杜'>公津の杜-->
                      <!--  <option <?php echo ($rental->nearst_station == 'JR酒々井' ? 'selected' : '' ); ?> value='JR酒々井'>JR酒々井-->
                      <!--  <option <?php echo ($rental->nearst_station == 'JR佐倉' ? 'selected' : '' ); ?> value='JR佐倉'>JR佐倉-->
                      <!--</select>-->
                </td>

            </tr>
            <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">交通機関</th>
                <td><input type='text' name='transpotation' size='60' value='<?php echo $rental->transpotation; ?>' ></td>

            </tr>
            <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">間取</th>
                <td><input type='text' name='floor_type' size='60' value='<?php echo $rental->floor_type; ?>' ></td>

            </tr>
            <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">間取詳細</th>
                <td><input type='text' name='floor_plan' size='60' value='<?php echo $rental->floor_plan; ?>' ></td>

            </tr>

            <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">価格(税込）</th>
                <td><input type='text' name='price' size='60' value='<?php echo $rental->price; ?>' ></td>
            </tr>

            <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">建物面積</th>
                <td><input type='text' name='building_area' size='60' value='<?php echo $rental->building_area; ?>' ></td>
            </tr>
            <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">土地面積</th>
                <td><input type='text' name='land_area' size='60' value='<?php echo $rental->land_area; ?>' ></td>
            </tr>
            <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">築年月</th>
                <td><input type='text' name='built_years' size='60' value='<?php echo $rental->built_years; ?>' ></td>
            </tr>
            <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">建物構造</th>
                <td><input type='text' name='building_structure' size='60' value='<?php echo $rental->building_structure; ?>' ></td>
            </tr>
            <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">駐車場</th>
                <td><input type='text' name='parking_lot' size='60' value='<?php echo $rental->parking_lot; ?>' ></td>
            </tr>



            <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">所在階/階数</th>
                <td><input type='text' name='whereabouts_floor' size='60' value='<?php echo $rental->whereabouts_floor; ?>' ></td>
            </tr>
            <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">接道状況</th>
                <td><input type='text' name='road_situation' size='60' value='<?php echo $rental->road_situation; ?>' ></td>
            </tr>
            <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">土地権利</th>
                <td><input type='text' name='land_rights' size='60' value='<?php echo $rental->land_rights; ?>' ></td>
            </tr>
            <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">修繕積立金</th>
                <td><input type='text' name='repair_reserve' size='60' value='<?php echo $rental->repair_reserve; ?>' ></td>
            </tr>
            <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">セットバック</th>
                <td><input type='text' name='setback' size='60' value='<?php echo $rental->setback; ?>' ></td>
            </tr>
            <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">私道負担面積</th>
                <td><input type='text' name='driveway_area' size='60' value='<?php echo $rental->driveway_area; ?>' ></td>
            </tr>
            <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">都市計画</th>
                <td><input type='text' name='urban_planning' size='60' value='<?php echo $rental->urban_planning; ?>' ></td>
            </tr>
            <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">地目</th>
                <td><input type='text' name='land_category' size='60' value='<?php echo $rental->land_category; ?>' ></td>
            </tr>
            <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">用途地域</th>
                <td><input type='text' name='use_district' size='60' value='<?php echo $rental->use_district; ?>' ></td>
            </tr>
            <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">地勢</th>
                <td><input type='text' name='terrain' size='60' value='<?php echo $rental->terrain; ?>' ></td>
            </tr>
            <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">建ぺい率/容積率</th>
                <td><input type='text' name='building_coverage' size='60' value='<?php echo $rental->building_coverage; ?>' ></td>
            </tr>
            <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">建築面積/敷地面積</th>
                <td><input type='text' name='site_area' size='60' value='<?php echo $rental->site_area; ?>' ></td>
            </tr>
            <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">延べ床面積</th>
                <td><input type='text' name='floor_space' size='60' value='<?php echo $rental->floor_space; ?>' ></td>
            </tr>
            <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">国土法届出</th>
                <td><input type='text' name='land_law_notification' size='60' value='<?php echo $rental->land_law_notification; ?>' ></td>
            </tr>
            <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">引渡</th>
                <td><input type='text' name='delivery' size='60' value='<?php echo $rental->delivery; ?>' ></td>
            </tr>
            <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">現況</th>
                <td><input type='text' name='current_state' size='60' value='<?php echo $rental->current_state; ?>' ></td>
            </tr>
            <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">設備・条件</th>
                <td>
                    <input type='checkbox' name='facility1' value='駐車場付' <?php  if (strpos($rental->facilities_conditions, '駐車場付') !== false) { echo 'checked'; } ?>> 駐車場付 &nbsp;
                    <input type='checkbox' name='facility2' value='2階以上' <?php  if (strpos($rental->facilities_conditions, '2階以上') !== false) { echo 'checked'; } ?>> 2階以上 &nbsp;
                    <input type='checkbox' name='facility3' value='最上階' <?php  if (strpos($rental->facilities_conditions, '最上階') !== false) { echo 'checked'; } ?>> 最上階 &nbsp;
                    <input type='checkbox' name='facility4' value='専用庭' <?php  if (strpos($rental->facilities_conditions, '専用庭') !== false) { echo 'checked'; } ?>> 専用庭 &nbsp;
                    <input type='checkbox' name='facility5' value='公営水道' <?php  if (strpos($rental->facilities_conditions, '公営水道') !== false) { echo 'checked'; } ?>>公営水道 &nbsp; <br>
                    <input type='checkbox' name='facility6' value='井戸水' <?php  if (strpos($rental->facilities_conditions, '井戸水') !== false) { echo 'checked'; } ?>> 井戸水 &nbsp;
                    <input type='checkbox' name='facility7' value='プロパンガス' <?php  if (strpos($rental->facilities_conditions, 'プロパンガス') !== false) { echo 'checked'; } ?>> プロパンガス &nbsp;
                    <input type='checkbox' name='facility8' value='都市ガス' <?php  if (strpos($rental->facilities_conditions, '都市ガス') !== false) { echo 'checked'; } ?>> 都市ガス &nbsp;
                    <input type='checkbox' name='facility9' value='浄化槽' <?php  if (strpos($rental->facilities_conditions, '浄化槽') !== false) { echo 'checked'; } ?>> 浄化槽 &nbsp;
                    <input type='checkbox' name='facility10' value='専用バス' <?php  if (strpos($rental->facilities_conditions, '専用バス') !== false) { echo 'checked'; } ?>> 専用バス &nbsp;<br>
                    <input type='checkbox' name='facility11' value='専用トイレ'<?php  if (strpos($rental->facilities_conditions, '専用トイレ') !== false) { echo 'checked'; } ?>> 専用トイレ &nbsp;
                    <input type='checkbox' name='facility12' value='システムキッチン' <?php  if (strpos($rental->facilities_conditions, 'システムキッチン') !== false) { echo 'checked'; } ?>> システムキッチン &nbsp;
                    <input type='checkbox' name='facility13' value='給湯' <?php  if (strpos($rental->facilities_conditions, '給湯') !== false) { echo 'checked'; } ?>> 給湯 &nbsp;
                    <input type='checkbox' name='facility14' value='追焚き' <?php  if (strpos($rental->facilities_conditions, '追焚き') !== false) { echo 'checked'; } ?>> 追焚き  &nbsp;
                    <input type='checkbox' name='facility15' value='エアコン' <?php  if (strpos($rental->facilities_conditions, 'エアコン') !== false) { echo 'checked'; } ?>> エアコン &nbsp; <br>
                    <input type='checkbox' name='facility16' value='床暖房' <?php  if (strpos($rental->facilities_conditions, '床暖房') !== false) { echo 'checked'; } ?>> 床暖房 &nbsp;
                    <input type='checkbox' name='facility17' value='TVドアホン' <?php  if (strpos($rental->facilities_conditions, 'TVドアホン') !== false) { echo 'checked'; } ?>>TVドアホン &nbsp;
                    <input type='checkbox' name='facility18' value='床下収納' <?php  if (strpos($rental->facilities_conditions, '床下収納') !== false) { echo 'checked'; } ?>> 床下収納 &nbsp;
                    <input type='checkbox' name='facility19' value='CATV' <?php  if (strpos($rental->facilities_conditions, 'CATV') !== false) { echo 'checked'; } ?>>CATV  &nbsp;
                    <input type='checkbox' name='facility20' value='CSアンテナ' <?php  if (strpos($rental->facilities_conditions, 'CSアンテナ') !== false) { echo 'checked'; } ?>> CSアンテナ
                    <input type='checkbox' name='facility21' value='BSアンテナ' <?php  if (strpos($rental->facilities_conditions, 'BSアンテナ') !== false) { echo 'checked'; } ?>> BSアンテナ &nbsp;
                    <input type='checkbox' name='facility22' value='オートロック' <?php  if (strpos($rental->facilities_conditions, 'オートロック') !== false) { echo 'checked'; } ?>> オートロック &nbsp;
                    <input type='checkbox' name='facility23' value='フローリング' <?php  if (strpos($rental->facilities_conditions, 'フローリング') !== false) { echo 'checked'; } ?>> フローリング  &nbsp;
                    <input type='checkbox' name='facility24' value='角部屋' <?php  if (strpos($rental->facilities_conditions, '角部屋') !== false) { echo 'checked'; } ?>> 角部屋 &nbsp;
                    <input type='checkbox' name='facility25' value='楽器相談' <?php  if (strpos($rental->facilities_conditions, '楽器相談') !== false) { echo 'checked'; } ?>> 楽器相談 &nbsp;
                    <input type='checkbox' name='facility26' value='事務所可' <?php  if (strpos($rental->facilities_conditions, '事務所可') !== false) { echo 'checked'; } ?>> 事務所可 &nbsp;
                    <input type='checkbox' name='facility27' value='ペット相談' <?php  if (strpos($rental->facilities_conditions, 'ペット相談') !== false) { echo 'checked'; } ?>> ペット相談 &nbsp;
                    <input type='checkbox' name='facility27' value='公共下水' <?php  if (strpos($rental->facilities_conditions, '公共下水') !== false) { echo 'checked'; } ?>> 公共下水 &nbsp;
                </td>
            </tr>
            <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">その他・備考</th>
                <td>
                    <textarea name='remarks' cols='60' class='inactive' rows='4'><?php echo $rental->remarks; ?></textarea></td>
            </tr>
            <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">ポイント</th>
                <td> <input type='text' name='point' size='60' value='<?php echo $rental->point;?>'></td>
            </tr>



            <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">フラッグ表示（空欄ボタンは表示なし用）</th>
                <td>
                    <input type='radio' name='flag_display' value="NEW!"  <?php echo ($rental->flag_display == 'NEW!')? 'checked' : ''; ?>> NEW! &nbsp;
                    <input type='radio' name='flag_display' value="更新" <?php echo ($rental->flag_display == '更新')? 'checked' : ''; ?>> 更新  &nbsp;
                    <input type='radio' name='flag_display' value="契約済み" <?php echo ($rental->flag_display == '契約済み')? 'checked' : ''; ?>> 契約済み  &nbsp;
                    <input type='radio' name='flag_display' value="値下げ！"  <?php echo ($rental->flag_display == '値下げ！')? 'checked' : ''; ?>> 値下げ！ &nbsp;
                    <input type='radio' name='flag_display' value="商談中" <?php echo ($rental->flag_display == '商談中')? 'checked' : ''; ?>> 商談中  &nbsp;
                    <input type='radio' name='flag_display' value="None" <?php echo ($rental->flag_display == 'None')? 'checked' : ''; ?>> None
                </td>
            </tr>
            <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">トップページ表示</th>
                <td>
                    <input type='radio' name='page_display' value="表示しない" <?php echo ($rental->page_display == '表示しない')? 'checked' : ''; ?>> 表示しない  &nbsp;
                    <input type='radio' name='page_display' value="表示する" <?php echo ($rental->page_display == '表示する')? 'checked' : ''; ?>> 表示する  &nbsp;
                </td>
            </tr>

            <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">編集パスワード</th>
                <td><input type='text' name='editpsword' size='40' value='<?php echo $rental->editpsword;?>' >&nbsp;&nbsp;&nbsp; パスワードを入力しましょう。</td>
            </tr>
<!--                image upload-->
            <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像01</th>
                <td>
                    <input type="hidden" name="e_img1" value="<?PHP echo $rental->img1; ?>">
                    <input type="file" name="img1" onChange="checkOneFileUpload(this,'GIF,JPG,JPEG,BMP,PNG',false,10000000000000000000000,'','','','','','')"  >
                    <img src='../images/salephotos/<?PHP echo $rental->img1; ?>' height="50px" width="50px" >
                </td>
            </tr>
            <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像01の説明</th>
                <td>
                    <input type='text' name='comment1' size='60' value='' >
                </td>
            </tr>
            <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像02</th>
                <td>
                    <input type="hidden" name="e_img2" value="<?PHP echo $rental->img2; ?>">
                    <input type="file" name="img2" onChange="checkOneFileUpload(this,'GIF,JPG,JPEG,BMP,PNG',false,10000000000000000000000,'','','','','','')" >
                    <img src='../images/salephotos/<?PHP echo  $rental->img2;  ?>' height="50px" width="50px" >
                </td>
            </tr>
            <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像02の説明</th>
                <td>
                    <input type='text' name='comment2' size='60' value='' >
                </td>
            </tr>
            <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像03</th>
                <td>
                    <input type="hidden" name="e_img3" value="<?PHP echo $rental->img3; ?>">
                    <input type="file" name="img3" value="<?PHP echo  $rental->img3;  ?>"onChange="checkOneFileUpload(this,'GIF,JPG,JPEG,BMP,PNG',false,10000000000000000000000,'','','','','','')">
                    <img src='../images/salephotos/<?PHP echo  $rental->img3;  ?>' height="50px" width="50px" >
                </td>
            </tr>
            <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像03の説明</th>
                <td> <input type='text' name='comment3' size='60' value='' ></td>
            </tr>
            <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像04</th>
                <td>
                    <input type="hidden" name="e_img4" value="<?PHP echo $rental->img4; ?>">
                    <input type="file" name="img4" onChange="checkOneFileUpload(this,'GIF,JPG,JPEG,BMP,PNG',false,10000000000000000000000,'','','','','','')">
                    <img src='../images/salephotos/<?PHP echo  $rental->img4;  ?>' height="50px" width="50px" >
                </td>
            </tr>
            <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像04の説明</th>
                <td> <input type='text' name='comment4' size='60' value='' ></td>
            </tr>
            <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像05</th>
                <td>
                <input type="hidden" name="e_img5" value="<?PHP echo $rental->img5; ?>">
                <input type="file" name="img5" onChange="checkOneFileUpload(this,'GIF,JPG,JPEG,BMP,PNG',false,10000000000000000000000,'','','','','','')">
                <img src='../images/salephotos/<?PHP echo  $rental->img5;  ?>' height="50px" width="50px" >
                </td>
            </tr>
            <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像05の説明</th>
                <td><input type='text' name='comment5' size='60' value='' ></td>
            </tr>
            <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像06</th>
                <td>
                    <input type="hidden" name="e_img6" value="<?PHP echo $rental->img6; ?>">
                    <input type="file" name="img6" onChange="checkOneFileUpload(this,'GIF,JPG,JPEG,BMP,PNG',false,10000000000000000000000,'','','','','','')">
                    <img src='../images/salephotos/<?PHP echo  $rental->img6;  ?>' height="50px" width="50px" >
                </td>
            </tr>
            <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像06の説明</th>
                <td> <input type='text' name='comment6' size='60' value='' ></td>
            </tr>
            <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像07</th>
                <input type="hidden" name="e_img7" value="<?PHP echo $rental->img7; ?>">
                <td> <input type="file" name="img7" onChange="checkOneFileUpload(this,'GIF,JPG,JPEG,BMP,PNG',false,10000000000000000000000,'','','','','','')">
            <img src='../images/salephotos/<?PHP echo  $rental->img7;  ?>' height="50px" width="50px" >
                </td>
            </tr>
            <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像07の説明</th>
                <td> <input type='text' name='comment7' size='60' value='' ></td>
            </tr>
            <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像08</th>
                <input type="hidden" name="e_img8" value="<?PHP echo $rental->img8; ?>">
                <td><input type="file" name="img8" onChange="checkOneFileUpload(this,'GIF,JPG,JPEG,BMP,PNG',false,10000000000000000000000,'','','','','','')">
            <img src='../images/salephotos/<?PHP echo  $rental->img8;  ?>' height="50px" width="50px" >
                </td>

            </tr>
            <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像08の説明</th>
                <td> <input type='text' name='comment8' size='60' value='' ></td>
            </tr>
            <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像09</th>
                <input type="hidden" name="e_img9" value="<?PHP echo $rental->img9; ?>">
                <td><input type="file" name="img9" onChange="checkOneFileUpload(this,'GIF,JPG,JPEG,BMP,PNG',false,10000000000000000000000,'','','','','','')">
            <img src='../images/salephotos/<?PHP echo  $rental->img9;  ?>' height="50px" width="50px" >
                </td>
            </tr>
            <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像09の説明</th>
                    <td> <input type='text' name='comment9' size='60' value='' ></td>
            </tr>
            <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像10</th>
                    <input type="hidden" name="e_img10" value="<?PHP echo $rental->img10; ?>">
                <td> <input type="file" name="img10" onChange="checkOneFileUpload(this,'GIF,JPG,JPEG,BMP,PNG',false,10000000000000000000000,'','','','','','')">
            <img src='../images/salephotos/<?PHP echo  $rental->img10;  ?>' height="50px" width="50px" >

                </td>
            </tr>
            <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像10の説明</th>
                <td> <input type='text' name='comment10' size='60' value='' ></td>
            </tr>
            <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像11</th>
                <input type="hidden" name="e_img11" value="<?PHP echo $rental->img11; ?>">
                <td> <input type="file" name="img11" onChange="checkOneFileUpload(this,'GIF,JPG,JPEG,BMP,PNG',false,10000000000000000000000,'','','','','','')">
            <img src='../images/salephotos/<?PHP echo  $rental->img11;  ?>' height="50px" width="50px" >
                </td>
            </tr>
            <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像11の説明</th>
                <td> <input type='text' name='comment11' size='60' value='' ></td>
            </tr>
            <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像12</th>
                <input type="hidden" name="e_img12" value="<?PHP echo $rental->img12; ?>">
                <td><input type="file" name="img12" onChange="checkOneFileUpload(this,'GIF,JPG,JPEG,BMP,PNG',false,10000000000000000000000,'','','','','','')">
            <img src='../images/salephotos/<?PHP echo  $rental->img12;  ?>' height="50px" width="50px" >

                </td>
            </tr>
            <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像12の説明</th>
                <td> <input type='text' name='comment12' size='60' value='' ></td>
            </tr>
            <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像13</th>
                <input type="hidden" name="e_img13" value="<?PHP echo $rental->img13; ?>">
                <td> <input type="file" name="img13" onChange="checkOneFileUpload(this,'GIF,JPG,JPEG,BMP,PNG',false,10000000000000000000000,'','','','','','')">
            <img src='../images/salephotos/<?PHP echo  $rental->img13;  ?>' height="50px" width="50px" >

                </td>
            </tr>
            <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像13の説明</th>
                <td> <input type='text' name='comment13' size='60' value='' ></td>
            </tr>
            <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像14</th>
                <input type="hidden" name="e_img14" value="<?PHP echo $rental->img14; ?>">
                <td> <input type="file" name="img14" onChange="checkOneFileUpload(this,'GIF,JPG,JPEG,BMP,PNG',false,10000000000000000000000,'','','','','','')">
            <img src='../images/salephotos/<?PHP echo  $rental->img14;  ?>' height="50px" width="50px" >
                </td>
            </tr>
            <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像14の説明</th>
                <td> <input type='text' name='comment14' size='60' value='' ></td>
            </tr>
            <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像15</th>
                <input type="hidden" name="e_img15" value="<?PHP echo $rental->img15; ?>">
                <td> <input type="file" name="img15" onChange="checkOneFileUpload(this,'GIF,JPG,JPEG,BMP,PNG',false,10000000000000000000000,'','','','','','')">
            <img src='../images/salephotos/<?PHP echo  $rental->img15;  ?>' height="50px" width="50px" >
                </td>
            </tr>
            <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像15の説明</th>
                <td> <input type='text' name='comment15' size='60' value='' ></td>
            </tr>
            <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像16</th>
                    <input type="hidden" name="e_img16" value="<?PHP echo $rental->img16; ?>">
                <td><input type="file" name="img16" onChange="checkOneFileUpload(this,'GIF,JPG,JPEG,BMP,PNG',false,10000000000000000000000,'','','','','','')">
            <img src='../images/salephotos/<?PHP echo  $rental->img16;  ?>' height="50px" width="50px" >

                </td>
            </tr>
            <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像16の説明</th>
                <td> <input type='text' name='comment16' size='60' value='' ></td>
            </tr>

           <tr>
            <th colspan="2" style="text-align: center;">
                <font size='2' color='#FF0000'>Available file is (GIF / JPG / JPEG / BMP / PNG). </font><br>
                <font size='2' color='#FF0000'>The total size is up to 2 MB. Please send from pre-computed. </font><br>

            </th>
        </tr>

          <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">* この情報で</th>
                <td>
                    <input type='radio' name='information_reg' value="登録する" <?php echo ($rental->information_reg == '登録する')? 'checked' : ''; ?>> 登録する   &nbsp;
                    <input type='radio' name='information_reg' value="やめる" <?php echo ($rental->information_reg == 'やめる')? 'checked' : ''; ?>> やめる  &nbsp;
                </td>
            </tr>
        <tr>
          <th style="background: #66CC99; color:#4d4d4d; width: 25% ">* データの表示・非表示</th>
          <td>
            <input type='radio' name='sold_out'  value="1" <?php echo ($rental->sold_out == '1') ? 'checked' : ''; ?>> 表示する  &nbsp;
            <input type='radio' name='sold_out'  value="0" <?php echo ($rental->sold_out == '0') ? 'checked' : ''; ?>> 表示しない  &nbsp;
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


</td>
 <script>
function myFunction() {
    confirm("Do you really want to do this?");
}

function myFunction1() {
    confirm("Do you really want to Delete this?");
}
</script>
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



   <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCb3DceRNZYYf8GcFtSCIHT-Rby9P_BYYQ&sensor=false&libraries=places">
   </script>
<script>
    $("#newsbtn").click(function (){
        var newsform = $("#newsform").serialize();
        $.ajax({
            type: 'POST',
            url: "{{ url('newNews')}}",
            data: newsform,
            success: function (response) {
                swal("Good job!", "You added new news!", "success");
                $('.inactive').val("");
            }
        });
    });
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
                    url : "{{ url('deletesale')}}" + '/' + id,
                    type : "GET",
                    data : {'_method' : 'GET'},
                    success: function(){
                        window.location.href ="{{url('sale-information')}}";
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
    

</body>
</html>