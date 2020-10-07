<div id="prebooking" class="section">
	<div class="section-center">
		<div class="row" style="border: none; padding: 0px; margin: 0px;">
			<div class="col-md-6">
				<div class="container">
					<h4><b>Seat</b></h4>
					<hr style="border: 1px solid #d8d8d8;width: 100%;">
					<form action="<?=base_url()?>booking/proccess" method="POST">
						<input type="hidden" name="key" value="<?php echo $_GET['key']?>">
						<table class="customer-table">
							
							<?php $i = 0; ?>
							<?php foreach ($data_form as $value) : ?>
								<?php $i++; ?>

								<tr>
									<td>
										<div onclick="pget(this.id)" id="p<?php echo $i ?>" class="customer-color id-p<?php echo $i ?>"></div>
									</td>
									<td>
										<span>
											<?php echo $value ?>
										</span>
									</td>
									<td>
										<input name="seat[]" class="form-control" id="i<?php echo $i ?>" type="text">
									</td>
								</tr>

							<?php endforeach; ?>
						</table>
						<div class="seat">
							<?php for ($i = 1; $i <= $seat['seat_total']; $i++) : ?>

								<?php if (count($seat['seat_bookeds']) !== 0) : ?>
									<?php if (in_array($i, $seat['seat_bookeds'])) : ?>
										<div id="<?php echo $i ?>" class="seat-id seat-notavailabe">
											<p><?php echo $i ?></p>
										</div>

										<?php else : ?>
											<div onclick="sget(this.id)" id="<?php echo $i ?>" class="seat-id">
												<p><?php echo $i ?></p>
											</div>
										<?php endif; ?>
										<?php else : ?>
											<div onclick="sget(this.id)" id="<?php echo $i ?>" class="seat-id">
												<p><?php echo $i ?></p>
											</div>
										<?php endif; ?>



									<?php endfor; ?>

								</div>
								<script>
									function pget(id) {
										seat.p = id;
										$('.customer-color').removeClass("customer-selected");
										$('#' + id).addClass("customer-selected");
									}

									function sget(id) {
										seat.selectSeat(id);
									}

									var seat = {
										p: '',
										pn: function (id) {
											pn = id.replace('p', '');
											return pn;
										},
										selectSeat: function (id) {
											if ($('#' + id).attr('class') == 'seat-id') {

												if ($('#i' + this.pn(this.p)).val() == '') {
													$('#' + id).addClass("seat-selected");
							// console.log(this.pn(this.p));
							$('#i' + this.pn(this.p)).val(id);
							$('#' + id).addClass('seat-for-' + this.p);
						}


					} else {
						cSeat = $('#' + id).attr('class');
						cSeatoc = cSeat.replace('seat-id seat-selected seat-for-p', '');
						$('#' + id).removeClass("seat-selected");
						$('#' + id).removeClass(cSeat.replace('seat-id ', ''));
						$('#i' + cSeatoc).val('');


					}
					//    console.log($('#'+id).attr('class'));
				}
			}

		</script>
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
				<!-- <input name="current_url" id="current_url" type="hidden" value=''> -->
				<div class='btn-continue'>
					<button class="choose-btn">Lanjut</button>
				</div>
			</form>
		</div>
	</form>
</div>
</div>
</div>