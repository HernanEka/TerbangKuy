<div id="search" class="section">
	<div class="text-center">
		<h1>Silahkan Pilih Tiket </h1>
	</div>
	<div class="section-center">
		<div class="container">
			<div class="row box">
				<tr>
					
					<h4>
						Terbang dari 
						<b>
							<?php echo $_GET['rute_from'] ?>
						</b>
						Ke
						<b>
							<?php echo $_GET['rute_to']?>
						</b>
					</h4>
				</tr>
			</div>
			<div class="row box">
				<table>
					<tr>
						<td><h5>Tanggal Terbang</h5></td>
						<td><h5><b>:</b></h5></td>
						<td><h5><?php echo $_GET['depart_date']?></h5></td>
					</tr>
					<tr>
						<td><h5>Jumlah Penumpang</h5></td>
						<td><h5><b>:</b></h5></td>
						<td><h5><?php echo $_GET['passengers']?></h5></td>
					</tr>
					<tr>
						<td><h5>Class</h5></td>
						<td><h5><b>:</b></h5></td>
						<td><h5><?php echo $_GET['flight_class']?></h5></td>
					</tr>
				</table>
			</div>
		</div>
		<div class="container">
			<div class="row box">
				<div class="col">
					<h3><b>Airlines</b></h3>
				</div>
				<div class="col">
					<h3><b>Berangkat</b></h3>
				</div>
				<div class="col">
					<h3><b>Sampai</b></h3>
				</div>
				<div class="col">
					<h3><b>Kursi Tersisa</b></h3>
				</div>
				<div class="col">
					<h3><b>Harga Tiap Penumpang</b></h3>
				</div>
			</div>
			<?php foreach ($data as $value) : ?>
				<?php 

				$seat_booked = 0;
				if (count($value['seat_booked']) > 0) {
					$seat_booked = count($value['seat_booked']);
				}
				$seat_available = $value['seat_total'] - $seat_booked;

				?>
				<div class="<?php echo ($seat_available > 0 ? '' : 'rute-full' ) ?>">
					<form class="row box" action="<?php echo base_url()?>prebooking" method="GET">
						<input type="hidden" name="passengers" value="<?php echo $_GET['passengers'] ?>">
						<input type="hidden" name="rute_from" value="<?php echo $_GET['rute_from'] ?>">
						<input type="hidden" name="rute_to" value="<?php echo $_GET['rute_to'] ?>">
						<input type="hidden" name="depart_date" value="<?php
        
        // convert date to month day using date function php
																																																		$date = strtotime($_GET['depart_date']);
																																																		echo date(" D d M Y ", $date);
																																																		?>">
				<input type="hidden" name="flight_class" value="<?php echo $_GET['flight_class'] ?>">
						<?php if ( $seat_available > 0): ?>
							<input type="hidden" name="rute_id" value="<?php echo $value['id']; ?>">
						<?php endif; ?>
						<div class="col">
							<p>
								<h6><?php echo $value['code']; ?></h6>
							</p>
							<p>
								<h6><?php echo $value['class']; ?> Class</h6>
							</p>
						</div>
						<div class="col">
							<p>
								<h6><?php echo $value['rute_from']; ?></h6>
							</p>
							<p>
								<h6><?php 
								echo date('D d M Y', strtotime($value['depart']));
								?></h6>
							</p>
							<p>
								<h6><?php 
								echo date('G:i:s', strtotime($value['depart']));
								?></h6>
							</p>
						</div>
						<div class="col">
							<p>
								<h6><?php echo $value['rute_to']; ?></h6>
							</p>
							<p>
								<h6><?php 
								echo date('D d M Y', strtotime($value['arrive']));
								?></h6>
							</p>
							<p>
								<h6><?php 
								echo date('G:i:s', strtotime($value['arrive']));
								?></h6>
							</p>
						</div>
						<div class="col">
							<p><h6>
								<?php if ( $seat_available > 0): ?>
									Seat Available : <?php echo $seat_available ?>
									<?php else: ?>
										Seat Not Available
									<?php endif; ?>	
								</h6>
							</p>
						</div>
						<div class="col">
							<p class="flight-price"><b>

								<!-- convert number to idr format -->
								<?php 
								echo "Rp." . strrev(implode('.', str_split(strrev(strval($value['price'])), 3)));
								?></b>

							</p>
							<?php if ( $seat_available > 0): ?>
								<button class="choose-btn">Choose</button>						
								<?php else: ?>		
									<button disabled class="choose-btn btn-full">Full</button>					
								<?php endif; ?>
							</div>
						</form>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
