@extends('layouts.main')
@section('pageTitle', '会社案内 | つくば市 不動産　売却 ｜土地｜マンション | 賃貸 |清貴ビル')
@section('content')


<!--navbar-fixed-top-->
<div style="margin-top: 200px;"></div>


         
<div class="container-edit-fluid">
 <div class="container-edit up">
    <h1 align="center"> <?php echo (!empty($name) ? $name : ''); ?></h1>
             
        <ol class="breadcrumb">
        <li><a href="{{ url('/')}}">ホーム</a></li>
        <li class="active"><?php echo (!empty($name) ? $name : ''); ?></li>
        </ol>
     
    
     
 </div>
    
      <div class="container-edit my-content">
               <div class="row">
                <div class="col-sm-8"></div>  
                <div class="col-sm-4">
                    
                    <form>
                           
    <div class="col-sm-3">
        <label style="padding-top: 8px;"> 並び替え</label> 
    </div> 
                        
    <div class="col-sm-9">
    <div class="form-group">               
<select name="users" class="form-control" id="filter1">
    <option selected="selected" value="0" >-- select --</option>
    <option value="1">価格が安い順</option> <!--price aduma eke idan wedi ekata-->
    <option value="2">価格が高い順</option> <!--price wedima eke idan adu ekata-->
    <option value="3">築年数が新しい順</option>  <!--build years anuwa aluthma 1-->
    <option value="4">広い順</option>  <!--build years anuwa parana eke idan-->
</select>
            <input type="hidden" id="name" name="name" value="{{$name}}">
            <input type="hidden" id="name1" name="name1" value="{{$name1}}">
         </div>
    </div>
  
                        
<!--     <div class="col-sm-5">                 
      <button type="submit" class="btn btn-info" style=" background-color:#BE2E62; color:#FFF; border:0; font-size: 15px; min-width: 130px;" name="submit" >並び替え</button>
                        </div> -->
                        
                </form>
                    
                </div>  
                             
                
            </div> 
        </div> 

   <div class="my-content " id="sort1">  
 

  <!-- hide table only use mobile screen-->
    
             <br>
 

  <div class="container-edit h5" style="margin:0; padding:0;">
  <table><tr>
  <td >
  <div class="row" id="mobfilter">
   @foreach($sale as $item)
      <div class="col-xs-6 col-md-3 col-sm-3" style="margin-bottom:15px;">
      
             <a href="{{url('SalesViewData')}}/{{$item->id}}" class="thumbnail" style="text-decoration: none;">


         <img src="{{ asset('images/salephotos')}}/{{$item->img1}}">
        <div class="caption">
            
          <h5 style="margin-bottom:15px;"><span style="color:#FF0000; font-size: 15px;">{{$item->flag_display}}</span>
             </h5>

                <h5 style="margin-bottom:15px;">
              <span style="color:#eea236;  font-size: 15px;">{{$item->property_type}}</span></h5>


                <h5 style="font-size: 15px;"><span style="color:#337AB7; font-size: 15px;">[間取り]</span></h5>
                <h5 style="font-size: 15px;">{{$item->floor_type}} / {{$item->building_area}}</h5>

                <h5 ><span style="color:#337AB7; font-size: 15px;">[価格]</span></h5>
                <h5 ><span style="color:#FF0000; font-size: 15px;">{{intval($item->price)}}万円</span></h5>

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
       
       <div class="container-edit my-content1">
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
<option class="fil" selected="selected" value="0" >-- select --</option>
<option class="fil" value="1">価格が安い順</option> <!--price aduma eke idan wedi ekata-->
<option class="fil" value="2">価格が高い順</option> <!--price wedima eke idan adu ekata-->
<option class="fil" value="3">築年数が新しい順</option>  <!--build years anuwa aluthma 1-->
<option class="fil" value="4">広い順</option>  <!--build years anuwa parana eke idan-->
</select>
            <input type="hidden" id="name" name="name" value="{{$name}}">
            <input type="hidden" id="name1" name="name1" value="{{$name1}}">
         </div>
    </div>
  
                        
<!--     <div class="col-sm-5">                 
      <button type="submit" class="btn btn-info" style=" background-color:#BE2E62; color:#FFF; border:0; font-size: 15px; min-width: 130px;" name="submit" >並び替え</button>
                        </div> -->
                        
                </form>
                    
                </div>  
                             
                
            </div> 
        </div> 
    
  <div class="my-content1" id="sort"> 
       <div class="container-edit" >
 <div class="panel panel-default" >
  <div class="panel-body">     
<!-- hide table only use mobile screen-->
     
