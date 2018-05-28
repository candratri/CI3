<?php if (!$this->session->userdata('logged_in')) {
  redirect('User/login');
} ?>
<div class="container">
      <?php echo validation_errors(); ?>
      <?php echo form_open('view_category/tambah', array('enctype'=>'multipart/form-data'));?>

      <table>
        <tr>
          <td><font color="black">Nama Category</font></td>
          <td>:</td>
          <td><input type="text" name="input_name" value="<?php echo set_value('input_name'); ?>"></td>
        </tr>
        <tr>
          <td><font color="black">Description Category</font></td>
          <td>:</td>
          <td><input type="text" name="input_description" value="<?php echo set_value('input_description'); ?>" ></td>
        </tr>
        <tr>
          <td><font color="black">Tanggal Category</font> </td>
          <td>:</td>
          <td><input type="date" name="input_tanggal" value="<?php echo set_value('input_tanggal'); ?>"></td>
        </tr>
        <tr>
          <td colspan="3"><input type="submit" name="simpan" value="Tambah"></td>
        </tr>
      </table>
    </div>