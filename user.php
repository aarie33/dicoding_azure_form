<?php 
include('db.php');
include('header.php');?>
<main role="main" class="container">
	<div class="card">
		<div class="card-body">
		    <h2>User</h2>
		    <form method="post" action="user_save.php">
		    	<div class="row">
		    		<div class="col-sm-3">
				    	<input type="text" name="nama" class="form-control" required placeholder="Nama">
				    </div>
				    <div class="col-sm-3">
				    	<input type="text" name="alamat" class="form-control" required placeholder="Alamat">
				    </div>
				    <div class="col-sm-2">
				    	<input type="email" name="email" class="form-control" required placeholder="Email">
				    </div>
				    <div class="col-sm-2">
				    	<input type="telp" name="telp" class="form-control" required placeholder="Telp">
				    </div>
				    <div class="col-sm-1">
				    	<input type="submit" class="btn btn-md btn-primary" value="Simpan">
				    </div>
				</div>
		    </form>

		<?php
		try {
			$sql_select = "SELECT * FROM [dbo].[User]";
            		$stmt = $conn->query($sql_select);
            		$users = $stmt->fetchAll();
            		if(count($users) > 0) { ?>
			    <table class="table table-hover table-striped mt-4">
			    	<caption>Data user</caption>
			    	<thead>
			    		<tr>
			    			<th>No</th>
			    			<th>Nama</th>
			    			<th>Email</th>
			    			<th>Alamat</th>
			    			<th>Telp</th>
			    		</tr>
			    	</thead>
			    	<tbody>
			    		<?php 
			    		$no=1; 
			    		foreach($users as $us) { ?>
			    		<tr>
			    			<td><?php echo $no++;?></td>
			    			<td><?php echo $us['Nama'];?></td>
			    			<td><?php echo $us['Email'];?></td>
			    			<td><?php echo $us['Alamat'];?></td>
			    			<td><?php echo $us['Telp'];?></td>
			    		</tr>
			    	<?php } ?>
			    	</tbody>
			    </table>
			<?php }else {
			echo "<h3>No one is currently registered.</h3>";
		    }
	} catch(Exception $e) {
            echo "Failed: " . $e;
        }?>
		</div>
	</div>
</main>
<?php include('footer.php');?>
