<div id="search" class="section">
    <div class="section-center">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h4>Reservasi</h4>
                    <hr style="border: 1px solid #d8d8d8;">
                </div>
            </div>
            <h2 class="text-center">
                Ini Kode Reservasi Anda : <span><?php echo $_GET['reservation_code'] ?></span>
            </h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="container">
                    <?php $i = 1 ?>
                    <?php foreach ($customer as $value) : ?>
                        <h5>
                            Penumpang <?php echo $i ?>
                        </h5>
                        <div class="booking-line"></div>
                        <table class="detail-table">
                            <tr>
                                <td class="h">Name</td>
                                <td>:</td>
                                <td class="c">
                                    <?php echo $value['name'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="h">Address</td>
                                <td>:</td>
                                <td class="c">
                                    <?php echo $value['address'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="h">Phone</td>
                                <td>:</td>
                                <td class="c">
                                    <?php echo $value['telepon'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="h">Email</td>
                                <td>:</td>
                                <td class="c">
                                    <?php echo $value['email'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="h">Gender</td>
                                <td>:</td>
                                <td class="c">
                                    <?php if($value['gender'] == 'l')
                                    {
                                        echo "laki-laki";
                                    }
                                    else{
                                        echo "perempuan";
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr class="s">
                                <td class="h">Seat</td>
                                <td>:</td>
                                <td class="c">
                                    <?php echo $value['seat'] ?>
                                </td>
                            </tr>
                        </table>
                        <?php $i++ ?>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="container">
                    <h4>
                        <b>Detail Penerbangan</b>
                    </h4>
                    <hr style="border: 1px solid #d8d8d8;width: 100%;">
                    <table class="detail-table">
                        <tbody>
                            <tr>
                                <td><h5>AirLines</h5></td>
                                <td><h5><b> : </b></h5></td>
                                <td><h5>
                                    <?php echo $rute['code'] ?>
                                </h5></td>
                            </tr>
                            <tr>
                                <td><h5>Berangkat</h5></td>
                                <td><h5><b> : </b></h5></td>
                                <td><h5>
                                    <?php echo $rute['depart']?>
                                </h5></td>
                            </tr>
                            <tr>
                                <td><h5>Sampai</h5></td>
                                <td><h5><b> : </b></h5></td>
                                <td><h5>
                                    <?php echo $rute['arrive']?>
                                </h5></td>
                            </tr>
                            <tr>
                                <td><h5>Durasi Penerbangan</h5></td>
                                <td><h5><b> : </b></h5></td>
                                <td><h5>
                                    <?php
                                $datetime1 = new DateTime($rute['depart']); //convert to datetime
                                $datetime2 = new DateTime($rute['arrive']); //convert to datetime
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
                                <?php echo $rute['class']?>
                            </h5></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="container">
                <h4>Pembayaran</h4>
                <hr style="border: 1px solid #d8d8d8;width: 100%;">
                <?php if ( $rute['status'] == 0 ): ?>
                    <h2 class="status-unpaid">Belum Dibayar</h2>
                    <?php else: ?>
                        <h2 class="status-paid">Sudah Dibayar</h2>
                    <?php endif; ?>
                    <table class="detail-table">
                        <tr>
                            <td><h5>Harga Tiket</h5></td>
                            <td><h5><b>:</b></h5></td>
                            <td><h5>
                                <?php 
                                echo "Rp." . strrev(implode('.', str_split(strrev(strval($rute['price'])), 3)));
                                ?>
                            </h5></td>
                        </tr>
                        <tr>
                            <td><h5>Jumlah Penumpang</h5></td>
                            <td><h5><b> : </b></h5></td>
                            <td><h5>
                                <?php echo count($customer)?>
                            </h5></td>
                        </tr>
                        <tr>
                            <td><h5 class="flight-price"><b>Harga Tiket</b></h5></td>
                            <td><h5 class="flight-price"><b>:</b></h5></td>
                            <td><h5 class="flight-price">
                                <b><?php 
                                echo "Rp." . strrev(implode('.', str_split(strrev(strval(count($customer)*$rute['price'])), 3)));
                                ?></b>
                            </h5></td>
                        </tr>
                    </table>
                    <?php if ( $rute['status'] == 0 ): ?>
                        <div class="booking-unpaid">
                            <h4>Your Booking successfull, to finish your payment, please transfer your money to : </h4>
                            <table class="detail-table">
                                <tr>
                                    <td>Mandiri</td>
                                    <td>:</td>
                                    <td>123456</td>
                                </tr>
                                <tr>
                                    <td>BCA</td>
                                    <td>:</td>
                                    <td>986545</td>
                                </tr>
                                <tr>
                                    <td>BRI</td>
                                    <td>:</td>
                                    <td>34657675</td>
                                </tr>
                            </table>
                        </div>
                        <div class="booking-paid">
                            <!-- <div class="booking-line"></div> -->
                            <?php if ( $proof_of_payment !== null ): ?>
                                <img height="100%" width="100%" class="proof-of-payment-img" src="<?php echo base_url() ?>assets/proof_of_payment/<?php echo $proof_of_payment ?>" alt="image">
                                <p>waiting for verification..</p>
                            <?php endif; ?>

                            <h4>Upload your proof of payment</h4>
                            <form action="<?php echo base_url() ?>reservation/proof_of_payment" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="reservation_code" value="<?php echo $_GET['reservation_code'] ?>">
                                <input class="form-control" name="image" type="file">
                                <button class="choose-btn">Upload</button>
                            </form>
                        </div>

                        <?php else: ?>
                            <div class="booking-paid">
                                <h4>Your payment is successfull</h4>
                            </div>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>