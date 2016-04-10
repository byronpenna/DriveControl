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
<input type="text" value=<?php echo $VerV[0] ->id_rin_fk ?>>

<select class="combobox" name="comboPrueba">
            <?php 
            foreach ($VerV as $key =>$id_rin_fk ) {
             ?>
             <option value=<?php echo $id_rin_fk->num_rin ?>>
              <?php echo $num_rin ->num_rin ?> 
              <?php } ?>
            </option>
          </select> 

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