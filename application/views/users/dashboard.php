<div class="container">
   <div class="py-5 text-center">
       <h2>Selamat datang <?php echo $user->nama ?> <span class="badge badge-secondary"><?php echo $user->nama_level ?></span></h2>

       
       </h2><br><br>
   		<div class="row">
   			<div class="col-sm"></div>
   			<div class="col-sm">
   				<a href="<?php echo site_url()?>view_blog/tambah/">
	   				<img src="../assets/images/1icon.jpg" class="img-fluid"> <br><br>
		   			<h4>Create Blog</h4>
	   			</a>
   			</div>
   			<div class="col-sm">
   				<a href="<?php echo base_url().'view_blog'?>">
	   				<img src="../assets/images/3icon.png" class="img-fluid"> <br><br>
		   			<h4>List Blog</h4>
	   			</a>
   			</div>
   			<div class="col-sm">
   				<a href="<?php echo site_url()?>view_category/tambah/">
	   				<img src="../assets/images/2icon.jpg" class="img-fluid"> <br><br>
		   			<h4>Create Category</h4>
	   			</a>
   			</div>
   			<div class="col-sm">
   				<a href="<?php echo base_url().'view_category'?>">
	   				<img src="../assets/images/4icon.jpg" class="img-fluid"> <br><br>
		   			<h4>List Category</h4>
	   			</a>
   			</div>
   			<div class="col-sm">
   				<a href="<?php echo base_url().'User'?>">
	   				<img src="../assets/images/5icon.jpg" class="img-fluid"> <br><br>
		   			<h4>Management User</h4>
	   			</a>
   			</div>
	   		<div class="col-sm"></div>
	    </div>
   </div>
   </div>
</div