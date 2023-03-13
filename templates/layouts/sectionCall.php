<style>

.addThis_listSharing {

    position: fixed;

    bottom: 35%;

    z-index: 999;

    width: 45px;

    opacity: 1;

    visibility: visible;

    transition: all .3s ease;

    -webkit-transition: all .3s ease;

    -moz-transition: all .3s ease;

    -o-transition: all .3s ease;

}



.addThis_listSharing.right {

    right: 24px;

}



.addThis_listSharing.right.animate {

    right: -24px;

    opacity: 0;

    visibility: hidden;

}



.addThis_listSharing.left {

    left: 24px;

}



.addThis_listSharing.left.animate {

    left: -24px;

    opacity: 0;

    visibility: hidden;

}



.addThis_listSharing.right.animate.is-show {

    left: 5px;

    opacity: 1;

    visibility: visible;

}



.addThis_listSharing.left.animate.is-show {

    left: 5px;

    opacity: 1;

    visibility: visible;

}



.addThis_listing .addThis_item {

    margin-bottom: 5px;

}



.addThis_listing .addThis_item .addThis_item--icon {

    position: relative;

    display: inline-block;

    text-align: center;

    width: 35px;

    height: 35px;

    line-height: 35px;

    color: #fff;

    border-radius: 50%;

    cursor: pointer;

    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.11);

    background-size: auto;

    background-repeat: no-repeat;

    background-position: center;

}



.addThis_listing .addThis_item .addThis_item--icon .tooltip-text {

    position: absolute;

    top: 4px;



    z-index: 9;

    height: 32px;

    line-height: 26px;

    padding: 3px 10px;

    width: auto;

    border-radius: 5px;

    font-size: 11px;

    color: #fff;

    text-align: center;

    white-space: nowrap;

    cursor: pointer;

    background-color: black;

    visibility: hidden;

    opacity: 0;

    -ms-transition: all 200ms linear;

    -webkit-transition: all 200ms linear;

    transition: all 200ms linear;

}



.addThis_listSharing.right .addThis_listing .addThis_item .addThis_item--icon .tooltip-text {

    left: 55px;

}



.addThis_listSharing.left .addThis_listing .addThis_item .addThis_item--icon .tooltip-text {

    left: 55px;

}



.addThis_listSharing.none-mobile.right.animate.is-show {

    max-width: 50px;

}



.addThis_listing .addThis_item .addThis_item--icon .tooltip-text:after {

    content: "";

    width: 0;

    height: 0;

    border-width: 5px;

    border-style: solid;

    position: absolute;

    top: 0;

    bottom: 0;

    margin: auto;

    -ms-transition: all 200ms linear;

    -webkit-transition: all 200ms linear;

    transition: all 200ms linear;

}



.addThis_listSharing.right .addThis_item .addThis_item--icon .tooltip-text:after {

    border-color: transparent transparent transparent black;

    right: 100%;

    -webkit-transform: rotate(

180deg

);

    transform: rotate(

180deg

);

}



.addThis_listSharing.left .addThis_item .addThis_item--icon .tooltip-text:after {

    border-color: transparent black transparent transparent;

    right: 100%;

}



.addThis_listing .addThis_item .addThis_item--icon:hover {

    text-decoration: none;

    opacity: .9;

    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15), 0 4px 15px rgba(0, 0, 0, 0.13);

}



.addThis_listing .addThis_item .addThis_item--icon:hover .tooltip-text {

    visibility: visible;

    opacity: 1;

}



.fab-wrapper {

    position: fixed;

    bottom: 5%;

    left: 0;

    z-index: 9999999;

}



input[type=checkbox] {

    border: 1px solid #e4e4e4;

    border-radius: 2px;

    margin: 0 3px 0 0;

    height: 20px;

    width: 20px;

    vertical-align: top;

    -webkit-appearance: none;

}



.fab-checkbox {

    display: none;

}



.fab:not(.fab-hothotline1) {

    width: 60px;

    max-width: unset;

    height: 60px;

    display: flex;

    justify-content: center;

    align-items: center;

    margin: 0;

    border-radius: 50%;

    background: #ee4d2d;

    box-shadow: 0 3px 6px rgb(0 0 0 / 16%), 0 3px 6px rgb(0 0 0 / 23%);

    position: absolute;

    left: 10px;

    bottom: -25px;

    z-index: 1000;

    overflow: hidden;

    transform: rotate(0deg);

    -webkit-transition: all .15s cubic-bezier(.15, .87, .45, 1.23);

    transition: all .15s cubic-bezier(.15, .87, .45, 1.23);

}



.icon-cps-fab-menu {

    width: 50px;

    height: 50px;

    margin: 0 5px 5px 0;

    background-size: 850px;

    background-position: -794px -374px;

}



