<?php 
            foreach ($result as $data_bulan) {
?>
             <option value="<?php echo $data_bulan->id ?>"><?php echo $data_bulan->nama_bulan ?></option>
<?php
            }
 ?>