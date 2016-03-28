<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    // estilos universales
  $this->load->view("parts/estilos.php");
  ?>


</head>
<body>
<input type="text" value="HOLAAA">  
<input type="text" value=<?php echo $VerV ->anio ?>>



<div align='center'>  
  <table border='1' cellpadding='0' cellspacing='0' width='600' bgcolor='#F6F6F6' bordercolor='#FFFFFF'>  
    <tr>  
      <td width='150' style='font-weight: bold'>ID</td>  
      <td width='150' style='font-weight: bold'>motor</td>  
      <td width='150' style='font-weight: bold'>chasis</td>  
      <td width='150' style='font-weight: bold'></td>  
</tr>

   </table>  
</div> 


	<?php
$this->load->view("parts/scripts.php");
?>
</body>
</html>