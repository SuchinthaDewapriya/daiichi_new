@extends('layouts.app')
@section('pageTitle', 'Seiki=bill - Detached')
@section('content')

<div style="margin-top: 200px;"></div>

<div class="container-edit-fluid">
 <div class="container-edit up">
    <h1 align="center"> <?php echo $id;?> </h1>

        <ol class="breadcrumb">
        <li><a href="{{ url('/')}}">ホーム</a></li>
        <li class="active"><?php echo $id;?> </li>
        </ol>



 </div>

    <div class="container-edit">
               <div class="row">
                <div class="col-sm-8"></div>
                <div class="col-sm-4">

                    <form>

    <div class="col-sm-3">
        <label style="padding-top: 8px;"> 並び替え</label>
    </div>

    <div class="col-sm-9">
    <div class="form-group">
<select name="users" class="form-control" id="filter">
<option selected="selected" value="0" >-- Select --</option>
<option value="1">賃料安い順</option> <!-- price aduma eke idan wedi ekata -->
<option value="2">賃料高い順</option> <!-- price wedima eke idan adu ekata -->
<option value="3">築年数が新しい順</option>  <!-- build years anuwa aluthma 1 -->
<option value="4">広い順</option>  <!-- build years anuwa parana eke idan -->
</select>
<input type="hidden" name="filterid" id="filterid" value="{{$id}}">
         </div>
    </div>

                </form>

                </div>


            </div>
        </div>  

   <div class="my-content" id="sort">


  <!-- hide table only use mobile screen-->

             <br>

  <div class="container-edit h5" style="margin:0; padding:0;">
  <table><tr>
  <td >
  <div class="row" id="mobfilter">
   @foreach($location as $item)
      <div class="col-xs-6 col-md-3 col-sm-3" style="margin-bottom:15px;">

             <a href="{{ url('mansion-detail')}}/{{$item->id}}" class="thumbnail" style="text-decoration: none;"/>

         <img src="{{ asset('public/images/salephotos')}}/{{$item->img1}}">
        <div class="caption">

          <h5 style="margin-bottom:15px;"><span style="color:#FF0000; font-size: 15px;">{{$item->flag_display}}</span>
             </h5>

                <h5 style="margin-bottom:15px;">
              <span style="color:#eea236;  font-size: 15px;">{{$item->property_type}}</span></h5>


                <h5 style="font-size: 15px;"><span style="color:#337AB7; font-size: 15px;">[間取り]</span></h5>
                <h5 style="font-size: 15px;">{{$item->floor_type}} / {{$item->building_area}}</h5>

                <h5 ><span style="color:#337AB7; font-size: 15px;">[価格]</span></h5>
                <h5 ><span style="color:#FF0000; font-size: 15px;"> {{$item->price}}</span></h5>

                <h5 style="font-size: 15px;"><span style="color:#337AB7; font-size: 15px;">[住所]</span></h5>
                <h5 style="font-size: 15px;">{{$item->city}},{{$item->location}}</h5>


                <h5 style="font-size: 15px;" ><span style="color:#337AB7; font-size: 15px;">[最寄り駅]</span></h5>

                <h5 style="font-size: 15px;" >{{$item->nearst_station}}</h5>

         </div>
         </a>
         </div>
         @endforeach
    </div>
    </td>
    </tr></table>
    </div>

  </div>


  <div class="my-content1" id="sort1">
       <div class="container-edit" >
 <div class="panel panel-default" >
  <div class="panel-body">
<!-- hide table only use mobile screen-->

