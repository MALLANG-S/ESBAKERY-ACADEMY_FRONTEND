<?
include_once("./_common.php"); 
include_once("$g4[path]/lib/latest.lib.php");
include_once("$g4[path]/lib/outlogin.lib.php"); 

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script language="javascript" src="./js/jsCommon.js"></script>
<LINK 
href="./css/dong.css" type=text/css rel=stylesheet>


<title>은성제과제빵커피학원</title>

</head>

<body background="image/main_bg.jpg" bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table border="0" width="100%" height="100%" cellspacing="0" cellpadding="0">
  <tr>
    <td width="100%" valign="top" align="center" height="462"><table width="1100" height="607" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="1100" height="93" valign="top"><table width="1100" height="93" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="103" rowspan="2" valign="top"><table width="207" height="93" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td valign="top"><div id="logo"> 
                    <script language="javascript"> SetInnerHTML(document.all.logo, 
        MakeFlashString('./swf/logo.swf','emb1','207','93','transparent', 
        '<PARAM  name="logo" value="false">')); </script>
                </div></td>
              </tr>
            </table></td>
            
            <td width="52" rowspan="2" valign="middle"><img src="image/kmb_logo.jpg"></td>
            <td width="10" rowspan="2" valign="top">&nbsp;</td>
            <td width="793" valign="top"><table width="730" height="32" border="0" cellpadding="0" cellspacing="0">
              <tr><td width="19">&nbsp;</td>
                <td width="217"><a href="./info/movie.php" target="_parent"><img src="image/m_movie.png" ></a></td>
                <td width="16">&nbsp;</td>
                <td width="153" align="left" valign="middle"><a href="./bbs/board.php?bo_table=service" target="_parent"><img src="image/service_ico.png" ></td>
                <td width="364" height="32"><table border="0" align="right" cellpadding="0" cellspacing="0">
                  <tr>
                    <!-- ó         ư -->
                    <td width="30"><a href="<?=$g4['path']?>/"><img src="image/arrow01.jpg" width="3" height="5" border="0"> 홈</a></td>
                    <? if (!$member['mb_id']) { ?>
                    <!--  α         -->
                    <td width="50"><a href="<?=$g4['path']?>/"><img src="image/arrow01.jpg" width="3" height="5" border="0"> </a><a href="<?=$g4['bbs_path']?>/login.php?url=<?=$urlencode?>">로그인</a></td>
                    <td width="60"><a href="<?=$g4['path']?>/"><img src="image/arrow01.jpg" width="3" height="5" border="0"> </a><a href="<?=$g4['bbs_path']?>/register.php">회원가입
                </a></td>
                    <? } else { ?>
                    <!--  α         -->
                    <td width="60"><a href="<?=$g4['path']?>/"><img src="image/arrow01.jpg" width="3" height="5" border="0"> </a><a href="<?=$g4['bbs_path']?>/logout.php"> α׾ƿ </a></td>
                    <td width="60"><a href="<?=$g4['path']?>/"><img src="image/arrow01.jpg" width="3" height="5" border="0"> </a><a href="<?=$g4['bbs_path']?>/member_confirm.php?url=register_form.php">        </a></td>
                    <? } ?>
                    <!--  ֱٰԽù    ư -->
                   
                  </tr>
                </table></td>
                
              </tr>
            </table></td>
          </tr>
          <tr>
            <td valign="top"><table width="793" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td height="61" valign="top"><div id="menu"> 
                    <script language="javascript"> SetInnerHTML(document.all.menu, 
        MakeFlashString('./swf/mainmenu.swf','emb1','793','61','transparent', 
        '<PARAM  name="menu" value="false">')); </script>
                </div></td>
              </tr>
            </table></td>
          </tr>
        </table></td>
        </tr>
      <tr>
        <td height="393" valign="top"  align="center"><div id="mcenter"> 
                    <script language="javascript"> SetInnerHTML(document.all.mcenter, 
        MakeFlashString('./swf/mcenter.swf','emb1','1000','393','transparent', 
        '<PARAM  name="mcenter" value="false">')); </script>
                </div></td>
        </tr>
      <tr>
        <td height="157" valign="top"><table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="350" height="157" valign="top"><table width="320" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td height="16" valign="top"></td>
                <td width="35" valign="bottom"></td>
              </tr>
              <tr>
                <td width="277" height="10" valign="top"><img src="image/notice_title.jpg" width="57" height="21" /></td>
                <td width="35" valign="bottom"><a href="/bbs/board.php?bo_table=notice" target="_parent"><img src="image/more.gif" width="35" height="11" border="0" /></a></td>
              </tr>
              
              <tr>
                <td height="33" colspan="2" valign="top"><table width="310" height="44" border="0" align="left" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="318" height="10" valign="top"></td>
                  </tr>
                  <tr>
                    <td valign="top"><?=latest('basic', 'notice', 3, 43);?></td>
                  </tr>
                </table></td>
              </tr>
            </table></td>
            <td width="1" valign="top" bgcolor="#e4e4e4"></td>
            <td width="310" align="center" valign="top"><table width="280" border="0" cellspacing="0" cellpadding="0">
               <tr>
                <td height="16" valign="top"></td>
                <td width="35" valign="bottom"></td>
              </tr>
              <tr>
                <td width="277" height="20" valign="top"><img src="image/qna_title.jpg" width="76" height="21" /></td>
                <td width="61" valign="bottom"><a href="/bbs/board.php?bo_table=qna" target="_parent"><img src="image/more.gif" width="35" height="11" border="0" /></a></td>
              </tr>
              <tr>
                <td height="33" colspan="2" valign="top"><table width="270" height="44" border="0" align="left" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="320" height="10" valign="top"></td>
                  </tr>
                  <tr>
                    <td valign="top"><?=latest('basic', 'qna', 3, 40);?></td>
                  </tr>
                </table></td>
              </tr>
            </table></td>
            <td width="1" valign="top" bgcolor="#e4e4e4"></td>
            <td width="340" valign="top"><table width="300" height="54" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td height="16" valign="top"></td>
                <td width="35" valign="bottom"></td>
              </tr>
              <tr>
                <td width="326" height="21" valign="top"><img src="image/gallery_title.gif" width="61" height="21"></td>
                <td width="53" valign="bottom"><a href="/bbs/board.php?bo_table=gallery" target="_parent"><img src="image/more.gif" width="35" height="11" border="0"></a></td>
              </tr>
              <tr>
                <td height="33" colspan="2" valign="top"><table width="290" height="44" border="0" align="left" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="354" height="10" valign="top"></td>
                  </tr>
                  <tr>
                    <td valign="top"><?=latest('basic', 'gallery', 3, 38); ?></td>
                  </tr>
                </table></td>
              </tr>
            </table></td>
          </tr>
        </table></td>
        </tr>
    </table>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td align="center"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td height="1" bgcolor="#e4e4e4"></td>
            </tr>
            <tr>
              <td height="111" align="center" valign="top" bgcolor="#f4f4f3"><table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="669" height="75"><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="24%" align="center"><a href="http://www.artisan.or.kr" target="_blank"><img src="image/banner05.jpg" width="156" height="50"></a></td>
                      <td width="26%" align="center"><a href="http://www.0zip.co.kr/" target="_blank"><img src="image/banner04.jpg" width="156" height="50"></a></td>
                      <td width="26%" align="center"><a href="http://www.hrdkorea.or.kr/" target="_blank"><img src="image/banner02.jpg" width="156" height="50"></a></td>
                      <td width="24%" align="center"><a href="http://www.moel.go.kr/" target="_blank"><img src="image/banner03.jpg" width="156" height="50"></a></td>
                    </tr>
                  </table></td>
                  <td width="331" rowspan="2" align="right" valign="middle"><div id="quick"> 
                    <script language="javascript"> SetInnerHTML(document.all.quick, 
        MakeFlashString('./swf/quick.swf','emb1','340','111','transparent', 
        '<PARAM  name="quick" value="false">')); </script>
                </div></td>
                </tr>
                <tr>
                  <td height="63" valign="top"><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="24%" align="center"><a href="http://www.dongju.ac.kr/default/sub/subLocation.dj?categorySeq=1000007&menuSeq=100000198&confSeq=&boardSeq=-1" target="_blank"><img src="image/banner01.jpg" width="156" height="50"></a></td>
                      <td width="26%" align="center">&nbsp;</td>
                      <td width="26%" align="center">&nbsp;</td>
                      <td width="24%" align="center">&nbsp;</td>
                    </tr>
                  </table></td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td height="64" align="center" valign="top" bgcolor="#1d1d1d"><table width="1000" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td align="center" valign="top"><img src="./image/m_copyright.jpg" width="1000" height="64" usemap="#Map" border="0"></td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td bgcolor="#FFFFFF">&nbsp;</td>
            </tr>
          </table></td>
        </tr>
    </table></td>
  </tr>