<table class="table table-bordered table-responsive main_box" style="text-align: center;">
  <thead>
      <tr style="background: #BE2E62; color: #fff;">
       <th class="cate_box"><span>写真</span></th>
          <th class="cate_box"><span>最寄り駅</span></th>
          <th class="cate_box"><span>物件タイプ</span></th>
          <th class="cate_box"><span>所在地</span></th>
          <th class="cate_box"><span>間取り・面積</span></th>
          <th class="cate_box"><span>土地面積 </br> m <sup> 2</sup></span></th>
          <th class="cate_box"><span>築年月</span></th>
          <th class="cate_box"><span>価格(税込）</span></th>
    </tr>
  </thead>
  <tbody style="text-align: center;" id="tbody">
      
      @foreach($sale as $item)
      <tr style="color: #CC0000;">
      <td scope="row"><a href="{{url('SalesViewData')}}/{{$item->id}}"><img src="{{ asset('images/salephotos')}}/{{$item->img1}}" class="img-responsive" width="150px" height="50px"/></a></td>
          <td class="data_box" style="padding-top:40px;"><span>{{$item->nearst_station}}</span></td>
          <td class="data_box" style="padding-top:40px;"><span>{{$item->property_type}}</span></td>
          <td class="data_box" style="padding-top:40px;"><span>{{$item->location}}</span></td>
          <td class="data_box" style="padding-top:40px;"><span>{{$item->floor_type}}</span></td>
          <td class="data_box" style="padding-top:40px;"><span><?php echo (!empty($item->building_area) ? $item->building_area."㎡" : ''); ?></span></td>
          <td class="data_box" style="padding-top:40px;"><span>{{$item->built_years}}</span></td>
          <td class="data_box" style="padding-top:40px;"><span>{{intval($item->price)}} 万円</span></td>
      </tr>
    @endforeach

  </tbody>
</table> 



    
  
  </div></div>
     
 </div>  
 </div>   
   
            </div>

         

            <script> 

                $(document).ready(function() {
                    $("#filter").change(function(){
                      var getval=$('#filter option:selected').val();
                      var users = $(this).val();
                      var name = document.getElementById('name').value;
                      var name1 = document.getElementById('name1').value;
                     // alert(getval);
                     $.ajax({
                      type: 'POST',
                      url: "{{ url('filterdatamansion')}}",
                      data:  {'users':users, 'name':name, 'name1':name1, '_token': '{{csrf_token()}}'},
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
                            $("#tbody").append("<tr style='color: #CC0000;'><td scope='row'><a href='{{url('SalesViewData')}}/"
                            +v.id+"'><img src='{{ asset('images/salephotos')}}/"
                            +v.img1+"' class='img-responsive' width='150px' height='50px'/></a></td><td class='data_box' style='padding-top:40px;'><span>"
                            +v.nearst_station+"</span></td><td class='data_box' style='padding-top:40px;'><span>"
                            +v.property_type+"</span></td><td class='data_box' style='padding-top:40px;'><span>"
                            +v.location+"</span></td><td class='data_box' style='padding-top:40px;'><span>"
                            +v.floor_type+"</span></td><td class='data_box' style='padding-top:40px;'><span>"+building_area+"</span></td><td class='data_box' style='padding-top:40px;'><span>"
                            +v.built_years+"</span></td><td class='data_box' style='padding-top:40px;'><span>"+parseInt(v.price)+" 万円</span></td></tr>") 
                        });
                      }
                    });
                   });
                  });
                  
                        
                    </script> 
                    <script> 

                      $(document).ready(function() {
                          $("#filter1").change(function(){
                            var getval=$('#filter option:selected').val();
                            var users = $(this).val();
                            var name = document.getElementById('name').value;
                            var name1 = document.getElementById('name1').value;
                           // alert(getval);
                           $.ajax({
                            type: 'POST',
                            url: "{{ url('filterdatamansion')}}",
                            data:  {'users':users, 'name':name, 'name1':name1, '_token': '{{csrf_token()}}'},
                            success: function(data){
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
                                  $("#mobfilter").append("<div class='col-xs-6 col-md-3 col-sm-3' style='margin-bottom:15px;'><a class='thumbnail' href='{{url('SalesViewData')}}/"
                                  +v.id+" style='text-decoration: none;'><img src='{{ asset('images/salephotos')}}/"
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
                    {{-- <script>
                         $(document).ready(function() {
                    $("#filter1").change(function(){
                      
                      var getval=$('#filter1 option:selected').val();
                      var name = document.getElementById('name').value;
                      var name1 = document.getElementById('name1').value;
                     // alert(getval);
                     $.ajax({
                      type: 'GET',
                      url: "filterdatamob_mansion.php",
                      data:  {getValue:getval, name:name, name1:name1},
                      success: function(data){
                        //alert(data);
                        $('#sort1').html(data);
                      }
                    });
                   });
                  });                        
                </script>  --}}
        
        


@stop