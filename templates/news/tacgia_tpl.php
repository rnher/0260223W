<?php

$author_post = $db->rawQuery("select ten_$lang as ten,id,id_list,tenkhongdau_$lang as tenkhongdau,type,luotxem,ngaytao,ngaysua from #_baiviet where hienthi=1 and id_tacgia=? order by stt asc,id asc limit 0,6", array($row_detail["id"]));

$postCount = $db->rawQueryOne("select count(id) as total from #_baiviet where hienthi=1 and id_tacgia=?", array($row_detail["id"]));

?>

<section class="wrappers-author">

    <div class="grid wide">

        <div class="row">

            <?php

            if (count($tintuc) > 0) {

                $col = "col l-9 m-8 c-12";
            } else {

                $col = "col l-12 m-12 c-12";
            }

            ?>

            <div class="<?= $col ?>">

                <div class="breadcumb breadcumb--detail mt20">
                    <?= $str_breadcrumbs ?>
                </div>

                <div class="content-detail mt20 mb20 clearfix">

                    <div class="other-news-detail font-detail">

                        <div class="detail">

                            <div class="wrappers-author__top">

                                <div class="wrappers-author__top-img">

                                    <span class="d-block hover-left">

                                        <img src="<?= _upload_baiviet_l . $row_detail["photo"] ?>" alt="<?= $row_detail["ten_$lang"] ?>">

                                    </span>

                                </div>

                                <div class="wrappers-author__top-img-detail">

                                    <h1 class="wrappers-author__top-img-detail-title"><span><?= $seo->getSeo('h1') ?></span></h1>

                                    <div class="wrappers-author__top-img-detail-job">

                                        <span><?= $row_detail["job_$lang"] ?></span>

                                    </div>

                                </div>

                            </div>

                            <div class="pucblisher d-flex mt30 d-none-m">

                                <p class="mr30"><i class="fa-regular fa-calendar mr5"></i> <?= $func->daysOfTheWeek($row_detail["ngaytao"]) ?>, <?= date('d/m/Y', $row_detail['ngaytao']) ?></p>

                                <p><i class="fa-light fa-eye mr5"></i><?= $row_detail['luotxem'] ?></p>

                            </div>

                            <div class="d-none d-block-m">

                                <div class="pucblisher d-flex justify-content-between mt30">

                                    <p class="mr30"><i class="fa-regular fa-calendar mr5"></i> <?= date('d/m/Y', $row_detail['ngaytao']) ?></p>

                                    <p><i class="fa-light fa-eye mr5"></i><?= $row_detail['luotxem'] ?></p>

                                </div>

                            </div>

                            <div class="box-description mt20 original">

                                <span><?= htmlspecialchars_decode($seo->getSeo('content')) ?></span>

                            </div>

                            <div class="wrapper-toc wrapper-content__news-detail mt20">

                                <div class="content ul-list-detail original">

                                    <?= htmlspecialchars_decode($row_detail['noidung_' . $lang]) ?>

                                </div>

                            </div>

                        </div>

                        <div class="detail mt20">

                            <div class="wrap-aside__socical">

                                <span class="wrap-title__socialdetail">Chia sẻ:</span>

                                <div class="socialmediaicons">

                                    <?php include_once _source . 'shareLinks.php' ?>

                                </div>

                            </div>

                        </div>

                        <?php if (count($author_post) > 0) { ?>

                            <div class="wrapper-author__post-aside" id="load_post_author">
                                <div class="row mt-m-30">
                                    <?php foreach ($author_post as $key => $value) { ?>

                                        <div class=" col l-4 m-4 c-6 d-flex flex-column">
                                            <div class='wrapper-author__post mt20'>

                                                <div class='wrapper-author__post-title'>

                                                    <a href='<?= $func->slugUrl($value) ?>' title='<?= $value['ten'] ?>' aria-label='<?= $value['ten'] ?>' role='link' rel='dofollow'><?= $value['ten'] ?></a>

                                                </div>

                                                <div class='wrapper-author__post-des mt20'><?= $seoDB["description_$lang"] ?></div>

                                                <div class='wrapper-author__post-view mt20'>

                                                    <span class='mr30'><i class='fa-light fa-calendar'></i> <?= ($value['ngaysua'] != 0) ? date('d/m/Y', $value['ngaysua']) : date('d/m/Y', $value['ngaytao']) ?></span>

                                                    <span><i class='fa-thin fa-eye'></i> <?= $value['luotxem'] ?></span>

                                                </div>

                                            </div>
                                        </div>

                                    <?php } ?>

                                </div>
                            </div>

                            <div class="wrapper-author__post-message">

                                <button data-offset="6" data-limit="6" id="viewmore_author">Xem Thêm</button>

                            </div>

                        <?php } ?>

                    </div>

                </div>

            </div>

            <?php

            if (count($tintuc) > 0) {

                include _layouts . "right_author.php";
            }

            ?>

        </div>

    </div>

</section>

<?php if (count($author_post) > 0) { ?>

    <script>
        $('#viewmore_author').click(function() {

            var offset = $(this).attr('data-offset');

            var limit = $(this).attr('data-limit');

            var id = <?= $row_detail["id"] ?>;

            var limitCount = <?= $postCount["total"] ?>;

            $.ajax({

                url: 'ajax/ajaxLoadScroll.php',

                type: 'POST',

                data: {
                    offset: offset,
                    limit: limit,
                    id: id
                },

                dataType: 'json',

                beforeSend: function() {

                    $('#viewmore_author').addClass('loading');

                },

                success: function(res) {

                    if (res.status == 200) {

                        $('#viewmore_author').removeClass('loading');

                        $('.wrapper-author__post-aside').append(res.html);

                        var numberOffset = Number(offset) + 5;

                        $('#viewmore_author').attr('data-offset', numberOffset);

                        if (numberOffset >= limitCount) {

                            $('#viewmore_author').remove();

                        }

                    } else {

                        $('#viewmore_author').remove();

                    }

                }
            })

        });

        // $(window).scroll(function(){

        //     if($(window).scrollTop() + $(window).height() >= $(document).height()){

        //         $.post(
        //         "ajax/ajaxLoadScroll.php",
        //         {

        //             offset:offset,

        //             limit:limit,

        //             id:id

        //         },function(data,status){

        //             if(status=='success'){

        //                 $('.wrapper-author__post-aside').append(data);

        //                 offset+=5;

        //                 console.log(offset);

        //             }
        //         });

        //     }

        // });
    </script>

<?php } ?>