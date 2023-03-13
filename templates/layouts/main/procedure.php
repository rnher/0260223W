<?php
$procedure = $db->rawQueryOne("select mota_$lang as mota, id, ten_$lang as ten, tenkhongdau_$lang as tenkhongdau,type,icon, photo from #_baiviet_list where hienthi=1 and type=? and tenkhongdau_$lang=?  order by stt desc ", array('gioi-thieu', "quy-trinh-lam-viec"));
$procedures = $db->rawQuery("select link_direct, mota_$lang as mota,id,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau,type,id_list,icon,photo,ngaytao,id_tacgia,luotxem,ngaytao,ngaysua from #_baiviet where hienthi=1 and noibat=1 and type=?  and id_list=? order by stt asc", array('gioi-thieu', $procedure["id"]));
$procedure_bg = $func->OneDataPhoto(null, 'procedure-bg', 'limit 0,1', "array");

?>

<?php if (count($procedures) > 0) { ?>

<section class="wrapper-procedure" <?php if ($procedure_bg) { ?> style="background:url('<?= _upload_hinhanh_l . $procedure_bg["photo"] ?>') no-repeat center center/cover;" <?php } ?>>

        <div class="grid wide">

            <div class="row">

                <div class="col l-12 m-12 c-12 mb40 mb-m-20 <?php if ($deviceType == "computer") { ?> wow rollIn <?php } ?>" data-wow-offset="50" data-wow-duration="3" data-wow-delay="0.2s">

                    <div class="packaging-title__allpage--info packaging-title__allpage packaging-title__allpage--small">

                        <a href="javascript:void(0)" title=" <?= htmlspecialchars_decode($procedure["ten"]) ?>" aria-label=" <?= htmlspecialchars_decode($procedure["ten"]) ?>" role="link" rel="dofollow">

                            <span> <?= htmlspecialchars_decode($procedure["ten"]) ?></span>

                        </a>

                        <div class="_underline"></div>

                    </div>

                    <div class="packaging-des__allpage">

                        <?= htmlspecialchars_decode($procedure["mota"]) ?>

                    </div>

                </div>

                <div class="col l-12 m-12 c-12">

                    <div class="procedure-wapper">
                        <div class="procedure-wapper_model">
                            <img class="procedure-inner_model" src="<?= _upload_baiviet_l . $procedure["icon"] ?>" alt="<?= $procedure["ten"] ?>">
                            <div class="procedure-wapper_item">
                                <?php
                                $haft = count($procedures) / 2;
                                foreach ($procedures as $key => $value) {
                                ?>

                                    <div class="procedure-item <?= "index".($key < $haft) ?>">


                                        <?php
                                        if ($key < $haft) {
                                        ?>
                                            <div class="procedure-item_group-title">
                                                <h3 class="procedure-item_title">
                                                    <?php
                                                    if ($value["link_direct"]) {
                                                    ?>
                                                        <a href="<?= $func->slugUrl($value) ?>" rel="dofollow" role="link" title="<?= $value["ten"] ?>" aria-label="<?= $value["ten"] ?>">
                                                        <?php } ?>
                                                        <?= htmlspecialchars_decode($value["ten"]) ?>
                                                        <?php
                                                        if ($value["link_direct"]) {
                                                        ?>
                                                        </a>
                                                    <?php } ?>
                                                </h3>
                                                <div class="procedure-item_des">
                                                    <?= htmlspecialchars_decode($value["mota"]) ?>
                                                </div>
                                            </div>
                                            <div class="procedure-item_icon hover-left">
                                                <img class="" src="<?= _upload_baiviet_l . $value["icon"] ?>" alt="<?= $value["ten"] ?>">
                                            </div>
                                        <?php } else { ?>
                                            <div class="procedure-item_icon hover-left">
                                                <img class="" src="<?= _upload_baiviet_l . $value["icon"] ?>" alt="<?= $value["ten"] ?>">
                                            </div>
                                            <div class="procedure-item_group-title">
                                                <h3 class="procedure-item_title">
                                                    <?php
                                                    if ($value["link_direct"]) {
                                                    ?>
                                                        <a href="<?= $func->slugUrl($value) ?>" rel="dofollow" role="link" title="<?= $value["ten"] ?>" aria-label="<?= $value["ten"] ?>">
                                                        <?php } ?>
                                                        <?= htmlspecialchars_decode($value["ten"]) ?>
                                                        <?php
                                                        if ($value["link_direct"]) {
                                                        ?>
                                                        </a>
                                                    <?php } ?>
                                                </h3>
                                                <div class="procedure-item_des">
                                                    <?= htmlspecialchars_decode($value["mota"]) ?>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>

                                <?php } ?>

                            </div>

                        </div>
                    </div>

                </div>


            </div>

        </div>

    </section>

<?php } ?>