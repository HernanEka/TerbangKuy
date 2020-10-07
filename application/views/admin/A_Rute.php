<section class="content-header">
	<h1>
		Rute
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Rute</a></li>
		<li class="active">view</li>
	</ol>
	<a href="#" class="btn btn-info">+ Add Rute</a>
</section>
<!-- Main content -->
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
								<th>Depart</th>
								<th>Arrive</th>
								<th>Rute From</th>
								<th>Rute To</th>
								<th>Price</th>
								<th>Class</th>
								<th>Transportation</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php $i = 1?>
							<?php foreach ($rute as $value) : ?>
								<tr>
									<td><?php echo $i?></td>
									<td><?php echo $value['depart'] ?></td>
									<td><?php echo $value['arrive'] ?></td>
									<td><?php echo $value['rute_from'] ?></td>
									<td><?php echo $value['rute_to'] ?></td>
									<td><?php echo $value['price'] ?></td>
									<td><?php echo $value['class'] ?></td>
									<td><?php echo $value['code'] ?></td>

									<td>
										<a href="#" class="btn btn-success">Edit</a>
										<a onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger" href="<?php echo base_url() ?>admin/rute/delete/<?php echo $value['id']?>">Delete</a>
									</td>
								</tr>
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
</section>
<!-- /.content-wrapper -->
