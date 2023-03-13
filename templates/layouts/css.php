<?php if (!$func->isGoogleSpeed()) { ?>

    <link rel="stylesheet" href="./assets/plugins/fontawesome/css/all.min.css">

<?php } ?>

<?php

$css->setCache("cached");

if (!$func->isGoogleSpeed()) {

    $css->setCss("./assets/css/all.css");

    $css->setCss("./assets/css/fonts.css");

    $css->setCss("./assets/css/normalize.css");
}

$css->setCss("./assets/css/jssor.css");

$css->setCss("./assets/css/reset.css");

$css->setCss("./assets/plugins/wow/animate.css");

$css->setCss("./assets/css/keyframes.css");

$css->setCss("./assets/css/tools.css");

$css->setCss("./assets/css/detail.css");

$css->setCss("./assets/css/grid.css?v=" . filemtime("./assets/css/grid.css"));

$css->setCss("./assets/css/index.css?v=" . filemtime("./assets/css/index.css"));

$css->setCss("./assets/css/responsive.css?v=" . filemtime("./assets/css/responsive.css"));

echo $css->getCss();

?>

<style>
    <?php if (!$func->isGoogleSpeed()) { ?>@font-face {

        font-family: 'Roboto';

        src: url('assets/fonts/Roboto/Roboto-Medium.ttf') format('truetype');

    }

    @font-face {

        font-family: 'Roboto-Black';

        src: url('assets/fonts/Roboto/Roboto-Black.ttf') format('truetype');

    }

    @font-face {

        font-family: 'Roboto-Bold';

        src: url('assets/fonts/Roboto/Roboto-Bold.ttf') format('truetype');

    }

    @font-face {

        font-family: 'Roboto-ExtraBold';

        src: url('assets/fonts/Roboto/Roboto-ExtraBold.ttf') format('truetype');

    }

    @font-face {

        font-family: 'Roboto-ExtraLight';

        src: url('assets/fonts/Roboto/Roboto-ExtraLight.ttf') format('truetype');

    }

    @font-face {

        font-family: 'Roboto-Light';

        src: url('assets/fonts/Roboto/Roboto-Light.ttf') format('truetype');

    }

    @font-face {

        font-family: 'Roboto-Medium';

        src: url('assets/fonts/Roboto/Roboto-Medium.ttf') format('truetype');

    }

    @font-face {

        font-family: 'Roboto-Regular';

        src: url('assets/fonts/Roboto/Roboto-Regular.ttf') format('truetype');

    }

    @font-face {

        font-family: 'Roboto-Semibold';
        src: url('assets/fonts/Roboto/Roboto-Bold.ttf') format('truetype');

    }

    @font-face {

        font-family: 'Roboto-Thin';

        src: url('assets/fonts/Roboto/Roboto-Thin.ttf') format('truetype');

    }

    @font-face {
        font-family: "title";

        src: url('assets/images/fonts/font/ttt/SVN-ANDROGYNE.TTF');
    }

    @font-face {
        font-family: "brand";
        src: url('assets/images/fonts/font/ttt/SVN-REVOLUTION.TTF');
    }

    <?php } ?>:root {

        --font-family-title: "title";
        --font-family-brand: "brand";

        --html-bg-website: <?= $row_setting['color_page'] ?>;

        --html-cl-website: <?= $row_setting['color_text'] ?>;

        --html-sc-website: <?= $row_setting['color_secondary'] ?>;

        --color-star: #fec60f;

        --hover-buy-bg: #FFE13E;

        --inter-main: 'Roboto';

        --inter-black: 'Roboto-Black';

        --inter-bold: 'Roboto-Bold';

        --inter-extrabold: 'Roboto-ExtraBold';

        --inter-extralight: 'Roboto-ExtraLight';

        --inter-light: 'Roboto-Light';

        --inter-medium: 'Roboto-Medium';

        --inter-rg: 'Roboto-Regular';

        --inter-semibold: 'Roboto-Semibold';

        --inter-thin: 'Roboto-Thin';

    }
</style>