<table class="table table-bordered table-responsive main_box" style="text-align: center;">
  <thead>
      <tr style="background: #BE2E62; color: #fff;">
       <th class="cate_box"><span>写真</span></th>
          <th class="cate_box"><span>物件タイプ</span></th>
          <th class="cate_box"><span>所在地</span></th>
             <th class="cate_box"><span>最寄り駅</span></th>
          <th class="cate_box"><span>間取り・面積 </span></th>
          <th class="cate_box"><span>面積 </br> m <sup> 2</sup></span></th>
           <th class="cate_box"><span>築年月</span></th>
          <th class="cate_box"><span>価格(税込）</span></th>
    </tr>
  </thead>
  <tbody style="text-align: center; " id="tbody">

      @foreach($location as $item)
      <tr style="color: #CC0000;" >
          <td scope="row"><a href="{{ url('mansion-detail')}}/{{$item->id}}"><img src="{{ asset('public/images/salephotos')}}/{{$item->img1}}" class="img-responsive" width="150px" height="50px"/></a></td>

          <td class="data_box" style="padding-top:40px;"><span><?php echo $item->property_type;  ?></span></td>
          <td class="data_box" style="padding-top:40px;"><span><?php echo $item->location;  ?></span></td>
          <td class="data_box" style="padding-top:40px;"><span><?php echo $item->nearst_station;  ?></span></td>
          <td class="data_box" style="padding-top:40px;"><span><?php echo $item->floor_type;  ?></span></td>
          <td class="data_box" style="padding-top:40px;"><span><?php echo $item->building_area ."㎡";  ?></span></td>
<!--          <td class="data_box" style="padding-top:40px;"><span><?php echo $item->building_structure;  ?></span></td>-->
                 <td class="data_box" style="padding-top:40px;"><span><?php echo $item->built_years;  ?></span></td>
          <td class="data_box" style="padding-top:40px;"><span><?php echo $item->price;  ?></span></td>
    </tr>
    @endforeach

  </tbody>
</table>





  </div></div>

 </div>
 </div>
<input type="hidden" name="cs" id="location" value="<?php echo(!empty($id ? $id : '')); ?>">
            </div>



<script> 

    $(document).ready(function() {
        $("#filter").change(function(){
          var users = $(this).val();
          var filterid = document.getElementById('filterid').value;
          // alert(getval);
          $.ajax({
          type: 'POST',
          url: "{{ url('filterdatalocation')}}",
          data:  {'filterid':filterid, 'users':users, '_token': '{{csrf_token()}}'},
          success: function(data){
            console.log(data)
            $("#tbody").empty(); 
            $.each(data, function(k,v){
                var id = console.log(v.id);
                var img1 = console.log(v.img1);
                var property_type = console.log(v.property_type);
                var nearst_station = console.log(v.nearst_station);
                var location = console.log(v.location);
                var floor_type = console.log(v.floor_type);
                var building_area = v.building_area;
                var price = console.log(v.price);
                if (!building_area) {
                  building_area = '';
                }else{
                  building_area = v.building_area + '㎡'
                }
                $("#tbody").append("<tr style='color: #CC0000;'><td scope='row'><a href='{{url('mansion-detail')}}/"
                +v.id+"'><img src='../public/images/salephotos/"
                +v.img1+"' class='img-responsive' width='150px' height='50px'/></a></td><td class='data_box' style='padding-top:40px;'><span>"
                +v.nearst_station+"</span></td><td class='data_box' style='padding-top:40px;'><span>"
                +v.property_type+"</span></td><td class='data_box' style='padding-top:40px;'><span>"
                +v.location+"</span></td><td class='data_box' style='padding-top:40px;'><span>"
                +v.floor_type+"</span></td><td class='data_box' style='padding-top:40px;'><span>"+building_area+"</span></td><td class='data_box' style='padding-top:40px;'><span>"
                +v.built_years+"</span></td><td class='data_box' style='padding-top:40px;'><span>"+parseInt(v.price)+" 万円</span></td></tr>") 
            });
            console.log(data)
                  $("#mobfilter").empty(); 
                  $.each(data, function(k,v){
                      var id = console.log(v.id);
                      var img1 = console.log(v.img1);
                      var flag_display = console.log(v.flag_display);
                      var property_type = console.log(v.property_type);
                      var nearst_station = console.log(v.nearst_station);
                      var location = console.log(v.location);
                      var floor_type = console.log(v.floor_type);
                      var building_area = v.building_area;
                      var price = console.log(v.price);
                      var city = console.log(v.city);
                      if (!building_area) {
                        building_area = '';
                      }else{
                        building_area = v.building_area + '㎡'
                      }
                      $("#mobfilter").append("<div class='col-xs-6 col-md-3 col-sm-3' style='margin-bottom:15px;'><a class='thumbnail' href='{{url('mansion-detail')}}/"
                      +v.id+" style='text-decoration: none;'><img src='../public/images/salephotos/"
                      +v.img1+"'><div class='caption'><h5 style='margin-bottom:15px;'><span style='color:#FF0000; font-size: 15px;'>"
                      +v.flag_display+"</span></h5><h5 style='margin-bottom:15px;'><span style='color:#eea236;  font-size: 15px;'>"
                      +v.property_type+"</span></h5><h5 style='font-size: 15px;'><span style='color:#337AB7; font-size: 15px;'>[間取り]</span></h5><h5 style='font-size: 15px;'>"
                      +v.floor_type+" / "+v.building_area+"</h5><h5><span style='color:#337AB7; font-size: 15px;'>[価格]</span></h5><h5 ><span style='color:#FF0000; font-size: 15px;'>"
                      +parseInt(v.price)+" 万円</span></h5><h5 style='font-size: 15px;'><span style='color:#337AB7; font-size: 15px;'>[住所]</span></h5><h5 style='font-size: 15px;'>"
                      +v.city+","+v.location+"</h5><h5 style='font-size: 15px;'><span style='color:#337AB7; font-size: 15px;'>[最寄り駅]</span></h5><h5 style='font-size: 15px;'>"+v.nearst_station+"</h5></div></a></div>") 
                  });
          }
        });
        });
      });
      
            
        </script> 
        
@stop