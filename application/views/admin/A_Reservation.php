<section class="content-header">
	<h1>Reservation</h1>
	<ol class="breadcrumb">
		<li>
			<a href="#">
				<i class="fa fa-dashboard"></i> Reservation</a>
		</li>
		<li class="active">View</li>
	</ol>
	<!-- <a href="#" class="btn btn-info">+ Add Reservation</a> -->
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
								<th>Reservation Code</th>
								<th>Reservation Date</th>
								<th>Users</th>
								<th>Rute</th>
								<th>Status</th>
								<th>Proof of Payment</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php $i = 1 ?>
							<?php foreach ($reservation as $value) : ?>
							<tr>
								<td><?php echo $i ?></td>
								<td><?php echo $value['reservation_code'] ?></td>
								<td><?php echo $value['reservation_date'] ?></td>
								<td class="reservation-action"><?php echo $value['username'] ?></td>
								<td class="reservation-action"><?php echo $value['rute_from'] ?> - <?php echo $value['rute_to'] ?></td>
								<td>
									<?php 
									if($value['status'] == 1){
										echo "PAID";
									}
									elseif($value['status'] == 0){
										echo "UNPAID";
									}
									?>
								</td>
								<td>
									<?php 
									if($value['proof_of_payment'] != null) :?>
										<img height="70" width="100" class="proof-of-payment-img" src="<?php echo base_url() ?>assets/proof_of_payment/<?php echo $value['proof_of_payment'] ?>" alt="image">
										<?php else : ?>
										<p>Not Yet</p>
									<?php endif ?>
								</td>
								<td>
									<a href="#" class="btn btn-success">Edit</a>
									<a onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger" href="<?php echo base_url() ?>admin/A_Reservation/delete/<?php echo $value['id']?>">Delete</a>
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
				<!-- /.box-body -->
			</div>
			<!-- /.box -->
		</div>
		<!-- /.col -->
	</div>
	<!-- /.row -->
</section>

