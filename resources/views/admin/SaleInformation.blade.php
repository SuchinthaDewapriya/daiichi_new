<?php error_reporting(0); ?>

<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name=viewport content="width=device-width,initial-scale=1">
        <title>セール情報</title>
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/image/home-icon1.png')}}">
        <meta name="description" content="勝田台駅前の不動産会社です。【物件豊富】　女性スタッフがお待ちしています">
        <meta name="keyword" content="勝田台,不動産,勝田台駅,不動産屋,八千代市,佐倉市 一戸建て,土地,マンション,売買,賃貸物件情報" >

        <meta name="owner" content="">

        <!-- This website developed by. all source codes are copy right @ sunweb japan. Cannot distribute without permission -->

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
<!--    <script language="javascript">
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


</script>    -->
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
    </head>

</head>

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
                <b style="font-size:22pt;color:#003366;font-family:'ＭＳ Ｐゴシック'">売買物件情報</b></div>
                <font size='2'><!-- *ここから* -->
        <UL>
            <LI>ここは物件の登録ページです。
            <LI>1000件以上のデータは自動削除されます。
            <LI>このデータベースは自由にデータを登録/修正/削除することができます。
        </UL>

<!-- *ここまでに記述* -->
</font>


<div id="map_container">
  <div id="map_canvas"></div>
</div>
        </td>

    <td style="width: 50%"><span style="margin-left: 250px;">データを新しく追加します</span>

        <table class="table table-bordered" >
        <form action="" id="savesaleForm" method="POST" enctype="multipart/form-data">
            @csrf
    <tbody>

        <tr>
            <th style="background: #66CC99; color:#4d4d4d; width: 25% "> *物件タイプ</th>
            <td> <font size='2'>
                <input type='radio' class="inputclear" name='property_type' value='新築戸建て'> 新築戸建て &nbsp;
                <input type='radio' class="inputclear" name='property_type' value='中古戸建て'> 中古戸建て &nbsp;
                <input type='radio' class="inputclear" name='property_type' value='新築マンション'> 新築マンション &nbsp;
                <input type='radio' class="inputclear" name='property_type' value='中古マンション'> 中古マンション  &nbsp;
                <input type='radio' class="inputclear" name='property_type' value='土地'> 土地  &nbsp;
                <input type='radio' class="inputclear" name='property_type' value='事業用・リゾート'> 事業用・リゾート  &nbsp;
                <input type='radio' class="inputclear" name='property_type' value='収益物件'> 収益物件  &nbsp;
                </font>
            </td>

        </tr>
        <tr>
            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">エリア</th>
            <td>
<!--                <input type='text' name='city' size='60' value=''>-->
                <select name='city' class="inputclear" style="min-width: 150px; min-height: 25px;">
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
            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">所在地</th>
            <td> <input class="inputclear" type='text' name='location' size='60' value='' ></td>
        </tr>

          <tr>
                    <th style="background: #009966; color:#fff; width: 25% ">地図上のプロパティの場所
                  </th>
                    <td>
                        <input class="inputclear" type="text" placeholder="Search New Places" id="search_new_places" name="search_new_places" size='40' autofocus > <span style="color: #FF0000;">* これは必須です</span>
