
    <body oncontextmenu="return false" id="body">
   
        <div style="margin-top: 200px;"></div>



        <div class="container-edit">

            <br>
            <ol class="breadcrumb"style="background: #fff;">
                <li><a href="http://www.daiichihome.com/">ホーム</a></li>
                <li class="active">すべての賃貸物件</li>
            </ol>
            <br> 
            
           
            
            <h3>賃貸マンション（すべての賃貸物件）</h3>    </div>


        <style>
            @media all and (max-width: 1600px) and (min-width: 599px) {
                .my-content { display: none;
                              overflow:hidden !important;
                              visibility: hidden;
                             } 



            }  
        </style>
        <style>
            @media all and (max-width: 599px) and (min-width: 200px) {
                .my-content1 { display: none;
                               overflow:hidden !important;
                               visibility: hidden;
                               

                } 
            }
         

            @media only screen
            and (min-device-width : 320px)
            and (max-device-width : 480px) {
                .my-content1 { display: none;
                               overflow:hidden !important;
                               visibility: hidden;

                } 
                .my-content { display: block;
                              overflow:visible !important;
                              visibility: visible;
/*                              margin-bottom: 50px;*/

                }


            }

        </style>
        <!-- mobile view --> 
        <div class="my-content">

               <div class="container-edit">
                    <table>
                        <tr><td >
                            <div class="row">
                                <div class="col-xs-12 col-md-3 col-sm-6" style="margin-bottom:15px;">  
                                    <a href="details2.php?id=<?php echo $row1['id']; ?>" class="thumbnail" style="text-decoration: none;"/>
                                        <img src="photos/' . $row1['img1'] . '">
                                        <div class="caption">
                                            <h5><span style="color:#FF0000; font-size: 15px;">' . $row1['flag_display'] . '</span></h5>
                                            <h5><span style="color:#eea236;  font-size: 15px;">' . $row1['property_type'] . '</span></h5>
                                            <h5><span style=" font-size: 15px;">' . $row1['property_name'] . ' /</span></h5>
                                            <h5 style="font-size: 15px;"><span style=" font-size: 15px;">' . $row1['room_no'] . '</span></h5>
                                            <h5  style="font-size: 15px;"><span style="color:#337AB7; font-size: 15px;"> [間取り]</span></h5>
                                            <h5  style="font-size: 15px;">'. ' ' . $row1['floor_type'] . ' / ' . $row1['occupied_area'] . '</h5>
                                            <h5 style="font-size: 15px;"><span style="color:#337AB7; font-size: 15px;">[賃料]</span></h5>
                                            <h5 style="font-size: 15px;">'. ' <span style="color:#FF0000; font-size: 15px;"> ' . number_format($row1['price']) . '</span></h5>
                                            <h5 style="font-size: 15px;"><span style="color:#337AB7; font-size: 15px;">[住所]</span></h5>
                                            <h5 style="font-size: 15px;"> ' . $row1['location'] . '</h5>
                                            <h5 style="font-size: 15px;"><span style="color:#337AB7; font-size: 15px;">[最寄り駅]</span></h5>
                                            <h5 style="font-size: 15px;">' . $row1['nearst_station'] .</h5>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </td></tr>
                    </table>
                </div>
        </div>


        <div class="my-content1">
                <div class="container-edit">
                <table width="100%"><tr>
                <td >
                <div class="row">
                    <div class="col-xs-12 col-md-3 col-sm-6" style="margin-bottom:15px;">
                    <a href="details2.php?id=<?php echo $row['id']; ?>" class="thumbnail" style="text-decoration: none;"/>
                    <img src="photos/' . $row['img1'] . '">
                    <div class="caption">
                    <h5><span style="color:#FF0000; font-size: 15px;">' . $row['flag_display'] . '</span>
                    <h5><span style="color:#eea236; margin-left:10px; font-size: 15px;">' . $row['property_type'] . '</span></h5>
                    <h5><span style=" font-size: 15px;">' . $row['property_name'] . ' / ' . $row['room_no'] . '</span></h5>
                    <h5 style="font-size: 15px;"><span style="color:#337AB7; font-size: 15px;">[間取り]</span>&nbsp;  ' . $row['floor_type'] . ' / ' . $row['occupied_area'] . '</h5>
                    <h5 style="font-size: 15px;"><span style="color:#337AB7; font-size: 15px;">[賃料]</span> &nbsp;<span style="color:#FF0000; font-size: 15px;"> ' . number_format($row['price']) . '</span></h5>
                    <h5 style="font-size: 15px;"><span style="color:#337AB7; font-size: 15px;">[住所]</span> &nbsp;   ' . $row['location'] . '</h5>
                    <h5 style="font-size: 15px;"><span style="color:#337AB7; font-size: 15px;">[最寄り駅] </span>&nbsp; ' . $row['nearst_station'] . '</h5>
                    </div>
                    </a>
                    </div>
                </div>
                </td>
                </tr></table>
                </div>
           
        </div>   


    

