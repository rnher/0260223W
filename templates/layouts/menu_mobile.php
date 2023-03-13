<div class="box-modal-menu d-none d-block-m d-block-tablet" id="menuSide">

    <div class="p-relative">

        <ul class="list menu_list">

            <li>

                <a href="" title="<?= _home?>">

                    <span><?= _home?></span>

                </a>

            </li>

            <!-- <li>

                <div class="d-flex align-items-center">

                    <a href="gioi-thieu" title="Giới thiệu">

                        <span>Giới thiệu</span>

                    </a>
                    
                </div>

            </li> -->

            <li>

                <div class="d-flex p-relative">

                    <a itemprop="url" title="Dịch vụ" href="dich-vu" role="link" aria-label="Dịch vụ" rel="dofollow">Dịch vụ</a>

                    <?php if(count($list_c1)>0){ ?>

                    <a href="javascript:" class="toggle-btn ic-arrow">

                        <span></span>

                    </a>

                    <?php }?>

                </div>

                <ul class="inner ul-list-none" style="display: none;">

                    <?php foreach($list_c1 as $key => $value){

                        $c2= $db->rawQuery("select id,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau from #_baiviet_cat where hienthi=1 and id_list=? order by stt asc,id desc",array($value['id']));?>
                    
                    <li>

                        <div class="d-flex p-relative">

                            <a href="<?= $value['type']?>/<?= $value['tenkhongdau']?>"
                                title="<?= $value['ten']?>"><?= $value['ten']?></a>

                            <?php if($c2){?>
                            <a href="javascript:" class="toggle-btn ic-arrow">
                                <span></span>
                            </a>
                            <?php }?>

                        </div>
                        <ul class="inner ul-list-none" style="display: none;">

                            <?php foreach($c2 as $key => $vc2){
                                $c3 = $db->rawQuery("select id,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau from #_baiviet_item where hienthi=1 and id_list=? and id_cat=? order by stt asc,id desc",array($value['id'],$vc2['id']));?>
                            <li>

                                <div class="d-flex p-relative">

                                    <a href="<?= $value['type']?>/<?= $value['tenkhongdau']?>/<?= $vc2['tenkhongdau']?>"
                                        title="<?= $vc2['ten']?>"><?= $vc2['ten']?></a>
                                    <?php if($c3){?>
                                    <a href="javascript:" class="toggle-btn ic-arrow">
                                        <span></span>
                                    </a>

                                    <?php }?>
                                </div>

                                <ul class="inner ul-list-none" style="display: none;">

                                    <?php foreach($c3 as $key => $vc3){ ?>

                                    <li>

                                        <div class="d-flex p-relative">

                                            <a href="<?= $value['type']?>/<?=$value['tenkhongdau']?>/<?= $vc3['tenkhongdau']?>"
                                                title="<?= $vc3['ten']?>"><?= $vc3['ten']?></a>

                                        </div>
                                        
                                    </li>

                                    <?php }?>

                                </ul>
                                
                            </li>

                            <?php }?>

                        </ul>

                    </li>

                    <?php }?>

                </ul>

            </li>

            <li>

                <div class="d-flex p-relative">

                    <a itemprop="url" href="tin-tuc" title="Tin tức & sự kiện" aria-label="Tin tức & sự kiện" role="link" rel="dofollow">Tin tức & sự kiện</a>

                </div>

            </li>

            <li>

                <div class="d-flex align-items-center">

                    <a href="lien-he" title="Liên hệ" aria-label="Liên hệ" role="link" rel="dofollow">

                        <span>Liên hệ</span>

                    </a>

                </div>

            </li>

        </ul>

    </div>

</div>