<!--                <input type='text' name='id' size='60' id='id' value='<?php if(isset($id)){echo $id;}?>'>-->

                    </td>

                </tr>

        <tr>
            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">最寄駅</th>
            <td>
                
                <input type="text" class="inputclear" name='nearst_station' id="nearst_station" style="min-width: 150px; min-height: 25px;">
                                                      <!--<select name='nearst_station' id="nearst_station" style="min-width: 150px; min-height: 25px;">-->
                                                      <!--  <option value='京成酒々井'>京成酒々井-->
                                                      <!--    <option value='京成佐倉'>京成佐倉-->
                                                      <!--    <option value='公津の杜'>公津の杜-->
                                                      <!--    <option value='JR酒々井'>JR酒々井-->
                                                      <!--    <option value='JR佐倉'>JR佐倉-->
                                                      <!--    <option value='JR榎戸駅'>JR榎戸駅-->
                                                      <!--    <option value='JR八街駅'>JR八街駅-->
                                                      <!--    <option value='JR南酒々井駅'>JR南酒々井駅-->
                                                      <!--    <option value='JR成田駅'>JR成田駅-->
                                                      <!--    <option value='京成宗吾参道駅'>京成宗吾参道駅-->
                                                      <!--    <option value='京成成田駅'>京成成田駅-->
                                                      <!--    <option value='京成大佐倉駅'>京成大佐倉駅-->
                                                      <!--        </select>-->

                                                              </td>
        </tr>
        <tr>
            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">交通機関</th>
            <td> <input type='text' class="inputclear" name='transpotation' size='60' value='' ></td>
        </tr>
        <tr>
            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">間取</th>
            <td> <input type='text' class="inputclear" name='floor_type' size='60' value='' ></td>
        </tr>
        <tr>
            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">間取詳細</th>
            <td> <input type='text' class="inputclear" name='floor_plan' size='60' value='' ></td>

        </tr>

        <tr>
            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">価格(税込）</th>
            <td><input type='text' class="inputclear" name='price' size='60' id='price' onblur="validation(value,'price','spn1')" ></br>

             <span id="spn1" style="display:none;color:#F70707;" >無効入力 </span>

			</td>
        </tr>

        <tr>
            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">建物面積</th>
            <td><input type='text' class="inputclear" name='building_area' id='building_area' size='60' onblur="validation(value,'building_area','spn2')" >
			<br>
            <span id="spn2" style="display:none;color:#F70707;" >無効入力 </span>
			</td>
        </tr>
        <tr>
            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">土地面積</th>
            <td><input type='text' class="inputclear" name='land_area' id='land_area' size='60' onblur="validation(value,'land_area','spn3')" >
			<br>
            <span id="spn3" style="display:none;color:#F70707;" >無効入力 </span>
			</td>
        </tr>
        <tr>
            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">築年月</th>
            <td><input type='text' class="inputclear" name='built_years' id='' size='60' value='' >

			</td>
        </tr>
        <tr>
            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">建物構造</th>
            <td><input type='text' class="inputclear" name='building_structure' size='60' value='' ></td>
        </tr>
        <tr>
            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">駐車場</th>
            <td><input type='text' class="inputclear" name='parking_lot' size='60' value='' ></td>
        </tr>
        <tr>
            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">所在階/階数</th>
            <td><input type='text' class="inputclear" name='whereabouts_floor' size='60' value='' ></td>
        </tr>
        <tr>
            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">接道状況</th>
            <td><input type='text' class="inputclear" name='road_situation' size='60' value='' ></td>
        </tr>
        <tr>
            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">土地権利</th>
            <td><input type='text' class="inputclear" name='land_rights' size='60' value='' ></td>
        </tr>
        <tr>
            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">修繕積立金</th>
            <td><input type='text' class="inputclear" name='repair_reserve' id='repair_reserve' size='60' onblur="validation(value,'repair_reserve','spn4')" >
			<br>
            <span id="spn4" style="display:none;color:#F70707;" >無効入力 </span>
			</td>
        </tr>
        <tr>
            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">セットバック</th>
            <td><input type='text' class="inputclear" name='setback' size='60' value='' ></td>
        </tr>
        <tr>
            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">私道負担面積</th>
            <td><input type='text' class="inputclear" name='driveway_area' size='60' value='' ></td>
        </tr>
        <tr>
            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">都市計画</th>
            <td><input type='text' class="inputclear" name='urban_planning' size='60' value='' ></td>
        </tr>
        <tr>
            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">地目</th>
            <td><input type='text' class="inputclear" name='land_category' size='60' value='' ></td>
        </tr>
        <tr>
            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">用途地域</th>
            <td><input type='text' class="inputclear" name='use_district' size='60' value='' ></td>
        </tr>
        <tr>
            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">地勢</th>
            <td><input type='text' class="inputclear" name='terrain' size='60' value='' ></td>
        </tr>
        <tr>
            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">建ぺい率/容積率</th>
            <td><input type='text' class="inputclear" name='building_coverage' size='60' value='' ></td>
        </tr>
        <tr>
            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">建築面積/敷地面積</th>
            <td><input type='text' class="inputclear" name='site_area' size='60' id='site_area' onblur="validation(value,'site_area','spn5')" >
			</br>
            <span id="spn5" style="display:none;color:#F70707;" >無効入力 </span>
			</td>
        </tr>
        <tr>
            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">延べ床面積</th>
            <td><input type='text' class="inputclear" name='floor_space' id='floor_space' size='60'onblur="validation(value,'floor_space','spn6')"  >
			</br>
            <span id="spn6" style="display:none;color:#F70707;" >無効入力 </span>
			</td>
        </tr>
        <tr>
            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">国土法届出</th>
            <td><input type='text' class="inputclear" name='land_law_notification' size='60' value='' ></td>
        </tr>
        <tr>
            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">引渡</th>
            <td> <input type='text' class="inputclear" name='delivery' size='60' value='' ></td>
        </tr>
        <tr>
            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">現況</th>
            <td> <input type='text' class="inputclear" name='current_state' size='60' value='' ></td>
        </tr>
        <tr>
            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">設備・条件</th>
            <td>

                <input type='checkbox' class="inputclear" name='facility1' value='駐車場付'>駐車場付 &nbsp;
                <input type='checkbox' class="inputclear" name='facility2' value='2階以上'> 2階以上 &nbsp;
                <input type='checkbox' class="inputclear" name='facility3' value='最上階'> 最上階  &nbsp;
                <input type='checkbox' class="inputclear" name='facility4' value='専用庭'> 専用庭  &nbsp;
                <input type='checkbox' class="inputclear" name='facility5' value='公営水道'>公営水道 &nbsp; <br>
                <input type='checkbox' class="inputclear" name='facility6' value='井戸水'> 井戸水 &nbsp;
                <input type='checkbox' class="inputclear" name='facility7' value='プロパンガス'> プロパンガス &nbsp;
                <input type='checkbox' class="inputclear" name='facility8' value='都市ガス'> 都市ガス &nbsp;
                <input type='checkbox' class="inputclear" name='facility9' value='浄化槽'> 浄化槽 &nbsp;
                <input type='checkbox' class="inputclear" name='facility10' value='専用バス'> 専用バス &nbsp;<br>
                <input type='checkbox' class="inputclear" name='facility11' value='専用トイレ'> 専用トイレ &nbsp;
                <input type='checkbox' class="inputclear" name='facility12' value='システムキッチン'> システムキッチン &nbsp;
                <input type='checkbox' class="inputclear" name='facility13' value='給湯'> 給湯 &nbsp;
                <input type='checkbox' class="inputclear" name='facility14' value='追焚き'> 追焚き  &nbsp;
                <input type='checkbox' class="inputclear" name='facility15' value='エアコン'> エアコン  &nbsp; <br>
                <input type='checkbox' class="inputclear" name='facility16' value='床暖房'> 床暖房 &nbsp;
                <input type='checkbox' class="inputclear" name='facility17' value='TVドアホン'>TVドアホン &nbsp;
                <input type='checkbox' class="inputclear" name='facility18' value='床下収納'> 床下収納 &nbsp;
                <input type='checkbox' class="inputclear" name='facility19' value='CATV'>CATV  &nbsp;
                <input type='checkbox' class="inputclear" name='facility20' value='CSアンテナ'> CSアンテナ
                <input type='checkbox' class="inputclear" name='facility21' value='BSアンテナ'> BSアンテナ &nbsp;
                <input type='checkbox' class="inputclear" name='facility22' value='オートロック'> オートロック &nbsp;
                <input type='checkbox' class="inputclear" name='facility23' value='フローリング'> フローリング  &nbsp;
                <input type='checkbox' class="inputclear" name='facility24' value='角部屋'> 角部屋  &nbsp;
                <input type='checkbox' class="inputclear" name='facility25' value='楽器相談'> 楽器相談 &nbsp;
                <input type='checkbox' class="inputclear" name='facility26' value='事務所可'> 事務所可 &nbsp;
                <input type='checkbox' class="inputclear" name='facility27' value='公共下水'> 公共下水 &nbsp;

            </td>
        </tr>
        <tr>
            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">その他・備考</th>
            <td><textarea class="inputclear" name='remarks' cols='60' class='inactive' rows='4'></textarea></td>
        </tr>
        <tr>
            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">ポイント</th>
            <td><input type='text' class="inputclear" name='point' size='60' value=''></td>
        </tr>



        <tr>
            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">フラッグ表示（空欄ボタンは表示なし用）</th>
            <td>
                <input type='radio' class="inputclear" name='flag_display' value='NEW!'> NEW! &nbsp;
                <input type='radio' class="inputclear" name='flag_display' value='更新'> 更新  &nbsp;
                <input type='radio' class="inputclear" name='flag_display' value='契約済'> 契約済   &nbsp;
                <input type='radio' class="inputclear" name='flag_display' value='値下げ'> 値下げ  &nbsp;
                <input type='radio' class="inputclear" name='flag_display' value='商談中'>商談中  &nbsp;
                <input type='radio' class="inputclear" name='flag_display' value='None'>None
            </td>
        </tr>
        <tr>
                <th style="background: #66CC99; color:#4d4d4d; width: 25% ">トップページ表示</th>
                <td><input type='radio' class="inputclear" name='page_display' value='表示しない'> 表示しない  &nbsp;
                    <input type='radio' class="inputclear" name='page_display' value='表示する'> 表示する  &nbsp;
                </td>
        </tr>


        <tr>
            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">編集パスワード</th>
            <td><input type='text' class="inputclear" name='editpsword' size='40' value='' >&nbsp;&nbsp;&nbsp; パスワードを入力しましょう。</td>
        </tr>
