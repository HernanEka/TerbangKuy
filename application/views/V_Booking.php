<div id="prebooking" class="section">
	<div class="section-center">
		<div class="row" style="border: none; padding: 0px; margin: 0px;">
			<div class="col-md-6">
				<div class="container">
					<form action="<?=base_url()?>booking/insert_customer" method="post">
						<input type="hidden" name="key" value="<?php echo $_GET['key']?>" class="customer-form">
						<?php for ($i = 1;$i<=$data['passengers'];$i++) : ?>
							<div class="customer-data">
								<div class="booking-title">
									<h4>
										Penumpang <?php echo $i?>
									</h4>
									<div class="booking-line"></div>
								</div>
							</div>
							<h5 style="padding-top: 10px;">Nama</h5>
							<input type="text" name="name[]" class="form-control">
							<h5 style="padding-top: 10px;">Alamat</h5>
							<textarea style="height: 60px;" class="form-control" name="address[]" id="" cols="30" rows="10"></textarea>
							<div class="row">
								<div class="col">
									<h5 style="padding-top: 10px;">Telepon</h5>
									<input type="text" name="telepon[]" class="form-control" required>
								</div>
								<div class="col">
									<h5 style="padding-top: 10px;">Email</h5>
									<input type="email" name="email[]" class="form-control">
								</div>
							</div>
							<h5 style="padding-top: 10px;">Jenis Kelamin</h5>
							<select name="gender[]" class="form-control">
								<option value="l">Laki-Laki</option>
								<option value="p">Perempuan</option>
							</select>
						<?php endfor;?>
					</div>
				</div>
				<div class="col-md-6">
					<div class="container">
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
										<?php echo $data_rute['code'] ?>
									</h5></td>
								</tr>
								<tr>
									<td><h5>Berangkat</h5></td>
									<td><h5><b> : </b></h5></td>
									<td><h5>
										<?php echo $data_rute['depart']?>
									</h5></td>
								</tr>
								<tr>
									<td><h5>Sampai</h5></td>
									<td><h5><b> : </b></h5></td>
									<td><h5>
										<?php echo $data_rute['arrive']?>
									</h5></td>
								</tr>
								<tr>
									<td><h5>Durasi Penerbangan</h5></td>
									<td><h5><b> : </b></h5></td>
									<td><h5>
										<?php
					            $datetime1 = new DateTime($data_rute['depart']); //convert to datetime
					            $datetime2 = new DateTime($data_rute['arrive']); //convert to datetime
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
					    		<?php echo $data_rute['class']?>
					    	</h5></td>
					    </tr>
					</tbody>
				</table>
			</div>

			<div class="container">
				<h4>Pembayaran</h4>
				<hr style="border: 1px solid #d8d8d8;width: 100%;">
				<table class="detail-table">
					<tr>
						<td><h5>Harga Tiket</h5></td>
						<td><h5><b>:</b></h5></td>
						<td><h5>
							<?php 
							echo "Rp." . strrev(implode('.', str_split(strrev(strval($data_rute['price'])), 3)));
							?>
						</h5></td>
					</tr>
					<tr>
						<td><h5>Jumlah Penumpang</h5></td>
						<td><h5><b> : </b></h5></td>
						<td><h5>
							<?php echo $data['passengers']?>
						</h5></td>
					</tr>
					<tr>
						<td><h5>Harga Tiket</h5></td>
						<td><h5><b>:</b></h5></td>
						<td><h5>
							<?php 
							echo "Rp." . strrev(implode('.', str_split(strrev(strval($data['passengers']*$data_rute['price'])), 3)));
							?>
						</h5></td>
					</tr>
				</table>
			</div>
		</div>
		<div class="col"></div>
		<div class="col">
			<button class="choose-btn" type="submit" name="submit">Lanjut</button>
		</div>
	</form>
</div>
</div>
</div>