.fab-checkbox:checked~.fab .icon-cps-fab-menu {

    width: 30px;

    height: 30px;

    margin: 0;

    background-size: 600px;

    background-position: -337.5px -316.5px;

}



.fab-wheel {

    width: 300px;

    height: 220px;

    position: absolute;

    bottom: 15px;

    left: 15px;

    transform: scale(0);

    transform-origin: bottom left;

    transition: all .3s ease;

}



.fab-checkbox:checked~.fab-wheel {

    transform: scale(1);

}



.fab-wheel .fab-action {

    display: flex;

    align-items: center;

    font-size: 14px;

    font-weight: 700;

    color: #fff;

    position: absolute;

    text-decoration: none;

}



.fab-wheel .fab-action-1 {

    top: 15px;

    left: 5px;

}



.fab-wheel .fab-action-2 {

    top: 75px;

    left: 50px;

}



.fab-wheel .fab-action-3 {

    left: 95px;

    bottom: 35px;

}



.fab-wheel .fab-action-4 {

    left: 115px;

    bottom: -35px;

}



.fab-title {

    float: left;

    margin: 0 0 0 5px;

    opacity: 0;

    font-family: 'Arial';

}



.fab-checkbox:checked~.fab-wheel .fab-title {

    opacity: 1;

}



.fab-button {

    width: 45px;

    height: 45px;

    display: flex;

    justify-content: center;

    align-items: center;

    float: left;

    padding: 4px;

    border-radius: 50%;

    background: #0f1941;

    box-shadow: 0 1px 3px rgb(0 0 0 / 12%), 0 1px 2px rgb(0 0 0 / 24%);

    font-size: 24px;

    color: White;

    transition: all 1s ease;

    overflow: hidden;

}



.fab-wheel .fab-button-4 {

    background: #dd5145;

}



.fab-wheel .fab-button-3 {

    background: #fb0;

}



.fab-wheel .fab-button-2 {

    background: #0f9d58;

}



.fab-wheel .fab-button-1 {

    background: #2f82fc;

}



.icon-cps-local {

    width: 28px;

    height: 28px;

    background-position: -92.5px -262px;

}



.icon-cps-phone {

    width: 28px;

    height: 28px;

    background-position: -139px -262px;

}



.icon-cps-chat {

    width: 30px;

    height: 30px;

    background-size: 600px;

    background-position: -506px -265px;

}



.icon-cps-chat-zalo {

    width: 30px;

    height: 30px;

    background-size: 600px;

    background-position: -450px -265px;

}



.mask-overlay {

    visibility: hidden;

    position: fixed;

    top: 0;

    left: 0;

    width: 100%;

    height: 100%;

    background: rgba(0, 0, 0, .8);

    z-index: 30;

    opacity: 0;

    -webkit-transition: .3s;

    -moz-transition: .3s;

    -o-transition: .3s;

    transition: .3s;

}



.mask-overlay.is-active {

    visibility: visible;

    opacity: 1;

}

</style>

<div class="tool-pc d-none-tablet d-none-m">

    <ul>

        <li class="p-relative">
            <a href="carts?src=gio-hang" title="Giỏ hàng">
                <i class="tool-cart"></i>
            </a>
            <span class="wrapper-top__right-cart-aside-qty wrapper-top__right-cart-aside-qty--modifiers view-cart"><?=$cart->getTotalQuality()?></span>
        </li>
            
        <li>
            <a href="http://zalo.me/<?=str_replace('.','',str_replace(' ','',$row_setting['sozalo']))?>" rel="nofollow" target="_blank">
                <i class="tool-zalo"></i>
            </a>
        </li>

        <li>
            <a href="https://m.me/<?=$row_setting['linkmessage']?>" rel="nofollow" target="_blank">
                <i class="tool-messenger"></i>
            </a>
        </li>

        <li class="to-top-pc">
            <a href="tel:<?=str_replace('.','',str_replace(' ','',$row_setting['hotline']))?>" rel="nofollow">
                <i class="tool-phone" aria-hidden="true" title="Gọi ngay"></i>
            </a>
        </li>

        <li>
            <a href="javascript:void(0)" rel="nofollow">
                <i class="icons-tool tool-address js-map"></i>
            </a>
        </li>

    </ul>

</div>

