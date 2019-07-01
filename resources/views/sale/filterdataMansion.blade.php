<?php
$id=$_POST["getValue"];
$name=$_POST["name"];
$name1=$_POST["name1"];

    ?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="seiki";
$port="3306";

// Create connection..

$conn = new mysqli($servername, $username, $password, $dbname, $port);
$conn->set_charset("utf8");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 else {
  //echo "connection successfully";
}


if($id == 0){
  if($name1 == ""){

    $sql = "SELECT * FROM sale where property_type='".$name."' and sold_out = 1";     

  }else{
    $sql = "SELECT * FROM sale where property_type='".$name."' or property_type= '".$name1."' and sold_out = 1";
  }

  $result = $conn->query($sql);



?>
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
<!--          <th class="cate_box"><span>築年月</span></th>-->
           <th class="cate_box"><span>築年月</span></th>
          <th class="cate_box"><span>価格(税込）</span></th>
    </tr>
  </thead>
  <tbody style="text-align: center; ">
      
          

     
           <?php
                    $k= 0; 
  if ($result->num_rows > 0) {    
    while($row1 = $result->fetch_assoc()) {
        
        $k++
  ?>
        <tr style="color: #CC0000;" >
          <td scope="row"><a href="mansion_detail.php?id=<?php echo $row1['id']; ?>"><img src="../salephotos/<?php echo $row1['img1'];  ?>" class="img-responsive" width="150px" height="50px"/></a></td>
      <td class="data_box" style="padding-top:40px;"><span><?php echo $row1['nearst_station'];  ?></span></td>
          <td class="data_box" style="padding-top:40px;"><span><?php echo $row1['property_type'];  ?></span></td>
          <td class="data_box" style="padding-top:40px;"><span><?php echo $row1['location'];  ?></span></td>
          <td class="data_box" style="padding-top:40px;"><span><?php echo $row1['floor_type'];  ?></span></td>
          <td class="data_box" style="padding-top:40px;"><span><?php echo (!empty($row1['building_area']) ? $row1['building_area']."㎡" : '');  ?></span></td>
<!--          <td class="data_box" style="padding-top:40px;"><span><?php echo $row1['building_structure'];  ?></span></td>-->
                 <td class="data_box" style="padding-top:40px;"><span><?php echo $row1['built_years'];  ?></span></td>
          <td class="data_box" style="padding-top:40px;"><span><?php echo number_format($row1['price']);  ?></span></td>
    </tr>
<?php 
                   }

         
        
        
              mysqli_free_result($result);

    }
    
//$conn->close();
  ?>
   
  </tbody>
</table> 



    
  
  </div></div>
     
 </div>
<?PHP
}
?>


<?php

if($id == 1){

  if($name1 == ""){

    $sql = "SELECT * FROM sale where property_type='".$name."' and sold_out = 1 ORDER BY price ASC";     

  }else{
    $sql = "SELECT * FROM sale where property_type='".$name."' or property_type= '".$name1."' and sold_out = 1 ORDER BY price ASC";
  }

  $result = $conn->query($sql);

?>
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
<!--          <th class="cate_box"><span>築年月</span></th>-->
           <th class="cate_box"><span>築年月</span></th>
          <th class="cate_box"><span>価格(税込）</span></th>
    </tr>
  </thead>
  <tbody style="text-align: center; ">
      
          

     
           <?php
                    $k= 0; 
  if ($result->num_rows > 0) {    
    while($row1 = $result->fetch_assoc()) {
        
        $k++
  ?>
        <tr style="color: #CC0000;" >
          <td scope="row"><a href="mansion_detail.php?id=<?php echo $row1['id']; ?>"><img src="../salephotos/<?php echo $row1['img1'];  ?>" class="img-responsive" width="150px" height="50px"/></a></td>
      <td class="data_box" style="padding-top:40px;"><span><?php echo $row1['nearst_station'];  ?></span></td>
          <td class="data_box" style="padding-top:40px;"><span><?php echo $row1['property_type'];  ?></span></td>
          <td class="data_box" style="padding-top:40px;"><span><?php echo $row1['location'];  ?></span></td>
          <td class="data_box" style="padding-top:40px;"><span><?php echo $row1['floor_type'];  ?></span></td>
          <td class="data_box" style="padding-top:40px;"><span><?php echo (!empty($row1['building_area']) ? $row1['building_area']."㎡" : '');  ?></span></td>
<!--          <td class="data_box" style="padding-top:40px;"><span><?php echo $row1['building_structure'];  ?></span></td>-->
                 <td class="data_box" style="padding-top:40px;"><span><?php echo $row1['built_years'];  ?></span></td>
          <td class="data_box" style="padding-top:40px;"><span><?php echo number_format($row1['price']);  ?></span></td>
    </tr>
<?php 
                   }

         
        
        
              mysqli_free_result($result);

    }
    
//$conn->close();
  ?>
   
  </tbody>
</table> 



    
  
  </div></div>
     
 </div>
<?PHP
}
?>




<?php

if($id == 2){

  if($name1 == ""){
    $sql = "SELECT * FROM sale where property_type='".$name."' and sold_out = 1  ORDER BY price DESC"; 
    
  }else{
    $sql = "SELECT * FROM sale where property_type='".$name."' or property_type= '".$name1."' and sold_out = 1  ORDER BY price DESC";
  }

  $result = $conn->query($sql);

?>
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
<!--          <th class="cate_box"><span>築年月</span></th>-->
           <th class="cate_box"><span>築年月</span></th>
          <th class="cate_box"><span>価格(税込）</span></th>
    </tr>
  </thead>
  <tbody style="text-align: center; ">
      
          

     
           <?php
                    $k= 0; 
  if ($result->num_rows > 0) {    
    while($row1 = $result->fetch_assoc()) {
        
        $k++
  ?>
          <tr style="color: #CC0000;" >
          <td scope="row"><a href="mansion_detail.php?id=<?php echo $row1['id']; ?>"><img src="../salephotos/<?php echo $row1['img1'];  ?>" class="img-responsive" width="150px" height="50px"/></a></td>
      <td class="data_box" style="padding-top:40px;"><span><?php echo $row1['nearst_station'];  ?></span></td>
          <td class="data_box" style="padding-top:40px;"><span><?php echo $row1['property_type'];  ?></span></td>
          <td class="data_box" style="padding-top:40px;"><span><?php echo $row1['location'];  ?></span></td>
          <td class="data_box" style="padding-top:40px;"><span><?php echo $row1['floor_type'];  ?></span></td>
          <td class="data_box" style="padding-top:40px;"><span><?php echo (!empty($row1['building_area']) ? $row1['building_area']."㎡" : '');  ?></span></td>
<!--          <td class="data_box" style="padding-top:40px;"><span><?php echo $row1['building_structure'];  ?></span></td>-->
                 <td class="data_box" style="padding-top:40px;"><span><?php echo $row1['built_years'];  ?></span></td>
          <td class="data_box" style="padding-top:40px;"><span><?php echo number_format($row1['price']);  ?> 万円</span></td>
    </tr>
<?php 
                   }

         
        
        
              mysqli_free_result($result);

    }
    
//$conn->close();
  ?>
   
  </tbody>
</table> 



    
  
  </div></div>
     
 </div>
<?PHP
}
?>


<?php

if($id == 3){

 if($name1 == ""){
  $sql = "SELECT * FROM sale where property_type='".$name."' and sold_out = 1 ORDER BY built_years DESC"; 


}else{
  $sql = "SELECT * FROM sale where property_type='".$name."' or property_type= '".$name1."' and sold_out = 1 ORDER BY built_years DESC";
}
$result = $conn->query($sql);


?>
       <div class="container-edit" >
 <div class="panel panel-default" >
  <div class="panel-body">     
<!-- hide table only use mobile screen-->
     
<table class="table table-bordered table-responsive main_box" style="text-align: center;">
  <thead>
      
           <thead>
        <tr style="background: #BE2E62; color: #fff;">
       <th class="cate_box"><span>写真</span></th>
          <th class="cate_box"><span>最寄り駅</span></th>
          <th class="cate_box"><span>物件タイプ</span></th>
          <th class="cate_box"><span>所在地</span></th>
          <th class="cate_box"><span>間取り・面積</span></th>
          <th class="cate_box"><span>土地面積 </br> m <sup> 2</sup></span></th>
<!--          <th class="cate_box"><span>築年月</span></th>-->
           <th class="cate_box"><span>築年月</span></th>
          <th class="cate_box"><span>価格(税込）</span></th>
    </tr>
  </thead>
  <tbody style="text-align: center; ">
      
          

     
           <?php
                    $k= 0; 
  if ($result->num_rows > 0) {    
    while($row1 = $result->fetch_assoc()) {
        
        $k++
  ?>
          <tr style="color: #CC0000;" >
          <td scope="row"><a href="mansion_detail.php?id=<?php echo $row1['id']; ?>"><img src="../salephotos/<?php echo $row1['img1'];  ?>" class="img-responsive" width="150px" height="50px"/></a></td>
      <td class="data_box" style="padding-top:40px;"><span><?php echo $row1['nearst_station'];  ?></span></td>
          <td class="data_box" style="padding-top:40px;"><span><?php echo $row1['property_type'];  ?></span></td>
          <td class="data_box" style="padding-top:40px;"><span><?php echo $row1['location'];  ?></span></td>
          <td class="data_box" style="padding-top:40px;"><span><?php echo $row1['floor_type'];  ?></span></td>
          <td class="data_box" style="padding-top:40px;"><span><?php echo (!empty($row1['building_area']) ? $row1['building_area']."㎡" : '');  ?></span></td>
<!--          <td class="data_box" style="padding-top:40px;"><span><?php echo $row1['building_structure'];  ?></span></td>-->
                 <td class="data_box" style="padding-top:40px;"><span><?php echo $row1['built_years'];  ?></span></td>
          <td class="data_box" style="padding-top:40px;"><span><?php echo number_format($row1['price']);  ?> 万円</span></td>
    </tr>
<?php 
                   }

         
        
        
              mysqli_free_result($result);

    }
    
//$conn->close();
  ?>
   
  </tbody>
</table> 



    
  
  </div></div>
     
 </div>
<?PHP
}
?>

<?php

if($id == 4){

  if($name1 == ""){
    $sql = "SELECT * FROM sale where property_type='".$name."' and sold_out = 1 ORDER BY built_years ASC"; 
    
  }else{
    $sql = "SELECT * FROM sale where property_type='".$name."' or property_type= '".$name1."' and sold_out = 1 ORDER BY built_years ASC";
  }
  $result = $conn->query($sql);



?>
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
<!--          <th class="cate_box"><span>築年月</span></th>-->
           <th class="cate_box"><span>築年月</span></th>
          <th class="cate_box"><span>価格(税込）</span></th>
    </tr>
  </thead>
  <tbody style="text-align: center; ">
      
          

     
           <?php
                    $k= 0; 
  if ($result->num_rows > 0) {    
    while($row1 = $result->fetch_assoc()) {
        
        $k++
  ?>
          <tr style="color: #CC0000;" >
          <td scope="row"><a href="mansion_detail.php?id=<?php echo $row1['id']; ?>"><img src="../salephotos/<?php echo $row1['img1'];  ?>" class="img-responsive" width="150px" height="50px"/></a></td>
      <td class="data_box" style="padding-top:40px;"><span><?php echo $row1['nearst_station'];  ?></span></td>
          <td class="data_box" style="padding-top:40px;"><span><?php echo $row1['property_type'];  ?></span></td>
          <td class="data_box" style="padding-top:40px;"><span><?php echo $row1['location'];  ?></span></td>
          <td class="data_box" style="padding-top:40px;"><span><?php echo $row1['floor_type'];  ?></span></td>
          <td class="data_box" style="padding-top:40px;"><span><?php echo (!empty($row1['building_area']) ? $row1['building_area']."㎡" : '');  ?></span></td>
<!--          <td class="data_box" style="padding-top:40px;"><span><?php echo $row1['building_structure'];  ?></span></td>-->
                 <td class="data_box" style="padding-top:40px;"><span><?php echo $row1['built_years'];  ?></span></td>
          <td class="data_box" style="padding-top:40px;"><span><?php echo number_format($row1['price']);  ?> 万円</span></td>
    </tr>
<?php 
                   }

         
        
        
              mysqli_free_result($result);

    }
    
//$conn->close();
  ?>
   
  </tbody>
</table> 



    
  
  </div></div>
     
 </div>
<?PHP
}
?>