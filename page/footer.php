<footer class="text-white">
    <div class="container mb-5">
        <div class="row justify-content-center">
            <?php

            $query = "SELECT * FROM interface ORDER BY id DESC LIMIT 1";
            $result = mysqli_query($koneksi2, $query);

            if (!$result) {
                die("Query Error: " . mysqli_errno($koneksi2) .
                    " - " . mysqli_error($koneksi2));
            }


            $no = 1;

            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <div class="col-md-6 mb-3 ">
                    <h5>Alamat Kami</h5>
                    <div class="underline-white mb-2" style="width: 130px"></div>
                    <p><?php echo $row['address']; ?></p>
                    <h5>Kontak</h5>
                    <div class="underline-white mb-2" style="width: 90px"></div>
                    <div class="contact">
                        <div class="phone">
                            <i class="fa-solid fa-phone"></i>
                            <p><?php echo $row['number_contact1']; ?></p>
                            <p><?php echo $row['number_contact2']; ?></p>
                        </div>
                        <div class="mail">
                            <i class="fa-solid fa-envelope"></i>
                            <p><?php echo $row['mail_contact']; ?></p>
                        </div>
                    </div>
                </div>
            <?php
                $no++;
            }
            ?>
            <div class="col-md-6 mb-3 ">
                <h5>Maps</h5>
                <div class="underline-white mb-2" style="width: 70px"></div>
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15853.494057079548!2d106.8119895!3d-6.6004179!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd56ba6305181755c!2sUniversitas+Pakuan!5e0!3m2!1sid!2sid!4v1565750792388!5m2!1sid!2sid" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>