<style>
    .hotline-phone-ring-wrap {
    left: 20px;
    bottom: 20px;
}
.hotline-phone-ring-wrap {
    position: fixed;
    bottom: 0;
    left: -20px;
    z-index: 999999;
}
.hotline-phone-ring {
    position: relative;
    visibility: visible;
    background-color: transparent;
    width: 110px;
    height: 110px;
    cursor: pointer;
    z-index: 11;
    -webkit-backface-visibility: hidden;
    -webkit-transform: translateZ(0);
    transition: visibility .5s;
    left: 0;
    bottom: 0;
    display: block;
}
.hotline-phone-ring-circle {
    width: 87px;
    height: 87px;
    top: 10px;
    left: 10px;
    position: absolute;
    background-color: transparent;
    border-radius: 100%;
    border: 2px solid #e60808;
    -webkit-animation: phonering-alo-circle-anim 1.2s infinite ease-in-out;
    animation: phonering-alo-circle-anim 1.2s infinite ease-in-out;
    transition: all .5s;
    -webkit-transform-origin: 50% 50%;
    -ms-transform-origin: 50% 50%;
    transform-origin: 50% 50%;
    opacity: 0.5;
}
.hotline-phone-ring-circle-fill {
    width: 57px;
    height: 57px;
    top: 25px;
    left: 25px;
    position: absolute;
    background-color: rgba(230, 8, 8, 0.7);
    border-radius: 100%;
    border: 2px solid transparent;
    -webkit-animation: phonering-alo-circle-fill-anim 2.3s infinite ease-in-out;
    animation: phonering-alo-circle-fill-anim 2.3s infinite ease-in-out;
    transition: all .5s;
    -webkit-transform-origin: 50% 50%;
    -ms-transform-origin: 50% 50%;
    transform-origin: 50% 50%;
}
.hotline-phone-ring-img-circle {
    background-color: #e60808;
    width: 33px;
    height: 33px;
    top: 37px;
    left: 37px;
    position: absolute;
    background-size: 20px;
    border-radius: 100%;
    border: 2px solid transparent;
    -webkit-animation: phonering-alo-circle-img-anim 1s infinite ease-in-out;
    animation: phonering-alo-circle-img-anim 1s infinite ease-in-out;
    -webkit-transform-origin: 50% 50%;
    -ms-transform-origin: 50% 50%;
    transform-origin: 50% 50%;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    align-items: center;
    justify-content: center;
}
.hotline-phone-ring-img-circle .pps-btn-img {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
}
.hotline-phone-ring-img-circle .pps-btn-img img {
    width: 20px;
    height: 20px;
}
.hotline-bar {
    position: absolute;
    background: rgba(230, 8, 8, 0.75);
    height: 40px;
    width: 180px;
    line-height: 40px;
    border-radius: 3px;
    padding: 0 10px;
    background-size: 100%;
    cursor: pointer;
    transition: all 0.8s;
    -webkit-transition: all 0.8s;
    z-index: 9;
    box-shadow: 0 14px 28px rgb(0 0 0 / 25%), 0 10px 10px rgb(0 0 0 / 10%);
    border-radius: 50px !important;
    left: 33px;
    bottom: 37px;
}
.hotline-bar > a {
    color: #fff;
    text-decoration: none;
    font-size: 15px;
    font-weight: bold;
    text-indent: 45px;
    display: block;
    letter-spacing: 1px;
    line-height: 40px;
    font-family: Arial;
}

@keyframes phonering-alo-circle-anim{

0% {
    -webkit-transform: rotate(0) scale(0.5) skew(1deg);
    -webkit-opacity: 0.1;
}
30% {
    -webkit-transform: rotate(0) scale(0.7) skew(1deg);
    -webkit-opacity: 0.5;
}
100% {
    -webkit-transform: rotate(0) scale(1) skew(1deg);
    -webkit-opacity: 0.1;
}

}

@keyframes phonering-alo-circle-fill-anim{

0% {
    -webkit-transform: rotate(0) scale(0.7) skew(1deg);
    opacity: 0.6;
}
50% {
    -webkit-transform: rotate(0) scale(1) skew(1deg);
    opacity: 0.6;
}
100% {
    -webkit-transform: rotate(0) scale(0.7) skew(1deg);
    opacity: 0.6;
}
}

@keyframes phonering-alo-circle-img-anim{

0% {
    -webkit-transform: rotate(0) scale(1) skew(1deg);
}
10% {
    -webkit-transform: rotate(-25deg) scale(1) skew(1deg);
}
20% {
    -webkit-transform: rotate(25deg) scale(1) skew(1deg);
}
30% {
    -webkit-transform: rotate(-25deg) scale(1) skew(1deg);
}
40% {
    -webkit-transform: rotate(25deg) scale(1) skew(1deg);
}
50% {
    -webkit-transform: rotate(0) scale(1) skew(1deg);
}
100% {
    -webkit-transform: rotate(0) scale(1) skew(1deg);
}
}

.bottom-contact {
    position: fixed;
    bottom: 0;
    background: var(--html-bg-website);
    width: 100%;
    z-index: 99;
    box-shadow: 2px 1px 9px #dedede;
    border-top: 1px solid #eaeaea;
}

