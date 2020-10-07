<div id="prebooking" class="section">
	<div class="text-center">
		<h1>Silahkan Pilih Tiket </h1>
	</div>
	<div class="section-center">
		<div class="container">
			<div class="row box">
				<tr>
					<span class="glyphicon glyphicon-plane"></span>
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
		<div class="row" style="border: none; padding: 0px; margin: 0px;">
			<div class="col-md-7">
				<div class="container-2">
					<h4>
						<b>Detail Penerbangan</b>
					</h4>
					<hr style="border: 1px solid #d8d8d8;">
					<table class="detail-table">
						<tbody>
							<tr>
								<td><h5>AirLines</h5></td>
								<td><h5><b> : </b></h5></td>
								<td><h5>
									<?php echo $data['data_rute']['code'] ?>
								</h5></td>
							</tr>
							<tr>
								<td><h5>Berangkat</h5></td>
								<td><h5><b> : </b></h5></td>
								<td><h5>
									<?php echo $data['data_rute']['depart']?>
								</h5></td>
							</tr>
							<tr>
								<td><h5>Sampai</h5></td>
								<td><h5><b> : </b></h5></td>
								<td><h5>
									<?php echo $data['data_rute']['arrive']?>
								</h5></td>
							</tr>
							<tr>
								<td><h5>Durasi Penerbangan</h5></td>
								<td><h5><b> : </b></h5></td>
								<td><h5>
									<?php
					            $datetime1 = new DateTime($data['data_rute']['depart']); //convert to datetime
					            $datetime2 = new DateTime($data['data_rute']['arrive']); //convert to datetime
					            $interval = $datetime1->diff($datetime2); //get interval from two datetime
					            echo $interval->format('%d d %H h %i m'); //convert interval to  day hours and minute
					            //materikita.com
					            ?>
					        </h5></td>
					    </tr>
					    <tr>
					    	<td><h5>Class</h5></td>
					    	<td><h5><b> : </b></h5></td>
					    	<td><h5>
					    		<?php echo $data['data_rute']['class']?>
					    	</h5></td>
					    </tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="col-md-5">
			<div class="container">
				<h4>Pembayaran</h4>
				<hr style="border: 1px solid #d8d8d8;width: 100%;">
				<table class="detail-table">
					<tr>
						<td><h5>Harga Tiket</h5></td>
						<td><h5><b>:</b></h5></td>
						<td><h5>
							<?php 
							echo "Rp." . strrev(implode('.', str_split(strrev(strval($data['data_rute']['price'])), 3)));
							?>
						</h5></td>
					</tr>
					<tr>
						<td><h5>Jumlah Penumpang</h5></td>
						<td><h5><b> : </b></h5></td>
						<td><h5>
							<?php echo $_GET['passengers']?>
						</h5></td>
					</tr>
					<tr>
						<td><h5>Harga Tiket</h5></td>
						<td><h5><b>:</b></h5></td>
						<td><h5>
							<?php 
							echo "Rp." . strrev(implode('.', str_split(strrev(strval($data['total_payment'])), 3)));
							?>
						</h5></td>
					</tr>
				</table>
			</div>
			<div class="col-md-5" style="width: 100%;">
				<form action="<?= base_url()?>prebooking/makebooking" method="POST">
				<input name="rute_id" value="<?php echo $_GET['rute_id'] ?>" type="hidden">
				<input name="passengers" value="<?php echo $_GET['passengers'] ?>" type="hidden">
				<input name="current_url" id="current_url" type="hidden" value=''>
				<div class='btn-continue'>
					<button class="choose-btn">Pesan Tiket</button>
				</div>
			</form>
			</div>
		</div>
	</div>
</div>
</div>