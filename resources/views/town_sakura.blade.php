@extends('layouts.main')

@section('content')
<style type="text/css">
    /*   table
    {
        table-layout: fixed;
        width: 540px;
    }
    td{
      padding-bottom: 5px;
    }*/
    
    .bg{
      padding: 15px;
    }
    
            .box{
              box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }
            
    </style>
    
    </head>
    <body>
    
    
          
    <div class="container-edit" style="margin-top: 250px; margin-bottom: 50px;">
    <div class="panel panel-default" style="font: 20px Helvetica, sans-serif; color: #333;">
      <div class="panel-body">
          <div class="col-sm-1"></div>
          <div class="col-sm-10" align="center">
    
              <table border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="920" valign="top" align="center"><B>佐倉って・・・</B><BR>
                  <BR>
                  <TABLE width="880" bgcolor="#ffffff" border="0" cellpadding="5" style="font-size:9pt;margin-bottom:30px;">
                    <TR> 
                    <TD align="left" bgcolor="#d2ffff" style="padding-bottom: 8px; color: black;"><FONT size="-2"> <div class="bg"> <B><FONT size="-1">◆佐倉市立美術館</FONT><BR>
                      </B></FONT><FONT size="-2"><FONT color="#000000" size="2" font>大正時代の建築物を利用しているノスタルジックな佐倉市立美術館。旧城下町の中心部・新町には、地下2階地上5階建ての市立美術館が。エントランスホール部分には、千葉県指定文化財「旧川崎銀行佐倉出張所」が使用されています。</FONT></FONT><FONT size="-1"><BR>
                      </FONT><FONT color="#525862" size="2" font><B>休館日・月（祝日の際は翌日）・年末年始</B></FONT><FONT size="-1"><BR>
                      </FONT><BR>
                      </div>
                    </TD>
                    <TD align="center" style="padding-bottom: 8px;"><img src="images/town_sakura_01.jpg" border="0" width="227" height="189" class="box"></TD>
                    </TR>
                    <TR> 
                    <TD align="left" bgcolor="#d2ffff" style="padding-bottom: 15px; color: black;"> <div class="bg"> <FONT size="-1"><B>◆佐倉城址公園<BR>
                      </B></FONT><FONT size="3"><FONT color="#000000" size="2" font>本丸跡のある佐倉城址は、土塁、空堀など城の面影を残した美しい公園になっています。この公園では、春は桜、秋は紅葉など、四季折々の自然を楽しむことができるほか、園内には茶室もあり、のんびりとした風景の中でお茶を満喫することができます。</FONT></FONT>
                      </div>
                    </TD>
                    <TD align="center" style="padding-bottom: 15px; padding-left: 24px;"> <IMG src="images/town_sakura_02.jpg" border="0" width="250" height="156" class="box"></TD>
                    </TR>
                    <TR> 
                    <TD align="left" bgcolor="#d2ffff" style="padding-bottom: 20px; color: black;"> <div class="bg"> <FONT size="-1"><B>◆国立歴史民俗博物館<BR>
                      </B></FONT><FONT size="-2"><FONT color="#000000" size="2" font>歴史学、考古学、民俗学の資料を展示し、東洋一の規模を誇る国立歴史民俗博物館。佐倉城址の北側にある、日本の歴史と文化について総合的に研究・展示する、我が国最大の国立の歴史民俗博物館です。広大な敷地には、原始から近代に至るまでの資料がテーマ別にたくさん展示されています。</FONT></FONT><FONT size="-2"><BR>
                      <FONT color="#525862" size="2" font><B>休館日・月（祝日の際は翌日）・年末年始</B></FONT> 
                      </FONT> </div> </TD>
                    <TD align="center" style="padding-bottom: 20px; padding-left: 24px;"><FONT size="-1"><IMG src="images/town_sakura_03.jpg" border="0" width="250" height="148" class="box"></FONT></TD>
                    </TR>
                    <TR> 
                    <TD bgcolor="#d2ffff" style="padding-bottom: 10px; color: black;"> <div class="bg"> <FONT size="-1"><B>◆佐倉武家屋敷</B></FONT><BR>
                      <FONT color="#000000" size="2" font>宮小路町に復元された武家屋敷からは、当時の武士の生活を偲ぶことが…。佐倉城のあったこの町には、江戸時代には多くの武家屋敷が立ち並んでいたと言われます。現在は2棟の武家屋敷が一般公開され、当時の武士の暮らしを垣間見ることができます。</FONT><FONT size="-1"><BR>
                      </FONT><FONT color="#525862" size="2" font><B><FONT color="#525862" size="2" font>休館日・月（祝日の際は翌日）・年末年始</FONT></B></FONT><FONT size="-1"><BR>
                      </FONT> </div> </TD>
                    <TD style="padding-bottom: 10px; padding-left: 24px;"><IMG src="images/town_sakura_04.jpg" border="0" width="250" height="159" class="box"></TD>
                    </TR>
                    <TR> 
                    <TD bgcolor="#d2ffff" style="padding-bottom: 10px; color: black;"> <div class="bg"> <FONT color="#000000" size="2" font><FONT size="-1"><B>◆佐倉ふるさと広場</B></FONT><BR>佐倉ふるさと広場には、日蘭親善のシンボルとして建設されたオランダ風車が…。佐倉市制40周年を記念して、平成6年春、佐倉ふるさと広場に風を利用して回転する本格的オランダ風車が誕生。　この風車は、リーフデ（友愛）と名づけられ、日本初の水くみ型風車としても注目されています。</FONT><FONT size="-1"><BR>
                      </FONT> </div> </TD>
                    <TD style="padding-bottom: 10px; padding-left: 24px;"><IMG src="images/town_sakura_05.jpg" border="0" width="250" height="190" class="box"></TD>
                    </TR>
                    <TR> 
                    <TD bgcolor="#d2ffff" style="padding-bottom: 10px; color: black;"> <div class="bg"> <FONT size="-1"><B>◆印旛沼<BR>
                      </B></FONT><FONT color="#000000" size="2" font>コイ、フナなど、たくさんの魚が生息し、釣りが盛んな印旛沼。岸辺にはカワセミやカモなどの水鳥が姿を現し、釣り客の目を楽しませてくれます。印旛沼は、江戸中期からたびたび治水工事が行われ、昭和二十一年から二十年あまりかけて、ついに完成しました。湖畔のサイクリングロードは、自転車に乗りながら風景を満喫できる絶好のスポットとして人気です。また、沼を周遊する屋形船に乗って、いろいろな角度から佐倉をもう一度眺めてみるのもいいでしょう。</FONT>
                    </div>
                    </TD>
                    <TD align="center" style="padding-bottom: 10px; padding-left: 24px;"><IMG src="images/town_sakura_06.jpg" border="0" width="250" height="207" class="box"></TD>
                    </TR>
                  </TABLE>
                  </td>
                </tr><!-- 
                <tr>
      <td align="CENTER" valign="middle" width="700" bgcolor="#FFFFFF" height="30" class="font8pt"> 
         <a href="all_rentapartment.php" class="font8pt"><font color="#666666">賃貸物件</font></a> 
        | <a href="all_saleapartment.php" class="font8pt"><font color="#666666"> 売買物件</font></a> 
        | <a href="system.php" class="font8pt"><font color="#666666"> 賃貸管理システム</font></a> 
        | <a href="link.php" class="font8pt"><font color="#666666">お役立ち情報</font></a> 
        | <a href="access.php" class="font8pt"><font color="#666666">アクセス</font></a> 
        | <a href="company.php" class="font8pt"><font color="#666666">会社案内</font></a></td>
                </tr> -->
                </table>
              </td>
              </tr>
            </table>
          </div>
      </div>
    </div>
    </div>
@endsection