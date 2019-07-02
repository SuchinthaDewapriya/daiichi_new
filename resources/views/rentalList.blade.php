@extends('layouts.main')
@section('pageTitle', '酒々井の不動産　第一ホーム')
@section('content')
@php
    error_reporting(0);

@endphp
<div id="body">
        <div style="margin-top: 280px;"></div>
               <div class="container-edit">
                  <div class="row">
                    <div class="col-sm-8"></div>
                    <div class="col-sm-4">
            
        
        <div class="col-sm-3">
            <label style="padding-top: 8px;"> 並び替え</label>
        </div>
    
        <div class="col-sm-9">
        <div class="form-group">
    <select name="users" class="form-control" id="filter">
    <option value="0" selected="selected">Select</option>
    <option value="1">賃料安い順</option> <!--price aduma eke idan wedi ekata-->
    <option value="2">賃料高い順</option> <!--price wedima eke idan adu ekata-->
    <option value="3">築年数が新しい順</option>  <!--build years anuwa aluthma 1-->
    <option value="4">広い順</option>  <!--build years anuwa parana eke idan-->
    </select>
    <input type="hidden" id="station" name="station" value="<?php echo $name;?>">
    <input type="hidden" id="category" name="category" value="<?php echo $cat; ?>">
             </div>
        </div>
    
    
    
                    </div>
    
    
                </div>
            </div>
               <div class="my-content" id="sort1">
    
    
      <!-- hide table only use mobile screen-->
    
                 <br>
    
     
        <div class="container-edit h5 hidden-lg col-sm-12" style="margin:0; padding:0;">
            <div class="table-responsive">
            <table id='tab' class='table table-bordered table-responsive main_box' border='2' cellpadding='3' border-collapse: collapse; text-align: center;'>
                <tr style='background: #BE2E62; color:#fff; padding-left:30px; text-align: center;'>
                    <th class='cate_box' style='padding-left:10px; padding-right:10px; vertical-align:bottom;'>写真</th>
                    <th class='cate_box' style='padding-left:10px; padding-right:10px; vertical-align:bottom;'>最寄り駅</th>

                    <th class='cate_box' style='padding-left:10px; padding-right:10px; vertical-align:bottom;'>物件タイプ</th>
                    <th class='cate_box' style='padding-left:10px; padding-right:10px; vertical-align:bottom;'>所在地</th>

                    <th class='cate_box' style='padding-left:10px; padding-right:10px; vertical-align:bottom;'>聞収り</br></th>
                    <th class='cate_box' style='padding-left:10px; padding-right:10px; vertical-align:bottom;'>面積<br>m <sup>2</sup></th>
                    <th class='cate_box' style='padding-left:10px; padding-right:10px; vertical-align:bottom;'>築年月</th>
                    <th class='cate_box' style='padding-left:10px; padding-right:10px; vertical-align:bottom;'>賃料</th>
                </tr>
                <tbody id="tbody1">
                @foreach($rental as $item)
                <tr style='color: #CC0000;'>
                    <td class='data_box' style="vertical-align:middle;"><a href='{{ url('details')}}/{{$item->id}}' class='thumbnail'><img src='../../images/photos/{{$item->img1}}' style='width:150px; height:auto;'/></a></td>
                    <td class='data_box' style="vertical-align:middle;">{{$item->nearst_station}}</td>
                    <td class='data_box' style="vertical-align:middle;">{{$item->property_type}}</td>
                    <td class='data_box' style="vertical-align:middle;">{{$item->location}}</td>
                    <td class='data_box' style="vertical-align:middle;">{{$item->floor_type}}</td>
                    <td class='data_box' style="vertical-align:middle;">{{$item->occupied_area}}</td>
                    <td class='data_box' style="vertical-align:middle;">{{$item->built_years}}</td>
                    <td class='data_box' style="vertical-align:middle;">{{$item->built_years}}</td>
                    <td class='data_box' style="vertical-align:middle;">{{number_format($item->price)}} 円</td>
                </tr>
                @endforeach
                </tbody>
            </table>
            </div>
        </div>
      
             

      </div>
    
    <div class="my-content1" id="sort" >
        <div class="container-edit">
    
            <div class="panel panel-default" style="min-width: 244px;" >
                <div class="panel-body">
                    
                    <table id='tab' class='table table-bordered table-responsive main_box' border='2' cellpadding='3' border-collapse: collapse; text-align: center;'>
                    <thead>
                    <tr style='background: #BE2E62; color:#fff; padding-left:30px; text-align: center;'>
                    <th class='cate_box' style='padding-left:10px; padding-right:10px; vertical-align:bottom;'>写真</th>
                    <th class='cate_box' style='padding-left:10px; padding-right:10px; vertical-align:bottom;'>最寄り駅</th>
    
                    <th class='cate_box' style='padding-left:10px; padding-right:10px; vertical-align:bottom;'>物件タイプ</th>
                    <th class='cate_box' style='padding-left:10px; padding-right:10px; vertical-align:bottom;'>所在地</th>
    
                    <th class='cate_box' style='padding-left:10px; padding-right:10px; vertical-align:bottom;'>聞収り</br></th>
                    <th class='cate_box' style='padding-left:10px; padding-right:10px; vertical-align:bottom;'>面積<br>m <sup>2</sup></th>
                    <th class='cate_box' style='padding-left:10px; padding-right:10px; vertical-align:bottom;'>築年月</th>
                    <th class='cate_box' style='padding-left:10px; padding-right:10px; vertical-align:bottom;'>賃料</th>
                    </thead>
    
    
    
                    </tr>
                    <tbody id="tbody">
                    @foreach($rental as $item)
                        <tr style='color: #CC0000;'>
                        <td class='data_box' style="vertical-align:middle;">
                        <a href='{{ url('details')}}/{{$item->id}}' class='thumbnail' style='margin-bottom:0 !important;'><img src='{{ asset('images/photos')}}/{{$item->img1}}' style='width:150px; height:auto;'></a>
                        </td>
    
                        <td class='data_box' style='vertical-align:middle;'> {{ mb_convert_encoding($item->nearst_station, "UTF-8", "auto")}} </td>
                        <td class='data_box' style='vertical-align:middle;'> {{mb_convert_encoding($item->property_type, "UTF-8", "auto")}} </td>
                        <td class='data_box' style='vertical-align:middle;'> {{mb_convert_encoding($item->location, "UTF-8", "auto")}} </td>
                        <td class='data_box' style='vertical-align:middle;'> {{mb_convert_encoding($item->floor_type, "UTF-8", "auto")}} </td>
                        <td class='data_box' style='vertical-align:middle;'> {{ (!empty($item->occupied_area) ? mb_convert_encoding($item->occupied_area."㎡" , "UTF-8", "auto") : '')}}   <sup></sup></span></td>
                        <td class='data_box' style='vertical-align:middle;'> {{ mb_convert_encoding($item->built_years, "UTF-8", "auto")}} </td>
                        <td class='data_box' style='vertical-align:middle;'> {{number_format($item->price) }} <span>円</span></td>
    
    
                        </tr>
                    @endforeach
                    </tbody>
                    </table>
    
                    
            </div>
    
        </div>
    
    
    
    </div>
    </div>
