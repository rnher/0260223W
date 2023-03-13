<div id="menu-mobile" class="d-none d-block-m">

    <nav id="mmenu">
        
        <ul>
            
            <div class="search_mobi">

                <input role="text" data-role="search-input" type="text" name="keywords" id="keywords-m" placeholder="Nhập dịch vụ cần tìm...">

                <i class="fa fa-search button-search-m" data-btn-search data-target="#keywords" data-view aria-hidden="true"></i>

            </div>

            <?php  if(count($list_c1_dv)) { ?>

            <li class="heading">Danh mục</li>

            <?php for($i=0;$i<count($list_c1_dv); $i++) {
                    $sql="select id, ten_$lang, tenkhongdau_$lang as tenkhongdau,type from #_baiviet_cat where id_list = '".$list_c1_dv[$i]['id']."' and hienthi > 0 and type='dich-vu' order by stt,id desc";
                    $spcatmenu = $db->rawQuery($sql); 
            ?>
            <li>

                <a class="transition" title="<?=$list_c1_dv[$i]['ten']?>"
                    href="<?=$list_c1_dv[$i]['type']?>/<?=$list_c1_dv[$i]['tenkhongdau']?>">

                    <?php if($list_c1_dv[$i]['icon']!=''){ ?>
                    <span class="icon-mmmenu__mobile">
                        <img src="<?=_upload_baiviet_l.$list_c1_dv[$i]['icon']?>" alt="<?=$list_c1_dv[$i]['ten']?>">
                    </span>
                    <?php }?>

                    <?=$list_c1_dv[$i]['ten']?></a>

                <?php if(count($spcatmenu)>0) { ?>

                <ul>

                    <?php for($j=0;$j<count($spcatmenu);$j++) {

                        $spitemmenu = $db->rawQuery("select ten_$lang, tenkhongdau_$lang as tenkhongdau,type, id from #_baiviet_item where id_cat = ? and hienthi > 0 order by stt,id desc",array($spcatmenu[$j]['id'])); ?>

                    <li>

                        <a class="transition" title="<?=$spcatmenu[$j]['ten_'.$lang]?>"
                            href="<?=$spcatmenu[$j]['type']?>/<?=$list_c1_dv[$i]['tenkhongdau']?>/<?=$spcatmenu[$j]['tenkhongdau']?>"><?=$spcatmenu[$j]['ten_'.$lang]?></a>

                        <?php  if(count($spitemmenu)) { ?>

                        <ul>

                            <?php for($u=0;$u<count($spitemmenu);$u++) {

                                $spsubmenu = $db->rawQuery("select ten_$lang as ten, tenkhongdau_$lang as tenkhongdau,type, id from #_baiviet where id_item = ? and hienthi > 0 order by stt,id desc",array($spitemmenu[$u]['id'])); ?>

                            <li>

                                <a class="transition" title="<?=$spitemmenu[$u]['ten_'.$lang]?>"
                                    href="<?=$spitemmenu[$u]['type']?>/<?=$list_c1_dv[$i]['tenkhongdau']?>/<?=$spitemmenu[$u]['tenkhongdau']?>"><?=$spitemmenu[$u]['ten_'.$lang]?></a>

                                <?php /* if(count($spsubmenu)) { ?>

                                <ul>

                                    <?php for($s=0;$s<count($spsubmenu);$s++) { ?>

                                    <li>

                                        <a class="transition" title="<?=$spsubmenu[$s]['ten_'.$lang]?>"
                                            href="<?=$spsubmenu[$s]['type']?>/<?=$spsubmenu[$s]['tenkhongdau']?>"><?=$spsubmenu[$s]['ten_'.$lang]?></a>

                                    </li>

                                    <?php } ?>

                                </ul>

                                <?php } */ ?>

                            </li>

                            <?php } ?>

                        </ul>

                        <?php } ?>

                    </li>

                    <?php } ?>

                </ul>

                <?php } ?>

            </li>

            <?php } ?>

            <?php } ?>



            <li class="heading">Chuyên Mục</li>

            <li>

                <a class="transition <?php if($com=='' || $com=='index') echo 'active'; ?>" href=""
                    title="Trang chủ">Trang Chủ</a>

            </li>

            <!-- <li>

                <a class="transition <?php if($com=='gioi-thieu') echo 'active'; ?>" href="gioi-thieu" rel="dofollow" role="link"
                    title="Giới thiệu" aria-label="Giới thiệu">Giới thiệu</a>

                    <ul>
  
                        <li>

                            <a class="transition" title="Về An Sơn"
                                href="gioi-thieu" aria-label="Về An Sơn" role="link" rel="dofollow">Về An Sơn</a>

                        </li>

                        <li>

                            <a class="transition" title="Văn Hóa An Sơn"
                                href="van-hoa-an-son" aria-label="Văn Hóa An Sơn" role="link" rel="dofollow">Văn Hóa An Sơn</a>

                            <ul>

                                <li>

                                    <a  class="transition" 
                                        title="Thư Viện Ảnh"
                                        href="album" 
                                        aria-label="Thư Viện Ảnh"
                                        role="link"
                                        rel="dofollow">Thư Viện Ảnh</a>

                                </li>

                                <li>

                                    <a  class="transition" 
                                        title="Video"
                                        href="video" 
                                        aria-label="Video"
                                        role="link"
                                        rel="dofollow">Video</a>

                                </li>

                            </ul>

                        </li>

                        <li>

                            <a class="transition" title="Tin Công Ty"
                                href="tin-cong-ty" aria-label="Tin Công Ty" role="link" rel="dofollow">Tin Công Ty</a>

                        </li>

                    </ul>

            </li> -->

            <li>

                <a class="transition <?php if($com=='dich-vu') echo 'active'; ?>" href="dich-vu" aria-label="dịch vụ" role="link" title="Dịch Vụ">Dịch Vụ</a>    

                <ul>

                    <?php if(count($list_c1_dv)) { ?>

                    <?php for($i=0;$i<count($list_c1_dv); $i++) {
                        $sql="select id, ten_$lang , tenkhongdau_$lang as tenkhongdau,type from #_baiviet_cat where id_list = '".$list_c1_dv[$i]['id']."' and hienthi > 0 and type='dich-vu' order by stt,id desc";
                        $spcatmenu = $db->rawQuery($sql); 
                    ?>

                    <li>

                        <a class="transition" title="<?=$list_c1_dv[$i]['ten']?>"
                            href="<?=$list_c1_dv[$i]["type"]?>/<?=$list_c1_dv[$i]["tenkhongdau"]?>"><?=$list_c1_dv[$i]['ten']?></a>

                        <?php if(count($spcatmenu)) { ?>

                        <ul>

                            <?php for($j=0;$j<count($spcatmenu); $j++) {
                                
                                $spitemmenu = $db->rawQuery("select ten_$lang, tenkhongdau_$lang as tenkhongdau,type, id from #_baiviet_item where id_cat = ? and hienthi > 0 order by stt,id desc",array($spcatmenu[$j]['id']));

                                
                                ?>

                            <li>

                                <a class="transition" title="<?=$spcatmenu[$j]['ten_'.$lang]?>"
                                    href="<?=$spcatmenu[$j]["type"]?>/<?=$list_c1_dv[$i]["tenkhongdau"]?>/<?=$spcatmenu[$j]["tenkhongdau"]?>"><?=$spcatmenu[$j]['ten_'.$lang]?></a>
                            
                                <?php  if(count($spitemmenu)) { ?>

                                    <ul>

                                        <?php for($u=0;$u<count($spitemmenu);$u++) {

                                            $spsubmenu = $db->rawQuery("select ten_$lang as ten, tenkhongdau_$lang as tenkhongdau,type, id from #_baiviet where id_item = ? and hienthi > 0 order by stt,id desc",array($spitemmenu[$u]['id'])); ?>

                                        <li>

                                            <a class="transition" title="<?=$spitemmenu[$u]['ten_'.$lang]?>"
                                                href="<?=$spitemmenu[$u]['type']?>/<?=$list_c1_dv[$i]['tenkhongdau']?>/<?=$spitemmenu[$u]['tenkhongdau']?>"><?=$spitemmenu[$u]['ten_'.$lang]?></a>

                                            <?php /* if(count($spsubmenu)) { ?>

                                            <ul>

                                                <?php for($s=0;$s<count($spsubmenu);$s++) { ?>

                                                <li>

                                                    <a class="transition" title="<?=$spsubmenu[$s]['ten_'.$lang]?>"
                                                        href="<?=$spsubmenu[$s]['type']?>/<?=$spsubmenu[$s]['tenkhongdau']?>"><?=$spsubmenu[$s]['ten_'.$lang]?></a>

                                                </li>

                                                <?php } ?>

                                            </ul>

                                            <?php } */ ?>

                                        </li>

                                        <?php } ?>

                                    </ul>

                                <?php } ?>

                            </li>

                            <?php } ?>

                        </ul>

                        <?php } ?>

                    </li>

                    <?php } ?>

                    <?php } ?>

                </ul>

                

            </li>

            <!-- <li>

                <a class="transition <?php if($com=='dieu-khoan') echo 'active'; ?>" href="dieu-khoan"

                rel="dofollow" role="link" title="Khách Hàng" aria-label="Khách Hàng">Khách Hàng</a>

            </li> -->

            <li>

                <a class="transition <?php if($com=='tin-tuc') echo 'active'; ?>" href="tin-tuc" title="Tin tức" role="link" aria-label="Tin tức" rel="dofollow">Tin Tức</a>

                    <?php if(count($list_c1_tt)) { ?>

                   <ul>

                    <?php for($i=0;$i<count($list_c1_tt); $i++) {
                        $sql="select id, ten_$lang , tenkhongdau_$lang as tenkhongdau,type from #_baiviet_cat where id_list = '".$list_c1_tt[$i]['id']."' and hienthi > 0 and type='dich-vu' order by stt,id desc";
                        $spcatmenu = $db->rawQuery($sql); 
                    ?>

                    <li>

                        <a class="transition" title="<?=$list_c1_tt[$i]['ten']?>"
                            href="<?=$list_c1_tt[$i]["type"]?>/<?=$list_c1_tt[$i]["tenkhongdau"]?>"
                            rel="dofollow"
                            role="link"
                            aria-label="<?=$list_c1_tt[$i]['ten']?>"><?=$list_c1_tt[$i]['ten']?></a>

                    </li>

                    <?php } ?>

                </ul>

                <?php } ?>

            </li>

            <li>

                <a class="transition <?php if($com=='lien-he') echo 'active'; ?>" href="lien-he" title="Liên hệ" role="link" aria-label="Liên hệ">Liên Hệ</a>

            </li>

        </ul>

    </nav>

</div>