<!--   image upload-->
        <tr>
            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像01</th>
            <td><input type="file" class="inputclear1" id="ImageBrowse" name="img1">
            </td>
        </tr>
        <tr>
            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像01の説明</th>
            <td><input type='text' class="inputclear" name='comment1' size='60' value='' ></td>
        </tr>
        <tr>
            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像02</th>
            <td><input type="file" class="inputclear1" id="ImageBrowse" name="img2">
            </td>
        </tr>
        <tr>
            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像02の説明</th>
            <td><input type='text' class="inputclear" name='comment2' size='60' value='' ></td>
        </tr>
        <tr>
            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像03</th>
            <td><input type="file" class="inputclear1" id="ImageBrowse" name="img3">
            </td>
        </tr>
        <tr>
            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像03の説明</th>
            <td><input type='text' class="inputclear" name='comment3' size='60' value='' ></td>
        </tr>
        <tr>
            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像04</th>
            <td><input type="file" class="inputclear1" id="ImageBrowse" name="img4">
            </td>
        </tr>
        <tr>
            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像04の説明</th>
            <td><input type='text' class="inputclear" name='comment4' size='60' value='' ></td>
        </tr>
        <tr>
            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像05</th>
            <td><input type="file" class="inputclear1" id="ImageBrowse" name="img5">
            </td>
        </tr>
        <tr>
            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像05の説明</th>
            <td><input type='text' class="inputclear" name='comment5' size='60' value='' ></td>
        </tr>
        <tr>
            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像06</th>
            <td><input type="file"  class="inputclear1" id="ImageBrowse" name="img6">
            </td>
        </tr>
        <tr>
            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像06の説明</th>
            <td><input type='text' class="inputclear" name='comment6' size='60' value='' ></td>
        </tr>
        <tr>
            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像07</th>
            <td><input type="file" class="inputclear1" id="ImageBrowse" name="img7">
            </td>
        </tr>
        <tr>
            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像07の説明</th>
            <td><input type='text' class="inputclear" name='comment7' size='60' value='' ></td>
        </tr>
        <tr>
            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像08</th>
            <td><input type="file" class="inputclear1" id="ImageBrowse" name="img8">
            </td>
        </tr>
        <tr>
            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像08の説明</th>
            <td><input type='text' class="inputclear" name='comment8' size='60' value='' ></td>
        </tr>
        <tr>
            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像09</th>
            <td><input type="file" class="inputclear1" id="ImageBrowse" name="img9">
            </td>
        </tr>
        <tr>
            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像09の説明</th>
            <td><input type='text' class="inputclear" name='comment9' size='60' value='' ></td>
        </tr>
        <tr>
            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像10</th>
            <td><input type="file"  class="inputclear1" id="ImageBrowse" name="img10">
            </td>
        </tr>
        <tr>
            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像10の説明</th>
            <td><input type='text' class="inputclear" name='comment10' size='60' value='' ></td>
        </tr>
        <tr>
            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像11</th>
            <td><input type="file" class="inputclear1" id="ImageBrowse" name="img11">
            </td>
        </tr>
        <tr>
            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像11の説明</th>
            <td><input type='text' class="inputclear" name='comment11' size='60' value='' ></td>
        </tr>
        <tr>
            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像12</th>
            <td><input type="file" class="inputclear1" id="ImageBrowse" name="img12">
            </td>
        </tr>
        <tr>
            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像12の説明</th>
            <td><input type='text' class="inputclear" name='comment12' size='60' value='' ></td>
        </tr>
        <tr>
            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像13</th>
            <td><input type="file" class="inputclear1" id="ImageBrowse" name="img13">
            </td>
        </tr>
        <tr>
            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像13の説明</th>
            <td><input type='text' class="inputclear" name='comment13' size='60' value='' ></td>
        </tr>
        <tr>
            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像14</th>
            <td><input type="file" class="inputclear1" id="ImageBrowse" name="img14">
            </td>
        </tr>
        <tr>
            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像14の説明</th>
            <td><input type='text' class="inputclear" name='comment14' size='60' value='' ></td>
        </tr>
        <tr>
            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像15</th>
            <td><input type="file" class="inputclear1" id="ImageBrowse" name="img15">
            </td>
        </tr>
        <tr>
            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像15の説明</th>
            <td><input type='text' class="inputclear" name='comment15' size='60' value='' ></td>
        </tr>
        <tr>
            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像16</th>
            <td><input type="file" class="inputclear1" id="ImageBrowse" name="img16">
            </td>
        </tr>
        <tr>
            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">画像16の説明</th>
            <td><input type='text' class="inputclear" name='comment16' size='60' value='' ></td>
        </tr>


           <tr>

            <th colspan="2" style="text-align: center;">
                <font size='2' color='#FF0000'>Available file is (GIF / JPG / JPEG / BMP / PNG). </font><br>
                <font size='2' color='#FF0000'>The total size is up to 2 MB. Please send from pre-computed. </font><br>

            </th>
        </tr>

         <tr>
            <th style="background: #66CC99; color:#4d4d4d; width: 25% ">*この情報で