</div>



<script> 

    $(document).ready(function() {
        $("#filter").change(function(){
          var getval=$('#filter option:selected').val();
          var users = $(this).val();
          var name = document.getElementById('station').value;
          var name1 = document.getElementById('category').value;
         // alert(getval);
         $.ajax({
          type: 'POST',
          url: "{{ url('filterdatarental')}}",
          data:  {'users':users, 'name':name, 'name1':name1, '_token': '{{csrf_token()}}'},
          success: function(data){
            console.log(data)
            $("#tbody").empty(); 
            $.each(data, function(k,v){
                var id = console.log(v.id);
                var img1 = console.log(v.img1);
                var nearst_station = console.log(v.nearst_station);
                var property_type = console.log(v.property_type);
                var location = console.log(v.location);
                var floor_type = console.log(v.floor_type);
                var occupied_area = v.occupied_area;
                var price = console.log(v.price);
                if (!occupied_area) {
                    occupied_area = '';
                }else{
                    occupied_area = v.occupied_area + '㎡'
                }
                $("#tbody").append("<tr style='color: #CC0000;'><td scope='row'><a href='{{url('details')}}/"
                +v.id+"'><img src='{{ asset('images/photos')}}/"
                +v.img1+"' class='img-responsive' width='150px' height='50px'/></a></td><td class='data_box' style='padding-top:40px;'><span>"
                +v.nearst_station+"</span></td><td class='data_box' style='padding-top:40px;'><span>"
                +v.property_type+"</span></td><td class='data_box' style='padding-top:40px;'><span>"
                +v.location+"</span></td><td class='data_box' style='padding-top:40px;'><span>"
                +v.floor_type+"</span></td><td class='data_box' style='padding-top:40px;'><span>"+occupied_area+"</span></td><td class='data_box' style='padding-top:40px;'><span>"
                +v.built_years+"</span></td><td class='data_box' style='padding-top:40px;'><span>"+parseInt(v.price)+" 円</span></td></tr>") 
            });
            console.log(data)
            $("#tbody1").empty(); 
            $.each(data, function(k,v){
                var id = console.log(v.id);
                var img1 = console.log(v.img1);
                var nearst_station = console.log(v.nearst_station);
                var property_type = console.log(v.property_type);
                var location = console.log(v.location);
                var floor_type = console.log(v.floor_type);
                var occupied_area = v.occupied_area;
                var price = console.log(v.price);
                if (!occupied_area) {
                    occupied_area = '';
                }else{
                    occupied_area = v.occupied_area + '㎡'
                }
                $("#tbody1").append("<tr style='color: #CC0000;'><td scope='row'><a href='{{url('details')}}/"
                +v.id+"'><img src='{{ asset('images/photos')}}/"
                +v.img1+"' class='img-responsive' width='150px' height='50px'/></a></td><td class='data_box' style='padding-top:40px;'><span>"
                +v.nearst_station+"</span></td><td class='data_box' style='padding-top:40px;'><span>"
                +v.property_type+"</span></td><td class='data_box' style='padding-top:40px;'><span>"
                +v.location+"</span></td><td class='data_box' style='padding-top:40px;'><span>"
                +v.floor_type+"</span></td><td class='data_box' style='padding-top:40px;'><span>"+occupied_area+"</span></td><td class='data_box' style='padding-top:40px;'><span>"
                +v.built_years+"</span></td><td class='data_box' style='padding-top:40px;'><span>"+parseInt(v.price)+" 円</span></td></tr>") 
            });
          }
        });
       });
      });
</script> 

@stop