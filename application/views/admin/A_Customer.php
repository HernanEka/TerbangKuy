<section class="content-header">
	<h1>Customer</h1>
	<ol class="breadcrumb">
		<li>
			<a href="#">
				<i class="fa fa-dashboard"></i> Customer</a>
		</li>
		<li class="active">View</li>
	</ol>
	<a href="#" class="btn btn-info">+ Add Customer</a>
</section>

<section class="content"> 
	<div class="row">
		<div class="col-xs-12">
			<!-- /.box -->

			<div class="box">
				<!-- /.box-header -->
				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Customer</th>
								<th>Alamat</th>
								<th>Telepon</th>
								<th>Email</th>
								<th>gender</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php $i = 1 ?>
							<?php foreach ($customer as $value) : ?>
							<tr>
								<td><?php echo $i ?></td>
								<td><?php echo $value['name'] ?></td>
								<td><?php echo $value['address']?></td>
								<td><?php echo $value['telepon'] ?></td>
								<td><?php echo $value['email'] ?></td>
								<td><?php echo $value['gender'] ?></td>
								<td>
									<a href="#" class="btn btn-success">Edit</a>
									<a onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger" href="<?php echo base_url() ?>admin/reservation/delete/<?php echo $value['id']?>">Delete</a>
								</td>
							</tr>
							<?php $i++ ?>
							<?php endforeach; ?>
						</tbody>
						<!-- <tfoot>
              <tr>
              </tr>
              </tfoot> -->
					</table>
				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.box -->
		</div>
		<!-- /.col -->
	</div>
	<!-- /.row -->
</section>

