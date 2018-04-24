<div class="container">
      <?php
        echo form_open('view_blog/tambah', array('enctype'=>'multipart/form-data')); 
       ?>
      <table>
        <tr>
          <td>Judul</td>
          <td>:</td>
          <td><input type="text" name="input_judul" value="<?php echo set_value('input_judul'); ?>"></td>
        </tr>
        <tr>
          <td>Content</td>
          <td>:</td>
          <td><input type="text" name="input_content" value=""></td>
        </tr>
        <tr>
          <td>Tanggal </td>
          <td>:</td>
          <td><input type="text" name="input_tanggal" value=""></td>
        </tr>
        <tr>
          <td>Gambar</td>
          <td>:</td>
          <td><input type="file" name="input_gambar"></td>
        </tr>
        <tr>
          <td>Jenis</td>
          <td>:</td>
          <td><input type="text" name="input_jenis" value="<?php echo set_value('input_jenis'); ?>" ></td>
        </tr>
        <tr>
          <td>Pengarang</td>
          <td>:</td>
          <td><input type="text" name="input_pengarang" value="<?php echo set_value('input_pengarang'); ?>" ></td>
        </tr>
        <tr>
          <td>Email</td>
          <td>:</td>
          <td><input type="text" name="input_email" value="<?php echo set_value('input_eamil'); ?>" ></td>
        </tr>
        <tr>
          <td colspan="3"><input type="submit" name="simpan" value="simpan"></td>
        </tr>
      </table>
    </div>