.bottom-contact ul li {
    width: 20%;
    float: left;
    list-style: none;
    text-align: center;
    font-size: 13.5px;
    margin-left: 0px;
    margin-bottom: 0.6rem
}

.bottom-contact ul li img {
    width: 35px;
    margin-top: 0.6rem;
    margin-bottom: 0px;
    filter: brightness(0) invert(1);
   -webkit-filter: brightness(0) invert(1);
}

.bottom-contact ul li span {
    color: #fff;
}
a#icon__cart {
    margin-top: 3px;
    display: inline-block;
}
.tool-phone__animation{
    -webkit-animation: quick-alo-circle-img-anim 1s infinite ease-in-out;
    -moz-animation: quick-alo-circle-img-anim 1s infinite ease-in-out;
    -ms-animation: quick-alo-circle-img-anim 1s infinite ease-in-out;
    -o-animation: quick-alo-circle-img-anim 1s infinite ease-in-out;
    animation: quick-alo-circle-img-anim 1s infinite ease-in-out;
    -webkit-transform-origin: 50% 50%;
    -moz-transform-origin: 50% 50%;
    -ms-transform-origin: 50% 50%;
    -o-transform-origin: 50% 50%;
    transform-origin: 50% 50%;
}
.wrapper-cart__menu-img-qty--mobile {
    position: absolute;
    top: -5px;
    right: 5px;
    width: 2rem;
    height: 2rem;
    border: 1px solid #fff;
    background: #ff0000;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff!important;
    font-size: 1.2rem;
    line-height: 1.6rem;
    font-family: var(--aptima-regular)Arial, Helvetica, sans-serif;
}
</style>

<?php /* <div class="hotline-phone-ring-wrap d-none-m">

    <div class="hotline-phone-ring">

        <div class="hotline-phone-ring-circle"></div>

        <div class="hotline-phone-ring-circle-fill"></div>

        <div class="hotline-phone-ring-img-circle">

            <a href="tel:<?=str_replace('.','',str_replace(' ','',$row_setting['hotline']))?>" class="pps-btn-img">

                <img src="./assets/images/icon-1.png" alt="Số điện thoại" width="50">

            </a>

        </div>

    </div>

    <div class="hotline-bar">

        <a href="tel:<?=str_replace('.','',str_replace(' ','',$row_setting['hotline']))?>">

            <span class="text-hotline"><?=$row_setting["hotline"]?></span>

        </a>

    </div>

</div> */ ?>

<div class="bottom-contact d-none d-block-m">
    <ul>
        <li>
            <a id="goidien" title="Điện thoại" aria-label="Điện thoại" href="tel:<?=str_replace(' ','',str_replace('.','',$row_setting["dienthoai"]))?> ">
                <img width="35" height="28" src="assets/images/tool/icon-phone2.png" class="tool-phone__animation" alt="Icon phone">
                <br>
                <span class="blinker">Điện thoại</span>
            </a>
        </li>
        <li>
            <a id="nhantin" title="Nhắn tin" aria-label="Nhắn tin" href="sms:<?=str_replace(' ','',str_replace('.','',$row_setting["hotline"]))?>">
                <img width="35" height="28" src="assets/images/tool/icon-sms2.png" alt="Icon chat">
                <br>
                <span>Nhắn tin</span>
            </a>
        </li>
        <li>
            <a id="chatzalo" title="Chat zalo" aria-label="Chat zalo" href="https://zalo.me/<?=str_replace(' ','',str_replace('.','',$row_setting["sozalo"]))?>">
                <img width="35" height="28" src="assets/images/tool/icon-zalo2.png" alt="Icon zalo">
                <br>
                <span>Chat zalo</span>
            </a>
        </li>
        <li>
            <a id="chatfb" href="https://m.me/<?=$row_setting["linkmessage"]?>" title="Facebook" aria-label="Facebook">
                <img width="35" height="28" src="assets/images/tool/icon-mesenger2.png" alt="Icon message">
                <br>
                <span>Facebook</span>
            </a>
        </li>
        <li>
            <a id="icon__cart" href="carts?src=gio-hang" title="Giỏ hàng" aria-label="Giỏ hàng" style="display: inline-block;margin-top: 3px;position:relative">
                <img width="25" height="22" src="assets/images/tool/cart.png" style="width:25px" alt="Icon cart">
                <br>
                <span style="margin-top:3px;display:inline-block">Giỏ hàng</span>
                <span class="wrapper-cart__menu-img-qty wrapper-cart__menu-img-qty--mobile view-cart"><?=$cart->getTotalQuality()?></span>
            </a>
        </li>
    </ul>
</div>