@extends('layouts.main')

@section('content')
<div class="container-edit ">
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
                    <option selected="selected" value="0" >-- select --</option>
                    <option value="1">価格が安い順</option> <!--price aduma eke idan wedi ekata-->
                    <option value="2">価格が高い順</option> <!--price wedima eke idan adu ekata-->
                    <option value="3">築年数が新しい順</option>  <!--build years anuwa aluthma 1-->
                    <option value="4">広い順</option>  <!--build years anuwa parana eke idan-->
                  </select>
                  <input type="hidden" id="name" name="name" value="">
                  <input type="hidden" id="name1" name="name1" value="">
                </div>
              </div>
      
      
      
        </form>
      
      </div>  
      
      
      </div> 
      </div> 
      
      <div class="my-content1" id="sort"> 
       <div class="container-edit" >
         <div class="panel panel-default" >
          <div class="panel-body">     
            <!-- hide table only use mobile screen-->
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
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
             <tbody style="text-align: center; ">
      
      
      
      
      
      
      
            </tbody>
          </table> 
          <p style="text-align:center">no data</p>
      
      
        </div></div>
      
      </div>  
      </div>   
      
      </div>
      
      <script type="text/javascript">
      
        $(document).ready(function() {
          $("#filter").change(function(){
            var getval=$('#filter option:selected').val();
            var name = document.getElementById('name').value;
            var name1 = document.getElementById('name1').value;
           // alert(getval);
           $.ajax({
            type: 'POST',
            url: "filterdata_mansion.php",
            data:  {getValue:getval, name:name, name1:name1},
            success: function(data){
              //alert(data);
              $('#sort').html(data);
            }
          });
         });
        });
      
      </script>
      
      
      <script>
        
      
        $(document).ready(function() {
          $("#filter1").change(function(){
            
            var getval=$('#filter1 option:selected').val();
            var name = document.getElementById('name').value;
            var name1 = document.getElementById('name1').value;
           // alert(getval);
           $.ajax({
            type: 'POST',
            url: "filterdatamob_mansion.php",
            data:  {getValue:getval, name:name, name1:name1},
            success: function(data){
              //alert(data);
              $('#sort1').html(data);
            }
          });
         });
        });
      
      </script> 
@endsection