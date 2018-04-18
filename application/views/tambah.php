<div class="container">
      <?php echo validation_errors(); ?>
      <?php echo form_open('view_blog/tambah');?>

      <table>
        <tr>
          <td><font color="black">Judul</font></td>
          <td>:</td>
          <td><input type="text" name="input_judul" value="<?php echo set_value('input_judul'); ?>"></td>
        </tr>
        <tr>
          <td><font color="black">Content</font></td>
          <td>:</td>
          <td><input type="text" name="input_content" value="<?php echo set_value('input_content'); ?>" ></td>
        </tr>
        <tr>
          <td><font color="black">Tanggal</font> </td>
          <td>:</td>
          <td><input type="date" name="input_tanggal" value="<?php echo set_value('input_tanggal'); ?>"></td>
        </tr>
        <tr>
          <td><font color="black">Gambar</font></td>
          <td>:</td>
          <td><input type="file" name="input_gambar" value="<?php echo set_value('input_gambar'); ?>"></td>
        </tr>
        <tr>
          <td><font color="black">Jenis</font></td>
          <td>:</td>
          <td><input type="text" name="input_jenis" value="<?php echo set_value('input_jenis'); ?>" ></td>
        </tr>
        <tr>
          <td><font color="black">Pengarang</font></td>
          <td>:</td>
          <td><input type="text" name="input_pengarang" value="<?php echo set_value('input_pengarang'); ?>" ></td>
        </tr>
        <tr>
          <td><font color="black">Email</font></td>
          <td>:</td>
          <td><input type="text" name="input_email" value="<?php echo set_value('input_eamil'); ?>" ></td>
        </tr>
        <tr>
          <td colspan="3"><input type="submit" name="simpan" value="Tambah"></td>
        </tr>
      </table>
    </div>