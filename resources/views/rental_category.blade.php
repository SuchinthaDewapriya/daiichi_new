@extends('layouts.main')

@section('content')

<style>

        .dropdown-menu a.new:hover {
            color: black !important;
            text-decoration: none !important;
        }
        
        
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
        
            .col-half-offset{
                margin-left:3.166666667%
            }
        
            @media only screen and (max-width: 768px){
                .a
                {
                    margin-left:0px;
                }
            }
            @media only screen and (min-width: 768px){
                .a{
                    margin-left: 184px;
                }
            }
        </style>

<body oncontextmenu="return false" id="body">
        <div style="margin-top: 280px;"></div>
    
        <div class="container-edit" style="margin-top: 20px; ">
    
            <div class="panel panel-default" >
                <div class="panel-body">
                    <h1 align="center">物件検索（エリア・沿線）</h1>
                    <div class="row" style="margin-top: 70px; margin-bottom: 100px;">
                        <div class="col-sm-4 a" align="center" style="">
                            <div class="dropdown" style="width: 80px;">
                                <button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown">エリア
                                    <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a class="new" href="{{ url('rental_list')}}/{{$name='酒々井エリア'}}/{{$cat='twon'}}">酒々井エリア</a></li>
                                        <li><a class="new" href="{{ url('rental_list')}}/{{$name='佐倉エリア'}}/{{$cat='twon'}}">佐倉エリア</a></li>
                                        <li><a class="new" href="{{ url('rental_list')}}/{{$name='その他エリア'}}/{{$cat='twon'}}">その他エリア</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4" align="center">
    
                                <div class="dropdown" style="width: 80px;">
                                    <button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown">最寄駅
                                        <span class="caret"></span></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="new" href="{{ url('rental_list')}}/{{$name='京成酒々井'}}/{{$cat='nearst_station'}}">京成酒々井</a></li>
                                            <li><a class="new" href="{{ url('rental_list')}}/{{$name='京成佐倉'}}/{{$cat='nearst_station'}}">京成佐倉</a></li>
                                            <li><a class="new" href="{{ url('rental_list')}}/{{$name='公津の杜'}}/{{$cat='nearst_station'}}">公津の杜</a></li>
                                            <li><a class="new" href="{{ url('rental_list')}}/{{$name='JR酒々井'}}/{{$cat='nearst_station'}}">JR酒々井</a></li>
                                            <li><a class="new" href="{{ url('rental_list')}}/{{$name='JR佐倉'}}/{{$cat='nearst_station'}}">JR佐倉</a></li>
                                            <li><a class="new" href="{{ url('rental_list')}}/{{$name='JR榎戸駅'}}/{{$cat='nearst_station'}}">JR榎戸駅</a></li>
                                            <li><a class="new" href="{{ url('rental_list')}}/{{$name='JR八街駅'}}/{{$cat='nearst_station'}}">JR八街駅</a></li>
                                            <li><a class="new" href="{{ url('rental_list')}}/{{$name='JR南酒々井駅'}}/{{$cat='nearst_station'}}">JR南酒々井駅</a></li>
                                            <li><a class="new" href="{{ url('rental_list')}}/{{$name='JR成田駅'}}/{{$cat='nearst_station'}}">JR成田駅</a></li>
                                            <li><a class="new" href="{{ url('rental_list')}}/{{$name='京成宗吾参道駅'}}/{{$cat='nearst_station'}}">京成宗吾参道駅</a></li>
                                            <li><a class="new" href="{{ url('rental_list')}}/{{$name='京成成田駅'}}/{{$cat='nearst_station'}}">京成成田駅</a></li>
                                            <li><a class="new" href="{{ url('rental_list')}}/{{$name='京成大佐倉駅'}}/{{$cat='nearst_station'}}">京成大佐倉駅</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
    
    
                            <h1 align="center">こだわり検索（各種こだわり条件で）</h1>
    
                            <div class="col-md-12  col-md-offset-1" style="margin-top: 70px; margin-bottom: 100px;" align="center">
    
    
    
                                <div class="col-md-2 col-sm-6 col-xs-12" id="p5" >
                                    <a id="img1" href="{{ url('rental_list')}}/{{$name='新築・築浅'}}/{{$cat='construction'}}">
                                    <img src="images/sub/05.png" class="img-responsive"/>
                                    <h4 style="color: #009966; font-weight: bold;">新築・築浅</h4>
                                    </a>
                                </div>
    
                                <div id="img2" class="col-md-2 col-sm-6 col-xs-12" id="p2">
                                    <a href="{{ url('rental_list')}}/{{$name='駅近物件'}}/{{$cat='pronear_station'}}">
                                    <img src="images/sub/02.png" class="img-responsive"/>
                                    <h4 style="color: #009966; font-weight: bold;">駅近物件</h4>
                                    </a>
                                </div>
    
                                <div id="img3" class="col-md-2 col-sm-6 col-xs-12" id="p3">
                                    <a href="{{ url('rental_list')}}/{{$name='ペットも同居'}}/{{$cat='pets_live'}}">
                                    <img src="images/sub/03.png" class="img-responsive"/>
                                    <h4 style="color: #009966; font-weight: bold;">ペットも同居</h4>
                                    </a>
                                </div>
    
                                <div id="img4" class="col-md-2 col-sm-6 col-xs-12" id="p4">
                                        <a href="{{ url('rental_list')}}/{{$name='敷金ゼロ・フリーレント'}}/{{$cat='deposit'}}">
                                    <img src="images/sub/04.png" class="img-responsive"/>
                                    <h4 style="color: #009966; font-weight: bold;">礼金０円</h4>
                                    </a>
                                </div>
    
                                <div id="img5" class="col-md-2 col-sm-6 col-xs-12" >
                                    <a href="{{ url('rental_list')}}/{{$name='事業用・駐車場等'}}/{{$cat='business_prk'}}" >
                                    <img src="images/sub/01.png" class="img-responsive"/>
                                    <h4 style="color: #009966; font-weight: bold;">事業用・駐車場等</h4>
                                    </a>
                                </div>
                        </div>
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
    
@endsection