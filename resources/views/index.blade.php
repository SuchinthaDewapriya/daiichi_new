@extends('layouts.main')

@section('content')
    {{-- @include('includes.menu')  --}} 
    <div style="margin-top: 148px;"></div>
    @include('includes.carousel')

    {{-- div 1 start-------------------------------------------------------------- --}}
    <div class="container-edit" style="margin-top: 20px; ">

        <div class="col-sm-3" align="center"  style="margin-top: 20px;">
            <p style="padding: 0px; margin: 0;">  <i class="fa fa-newspaper-o" aria-hidden="true" style="color: #01b7f2; font-size: 30px;"></i><br>
                <span style="margin-left: 20px; font-size: 25px;">  最新ニュース</span><br>
            </p>
        </div>

        <div class="col-sm-9" style="margin-top: 10px;">
            @php
                $news = DB::table('news')->get();
            @endphp
            @if (count($news) == 0)
                <p>No records matching your query were found.</p>
            @else
                <div class="panel panel-default"> 
                    
                    <div class="panel-body" style="height: 180px;overflow-y: hidden;">
                            @foreach ($news as $item)
                            @php
                                $date=date('Y-m-d', strtotime($item->date));
                            @endphp
                            <p style='font-size: 15px; color: #000; height:5px; '> 
                                {{$date}} &nbsp;
                                @php
                                    echo (!empty($item->link) ? "<a href='" .$item->link."' target='_blank'>" . $item->news . " </a>" :  $item->news);
                                @endphp
                                </p>
                                <hr>
                                @endforeach 
                            </div>
                            
                        </div> 
                        
            @endif
            
        </div>

    </div>  
    {{-- div 1 close ---------------------------------------------------------------  --}}


    {{-- styles 1 start ----------------------------------------------------------------- --}}
    <br>
    <style>
        @media all and (max-width: 2000px) and (min-width: 598px) {
            .my-content { display: none;
                          overflow:hidden !important;
                          visibility: hidden;
                          /* margin-top: -2350px;*/
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
        }

    .a{color: #000000; text-decoration: none;}
    .a:hover{color: #000000; text-decoration: none;}
    </style>
    {{-- styles 1 close---------------------------------------------------------------- --}}


    {{-- div 2 start----------------------------------------------------------------- --}}
    <div class="container-edit">
            <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <p><b>エリア別売買物件 </b></p>
                        <div style="background-image: url(images/sale_map1.png); margin-left: 120px; height: 220px; background-repeat: no-repeat;" align="center">
                            <section style="margin-left: -100px; padding-top: 50px;">
                                <b><a href="{{ url('locationFilter-sale')}}/{{$id='成田中心部エリア'}}" target="_blank" style="text-decoration: none;color: #000000;" > 成田中心部エリア  </a></b> 
                            </section>
                            <section style="margin-left: -220px; padding-top: 15px;">
                                <b><a href="{{ url('locationFilter-sale')}}/{{$id='酒々井エリア'}}" target="_blank" style="text-decoration: none;color: #000000;">酒々井エリア </a></b>
                            </section>
                            <section style="padding-top: 10px; margin-left: -50px;">
                                <b><a href="{{ url('locationFilter-sale')}}/{{$id='冨里エリア'}}" target="_blank" style="text-decoration: none;color: #000000;">冨里エリア</a> </b>
                            </section>
                            <label style="padding-top: 5px; margin-top: 5px; margin-left: -190px;">
                                <b><a href="{{ url('locationFilter-sale')}}/{{$id='佐倉エリア'}}" target="_blank" style="text-decoration: none;color: #000000;">佐倉エリア </a></b> 
                            </label> <br><br>
                            <span style=" margin-left: -150px;">
                                <b><a href="{{ url('locationFilter-sale')}}/{{$id='八街エリア'}}" target="_blank" style="text-decoration: none;color: #000000;">八街エリア </a> </b> 
                            </span>
                            <p style="margin-left: 70px;">
                                <b><a href="{{ url('locationFilter-sale')}}/{{$id='その他エリア'}}" target="_blank" style="text-decoration: none;color: #000000;">その他エリア  </a></b>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="col-sm-6" >
                <div class="panel panel-default" style="min-height: 280px;">
                    <div class="panel-body">
                        <p><b>エリア別賃貸物件  </b></p>
                            <div style="background-image: url(images/rent_map1.png); margin-left: 120px; height: 140px; margin-top: 30px; background-repeat: no-repeat;" align="center">
                    
                                <label style="padding-top: 20px; margin-left: -180px;">
                                    <a href="{{ url('locationFilter-rent')}}/{{$id='酒々井エリア'}}" target="_blank" style="text-decoration: none;color: #000000;">酒々井エリア</a> 
                                </label>
                                <br><br> 
                                <span style="margin-left: -220px;">
                                    <b><a href="{{ url('locationFilter-rent')}}/{{$id='酒々井エリア'}}" target="_blank" style="text-decoration: none;color: #000000;">佐倉エリア</a></b>
                                </span>
                                <br><br>
                                <p style="margin-left: 70px;"><b>
                                    <a href="{{ url('locationFilter-rent')}}/{{$id='その他エリア'}}" target="_blank" style="text-decoration: none;color: #000000;">その他エリア </a> </b>
                                </p>
                            </div>
                            <br>
                    </div>
                </div>
            </div>
    </div>

    {{-- div 2 close------------------------------------------------------------------------------ --}}
  





    {{-- div 3 start ----------------------------------------------------------------------------- --}}
    <div class="">
            <div class="container-edit">
                <h3>売買物件（マンション・戸建・土地・事業用・収益物件）　</h3>  <br>  
            </div>
           
            {{-- sales data --}}
            <div class="container-edit">
                <div class="row"> <br>
                    @foreach ($dataset as $data)
                    <div class="col-xs-6 col-sm-3 col-md-3" style="margin-bottom:35px; height: 400px;">
                        <a href="{{url('/SalesViewData')}}/{{$data->id}}" class="thumbnail" style="text-decoration: none;"/>
                        <img src="{{asset('images/salephotos')}}/{{$data->img1}}">
                        <div class="caption">
                            <h5 style="margin-bottom:15px;"><span style="color:#FF0000; font-size: 15px;">{{$data->flag_display}}</span></h5>

                            <h5 style="margin-bottom:15px;"><span style="color:#eea236;  font-size: 15px;">{{$data->property_type}}</span></h5>

                            <h5 style="font-size: 15px;"><span style="color:#337AB7; font-size: 15px;">[間取り]</span> <span>{{$data->floor_type}} / {{$data->building_area}}</span></h5>

                            <h5 ><span style="color:#337AB7; font-size: 15px;">[価格]</span> <span style="color:#FF0000; font-size: 15px;"> {{$data->formattedNum}} 万円 </span></h5>
                
                            <h5 style="font-size: 15px;"><span style="color:#337AB7; font-size: 15px;">[住所]</span> <span>{{$data->city}} &nbsp; {{$data->location}}</span></h5>
                            
                            <h5 style="font-size: 15px;" ><span style="color:#337AB7; font-size: 15px;">[最寄り駅]</span> <span>{{$data->nearst_station}}</span></h5>
                                
                        </div>
                        </a>
                    </div>    
                    @endforeach
                </div>
            </div>
        {{-- sales data end --}}
    </div>
    {{-- div3 close ------------------------------------------------------------------------------- --}}
    <div class="container-edit">
            <a href="{{url('/all_saleapartment')}}"><h4 align="right">See more >></h4></a>
    </div>
    <br>
    {{-- -------------- see more close ---------------------- --}}
   






    {{-- div 4 rent start -------------------------------------------------------------------------- --}}
    <br>
    <div class="container-edit">
        <h3>賃貸物件（アパート・マンション・戸建・その他）</h3>
                                                                                                                                                                                                 
        <div class="row"> <br>
            @foreach ($apartment_data as $adata)
            <div class="col-xs-6 col-sm-3 col-md-3" style="margin-bottom:35px; height: 400px;">
                <a href="{{url('/ApartmentViewData')}}/{{$adata->id}}" class="thumbnail" style="text-decoration: none;"/>
                <img src="{{asset('images/photos')}}/{{$adata->img1}}">
                <div class="caption">
                    <h5 style="margin-bottom:15px;"><span style="color:#FF0000; font-size: 15px;">{{$adata->flag_display}}</span></h5>

                    <h5 style="margin-bottom:15px;"><span style="color:#eea236;  font-size: 15px;">{{$adata->property_type}}</span></h5>
                    <h5 style="margin-bottom:15px;"><span style="color:#eea236;  font-size: 15px;">{{$adata->property_name}}</span></h5>
                    <h5 style="margin-bottom:15px;"><span style="color:#eea236;  font-size: 15px;">{{$adata->room_no}}</span></h5>

                    <h5 style="font-size: 15px;"><span style="color:#337AB7; font-size: 15px;">[間取り]</span> <span>{{$adata->floor_type}} / {{$adata->occupied_area}}</span></h5>

                    <h5 ><span style="color:#337AB7; font-size: 15px;">[価格]</span> <span style="color:#FF0000; font-size: 15px;"> {{$adata->formattedNum}} 万円 </span></h5>
        
                    <h5 style="font-size: 15px;"><span style="color:#337AB7; font-size: 15px;">[住所]</span> <span>{{$adata->location}}</span></h5>
                    
                    <h5 style="font-size: 15px;" ><span style="color:#337AB7; font-size: 15px;">[最寄り駅]</span> <span>{{$adata->nearst_station}}</span></h5>
                        
                </div>
                </a>
            </div>    
            @endforeach
        </div>
        <br><br>
        <div class="container-edit">
            <a href="{{url('/all_rentapartment')}}"><h4 align="right">See more >></h4></a>
        </div>
    </div>
    <br>
    {{-- div4 close ----------------------------------------------------------------------------------- --}}
  
    {{-- --------------------------see more close --------------- --}}




    {{-- div 5 start information row------------------------------------------------------------------------ --}}
    <div class="container">
        <div class="row">
          <div class="col-sm-6 col-xs-12">
                <div style="font-weight:bold;color:#009900;padding-bottom:3px;">
                  <br>●ご案内
                </div>
                <a href="info_kashitai.php" target="_blank"><img src="images/info_04.gif" alt="物件を貸したい方" style="float:left;display:inline; margin-right: 5px;"></a><a href="info_baikyaku.php" target="_blank"><img src="images/info_01.gif" alt="売却をお考えの方" style="float:left;display:inline;margin-right:5px;"></a>
                <a href="info_kounyu.php" target="_blank"><img src="images/info_02.gif" alt="購入をお考えの方" style="float:left;display:inline;margin-right:5px;"></a>
                <a href="info_kaikae.php" target="_blank"><img src="images/info_03.gif" alt="お買い替えをお考えの方" style="float:left;display:inline;margin-right:5px;"></a>&nbsp;
          </div>
          <div class="col-sm-6 col-xs-12">
                <div style="font-weight:bold;color:#FF6600;left;padding-bottom:3px;"><br>●各種お問合わせ</div>
                <a href="http://www.daiichihome.com/ask_baikyaku.html" target="_blank"><img src="images/ask_01.gif" alt="売却のお問合わせ" style="float:left;display:inline;margin-right:5px;"></a><a href="http://www.daiichihome.com/ask_kounyu.html" target="_blank"><img src="images/ask_02.gif" alt="購入のお問合わせ" style="float:left;display:inline;margin-right:5px;"></a><a href="http://www.daiichihome.com/ask_kaikae.html" target="_blank"><img src="images/ask_03.gif" alt="お買い替えのお問合わせ" style="float:left;display:inline;margin-right:5px;"></a><a href="http://www.daiichihome.com/ask_kashitai.html" target="_blank"><img src="images/ask_04.gif" alt="物件を貸したい方のお問合わせ" style="float:left;display:inline;"></a>&nbsp;&nbsp;&nbsp;
          </div>
        </div>
    </div>
    {{-- div 5 close-------------------------------------------------------------------------------------------- --}}




    {{-- div 6 map start ---------------------------------------------------------------------------------- --}}
    <div class="container-edit-fluid my-content2">
        <div class="container-edit">
            <hr>
            <div class="col-sm-3">
                <i class="fa fa-user" aria-hidden="true" style="color: #01b7f2; font-size: 30px;" ></i>
                <span style="margin-left: 20px; font-size: 20px;">会社概要</span>
                <p align="justify" style="margin-top: 20px; line-height: 25px;">
                    株式会社第一ホーム<br>
                    〒285-0921<br>
                    千葉県印旛郡酒々井町中川３４２番地１
                    TEL：043-496-8825<br>
                    FAX：043-496-8826 <br>
                    営業時間<br>
                    AM９:00～PM７:00<br>
                    定休日<br>
                    水曜日
                </p>
            </div>
            <div class="col-sm-9" style=" margin-bottom: 20px;" >
                <i class="fa fa-map-marker" aria-hidden="true" style="color: #01b7f2; font-size: 30px;"></i>
                <span style="margin-left: 20px; font-size: 20px;  margin-bottom: 20px;">  アクセス</span>
                <br>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3238.6048375087535!2d140.26920301454984!3d35.735935834578626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60228c014af94b6f%3A0x929169b7ae2a5b7e!2z5qCq5byP5Lya56S-IOesrOS4gOODm-ODvOODoA!5e0!3m2!1sen!2slk!4v1507976247207" height="450" frameborder="0" style="border:0;  padding-top: 20x; width: 100%;" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    {{-- div 6 close -------------------------------------------------------------------------------------- --}}



    {{-- div 7 more info start ----------------------------------------------------------------------------- --}}
    <d  iv class="container-edit-fluid my-content2">
        <div class="container-edit">
            <hr>
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <img src="images/titilebar_toriatsukai.gif" class="img-responsive">
                        <br>
                        <p>＜取扱い不動産・仕様等＞</p>
                        <p><b>【物件種別】 </b></p>
                        <p>アパート　マンション　一戸建て　ビル</p>
                        <p><b>【賃料】 </b></p>
                        <p>3 万円  3.5 万円  4 万円 4.5 万円 5 万円 5.5 万円 6 万円 6.5 万円 7 万円 7.5 万円 8 万円
                            8.5 万円 9 万円 9.5 万円 10 万円 11 万円 12 万円 13 万円 14 万円 15 万円 16 万円 17 万円
                                18 万円 19 万円 20 万円 30 万円 共益費／管理費を含む 
                        </p>

                        <p><b>【間取り】  </b></p>
                        <p>ワンルーム・1K・1DK　1LDK・2K・2DK　2LDK・3K・3DK　3LDK・4K・4DK　4LDK以上</p>

                        <p><b>【築年数】   </b></p>
                        <p>新築　3年以内　5年以内　10年以内　15年以内　20年以内</p>

                        <p><b> 【駅徒歩分】</b></p>
                        <p>1分以内　5分以内　7分以内　10分以内　15分以内</p>
                        <p><b>【その他条件】</b></p>
                        <p>駐車場あり 2階以上の物件 1階の物件 最上階の物件<br>
                            礼金なし 敷金なし<br>
                            バス・トイレ別 ガスコンロ 追い焚き エアコン ロフト付き 室内洗濯機置場 CATV <br>
                            CSアンテナ BSアンテナ オートロック フローリング 角部屋 TVドアホン 楽器相談 事務所可 ペット相談</p><br>

                        <p>＜取扱い不動産仲介・売買＞</p>

                        <p><b>【居住用住宅】</b></p>
                        <p>新築住宅・中古住宅・中古マンション・新築マンション・注文住宅・二世帯住宅・豪邸 </p>
                        <p><b>【土地】</b></p>
                        <p>住宅用地・事業用地・資材置場・農地・雑種地・山林 </p>
                        <p><b>【事業用物件】</b></p>
                        <p>土地・店舗・倉庫・売ビル・資材置き場・畑・田 </p>
                        <p><b>【田舎暮らし物件】</b></p>
                        <p>農家住宅・リゾート物件・別荘・別荘地 </p>
                        <p><b>【収益物件】</b></p>
                        <p>一棟売マンション・一棟売アパート・貸家・貸店舗・貸事務所・売ビル</p>
                        <p><b>【間取り】 </b></p>
                        <p>ワンルーム・1K・1DK　1LDK・2K・2DK　2LDK・3K・3DK　3LDK・4K・4DK　4LDK以上</p>
                        </div>   
                </div>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>
    {{-- div7 close ---------------------------------------------------------------------------------------- --}}

    <style>
        #toTop{
      position: fixed;
      bottom: 10px;
      right: 10px;
      cursor: pointer;
      display: none;
    }
    </style>

    {{-- script 1 start ----------------------------------------------------------------------  ------ --}}
    <script>
            $(document).ready(function () {
                  $("#filter").on('change', function () {
                      var getValue = $(this).val();
                     //  alert(getValue);
                     //  $('#id').val(getValue);
      
                      $.ajax({
                          url: "loction_filter/filterdata_location.php",
                          method: "POST",
                          data: {getValue: getValue},
                          success: function (data) {
                           //   alert(data)
                              $('#sort').html(data);
                          }
                      });
                  });
              });
    </script>
    {{-- script 1 close ---------------------------------------------------------------------- --}}
    
    
@endsection