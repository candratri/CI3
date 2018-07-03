<div class="container">
   <div class="py-5 text-center">
   		<h2>Hi, <?php echo $user->nama; ?>
       <span class="badge badge-primary">
       		<?php echo $user->nama_level; ?>
       </span>
       		
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
	   		<div class="col-sm"></div>
	    </div>
   </div>
</div>