登録する（必須）</th>
            <td><input type='radio' class="inputclear" name='information_reg' value='登録する'> 登録する   &nbsp;
                <input type='radio' class="inputclear" name='information_reg' value='やめる'> やめる  &nbsp;
            </td>
        </tr>
                                                <tr>
                                                  <th style="background: #66CC99; color:#4d4d4d; width: 25% ">* データの表示・非表示</th>
                                                  <td>
                                                    <input type='radio' class="inputclear" name='sold_out'  value="1" <?php echo ($row['sold_out'] == '1') ? 'checked' : ''; ?>> 表示する  &nbsp;
                                                    <input type='radio' class="inputclear" name='sold_out'  value="0" <?php echo ($row['sold_out'] == '0') ? 'checked' : ''; ?>> 表示しない  &nbsp;
                                                  </td>
                                                  <input type="hidden" class="inputclear" name="lat" id="lat">
                                                  <input type="hidden" class="inputclear" name="lng" id="lng">
                                                </tr>

        <tr>

            <th colspan="2" style="text-align: center;">
             <button type="submit" id="save-sale" class="btn btn-info" style=" background-color:#96bc6d; color:#FFF; border:0;">Submit</button>

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


    <table id='data_table' border='2' cellpadding='3' style='width: 100%; margin-top:30px; border-collapse: collapse; text-align:center;'>
    <thead>
    <tr style='background: #66CC99; color:#4d4d4d; height:100px; padding-left:30px;  text-align: center;'>

                <th style='padding-left:10px; padding-right:10px;'>イド</th>
                <th style='padding-left:10px; padding-right:10px;'>登録日時</th>

                <th style='padding-left:10px; padding-right:10px;'>物件タイプ</th>

                <th style='padding-left:10px; padding-right:10px;'>エリア</th>
                <th style='padding-left:10px; padding-right:10px;'>所在地</th>
                <th style='padding-left:10px; padding-right:10px;'>最寄駅</th>
                <th style='padding-left:10px; padding-right:10px;'>交通機関</th>
                <th style='padding-left:10px; padding-right:10px;'>間取</th>
                <th style='padding-left:10px; padding-right:10px;'>間取詳細</th>
                <th style='padding-left:10px; padding-right:10px;'>価格(税込）</th>
                <th style='padding-left:10px; padding-right:10px;'>建物面積</th>
                <th style='padding-left:10px; padding-right:10px;'>土地面積</th>
                <th style='padding-left:10px; padding-right:10px;'>築年月</th>
                <th style='padding-left:10px; padding-right:10px;'>建物構造 </th>
                <th style='padding-left:10px; padding-right:10px;'>駐車場</th>

                <th style='padding-left:10px; padding-right:10px;'>所在階/階数</th>
                <th style='padding-left:10px; padding-right:10px;'>接道状況</th>
                <th style='padding-left:10px; padding-right:10px;'>土地権利</th>
                <th style='padding-left:10px; padding-right:10px;'>修理リザーブ</th>
                <th style='padding-left:10px; padding-right:10px;'>セットバック</th>
                <th style='padding-left:10px; padding-right:10px;'>私道負担面積</th>
                <th style='padding-left:10px; padding-right:10px;'>都市計画</th>
                <th style='padding-left:10px; padding-right:10px;'>地目</th>
                <th style='padding-left:10px; padding-right:10px;'>用途地域</th>
                <th style='padding-left:10px; padding-right:10px;'>地形</th>
                <th style='padding-left:10px; padding-right:10px;'>建ぺい率/容積率</th>
                <th style='padding-left:10px; padding-right:10px;'>ビルエリア/サイトエリア</th>
                <th style='padding-left:10px; padding-right:10px;'>延べ床面積</th>

                <th style='padding-left:10px; padding-right:10px;'>土地、法律の通知</th>

                <th style='padding-left:10px; padding-right:10px;'>配信</th>
                <th style='padding-left:10px; padding-right:10px;'>現況</th>
                <th style='padding-left:150px; padding-right:150px;'>設備・条件</th>
                <th style='padding-left:10px; padding-right:10px;'>その他・備考</th>
                <th style='padding-left:10px; padding-right:10px;'>ポイント</th>
                <th style='padding-left:10px; padding-right:10px;'>フラッグ表示（空欄ボタンは表示なし用）</th>
                <th style='padding-left:10px; padding-right:10px;'>トップページ表示</th>

                <th style='padding-left:10px; padding-right:10px;'>*この情報で 登録する（必須）</th>
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
            @foreach($sale as $item)
            <tr style='background: #fff;'>

            <td ><a href='{{('edit-sale')}}/{{$item->id}}' > EDIT {{$item->id}}</a></td>
            <td>{{$item->registration_time}}</td>

            <td>{{$item->property_type}}</td>
            <td>{{$item->city}}</td>
            <td>{{$item->location}}</td>
            <td>{{$item->nearst_station}}</td>
            <td>{{$item->transpotation}}</td>
            <td>{{$item->floor_type}}</td>
            <td>{{$item->floor_plan}}</td>

            <td>{{$item->price}}</td>


            <td>{{$item->building_area}}</td>
            <td>{{$item->land_area}}</td>
            <td>{{$item->built_years}}</td>
            <td>{{$item->building_structure}}</td>
            <td>{{$item->parking_lot}}</td>
            <td>{{$item->whereabouts_floor}}</td>
            <td>{{$item->road_situation}}</td>
            <td>{{$item->land_rights}}</td>

            <td>{{$item->repair_reserve}}</td>
            <td>{{$item->setback}}</td>

            <td>{{$item->driveway_area}}</td>
            <td>{{$item->urban_planning}}</td>
            <td>{{$item->land_category}}</td>
            <td>{{$item->use_district}}</td>
            <td>{{$item->terrain}}</td>
            <td>{{$item->building_coverage}}</td>
            <td>{{$item->site_area}}</td>
            <td>{{$item->floor_space}}</td>
            <td>{{$item->land_law_notification}}</td>
            <td>{{$item->delivery}}</td>
            <td>{{$item->current_state}}</td>

            <td>{{$item->facilities_conditions}}</td>

            <td>{{$item->remarks}}</td>
            <td>{{$item->point}}</td>

            <td>{{$item->flag_display}}</td>
            <td>{{$item->page_display}}</td>
            <td>{{$item->information_reg}}</td>
            <td>{{$item->editpsword}}</td>


            <td><img src='images/salephotos/{{$item->img1}}'  height='75px' width='100px'  ></td>
            <td>{{$item->comment1}}</td>
            <td><img src='images/salephotos/{{$item->img2}}'  height='75px' width='100px' ></td>
            <td>{{$item->comment2}}</td>
            <td><img src='images/salephotos/{{$item->img3}}'   height='75px' width='100px'></td>
            <td>{{$item->comment3}}</td>
            <td><img src='images/salephotos/{{$item->img4}}'   height='75px' width='100px'></td>
            <td>{{$item->comment4}}</td>
            <td><img src='images/salephotos/{{$item->img5}}'   height='75px' width='100px'></td>
            <td>{{$item->comment5}}</td>
            <td><img src='images/salephotos/{{$item->img6}}'   height='75px' width='100px'></td>
            <td>{{$item->comment6}}</td>
            <td><img src='images/salephotos/{{$item->img7}}'  height='75px' width='100px' ></td>
            <td>{{$item->comment7}}</td>
            <td><img src='images/salephotos/{{$item->img8}}'   height='75px' width='100px'></td>
            <td>{{$item->comment8}}</td>
            <td><img src='images/salephotos/{{$item->img9}}'   height='75px' width='100px'></td>
            <td>{{$item->comment9}}</td>
            <td><img src='images/salephotos/{{$item->img10}}'  height='75px' width='100px'></td>
            <td>{{$item->comment10}}</td>

            <td><img src='images/salephotos/{{$item->img11}}'   height='75px' width='100px'></td>
            <td>{{$item->comment11}}</td>
            <td><img src='images/salephotos/{{$item->img12}}'   height='75px' width='100px'></td>
            <td>{{$item->comment12}}</td>
            <td><img src='images/salephotos/{{$item->img13}}'  height='75px' width='100px' ></td>
            <td>{{$item->comment13}}</td>
            <td><img src='images/salephotos/{{$item->img14}}'   height='75px' width='100px'></td>
            <td>{{$item->comment14}}</td>
            <td><img src='images/salephotos/{{$item->img15}}'   height='75px' width='100px'></td>
            <td>{{$item->comment15}}</td>
            <td><img src='images/salephotos/{{$item->img16}}'  height='75px' width='100px'></td>
            <td>{{$item->comment16}}</td>


            </tr>
            @endforeach
        
        </tbody>

        </table>

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

<script>
        $(document).ready(function (e) {
           $( "#savesaleForm" ).on('submit',(function(e) {
           e.preventDefault();
           var saleForm = new FormData(this);
           $.ajax({
                   url: "{{ url('newsale') }}",
                   type: 'POST',
                   data: saleForm, 
                   cache:false,
                   contentType: false,
                   processData: false,
                   success: function (result) {
                       console.log(result) 
                       swal('Good job!','Successfully added new sale.','success');
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
</html>
