	<div id="booking" class="section">
		<div class="text-center">
			<h1>Traveling Bersama Kami Menjadi Lebih Mudah</h1>
		</div>
		<div class="section-center">
			<div class="container">
				<div class="booking-form">
					<form action="<?=base_url()?>search" method="get">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<!-- <span class="form-label">Flying from</span> -->
									<select class="form-control" name="rute_from">
										<option>Dari mana?</option>
										<?php foreach ($rute_all as $value) : ?>
											<option value="<?php echo $value['rute_from'] ?>"><?php echo $value['rute_from'] ?></option>
										<?php endforeach; ?>
									</select>
									<span class="select-arrow"></span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<!-- <span class="form-label">Flyning to</span> -->
									<select class="form-control" name="rute_to">
										<option>Mau ke mana?</option>
										<?php foreach ($rute_all as $value) : ?>
											<option value="<?php echo $value['rute_to'] ?>"><?php echo $value['rute_to'] ?></option>
										<?php endforeach; ?>
									</select>
									<span class="select-arrow"></span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<span class="form-label">Kapan?</span>
									<input id="date-start" class="form-control" type="text" name="depart_date" placeholder="mm/dd/yyyy">
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<span class="form-label">Berapa orang?</span>
									<select class="form-control" name="passengers">
										<option>1</option>
										<option>2</option>
										<option>3</option>
									</select>
									<span class="select-arrow"></span>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<span class="form-label">Travel class</span>
									<select class="form-control" name="flight_class">
										<option>Economy class</option>
										<option>First class</option>
									</select>
									<span class="select-arrow"></span>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-btn">
									<input type="submit" name="submit" class="submit-btn" value="Search Flight">
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>