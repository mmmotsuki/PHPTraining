<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>二次配列の計算</title>
</head>
<body>
二次配列の計算<br>
<?php
   $ar[0][0]=1;
   $ar[0][1]=2;
   $ar[1][0]=4;
   $ar[1][1]=5;
   $ar[0][2]=$ar[0][0]+$ar[0][1];
   $ar[1][2]=$ar[1][0]+$ar[1][1];
   $ar[2][0]=$ar[0][0]+$ar[1][0];
   $ar[2][1]=$ar[0][1]+$ar[1][1];
   $ar[2][2]=$ar[2][0]+$ar[2][1];
   echo "<table width='200' border='1'>
      <tr>
         <th nowrap='nowrap'>&nbsp;</th>
         <th nowrap='nowrap'>".'$ar[][0]'."</th>
         <th nowrap='nowrap'>".'$ar[][1]'."</th>
         <th nowrap='nowrap'>".'$ar[][2]'."</th>
      </tr>
      <tr>
         <th nowrap='nowrap'>".'$ar[0][]'."</th>
         <td nowrap='nowrap' align='right'>".$ar[0][0]."</td>
         <td nowrap='nowrap' align='right'>".$ar[0][1]."</td>
         <td nowrap='nowrap' align='right'>".$ar[0][2]."</td>
      </tr>
      <tr>
         <th nowrap='nowrap'>".'$ar[1][]'."</th>
         <td nowrap='nowrap' align='right'>".$ar[1][0]."</td>
         <td nowrap='nowrap' align='right'>".$ar[1][1]."</td>
         <td nowrap='nowrap' align='right'>".$ar[1][2]."</td>
      </tr>
      <tr>
          <th nowrap='nowrap'>".'$ar[2][]'."</th>
          <td nowrap='nowrap' align='right'>".$ar[2][0]."</td>
          <td nowrap='nowrap' align='right'>".$ar[2][1]."</td>
          <td nowrap='nowrap' align='right'>".$ar[2][2]."</td>
      </tr>
      </table>";
?>
</body>
</html>
