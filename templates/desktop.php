<!DOCTYPE html>

<html lang="<?= $lang ?>" itemscope itemtype="http://schema.org/WebSite">

<head>

    <?php include _source . 'meta.php' ?>

    <?php include _layouts . "css.php"; ?>

    <?php if (!$func->isGoogleSpeed()) { ?>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <?php } ?>

    <script src="assets/js/all.js"></script>

</head>

<body itemscope itemtype="https://schema.org/WebPage">

    <?php if (!$func->isGoogleSpeed()) { ?>

        <?= $row_setting["code_body"] ?>

    <?php } ?>

    <?php include _layouts . "seo.php"; ?>

    <div id="wrapper">

        <?php include_once _layouts . "topmobile.php"; ?>

        <!-- <?php include_once _layouts . "top.php"; ?> -->

        <?php include_once _layouts . "header.php"; ?>

        <?php include _layouts . "mmenu.php"; ?>

        <?php if ($source == 'index') { ?>
            <?php include _layouts . "main.php"; ?>
        <?php } ?>

        <?php /* if($com!='carts' && 
            $com!='van-hoa-an-son'
            && $template!='contacts/contact'  
            && $template!='pages/baiviet'
            && $template!='news/customers' 
            && $template!='news/manufacturing' 
            && $template!='news/services'  
            && $com!='video' 
            && $com!='album' 
            && $template!='news/news' 
            && $com!='san-pham' 
            && $template!='news/gioithieu' 
            && $com!='tim-kiem' 
            && $com!='uu-dai' 
            && $template!='products/product_detail'){?>
           
            <?php if($source!='index'){ ?>

            <div class="grid wide">

                <div class="row">

                    <div class="col l-12 m-12 c-12">

                        <div class="breadcumb mt30">

                            <?=$str_breadcrumbs?>

                        </div>

                    </div>

                </div>

            </div>
            <?php }?>

            <?php } */ ?>

        <?php include _template . $template . "_tpl.php"; ?>


        <?php include _layouts . "footer.php"; ?>

        <!-- <?php include _layouts . "sectionCall.php"; ?> -->

    </div>

    <?php if ($source == 'index') { ?>

        <?php if ($popup) { ?>

            <?php include _layouts . "popup.php"; ?>

        <?php } ?>

    <?php } ?>

    <div class="cursor d-none-tablet d-none-m"></div>
    <div class="cursor2 d-none-tablet d-none-m"></div>


    <?php include _layouts . "js.php"; ?>

    <div class="mask-overlay"></div>

    <div id="loader">

        <div class="loader">

            <div class="inner one"></div>

            <div class="inner two"></div>

            <div class="inner three"></div>

        </div>

    </div>

</body>

</html>