<div id="search" class="section">
	<div class="text-center">
		<h1>Reservasi Saya </h1>
	</div>
	<div class="section-center">
		<div class="container">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Reservation Code</th>
						<th>Reservation Date</th>
						<th>Route</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 0 ?>
					<?php foreach ( $reservation as $value ): ?>
						<?php $i++ ?>
						<tr>
							<td><?php echo $i ?></td>
							<td><?php echo $value['reservation_code'] ?></td>
							<td><?php echo date('D d M Y, G:i:s', strtotime($value['reservation_date'])) ?></td>
							<td class="reservation-route">From <?php echo $value['rute_from'] ?> to <?php echo $value['rute_to'] ?></td>
							<td>

								<?php 
								if($value['status'] == 1){
									echo "<span class='status-paid'>PAID</span>";
								}
								else{
									echo "<span class='status-unpaid'>UNPAID</span>";
								}
								
								?>

							</td>
							<td>
								<a class="status-check" href="<?php echo base_url() ?>reservation/status?reservation_code=<?php echo $value['reservation_code'] ?>">Check</a>
							</td>
						</tr>	
					<?php endforeach; ?>
				</tbody>
			</tbody>
		</table>
	</div>
</div>
</div>