
<ul class="h-lang list">
    <li><a href="#" onclick="doGTranslate('en|vi');return false;" title="Việt Nam"><img src="assets/images/flagvn.svg" class="mr5" height="21" width="30" alt="vi" /></a></li>
    <li><a href="#" onclick="doGTranslate('vi|en');return false;" title="English"><img src="assets/images/icon/flag-en.svg" class="mr5" height="21" width="30" alt="en" /></a></li>
    <li><a href="#" onclick="doGTranslate('vi|zh-CN');return false;" title="Trung Quốc"><img src="assets/images/icon/flag-cn.svg" class="mr5" height="21" width="30" alt="cn" /></a></li>
</ul>

<div id="google_translate_element2" style="display:none;"></div>

<script>

function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'vi',autoDisplay: false}, 'google_translate_element2');}

</script>

<!-- TODO: -->
<!-- // tranthientri -->
<!-- <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script> -->


<style>

#goog-gt-tt {display:none !important;}

.goog-te-banner-frame {display:none !important;}

.goog-te-menu-value:hover {text-decoration:none !important;}

.goog-text-highlight {background-color:transparent !important;box-shadow:none !important;}

body {top:0 !important;}

#google_translate_element2 {display:none!important;}

ul.h-lang{display: flex;padding: 0px 10px;gap: 1.6rem;padding-right:0}
ul.h-lang>li>a {
    padding: 0 !important;
    color:#fff;
}
/* ul.h-lang>li>a>img{
    border:1px solid #fff;
    width:30px;
    height:30px;
    border-radius:50%;
} */


</style>



<script>

    

function GTranslateGetCurrentLang() {
    
    var keyValue = document['cookie'].match('(^|;) ?googtrans=([^;]*)(;|$)');return keyValue ? keyValue[2].split('/')[2] : null;

}

function GTranslateFireEvent(element,event){try{if(document.createEventObject){var evt=document.createEventObject();element.fireEvent('on'+event,evt)}else{var evt=document.createEvent('HTMLEvents');evt.initEvent(event,true,true);element.dispatchEvent(evt)}}catch(e){}}

function doGTranslate(lang_pair){if(lang_pair.value)lang_pair=lang_pair.value;if(lang_pair=='')return;var lang=lang_pair.split('|')[1];if(GTranslateGetCurrentLang() == null && lang == lang_pair.split('|')[0])return;var teCombo;var sel=document.getElementsByTagName('select');for(var i=0;i<sel.length;i++)if(sel[i].className.indexOf('goog-te-combo')!=-1){teCombo=sel[i];break;}if(document.getElementById('google_translate_element2')==null||document.getElementById('google_translate_element2').innerHTML.length==0||teCombo.length==0||teCombo.innerHTML.length==0){setTimeout(function(){doGTranslate(lang_pair)},500)}else{teCombo.value=lang;GTranslateFireEvent(teCombo,'change');GTranslateFireEvent(teCombo,'change')}}

if(GTranslateGetCurrentLang() != null)jQuery(document).ready(function() {var lang_html = jQuery('div.switcher div.option').find('img[alt="'+GTranslateGetCurrentLang()+'"]').parent().html();if(typeof lang_html != 'undefined')jQuery('div.switcher div.selected a').html(lang_html.replace('data-gt-lazy-', ''));});

function changeLanguageText() {
  if ($('.goog-te-menu-value span:first-child').text() == "Select Language") {    
    $('.goog-te-menu-value span:first-child').html('Language');
    $('#google_translate_element').fadeIn('slow');
  } else {
    setTimeout(changeLanguageText, 50);
  }
}
changeLanguageText();

</script>