</table>




<map name="Map">
  <area shape="rect" coords="769,6,966,58" href="http://blog.naver.com/rlagksl6229" target="_blank">
</map>
</body>

</html>

<?php
/**
 *  ˾         α׷ 
**/

//  ˾                   -      //
$nNow       = time();
$szSql      = " 
            SELECT nIdx, nStartDate, nEndDate, nWidth, nHeight, nLeft, nRight , nOptions
            FROM ZOTTA_POPUP 
            WHERE szView='Y' AND ($nNow BETWEEN nStartDate AND nEndDate) 
            ORDER BY nIdx asc
            ";

           
$input = mysql_query($szSql);

$dataArray = array ();
for ($i = 0; $i < mysql_num_fields($input); $i ++) {
  array_push($dataArray, mysql_field_name($input, $i));
}
$fieldArray =$dataArray;

$returnArray = array ();
$onerowArray = array ();

while ($row = mysql_fetch_row($input)) {
  for ($j = 0; $j < sizeof($fieldArray); $j ++) {
    //$onerowArray = array_merge($onerowArray, array( $fieldArray[$j] => $row[$fieldArray[$j]] ));
    $onerowArray = array_merge($onerowArray, array ($fieldArray[$j] => $row[$j]));
  }
  array_push($returnArray, $onerowArray);
}
$onerowArray = '';
$arrPOP = $returnArray;
//print_r($arrPOP);
//  ˾                   -    //
      

#   Ͽ      ,   â     
for ( $i=0; $i < count($arrPOP); $i++){
  if ($arrPOP[$i]["nIdx"])
  {
    $cookieName = "zotta_popup_idx".$arrPOP[$i]["nIdx"];
      if ($_COOKIE[$cookieName] != "done")
      {
          $szWidth    = $arrPOP[$i][nWidth];
          $szHeight   = $arrPOP[$i][nHeight] + 27;
          $szLeft     = $arrPOP[$i][nLeft];
          $szRight    = $arrPOP[$i][nRight];
          $options    = $arrPOP[$i][nOptions];

          $scrollbar = ($options == "Y") ? "scrollbars=yes" :  "scrollbars=no";
          $optionsS  = $scrollbar.",width=".$szWidth.",height=".$szHeight.",left=".$szLeft.",top=".$szRight.", status=no";

          echo "\r\n<script language='javascript'>\r\n\t window.open( '".$g4[path]."/autoPOPUP.php?idx=".$arrPOP[$i]["nIdx"]."', 'popup_nIdx".$arrPOP[$i]["nIdx"]."', '".$optionsS."'); \r\n</script>";
      }
  }
}
?>