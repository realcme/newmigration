<!doctype html>
<html lang="en-US">
<head> <!-- vclinic theme | page.tpl.php -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/> <!-- BOF RealCME page.tpl.php --> <title>
        vClinic</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" href="http://i.realcme.com/cms/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="/cms/sites/all/themes/zen/vclinictheme/print.css" type="text/css" media="print"/>
    <style type="text/css" media="all">@import "/cms/../cmsdata/css/113218e0b8934527c1585d52a0f62772.css";</style>
    <!--[if IE]>
    <link rel="stylesheet" href="/cms/sites/all/themes/zen/ie.css" type="text/css"> <![endif]-->
    <script type="text/javascript" src="/cms/misc/jquery.js"></script>
    <script type="text/javascript" src="/cms/misc/drupal.js"></script>
    <script type="text/javascript" src="/cms/sites/all/modules/jquery_update/compat.js"></script>
    <script type="text/javascript" src="/cms/sites/all/modules/custom/cmebase/js/allscripts.js?v=1"></script>
    <script type="text/javascript" src="/cms/sites/all/modules/custom/cmeauthoradmin/jquery.cmeauthoradmin.js"></script>
    <script type="text/javascript">Drupal.extend({
            settings: {
                "googleanalytics": {
                    "trackOutgoing": 1,
                    "trackMailto": 1,
                    "trackDownload": 1,
                    "trackDownloadExtensions": "7z|aac|avi|csv|doc|exe|flv|gif|gz|jpe?g|js|mp(3|4|e?g)|mov|pdf|phps|png|ppt|rar|sit|tar|torrent|txt|wma|wmv|xls|xml|zip",
                    "LegacyVersion": 0
                }
            }
        });</script>
    <script> $(document).ready(function () {
            function getWindowHeight(win, doc) {
                var myHeight = 0;
                if ((win.innerHeight) && (typeof(win.innerHeight) == 'number')) {
                    myHeight = win.innerHeight;
                } else if (doc.documentElement && (doc.documentElement.clientHeight)) {
                    myHeight = doc.documentElement.clientHeight;
                } else if (doc.body && (doc.body.clientHeight)) {
                    myHeight = doc.body.clientHeight;
                }
                return myHeight;
            }

            $.cookie('win_height', getWindowHeight(window, window.document), {path: '/', domain: '.realcme.com'});
            var newrefurl = window.location + '';
            pos = newrefurl.indexOf('?comp=');
            if (pos > 0) {
                newrefurl = newrefurl.substring(0, pos);
            }
            $.cookie('ref_url', newrefurl, {path: '/', domain: '.realcme.com'});
            $.cookie('cdn_url', 'http://i.realcme.com/cms/', {path: '/', domain: '.realcme.com'});
            $(window).resize(function () {
                function getWindowHeight(win, doc) {
                    var myHeight = 0;
                    if ((win.innerHeight) && (typeof(win.innerHeight) == 'number')) {
                        myHeight = win.innerHeight;
                    } else if (doc.documentElement && (doc.documentElement.clientHeight)) {
                        myHeight = doc.documentElement.clientHeight;
                    } else if (doc.body && (doc.body.clientHeight)) {
                        myHeight = doc.body.clientHeight;
                    }
                    return myHeight;
                }

                $.cookie('win_height', getWindowHeight(window, window.document), {path: '/', domain: '.realcme.com'});
            });
        }); </script>
    <style> /*#top_nav, #page-main, #footer { top: -30px; } #top_nav { left: -20px; background-image: none; }*/
        #top_nav_links {
            background-image: none;
            display: none;
        }

        #page > #page-inner > #header {
            background-color: #bf2e1b;
            height: 100px;
        }

        #page-main {
            width: 1024px;
        }

        .sidebar-right #content {
            margin-left: 0;
            margin-right: 0;
            width: 80%;
        }

        #content, .two-sidebars #content {
            float: left;
            margin-left: 200px;
            margin-right: 0;
            padding: 0;
            width: auto;
        }

        #sidebar-right {
            float: right;
            margin-left: 0;
            padding: 0;
            width: auto;
        }

        #page {
            width: 1040px;
        } </style> <!-- EOF page.tpl.php -->
    <style type="text/css"> /*! Squarespace LESS Compiler (less.js language v1.3.3) certifications/ certifications2/ footer_new/ footers/ footers1/ newpartner/ partners_scripts/ ready/ scripts/ templates/ txts/ .sqs-block.vsize-1 .sqs-block-content{height:34px}.sqs-block.vsize-2 .sqs-block-content{height:68px}.sqs-block.vsize-3 .sqs-block-content{height:102px}.sqs-block.vsize-4 .sqs-block-content{height:136px}.sqs-block.vsize-5 .sqs-block-content{height:170px}.sqs-block.vsize-6 .sqs-block-content{height:204px}.sqs-block.vsize-7 .sqs-block-content{height:238px}.sqs-block.vsize-8 .sqs-block-content{height:272px}.sqs-block.vsize-9 .sqs-block-content{height:306px}.sqs-block.vsize-10 .sqs-block-content{height:340px}.sqs-block.vsize-11 .sqs-block-content{height:374px}.sqs-block.vsize-12 .sqs-block-content{height:408px}.sqs-block.vsize-13 .sqs-block-content{height:442px}.sqs-block.vsize-14 .sqs-block-content{height:476px}.sqs-block.vsize-15 .sqs-block-content{height:510px}.sqs-block.vsize-16 .sqs-block-content{height:544px}.sqs-block.vsize-17 .sqs-block-content{height:578px}.sqs-block.vsize-18 .sqs-block-content{height:612px}.sqs-block.vsize-19 .sqs-block-content{height:646px}.sqs-block.vsize-20 .sqs-block-content{height:680px}.sqs-block.vsize-21 .sqs-block-content{height:714px}.sqs-block.vsize-22 .sqs-block-content{height:748px}.sqs-block.vsize-23 .sqs-block-content{height:782px}.sqs-block.vsize-24 .sqs-block-content{height:816px}.sqs-block.vsize-25 .sqs-block-content{height:850px}.sqs-block.vsize-26 .sqs-block-content{height:884px}.sqs-block.vsize-27 .sqs-block-content{height:918px}.sqs-block.vsize-28 .sqs-block-content{height:952px}.sqs-block.vsize-29 .sqs-block-content{height:986px}.sqs-block.vsize-30 .sqs-block-content{height:1020px}.sqs-row{width:auto !important}.sqs-row:before,.sqs-row:after{content:"";display:table}.sqs-row:after{clear:both}[class*=sqs-col]{float:left}[class*=sqs-col] .sqs-block{padding-left:17px;padding-right:17px}[class*=sqs-col]:last-child{padding-right:0}.sqs-col-12{width:100%}.sqs-col-12 .sqs-col-12{width:100%}.sqs-col-12 .sqs-col-11{width:91.6667%}.sqs-col-12 .sqs-col-10{width:83.3333%}.sqs-col-12 .sqs-col-9{width:75%}.sqs-col-12 .sqs-col-8{width:66.6667%}.sqs-col-12 .sqs-col-7{width:58.3333%}.sqs-col-12 .sqs-col-6{width:50%}.sqs-col-12 .sqs-col-5{width:41.6667%}.sqs-col-12 .sqs-col-4{width:33.3333%}.sqs-col-12 .sqs-col-3{width:25%}.sqs-col-12 .sqs-col-2{width:16.6667%}.sqs-col-12 .sqs-col-1{width:8.3333%}.sqs-col-11{width:91.6667%}.sqs-col-11 .sqs-col-11{width:100%}.sqs-col-11 .sqs-col-10{width:90.9091%}.sqs-col-11 .sqs-col-9{width:81.8182%}.sqs-col-11 .sqs-col-8{width:72.7273%}.sqs-col-11 .sqs-col-7{width:63.6364%}.sqs-col-11 .sqs-col-6{width:54.5455%}.sqs-col-11 .sqs-col-5{width:45.4545%}.sqs-col-11 .sqs-col-4{width:36.3636%}.sqs-col-11 .sqs-col-3{width:27.2727%}.sqs-col-11 .sqs-col-2{width:18.1818%}.sqs-col-11 .sqs-col-1{width:9.0909%}.sqs-col-10{width:83.3333%}.sqs-col-10 .sqs-col-10{width:100%}.sqs-col-10 .sqs-col-9{width:90%}.sqs-col-10 .sqs-col-8{width:80%}.sqs-col-10 .sqs-col-7{width:70%}.sqs-col-10 .sqs-col-6{width:60%}.sqs-col-10 .sqs-col-5{width:50%}.sqs-col-10 .sqs-col-4{width:40%}.sqs-col-10 .sqs-col-3{width:30%}.sqs-col-10 .sqs-col-2{width:20%}.sqs-col-10 .sqs-col-1{width:10%}.sqs-col-9{width:75%}.sqs-col-9 .sqs-col-9{width:100%}.sqs-col-9 .sqs-col-8{width:88.8889%}.sqs-col-9 .sqs-col-7{width:77.7778%}.sqs-col-9 .sqs-col-6{width:66.6667%}.sqs-col-9 .sqs-col-5{width:55.5556%}.sqs-col-9 .sqs-col-4{width:44.4444%}.sqs-col-9 .sqs-col-3{width:33.3333%}.sqs-col-9 .sqs-col-2{width:22.2222%}.sqs-col-9 .sqs-col-1{width:11.1111%}.sqs-col-8{width:66.6667%}.sqs-col-8 .sqs-col-8{width:100%}.sqs-col-8 .sqs-col-7{width:87.5%}.sqs-col-8 .sqs-col-6{width:75%}.sqs-col-8 .sqs-col-5{width:62.5%}.sqs-col-8 .sqs-col-4{width:50%}.sqs-col-8 .sqs-col-3{width:37.5%}.sqs-col-8 .sqs-col-2{width:25%}.sqs-col-8 .sqs-col-1{width:12.5%}.sqs-col-7{width:58.3333%}.sqs-col-7 .sqs-col-7{width:100%}.sqs-col-7 .sqs-col-6{width:85.7143%}.sqs-col-7 .sqs-col-5{width:71.4286%}.sqs-col-7 .sqs-col-4{width:57.1429%}.sqs-col-7 .sqs-col-3{width:42.8571%}.sqs-col-7 .sqs-col-2{width:28.5714%}.sqs-col-7 .sqs-col-1{width:14.2857%}.sqs-col-6{width:50%}.sqs-col-6 .sqs-col-6{width:100%}.sqs-col-6 .sqs-col-5{width:83.3333%}.sqs-col-6 .sqs-col-4{width:66.6667%}.sqs-col-6 .sqs-col-3{width:50%}.sqs-col-6 .sqs-col-2{width:33.3333%}.sqs-col-6 .sqs-col-1{width:16.6667%}.sqs-col-5{width:41.6667%}.sqs-col-5 .sqs-col-5{width:100%}.sqs-col-5 .sqs-col-4{width:80%}.sqs-col-5 .sqs-col-3{width:60%}.sqs-col-5 .sqs-col-2{width:40%}.sqs-col-5 .sqs-col-1{width:20%}.sqs-col-4{width:33.3333%}.sqs-col-4 .sqs-col-4{width:100%}.sqs-col-4 .sqs-col-3{width:75%}.sqs-col-4 .sqs-col-2{width:50%}.sqs-col-4 .sqs-col-1{width:25%}.sqs-col-3{width:25%}.sqs-col-3 .sqs-col-3{width:100%}.sqs-col-3 .sqs-col-2{width:66.6667%}.sqs-col-3 .sqs-col-1{width:33.3333%}.sqs-col-2{width:16.6667%}.sqs-col-2 .sqs-col-2{width:100%}.sqs-col-2 .sqs-col-1{width:50%}.sqs-col-1{width:8.3333%}.sqs-col-1 .sqs-col-1{width:100%}.sqs-layout > .sqs-row{margin-left:-17px;margin-right:-17px}.sqs-layout:not(.sqs-editing) .sqs-row .sqs-block:not(.float):first-child{padding-top:0}.sqs-layout:not(.sqs-editing) .sqs-block+.sqs-row .sqs-block:not(.float):first-child{padding-top:17px}.sqs-layout:not(.sqs-editing) .sqs-row+.sqs-row .sqs-block:not(.float):first-child{padding-top:17px}.sqs-layout:not(.sqs-editing)>.sqs-row:first-child>[class*=sqs-col]:first-child>.sqs-block:last-child,.sqs-layout:not(.sqs-editing) .sqs-block+.sqs-row .sqs-block:not(.float):last-child{padding-bottom:17px}.sqs-layout:not(.sqs-editing) .sqs-row+.sqs-row:not(:last-child) .sqs-block:last-child{padding-bottom:17px}.sqs-block.sized .sqs-block-content{overflow:hidden}.text-align-center{text-align:center}.text-align-right{text-align:right}.columns-1 [class*=sqs-col-]{width:100% !important}.sqs-block .state-message,.sqs-state-message{font:400 normal 12px / 22px 'Gotham SSm A','Gotham SSm B','Proxima Nova','Open Sans','Helvetica Neue',Helvetica,Arial,sans-serif;letter-spacing:normal;padding:19px;padding-left:60px;color:#3e3e3e;position:relative;background-color:rgba(128,128,128,.15000000000000002)}.sqs-block .state-message:after,.sqs-state-message:after{content:" ";position:absolute;top:0;left:0;height:60px;width:60px;background:transparent url(/universal/images-v6/icons/block-indicator-dark.png) no-repeat center}@media (-webkit-min-device-pixel-ratio:2),(min-resolution:1.5dppx){.sqs-block .state-message:after,.sqs-state-message:after{background-image:url('/universal/images-v6/icons/block-indicator-dark@2x.png');background-size:22px}}.sqs-block .state-message.information,.sqs-state-message.information{background:#222;padding:30px 20px;text-align:center;color:#999;font-size:11px}.sqs-block .state-message .title,.sqs-state-message .title{padding-bottom:8px;font-size:14px}html.cameron .sqs-block .state-message .title,html.cameron .sqs-state-message .title{color:#eee}.sqs-block .state-message>.sqs-state-message-button,.sqs-state-message>.sqs-state-message-button,.sqs-block .state-message .sqs-state-message-buttons-wrapper,.sqs-state-message .sqs-state-message-buttons-wrapper{margin-top:19px;margin-left:-41px;display:block !important;position:relative}.sqs-block .state-message .sqs-state-message-button,.sqs-state-message .sqs-state-message-button{cursor:pointer;outline:none;background:#3e3e3e;padding:11px;-webkit-transition:background-color .1s ease-in-out, opacity .1s ease-in-out;-moz-transition:background-color .1s ease-in-out, opacity .1s ease-in-out;-ms-transition:background-color .1s ease-in-out, opacity .1s ease-in-out;-o-transition:background-color .1s ease-in-out, opacity .1s ease-in-out;transition:background-color .1s ease-in-out, opacity .1s ease-in-out;-moz-user-select:none;-webkit-user-select:none;-ms-user-select:none;user-select:none;font-family:inherit;-webkit-appearance:none;-moz-appearance:none;appearance:none;line-height:22px;text-align:center;display:inline-block;position:relative}.sqs-block .state-message .sqs-state-message-button,.sqs-state-message .sqs-state-message-button,.sqs-block .state-message .sqs-state-message-button>*,.sqs-state-message .sqs-state-message-button>*{color:#fff !important;-webkit-appearance:none;border:0;text-transform:uppercase;outline:none;font-size:11px;font-weight:500}.sqs-block .state-message .sqs-state-message-button:hover,.sqs-state-message .sqs-state-message-button:hover{background-color:#000;box-shadow:none}.sqs-block .state-message .sqs-state-message-button.disabled,.sqs-state-message .sqs-state-message-button.disabled{opacity:.3;cursor:default}.sqs-block .state-message .sqs-state-message-button.disabled>*,.sqs-state-message .sqs-state-message-button.disabled>*{opacity:.5}.sqs-block .state-message .sqs-state-message-button.disabled:hover,.sqs-state-message .sqs-state-message-button.disabled:hover{background-color:#3e3e3e !important}.sqs-layout.sqs-editing .sqs-block .sqs-block .state-message .sqs-state-message-button,.sqs-layout.sqs-editing .sqs-block .sqs-state-message .sqs-state-message-button{z-index:1001}.sqs-col-0{width:0;display:none}.sqs-block{position:relative;height:auto;outline:1px solid transparent;-webkit-transition:box-shadow .1s ease-in-out;-moz-transition:box-shadow .1s ease-in-out;-ms-transition:box-shadow .1s ease-in-out;-o-transition:box-shadow .1s ease-in-out;transition:box-shadow .1s ease-in-out;padding-top:17px;padding-bottom:17px}.sqs-block:not(.sqs-block-html):not(.sqs-block-markdown){clear:both}.sqs-layout.sqs-editing .sqs-block.sqs-block-focused:not(.sqs-block-html),.sqs-layout.sqs-editing .sqs-block.sqs-block-editing:not(.sqs-block-html),html:not(.blogapp) .sqs-layout.sqs-editing .sqs-block.sqs-block.sqs-selected,.sqs-layout.sqs-editing .sqs-block.sqs-confirmation-open{box-shadow:inset 0 0 0 1px rgba(0,0,0,.1)}.sqs-layout.sqs-editing .sqs-block.sqs-block-focused.sqs-block-html:hover,.sqs-layout.sqs-editing .sqs-block.sqs-block.sqs-selected.sqs-block-html.sqs-block-editing{box-shadow:none !important}.sqs-layout.sqs-editing .sqs-block.sqs-dd-dragging,.sqs-layout.sqs-editing .sqs-block.yui3-dd-dragging{z-index:9995 !important;opacity:.3;-webkit-transition:opacity .15s ease-in-out, -webkit-transform .15s ease-in-out;-moz-transition:opacity .15s ease-in-out, -webkit-transform .15s ease-in-out;-ms-transition:opacity .15s ease-in-out, -webkit-transform .15s ease-in-out;-o-transition:opacity .15s ease-in-out, -webkit-transform .15s ease-in-out;transition:opacity .15s ease-in-out, -webkit-transform .15s ease-in-out;box-sizing:border-box}.sqs-block iframe.embedded-scripts-preview{display:block;position:relative;border:0}.sqs-block .removed-script{display:block;opacity:.6}.sqs-block .removed-script::before{content:'Script Disabled';font-style:italic}html.blogapp .sqs-block{-webkit-transition:none !important;-moz-transition:none !important;-ms-transition:none !important;-o-transition:none !important;transition:none !important}html .sqs-block.sqs-block-editable:not(.sqs-block-editing){cursor:url(/universal/images-v6/grab.cur) 8 8,move;cursor:-webkit-grab;cursor:-moz-grab}html .sqs-block.sqs-block-editable:not(.sqs-block-editing) .sqs-dd-invalid-handle{cursor:default}html.sqs-dragging-block *{cursor:url(/universal/images-v6/grabbing.cur) 8 8,move;cursor:-webkit-grabbing;cursor:-moz-grabbing}html .sqs-locked-layout .sqs-block{cursor:default !important}html .sqs-block.sqs-block-html .sqs-block-content{cursor:auto}.sqs-block-code img{max-width:100%}.sqs-block-code .gm-style img{max-width:none}.sqs-block-hidden{height:0;overflow:hidden}.yui3-overlay-hidden{display:none}.sqs-editing-overlay{position:absolute;top:0;left:0;right:0;bottom:0;z-index:1000;-moz-user-select:none;-webkit-user-select:none;-ms-user-select:none;user-select:none}.sqs-locked-height .sqs-editing-overlay{background-color:rgba(255,255,255,.5)}html.browser-msie .sqs-editing-overlay{background-color:rgba(128,128,128,.05)}body.sqs-dragging .sqs-layout .sqs-content-overlay{display:block !important}.sqs-content-overlay{position:absolute;left:0;width:100%}[class*=aspect-overlay]{padding-bottom:20px;position:absolute}[class*=aspect-overlay] .yui3-overlay-content{background:rgba(0,0,0,.9);color:#fff;font:12px/24px 'Helvetica Neue',Helvetica,Arial,sans-serif;text-align:center;width:50px;border-radius:5px}.sqs-block .yui3-resize-handle{display:none;position:absolute;height:50px;width:50px}.sqs-block .yui3-resize-handles-wrapper{z-index:10}.sqs-block .yui3-resize-handle-inner{position:absolute;top:50%;left:50%;margin-top:-7px;margin-left:-7px;height:13px;width:13px;border-radius:100px;background-color:grey}.sqs-block .yui3-resize-handle-b{margin-bottom:-25px;margin-left:-25px;bottom:-1px;left:50%;cursor:row-resize}.sqs-block .yui3-resize-handle-l{left:0;top:0;bottom:0;width:10px;cursor:col-resize}.sqs-block .yui3-resize-handle-r{right:0;top:0;bottom:0;width:10px;cursor:col-resize}.sqs-block .yui3-resize-handle.sqs-dd-dragging .yui3-resize-handle,.sqs-block .yui3-resize-handle.yui3-dd-dragging .yui3-resize-handle{display:none}.sqs-block[class*=focused] .yui3-resize-handle,.sqs-block.sqs-block-editing .yui3-resize-handle{display:block;z-index:9999}.sqs-block[class*=float]{z-index:10 !important;box-sizing:border-box;clear:none}.sqs-block[class*=float-left]{float:left;margin-right:17px}.sqs-block[class*=float-left]+.sqs-block[class*=float-left]{clear:left}.sqs-block[class*=float-right]{float:right;margin-left:17px}.sqs-block[class*=float-right]+.sqs-block[class*=float-right]{clear:right}.sqs-remove-button{position:absolute !important;border-radius:100px;background:#111 url('icon_close_14_light.png') center center no-repeat;background-size:7px;cursor:pointer}body.sqs-index .sqs-remove-button{background:#111 url('/universal/images-v6/icons/icon_close_14_light.png') center center no-repeat}.sqs-block-error{padding-top:12px;padding-bottom:12px}.sqs-block-error .sqs-block-content{border:1px solid #ddd;background:#eee;color:#333}html.blogapp .sqs-block-error{padding-top:17px;padding-bottom:17px}html.blogapp .sqs-block-error .sqs-block-content{padding:6px 12px}html.blogapp .sqs-state-message,html.blogapp .state-message{display:block;border:1px solid #ddd;padding:6px 12px;background:#eee;text-align:center;color:#333}.sqs-block .sqs-intrinsic{position:relative !important}.sqs-block .sqs-intrinsic .sqs-intrinsic-content{position:absolute !important;top:0;left:0;height:100%;max-width:none;width:100%}@font-face{font-family:'squarespace-ui-font';src:url('//static.squarespace.com/universal/fonts/squarespace-ui-font.eot');src:url('//static.squarespace.com/universal/fonts/squarespace-ui-font.eot?#iefix') format('embedded-opentype'),url('//static.squarespace.com/universal/fonts/squarespace-ui-font.svg#squarespace-ui-font') format('svg'),url('//static.squarespace.com/universal/fonts/squarespace-ui-font.woff') format('woff'),url('//static.squarespace.com/universal/fonts/squarespace-ui-font.ttf') format('truetype');font-weight:normal;font-style:normal}.sqs-ui-font-family{font-family:'squarespace-ui-font';font-style:normal;speak:none;font-weight:normal;-webkit-font-smoothing:antialiased}[class^="sqs-ui-font-"]:before,[class*=" sqs-ui-font-"]:before{font-family:'squarespace-ui-font';font-style:normal;speak:none;font-weight:normal;-webkit-font-smoothing:antialiased}[data-icon]:before{font-family:'squarespace-ui-font';font-style:normal;speak:none;font-weight:normal;-webkit-font-smoothing:antialiased;content:attr(data-icon)}#list-paging a,#item-paging a{text-decoration:none}#list-paging a.newer .pagination-icon:before,#item-paging a.newer .pagination-icon:before{font-family:'squarespace-ui-font';font-style:normal;speak:none;font-weight:normal;-webkit-font-smoothing:antialiased;content:"\e000";text-align:center;display:inline-block;vertical-align:middle}#list-paging a.newer .pagination-icon:before,#item-paging a.newer .pagination-icon:before{font-size:16px;width:16px;height:16px;line-height:16px}#list-paging a.newer .pagination-icon:before,#item-paging a.newer .pagination-icon:before{font-size:inherit;width:16px;height:16px;line-height:16px}#list-paging a.older .pagination-icon:after,#item-paging a.older .pagination-icon:after{font-family:'squarespace-ui-font';font-style:normal;speak:none;font-weight:normal;-webkit-font-smoothing:antialiased;content:"\e003";text-align:center;display:inline-block;vertical-align:middle}#list-paging a.older .pagination-icon:after,#item-paging a.older .pagination-icon:after{font-size:16px;width:16px;height:16px;line-height:16px}#list-paging a.older .pagination-icon:after,#item-paging a.older .pagination-icon:after{font-size:inherit;width:16px;height:16px;line-height:16px}#list-paging,#item-paging{border-top:1px solid #e3e3e3;border-bottom:1px solid #e3e3e3;margin:3em 0 0 0}#list-paging a,#item-paging a{padding:1.5em 0;display:inline-block;width:48%}#list-paging a.newer .pagination-icon,#item-paging a.newer .pagination-icon{margin-right:.5em}#list-paging a.newer:after,#item-paging a.newer:after{content:"Newer"}#list-paging a.older,#item-paging a.older{float:right;text-align:right}#list-paging a.older .pagination-icon,#item-paging a.older .pagination-icon{margin-left:.5em}#list-paging a.older:before,#item-paging a.older:before{content:"Older"}#list-paging a.disabled,#item-paging a.disabled{color:#ddd}.like-share{float:right}.like-share .sqs-simple-like{display:inline-block;margin-right:.5em}.like-share .sqs-simple-like .like-icon{float:none;display:inline-block;vertical-align:middle}.like-share .squarespace-social-buttons{display:inline-block;margin-right:.5em}.like-share .squarespace-social-buttons .ss-social-button-icon{float:none;display:inline-block;vertical-align:middle}.like-share.empty{display:none}.sqs-audio-playlist{zoom:1}.sqs-audio-playlist.loading{visibility:hidden}.sqs-audio-playlist:after{display:block;visibility:hidden;font-size:0;height:0;clear:both;content:"."}.sqs-audio-playlist:after{display:block;visibility:hidden;font-size:0;height:0;clear:both;content:"."}.sqs-audio-playlist.hidden{display:none}.sqs-audio-playlist .album-info{width:33%;float:left;zoom:1}.sqs-audio-playlist .album-info:after{display:block;visibility:hidden;font-size:0;height:0;clear:both;content:"."}.sqs-audio-playlist .album-info:after{display:block;visibility:hidden;font-size:0;height:0;clear:both;content:"."}.sqs-audio-playlist .album-cover-wrapper{position:relative;width:90px;height:90px;margin-bottom:30px}.sqs-audio-playlist .album-controls{position:absolute;top:0;right:0;bottom:0;left:0;cursor:pointer}.sqs-audio-playlist .album-controls .button{-webkit-transition:.25s all linear;-moz-transition:.25s all linear;-ms-transition:.25s all linear;-o-transition:.25s all linear;transition:.25s all linear;-moz-border-radius:50%;border-radius:50%;position:absolute;bottom:50%;left:50%;display:block;width:90px;height:90px;margin-bottom:-45px;margin-left:-45px;background:#000}.sqs-audio-playlist .album-controls .icon{display:block;position:relative;left:50%;top:50%;margin-top:-20px;margin-left:-10px;width:0px;height:0px;border-top:18px solid transparent;border-bottom:18px solid transparent;border-left:30px solid #fff;-webkit-transform:translatez();-ms-transform:translatez();transform:translatez()}.sqs-audio-playlist .album-title{font-size:1.5em;margin:0}.sqs-audio-playlist .album-title a{text-decoration:none}.sqs-audio-playlist.playing .album-controls .button .icon{border-width:0px;margin-top:-15px;margin-left:-13px}.sqs-audio-playlist.playing .album-controls .button .icon,.sqs-audio-playlist.playing .album-controls .button .icon:before{height:30px;width:10px;background-color:#fff}.sqs-audio-playlist.playing .album-controls .button .icon:before{content:'';display:block;margin-left:16px}.sqs-audio-playlist.has-album-cover .album-cover-wrapper{position:relative;width:100%;height:0;padding-bottom:100%;margin-bottom:20px}.sqs-audio-playlist.has-album-cover .album-cover{position:absolute;top:0;right:0;bottom:0;left:0}.sqs-audio-playlist.has-album-cover .button{background:rgba(0,0,0,.7);opacity:.9}.sqs-audio-playlist.has-album-cover:hover .button{background:rgba(0,0,0,.9)}.sqs-audio-playlist.has-album-cover.playing .album-controls .button{margin:-15px;bottom:0;left:0;-webkit-transform:scale(.4,.4);-ms-transform:scale(.4,.4);transform:scale(.4,.4)}.sqs-audio-playlist.has-album-cover.playing .album-controls .button .icon{border-width:0px;margin-top:-15px;margin-left:-13px}.sqs-audio-playlist.has-album-cover.playing .album-controls .button .icon,.sqs-audio-playlist.has-album-cover.playing .album-controls .button .icon:before{height:30px;width:10px;background-color:#fff}.sqs-audio-playlist.has-album-cover.playing .album-controls .button .icon:before{content:'';display:block;margin-left:16px}.sqs-audio-playlist.has-album-cover.playing .track{opacity:.4}.sqs-audio-playlist.has-album-cover.playing .track:hover,.sqs-audio-playlist.has-album-cover.playing .track.selected{opacity:1}.sqs-audio-playlist .tracks{float:right;width:60%;margin:0;padding:0}.sqs-audio-playlist .track{list-style-type:none;padding:0;margin:0 0 5%;cursor:pointer;zoom:1;font-style:normal;font-weight:normal;letter-spacing:0;text-transform:none;font-size:13px;line-height:1.4em}.sqs-audio-playlist .track:after{display:block;visibility:hidden;font-size:0;height:0;clear:both;content:"."}.sqs-audio-playlist .track:after{display:block;visibility:hidden;font-size:0;height:0;clear:both;content:"."}.sqs-audio-playlist .track-progress-bar{clear:both;height:2px;position:relative;cursor:pointer;padding-bottom:2.5%}.sqs-audio-playlist .track-progress-bar .bar{position:absolute;top:0;left:0;height:2px;width:0%}.sqs-audio-playlist .track-progress-bar .bar.bg{width:100%}.sqs-audio-playlist .track-progress-bar .bar.play-bar{position:relative}.sqs-audio-playlist .track-meta{float:right;text-align:right}.sqs-audio-playlist .track-info .title a{font-size:16px}.sqs-audio-playlist.tablet .album-info,.sqs-audio-playlist.tablet .tracks{width:100%;float:none}.sqs-audio-playlist.tablet .album-info{padding-bottom:8%}.sqs-audio-playlist.tablet .album-cover-wrapper{float:left;margin-right:30px}.sqs-audio-playlist.tablet.has-album-cover .album-cover-wrapper{width:40%;padding-bottom:40%}.sqs-audio-playlist.tablet.no-main-image .album-description{margin-left:120px}.sqs-audio-playlist.phone .album-info,.sqs-audio-playlist.phone .tracks{width:100%;float:none}.sqs-audio-playlist.phone .tracks{margin-top:30px}.sqs-audio-playlist.phone .tracks .track{margin-bottom:10%}.sqs-audio-playlist.phone .album-info{padding-bottom:0}.sqs-audio-playlist.phone .album-cover-wrapper{float:none;margin-right:0;margin-bottom:20px}.sqs-audio-playlist.phone.has-album-cover .album-cover-wrapper{width:100%;padding-bottom:100%}.sqs-audio-playlist.phone.no-main-image .album-description{margin-left:0}.sqs-audio-playlist .track-progress-bar{-webkit-tap-highlight-color:rgba(0,0,0,.5)}.sqs-audio-playlist .track-progress-bar .bar{-webkit-tap-highlight-color:rgba(0,0,0,.5)}.sqs-audio-playlist .track-progress-bar .bar.bg{background-color:#000;background-color:rgba(0,0,0,.1)}.sqs-audio-playlist .track-progress-bar .bar.load-bar{background-color:#000;background-color:rgba(0,0,0,.05)}.sqs-audio-playlist .track-progress-bar .bar.play-bar{background-color:#000;background-color:rgba(0,0,0,.8)}.sqs-audio-playlist .track-meta .track-time{color:#000;color:rgba(0,0,0,.5)}.sqs-audio-playlist .track-meta .actions{color:#000;color:rgba(0,0,0,.2)}.sqs-audio-playlist .track-meta .actions a{color:#000;color:rgba(0,0,0,.5)}.sqs-audio-playlist .track-meta .actions a:hover{color:#000;color:rgba(0,0,0,.8)}.sqs-audio-playlist .track-info .title a{color:#000;color:rgba(0,0,0,.85)}.sqs-audio-playlist .track-info .artist{color:#000;color:rgba(0,0,0,.5)}.hide-album-share-link .sqs-audio-playlist .squarespace-social-buttons{display:none}body:not(.event-show-past-events) .eventlist.eventlist--past{display:none}.eventlist-event{position:relative;margin:68px 0 0 0;padding:0}.eventlist-event:first-of-type{margin:0}.eventlist-column-thumbnail{display:block;float:left;width:35%;height:0;padding-bottom:23.333333333333332%;text-decoration:none !important;background:rgba(110,110,110,.05)}.eventlist-column-thumbnail img{-webkit-transition:opacity .3s ease-in;-moz-transition:opacity .3s ease-in;-ms-transition:opacity .3s ease-in;-o-transition:opacity .3s ease-in;transition:opacity .3s ease-in}.eventlist-column-thumbnail img:not(.loaded){opacity:0}body:not(.event-thumbnails) .eventlist-column-thumbnail{display:none}.event-disable-item-pages .eventlist-column-thumbnail{cursor:default;pointer-events:none}.event-thumbnail-size-11-square .eventlist-column-thumbnail{padding-bottom:35%}.event-thumbnail-size-32-standard .eventlist-column-thumbnail{padding-bottom:23.333333333333332%}.event-thumbnail-size-23-standard-vertical .eventlist-column-thumbnail{padding-bottom:52.5%}.event-thumbnail-size-43-four-thirds .eventlist-column-thumbnail{padding-bottom:26.25%}.event-thumbnail-size-169-widescreen .eventlist-column-thumbnail{padding-bottom:19.6875%}.event-thumbnail-size-2401-anamorphic-widescreen .eventlist-column-thumbnail{padding-bottom:14.583333333333334%}.eventlist-column-thumbnail:empty{height:auto;min-height:100px;padding-bottom:0 !important;background:transparent}.eventlist-column-date{display:block;position:absolute;top:0;left:0;width:35%;margin:0;padding:0;color:#333 !important;text-decoration:none !important}.event-disable-item-pages .eventlist-column-date{cursor:default;pointer-events:none}body:not(.event-date-label) .eventlist-column-date{display:none}body:not(.event-thumbnails) .eventlist-column-date{position:static;float:left;width:70px}.eventlist-datetag{display:table;position:absolute;top:10px;right:10px;height:auto;min-height:70px;width:70px;margin:0;padding:0;background:#fff;color:#333;font-size:14px;line-height:14px;text-align:center;box-sizing:border-box}body:not(.event-thumbnails) .eventlist-datetag{position:static;background:#e8ecec}.eventlist-event:not(.eventlist-event--hasimg) .eventlist-datetag{top:0;background:#e8ecec}.eventlist-datetag-inner{display:table-cell;vertical-align:middle;margin:0;padding:6px;color:inherit;font-size:0;line-height:0;letter-spacing:0}.eventlist-datetag-startdate--month,.eventlist-datetag-startdate--day,.eventlist-datetag-time,.eventlist-datetag-enddate{margin:3px 0;line-height:1em;text-transform:uppercase;white-space:nowrap}.eventlist-event--past .eventlist-datetag-startdate--month,.eventlist-event--past .eventlist-datetag-startdate--day,.eventlist-event--past .eventlist-datetag-time,.eventlist-event--past .eventlist-datetag-enddate{opacity:.3}.eventlist-datetag-time,.eventlist-datetag-enddate{border-top:1px solid #ddd;margin:6px 0 0 0;padding-top:6px;font-size:11px}.eventlist-datetag-startdate--month{font-size:14px;margin-top:6px}.eventlist-datetag-startdate--day{font-size:26px}body:not(.event-date-label-time) .eventlist-datetag-time{display:none}.eventlist-datetag-enddate:before{content:"to "}.eventlist-datetag-status{display:none;position:absolute;top:0px;left:35px;width:1px;height:70px;background:#000;-webkit-transform:rotate(45deg);-moz-transform:rotate(45deg);-ms-transform:rotate(45deg);-o-transform:rotate(45deg);transform:rotate(45deg)}.eventlist-event--past .eventlist-datetag-status{display:block}.eventlist-event--past.eventlist-event--multiday .eventlist-datetag-status,body.event-date-label-time .eventlist-event--past .eventlist-datetag-status{top:0px;height:85px;-webkit-transform:rotate(38deg);-moz-transform:rotate(38deg);-ms-transform:rotate(38deg);-o-transform:rotate(38deg);transform:rotate(38deg)}.eventlist-column-info{float:left;width:65%;padding:0 0 0 34px;box-sizing:border-box}body:not(.event-thumbnails) .eventlist-column-info{width:calc(100% - 70px);width:-webkit-calc(100% - 70px);width:-moz-calc(100% - 70px)}body:not(.event-thumbnails):not(.event-date-label) .eventlist-column-info{width:100%;padding-left:0}.eventlist-cats{margin:0 0 4.25px 0;padding:0;font-size:14px;line-height:1.4em}.eventlist-cats a{color:inherit !important;text-decoration:none !important}body:not(.event-list-show-cats) .eventlist-cats{display:none}.eventlist-title{margin:0 0 17px 0 !important;padding:0 !important;font-size:28px !important;line-height:1.2em !important}.eventlist-title .eventlist-title-link{margin:0 !important;padding:0 !important;color:inherit !important;text-decoration:none !important;font-size:inherit !important;line-height:inherit !important}.eventlist-title .eventlist-title-link:empty:before{content:"Untitled Event"}.event-disable-item-pages .eventlist-title .eventlist-title-link{cursor:default;pointer-events:none}.eventlist-meta{list-style-type:none;margin:0 0 17px 0;padding:0}.eventlist-meta-item{margin:0;padding:0;text-align:left}.event-icons .eventlist-meta-item{position:relative;padding-left:25.5px}.event-icons .eventlist-meta-item:before{opacity:.5;position:absolute;top:3px;left:-2px}.event-icons .eventlist-meta-item.eventlist-meta-date:before{font-family:'squarespace-ui-font';font-style:normal;speak:none;font-weight:normal;-webkit-font-smoothing:antialiased;content:"\e015";text-align:center;display:inline-block;vertical-align:middle}.event-icons .eventlist-meta-item.eventlist-meta-date:before{font-size:16px;width:16px;height:16px;line-height:16px}.event-icons .eventlist-meta-item.eventlist-meta-time:before{font-family:'squarespace-ui-font';font-style:normal;speak:none;font-weight:normal;-webkit-font-smoothing:antialiased;content:"\e00c";text-align:center;display:inline-block;vertical-align:middle}.event-icons .eventlist-meta-item.eventlist-meta-time:before{font-size:16px;width:16px;height:16px;line-height:16px}.event-icons .eventlist-meta-item.eventlist-meta-address:before{font-family:'squarespace-ui-font';font-style:normal;speak:none;font-weight:normal;-webkit-font-smoothing:antialiased;content:"\e02f";text-align:center;display:inline-block;vertical-align:middle}.event-icons .eventlist-meta-item.eventlist-meta-address:before{font-size:16px;width:16px;height:16px;line-height:16px}body:not(.event-list-date) .eventlist-meta-date,body:not(.event-list-time) .eventlist-meta-time,body:not(.event-list-address) .eventlist-meta-address{display:none}.event-list-time .eventlist-event--multiday .eventlist-meta-date .event-date:after{content:", "}.event-list-time .eventlist-event--multiday .eventlist-meta-time{display:inline-block}.eventlist-meta-address-line:after{content:", "}.eventlist-meta-address-line:last-of-type:after{content:none}.eventlist-meta-address-maplink:before{content:"(map)"}body:not(.event-list-icalgcal-links) .eventlist-meta-export{display:none}.eventlist-meta-export-google:before{content:'Google Calendar'}.eventlist-meta-export-divider{margin:0 4px}.eventlist-meta-export-divider:before{content:" B7"}.eventlist-meta-export-ical:before{content:'ICS'}body:not(.event-excerpts) .eventlist-description,body:not(.event-excerpts) .eventlist-excerpt{display:none}.eventlist-excerpt{margin:0 0 17px 0}.eventlist a.eventlist-button{margin:5.666666666666667px 0 25.5px 0;display:inline-block;width:auto;height:auto;padding:1em 2.5em;color:#fff;background-color:#272727;border-width:0;font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:12px;line-height:1em;font-weight:normal;font-style:normal;text-transform:uppercase;letter-spacing:0px;text-align:center;text-decoration:none;cursor:pointer;outline:none;-webkit-appearance:none;-moz-appearance:none;appearance:none}.eventlist a.eventlist-button:before{content:"View Event \2192"}body:not(.event-list-cta-button) .eventlist a.eventlist-button,body.event-disable-item-pages .eventlist a.eventlist-button{display:none !important}body:not(.event-list-like-and-share-buttons) .eventlist-actions{display:none}.eventlist-actions .sqs-simple-like{line-height:inherit}.eventlist-actions .sqs-simple-like .like-count{margin-right:1.2em}.eventlist-actions .sqs-simple-like .like-count:before{font-family:'squarespace-ui-font';font-style:normal;speak:none;font-weight:normal;-webkit-font-smoothing:antialiased;content:"\e012";text-align:center;display:inline-block;vertical-align:middle}.eventlist-actions .sqs-simple-like .like-count:before{font-size:16px;width:16px;height:16px;line-height:16px}.eventlist-actions .sqs-simple-like .like-count:before{margin-right:.2em;position:relative;top:.13em;font-size:1.2em;width:auto;height:auto;line-height:inherit;text-align:left;vertical-align:initial}.eventlist-actions .sqs-simple-like .like-icon{display:none}.eventlist-actions .ss-social-button:before{font-family:'squarespace-ui-font';font-style:normal;speak:none;font-weight:normal;-webkit-font-smoothing:antialiased;content:"\e02b";text-align:center;display:inline-block;vertical-align:middle}.eventlist-actions .ss-social-button:before{font-size:16px;width:16px;height:16px;line-height:16px}.eventlist-actions .ss-social-button:before{margin-right:.4em;font-size:.85em;width:auto;height:auto;line-height:inherit;text-align:left;vertical-align:initial}.eventlist-actions .ss-social-button div{display:inline-block}.eventlist-actions .ss-social-button-icon{display:none !important}.eventlist-filter{font-size:18px;line-height:1em;margin:0 0 51px 0}.eventlist-filter:before{content:"Filtering by: "}.eventlist-past-upcoming-divider{display:none;height:0;border:none;border-top:1px solid rgba(230,230,230,.8);font-size:68px;line-height:68px}.eventlist--upcoming+.eventlist--past .eventlist-past-upcoming-divider{display:block}.event-datetime-divider:before{content:" \2013 "}.eventlist-empty:before{content:"There are no upcoming events at this time."}.eventitem-backlink{display:inline-block;margin:0 0 51px 0;text-transform:uppercase}.eventitem-backlink:before{content:"\2190 Back to All Events"}body:not(.event-item-back-link) .eventitem-backlink{display:none}.eventitem{position:relative}.eventitem-column-meta{float:left;width:30%;box-sizing:border-box}.eventitem-title{margin:0 0 34px 0 !important;padding:0 !important;font-size:28px !important;line-height:1.2em !important;word-break:break-word;word-wrap:break-word}.eventitem-title:empty:before{content:"Untitled Event"}.eventitem-meta{list-style-type:none;margin:0 0 17px 0;padding:0}.eventitem-meta-item{margin:0;padding:0;font-size:.9em;line-height:1.6em}.eventitem--multiday .eventitem-meta-date .event-date:after{content:", "}.eventitem--multiday .eventitem-meta-time{display:inline-block}.eventitem-meta-address-line:after{content:", "}.eventitem-meta-address-line:last-of-type:after{content:none}.eventitem-meta-address-line.eventitem-meta-address-line--title{display:block}.eventitem-meta-address-line.eventitem-meta-address-line--title:after{content:none}.eventitem-meta-address-maplink:before{content:"(map)"}body:not(.event-icalgcal-links) .event-meta-addtocalendar-container{display:none}.eventitem-meta-export-google:before{content:"Google Calendar"}.eventitem-meta-export-divider{margin:0 4px}.eventitem-meta-export-divider:before{content:" B7"}.eventitem-meta-export-ical:before{content:"ICS"}.eventitem-meta-cats:before{content:"Posted in "}.eventitem-meta-tags:before{content:"Tagged "}.event-meta-socialicon-container .sqs-simple-like{line-height:inherit}.event-meta-socialicon-container .sqs-simple-like .like-count{margin-right:1.2em}.event-meta-socialicon-container .sqs-simple-like .like-count:before{font-family:'squarespace-ui-font';font-style:normal;speak:none;font-weight:normal;-webkit-font-smoothing:antialiased;content:"\e012";text-align:center;display:inline-block;vertical-align:middle}.event-meta-socialicon-container .sqs-simple-like .like-count:before{font-size:16px;width:16px;height:16px;line-height:16px}.event-meta-socialicon-container .sqs-simple-like .like-count:before{margin-right:.2em;position:relative;top:.13em;font-size:1.2em;width:auto;height:auto;line-height:inherit;text-align:left;vertical-align:initial}.event-meta-socialicon-container .sqs-simple-like .like-icon{display:none}.event-meta-socialicon-container .ss-social-button:before{font-family:'squarespace-ui-font';font-style:normal;speak:none;font-weight:normal;-webkit-font-smoothing:antialiased;content:"\e02b";text-align:center;display:inline-block;vertical-align:middle}.event-meta-socialicon-container .ss-social-button:before{font-size:16px;width:16px;height:16px;line-height:16px}.event-meta-socialicon-container .ss-social-button:before{margin-right:.4em;font-size:.85em;width:auto;height:auto;line-height:inherit;text-align:left;vertical-align:initial}.event-meta-socialicon-container .ss-social-button div{display:inline-block}.event-meta-socialicon-container .ss-social-button-icon{display:none !important}body:not(.event-like-and-share-buttons) .event-meta-socialicon-container{display:none}.eventitem-column-content{float:left;width:70%;padding-left:34px;box-sizing:border-box}.eventitem-content-footer{margin:17px 0 0 0}.eventitem-content-footer .eventitem-sourceurl{margin:0 0 8.5px 0}.eventitem-content-footer .eventitem-sourceurl:before{content:"Source: "}.eventitem-content-footer .eventitem-meta{margin:0 0 8.5px 0}.eventitem-content-footer .eventitem-meta>*{font-size:inherit}.eventitem-pager{margin:170px 0 0 0}.eventitem-pager-newer,.eventitem-pager-older{float:left;display:inline-block;text-decoration:none;box-sizing:border-box}.eventitem-pager-older .eventitem-pager-date:before{content:"Earlier Event: "}.eventitem-pager-newer{float:right;text-align:right}.eventitem-pager-newer .eventitem-pager-date:before{content:"Later Event: "}.eventitem-pager-disabled{opacity:.4}.event-list-compact-view .eventlist-column-thumbnail,.event-list-compact-view .eventlist-column-date,.event-list-compact-view .eventlist-column-info{width:100% !important}.event-list-compact-view .eventlist-column-thumbnail:empty{min-height:0}.event-list-compact-view.event-thumbnail-size-11-square .eventlist-column-thumbnail{padding-bottom:100%}.event-list-compact-view.event-thumbnail-size-32-standard .eventlist-column-thumbnail{padding-bottom:66.666%}.event-list-compact-view.event-thumbnail-size-23-standard-vertical .eventlist-column-thumbnail{padding-bottom:150%}.event-list-compact-view.event-thumbnail-size-43-four-thirds .eventlist-column-thumbnail{padding-bottom:75%}.event-list-compact-view.event-thumbnail-size-169-widescreen .eventlist-column-thumbnail{padding-bottom:56.25%}.event-list-compact-view.event-thumbnail-size-2401-anamorphic-widescreen .eventlist-column-thumbnail{padding-bottom:41.666%}.event-list-compact-view .eventlist-datetag{left:0;right:auto}.event-list-compact-view.event-thumbnails .eventlist-event--hasimg .eventlist-datetag{left:10px}.event-list-compact-view.event-thumbnails .eventlist-event:not(.eventlist-event--hasimg) .eventlist-column-date{position:static;float:left;width:70px}.event-list-compact-view.event-thumbnails .eventlist-event:not(.eventlist-event--hasimg) .eventlist-column-date .eventlist-datetag{position:static}.event-list-compact-view .eventlist-column-info{margin:25.5px 0 0 0;padding:0}.event-list-compact-viewbody:not(.event-thumbnails):not(.event-date-label) .eventlist-event{margin-top:34px}.event-list-compact-viewbody:not(.event-thumbnails):not(.event-date-label) .eventlist-column-info{margin-top:0}.event-list-compact-view .eventitem-title{margin-bottom:17px !important}.event-list-compact-view .eventitem-column-meta{margin-bottom:34px}.event-list-compact-view .eventitem-column-meta,.event-list-compact-view .eventitem-column-content{float:none;width:auto;padding:0}.event-item-compact-view .eventitem-title{margin-bottom:17px !important}.event-item-compact-view .eventitem-column-meta{margin-bottom:34px}.event-item-compact-view .eventitem-column-meta,.event-item-compact-view .eventitem-column-content{float:none;width:auto;padding:0}@media only screen and (max-width:639px){.eventlist-column-thumbnail,.eventlist-column-date,.eventlist-column-info{width:100% !important}.eventlist-column-thumbnail:empty{min-height:0}.event-thumbnail-size-11-square .eventlist-column-thumbnail{padding-bottom:100%}.event-thumbnail-size-32-standard .eventlist-column-thumbnail{padding-bottom:66.666%}.event-thumbnail-size-23-standard-vertical .eventlist-column-thumbnail{padding-bottom:150%}.event-thumbnail-size-43-four-thirds .eventlist-column-thumbnail{padding-bottom:75%}.event-thumbnail-size-169-widescreen .eventlist-column-thumbnail{padding-bottom:56.25%}.event-thumbnail-size-2401-anamorphic-widescreen .eventlist-column-thumbnail{padding-bottom:41.666%}.eventlist-datetag{left:0;right:auto}.event-thumbnails .eventlist-event--hasimg .eventlist-datetag{left:10px}.event-thumbnails .eventlist-event:not(.eventlist-event--hasimg) .eventlist-column-date{position:static;float:left;width:70px}.event-thumbnails .eventlist-event:not(.eventlist-event--hasimg) .eventlist-column-date .eventlist-datetag{position:static}.eventlist-column-info{margin:25.5px 0 0 0;padding:0}body:not(.event-thumbnails):not(.event-date-label) .eventlist-event{margin-top:34px}body:not(.event-thumbnails):not(.event-date-label) .eventlist-column-info{margin-top:0}.eventitem-title{margin-bottom:17px !important}.eventitem-column-meta{margin-bottom:34px}.eventitem-column-meta,.eventitem-column-content{float:none;width:auto;padding:0}.eventitem-title{margin-bottom:17px !important}.eventitem-column-meta{margin-bottom:34px}.eventitem-column-meta,.eventitem-column-content{float:none;width:auto;padding:0}}.event-time-24hr{display:none}.event-time-format .event-time-12hr{display:none}.event-time-format .event-time-24hr{display:inline}#productList{clear:both;margin-left:-3%;margin-top:-3%;width:103%}#productList .product{cursor:pointer;float:left;margin-left:2.912621359223301%;margin-top:3%;position:relative;width:30.420711974110034%;-webkit-transform:translatez(0)}#productList .product .product-image{-webkit-transition:opacity .14s ease-out}#productList .product .product-image .intrinsic{padding-bottom:100%;line-height:0;position:relative;overflow:hidden}#productList .product .product-image .intrinsic>div{position:absolute;top:0;left:0;bottom:0;right:0;background-color:rgba(0,0,0,0)}#productList .product .product-image img{-webkit-transition:opacity .3s ease-out;-moz-transition:opacity .3s ease-out;transition:opacity .3s ease-out}#productList .product .product-mark{position:absolute;top:15px;right:0;background:#222;padding:6px 8px;color:#fff;line-height:1em;text-transform:uppercase;-webkit-font-smoothing:antialiased}#productList .product .product-title{font-size:15px;line-height:1.5em;margin-top:1em}#productList .product .product-price{font-size:12px;display:none;line-height:1.5em}#productList .product .product-price .original-price{text-decoration:line-through;opacity:.7;filter:alpha(opacity=70)}#productList .product .product-price .strikeout{text-decoration:line-through}#productList .product .product-image img{will-change:opacity}#productList .product:hover .product-image img{opacity:.8;filter:alpha(opacity=80)}#productList .product .product-quick-view-button-hover-zone{opacity:0;position:absolute;top:0;left:0;width:100%;height:0}#productList .product:hover .product-quick-view-button-hover-zone{opacity:1}#productList .product .product-quick-view-button-container{position:absolute;top:auto;bottom:10%;width:100%;text-align:center}#productList .product:nth-child(3n+1){clear:left}#productList ul.pagination{clear:both;margin-top:15px;margin-left:2.912621359223301%}#productList ul.pagination li{display:inline-block}#productList ul.pagination li.previous-page{text-align:left}#productList ul.pagination li.next-page{text-align:right}.product-list-alignment-center #productList .product-title,.product-list-alignment-center #productList .product-price{text-align:center}.product-item-size-11-square #productList .product .product-image .intrinsic,.product-item-size-11-square #productList .product .product-quick-view-button-hover-zone{padding-bottom:100%}.product-item-size-32-standard #productList .product .product-image .intrinsic,.product-item-size-32-standard #productList .product .product-quick-view-button-hover-zone{padding-bottom:66.666%}.product-item-size-23-standard-vertical #productList .product .product-image .intrinsic,.product-item-size-23-standard-vertical #productList .product .product-quick-view-button-hover-zone{padding-bottom:150%}.product-item-size-43-four-thirds #productList .product .product-image .intrinsic,.product-item-size-43-four-thirds #productList .product .product-quick-view-button-hover-zone{padding-bottom:75%}.product-item-size-169-widescreen #productList .product .product-image .intrinsic,.product-item-size-169-widescreen #productList .product .product-quick-view-button-hover-zone{padding-bottom:56.25%}@media only screen and (min-width:700px){.no-touch .product-list-titles-overlay #productList .product .product-image{margin:0}.no-touch .product-list-titles-overlay #productList .product .product-overlay{position:absolute;top:0;left:0;bottom:0;right:0;background:rgba(0,0,0,.6);color:#fff;-webkit-font-smoothing:antialiased}.no-touch .product-list-titles-overlay #productList .product .product-mark{font-size:12px;line-height:normal}.no-touch .product-list-titles-overlay #productList .product .product-meta{position:absolute;width:80%;margin:0 10%;top:50%}.no-touch .product-list-titles-overlay #productList .product .product-title{font-size:16px;font-weight:700;line-height:1.5em;color:#fff}.no-touch .product-list-titles-overlay #productList .product .product-price{font-size:13px;line-height:normal;color:#fff}.no-touch .product-list-titles-overlay #productList .product .product-overlay{opacity:0;-webkit-transition:opacity .3s ease-out;-moz-transition:opacity .3s ease-out;-ms-transition:opacity .3s ease-out;-o-transition:opacity .3s ease-out;transition:opacity .3s ease-out;filter:alpha(opacity=0)}.no-touch .product-list-titles-overlay #productList .product .product-mark{opacity:1;-webkit-transition:opacity .3s ease-out;-moz-transition:opacity .3s ease-out;-ms-transition:opacity .3s ease-out;-o-transition:opacity .3s ease-out;transition:opacity .3s ease-out;filter:alpha(opacity=100)}.no-touch .product-list-titles-overlay #productList .product .product-meta{opacity:0;-webkit-transition:opacity .35s cubic-bezier(0,0,1,1);-moz-transition:opacity .35s cubic-bezier(0,0,1,1);-ms-transition:opacity .35s cubic-bezier(0,0,1,1);-o-transition:opacity .35s cubic-bezier(0,0,1,1);transition:opacity .35s cubic-bezier(0,0,1,1);filter:alpha(opacity=0)}.no-touch .product-list-titles-overlay #productList .product .product-title{margin-top:5px;-webkit-transition:margin .3s cubic-bezier(0,0,.28,1);-moz-transition:margin .3s cubic-bezier(0,0,.28,1);-ms-transition:margin .3s cubic-bezier(0,0,.28,1);-o-transition:margin .3s cubic-bezier(0,0,.28,1);transition:margin .3s cubic-bezier(0,0,.28,1)}.no-touch .product-list-titles-overlay #productList .product .product-title,.no-touch .product-list-titles-overlay #productList .product .product-price{text-align:center}.no-touch .product-list-titles-overlay #productList .product:hover .product-overlay{opacity:1;filter:alpha(opacity=100)}.no-touch .product-list-titles-overlay #productList .product:hover .product-mark{opacity:0;filter:alpha(opacity=0)}.no-touch .product-list-titles-overlay #productList .product:hover .product-meta{opacity:1;filter:alpha(opacity=100)}.no-touch .product-list-titles-overlay #productList .product:hover .product-title{margin-top:0}}.product-list-titles-under .product-meta{margin-top:0 !important}.show-product-price #productList .product .product-price{display:block}.sqs-style-mode .product-overlay{opacity:1 !important}.sqs-style-mode .product-mark{opacity:0 !important}.sqs-style-mode .product-meta{opacity:1 !important}#productNav{text-transform:uppercase;margin-bottom:30px;display:none}.product-title.mobile{display:none}#productDetails{position:relative;float:right;width:48.5%}#productDetails .product-title{margin:0 0 .5em}#productDetails .product-mark{float:right;background:#222;padding:6px 8px;color:#fff;line-height:1em;text-transform:uppercase;-webkit-font-smoothing:subpixel-antialiased;font-size:12px}#productDetails .product-price{margin:1em 0;font-size:16px;line-height:1.5em}#productDetails .product-price input{width:130px;height:30px;padding-left:5px}#productDetails .product-price .minimum-price{margin-top:3px;margin-left:10px}#productDetails .product-price .original-price{text-decoration:line-through;opacity:.7;filter:alpha(opacity=70)}#productDetails .product-price .strikeout{text-decoration:line-through}#productDetails .product-variants .variant-option{margin:1.2em 0}#productDetails .product-variants .variant-out-of-stock{color:#c00}#productDetails .product-quantity-select{margin-top:1.2em 0}#productDetails input{padding:5px 10px;border:1px solid #ccc;-moz-border-radius:3px;border-radius:3px}.product-sharing{display:none}.product-social-sharing .product-sharing{display:block}#productGallery{width:48.5%;float:left}#productGallery .intrinsic{max-width:100%}#productGallery .wrapper{padding-bottom:100%;position:relative}#productGallery #productSlideshow{position:absolute;top:0;bottom:0;left:0;width:100%;background-color:rgba(0,0,0,0)}#productGallery #productSlideshow .slide{height:100%;width:100%;overflow:hidden;cursor:pointer}#productGallery #productThumbnails{margin-left:-5px;visibility:hidden;overflow:hidden}#productGallery #productThumbnails .slide{width:50px;height:50px;margin:5px 0 0 5px;font-size:0;cursor:pointer;float:left;background-color:rgba(0,0,0,0)}.product-gallery-size-11-square #productGallery .intrinsic .wrapper{padding-bottom:100%}.product-gallery-size-32-standard #productGallery .intrinsic .wrapper{padding-bottom:66.666%}.product-gallery-size-23-standard-vertical #productGallery .intrinsic .wrapper{padding-bottom:150%}.product-gallery-size-43-four-thirds #productGallery .intrinsic .wrapper{padding-bottom:75%}.product-gallery-size-169-widescreen #productGallery .intrinsic .wrapper{padding-bottom:56.25%}.product-description{clear:both;margin-top:24px}.show-product-item-nav #productWrapper #productNav{display:block}.sqs-add-to-cart-button-wrapper{visibility:hidden}.sqs-add-to-cart-button{display:inline-block;width:auto;height:auto;padding:1em 2.5em;color:#fff;background-color:#272727;border-width:0;font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:12px;line-height:1em;font-weight:normal;font-style:normal;text-transform:uppercase;letter-spacing:0px;text-align:center;text-decoration:none;cursor:pointer;outline:none;-webkit-appearance:none;-moz-appearance:none;appearance:none;font-size:13px}.sqs-add-to-cart-button-inner{position:relative}.sqs-add-to-cart-button.cart-adding .sqs-spin{position:absolute;top:50%;margin-top:-12px}.sqs-add-to-cart-button.cart-adding .status-text{display:inline-block;margin-left:35px}.sqs-add-to-cart-button.cart-added .status-text{margin-left:0}.collection-type-products .sqs-add-to-cart-button{margin:20px 0;padding:1.5em 4em !important}.sqs-donate-button{display:inline-block;width:auto;height:auto;padding:1em 2.5em;color:#fff;background-color:#272727;border-width:0;font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:12px;line-height:1em;font-weight:normal;font-style:normal;text-transform:uppercase;letter-spacing:0px;text-align:center;text-decoration:none;cursor:pointer;outline:none;-webkit-appearance:none;-moz-appearance:none;appearance:none}@media only screen and (max-width:700px){#productSummary .product-title{display:none}#productSummary .product-title.mobile{display:block}.product-meta{margin-top:0 !important}#productDetails,#productGallery{width:100%;float:none}#productList{width:100%;margin-left:0;margin-top:0}#productList .product{float:left;margin-left:0;margin-top:0;width:100%;cursor:pointer;margin-bottom:3%}#productList .product .product-image{margin-bottom:3%}#productList .product .product-image .content-fit{position:absolute;top:0;left:0;bottom:0;right:0}#productList .product .product-image img{-webkit-transition:opacity .3s ease-out}.product-quick-view{display:none}}.collection-type-gallery:not(.gallery-design-grid) .arrow.previous-slide:before{font-family:'squarespace-ui-font';font-style:normal;speak:none;font-weight:normal;-webkit-font-smoothing:antialiased;content:"\e000";text-align:center;display:inline-block;vertical-align:middle}.collection-type-gallery:not(.gallery-design-grid) .arrow.previous-slide:before{font-size:16px;width:16px;height:16px;line-height:16px}.collection-type-gallery:not(.gallery-design-grid) .arrow.previous-slide:before{font-size:16px;width:40px;height:40px;line-height:40px}.collection-type-gallery:not(.gallery-design-grid) .arrow.next-slide:before{font-family:'squarespace-ui-font';font-style:normal;speak:none;font-weight:normal;-webkit-font-smoothing:antialiased;content:"\e003";text-align:center;display:inline-block;vertical-align:middle}.collection-type-gallery:not(.gallery-design-grid) .arrow.next-slide:before{font-size:16px;width:16px;height:16px;line-height:16px}.collection-type-gallery:not(.gallery-design-grid) .arrow.next-slide:before{font-size:16px;width:40px;height:40px;line-height:40px}.collection-type-gallery.gallery-design-grid .dots,.collection-type-gallery.gallery-design-grid .thumbnail-wrapper,.collection-type-gallery.gallery-design-grid .circles,.collection-type-gallery.gallery-design-grid .numbers,.collection-type-gallery.gallery-design-grid .simple{display:none}.collection-type-gallery.gallery-design-grid .slide{cursor:pointer}.collection-type-gallery.gallery-design-grid .slide .slide-meta{display:none}.collection-type-gallery.gallery-design-grid .slide>a{display:block;height:100%}.collection-type-gallery.gallery-design-grid.lightbox-style-light .yui3-lightbox2 .sqs-lightbox-overlay{background:#fff}.collection-type-gallery.gallery-design-grid.lightbox-style-light .yui3-lightbox2 .sqs-lightbox-close,.collection-type-gallery.gallery-design-grid.lightbox-style-light .yui3-lightbox2 .sqs-lightbox-previous,.collection-type-gallery.gallery-design-grid.lightbox-style-light .yui3-lightbox2 .sqs-lightbox-next,.collection-type-gallery.gallery-design-grid.lightbox-style-light .yui3-lightbox2 .sqs-lightbox-meta-trigger{color:#111}.collection-type-gallery:not(.gallery-design-grid) .sqs-system-gallery{cursor:pointer;opacity:0;zoom:1;-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";-webkit-transition:opacity .2s ease-out;-moz-transition:opacity .2s ease-out;-ms-transition:opacity .2s ease-out;-o-transition:opacity .2s ease-out;transition:opacity .2s ease-out}.collection-type-gallery:not(.gallery-design-grid) .sqs-system-gallery .arrow,.collection-type-gallery:not(.gallery-design-grid) .sqs-system-gallery .icons span{-moz-user-select:-moz-none;-webkit-user-select:none;-ms-user-select:none;user-select:none}.collection-type-gallery:not(.gallery-design-grid) .sqs-system-gallery .gallery-wrapper{position:relative;width:100%}.collection-type-gallery:not(.gallery-design-grid) .sqs-system-gallery .gallery-wrapper .slides{display:block;width:100%;height:100% !important;-webkit-transition:opacity .2s ease-out;-moz-transition:opacity .2s ease-out;-ms-transition:opacity .2s ease-out;-o-transition:opacity .2s ease-out;transition:opacity .2s ease-out}.collection-type-gallery:not(.gallery-design-grid) .sqs-system-gallery .gallery-wrapper .slides .slide{opacity:0;zoom:1;-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";height:100% !important}.collection-type-gallery:not(.gallery-design-grid) .sqs-system-gallery .gallery-wrapper .slides .slide>a{display:block;height:100%}.collection-type-gallery:not(.gallery-design-grid) .sqs-system-gallery .slides-controls{position:relative;z-index:991;overflow:hidden}.collection-type-gallery:not(.gallery-design-grid) .sqs-system-gallery .arrow{z-index:997;position:absolute;width:100%;height:40px;margin-top:-20px;text-align:center;line-height:40px;font-weight:bold;color:#fff;background:#222;-webkit-transition:opacity .1s ease-in;-moz-transition:opacity .1s ease-in;-ms-transition:opacity .1s ease-in;-o-transition:opacity .1s ease-in;transition:opacity .1s ease-in}.collection-type-gallery:not(.gallery-design-grid) .sqs-system-gallery .arrow.previous-slide{left:0;margin-left:2%;width:40px;height:40px}.collection-type-gallery:not(.gallery-design-grid) .sqs-system-gallery .arrow.next-slide{right:0;margin-right:2%;float:right;width:40px;height:40px}.collection-type-gallery:not(.gallery-design-grid) .sqs-system-gallery .arrow.sqs-disabled{opacity:0}.collection-type-gallery:not(.gallery-design-grid) .sqs-system-gallery .dots,.collection-type-gallery:not(.gallery-design-grid) .sqs-system-gallery .thumbnail-wrapper,.collection-type-gallery:not(.gallery-design-grid) .sqs-system-gallery .circles,.collection-type-gallery:not(.gallery-design-grid) .sqs-system-gallery .numbers,.collection-type-gallery:not(.gallery-design-grid) .sqs-system-gallery .simple{display:none;margin:20px 0}.collection-type-gallery:not(.gallery-design-grid) .sqs-system-gallery .dots.sqs-gallery-controls-disabled,.collection-type-gallery:not(.gallery-design-grid) .sqs-system-gallery .thumbnail-wrapper.sqs-gallery-controls-disabled,.collection-type-gallery:not(.gallery-design-grid) .sqs-system-gallery .circles.sqs-gallery-controls-disabled,.collection-type-gallery:not(.gallery-design-grid) .sqs-system-gallery .numbers.sqs-gallery-controls-disabled,.collection-type-gallery:not(.gallery-design-grid) .sqs-system-gallery .simple.sqs-gallery-controls-disabled{display:none}.collection-type-gallery:not(.gallery-design-grid) .sqs-system-gallery .dots{text-align:center}.collection-type-gallery:not(.gallery-design-grid) .sqs-system-gallery .dots .dot{font-size:30px;margin:0 5px}.collection-type-gallery:not(.gallery-design-grid) .sqs-system-gallery .dots .dot:after{content:"·"}.collection-type-gallery:not(.gallery-design-grid) .sqs-system-gallery .numbers{text-align:center}.collection-type-gallery:not(.gallery-design-grid) .sqs-system-gallery .numbers .number{font-size:12px;margin:0 .5em}.collection-type-gallery:not(.gallery-design-grid) .sqs-system-gallery .circles{font-size:0;position:absolute;bottom:0;text-align:center;z-index:999;width:100%;height:16px;margin:40px 0}.collection-type-gallery:not(.gallery-design-grid) .sqs-system-gallery .circles .circle{display:inline-block;width:10px;height:10px;border:2px solid #fff;margin:0 5px;border-radius:100%;-webkit-border-radius:999px}.collection-type-gallery:not(.gallery-design-grid) .sqs-system-gallery .circles .circle.sqs-active-slide{background:#fff}.collection-type-gallery:not(.gallery-design-grid) .sqs-system-gallery .simple{text-align:center;font-size:12px}.collection-type-gallery:not(.gallery-design-grid) .sqs-system-gallery .simple .previous.sqs-disabled,.collection-type-gallery:not(.gallery-design-grid) .sqs-system-gallery .simple .next.sqs-disabled{opacity:.5}.collection-type-gallery:not(.gallery-design-grid) .sqs-system-gallery .simple .current-index{letter-spacing:2px}.collection-type-gallery:not(.gallery-design-grid) .sqs-system-gallery .simple .current-index:after{content:" / "}.collection-type-gallery:not(.gallery-design-grid) .sqs-system-gallery .simple .previous{float:left}.collection-type-gallery:not(.gallery-design-grid) .sqs-system-gallery .simple .previous:after{content:"Previous"}.collection-type-gallery:not(.gallery-design-grid) .sqs-system-gallery .simple .next{float:right}.collection-type-gallery:not(.gallery-design-grid) .sqs-system-gallery .simple .next:after{content:"Next"}.collection-type-gallery:not(.gallery-design-grid) .sqs-system-gallery .dots .dot,.collection-type-gallery:not(.gallery-design-grid) .sqs-system-gallery .numbers .number,.collection-type-gallery:not(.gallery-design-grid) .sqs-system-gallery .thumbnail-wrapper .thumbnail{opacity:.5}.collection-type-gallery:not(.gallery-design-grid) .sqs-system-gallery .dots .dot.sqs-active-slide,.collection-type-gallery:not(.gallery-design-grid) .sqs-system-gallery .numbers .number.sqs-active-slide,.collection-type-gallery:not(.gallery-design-grid) .sqs-system-gallery .thumbnail-wrapper .thumbnail.sqs-active-slide{opacity:1}.collection-type-gallery:not(.gallery-design-grid) .sqs-system-gallery .thumbnail-wrapper .thumbnail{width:100px !important}.collection-type-gallery:not(.gallery-design-grid) .sqs-system-gallery .slide-meta{display:none;position:absolute;width:100%;bottom:0;z-index:996;height:auto;background:rgba(0,0,0,.7);padding:24px 0}.collection-type-gallery:not(.gallery-design-grid) .sqs-system-gallery .slide-meta .title{margin:0;font-size:14px;color:#fff;padding:0 2%}.collection-type-gallery:not(.gallery-design-grid) .sqs-system-gallery .slide-meta .description{margin-top:.5em;display:inline-block;padding:0 2%}.collection-type-gallery:not(.gallery-design-grid) .sqs-system-gallery .slide-meta .description p,.collection-type-gallery:not(.gallery-design-grid) .sqs-system-gallery .slide-meta .clickthrough a{font-size:13px;line-height:1.4em;color:#999}.collection-type-gallery:not(.gallery-design-grid) .sqs-system-gallery .slide-meta .description p,.collection-type-gallery:not(.gallery-design-grid) .sqs-system-gallery .slide-meta .clickthrough{margin:0}.collection-type-gallery:not(.gallery-design-grid) .sqs-system-gallery .slide-meta .description p a{color:#999;text-decoration:underline}.collection-type-gallery:not(.gallery-design-grid) .sqs-system-gallery .slide-meta .clickthrough{display:inline-block}.collection-type-gallery:not(.gallery-design-grid) .sqs-system-gallery .slide-meta .clickthrough a{border-bottom:1px solid}.collection-type-gallery:not(.gallery-design-grid) .sqs-system-gallery .slide-meta .clickthrough a:before{content:"Read more"}.collection-type-gallery:not(.gallery-design-grid) .sqs-system-gallery.sqs-system-gallery-init{position:relative}.collection-type-gallery:not(.gallery-design-grid) .sqs-system-gallery.sqs-system-gallery-init>*{display:none}.collection-type-gallery:not(.gallery-design-grid) .sqs-system-gallery.sqs-system-gallery-ready{opacity:.01;opacity:1;zoom:1;-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=10)"}.collection-type-gallery:not(.gallery-design-grid) .sqs-system-gallery.sqs-system-gallery-interaction .arrow{opacity:0}.collection-type-gallery:not(.gallery-design-grid) .sqs-system-gallery.sqs-system-gallery-interaction.sqs-system-gallery-hover-slides-left .arrow.previous-slide:not(.sqs-disabled),.collection-type-gallery:not(.gallery-design-grid) .sqs-system-gallery.sqs-system-gallery-video-iframe .arrow.previous-slide:not(.sqs-disabled){opacity:1}.collection-type-gallery:not(.gallery-design-grid) .sqs-system-gallery.sqs-system-gallery-interaction.sqs-system-gallery-hover-slides-right .arrow.next-slide:not(.sqs-disabled),.collection-type-gallery:not(.gallery-design-grid) .sqs-system-gallery.sqs-system-gallery-video-iframe .arrow.next-slide:not(.sqs-disabled){opacity:1}.collection-type-gallery:not(.gallery-design-grid).dialog-open .arrow.previous-slide:not(.sqs-disabled){opacity:1}.collection-type-gallery:not(.gallery-design-grid).dialog-open .arrow.next-slide:not(.sqs-disabled){opacity:1}.collection-type-gallery:not(.gallery-design-grid).gallery-navigation-thumbnails .sqs-system-gallery .thumbnail-wrapper{display:block}.collection-type-gallery:not(.gallery-design-grid).gallery-navigation-bullets .sqs-system-gallery .dots{display:block}.collection-type-gallery:not(.gallery-design-grid).gallery-navigation-numbers .sqs-system-gallery .numbers{display:block}.collection-type-gallery:not(.gallery-design-grid).gallery-navigation-circles .sqs-system-gallery .slide-meta{bottom:auto;top:0}.collection-type-gallery:not(.gallery-design-grid).gallery-navigation-circles .sqs-system-gallery .circles{display:block}.collection-type-gallery:not(.gallery-design-grid).gallery-navigation-simple .sqs-system-gallery .simple{display:block}.collection-type-gallery:not(.gallery-design-grid).gallery-info-overlay-always-show .sqs-system-gallery .slide-meta.show{display:block}.collection-type-gallery:not(.gallery-design-grid).gallery-info-overlay-show-on-hover .slide:hover .slide-meta.show{display:block}.collection-type-gallery:not(.gallery-design-grid):not(.gallery-show-arrows) .sqs-system-gallery .arrow{opacity:0 !important}.collection-type-gallery:not(.gallery-design-grid).gallery-aspect-ratio-11-square .sqs-system-gallery.sqs-system-gallery-init{padding-bottom:100%}.collection-type-gallery:not(.gallery-design-grid).gallery-aspect-ratio-11-square .thumbnail-wrapper{height:100px}.collection-type-gallery:not(.gallery-design-grid).gallery-aspect-ratio-32-standard .sqs-system-gallery.sqs-system-gallery-init{padding-bottom:66.66%}.collection-type-gallery:not(.gallery-design-grid).gallery-aspect-ratio-32-standard .thumbnail-wrapper{height:66px}.collection-type-gallery:not(.gallery-design-grid).gallery-aspect-ratio-43-four-thirds .sqs-system-gallery.sqs-system-gallery-init{padding-bottom:75%}.collection-type-gallery:not(.gallery-design-grid).gallery-aspect-ratio-43-four-thirds .thumbnail-wrapper{height:75px}.collection-type-gallery:not(.gallery-design-grid).gallery-aspect-ratio-169-widescreen .sqs-system-gallery.sqs-system-gallery-init{padding-bottom:56.25%}.collection-type-gallery:not(.gallery-design-grid).gallery-aspect-ratio-169-widescreen .thumbnail-wrapper{height:56.25px}.collection-type-gallery:not(.gallery-design-grid).gallery-arrow-style-circular .sqs-system-gallery .arrow{border-radius:100%;-webkit-border-radius:999px}.collection-type-gallery:not(.gallery-design-grid).gallery-arrow-style-round-corners .sqs-system-gallery .arrow{border-radius:10%;-webkit-border-radius:4px}.collection-type-gallery:not(.gallery-design-grid).gallery-arrow-style-rectangular .sqs-system-gallery .arrow{border-radius:0;-webkit-border-radius:0}.collection-type-gallery:not(.gallery-design-grid).gallery-arrow-style-no-background .sqs-system-gallery .arrow{border-radius:0;background:none;-webkit-border-radius:0}@media screen and (max-width:480px){.collection-type-gallery .sqs-system-gallery .slide-meta{display:none !important}}.sqs-gallery-block-stacked{padding:0;margin:0}.sqs-gallery-block-stacked a{border:0}.sqs-gallery-block-stacked .image-wrapper{margin:0 0 1px 0;line-height:1px}.sqs-gallery-block-stacked .image-wrapper img{width:100%}.sqs-gallery-block-stacked .meta{display:none;max-width:28em}.sqs-gallery-block-stacked.sqs-gallery-block-show-meta .meta{display:block}.sqs-gallery-block-stacked .meta-inside{margin-bottom:28px;margin-top:14px}.sqs-gallery-block-stacked .meta-title{margin-bottom:.3em}.sqs-gallery-block-stacked .meta-description{font-size:.9em;line-height:1.5em}.sqs-gallery-block-stacked .meta-description p{margin-bottom:0;margin-top:0}.sqs-gallery-block-slideshow{position:relative;background-color:rgba(175,175,175,.1)}.sqs-gallery-block-slideshow .slide>a{position:absolute;top:0;left:0;width:100%;height:100%;display:block}.sqs-gallery-block-slideshow .slide .meta{opacity:0}.sqs-gallery-block-slideshow .meta{position:absolute;opacity:0;background-color:#111;background-color:rgba(0,0,0,.3)}.sqs-gallery-block-slideshow .meta .meta-title{color:#fff}.sqs-gallery-block-slideshow .meta .meta-title{font-size:18px;line-height:1.2em;letter-spacing:1px}.sqs-gallery-block-slideshow .meta .meta-title+.meta-description{margin-top:.3em}.sqs-gallery-block-slideshow .meta .meta-description,.sqs-gallery-block-slideshow .meta .meta-description p{color:#ddd;color:rgba(255,255,255,.95);font-size:14px;line-height:1.5em}.sqs-gallery-block-slideshow .meta .meta-description strong{color:inherit}.sqs-gallery-block-slideshow .meta .meta-description *:first-child{margin-top:0}.sqs-gallery-block-slideshow .meta .meta-description *:last-child{margin-bottom:0}.sqs-gallery-block-slideshow .meta-inside{padding:25px}.sqs-gallery-block-slideshow .meta a,.sqs-gallery-block-slideshow .meta a:hover{color:#fff;text-decoration:underline}.sqs-gallery-block-slideshow .meta.overflow{overflow-y:auto}.sqs-gallery-block-slideshow .slide.loaded .meta{opacity:1}.sqs-gallery-block-slideshow.sqs-gallery-block-meta-hover .meta{opacity:0 !important;-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"}.sqs-gallery-block-slideshow.sqs-gallery-block-meta-hover .slide:hover .meta{opacity:1 !important;-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=70)"}.sqs-gallery-block-slideshow .meta{display:none;-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"}.sqs-gallery-block-slideshow.sqs-gallery-block-show-meta .sqs-active-slide .meta{display:block;opacity:1;-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=70)"}.sqs-gallery-block-slideshow.sqs-gallery-block-show-meta .mobile-view .slide.loaded>a{line-height:0;height:auto;position:static}.sqs-gallery-block-slideshow.sqs-gallery-block-show-meta .mobile-view .slide.loaded .sqs-video-wrapper{position:static}.sqs-gallery-block-slideshow.sqs-gallery-block-show-meta .mobile-view .slide.loaded .meta{background-color:transparent;color:inherit;padding:20px 0 10px 0;margin:0;max-width:none !important;opacity:1 !important;position:static !important}.sqs-gallery-block-slideshow.sqs-gallery-block-show-meta .mobile-view .slide.loaded .meta .meta-inside{padding:0}.sqs-gallery-block-slideshow.sqs-gallery-block-show-meta .mobile-view .slide.loaded .meta .meta-title,.sqs-gallery-block-slideshow.sqs-gallery-block-show-meta .mobile-view .slide.loaded .meta .meta-description,.sqs-gallery-block-slideshow.sqs-gallery-block-show-meta .mobile-view .slide.loaded .meta .meta-description p{color:inherit}.sqs-gallery-block-slideshow.sqs-gallery-block-show-meta .mobile-view .slide.loaded .meta .meta-title{font-size:.9em}.sqs-gallery-block-slideshow.sqs-gallery-block-show-meta .mobile-view .slide.loaded .meta .meta-description{font-size:.9em}.sqs-gallery-block-slideshow.sqs-gallery-block-show-meta .mobile-view .slide.loaded .meta .meta-description p{font-size:1em;line-height:1.3em}.sqs-gallery-block-slideshow .slide.video-playing .meta{display:none}.sqs-gallery-block-slideshow.sqs-gallery-block-meta-position-top .meta,.sqs-gallery-block-slideshow.sqs-gallery-block-meta-position-top-left .meta,.sqs-gallery-block-slideshow.sqs-gallery-block-meta-position-top-right .meta{top:0px}.sqs-gallery-block-slideshow.sqs-gallery-block-meta-position-top-left .meta,.sqs-gallery-block-slideshow.sqs-gallery-block-meta-position-top-right .meta{max-width:50%;margin:20px}.sqs-gallery-block-slideshow.sqs-gallery-block-meta-position-center .meta{max-width:50%;top:50%;left:50%;text-align:center}.sqs-gallery-block-slideshow.sqs-gallery-block-meta-position-bottom .meta,.sqs-gallery-block-slideshow.sqs-gallery-block-meta-position-bottom-left .meta,.sqs-gallery-block-slideshow.sqs-gallery-block-meta-position-bottom-right .meta{bottom:0px}.sqs-gallery-block-slideshow.sqs-gallery-block-meta-position-bottom .meta{background:-moz-linear-gradient(top,rgba(0,0,0,0) 0%,rgba(30,30,30,.3) 100%);background:-webkit-gradient(linear,left top,left bottom,color-stop(0%,rgba(0,0,0,0)),color-stop(100%,rgba(30,30,30,.3)));background:-webkit-linear-gradient(top,rgba(0,0,0,0) 0%,rgba(30,30,30,.3) 100%);background:-o-linear-gradient(top,rgba(0,0,0,0) 0%,rgba(30,30,30,.3) 100%);background:-ms-linear-gradient(top,rgba(0,0,0,0) 0%,rgba(30,30,30,.3) 100%);background:linear-gradient(to bottom,rgba(0,0,0,0) 0%,rgba(30,30,30,.3) 100%)}.sqs-gallery-block-slideshow.sqs-gallery-block-meta-position-bottom .meta-inside{padding:30px 20px 15px}.sqs-gallery-block-slideshow.sqs-gallery-block-meta-position-bottom-left .meta,.sqs-gallery-block-slideshow.sqs-gallery-block-meta-position-bottom-right .meta{max-width:50%;margin:20px}.sqs-gallery-block-slider{position:relative;height:100%}.sqs-gallery-block-grid{overflow:hidden}.sqs-gallery-block-grid.sqs-gallery-thumbnails-per-row-1 .sqs-gallery-design-grid-slide{width:100%}.sqs-gallery-block-grid.sqs-gallery-thumbnails-per-row-1 .sqs-gallery-design-grid-slide:nth-child(1n + 1){clear:left}.sqs-gallery-block-grid.sqs-gallery-thumbnails-per-row-2 .sqs-gallery-design-grid-slide{width:50%}.sqs-gallery-block-grid.sqs-gallery-thumbnails-per-row-2 .sqs-gallery-design-grid-slide:nth-child(2n + 1){clear:left}.sqs-gallery-block-grid.sqs-gallery-thumbnails-per-row-3 .sqs-gallery-design-grid-slide{width:33.333333333333336%}.sqs-gallery-block-grid.sqs-gallery-thumbnails-per-row-3 .sqs-gallery-design-grid-slide:nth-child(3n + 1){clear:left}.sqs-gallery-block-grid.sqs-gallery-thumbnails-per-row-4 .sqs-gallery-design-grid-slide{width:25%}.sqs-gallery-block-grid.sqs-gallery-thumbnails-per-row-4 .sqs-gallery-design-grid-slide:nth-child(4n + 1){clear:left}.sqs-gallery-block-grid.sqs-gallery-thumbnails-per-row-5 .sqs-gallery-design-grid-slide{width:20%}.sqs-gallery-block-grid.sqs-gallery-thumbnails-per-row-5 .sqs-gallery-design-grid-slide:nth-child(5n + 1){clear:left}.sqs-gallery-block-grid.sqs-gallery-thumbnails-per-row-6 .sqs-gallery-design-grid-slide{width:16.666666666666668%}.sqs-gallery-block-grid.sqs-gallery-thumbnails-per-row-6 .sqs-gallery-design-grid-slide:nth-child(6n + 1){clear:left}.sqs-gallery-block-grid.sqs-gallery-thumbnails-per-row-7 .sqs-gallery-design-grid-slide{width:14.285714285714286%}.sqs-gallery-block-grid.sqs-gallery-thumbnails-per-row-7 .sqs-gallery-design-grid-slide:nth-child(7n + 1){clear:left}.sqs-gallery-block-grid.sqs-gallery-thumbnails-per-row-8 .sqs-gallery-design-grid-slide{width:12.5%}.sqs-gallery-block-grid.sqs-gallery-thumbnails-per-row-8 .sqs-gallery-design-grid-slide:nth-child(8n + 1){clear:left}.sqs-gallery-block-grid.sqs-gallery-thumbnails-per-row-9 .sqs-gallery-design-grid-slide{width:11.11111111111111%}.sqs-gallery-block-grid.sqs-gallery-thumbnails-per-row-9 .sqs-gallery-design-grid-slide:nth-child(9n + 1){clear:left}.sqs-gallery-block-grid.sqs-gallery-thumbnails-per-row-10 .sqs-gallery-design-grid-slide{width:10%}.sqs-gallery-block-grid.sqs-gallery-thumbnails-per-row-10 .sqs-gallery-design-grid-slide:nth-child(10n + 1){clear:left}.sqs-gallery-block-grid.sqs-gallery-aspect-ratio-square .slide .margin-wrapper a.image-slide-anchor,.sqs-gallery-block-grid.sqs-gallery-aspect-ratio-square .slide .margin-wrapper .content-wrapper,.sqs-gallery-block-grid.sqs-gallery-aspect-ratio-square .slide .margin-wrapper .content-wrapper.content-fill .sqs-video-wrapper{padding-bottom:100%}.sqs-gallery-block-grid.sqs-gallery-aspect-ratio-standard .slide .margin-wrapper a.image-slide-anchor,.sqs-gallery-block-grid.sqs-gallery-aspect-ratio-standard .slide .margin-wrapper .content-wrapper,.sqs-gallery-block-grid.sqs-gallery-aspect-ratio-standard .slide .margin-wrapper .content-wrapper.content-fill .sqs-video-wrapper{padding-bottom:66.666%}.sqs-gallery-block-grid.sqs-gallery-aspect-ratio-standard-vertical .slide .margin-wrapper a.image-slide-anchor,.sqs-gallery-block-grid.sqs-gallery-aspect-ratio-standard-vertical .slide .margin-wrapper .content-wrapper,.sqs-gallery-block-grid.sqs-gallery-aspect-ratio-standard-vertical .slide .margin-wrapper .content-wrapper.content-fill .sqs-video-wrapper{padding-bottom:150%}.sqs-gallery-block-grid.sqs-gallery-aspect-ratio-four-three .slide .margin-wrapper a.image-slide-anchor,.sqs-gallery-block-grid.sqs-gallery-aspect-ratio-four-three .slide .margin-wrapper .content-wrapper,.sqs-gallery-block-grid.sqs-gallery-aspect-ratio-four-three .slide .margin-wrapper .content-wrapper.content-fill .sqs-video-wrapper{padding-bottom:75%}.sqs-gallery-block-grid.sqs-gallery-aspect-ratio-three-four-vertical .slide .margin-wrapper a.image-slide-anchor,.sqs-gallery-block-grid.sqs-gallery-aspect-ratio-three-four-vertical .slide .margin-wrapper .content-wrapper,.sqs-gallery-block-grid.sqs-gallery-aspect-ratio-three-four-vertical .slide .margin-wrapper .content-wrapper.content-fill .sqs-video-wrapper{padding-bottom:133.333%}.sqs-gallery-block-grid.sqs-gallery-aspect-ratio-widescreen .slide .margin-wrapper a.image-slide-anchor,.sqs-gallery-block-grid.sqs-gallery-aspect-ratio-widescreen .slide .margin-wrapper .content-wrapper,.sqs-gallery-block-grid.sqs-gallery-aspect-ratio-widescreen .slide .margin-wrapper .content-wrapper.content-fill .sqs-video-wrapper{padding-bottom:56.25%}.sqs-gallery-block-grid.sqs-gallery-aspect-ratio-anamorphic-widescreen .slide .margin-wrapper a.image-slide-anchor,.sqs-gallery-block-grid.sqs-gallery-aspect-ratio-anamorphic-widescreen .slide .margin-wrapper .content-wrapper,.sqs-gallery-block-grid.sqs-gallery-aspect-ratio-anamorphic-widescreen .slide .margin-wrapper .content-wrapper.content-fill .sqs-video-wrapper{padding-bottom:41.666%}.sqs-gallery-block-grid .slide{float:left;width:25%}.sqs-gallery-block-grid .slide .margin-wrapper{position:relative}.sqs-gallery-block-grid .slide .margin-wrapper a.image-slide-anchor{padding-bottom:100%;width:100%;height:0;display:block;cursor:default;border-bottom:none}.sqs-gallery-block-grid .slide .margin-wrapper a.image-slide-anchor img{display:inline-block;cursor:pointer}.sqs-gallery-block-grid .slide .margin-wrapper .content-wrapper{padding-bottom:100%;width:100%;display:block}.sqs-gallery-block-grid .slide .margin-wrapper .content-wrapper.content-fill .sqs-video-wrapper{height:0;padding-bottom:100%}.sqs-gallery-block-grid .slide .margin-wrapper .content-wrapper.video-lightbox-wrapper{cursor:pointer}.sqs-gallery-block-grid .slide .margin-wrapper .content-wrapper.video-lightbox-wrapper .sqs-video-wrapper .intrinsic{pointer-events:none}.sqs-gallery-block-grid .slide .margin-wrapper .image-slide-title{text-align:center;display:none}.sqs-gallery-block-grid .slide .meta{position:relative}.sqs-gallery-block-grid .slide .meta h1{font-size:12px;letter-spacing:normal;margin:0}.sqs-gallery-block-grid.sqs-gallery-block-meta-only-title .margin-wrapper .image-slide-title{display:block;text-align:center;font-size:14px;margin-top:.5em;width:100%;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}.sqs-block .sqs-gallery-thumbnails .sqs-video-thumbnail{position:relative}.sqs-block .sqs-gallery-thumbnails .sqs-video-thumbnail img{height:100%}.sqs-block .sqs-gallery-thumbnails .sqs-video-thumbnail .sqs-video-thumbnail-icon{opacity:1;position:absolute;top:50%;left:50%;background-image:url('//static.squarespace.com/universal/images-v6/icons/icon-video-24-light-solid.png');background-position:center center;height:24px;width:24px;margin-left:-12px;margin-top:-12px}.sqs-block .sqs-gallery-thumbnails .sqs-video-thumbnail.no-image .sqs-video-thumbnail-inner{background-image:url('//static.squarespace.com/universal/images-v6/icons/icon-video-24-light-solid.png');background-position:center center;background-repeat:no-repeat}.sqs-block .sqs-gallery-thumbnails .sqs-video-thumbnail:not(.no-image).loading .sqs-video-thumbnail-icon{opacity:0}.sqs-block .sqs-gallery-thumbnails .sqs-video-thumbnail .sqs-video-thumbnail-inner{height:100%;background:#000}.sqs-block .sqs-gallery-thumbnails .sqs-gallery-design-strip-slide{opacity:.5}.sqs-block .sqs-gallery-thumbnails .sqs-gallery-design-strip-slide.sqs-active-slide{opacity:1}@media only screen and (max-width:480px){.sqs-gallery-block-slideshow .meta{display:none !important}}@media only screen and (device-width:768px){.sqs-gallery-block-slideshow.sqs-gallery-block-show-meta .meta{opacity:1 !important}}.sqs-block.gallery-block .sqs-helper .sqs-handle-bottom{display:none}.sqs-block.gallery-block.sized .sqs-helper .sqs-handle-bottom{display:block}.sqs-layout.editing .sqs-block.gallery-block:hover .sqs-gallery-block-slideshow.sqs-gallery-block-meta-hover .meta{opacity:1 !important}.sqs-gallery-dummy-images{background-color:transparent}.sqs-gallery-dummy-images img,.sqs-gallery-dummy-images+.sqs-gallery-thumbnails img{background-color:rgba(0,0,0,.03)}.summary-block ul{list-style-type:none;margin:0;padding:0}.summary-block .summary-item:not(:last-child){margin-bottom:24px}.summary-block .summary-collection-title{display:none}.summary-block .summary-thumbnail{overflow:hidden;height:150px}.summary-block .summary-title{font-size:1.2em}.summary-block .summary-content-below-thumbnail .summary-title{margin:1em 0 0 0}.summary-block .summary-excerpt{margin:.75em 0}.summary-block .summary-excerpt p{font-size:.9em}.summary-block .timestamp{display:block;font-size:.8em;text-transform:uppercase}.summary-block .summary-more-link{display:none;margin-left:3px}.sqs-block-collectionlink .collectionlink-thumbnail,.link-block .collectionlink-thumbnail{overflow:hidden;height:150px}.sqs-block-collectionlink .collectionlink-thumbnail a,.link-block .collectionlink-thumbnail a{display:block;height:100%}.sqs-block-collectionlink .collectionlink-title,.link-block .collectionlink-title{font-size:1.2em}.sqs-block-collectionlink .collectionlink-title a,.link-block .collectionlink-title a{display:block}.sqs-block-collectionlink .collectionlink-content-below-thumbnail .collectionlink-title,.link-block .collectionlink-content-below-thumbnail .collectionlink-title{margin:1em 0 0 0}.sqs-block-collectionlink .collectionlink-description,.link-block .collectionlink-description{margin:.75em 0}.sqs-block-collectionlink .collectionlink-description p,.link-block .collectionlink-description p{font-size:.9em}.sqs-block-collectionlink .collection-more-link,.link-block .collection-more-link{display:none;margin-left:3px}.sqs-svg-icon--wrapper{position:relative;cursor:pointer;overflow:hidden;display:inline-block;width:32px;height:32px;text-decoration:none;-webkit-transform:translatez(0);-moz-transform:translatez(0);-ms-transform:translatez(0);-o-transform:translatez(0);transform:translatez(0)}.sqs-svg-icon--wrapper>div{position:absolute;top:0;left:0;width:100%;height:100%}.sqs-svg-icon--wrapper svg{position:absolute;top:0;left:0;width:100%;height:100%}.sqs-svg-icon--wrapper{border-color:transparent}.social-icons-size-extra-small.social-icons-style-regular .sqs-svg-icon--wrapper{width:16px;height:16px}.social-icons-size-extra-small.social-icons-style-regular.social-icon-alignment-left .sqs-svg-icon--wrapper{margin:0 10px 0 0}.social-icons-size-extra-small.social-icons-style-regular.social-icon-alignment-right .sqs-svg-icon--wrapper{margin:0 0 0 10px}.social-icons-size-extra-small.social-icons-style-regular.social-icon-alignment-center .sqs-svg-icon--wrapper{margin:0 5px}.social-icons-size-small.social-icons-style-regular .sqs-svg-icon--wrapper{width:20px;height:20px}.social-icons-size-small.social-icons-style-regular.social-icon-alignment-left .sqs-svg-icon--wrapper{margin:0 12px 0 0}.social-icons-size-small.social-icons-style-regular.social-icon-alignment-right .sqs-svg-icon--wrapper{margin:0 0 0 12px}.social-icons-size-small.social-icons-style-regular.social-icon-alignment-center .sqs-svg-icon--wrapper{margin:0 6px}.social-icons-size-medium.social-icons-style-regular .sqs-svg-icon--wrapper{width:24px;height:24px}.social-icons-size-medium.social-icons-style-regular.social-icon-alignment-left .sqs-svg-icon--wrapper{margin:0 14px 0 0}.social-icons-size-medium.social-icons-style-regular.social-icon-alignment-right .sqs-svg-icon--wrapper{margin:0 0 0 14px}.social-icons-size-medium.social-icons-style-regular.social-icon-alignment-center .sqs-svg-icon--wrapper{margin:0 7px}.social-icons-size-large.social-icons-style-regular .sqs-svg-icon--wrapper{width:28px;height:28px}.social-icons-size-large.social-icons-style-regular.social-icon-alignment-left .sqs-svg-icon--wrapper{margin:0 16px 0 0}.social-icons-size-large.social-icons-style-regular.social-icon-alignment-right .sqs-svg-icon--wrapper{margin:0 0 0 16px}.social-icons-size-large.social-icons-style-regular.social-icon-alignment-center .sqs-svg-icon--wrapper{margin:0 8px}.social-icons-size-extra-large.social-icons-style-regular .sqs-svg-icon--wrapper{width:32px;height:32px}.social-icons-size-extra-large.social-icons-style-regular.social-icon-alignment-left .sqs-svg-icon--wrapper{margin:0 18px 0 0}.social-icons-size-extra-large.social-icons-style-regular.social-icon-alignment-right .sqs-svg-icon--wrapper{margin:0 0 0 18px}.social-icons-size-extra-large.social-icons-style-regular.social-icon-alignment-center .sqs-svg-icon--wrapper{margin:0 9px}.social-icons-size-extra-small.social-icons-style-border .sqs-svg-icon--wrapper,.social-icons-size-extra-small.social-icons-style-knockout .sqs-svg-icon--wrapper,.social-icons-size-extra-small.social-icons-style-solid .sqs-svg-icon--wrapper{width:24px;height:24px}.social-icons-size-extra-small.social-icon-alignment-left .sqs-svg-icon--wrapper{margin:0 6px 0 0}.social-icons-size-extra-small.social-icon-alignment-right .sqs-svg-icon--wrapper{margin:0 0 0 6px}.social-icons-size-extra-small.social-icon-alignment-center .sqs-svg-icon--wrapper{margin:0 3px}.social-icons-size-small.social-icons-style-border .sqs-svg-icon--wrapper,.social-icons-size-small.social-icons-style-knockout .sqs-svg-icon--wrapper,.social-icons-size-small.social-icons-style-solid .sqs-svg-icon--wrapper{width:28px;height:28px}.social-icons-size-small.social-icon-alignment-left .sqs-svg-icon--wrapper{margin:0 8px 0 0}.social-icons-size-small.social-icon-alignment-right .sqs-svg-icon--wrapper{margin:0 0 0 8px}.social-icons-size-small.social-icon-alignment-center .sqs-svg-icon--wrapper{margin:0 4px}.social-icons-size-medium.social-icons-style-border .sqs-svg-icon--wrapper,.social-icons-size-medium.social-icons-style-knockout .sqs-svg-icon--wrapper,.social-icons-size-medium.social-icons-style-solid .sqs-svg-icon--wrapper{width:32px;height:32px}.social-icons-size-medium.social-icon-alignment-left .sqs-svg-icon--wrapper{margin:0 8px 0 0}.social-icons-size-medium.social-icon-alignment-right .sqs-svg-icon--wrapper{margin:0 0 0 8px}.social-icons-size-medium.social-icon-alignment-center .sqs-svg-icon--wrapper{margin:0 4px}.social-icons-size-large.social-icons-style-border .sqs-svg-icon--wrapper,.social-icons-size-large.social-icons-style-knockout .sqs-svg-icon--wrapper,.social-icons-size-large.social-icons-style-solid .sqs-svg-icon--wrapper{width:36px;height:36px}.social-icons-size-large.social-icon-alignment-left .sqs-svg-icon--wrapper{margin:0 10px 0 0}.social-icons-size-large.social-icon-alignment-right .sqs-svg-icon--wrapper{margin:0 0 0 10px}.social-icons-size-large.social-icon-alignment-center .sqs-svg-icon--wrapper{margin:0 5px}.social-icons-size-extra-large.social-icons-style-border .sqs-svg-icon--wrapper,.social-icons-size-extra-large.social-icons-style-knockout .sqs-svg-icon--wrapper,.social-icons-size-extra-large.social-icons-style-solid .sqs-svg-icon--wrapper{width:48px;height:48px}.social-icons-size-extra-large.social-icon-alignment-left .sqs-svg-icon--wrapper{margin:0 12px 0 0}.social-icons-size-extra-large.social-icon-alignment-right .sqs-svg-icon--wrapper{margin:0 0 0 12px}.social-icons-size-extra-large.social-icon-alignment-center .sqs-svg-icon--wrapper{margin:0 6px}.social-icons-shape-square .sqs-svg-icon--wrapper{border-radius:0}.social-icons-style-border.social-icons-shape-circle .sqs-svg-icon--wrapper,.social-icons-style-solid.social-icons-shape-circle .sqs-svg-icon--wrapper,.social-icons-style-knockout.social-icons-shape-circle .sqs-svg-icon--wrapper{border-radius:50%}.social-icons-style-border.social-icons-shape-rounded .sqs-svg-icon--wrapper,.social-icons-style-solid.social-icons-shape-rounded .sqs-svg-icon--wrapper,.social-icons-style-knockout.social-icons-shape-rounded .sqs-svg-icon--wrapper{border-radius:15%}.social-icons-style-border .sqs-svg-icon--wrapper{border:2px solid;box-sizing:border-box}.social-icons-style-regular .sqs-svg-icon--wrapper>div{-webkit-transform:scale(2);-moz-transform:scale(2);-ms-transform:scale(2);-o-transform:scale(2);transform:scale(2)}.social-icons-color-standard.social-icons-style-regular .fivehundredpix .sqs-use--icon{fill:#0099e5}.social-icons-color-standard.social-icons-style-regular .fivehundredpix .sqs-use--background,.social-icons-color-standard.social-icons-style-regular .fivehundredpix .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .fivehundredpix .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .fivehundredpix .sqs-use--icon{fill:rgba(0,153,229,.4)}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .fivehundredpix:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .fivehundredpix:hover .sqs-use--icon{fill:#0099e5}.social-icons-color-standard.social-icons-style-border .fivehundredpix{border-color:#0099e5}.social-icons-color-standard.social-icons-style-border .fivehundredpix .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-border .fivehundredpix .sqs-use--icon{fill:#0099e5}.social-icons-color-standard.social-icons-style-border .fivehundredpix .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-border .fivehundredpix:hover{background-color:#0099e5}.social-icons-color-standard.social-icons-style-border .fivehundredpix:hover .sqs-use--icon{fill:#fff}.social-icons-color-standard.social-icons-style-knockout .fivehundredpix .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .fivehundredpix .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .fivehundredpix .sqs-use--mask{fill:#0099e5}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .fivehundredpix .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .fivehundredpix .sqs-use--mask{fill:rgba(0,153,229,.4)}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .fivehundredpix:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .fivehundredpix:hover .sqs-use--mask{fill:#0099e5}.social-icons-color-standard.social-icons-style-solid .fivehundredpix .sqs-use--mask{fill:#0099e5}.social-icons-color-standard.social-icons-style-solid .fivehundredpix .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-solid .fivehundredpix .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .fivehundredpix .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .fivehundredpix .sqs-use--mask{fill:rgba(0,153,229,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .fivehundredpix .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .fivehundredpix .sqs-use--icon{fill:rgba(255,255,255,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .fivehundredpix .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .fivehundredpix .sqs-use--background{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .fivehundredpix:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .fivehundredpix:hover .sqs-use--mask{fill:#0099e5}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .fivehundredpix:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .fivehundredpix:hover .sqs-use--icon{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .fivehundredpix:hover .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .fivehundredpix:hover .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-regular .bandsintown .sqs-use--icon{fill:#00b4b3}.social-icons-color-standard.social-icons-style-regular .bandsintown .sqs-use--background,.social-icons-color-standard.social-icons-style-regular .bandsintown .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .bandsintown .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .bandsintown .sqs-use--icon{fill:rgba(0,180,179,.4)}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .bandsintown:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .bandsintown:hover .sqs-use--icon{fill:#00b4b3}.social-icons-color-standard.social-icons-style-border .bandsintown{border-color:#00b4b3}.social-icons-color-standard.social-icons-style-border .bandsintown .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-border .bandsintown .sqs-use--icon{fill:#00b4b3}.social-icons-color-standard.social-icons-style-border .bandsintown .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-border .bandsintown:hover{background-color:#00b4b3}.social-icons-color-standard.social-icons-style-border .bandsintown:hover .sqs-use--icon{fill:#fff}.social-icons-color-standard.social-icons-style-knockout .bandsintown .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .bandsintown .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .bandsintown .sqs-use--mask{fill:#00b4b3}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .bandsintown .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .bandsintown .sqs-use--mask{fill:rgba(0,180,179,.4)}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .bandsintown:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .bandsintown:hover .sqs-use--mask{fill:#00b4b3}.social-icons-color-standard.social-icons-style-solid .bandsintown .sqs-use--mask{fill:#00b4b3}.social-icons-color-standard.social-icons-style-solid .bandsintown .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-solid .bandsintown .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .bandsintown .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .bandsintown .sqs-use--mask{fill:rgba(0,180,179,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .bandsintown .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .bandsintown .sqs-use--icon{fill:rgba(255,255,255,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .bandsintown .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .bandsintown .sqs-use--background{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .bandsintown:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .bandsintown:hover .sqs-use--mask{fill:#00b4b3}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .bandsintown:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .bandsintown:hover .sqs-use--icon{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .bandsintown:hover .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .bandsintown:hover .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-regular .behance .sqs-use--icon{fill:#1769ff}.social-icons-color-standard.social-icons-style-regular .behance .sqs-use--background,.social-icons-color-standard.social-icons-style-regular .behance .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .behance .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .behance .sqs-use--icon{fill:rgba(23,105,255,.4)}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .behance:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .behance:hover .sqs-use--icon{fill:#1769ff}.social-icons-color-standard.social-icons-style-border .behance{border-color:#1769ff}.social-icons-color-standard.social-icons-style-border .behance .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-border .behance .sqs-use--icon{fill:#1769ff}.social-icons-color-standard.social-icons-style-border .behance .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-border .behance:hover{background-color:#1769ff}.social-icons-color-standard.social-icons-style-border .behance:hover .sqs-use--icon{fill:#fff}.social-icons-color-standard.social-icons-style-knockout .behance .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .behance .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .behance .sqs-use--mask{fill:#1769ff}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .behance .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .behance .sqs-use--mask{fill:rgba(23,105,255,.4)}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .behance:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .behance:hover .sqs-use--mask{fill:#1769ff}.social-icons-color-standard.social-icons-style-solid .behance .sqs-use--mask{fill:#1769ff}.social-icons-color-standard.social-icons-style-solid .behance .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-solid .behance .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .behance .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .behance .sqs-use--mask{fill:rgba(23,105,255,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .behance .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .behance .sqs-use--icon{fill:rgba(255,255,255,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .behance .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .behance .sqs-use--background{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .behance:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .behance:hover .sqs-use--mask{fill:#1769ff}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .behance:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .behance:hover .sqs-use--icon{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .behance:hover .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .behance:hover .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-regular .codepen .sqs-use--icon{fill:#222}.social-icons-color-standard.social-icons-style-regular .codepen .sqs-use--background,.social-icons-color-standard.social-icons-style-regular .codepen .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .codepen .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .codepen .sqs-use--icon{fill:rgba(34,34,34,.4)}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .codepen:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .codepen:hover .sqs-use--icon{fill:#222}.social-icons-color-standard.social-icons-style-border .codepen{border-color:#222}.social-icons-color-standard.social-icons-style-border .codepen .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-border .codepen .sqs-use--icon{fill:#222}.social-icons-color-standard.social-icons-style-border .codepen .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-border .codepen:hover{background-color:#222}.social-icons-color-standard.social-icons-style-border .codepen:hover .sqs-use--icon{fill:#fff}.social-icons-color-standard.social-icons-style-knockout .codepen .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .codepen .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .codepen .sqs-use--mask{fill:#222}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .codepen .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .codepen .sqs-use--mask{fill:rgba(34,34,34,.4)}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .codepen:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .codepen:hover .sqs-use--mask{fill:#222}.social-icons-color-standard.social-icons-style-solid .codepen .sqs-use--mask{fill:#222}.social-icons-color-standard.social-icons-style-solid .codepen .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-solid .codepen .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .codepen .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .codepen .sqs-use--mask{fill:rgba(34,34,34,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .codepen .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .codepen .sqs-use--icon{fill:rgba(255,255,255,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .codepen .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .codepen .sqs-use--background{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .codepen:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .codepen:hover .sqs-use--mask{fill:#222}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .codepen:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .codepen:hover .sqs-use--icon{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .codepen:hover .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .codepen:hover .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-regular .dribbble .sqs-use--icon{fill:#ea4c89}.social-icons-color-standard.social-icons-style-regular .dribbble .sqs-use--background,.social-icons-color-standard.social-icons-style-regular .dribbble .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .dribbble .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .dribbble .sqs-use--icon{fill:rgba(234,76,137,.4)}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .dribbble:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .dribbble:hover .sqs-use--icon{fill:#ea4c89}.social-icons-color-standard.social-icons-style-border .dribbble{border-color:#ea4c89}.social-icons-color-standard.social-icons-style-border .dribbble .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-border .dribbble .sqs-use--icon{fill:#ea4c89}.social-icons-color-standard.social-icons-style-border .dribbble .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-border .dribbble:hover{background-color:#ea4c89}.social-icons-color-standard.social-icons-style-border .dribbble:hover .sqs-use--icon{fill:#fff}.social-icons-color-standard.social-icons-style-knockout .dribbble .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .dribbble .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .dribbble .sqs-use--mask{fill:#ea4c89}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .dribbble .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .dribbble .sqs-use--mask{fill:rgba(234,76,137,.4)}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .dribbble:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .dribbble:hover .sqs-use--mask{fill:#ea4c89}.social-icons-color-standard.social-icons-style-solid .dribbble .sqs-use--mask{fill:#ea4c89}.social-icons-color-standard.social-icons-style-solid .dribbble .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-solid .dribbble .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .dribbble .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .dribbble .sqs-use--mask{fill:rgba(234,76,137,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .dribbble .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .dribbble .sqs-use--icon{fill:rgba(255,255,255,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .dribbble .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .dribbble .sqs-use--background{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .dribbble:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .dribbble:hover .sqs-use--mask{fill:#ea4c89}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .dribbble:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .dribbble:hover .sqs-use--icon{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .dribbble:hover .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .dribbble:hover .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-regular .dropbox .sqs-use--icon{fill:#007ee5}.social-icons-color-standard.social-icons-style-regular .dropbox .sqs-use--background,.social-icons-color-standard.social-icons-style-regular .dropbox .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .dropbox .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .dropbox .sqs-use--icon{fill:rgba(0,126,229,.4)}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .dropbox:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .dropbox:hover .sqs-use--icon{fill:#007ee5}.social-icons-color-standard.social-icons-style-border .dropbox{border-color:#007ee5}.social-icons-color-standard.social-icons-style-border .dropbox .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-border .dropbox .sqs-use--icon{fill:#007ee5}.social-icons-color-standard.social-icons-style-border .dropbox .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-border .dropbox:hover{background-color:#007ee5}.social-icons-color-standard.social-icons-style-border .dropbox:hover .sqs-use--icon{fill:#fff}.social-icons-color-standard.social-icons-style-knockout .dropbox .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .dropbox .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .dropbox .sqs-use--mask{fill:#007ee5}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .dropbox .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .dropbox .sqs-use--mask{fill:rgba(0,126,229,.4)}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .dropbox:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .dropbox:hover .sqs-use--mask{fill:#007ee5}.social-icons-color-standard.social-icons-style-solid .dropbox .sqs-use--mask{fill:#007ee5}.social-icons-color-standard.social-icons-style-solid .dropbox .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-solid .dropbox .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .dropbox .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .dropbox .sqs-use--mask{fill:rgba(0,126,229,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .dropbox .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .dropbox .sqs-use--icon{fill:rgba(255,255,255,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .dropbox .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .dropbox .sqs-use--background{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .dropbox:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .dropbox:hover .sqs-use--mask{fill:#007ee5}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .dropbox:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .dropbox:hover .sqs-use--icon{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .dropbox:hover .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .dropbox:hover .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-regular .email .sqs-use--icon{fill:#222}.social-icons-color-standard.social-icons-style-regular .email .sqs-use--background,.social-icons-color-standard.social-icons-style-regular .email .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .email .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .email .sqs-use--icon{fill:rgba(34,34,34,.4)}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .email:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .email:hover .sqs-use--icon{fill:#222}.social-icons-color-standard.social-icons-style-border .email{border-color:#222}.social-icons-color-standard.social-icons-style-border .email .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-border .email .sqs-use--icon{fill:#222}.social-icons-color-standard.social-icons-style-border .email .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-border .email:hover{background-color:#222}.social-icons-color-standard.social-icons-style-border .email:hover .sqs-use--icon{fill:#fff}.social-icons-color-standard.social-icons-style-knockout .email .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .email .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .email .sqs-use--mask{fill:#222}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .email .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .email .sqs-use--mask{fill:rgba(34,34,34,.4)}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .email:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .email:hover .sqs-use--mask{fill:#222}.social-icons-color-standard.social-icons-style-solid .email .sqs-use--mask{fill:#222}.social-icons-color-standard.social-icons-style-solid .email .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-solid .email .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .email .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .email .sqs-use--mask{fill:rgba(34,34,34,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .email .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .email .sqs-use--icon{fill:rgba(255,255,255,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .email .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .email .sqs-use--background{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .email:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .email:hover .sqs-use--mask{fill:#222}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .email:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .email:hover .sqs-use--icon{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .email:hover .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .email:hover .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-regular .facebook .sqs-use--icon{fill:#3b5998}.social-icons-color-standard.social-icons-style-regular .facebook .sqs-use--background,.social-icons-color-standard.social-icons-style-regular .facebook .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .facebook .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .facebook .sqs-use--icon{fill:rgba(59,89,152,.4)}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .facebook:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .facebook:hover .sqs-use--icon{fill:#3b5998}.social-icons-color-standard.social-icons-style-border .facebook{border-color:#3b5998}.social-icons-color-standard.social-icons-style-border .facebook .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-border .facebook .sqs-use--icon{fill:#3b5998}.social-icons-color-standard.social-icons-style-border .facebook .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-border .facebook:hover{background-color:#3b5998}.social-icons-color-standard.social-icons-style-border .facebook:hover .sqs-use--icon{fill:#fff}.social-icons-color-standard.social-icons-style-knockout .facebook .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .facebook .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .facebook .sqs-use--mask{fill:#3b5998}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .facebook .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .facebook .sqs-use--mask{fill:rgba(59,89,152,.4)}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .facebook:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .facebook:hover .sqs-use--mask{fill:#3b5998}.social-icons-color-standard.social-icons-style-solid .facebook .sqs-use--mask{fill:#3b5998}.social-icons-color-standard.social-icons-style-solid .facebook .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-solid .facebook .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .facebook .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .facebook .sqs-use--mask{fill:rgba(59,89,152,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .facebook .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .facebook .sqs-use--icon{fill:rgba(255,255,255,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .facebook .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .facebook .sqs-use--background{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .facebook:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .facebook:hover .sqs-use--mask{fill:#3b5998}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .facebook:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .facebook:hover .sqs-use--icon{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .facebook:hover .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .facebook:hover .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-regular .flickr .sqs-use--icon{fill:#0063dc}.social-icons-color-standard.social-icons-style-regular .flickr .sqs-use--background,.social-icons-color-standard.social-icons-style-regular .flickr .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .flickr .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .flickr .sqs-use--icon{fill:rgba(0,99,220,.4)}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .flickr:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .flickr:hover .sqs-use--icon{fill:#0063dc}.social-icons-color-standard.social-icons-style-border .flickr{border-color:#0063dc}.social-icons-color-standard.social-icons-style-border .flickr .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-border .flickr .sqs-use--icon{fill:#0063dc}.social-icons-color-standard.social-icons-style-border .flickr .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-border .flickr:hover{background-color:#0063dc}.social-icons-color-standard.social-icons-style-border .flickr:hover .sqs-use--icon{fill:#fff}.social-icons-color-standard.social-icons-style-knockout .flickr .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .flickr .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .flickr .sqs-use--mask{fill:#0063dc}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .flickr .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .flickr .sqs-use--mask{fill:rgba(0,99,220,.4)}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .flickr:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .flickr:hover .sqs-use--mask{fill:#0063dc}.social-icons-color-standard.social-icons-style-solid .flickr .sqs-use--mask{fill:#0063dc}.social-icons-color-standard.social-icons-style-solid .flickr .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-solid .flickr .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .flickr .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .flickr .sqs-use--mask{fill:rgba(0,99,220,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .flickr .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .flickr .sqs-use--icon{fill:rgba(255,255,255,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .flickr .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .flickr .sqs-use--background{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .flickr:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .flickr:hover .sqs-use--mask{fill:#0063dc}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .flickr:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .flickr:hover .sqs-use--icon{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .flickr:hover .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .flickr:hover .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-regular .foursquare .sqs-use--icon{fill:#f94877}.social-icons-color-standard.social-icons-style-regular .foursquare .sqs-use--background,.social-icons-color-standard.social-icons-style-regular .foursquare .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .foursquare .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .foursquare .sqs-use--icon{fill:rgba(249,72,119,.4)}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .foursquare:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .foursquare:hover .sqs-use--icon{fill:#f94877}.social-icons-color-standard.social-icons-style-border .foursquare{border-color:#f94877}.social-icons-color-standard.social-icons-style-border .foursquare .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-border .foursquare .sqs-use--icon{fill:#f94877}.social-icons-color-standard.social-icons-style-border .foursquare .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-border .foursquare:hover{background-color:#f94877}.social-icons-color-standard.social-icons-style-border .foursquare:hover .sqs-use--icon{fill:#fff}.social-icons-color-standard.social-icons-style-knockout .foursquare .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .foursquare .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .foursquare .sqs-use--mask{fill:#f94877}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .foursquare .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .foursquare .sqs-use--mask{fill:rgba(249,72,119,.4)}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .foursquare:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .foursquare:hover .sqs-use--mask{fill:#f94877}.social-icons-color-standard.social-icons-style-solid .foursquare .sqs-use--mask{fill:#f94877}.social-icons-color-standard.social-icons-style-solid .foursquare .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-solid .foursquare .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .foursquare .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .foursquare .sqs-use--mask{fill:rgba(249,72,119,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .foursquare .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .foursquare .sqs-use--icon{fill:rgba(255,255,255,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .foursquare .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .foursquare .sqs-use--background{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .foursquare:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .foursquare:hover .sqs-use--mask{fill:#f94877}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .foursquare:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .foursquare:hover .sqs-use--icon{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .foursquare:hover .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .foursquare:hover .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-regular .github .sqs-use--icon{fill:#4183c4}.social-icons-color-standard.social-icons-style-regular .github .sqs-use--background,.social-icons-color-standard.social-icons-style-regular .github .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .github .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .github .sqs-use--icon{fill:rgba(65,131,196,.4)}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .github:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .github:hover .sqs-use--icon{fill:#4183c4}.social-icons-color-standard.social-icons-style-border .github{border-color:#4183c4}.social-icons-color-standard.social-icons-style-border .github .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-border .github .sqs-use--icon{fill:#4183c4}.social-icons-color-standard.social-icons-style-border .github .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-border .github:hover{background-color:#4183c4}.social-icons-color-standard.social-icons-style-border .github:hover .sqs-use--icon{fill:#fff}.social-icons-color-standard.social-icons-style-knockout .github .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .github .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .github .sqs-use--mask{fill:#4183c4}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .github .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .github .sqs-use--mask{fill:rgba(65,131,196,.4)}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .github:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .github:hover .sqs-use--mask{fill:#4183c4}.social-icons-color-standard.social-icons-style-solid .github .sqs-use--mask{fill:#4183c4}.social-icons-color-standard.social-icons-style-solid .github .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-solid .github .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .github .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .github .sqs-use--mask{fill:rgba(65,131,196,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .github .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .github .sqs-use--icon{fill:rgba(255,255,255,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .github .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .github .sqs-use--background{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .github:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .github:hover .sqs-use--mask{fill:#4183c4}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .github:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .github:hover .sqs-use--icon{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .github:hover .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .github:hover .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-regular .googleplay .sqs-use--icon{fill:#5adfcb}.social-icons-color-standard.social-icons-style-regular .googleplay .sqs-use--background,.social-icons-color-standard.social-icons-style-regular .googleplay .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .googleplay .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .googleplay .sqs-use--icon{fill:rgba(90,223,203,.4)}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .googleplay:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .googleplay:hover .sqs-use--icon{fill:#5adfcb}.social-icons-color-standard.social-icons-style-border .googleplay{border-color:#5adfcb}.social-icons-color-standard.social-icons-style-border .googleplay .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-border .googleplay .sqs-use--icon{fill:#5adfcb}.social-icons-color-standard.social-icons-style-border .googleplay .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-border .googleplay:hover{background-color:#5adfcb}.social-icons-color-standard.social-icons-style-border .googleplay:hover .sqs-use--icon{fill:#fff}.social-icons-color-standard.social-icons-style-knockout .googleplay .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .googleplay .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .googleplay .sqs-use--mask{fill:#5adfcb}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .googleplay .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .googleplay .sqs-use--mask{fill:rgba(90,223,203,.4)}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .googleplay:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .googleplay:hover .sqs-use--mask{fill:#5adfcb}.social-icons-color-standard.social-icons-style-solid .googleplay .sqs-use--mask{fill:#5adfcb}.social-icons-color-standard.social-icons-style-solid .googleplay .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-solid .googleplay .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .googleplay .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .googleplay .sqs-use--mask{fill:rgba(90,223,203,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .googleplay .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .googleplay .sqs-use--icon{fill:rgba(255,255,255,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .googleplay .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .googleplay .sqs-use--background{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .googleplay:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .googleplay:hover .sqs-use--mask{fill:#5adfcb}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .googleplay:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .googleplay:hover .sqs-use--icon{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .googleplay:hover .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .googleplay:hover .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-regular .google .sqs-use--icon{fill:#dc4e41}.social-icons-color-standard.social-icons-style-regular .google .sqs-use--background,.social-icons-color-standard.social-icons-style-regular .google .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .google .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .google .sqs-use--icon{fill:rgba(220,78,65,.4)}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .google:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .google:hover .sqs-use--icon{fill:#dc4e41}.social-icons-color-standard.social-icons-style-border .google{border-color:#dc4e41}.social-icons-color-standard.social-icons-style-border .google .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-border .google .sqs-use--icon{fill:#dc4e41}.social-icons-color-standard.social-icons-style-border .google .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-border .google:hover{background-color:#dc4e41}.social-icons-color-standard.social-icons-style-border .google:hover .sqs-use--icon{fill:#fff}.social-icons-color-standard.social-icons-style-knockout .google .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .google .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .google .sqs-use--mask{fill:#dc4e41}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .google .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .google .sqs-use--mask{fill:rgba(220,78,65,.4)}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .google:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .google:hover .sqs-use--mask{fill:#dc4e41}.social-icons-color-standard.social-icons-style-solid .google .sqs-use--mask{fill:#dc4e41}.social-icons-color-standard.social-icons-style-solid .google .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-solid .google .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .google .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .google .sqs-use--mask{fill:rgba(220,78,65,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .google .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .google .sqs-use--icon{fill:rgba(255,255,255,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .google .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .google .sqs-use--background{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .google:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .google:hover .sqs-use--mask{fill:#dc4e41}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .google:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .google:hover .sqs-use--icon{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .google:hover .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .google:hover .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-regular .houzz .sqs-use--icon{fill:#7ac143}.social-icons-color-standard.social-icons-style-regular .houzz .sqs-use--background,.social-icons-color-standard.social-icons-style-regular .houzz .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .houzz .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .houzz .sqs-use--icon{fill:rgba(122,193,67,.4)}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .houzz:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .houzz:hover .sqs-use--icon{fill:#7ac143}.social-icons-color-standard.social-icons-style-border .houzz{border-color:#7ac143}.social-icons-color-standard.social-icons-style-border .houzz .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-border .houzz .sqs-use--icon{fill:#7ac143}.social-icons-color-standard.social-icons-style-border .houzz .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-border .houzz:hover{background-color:#7ac143}.social-icons-color-standard.social-icons-style-border .houzz:hover .sqs-use--icon{fill:#fff}.social-icons-color-standard.social-icons-style-knockout .houzz .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .houzz .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .houzz .sqs-use--mask{fill:#7ac143}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .houzz .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .houzz .sqs-use--mask{fill:rgba(122,193,67,.4)}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .houzz:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .houzz:hover .sqs-use--mask{fill:#7ac143}.social-icons-color-standard.social-icons-style-solid .houzz .sqs-use--mask{fill:#7ac143}.social-icons-color-standard.social-icons-style-solid .houzz .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-solid .houzz .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .houzz .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .houzz .sqs-use--mask{fill:rgba(122,193,67,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .houzz .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .houzz .sqs-use--icon{fill:rgba(255,255,255,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .houzz .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .houzz .sqs-use--background{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .houzz:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .houzz:hover .sqs-use--mask{fill:#7ac143}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .houzz:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .houzz:hover .sqs-use--icon{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .houzz:hover .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .houzz:hover .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-regular .instagram .sqs-use--icon{fill:#3f729b}.social-icons-color-standard.social-icons-style-regular .instagram .sqs-use--background,.social-icons-color-standard.social-icons-style-regular .instagram .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .instagram .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .instagram .sqs-use--icon{fill:rgba(63,114,155,.4)}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .instagram:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .instagram:hover .sqs-use--icon{fill:#3f729b}.social-icons-color-standard.social-icons-style-border .instagram{border-color:#3f729b}.social-icons-color-standard.social-icons-style-border .instagram .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-border .instagram .sqs-use--icon{fill:#3f729b}.social-icons-color-standard.social-icons-style-border .instagram .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-border .instagram:hover{background-color:#3f729b}.social-icons-color-standard.social-icons-style-border .instagram:hover .sqs-use--icon{fill:#fff}.social-icons-color-standard.social-icons-style-knockout .instagram .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .instagram .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .instagram .sqs-use--mask{fill:#3f729b}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .instagram .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .instagram .sqs-use--mask{fill:rgba(63,114,155,.4)}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .instagram:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .instagram:hover .sqs-use--mask{fill:#3f729b}.social-icons-color-standard.social-icons-style-solid .instagram .sqs-use--mask{fill:#3f729b}.social-icons-color-standard.social-icons-style-solid .instagram .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-solid .instagram .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .instagram .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .instagram .sqs-use--mask{fill:rgba(63,114,155,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .instagram .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .instagram .sqs-use--icon{fill:rgba(255,255,255,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .instagram .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .instagram .sqs-use--background{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .instagram:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .instagram:hover .sqs-use--mask{fill:#3f729b}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .instagram:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .instagram:hover .sqs-use--icon{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .instagram:hover .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .instagram:hover .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-regular .itunes .sqs-use--icon{fill:#ec4652}.social-icons-color-standard.social-icons-style-regular .itunes .sqs-use--background,.social-icons-color-standard.social-icons-style-regular .itunes .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .itunes .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .itunes .sqs-use--icon{fill:rgba(236,70,82,.4)}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .itunes:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .itunes:hover .sqs-use--icon{fill:#ec4652}.social-icons-color-standard.social-icons-style-border .itunes{border-color:#ec4652}.social-icons-color-standard.social-icons-style-border .itunes .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-border .itunes .sqs-use--icon{fill:#ec4652}.social-icons-color-standard.social-icons-style-border .itunes .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-border .itunes:hover{background-color:#ec4652}.social-icons-color-standard.social-icons-style-border .itunes:hover .sqs-use--icon{fill:#fff}.social-icons-color-standard.social-icons-style-knockout .itunes .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .itunes .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .itunes .sqs-use--mask{fill:#ec4652}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .itunes .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .itunes .sqs-use--mask{fill:rgba(236,70,82,.4)}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .itunes:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .itunes:hover .sqs-use--mask{fill:#ec4652}.social-icons-color-standard.social-icons-style-solid .itunes .sqs-use--mask{fill:#ec4652}.social-icons-color-standard.social-icons-style-solid .itunes .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-solid .itunes .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .itunes .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .itunes .sqs-use--mask{fill:rgba(236,70,82,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .itunes .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .itunes .sqs-use--icon{fill:rgba(255,255,255,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .itunes .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .itunes .sqs-use--background{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .itunes:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .itunes:hover .sqs-use--mask{fill:#ec4652}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .itunes:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .itunes:hover .sqs-use--icon{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .itunes:hover .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .itunes:hover .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-regular .linkedin .sqs-use--icon{fill:#0976b4}.social-icons-color-standard.social-icons-style-regular .linkedin .sqs-use--background,.social-icons-color-standard.social-icons-style-regular .linkedin .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .linkedin .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .linkedin .sqs-use--icon{fill:rgba(9,118,180,.4)}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .linkedin:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .linkedin:hover .sqs-use--icon{fill:#0976b4}.social-icons-color-standard.social-icons-style-border .linkedin{border-color:#0976b4}.social-icons-color-standard.social-icons-style-border .linkedin .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-border .linkedin .sqs-use--icon{fill:#0976b4}.social-icons-color-standard.social-icons-style-border .linkedin .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-border .linkedin:hover{background-color:#0976b4}.social-icons-color-standard.social-icons-style-border .linkedin:hover .sqs-use--icon{fill:#fff}.social-icons-color-standard.social-icons-style-knockout .linkedin .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .linkedin .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .linkedin .sqs-use--mask{fill:#0976b4}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .linkedin .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .linkedin .sqs-use--mask{fill:rgba(9,118,180,.4)}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .linkedin:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .linkedin:hover .sqs-use--mask{fill:#0976b4}.social-icons-color-standard.social-icons-style-solid .linkedin .sqs-use--mask{fill:#0976b4}.social-icons-color-standard.social-icons-style-solid .linkedin .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-solid .linkedin .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .linkedin .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .linkedin .sqs-use--mask{fill:rgba(9,118,180,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .linkedin .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .linkedin .sqs-use--icon{fill:rgba(255,255,255,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .linkedin .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .linkedin .sqs-use--background{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .linkedin:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .linkedin:hover .sqs-use--mask{fill:#0976b4}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .linkedin:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .linkedin:hover .sqs-use--icon{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .linkedin:hover .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .linkedin:hover .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-regular .medium .sqs-use--icon{fill:#00ab6c}.social-icons-color-standard.social-icons-style-regular .medium .sqs-use--background,.social-icons-color-standard.social-icons-style-regular .medium .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .medium .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .medium .sqs-use--icon{fill:rgba(0,171,108,.4)}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .medium:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .medium:hover .sqs-use--icon{fill:#00ab6c}.social-icons-color-standard.social-icons-style-border .medium{border-color:#00ab6c}.social-icons-color-standard.social-icons-style-border .medium .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-border .medium .sqs-use--icon{fill:#00ab6c}.social-icons-color-standard.social-icons-style-border .medium .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-border .medium:hover{background-color:#00ab6c}.social-icons-color-standard.social-icons-style-border .medium:hover .sqs-use--icon{fill:#fff}.social-icons-color-standard.social-icons-style-knockout .medium .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .medium .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .medium .sqs-use--mask{fill:#00ab6c}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .medium .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .medium .sqs-use--mask{fill:rgba(0,171,108,.4)}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .medium:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .medium:hover .sqs-use--mask{fill:#00ab6c}.social-icons-color-standard.social-icons-style-solid .medium .sqs-use--mask{fill:#00ab6c}.social-icons-color-standard.social-icons-style-solid .medium .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-solid .medium .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .medium .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .medium .sqs-use--mask{fill:rgba(0,171,108,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .medium .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .medium .sqs-use--icon{fill:rgba(255,255,255,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .medium .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .medium .sqs-use--background{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .medium:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .medium:hover .sqs-use--mask{fill:#00ab6c}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .medium:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .medium:hover .sqs-use--icon{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .medium:hover .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .medium:hover .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-regular .meetup .sqs-use--icon{fill:#e0393e}.social-icons-color-standard.social-icons-style-regular .meetup .sqs-use--background,.social-icons-color-standard.social-icons-style-regular .meetup .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .meetup .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .meetup .sqs-use--icon{fill:rgba(224,57,62,.4)}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .meetup:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .meetup:hover .sqs-use--icon{fill:#e0393e}.social-icons-color-standard.social-icons-style-border .meetup{border-color:#e0393e}.social-icons-color-standard.social-icons-style-border .meetup .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-border .meetup .sqs-use--icon{fill:#e0393e}.social-icons-color-standard.social-icons-style-border .meetup .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-border .meetup:hover{background-color:#e0393e}.social-icons-color-standard.social-icons-style-border .meetup:hover .sqs-use--icon{fill:#fff}.social-icons-color-standard.social-icons-style-knockout .meetup .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .meetup .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .meetup .sqs-use--mask{fill:#e0393e}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .meetup .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .meetup .sqs-use--mask{fill:rgba(224,57,62,.4)}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .meetup:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .meetup:hover .sqs-use--mask{fill:#e0393e}.social-icons-color-standard.social-icons-style-solid .meetup .sqs-use--mask{fill:#e0393e}.social-icons-color-standard.social-icons-style-solid .meetup .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-solid .meetup .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .meetup .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .meetup .sqs-use--mask{fill:rgba(224,57,62,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .meetup .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .meetup .sqs-use--icon{fill:rgba(255,255,255,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .meetup .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .meetup .sqs-use--background{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .meetup:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .meetup:hover .sqs-use--mask{fill:#e0393e}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .meetup:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .meetup:hover .sqs-use--icon{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .meetup:hover .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .meetup:hover .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-regular .pinterest .sqs-use--icon{fill:#cc2127}.social-icons-color-standard.social-icons-style-regular .pinterest .sqs-use--background,.social-icons-color-standard.social-icons-style-regular .pinterest .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .pinterest .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .pinterest .sqs-use--icon{fill:rgba(204,33,39,.4)}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .pinterest:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .pinterest:hover .sqs-use--icon{fill:#cc2127}.social-icons-color-standard.social-icons-style-border .pinterest{border-color:#cc2127}.social-icons-color-standard.social-icons-style-border .pinterest .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-border .pinterest .sqs-use--icon{fill:#cc2127}.social-icons-color-standard.social-icons-style-border .pinterest .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-border .pinterest:hover{background-color:#cc2127}.social-icons-color-standard.social-icons-style-border .pinterest:hover .sqs-use--icon{fill:#fff}.social-icons-color-standard.social-icons-style-knockout .pinterest .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .pinterest .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .pinterest .sqs-use--mask{fill:#cc2127}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .pinterest .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .pinterest .sqs-use--mask{fill:rgba(204,33,39,.4)}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .pinterest:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .pinterest:hover .sqs-use--mask{fill:#cc2127}.social-icons-color-standard.social-icons-style-solid .pinterest .sqs-use--mask{fill:#cc2127}.social-icons-color-standard.social-icons-style-solid .pinterest .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-solid .pinterest .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .pinterest .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .pinterest .sqs-use--mask{fill:rgba(204,33,39,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .pinterest .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .pinterest .sqs-use--icon{fill:rgba(255,255,255,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .pinterest .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .pinterest .sqs-use--background{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .pinterest:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .pinterest:hover .sqs-use--mask{fill:#cc2127}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .pinterest:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .pinterest:hover .sqs-use--icon{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .pinterest:hover .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .pinterest:hover .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-regular .rdio .sqs-use--icon{fill:#006ed2}.social-icons-color-standard.social-icons-style-regular .rdio .sqs-use--background,.social-icons-color-standard.social-icons-style-regular .rdio .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .rdio .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .rdio .sqs-use--icon{fill:rgba(0,110,210,.4)}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .rdio:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .rdio:hover .sqs-use--icon{fill:#006ed2}.social-icons-color-standard.social-icons-style-border .rdio{border-color:#006ed2}.social-icons-color-standard.social-icons-style-border .rdio .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-border .rdio .sqs-use--icon{fill:#006ed2}.social-icons-color-standard.social-icons-style-border .rdio .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-border .rdio:hover{background-color:#006ed2}.social-icons-color-standard.social-icons-style-border .rdio:hover .sqs-use--icon{fill:#fff}.social-icons-color-standard.social-icons-style-knockout .rdio .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .rdio .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .rdio .sqs-use--mask{fill:#006ed2}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .rdio .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .rdio .sqs-use--mask{fill:rgba(0,110,210,.4)}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .rdio:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .rdio:hover .sqs-use--mask{fill:#006ed2}.social-icons-color-standard.social-icons-style-solid .rdio .sqs-use--mask{fill:#006ed2}.social-icons-color-standard.social-icons-style-solid .rdio .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-solid .rdio .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .rdio .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .rdio .sqs-use--mask{fill:rgba(0,110,210,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .rdio .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .rdio .sqs-use--icon{fill:rgba(255,255,255,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .rdio .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .rdio .sqs-use--background{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .rdio:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .rdio:hover .sqs-use--mask{fill:#006ed2}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .rdio:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .rdio:hover .sqs-use--icon{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .rdio:hover .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .rdio:hover .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-regular .reddit .sqs-use--icon{fill:#ff4500}.social-icons-color-standard.social-icons-style-regular .reddit .sqs-use--background,.social-icons-color-standard.social-icons-style-regular .reddit .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .reddit .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .reddit .sqs-use--icon{fill:rgba(255,69,0,.4)}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .reddit:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .reddit:hover .sqs-use--icon{fill:#ff4500}.social-icons-color-standard.social-icons-style-border .reddit{border-color:#ff4500}.social-icons-color-standard.social-icons-style-border .reddit .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-border .reddit .sqs-use--icon{fill:#ff4500}.social-icons-color-standard.social-icons-style-border .reddit .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-border .reddit:hover{background-color:#ff4500}.social-icons-color-standard.social-icons-style-border .reddit:hover .sqs-use--icon{fill:#fff}.social-icons-color-standard.social-icons-style-knockout .reddit .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .reddit .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .reddit .sqs-use--mask{fill:#ff4500}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .reddit .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .reddit .sqs-use--mask{fill:rgba(255,69,0,.4)}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .reddit:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .reddit:hover .sqs-use--mask{fill:#ff4500}.social-icons-color-standard.social-icons-style-solid .reddit .sqs-use--mask{fill:#ff4500}.social-icons-color-standard.social-icons-style-solid .reddit .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-solid .reddit .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .reddit .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .reddit .sqs-use--mask{fill:rgba(255,69,0,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .reddit .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .reddit .sqs-use--icon{fill:rgba(255,255,255,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .reddit .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .reddit .sqs-use--background{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .reddit:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .reddit:hover .sqs-use--mask{fill:#ff4500}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .reddit:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .reddit:hover .sqs-use--icon{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .reddit:hover .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .reddit:hover .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-regular .rss .sqs-use--icon{fill:#222}.social-icons-color-standard.social-icons-style-regular .rss .sqs-use--background,.social-icons-color-standard.social-icons-style-regular .rss .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .rss .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .rss .sqs-use--icon{fill:rgba(34,34,34,.4)}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .rss:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .rss:hover .sqs-use--icon{fill:#222}.social-icons-color-standard.social-icons-style-border .rss{border-color:#222}.social-icons-color-standard.social-icons-style-border .rss .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-border .rss .sqs-use--icon{fill:#222}.social-icons-color-standard.social-icons-style-border .rss .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-border .rss:hover{background-color:#222}.social-icons-color-standard.social-icons-style-border .rss:hover .sqs-use--icon{fill:#fff}.social-icons-color-standard.social-icons-style-knockout .rss .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .rss .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .rss .sqs-use--mask{fill:#222}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .rss .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .rss .sqs-use--mask{fill:rgba(34,34,34,.4)}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .rss:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .rss:hover .sqs-use--mask{fill:#222}.social-icons-color-standard.social-icons-style-solid .rss .sqs-use--mask{fill:#222}.social-icons-color-standard.social-icons-style-solid .rss .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-solid .rss .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .rss .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .rss .sqs-use--mask{fill:rgba(34,34,34,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .rss .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .rss .sqs-use--icon{fill:rgba(255,255,255,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .rss .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .rss .sqs-use--background{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .rss:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .rss:hover .sqs-use--mask{fill:#222}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .rss:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .rss:hover .sqs-use--icon{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .rss:hover .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .rss:hover .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-regular .smugmug .sqs-use--icon{fill:#7dbb00}.social-icons-color-standard.social-icons-style-regular .smugmug .sqs-use--background,.social-icons-color-standard.social-icons-style-regular .smugmug .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .smugmug .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .smugmug .sqs-use--icon{fill:rgba(125,187,0,.4)}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .smugmug:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .smugmug:hover .sqs-use--icon{fill:#7dbb00}.social-icons-color-standard.social-icons-style-border .smugmug{border-color:#7dbb00}.social-icons-color-standard.social-icons-style-border .smugmug .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-border .smugmug .sqs-use--icon{fill:#7dbb00}.social-icons-color-standard.social-icons-style-border .smugmug .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-border .smugmug:hover{background-color:#7dbb00}.social-icons-color-standard.social-icons-style-border .smugmug:hover .sqs-use--icon{fill:#fff}.social-icons-color-standard.social-icons-style-knockout .smugmug .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .smugmug .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .smugmug .sqs-use--mask{fill:#7dbb00}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .smugmug .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .smugmug .sqs-use--mask{fill:rgba(125,187,0,.4)}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .smugmug:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .smugmug:hover .sqs-use--mask{fill:#7dbb00}.social-icons-color-standard.social-icons-style-solid .smugmug .sqs-use--mask{fill:#7dbb00}.social-icons-color-standard.social-icons-style-solid .smugmug .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-solid .smugmug .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .smugmug .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .smugmug .sqs-use--mask{fill:rgba(125,187,0,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .smugmug .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .smugmug .sqs-use--icon{fill:rgba(255,255,255,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .smugmug .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .smugmug .sqs-use--background{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .smugmug:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .smugmug:hover .sqs-use--mask{fill:#7dbb00}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .smugmug:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .smugmug:hover .sqs-use--icon{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .smugmug:hover .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .smugmug:hover .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-regular .soundcloud .sqs-use--icon{fill:#f60}.social-icons-color-standard.social-icons-style-regular .soundcloud .sqs-use--background,.social-icons-color-standard.social-icons-style-regular .soundcloud .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .soundcloud .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .soundcloud .sqs-use--icon{fill:rgba(255,102,0,.4)}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .soundcloud:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .soundcloud:hover .sqs-use--icon{fill:#f60}.social-icons-color-standard.social-icons-style-border .soundcloud{border-color:#f60}.social-icons-color-standard.social-icons-style-border .soundcloud .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-border .soundcloud .sqs-use--icon{fill:#f60}.social-icons-color-standard.social-icons-style-border .soundcloud .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-border .soundcloud:hover{background-color:#f60}.social-icons-color-standard.social-icons-style-border .soundcloud:hover .sqs-use--icon{fill:#fff}.social-icons-color-standard.social-icons-style-knockout .soundcloud .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .soundcloud .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .soundcloud .sqs-use--mask{fill:#f60}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .soundcloud .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .soundcloud .sqs-use--mask{fill:rgba(255,102,0,.4)}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .soundcloud:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .soundcloud:hover .sqs-use--mask{fill:#f60}.social-icons-color-standard.social-icons-style-solid .soundcloud .sqs-use--mask{fill:#f60}.social-icons-color-standard.social-icons-style-solid .soundcloud .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-solid .soundcloud .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .soundcloud .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .soundcloud .sqs-use--mask{fill:rgba(255,102,0,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .soundcloud .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .soundcloud .sqs-use--icon{fill:rgba(255,255,255,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .soundcloud .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .soundcloud .sqs-use--background{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .soundcloud:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .soundcloud:hover .sqs-use--mask{fill:#f60}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .soundcloud:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .soundcloud:hover .sqs-use--icon{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .soundcloud:hover .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .soundcloud:hover .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-regular .spotify .sqs-use--icon{fill:#84bd00}.social-icons-color-standard.social-icons-style-regular .spotify .sqs-use--background,.social-icons-color-standard.social-icons-style-regular .spotify .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .spotify .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .spotify .sqs-use--icon{fill:rgba(132,189,0,.4)}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .spotify:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .spotify:hover .sqs-use--icon{fill:#84bd00}.social-icons-color-standard.social-icons-style-border .spotify{border-color:#84bd00}.social-icons-color-standard.social-icons-style-border .spotify .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-border .spotify .sqs-use--icon{fill:#84bd00}.social-icons-color-standard.social-icons-style-border .spotify .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-border .spotify:hover{background-color:#84bd00}.social-icons-color-standard.social-icons-style-border .spotify:hover .sqs-use--icon{fill:#fff}.social-icons-color-standard.social-icons-style-knockout .spotify .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .spotify .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .spotify .sqs-use--mask{fill:#84bd00}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .spotify .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .spotify .sqs-use--mask{fill:rgba(132,189,0,.4)}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .spotify:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .spotify:hover .sqs-use--mask{fill:#84bd00}.social-icons-color-standard.social-icons-style-solid .spotify .sqs-use--mask{fill:#84bd00}.social-icons-color-standard.social-icons-style-solid .spotify .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-solid .spotify .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .spotify .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .spotify .sqs-use--mask{fill:rgba(132,189,0,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .spotify .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .spotify .sqs-use--icon{fill:rgba(255,255,255,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .spotify .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .spotify .sqs-use--background{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .spotify:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .spotify:hover .sqs-use--mask{fill:#84bd00}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .spotify:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .spotify:hover .sqs-use--icon{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .spotify:hover .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .spotify:hover .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-regular .squarespace .sqs-use--icon{fill:#222}.social-icons-color-standard.social-icons-style-regular .squarespace .sqs-use--background,.social-icons-color-standard.social-icons-style-regular .squarespace .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .squarespace .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .squarespace .sqs-use--icon{fill:rgba(34,34,34,.4)}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .squarespace:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .squarespace:hover .sqs-use--icon{fill:#222}.social-icons-color-standard.social-icons-style-border .squarespace{border-color:#222}.social-icons-color-standard.social-icons-style-border .squarespace .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-border .squarespace .sqs-use--icon{fill:#222}.social-icons-color-standard.social-icons-style-border .squarespace .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-border .squarespace:hover{background-color:#222}.social-icons-color-standard.social-icons-style-border .squarespace:hover .sqs-use--icon{fill:#fff}.social-icons-color-standard.social-icons-style-knockout .squarespace .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .squarespace .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .squarespace .sqs-use--mask{fill:#222}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .squarespace .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .squarespace .sqs-use--mask{fill:rgba(34,34,34,.4)}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .squarespace:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .squarespace:hover .sqs-use--mask{fill:#222}.social-icons-color-standard.social-icons-style-solid .squarespace .sqs-use--mask{fill:#222}.social-icons-color-standard.social-icons-style-solid .squarespace .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-solid .squarespace .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .squarespace .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .squarespace .sqs-use--mask{fill:rgba(34,34,34,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .squarespace .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .squarespace .sqs-use--icon{fill:rgba(255,255,255,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .squarespace .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .squarespace .sqs-use--background{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .squarespace:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .squarespace:hover .sqs-use--mask{fill:#222}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .squarespace:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .squarespace:hover .sqs-use--icon{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .squarespace:hover .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .squarespace:hover .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-regular .stumbleupon .sqs-use--icon{fill:#eb4924}.social-icons-color-standard.social-icons-style-regular .stumbleupon .sqs-use--background,.social-icons-color-standard.social-icons-style-regular .stumbleupon .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .stumbleupon .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .stumbleupon .sqs-use--icon{fill:rgba(235,73,36,.4)}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .stumbleupon:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .stumbleupon:hover .sqs-use--icon{fill:#eb4924}.social-icons-color-standard.social-icons-style-border .stumbleupon{border-color:#eb4924}.social-icons-color-standard.social-icons-style-border .stumbleupon .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-border .stumbleupon .sqs-use--icon{fill:#eb4924}.social-icons-color-standard.social-icons-style-border .stumbleupon .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-border .stumbleupon:hover{background-color:#eb4924}.social-icons-color-standard.social-icons-style-border .stumbleupon:hover .sqs-use--icon{fill:#fff}.social-icons-color-standard.social-icons-style-knockout .stumbleupon .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .stumbleupon .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .stumbleupon .sqs-use--mask{fill:#eb4924}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .stumbleupon .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .stumbleupon .sqs-use--mask{fill:rgba(235,73,36,.4)}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .stumbleupon:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .stumbleupon:hover .sqs-use--mask{fill:#eb4924}.social-icons-color-standard.social-icons-style-solid .stumbleupon .sqs-use--mask{fill:#eb4924}.social-icons-color-standard.social-icons-style-solid .stumbleupon .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-solid .stumbleupon .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .stumbleupon .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .stumbleupon .sqs-use--mask{fill:rgba(235,73,36,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .stumbleupon .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .stumbleupon .sqs-use--icon{fill:rgba(255,255,255,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .stumbleupon .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .stumbleupon .sqs-use--background{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .stumbleupon:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .stumbleupon:hover .sqs-use--mask{fill:#eb4924}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .stumbleupon:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .stumbleupon:hover .sqs-use--icon{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .stumbleupon:hover .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .stumbleupon:hover .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-regular .tumblr .sqs-use--icon{fill:#35465d}.social-icons-color-standard.social-icons-style-regular .tumblr .sqs-use--background,.social-icons-color-standard.social-icons-style-regular .tumblr .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .tumblr .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .tumblr .sqs-use--icon{fill:rgba(53,70,93,.4)}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .tumblr:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .tumblr:hover .sqs-use--icon{fill:#35465d}.social-icons-color-standard.social-icons-style-border .tumblr{border-color:#35465d}.social-icons-color-standard.social-icons-style-border .tumblr .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-border .tumblr .sqs-use--icon{fill:#35465d}.social-icons-color-standard.social-icons-style-border .tumblr .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-border .tumblr:hover{background-color:#35465d}.social-icons-color-standard.social-icons-style-border .tumblr:hover .sqs-use--icon{fill:#fff}.social-icons-color-standard.social-icons-style-knockout .tumblr .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .tumblr .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .tumblr .sqs-use--mask{fill:#35465d}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .tumblr .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .tumblr .sqs-use--mask{fill:rgba(53,70,93,.4)}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .tumblr:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .tumblr:hover .sqs-use--mask{fill:#35465d}.social-icons-color-standard.social-icons-style-solid .tumblr .sqs-use--mask{fill:#35465d}.social-icons-color-standard.social-icons-style-solid .tumblr .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-solid .tumblr .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .tumblr .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .tumblr .sqs-use--mask{fill:rgba(53,70,93,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .tumblr .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .tumblr .sqs-use--icon{fill:rgba(255,255,255,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .tumblr .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .tumblr .sqs-use--background{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .tumblr:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .tumblr:hover .sqs-use--mask{fill:#35465d}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .tumblr:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .tumblr:hover .sqs-use--icon{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .tumblr:hover .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .tumblr:hover .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-regular .twitch .sqs-use--icon{fill:#6441a5}.social-icons-color-standard.social-icons-style-regular .twitch .sqs-use--background,.social-icons-color-standard.social-icons-style-regular .twitch .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .twitch .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .twitch .sqs-use--icon{fill:rgba(100,65,165,.4)}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .twitch:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .twitch:hover .sqs-use--icon{fill:#6441a5}.social-icons-color-standard.social-icons-style-border .twitch{border-color:#6441a5}.social-icons-color-standard.social-icons-style-border .twitch .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-border .twitch .sqs-use--icon{fill:#6441a5}.social-icons-color-standard.social-icons-style-border .twitch .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-border .twitch:hover{background-color:#6441a5}.social-icons-color-standard.social-icons-style-border .twitch:hover .sqs-use--icon{fill:#fff}.social-icons-color-standard.social-icons-style-knockout .twitch .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .twitch .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .twitch .sqs-use--mask{fill:#6441a5}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .twitch .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .twitch .sqs-use--mask{fill:rgba(100,65,165,.4)}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .twitch:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .twitch:hover .sqs-use--mask{fill:#6441a5}.social-icons-color-standard.social-icons-style-solid .twitch .sqs-use--mask{fill:#6441a5}.social-icons-color-standard.social-icons-style-solid .twitch .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-solid .twitch .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .twitch .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .twitch .sqs-use--mask{fill:rgba(100,65,165,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .twitch .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .twitch .sqs-use--icon{fill:rgba(255,255,255,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .twitch .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .twitch .sqs-use--background{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .twitch:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .twitch:hover .sqs-use--mask{fill:#6441a5}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .twitch:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .twitch:hover .sqs-use--icon{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .twitch:hover .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .twitch:hover .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-regular .twitter .sqs-use--icon{fill:#55acee}.social-icons-color-standard.social-icons-style-regular .twitter .sqs-use--background,.social-icons-color-standard.social-icons-style-regular .twitter .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .twitter .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .twitter .sqs-use--icon{fill:rgba(85,172,238,.4)}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .twitter:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .twitter:hover .sqs-use--icon{fill:#55acee}.social-icons-color-standard.social-icons-style-border .twitter{border-color:#55acee}.social-icons-color-standard.social-icons-style-border .twitter .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-border .twitter .sqs-use--icon{fill:#55acee}.social-icons-color-standard.social-icons-style-border .twitter .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-border .twitter:hover{background-color:#55acee}.social-icons-color-standard.social-icons-style-border .twitter:hover .sqs-use--icon{fill:#fff}.social-icons-color-standard.social-icons-style-knockout .twitter .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .twitter .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .twitter .sqs-use--mask{fill:#55acee}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .twitter .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .twitter .sqs-use--mask{fill:rgba(85,172,238,.4)}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .twitter:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .twitter:hover .sqs-use--mask{fill:#55acee}.social-icons-color-standard.social-icons-style-solid .twitter .sqs-use--mask{fill:#55acee}.social-icons-color-standard.social-icons-style-solid .twitter .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-solid .twitter .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .twitter .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .twitter .sqs-use--mask{fill:rgba(85,172,238,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .twitter .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .twitter .sqs-use--icon{fill:rgba(255,255,255,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .twitter .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .twitter .sqs-use--background{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .twitter:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .twitter:hover .sqs-use--mask{fill:#55acee}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .twitter:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .twitter:hover .sqs-use--icon{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .twitter:hover .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .twitter:hover .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-regular .vevo .sqs-use--icon{fill:#ff0031}.social-icons-color-standard.social-icons-style-regular .vevo .sqs-use--background,.social-icons-color-standard.social-icons-style-regular .vevo .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .vevo .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .vevo .sqs-use--icon{fill:rgba(255,0,49,.4)}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .vevo:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .vevo:hover .sqs-use--icon{fill:#ff0031}.social-icons-color-standard.social-icons-style-border .vevo{border-color:#ff0031}.social-icons-color-standard.social-icons-style-border .vevo .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-border .vevo .sqs-use--icon{fill:#ff0031}.social-icons-color-standard.social-icons-style-border .vevo .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-border .vevo:hover{background-color:#ff0031}.social-icons-color-standard.social-icons-style-border .vevo:hover .sqs-use--icon{fill:#fff}.social-icons-color-standard.social-icons-style-knockout .vevo .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .vevo .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .vevo .sqs-use--mask{fill:#ff0031}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .vevo .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .vevo .sqs-use--mask{fill:rgba(255,0,49,.4)}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .vevo:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .vevo:hover .sqs-use--mask{fill:#ff0031}.social-icons-color-standard.social-icons-style-solid .vevo .sqs-use--mask{fill:#ff0031}.social-icons-color-standard.social-icons-style-solid .vevo .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-solid .vevo .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .vevo .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .vevo .sqs-use--mask{fill:rgba(255,0,49,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .vevo .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .vevo .sqs-use--icon{fill:rgba(255,255,255,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .vevo .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .vevo .sqs-use--background{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .vevo:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .vevo:hover .sqs-use--mask{fill:#ff0031}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .vevo:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .vevo:hover .sqs-use--icon{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .vevo:hover .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .vevo:hover .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-regular .vimeo .sqs-use--icon{fill:#1ab7ea}.social-icons-color-standard.social-icons-style-regular .vimeo .sqs-use--background,.social-icons-color-standard.social-icons-style-regular .vimeo .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .vimeo .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .vimeo .sqs-use--icon{fill:rgba(26,183,234,.4)}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .vimeo:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .vimeo:hover .sqs-use--icon{fill:#1ab7ea}.social-icons-color-standard.social-icons-style-border .vimeo{border-color:#1ab7ea}.social-icons-color-standard.social-icons-style-border .vimeo .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-border .vimeo .sqs-use--icon{fill:#1ab7ea}.social-icons-color-standard.social-icons-style-border .vimeo .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-border .vimeo:hover{background-color:#1ab7ea}.social-icons-color-standard.social-icons-style-border .vimeo:hover .sqs-use--icon{fill:#fff}.social-icons-color-standard.social-icons-style-knockout .vimeo .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .vimeo .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .vimeo .sqs-use--mask{fill:#1ab7ea}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .vimeo .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .vimeo .sqs-use--mask{fill:rgba(26,183,234,.4)}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .vimeo:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .vimeo:hover .sqs-use--mask{fill:#1ab7ea}.social-icons-color-standard.social-icons-style-solid .vimeo .sqs-use--mask{fill:#1ab7ea}.social-icons-color-standard.social-icons-style-solid .vimeo .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-solid .vimeo .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .vimeo .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .vimeo .sqs-use--mask{fill:rgba(26,183,234,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .vimeo .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .vimeo .sqs-use--icon{fill:rgba(255,255,255,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .vimeo .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .vimeo .sqs-use--background{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .vimeo:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .vimeo:hover .sqs-use--mask{fill:#1ab7ea}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .vimeo:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .vimeo:hover .sqs-use--icon{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .vimeo:hover .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .vimeo:hover .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-regular .vine .sqs-use--icon{fill:#00b488}.social-icons-color-standard.social-icons-style-regular .vine .sqs-use--background,.social-icons-color-standard.social-icons-style-regular .vine .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .vine .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .vine .sqs-use--icon{fill:rgba(0,180,136,.4)}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .vine:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .vine:hover .sqs-use--icon{fill:#00b488}.social-icons-color-standard.social-icons-style-border .vine{border-color:#00b488}.social-icons-color-standard.social-icons-style-border .vine .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-border .vine .sqs-use--icon{fill:#00b488}.social-icons-color-standard.social-icons-style-border .vine .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-border .vine:hover{background-color:#00b488}.social-icons-color-standard.social-icons-style-border .vine:hover .sqs-use--icon{fill:#fff}.social-icons-color-standard.social-icons-style-knockout .vine .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .vine .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .vine .sqs-use--mask{fill:#00b488}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .vine .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .vine .sqs-use--mask{fill:rgba(0,180,136,.4)}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .vine:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .vine:hover .sqs-use--mask{fill:#00b488}.social-icons-color-standard.social-icons-style-solid .vine .sqs-use--mask{fill:#00b488}.social-icons-color-standard.social-icons-style-solid .vine .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-solid .vine .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .vine .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .vine .sqs-use--mask{fill:rgba(0,180,136,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .vine .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .vine .sqs-use--icon{fill:rgba(255,255,255,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .vine .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .vine .sqs-use--background{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .vine:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .vine:hover .sqs-use--mask{fill:#00b488}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .vine:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .vine:hover .sqs-use--icon{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .vine:hover .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .vine:hover .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-regular .vsco .sqs-use--icon{fill:#ae995a}.social-icons-color-standard.social-icons-style-regular .vsco .sqs-use--background,.social-icons-color-standard.social-icons-style-regular .vsco .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .vsco .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .vsco .sqs-use--icon{fill:rgba(174,153,90,.4)}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .vsco:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .vsco:hover .sqs-use--icon{fill:#ae995a}.social-icons-color-standard.social-icons-style-border .vsco{border-color:#ae995a}.social-icons-color-standard.social-icons-style-border .vsco .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-border .vsco .sqs-use--icon{fill:#ae995a}.social-icons-color-standard.social-icons-style-border .vsco .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-border .vsco:hover{background-color:#ae995a}.social-icons-color-standard.social-icons-style-border .vsco:hover .sqs-use--icon{fill:#fff}.social-icons-color-standard.social-icons-style-knockout .vsco .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .vsco .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .vsco .sqs-use--mask{fill:#ae995a}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .vsco .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .vsco .sqs-use--mask{fill:rgba(174,153,90,.4)}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .vsco:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .vsco:hover .sqs-use--mask{fill:#ae995a}.social-icons-color-standard.social-icons-style-solid .vsco .sqs-use--mask{fill:#ae995a}.social-icons-color-standard.social-icons-style-solid .vsco .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-solid .vsco .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .vsco .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .vsco .sqs-use--mask{fill:rgba(174,153,90,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .vsco .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .vsco .sqs-use--icon{fill:rgba(255,255,255,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .vsco .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .vsco .sqs-use--background{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .vsco:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .vsco:hover .sqs-use--mask{fill:#ae995a}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .vsco:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .vsco:hover .sqs-use--icon{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .vsco:hover .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .vsco:hover .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-regular .yelp .sqs-use--icon{fill:#c41200}.social-icons-color-standard.social-icons-style-regular .yelp .sqs-use--background,.social-icons-color-standard.social-icons-style-regular .yelp .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .yelp .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .yelp .sqs-use--icon{fill:rgba(196,18,0,.4)}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .yelp:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .yelp:hover .sqs-use--icon{fill:#c41200}.social-icons-color-standard.social-icons-style-border .yelp{border-color:#c41200}.social-icons-color-standard.social-icons-style-border .yelp .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-border .yelp .sqs-use--icon{fill:#c41200}.social-icons-color-standard.social-icons-style-border .yelp .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-border .yelp:hover{background-color:#c41200}.social-icons-color-standard.social-icons-style-border .yelp:hover .sqs-use--icon{fill:#fff}.social-icons-color-standard.social-icons-style-knockout .yelp .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .yelp .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .yelp .sqs-use--mask{fill:#c41200}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .yelp .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .yelp .sqs-use--mask{fill:rgba(196,18,0,.4)}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .yelp:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .yelp:hover .sqs-use--mask{fill:#c41200}.social-icons-color-standard.social-icons-style-solid .yelp .sqs-use--mask{fill:#c41200}.social-icons-color-standard.social-icons-style-solid .yelp .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-solid .yelp .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .yelp .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .yelp .sqs-use--mask{fill:rgba(196,18,0,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .yelp .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .yelp .sqs-use--icon{fill:rgba(255,255,255,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .yelp .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .yelp .sqs-use--background{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .yelp:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .yelp:hover .sqs-use--mask{fill:#c41200}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .yelp:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .yelp:hover .sqs-use--icon{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .yelp:hover .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .yelp:hover .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-regular .youtube .sqs-use--icon{fill:#e52d27}.social-icons-color-standard.social-icons-style-regular .youtube .sqs-use--background,.social-icons-color-standard.social-icons-style-regular .youtube .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .youtube .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .youtube .sqs-use--icon{fill:rgba(229,45,39,.4)}.social-icons-color-standard.social-icons-style-regular .sqs-svg-icon--list:hover .youtube:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-regular.sqs-svg-icon--list:hover .youtube:hover .sqs-use--icon{fill:#e52d27}.social-icons-color-standard.social-icons-style-border .youtube{border-color:#e52d27}.social-icons-color-standard.social-icons-style-border .youtube .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-border .youtube .sqs-use--icon{fill:#e52d27}.social-icons-color-standard.social-icons-style-border .youtube .sqs-use--mask{fill:transparent}.social-icons-color-standard.social-icons-style-border .youtube:hover{background-color:#e52d27}.social-icons-color-standard.social-icons-style-border .youtube:hover .sqs-use--icon{fill:#fff}.social-icons-color-standard.social-icons-style-knockout .youtube .sqs-use--background{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .youtube .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-knockout .youtube .sqs-use--mask{fill:#e52d27}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .youtube .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .youtube .sqs-use--mask{fill:rgba(229,45,39,.4)}.social-icons-color-standard.social-icons-style-knockout .sqs-svg-icon--list:hover .youtube:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-knockout.sqs-svg-icon--list:hover .youtube:hover .sqs-use--mask{fill:#e52d27}.social-icons-color-standard.social-icons-style-solid .youtube .sqs-use--mask{fill:#e52d27}.social-icons-color-standard.social-icons-style-solid .youtube .sqs-use--icon{fill:transparent}.social-icons-color-standard.social-icons-style-solid .youtube .sqs-use--background{fill:#fff}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .youtube .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .youtube .sqs-use--mask{fill:rgba(229,45,39,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .youtube .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .youtube .sqs-use--icon{fill:rgba(255,255,255,.4)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .youtube .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .youtube .sqs-use--background{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .youtube:hover .sqs-use--mask,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .youtube:hover .sqs-use--mask{fill:#e52d27}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .youtube:hover .sqs-use--icon,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .youtube:hover .sqs-use--icon{fill:rgba(255,255,255,0)}.social-icons-color-standard.social-icons-style-solid .sqs-svg-icon--list:hover .youtube:hover .sqs-use--background,.social-icons-color-standard.social-icons-style-solid.sqs-svg-icon--list:hover .youtube:hover .sqs-use--background{fill:#fff}.sqs-svg-icon--wrapper{-webkit-transition:background-color 170ms ease-in-out;-moz-transition:background-color 170ms ease-in-out;-ms-transition:background-color 170ms ease-in-out;-o-transition:background-color 170ms ease-in-out;transition:background-color 170ms ease-in-out}.sqs-use--icon,.sqs-use--mask,.sqs-use--background{-webkit-transition:fill 170ms ease-in-out;-moz-transition:fill 170ms ease-in-out;-ms-transition:fill 170ms ease-in-out;-o-transition:fill 170ms ease-in-out;transition:fill 170ms ease-in-out}.social-solid-icon-anim-out 0%{fill:#fff}.social-solid-icon-anim-out 100%{fill:rgba(255,255,255,.4)}@-webkit-keyframes social-solid-icon-anim-out{0%{fill:#fff}100%{fill:rgba(255,255,255,.4)}}@keyframes social-solid-icon-anim{0%{fill:#fff}100%{fill:rgba(255,255,255,.4)}}.social-solid-icon-anim-off 0%{fill:rgba(255,255,255,.4)}.social-solid-icon-anim-off 99%{fill:#fff}.social-solid-icon-anim-off 100%{fill:rgba(255,255,255,0)}@-webkit-keyframes social-solid-icon-anim-off{0%{fill:rgba(255,255,255,.4)}99%{fill:#fff}100%{fill:rgba(255,255,255,0)}}@keyframes social-solid-icon-anim{0%{fill:rgba(255,255,255,.4)}99%{fill:#fff}100%{fill:rgba(255,255,255,0)}}.social-solid-icon-anim-in 0%{fill:rgba(255,255,255,.4)}.social-solid-icon-anim-in 100%{fill:#fff}@-webkit-keyframes social-solid-icon-anim-in{0%{fill:rgba(255,255,255,.4)}100%{fill:#fff}}@keyframes social-solid-icon-anim{0%{fill:rgba(255,255,255,.4)}100%{fill:#fff}}.social-icons-style-solid .sqs-use--background{-webkit-transition:fill 0ms 170ms ease-in-out;-moz-transition:fill 0ms 170ms ease-in-out;-ms-transition:fill 0ms 170ms ease-in-out;-o-transition:fill 0ms 170ms ease-in-out;transition:fill 0ms 170ms ease-in-out}.social-icons-style-solid .sqs-use--icon{-webkit-animation:social-solid-icon-anim-off 170ms ease-in-out;animation:social-solid-icon-anim-off 170ms ease-in-out}.social-icons-style-solid .sqs-svg-icon--list:hover .sqs-use--icon,.social-icons-style-solid.sqs-svg-icon--list:hover .sqs-use--icon{-webkit-animation:social-solid-icon-anim-out 170ms ease-in-out;animation:social-solid-icon-anim-out 170ms ease-in-out}.social-icons-style-solid .sqs-svg-icon--list:hover .sqs-use--background,.social-icons-style-solid.sqs-svg-icon--list:hover .sqs-use--background{-webkit-transition:fill 0ms 0ms ease-in-out;-moz-transition:fill 0ms 0ms ease-in-out;-ms-transition:fill 0ms 0ms ease-in-out;-o-transition:fill 0ms 0ms ease-in-out;transition:fill 0ms 0ms ease-in-out}.social-icons-style-solid .sqs-svg-icon--list:hover .sqs-svg-icon--wrapper:hover .sqs-use--icon,.social-icons-style-solid.sqs-svg-icon--list:hover .sqs-svg-icon--wrapper:hover .sqs-use--icon{-webkit-animation:social-solid-icon-anim-in 170ms ease-in-out;animation:social-solid-icon-anim-in 170ms ease-in-out}.social-icons-style-solid .sqs-svg-icon--list:hover .sqs-svg-icon--wrapper:hover .sqs-use--background,.social-icons-style-solid.sqs-svg-icon--list:hover .sqs-svg-icon--wrapper:hover .sqs-use--background{-webkit-transition:fill 0ms 160ms ease-in-out;-moz-transition:fill 0ms 160ms ease-in-out;-ms-transition:fill 0ms 160ms ease-in-out;-o-transition:fill 0ms 160ms ease-in-out;transition:fill 0ms 160ms ease-in-out}.sqs-svg-icon--list.social-icon-alignment-left{text-align:left}.sqs-svg-icon--list.social-icon-alignment-right{text-align:right}.sqs-svg-icon--list.social-icon-alignment-center{text-align:center}.rss-block .social-rss:before,.rss-block .social-rss-square:before,.rss-block .social-rss-round:before{font-family:'social-icon-font';speak:none;font-style:normal;font-weight:normal;line-height:1;-webkit-font-smoothing:antialiased;position:relative;top:0;margin-right:10px;font-size:.7em}.rss-block .social-rss:before{content:"\e630"}.social-icons-style-regular .sqs-use--icon{fill:#fff}.social-icons-style-regular .sqs-use--background,.social-icons-style-regular .sqs-use--mask{fill:transparent}.social-icons-style-regular.social-icons-color-white .sqs-use--icon{fill:#fff}.social-icons-style-regular.social-icons-color-white .sqs-use--background,.social-icons-style-regular.social-icons-color-white .sqs-use--mask{fill:transparent}.social-icons-style-regular.social-icons-color-black .sqs-use--icon{fill:#222}.social-icons-style-regular.social-icons-color-black .sqs-use--background,.social-icons-style-regular.social-icons-color-black .sqs-use--mask{fill:transparent}.social-icons-style-border .sqs-svg-icon--wrapper{border-color:#fff}.social-icons-style-border .sqs-use--icon{fill:#fff}.social-icons-style-border .sqs-use--background,.social-icons-style-border .sqs-use--mask{fill:transparent}.social-icons-style-border.social-icons-color-white .sqs-svg-icon--wrapper{border-color:#fff}.social-icons-style-border.social-icons-color-white .sqs-use--icon{fill:#fff}.social-icons-style-border.social-icons-color-white .sqs-use--background,.social-icons-style-border.social-icons-color-white .sqs-use--mask{fill:transparent}.social-icons-style-border.social-icons-color-black .sqs-svg-icon--wrapper{border-color:#222}.social-icons-style-border.social-icons-color-black .sqs-use--icon{fill:#222}.social-icons-style-border.social-icons-color-black .sqs-use--background,.social-icons-style-border.social-icons-color-black .sqs-use--mask{fill:transparent}.social-icons-style-knockout .sqs-use--mask{fill:#fff}.social-icons-style-knockout .sqs-use--background,.social-icons-style-knockout .sqs-use--icon{fill:transparent}.social-icons-style-knockout.social-icons-color-white .sqs-use--mask{fill:#fff}.social-icons-style-knockout.social-icons-color-white .sqs-use--background,.social-icons-style-knockout.social-icons-color-white .sqs-use--icon{fill:transparent}.social-icons-style-knockout.social-icons-color-black .sqs-use--mask{fill:#222}.social-icons-style-knockout.social-icons-color-black .sqs-use--background,.social-icons-style-knockout.social-icons-color-black .sqs-use--icon{fill:transparent}.social-icons-style-solid .sqs-use--icon{fill:#222}.social-icons-style-solid .sqs-use--background{fill:#222}.social-icons-style-solid .sqs-use--mask{fill:#fff}.social-icons-style-solid.social-icons-color-white .sqs-use--icon{fill:#222}.social-icons-style-solid.social-icons-color-white .sqs-use--background{fill:#fff}.social-icons-style-solid.social-icons-color-white .sqs-use--mask{fill:#fff}.social-icons-style-solid.social-icons-color-black .sqs-use--icon{fill:#fff}.social-icons-style-solid.social-icons-color-black .sqs-use--background{fill:#222}.social-icons-style-solid.social-icons-color-black .sqs-use--mask{fill:#222}.social-icons-style-border .sqs-svg-icon--wrapper:hover{background-color:#fff}.social-icons-style-border .sqs-svg-icon--wrapper:hover .sqs-use--icon{fill:#222}.social-icons-style-border.social-icons-color-white .sqs-svg-icon--wrapper:hover{background-color:#fff}.social-icons-style-border.social-icons-color-white .sqs-svg-icon--wrapper:hover .sqs-use--icon{fill:#222}.social-icons-style-border.social-icons-color-black .sqs-svg-icon--wrapper:hover{background-color:#222}.social-icons-style-border.social-icons-color-black .sqs-svg-icon--wrapper:hover .sqs-use--icon{fill:#fff}.social-icons-style-regular:hover .sqs-svg-icon--wrapper .sqs-use--icon{fill:rgba(255,255,255,.4)}.social-icons-style-regular:hover .sqs-svg-icon--wrapper:hover .sqs-use--icon{fill:#fff}.social-icons-style-regular.social-icons-color-white:hover .sqs-svg-icon--wrapper .sqs-use--icon{fill:rgba(255,255,255,.4)}.social-icons-style-regular.social-icons-color-white:hover .sqs-svg-icon--wrapper:hover .sqs-use--icon{fill:#fff}.social-icons-style-regular.social-icons-color-black:hover .sqs-svg-icon--wrapper .sqs-use--icon{fill:rgba(34,34,34,.4)}.social-icons-style-regular.social-icons-color-black:hover .sqs-svg-icon--wrapper:hover .sqs-use--icon{fill:#222}.social-icons-style-knockout:hover .sqs-svg-icon--wrapper .sqs-use--mask{fill:rgba(255,255,255,.4)}.social-icons-style-knockout:hover .sqs-svg-icon--wrapper:hover .sqs-use--mask{fill:#fff}.social-icons-style-knockout.social-icons-color-white:hover .sqs-svg-icon--wrapper .sqs-use--mask{fill:rgba(255,255,255,.4)}.social-icons-style-knockout.social-icons-color-white:hover .sqs-svg-icon--wrapper:hover .sqs-use--mask{fill:#fff}.social-icons-style-knockout.social-icons-color-black:hover .sqs-svg-icon--wrapper .sqs-use--mask{fill:rgba(34,34,34,.4)}.social-icons-style-knockout.social-icons-color-black:hover .sqs-svg-icon--wrapper:hover .sqs-use--mask{fill:#222}.social-icons-style-solid:hover .sqs-svg-icon--wrapper .sqs-use--mask{fill:rgba(255,255,255,.4)}.social-icons-style-solid:hover .sqs-svg-icon--wrapper .sqs-use--icon{fill:rgba(34,34,34,.4)}.social-icons-style-solid:hover .sqs-svg-icon--wrapper .sqs-use--background{fill:rgba(34,34,34,0)}.social-icons-style-solid:hover .sqs-svg-icon--wrapper:hover .sqs-use--mask{fill:#fff}.social-icons-style-solid:hover .sqs-svg-icon--wrapper:hover .sqs-use--icon{fill:rgba(34,34,34,0)}.social-icons-style-solid:hover .sqs-svg-icon--wrapper:hover .sqs-use--background{fill:#222}.social-icons-style-solid.social-icons-color-white:hover .sqs-svg-icon--wrapper .sqs-use--mask,.social-icons-style-solid.social-icons-color-black:hover .sqs-svg-icon--wrapper .sqs-use--mask{fill:rgba(255,255,255,.4)}.social-icons-style-solid.social-icons-color-white:hover .sqs-svg-icon--wrapper .sqs-use--icon,.social-icons-style-solid.social-icons-color-black:hover .sqs-svg-icon--wrapper .sqs-use--icon{fill:rgba(34,34,34,.4)}.social-icons-style-solid.social-icons-color-white:hover .sqs-svg-icon--wrapper .sqs-use--background,.social-icons-style-solid.social-icons-color-black:hover .sqs-svg-icon--wrapper .sqs-use--background{fill:rgba(34,34,34,0)}.social-icons-style-solid.social-icons-color-white:hover .sqs-svg-icon--wrapper:hover .sqs-use--mask,.social-icons-style-solid.social-icons-color-black:hover .sqs-svg-icon--wrapper:hover .sqs-use--mask{fill:#222}.social-icons-style-solid.social-icons-color-white:hover .sqs-svg-icon--wrapper:hover .sqs-use--icon,.social-icons-style-solid.social-icons-color-black:hover .sqs-svg-icon--wrapper:hover .sqs-use--icon{fill:rgba(255,255,255,0)}.social-icons-style-solid.social-icons-color-white:hover .sqs-svg-icon--wrapper:hover .sqs-use--background,.social-icons-style-solid.social-icons-color-black:hover .sqs-svg-icon--wrapper:hover .sqs-use--background{fill:#fff}@font-face{font-family:'social-icon-font';src:url('//static.squarespace.com/universal/fonts/social-20141119/social-icon-font.eot');src:url('//static.squarespace.com/universal/fonts/social-20141119/social-icon-font.eot?#iefix') format('embedded-opentype'),url('//static.squarespace.com/universal/fonts/social-20141119/social-icon-font.woff') format('woff'),url('//static.squarespace.com/universal/fonts/social-20141119/social-icon-font.ttf') format('truetype'),url('//static.squarespace.com/universal/fonts/social-20141119/social-icon-font.svg#social-icon-font') format('svg');font-weight:normal;font-style:normal}.social-smugmug:before,.social-dribbble:before,.social-youtube:before,.social-vimeo:before,.social-twitter:before,.social-tumblr:before,.social-pinterest:before,.social-linkedin:before,.social-instagram:before,.social-google:before,.social-foursquare:before,.social-flickr:before,.social-facebook:before,.social-fivehundredpix:before,.social-fivehundredpx:before,.social-email:before,.social-github:before,.social-rss:before,.social-spotify:before,.social-soundcloud:before,.social-itunes:before,.social-googleplay:before,.social-dropbox:before,.social-bandsintown:before,.social-behance:before,.social-codepen:before,.social-medium:before,.social-rdio:before,.social-squarespace:before,.social-vine:before,.social-yelp:before,.social-vevo:before,.social-meetup:before,.social-twitch:before,.social-vsco:before,.social-smugmug-square:before,.social-dribbble-square:before,.social-youtube-square:before,.social-vimeo-square:before,.social-twitter-square:before,.social-tumblr-square:before,.social-pinterest-square:before,.social-linkedin-square:before,.social-instagram-square:before,.social-google-square:before,.social-foursquare-square:before,.social-flickr-square:before,.social-facebook-square:before,.social-fivehundredpix-square:before,.social-fivehundredpx-square:before,.social-email-square:before,.social-github-square:before,.social-rss-square:before,.social-spotify-square:before,.social-soundcloud-square:before,.social-itunes-square:before,.social-googleplay-square:before,.social-dropbox-square:before,.social-bandsintown-square:before,.social-behance-square:before,.social-codepen-square:before,.social-medium-square:before,.social-rdio-square:before,.social-squarespace-square:before,.social-vine-square:before,.social-yelp-square:before,.social-vevo-square:before,.social-meetup-square:before,.social-twitch-square:before,.social-vsco-square:before,.social-smugmug-round:before,.social-dribbble-round:before,.social-youtube-round:before,.social-vimeo-round:before,.social-twitter-round:before,.social-tumblr-round:before,.social-pinterest-round:before,.social-linkedin-round:before,.social-instagram-round:before,.social-google-round:before,.social-foursquare-round:before,.social-flickr-round:before,.social-facebook-round:before,.social-fivehundredpix-round:before,.social-fivehundredpx-round:before,.social-email-round:before,.social-github-round:before,.social-rss-round:before,.social-spotify-round:before,.social-soundcloud-round:before,.social-itunes-round:before,.social-googleplay-round:before,.social-dropbox-round:before,.social-bandsintown-round:before,.social-behance-round:before,.social-codepen-round:before,.social-medium-round:before,.social-rdio-round:before,.social-squarespace-round:before,.social-vine-round:before,.social-yelp-round:before,.social-vevo-round:before,.social-meetup-round:before,.social-twitch-round:before,.social-vsco-round:before{font-family:'social-icon-font';speak:none;font-style:normal;font-weight:normal;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.social-smugmug:before{content:"\e600"}.social-icon-style-square .social-smugmug:before{content:"\e601"}.social-icon-style-round .social-smugmug:before{content:"\e602"}.social-dribbble:before{content:"\e603"}.social-icon-style-square .social-dribbble:before{content:"\e604"}.social-icon-style-round .social-dribbble:before{content:"\e605"}.social-youtube:before{content:"\e606"}.social-icon-style-square .social-youtube:before{content:"\e607"}.social-icon-style-round .social-youtube:before{content:"\e608"}.social-vimeo:before{content:"\e609"}.social-icon-style-square .social-vimeo:before{content:"\e60a"}.social-icon-style-round .social-vimeo:before{content:"\e60b"}.social-twitter:before{content:"\e60c"}.social-icon-style-square .social-twitter:before{content:"\e60d"}.social-icon-style-round .social-twitter:before{content:"\e60e"}/*IE9_SPLIT_MARKER*/
        .social-tumblr:before {
            content: "\e60f"
        }

        .social-icon-style-square .social-tumblr:before {
            content: "\e610"
        }

        .social-icon-style-round .social-tumblr:before {
            content: "\e611"
        }

        .social-pinterest:before {
            content: "\e612"
        }

        .social-icon-style-square .social-pinterest:before {
            content: "\e613"
        }

        .social-icon-style-round .social-pinterest:before {
            content: "\e614"
        }

        .social-linkedin:before {
            content: "\e615"
        }

        .social-icon-style-square .social-linkedin:before {
            content: "\e616"
        }

        .social-icon-style-round .social-linkedin:before {
            content: "\e617"
        }

        .social-instagram:before {
            content: "\e618"
        }

        .social-icon-style-square .social-instagram:before {
            content: "\e619"
        }

        .social-icon-style-round .social-instagram:before {
            content: "\e61a"
        }

        .social-google:before {
            content: "\e61b"
        }

        .social-icon-style-square .social-google:before {
            content: "\e61c"
        }

        .social-icon-style-round .social-google:before {
            content: "\e61d"
        }

        .social-googleauth2:before {
            content: "\e61b"
        }

        .social-foursquare:before {
            content: "\e61e"
        }

        .social-icon-style-square .social-foursquare:before {
            content: "\e61f"
        }

        .social-icon-style-round .social-foursquare:before {
            content: "\e620"
        }

        .social-flickr:before {
            content: "\e621"
        }

        .social-icon-style-square .social-flickr:before {
            content: "\e622"
        }

        .social-icon-style-round .social-flickr:before {
            content: "\e623"
        }

        .social-facebook:before {
            content: "\e624"
        }

        .social-icon-style-square .social-facebook:before {
            content: "\e625"
        }

        .social-icon-style-round .social-facebook:before {
            content: "\e626"
        }

        .social-fivehundredpix:before {
            content: "\e627"
        }

        .social-icon-style-square .social-fivehundredpix:before {
            content: "\e628"
        }

        .social-icon-style-round .social-fivehundredpix:before {
            content: "\e629"
        }

        .social-fivehundredpx:before {
            content: "\e627"
        }

        .social-icon-style-square .social-fivehundredpx:before {
            content: "\e628"
        }

        .social-icon-style-round .social-fivehundredpx:before {
            content: "\e629"
        }

        .social-email:before {
            content: "\e62a"
        }

        .social-icon-style-square .social-email:before {
            content: "\e62b"
        }

        .social-icon-style-round .social-email:before {
            content: "\e62c"
        }

        .social-github:before {
            content: "\e62d"
        }

        .social-icon-style-square .social-github:before {
            content: "\e62e"
        }

        .social-icon-style-round .social-github:before {
            content: "\e62f"
        }

        .social-rss:before {
            content: "\e630"
        }

        .social-icon-style-square .social-rss:before {
            content: "\e631"
        }

        .social-icon-style-round .social-rss:before {
            content: "\e632"
        }

        .social-spotify:before {
            content: "\e633"
        }

        .social-icon-style-square .social-spotify:before {
            content: "\e634"
        }

        .social-icon-style-round .social-spotify:before {
            content: "\e635"
        }

        .social-soundcloud:before {
            content: "\e636"
        }

        .social-icon-style-square .social-soundcloud:before {
            content: "\e637"
        }

        .social-icon-style-round .social-soundcloud:before {
            content: "\e638"
        }

        .social-itunes:before {
            content: "\e639"
        }

        .social-icon-style-square .social-itunes:before {
            content: "\e63a"
        }

        .social-icon-style-round .social-itunes:before {
            content: "\e63b"
        }

        .social-googleplay:before {
            content: "\e63c"
        }

        .social-icon-style-square .social-googleplay:before {
            content: "\e63d"
        }

        .social-icon-style-round .social-googleplay:before {
            content: "\e63e"
        }

        .social-dropbox:before {
            content: "\e63f"
        }

        .social-icon-style-square .social-dropbox:before {
            content: "\e640"
        }

        .social-icon-style-round .social-dropbox:before {
            content: "\e641"
        }

        .social-bandsintown:before {
            content: "\e642"
        }

        .social-icon-style-square .social-bandsintown:before {
            content: "\e643"
        }

        .social-icon-style-round .social-bandsintown:before {
            content: "\e644"
        }

        .social-behance:before {
            content: "\e645"
        }

        .social-icon-style-square .social-behance:before {
            content: "\e646"
        }

        .social-icon-style-round .social-behance:before {
            content: "\e647"
        }

        .social-codepen:before {
            content: "\e648"
        }

        .social-icon-style-square .social-codepen:before {
            content: "\e649"
        }

        .social-icon-style-round .social-codepen:before {
            content: "\e64a"
        }

        .social-medium:before {
            content: "\e64b"
        }

        .social-icon-style-square .social-medium:before {
            content: "\e64c"
        }

        .social-icon-style-round .social-medium:before {
            content: "\e64d"
        }

        .social-rdio:before {
            content: "\e64e"
        }

        .social-icon-style-square .social-rdio:before {
            content: "\e64f"
        }

        .social-icon-style-round .social-rdio:before {
            content: "\e650"
        }

        .social-squarespace:before {
            content: "\e651"
        }

        .social-icon-style-square .social-squarespace:before {
            content: "\e652"
        }

        .social-icon-style-round .social-squarespace:before {
            content: "\e653"
        }

        .social-vine:before {
            content: "\e654"
        }

        .social-icon-style-square .social-vine:before {
            content: "\e655"
        }

        .social-icon-style-round .social-vine:before {
            content: "\e656"
        }

        .social-yelp:before {
            content: "\e657"
        }

        .social-icon-style-square .social-yelp:before {
            content: "\e658"
        }

        .social-icon-style-round .social-yelp:before {
            content: "\e659"
        }

        .social-meetup:before {
            content: "\e65a"
        }

        .social-icon-style-square .social-meetup:before {
            content: "\e65b"
        }

        .social-icon-style-round .social-meetup:before {
            content: "\e65c"
        }

        .social-vevo:before {
            content: "\e65d"
        }

        .social-icon-style-square .social-vevo:before {
            content: "\e65e"
        }

        .social-icon-style-round .social-vevo:before {
            content: "\e65f"
        }

        .social-twitch:before {
            content: "\e660"
        }

        .social-icon-style-square .social-twitch:before {
            content: "\e661"
        }

        .social-icon-style-round .social-twitch:before {
            content: "\e662"
        }

        .social-vsco:before {
            content: "\e663"
        }

        .social-icon-style-square .social-vsco:before {
            content: "\e664"
        }

        .social-icon-style-round .social-vsco:before {
            content: "\e665"
        }

        .sqs-block-socialaccountlinks .social-account-svg-list, .sqs-block-socialaccountlinks-v2 .social-account-svg-list {
            text-align: left
        }

        .sqs-block-socialaccountlinks .social-account-svg-list:before, .sqs-block-socialaccountlinks-v2 .social-account-svg-list:before, .sqs-block-socialaccountlinks .social-account-svg-list:after, .sqs-block-socialaccountlinks-v2 .social-account-svg-list:after {
            content: "";
            display: table
        }

        .sqs-block-socialaccountlinks .social-account-svg-list:after, .sqs-block-socialaccountlinks-v2 .social-account-svg-list:after {
            clear: both
        }

        .sqs-block-socialaccountlinks .social-account-svg-list a, .sqs-block-socialaccountlinks-v2 .social-account-svg-list a, .sqs-block-socialaccountlinks .social-account-svg-list a:link, .sqs-block-socialaccountlinks-v2 .social-account-svg-list a:link, .sqs-block-socialaccountlinks .social-account-svg-list a:visited, .sqs-block-socialaccountlinks-v2 .social-account-svg-list a:visited {
            display: inline-block;
            width: 20px;
            height: 20px;
            font-size: 20px;
            color: #111;
            text-decoration: none !important;
            font-weight: normal
        }

        .sqs-block-socialaccountlinks .social-account-svg-list a:before, .sqs-block-socialaccountlinks-v2 .social-account-svg-list a:before, .sqs-block-socialaccountlinks .social-account-svg-list a:link:before, .sqs-block-socialaccountlinks-v2 .social-account-svg-list a:link:before, .sqs-block-socialaccountlinks .social-account-svg-list a:visited:before, .sqs-block-socialaccountlinks-v2 .social-account-svg-list a:visited:before {
            font-size: 20px;
            line-height: 20px
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-alignment-left a, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-alignment-left a {
            margin-right: .75em
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-alignment-right a, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-alignment-right a {
            margin-left: .75em
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-alignment-center a, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-alignment-center a {
            margin: 0 .375em
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-alignment-center, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-alignment-center {
            text-align: center
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-alignment-right, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-alignment-right {
            text-align: right
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-white a, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-white a, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-white a:visited, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-white a:visited {
            color: #fff
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-bandsintown, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-bandsintown, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-bandsintown, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-bandsintown, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-bandsintown, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-bandsintown {
            color: #00b4b3
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-behance, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-behance, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-behance, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-behance, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-behance, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-behance {
            color: #1769ff
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-codepen, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-codepen, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-codepen, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-codepen, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-codepen, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-codepen {
            color: #222
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-dribbble, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-dribbble, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-dribbble, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-dribbble, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-dribbble, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-dribbble {
            color: #ea4c89
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-dropbox, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-dropbox, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-dropbox, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-dropbox, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-dropbox, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-dropbox {
            color: #007ee5
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-email, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-email, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-email, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-email, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-email, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-email {
            color: #222
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-facebook, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-facebook, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-facebook, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-facebook, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-facebook, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-facebook {
            color: #3b5998
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-fivehundredpix, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-fivehundredpix, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-fivehundredpix, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-fivehundredpix, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-fivehundredpix, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-fivehundredpix, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-fivehundredpx, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-fivehundredpx, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-fivehundredpx, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-fivehundredpx, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-fivehundredpx, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-fivehundredpx {
            color: #0099e5
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-flickr, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-flickr, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-flickr, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-flickr, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-flickr, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-flickr {
            color: #0063dc
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-foursquare, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-foursquare, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-foursquare, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-foursquare, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-foursquare, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-foursquare {
            color: #f94877
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-github, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-github, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-github, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-github, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-github, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-github {
            color: #4183c4
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-google, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-google, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-google, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-google, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-google, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-google {
            color: #dc4e41
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-googleplay, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-googleplay, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-googleplay, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-googleplay, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-googleplay, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-googleplay {
            color: #5adfcb
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-instagram, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-instagram, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-instagram, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-instagram, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-instagram, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-instagram {
            color: #3f729b
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-itunes, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-itunes, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-itunes, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-itunes, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-itunes, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-itunes {
            color: #ec4652
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-linkedin, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-linkedin, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-linkedin, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-linkedin, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-linkedin, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-linkedin {
            color: #0976b4
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-medium, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-medium, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-medium, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-medium, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-medium, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-medium {
            color: #00ab6c
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-meetup, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-meetup, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-meetup, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-meetup, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-meetup, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-meetup {
            color: #e0393e
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-pinterest, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-pinterest, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-pinterest, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-pinterest, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-pinterest, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-pinterest {
            color: #cc2127
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-rdio, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-rdio, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-rdio, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-rdio, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-rdio, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-rdio {
            color: #006ed2
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-rss, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-rss, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-rss, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-rss, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-rss, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-rss {
            color: #222
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-smugmug, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-smugmug, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-smugmug, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-smugmug, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-smugmug, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-smugmug {
            color: #7dbb00
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-soundcloud, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-soundcloud, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-soundcloud, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-soundcloud, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-soundcloud, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-soundcloud {
            color: #f80
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-spotify, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-spotify, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-spotify, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-spotify, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-spotify, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-spotify {
            color: #84bd00
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-squarespace, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-squarespace, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-squarespace, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-squarespace, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-squarespace, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-squarespace {
            color: #222
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-tumblr, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-tumblr, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-tumblr, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-tumblr, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-tumblr, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-tumblr {
            color: #35465d
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-twitter, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-twitter, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-twitter, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-twitter, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-twitter, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-twitter {
            color: #55acee
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-vimeo, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-vimeo, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-vimeo, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-vimeo, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-vimeo, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-vimeo {
            color: #1ab7ea
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-vine, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-vine, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-vine, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-vine, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-vine, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-vine {
            color: #00b488
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-yelp, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-yelp, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-yelp, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-yelp, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-yelp, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-yelp {
            color: #c41200
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-youtube, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-youtube, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-youtube, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-youtube, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-youtube, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-youtube {
            color: #e52d27
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-meetup, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-meetup, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-meetup, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-meetup, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-meetup, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-meetup {
            color: #e0393e
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-vevo, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-vevo, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-vevo, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-vevo, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-vevo, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-vevo {
            color: #ff0031
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-twitch, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-twitch, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-twitch, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-twitch, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-twitch, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-twitch {
            color: #6441a5
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-vsco, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-vsco, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-vsco, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-vsco, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-vsco, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-vsco {
            color: #ae995a
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-large a, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-large a, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-large a:link, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-large a:link, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-large a:visited, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-large a:visited {
            width: 24px;
            height: 24px;
            font-size: 24px
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-large a:before, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-large a:before, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-large a:link:before, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-large a:link:before, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-large a:visited:before, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-large a:visited:before {
            font-size: 24px;
            line-height: 24px
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-small a, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-small a, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-small a:link, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-small a:link, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-small a:visited, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-small a:visited {
            width: 16px;
            height: 16px;
            font-size: 16px
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-small a:before, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-small a:before, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-small a:link:before, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-small a:link:before, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-small a:visited:before, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-small a:visited:before {
            font-size: 16px;
            line-height: 16px
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-style-round a, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-style-round a, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-style-square a, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-style-square a, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-style-round a:link, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-style-round a:link, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-style-square a:link, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-style-square a:link, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-style-round a:visited, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-style-round a:visited, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-style-square a:visited, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-style-square a:visited {
            width: 30px;
            height: 30px;
            font-size: 30px
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-style-round a:before, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-style-round a:before, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-style-square a:before, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-style-square a:before, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-style-round a:link:before, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-style-round a:link:before, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-style-square a:link:before, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-style-square a:link:before, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-style-round a:visited:before, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-style-round a:visited:before, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-style-square a:visited:before, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-style-square a:visited:before {
            font-size: 30px;
            line-height: 30px
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-style-round.social-icon-alignment-left a, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-style-round.social-icon-alignment-left a, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-style-square.social-icon-alignment-left a, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-style-square.social-icon-alignment-left a {
            margin-right: .25em
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-style-round.social-icon-alignment-right a, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-style-round.social-icon-alignment-right a, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-style-square.social-icon-alignment-right a, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-style-square.social-icon-alignment-right a {
            margin-left: .25em
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-style-round.social-icon-alignment-center a, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-style-round.social-icon-alignment-center a, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-style-square.social-icon-alignment-center a, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-style-square.social-icon-alignment-center a {
            margin: 0 .125em
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-large.social-icon-style-round a, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-large.social-icon-style-round a, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-large.social-icon-style-square a, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-large.social-icon-style-square a, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-large.social-icon-style-round a:link, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-large.social-icon-style-round a:link, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-large.social-icon-style-square a:link, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-large.social-icon-style-square a:link, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-large.social-icon-style-round a:visited, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-large.social-icon-style-round a:visited, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-large.social-icon-style-square a:visited, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-large.social-icon-style-square a:visited {
            width: 36px;
            height: 36px;
            font-size: 36px
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-large.social-icon-style-round a:before, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-large.social-icon-style-round a:before, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-large.social-icon-style-square a:before, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-large.social-icon-style-square a:before, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-large.social-icon-style-round a:link:before, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-large.social-icon-style-round a:link:before, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-large.social-icon-style-square a:link:before, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-large.social-icon-style-square a:link:before, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-large.social-icon-style-round a:visited:before, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-large.social-icon-style-round a:visited:before, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-large.social-icon-style-square a:visited:before, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-large.social-icon-style-square a:visited:before {
            font-size: 36px;
            line-height: 36px
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-small.social-icon-style-round a, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-small.social-icon-style-round a, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-small.social-icon-style-square a, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-small.social-icon-style-square a, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-small.social-icon-style-round a:link, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-small.social-icon-style-round a:link, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-small.social-icon-style-square a:link, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-small.social-icon-style-square a:link, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-small.social-icon-style-round a:visited, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-small.social-icon-style-round a:visited, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-small.social-icon-style-square a:visited, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-small.social-icon-style-square a:visited {
            width: 24px;
            height: 24px;
            font-size: 24px
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-small.social-icon-style-round a:before, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-small.social-icon-style-round a:before, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-small.social-icon-style-square a:before, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-small.social-icon-style-square a:before, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-small.social-icon-style-round a:link:before, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-small.social-icon-style-round a:link:before, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-small.social-icon-style-square a:link:before, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-small.social-icon-style-square a:link:before, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-small.social-icon-style-round a:visited:before, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-small.social-icon-style-round a:visited:before, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-small.social-icon-style-square a:visited:before, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-small.social-icon-style-square a:visited:before {
            font-size: 24px;
            line-height: 24px
        }

        .sqs-album-block {
            zoom: 1;
            font-size: 13px;
            color: #282828
        }

        .sqs-album-block .social-links {
            display: inline-block;
            line-height: 3em
        }

        .sqs-album-block .social-links .social-account-svg-list {
            text-align: left
        }

        .sqs-album-block .social-links .social-account-svg-list:before, .sqs-album-block .social-links .social-account-svg-list:after {
            content: "";
            display: table
        }

        .sqs-album-block .social-links .social-account-svg-list:after {
            clear: both
        }

        .sqs-album-block .social-links .social-account-svg-list a, .sqs-album-block .social-links .social-account-svg-list a:link, .sqs-album-block .social-links .social-account-svg-list a:visited {
            display: inline-block;
            width: 20px;
            height: 20px;
            font-size: 20px;
            color: #111;
            text-decoration: none !important;
            font-weight: normal
        }

        .sqs-album-block .social-links .social-account-svg-list a:before, .sqs-album-block .social-links .social-account-svg-list a:link:before, .sqs-album-block .social-links .social-account-svg-list a:visited:before {
            font-size: 20px;
            line-height: 20px
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-alignment-left a {
            margin-right: .75em
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-alignment-right a {
            margin-left: .75em
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-alignment-center a {
            margin: 0 .375em
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-alignment-center {
            text-align: center
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-alignment-right {
            text-align: right
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-white a, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-white a:visited {
            color: #fff
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-bandsintown, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-bandsintown, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-bandsintown {
            color: #00b4b3
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-behance, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-behance, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-behance {
            color: #1769ff
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-codepen, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-codepen, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-codepen {
            color: #222
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-dribbble, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-dribbble, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-dribbble {
            color: #ea4c89
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-dropbox, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-dropbox, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-dropbox {
            color: #007ee5
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-email, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-email, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-email {
            color: #222
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-facebook, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-facebook, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-facebook {
            color: #3b5998
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-fivehundredpix, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-fivehundredpix, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-fivehundredpix, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-fivehundredpx, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-fivehundredpx, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-fivehundredpx {
            color: #0099e5
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-flickr, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-flickr, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-flickr {
            color: #0063dc
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-foursquare, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-foursquare, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-foursquare {
            color: #f94877
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-github, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-github, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-github {
            color: #4183c4
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-google, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-google, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-google {
            color: #dc4e41
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-googleplay, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-googleplay, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-googleplay {
            color: #5adfcb
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-instagram, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-instagram, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-instagram {
            color: #3f729b
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-itunes, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-itunes, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-itunes {
            color: #ec4652
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-linkedin, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-linkedin, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-linkedin {
            color: #0976b4
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-medium, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-medium, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-medium {
            color: #00ab6c
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-meetup, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-meetup, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-meetup {
            color: #e0393e
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-pinterest, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-pinterest, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-pinterest {
            color: #cc2127
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-rdio, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-rdio, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-rdio {
            color: #006ed2
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-rss, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-rss, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-rss {
            color: #222
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-smugmug, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-smugmug, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-smugmug {
            color: #7dbb00
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-soundcloud, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-soundcloud, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-soundcloud {
            color: #f80
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-spotify, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-spotify, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-spotify {
            color: #84bd00
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-squarespace, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-squarespace, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-squarespace {
            color: #222
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-tumblr, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-tumblr, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-tumblr {
            color: #35465d
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-twitter, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-twitter, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-twitter {
            color: #55acee
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-vimeo, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-vimeo, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-vimeo {
            color: #1ab7ea
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-vine, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-vine, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-vine {
            color: #00b488
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-yelp, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-yelp, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-yelp {
            color: #c41200
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-youtube, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-youtube, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-youtube {
            color: #e52d27
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-meetup, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-meetup, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-meetup {
            color: #e0393e
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-vevo, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-vevo, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-vevo {
            color: #ff0031
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-twitch, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-twitch, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-twitch {
            color: #6441a5
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-vsco, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-vsco, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-vsco {
            color: #ae995a
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-size-large a, .sqs-album-block .social-links .social-account-svg-list.social-icon-size-large a:link, .sqs-album-block .social-links .social-account-svg-list.social-icon-size-large a:visited {
            width: 24px;
            height: 24px;
            font-size: 24px
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-size-large a:before, .sqs-album-block .social-links .social-account-svg-list.social-icon-size-large a:link:before, .sqs-album-block .social-links .social-account-svg-list.social-icon-size-large a:visited:before {
            font-size: 24px;
            line-height: 24px
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-size-small a, .sqs-album-block .social-links .social-account-svg-list.social-icon-size-small a:link, .sqs-album-block .social-links .social-account-svg-list.social-icon-size-small a:visited {
            width: 16px;
            height: 16px;
            font-size: 16px
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-size-small a:before, .sqs-album-block .social-links .social-account-svg-list.social-icon-size-small a:link:before, .sqs-album-block .social-links .social-account-svg-list.social-icon-size-small a:visited:before {
            font-size: 16px;
            line-height: 16px
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-style-round a, .sqs-album-block .social-links .social-account-svg-list.social-icon-style-square a, .sqs-album-block .social-links .social-account-svg-list.social-icon-style-round a:link, .sqs-album-block .social-links .social-account-svg-list.social-icon-style-square a:link, .sqs-album-block .social-links .social-account-svg-list.social-icon-style-round a:visited, .sqs-album-block .social-links .social-account-svg-list.social-icon-style-square a:visited {
            width: 30px;
            height: 30px;
            font-size: 30px
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-style-round a:before, .sqs-album-block .social-links .social-account-svg-list.social-icon-style-square a:before, .sqs-album-block .social-links .social-account-svg-list.social-icon-style-round a:link:before, .sqs-album-block .social-links .social-account-svg-list.social-icon-style-square a:link:before, .sqs-album-block .social-links .social-account-svg-list.social-icon-style-round a:visited:before, .sqs-album-block .social-links .social-account-svg-list.social-icon-style-square a:visited:before {
            font-size: 30px;
            line-height: 30px
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-style-round.social-icon-alignment-left a, .sqs-album-block .social-links .social-account-svg-list.social-icon-style-square.social-icon-alignment-left a {
            margin-right: .25em
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-style-round.social-icon-alignment-right a, .sqs-album-block .social-links .social-account-svg-list.social-icon-style-square.social-icon-alignment-right a {
            margin-left: .25em
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-style-round.social-icon-alignment-center a, .sqs-album-block .social-links .social-account-svg-list.social-icon-style-square.social-icon-alignment-center a {
            margin: 0 .125em
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-size-large.social-icon-style-round a, .sqs-album-block .social-links .social-account-svg-list.social-icon-size-large.social-icon-style-square a, .sqs-album-block .social-links .social-account-svg-list.social-icon-size-large.social-icon-style-round a:link, .sqs-album-block .social-links .social-account-svg-list.social-icon-size-large.social-icon-style-square a:link, .sqs-album-block .social-links .social-account-svg-list.social-icon-size-large.social-icon-style-round a:visited, .sqs-album-block .social-links .social-account-svg-list.social-icon-size-large.social-icon-style-square a:visited {
            width: 36px;
            height: 36px;
            font-size: 36px
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-size-large.social-icon-style-round a:before, .sqs-album-block .social-links .social-account-svg-list.social-icon-size-large.social-icon-style-square a:before, .sqs-album-block .social-links .social-account-svg-list.social-icon-size-large.social-icon-style-round a:link:before, .sqs-album-block .social-links .social-account-svg-list.social-icon-size-large.social-icon-style-square a:link:before, .sqs-album-block .social-links .social-account-svg-list.social-icon-size-large.social-icon-style-round a:visited:before, .sqs-album-block .social-links .social-account-svg-list.social-icon-size-large.social-icon-style-square a:visited:before {
            font-size: 36px;
            line-height: 36px
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-size-small.social-icon-style-round a, .sqs-album-block .social-links .social-account-svg-list.social-icon-size-small.social-icon-style-square a, .sqs-album-block .social-links .social-account-svg-list.social-icon-size-small.social-icon-style-round a:link, .sqs-album-block .social-links .social-account-svg-list.social-icon-size-small.social-icon-style-square a:link, .sqs-album-block .social-links .social-account-svg-list.social-icon-size-small.social-icon-style-round a:visited, .sqs-album-block .social-links .social-account-svg-list.social-icon-size-small.social-icon-style-square a:visited {
            width: 24px;
            height: 24px;
            font-size: 24px
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-size-small.social-icon-style-round a:before, .sqs-album-block .social-links .social-account-svg-list.social-icon-size-small.social-icon-style-square a:before, .sqs-album-block .social-links .social-account-svg-list.social-icon-size-small.social-icon-style-round a:link:before, .sqs-album-block .social-links .social-account-svg-list.social-icon-size-small.social-icon-style-square a:link:before, .sqs-album-block .social-links .social-account-svg-list.social-icon-size-small.social-icon-style-round a:visited:before, .sqs-album-block .social-links .social-account-svg-list.social-icon-size-small.social-icon-style-square a:visited:before {
            font-size: 24px;
            line-height: 24px
        }

        .sqs-album-block .social-links .social-account-svg-list {
            text-align: left
        }

        .sqs-album-block .social-links .social-account-svg-list:before, .sqs-album-block .social-links .social-account-svg-list:after {
            content: "";
            display: table
        }

        .sqs-album-block .social-links .social-account-svg-list:after {
            clear: both
        }

        .sqs-album-block .social-links .social-account-svg-list a, .sqs-album-block .social-links .social-account-svg-list a:link, .sqs-album-block .social-links .social-account-svg-list a:visited {
            display: inline-block;
            width: 20px;
            height: 20px;
            font-size: 20px;
            color: #111;
            text-decoration: none !important;
            font-weight: normal
        }

        .sqs-album-block .social-links .social-account-svg-list a:before, .sqs-album-block .social-links .social-account-svg-list a:link:before, .sqs-album-block .social-links .social-account-svg-list a:visited:before {
            font-size: 20px;
            line-height: 20px
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-alignment-left a {
            margin-right: .75em
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-alignment-right a {
            margin-left: .75em
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-alignment-center a {
            margin: 0 .375em
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-alignment-center {
            text-align: center
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-alignment-right {
            text-align: right
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-white a, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-white a:visited {
            color: #fff
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-bandsintown, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-bandsintown, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-bandsintown {
            color: #00b4b3
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-behance, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-behance, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-behance {
            color: #1769ff
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-codepen, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-codepen, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-codepen {
            color: #222
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-dribbble, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-dribbble, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-dribbble {
            color: #ea4c89
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-dropbox, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-dropbox, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-dropbox {
            color: #007ee5
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-email, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-email, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-email {
            color: #222
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-facebook, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-facebook, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-facebook {
            color: #3b5998
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-fivehundredpix, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-fivehundredpix, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-fivehundredpix, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-fivehundredpx, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-fivehundredpx, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-fivehundredpx {
            color: #0099e5
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-flickr, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-flickr, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-flickr {
            color: #0063dc
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-foursquare, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-foursquare, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-foursquare {
            color: #f94877
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-github, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-github, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-github {
            color: #4183c4
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-google, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-google, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-google {
            color: #dc4e41
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-googleplay, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-googleplay, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-googleplay {
            color: #5adfcb
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-instagram, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-instagram, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-instagram {
            color: #3f729b
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-itunes, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-itunes, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-itunes {
            color: #ec4652
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-linkedin, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-linkedin, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-linkedin {
            color: #0976b4
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-medium, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-medium, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-medium {
            color: #00ab6c
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-meetup, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-meetup, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-meetup {
            color: #e0393e
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-pinterest, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-pinterest, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-pinterest {
            color: #cc2127
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-rdio, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-rdio, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-rdio {
            color: #006ed2
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-rss, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-rss, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-rss {
            color: #222
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-smugmug, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-smugmug, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-smugmug {
            color: #7dbb00
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-soundcloud, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-soundcloud, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-soundcloud {
            color: #f80
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-spotify, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-spotify, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-spotify {
            color: #84bd00
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-squarespace, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-squarespace, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-squarespace {
            color: #222
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-tumblr, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-tumblr, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-tumblr {
            color: #35465d
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-twitter, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-twitter, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-twitter {
            color: #55acee
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-vimeo, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-vimeo, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-vimeo {
            color: #1ab7ea
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-vine, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-vine, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-vine {
            color: #00b488
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-yelp, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-yelp, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-yelp {
            color: #c41200
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-youtube, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-youtube, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-youtube {
            color: #e52d27
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-meetup, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-meetup, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-meetup {
            color: #e0393e
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-vevo, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-vevo, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-vevo {
            color: #ff0031
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-twitch, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-twitch, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-twitch {
            color: #6441a5
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a.social-vsco, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:link.social-vsco, .sqs-album-block .social-links .social-account-svg-list.social-icon-color-standard a:visited.social-vsco {
            color: #ae995a
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-size-large a, .sqs-album-block .social-links .social-account-svg-list.social-icon-size-large a:link, .sqs-album-block .social-links .social-account-svg-list.social-icon-size-large a:visited {
            width: 24px;
            height: 24px;
            font-size: 24px
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-size-large a:before, .sqs-album-block .social-links .social-account-svg-list.social-icon-size-large a:link:before, .sqs-album-block .social-links .social-account-svg-list.social-icon-size-large a:visited:before {
            font-size: 24px;
            line-height: 24px
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-size-small a, .sqs-album-block .social-links .social-account-svg-list.social-icon-size-small a:link, .sqs-album-block .social-links .social-account-svg-list.social-icon-size-small a:visited {
            width: 16px;
            height: 16px;
            font-size: 16px
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-size-small a:before, .sqs-album-block .social-links .social-account-svg-list.social-icon-size-small a:link:before, .sqs-album-block .social-links .social-account-svg-list.social-icon-size-small a:visited:before {
            font-size: 16px;
            line-height: 16px
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-style-round a, .sqs-album-block .social-links .social-account-svg-list.social-icon-style-square a, .sqs-album-block .social-links .social-account-svg-list.social-icon-style-round a:link, .sqs-album-block .social-links .social-account-svg-list.social-icon-style-square a:link, .sqs-album-block .social-links .social-account-svg-list.social-icon-style-round a:visited, .sqs-album-block .social-links .social-account-svg-list.social-icon-style-square a:visited {
            width: 30px;
            height: 30px;
            font-size: 30px
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-style-round a:before, .sqs-album-block .social-links .social-account-svg-list.social-icon-style-square a:before, .sqs-album-block .social-links .social-account-svg-list.social-icon-style-round a:link:before, .sqs-album-block .social-links .social-account-svg-list.social-icon-style-square a:link:before, .sqs-album-block .social-links .social-account-svg-list.social-icon-style-round a:visited:before, .sqs-album-block .social-links .social-account-svg-list.social-icon-style-square a:visited:before {
            font-size: 30px;
            line-height: 30px
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-style-round.social-icon-alignment-left a, .sqs-album-block .social-links .social-account-svg-list.social-icon-style-square.social-icon-alignment-left a {
            margin-right: .25em
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-style-round.social-icon-alignment-right a, .sqs-album-block .social-links .social-account-svg-list.social-icon-style-square.social-icon-alignment-right a {
            margin-left: .25em
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-style-round.social-icon-alignment-center a, .sqs-album-block .social-links .social-account-svg-list.social-icon-style-square.social-icon-alignment-center a {
            margin: 0 .125em
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-size-large.social-icon-style-round a, .sqs-album-block .social-links .social-account-svg-list.social-icon-size-large.social-icon-style-square a, .sqs-album-block .social-links .social-account-svg-list.social-icon-size-large.social-icon-style-round a:link, .sqs-album-block .social-links .social-account-svg-list.social-icon-size-large.social-icon-style-square a:link, .sqs-album-block .social-links .social-account-svg-list.social-icon-size-large.social-icon-style-round a:visited, .sqs-album-block .social-links .social-account-svg-list.social-icon-size-large.social-icon-style-square a:visited {
            width: 36px;
            height: 36px;
            font-size: 36px
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-size-large.social-icon-style-round a:before, .sqs-album-block .social-links .social-account-svg-list.social-icon-size-large.social-icon-style-square a:before, .sqs-album-block .social-links .social-account-svg-list.social-icon-size-large.social-icon-style-round a:link:before, .sqs-album-block .social-links .social-account-svg-list.social-icon-size-large.social-icon-style-square a:link:before, .sqs-album-block .social-links .social-account-svg-list.social-icon-size-large.social-icon-style-round a:visited:before, .sqs-album-block .social-links .social-account-svg-list.social-icon-size-large.social-icon-style-square a:visited:before {
            font-size: 36px;
            line-height: 36px
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-size-small.social-icon-style-round a, .sqs-album-block .social-links .social-account-svg-list.social-icon-size-small.social-icon-style-square a, .sqs-album-block .social-links .social-account-svg-list.social-icon-size-small.social-icon-style-round a:link, .sqs-album-block .social-links .social-account-svg-list.social-icon-size-small.social-icon-style-square a:link, .sqs-album-block .social-links .social-account-svg-list.social-icon-size-small.social-icon-style-round a:visited, .sqs-album-block .social-links .social-account-svg-list.social-icon-size-small.social-icon-style-square a:visited {
            width: 24px;
            height: 24px;
            font-size: 24px
        }

        .sqs-album-block .social-links .social-account-svg-list.social-icon-size-small.social-icon-style-round a:before, .sqs-album-block .social-links .social-account-svg-list.social-icon-size-small.social-icon-style-square a:before, .sqs-album-block .social-links .social-account-svg-list.social-icon-size-small.social-icon-style-round a:link:before, .sqs-album-block .social-links .social-account-svg-list.social-icon-size-small.social-icon-style-square a:link:before, .sqs-album-block .social-links .social-account-svg-list.social-icon-size-small.social-icon-style-round a:visited:before, .sqs-album-block .social-links .social-account-svg-list.social-icon-size-small.social-icon-style-square a:visited:before {
            font-size: 24px;
            line-height: 24px
        }

        .sqs-album-block:after {
            display: block;
            visibility: hidden;
            font-size: 0;
            height: 0;
            clear: both;
            content: "."
        }

        .sqs-album-block:after {
            display: block;
            visibility: hidden;
            font-size: 0;
            height: 0;
            clear: both;
            content: "."
        }

        .sqs-album-block .album-info {
            width: 33%;
            float: left;
            zoom: 1
        }

        .sqs-album-block .album-info:after {
            display: block;
            visibility: hidden;
            font-size: 0;
            height: 0;
            clear: both;
            content: "."
        }

        .sqs-album-block .album-info:after {
            display: block;
            visibility: hidden;
            font-size: 0;
            height: 0;
            clear: both;
            content: "."
        }

        .sqs-album-block .album-cover-wrapper {
            position: relative;
            width: 90px;
            height: 90px;
            margin-bottom: 30px
        }

        .sqs-album-block .album-controls {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            cursor: pointer
        }

        .sqs-album-block .album-controls .button {
            -webkit-transition: .25s all linear;
            -moz-transition: .25s all linear;
            -ms-transition: .25s all linear;
            -o-transition: .25s all linear;
            transition: .25s all linear;
            -moz-border-radius: 50%;
            border-radius: 50%;
            position: absolute;
            bottom: 50%;
            left: 50%;
            display: block;
            width: 90px;
            height: 90px;
            margin-bottom: -45px;
            margin-left: -45px;
            background: #000
        }

        .sqs-album-block .album-controls .icon {
            display: block;
            position: relative;
            left: 50%;
            top: 50%;
            margin-top: -20px;
            margin-left: -10px;
            width: 0px;
            height: 0px;
            border-top: 18px solid transparent;
            border-bottom: 18px solid transparent;
            border-left: 30px solid #fff;
            -webkit-transform: translatez();
            -ms-transform: translatez();
            transform: translatez()
        }

        .sqs-album-block .album-title {
            margin: 0;
            margin-bottom: 3px
        }

        .sqs-album-block.playing .album-controls .button .icon {
            border-width: 0px;
            margin-top: -15px;
            margin-left: -13px
        }

        .sqs-album-block.playing .album-controls .button .icon, .sqs-album-block.playing .album-controls .button .icon:before {
            height: 30px;
            width: 10px;
            background-color: #fff
        }

        .sqs-album-block.playing .album-controls .button .icon:before {
            content: '';
            display: block;
            margin-left: 16px
        }

        .sqs-album-block.has-album-cover .album-cover-wrapper {
            position: relative;
            width: 100%;
            height: 0;
            padding-bottom: 100%;
            margin-bottom: 20px
        }

        .sqs-album-block.has-album-cover .album-cover {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0
        }

        .sqs-album-block.has-album-cover .button {
            background: rgba(0, 0, 0, .7);
            opacity: .9
        }

        .sqs-album-block.has-album-cover:hover .button {
            background: rgba(0, 0, 0, .9)
        }

        .sqs-album-block.has-album-cover.playing .album-controls .button {
            margin: -15px;
            bottom: 0;
            left: 0;
            -webkit-transform: scale(.4, .4);
            -ms-transform: scale(.4, .4);
            transform: scale(.4, .4)
        }

        .sqs-album-block.playing .track {
            opacity: .4
        }

        .sqs-album-block.playing .track:hover, .sqs-album-block.playing .track.selected, .sqs-album-block.playing .track.universal-track {
            opacity: 1
        }

        .sqs-album-block .tracks {
            float: right;
            width: 60%;
            margin: 0;
            padding: 0
        }

        .sqs-album-block .track {
            list-style-type: none;
            padding: 0;
            margin: 0 0 36px;
            cursor: pointer;
            zoom: 1;
            font-style: normal;
            font-weight: normal;
            letter-spacing: 0;
            text-transform: none;
            line-height: 1.4em
        }

        .sqs-album-block .track:after {
            display: block;
            visibility: hidden;
            font-size: 0;
            height: 0;
            clear: both;
            content: "."
        }

        .sqs-album-block .track:after {
            display: block;
            visibility: hidden;
            font-size: 0;
            height: 0;
            clear: both;
            content: "."
        }

        .sqs-album-block .track-progress-bar {
            clear: both;
            height: 2px;
            position: relative;
            cursor: pointer;
            padding-bottom: 2.5%
        }

        .sqs-album-block .track-progress-bar .bar {
            position: absolute;
            top: 0;
            left: 0;
            height: 4px;
            width: 0%
        }

        .sqs-album-block .track-progress-bar .bar.bg {
            width: 100%
        }

        .sqs-album-block .track-progress-bar .bar.play-bar {
            position: relative
        }

        .sqs-album-block .timers {
            float: right;
            text-align: right;
            margin-left: 1em
        }

        .sqs-album-block .tracks .timers .elapsed {
            display: none
        }

        .sqs-album-block.playing .tracks .track.selected .timers .duration, .sqs-album-block.paused .tracks .track.selected .timers .duration {
            display: none
        }

        .sqs-album-block.playing .tracks .track.selected .timers .elapsed, .sqs-album-block.paused .tracks .track.selected .timers .elapsed {
            display: block
        }

        .sqs-album-block .universal-player {
            display: none;
            margin-top: 25px;
            width: 100%
        }

        .sqs-album-block .universal-player .universal-progress {
            padding-bottom: 1em
        }

        .sqs-album-block .universal-controls {
            margin-bottom: 1em
        }

        .sqs-album-block .universal-controls .play-pause-group {
            display: inline-block
        }

        .sqs-album-block .universal-controls .next-prev-group {
            display: inline-block;
            float: right
        }

        .sqs-album-block .universal-controls .pause {
            display: none
        }

        .sqs-album-block.playing .universal-controls .pause {
            display: block
        }

        .sqs-album-block.playing .universal-controls .play {
            display: none
        }

        .sqs-album-block.hide-track-artists .artist {
            display: none
        }

        .sqs-album-block.md .album-info, .sqs-album-block.md .tracks {
            width: 100%;
            float: none
        }

        .sqs-album-block.md .album-info {
            padding-bottom: 60px
        }

        .sqs-album-block.md .album-cover-wrapper {
            float: left;
            margin-right: 30px
        }

        .sqs-album-block.md.has-album-cover .album-cover-wrapper {
            width: 40%;
            padding-bottom: 40%
        }

        .sqs-album-block.md.no-main-image .album-description {
            margin-left: 120px
        }

        .sqs-album-block.sm .album-info, .sqs-album-block.sm .tracks {
            width: 100%;
            float: none
        }

        .sqs-album-block.sm .tracks {
            margin-top: 30px
        }

        .sqs-album-block.sm .tracks .track {
            margin-bottom: 27px
        }

        .sqs-album-block.sm .album-info {
            padding-bottom: 0
        }

        .sqs-album-block.sm .album-cover-wrapper {
            float: none;
            margin-right: 0;
            margin-bottom: 20px
        }

        .sqs-album-block.sm.has-album-cover .album-cover-wrapper {
            width: 100%;
            padding-bottom: 100%;
            float: none;
            margin-right: 0
        }

        .sqs-album-block.sm.no-main-image .album-description {
            margin-left: 0
        }

        .sqs-album-block.mini-player .album-description, .sqs-album-block.mini-player .album-title, .sqs-album-block.mini-player .album-artist-name, .sqs-album-block.mini-player .tracks, .sqs-album-block.mini-player .social-links {
            display: none
        }

        .sqs-album-block.mini-player.no-album-cover .album-info {
            display: none
        }

        .sqs-album-block.mini-player.lg.has-album-cover .album-info, .sqs-album-block.mini-player.md.has-album-cover .album-info {
            width: 145px;
            display: inline-block;
            float: left;
            padding-bottom: 0;
            margin-right: 1em
        }

        .sqs-album-block.mini-player.lg .universal-player, .sqs-album-block.mini-player.md .universal-player {
            display: inline-block
        }

        .sqs-album-block.mini-player.lg.has-album-cover .universal-player, .sqs-album-block.mini-player.md.has-album-cover .universal-player {
            width: calc(100% - 145px - 1em)
        }

        .sqs-album-block.mini-player.lg.has-album-cover .play-pause-group, .sqs-album-block.mini-player.md.has-album-cover .play-pause-group {
            display: none
        }

        .sqs-album-block.mini-player.lg.has-album-cover .next-prev-group, .sqs-album-block.mini-player.md.has-album-cover .next-prev-group {
            float: none
        }

        .sqs-album-block.mini-player.lg.has-album-cover .album-cover-wrapper, .sqs-album-block.mini-player.md.has-album-cover .album-cover-wrapper {
            padding-bottom: 100%;
            width: 145px;
            margin: 0;
            float: none
        }

        .sqs-album-block.mini-player.sm .universal-player {
            display: block
        }

        .sqs-album-block .album-title {
            font-weight: bold;
            font-size: 20px
        }

        .sqs-album-block .album-description {
            line-height: 21px;
            font-size: 13px
        }

        .sqs-album-block.sm .album-description {
            font-size: 11px
        }

        .sqs-album-block .title a {
            font-size: 15px;
            text-decoration: none
        }

        .sqs-album-block .tracks .timers .elapsed:before {
            content: "("
        }

        .sqs-album-block .tracks .timers .elapsed:after {
            content: ")"
        }

        .sqs-album-block .universal-controls {
            text-transform: uppercase
        }

        .sqs-album-block .universal-controls a {
            text-decoration: none
        }

        .sqs-album-block .track-progress-bar {
            -webkit-tap-highlight-color: rgba(40, 40, 40, .17)
        }

        .sqs-album-block .track-progress-bar .bar {
            -webkit-tap-highlight-color: rgba(40, 40, 40, .17)
        }

        .sqs-album-block .track-progress-bar .bar.bg {
            background-color: rgba(40, 40, 40, .17)
        }

        .sqs-album-block .track-progress-bar .bar.load-bar {
            background-color: rgba(40, 40, 40, .07)
        }

        .sqs-album-block .track-progress-bar .bar.play-bar {
            background-color: #282828
        }

        .sqs-album-block .timers, .sqs-album-block .artist, .sqs-album-block .album-description {
            color: rgba(40, 40, 40, .5)
        }

        .sqs-album-block .track.selected .timers .elapsed {
            color: #282828
        }

        .sqs-album-block .title a {
            color: #282828
        }

        .sqs-album-block .universal-controls a {
            color: #282828
        }

        .sqs-album-block.inverted {
            color: #d7d7d7
        }

        .sqs-album-block.inverted .track-progress-bar {
            -webkit-tap-highlight-color: rgba(215, 215, 215, .17)
        }

        .sqs-album-block.inverted .track-progress-bar .bar {
            -webkit-tap-highlight-color: rgba(215, 215, 215, .17)
        }

        .sqs-album-block.inverted .track-progress-bar .bar.bg {
            background-color: rgba(215, 215, 215, .17)
        }

        .sqs-album-block.inverted .track-progress-bar .bar.load-bar {
            background-color: rgba(215, 215, 215, .07)
        }

        .sqs-album-block.inverted .track-progress-bar .bar.play-bar {
            background-color: #d7d7d7
        }

        .sqs-album-block.inverted .timers, .sqs-album-block.inverted .artist, .sqs-album-block.inverted .album-description {
            color: rgba(215, 215, 215, .5)
        }

        .sqs-album-block.inverted .track.selected .timers .elapsed {
            color: #d7d7d7
        }

        .sqs-album-block.inverted .title a {
            color: #d7d7d7
        }

        .sqs-album-block.inverted .universal-controls a {
            color: #d7d7d7
        }

        .social-summary-block .state-message.synchronizing {
            background-image: none;
            padding-left: 15px
        }

        .social-summary-block .state-message.synchronizing .sync-text {
            float: left;
            margin-left: 10px
        }

        .social-summary-block .state-message.synchronizing .spinner {
            float: left;
            background: transparent url('//static.squarespace.com/universal/images-v6/icons/icon-settings-16-light.png') center center no-repeat;
            height: 19px;
            width: 19px;
            -webkit-animation-duration: 2s;
            -moz-animation-duration: 2s;
            -o-animation-duration: 2s;
            animation-duration: 2s;
            -webkit-animation-iteration-count: infinite;
            -moz-animation-iteration-count: infinite;
            -o-animation-iteration-count: infinite;
            animation-iteration-count: infinite;
            -webkit-animation-name: spin-frames;
            -moz-animation-name: spin-frames;
            -o-animation-name: spin-frames;
            animation-name: spin-frames
        }

        .product-block .image-container {
            position: relative;
            display: block;
            width: 100%
        }

        .product-block .image-container a {
            display: block;
            width: 100%;
            line-height: 0
        }

        .product-block .image-container img {
            width: 100%;
            max-width: 100%
        }

        .product-block .image-container img:not(.loaded) .sqs-product-mark-wrapper .sqs-product-quick-view-button-wrapper {
            opacity: 0 !important
        }

        .product-block .image-container .product-mark {
            position: absolute;
            top: 15px;
            right: 0;
            background: #222;
            padding: 6px 8px;
            color: #fff;
            line-height: 1em;
            text-transform: uppercase;
            -webkit-font-smoothing: antialiased
        }

        .sqs-style-mode-active .product-block.is-product-quick-view-enabled.is-first-product-block .sqs-product-quick-view-button-wrapper {
            opacity: 1
        }

        .sqs-style-mode-active .product-block.is-product-quick-view-enabled.is-first-product-block .sqs-product-mark-wrapper {
            opacity: 0
        }

        .product-block .productDetails.center {
            text-align: center
        }

        .product-block .productDetails.right {
            text-align: right
        }

        .product-block .productDetails .product-title {
            font-size: 1.3em;
            line-height: 1em;
            margin: 1em 0 .2em 0;
            display: inline-block
        }

        .product-block .productDetails .product-price {
            font-size: 1.1em;
            margin: 0 0 1em 0
        }

        .product-block .productDetails .product-price input {
            width: 130px;
            height: 30px;
            padding-left: 5px
        }

        .product-block .productDetails .product-price .minimum-price {
            margin-top: 3px;
            margin-left: 10px
        }

        .product-block .productDetails .product-price .original-price {
            text-decoration: line-through;
            opacity: .7;
            filter: alpha(opacity=70)
        }

        .product-block .productDetails .product-price .strikeout {
            text-decoration: line-through
        }

        .product-block .productDetails .product-variants .variant-option {
            margin: 0 0 1em 0
        }

        .product-block .productDetails .product-variants .variant-out-of-stock {
            color: #c00;
            margin-top: 8px
        }

        .product-block .buy-button, .product-block .sqs-add-to-cart-button-wrapper {
            margin: 20px 0;
            display: block
        }

        .product-block .buy-button:hover, .product-block .sqs-add-to-cart-button-wrapper:hover {
            opacity: 1
        }

        .product-block .sqs-add-to-cart-button {
            display: inline-block;
            width: auto;
            height: auto;
            padding: 1em 2.5em;
            color: #fff;
            background-color: #272727;
            border-width: 0;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 12px;
            line-height: 1em;
            font-weight: normal;
            font-style: normal;
            text-transform: uppercase;
            letter-spacing: 0px;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            outline: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none
        }

        .product-block .sqs-amazon-button {
            display: inline-block;
            width: auto;
            height: auto;
            padding: 1em 2.5em;
            color: #fff;
            background-color: #272727;
            border-width: 0;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 12px;
            line-height: 1em;
            font-weight: normal;
            font-style: normal;
            text-transform: uppercase;
            letter-spacing: 0px;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            outline: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            text-transform: none
        }

        .product-block .center .sqs-amazon-button {
            text-align: center
        }

        .product-block .right .sqs-amazon-button {
            text-align: right
        }

        .sqs-block-quote figure {
            margin: 1em 0
        }

        .sqs-block-quote blockquote {
            margin: 0
        }

        .sqs-block-quote .source {
            text-align: right
        }

        .foursquare-block ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            line-height: 1.4em
        }

        .foursquare-block ul .foursquare-checkin {
            margin-bottom: 12px
        }

        .foursquare-block ul .foursquare-checkin a {
            border: 0
        }

        .foursquare-block ul .foursquare-checkin .foursquare-icon-wrapper {
            float: left
        }

        .foursquare-block ul .foursquare-checkin .foursquare-text {
            margin-left: 42px;
            font-size: 12px
        }

        .foursquare-block ul .foursquare-checkin .foursquare-venue {
            font-weight: bold
        }

        .foursquare-block ul .foursquare-checkin .foursquare-location {
            display: inline-block;
            padding-left: 4px
        }

        .foursquare-block ul .foursquare-checkin .foursquare-timestamp {
            font-size: 10px
        }

        .tagcloud-block ul {
            list-style-type: none;
            margin: 0;
            padding-left: 0
        }

        .tagcloud-block ul li {
            display: inline-block
        }

        .sqs-block-postsbycategory ul, .sqs-block-postsbyauthor ul, .sqs-block-postsbytag ul, .sqs-block-postsbymonth ul {
            list-style-type: none;
            margin: 0;
            padding: 0
        }

        .sqs-block-postsbycategory ul li, .sqs-block-postsbyauthor ul li, .sqs-block-postsbytag ul li, .sqs-block-postsbymonth ul li {
            margin: 0 0 .3em 0;
            padding: 0
        }

        .sqs-block-postsbycategory .count, .sqs-block-postsbyauthor .count, .sqs-block-postsbytag .count, .sqs-block-postsbymonth .count {
            display: none
        }

        .sqs-block-image .sqs-image-caption p, .sqs-block-image .image-caption p {
            font-size: 12px;
            line-height: 1.68em
        }

        .sqs-block-image .sqs-image-caption p a, .sqs-block-image .image-caption p a {
            display: inline
        }

        .sqs-block-image:not(.sqs-block-focused) .sqs-image-caption.sqs-placeholder-show {
            display: none
        }

        .sqs-block-image .sqs-placeholder p {
            margin: 0;
            margin-top: .7em
        }

        .sqs-block-image .image-block-outer-wrapper .image-block-wrapper img {
            max-width: none
        }

        .sqs-block-image .image-block-lightbox {
            cursor: pointer;
            display: block
        }

        .sqs-block-image .lightbox img {
            cursor: pointer
        }

        .sqs-block-image.sized .image-block-wrapper {
            overflow: hidden;
            padding-bottom: inherit !important
        }

        .sqs-block-image.sized .image-block-wrapper img {
            text-align: inherit;
            max-width: none
        }

        .sqs-block-image img {
            display: block
        }

        .sqs-block-image .image-block-wrapper.sqs-default-image {
            text-align: center
        }

        .sqs-block-image .image-block-wrapper.sqs-default-image img {
            display: inline-block
        }

        .sqs-block-image .image-block-outer-wrapper.layout-caption-below .image-caption-wrapper {
            padding-top: 18px
        }

        .sqs-block-image .image-block-outer-wrapper.layout-caption-hidden .image-caption-wrapper {
            height: 0;
            overflow: hidden
        }

        .sqs-block-image .image-block-outer-wrapper.layout-caption-overlay .intrinsic, .sqs-block-image .image-block-outer-wrapper.layout-caption-overlay-hover .intrinsic {
            position: relative
        }

        .sqs-block-image .image-block-outer-wrapper.layout-caption-overlay .image-caption-wrapper, .sqs-block-image .image-block-outer-wrapper.layout-caption-overlay-hover .image-caption-wrapper {
            position: absolute;
            top: auto;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 18px;
            background: rgba(0, 0, 0, .7);
            max-height: 100%;
            box-sizing: border-box;
            overflow-y: auto
        }

        .sqs-block-image .image-block-outer-wrapper.layout-caption-overlay h1, .sqs-block-image .image-block-outer-wrapper.layout-caption-overlay-hover h1, .sqs-block-image .image-block-outer-wrapper.layout-caption-overlay h2, .sqs-block-image .image-block-outer-wrapper.layout-caption-overlay-hover h2, .sqs-block-image .image-block-outer-wrapper.layout-caption-overlay h3, .sqs-block-image .image-block-outer-wrapper.layout-caption-overlay-hover h3, .sqs-block-image .image-block-outer-wrapper.layout-caption-overlay strong, .sqs-block-image .image-block-outer-wrapper.layout-caption-overlay-hover strong {
            color: #eee
        }

        .sqs-block-image .image-block-outer-wrapper.layout-caption-overlay p, .sqs-block-image .image-block-outer-wrapper.layout-caption-overlay-hover p {
            color: #bbb;
            line-height: 1.68em
        }

        .sqs-block-image .image-block-outer-wrapper.layout-caption-overlay p a, .sqs-block-image .image-block-outer-wrapper.layout-caption-overlay-hover p a {
            color: #bbb;
            text-decoration: underline
        }

        .sqs-block-image .image-block-outer-wrapper.layout-caption-overlay .image-caption > *:first-child, .sqs-block-image .image-block-outer-wrapper.layout-caption-overlay-hover .image-caption > *:first-child {
            padding-top: 0;
            margin-top: 0
        }

        .sqs-block-image .image-block-outer-wrapper.layout-caption-overlay .image-caption > *:last-child, .sqs-block-image .image-block-outer-wrapper.layout-caption-overlay-hover .image-caption > *:last-child {
            padding-bottom: 0;
            margin-bottom: 0
        }

        .sqs-block-image .image-block-outer-wrapper.layout-caption-overlay-hover:hover .image-caption-wrapper {
            visibility: visible;
            opacity: 1
        }

        .sqs-block-image .image-block-outer-wrapper.layout-caption-overlay-hover .image-caption-wrapper {
            visibility: hidden;
            opacity: 0;
            -webkit-transition: opacity .1s ease-out;
            -moz-transition: opacity .1s ease-out;
            -ms-transition: opacity .1s ease-out;
            -o-transition: opacity .1s ease-out;
            transition: opacity .1s ease-out
        }

        .sqs-block-image .image-block-outer-wrapper.layout-caption-overlay-hover:hover .image-caption {
            margin-bottom: 0
        }

        .sqs-block-image .image-block-outer-wrapper.layout-caption-overlay-hover .image-caption {
            -webkit-transition: margin-bottom .1s ease-out;
            -moz-transition: margin-bottom .1s ease-out;
            -ms-transition: margin-bottom .1s ease-out;
            -o-transition: margin-bottom .1s ease-out;
            transition: margin-bottom .1s ease-out;
            margin-bottom: -5px
        }

        .sqs-block-image .image-block-outer-wrapper.layout-image-left {
            zoom: 1
        }

        .sqs-block-image .image-block-outer-wrapper.layout-image-left:after {
            display: block;
            visibility: hidden;
            font-size: 0;
            height: 0;
            clear: both;
            content: "."
        }

        .sqs-block-image .image-block-outer-wrapper.layout-image-left .image-block-wrapper {
            float: left
        }

        .sqs-block-image .image-block-outer-wrapper.layout-image-left .image-caption-wrapper {
            float: left
        }

        .sqs-block-image .image-block-outer-wrapper.layout-image-left .image-caption {
            padding-left: 15px
        }

        .sqs-block-image .image-block-outer-wrapper.layout-image-left .image-caption h1 {
            font-size: 18px;
            line-height: 24px
        }

        .sqs-block-image .image-block-outer-wrapper.layout-image-right {
            zoom: 1
        }

        .sqs-block-image .image-block-outer-wrapper.layout-image-right:after {
            display: block;
            visibility: hidden;
            font-size: 0;
            height: 0;
            clear: both;
            content: "."
        }

        .sqs-block-image .image-block-outer-wrapper.layout-image-right .image-block-wrapper {
            float: right
        }

        .sqs-block-image .image-block-outer-wrapper.layout-image-right .image-caption-wrapper {
            float: right;
            text-align: right
        }

        .sqs-block-image .image-block-outer-wrapper.layout-image-right .image-caption {
            padding-right: 15px
        }

        .sqs-block-image .image-block-outer-wrapper.layout-image-right .image-caption h1 {
            font-size: 18px;
            line-height: 24px
        }

        .sqs-block-image .image-block-wrapper {
            line-height: 0;
            text-align: center;
            position: relative;
            overflow: hidden
        }

        .sqs-block-image .image-block-wrapper img {
            max-width: 100%
        }

        .sqs-block-image .image-block-wrapper img.block-stretch {
            width: 100%
        }

        .sqs-block-image .image-block-wrapper.float-right .image-block-wrapper {
            text-align: right
        }

        .sqs-block-image .intrinsic {
            margin: auto
        }

        .sqs-block-image .intrinsic .image-block-wrapper img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%
        }

        .sqs-block-image .sqs-action-overlay {
            z-index: 1000
        }

        .sqs-block-image .processing {
            background: #ccc;
            text-align: center
        }

        .sqs-block-image .processing .progress-container {
            background: #ccc;
            top: 15px
        }

        .sqs-block-image .processing-failed {
            background: #ccc;
            text-align: center;
            position: relative;
            height: 100%
        }

        .sqs-block-image.vsize-1 .image-block-wrapper {
            height: 34px
        }

        .sqs-block-image.vsize-2 .image-block-wrapper {
            height: 68px
        }

        .sqs-block-image.vsize-3 .image-block-wrapper {
            height: 102px
        }

        .sqs-block-image.vsize-4 .image-block-wrapper {
            height: 136px
        }

        .sqs-block-image.vsize-5 .image-block-wrapper {
            height: 170px
        }

        .sqs-block-image.vsize-6 .image-block-wrapper {
            height: 204px
        }

        .sqs-block-image.vsize-7 .image-block-wrapper {
            height: 238px
        }

        .sqs-block-image.vsize-8 .image-block-wrapper {
            height: 272px
        }

        .sqs-block-image.vsize-9 .image-block-wrapper {
            height: 306px
        }

        .sqs-block-image.vsize-10 .image-block-wrapper {
            height: 340px
        }

        .sqs-block-image.vsize-11 .image-block-wrapper {
            height: 374px
        }

        .sqs-block-image.vsize-12 .image-block-wrapper {
            height: 408px
        }

        .sqs-block-image.vsize-13 .image-block-wrapper {
            height: 442px
        }

        .sqs-block-image.vsize-14 .image-block-wrapper {
            height: 476px
        }

        .sqs-block-image.vsize-15 .image-block-wrapper {
            height: 510px
        }

        .sqs-block-image.vsize-16 .image-block-wrapper {
            height: 544px
        }

        .sqs-block-image.vsize-17 .image-block-wrapper {
            height: 578px
        }

        .sqs-block-image.vsize-18 .image-block-wrapper {
            height: 612px
        }

        .sqs-block-image.vsize-19 .image-block-wrapper {
            height: 646px
        }

        .sqs-block-image.vsize-20 .image-block-wrapper {
            height: 680px
        }

        .sqs-block-image.vsize-21 .image-block-wrapper {
            height: 714px
        }

        .sqs-block-image.vsize-22 .image-block-wrapper {
            height: 748px
        }

        .sqs-block-image.vsize-23 .image-block-wrapper {
            height: 782px
        }

        .sqs-block-image.vsize-24 .image-block-wrapper {
            height: 816px
        }

        .sqs-block-image.vsize-25 .image-block-wrapper {
            height: 850px
        }

        .sqs-block-image.vsize-26 .image-block-wrapper {
            height: 884px
        }

        .sqs-block-image.vsize-27 .image-block-wrapper {
            height: 918px
        }

        .sqs-block-image.vsize-28 .image-block-wrapper {
            height: 952px
        }

        .sqs-block-image.vsize-29 .image-block-wrapper {
            height: 986px
        }

        .sqs-block-image.vsize-30 .image-block-wrapper {
            height: 1020px
        }

        .sqs-block-image.vsize-1 .sqs-block-content {
            height: auto;
            overflow: visible
        }

        .sqs-block-image.vsize-2 .sqs-block-content {
            height: auto;
            overflow: visible
        }

        .sqs-block-image.vsize-3 .sqs-block-content {
            height: auto;
            overflow: visible
        }

        .sqs-block-image.vsize-4 .sqs-block-content {
            height: auto;
            overflow: visible
        }

        .sqs-block-image.vsize-5 .sqs-block-content {
            height: auto;
            overflow: visible
        }

        .sqs-block-image.vsize-6 .sqs-block-content {
            height: auto;
            overflow: visible
        }

        .sqs-block-image.vsize-7 .sqs-block-content {
            height: auto;
            overflow: visible
        }

        .sqs-block-image.vsize-8 .sqs-block-content {
            height: auto;
            overflow: visible
        }

        .sqs-block-image.vsize-9 .sqs-block-content {
            height: auto;
            overflow: visible
        }

        .sqs-block-image.vsize-10 .sqs-block-content {
            height: auto;
            overflow: visible
        }

        .sqs-block-image.vsize-11 .sqs-block-content {
            height: auto;
            overflow: visible
        }

        .sqs-block-image.vsize-12 .sqs-block-content {
            height: auto;
            overflow: visible
        }

        .sqs-block-image.vsize-13 .sqs-block-content {
            height: auto;
            overflow: visible
        }

        .sqs-block-image.vsize-14 .sqs-block-content {
            height: auto;
            overflow: visible
        }

        .sqs-block-image.vsize-15 .sqs-block-content {
            height: auto;
            overflow: visible
        }

        .sqs-block-image.vsize-16 .sqs-block-content {
            height: auto;
            overflow: visible
        }

        .sqs-block-image.vsize-17 .sqs-block-content {
            height: auto;
            overflow: visible
        }

        .sqs-block-image.vsize-18 .sqs-block-content {
            height: auto;
            overflow: visible
        }

        .sqs-block-image.vsize-19 .sqs-block-content {
            height: auto;
            overflow: visible
        }

        .sqs-block-image.vsize-20 .sqs-block-content {
            height: auto;
            overflow: visible
        }

        .sqs-block-image.vsize-21 .sqs-block-content {
            height: auto;
            overflow: visible
        }

        .sqs-block-image.vsize-22 .sqs-block-content {
            height: auto;
            overflow: visible
        }

        .sqs-block-image.vsize-23 .sqs-block-content {
            height: auto;
            overflow: visible
        }

        .sqs-block-image.vsize-24 .sqs-block-content {
            height: auto;
            overflow: visible
        }

        .sqs-block-image.vsize-25 .sqs-block-content {
            height: auto;
            overflow: visible
        }

        .sqs-block-image.vsize-26 .sqs-block-content {
            height: auto;
            overflow: visible
        }

        .sqs-block-image.vsize-27 .sqs-block-content {
            height: auto;
            overflow: visible
        }

        .sqs-block-image.vsize-28 .sqs-block-content {
            height: auto;
            overflow: visible
        }

        .sqs-block-image.vsize-29 .sqs-block-content {
            height: auto;
            overflow: visible
        }

        .sqs-block-image.vsize-30 .sqs-block-content {
            height: auto;
            overflow: visible
        }

        .sqs-block-horizontalrule hr {
            border: none;
            color: #bbb;
            background-color: #bbb;
            height: 1px
        }

        .sqs-block-html {
            clear: none
        }

        .sqs-block-html .sqs-block-content {
            outline: none
        }

        .sqs-block-html .sqs-block-content > *:first-child {
            margin-top: 0
        }

        .sqs-block-html .sqs-block-content > *:last-child {
            margin-bottom: 0
        }

        .sqs-html {
            position: relative;
            z-index: 1
        }

        .sqs-html .sqs-html-content {
            outline: none;
            z-index: 2
        }

        .sqs-html .sqs-html-hidden {
            display: none
        }

        .sqs-block-markdown {
            clear: none
        }

        .sqs-block-markdown .sqs-block-content {
            position: relative
        }

        .sqs-block-markdown .sqs-block-content *:first-child {
            margin-top: 0
        }

        .sqs-block-markdown .sqs-block-content *:last-child {
            margin-bottom: 0
        }

        .sqs-block-markdown .sqs-placeholder {
            color: #999
        }

        .sqs-block-markdown .sqs-editing-overlay {
            display: none
        }

        .sqs-block-markdown hr {
            border: none;
            border-bottom: 1px solid #ccc;
            width: 75%;
            margin-left: auto;
            margin-right: auto
        }

        .sqs-block-markdown textarea {
            position: absolute;
            top: 17px;
            bottom: 0;
            left: 17px;
            right: 17px;
            width: calc(100% - 34px);
            padding: 0;
            margin: 0;
            border: none;
            background: transparent;
            outline: none;
            resize: none;
            overflow: hidden;
            color: #333
        }

        .sqs-block-markdown .textarea-clone {
            margin: 0;
            min-height: 18px;
            visibility: hidden
        }

        .sqs-block-markdown textarea, .sqs-block-markdown .textarea-clone {
            font: 15px/18px 'Courier New', monospace !important;
            white-space: pre-wrap;
            word-wrap: break-word
        }

        .sqs-block-markdown img {
            max-width: 100%;
            height: auto
        }

        .source-code {
            white-space: pre;
            overflow: auto
        }

        .cm-keyword {
            color: #708
        }

        .cm-atom {
            color: #219
        }

        .cm-number {
            color: #164
        }

        .cm-def {
            color: blue
        }

        .cm-variable-2 {
            color: #05a
        }

        .cm-variable-3 {
            color: #085
        }

        .cm-comment {
            color: #aaa
        }

        .cm-string {
            color: #1a1
        }

        .cm-string-2 {
            color: #5f0
        }

        .cm-meta {
            color: #555
        }

        .cm-error {
            color: red
        }

        .cm-qualifier {
            color: #555
        }

        .cm-builtin {
            color: #30a
        }

        .cm-bracket {
            color: #cc7
        }

        .cm-tag {
            color: #170
        }

        .cm-attribute {
            color: #00c
        }

        .cm-header {
            color: #000
        }

        .cm-quote {
            color: #900
        }

        .cm-hr {
            color: #999
        }

        .cm-link {
            color: #00c
        }

        .dark .cm-comment {
            color: #75715e
        }

        .dark .cm-atom {
            color: #ae81ff
        }

        .dark .cm-number {
            color: #ae81ff
        }

        .dark .cm-property, .dark .cm-attribute {
            color: #a6e22e
        }

        .dark .cm-keyword {
            color: #f92672
        }

        .dark .cm-string {
            color: #e6db74
        }

        .dark .cm-variable-2 {
            color: #9effff
        }

        .dark .cm-def {
            color: #fd971f
        }

        .dark .cm-error {
            background: #f92672;
            color: #f8f8f0
        }

        .dark .cm-bracket {
            color: #f8f8f2
        }

        .dark .cm-tag {
            color: #f92672
        }

        .dark .cm-link {
            color: #ae81ff
        }

        .code-block .state-message:not(:last-child) {
            margin-bottom: 10px
        }

        .embed-block .intrinsic, .video-block .intrinsic, .embed-block .sqs-block-content .intrinsic, .video-block .sqs-block-content .intrinsic {
            position: relative
        }

        .embed-block .intrinsic .embed-block-wrapper:not(.embed-block-provider-SoundCloud), .video-block .intrinsic .embed-block-wrapper:not(.embed-block-provider-SoundCloud), .embed-block .sqs-block-content .intrinsic .embed-block-wrapper:not(.embed-block-provider-SoundCloud), .video-block .sqs-block-content .intrinsic .embed-block-wrapper:not(.embed-block-provider-SoundCloud) {
            position: relative
        }

        .embed-block .intrinsic .embed-block-wrapper:not(.embed-block-provider-SoundCloud) .sqs-video-wrapper, .video-block .intrinsic .embed-block-wrapper:not(.embed-block-provider-SoundCloud) .sqs-video-wrapper, .embed-block .sqs-block-content .intrinsic .embed-block-wrapper:not(.embed-block-provider-SoundCloud) .sqs-video-wrapper, .video-block .sqs-block-content .intrinsic .embed-block-wrapper:not(.embed-block-provider-SoundCloud) .sqs-video-wrapper {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%
        }

        .embed-block .intrinsic .embed-block-wrapper:not(.embed-block-provider-SoundCloud) iframe, .video-block .intrinsic .embed-block-wrapper:not(.embed-block-provider-SoundCloud) iframe, .embed-block .sqs-block-content .intrinsic .embed-block-wrapper:not(.embed-block-provider-SoundCloud) iframe, .video-block .sqs-block-content .intrinsic .embed-block-wrapper:not(.embed-block-provider-SoundCloud) iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%
        }

        .embed-block .intrinsic .embed-block-wrapper:not(.embed-block-provider-SoundCloud) .flickr-oembed, .video-block .intrinsic .embed-block-wrapper:not(.embed-block-provider-SoundCloud) .flickr-oembed, .embed-block .sqs-block-content .intrinsic .embed-block-wrapper:not(.embed-block-provider-SoundCloud) .flickr-oembed, .video-block .sqs-block-content .intrinsic .embed-block-wrapper:not(.embed-block-provider-SoundCloud) .flickr-oembed {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%
        }

        .embed-block .intrinsic .embed-block-provider-SoundCloud, .video-block .intrinsic .embed-block-provider-SoundCloud, .embed-block .sqs-block-content .intrinsic .embed-block-provider-SoundCloud, .video-block .sqs-block-content .intrinsic .embed-block-provider-SoundCloud {
            padding-bottom: 0 !important
        }

        .embed-block .intrinsic .embed-block-provider-SoundCloud iframe, .video-block .intrinsic .embed-block-provider-SoundCloud iframe, .embed-block .sqs-block-content .intrinsic .embed-block-provider-SoundCloud iframe, .video-block .sqs-block-content .intrinsic .embed-block-provider-SoundCloud iframe {
            width: 100%
        }

        .sqs-block-soundcloud .sqs-intrinsic iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100% !important;
            height: 100% !important
        }

        .sqs-block-audio {
            min-height: 34px
        }

        .sqs-block-tourdates .sqs-spin {
            position: absolute;
            top: 50px;
            left: 50%;
            margin-left: -15px
        }

        .sqs-block-tourdates .tour-list {
            list-style-type: none;
            margin: 0;
            padding: 0;
            min-height: 150px
        }

        .sqs-block-tourdates .loaded .tour-list {
            min-height: 0
        }

        .sqs-block-tourdates .tour-item {
            position: relative;
            margin: 0;
            padding: 17px 0;
            border-bottom: 1px solid rgba(130, 130, 130, .15);
            overflow: hidden
        }

        .sqs-block-tourdates .tour-item.clone {
            display: none
        }

        .sqs-block-tourdates .tour-item:first-of-type {
            padding-top: 0
        }

        .sqs-block-tourdates .tour-item:last-of-type {
            border: none
        }

        .sqs-block-tourdates .loaded .tour-item-no-results:after {
            content: 'There are no upcoming tour dates.'
        }

        .sqs-block-tourdates .tour-timeframe, .sqs-block-tourdates .tour-venue, .sqs-block-tourdates .tour-location, .sqs-block-tourdates .tour-actions {
            float: left;
            box-sizing: border-box;
            font-size: 16px;
            line-height: 28px
        }

        .sqs-block-tourdates .tour-timeframe {
            width: 120px;
            white-space: nowrap;
            padding: 2px 0 0 0;
            font-size: 13px !important;
            font-weight: bold;
            letter-spacing: .5px
        }

        .sqs-block-tourdates .tour-date, .sqs-block-tourdates .tour-weekday {
            box-sizing: border-box;
            display: inline-block;
            width: 50%;
            text-transform: uppercase
        }

        .sqs-block-tourdates .tour-venue {
            width: calc(60% - 171px);
            width: -webkit-calc(60% - 171px);
            width: -moz-calc(60% - 171px);
            padding: 1px 25.5px 0 0
        }

        .sqs-block-tourdates .tour-venue-link, .sqs-block-tourdates .tour-location-link {
            color: inherit !important;
            text-decoration: none !important
        }

        .sqs-block-tourdates .tour-venue-name, .sqs-block-tourdates .tour-lineup {
            display: block
        }

        .sqs-block-tourdates .tour-lineup {
            opacity: .6;
            margin-top: 2px;
            font-size: 14px;
            line-height: 18px
        }

        .sqs-block-tourdates .tour-lineup:before {
            content: 'w/ '
        }

        .sqs-block-tourdates .tour-lineup-item {
            display: inline
        }

        .sqs-block-tourdates .tour-lineup-item:after {
            content: ', '
        }

        .sqs-block-tourdates .tour-lineup-item:last-of-type:after {
            content: none
        }

        .sqs-block-tourdates .tour-location {
            width: calc(40% - 114px);
            width: -webkit-calc(40% - 114px);
            width: -moz-calc(40% - 114px);
            padding: 1px 25.5px 0 0
        }

        .sqs-block-tourdates .tour-actions {
            width: 165px;
            white-space: nowrap;
            text-align: right
        }

        .sqs-block-tourdates .tour-button {
            width: auto;
            height: auto;
            padding: 1em 2.5em;
            color: #fff;
            background-color: #272727;
            border-width: 0;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 12px;
            line-height: 1em;
            font-weight: normal;
            font-style: normal;
            text-transform: uppercase;
            letter-spacing: 0px;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            outline: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            display: inline-block;
            padding: 0 12px !important;
            font-size: 11px !important;
            line-height: 28px
        }

        .sqs-block-tourdates .tour-button--ticket:empty {
            display: none
        }

        .sqs-block-tourdates .tour-button--disabled.tour-button, .sqs-block-tourdates .tour-button--soldout.tour-button, .sqs-block-tourdates .tour-button--disabled.tour-button:hover, .sqs-block-tourdates .tour-button--soldout.tour-button:hover {
            opacity: .3;
            cursor: default;
            pointer-events: none
        }

        .sqs-block-tourdates .tour-button--rsvp:before {
            content: 'RSVP'
        }

        .sqs-block-tourdates .tourblock-compact-mode .tour-item {
            display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-flex-flow: column nowrap;
            -moz-flex-flow: column nowrap;
            -ms-flex-flow: column nowrap;
            flex-flow: column nowrap;
            -webkit-box-pack: flex-start;
            -ms-flex-pack: flex-start;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            -webkit-justify-content: flex-start;
            -moz-justify-content: flex-start;
            justify-content: flex-start;
            width: 100%;
            position: relative;
            padding: 20px 0;
            flex-direction: column;
            -webkit-box-orient: vertical;
            overflow: visible
        }

        .sqs-block-tourdates .tourblock-compact-mode .tour-item:first-of-type {
            padding-top: 0
        }

        .sqs-block-tourdates .tourblock-compact-mode .tour-timeframe, .sqs-block-tourdates .tourblock-compact-mode .tour-venue, .sqs-block-tourdates .tourblock-compact-mode .tour-location, .sqs-block-tourdates .tourblock-compact-mode .tour-actions {
            float: none;
            display: block;
            width: auto;
            -webkit-flex-basis: auto;
            -moz-flex-basis: auto;
            -ms-flex-preferred-size: auto;
            flex-basis: auto;
            padding-top: 0 !important
        }

        .sqs-block-tourdates .tourblock-compact-mode .tour-timeframe {
            -webkit-box-ordinal-group: 1;
            -moz-box-ordinal-group: 1;
            -ms-flex-order: 1;
            -webkit-order: 1;
            order: 1
        }

        .sqs-block-tourdates .tourblock-compact-mode .tour-location {
            -webkit-box-ordinal-group: 2;
            -moz-box-ordinal-group: 2;
            -ms-flex-order: 2;
            -webkit-order: 2;
            order: 2
        }

        .sqs-block-tourdates .tourblock-compact-mode .tour-venue {
            -webkit-box-ordinal-group: 3;
            -moz-box-ordinal-group: 3;
            -ms-flex-order: 3;
            -webkit-order: 3;
            order: 3
        }

        .sqs-block-tourdates .tourblock-compact-mode .tour-timeframe {
            margin-bottom: 14px;
            right: 0
        }

        .sqs-block-tourdates .tourblock-compact-mode .tour-date, .sqs-block-tourdates .tourblock-compact-mode .tour-weekday {
            width: auto;
            margin-right: 5px
        }

        .sqs-block-tourdates .tourblock-compact-mode .tour-lineup {
            margin-top: 0
        }

        .sqs-block-tourdates .tourblock-compact-mode .tour-actions {
            position: absolute;
            top: 18px;
            right: 0
        }

        .sqs-block-tourdates .tourblock-compact-mode .tour-item:first-of-type .tour-actions {
            top: -2px
        }

        .sqs-block-tourdates .tourblock-has-small-container .tour-item {
            display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-flex-flow: column nowrap;
            -moz-flex-flow: column nowrap;
            -ms-flex-flow: column nowrap;
            flex-flow: column nowrap;
            -webkit-box-pack: flex-start;
            -ms-flex-pack: flex-start;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            -webkit-justify-content: flex-start;
            -moz-justify-content: flex-start;
            justify-content: flex-start;
            width: 100%;
            position: relative;
            padding: 20px 0;
            flex-direction: column;
            -webkit-box-orient: vertical;
            overflow: visible
        }

        .sqs-block-tourdates .tourblock-has-small-container .tour-item:first-of-type {
            padding-top: 0
        }

        .sqs-block-tourdates .tourblock-has-small-container .tour-timeframe, .sqs-block-tourdates .tourblock-has-small-container .tour-venue, .sqs-block-tourdates .tourblock-has-small-container .tour-location, .sqs-block-tourdates .tourblock-has-small-container .tour-actions {
            float: none;
            display: block;
            width: auto;
            -webkit-flex-basis: auto;
            -moz-flex-basis: auto;
            -ms-flex-preferred-size: auto;
            flex-basis: auto;
            padding-top: 0 !important
        }

        .sqs-block-tourdates .tourblock-has-small-container .tour-timeframe {
            -webkit-box-ordinal-group: 1;
            -moz-box-ordinal-group: 1;
            -ms-flex-order: 1;
            -webkit-order: 1;
            order: 1
        }

        .sqs-block-tourdates .tourblock-has-small-container .tour-location {
            -webkit-box-ordinal-group: 2;
            -moz-box-ordinal-group: 2;
            -ms-flex-order: 2;
            -webkit-order: 2;
            order: 2
        }

        .sqs-block-tourdates .tourblock-has-small-container .tour-venue {
            -webkit-box-ordinal-group: 3;
            -moz-box-ordinal-group: 3;
            -ms-flex-order: 3;
            -webkit-order: 3;
            order: 3
        }

        .sqs-block-tourdates .tourblock-has-small-container .tour-timeframe {
            margin-bottom: 14px;
            right: 0
        }

        .sqs-block-tourdates .tourblock-has-small-container .tour-date, .sqs-block-tourdates .tourblock-has-small-container .tour-weekday {
            width: auto;
            margin-right: 5px
        }

        .sqs-block-tourdates .tourblock-has-small-container .tour-lineup {
            margin-top: 0
        }

        .sqs-block-tourdates .tourblock-has-small-container .tour-actions {
            position: absolute;
            top: 18px;
            right: 0
        }

        .sqs-block-tourdates .tourblock-has-small-container .tour-item:first-of-type .tour-actions {
            top: -2px
        }

        @media screen and (max-width: 450px) {
            .sqs-block-tourdates .tour-item {
                display: -moz-box;
                display: -ms-flexbox;
                display: -webkit-flex;
                display: flex;
                -webkit-flex-flow: column nowrap;
                -moz-flex-flow: column nowrap;
                -ms-flex-flow: column nowrap;
                flex-flow: column nowrap;
                -webkit-box-pack: flex-start;
                -ms-flex-pack: flex-start;
                -webkit-box-pack: start;
                -ms-flex-pack: start;
                -webkit-justify-content: flex-start;
                -moz-justify-content: flex-start;
                justify-content: flex-start;
                width: 100%;
                position: relative;
                padding: 20px 0;
                flex-direction: column;
                -webkit-box-orient: vertical;
                overflow: visible
            }

            .sqs-block-tourdates .tour-item:first-of-type {
                padding-top: 0
            }

            .sqs-block-tourdates .tour-timeframe, .sqs-block-tourdates .tour-venue, .sqs-block-tourdates .tour-location, .sqs-block-tourdates .tour-actions {
                float: none;
                display: block;
                width: auto;
                -webkit-flex-basis: auto;
                -moz-flex-basis: auto;
                -ms-flex-preferred-size: auto;
                flex-basis: auto;
                padding-top: 0 !important
            }

            .sqs-block-tourdates .tour-timeframe {
                -webkit-box-ordinal-group: 1;
                -moz-box-ordinal-group: 1;
                -ms-flex-order: 1;
                -webkit-order: 1;
                order: 1
            }

            .sqs-block-tourdates .tour-location {
                -webkit-box-ordinal-group: 2;
                -moz-box-ordinal-group: 2;
                -ms-flex-order: 2;
                -webkit-order: 2;
                order: 2
            }

            .sqs-block-tourdates .tour-venue {
                -webkit-box-ordinal-group: 3;
                -moz-box-ordinal-group: 3;
                -ms-flex-order: 3;
                -webkit-order: 3;
                order: 3
            }

            .sqs-block-tourdates .tour-timeframe {
                margin-bottom: 14px;
                right: 0
            }

            .sqs-block-tourdates .tour-date, .sqs-block-tourdates .tour-weekday {
                width: auto;
                margin-right: 5px
            }

            .sqs-block-tourdates .tour-lineup {
                margin-top: 0
            }

            .sqs-block-tourdates .tour-actions {
                position: absolute;
                top: 18px;
                right: 0
            }

            .sqs-block-tourdates .tour-item:first-of-type .tour-actions {
                top: -2px
            }
        }

        .button-style-outline .sqs-block-tourdates .tour-timeframe {
            padding-top: 3px
        }

        .button-style-outline .sqs-block-tourdates .tour-venue, .button-style-outline .sqs-block-tourdates .tour-location {
            padding-top: 2px
        }

        .button-style-outline .sqs-block-tourdates .tour-button {
            margin-left: 2px
        }

        .sqs-search-ui-button-wrapper {
            position: relative
        }

        .sqs-search-ui-button-wrapper.color-dark .search-input {
            background-image: url(/universal/images-v6/icons/icon-searchqueries-20-dark.png);
            border: 1px solid #aaa
        }

        .sqs-search-ui-button-wrapper.color-dark::-webkit-input-placeholder {
            color: #666
        }

        .sqs-search-ui-button-wrapper.color-dark:-moz-placeholder {
            color: #666
        }

        .sqs-search-ui-button-wrapper.color-dark::-moz-placeholder {
            color: #666
        }

        .sqs-search-ui-button-wrapper.color-dark:-ms-input-placeholder {
            color: #666
        }

        .sqs-search-ui-button-wrapper.color-light .search-input {
            background-image: url(/universal/images-v6/icons/icon-searchqueries-20-light.png);
            color: #f7f7f7;
            border: 1px solid #eee
        }

        .sqs-search-ui-button-wrapper.color-light::-webkit-input-placeholder {
            color: #ddd
        }

        .sqs-search-ui-button-wrapper.color-light:-moz-placeholder {
            color: #ddd
        }

        .sqs-search-ui-button-wrapper.color-light::-moz-placeholder {
            color: #ddd
        }

        .sqs-search-ui-button-wrapper.color-light:-ms-input-placeholder {
            color: #ddd
        }

        .sqs-search-ui-button-wrapper .search-input {
            opacity: .7;
            -webkit-transition: opacity .2s ease-out;
            -moz-transition: opacity .2s ease-out;
            -ms-transition: opacity .2s ease-out;
            -o-transition: opacity .2s ease-out;
            transition: opacity .2s ease-out;
            -webkit-transition: background-image .2s ease-out;
            -moz-transition: background-image .2s ease-out;
            -ms-transition: background-image .2s ease-out;
            -o-transition: background-image .2s ease-out;
            transition: background-image .2s ease-out;
            padding: 12px 12px 12px 45px;
            background: no-repeat 15px 50%;
            width: 100%;
            min-height: 20px;
            display: block;
            outline: 0;
            box-sizing: border-box
        }

        .sqs-search-ui-button-wrapper .search-input.loading {
            background-image: none
        }

        .sqs-search-ui-button-wrapper .search-input.disabled {
            cursor: pointer
        }

        .sqs-search-ui-button-wrapper .search-input.hover-effect:hover, .sqs-search-ui-button-wrapper .search-input.hover-effect:focus {
            opacity: 1
        }

        .sqs-search-ui-button-wrapper .search-input:hover::-webkit-input-placeholder {
            font-style: normal
        }

        .sqs-search-ui-button-wrapper .search-input:hover:-moz-placeholder {
            font-style: normal
        }

        .sqs-search-ui-button-wrapper .search-input:hover::-moz-placeholder {
            font-style: normal
        }

        .sqs-search-ui-button-wrapper .search-input:hover:-ms-input-placeholder {
            font-style: normal
        }

        .sqs-search-ui-button-wrapper .spinner-wrapper {
            position: absolute;
            top: 50%;
            -webkit-transform: translatey(-50%);
            -moz-transform: translatey(-50%);
            -ms-transform: translatey(-50%);
            -o-transform: translatey(-50%);
            transform: translatey(-50%);
            left: 18px
        }

        .sqs-search-ui-button-wrapper .spinner-wrapper .sqs-spin {
            display: block;
            vertical-align: middle
        }

        .sqs-search-preview-ui {
            position: absolute;
            z-index: 999999;
            background-color: #fff;
            width: 100%
        }

        .sqs-search-preview-ui .sqs-search-ui-result {
            border-top: none;
            border: 1px solid #ddd
        }

        .sqs-search-preview-ui .sqs-search-ui-result .search-result-notice {
            background-color: #fff;
            font-weight: 200;
            font-size: 12px;
            padding: 6px 12px
        }

        .sqs-search-preview-ui .sqs-search-ui-result .search-result-notice.hide {
            display: none
        }

        .sqs-search-preview-ui .sqs-search-ui-result .sqs-search-ui-list {
            max-height: 500px;
            overflow-x: hidden;
            overflow-y: scroll
        }

        .sqs-search-preview-ui .sqs-search-ui-result .sqs-search-ui-list .search-result {
            padding: 16px;
            cursor: pointer;
            border-bottom: 1px solid #ddd;
            -webkit-transition: background-color .2s ease-out;
            -moz-transition: background-color .2s ease-out;
            -ms-transition: background-color .2s ease-out;
            -o-transition: background-color .2s ease-out;
            transition: background-color .2s ease-out
        }

        .sqs-search-preview-ui .sqs-search-ui-result .sqs-search-ui-list .search-result:last-child {
            border-bottom: none
        }

        .sqs-search-preview-ui .sqs-search-ui-result .sqs-search-ui-list .search-result.selected, .sqs-search-preview-ui .sqs-search-ui-result .sqs-search-ui-list .search-result:hover {
            background-color: #f5f5f5
        }

        .sqs-search-preview-ui .sqs-search-ui-result .sqs-search-ui-list .search-result .sqs-search-ui-item {
            border-top: none
        }

        .sqs-search-preview-ui .sqs-search-ui-result .sqs-search-ui-list .search-result .sqs-search-ui-item em {
            color: #222;
            font-style: italic
        }

        .sqs-search-preview-ui .sqs-search-ui-result .sqs-search-ui-list .search-result .sqs-search-ui-item .sqs-main-image {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0
        }

        .sqs-search-preview-ui .sqs-search-ui-result .sqs-search-ui-list .search-result .sqs-search-ui-item .sqs-main-image-container {
            width: 50px;
            float: right;
            margin-left: 5px;
            box-shadow: #ddd 1px -1px 5px
        }

        .sqs-search-preview-ui .sqs-search-ui-result .sqs-search-ui-list .search-result .sqs-search-ui-item .sqs-main-image-intrinsic {
            position: relative;
            width: 100%;
            height: 0;
            padding-bottom: 100%
        }

        .sqs-search-preview-ui .sqs-search-ui-result .sqs-search-ui-list .search-result .sqs-search-ui-item .sqs-title {
            font-size: 16px;
            line-height: 1.2em;
            margin-bottom: .5em;
            color: #333
        }

        .sqs-search-preview-ui .sqs-search-ui-result .sqs-search-ui-list .search-result .sqs-search-ui-item .sqs-content {
            font-size: 12px;
            line-height: 1.4em
        }

        .sqs-search-preview-ui.no-image .sqs-main-image-container {
            display: none
        }

        .sqs-block-map .sqs-block-map-content {
            position: relative
        }

        .sqs-block-map .sqs-block-map-content .sqs-map-wrapper {
            position: absolute !important;
            top: 0;
            left: 0;
            height: 100%;
            max-width: none;
            width: 100%
        }

        .rss-block .social-rss:before {
            position: relative;
            top: -.05em;
            margin-right: .4em;
            font-size: .7em
        }

        .twitter-block .tweet-list {
            list-style-type: none;
            margin: 0 0 2.2em 0;
            padding: 0
        }

        .twitter-block .tweet {
            margin: 0 0 2.2em 0
        }

        .twitter-block .tweet a {
            border: 0
        }

        .twitter-block .tweet .tweet-avatar-wrapper {
            float: left
        }

        .twitter-block .tweet .tweet-avatar {
            border-radius: 2px
        }

        .twitter-block .tweet .tweet-text-wrapper {
            margin-left: 60px
        }

        .twitter-block .tweet.no-avatar .tweet-text-wrapper {
            margin-left: 0px
        }

        .twitter-block .tweet .tweet-from {
            font-size: 1.1em;
            margin: 0 0 .5em 0;
            line-height: 1em;
            font-weight: bold
        }

        .twitter-block .tweet .tweet-timestamp a {
            font-size: .8em
        }

        .form-wrapper .field-list {
            line-height: normal
        }

        .form-wrapper .field-list fieldset, .form-wrapper .field-list legend {
            margin: 0;
            padding: 0;
            border: 0
        }

        .form-wrapper .field-list legend {
            display: none
        }

        .form-wrapper .field-list textarea {
            min-height: 100px;
            resize: vertical
        }

        .form-wrapper .field-list textarea.medium {
            min-height: 200px
        }

        .form-wrapper .field-list textarea.large {
            min-height: 300px
        }

        .form-wrapper .field-list .section {
            margin: 2em 0;
            padding-bottom: .3em;
            font-size: .9em;
            text-transform: uppercase
        }

        .form-wrapper .field-list .section.underline {
            border-bottom: 1px solid #999
        }

        .form-wrapper .field-list .section:nth-child(1) {
            margin: 0 0 2em 0
        }

        .form-wrapper .field-list .title {
            display: block
        }

        .form-wrapper .field-list .description {
            padding: .5em 0 .5em;
            font-size: 12px;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=70)";
            filter: alpha(opacity=70);
            -moz-opacity: .7;
            -khtml-opacity: .7;
            opacity: .7;
            display: block
        }

        .form-wrapper .field-list .field {
            position: relative;
            margin: 0 0 24px
        }

        .form-wrapper .field-list .field .caption {
            font-size: 12px
        }

        .form-wrapper .field-list .field .caption .field-element {
            font-size: 14px
        }

        .form-wrapper .field-list .field .field-element {
            width: 100%;
            padding: 12px;
            margin: 6px 0 4px;
            border: 1px solid #ccc;
            background: #fafafa;
            font-family: sans-serif;
            font-size: 12px;
            line-height: normal;
            box-sizing: border-box;
            border-radius: 2px
        }

        .form-wrapper .field-list .field .field-element:focus {
            background: #fff;
            -webkit-transition: background .1s ease-in;
            -moz-transition: background .1s ease-in;
            -ms-transition: background .1s ease-in;
            -o-transition: background .1s ease-in;
            transition: background .1s ease-in;
            outline: none
        }

        .form-wrapper .field-list .field select {
            margin: 6px 0 4px;
            max-width: 100%
        }

        .form-wrapper .field-list .field .prefix {
            position: absolute;
            bottom: 16px;
            left: 8px;
            color: #aaa;
            font-family: sans-serif;
            font-size: 13px;
            line-height: 16px
        }

        .form-wrapper .field-list .field.twitter .field-element {
            padding-left: 22px
        }

        .form-wrapper .field-list .field.currency.hassymbol .field-element {
            padding-left: 20px
        }

        .form-wrapper .field-list .field.website .field-element {
            padding-left: 45px
        }

        .form-wrapper .field-list .field.checkbox label, .form-wrapper .field-list .field.radio label {
            cursor: pointer
        }

        .form-wrapper .field-list .field.checkbox input, .form-wrapper .field-list .field.radio input {
            margin-right: 5px
        }

        .form-wrapper .field-list .field .option {
            margin: 6px 0 4px;
            font-size: 13px
        }

        .form-wrapper .field-list .field.likert .item {
            overflow: hidden;
            margin: 1.6em 0 1.6em 0
        }

        .form-wrapper .field-list .field.likert .question {
            margin: 0 0 .5em 0;
            font-size: .9em
        }

        .form-wrapper .field-list .field.likert .option {
            width: 20%;
            float: left;
            text-align: left;
            border-top: 1px solid #ddd
        }

        .form-wrapper .field-list .field.likert .option label {
            margin: 0;
            padding: 0 0 0 1px;
            font-size: .9em;
            display: block;
            cursor: pointer
        }

        .form-wrapper .field-list .field.likert .option input {
            margin: 10px 0;
            display: block
        }

        .form-wrapper .field-list .field.likert .option:last-of-type {
            border-right: none
        }

        .form-wrapper .field-list .fields {
            margin: 0 0 0 -2%
        }

        .form-wrapper .field-list .fields .title, .form-wrapper .field-list .fields .description, .form-wrapper .field-list .fields .field, .form-wrapper .field-list .fields .field-error {
            margin-left: 2%
        }

        .form-wrapper .field-list .fields .field {
            float: left
        }

        .form-wrapper .field-list .fields .field.two-digits {
            width: 3.5em
        }

        .form-wrapper .field-list .fields .field.three-digits {
            width: 4.2em
        }

        .form-wrapper .field-list .fields .field.four-digits {
            width: 4.8em
        }

        .form-wrapper .field-list .fields .field.ampm {
            width: 4.5em
        }

        .form-wrapper .field-list .fields.name .field {
            width: 48%
        }

        .form-wrapper .field-list .fields.address .field.address1, .form-wrapper .field-list .fields.address .field.address2 {
            width: 98%
        }

        .form-wrapper .field-list .fields.address .field.city {
            width: 70%
        }

        .form-wrapper .field-list .fields.address .field.state-province {
            width: 26%
        }

        .form-wrapper .field-list .fields.address .field.zip {
            width: 36%
        }

        .form-wrapper .field-list .fields.address .field.country {
            width: 98%
        }

        .form-wrapper .field-list .fields.payment .field.card-expiry-month {
            width: 40%
        }

        .form-wrapper .field-list .fields.payment .field.card-expiry-year {
            width: 40%
        }

        .form-wrapper .field-list .form-item.error, .form-wrapper .field-list .form-item.error .caption, .form-wrapper .field-list .form-item.error .title, .form-wrapper .field-list .form-item.error .description {
            color: #bd0000
        }

        .form-wrapper .field-list .form-item.error input, .form-wrapper .field-list .form-item.error textarea {
            border: 1px solid #e99292
        }

        .form-wrapper .form-button-wrapper--align-left {
            text-align: left
        }

        .form-wrapper .form-button-wrapper--align-center {
            text-align: center
        }

        .form-wrapper .form-button-wrapper--align-right {
            text-align: right
        }

        .form-wrapper input[type=submit] {
            display: inline-block;
            width: auto;
            height: auto;
            padding: 1em 2.5em;
            color: #fff;
            background-color: #272727;
            border-width: 0;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 12px;
            line-height: 1em;
            font-weight: normal;
            font-style: normal;
            text-transform: uppercase;
            letter-spacing: 0px;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            outline: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            font-size: 14px;
            text-transform: none
        }

        .form-wrapper .form-submission-text {
            margin-top: 20px
        }

        .form-wrapper .field-error {
            color: #fff;
            background: #cc3b3b url('//static.squarespace.com/universal/images-v6/standard/icon_close_7_light.png') no-repeat 9px 50%;
            padding: 5px 15px 3px 25px;
            font-size: 13px;
            border-radius: 2px;
            margin: 12px 0;
            line-height: 23px;
            display: inline-block
        }

        .form-wrapper .field .field-error {
            margin-bottom: .5em
        }

        .form-wrapper .submitting .field-list {
            opacity: .7
        }

        .form-wrapper .hidden, .form-wrapper.hidden {
            display: none
        }

        .form-block .lightbox-handle-wrapper--align-left {
            text-align: left
        }

        .form-block .lightbox-handle-wrapper--align-center {
            text-align: center
        }

        .form-block .lightbox-handle-wrapper--align-right {
            text-align: right
        }

        .form-block .lightbox-handle {
            display: inline-block;
            width: auto;
            height: auto;
            padding: 1em 2.5em;
            color: #fff;
            background-color: #272727;
            border-width: 0;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 12px;
            line-height: 1em;
            font-weight: normal;
            font-style: normal;
            text-transform: uppercase;
            letter-spacing: 0px;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            outline: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            font-size: 14px;
            text-transform: none
        }

        .sqs-modal-lightbox {
            width: 100%;
            font-size: 14px;
            text-transform: none;
            font-style: normal;
            text-decoration: none
        }

        .sqs-modal-lightbox-content {
            z-index: 100000000;
            position: absolute;
            height: 100%;
            width: 100%;
            top: 0
        }

        .sqs-modal-lightbox-content .lightbox-background {
            position: absolute;
            top: 0;
            width: 100%;
            height: 100%;
            background: #000;
            opacity: .4
        }

        .sqs-modal-lightbox-content .lightbox-inner {
            position: absolute;
            overflow: auto;
            -webkit-overflow-scrolling: touch;
            width: 100%;
            height: 100%;
            top: 0
        }

        .sqs-modal-lightbox-content .lightbox-inner .lightbox-content {
            max-width: 600px;
            margin: 0 auto;
            position: relative;
            padding: 40px;
            background: #fff
        }

        .sqs-modal-lightbox-content .lightbox-inner .lightbox-content .form-wrapper {
            color: #222;
            font-family: inherit
        }

        .sqs-modal-lightbox-content .lightbox-inner .lightbox-content .form-wrapper .form-title {
            font-size: 22px;
            line-height: 1.2em;
            margin-right: 22px;
            color: #333
        }

        .sqs-modal-lightbox-content .lightbox-inner .lightbox-content .form-wrapper .form-inner-wrapper form {
            margin-top: 55px
        }

        .sqs-modal-lightbox-content .lightbox-inner .lightbox-content .form-wrapper .form-inner-wrapper form .radio .option {
            margin-left: 1px
        }

        .sqs-modal-lightbox-content .lightbox-inner .lightbox-content .lightbox-close {
            position: absolute;
            color: #333;
            font-size: 22px;
            width: 22px;
            line-height: 22px;
            top: 40px;
            right: 40px;
            text-align: center;
            cursor: pointer
        }

        @media only screen and (max-width: 600px) {
            .sqs-modal-lightbox .lightbox-inner {
                background: #fff
            }

            .sqs-modal-lightbox .lightbox-inner .lightbox-content {
                margin-top: 0 !important
            }
        }

        html.sqs-modal-lightbox-open, html.sqs-modal-lightbox-open body {
            overflow: hidden
        }

        .menu-block .menu-selector {
            margin-bottom: 3em
        }

        .menu-block .menu-selector label {
            display: inline-block;
            padding: 0 .5em;
            font-size: 1.1em
        }

        .menu-block .menu-selector label.menu-select-labels--active {
            text-decoration: underline
        }

        .menu-block .menu-select-button {
            display: none
        }

        .menu-block .menus--has-multiple .menu {
            display: none
        }

        .menu-block .menu-header {
            margin-bottom: 3em
        }

        .menu-block .menu-section {
            margin-top: 1em
        }

        .menu-block .menu-section + .menu-section {
            margin-top: 5em
        }

        .menu-block .menu-section-header {
            margin-bottom: 2em;
            padding-bottom: 1em
        }

        .menu-block .menu-section-title {
            font-size: 1.5em
        }

        .menu-block .menu-section-description {
            font-size: .85em;
            line-height: 1.4em
        }

        .menu-block .menu-item {
            margin-bottom: 2em;
            margin-top: 0;
            line-height: 1.2em
        }

        .menu-block .menu-item-title {
            font-size: 1.1em;
            font-weight: 700;
            line-height: 1.2em
        }

        .menu-block .menu-item-description {
            line-height: 1.3em;
            margin-top: 5px
        }

        .menu-block .menu-item-price-bottom {
            margin: .5em 0
        }

        .menu-block .menu-item-option {
            font-size: .8em;
            font-style: italic
        }

        .menu-block .menu-style-classic .menu-selector, .menu-block .menu-style-classic .menu-header, .menu-block .menu-style-classic .menu-section-title, .menu-block .menu-style-classic .menu-section-description {
            text-align: center
        }

        .menu-block .menu-style-classic .menu-items {
            -webkit-column-width: 18em;
            -webkit-column-gap: 3em;
            -moz-column-width: 18em;
            -moz-column-gap: 3em;
            -ms-column-width: 18em;
            -ms-column-gap: 3em;
            -o-column-width: 18em;
            -o-column-gap: 3em;
            column-width: 18em;
            column-gap: 3em
        }

        .menu-block .menu-style-classic .menu-item {
            page-break-inside: avoid;
            -webkit-column-break-inside: avoid;
            -moz-column-break-inside: avoid;
            -ms-column-break-inside: avoid;
            -o-column-break-inside: avoid;
            break-inside: avoid;
            width: 100%
        }

        .menu-block .menu-style-classic .menu-item-description {
            margin-right: 3em
        }

        .menu-block .menu-style-classic .menu-item-price-top {
            float: right;
            padding-left: 20px
        }

        .menu-block .menu-style-classic .menu-item-price-bottom {
            display: none
        }

        .menu-block .menu-style-simple .menu-selector, .menu-block .menu-style-simple .menu {
            text-align: center
        }

        .menu-block .menu-style-simple .menu-item-price-top {
            display: none
        }

        .donation-block .sqs-donate-button-wrapper {
            display: block
        }

        .donation-block .sqs-donate-button-wrapper--align-left {
            text-align: left
        }

        .donation-block .sqs-donate-button-wrapper--align-center {
            text-align: center
        }

        .donation-block .sqs-donate-button-wrapper--align-right {
            text-align: right
        }

        .donation-block .sqs-donate-button {
            display: inline-block;
            width: auto;
            height: auto;
            padding: 1em 2.5em;
            color: #fff;
            background-color: #272727;
            border-width: 0;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 12px;
            line-height: 1em;
            font-weight: normal;
            font-style: normal;
            text-transform: uppercase;
            letter-spacing: 0px;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            outline: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none
        }

        .sqs-block-opentable-hidden {
            display: none !important
        }

        .sqs-block-opentable iframe {
            visibility: hidden;
            position: absolute
        }

        .sqs-block-opentable * {
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box
        }

        .sqs-block-opentable #OT_form {
            padding: 0;
            margin: 0;
            width: 165px;
            width: auto
        }

        .sqs-block-opentable .OT_wrapper {
            border: none;
            border-radius: 0;
            background-color: rgba(0, 0, 0, .05);
            font-family: inherit;
            width: 100%;
            margin: 0;
            padding: 34px 17px 40px;
            background: rgba(0, 0, 0, .05);
            color: #272727;
            font-size: 15px;
            line-height: 1em;
            text-align: center;
            position: relative
        }

        .sqs-block-opentable .OT_header {
            width: 85%;
            margin: 0 auto;
            position: relative
        }

        .sqs-block-opentable .OT_title {
            position: relative;
            width: 100%;
            margin: 0 0 17px 0;
            padding: 0;
            font-size: 30px;
            color: #272727;
            color: rgba(0, 0, 0, .95);
            font-weight: normal;
            text-align: center;
            line-height: 1em
        }

        .sqs-block-opentable .OT_subtitle {
            margin: 0;
            padding: 0;
            font-size: 10px;
            letter-spacing: .15em;
            color: #272727;
            color: rgba(0, 0, 0, .8);
            text-transform: uppercase;
            font-weight: normal;
            white-space: nowrap;
            width: auto;
            line-height: 1em
        }

        .sqs-block-opentable .OT_list {
            list-style: none;
            margin: 28px 0 0 0;
            padding: 0;
            width: auto;
            display: inline-block;
            line-height: 1em
        }

        .sqs-block-opentable .OT_day, .sqs-block-opentable .OT_time, .sqs-block-opentable .OT_party {
            margin: 0 12px;
            padding: 6px 0 6px 35px;
            height: auto;
            background-image: url('/universal/images-v6/icons/opentable-icons.svg');
            background-repeat: no-repeat;
            background-position: 0 0;
            width: 33%;
            min-width: 150px;
            max-width: 180px;
            position: relative;
            border: none !important;
            list-style: none;
            display: inline-block;
            line-height: 1em
        }

        .sqs-block-opentable.sqs-block-opentable-hide-fields .OT_day, .sqs-block-opentable.sqs-block-opentable-hide-fields .OT_time, .sqs-block-opentable.sqs-block-opentable-hide-fields .OT_party {
            display: none
        }

        .sqs-block-opentable.sqs-block-opentable-hide-fields .OT_submit {
            margin: 0
        }

        .sqs-block-opentable .OT_day {
            margin: 0 12px;
            padding: 6px 0 6px 35px;
            background-position: -18px -7px;
            border: none;
            list-style: none;
            background-size: 123px
        }

        .sqs-block-opentable .OT_time {
            background-position: -18px -55px;
            border: none
        }

        .sqs-block-opentable .OT_party {
            background-position: -18px -102px;
            border: none
        }

        .sqs-block-opentable .OT_searchTimeField, .sqs-block-opentable .OT_searchDateField, .sqs-block-opentable .OT_searchPartyField {
            font-family: inherit;
            background: #fff url('/universal/images-v6/icons/opentable-icons.svg') no-repeat;
            color: #272727;
            font-weight: normal;
            margin: 0;
            border: 1px solid rgba(0, 0, 0, .12);
            width: 100%;
            height: auto;
            font-size: 13px;
            font-style: normal;
            padding: .7em 1.1em;
            border-radius: 0px;
            cursor: pointer;
            line-height: normal;
            outline: none;
            background-position: right -14px top -75px;
            background-size: 43px;
            -moz-background-clip: padding;
            -webkit-background-clip: padding;
            background-clip: padding-box
        }

        .sqs-block-opentable #OT_timeList, .sqs-block-opentable #OT_partyList {
            max-height: 195px;
            overflow: auto;
            border: 1px solid rgba(0, 0, 0, .12);
            position: absolute;
            width: auto;
            top: 100%;
            left: 35px;
            right: 0;
            display: none;
            margin-top: -7px;
            text-align: left;
            -moz-background-clip: padding;
            -webkit-background-clip: padding;
            background-clip: padding-box
        }

        .sqs-block-opentable .OT_navList {
            list-style: none;
            padding: 0;
            margin: -6px 0 0 0;
            float: none;
            position: absolute;
            background-color: #fff;
            z-index: 200;
            width: auto;
            top: 100%;
            left: 35px;
            right: 0
        }

        .sqs-block-opentable .OT_navListItem {
            padding: 0;
            margin: 0;
            position: relative;
            float: none;
            line-height: 1em;
            width: auto;
            list-style: none
        }

        .sqs-block-opentable #OT_timeList .OT_navListItem, .sqs-block-opentable #OT_partyList .OT_navListItem {
            width: auto
        }

        .sqs-block-opentable #OT_timeList li a.OT_navLink, .sqs-block-opentable #OT_partyList li a.OT_navLink {
            border: 0;
            width: auto
        }

        .sqs-block-opentable a.OT_navLink:link, .sqs-block-opentable a.OT_navLink:visited, .sqs-block-opentable a.OT_navLink:hover, .sqs-block-opentable a.OT_navLink:active {
            font-family: inherit;
            color: #272727;
            text-decoration: none;
            font-size: 13px;
            line-height: 1em;
            width: auto;
            display: block;
            padding: .7em 1.1em;
            border: none
        }

        .sqs-block-opentable a.OT_navLink:hover, .sqs-block-opentable a.OT_navLink.selected, .sqs-block-opentable a.OT_navLink:active {
            background-color: rgba(0, 0, 0, .05);
            color: #272727;
            opacity: 1
        }

        .sqs-block-opentable a.OT_navLink.selected, .sqs-block-opentable a.OT_navLink:active {
            background-color: rgba(0, 0, 0, .12)
        }

        .sqs-block-opentable .OT_submit {
            margin: 24px 0 0 0;
            padding: 0;
            width: auto;
            height: auto;
            list-style: none;
            display: block
        }

        .sqs-block-opentable .OTButton, .sqs-block-opentable #OTButton {
            width: auto;
            text-align: center;
            margin: 0;
            padding: 0
        }

        .sqs-block-opentable a.OT_Find_a_Table:link, .sqs-block-opentable a.OT_Find_a_Table:visited, .sqs-block-opentable a.OT_Find_a_Table:hover, .sqs-block-opentable a.OT_Find_a_Table:active {
            background-image: none;
            background-repeat: repeat;
            background-position: 0 0;
            background-color: #272727;
            background-color: rgba(0, 0, 0, .95);
            font-family: inherit;
            font-size: 13px;
            font-weight: normal;
            text-decoration: none;
            color: #fff;
            text-align: center;
            height: auto;
            display: inline-block;
            padding: 1.1em 2.3em;
            line-height: normal;
            text-shadow: none;
            opacity: .8;
            position: relative;
            width: auto;
            border: none;
            text-transform: uppercase;
            white-space: nowrap;
            cursor: pointer;
            outline: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            -webkit-transition: opacity .3s ease-out, background .3s ease-out;
            -moz-transition: opacity .3s ease-out, background .3s ease-out;
            -ms-transition: opacity .3s ease-out, background .3s ease-out;
            -o-transition: opacity .3s ease-out, background .3s ease-out;
            transition: opacity .3s ease-out, background .3s ease-out
        }

        .opentable-style-light .OT_wrapper {
            color: #fff
        }

        .opentable-style-light .OT_title {
            color: #fff
        }

        .opentable-style-light .OT_subtitle {
            color: #fff
        }

        .opentable-style-light a.OT_Find_a_Table:link, .opentable-style-light a.OT_Find_a_Table:visited, .opentable-style-light a.OT_Find_a_Table:hover, .opentable-style-light a.OT_Find_a_Table:active {
            background-color: #272727;
            background-color: rgba(0, 0, 0, .3);
            background: rgba(0, 0, 0, .05)
        }

        .opentable-style-light a.OT_Find_a_Table:link:hover, .opentable-style-light a.OT_Find_a_Table:visited:hover, .opentable-style-light a.OT_Find_a_Table:hover:hover, .opentable-style-light a.OT_Find_a_Table:active:hover {
            background-color: #272727;
            background-color: rgba(0, 0, 0, .8);
            background: rgba(0, 0, 0, .05)
        }

        .opentable-style-light .OT_day {
            background-position: -80px -7px
        }

        .opentable-style-light .OT_time {
            background-position: -80px -55px
        }

        .opentable-style-light .OT_party {
            background-position: -80px -102px
        }

        .hide-opentable-icons .OT_day, .hide-opentable-icons .OT_time, .hide-opentable-icons .OT_party {
            margin: 0;
            padding: 6px;
            background: none
        }

        .hide-opentable-icons #OT_timeList, .hide-opentable-icons #OT_partyList, .hide-opentable-icons .OT_navList {
            left: 6px;
            right: 6px
        }

        .no-svg .OT_day, .no-svg .OT_time, .no-svg .OT_party, .no-svg .OT_searchTimeField, .no-svg .OT_searchDateField, .no-svg .OT_searchPartyField {
            background-image: url('/universal/images-v6/icons/opentable-icons.png')
        }

        .sqs-svg-icon--list.social-icon-alignment-left {
            text-align: left
        }

        .sqs-svg-icon--list.social-icon-alignment-right {
            text-align: right
        }

        .sqs-svg-icon--list.social-icon-alignment-center {
            text-align: center
        }

        .rss-block .social-rss:before, .rss-block .social-rss-square:before, .rss-block .social-rss-round:before {
            font-family: 'social-icon-font';
            speak: none;
            font-style: normal;
            font-weight: normal;
            line-height: 1;
            -webkit-font-smoothing: antialiased;
            position: relative;
            top: 0;
            margin-right: 10px;
            font-size: .7em
        }

        .rss-block .social-rss:before {
            content: "\e630"
        }

        .social-icons-style-regular .sqs-use--icon {
            fill: #fff
        }

        .social-icons-style-regular .sqs-use--background, .social-icons-style-regular .sqs-use--mask {
            fill: transparent
        }

        .social-icons-style-regular.social-icons-color-white .sqs-use--icon {
            fill: #fff
        }

        .social-icons-style-regular.social-icons-color-white .sqs-use--background, .social-icons-style-regular.social-icons-color-white .sqs-use--mask {
            fill: transparent
        }

        .social-icons-style-regular.social-icons-color-black .sqs-use--icon {
            fill: #222
        }

        .social-icons-style-regular.social-icons-color-black .sqs-use--background, .social-icons-style-regular.social-icons-color-black .sqs-use--mask {
            fill: transparent
        }

        .social-icons-style-border .sqs-svg-icon--wrapper {
            border-color: #fff
        }

        .social-icons-style-border .sqs-use--icon {
            fill: #fff
        }

        .social-icons-style-border .sqs-use--background, .social-icons-style-border .sqs-use--mask {
            fill: transparent
        }

        .social-icons-style-border.social-icons-color-white .sqs-svg-icon--wrapper {
            border-color: #fff
        }

        .social-icons-style-border.social-icons-color-white .sqs-use--icon {
            fill: #fff
        }

        .social-icons-style-border.social-icons-color-white .sqs-use--background, .social-icons-style-border.social-icons-color-white .sqs-use--mask {
            fill: transparent
        }

        .social-icons-style-border.social-icons-color-black .sqs-svg-icon--wrapper {
            border-color: #222
        }

        .social-icons-style-border.social-icons-color-black .sqs-use--icon {
            fill: #222
        }

        .social-icons-style-border.social-icons-color-black .sqs-use--background, .social-icons-style-border.social-icons-color-black .sqs-use--mask {
            fill: transparent
        }

        .social-icons-style-knockout .sqs-use--mask {
            fill: #fff
        }

        .social-icons-style-knockout .sqs-use--background, .social-icons-style-knockout .sqs-use--icon {
            fill: transparent
        }

        .social-icons-style-knockout.social-icons-color-white .sqs-use--mask {
            fill: #fff
        }

        .social-icons-style-knockout.social-icons-color-white .sqs-use--background, .social-icons-style-knockout.social-icons-color-white .sqs-use--icon {
            fill: transparent
        }

        .social-icons-style-knockout.social-icons-color-black .sqs-use--mask {
            fill: #222
        }

        .social-icons-style-knockout.social-icons-color-black .sqs-use--background, .social-icons-style-knockout.social-icons-color-black .sqs-use--icon {
            fill: transparent
        }

        .social-icons-style-solid .sqs-use--icon {
            fill: #222
        }

        .social-icons-style-solid .sqs-use--background {
            fill: #222
        }

        .social-icons-style-solid .sqs-use--mask {
            fill: #fff
        }

        .social-icons-style-solid.social-icons-color-white .sqs-use--icon {
            fill: #222
        }

        .social-icons-style-solid.social-icons-color-white .sqs-use--background {
            fill: #fff
        }

        .social-icons-style-solid.social-icons-color-white .sqs-use--mask {
            fill: #fff
        }

        .social-icons-style-solid.social-icons-color-black .sqs-use--icon {
            fill: #fff
        }

        .social-icons-style-solid.social-icons-color-black .sqs-use--background {
            fill: #222
        }

        .social-icons-style-solid.social-icons-color-black .sqs-use--mask {
            fill: #222
        }

        .social-icons-style-border .sqs-svg-icon--wrapper:hover {
            background-color: #fff
        }

        .social-icons-style-border .sqs-svg-icon--wrapper:hover .sqs-use--icon {
            fill: #222
        }

        .social-icons-style-border.social-icons-color-white .sqs-svg-icon--wrapper:hover {
            background-color: #fff
        }

        .social-icons-style-border.social-icons-color-white .sqs-svg-icon--wrapper:hover .sqs-use--icon {
            fill: #222
        }

        .social-icons-style-border.social-icons-color-black .sqs-svg-icon--wrapper:hover {
            background-color: #222
        }

        .social-icons-style-border.social-icons-color-black .sqs-svg-icon--wrapper:hover .sqs-use--icon {
            fill: #fff
        }

        .social-icons-style-regular:hover .sqs-svg-icon--wrapper .sqs-use--icon {
            fill: rgba(255, 255, 255, .4)
        }

        .social-icons-style-regular:hover .sqs-svg-icon--wrapper:hover .sqs-use--icon {
            fill: #fff
        }

        .social-icons-style-regular.social-icons-color-white:hover .sqs-svg-icon--wrapper .sqs-use--icon {
            fill: rgba(255, 255, 255, .4)
        }

        .social-icons-style-regular.social-icons-color-white:hover .sqs-svg-icon--wrapper:hover .sqs-use--icon {
            fill: #fff
        }

        .social-icons-style-regular.social-icons-color-black:hover .sqs-svg-icon--wrapper .sqs-use--icon {
            fill: rgba(34, 34, 34, .4)
        }

        .social-icons-style-regular.social-icons-color-black:hover .sqs-svg-icon--wrapper:hover .sqs-use--icon {
            fill: #222
        }

        .social-icons-style-knockout:hover .sqs-svg-icon--wrapper .sqs-use--mask {
            fill: rgba(255, 255, 255, .4)
        }

        .social-icons-style-knockout:hover .sqs-svg-icon--wrapper:hover .sqs-use--mask {
            fill: #fff
        }

        .social-icons-style-knockout.social-icons-color-white:hover .sqs-svg-icon--wrapper .sqs-use--mask {
            fill: rgba(255, 255, 255, .4)
        }

        .social-icons-style-knockout.social-icons-color-white:hover .sqs-svg-icon--wrapper:hover .sqs-use--mask {
            fill: #fff
        }

        .social-icons-style-knockout.social-icons-color-black:hover .sqs-svg-icon--wrapper .sqs-use--mask {
            fill: rgba(34, 34, 34, .4)
        }

        .social-icons-style-knockout.social-icons-color-black:hover .sqs-svg-icon--wrapper:hover .sqs-use--mask {
            fill: #222
        }

        .social-icons-style-solid:hover .sqs-svg-icon--wrapper .sqs-use--mask {
            fill: rgba(255, 255, 255, .4)
        }

        .social-icons-style-solid:hover .sqs-svg-icon--wrapper .sqs-use--icon {
            fill: rgba(34, 34, 34, .4)
        }

        .social-icons-style-solid:hover .sqs-svg-icon--wrapper .sqs-use--background {
            fill: rgba(34, 34, 34, 0)
        }

        .social-icons-style-solid:hover .sqs-svg-icon--wrapper:hover .sqs-use--mask {
            fill: #fff
        }

        .social-icons-style-solid:hover .sqs-svg-icon--wrapper:hover .sqs-use--icon {
            fill: rgba(34, 34, 34, 0)
        }

        .social-icons-style-solid:hover .sqs-svg-icon--wrapper:hover .sqs-use--background {
            fill: #222
        }

        .social-icons-style-solid.social-icons-color-white:hover .sqs-svg-icon--wrapper .sqs-use--mask, .social-icons-style-solid.social-icons-color-black:hover .sqs-svg-icon--wrapper .sqs-use--mask {
            fill: rgba(255, 255, 255, .4)
        }

        .social-icons-style-solid.social-icons-color-white:hover .sqs-svg-icon--wrapper .sqs-use--icon, .social-icons-style-solid.social-icons-color-black:hover .sqs-svg-icon--wrapper .sqs-use--icon {
            fill: rgba(34, 34, 34, .4)
        }

        .social-icons-style-solid.social-icons-color-white:hover .sqs-svg-icon--wrapper .sqs-use--background, .social-icons-style-solid.social-icons-color-black:hover .sqs-svg-icon--wrapper .sqs-use--background {
            fill: rgba(34, 34, 34, 0)
        }

        .social-icons-style-solid.social-icons-color-white:hover .sqs-svg-icon--wrapper:hover .sqs-use--mask, .social-icons-style-solid.social-icons-color-black:hover .sqs-svg-icon--wrapper:hover .sqs-use--mask {
            fill: #222
        }

        .social-icons-style-solid.social-icons-color-white:hover .sqs-svg-icon--wrapper:hover .sqs-use--icon, .social-icons-style-solid.social-icons-color-black:hover .sqs-svg-icon--wrapper:hover .sqs-use--icon {
            fill: rgba(255, 255, 255, 0)
        }

        .social-icons-style-solid.social-icons-color-white:hover .sqs-svg-icon--wrapper:hover .sqs-use--background, .social-icons-style-solid.social-icons-color-black:hover .sqs-svg-icon--wrapper:hover .sqs-use--background {
            fill: #fff
        }

        .sqs-block-socialaccountlinks .social-account-svg-list, .sqs-block-socialaccountlinks-v2 .social-account-svg-list {
            text-align: left
        }

        .sqs-block-socialaccountlinks .social-account-svg-list:before, .sqs-block-socialaccountlinks-v2 .social-account-svg-list:before, .sqs-block-socialaccountlinks .social-account-svg-list:after, .sqs-block-socialaccountlinks-v2 .social-account-svg-list:after {
            content: "";
            display: table
        }

        .sqs-block-socialaccountlinks .social-account-svg-list:after, .sqs-block-socialaccountlinks-v2 .social-account-svg-list:after {
            clear: both
        }

        .sqs-block-socialaccountlinks .social-account-svg-list a, .sqs-block-socialaccountlinks-v2 .social-account-svg-list a, .sqs-block-socialaccountlinks .social-account-svg-list a:link, .sqs-block-socialaccountlinks-v2 .social-account-svg-list a:link, .sqs-block-socialaccountlinks .social-account-svg-list a:visited, .sqs-block-socialaccountlinks-v2 .social-account-svg-list a:visited {
            display: inline-block;
            width: 20px;
            height: 20px;
            font-size: 20px;
            color: #111;
            text-decoration: none !important;
            font-weight: normal
        }

        .sqs-block-socialaccountlinks .social-account-svg-list a:before, .sqs-block-socialaccountlinks-v2 .social-account-svg-list a:before, .sqs-block-socialaccountlinks .social-account-svg-list a:link:before, .sqs-block-socialaccountlinks-v2 .social-account-svg-list a:link:before, .sqs-block-socialaccountlinks .social-account-svg-list a:visited:before, .sqs-block-socialaccountlinks-v2 .social-account-svg-list a:visited:before {
            font-size: 20px;
            line-height: 20px
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-alignment-left a, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-alignment-left a {
            margin-right: .75em
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-alignment-right a, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-alignment-right a {
            margin-left: .75em
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-alignment-center a, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-alignment-center a {
            margin: 0 .375em
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-alignment-center, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-alignment-center {
            text-align: center
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-alignment-right, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-alignment-right {
            text-align: right
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-white a, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-white a, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-white a:visited, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-white a:visited {
            color: #fff
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-bandsintown, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-bandsintown, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-bandsintown, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-bandsintown, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-bandsintown, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-bandsintown {
            color: #00b4b3
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-behance, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-behance, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-behance, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-behance, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-behance, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-behance {
            color: #1769ff
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-codepen, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-codepen, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-codepen, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-codepen, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-codepen, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-codepen {
            color: #222
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-dribbble, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-dribbble, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-dribbble, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-dribbble, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-dribbble, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-dribbble {
            color: #ea4c89
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-dropbox, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-dropbox, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-dropbox, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-dropbox, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-dropbox, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-dropbox {
            color: #007ee5
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-email, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-email, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-email, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-email, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-email, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-email {
            color: #222
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-facebook, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-facebook, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-facebook, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-facebook, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-facebook, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-facebook {
            color: #3b5998
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-fivehundredpix, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-fivehundredpix, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-fivehundredpix, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-fivehundredpix, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-fivehundredpix, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-fivehundredpix, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-fivehundredpx, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-fivehundredpx, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-fivehundredpx, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-fivehundredpx, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-fivehundredpx, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-fivehundredpx {
            color: #0099e5
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-flickr, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-flickr, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-flickr, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-flickr, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-flickr, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-flickr {
            color: #0063dc
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-foursquare, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-foursquare, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-foursquare, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-foursquare, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-foursquare, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-foursquare {
            color: #f94877
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-github, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-github, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-github, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-github, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-github, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-github {
            color: #4183c4
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-google, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-google, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-google, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-google, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-google, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-google {
            color: #dc4e41
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-googleplay, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-googleplay, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-googleplay, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-googleplay, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-googleplay, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-googleplay {
            color: #5adfcb
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-instagram, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-instagram, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-instagram, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-instagram, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-instagram, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-instagram {
            color: #3f729b
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-itunes, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-itunes, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-itunes, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-itunes, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-itunes, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-itunes {
            color: #ec4652
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-linkedin, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-linkedin, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-linkedin, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-linkedin, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-linkedin, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-linkedin {
            color: #0976b4
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-medium, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-medium, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-medium, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-medium, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-medium, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-medium {
            color: #00ab6c
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-meetup, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-meetup, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-meetup, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-meetup, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-meetup, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-meetup {
            color: #e0393e
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-pinterest, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-pinterest, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-pinterest, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-pinterest, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-pinterest, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-pinterest {
            color: #cc2127
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-rdio, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-rdio, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-rdio, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-rdio, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-rdio, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-rdio {
            color: #006ed2
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-rss, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-rss, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-rss, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-rss, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-rss, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-rss {
            color: #222
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-smugmug, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-smugmug, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-smugmug, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-smugmug, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-smugmug, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-smugmug {
            color: #7dbb00
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-soundcloud, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-soundcloud, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-soundcloud, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-soundcloud, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-soundcloud, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-soundcloud {
            color: #f80
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-spotify, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-spotify, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-spotify, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-spotify, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-spotify, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-spotify {
            color: #84bd00
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-squarespace, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-squarespace, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-squarespace, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-squarespace, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-squarespace, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-squarespace {
            color: #222
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-tumblr, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-tumblr, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-tumblr, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-tumblr, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-tumblr, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-tumblr {
            color: #35465d
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-twitter, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-twitter, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-twitter, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-twitter, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-twitter, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-twitter {
            color: #55acee
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-vimeo, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-vimeo, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-vimeo, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-vimeo, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-vimeo, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-vimeo {
            color: #1ab7ea
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-vine, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-vine, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-vine, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-vine, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-vine, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-vine {
            color: #00b488
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-yelp, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-yelp, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-yelp, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-yelp, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-yelp, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-yelp {
            color: #c41200
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-youtube, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-youtube, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-youtube, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-youtube, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-youtube, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-youtube {
            color: #e52d27
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-meetup, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-meetup, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-meetup, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-meetup, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-meetup, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-meetup {
            color: #e0393e
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-vevo, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-vevo, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-vevo, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-vevo, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-vevo, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-vevo {
            color: #ff0031
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-twitch, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-twitch, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-twitch, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-twitch, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-twitch, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-twitch {
            color: #6441a5
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a.social-vsco, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a.social-vsco, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:link.social-vsco, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:link.social-vsco, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-color-standard a:visited.social-vsco, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-color-standard a:visited.social-vsco {
            color: #ae995a
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-large a, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-large a, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-large a:link, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-large a:link, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-large a:visited, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-large a:visited {
            width: 24px;
            height: 24px;
            font-size: 24px
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-large a:before, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-large a:before, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-large a:link:before, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-large a:link:before, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-large a:visited:before, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-large a:visited:before {
            font-size: 24px;
            line-height: 24px
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-small a, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-small a, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-small a:link, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-small a:link, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-small a:visited, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-small a:visited {
            width: 16px;
            height: 16px;
            font-size: 16px
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-small a:before, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-small a:before, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-small a:link:before, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-small a:link:before, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-small a:visited:before, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-small a:visited:before {
            font-size: 16px;
            line-height: 16px
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-style-round a, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-style-round a, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-style-square a, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-style-square a, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-style-round a:link, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-style-round a:link, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-style-square a:link, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-style-square a:link, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-style-round a:visited, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-style-round a:visited, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-style-square a:visited, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-style-square a:visited {
            width: 30px;
            height: 30px;
            font-size: 30px
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-style-round a:before, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-style-round a:before, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-style-square a:before, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-style-square a:before, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-style-round a:link:before, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-style-round a:link:before, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-style-square a:link:before, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-style-square a:link:before, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-style-round a:visited:before, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-style-round a:visited:before, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-style-square a:visited:before, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-style-square a:visited:before {
            font-size: 30px;
            line-height: 30px
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-style-round.social-icon-alignment-left a, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-style-round.social-icon-alignment-left a, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-style-square.social-icon-alignment-left a, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-style-square.social-icon-alignment-left a {
            margin-right: .25em
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-style-round.social-icon-alignment-right a, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-style-round.social-icon-alignment-right a, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-style-square.social-icon-alignment-right a, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-style-square.social-icon-alignment-right a {
            margin-left: .25em
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-style-round.social-icon-alignment-center a, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-style-round.social-icon-alignment-center a, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-style-square.social-icon-alignment-center a, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-style-square.social-icon-alignment-center a {
            margin: 0 .125em
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-large.social-icon-style-round a, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-large.social-icon-style-round a, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-large.social-icon-style-square a, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-large.social-icon-style-square a, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-large.social-icon-style-round a:link, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-large.social-icon-style-round a:link, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-large.social-icon-style-square a:link, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-large.social-icon-style-square a:link, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-large.social-icon-style-round a:visited, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-large.social-icon-style-round a:visited, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-large.social-icon-style-square a:visited, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-large.social-icon-style-square a:visited {
            width: 36px;
            height: 36px;
            font-size: 36px
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-large.social-icon-style-round a:before, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-large.social-icon-style-round a:before, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-large.social-icon-style-square a:before, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-large.social-icon-style-square a:before, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-large.social-icon-style-round a:link:before, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-large.social-icon-style-round a:link:before, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-large.social-icon-style-square a:link:before, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-large.social-icon-style-square a:link:before, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-large.social-icon-style-round a:visited:before, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-large.social-icon-style-round a:visited:before, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-large.social-icon-style-square a:visited:before, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-large.social-icon-style-square a:visited:before {
            font-size: 36px;
            line-height: 36px
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-small.social-icon-style-round a, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-small.social-icon-style-round a, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-small.social-icon-style-square a, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-small.social-icon-style-square a, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-small.social-icon-style-round a:link, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-small.social-icon-style-round a:link, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-small.social-icon-style-square a:link, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-small.social-icon-style-square a:link, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-small.social-icon-style-round a:visited, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-small.social-icon-style-round a:visited, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-small.social-icon-style-square a:visited, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-small.social-icon-style-square a:visited {
            width: 24px;
            height: 24px;
            font-size: 24px
        }

        .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-small.social-icon-style-round a:before, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-small.social-icon-style-round a:before, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-small.social-icon-style-square a:before, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-small.social-icon-style-square a:before, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-small.social-icon-style-round a:link:before, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-small.social-icon-style-round a:link:before, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-small.social-icon-style-square a:link:before, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-small.social-icon-style-square a:link:before, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-small.social-icon-style-round a:visited:before, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-small.social-icon-style-round a:visited:before, .sqs-block-socialaccountlinks .social-account-svg-list.social-icon-size-small.social-icon-style-square a:visited:before, .sqs-block-socialaccountlinks-v2 .social-account-svg-list.social-icon-size-small.social-icon-style-square a:visited:before {
            font-size: 24px;
            line-height: 24px
        }

        .newsletter-block {
            -webkit-transition: opacity .2s ease-out;
            -moz-transition: opacity .2s ease-out;
            -ms-transition: opacity .2s ease-out;
            -o-transition: opacity .2s ease-out;
            transition: opacity .2s ease-out
        }

        .newsletter-block * {
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box
        }

        .newsletter-block:not(.rendered) {
            opacity: 0
        }

        .newsletter-block .newsletter-form-wrapper {
            width: 100%;
            padding: 34px 34px;
            background: rgba(0, 0, 0, 0);
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            font-size: 15px
        }

        .newsletter-block .newsletter-form-wrapper.hidden, .newsletter-block .newsletter-form-wrapper .hidden {
            display: none
        }

        .newsletter-block .newsletter-form-wrapper--alignCenter.newsletter-form-wrapper {
            padding: 34px 17px
        }

        .newsletter-block .newsletter-form {
            text-align: center
        }

        .newsletter-block .newsletter-form-wrapper--alignLeft .newsletter-form {
            text-align: left
        }

        .newsletter-block .newsletter-form-wrapper--alignRight .newsletter-form {
            text-align: right
        }

        .newsletter-block .newsletter-form-header {
            width: 85%;
            margin: 0 auto
        }

        .newsletter-block .newsletter-form-wrapper--alignLeft .newsletter-form-header, .newsletter-block .newsletter-form-wrapper--alignRight .newsletter-form-header {
            width: 100%;
            margin: 0
        }

        .newsletter-block .newsletter-form-header-title {
            margin: 0 0 17px 0;
            padding: 0;
            color: #272727;
            font-size: 30px;
            line-height: 1.2em;
            text-align: inherit
        }

        .newsletter-block .newsletter-form-header-title a {
            text-decoration: underline
        }

        .newsletter-block .newsletter-form-header-description {
            color: #272727
        }

        .newsletter-block .newsletter-form-header-description p {
            margin: 17px 0;
            padding: 0;
            font-size: 15px;
            line-height: 1.6em
        }

        .newsletter-block .newsletter-form-header-description a {
            text-decoration: underline
        }

        .newsletter-block .newsletter-form-body {
            padding: 0 0 12px 0
        }

        .newsletter-block .newsletter-form-fields-wrapper {
            display: inline-block;
            width: auto;
            margin: 12px 0 0 0
        }

        .newsletter-block .newsletter-form-name-fieldset {
            display: inline-block;
            width: auto;
            margin: 0;
            padding: 0;
            border: none
        }

        .newsletter-block .newsletter-form-wrapper--layoutStack .newsletter-form-name-fieldset {
            display: block;
            width: 100%;
            max-width: 250px
        }

        .newsletter-block .newsletter-form-field-wrapper {
            display: inline-block;
            width: auto;
            min-width: 250px;
            padding: 6px 3px
        }

        .newsletter-block .newsletter-form-wrapper--alignLeft .newsletter-form-field-wrapper {
            padding: 6px 3px 6px 0
        }

        .newsletter-block .newsletter-form-wrapper--alignRight .newsletter-form-field-wrapper {
            padding: 6px 0 6px 3px
        }

        .newsletter-block .newsletter-form-wrapper--layoutStack .newsletter-form-field-wrapper {
            display: block;
            width: 100%;
            max-width: 250px;
            padding: 6px 0
        }

        .newsletter-block .newsletter-form-field-label {
            display: none
        }

        .newsletter-block .newsletter-form-field-element {
            width: 100%;
            padding: 1em;
            background: #fff;
            border: 1px solid rgba(0, 0, 0, .12);
            font-family: inherit;
            font-size: 15px;
            line-height: normal;
            outline: none;
            -webkit-transition: background .3s ease-out, border .3s ease-out;
            -moz-transition: background .3s ease-out, border .3s ease-out;
            -ms-transition: background .3s ease-out, border .3s ease-out;
            -o-transition: background .3s ease-out, border .3s ease-out;
            transition: background .3s ease-out, border .3s ease-out
        }

        .newsletter-block .newsletter-form-field-element:focus {
            background: #fff
        }

        .newsletter-block .newsletter-form-field-element::-webkit-input-placeholder {
            color: rgba(0, 0, 0, .3)
        }

        .newsletter-block .newsletter-form-field-element:-moz-placeholder {
            color: rgba(0, 0, 0, .3)
        }

        .newsletter-block .newsletter-form-field-element::-moz-placeholder {
            color: rgba(0, 0, 0, .3)
        }

        .newsletter-block .newsletter-form-field-element:-ms-input-placeholder {
            color: rgba(0, 0, 0, .3)
        }

        .newsletter-block .field-error {
            display: none
        }

        .newsletter-block .newsletter-form-field-wrapper .field-error {
            display: block;
            margin-bottom: 12px;
            padding: 6px;
            background: #fed9db;
            color: #f23d3d;
            font-size: 12px;
            line-height: normal
        }

        .newsletter-block .newsletter-form-button-wrapper {
            display: inline-block;
            width: auto;
            margin: 12px 0 0 0;
            padding: 6px 3px
        }

        .newsletter-block .newsletter-form-wrapper--alignLeft .newsletter-form-button-wrapper {
            padding: 6px 3px 6px 0
        }

        .newsletter-block .newsletter-form-wrapper--alignRight .newsletter-form-button-wrapper {
            padding: 6px 0 6px 3px
        }

        .newsletter-block .newsletter-form-wrapper--layoutStack .newsletter-form-button-wrapper {
            display: block;
            padding: 6px 0
        }

        .newsletter-block .newsletter-form-button {
            position: relative;
            width: auto;
            padding: 1em 2.25em;
            color: #fff;
            background-color: #4d4d4d;
            border: 1px solid #4d4d4d !important;
            font-family: inherit;
            font-size: 15px;
            line-height: normal;
            font-weight: normal;
            text-align: center;
            text-transform: uppercase;
            white-space: nowrap;
            cursor: pointer;
            outline: none;
            -webkit-appearance: none;
            -moz-appearance: none
        }

        .newsletter-block .newsletter-form-spinner.sqs-spin.light.large {
            visibility: hidden;
            position: absolute;
            top: 50%;
            left: 50%;
            height: 22px;
            width: 22px;
            margin-top: -11px;
            margin-left: -11px
        }

        .newsletter-block .newsletter-form:not(.submitting) .newsletter-form-spinner.sqs-spin.light.large {
            -webkit-animation: none;
            -moz-animation: none;
            -ms-animation: none;
            -o-animation: none;
            animation: none
        }

        .newsletter-block .newsletter-form.submitting .newsletter-form-spinner.sqs-spin.light.large {
            visibility: visible
        }

        .newsletter-block .newsletter-form.submitting .newsletter-form-button-label {
            visibility: hidden
        }

        .newsletter-block .newsletter-form-footnote {
            color: #272727
        }

        .newsletter-block .newsletter-form-footnote p {
            opacity: .8;
            margin: 17px 0;
            padding: 0;
            font-size: 12px !important;
            line-height: normal
        }

        .newsletter-block .newsletter-form-footnote p:last-child {
            margin-bottom: 0
        }

        .newsletter-block .newsletter-form-footnote a {
            text-decoration: underline
        }

        .newsletter-block .form-submission-text {
            color: #272727
        }

        .newsletter-block .form-submission-text p {
            margin: 17px 0;
            padding: 0;
            font-size: 15px;
            line-height: 1.6em
        }

        .newsletter-block .form-submission-text p:first-child {
            margin-top: 0
        }

        .newsletter-block .form-submission-text p:last-child {
            margin-bottom: 0
        }

        .newsletter-block .form-submission-text a {
            text-decoration: underline
        }

        .sqs-alternate-block-style-container .newsletter-block .newsletter-form-wrapper {
            padding: 0px;
            background: rgba(0, 0, 0, 0)
        }

        .sqs-alternate-block-style-container .newsletter-block .newsletter-form-wrapper.newsletter-form-wrapper--alignCenter.newsletter-form-wrapper {
            padding: 0px 0px
        }

        .sqs-alternate-block-style-container .newsletter-block .newsletter-form-wrapper .newsletter-form-header-title {
            color: #fff
        }

        .sqs-alternate-block-style-container .newsletter-block .newsletter-form-wrapper .newsletter-form-header-description, .sqs-alternate-block-style-container .newsletter-block .newsletter-form-wrapper .newsletter-form-footnote, .sqs-alternate-block-style-container .newsletter-block .newsletter-form-wrapper .form-submission-text {
            color: #fff
        }

        .sqs-alternate-block-style-container .newsletter-block .newsletter-form-wrapper .newsletter-form-field-element {
            border: 1px solid rgba(0, 0, 0, .12)
        }

        .sqs-alternate-block-style-container .newsletter-block .newsletter-form-wrapper .newsletter-form-button {
            color: #fff;
            background-color: #272727;
            border: 1px solid #272727 !important
        }

        .newsletter-style-dark .newsletter-block .newsletter-form-wrapper, .newsletter-style-dark .newsletter-block .newsletter-form-header-title, .newsletter-style-dark .newsletter-block .newsletter-form-header-description p, .newsletter-style-dark .newsletter-block .newsletter-form-footnote p, .newsletter-style-dark .newsletter-block .form-submission-text p {
            color: #272727
        }

        .newsletter-style-dark .newsletter-block .newsletter-form-header-title a, .newsletter-style-dark .newsletter-block .newsletter-form-header-description a, .newsletter-style-dark .newsletter-block .newsletter-form-footnote a, .newsletter-style-dark .newsletter-block .form-submission-text a {
            color: #272727
        }

        .newsletter-style-light .newsletter-block .newsletter-form-wrapper, .newsletter-style-light .newsletter-block .newsletter-form-header-title, .newsletter-style-light .newsletter-block .newsletter-form-header-description p, .newsletter-style-light .newsletter-block .newsletter-form-footnote p, .newsletter-style-light .newsletter-block .form-submission-text p {
            color: #fff
        }

        .newsletter-style-light .newsletter-block .newsletter-form-header-title a, .newsletter-style-light .newsletter-block .newsletter-form-header-description a, .newsletter-style-light .newsletter-block .newsletter-form-footnote a, .newsletter-style-light .newsletter-block .form-submission-text a {
            color: #fff
        }

        .newsletter-form-small-mode .newsletter-form-header {
            width: 100%
        }

        .newsletter-form-small-mode .newsletter-form-header-title {
            font-size: 27px !important;
            margin: 0 0 14px 0
        }

        .newsletter-form-small-mode .newsletter-form-header-description p {
            margin: 0 0 14px 0;
            line-height: normal
        }

        .newsletter-form-small-mode .newsletter-form-body {
            padding: 0 0 6px 0
        }

        .newsletter-form-small-mode .newsletter-form-fields-wrapper {
            display: block
        }

        .newsletter-form-small-mode .newsletter-form-name-fieldset {
            width: 100%
        }

        .newsletter-form-small-mode .newsletter-form-field-wrapper, .newsletter-form-small-mode .newsletter-form-button-wrapper {
            display: block;
            width: 100%;
            min-width: 0;
            padding: 5px 0
        }

        .newsletter-form-small-mode .newsletter-form-button-wrapper {
            margin: 6px 0 0 0
        }

        .newsletter-form-small-mode .newsletter-form-footnote p {
            margin: 14px 0
        }

        .newsletter-form-small-mode .newsletter-form-footnote p:last-child {
            margin-bottom: 0
        }

        .newsletter-form-small-mode .form-submission-text p {
            margin: 14px 0;
            line-height: normal
        }

        .newsletter-form-small-mode .form-submission-text p:first-child {
            margin-top: 0
        }

        .newsletter-form-small-mode .form-submission-text p:last-child {
            margin-bottom: 0
        }

        @media screen and (max-width: 320px) {
            .newsletter-block .newsletter-form-header {
                width: 100%
            }

            .newsletter-block .newsletter-form-header-title {
                font-size: 27px !important;
                margin: 0 0 14px 0
            }

            .newsletter-block .newsletter-form-header-description p {
                margin: 0 0 14px 0;
                line-height: normal
            }

            .newsletter-block .newsletter-form-body {
                padding: 0 0 6px 0
            }

            .newsletter-block .newsletter-form-fields-wrapper {
                display: block
            }

            .newsletter-block .newsletter-form-name-fieldset {
                width: 100%
            }

            .newsletter-block .newsletter-form-field-wrapper, .newsletter-block .newsletter-form-button-wrapper {
                display: block;
                width: 100%;
                min-width: 0;
                padding: 5px 0
            }

            .newsletter-block .newsletter-form-button-wrapper {
                margin: 6px 0 0 0
            }

            .newsletter-block .newsletter-form-footnote p {
                margin: 14px 0
            }

            .newsletter-block .newsletter-form-footnote p:last-child {
                margin-bottom: 0
            }

            .newsletter-block .form-submission-text p {
                margin: 14px 0;
                line-height: normal
            }

            .newsletter-block .form-submission-text p:first-child {
                margin-top: 0
            }

            .newsletter-block .form-submission-text p:last-child {
                margin-bottom: 0
            }
        }

        .newsletter-block.newsletter-form-has-small-container .newsletter-form-header {
            width: 100%
        }

        .newsletter-block.newsletter-form-has-small-container .newsletter-form-header-title {
            font-size: 27px !important;
            margin: 0 0 14px 0
        }

        .newsletter-block.newsletter-form-has-small-container .newsletter-form-header-description p {
            margin: 0 0 14px 0;
            line-height: normal
        }

        .newsletter-block.newsletter-form-has-small-container .newsletter-form-body {
            padding: 0 0 6px 0
        }

        .newsletter-block.newsletter-form-has-small-container .newsletter-form-fields-wrapper {
            display: block
        }

        .newsletter-block.newsletter-form-has-small-container .newsletter-form-name-fieldset {
            width: 100%
        }

        .newsletter-block.newsletter-form-has-small-container .newsletter-form-field-wrapper, .newsletter-block.newsletter-form-has-small-container .newsletter-form-button-wrapper {
            display: block;
            width: 100%;
            min-width: 0;
            padding: 5px 0
        }

        .newsletter-block.newsletter-form-has-small-container .newsletter-form-button-wrapper {
            margin: 6px 0 0 0
        }

        .newsletter-block.newsletter-form-has-small-container .newsletter-form-footnote p {
            margin: 14px 0
        }

        .newsletter-block.newsletter-form-has-small-container .newsletter-form-footnote p:last-child {
            margin-bottom: 0
        }

        .newsletter-block.newsletter-form-has-small-container .form-submission-text p {
            margin: 14px 0;
            line-height: normal
        }

        .newsletter-block.newsletter-form-has-small-container .form-submission-text p:first-child {
            margin-top: 0
        }

        .newsletter-block.newsletter-form-has-small-container .form-submission-text p:last-child {
            margin-bottom: 0
        }

        .small-button-block-font {
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 12px;
            font-weight: 600;
            font-style: normal;
            text-transform: uppercase;
            letter-spacing: 1px
        }

        .medium-button-block-font {
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 15px;
            font-weight: 600;
            font-style: normal;
            text-transform: uppercase;
            letter-spacing: 1px
        }

        .large-button-block-font {
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 20px;
            font-weight: 600;
            font-style: normal;
            text-transform: uppercase;
            letter-spacing: 1px
        }

        .sqs-block-button .sqs-block-button-container--left {
            text-align: left
        }

        .sqs-block-button .sqs-block-button-container--center {
            text-align: center
        }

        .sqs-block-button .sqs-block-button-container--right {
            text-align: right
        }

        .sqs-block-button .sqs-block-button-element {
            display: inline-block;
            width: auto;
            height: auto;
            padding: 1em 2.5em;
            color: #fff;
            background-color: #272727;
            border-width: 0;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 12px;
            line-height: 1em;
            font-weight: normal;
            font-style: normal;
            text-transform: uppercase;
            letter-spacing: 0px;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            outline: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            line-height: normal
        }

        .sqs-block-button .sqs-block-button-element:hover {
            opacity: 1
        }

        .sqs-block-button .sqs-block-button-element--small {
            padding: 13px 26px;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-family: "proxima-nova", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 600;
            font-style: normal;
            color: #fff;
            background-color: #328eb8;
            border-color: #328eb8
        }

        .sqs-alternate-block-style-container .sqs-block-button .sqs-block-button-element--small {
            color: #fff;
            background-color: #272727;
            border-color: #272727
        }

        .sqs-block-button .sqs-block-button-element--medium {
            padding: 21px 34px;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-weight: 600;
            text-transform: uppercase;
            font-family: "Helvetica Neue", "Arial", "sans-serif";
            font-size: 15px;
            text-transform: none;
            letter-spacing: 1px;
            font-weight: normal;
            font-style: normal;
            color: #fcf8f8;
            background-color: #ca2b2b;
            border-color: #ca2b2b
        }

        .sqs-alternate-block-style-container .sqs-block-button .sqs-block-button-element--medium {
            color: #fff;
            background-color: #272727;
            border-color: #272727
        }

        .sqs-block-button .sqs-block-button-element--large {
            padding: 25px 46px;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-family: "proxima-nova", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 600;
            font-style: normal;
            color: #fff;
            background-color: #ca2b2b;
            border-color: #ca2b2b
        }

        .sqs-alternate-block-style-container .sqs-block-button .sqs-block-button-element--large {
            color: #fff;
            background-color: #272727;
            border-color: #272727
        }

        .small-button-style-solid .sqs-block-button .sqs-block-button-element--small, .medium-button-style-solid .sqs-block-button .sqs-block-button-element--medium, .large-button-style-solid .sqs-block-button .sqs-block-button-element--large {
            -webkit-transition: .1s opacity linear;
            -moz-transition: .1s opacity linear;
            -o-transition: .1s opacity linear;
            transition: .1s opacity linear;
            -webkit-backface-visibility: hidden
        }

        .small-button-style-solid .sqs-block-button .sqs-block-button-element--small:hover, .medium-button-style-solid .sqs-block-button .sqs-block-button-element--medium:hover, .large-button-style-solid .sqs-block-button .sqs-block-button-element--large:hover {
            opacity: .8
        }

        .small-button-style-outline .sqs-block-button .sqs-block-button-element--small, .medium-button-style-outline .sqs-block-button .sqs-block-button-element--medium, .large-button-style-outline .sqs-block-button .sqs-block-button-element--large, .small-button-style-outline .sqs-alternate-block-style-container .sqs-block-button .sqs-block-button-element--small, .medium-button-style-outline .sqs-alternate-block-style-container .sqs-block-button .sqs-block-button-element--medium, .large-button-style-outline .sqs-alternate-block-style-container .sqs-block-button .sqs-block-button-element--large {
            border-width: 2px;
            border-style: solid;
            background-color: transparent;
            -webkit-transition: 0.1s background-color linear, 0.1s color linear;
            -moz-transition: 0.1s background-color linear, 0.1s color linear;
            -o-transition: 0.1s background-color linear, 0.1s color linear;
            transition: 0.1s background-color linear, 0.1s color linear
        }

        .small-button-style-outline .sqs-block-button .sqs-block-button-element--small:hover, .medium-button-style-outline .sqs-block-button .sqs-block-button-element--medium:hover, .large-button-style-outline .sqs-block-button .sqs-block-button-element--large:hover, .small-button-style-outline .sqs-alternate-block-style-container .sqs-block-button .sqs-block-button-element--small:hover, .medium-button-style-outline .sqs-alternate-block-style-container .sqs-block-button .sqs-block-button-element--medium:hover, .large-button-style-outline .sqs-alternate-block-style-container .sqs-block-button .sqs-block-button-element--large:hover {
            color: #fff
        }

        .small-button-style-outline .sqs-block-button .sqs-block-button-element--small {
            color: #328eb8
        }

        .small-button-style-outline .sqs-block-button .sqs-block-button-element--small:hover {
            background-color: #328eb8;
            color: #1d1d1d;
            color: #fff
        }

        .small-button-style-outline .sqs-alternate-block-style-container .sqs-block-button .sqs-block-button-element--small {
            color: #272727
        }

        .small-button-style-outline .sqs-alternate-block-style-container .sqs-block-button .sqs-block-button-element--small:hover {
            background-color: #272727;
            color: #fff
        }

        .medium-button-style-outline .sqs-block-button .sqs-block-button-element--medium {
            color: #ca2b2b
        }

        .medium-button-style-outline .sqs-block-button .sqs-block-button-element--medium:hover {
            background-color: #ca2b2b;
            color: #1d1d1d;
            color: #fff
        }

        .medium-button-style-outline .sqs-alternate-block-style-container .sqs-block-button .sqs-block-button-element--medium {
            color: #272727
        }

        .medium-button-style-outline .sqs-alternate-block-style-container .sqs-block-button .sqs-block-button-element--medium:hover {
            background-color: #272727;
            color: #fff
        }

        .large-button-style-outline .sqs-block-button .sqs-block-button-element--large {
            color: #ca2b2b
        }

        .large-button-style-outline .sqs-block-button .sqs-block-button-element--large:hover {
            background-color: #ca2b2b;
            color: #1d1d1d;
            color: #fff
        }

        .large-button-style-outline .sqs-alternate-block-style-container .sqs-block-button .sqs-block-button-element--large {
            color: #272727
        }

        .large-button-style-outline .sqs-alternate-block-style-container .sqs-block-button .sqs-block-button-element--large:hover {
            background-color: #272727;
            color: #fff
        }

        .small-button-style-raised .sqs-block-button .sqs-block-button-element--small, .medium-button-style-raised .sqs-block-button .sqs-block-button-element--medium, .large-button-style-raised .sqs-block-button .sqs-block-button-element--large {
            position: relative;
            -webkit-transition: .1s background-color linear;
            -moz-transition: .1s background-color linear;
            -o-transition: .1s background-color linear;
            transition: .1s background-color linear
        }

        .small-button-style-raised .sqs-block-button .sqs-block-button-element--small:active, .medium-button-style-raised .sqs-block-button .sqs-block-button-element--medium:active, .large-button-style-raised .sqs-block-button .sqs-block-button-element--large:active {
            top: 1px
        }

        .small-button-style-raised .sqs-block-button .sqs-block-button-element--small {
            -webkit-box-shadow: 0 2px 0 0 #297598;
            -moz-box-shadow: 0 2px 0 0 #297598;
            box-shadow: 0 2px 0 0 #297598
        }

        .small-button-style-raised .sqs-block-button .sqs-block-button-element--small:hover {
            background-color: #3597c4
        }

        .small-button-style-raised .sqs-block-button .sqs-block-button-element--small:active {
            -webkit-box-shadow: 0 1px 0 0 #297598;
            -moz-box-shadow: 0 1px 0 0 #297598;
            box-shadow: 0 1px 0 0 #297598
        }

        .small-button-style-raised .sqs-alternate-block-style-container .sqs-block-button .sqs-block-button-element--small {
            -webkit-box-shadow: 0 2px 0 0 #131313;
            -moz-box-shadow: 0 2px 0 0 #131313;
            box-shadow: 0 2px 0 0 #131313
        }

        .small-button-style-raised .sqs-alternate-block-style-container .sqs-block-button .sqs-block-button-element--small:hover {
            background-color: #2f2f2f
        }

        .small-button-style-raised .sqs-alternate-block-style-container .sqs-block-button .sqs-block-button-element--small:active {
            -webkit-box-shadow: 0 1px 0 0 #131313;
            -moz-box-shadow: 0 1px 0 0 #131313;
            box-shadow: 0 1px 0 0 #131313
        }

        .medium-button-style-raised .sqs-block-button .sqs-block-button-element--medium {
            -webkit-box-shadow: 0 2px 0 0 #a82424;
            -moz-box-shadow: 0 2px 0 0 #a82424;
            box-shadow: 0 2px 0 0 #a82424
        }

        .medium-button-style-raised .sqs-block-button .sqs-block-button-element--medium:hover {
            background-color: #d33131
        }

        .medium-button-style-raised .sqs-block-button .sqs-block-button-element--medium:active {
            -webkit-box-shadow: 0 1px 0 0 #a82424;
            -moz-box-shadow: 0 1px 0 0 #a82424;
            box-shadow: 0 1px 0 0 #a82424
        }

        .medium-button-style-raised .sqs-alternate-block-style-container .sqs-block-button .sqs-block-button-element--medium {
            -webkit-box-shadow: 0 2px 0 0 #131313;
            -moz-box-shadow: 0 2px 0 0 #131313;
            box-shadow: 0 2px 0 0 #131313
        }

        .medium-button-style-raised .sqs-alternate-block-style-container .sqs-block-button .sqs-block-button-element--medium:hover {
            background-color: #2f2f2f
        }

        .medium-button-style-raised .sqs-alternate-block-style-container .sqs-block-button .sqs-block-button-element--medium:active {
            -webkit-box-shadow: 0 1px 0 0 #131313;
            -moz-box-shadow: 0 1px 0 0 #131313;
            box-shadow: 0 1px 0 0 #131313
        }

        .large-button-style-raised .sqs-block-button .sqs-block-button-element--large {
            -webkit-box-shadow: 0 3px 0 0 #a82424;
            -moz-box-shadow: 0 3px 0 0 #a82424;
            box-shadow: 0 3px 0 0 #a82424
        }

        .large-button-style-raised .sqs-block-button .sqs-block-button-element--large:hover {
            background-color: #d33131
        }

        .large-button-style-raised .sqs-block-button .sqs-block-button-element--large:active {
            top: 2px;
            -webkit-box-shadow: 0 1px 0 0 #a82424;
            -moz-box-shadow: 0 1px 0 0 #a82424;
            box-shadow: 0 1px 0 0 #a82424
        }

        .large-button-style-raised .sqs-alternate-block-style-container .sqs-block-button .sqs-block-button-element--large {
            -webkit-box-shadow: 0 3px 0 0 #131313;
            -moz-box-shadow: 0 3px 0 0 #131313;
            box-shadow: 0 3px 0 0 #131313
        }

        .large-button-style-raised .sqs-alternate-block-style-container .sqs-block-button .sqs-block-button-element--large:hover {
            background-color: #2f2f2f
        }

        .large-button-style-raised .sqs-alternate-block-style-container .sqs-block-button .sqs-block-button-element--large:active {
            top: 2px;
            -webkit-box-shadow: 0 1px 0 0 #131313;
            -moz-box-shadow: 0 1px 0 0 #131313;
            box-shadow: 0 1px 0 0 #131313
        }

        .small-button-shape-rounded .sqs-block-button .sqs-block-button-element--small, .medium-button-shape-rounded .sqs-block-button .sqs-block-button-element--medium, .large-button-shape-rounded .sqs-block-button .sqs-block-button-element--large {
            border-radius: 3px
        }

        .small-button-shape-pill .sqs-block-button .sqs-block-button-element--small, .medium-button-shape-pill .sqs-block-button .sqs-block-button-element--medium, .large-button-shape-pill .sqs-block-button .sqs-block-button-element--large {
            border-radius: 300px
        }

        @media screen and (max-width: 640px) {
            .sqs-block-button .sqs-block-button-element--large {
                padding: 21px 34px;
                font-size: 15px
            }
        }

        .sqs-block-summary-v2 * {
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box
        }

        .sqs-block-summary-v2 .summary-heading {
            display: none;
            margin: 0 0 15px 0;
            padding-right: 10px;
            font-size: 14px;
            line-height: normal;
            text-transform: uppercase
        }

        .sqs-block-summary-v2 .summary-carousel-pager {
            display: none
        }

        .sqs-block-summary-v2 .summary-item-list {
            list-style-type: none;
            margin: 0;
            padding: 0
        }

        .sqs-block-summary-v2 .summary-item {
            visibility: hidden;
            overflow: hidden
        }

        .sqs-block-summary-v2 .summary-item.positioned {
            visibility: visible
        }

        .sqs-style-mode-active .sqs-block-summary-v2 .is-product-quick-view-enabled .summary-item:first-child .sqs-product-quick-view-button-wrapper {
            opacity: 1
        }

        .sqs-style-mode-active .sqs-block-summary-v2 .is-product-quick-view-enabled .summary-item:first-child .sqs-product-mark-wrapper {
            opacity: 0
        }

        .sqs-block-summary-v2 .summary-thumbnail-container {
            position: relative;
            display: block
        }

        .sqs-block-summary-v2 .summary-thumbnail-container:hover {
            opacity: 1 !important
        }

        .sqs-block-summary-v2 .img-wrapper, .sqs-block-summary-v2 .sqs-video-wrapper {
            position: relative;
            width: 100%;
            height: auto
        }

        .sqs-block-summary-v2 .img-wrapper img, .sqs-block-summary-v2 .sqs-video-wrapper img {
            opacity: 0;
            display: block;
            width: 100%;
            height: auto;
            font-size: 13px;
            line-height: normal;
            -webkit-transition: .6s opacity;
            -moz-transition: .6s opacity;
            -ms-transition: .6s opacity;
            -o-transition: .6s opacity;
            transition: .6s opacity
        }

        .sqs-block-summary-v2 .img-wrapper img.loaded, .sqs-block-summary-v2 .sqs-video-wrapper img.loaded {
            opacity: 1
        }

        .sqs-block-summary-v2 .img-wrapper img:not(.loaded) .sqs-product-mark-wrapper .sqs-product-quick-view-button-wrapper, .sqs-block-summary-v2 .sqs-video-wrapper img:not(.loaded) .sqs-product-mark-wrapper .sqs-product-quick-view-button-wrapper {
            opacity: 0 !important
        }

        .sqs-block-summary-v2 .summary-product-status .product-mark {
            position: absolute;
            top: 15px;
            right: 0;
            padding: 6px 8px;
            background: #222;
            color: #fff;
            font-size: 14px;
            line-height: 14px;
            text-transform: uppercase;
            -webkit-font-smoothing: antialiased;
            box-sizing: content-box;
            -webkit-box-sizing: content-box;
            -moz-box-sizing: content-box
        }

        .sqs-block-summary-v2 .summary-thumbnail-event-date {
            display: none;
            position: absolute;
            top: 10px;
            right: 10px;
            height: 50px;
            width: 50px;
            padding: 3px;
            background: #fff;
            text-align: center;
            box-sizing: content-box;
            -webkit-box-sizing: content-box;
            -moz-box-sizing: content-box
        }

        .sqs-block-summary-v2 .summary-thumbnail-event-date-inner {
            display: table-cell;
            vertical-align: middle
        }

        .sqs-block-summary-v2 .summary-thumbnail-event-date-month {
            display: block;
            color: #333;
            font-size: 14px;
            line-height: 14px;
            text-transform: uppercase
        }

        .sqs-block-summary-v2 .summary-thumbnail-event-date-day {
            display: block;
            color: #333;
            font-size: 26px;
            line-height: 26px
        }

        .sqs-block-summary-v2 .summary-content {
            text-align: left
        }

        .sqs-block-summary-v2 .summary-title {
            margin: 0 0 10px 0;
            font-size: 20px;
            line-height: 1.2em;
            text-align: left
        }

        .sqs-block-summary-v2 .summary-price {
            margin: 0 0 10px 0
        }

        .sqs-block-summary-v2 .summary-price .product-price {
            font-size: 14px;
            line-height: 20px;
            text-align: left
        }

        .sqs-block-summary-v2 .summary-price .product-price .original-price {
            opacity: .7;
            filter: alpha(opacity=70);
            text-decoration: line-through
        }

        .sqs-block-summary-v2 .summary-excerpt {
            margin: 0 0 10px 0
        }

        .sqs-block-summary-v2 .summary-excerpt p, .sqs-block-summary-v2 .summary-excerpt ul, .sqs-block-summary-v2 .summary-excerpt li {
            font-size: 14px;
            line-height: 1.4em;
            margin: 0 0 10px 0;
            text-align: left
        }

        .sqs-block-summary-v2 .summary-excerpt p:first-of-type, .sqs-block-summary-v2 .summary-excerpt ul:first-of-type, .sqs-block-summary-v2 .summary-excerpt li:first-of-type {
            margin-top: 0 !important
        }

        .sqs-block-summary-v2 .summary-excerpt p:last-of-type, .sqs-block-summary-v2 .summary-excerpt ul:last-of-type, .sqs-block-summary-v2 .summary-excerpt li:last-of-type {
            margin-bottom: 0 !important
        }

        .sqs-block-summary-v2 .summary-read-more-link {
            display: none;
            margin: 0 0 10px 0;
            font-size: 14px;
            line-height: 20px;
            text-align: left
        }

        .sqs-block-summary-v2 .summary-read-more-link:after {
            content: 'Read More \2192'
        }

        .sqs-block-summary-v2 .summary-metadata-container {
            display: none;
            font-size: 13px;
            line-height: normal
        }

        .sqs-block-summary-v2 .summary-block-setting-metadata-position-above-title .summary-metadata-container--above-title, .sqs-block-summary-v2 .summary-block-setting-metadata-position-below-title .summary-metadata-container--below-title, .sqs-block-summary-v2 .summary-block-setting-metadata-position-below-content .summary-metadata-container--below-content {
            display: block
        }

        .sqs-block-summary-v2 .summary-block-setting-metadata-position-above-title.summary-block-setting-primary-metadata-date .summary-metadata-container, .sqs-block-summary-v2 .summary-block-setting-metadata-position-below-title.summary-block-setting-primary-metadata-date .summary-metadata-container, .sqs-block-summary-v2 .summary-block-setting-metadata-position-above-title.summary-block-setting-secondary-metadata-date .summary-metadata-container, .sqs-block-summary-v2 .summary-block-setting-metadata-position-below-title.summary-block-setting-secondary-metadata-date .summary-metadata-container, .sqs-block-summary-v2 .summary-block-setting-metadata-position-above-title.summary-block-setting-primary-metadata-event-time .summary-metadata-container, .sqs-block-summary-v2 .summary-block-setting-metadata-position-below-title.summary-block-setting-primary-metadata-event-time .summary-metadata-container, .sqs-block-summary-v2 .summary-block-setting-metadata-position-above-title.summary-block-setting-secondary-metadata-event-time .summary-metadata-container, .sqs-block-summary-v2 .summary-block-setting-metadata-position-below-title.summary-block-setting-secondary-metadata-event-time .summary-metadata-container, .sqs-block-summary-v2 .summary-block-setting-metadata-position-above-title.summary-block-setting-primary-metadata-cats .summary-item-has-cats .summary-metadata-container, .sqs-block-summary-v2 .summary-block-setting-metadata-position-below-title.summary-block-setting-primary-metadata-cats .summary-item-has-cats .summary-metadata-container, .sqs-block-summary-v2 .summary-block-setting-metadata-position-above-title.summary-block-setting-secondary-metadata-cats .summary-item-has-cats .summary-metadata-container, .sqs-block-summary-v2 .summary-block-setting-metadata-position-below-title.summary-block-setting-secondary-metadata-cats .summary-item-has-cats .summary-metadata-container, .sqs-block-summary-v2 .summary-block-setting-metadata-position-above-title.summary-block-setting-primary-metadata-tags .summary-item-has-tags .summary-metadata-container, .sqs-block-summary-v2 .summary-block-setting-metadata-position-below-title.summary-block-setting-primary-metadata-tags .summary-item-has-tags .summary-metadata-container, .sqs-block-summary-v2 .summary-block-setting-metadata-position-above-title.summary-block-setting-secondary-metadata-tags .summary-item-has-tags .summary-metadata-container, .sqs-block-summary-v2 .summary-block-setting-metadata-position-below-title.summary-block-setting-secondary-metadata-tags .summary-item-has-tags .summary-metadata-container, .sqs-block-summary-v2 .summary-block-setting-metadata-position-above-title.summary-block-setting-primary-metadata-author .summary-item-has-author .summary-metadata-container, .sqs-block-summary-v2 .summary-block-setting-metadata-position-below-title.summary-block-setting-primary-metadata-author .summary-item-has-author .summary-metadata-container, .sqs-block-summary-v2 .summary-block-setting-metadata-position-above-title.summary-block-setting-secondary-metadata-author .summary-item-has-author .summary-metadata-container, .sqs-block-summary-v2 .summary-block-setting-metadata-position-below-title.summary-block-setting-secondary-metadata-author .summary-item-has-author .summary-metadata-container, .sqs-block-summary-v2 .summary-block-setting-metadata-position-above-title.summary-block-setting-primary-metadata-comments .summary-item-has-comments-enabled .summary-metadata-container, .sqs-block-summary-v2 .summary-block-setting-metadata-position-below-title.summary-block-setting-primary-metadata-comments .summary-item-has-comments-enabled .summary-metadata-container, .sqs-block-summary-v2 .summary-block-setting-metadata-position-above-title.summary-block-setting-secondary-metadata-comments .summary-item-has-comments-enabled .summary-metadata-container, .sqs-block-summary-v2 .summary-block-setting-metadata-position-below-title.summary-block-setting-secondary-metadata-comments .summary-item-has-comments-enabled .summary-metadata-container, .sqs-block-summary-v2 .summary-block-setting-metadata-position-above-title.summary-block-setting-primary-metadata-location .summary-item-has-location .summary-metadata-container, .sqs-block-summary-v2 .summary-block-setting-metadata-position-below-title.summary-block-setting-primary-metadata-location .summary-item-has-location .summary-metadata-container, .sqs-block-summary-v2 .summary-block-setting-metadata-position-above-title.summary-block-setting-secondary-metadata-location .summary-item-has-location .summary-metadata-container, .sqs-block-summary-v2 .summary-block-setting-metadata-position-below-title.summary-block-setting-secondary-metadata-location .summary-item-has-location .summary-metadata-container {
            margin: 0 0 10px 0
        }

        .sqs-block-summary-v2 .summary-metadata {
            display: none
        }

        .sqs-block-summary-v2 .summary-block-setting-primary-metadata-date .summary-metadata--primary, .sqs-block-summary-v2 .summary-block-setting-primary-metadata-event-time .summary-metadata--primary, .sqs-block-summary-v2 .summary-block-setting-primary-metadata-cats .summary-item-has-cats .summary-metadata--primary, .sqs-block-summary-v2 .summary-block-setting-primary-metadata-tags .summary-item-has-tags .summary-metadata--primary, .sqs-block-summary-v2 .summary-block-setting-primary-metadata-author .summary-item-has-author .summary-metadata--primary, .sqs-block-summary-v2 .summary-block-setting-primary-metadata-comments .summary-item-has-comments-enabled .summary-metadata--primary, .sqs-block-summary-v2 .summary-block-setting-primary-metadata-location .summary-item-has-location .summary-metadata--primary {
            display: inline-block
        }

        .sqs-block-summary-v2 .summary-block-setting-secondary-metadata-date .summary-metadata--secondary, .sqs-block-summary-v2 .summary-block-setting-secondary-metadata-event-time .summary-metadata--secondary, .sqs-block-summary-v2 .summary-block-setting-secondary-metadata-cats .summary-item-has-cats .summary-metadata--secondary, .sqs-block-summary-v2 .summary-block-setting-secondary-metadata-tags .summary-item-has-tags .summary-metadata--secondary, .sqs-block-summary-v2 .summary-block-setting-secondary-metadata-author .summary-item-has-author .summary-metadata--secondary, .sqs-block-summary-v2 .summary-block-setting-secondary-metadata-comments .summary-item-has-comments-enabled .summary-metadata--secondary, .sqs-block-summary-v2 .summary-block-setting-secondary-metadata-location .summary-item-has-location .summary-metadata--secondary {
            display: inline-block
        }

        .sqs-block-summary-v2 .summary-metadata-item {
            display: none;
            opacity: .7;
            margin: 0;
            font-size: 13px;
            line-height: 1.4em;
            text-transform: none
        }

        .sqs-block-summary-v2 .summary-metadata-item a, .sqs-block-summary-v2 .summary-metadata-item a:hover {
            opacity: 1;
            text-decoration: none
        }

        .sqs-block-summary-v2 .summary-block-setting-primary-metadata-date .summary-metadata--primary .summary-metadata-item--date, .sqs-block-summary-v2 .summary-block-setting-primary-metadata-event-time .summary-metadata--primary .summary-metadata-item--event-time, .sqs-block-summary-v2 .summary-block-setting-primary-metadata-cats .summary-item-has-cats .summary-metadata--primary .summary-metadata-item--cats, .sqs-block-summary-v2 .summary-block-setting-primary-metadata-tags .summary-item-has-tags .summary-metadata--primary .summary-metadata-item--tags, .sqs-block-summary-v2 .summary-block-setting-primary-metadata-author .summary-item-has-author .summary-metadata--primary .summary-metadata-item--author, .sqs-block-summary-v2 .summary-block-setting-primary-metadata-comments .summary-item-has-comments-enabled .summary-metadata--primary .summary-metadata-item--comments, .sqs-block-summary-v2 .summary-block-setting-primary-metadata-location .summary-item-has-location .summary-metadata--primary .summary-metadata-item--location {
            display: inline-block
        }

        .sqs-block-summary-v2 .summary-block-setting-secondary-metadata-date .summary-metadata--secondary .summary-metadata-item--date, .sqs-block-summary-v2 .summary-block-setting-secondary-metadata-event-time .summary-metadata--secondary .summary-metadata-item--event-time, .sqs-block-summary-v2 .summary-block-setting-secondary-metadata-cats .summary-item-has-cats .summary-metadata--secondary .summary-metadata-item--cats, .sqs-block-summary-v2 .summary-block-setting-secondary-metadata-tags .summary-item-has-tags .summary-metadata--secondary .summary-metadata-item--tags, .sqs-block-summary-v2 .summary-block-setting-secondary-metadata-author .summary-item-has-author .summary-metadata--secondary .summary-metadata-item--author, .sqs-block-summary-v2 .summary-block-setting-secondary-metadata-comments .summary-item-has-comments-enabled .summary-metadata--secondary .summary-metadata-item--comments, .sqs-block-summary-v2 .summary-block-setting-secondary-metadata-location .summary-item-has-location .summary-metadata--secondary .summary-metadata-item--location {
            display: inline-block
        }

        .sqs-block-summary-v2 .summary-block-setting-secondary-metadata-date .summary-metadata--primary .summary-metadata-item:after, .sqs-block-summary-v2 .summary-block-setting-secondary-metadata-event-time .summary-metadata--primary .summary-metadata-item:after, .sqs-block-summary-v2 .summary-block-setting-secondary-metadata-cats .summary-item-has-cats .summary-metadata--primary .summary-metadata-item:after, .sqs-block-summary-v2 .summary-block-setting-secondary-metadata-tags .summary-item-has-tags .summary-metadata--primary .summary-metadata-item:after, .sqs-block-summary-v2 .summary-block-setting-secondary-metadata-author .summary-item-has-author .summary-metadata--primary .summary-metadata-item:after, .sqs-block-summary-v2 .summary-block-setting-secondary-metadata-comments .summary-item-has-comments-enabled .summary-metadata--primary .summary-metadata-item:after, .sqs-block-summary-v2 .summary-block-setting-secondary-metadata-location .summary-item-has-location .summary-metadata--primary .summary-metadata-item:after {
            content: " ·";
            margin: 0 .3em
        }

        .sqs-block-summary-v2 .summary-block-setting-text-size-extralarge .summary-title {
            font-size: 54px
        }

        .sqs-block-summary-v2 .summary-block-setting-text-size-extralarge .summary-excerpt p {
            font-size: 16px
        }

        .sqs-block-summary-v2 .summary-block-setting-text-size-large .summary-title {
            font-size: 30px
        }

        .sqs-block-summary-v2 .summary-block-setting-text-size-medium .summary-title {
            font-size: 20px
        }

        .sqs-block-summary-v2 .summary-block-setting-text-size-small .summary-title {
            font-size: 14px
        }

        .sqs-block-summary-v2 .summary-block-setting-text-align-center .summary-title, .sqs-block-summary-v2 .summary-block-setting-text-align-center .summary-price .product-price, .sqs-block-summary-v2 .summary-block-setting-text-align-center .summary-excerpt p, .sqs-block-summary-v2 .summary-block-setting-text-align-center .summary-read-more-link, .sqs-block-summary-v2 .summary-block-setting-text-align-center .summary-content {
            text-align: center
        }

        .sqs-block-summary-v2 .summary-block-setting-text-align-right .summary-title, .sqs-block-summary-v2 .summary-block-setting-text-align-right .summary-price .product-price, .sqs-block-summary-v2 .summary-block-setting-text-align-right .summary-excerpt p, .sqs-block-summary-v2 .summary-block-setting-text-align-right .summary-read-more-link, .sqs-block-summary-v2 .summary-block-setting-text-align-right .summary-content {
            text-align: right
        }

        .sqs-block-summary-v2 .summary-item-record-type-text .summary-read-more-link {
            display: block
        }

        .sqs-block-summary-v2 .summary-item-record-type-event .summary-thumbnail-event-date {
            display: table
        }

        .sqs-block-summary-v2 .summary-thumbnail-container {
            margin: 0
        }

        .sqs-block-summary-v2 .summary-block-setting-show-title .summary-thumbnail-container, .sqs-block-summary-v2 .summary-block-setting-show-price .summary-item-record-type-store-item .summary-thumbnail-container, .sqs-block-summary-v2 .summary-block-setting-show-excerpt .summary-thumbnail-container, .sqs-block-summary-v2 .summary-block-wrapper:not(.summary-block-setting-primary-metadata-none) .summary-thumbnail-container, .sqs-block-summary-v2 .summary-block-wrapper:not(.summary-block-setting-secondary-metadata-none) .summary-thumbnail-container {
            margin: 0 0 15px 0
        }

        .sqs-block-summary-v2 .summary-block-wrapper:not(.summary-block-setting-show-excerpt) .summary-title, .sqs-block-summary-v2 .summary-block-wrapper:not(.summary-block-setting-show-excerpt) .summary-price {
            margin: 0 0 2px 0
        }

        .sqs-block-summary-v2 .summary-block-wrapper:not(.summary-block-setting-show-excerpt).summary-block-setting-metadata-position-above-title.summary-block-setting-primary-metadata-date .summary-metadata-container, .sqs-block-summary-v2 .summary-block-wrapper:not(.summary-block-setting-show-excerpt).summary-block-setting-metadata-position-below-title.summary-block-setting-primary-metadata-date .summary-metadata-container, .sqs-block-summary-v2 .summary-block-wrapper:not(.summary-block-setting-show-excerpt).summary-block-setting-metadata-position-above-title.summary-block-setting-secondary-metadata-date .summary-metadata-container, .sqs-block-summary-v2 .summary-block-wrapper:not(.summary-block-setting-show-excerpt).summary-block-setting-metadata-position-below-title.summary-block-setting-secondary-metadata-date .summary-metadata-container, .sqs-block-summary-v2 .summary-block-wrapper:not(.summary-block-setting-show-excerpt).summary-block-setting-metadata-position-above-title.summary-block-setting-primary-metadata-event-time .summary-metadata-container, .sqs-block-summary-v2 .summary-block-wrapper:not(.summary-block-setting-show-excerpt).summary-block-setting-metadata-position-below-title.summary-block-setting-primary-metadata-event-time .summary-metadata-container, .sqs-block-summary-v2 .summary-block-wrapper:not(.summary-block-setting-show-excerpt).summary-block-setting-metadata-position-above-title.summary-block-setting-secondary-metadata-event-time .summary-metadata-container, .sqs-block-summary-v2 .summary-block-wrapper:not(.summary-block-setting-show-excerpt).summary-block-setting-metadata-position-below-title.summary-block-setting-secondary-metadata-event-time .summary-metadata-container, .sqs-block-summary-v2 .summary-block-wrapper:not(.summary-block-setting-show-excerpt).summary-block-setting-metadata-position-above-title.summary-block-setting-primary-metadata-cats .summary-item-has-cats .summary-metadata-container, .sqs-block-summary-v2 .summary-block-wrapper:not(.summary-block-setting-show-excerpt).summary-block-setting-metadata-position-below-title.summary-block-setting-primary-metadata-cats .summary-item-has-cats .summary-metadata-container, .sqs-block-summary-v2 .summary-block-wrapper:not(.summary-block-setting-show-excerpt).summary-block-setting-metadata-position-above-title.summary-block-setting-secondary-metadata-cats .summary-item-has-cats .summary-metadata-container, .sqs-block-summary-v2 .summary-block-wrapper:not(.summary-block-setting-show-excerpt).summary-block-setting-metadata-position-below-title.summary-block-setting-secondary-metadata-cats .summary-item-has-cats .summary-metadata-container, .sqs-block-summary-v2 .summary-block-wrapper:not(.summary-block-setting-show-excerpt).summary-block-setting-metadata-position-above-title.summary-block-setting-primary-metadata-tags .summary-item-has-tags .summary-metadata-container, .sqs-block-summary-v2 .summary-block-wrapper:not(.summary-block-setting-show-excerpt).summary-block-setting-metadata-position-below-title.summary-block-setting-primary-metadata-tags .summary-item-has-tags .summary-metadata-container, .sqs-block-summary-v2 .summary-block-wrapper:not(.summary-block-setting-show-excerpt).summary-block-setting-metadata-position-above-title.summary-block-setting-secondary-metadata-tags .summary-item-has-tags .summary-metadata-container, .sqs-block-summary-v2 .summary-block-wrapper:not(.summary-block-setting-show-excerpt).summary-block-setting-metadata-position-below-title.summary-block-setting-secondary-metadata-tags .summary-item-has-tags .summary-metadata-container, .sqs-block-summary-v2 .summary-block-wrapper:not(.summary-block-setting-show-excerpt).summary-block-setting-metadata-position-above-title.summary-block-setting-primary-metadata-author .summary-item-has-author .summary-metadata-container, .sqs-block-summary-v2 .summary-block-wrapper:not(.summary-block-setting-show-excerpt).summary-block-setting-metadata-position-below-title.summary-block-setting-primary-metadata-author .summary-item-has-author .summary-metadata-container, .sqs-block-summary-v2 .summary-block-wrapper:not(.summary-block-setting-show-excerpt).summary-block-setting-metadata-position-above-title.summary-block-setting-secondary-metadata-author .summary-item-has-author .summary-metadata-container, .sqs-block-summary-v2 .summary-block-wrapper:not(.summary-block-setting-show-excerpt).summary-block-setting-metadata-position-below-title.summary-block-setting-secondary-metadata-author .summary-item-has-author .summary-metadata-container, .sqs-block-summary-v2 .summary-block-wrapper:not(.summary-block-setting-show-excerpt).summary-block-setting-metadata-position-above-title.summary-block-setting-primary-metadata-comments .summary-item-has-comments-enabled .summary-metadata-container, .sqs-block-summary-v2 .summary-block-wrapper:not(.summary-block-setting-show-excerpt).summary-block-setting-metadata-position-below-title.summary-block-setting-primary-metadata-comments .summary-item-has-comments-enabled .summary-metadata-container, .sqs-block-summary-v2 .summary-block-wrapper:not(.summary-block-setting-show-excerpt).summary-block-setting-metadata-position-above-title.summary-block-setting-secondary-metadata-comments .summary-item-has-comments-enabled .summary-metadata-container, .sqs-block-summary-v2 .summary-block-wrapper:not(.summary-block-setting-show-excerpt).summary-block-setting-metadata-position-below-title.summary-block-setting-secondary-metadata-comments .summary-item-has-comments-enabled .summary-metadata-container, .sqs-block-summary-v2 .summary-block-wrapper:not(.summary-block-setting-show-excerpt).summary-block-setting-metadata-position-above-title.summary-block-setting-primary-metadata-location .summary-item-has-location .summary-metadata-container, .sqs-block-summary-v2 .summary-block-wrapper:not(.summary-block-setting-show-excerpt).summary-block-setting-metadata-position-below-title.summary-block-setting-primary-metadata-location .summary-item-has-location .summary-metadata-container, .sqs-block-summary-v2 .summary-block-wrapper:not(.summary-block-setting-show-excerpt).summary-block-setting-metadata-position-above-title.summary-block-setting-secondary-metadata-location .summary-item-has-location .summary-metadata-container, .sqs-block-summary-v2 .summary-block-wrapper:not(.summary-block-setting-show-excerpt).summary-block-setting-metadata-position-below-title.summary-block-setting-secondary-metadata-location .summary-item-has-location .summary-metadata-container {
            margin: 0 0 2px 0
        }

        .sqs-block-summary-v2 .summary-block-setting-design-list .summary-item {
            visibility: visible !important;
            margin-bottom: 17px !important;
            padding-bottom: 17px !important
        }

        .sqs-block-summary-v2 .summary-block-setting-design-list .summary-item.summary-item-show-thumbnail {
            margin-bottom: 17px !important;
            padding-bottom: 17px !important
        }

        .sqs-block-summary-v2 .summary-block-setting-design-list .summary-thumbnail-container {
            margin: 0 !important
        }

        .sqs-block-summary-v2 .summary-block-setting-design-list.summary-block-setting-design-list-thumbnail-right .summary-thumbnail-container {
            float: right;
            padding: 0 0 0 20px
        }

        .sqs-block-summary-v2 .summary-block-setting-design-list.summary-block-setting-design-list-thumbnail-right .summary-item-record-type-store-item .product-mark {
            right: 0;
            left: auto
        }

        .sqs-block-summary-v2 .summary-block-setting-design-list .summary-item-record-type-store-item .product-mark {
            left: 0;
            right: auto
        }

        .sqs-block-summary-v2 .summary-block-setting-design-list .summary-item-record-type-event .summary-thumbnail-event-date {
            display: none
        }

        .sqs-block-summary-v2 .summary-block-setting-design-carousel .summary-carousel-pager {
            display: block
        }

        .sqs-block-summary-v2 .summary-block-setting-design-carousel .summary-block-header {
            overflow: hidden
        }

        .sqs-block-summary-v2 .summary-block-setting-design-carousel .summary-heading {
            display: block;
            float: left;
            width: calc(100% - 50px);
            width: -webkit-calc(100% - 50px);
            width: -moz-calc(100% - 50px)
        }

        .sqs-block-summary-v2 .summary-block-setting-design-carousel .summary-collection-title {
            display: none
        }

        .sqs-block-summary-v2 .summary-block-setting-design-carousel .summary-carousel-pager {
            float: right;
            width: 50px
        }

        .sqs-block-summary-v2 .summary-block-setting-design-carousel .summary-item:not(.positioned) {
            visibility: visible
        }

        @media only screen and (max-width: 700px) {
            .sqs-block-summary-v2 .summary-product-quick-view {
                display: none
            }
        }

        .sqs-block-archive .archive-group-list, .sqs-block-archive .archive-item-list {
            list-style-type: none;
            margin: 0;
            padding: 0
        }

        .sqs-block-archive .archive-group-count::before {
            content: "("
        }

        .sqs-block-archive .archive-group-count::after {
            content: ")"
        }

        .sqs-block-archive .archive-block-setting-layout-list.archive-block-setting-text-alignment-center, .sqs-block-archive .archive-block-setting-layout-index.archive-block-setting-text-alignment-center {
            text-align: center
        }

        .sqs-block-archive .archive-block-setting-layout-list.archive-block-setting-text-alignment-right, .sqs-block-archive .archive-block-setting-layout-index.archive-block-setting-text-alignment-right {
            text-align: right
        }

        .sqs-block-archive .archive-block-setting-layout-list.archive-block-setting-multicolumns .archive-group-list {
            columns: 140px;
            column-gap: 60px;
            -moz-columns: 140px;
            -moz-column-gap: 60px;
            -webkit-columns: 140px;
            -webkit-column-gap: 60px
        }

        .sqs-block-archive .archive-block-setting-layout-index .archive-group-name-link {
            font-size: 1.4em;
            line-height: 1.4em;
            text-decoration: none
        }

        .sqs-block-archive .archive-block-setting-layout-index .archive-item-list {
            display: block;
            margin: 1.4em 0 2.8em 0;
            font-size: 1em;
            line-height: 1.4em
        }

        .sqs-block-archive .archive-block-setting-layout-index .archive-item {
            margin: 0 0 .7em 0
        }

        .sqs-block-archive .archive-block-setting-layout-index .archive-item.archive-item--show-date {
            margin: 0 0 1.4em 0
        }

        .sqs-block-archive .archive-block-setting-layout-index .archive-item-date-before {
            display: none;
            opacity: .7;
            margin-right: 5px
        }

        .sqs-block-archive .archive-block-setting-layout-index .archive-item-link {
            display: block;
            margin-right: 5px;
            color: inherit !important
        }

        .sqs-block-archive .archive-block-setting-layout-index .archive-item-link--untitled::before {
            content: "Untitled"
        }

        .sqs-block-archive .archive-block-setting-layout-index .archive-item-date-after {
            display: block;
            opacity: .7
        }

        .sqs-block-archive .archive-block-setting-layout-index.archive-block-setting-multicolumns .archive-group-list {
            columns: 200px;
            column-gap: 60px;
            -moz-columns: 200px;
            -moz-column-gap: 60px;
            -webkit-columns: 200px;
            -webkit-column-gap: 60px
        }

        .sqs-block-archive .archive-block-setting-layout-index.archive-block-setting-multicolumns .archive-group {
            display: inline-block;
            column-break-inside: avoid;
            -moz-column-break-inside: avoid;
            -webkit-column-break-inside: avoid
        }

        .sqs-block-archive .archive-block-setting-layout-index.archive-block-setting-multicolumns .archive-group-name-link {
            display: block
        }

        .sqs-block-archive .archive-block-setting-layout-index.archive-block-setting-multicolumns .archive-group-name-list {
            display: inline-block
        }

        .sqs-block-archive .archive-block-setting-layout-index.archive-block-setting-multicolumns .archive-group-name-link, .sqs-block-archive .archive-block-setting-layout-index.archive-block-setting-multicolumns .archive-item-list {
            min-width: 225px
        }

        .sqs-block-archive .archive-block-setting-layout-dropdown.archive-block-wrapper {
            max-width: 300px;
            background: rgba(110, 110, 110, .05);
            border-radius: 1px
        }

        .sqs-block-archive .archive-block-setting-layout-dropdown .archive-dropdown-toggle-checkbox {
            position: absolute;
            left: -9999px
        }

        .sqs-block-archive .archive-block-setting-layout-dropdown .archive-dropdown-toggle-checkbox:checked ~ .archive-group-list {
            display: block
        }

        .sqs-block-archive .archive-block-setting-layout-dropdown .archive-dropdown-toggle-checkbox:checked ~ .archive-dropdown-toggle-label .archive-dropdown-toggle-icon:before {
            font-family: 'squarespace-ui-font';
            font-style: normal;
            speak: none;
            font-weight: normal;
            -webkit-font-smoothing: antialiased;
            content: "\e006";
            text-align: center;
            display: inline-block;
            vertical-align: middle
        }

        .sqs-block-archive .archive-block-setting-layout-dropdown .archive-dropdown-toggle-checkbox:checked ~ .archive-dropdown-toggle-label .archive-dropdown-toggle-icon:before {
            font-size: 16px;
            width: 16px;
            height: 16px;
            line-height: 16px
        }

        .sqs-block-archive .archive-block-setting-layout-dropdown .archive-dropdown-toggle-checkbox:checked ~ .archive-dropdown-toggle-label .archive-dropdown-toggle-icon:before {
            font-size: 1em;
            width: 1em;
            height: 1em;
            line-height: 1em
        }

        .sqs-block-archive .archive-block-setting-layout-dropdown .archive-dropdown-toggle-label {
            display: block;
            padding: 12px 18px;
            font-size: 1em;
            line-height: 1.6em;
            cursor: pointer;
            overflow: hidden;
            -moz-user-select: none;
            -webkit-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        .sqs-block-archive .archive-block-setting-layout-dropdown .archive-dropdown-toggle-title {
            float: left;
            width: 90%;
            padding-right: 5px;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
            box-sizing: border-box
        }

        .sqs-block-archive .archive-block-setting-layout-dropdown .archive-dropdown-toggle-icon {
            position: relative;
            bottom: 1px;
            float: right;
            width: 10%;
            text-align: right;
            box-sizing: border-box
        }

        .sqs-block-archive .archive-block-setting-layout-dropdown .archive-dropdown-toggle-icon:before {
            font-family: 'squarespace-ui-font';
            font-style: normal;
            speak: none;
            font-weight: normal;
            -webkit-font-smoothing: antialiased;
            content: "\e009";
            text-align: center;
            display: inline-block;
            vertical-align: middle
        }

        .sqs-block-archive .archive-block-setting-layout-dropdown .archive-dropdown-toggle-icon:before {
            font-size: 16px;
            width: 16px;
            height: 16px;
            line-height: 16px
        }

        .sqs-block-archive .archive-block-setting-layout-dropdown .archive-dropdown-toggle-icon:before {
            font-size: 1em;
            width: 1em;
            height: 1em;
            line-height: 1em
        }

        .sqs-block-archive .archive-block-setting-layout-dropdown .archive-group-list {
            display: none;
            padding: 0 18px 12px
        }

        .sqs-block-archive .archive-block-setting-layout-dropdown .archive-group-name-link {
            text-decoration: none
        }

        @media only screen and (max-width: 400px) {
            .sqs-block-archive .archive-block-setting-layout-dropdown.archive-block-wrapper {
                max-width: none
            }
        }

        .sqs-block-archive.sqs-edit-dialog-open .sqs-editing-overlay, .sqs-block-archive.sqs-edit-dialog-open .sqs-block-editor-button-container {
            z-index: 1
        }

        .sqs-block-archive.sqs-edit-dialog-open .sqs-block-archive-content {
            position: relative;
            z-index: 1000
        }

        .sqs-block-archive.sqs-edit-dialog-open .archive-group-list {
            pointer-events: none
        }

        .sqs-block-spacer .sqs-block-content {
            visibility: hidden
        }

        .sqs-layout .html-block.sqs-block img {
            max-width: 100%;
            height: auto
        }

        .sqs-layout .html-block.sqs-block img[align=left] {
            margin-right: 34px
        }

        .sqs-layout .html-block.sqs-block img[align=right] {
            margin-left: 34px
        }

        .sqs-layout .html-block.sqs-block img[align=top] {
            vertical-align: top
        }

        .sqs-layout .html-block.sqs-block img[align=middle] {
            vertical-align: middle
        }

        .sqs-layout .html-block.sqs-block img[align=bottom] {
            vertical-align: bottom
        }

        .sqs-layout .html-block.sqs-block .full-image-float-left, .sqs-layout .html-block.sqs-block .thumbnail-image-float-left {
            float: left;
            margin-right: 34px
        }

        .sqs-layout .html-block.sqs-block .full-image-float-right, .sqs-layout .html-block.sqs-block .thumbnail-image-float-right {
            float: right;
            margin-left: 34px
        }

        .sqs-layout .html-block.sqs-block .full-image-block {
            display: block;
            margin-bottom: 34px
        }

        .sqs-layout .html-block.sqs-block div[data-src="v5"] img {
            max-width: 100%
        }

        .sqs-layout .html-block.sqs-block .thumbnail-caption {
            display: block
        }

        .sqs-layout .html-block.sqs-block .entry-content img {
            margin: 0 0 34px 0
        }

        .sqs-layout .html-block.sqs-block .alignleft, .sqs-layout .html-block.sqs-block img.alignleft {
            margin-right: 34px;
            display: inline;
            float: left;
            width: auto
        }

        .sqs-layout .html-block.sqs-block .alignright, .sqs-layout .html-block.sqs-block img.alignright {
            margin-left: 34px;
            display: inline;
            float: right;
            width: auto
        }

        .sqs-layout .html-block.sqs-block .aligncenter, .sqs-layout .html-block.sqs-block img.aligncenter {
            margin-right: auto;
            margin-left: auto;
            display: block;
            clear: both;
            width: auto
        }

        .sqs-layout .html-block.sqs-block blockquote.left {
            margin-right: 34px;
            text-align: right;
            margin-left: 0;
            width: 33%;
            float: left
        }

        .sqs-layout .html-block.sqs-block blockquote.right {
            margin-left: 34px;
            text-align: left;
            margin-right: 0;
            width: 33%;
            float: right
        }

        .system-button-font {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            font-weight: 600;
            font-style: normal;
            text-transform: uppercase;
            letter-spacing: 1px
        }

        body:not(.button-style-default) .sqs-editable-button, body:not(.button-style-default) .sqs-editable-button-layout {
            display: inline-block;
            width: auto;
            height: auto;
            padding: 1em 2.5em;
            border-width: 0;
            text-align: center;
            cursor: pointer;
            outline: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none
        }

        body:not(.button-style-default) .sqs-editable-button:hover, body:not(.button-style-default) .sqs-editable-button-layout:hover {
            opacity: 1
        }

        body:not(.button-style-default) .sqs-editable-button, body:not(.button-style-default) .sqs-editable-button-color {
            color: #fff;
            background-color: #1a1a1a;
            border-color: #1a1a1a
        }

        body:not(.button-style-default) .sqs-alternate-block-style-container .sqs-editable-button, body:not(.button-style-default) .sqs-alternate-block-style-container .sqs-editable-button-color {
            color: #fff;
            background-color: #272727;
            border-color: #272727
        }

        body:not(.button-style-default) .sqs-editable-button, body:not(.button-style-default) .sqs-editable-button-font {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            font-weight: 600;
            letter-spacing: 1px;
            font-family: "proxima-nova";
            text-transform: uppercase;
            letter-spacing: 3px;
            font-weight: 300;
            font-style: normal
        }

        body:not(.button-style-default).button-style-solid .sqs-editable-button, body:not(.button-style-default).button-style-solid .sqs-editable-button-style {
            -webkit-transition: .1s opacity linear;
            -moz-transition: .1s opacity linear;
            -o-transition: .1s opacity linear;
            transition: .1s opacity linear;
            -webkit-backface-visibility: hidden
        }

        body:not(.button-style-default).button-style-solid .sqs-editable-button:hover, body:not(.button-style-default).button-style-solid .sqs-editable-button-style:hover {
            opacity: .8
        }

        body:not(.button-style-default).button-style-outline .sqs-editable-button, body:not(.button-style-default).button-style-outline .sqs-editable-button-style {
            border-width: 2px;
            border-style: solid;
            -webkit-transition: 0.1s background-color linear, 0.1s color linear;
            -moz-transition: 0.1s background-color linear, 0.1s color linear;
            -o-transition: 0.1s background-color linear, 0.1s color linear;
            transition: 0.1s background-color linear, 0.1s color linear
        }

        body:not(.button-style-default).button-style-outline .sqs-editable-button, body:not(.button-style-default).button-style-outline .sqs-editable-button-color {
            background-color: transparent;
            color: #1a1a1a
        }

        body:not(.button-style-default).button-style-outline .sqs-editable-button:hover, body:not(.button-style-default).button-style-outline .sqs-editable-button-color:hover {
            background-color: #1a1a1a;
            color: #fff
        }

        body:not(.button-style-default).button-style-outline .sqs-alternate-block-style-container .sqs-editable-button, body:not(.button-style-default).button-style-outline .sqs-alternate-block-style-container .sqs-editable-button-color {
            color: #272727
        }

        body:not(.button-style-default).button-style-outline .sqs-alternate-block-style-container .sqs-editable-button:hover, body:not(.button-style-default).button-style-outline .sqs-alternate-block-style-container .sqs-editable-button-color:hover {
            background-color: #272727;
            color: #fff
        }

        body:not(.button-style-default).button-style-raised .sqs-editable-button, body:not(.button-style-default).button-style-raised .sqs-editable-button-style {
            position: relative;
            -webkit-transition: .1s background-color linear;
            -moz-transition: .1s background-color linear;
            -o-transition: .1s background-color linear;
            transition: .1s background-color linear
        }

        body:not(.button-style-default).button-style-raised .sqs-editable-button:active, body:not(.button-style-default).button-style-raised .sqs-editable-button-style:active {
            top: 1px
        }

        body:not(.button-style-default).button-style-raised .sqs-editable-button, body:not(.button-style-default).button-style-raised .sqs-editable-button-color {
            -webkit-box-shadow: 0 2px 0 0 #060606;
            -moz-box-shadow: 0 2px 0 0 #060606;
            box-shadow: 0 2px 0 0 #060606
        }

        body:not(.button-style-default).button-style-raised .sqs-editable-button:hover, body:not(.button-style-default).button-style-raised .sqs-editable-button-color:hover {
            background-color: #222
        }

        body:not(.button-style-default).button-style-raised .sqs-editable-button:active, body:not(.button-style-default).button-style-raised .sqs-editable-button-color:active {
            -webkit-box-shadow: 0 1px 0 0 #060606;
            -moz-box-shadow: 0 1px 0 0 #060606;
            box-shadow: 0 1px 0 0 #060606
        }

        body:not(.button-style-default).button-style-raised .sqs-alternate-block-style-container .sqs-editable-button, body:not(.button-style-default).button-style-raised .sqs-alternate-block-style-container .sqs-editable-button-color {
            -webkit-box-shadow: 0 2px 0 0 #131313;
            -moz-box-shadow: 0 2px 0 0 #131313;
            box-shadow: 0 2px 0 0 #131313
        }

        body:not(.button-style-default).button-style-raised .sqs-alternate-block-style-container .sqs-editable-button:hover, body:not(.button-style-default).button-style-raised .sqs-alternate-block-style-container .sqs-editable-button-color:hover {
            background-color: #2f2f2f
        }

        body:not(.button-style-default).button-style-raised .sqs-alternate-block-style-container .sqs-editable-button:active, body:not(.button-style-default).button-style-raised .sqs-alternate-block-style-container .sqs-editable-button-color:active {
            -webkit-box-shadow: 0 1px 0 0 #131313;
            -moz-box-shadow: 0 1px 0 0 #131313;
            box-shadow: 0 1px 0 0 #131313
        }

        body:not(.button-style-default).button-corner-style-square .sqs-editable-button, body:not(.button-style-default).button-corner-style-square .sqs-editable-button-shape {
            border-radius: 0
        }

        body:not(.button-style-default).button-corner-style-rounded .sqs-editable-button, body:not(.button-style-default).button-corner-style-rounded .sqs-editable-button-shape {
            border-radius: 3px
        }

        body:not(.button-style-default).button-corner-style-pill .sqs-editable-button, body:not(.button-style-default).button-corner-style-pill .sqs-editable-button-shape {
            border-radius: 300px
        }

        body:not(.button-style-default).button-style-outline .newsletter-block .newsletter-form-button {
            border-width: 1px;
            -webkit-box-shadow: inset 0px 0px 0px 1px #4d4d4d;
            -moz-box-shadow: inset 0px 0px 0px 1px #4d4d4d;
            box-shadow: inset 0px 0px 0px 1px #4d4d4d;
            background: transparent;
            color: #4d4d4d
        }

        body:not(.button-style-default).button-style-outline .newsletter-block .newsletter-form-button:hover {
            background-color: #4d4d4d;
            color: #fff
        }

        body:not(.button-style-default).button-style-outline .sqs-alternate-block-style-container .newsletter-block .newsletter-form-button {
            -webkit-box-shadow: inset 0px 0px 0px 1px #272727;
            -moz-box-shadow: inset 0px 0px 0px 1px #272727;
            box-shadow: inset 0px 0px 0px 1px #272727;
            color: #272727
        }

        body:not(.button-style-default).button-style-outline .sqs-alternate-block-style-container .newsletter-block .newsletter-form-button:hover {
            background-color: #272727;
            color: #fff
        }

        body:not(.button-style-default).button-style-raised .newsletter-block .newsletter-form-button {
            border-width: 0 !important;
            top: -1px;
            -webkit-box-shadow: 0 2px 0 0 #393939;
            -moz-box-shadow: 0 2px 0 0 #393939;
            box-shadow: 0 2px 0 0 #393939
        }

        body:not(.button-style-default).button-style-raised .newsletter-block .newsletter-form-button:hover {
            background-color: #555
        }

        body:not(.button-style-default).button-style-raised .newsletter-block .newsletter-form-button:active {
            top: 0px;
            -webkit-box-shadow: 0 1px 0 0 #393939;
            -moz-box-shadow: 0 1px 0 0 #393939;
            box-shadow: 0 1px 0 0 #393939
        }

        body:not(.button-style-default).button-style-raised .sqs-alternate-block-style-container .newsletter-block .newsletter-form-button {
            -webkit-box-shadow: 0 2px 0 0 #131313;
            -moz-box-shadow: 0 2px 0 0 #131313;
            box-shadow: 0 2px 0 0 #131313
        }

        body:not(.button-style-default).button-style-raised .sqs-alternate-block-style-container .newsletter-block .newsletter-form-button:hover {
            background-color: #2f2f2f
        }

        body:not(.button-style-default).button-style-raised .sqs-alternate-block-style-container .newsletter-block .newsletter-form-button:active {
            -webkit-box-shadow: 0 1px 0 0 #131313;
            -moz-box-shadow: 0 1px 0 0 #131313;
            box-shadow: 0 1px 0 0 #131313
        }

        body:not(.button-style-default) .opentable-block .OT_Find_a_Table {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            font-weight: 600;
            letter-spacing: 1px;
            font-family: "proxima-nova";
            text-transform: uppercase;
            letter-spacing: 3px;
            font-weight: 300;
            font-style: normal
        }

        body:not(.button-style-default).button-corner-style-rounded .opentable-block .OT_Find_a_Table {
            border-radius: 3px
        }

        body:not(.button-style-default).button-corner-style-pill .opentable-block .OT_Find_a_Table {
            border-radius: 300px
        }

        .announcement-bar-font {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            font-size: 13px;
            font-weight: 300;
            font-style: normal;
            letter-spacing: 1px;
            text-transform: none
        }

        .sqs-announcement-bar {
            overflow: hidden;
            position: relative;
            top: 0;
            left: 0;
            z-index: 10000;
            background: #222;
            text-align: center;
            -webkit-transition: height .3s cubic-bezier(.23, 1, .32, 1);
            -moz-transition: height .3s cubic-bezier(.23, 1, .32, 1);
            -ms-transition: height .3s cubic-bezier(.23, 1, .32, 1);
            -o-transition: height .3s cubic-bezier(.23, 1, .32, 1);
            transition: height .3s cubic-bezier(.23, 1, .32, 1)
        }

        .sqs-announcement-bar-url {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%
        }

        .sqs-announcement-bar-text {
            padding: .8em 3em;
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            font-family: 'proxima-nova', arial, sans-serif;
            font-size: 13px;
            text-transform: none;
            letter-spacing: 1px;
            font-weight: 300;
            font-style: normal;
            line-height: 1.2em
        }

        .sqs-announcement-bar-text p {
            color: #fff;
            margin: 0;
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            font-family: 'proxima-nova', arial, sans-serif;
            font-size: 13px;
            text-transform: none;
            letter-spacing: 1px;
            font-weight: 300;
            font-style: normal;
            line-height: inherit
        }

        .sqs-announcement-bar-text a {
            position: relative;
            color: #fff !important;
            text-decoration: underline !important
        }

        .sqs-announcement-bar-close {
            cursor: pointer;
            position: absolute;
            top: 0;
            right: 0;
            width: 2.8em;
            height: 2.78em;
            background: rgba(0, 0, 0, .15);
            color: #fff
        }

        .sqs-announcement-bar-close:after {
            content: '×';
            display: block;
            font-family: helvetica, arial, sans-serif;
            font-size: 1em;
            font-weight: 100;
            line-height: 2.7em;
            letter-spacing: normal;
            padding: 0
        }

        .sqs-announcement-bar-hidden {
            height: 0 !important
        }

        @media screen and (max-width: 1024px) {
            .sqs-announcement-bar-text, .sqs-announcement-bar-text p {
                font-size: 13px
            }
        }

        @font-face {
            font-family: 'social-icon-font';
            src: url('//static.squarespace.com/universal/fonts/social-20141119/social-icon-font.eot');
            src: url('//static.squarespace.com/universal/fonts/social-20141119/social-icon-font.eot?#iefix') format('embedded-opentype'), url('//static.squarespace.com/universal/fonts/social-20141119/social-icon-font.woff') format('woff'), url('//static.squarespace.com/universal/fonts/social-20141119/social-icon-font.ttf') format('truetype'), url('//static.squarespace.com/universal/fonts/social-20141119/social-icon-font.svg#social-icon-font') format('svg');
            font-weight: normal;
            font-style: normal
        }

        .social-smugmug:before, .social-dribbble:before, .social-youtube:before, .social-vimeo:before, .social-twitter:before, .social-tumblr:before, .social-pinterest:before, .social-linkedin:before, .social-instagram:before, .social-google:before, .social-foursquare:before, .social-flickr:before, .social-facebook:before, .social-fivehundredpix:before, .social-fivehundredpx:before, .social-email:before, .social-github:before, .social-rss:before, .social-spotify:before, .social-soundcloud:before, .social-itunes:before, .social-googleplay:before, .social-dropbox:before, .social-bandsintown:before, .social-behance:before, .social-codepen:before, .social-medium:before, .social-rdio:before, .social-squarespace:before, .social-vine:before, .social-yelp:before, .social-vevo:before, .social-meetup:before, .social-twitch:before, .social-vsco:before, .social-smugmug-square:before, .social-dribbble-square:before, .social-youtube-square:before, .social-vimeo-square:before, .social-twitter-square:before, .social-tumblr-square:before, .social-pinterest-square:before, .social-linkedin-square:before, .social-instagram-square:before, .social-google-square:before, .social-foursquare-square:before, .social-flickr-square:before, .social-facebook-square:before, .social-fivehundredpix-square:before, .social-fivehundredpx-square:before, .social-email-square:before, .social-github-square:before, .social-rss-square:before, .social-spotify-square:before, .social-soundcloud-square:before, .social-itunes-square:before, .social-googleplay-square:before, .social-dropbox-square:before, .social-bandsintown-square:before, .social-behance-square:before, .social-codepen-square:before, .social-medium-square:before, .social-rdio-square:before, .social-squarespace-square:before, .social-vine-square:before, .social-yelp-square:before, .social-vevo-square:before, .social-meetup-square:before, .social-twitch-square:before, .social-vsco-square:before, .social-smugmug-round:before, .social-dribbble-round:before, .social-youtube-round:before, .social-vimeo-round:before, .social-twitter-round:before, .social-tumblr-round:before, .social-pinterest-round:before, .social-linkedin-round:before, .social-instagram-round:before, .social-google-round:before, .social-foursquare-round:before, .social-flickr-round:before, .social-facebook-round:before, .social-fivehundredpix-round:before, .social-fivehundredpx-round:before, .social-email-round:before, .social-github-round:before, .social-rss-round:before, .social-spotify-round:before, .social-soundcloud-round:before, .social-itunes-round:before, .social-googleplay-round:before, .social-dropbox-round:before, .social-bandsintown-round:before, .social-behance-round:before, .social-codepen-round:before, .social-medium-round:before, .social-rdio-round:before, .social-squarespace-round:before, .social-vine-round:before, .social-yelp-round:before, .social-vevo-round:before, .social-meetup-round:before, .social-twitch-round:before, .social-vsco-round:before {
            font-family: 'social-icon-font';
            speak: none;
            font-style: normal;
            font-weight: normal;
            line-height: 1;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .social-smugmug:before {
            content: "\e600"
        }

        .social-icon-style-square .social-smugmug:before {
            content: "\e601"
        }

        .social-icon-style-round .social-smugmug:before {
            content: "\e602"
        }

        .social-dribbble:before {
            content: "\e603"
        }

        .social-icon-style-square .social-dribbble:before {
            content: "\e604"
        }

        .social-icon-style-round .social-dribbble:before {
            content: "\e605"
        }

        .social-youtube:before {
            content: "\e606"
        }

        .social-icon-style-square .social-youtube:before {
            content: "\e607"
        }

        .social-icon-style-round .social-youtube:before {
            content: "\e608"
        }

        .social-vimeo:before {
            content: "\e609"
        }

        .social-icon-style-square .social-vimeo:before {
            content: "\e60a"
        }

        .social-icon-style-round .social-vimeo:before {
            content: "\e60b"
        }

        .social-twitter:before {
            content: "\e60c"
        }

        .social-icon-style-square .social-twitter:before {
            content: "\e60d"
        }

        .social-icon-style-round .social-twitter:before {
            content: "\e60e"
        }

        .social-tumblr:before {
            content: "\e60f"
        }

        .social-icon-style-square .social-tumblr:before {
            content: "\e610"
        }

        .social-icon-style-round .social-tumblr:before {
            content: "\e611"
        }

        .social-pinterest:before {
            content: "\e612"
        }

        .social-icon-style-square .social-pinterest:before {
            content: "\e613"
        }

        .social-icon-style-round .social-pinterest:before {
            content: "\e614"
        }

        .social-linkedin:before {
            content: "\e615"
        }

        .social-icon-style-square .social-linkedin:before {
            content: "\e616"
        }

        .social-icon-style-round .social-linkedin:before {
            content: "\e617"
        }

        .social-instagram:before {
            content: "\e618"
        }

        .social-icon-style-square .social-instagram:before {
            content: "\e619"
        }

        .social-icon-style-round .social-instagram:before {
            content: "\e61a"
        }

        .social-google:before {
            content: "\e61b"
        }

        .social-icon-style-square .social-google:before {
            content: "\e61c"
        }

        .social-icon-style-round .social-google:before {
            content: "\e61d"
        }

        .social-googleauth2:before {
            content: "\e61b"
        }

        .social-foursquare:before {
            content: "\e61e"
        }

        .social-icon-style-square .social-foursquare:before {
            content: "\e61f"
        }

        .social-icon-style-round .social-foursquare:before {
            content: "\e620"
        }

        .social-flickr:before {
            content: "\e621"
        }

        .social-icon-style-square .social-flickr:before {
            content: "\e622"
        }

        .social-icon-style-round .social-flickr:before {
            content: "\e623"
        }

        .social-facebook:before {
            content: "\e624"
        }

        .social-icon-style-square .social-facebook:before {
            content: "\e625"
        }

        .social-icon-style-round .social-facebook:before {
            content: "\e626"
        }

        .social-fivehundredpix:before {
            content: "\e627"
        }

        .social-icon-style-square .social-fivehundredpix:before {
            content: "\e628"
        }

        .social-icon-style-round .social-fivehundredpix:before {
            content: "\e629"
        }

        .social-fivehundredpx:before {
            content: "\e627"
        }

        .social-icon-style-square .social-fivehundredpx:before {
            content: "\e628"
        }

        .social-icon-style-round .social-fivehundredpx:before {
            content: "\e629"
        }

        .social-email:before {
            content: "\e62a"
        }

        .social-icon-style-square .social-email:before {
            content: "\e62b"
        }

        .social-icon-style-round .social-email:before {
            content: "\e62c"
        }

        .social-github:before {
            content: "\e62d"
        }

        .social-icon-style-square .social-github:before {
            content: "\e62e"
        }

        .social-icon-style-round .social-github:before {
            content: "\e62f"
        }

        .social-rss:before {
            content: "\e630"
        }

        .social-icon-style-square .social-rss:before {
            content: "\e631"
        }

        .social-icon-style-round .social-rss:before {
            content: "\e632"
        }

        .social-spotify:before {
            content: "\e633"
        }

        .social-icon-style-square .social-spotify:before {
            content: "\e634"
        }

        .social-icon-style-round .social-spotify:before {
            content: "\e635"
        }

        .social-soundcloud:before {
            content: "\e636"
        }

        .social-icon-style-square .social-soundcloud:before {
            content: "\e637"
        }

        .social-icon-style-round .social-soundcloud:before {
            content: "\e638"
        }

        .social-itunes:before {
            content: "\e639"
        }

        .social-icon-style-square .social-itunes:before {
            content: "\e63a"
        }

        .social-icon-style-round .social-itunes:before {
            content: "\e63b"
        }

        .social-googleplay:before {
            content: "\e63c"
        }

        .social-icon-style-square .social-googleplay:before {
            content: "\e63d"
        }

        .social-icon-style-round .social-googleplay:before {
            content: "\e63e"
        }

        .social-dropbox:before {
            content: "\e63f"
        }

        .social-icon-style-square .social-dropbox:before {
            content: "\e640"
        }

        .social-icon-style-round .social-dropbox:before {
            content: "\e641"
        }

        .social-bandsintown:before {
            content: "\e642"
        }

        .social-icon-style-square .social-bandsintown:before {
            content: "\e643"
        }

        .social-icon-style-round .social-bandsintown:before {
            content: "\e644"
        }

        .social-behance:before {
            content: "\e645"
        }

        .social-icon-style-square .social-behance:before {
            content: "\e646"
        }

        .social-icon-style-round .social-behance:before {
            content: "\e647"
        }

        .social-codepen:before {
            content: "\e648"
        }

        .social-icon-style-square .social-codepen:before {
            content: "\e649"
        }

        .social-icon-style-round .social-codepen:before {
            content: "\e64a"
        }

        .social-medium:before {
            content: "\e64b"
        }

        .social-icon-style-square .social-medium:before {
            content: "\e64c"
        }

        .social-icon-style-round .social-medium:before {
            content: "\e64d"
        }

        .social-rdio:before {
            content: "\e64e"
        }

        .social-icon-style-square .social-rdio:before {
            content: "\e64f"
        }

        .social-icon-style-round .social-rdio:before {
            content: "\e650"
        }

        .social-squarespace:before {
            content: "\e651"
        }

        .social-icon-style-square .social-squarespace:before {
            content: "\e652"
        }

        .social-icon-style-round .social-squarespace:before {
            content: "\e653"
        }

        .social-vine:before {
            content: "\e654"
        }

        .social-icon-style-square .social-vine:before {
            content: "\e655"
        }

        .social-icon-style-round .social-vine:before {
            content: "\e656"
        }

        .social-yelp:before {
            content: "\e657"
        }

        .social-icon-style-square .social-yelp:before {
            content: "\e658"
        }

        .social-icon-style-round .social-yelp:before {
            content: "\e659"
        }

        .social-meetup:before {
            content: "\e65a"
        }

        .social-icon-style-square .social-meetup:before {
            content: "\e65b"
        }

        .social-icon-style-round .social-meetup:before {
            content: "\e65c"
        }

        .social-vevo:before {
            content: "\e65d"
        }

        .social-icon-style-square .social-vevo:before {
            content: "\e65e"
        }

        .social-icon-style-round .social-vevo:before {
            content: "\e65f"
        }

        .social-twitch:before {
            content: "\e660"
        }

        .social-icon-style-square .social-twitch:before {
            content: "\e661"
        }

        .social-icon-style-round .social-twitch:before {
            content: "\e662"
        }

        .social-vsco:before {
            content: "\e663"
        }

        .social-icon-style-square .social-vsco:before {
            content: "\e664"
        }

        .social-icon-style-round .social-vsco:before {
            content: "\e665"
        }

        .tweak-product-quick-view-button-font {
            font-family: Helvetica, Arial, sans-serif;
            font-weight: normal;
            font-style: normal;
            font-size: 12px;
            letter-spacing: 1px;
            text-transform: uppercase
        }

        .sqs-product-quick-view-button-wrapper {
            opacity: 0;
            display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            position: absolute;
            top: 0;
            bottom: 0;
            right: 0;
            left: 0;
            width: 100%;
            height: 100%;
            font-family: Helvetica, Arial, sans-serif;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: normal;
            font-style: normal;
            text-align: center;
            z-index: 5;
            -webkit-transition: opacity .3s ease-in;
            -moz-transition: opacity .3s ease-in;
            -ms-transition: opacity .3s ease-in;
            transition: opacity .3s ease-in;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            -ms-box-sizing: border-box;
            box-sizing: border-box
        }

        .tweak-product-quick-view-button-position-top .sqs-product-quick-view-button-wrapper {
            -webkit-box-align: flex-start;
            -ms-flex-align: flex-start;
            -webkit-box-align: start;
            -ms-flex-align: start;
            -webkit-align-items: flex-start;
            -moz-align-items: flex-start;
            align-items: flex-start;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            -moz-justify-content: center;
            justify-content: center
        }

        .tweak-product-quick-view-button-position-center .sqs-product-quick-view-button-wrapper {
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            -moz-align-items: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            -moz-justify-content: center;
            justify-content: center
        }

        .tweak-product-quick-view-button-position-bottom .sqs-product-quick-view-button-wrapper {
            -webkit-box-align: flex-end;
            -ms-flex-align: flex-end;
            -webkit-box-align: end;
            -ms-flex-align: end;
            -webkit-align-items: flex-end;
            -moz-align-items: flex-end;
            align-items: flex-end;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            -moz-justify-content: center;
            justify-content: center;
            bottom: -1px
        }

        .tweak-product-quick-view-button-style-floating.tweak-product-quick-view-button-position-top .sqs-product-quick-view-button-wrapper {
            padding-top: 1em
        }

        .tweak-product-quick-view-button-style-floating.tweak-product-quick-view-button-position-bottom .sqs-product-quick-view-button-wrapper {
            padding-bottom: 1em
        }

        .sqs-product-quick-view-button-wrapper .sqs-product-quick-view-button {
            display: inline-block;
            width: auto;
            height: auto;
            padding: 1.5em;
            color: #fff;
            background-color: #1d1d1d;
            border-width: 0;
            line-height: 1em;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            outline: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .tweak-product-quick-view-button-style-bar .sqs-product-quick-view-button-wrapper .sqs-product-quick-view-button {
            width: 100%
        }

        @media only screen and (max-width: 640px) {
            .sqs-product-quick-view-button-wrapper .sqs-product-quick-view-button-wrapper {
                display: none !important
            }
        }

        .sqs-product-quick-view-lightbox .sqs-product-quick-view-content {
            padding: 15px
        }

        .tweak-product-item-gallery-position-left .sqs-product-quick-view-lightbox .sqs-product-quick-view-content .ProductItem-details {
            padding: 30px 30px 30px 45px
        }

        .tweak-product-item-gallery-position-right .sqs-product-quick-view-lightbox .sqs-product-quick-view-content .ProductItem-details {
            padding: 30px 45px 30px 30px
        }

        .sqs-product-quick-view-lightbox .ProductItem-gallery {
            width: 60%
        }

        .sqs-product-quick-view-lightbox .ProductItem-details {
            width: 40%
        }

        .sqs-product-quick-view-lightbox a.ProductItem-details-title-link {
            border: none;
            color: inherit;
            text-decoration: none
        }

        .tweak-product-quick-view-lightbox-excerpt-display-hide .sqs-product-quick-view-lightbox .ProductItem-details-excerpt {
            display: none
        }

        .sqs-product-quick-view-lightbox-next-button, .sqs-product-quick-view-lightbox-prev-button, .sqs-product-quick-view-lightbox-close-button {
            position: fixed;
            top: 50%;
            width: 85%;
            max-width: 900px;
            height: 25px;
            margin-top: -12.5px;
            font-size: inherit;
            line-height: 25px;
            cursor: pointer;
            -moz-user-select: none;
            -webkit-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        .sqs-product-quick-view-lightbox-next-button:before, .sqs-product-quick-view-lightbox-prev-button:before, .sqs-product-quick-view-lightbox-close-button:before {
            font-weight: bold
        }

        .sqs-product-quick-view-lightbox-next-button svg, .sqs-product-quick-view-lightbox-prev-button svg, .sqs-product-quick-view-lightbox-close-button svg {
            width: 25px;
            height: 25px
        }

        .sqs-product-quick-view-lightbox-next-button line, .sqs-product-quick-view-lightbox-prev-button line, .sqs-product-quick-view-lightbox-close-button line, .sqs-product-quick-view-lightbox-next-button polyline, .sqs-product-quick-view-lightbox-prev-button polyline, .sqs-product-quick-view-lightbox-close-button polyline {
            stroke: #1d1d1d
        }

        .tweak-product-quick-view-lightbox-controls-weight-hairline .sqs-product-quick-view-lightbox-next-button polyline, .tweak-product-quick-view-lightbox-controls-weight-hairline .sqs-product-quick-view-lightbox-prev-button polyline, .tweak-product-quick-view-lightbox-controls-weight-hairline .sqs-product-quick-view-lightbox-close-button polyline {
            stroke-width: 2
        }

        .tweak-product-quick-view-lightbox-controls-weight-light .sqs-product-quick-view-lightbox-next-button polyline, .tweak-product-quick-view-lightbox-controls-weight-light .sqs-product-quick-view-lightbox-prev-button polyline, .tweak-product-quick-view-lightbox-controls-weight-light .sqs-product-quick-view-lightbox-close-button polyline {
            stroke-width: 4
        }

        .tweak-product-quick-view-lightbox-controls-weight-medium .sqs-product-quick-view-lightbox-next-button polyline, .tweak-product-quick-view-lightbox-controls-weight-medium .sqs-product-quick-view-lightbox-prev-button polyline, .tweak-product-quick-view-lightbox-controls-weight-medium .sqs-product-quick-view-lightbox-close-button polyline {
            stroke-width: 6
        }

        .tweak-product-quick-view-lightbox-controls-weight-heavy .sqs-product-quick-view-lightbox-next-button polyline, .tweak-product-quick-view-lightbox-controls-weight-heavy .sqs-product-quick-view-lightbox-prev-button polyline, .tweak-product-quick-view-lightbox-controls-weight-heavy .sqs-product-quick-view-lightbox-close-button polyline {
            stroke-width: 8
        }

        .tweak-product-quick-view-lightbox-controls-weight-hairline .sqs-product-quick-view-lightbox-next-button line, .tweak-product-quick-view-lightbox-controls-weight-hairline .sqs-product-quick-view-lightbox-prev-button line, .tweak-product-quick-view-lightbox-controls-weight-hairline .sqs-product-quick-view-lightbox-close-button line {
            stroke-width: .8333333333333334
        }

        .tweak-product-quick-view-lightbox-controls-weight-light .sqs-product-quick-view-lightbox-next-button line, .tweak-product-quick-view-lightbox-controls-weight-light .sqs-product-quick-view-lightbox-prev-button line, .tweak-product-quick-view-lightbox-controls-weight-light .sqs-product-quick-view-lightbox-close-button line {
            stroke-width: 1.6666666666666667
        }

        .tweak-product-quick-view-lightbox-controls-weight-medium .sqs-product-quick-view-lightbox-next-button line, .tweak-product-quick-view-lightbox-controls-weight-medium .sqs-product-quick-view-lightbox-prev-button line, .tweak-product-quick-view-lightbox-controls-weight-medium .sqs-product-quick-view-lightbox-close-button line {
            stroke-width: 2.5
        }

        .tweak-product-quick-view-lightbox-controls-weight-heavy .sqs-product-quick-view-lightbox-next-button line, .tweak-product-quick-view-lightbox-controls-weight-heavy .sqs-product-quick-view-lightbox-prev-button line, .tweak-product-quick-view-lightbox-controls-weight-heavy .sqs-product-quick-view-lightbox-close-button line {
            stroke-width: 3.3333333333333335
        }

        .sqs-product-quick-view-lightbox-next-button {
            margin-left: 35px;
            text-align: right
        }

        body:not(.tweak-product-quick-view-lightbox-show-arrows) .sqs-product-quick-view-lightbox-next-button {
            opacity: 0
        }

        .sqs-product-quick-view-lightbox-prev-button {
            margin-left: -35px
        }

        body:not(.tweak-product-quick-view-lightbox-show-arrows) .sqs-product-quick-view-lightbox-prev-button {
            opacity: 0
        }

        .sqs-product-quick-view-lightbox-close-button {
            top: 25px;
            right: 12.5px;
            width: 25px;
            z-index: 100000000
        }

        .sqs-product-quick-view-lightbox-close-button svg {
            width: 20px;
            height: 20px
        }

        body:not(.tweak-product-quick-view-lightbox-show-close-button) .sqs-product-quick-view-lightbox-close-button {
            opacity: 0
        }

        .sqs-product-quick-view-lightbox-element-hidden {
            opacity: 0;
            visibility: hidden;
            cursor: default
        }

        .sqs-style-mode-active .sqs-product-quick-view-lightbox .sqs-product-quick-view {
            pointer-events: none;
            cursor: not-allowed;
            cursor: no-drop
        }

        .sqs-product-quick-view-lightbox.sqs-modal-lightbox {
            visibility: visible
        }

        .sqs-product-quick-view-lightbox.sqs-modal-lightbox .sqs-modal-lightbox-content .lightbox-background {
            background: rgba(240, 240, 240, .6) !important;
            opacity: 1
        }

        .sqs-product-quick-view-lightbox.sqs-modal-lightbox .sqs-modal-lightbox-content .lightbox-inner .lightbox-content {
            width: 85%;
            max-width: 900px;
            padding: 0px;
            background: #fff !important
        }

        .sqs-product-quick-view-lightbox.sqs-modal-lightbox .sqs-modal-lightbox-content .lightbox-inner .lightbox-content .lightbox-close {
            display: none
        }

        .sqs-product-quick-view-lightbox.sqs-modal-lightbox ~ .sqs-widgets-confirmation {
            z-index: 100000001
        }

        .sqs-product-quick-view-lightbox.sqs-modal-lightbox[hidden] {
            visibility: hidden;
            display: block !important
        }

        .sqs-product-quick-view-lightbox.sqs-modal-lightbox[hidden] .sqs-modal-lightbox-content {
            left: -9999px;
            opacity: 0;
            transition: none
        }

        .sqs-product-quick-view-lightbox.sqs-modal-lightbox .sqs-modal-lightbox-content {
            transition: opacity .15s ease-out
        }

        .site-title-font {
            font-family: "proxima-nova", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-weight: 600;
            font-style: normal;
            font-size: 20px;
            letter-spacing: 2px;
            text-transform: uppercase
        }

        .nav-font {
            font-family: "proxima-nova", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-weight: 600;
            font-style: normal;
            font-size: 14px;
            letter-spacing: 1px;
            text-transform: uppercase;
            text-decoration: none
        }

        .nav-button-font {
            font-family: "proxima-nova", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-weight: 700;
            font-style: normal;
            letter-spacing: 1px;
            text-transform: uppercase;
            text-decoration: none
        }

        .banner-heading-font {
            font-family: "proxima-nova", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-weight: 400;
            font-style: normal;
            font-size: 48px;
            letter-spacing: 0px;
            text-transform: none;
            line-height: 1em
        }

        .banner-text-font {
            font-family: "proxima-nova", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-weight: 400;
            font-style: normal;
            font-size: 18px;
            letter-spacing: 0px;
            text-transform: none;
            line-height: 1.5em
        }

        .banner-button-font {
            font-family: "proxima-nova", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-weight: 700;
            font-style: normal;
            font-size: 16px;
            letter-spacing: 1px;
            text-transform: uppercase;
            text-decoration: none
        }

        .body-font {
            font-family: "proxima-nova", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-weight: 400;
            font-style: normal;
            font-size: 16px;
            letter-spacing: 0px;
            line-height: 1.6em
        }

        .heading1-font {
            font-family: "proxima-nova", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-weight: 400;
            font-style: normal;
            font-size: 48px;
            letter-spacing: 0px;
            text-transform: none;
            line-height: 1.2em
        }

        .heading2-font {
            font-family: "proxima-nova", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-weight: 400;
            font-style: normal;
            font-size: 32px;
            letter-spacing: 0px;
            text-transform: none;
            line-height: 1.2em
        }

        .heading3-font {
            font-family: "proxima-nova", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-weight: 400;
            font-style: normal;
            font-size: 21px;
            letter-spacing: 0px;
            text-transform: none;
            line-height: 1.2em
        }

        .quote-font {
            font-family: Georgia, "Times New Roman", serif;
            font-weight: 400;
            font-style: italic;
            font-size: 27px;
            letter-spacing: 0px;
            line-height: 1.65em
        }

        .summary-heading-font {
            font-family: "proxima-nova", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-style: normal;
            font-weight: 400;
            letter-spacing: 1px;
            text-transform: uppercase
        }

        .subnav-title-font {
            font-family: "proxima-nova", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-weight: 700;
            font-style: normal;
            font-size: 14px;
            letter-spacing: 1px;
            text-transform: uppercase;
            text-decoration: none
        }

        .subnav-link-font {
            font-family: "proxima-nova", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-weight: 400;
            font-style: normal;
            font-size: 14px;
            letter-spacing: 1px;
            text-transform: uppercase;
            text-decoration: none
        }

        .footer-nav-font {
            font-family: "proxima-nova", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-weight: 400;
            font-style: normal;
            font-size: 14px;
            letter-spacing: 1px;
            text-transform: uppercase;
            text-decoration: none
        }

        .site-info-font {
            font-family: "proxima-nova", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-weight: 600;
            font-style: normal;
            font-size: 14px;
            letter-spacing: 1px;
            text-transform: uppercase;
            text-decoration: none
        }

        html:not(.js) body[class^=collection-] img {
            max-width: 100%
        }

        html:not(.js) body[class^=collection-] [href="#"] {
            display: none !important;
            visibility: hidden
        }

        .hidden {
            display: none !important;
            visibility: hidden
        }

        .visuallyhidden {
            border: 0;
            clip: rect(0 0 0 0);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px
        }

        .visuallyhidden.focusable:active, .visuallyhidden.focusable:focus {
            clip: auto;
            height: auto;
            margin: 0;
            overflow: visible;
            position: static;
            width: auto
        }

        .invisible {
            visibility: hidden
        }

        img[data-src]:not([src]) {
            visibility: hidden
        }

        .full-image-float-left, .thumbnail-image-float-left {
            float: left;
            margin-right: 1.5em
        }

        .full-image-float-right, .thumbnail-image-float-right {
            float: right;
            margin-left: 1.5em
        }

        .full-image-block {
            display: block;
            margin-bottom: 1.5em
        }

        .thumbnail-caption {
            display: block
        }

        .clearfix:before, .clearfix:after {
            content: " ";
            display: table
        }

        .clearfix:after {
            clear: both
        }

        @media print {
            * {
                background: transparent !important;
                color: #000 !important;
                box-shadow: none !important;
                text-shadow: none !important
            }

            a, a:visited {
                text-decoration: underline
            }

            a[href]:after {
                content: " (" attr(href) ")"
            }

            abbr[title]:after {
                content: " (" attr(title) ")"
            }

            a[href^="javascript:"]:after, a[href^="#"]:after {
                content: ""
            }

            pre, blockquote {
                border: 1px solid #999;
                page-break-inside: avoid
            }

            thead {
                display: table-header-group
            }

            tr, img {
                page-break-inside: avoid
            }

            img {
                max-width: 100% !important
            }

            @page {
                margin: .5cm
            }

            p, h2, h3 {
                orphans: 3;
                widows: 3
            }

            h2, h3 {
                page-break-after: avoid
            }
        }

        .border-box, .border-box:before, .border-box:after {
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box
        }

        .header-anim

        0
        %
        {
            opacity: 0
        }
        .header-anim

        72
        %
        {
            opacity: 0
        }
        .header-anim

        100
        %
        {
            opacity: 1
        }
        @-webkit-keyframes header-anim {
            0% {
                opacity: 0
            }
            72% {
                opacity: 0
            }
            100% {
                opacity: 1
            }
        }

        @keyframes header-anim {
            0% {
                opacity: 0
            }
            72% {
                opacity: 0
            }
            100% {
                opacity: 1
            }
        }

        .feature-bg-anim

        0
        %
        {
            opacity: 0
        }
        .feature-bg-anim

        50
        %
        {
            opacity: 0
        }
        .feature-bg-anim

        100
        %
        {
            opacity: 1
        }
        @-webkit-keyframes feature-bg-anim {
            0% {
                opacity: 0
            }
            50% {
                opacity: 0
            }
            100% {
                opacity: 1
            }
        }

        @keyframes feature-bg-anim {
            0% {
                opacity: 0
            }
            50% {
                opacity: 0
            }
            100% {
                opacity: 1
            }
        }

        .feature-text-anim

        0
        %
        {
            opacity: 0
        ;
            -webkit-transform: translate3d(0, 10px, 0)
        ;
            -moz-transform: translate3d(0, 10px, 0)
        ;
            -ms-transform: translate3d(0, 10px, 0)
        ;
            -o-transform: translate3d(0, 10px, 0)
        ;
            transform: translate3d(0, 10px, 0)
        }
        .feature-text-anim

        75
        %
        {
            opacity: 0
        ;
            -webkit-transform: translate3d(0, 10px, 0)
        ;
            -moz-transform: translate3d(0, 10px, 0)
        ;
            -ms-transform: translate3d(0, 10px, 0)
        ;
            -o-transform: translate3d(0, 10px, 0)
        ;
            transform: translate3d(0, 10px, 0)
        }
        .feature-text-anim

        100
        %
        {
            opacity: 1
        ;
            -webkit-transform: translate3d(0, 0, 0)
        ;
            -moz-transform: translate3d(0, 0, 0)
        ;
            -ms-transform: translate3d(0, 0, 0)
        ;
            -o-transform: translate3d(0, 0, 0)
        ;
            transform: translate3d(0, 0, 0)
        }
        @-webkit-keyframes feature-text-anim {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(0, 10px, 0);
                -moz-transform: translate3d(0, 10px, 0);
                -ms-transform: translate3d(0, 10px, 0);
                -o-transform: translate3d(0, 10px, 0);
                transform: translate3d(0, 10px, 0)
            }
            75% {
                opacity: 0;
                -webkit-transform: translate3d(0, 10px, 0);
                -moz-transform: translate3d(0, 10px, 0);
                -ms-transform: translate3d(0, 10px, 0);
                -o-transform: translate3d(0, 10px, 0);
                transform: translate3d(0, 10px, 0)
            }
            100% {
                opacity: 1;
                -webkit-transform: translate3d(0, 0, 0);
                -moz-transform: translate3d(0, 0, 0);
                -ms-transform: translate3d(0, 0, 0);
                -o-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0)
            }
        }

        @keyframes feature-text-anim {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(0, 10px, 0);
                -moz-transform: translate3d(0, 10px, 0);
                -ms-transform: translate3d(0, 10px, 0);
                -o-transform: translate3d(0, 10px, 0);
                transform: translate3d(0, 10px, 0)
            }
            75% {
                opacity: 0;
                -webkit-transform: translate3d(0, 10px, 0);
                -moz-transform: translate3d(0, 10px, 0);
                -ms-transform: translate3d(0, 10px, 0);
                -o-transform: translate3d(0, 10px, 0);
                transform: translate3d(0, 10px, 0)
            }
            100% {
                opacity: 1;
                -webkit-transform: translate3d(0, 0, 0);
                -moz-transform: translate3d(0, 0, 0);
                -ms-transform: translate3d(0, 0, 0);
                -o-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0)
            }
        }

        .feature-text-anim-alt

        0
        %
        {
            opacity: 0
        ;
            -webkit-transform: translate3d(-50%, -45%, 0)
        ;
            -moz-transform: translate3d(-50%, -45%, 0)
        ;
            -ms-transform: translate3d(-50%, -45%, 0)
        ;
            -o-transform: translate3d(-50%, -45%, 0)
        ;
            transform: translate3d(-50%, -45%, 0)
        }
        .feature-text-anim-alt

        67
        %
        {
            opacity: 0
        ;
            -webkit-transform: translate3d(-50%, -45%, 0)
        ;
            -moz-transform: translate3d(-50%, -45%, 0)
        ;
            -ms-transform: translate3d(-50%, -45%, 0)
        ;
            -o-transform: translate3d(-50%, -45%, 0)
        ;
            transform: translate3d(-50%, -45%, 0)
        }
        .feature-text-anim-alt

        100
        %
        {
            opacity: 1
        ;
            -webkit-transform: translate3d(-50%, -50%, 0)
        ;
            -moz-transform: translate3d(-50%, -50%, 0)
        ;
            -ms-transform: translate3d(-50%, -50%, 0)
        ;
            -o-transform: translate3d(-50%, -50%, 0)
        ;
            transform: translate3d(-50%, -50%, 0)
        }
        @-webkit-keyframes feature-text-anim-alt {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(-50%, -45%, 0);
                -moz-transform: translate3d(-50%, -45%, 0);
                -ms-transform: translate3d(-50%, -45%, 0);
                -o-transform: translate3d(-50%, -45%, 0);
                transform: translate3d(-50%, -45%, 0)
            }
            67% {
                opacity: 0;
                -webkit-transform: translate3d(-50%, -45%, 0);
                -moz-transform: translate3d(-50%, -45%, 0);
                -ms-transform: translate3d(-50%, -45%, 0);
                -o-transform: translate3d(-50%, -45%, 0);
                transform: translate3d(-50%, -45%, 0)
            }
            100% {
                opacity: 1;
                -webkit-transform: translate3d(-50%, -50%, 0);
                -moz-transform: translate3d(-50%, -50%, 0);
                -ms-transform: translate3d(-50%, -50%, 0);
                -o-transform: translate3d(-50%, -50%, 0);
                transform: translate3d(-50%, -50%, 0)
            }
        }

        @keyframes feature-text-anim-alt {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(-50%, -45%, 0);
                -moz-transform: translate3d(-50%, -45%, 0);
                -ms-transform: translate3d(-50%, -45%, 0);
                -o-transform: translate3d(-50%, -45%, 0);
                transform: translate3d(-50%, -45%, 0)
            }
            67% {
                opacity: 0;
                -webkit-transform: translate3d(-50%, -45%, 0);
                -moz-transform: translate3d(-50%, -45%, 0);
                -ms-transform: translate3d(-50%, -45%, 0);
                -o-transform: translate3d(-50%, -45%, 0);
                transform: translate3d(-50%, -45%, 0)
            }
            100% {
                opacity: 1;
                -webkit-transform: translate3d(-50%, -50%, 0);
                -moz-transform: translate3d(-50%, -50%, 0);
                -ms-transform: translate3d(-50%, -50%, 0);
                -o-transform: translate3d(-50%, -50%, 0);
                transform: translate3d(-50%, -50%, 0)
            }
        }

        *::selection {
            background-color: #000;
            color: #fff
        }

        body {
            background-color: #ca2b2b
        }

        #siteWrapper {
            font-family: "proxima-nova", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-weight: 400;
            font-size: 16px;
            font-family: "Helvetica Neue", "Arial", "sans-serif";
            font-size: 14px;
            line-height: 1.6em;
            letter-spacing: 0px;
            font-weight: normal;
            font-style: normal;
            color: rgba(26, 26, 26, .7)
        }

        .sqs-modal-lightbox-content .lightbox-inner .lightbox-content .form-wrapper {
            font-family: "proxima-nova", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-weight: 400;
            font-size: 16px;
            font-family: "Helvetica Neue", "Arial", "sans-serif";
            font-size: 14px;
            line-height: 1.6em;
            letter-spacing: 0px;
            font-weight: normal;
            font-style: normal
        }

        .html-block a:not(.sqs-block-button-element), .markdown-block a:not(.sqs-block-button-element), .entry-more-link a:not(.sqs-block-button-element), .twitter-block a:not(.sqs-block-button-element), .foursquare-block a:not(.sqs-block-button-element), .rss-block a:not(.sqs-block-button-element), .layout-caption-below .image-caption a:not(.sqs-block-button-element), .summary-excerpt a:not(.sqs-block-button-element), .album-description a:not(.sqs-block-button-element), .product-excerpt a:not(.sqs-block-button-element), .product-description a:not(.sqs-block-button-element), .eventlist-excerpt a:not(.sqs-block-button-element), .p-summary a:not(.sqs-block-button-element), .html-block a:not(.sqs-block-button-element):visited, .markdown-block a:not(.sqs-block-button-element):visited, .entry-more-link a:not(.sqs-block-button-element):visited, .twitter-block a:not(.sqs-block-button-element):visited, .foursquare-block a:not(.sqs-block-button-element):visited, .rss-block a:not(.sqs-block-button-element):visited, .layout-caption-below .image-caption a:not(.sqs-block-button-element):visited, .summary-excerpt a:not(.sqs-block-button-element):visited, .album-description a:not(.sqs-block-button-element):visited, .product-excerpt a:not(.sqs-block-button-element):visited, .product-description a:not(.sqs-block-button-element):visited, .eventlist-excerpt a:not(.sqs-block-button-element):visited, .p-summary a:not(.sqs-block-button-element):visited {
            text-decoration: none
        }

        a {
            text-decoration: none;
            color: rgba(26, 26, 26, .7)
        }

        .sqs-lightbox-meta a {
            color: inherit;
            text-decoration: underline
        }

        h1, h2, h3 {
            text-rendering: optimizeLegibility
        }

        article header h1 a {
            color: rgba(26, 26, 26, .9)
        }

        h1, .entry-title {
            font-family: "proxima-nova", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-weight: 400;
            font-size: 48px;
            font-family: "Helvetica Neue", "Arial", "sans-serif";
            font-size: 24px;
            line-height: 1.2em;
            text-transform: none;
            letter-spacing: 0px;
            font-weight: normal;
            font-style: normal
        }

        h1, .entry-title {
            color: rgba(26, 26, 26, .9)
        }

        h2 {
            font-family: "proxima-nova", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 32px;
            letter-spacing: 0px;
            text-transform: none;
            font-family: "proxima-nova";
            font-size: 22px;
            line-height: 1.2em;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: 400;
            font-style: normal
        }

        h2, .summary-title a {
            color: #4a4a4a
        }

        h3 {
            font-family: "proxima-nova", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-weight: 400;
            font-size: 21px;
            letter-spacing: 0px;
            text-transform: none;
            font-family: "proxima-nova";
            font-size: 14px;
            line-height: 1.2em;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: 600;
            font-style: normal
        }

        h3 {
            color: rgba(26, 26, 26, .9)
        }

        h1, h2, h3, .entry-title {
            margin: 1em 0 .5em
        }

        h1:first-child, h2:first-child, h3:first-child, .entry-title:first-child {
            margin-top: 0
        }

        blockquote {
            margin: 0;
            padding: .5em 2.5em;
            font-style: italic
        }

        .entry-actions, .entry-comments, .eventitem-addtocallinks, .album-info .engagement, .entry-dateline, .entry-byline, .entry-morefrom, .entry-tags, .entry-source, .eventitem-backlink, .sqs-audio-playlist .tracks .track-info .artist, .summary-info-item {
            color: rgba(26, 26, 26, .4)
        }

        .entry-actions a, .entry-comments a, .eventitem-addtocallinks a, .album-info .engagement a, .entry-dateline a, .entry-byline a, .entry-morefrom a, .entry-tags a, .entry-source a, .eventitem-backlink a, .sqs-audio-playlist .tracks .track-info .artist a, .summary-info-item a {
            color: rgba(26, 26, 26, .4)
        }

        .sqs-block-summary-v2 .summary-info-item {
            opacity: 1
        }

        .comment-count {
            font-family: "proxima-nova", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-weight: 400;
            font-size: 16px;
            font-family: "Helvetica Neue", "Arial", "sans-serif";
            font-size: 14px;
            line-height: 1.6em;
            letter-spacing: 0px;
            font-weight: normal;
            font-style: normal;
            color: rgba(26, 26, 26, .7)
        }

        .quote-block figure {
            font-family: Georgia, "Times New Roman", serif;
            font-weight: 400;
            font-style: italic;
            font-size: 27px;
            font-family: "Helvetica Neue", "Arial", "sans-serif";
            font-size: 20px;
            line-height: 1.65em;
            letter-spacing: 0px;
            font-weight: normal;
            font-style: normal;
            color: #ca2b2b;
            padding: 32px 32px 0;
            text-align: center;
            margin: 0
        }

        .quote-block blockquote {
            padding: 0;
            border-left-width: 0;
            font-style: inherit
        }

        .quote-block blockquote > span:first-child {
            font-size: 4em;
            display: block;
            opacity: .3
        }

        .quote-block blockquote > span:last-child {
            display: none
        }

        .quote-block .source {
            font-size: .875em;
            padding-top: 1em;
            opacity: .5;
            text-align: center
        }

        .sqs-block-horizontalrule hr {
            border-style: none;
            border-width: 0;
            margin: 32px 0;
            color: rgba(26, 26, 26, .15);
            background-color: rgba(26, 26, 26, .15)
        }

        #preFooter .sqs-block-horizontalrule hr {
            color: rgba(0, 0, 0, .15);
            background-color: rgba(0, 0, 0, .15)
        }

        #footer .sqs-block-horizontalrule hr {
            color: rgba(255, 255, 255, .15);
            background-color: rgba(255, 255, 255, .15)
        }

        #siteWrapper {
            position: relative;
            padding: 0;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box
        }

        #siteWrapper {
            background-color: #fff
        }

        .sqs-cart-dropzone .sqs-pill-shopping-cart {
            z-index: 9999
        }

        @media screen and (min-width: 641px) {
            .sqs-cart-dropzone {
                position: absolute;
                top: 100px;
                right: 20px;
                width: auto;
                max-width: 282px;
                z-index: 999
            }
        }

        .category-nav .nav-section-label, .folder-nav .nav-section-label {
            font-family: "proxima-nova", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-weight: 700;
            font-size: 14px;
            letter-spacing: 1px;
            text-transform: uppercase;
            font-family: "adobe-garamond-pro";
            font-size: 22px;
            text-transform: none;
            text-decoration: none;
            letter-spacing: 0px;
            font-weight: 400;
            font-style: normal;
            line-height: 1.2em;
            color: #00746b;
            margin-bottom: .5em
        }

        .category-nav a, .folder-nav a, .category-nav a:visited, .folder-nav a:visited {
            font-family: "proxima-nova", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-weight: 400;
            letter-spacing: 1px;
            font-family: "proxima-nova";
            font-size: 14px;
            text-transform: uppercase;
            text-decoration: none;
            letter-spacing: 2px;
            font-weight: 600;
            font-style: normal;
            color: rgba(26, 26, 26, .4);
            line-height: 1.25em;
            display: block;
            padding: 0 0 .75em
        }

        .category-nav a:hover, .folder-nav a:hover, .category-nav a:visited:hover, .folder-nav a:visited:hover {
            color: #1a1a1a
        }

        .category-nav li.active-link:not(.all) a, .folder-nav li.active-link:not(.all) a, .category-nav li.active-link:not(.all) a:visited, .folder-nav li.active-link:not(.all) a:visited {
            color: #1a1a1a
        }

        .view-list #categoryNav ul li.active-link.all a, .view-list #categoryNav ul li.active-link.all a:visited {
            color: #1a1a1a
        }

        .header-inner, .footer-inner, .pre-footer-inner {
            width: auto;
            margin: auto;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box
        }

        .footer-inner, .pre-footer-inner {
            max-width: 1020px
        }

        #header {
            padding: 0 20px;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            z-index: 1000;
            top: 0;
            left: 0;
            width: 100%;
            line-height: 1em;
            background-color: #c81e1e;
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            position: relative
        }

        #header a {
            text-decoration: none
        }

        #header #siteTitle {
            position: relative;
            z-index: 1000
        }

        .header-inner, .footer-inner, .pre-footer-inner .sqs-layout {
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box
        }

        .header-inner {
            padding: 20px 0;
            display: table;
            width: 100%;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-animation: header-anim 1s ease-in-out;
            animation: header-anim 1s ease-in-out
        }

        .footer-inner {
            padding: 64px 32px
        }

        .pre-footer-inner .sqs-layout {
            padding: 32px
        }

        .pre-footer-inner .sqs-layout.empty {
            padding: 0 32px
        }

        body:not(.sqs-edit-mode) .pre-footer-inner .sqs-layout.empty {
            max-height: 0
        }

        .transparent-header #header {
            background-color: transparent;
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            position: absolute
        }

        body:not(.has-banner-image).transparent-header #header, .collection-type-gallery.has-banner-image.transparent-header #header {
            background-color: #c81e1e;
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            position: relative
        }

        #preFooter {
            background-color: #fbf4f4;
            -moz-osx-font-smoothing: auto;
            -webkit-font-smoothing: subpixel-antialiased
        }

        #preFooter {
            color: rgba(0, 0, 0, .7)
        }

        #preFooter h1, #preFooter h2, #preFooter h3 {
            color: rgba(0, 0, 0, .7)
        }

        .pre-footer-inner {
            -webkit-transition: all .25s ease-in-out .1s;
            -moz-transition: all .25s ease-in-out .1s;
            -ms-transition: all .25s ease-in-out .1s;
            -o-transition: all .25s ease-in-out .1s;
            transition: all .25s ease-in-out .1s
        }

        .pre-footer-inner a {
            color: rgba(0, 0, 0, .7)
        }

        .pre-footer-inner .sqs-block-html a, .pre-footer-inner .sqs-block-markdown a, .pre-footer-inner .sqs-block-image a {
            border-bottom: 1px solid rgba(0, 0, 0, .3)
        }

        .pre-footer-inner .sqs-block-html a:hover, .pre-footer-inner .sqs-block-markdown a:hover, .pre-footer-inner .sqs-block-image a:hover, .pre-footer-inner .sqs-block-html a:active, .pre-footer-inner .sqs-block-markdown a:active, .pre-footer-inner .sqs-block-image a:active {
            border-bottom: 1px solid rgba(0, 0, 0, .7)
        }

        .unscrolled .pre-footer-inner {
            opacity: 0;
            -webkit-transform: translate3d(0, 12px, 0);
            -moz-transform: translate3d(0, 12px, 0);
            -ms-transform: translate3d(0, 12px, 0);
            -o-transform: translate3d(0, 12px, 0);
            transform: translate3d(0, 12px, 0)
        }

        #footer {
            background-color: #ca2b2b;
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased
        }

        #footer .html-block a, #footer .html-block a:visited {
            color: rgba(255, 255, 255, .4);
            border-bottom: 1px solid rgba(255, 255, 255, .4)
        }

        #footer nav:not(.social-account-list) {
            font-family: "proxima-nova", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 14px;
            letter-spacing: 1px;
            font-family: "proxima-nova";
            font-size: 13px;
            text-transform: uppercase;
            text-decoration: none;
            letter-spacing: 2px;
            font-weight: 400;
            font-style: normal
        }

        #footer nav:not(.social-account-list) a, #footer nav:not(.social-account-list) a:visited, #footer nav:not(.social-account-list) label {
            text-decoration: none;
            line-height: 1.25em;
            color: #fff;
            border: none
        }

        #footer nav:not(.social-account-list) a.active, #footer nav:not(.social-account-list) a:visited.active, #footer nav:not(.social-account-list) label.active, #footer nav:not(.social-account-list) a:hover, #footer nav:not(.social-account-list) a:visited:hover, #footer nav:not(.social-account-list) label:hover {
            color: #fff
        }

        #footer .folder .subnav {
            background-color: #ca2b2b
        }

        #footer {
            color: rgba(255, 255, 255, .4)
        }

        #footer h1, #footer h2, #footer h3 {
            color: rgba(255, 255, 255, .4)
        }

        #page {
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            width: auto;
            margin: auto;
            max-width: 1020px;
            padding: 96px 32px;
            -moz-osx-font-smoothing: auto;
            -webkit-font-smoothing: subpixel-antialiased
        }

        #content {
            width: 100%;
            display: block
        }

        .collection-type-page #content {
            margin: auto
        }

        #folderNav, #categoryNav, #rightSidebar {
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            width: 26.5625%;
            width: calc(255px - 0%);
            display: inline-block;
            vertical-align: top
        }

        #folderNav, #categoryNav {
            padding-right: 64px
        }

        li.filter {
            display: none;
            visibility: hidden
        }

        #rightSidebar {
            padding-left: 64px;
            font-size: .85em
        }

        .collection-type-blog #content {
            width: 73.4375%;
            width: calc(100% - 255px);
            display: inline-block;
            vertical-align: top
        }

        .collection-type-page:not(.hide-page-sidebar) #folderNav + #content, .collection-type-products:not(.hide-products-sidebar) #folderNav + #content, .collection-type-page:not(.hide-page-sidebar) #categoryNav + #content, .collection-type-products:not(.hide-products-sidebar) #categoryNav + #content {
            width: 73.4375%;
            width: calc(100% - 255px);
            display: inline-block;
            vertical-align: top
        }

        @media only screen and (min-width: 641px) {
            #header {
                width: 100%
            }

            #header #logoWrapper, #header #siteTitleWrapper, #header #headerNav {
                -moz-box-sizing: border-box;
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
                display: table-cell;
                vertical-align: middle
            }

            #header #mainNavWrapper {
                position: relative;
                z-index: 1000
            }

            #header #headerNav {
                text-align: right
            }

            #header #logoWrapper, #header #logoImage {
                width: 130px
            }

            #header #siteTitleWrapper, #header #siteTitle {
                width: 385px
            }

            #header.tweaking #logoWrapper, #header.tweaking #siteTitleWrapper, #header.tweaking #mainNavWrapper {
                border: 1px solid #14aaff
            }
        }

        #logoImage {
            margin: 0;
            font-size: 0;
            max-width: 100%
        }

        #logoImage a {
            display: block
        }

        #logoImage img {
            height: auto;
            max-height: 100px;
            width: auto;
            max-width: 100%
        }

        #siteTitle, #siteTitle a {
            font-family: "proxima-nova", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 20px;
            font-family: "proxima-nova";
            font-size: 22px;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: 600;
            font-style: normal;
            color: #fff;
            margin: 0;
            padding-top: 0;
            padding-bottom: 0;
            line-height: 1em
        }

        .hide-page-sidebar #folderNav {
            display: none
        }

        .hide-page-sidebar #folderNav + #content {
            display: block
        }

        .hide-products-sidebar #categoryNav {
            display: none
        }

        .hide-products-sidebar #categoryNav + #content {
            display: block
        }

        .hide-sidebar-title .category-nav .nav-section-label, .hide-sidebar-title .folder-nav .nav-section-label {
            display: none
        }

        .collection-type-page.has-promoted-gallery #promotedGalleryWrapper .sqs-block, .collection-type-index.has-promoted-gallery #promotedGalleryWrapper .sqs-block, .collection-type-page.has-promoted-gallery .promoted-gallery-wrapper .sqs-block, .collection-type-index.has-promoted-gallery .promoted-gallery-wrapper .sqs-block {
            padding: 0 !important
        }

        .collection-type-page.has-promoted-gallery #promotedGalleryWrapper .sqs-gallery-block-slideshow, .collection-type-index.has-promoted-gallery #promotedGalleryWrapper .sqs-gallery-block-slideshow, .collection-type-page.has-promoted-gallery .promoted-gallery-wrapper .sqs-gallery-block-slideshow, .collection-type-index.has-promoted-gallery .promoted-gallery-wrapper .sqs-gallery-block-slideshow {
            width: 100%;
            height: 600px !important;
            max-width: 100%;
            margin: 0;
            padding: 0;
            opacity: 1
        }

        .collection-type-page.has-promoted-gallery #promotedGalleryWrapper .sqs-gallery-block-slideshow .sqs-gallery, .collection-type-index.has-promoted-gallery #promotedGalleryWrapper .sqs-gallery-block-slideshow .sqs-gallery, .collection-type-page.has-promoted-gallery .promoted-gallery-wrapper .sqs-gallery-block-slideshow .sqs-gallery, .collection-type-index.has-promoted-gallery .promoted-gallery-wrapper .sqs-gallery-block-slideshow .sqs-gallery {
            width: 100%;
            height: 600px !important;
            max-width: 100%
        }

        .collection-type-page.has-promoted-gallery.transparent-header #promotedGalleryWrapper .sqs-gallery-block-slideshow, .collection-type-index.has-promoted-gallery.transparent-header #promotedGalleryWrapper .sqs-gallery-block-slideshow, .collection-type-page.has-promoted-gallery.transparent-header .promoted-gallery-wrapper .sqs-gallery-block-slideshow, .collection-type-index.has-promoted-gallery.transparent-header .promoted-gallery-wrapper .sqs-gallery-block-slideshow {
            height: 700px !important
        }

        .collection-type-page.has-promoted-gallery.transparent-header #promotedGalleryWrapper .sqs-gallery-block-slideshow .sqs-gallery, .collection-type-index.has-promoted-gallery.transparent-header #promotedGalleryWrapper .sqs-gallery-block-slideshow .sqs-gallery, .collection-type-page.has-promoted-gallery.transparent-header .promoted-gallery-wrapper .sqs-gallery-block-slideshow .sqs-gallery, .collection-type-index.has-promoted-gallery.transparent-header .promoted-gallery-wrapper .sqs-gallery-block-slideshow .sqs-gallery {
            height: 700px !important
        }

        .collection-type-page.has-promoted-gallery.collection-type-index.transparent-header .index-section:not(:first-of-type) #promotedGalleryWrapper .sqs-gallery-block-slideshow, .collection-type-index.has-promoted-gallery.collection-type-index.transparent-header .index-section:not(:first-of-type) #promotedGalleryWrapper .sqs-gallery-block-slideshow, .collection-type-page.has-promoted-gallery.collection-type-index.transparent-header .index-section:not(:first-of-type) .promoted-gallery-wrapper .sqs-gallery-block-slideshow, .collection-type-index.has-promoted-gallery.collection-type-index.transparent-header .index-section:not(:first-of-type) .promoted-gallery-wrapper .sqs-gallery-block-slideshow {
            height: 600px !important
        }

        .collection-type-page.has-promoted-gallery.collection-type-index.transparent-header .index-section:not(:first-of-type) #promotedGalleryWrapper .sqs-gallery-block-slideshow .sqs-gallery, .collection-type-index.has-promoted-gallery.collection-type-index.transparent-header .index-section:not(:first-of-type) #promotedGalleryWrapper .sqs-gallery-block-slideshow .sqs-gallery, .collection-type-page.has-promoted-gallery.collection-type-index.transparent-header .index-section:not(:first-of-type) .promoted-gallery-wrapper .sqs-gallery-block-slideshow .sqs-gallery, .collection-type-index.has-promoted-gallery.collection-type-index.transparent-header .index-section:not(:first-of-type) .promoted-gallery-wrapper .sqs-gallery-block-slideshow .sqs-gallery {
            height: 600px !important
        }

        .collection-type-page.has-promoted-gallery.loading #promotedGalleryWrapper .sqs-gallery-block-slideshow, .collection-type-index.has-promoted-gallery.loading #promotedGalleryWrapper .sqs-gallery-block-slideshow, .collection-type-page.has-promoted-gallery.loading .promoted-gallery-wrapper .sqs-gallery-block-slideshow, .collection-type-index.has-promoted-gallery.loading .promoted-gallery-wrapper .sqs-gallery-block-slideshow {
            opacity: 0
        }

        .collection-type-page.has-promoted-gallery .banner-thumbnail-wrapper, .collection-type-index.has-promoted-gallery .promoted-full ~ .banner-thumbnail-wrapper {
            display: none
        }

        .collection-type-page.has-promoted-gallery .sqs-gallery-meta-container .sqs-gallery-controls .previous, .collection-type-index.has-promoted-gallery .sqs-gallery-meta-container .sqs-gallery-controls .previous, .collection-type-page.has-promoted-gallery .sqs-gallery-meta-container .sqs-gallery-controls .next, .collection-type-index.has-promoted-gallery .sqs-gallery-meta-container .sqs-gallery-controls .next {
            background-color: transparent
        }

        .collection-type-page.has-promoted-gallery .sqs-gallery-meta-container .sqs-gallery-controls .previous:hover, .collection-type-index.has-promoted-gallery .sqs-gallery-meta-container .sqs-gallery-controls .previous:hover, .collection-type-page.has-promoted-gallery .sqs-gallery-meta-container .sqs-gallery-controls .next:hover, .collection-type-index.has-promoted-gallery .sqs-gallery-meta-container .sqs-gallery-controls .next:hover {
            background-color: transparent
        }

        .collection-type-blog.banner-slideshow-controls-none .sqs-gallery-meta-container .sqs-gallery-controls .previous, .collection-type-blog.banner-slideshow-controls-none .sqs-gallery-meta-container .sqs-gallery-controls .next {
            display: none
        }

        .collection-type-page.has-promoted-gallery #promotedGalleryWrapper .sqs-gallery-thumbnails, .collection-type-index.has-promoted-gallery #promotedGalleryWrapper .sqs-gallery-thumbnails, .collection-type-page.has-promoted-gallery .promoted-gallery-wrapper .sqs-gallery-thumbnails, .collection-type-index.has-promoted-gallery .promoted-gallery-wrapper .sqs-gallery-thumbnails {
            display: none;
            height: 0;
            padding: 0;
            margin: 0
        }

        .has-promoted-gallery .promoted-gallery-wrapper [data-type="video"] .meta {
            display: none
        }

        .has-promoted-gallery #promotedGalleryWrapper .sqs-gallery-block-slideshow.sqs-gallery-block-meta-position-bottom .meta, .has-promoted-gallery .promoted-gallery-wrapper .sqs-gallery-block-slideshow.sqs-gallery-block-meta-position-bottom .meta, .has-promoted-gallery #promotedGalleryWrapper .sqs-gallery-block-slideshow.sqs-gallery-block-meta-position-top .meta, .has-promoted-gallery .promoted-gallery-wrapper .sqs-gallery-block-slideshow.sqs-gallery-block-meta-position-top .meta, .has-promoted-gallery #promotedGalleryWrapper .sqs-gallery-block-slideshow.sqs-gallery-block-meta-position-top-left .meta, .has-promoted-gallery .promoted-gallery-wrapper .sqs-gallery-block-slideshow.sqs-gallery-block-meta-position-top-left .meta, .has-promoted-gallery #promotedGalleryWrapper .sqs-gallery-block-slideshow.sqs-gallery-block-meta-position-center .meta, .has-promoted-gallery .promoted-gallery-wrapper .sqs-gallery-block-slideshow.sqs-gallery-block-meta-position-center .meta, .has-promoted-gallery #promotedGalleryWrapper .sqs-gallery-block-slideshow.sqs-gallery-block-meta-position-bottom-left .meta, .has-promoted-gallery .promoted-gallery-wrapper .sqs-gallery-block-slideshow.sqs-gallery-block-meta-position-bottom-left .meta, .has-promoted-gallery #promotedGalleryWrapper .sqs-gallery-block-slideshow.sqs-gallery-block-meta-position-bottom-right .meta, .has-promoted-gallery .promoted-gallery-wrapper .sqs-gallery-block-slideshow.sqs-gallery-block-meta-position-bottom-right .meta, .has-promoted-gallery #promotedGalleryWrapper .sqs-gallery-block-slideshow.sqs-gallery-block-meta-position-top-right .meta, .has-promoted-gallery .promoted-gallery-wrapper .sqs-gallery-block-slideshow.sqs-gallery-block-meta-position-top-right .meta {
            left: 50% !important;
            top: 50% !important;
            -webkit-transform: translate(-50%, -45%) !important;
            -moz-transform: translate(-50%, -45%) !important;
            -ms-transform: translate(-50%, -45%) !important;
            -o-transform: translate(-50%, -45%) !important;
            transform: translate(-50%, -45%) !important;
            -webkit-transition: all .25s ease-in-out .3s;
            -moz-transition: all .25s ease-in-out .3s;
            -ms-transition: all .25s ease-in-out .3s;
            -o-transition: all .25s ease-in-out .3s;
            transition: all .25s ease-in-out .3s;
            opacity: 0;
            margin: 0 !important
        }

        .has-promoted-gallery #promotedGalleryWrapper .sqs-gallery-block-slideshow.sqs-gallery-block-meta-position-bottom .sqs-active-slide.loaded .meta, .has-promoted-gallery .promoted-gallery-wrapper .sqs-gallery-block-slideshow.sqs-gallery-block-meta-position-bottom .sqs-active-slide.loaded .meta, .has-promoted-gallery #promotedGalleryWrapper .sqs-gallery-block-slideshow.sqs-gallery-block-meta-position-top .sqs-active-slide.loaded .meta, .has-promoted-gallery .promoted-gallery-wrapper .sqs-gallery-block-slideshow.sqs-gallery-block-meta-position-top .sqs-active-slide.loaded .meta, .has-promoted-gallery #promotedGalleryWrapper .sqs-gallery-block-slideshow.sqs-gallery-block-meta-position-top-left .sqs-active-slide.loaded .meta, .has-promoted-gallery .promoted-gallery-wrapper .sqs-gallery-block-slideshow.sqs-gallery-block-meta-position-top-left .sqs-active-slide.loaded .meta, .has-promoted-gallery #promotedGalleryWrapper .sqs-gallery-block-slideshow.sqs-gallery-block-meta-position-center .sqs-active-slide.loaded .meta, .has-promoted-gallery .promoted-gallery-wrapper .sqs-gallery-block-slideshow.sqs-gallery-block-meta-position-center .sqs-active-slide.loaded .meta, .has-promoted-gallery #promotedGalleryWrapper .sqs-gallery-block-slideshow.sqs-gallery-block-meta-position-bottom-left .sqs-active-slide.loaded .meta, .has-promoted-gallery .promoted-gallery-wrapper .sqs-gallery-block-slideshow.sqs-gallery-block-meta-position-bottom-left .sqs-active-slide.loaded .meta, .has-promoted-gallery #promotedGalleryWrapper .sqs-gallery-block-slideshow.sqs-gallery-block-meta-position-bottom-right .sqs-active-slide.loaded .meta, .has-promoted-gallery .promoted-gallery-wrapper .sqs-gallery-block-slideshow.sqs-gallery-block-meta-position-bottom-right .sqs-active-slide.loaded .meta, .has-promoted-gallery #promotedGalleryWrapper .sqs-gallery-block-slideshow.sqs-gallery-block-meta-position-top-right .sqs-active-slide.loaded .meta, .has-promoted-gallery .promoted-gallery-wrapper .sqs-gallery-block-slideshow.sqs-gallery-block-meta-position-top-right .sqs-active-slide.loaded .meta {
            -webkit-transform: translate(-50%, -50%) !important;
            -moz-transform: translate(-50%, -50%) !important;
            -ms-transform: translate(-50%, -50%) !important;
            -o-transform: translate(-50%, -50%) !important;
            transform: translate(-50%, -50%) !important;
            opacity: 1
        }

        .has-promoted-gallery #promotedGalleryWrapper .sqs-gallery-block-slideshow .hide-body-text .meta .meta-description p, .has-promoted-gallery .promoted-gallery-wrapper .sqs-gallery-block-slideshow .hide-body-text .meta .meta-description p {
            width: 100%;
            visibility: hidden;
            line-height: 0 !important;
            margin: 0 auto
        }

        .has-promoted-gallery #promotedGalleryWrapper .sqs-gallery-block-slideshow .hide-body-text .meta .meta-description p:first-child > strong, .has-promoted-gallery .promoted-gallery-wrapper .sqs-gallery-block-slideshow .hide-body-text .meta .meta-description p:first-child > strong {
            margin-top: 0 !important
        }

        .has-promoted-gallery #promotedGalleryWrapper .sqs-gallery-block-slideshow .hide-body-text .meta .meta-description p > strong, .has-promoted-gallery .promoted-gallery-wrapper .sqs-gallery-block-slideshow .hide-body-text .meta .meta-description p > strong, .has-promoted-gallery #promotedGalleryWrapper .sqs-gallery-block-slideshow .hide-body-text .meta .meta-description p > em > strong, .has-promoted-gallery .promoted-gallery-wrapper .sqs-gallery-block-slideshow .hide-body-text .meta .meta-description p > em > strong {
            visibility: visible;
            line-height: 1em !important;
            margin: 20px auto
        }

        .has-promoted-gallery #promotedGalleryWrapper .sqs-gallery-block-slideshow .hide-body-text .meta .meta-description p > em > strong, .has-promoted-gallery .promoted-gallery-wrapper .sqs-gallery-block-slideshow .hide-body-text .meta .meta-description p > em > strong {
            font-style: italic
        }

        .has-promoted-gallery #promotedGalleryWrapper .sqs-gallery-block-slideshow .hide-body-text .meta .meta-description p:last-child > a, .has-promoted-gallery .promoted-gallery-wrapper .sqs-gallery-block-slideshow .hide-body-text .meta .meta-description p:last-child > a {
            visibility: visible;
            line-height: 1em !important
        }

        .has-promoted-gallery #promotedGalleryWrapper .sqs-gallery-block-slideshow .meta, .has-promoted-gallery .promoted-gallery-wrapper .sqs-gallery-block-slideshow .meta {
            text-align: center;
            background-color: transparent !important;
            background: none !important;
            margin: 0;
            z-index: 100;
            height: auto !important;
            overflow-y: visible !important;
            text-rendering: optimizeLegibility
        }

        .has-promoted-gallery #promotedGalleryWrapper .sqs-gallery-block-slideshow .meta .meta-inside, .has-promoted-gallery .promoted-gallery-wrapper .sqs-gallery-block-slideshow .meta .meta-inside {
            padding: 0 32px
        }

        .has-promoted-gallery #promotedGalleryWrapper .sqs-gallery-block-slideshow .meta .meta-title, .has-promoted-gallery .promoted-gallery-wrapper .sqs-gallery-block-slideshow .meta .meta-title {
            display: none;
            margin: 0;
            padding: 0
        }

        .has-promoted-gallery #promotedGalleryWrapper .sqs-gallery-block-slideshow .meta .meta-description p, .has-promoted-gallery .promoted-gallery-wrapper .sqs-gallery-block-slideshow .meta .meta-description p {
            font-family: "proxima-nova", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-weight: 400;
            font-size: 18px;
            letter-spacing: 0px;
            line-height: 1.5em;
            font-family: "Helvetica Neue", "Arial", "sans-serif";
            font-size: 48px;
            line-height: 1.1em;
            text-transform: none;
            letter-spacing: 1px;
            font-weight: bold;
            font-style: normal;
            color: #fff;
            margin: 20px auto;
            width: 700px !important
        }

        .has-promoted-gallery #promotedGalleryWrapper .sqs-gallery-block-slideshow .meta .meta-description p > strong, .has-promoted-gallery .promoted-gallery-wrapper .sqs-gallery-block-slideshow .meta .meta-description p > strong, .has-promoted-gallery #promotedGalleryWrapper .sqs-gallery-block-slideshow .meta .meta-description p > em > strong, .has-promoted-gallery .promoted-gallery-wrapper .sqs-gallery-block-slideshow .meta .meta-description p > em > strong {
            display: block;
            font-family: "proxima-nova", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-weight: 400;
            font-size: 48px;
            letter-spacing: 0px;
            text-transform: none;
            line-height: 1em;
            font-family: "proxima-nova";
            font-size: 0px;
            line-height: .9em;
            text-transform: uppercase;
            letter-spacing: 4px;
            font-weight: 700;
            font-style: normal;
            color: #000
        }

        .has-promoted-gallery #promotedGalleryWrapper .sqs-gallery-block-slideshow .meta .meta-description p > em > strong, .has-promoted-gallery .promoted-gallery-wrapper .sqs-gallery-block-slideshow .meta .meta-description p > em > strong {
            font-style: italic
        }

        .has-promoted-gallery #promotedGalleryWrapper .sqs-gallery-block-slideshow .meta .meta-description p:last-child > a, .has-promoted-gallery .promoted-gallery-wrapper .sqs-gallery-block-slideshow .meta .meta-description p:last-child > a {
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            font-family: "proxima-nova", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-weight: 700;
            font-size: 16px;
            letter-spacing: 1px;
            font-family: "proxima-nova";
            font-size: 15px;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: 600;
            font-style: normal;
            text-decoration: none;
            padding: 1em 1.75em;
            display: inline-block;
            line-height: 1em;
            margin: 10px auto;
            color: #fff
        }

        .has-promoted-gallery #promotedGalleryWrapper .sqs-gallery-block-slideshow .meta .meta-description p:last-child > a, .has-promoted-gallery .promoted-gallery-wrapper .sqs-gallery-block-slideshow .meta .meta-description p:last-child > a {
            background-color: #36b3a8;
            -webkit-transition: background-color .1s 0s ease-in-out, color .1s 0s ease-in-out;
            -moz-transition: background-color .1s 0s ease-in-out, color .1s 0s ease-in-out;
            -ms-transition: background-color .1s 0s ease-in-out, color .1s 0s ease-in-out;
            -o-transition: background-color .1s 0s ease-in-out, color .1s 0s ease-in-out;
            transition: background-color .1s 0s ease-in-out, color .1s 0s ease-in-out
        }

        .has-promoted-gallery #promotedGalleryWrapper .sqs-gallery-block-slideshow .meta .meta-description p:last-child > a:hover, .has-promoted-gallery .promoted-gallery-wrapper .sqs-gallery-block-slideshow .meta .meta-description p:last-child > a:hover {
            background-color: rgba(54, 179, 168, .8)
        }

        .has-promoted-gallery #promotedGalleryWrapper .sqs-gallery-block-slideshow .meta .meta-description p:empty, .has-promoted-gallery .promoted-gallery-wrapper .sqs-gallery-block-slideshow .meta .meta-description p:empty {
            display: none
        }

        .transparent-header.has-promoted-gallery #promotedGalleryWrapper .sqs-gallery-block-slideshow .meta, .transparent-header.has-promoted-gallery .promoted-gallery-wrapper .sqs-gallery-block-slideshow .meta {
            padding-top: 25px
        }

        .collection-type-index.transparent-header.has-promoted-gallery .index-section:not(:first-of-type) #promotedGalleryWrapper .sqs-gallery-block-slideshow .meta, .collection-type-index.transparent-header.has-promoted-gallery .index-section:not(:first-of-type) .promoted-gallery-wrapper .sqs-gallery-block-slideshow .meta {
            padding-top: 0
        }

        .has-promoted-gallery #promotedGalleryWrapper .sqs-gallery-block-slideshow .meta, .has-promoted-gallery .promoted-gallery-wrapper .sqs-gallery-block-slideshow .meta {
            max-width: 100% !important;
            width: 1084px !important;
            bottom: auto
        }

        .sqs-featured-posts-gallery .title-desc-wrapper {
            max-width: 100% !important;
            width: 1084px !important;
            text-align: center
        }

        #promotedGalleryWrapper, .promoted-gallery-wrapper, .banner-thumbnail-wrapper, .sqs-featured-posts-gallery {
            background-color: #173140;
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased
        }

        #promotedGalleryWrapper .color-overlay, .promoted-gallery-wrapper .color-overlay, .banner-thumbnail-wrapper .color-overlay, .sqs-featured-posts-gallery .color-overlay {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background-color: rgba(23, 49, 64, .5);
            z-index: 99
        }

        .collection-type-blog .no-main-image .color-overlay {
            background-color: #173140
        }

        .banner-thumbnail-wrapper {
            position: relative;
            overflow: hidden;
            min-height: 320px;
            width: 100%
        }

        .view-list .banner-thumbnail-wrapper, .collection-type-page .banner-thumbnail-wrapper, .collection-type-index .banner-thumbnail-wrapper {
            min-height: 0;
            padding: 130px 0
        }

        .transparent-header.view-list .banner-thumbnail-wrapper, .transparent-header.collection-type-page .banner-thumbnail-wrapper {
            padding: 180px 0 155px
        }

        .collection-type-index.transparent-header.view-list .index-section:not(:first-of-type) .banner-thumbnail-wrapper, .collection-type-index.transparent-header.collection-type-page .index-section:not(:first-of-type) .banner-thumbnail-wrapper {
            padding: 130px 0
        }

        #thumbnail {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            -webkit-animation: feature-bg-anim .6s ease-in-out;
            animation: feature-bg-anim .6s ease-in-out
        }

        .desc-wrapper {
            -webkit-animation: feature-text-anim .75s ease-in-out;
            animation: feature-text-anim .75s ease-in-out;
            z-index: 100;
            position: relative;
            width: 100%;
            max-width: 956px;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            margin: 0 auto;
            padding: 32px;
            text-align: center;
            text-rendering: optimizeLegibility
        }

        .desc-wrapper p {
            font-family: "proxima-nova", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-weight: 400;
            font-size: 18px;
            letter-spacing: 0px;
            line-height: 1.5em;
            font-family: "Helvetica Neue", "Arial", "sans-serif";
            font-size: 48px;
            line-height: 1.1em;
            text-transform: none;
            letter-spacing: 1px;
            font-weight: bold;
            font-style: normal;
            color: #fff;
            margin: 20px auto;
            -webkit-transform: translatez(0)
        }

        .desc-wrapper p a {
            color: #fff;
            border-bottom: 1px solid #fff
        }

        .desc-wrapper p > strong, .desc-wrapper p > em > strong {
            display: block;
            font-family: "proxima-nova", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-weight: 400;
            font-size: 48px;
            letter-spacing: 0px;
            text-transform: none;
            line-height: 1em;
            font-family: "proxima-nova";
            font-size: 0px;
            line-height: .9em;
            text-transform: uppercase;
            letter-spacing: 4px;
            font-weight: 700;
            font-style: normal;
            color: #000
        }

        .desc-wrapper p > em > strong {
            font-style: italic
        }

        .desc-wrapper p:last-child > a {
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            font-family: "proxima-nova", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-weight: 700;
            font-size: 16px;
            letter-spacing: 1px;
            font-family: "proxima-nova";
            font-size: 15px;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: 600;
            font-style: normal;
            text-decoration: none;
            padding: 1em 1.75em;
            background-color: #36b3a8;
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            display: inline-block;
            line-height: 1em;
            margin: 10px 0;
            color: #fff;
            border: none;
            -webkit-transition: background-color .1s 0s ease-in-out, color .1s 0s ease-in-out;
            -moz-transition: background-color .1s 0s ease-in-out, color .1s 0s ease-in-out;
            -ms-transition: background-color .1s 0s ease-in-out, color .1s 0s ease-in-out;
            -o-transition: background-color .1s 0s ease-in-out, color .1s 0s ease-in-out;
            transition: background-color .1s 0s ease-in-out, color .1s 0s ease-in-out
        }

        .desc-wrapper p:last-child > a:hover {
            background-color: rgba(54, 179, 168, .8)
        }

        .desc-wrapper p:last-child > a + a {
            margin-left: 1em
        }

        .desc-wrapper p:empty {
            display: none
        }

        body:not(.collection-type-gallery).banner-button-style-outline .desc-wrapper p:last-child > a, body:not(.collection-type-gallery).banner-button-style-outline.has-promoted-gallery #promotedGalleryWrapper .sqs-gallery-block-slideshow .meta-description p:last-child > a, body:not(.collection-type-gallery).banner-button-style-outline.has-promoted-gallery .promoted-gallery-wrapper .sqs-gallery-block-slideshow .meta-description p:last-child > a {
            background-color: transparent;
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            border: 2px solid #36b3a8 !important;
            color: #36b3a8
        }

        body:not(.collection-type-gallery).banner-button-style-outline .desc-wrapper p:last-child > a:hover, body:not(.collection-type-gallery).banner-button-style-outline.has-promoted-gallery #promotedGalleryWrapper .sqs-gallery-block-slideshow .meta-description p:last-child > a:hover, body:not(.collection-type-gallery).banner-button-style-outline.has-promoted-gallery .promoted-gallery-wrapper .sqs-gallery-block-slideshow .meta-description p:last-child > a:hover {
            background-color: #36b3a8;
            color: #181818;
            color: #efefef
        }

        body:not(.collection-type-gallery).banner-button-style-raised .desc-wrapper p:last-child > a, body:not(.collection-type-gallery).banner-button-style-raised.has-promoted-gallery #promotedGalleryWrapper .sqs-gallery-block-slideshow .meta-description p:last-child > a, body:not(.collection-type-gallery).banner-button-style-raised.has-promoted-gallery .promoted-gallery-wrapper .sqs-gallery-block-slideshow .meta-description p:last-child > a {
            -webkit-box-shadow: 0px .2em 0px 0px #2d948b;
            -moz-box-shadow: 0px .2em 0px 0px #2d948b;
            box-shadow: 0px .2em 0px 0px #2d948b
        }

        body:not(.collection-type-gallery).banner-button-style-raised .desc-wrapper p:last-child > a:hover, body:not(.collection-type-gallery).banner-button-style-raised.has-promoted-gallery #promotedGalleryWrapper .sqs-gallery-block-slideshow .meta-description p:last-child > a:hover, body:not(.collection-type-gallery).banner-button-style-raised.has-promoted-gallery .promoted-gallery-wrapper .sqs-gallery-block-slideshow .meta-description p:last-child > a:hover {
            background-color: #3abfb3
        }

        body:not(.collection-type-gallery).banner-button-corner-style-rounded .desc-wrapper p:last-child > a, body:not(.collection-type-gallery).banner-button-corner-style-rounded.has-promoted-gallery #promotedGalleryWrapper .sqs-gallery-block-slideshow .meta-description p:last-child > a, body:not(.collection-type-gallery).banner-button-corner-style-rounded.has-promoted-gallery .promoted-gallery-wrapper .sqs-gallery-block-slideshow .meta-description p:last-child > a {
            -webkit-border-radius: 3px;
            border-radius: 3px
        }

        body:not(.collection-type-gallery).banner-button-corner-style-pill .desc-wrapper p:last-child > a, body:not(.collection-type-gallery).banner-button-corner-style-pill.has-promoted-gallery #promotedGalleryWrapper .sqs-gallery-block-slideshow .meta-description p:last-child > a, body:not(.collection-type-gallery).banner-button-corner-style-pill.has-promoted-gallery .promoted-gallery-wrapper .sqs-gallery-block-slideshow .meta-description p:last-child > a {
            -webkit-border-radius: 300px;
            border-radius: 300px
        }

        #headerNav nav a, #sidecarNav nav a, #headerNav nav a:visited, #sidecarNav nav a:visited, #headerNav nav label, #sidecarNav nav label {
            font-family: "proxima-nova", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-weight: 600;
            letter-spacing: 1px;
            font-family: "Helvetica Neue", "Arial", "sans-serif";
            font-size: 14px;
            text-transform: uppercase;
            text-decoration: none;
            letter-spacing: 2px;
            font-weight: normal;
            font-style: normal;
            line-height: 1em;
            color: rgba(255, 255, 255, .9)
        }

        #headerNav nav a:hover, #sidecarNav nav a:hover, #headerNav nav a:visited:hover, #sidecarNav nav a:visited:hover, #headerNav nav label:hover, #sidecarNav nav label:hover {
            color: #fff
        }

        #headerNav nav .active > a, #sidecarNav nav .active > a, #headerNav nav .active > a:visited, #sidecarNav nav .active > a:visited, #headerNav nav .active > label, #sidecarNav nav .active > label {
            color: #fff
        }

        #headerNav nav .subnav, #sidecarNav nav .subnav {
            background-color: #c81e1e
        }

        @media only screen and (min-width: 641px) {
            .show-on-scroll-wrapper #header {
                position: fixed !important;
                top: -20px;
                left: 0;
                width: 100%;
                visibility: hidden;
                opacity: 0;
                background-color: #c81e1e;
                -webkit-transform: translate3d(0, 0, 0);
                -moz-transform: translate3d(0, 0, 0);
                -ms-transform: translate3d(0, 0, 0);
                -o-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
                -webkit-transition: opacity .14s ease-in-out, visibility 0s .14s linear, top .14s ease-in-out;
                -moz-transition: opacity .14s ease-in-out, visibility 0s .14s linear, top .14s ease-in-out;
                -ms-transition: opacity .14s ease-in-out, visibility 0s .14s linear, top .14s ease-in-out;
                -o-transition: opacity .14s ease-in-out, visibility 0s .14s linear, top .14s ease-in-out;
                transition: opacity .14s ease-in-out, visibility 0s .14s linear, top .14s ease-in-out
            }

            .show-on-scroll-wrapper.show #header {
                top: 0;
                visibility: visible;
                opacity: 1;
                -webkit-transition: opacity .14s ease-in-out, visibility 0s 0s linear, top .14s ease-in-out;
                -moz-transition: opacity .14s ease-in-out, visibility 0s 0s linear, top .14s ease-in-out;
                -ms-transition: opacity .14s ease-in-out, visibility 0s 0s linear, top .14s ease-in-out;
                -o-transition: opacity .14s ease-in-out, visibility 0s 0s linear, top .14s ease-in-out;
                transition: opacity .14s ease-in-out, visibility 0s 0s linear, top .14s ease-in-out
            }

            body:not(.force-mobile-nav) #headerNav {
                white-space: nowrap
            }

            body:not(.force-mobile-nav) .nav-wrapper {
                position: relative
            }

            body:not(.force-mobile-nav) .nav-wrapper nav > div {
                display: inline-block;
                vertical-align: middle;
                margin: 0
            }

            body:not(.force-mobile-nav) .nav-wrapper nav > div a, body:not(.force-mobile-nav) .nav-wrapper nav > div label {
                -webkit-transition: color .1s 0s ease-in-out;
                -moz-transition: color .1s 0s ease-in-out;
                -ms-transition: color .1s 0s ease-in-out;
                -o-transition: color .1s 0s ease-in-out;
                transition: color .1s 0s ease-in-out
            }

            body:not(.force-mobile-nav) .nav-wrapper nav > div > a, body:not(.force-mobile-nav) .nav-wrapper nav > div label {
                display: block;
                padding: .75em 1em
            }

            body:not(.force-mobile-nav) .nav-wrapper nav > div:last-child > a, body:not(.force-mobile-nav) .nav-wrapper nav > div:last-child label {
                padding-right: 0
            }

            body:not(.force-mobile-nav) .nav-wrapper#headerNav {
                text-align: right
            }

            body:not(.force-mobile-nav) #secondaryNavWrapper.nav-wrapper .folder .subnav {
                top: auto;
                bottom: 100%;
                -webkit-transform-origin: 0 100%;
                -moz-transform-origin: 0 100%;
                -ms-transform-origin: 0 100%;
                -o-transform-origin: 0 100%;
                transform-origin: 0 100%
            }

            html:not(.touch-styles) body:not(.force-mobile-nav) .nav-wrapper .folder .subnav {
                text-align: left;
                padding: 1em 0;
                display: inline-block;
                position: absolute;
                top: 100%;
                left: -.5em;
                z-index: 1000;
                font-size: 14px;
                -moz-box-sizing: border-box;
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
                white-space: nowrap;
                -webkit-transform: scale(1, 0);
                -moz-transform: scale(1, 0);
                -ms-transform: scale(1, 0);
                -o-transform: scale(1, 0);
                transform: scale(1, 0);
                -webkit-transform-origin: 0 0;
                -moz-transform-origin: 0 0;
                -ms-transform-origin: 0 0;
                -o-transform-origin: 0 0;
                transform-origin: 0 0;
                -webkit-transition: -webkit-transform .14s 0s ease-in-out;
                -moz-transition: -moz-transform .14s 0s ease-in-out;
                -ms-transition: -ms-transform .14s 0s ease-in-out;
                -o-transition: -o-transform .14s 0s ease-in-out;
                transition: transform .14s 0s ease-in-out
            }

            html:not(.touch-styles) body:not(.force-mobile-nav) .nav-wrapper .folder .subnav > div {
                opacity: 0;
                padding: 0;
                -webkit-transition: opacity .05s 0s ease-in-out;
                -moz-transition: opacity .05s 0s ease-in-out;
                -ms-transition: opacity .05s 0s ease-in-out;
                -o-transition: opacity .05s 0s ease-in-out;
                transition: opacity .05s 0s ease-in-out
            }

            html:not(.touch-styles) body:not(.force-mobile-nav) .nav-wrapper .folder .subnav > div a {
                display: block;
                padding: .5em 1.5em;
                -webkit-transform: translatez(0);
                -moz-transform: translatez(0);
                -ms-transform: translatez(0);
                -o-transform: translatez(0);
                transform: translatez(0)
            }

            html:not(.touch-styles) body:not(.force-mobile-nav) .nav-wrapper .folder .subnav.right {
                left: auto;
                right: -.5em
            }

            html:not(.touch-styles) body:not(.force-mobile-nav) .nav-wrapper .folder:hover .subnav {
                -webkit-transform: scale(1, 1);
                -moz-transform: scale(1, 1);
                -ms-transform: scale(1, 1);
                -o-transform: scale(1, 1);
                transform: scale(1, 1)
            }

            html:not(.touch-styles) body:not(.force-mobile-nav) .nav-wrapper .folder:hover .subnav > div {
                opacity: 1;
                -webkit-transition: opacity .14s .14s ease-in-out;
                -moz-transition: opacity .14s .14s ease-in-out;
                -ms-transition: opacity .14s .14s ease-in-out;
                -o-transition: opacity .14s .14s ease-in-out;
                transition: opacity .14s .14s ease-in-out
            }

            html:not(.touch-styles) body:not(.force-mobile-nav) #siteWrapper .nav-wrapper .folder:last-child .subnav {
                text-align: right;
                right: -1.5em;
                left: auto
            }
        }

        #sidecarNav .folder label:before {
            content: '+';
            padding-right: .25em;
            width: .75em;
            display: inline-block
        }

        #sidecarNav .folder .folder-toggle-box:checked ~ label:before {
            content: '–'
        }

        .touch-styles .folder {
            position: relative
        }

        .touch-styles .folder-toggle-label ~ .subnav {
            height: 0;
            max-height: 0;
            overflow: hidden;
            padding: 0 1.5em 0;
            font-size: 14px;
            text-align: left
        }

        .touch-styles .folder-toggle-label ~ .subnav > div {
            padding: 1em 0 0
        }

        .touch-styles .folder-toggle-box:checked ~ .subnav {
            height: auto;
            max-height: 999px;
            padding: 0 1em 1em
        }

        .touch-styles #header .folder-toggle-label ~ .subnav {
            position: absolute;
            left: 0
        }

        .touch-styles #header .folder:last-child .subnav {
            text-align: right;
            right: -1em;
            left: auto
        }

        .force-mobile-nav #sidecarNav .folder-toggle-label ~ .subnav {
            height: 0;
            max-height: 0;
            overflow: hidden;
            padding: 0 1.5em;
            font-size: 14px
        }

        .force-mobile-nav #sidecarNav .folder-toggle-label ~ .subnav > div {
            padding: .5em 0
        }

        .force-mobile-nav #sidecarNav .folder-toggle-box:checked ~ .subnav {
            height: auto;
            max-height: 999px;
            padding: 0 1em 1em
        }

        .force-mobile-nav #secondaryNavWrapper.nav-wrapper {
            position: relative
        }

        .force-mobile-nav #secondaryNavWrapper.nav-wrapper nav > div {
            display: inline-block;
            vertical-align: middle;
            margin: 0
        }

        .force-mobile-nav #secondaryNavWrapper.nav-wrapper nav > div > a, .force-mobile-nav #secondaryNavWrapper.nav-wrapper nav > div label {
            display: block;
            padding: .75em 1em
        }

        .force-mobile-nav #secondaryNavWrapper.nav-wrapper nav > div:first-child > a, .force-mobile-nav #secondaryNavWrapper.nav-wrapper nav > div:first-child label {
            padding-left: 0
        }

        .force-mobile-nav #secondaryNavWrapper.nav-wrapper .folder .subnav {
            display: inline-block;
            position: absolute;
            top: auto;
            bottom: 100%;
            left: -.5em;
            z-index: 1000;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            white-space: nowrap;
            -webkit-transform-origin: 0 100%;
            -moz-transform-origin: 0 100%;
            -ms-transform-origin: 0 100%;
            -o-transform-origin: 0 100%;
            transform-origin: 0 100%;
            text-align: left;
            padding: 1em 0;
            -webkit-transform: scale(1, 0);
            -moz-transform: scale(1, 0);
            -ms-transform: scale(1, 0);
            -o-transform: scale(1, 0);
            transform: scale(1, 0);
            -webkit-transition: -webkit-transform .14s 0s ease-in-out;
            -moz-transition: -moz-transform .14s 0s ease-in-out;
            -ms-transition: -ms-transform .14s 0s ease-in-out;
            -o-transition: -o-transform .14s 0s ease-in-out;
            transition: transform .14s 0s ease-in-out
        }

        .force-mobile-nav #secondaryNavWrapper.nav-wrapper .folder .subnav > div {
            opacity: 0;
            padding: 0;
            -webkit-transition: opacity .05s 0s ease-in-out;
            -moz-transition: opacity .05s 0s ease-in-out;
            -ms-transition: opacity .05s 0s ease-in-out;
            -o-transition: opacity .05s 0s ease-in-out;
            transition: opacity .05s 0s ease-in-out
        }

        .force-mobile-nav #secondaryNavWrapper.nav-wrapper .folder .subnav > div a {
            display: block;
            padding: .5em 1.5em;
            -webkit-transform: translatez(0);
            -moz-transform: translatez(0);
            -ms-transform: translatez(0);
            -o-transform: translatez(0);
            transform: translatez(0)
        }

        .force-mobile-nav #secondaryNavWrapper.nav-wrapper .folder:last-child .subnav {
            text-align: right;
            right: -.5em;
            left: auto
        }

        .force-mobile-nav #secondaryNavWrapper.nav-wrapper .folder:hover .subnav {
            -webkit-transform: scale(1, 1);
            -moz-transform: scale(1, 1);
            -ms-transform: scale(1, 1);
            -o-transform: scale(1, 1);
            transform: scale(1, 1)
        }

        .force-mobile-nav #secondaryNavWrapper.nav-wrapper .folder:hover .subnav > div {
            opacity: 1;
            -webkit-transition: opacity .14s .14s ease-in-out;
            -moz-transition: opacity .14s .14s ease-in-out;
            -ms-transition: opacity .14s .14s ease-in-out;
            -o-transition: opacity .14s .14s ease-in-out;
            transition: opacity .14s .14s ease-in-out
        }

        .folder {
            position: relative
        }

        .folder-toggle-label {
            cursor: pointer
        }

        #mobileNavToggle:checked ~ .body-overlay {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 9999;
            cursor: e-resize;
            -webkit-transform: translatex(-260px) translatez(0);
            -moz-transform: translatex(-260px) translatez(0);
            -ms-transform: translatex(-260px) translatez(0);
            -o-transform: translatex(-260px) translatez(0);
            transform: translatex(-260px) translatez(0)
        }

        #sidecarNav {
            position: fixed;
            width: 260px;
            z-index: -1;
            top: 0;
            right: 0;
            bottom: 0;
            height: 100%;
            line-height: 1em;
            text-align: left;
            overflow: auto;
            visibility: hidden;
            background-color: #c81e1e;
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-transition: height 0s .14s linear, visibility 0s .14s linear;
            -moz-transition: height 0s .14s linear, visibility 0s .14s linear;
            -ms-transition: height 0s .14s linear, visibility 0s .14s linear;
            -o-transition: height 0s .14s linear, visibility 0s .14s linear;
            transition: height 0s .14s linear, visibility 0s .14s linear
        }

        #sidecarNav nav {
            padding: 24px 36px 72px
        }

        #sidecarNav nav div {
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box
        }

        #sidecarNav nav div a, #sidecarNav nav div label {
            display: block;
            padding: .75em 0
        }

        #sidecarNav nav div .subnav > div a {
            padding: 0 0 .5em
        }

        #sidecarNav nav div .subnav > div:last-child a {
            padding-bottom: 1em
        }

        .force-mobile-nav #header #headerNav {
            display: none
        }

        .force-mobile-nav #sidecarNav .site-title {
            vertical-align: middle
        }

        .force-mobile-nav .mobile-nav-toggle-label {
            display: none;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            z-index: 100;
            width: 10%;
            position: absolute;
            z-index: 1002;
            top: 50%;
            right: 20px;
            margin-top: -8px;
            padding: 0;
            vertical-align: middle;
            line-height: 16px;
            text-align: right;
            cursor: pointer;
            user-select: none;
            color: rgba(255, 255, 255, .9);
            width: 22px;
            height: 22px
        }

        .force-mobile-nav .mobile-nav-toggle-label .top-bar, .force-mobile-nav .mobile-nav-toggle-label .middle-bar, .force-mobile-nav .mobile-nav-toggle-label .bottom-bar {
            width: 22px;
            height: 2px;
            background-color: #fff;
            -webkit-transition: -webkit-transform .1s 0s ease-in-out, top .1s .1s ease-in-out;
            -moz-transition: -moz-transform .1s 0s ease-in-out, top .1s .1s ease-in-out;
            -ms-transition: -ms-transform .1s 0s ease-in-out, top .1s .1s ease-in-out;
            -o-transition: -o-transform .1s 0s ease-in-out, top .1s .1s ease-in-out;
            transition: transform .1s 0s ease-in-out, top .1s .1s ease-in-out;
            -webkit-transform-origin: 50% 50%;
            -moz-transform-origin: 50% 50%;
            -ms-transform-origin: 50% 50%;
            -o-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
            position: absolute;
            top: 0;
            right: 0
        }

        .force-mobile-nav .mobile-nav-toggle-label .middle-bar {
            -webkit-transition: opacity 0s .15s linear;
            -moz-transition: opacity 0s .15s linear;
            -ms-transition: opacity 0s .15s linear;
            -o-transition: opacity 0s .15s linear;
            transition: opacity 0s .15s linear;
            top: 7px
        }

        .force-mobile-nav .mobile-nav-toggle-label .bottom-bar {
            top: 14px
        }

        .force-mobile-nav #mainNavWrapper {
            display: block;
            position: fixed;
            width: 260px;
            z-index: -1;
            top: 0;
            right: 0;
            bottom: 0;
            height: 100%;
            line-height: 1em;
            text-align: left;
            overflow: auto;
            background-color: #c81e1e;
            -webkit-overflow-scrolling: touch;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-transform: translate3d(260px, 0, 0);
            -moz-transform: translate3d(260px, 0, 0);
            -ms-transform: translate3d(260px, 0, 0);
            -o-transform: translate3d(260px, 0, 0);
            transform: translate3d(260px, 0, 0);
            -webkit-transition: -webkit-transform 0s 0s ease-in-out;
            -moz-transition: -moz-transform 0s 0s ease-in-out;
            -ms-transition: -ms-transform 0s 0s ease-in-out;
            -o-transition: -o-transform 0s 0s ease-in-out;
            transition: transform 0s 0s ease-in-out
        }

        .force-mobile-nav #mainNavWrapper nav {
            padding: 32px 40px;
            display: none
        }

        .force-mobile-nav #mainNavWrapper nav div {
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box
        }

        .force-mobile-nav #mainNavWrapper nav div a, .force-mobile-nav #mainNavWrapper nav div label {
            display: block;
            padding: .75em 0
        }

        .force-mobile-nav #mainNavWrapper nav div .subnav > div a {
            padding: 0 0 .5em
        }

        .force-mobile-nav #mainNavWrapper nav div .subnav > div:last-child a {
            padding-bottom: 1em
        }

        .force-mobile-nav #siteWrapper {
            width: 100%;
            -webkit-transition: -webkit-transform .2s ease-in-out;
            -moz-transition: -moz-transform .2s ease-in-out;
            -ms-transition: -ms-transform .2s ease-in-out;
            -o-transition: -o-transform .2s ease-in-out;
            transition: transform .2s ease-in-out
        }

        .force-mobile-nav #mobileNavToggle:checked ~ #siteWrapper {
            position: fixed;
            -webkit-transform: translatex(-260px);
            -webkit-transform: translate3d(-260px, 0, 0);
            -moz-transform: translatex(-260px) translatez(0);
            -moz-transform: translate3d(-260px, 0, 0);
            -ms-transform: translatex(-260px) translatez(0);
            -ms-transform: translate3d(-260px, 0, 0);
            -o-transform: translatex(-260px) translatez(0);
            -o-transform: translate3d(-260px, 0, 0);
            transform: translatex(-260px) translatez(0);
            transform: translate3d(-260px, 0, 0)
        }

        .force-mobile-nav #mobileNavToggle:checked ~ #siteWrapper .mobile-nav-toggle-label .top-bar, .force-mobile-nav #mobileNavToggle:checked ~ #siteWrapper .mobile-nav-toggle-label .bottom-bar {
            -webkit-transition: top .1s .1s ease-in-out, -webkit-transform .1s .2s ease-in-out;
            -moz-transition: top .1s .1s ease-in-out, -moz-transform .1s .2s ease-in-out;
            -ms-transition: top .1s .1s ease-in-out, -ms-transform .1s .2s ease-in-out;
            -o-transition: top .1s .1s ease-in-out, -o-transform .1s .2s ease-in-out;
            transition: top .1s .1s ease-in-out, transform .1s .2s ease-in-out
        }

        .force-mobile-nav #mobileNavToggle:checked ~ #siteWrapper .mobile-nav-toggle-label .top-bar {
            -webkit-transform: rotate(45deg);
            -moz-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            -o-transform: rotate(45deg);
            transform: rotate(45deg);
            top: 7px
        }

        .force-mobile-nav #mobileNavToggle:checked ~ #siteWrapper .mobile-nav-toggle-label .middle-bar {
            opacity: 0
        }

        .force-mobile-nav #mobileNavToggle:checked ~ #siteWrapper .mobile-nav-toggle-label .bottom-bar {
            -webkit-transform: rotate(-45deg);
            -moz-transform: rotate(-45deg);
            -ms-transform: rotate(-45deg);
            -o-transform: rotate(-45deg);
            transform: rotate(-45deg);
            top: 7px
        }

        .force-mobile-nav #mobileNavToggle:checked ~ #sidecarNav {
            height: 100%;
            visibility: visible;
            -webkit-transition: height 0s .14s linear, visibility 0s 0s linear;
            -moz-transition: height 0s .14s linear, visibility 0s 0s linear;
            -ms-transition: height 0s .14s linear, visibility 0s 0s linear;
            -o-transition: height 0s .14s linear, visibility 0s 0s linear;
            transition: height 0s .14s linear, visibility 0s 0s linear
        }

        .force-mobile-nav.enable-nav-button #sidecarNav nav > div:not(.folder):last-child a {
            display: inline-block;
            margin: 1em 0 0 0;
            line-height: 1;
            padding: 1em 1.5em
        }

        .force-mobile-nav .folder-toggle-box:checked ~ .subnav {
            padding: .25em 0 .5em
        }

        @media only screen and (min-width: 641px) {
            .sqs-style-mode.dialog-open.force-mobile-nav #mobileNavToggle:checked ~ #siteWrapper {
                -webkit-transform: translate3d(-480px, 0, 0);
                -moz-transform: translate3d(-480px, 0, 0);
                -ms-transform: translate3d(-480px, 0, 0);
                -o-transform: translate3d(-480px, 0, 0);
                transform: translate3d(-480px, 0, 0)
            }
        }

        .mobile-nav-toggle-label {
            display: none
        }

        .enable-nav-button #headerNav nav > div:not(.folder):last-child a, .enable-nav-button #sidecarNav nav > div:not(.folder):last-child a {
            font-family: "proxima-nova", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-weight: 700;
            letter-spacing: 1px;
            font-family: "proxima-nova";
            text-transform: uppercase;
            text-decoration: none;
            letter-spacing: 2px;
            font-weight: 600;
            font-style: normal;
            margin-left: 1em;
            padding: 1em 1.5em !important;
            display: block;
            background-color: #fff;
            -moz-osx-font-smoothing: auto;
            -webkit-font-smoothing: subpixel-antialiased;
            color: #fff;
            -webkit-transition: background-color .1s 0s ease-in-out, color .1s 0s ease-in-out;
            -moz-transition: background-color .1s 0s ease-in-out, color .1s 0s ease-in-out;
            -ms-transition: background-color .1s 0s ease-in-out, color .1s 0s ease-in-out;
            -o-transition: background-color .1s 0s ease-in-out, color .1s 0s ease-in-out;
            transition: background-color .1s 0s ease-in-out, color .1s 0s ease-in-out
        }

        .enable-nav-button #headerNav nav > div:not(.folder):last-child a:hover, .enable-nav-button #sidecarNav nav > div:not(.folder):last-child a:hover {
            background-color: rgba(255, 255, 255, .8)
        }

        .nav-button-style-outline.enable-nav-button #headerNav nav > div:not(.folder):last-child a, .nav-button-style-outline.enable-nav-button #sidecarNav nav > div:not(.folder):last-child a {
            background-color: transparent;
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            border: 2px solid #fff;
            color: #fff
        }

        .nav-button-style-outline.enable-nav-button #headerNav nav > div:not(.folder):last-child a:hover, .nav-button-style-outline.enable-nav-button #sidecarNav nav > div:not(.folder):last-child a:hover {
            background-color: #fff;
            color: #181818
        }

        .nav-button-style-raised.enable-nav-button #headerNav nav > div:not(.folder):last-child a, .nav-button-style-raised.enable-nav-button #sidecarNav nav > div:not(.folder):last-child a {
            -webkit-box-shadow: 0px .2em 0px 0px #ebebeb;
            -moz-box-shadow: 0px .2em 0px 0px #ebebeb;
            box-shadow: 0px .2em 0px 0px #ebebeb
        }

        .nav-button-style-raised.enable-nav-button #headerNav nav > div:not(.folder):last-child a:hover, .nav-button-style-raised.enable-nav-button #sidecarNav nav > div:not(.folder):last-child a:hover {
            background-color: #fff
        }

        .nav-button-corner-style-rounded.enable-nav-button #headerNav nav > div:not(.folder):last-child a, .nav-button-corner-style-rounded.enable-nav-button #sidecarNav nav > div:not(.folder):last-child a {
            -webkit-border-radius: 3px;
            border-radius: 3px
        }

        .nav-button-corner-style-pill.enable-nav-button #headerNav nav > div:not(.folder):last-child a, .nav-button-corner-style-pill.enable-nav-button #sidecarNav nav > div:not(.folder):last-child a {
            -webkit-border-radius: 300px;
            border-radius: 300px
        }

        .back-to-top-nav {
            display: none
        }

        #secondaryNavWrapper {
            padding: 0 0 1.5em;
            z-index: 3;
            position: relative;
            line-height: 1.25em;
            right: auto
        }

        #secondaryNavWrapper nav > div:first-child > a, #secondaryNavWrapper nav > div:first-child label {
            padding-left: 0
        }

        #siteInfo {
            font-family: "proxima-nova", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-weight: 600;
            letter-spacing: 1px;
            font-family: "proxima-nova";
            font-size: 14px;
            text-transform: uppercase;
            text-decoration: none;
            letter-spacing: 2px;
            font-weight: 400;
            font-style: normal;
            color: rgba(255, 255, 255, .8)
        }

        #siteInfo a, #siteInfo a:visited {
            color: rgba(255, 255, 255, .8)
        }

        .site-phone, .site-email {
            white-space: nowrap
        }

        .site-address + .site-phone, .site-address + .site-email, .site-phone + .site-email {
            margin-left: 1em
        }

        .center-navigation--info #secondaryNavWrapper {
            text-align: center;
            left: auto
        }

        .center-navigation--info #siteInfo {
            text-align: center
        }

        .hide-site-info #siteInfo {
            display: none
        }

        #footerBlocks:not(.empty) {
            margin-top: 1.5em
        }

        .folder-nav-toggle-label, .category-nav-toggle-label {
            display: none
        }

        .sqs-simple-like {
            line-height: inherit
        }

        .sqs-simple-like .like-count {
            margin-right: 1.2em
        }

        .sqs-simple-like .like-count:before {
            font-family: 'squarespace-ui-font';
            font-style: normal;
            speak: none;
            font-weight: normal;
            -webkit-font-smoothing: antialiased;
            content: "\e012";
            text-align: center;
            display: inline-block;
            vertical-align: middle
        }

        .sqs-simple-like .like-count:before {
            font-size: 16px;
            width: 16px;
            height: 16px;
            line-height: 16px
        }

        .sqs-simple-like .like-count:before {
            margin-right: .2em;
            position: relative;
            top: .13em;
            font-size: 1.2em;
            width: auto;
            height: auto;
            line-height: inherit;
            text-align: left;
            vertical-align: initial
        }

        .sqs-simple-like .like-icon {
            display: none
        }

        .ss-social-button:before {
            font-family: 'squarespace-ui-font';
            font-style: normal;
            speak: none;
            font-weight: normal;
            -webkit-font-smoothing: antialiased;
            content: "\e02b";
            text-align: center;
            display: inline-block;
            vertical-align: middle
        }

        .ss-social-button:before {
            font-size: 16px;
            width: 16px;
            height: 16px;
            line-height: 16px
        }

        .ss-social-button:before {
            margin-right: .4em;
            font-size: .85em;
            width: auto;
            height: auto;
            line-height: inherit;
            text-align: left;
            vertical-align: initial
        }

        .ss-social-button div {
            display: inline-block
        }

        .ss-social-button-icon {
            display: none !important
        }

        #indexList figure {
            width: 100%
        }

        #indexList figure a {
            display: block
        }

        #indexList figure img {
            max-width: 100%
        }

        .embed-block iframe, .embed-block img {
            max-width: 100%
        }

        .sqs-block.image-block .image-caption-wrapper p {
            font-size: .875em;
            line-height: 1.25em
        }

        html.touch .squarespace-comments .comments-content .comment-list .comment .comment-header .controls .squarespace-comment-buttons .comment-control {
            opacity: 1
        }

        #productList .product .product-title, .no-touch .product-list-titles-overlay #productList .product .product-title {
            font-size: 1.25em;
            line-height: 1.25em;
            margin-bottom: .75em
        }

        #productList .product .product-price, .no-touch .product-list-titles-overlay #productList .product .product-price {
            font-size: 1em;
            line-height: 1.25em;
            margin-top: .5em;
            margin-bottom: .75em
        }

        .collection-type-gallery.full-width-gallery #page {
            max-width: 100%;
            padding: 32px
        }

        .banner-thumbnail-wrapper.sqs-frontend-edit-wrapper.sqs-frontend-outline {
            outline-offset: 0px
        }

        .banner-thumbnail-wrapper .sqs-frontend-edit {
            top: auto !important;
            bottom: 1px !important;
            right: 1px
        }

        .sqs-layout:not(.sqs-editing) > .sqs-row:last-child > [class*=sqs-col] > .sqs-block:last-child {
            padding-bottom: 0
        }

        .sqs-layout:not(.sqs-editing) > .sqs-row:last-child > [class*=sqs-col]:first-child > .sqs-block:last-child {
            padding-bottom: 0
        }

        .sqs-layout:not(.sqs-editing) > .sqs-row:last-child > [class*=sqs-col]:last-child > .sqs-block:last-child {
            padding-bottom: 0
        }

        .has-promoted-gallery #promotedGalleryWrapper .reduce-text-size .meta .meta-description p, .has-promoted-gallery .promoted-gallery-wrapper .reduce-text-size .meta .meta-description p {
            letter-spacing: 2px
        }

        .has-promoted-gallery #promotedGalleryWrapper .reduce-text-size .meta .meta-description p > strong, .has-promoted-gallery .promoted-gallery-wrapper .reduce-text-size .meta .meta-description p > strong, .has-promoted-gallery #promotedGalleryWrapper .reduce-text-size .meta .meta-description p > em > strong, .has-promoted-gallery .promoted-gallery-wrapper .reduce-text-size .meta .meta-description p > em > strong {
            letter-spacing: 2px
        }

        .has-promoted-gallery #promotedGalleryWrapper .reduce-text-size .meta .meta-description p:last-child > a, .has-promoted-gallery .promoted-gallery-wrapper .reduce-text-size .meta .meta-description p:last-child > a {
            letter-spacing: 2px
        }

        .sqs-block-summary-v2 .summary-title, .sqs-block-summary-v2 .summary-heading {
            font-family: "proxima-nova", "Helvetica Neue", Helvetica, Arial, sans-serif;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 400;
            font-style: normal;
            color: #666
        }

        .sqs-block-summary-v2 .summary-title a, .sqs-block-summary-v2 .summary-heading a, .sqs-block-summary-v2 .summary-title a:link, .sqs-block-summary-v2 .summary-heading a:link, .sqs-block-summary-v2 .summary-title a:visited, .sqs-block-summary-v2 .summary-heading a:visited {
            color: #666
        }

        .sqs-block-summary-v2 .summary-title a:hover, .sqs-block-summary-v2 .summary-heading a:hover, .sqs-block-summary-v2 .summary-title a:link:hover, .sqs-block-summary-v2 .summary-heading a:link:hover, .sqs-block-summary-v2 .summary-title a:visited:hover, .sqs-block-summary-v2 .summary-heading a:visited:hover {
            color: #bc3443
        }

        .sqs-block-summary-v2 a, .sqs-block-summary-v2 a:link, .sqs-block-summary-v2 a:visited {
            color: #bc3443
        }

        .sqs-block-summary-v2 .summary-metadata-item {
            color: rgba(26, 26, 26, .4)
        }

        .sqs-block-summary-v2 .summary-metadata-item a, .sqs-block-summary-v2 .summary-metadata-item a:link, .sqs-block-summary-v2 .summary-metadata-item a:visited {
            color: rgba(26, 26, 26, .4)
        }

        .sqs-block-summary-v2 .summary-metadata-item a:hover, .sqs-block-summary-v2 .summary-metadata-item a:link:hover, .sqs-block-summary-v2 .summary-metadata-item a:visited:hover {
            color: #bc3443
        }

        #preFooter nav:not(.social-icons-style-border) a, #footer nav:not(.social-icons-style-border) a, #preFooter nav:not(.social-icons-style-border) a:visited, #footer nav:not(.social-icons-style-border) a:visited {
            border-bottom: none
        }

        #preFooter nav.sqs-svg-icon--list, #footer nav.sqs-svg-icon--list {
            text-decoration: none !important
        }

        #rightSidebar hr {
            margin: initial
        }

        .view-list .filter-heading {
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            max-width: 1020px;
            margin: 0 auto -32px;
            padding: 32px 32px 0
        }

        .view-list .filter-heading span:after {
            content: ' D7';
            padding-left: 1em
        }

        .view-list .filter-heading a {
            font-family: "proxima-nova", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-weight: 600;
            letter-spacing: 1px;
            font-family: "Helvetica Neue", "Arial", "sans-serif";
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: normal;
            font-style: normal;
            color: #bc3443;
            text-decoration: none;
            padding: .5em 0;
            border-bottom: 2px solid #bc3443
        }

        .view-list:not(.collection-type-blog) .filter-heading {
            display: none
        }

        .view-list .entry + .entry {
            margin-top: 128px
        }

        .view-list .excerpt-thumb {
            display: none;
            height: 12em;
            width: 12em;
            margin: 0 1em 2em 0;
            float: left;
            overflow: hidden
        }

        .view-list .excerpt-thumb a {
            display: block;
            height: 100%
        }

        .view-list .p-summary p:first-child {
            margin-top: 0
        }

        .view-item .blog-item article.has-main-image .meta-above-title, .view-item .blog-item article.has-main-image .entry-title, .view-item .blog-item article.has-main-image .entry-title-passthrough {
            display: none
        }

        .view-item .blog-item .entry-footer {
            margin-top: 2em
        }

        .entry-header {
            margin-bottom: 36px
        }

        .entry-dateline, .entry-byline, .entry-morefrom {
            display: inline
        }

        .entry-title {
            margin: 12px 0
        }

        .entry-title-passthrough:after {
            content: " \279D";
            font: normal .9em sans-serif
        }

        .entry-more-link {
            margin-bottom: 0
        }

        .entry-more-link a {
            display: block;
            min-width: 2em;
            min-height: 1em
        }

        .entry-more-link a:before {
            content: "Read More"
        }

        .entry-more-link a:after {
            content: " \279D";
            font: normal .9em sans-serif
        }

        .entry-footer {
            margin-top: 1em;
            line-height: 1.25em
        }

        .entry-tags, .entry-source {
            max-width: 30em
        }

        .entry-source {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis
        }

        .entry-actions .entry-comments, .entry-actions .sqs-disqus-comment-link {
            display: inline-block;
            margin-right: 1em;
            text-decoration: none
        }

        .entry-actions .entry-comments:before, .entry-actions .sqs-disqus-comment-link:before {
            font-family: 'squarespace-ui-font';
            font-style: normal;
            speak: none;
            font-weight: normal;
            -webkit-font-smoothing: antialiased;
            content: "\e010";
            text-align: center;
            display: inline-block;
            vertical-align: middle
        }

        .entry-actions .entry-comments:before, .entry-actions .sqs-disqus-comment-link:before {
            font-size: 16px;
            width: 16px;
            height: 16px;
            line-height: 16px
        }

        .entry-actions .entry-comments:before, .entry-actions .sqs-disqus-comment-link:before {
            margin-right: .2em;
            position: relative;
            top: .12em;
            font-size: 1.2em;
            width: auto;
            height: auto;
            line-height: inherit;
            text-align: left;
            vertical-align: initial
        }

        .pagination {
            margin-top: 6em
        }

        .pagination > div {
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            display: inline-block;
            vertical-align: top;
            width: 50%
        }

        .pagination > div a {
            display: block;
            color: #bc3443
        }

        .pagination .newer {
            padding-right: 1em
        }

        .pagination .older {
            padding-left: 1em;
            text-align: right
        }

        .center-entry-title--meta.hide-blog-sidebar .filter-heading, .center-entry-title--meta.hide-blog-sidebar .entry-header, .center-entry-title--meta.hide-blog-sidebar .entry-footer {
            text-align: center
        }

        .center-entry-title--meta.hide-blog-sidebar .entry-tags {
            margin-left: auto;
            margin-right: auto
        }

        .hide-entry-author:not(.meta-priority-author) .entry-author {
            display: none
        }

        .hide-blog-sidebar.collection-type-blog #page #rightSidebar {
            display: none
        }

        .hide-blog-sidebar.collection-type-blog #page #content {
            width: 100%;
            max-width: 700px;
            display: block;
            margin: 0 auto
        }

        .hide-blog-sidebar.collection-type-blog.view-list .filter-heading {
            max-width: 700px;
            padding-left: 0
        }

        .hide-blog-recents #rightSidebar .recent-posts {
            display: none
        }

        .hide-blog-categories #rightSidebar .blog-categories {
            display: none
        }

        .hide-list-entry-footer.view-list .entry-footer {
            display: none
        }

        .meta-priority-date .meta-above-title .entry-morefrom {
            display: none
        }

        .meta-priority-date .meta-above-title .entry-author {
            display: none
        }

        .meta-priority-date .meta-below-title .entry-dateline {
            display: none
        }

        .meta-priority-date.hide-entry-author .no-categories {
            margin: 0
        }

        .meta-priority-date:not(.hide-entry-author) .meta-below-title .entry-morefrom:before {
            content: ' B7';
            padding: 0 .5em
        }

        .meta-priority-date .sqs-featured-posts-gallery .title-desc-wrapper .post-author, .meta-priority-date .blog-item-wrapper .post-author, .meta-priority-date .recent-posts .post-author {
            display: none
        }

        .meta-priority-date .sqs-featured-posts-gallery .title-desc-wrapper .post-category, .meta-priority-date .blog-item-wrapper .post-category, .meta-priority-date .recent-posts .post-category {
            display: none
        }

        .meta-priority-category .meta-above-title .entry-dateline {
            display: none
        }

        .meta-priority-category .meta-above-title .entry-author {
            display: none
        }

        .meta-priority-category .meta-below-title .entry-morefrom {
            display: none
        }

        .meta-priority-category:not(.hide-entry-author) .meta-below-title .entry-dateline:before {
            content: ' B7';
            padding: 0 .5em
        }

        .meta-priority-category .sqs-featured-posts-gallery .title-desc-wrapper .post-author, .meta-priority-category .blog-item-wrapper .post-author, .meta-priority-category .recent-posts .post-author {
            display: none
        }

        .meta-priority-category .sqs-featured-posts-gallery .title-desc-wrapper .post-date, .meta-priority-category .blog-item-wrapper .post-date, .meta-priority-category .recent-posts .post-date {
            display: none
        }

        .meta-priority-author .meta-above-title .entry-dateline {
            display: none
        }

        .meta-priority-author .meta-above-title .entry-morefrom {
            display: none
        }

        .meta-priority-author .meta-below-title .entry-author {
            display: none
        }

        .meta-priority-author .meta-below-title .entry-morefrom:before {
            content: ' B7';
            padding: 0 .5em
        }

        .meta-priority-author .sqs-featured-posts-gallery .title-desc-wrapper .post-date, .meta-priority-author .blog-item-wrapper .post-date, .meta-priority-author .recent-posts .post-date {
            display: none
        }

        .meta-priority-author .sqs-featured-posts-gallery .title-desc-wrapper .post-category, .meta-priority-author .blog-item-wrapper .post-category, .meta-priority-author .recent-posts .post-category {
            display: none
        }

        .meta-priority-none .meta-above-title .entry-dateline {
            display: none
        }

        .meta-priority-none .meta-above-title .entry-morefrom {
            display: none
        }

        .meta-priority-none .meta-above-title .entry-author {
            display: none
        }

        .meta-priority-none .entry-morefrom:before {
            content: ' B7';
            padding: 0 .5em
        }

        .meta-priority-none:not(.hide-entry-author) .entry-dateline:before {
            content: ' B7';
            padding: 0 .5em
        }

        .meta-priority-none .sqs-featured-posts-gallery .title-desc-wrapper .post-date, .meta-priority-none .blog-item-wrapper .post-date, .meta-priority-none .recent-posts .post-date {
            display: none
        }

        .meta-priority-none .sqs-featured-posts-gallery .title-desc-wrapper .post-category, .meta-priority-none .blog-item-wrapper .post-category, .meta-priority-none .recent-posts .post-category {
            display: none
        }

        .meta-priority-none .sqs-featured-posts-gallery .title-desc-wrapper .post-author, .meta-priority-none .blog-item-wrapper .post-author, .meta-priority-none .recent-posts .post-author {
            display: none
        }

        .collection-type-blog.view-item .banner-thumbnail-wrapper {
            min-height: 0;
            padding: 130px 0
        }

        .collection-type-blog.view-item.transparent-header .banner-thumbnail-wrapper {
            padding: 180px 0 155px
        }

        .blog-item-wrapper {
            display: block;
            z-index: 100;
            position: relative;
            width: 100%;
            max-width: 1084px;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            margin: 0 auto;
            padding: 32px;
            text-align: center;
            text-rendering: optimizeLegibility
        }

        .blog-item-wrapper .title-desc-wrapper {
            -webkit-animation: feature-text-anim .75s ease-in-out;
            animation: feature-text-anim .75s ease-in-out
        }

        .blog-item-wrapper .post-title {
            font-family: "proxima-nova", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-weight: 400;
            font-size: 48px;
            letter-spacing: 0px;
            text-transform: none;
            line-height: 1em;
            font-family: "proxima-nova";
            font-size: 0px;
            line-height: .9em;
            text-transform: uppercase;
            letter-spacing: 4px;
            font-weight: 700;
            font-style: normal;
            -webkit-transform: translatez(0);
            text-decoration: none;
            color: #000
        }

        .blog-item-wrapper .post-date, .blog-item-wrapper .post-author, .blog-item-wrapper .post-category {
            display: block;
            font-family: "proxima-nova", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-weight: 400;
            font-size: 18px;
            letter-spacing: 0px;
            line-height: 1.5em;
            font-family: "Helvetica Neue", "Arial", "sans-serif";
            font-size: 48px;
            line-height: 1.1em;
            text-transform: none;
            letter-spacing: 1px;
            font-weight: bold;
            font-style: normal;
            color: #fff;
            line-height: 1.125em;
            margin-bottom: .75em;
            -webkit-transform: translatez(0)
        }

        .blog-item-wrapper .post-date a, .blog-item-wrapper .post-author a, .blog-item-wrapper .post-category a {
            color: #fff
        }

        .sqs-featured-posts-gallery .arrow.previous-slide:before {
            font-family: 'squarespace-ui-font';
            font-style: normal;
            speak: none;
            font-weight: normal;
            -webkit-font-smoothing: antialiased;
            content: "\e02c";
            text-align: center;
            display: inline-block;
            vertical-align: middle
        }

        .sqs-featured-posts-gallery .arrow.previous-slide:before {
            font-size: 32px;
            width: 32px;
            height: 32px;
            line-height: 32px
        }

        .sqs-featured-posts-gallery .arrow.previous-slide:before {
            font-size: 24px;
            width: 24px;
            height: 24px;
            line-height: 24px
        }

        .sqs-featured-posts-gallery .arrow.next-slide:before {
            font-family: 'squarespace-ui-font';
            font-style: normal;
            speak: none;
            font-weight: normal;
            -webkit-font-smoothing: antialiased;
            content: "\e02d";
            text-align: center;
            display: inline-block;
            vertical-align: middle
        }

        .sqs-featured-posts-gallery .arrow.next-slide:before {
            font-size: 32px;
            width: 32px;
            height: 32px;
            line-height: 32px
        }

        .sqs-featured-posts-gallery .arrow.next-slide:before {
            font-size: 24px;
            width: 24px;
            height: 24px;
            line-height: 24px
        }

        .sqs-featured-posts-gallery .arrow, .sqs-featured-posts-gallery .icons span {
            display: none;
            -moz-user-select: -moz-none;
            -webkit-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        .sqs-featured-posts-gallery .gallery-wrapper {
            position: relative;
            width: 100%
        }

        .sqs-featured-posts-gallery .gallery-wrapper .posts {
            display: block;
            width: 100%;
            height: 600px !important
        }

        .sqs-featured-posts-gallery .gallery-wrapper .posts .post {
            height: 600px !important;
            width: 100%;
            background-color: #173140;
            -webkit-transform: translatez(0);
            -moz-transform: translatez(0);
            -ms-transform: translatez(0);
            -o-transform: translatez(0);
            transform: translatez(0)
        }

        .sqs-featured-posts-gallery .gallery-wrapper .posts .post:not(:first-of-type) {
            opacity: 0
        }

        .sqs-featured-posts-gallery .gallery-wrapper .posts .post:first-of-type img {
            -webkit-animation: feature-bg-anim .6s ease-in-out;
            animation: feature-bg-anim .6s ease-in-out
        }

        .sqs-featured-posts-gallery .gallery-wrapper .posts .post a {
            display: block
        }

        .sqs-featured-posts-gallery.loaded .gallery-wrapper .posts .post {
            opacity: 1
        }

        .sqs-featured-posts-gallery .slides-controls {
            position: relative;
            z-index: 991;
            overflow: hidden;
            cursor: pointer
        }

        .sqs-featured-posts-gallery .circles {
            display: none;
            margin: 20px 0;
            cursor: pointer
        }

        .sqs-featured-posts-gallery .circles.sqs-gallery-controls-disabled {
            display: none
        }

        .sqs-featured-posts-gallery.sqs-featured-posts-gallery-interaction .arrow {
            opacity: 0
        }

        .sqs-featured-posts-gallery.sqs-featured-posts-gallery-interaction.sqs-featured-posts-gallery-hover-slides-left .arrow.previous-slide:not(.sqs-disabled), .sqs-featured-posts-gallery.sqs-featured-posts-gallery-video-iframe .arrow.previous-slide:not(.sqs-disabled) {
            opacity: 1
        }

        .sqs-featured-posts-gallery.sqs-featured-posts-gallery-interaction.sqs-featured-posts-gallery-hover-slides-right .arrow.next-slide:not(.sqs-disabled), .sqs-featured-posts-gallery.sqs-featured-posts-gallery-video-iframe .arrow.next-slide:not(.sqs-disabled) {
            opacity: 1
        }

        .sqs-featured-posts-gallery .title-desc-wrapper {
            position: absolute;
            left: 50%;
            top: 50%;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            padding: 32px 0;
            -webkit-transform: translate(-50%, -45%) !important;
            -moz-transform: translate(-50%, -45%) !important;
            -ms-transform: translate(-50%, -45%) !important;
            -o-transform: translate(-50%, -45%) !important;
            transform: translate(-50%, -45%) !important;
            z-index: 1000;
            opacity: 0;
            -webkit-transition: all .25s ease-in-out .3s;
            -moz-transition: all .25s ease-in-out .3s;
            -ms-transition: all .25s ease-in-out .3s;
            -o-transition: all .25s ease-in-out .3s;
            transition: all .25s ease-in-out .3s;
            text-rendering: optimizeLegibility
        }

        .sqs-featured-posts-gallery .title-desc-wrapper .post-title {
            margin-bottom: .75em;
            -webkit-transform: translatez(0)
        }

        .sqs-featured-posts-gallery .title-desc-wrapper .post-title a {
            font-family: "proxima-nova", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-weight: 400;
            font-size: 48px;
            letter-spacing: 0px;
            text-transform: none;
            line-height: 1em;
            font-family: "proxima-nova";
            font-size: 0px;
            line-height: .9em;
            text-transform: uppercase;
            letter-spacing: 4px;
            font-weight: 700;
            font-style: normal;
            text-decoration: none;
            color: #000;
            padding-left: 4px
        }

        .sqs-featured-posts-gallery .title-desc-wrapper .post-date, .sqs-featured-posts-gallery .title-desc-wrapper .post-author, .sqs-featured-posts-gallery .title-desc-wrapper .post-category {
            display: block;
            font-family: "proxima-nova", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-weight: 400;
            font-size: 18px;
            letter-spacing: 0px;
            line-height: 1.5em;
            font-family: "Helvetica Neue", "Arial", "sans-serif";
            font-size: 48px;
            line-height: 1.1em;
            text-transform: none;
            letter-spacing: 1px;
            font-weight: bold;
            font-style: normal;
            color: #fff;
            line-height: 1.125em;
            margin-bottom: .75em;
            -webkit-transform: translatez(0)
        }

        .sqs-featured-posts-gallery .title-desc-wrapper .post-date a, .sqs-featured-posts-gallery .title-desc-wrapper .post-author a, .sqs-featured-posts-gallery .title-desc-wrapper .post-category a {
            color: #fff
        }

        .sqs-featured-posts-gallery .title-desc-wrapper .post-excerpt {
            font-family: "proxima-nova", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-weight: 400;
            font-size: 18px;
            letter-spacing: 0px;
            line-height: 1.5em;
            font-family: "Helvetica Neue", "Arial", "sans-serif";
            font-size: 48px;
            line-height: 1.1em;
            text-transform: none;
            letter-spacing: 1px;
            font-weight: bold;
            font-style: normal;
            color: #fff;
            margin-bottom: .75em;
            display: none
        }

        .sqs-featured-posts-gallery .title-desc-wrapper .post-excerpt p {
            margin: 0
        }

        .sqs-featured-posts-gallery .title-desc-wrapper .post-excerpt p ~ p {
            margin-top: .75em
        }

        .sqs-featured-posts-gallery .title-desc-wrapper .view-post {
            font-family: "proxima-nova", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-weight: 600;
            letter-spacing: 1px;
            font-family: "Helvetica Neue", "Arial", "sans-serif";
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: normal;
            font-style: normal;
            text-decoration: none;
            display: block;
            -webkit-transform: translatez(0);
            line-height: 1em;
            margin-top: 1.4em
        }

        .sqs-featured-posts-gallery .title-desc-wrapper .view-post:before {
            content: 'View Post';
            display: inline-block;
            font-family: "proxima-nova", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-weight: 400;
            font-size: 18px;
            letter-spacing: 0px;
            line-height: 1.5em;
            font-family: "Helvetica Neue", "Arial", "sans-serif";
            font-size: 48px;
            line-height: 1.1em;
            text-transform: none;
            letter-spacing: 1px;
            font-weight: bold;
            font-style: normal;
            color: #fff;
            line-height: 1.125em;
            vertical-align: middle
        }

        .sqs-featured-posts-gallery .title-desc-wrapper .view-post:after {
            display: inline-block;
            content: '\279D';
            color: #fff;
            font: normal .9em sans-serif;
            margin-left: 6px;
            vertical-align: middle
        }

        .sqs-featured-posts-gallery .loaded .title-desc-wrapper {
            -webkit-transform: translate(-50%, -50%) !important;
            -moz-transform: translate(-50%, -50%) !important;
            -ms-transform: translate(-50%, -50%) !important;
            -o-transform: translate(-50%, -50%) !important;
            transform: translate(-50%, -50%) !important;
            opacity: 1
        }

        .transparent-header .sqs-featured-posts-gallery .gallery-wrapper .posts {
            height: 700px !important
        }

        .transparent-header .sqs-featured-posts-gallery .gallery-wrapper .posts .post {
            height: 100% !important
        }

        .transparent-header .sqs-featured-posts-gallery .title-desc-wrapper {
            padding: 57px 0 32px
        }

        .banner-slideshow-controls-both .sqs-featured-posts-gallery .arrow, .banner-slideshow-controls-arrows .sqs-featured-posts-gallery .arrow {
            display: block;
            position: absolute;
            top: 50%;
            outline: none;
            color: #fff !important;
            z-index: 999;
            font-size: 14px;
            line-height: 40px;
            margin-top: -30px;
            display: inline-block;
            padding: 10px;
            cursor: pointer
        }

        .banner-slideshow-controls-both .sqs-featured-posts-gallery .arrow.previous-slide, .banner-slideshow-controls-arrows .sqs-featured-posts-gallery .arrow.previous-slide {
            left: 0
        }

        .banner-slideshow-controls-both .sqs-featured-posts-gallery .arrow.next-slide, .banner-slideshow-controls-arrows .sqs-featured-posts-gallery .arrow.next-slide {
            right: 0;
            float: right
        }

        .banner-slideshow-controls-both .sqs-featured-posts-gallery .arrow.sqs-disabled, .banner-slideshow-controls-arrows .sqs-featured-posts-gallery .arrow.sqs-disabled {
            opacity: 0
        }

        .collection-type-index #page {
            max-width: 100%;
            padding: 0
        }

        .collection-type-index .page-content {
            max-width: 1020px;
            margin: 0 auto;
            padding: 96px 32px
        }

        .collection-type-index .promoted-gallery-wrapper .sqs-block {
            padding-top: 0;
            padding-bottom: 0
        }

        .index-section.empty .page-content {
            display: none
        }

        @media only screen and (max-width: 1024px) {
            .touch-styles a, .touch-styles label {
                -webkit-tap-highlight-color: rgba(0, 0, 0, 0) !important;
                -moz-tap-highlight-color: rgba(0, 0, 0, 0) !important;
                tap-highlight-color: rgba(0, 0, 0, 0) !important
            }

            .sqs-block-horizontalrule hr {
                margin: 32px 0
            }

            .sqs-featured-posts-gallery .title-desc-wrapper {
                max-width: 90% !important;
                width: 90% !important;
                text-align: center;
                padding: 0 20px
            }

            .sqs-featured-posts-gallery .title-desc-wrapper .post-excerpt {
                max-width: 90%
            }
        }

        @media only screen and (max-device-height: 768px) {
            .collection-type-page.has-promoted-gallery #promotedGalleryWrapper .sqs-gallery-block-slideshow, .collection-type-index.has-promoted-gallery #promotedGalleryWrapper .sqs-gallery-block-slideshow, .collection-type-page.has-promoted-gallery .promoted-gallery-wrapper .sqs-gallery-block-slideshow, .collection-type-index.has-promoted-gallery .promoted-gallery-wrapper .sqs-gallery-block-slideshow {
                height: 600px !important
            }

            .collection-type-page.has-promoted-gallery #promotedGalleryWrapper .sqs-gallery-block-slideshow .sqs-gallery, .collection-type-index.has-promoted-gallery #promotedGalleryWrapper .sqs-gallery-block-slideshow .sqs-gallery, .collection-type-page.has-promoted-gallery .promoted-gallery-wrapper .sqs-gallery-block-slideshow .sqs-gallery, .collection-type-index.has-promoted-gallery .promoted-gallery-wrapper .sqs-gallery-block-slideshow .sqs-gallery {
                height: 600px !important
            }

            .collection-type-page.has-promoted-gallery.transparent-header #promotedGalleryWrapper .sqs-gallery-block-slideshow, .collection-type-index.has-promoted-gallery.transparent-header #promotedGalleryWrapper .sqs-gallery-block-slideshow, .collection-type-page.has-promoted-gallery.transparent-header .promoted-gallery-wrapper .sqs-gallery-block-slideshow, .collection-type-index.has-promoted-gallery.transparent-header .promoted-gallery-wrapper .sqs-gallery-block-slideshow {
                height: 640px !important
            }

            .collection-type-page.has-promoted-gallery.transparent-header #promotedGalleryWrapper .sqs-gallery-block-slideshow .sqs-gallery, .collection-type-index.has-promoted-gallery.transparent-header #promotedGalleryWrapper .sqs-gallery-block-slideshow .sqs-gallery, .collection-type-page.has-promoted-gallery.transparent-header .promoted-gallery-wrapper .sqs-gallery-block-slideshow .sqs-gallery, .collection-type-index.has-promoted-gallery.transparent-header .promoted-gallery-wrapper .sqs-gallery-block-slideshow .sqs-gallery {
                height: 640px !important
            }

            .collection-type-page.has-promoted-gallery.transparent-header #promotedGalleryWrapper .sqs-gallery-block-slideshow .meta .meta-inside, .collection-type-index.has-promoted-gallery.transparent-header #promotedGalleryWrapper .sqs-gallery-block-slideshow .meta .meta-inside, .collection-type-page.has-promoted-gallery.transparent-header .promoted-gallery-wrapper .sqs-gallery-block-slideshow .meta .meta-inside, .collection-type-index.has-promoted-gallery.transparent-header .promoted-gallery-wrapper .sqs-gallery-block-slideshow .meta .meta-inside {
                padding-top: 40px
            }

            .collection-type-page.has-promoted-gallery.transparent-header.collection-type-index .index-section:not(:first-of-type) #promotedGalleryWrapper .sqs-gallery-block-slideshow, .collection-type-index.has-promoted-gallery.transparent-header.collection-type-index .index-section:not(:first-of-type) #promotedGalleryWrapper .sqs-gallery-block-slideshow, .collection-type-page.has-promoted-gallery.transparent-header.collection-type-index .index-section:not(:first-of-type) .promoted-gallery-wrapper .sqs-gallery-block-slideshow, .collection-type-index.has-promoted-gallery.transparent-header.collection-type-index .index-section:not(:first-of-type) .promoted-gallery-wrapper .sqs-gallery-block-slideshow {
                height: 600px !important
            }

            .collection-type-page.has-promoted-gallery.transparent-header.collection-type-index .index-section:not(:first-of-type) #promotedGalleryWrapper .sqs-gallery-block-slideshow .sqs-gallery, .collection-type-index.has-promoted-gallery.transparent-header.collection-type-index .index-section:not(:first-of-type) #promotedGalleryWrapper .sqs-gallery-block-slideshow .sqs-gallery, .collection-type-page.has-promoted-gallery.transparent-header.collection-type-index .index-section:not(:first-of-type) .promoted-gallery-wrapper .sqs-gallery-block-slideshow .sqs-gallery, .collection-type-index.has-promoted-gallery.transparent-header.collection-type-index .index-section:not(:first-of-type) .promoted-gallery-wrapper .sqs-gallery-block-slideshow .sqs-gallery {
                height: 600px !important
            }

            .collection-type-page.has-promoted-gallery.transparent-header.collection-type-index .index-section:not(:first-of-type) #promotedGalleryWrapper .sqs-gallery-block-slideshow .meta .meta-inside, .collection-type-index.has-promoted-gallery.transparent-header.collection-type-index .index-section:not(:first-of-type) #promotedGalleryWrapper .sqs-gallery-block-slideshow .meta .meta-inside, .collection-type-page.has-promoted-gallery.transparent-header.collection-type-index .index-section:not(:first-of-type) .promoted-gallery-wrapper .sqs-gallery-block-slideshow .meta .meta-inside, .collection-type-index.has-promoted-gallery.transparent-header.collection-type-index .index-section:not(:first-of-type) .promoted-gallery-wrapper .sqs-gallery-block-slideshow .meta .meta-inside {
                padding-top: 0
            }

            .sqs-featured-posts-gallery .gallery-wrapper .posts {
                height: 600px !important
            }

            .sqs-featured-posts-gallery .gallery-wrapper .posts .post {
                height: 600px !important
            }

            .transparent-header .sqs-featured-posts-gallery .gallery-wrapper .posts {
                height: 640px !important
            }

            .transparent-header .sqs-featured-posts-gallery .gallery-wrapper .posts .post {
                height: 640px !important
            }

            .transparent-header .sqs-featured-posts-gallery .title-desc-wrapper {
                padding: 60px 20px 20px
            }

            .view-list .banner-thumbnail-wrapper, .collection-type-page .banner-thumbnail-wrapper, .collection-type-blog.view-item .banner-thumbnail-wrapper {
                padding-top: 0;
                padding-bottom: 0
            }

            .view-list .banner-thumbnail-wrapper:not(.has-description), .collection-type-page .banner-thumbnail-wrapper:not(.has-description), .collection-type-blog.view-item .banner-thumbnail-wrapper:not(.has-description) {
                min-height: 120px
            }

            .view-list.transparent-header .banner-thumbnail-wrapper, .collection-type-page.transparent-header .banner-thumbnail-wrapper, .collection-type-blog.view-item.transparent-header .banner-thumbnail-wrapper {
                padding: 60px 0 20px
            }

            .collection-type-index.view-list.transparent-header .index-section:not(:first-of-type) .banner-thumbnail-wrapper {
                padding-top: 0;
                padding-bottom: 0
            }
        }

        @media only screen and (max-device-height: 640px) {
            .collection-type-page.has-promoted-gallery #promotedGalleryWrapper .sqs-gallery-block-slideshow, .collection-type-index.has-promoted-gallery #promotedGalleryWrapper .sqs-gallery-block-slideshow, .collection-type-page.has-promoted-gallery .promoted-gallery-wrapper .sqs-gallery-block-slideshow, .collection-type-index.has-promoted-gallery .promoted-gallery-wrapper .sqs-gallery-block-slideshow {
                height: 300px !important
            }

            .collection-type-page.has-promoted-gallery #promotedGalleryWrapper .sqs-gallery-block-slideshow .sqs-gallery, .collection-type-index.has-promoted-gallery #promotedGalleryWrapper .sqs-gallery-block-slideshow .sqs-gallery, .collection-type-page.has-promoted-gallery .promoted-gallery-wrapper .sqs-gallery-block-slideshow .sqs-gallery, .collection-type-index.has-promoted-gallery .promoted-gallery-wrapper .sqs-gallery-block-slideshow .sqs-gallery {
                height: 300px !important
            }

            .collection-type-page.has-promoted-gallery.transparent-header #promotedGalleryWrapper .sqs-gallery-block-slideshow, .collection-type-index.has-promoted-gallery.transparent-header #promotedGalleryWrapper .sqs-gallery-block-slideshow, .collection-type-page.has-promoted-gallery.transparent-header .promoted-gallery-wrapper .sqs-gallery-block-slideshow, .collection-type-index.has-promoted-gallery.transparent-header .promoted-gallery-wrapper .sqs-gallery-block-slideshow {
                height: 340px !important
            }

            .collection-type-page.has-promoted-gallery.transparent-header #promotedGalleryWrapper .sqs-gallery-block-slideshow .sqs-gallery, .collection-type-index.has-promoted-gallery.transparent-header #promotedGalleryWrapper .sqs-gallery-block-slideshow .sqs-gallery, .collection-type-page.has-promoted-gallery.transparent-header .promoted-gallery-wrapper .sqs-gallery-block-slideshow .sqs-gallery, .collection-type-index.has-promoted-gallery.transparent-header .promoted-gallery-wrapper .sqs-gallery-block-slideshow .sqs-gallery {
                height: 340px !important
            }

            .collection-type-page.has-promoted-gallery.transparent-header.collection-type-index .index-section:not(:first-of-type) #promotedGalleryWrapper .sqs-gallery-block-slideshow, .collection-type-index.has-promoted-gallery.transparent-header.collection-type-index .index-section:not(:first-of-type) #promotedGalleryWrapper .sqs-gallery-block-slideshow, .collection-type-page.has-promoted-gallery.transparent-header.collection-type-index .index-section:not(:first-of-type) .promoted-gallery-wrapper .sqs-gallery-block-slideshow, .collection-type-index.has-promoted-gallery.transparent-header.collection-type-index .index-section:not(:first-of-type) .promoted-gallery-wrapper .sqs-gallery-block-slideshow {
                height: 300px !important
            }

            .collection-type-page.has-promoted-gallery.transparent-header.collection-type-index .index-section:not(:first-of-type) #promotedGalleryWrapper .sqs-gallery-block-slideshow .sqs-gallery, .collection-type-index.has-promoted-gallery.transparent-header.collection-type-index .index-section:not(:first-of-type) #promotedGalleryWrapper .sqs-gallery-block-slideshow .sqs-gallery, .collection-type-page.has-promoted-gallery.transparent-header.collection-type-index .index-section:not(:first-of-type) .promoted-gallery-wrapper .sqs-gallery-block-slideshow .sqs-gallery, .collection-type-index.has-promoted-gallery.transparent-header.collection-type-index .index-section:not(:first-of-type) .promoted-gallery-wrapper .sqs-gallery-block-slideshow .sqs-gallery {
                height: 300px !important
            }

            .sqs-featured-posts-gallery .gallery-wrapper .posts {
                height: 300px !important
            }

            .sqs-featured-posts-gallery .gallery-wrapper .posts .post {
                height: 300px !important
            }

            .transparent-header .sqs-featured-posts-gallery .gallery-wrapper .posts {
                height: 340px !important
            }

            .transparent-header .sqs-featured-posts-gallery .gallery-wrapper .posts .post {
                height: 340px !important
            }

            .view-list .banner-thumbnail-wrapper:not(.has-description), .collection-type-page .banner-thumbnail-wrapper:not(.has-description), .collection-type-blog.view-item .banner-thumbnail-wrapper:not(.has-description) {
                min-height: 80px
            }
        }

        @media only screen and (max-width: 767px) {
            #page {
                padding: 32px
            }

            .collection-type-blog:not(.hide-sidebar) #content, .collection-type-blog:not(.hide-sidebar) #rightSidebar {
                display: block;
                width: 100%
            }

            .collection-type-blog:not(.hide-sidebar) #rightSidebar {
                padding-top: 20px;
                padding-left: 0
            }

            .has-promoted-gallery #promotedGalleryWrapper .sqs-gallery-block-slideshow .meta, .has-promoted-gallery .promoted-gallery-wrapper .sqs-gallery-block-slideshow .meta {
                max-width: 90% !important;
                width: 90% !important
            }

            .has-promoted-gallery #promotedGalleryWrapper .sqs-gallery-block-slideshow .meta .meta-inside, .has-promoted-gallery .promoted-gallery-wrapper .sqs-gallery-block-slideshow .meta .meta-inside {
                padding: 0 20px
            }

            .has-promoted-gallery #promotedGalleryWrapper .sqs-gallery-block-slideshow .meta .meta-inside p, .has-promoted-gallery .promoted-gallery-wrapper .sqs-gallery-block-slideshow .meta .meta-inside p {
                width: 90% !important
            }

            .sqs-featured-posts-gallery .title-desc-wrapper {
                max-width: 90% !important;
                width: 90% !important;
                text-align: center;
                padding: 0 20px
            }

            .sqs-featured-posts-gallery .title-desc-wrapper .post-excerpt {
                max-width: 90%
            }
        }

        @media only screen and (max-device-width: 667px) {
            .back-to-top-nav {
                display: block
            }

            .back-to-top {
                display: inline-block
            }

            .back-to-top a {
                display: block;
                padding: .75em 1em
            }
        }

        @media only screen and (max-width: 640px) {
            .sqs-layout [class*=sqs-col] {
                float: none !important;
                width: auto !important
            }

            .sqs-layout .spacer-block {
                display: none
            }

            .sqs-layout .sqs-row .sqs-block:first-child {
                padding-top: 17px !important
            }

            .sqs-layout .sqs-row .sqs-block:last-child {
                padding-bottom: 17px !important
            }

            .sqs-layout .sqs-row + .sqs-row, .sqs-layout .sqs-row + .sqs-block {
                margin-top: 0 !important
            }

            .sqs-gallery-design-grid-slide {
                width: 50% !important;
                clear: none !important
            }

            #page {
                padding: 40px 20px
            }

            #header {
                padding: 0 20px
            }

            .sqs-block-horizontalrule hr {
                margin: initial
            }

            blockquote {
                padding: .5em 20px
            }

            .quote-block figure {
                padding: 20px
            }

            .entry-header {
                margin-bottom: 12px
            }

            .view-list .filter-heading {
                margin: 0 auto;
                padding: 1em 1em 0
            }

            .view-list .entry + .entry {
                margin-top: 80px
            }

            body:not(.collection-type-gallery) .desc-wrapper p, body:not(.collection-type-gallery).has-promoted-gallery #promotedGalleryWrapper .sqs-gallery-block-slideshow .meta-description p, body:not(.collection-type-gallery).has-promoted-gallery .promoted-gallery-wrapper .sqs-gallery-block-slideshow .meta-description p {
                font-size: 18px;
                margin: 10px auto
            }

            body:not(.collection-type-gallery) .desc-wrapper p > strong, body:not(.collection-type-gallery).has-promoted-gallery #promotedGalleryWrapper .sqs-gallery-block-slideshow .meta-description p > strong, body:not(.collection-type-gallery).has-promoted-gallery .promoted-gallery-wrapper .sqs-gallery-block-slideshow .meta-description p > strong, body:not(.collection-type-gallery) .desc-wrapper p > em > strong, body:not(.collection-type-gallery).has-promoted-gallery #promotedGalleryWrapper .sqs-gallery-block-slideshow .meta-description p > em > strong, body:not(.collection-type-gallery).has-promoted-gallery .promoted-gallery-wrapper .sqs-gallery-block-slideshow .meta-description p > em > strong {
                letter-spacing: 2px
            }

            body:not(.collection-type-gallery) .desc-wrapper p:last-child > a, body:not(.collection-type-gallery).has-promoted-gallery #promotedGalleryWrapper .sqs-gallery-block-slideshow .meta-description p:last-child > a, body:not(.collection-type-gallery).has-promoted-gallery .promoted-gallery-wrapper .sqs-gallery-block-slideshow .meta-description p:last-child > a {
                font-size: 13px;
                margin: 5px auto
            }

            .collection-type-page.has-promoted-gallery .main-content .sqs-layout > .sqs-row:first-child > .sqs-col-12:first-child {
                width: 100% !important
            }

            .collection-type-page.has-promoted-gallery .main-content .sqs-layout > .sqs-row:first-child > .sqs-col-12:first-child > .gallery-block:first-child {
                padding-top: 0 !important;
                padding-bottom: 0 !important
            }

            .collection-type-page.has-promoted-gallery .main-content .sqs-layout > .sqs-row:first-child > .sqs-col-12:first-child > .gallery-block:first-child .sqs-gallery {
                height: 300px !important
            }

            .collection-type-page.has-promoted-gallery #promotedGalleryWrapper .sqs-gallery-block-slideshow .meta .meta-inside, .collection-type-index.has-promoted-gallery .promoted-gallery-wrapper .sqs-gallery-block-slideshow .meta .meta-inside {
                padding: 20px
            }

            .collection-type-page.has-promoted-gallery #promotedGalleryWrapper .sqs-video-wrapper + .meta, .collection-type-index.has-promoted-gallery .promoted-gallery-wrapper .sqs-video-wrapper + .meta {
                display: none
            }

            .sqs-featured-posts-gallery .title-desc-wrapper {
                padding: 20px 20px
            }

            .sqs-featured-posts-gallery .title-desc-wrapper .post-title, .sqs-featured-posts-gallery .title-desc-wrapper .post-title a {
                letter-spacing: 2px
            }

            .sqs-featured-posts-gallery .title-desc-wrapper .post-excerpt {
                display: none
            }

            .blog-item-wrapper .post-title, .blog-item-wrapper .post-title a {
                letter-spacing: 2px
            }

            .blog-item-wrapper .post-date, .blog-item-wrapper .post-author, .blog-item-wrapper .post-category, .blog-item-wrapper .post-date a, .blog-item-wrapper .post-author a, .blog-item-wrapper .post-category a {
                font-size: 18px
            }

            .header-inner {
                padding: 20px 0;
                display: block
            }

            .footer-inner, .pre-footer-inner .sqs-layout {
                padding: 20px
            }

            #logoWrapper, #siteTitleWrapper {
                display: inline-block;
                vertical-align: middle;
                max-width: 240px;
                padding: 0;
                -moz-box-sizing: border-box;
                -webkit-box-sizing: border-box;
                box-sizing: border-box
            }

            #logoWrapper #logoImage img, #siteTitleWrapper #logoImage img {
                max-height: 50px;
                max-width: 100%;
                width: auto;
                height: auto
            }

            #logoWrapper {
                width: 130px
            }

            #productList .product {
                margin-bottom: 40px
            }

            #productList .product .product-title {
                margin-top: .5em
            }

            .sqs-featured-posts-gallery .title-desc-wrapper .view-post {
                display: none
            }

            .sqs-featured-posts-gallery .title-desc-wrapper .view-post:before, .sqs-featured-posts-gallery .title-desc-wrapper .view-post:after {
                display: none
            }

            .sqs-featured-posts-gallery .title-desc-wrapper .post-date, .sqs-featured-posts-gallery .title-desc-wrapper .post-category, .sqs-featured-posts-gallery .title-desc-wrapper .post-author {
                font-size: 16px
            }

            .index-section-wrapper.page-content {
                padding: 20px
            }

            body {
                -webkit-animation: bugfix infinite 1s
            }

            @-webkit-keyframes bugfix {
                from {
                    padding: 0
                }
                to {
                    padding: 0
                }
            }#headerNav {
                 display: none
             }

            #siteTitle, #siteTitle a {
                font-size: 16px;
                line-height: 1
            }

            #showOnScrollWrapper {
                display: none
            }

            .mobile-nav-toggle-label {
                display: none;
                -moz-box-sizing: border-box;
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
                z-index: 100;
                width: 10%;
                position: absolute;
                z-index: 1002;
                top: 50%;
                right: 20px;
                margin-top: -8px;
                padding: 0;
                vertical-align: middle;
                line-height: 16px;
                text-align: right;
                cursor: pointer;
                user-select: none;
                color: rgba(255, 255, 255, .9);
                width: 22px;
                height: 22px
            }

            .mobile-nav-toggle-label .top-bar, .mobile-nav-toggle-label .middle-bar, .mobile-nav-toggle-label .bottom-bar {
                width: 22px;
                height: 2px;
                background-color: #fff;
                -webkit-transition: -webkit-transform .15s 0s ease-in-out, top .15s .15s ease-in-out;
                -moz-transition: -moz-transform .15s 0s ease-in-out, top .15s .15s ease-in-out;
                -ms-transition: -ms-transform .15s 0s ease-in-out, top .15s .15s ease-in-out;
                -o-transition: -o-transform .15s 0s ease-in-out, top .15s .15s ease-in-out;
                transition: transform .15s 0s ease-in-out, top .15s .15s ease-in-out;
                -webkit-transform-origin: 50% 50%;
                -moz-transform-origin: 50% 50%;
                -ms-transform-origin: 50% 50%;
                -o-transform-origin: 50% 50%;
                transform-origin: 50% 50%;
                position: absolute;
                top: 0;
                right: 0
            }

            .mobile-nav-toggle-label .middle-bar {
                -webkit-transition: opacity 0s .15s linear;
                -moz-transition: opacity 0s .15s linear;
                -ms-transition: opacity 0s .15s linear;
                -o-transition: opacity 0s .15s linear;
                transition: opacity 0s .15s linear;
                top: 7px
            }

            .mobile-nav-toggle-label .bottom-bar {
                top: 14px
            }

            .mobile-nav-toggle-label.fixed-nav-toggle-label {
                position: fixed;
                top: 5px;
                right: 5px;
                z-index: 1001;
                visibility: hidden;
                opacity: 0;
                padding: 20px;
                margin-top: 0;
                background-color: #c81e1e;
                width: 42px;
                height: 36px;
                -webkit-transition: opacity .17s ease-in-out;
                -moz-transition: opacity .17s ease-in-out;
                -ms-transition: opacity .17s ease-in-out;
                -o-transition: opacity .17s ease-in-out;
                transition: opacity .17s ease-in-out
            }

            .mobile-nav-toggle-label.fixed-nav-toggle-label .top-bar, .mobile-nav-toggle-label.fixed-nav-toggle-label .middle-bar, .mobile-nav-toggle-label.fixed-nav-toggle-label .bottom-bar {
                margin-top: 12px;
                margin-right: 10px
            }

            .fix-header-nav .mobile-nav-toggle-label.fixed-nav-toggle-label {
                visibility: visible;
                opacity: 1
            }

            #sidecarNav .folder-toggle-label ~ .subnav, #secondaryNavWrapper .folder-toggle-label ~ .subnav {
                height: 0;
                max-height: 0;
                overflow: hidden;
                padding: 0 1.5em;
                font-size: 14px
            }

            #sidecarNav .folder-toggle-label ~ .subnav > div, #secondaryNavWrapper .folder-toggle-label ~ .subnav > div {
                padding: .5em 0
            }

            #sidecarNav .folder-toggle-box:checked ~ .subnav, #secondaryNavWrapper .folder-toggle-box:checked ~ .subnav {
                height: auto;
                max-height: 999px;
                padding: 0 1em 1em
            }

            #siteWrapper {
                height: 99.9%;
                width: 100%;
                -webkit-transition: -webkit-transform .14s ease-in-out;
                -moz-transition: -moz-transform .14s ease-in-out;
                -ms-transition: -ms-transform .14s ease-in-out;
                -o-transition: -o-transform .14s ease-in-out;
                transition: transform .14s ease-in-out
            }

            #mobileNavToggle:checked ~ #sidecarNav {
                -webkit-overflow-scrolling: touch;
                visibility: visible;
                -webkit-transition: height 0s .14s linear, visibility 0s 0s linear;
                -moz-transition: height 0s .14s linear, visibility 0s 0s linear;
                -ms-transition: height 0s .14s linear, visibility 0s 0s linear;
                -o-transition: height 0s .14s linear, visibility 0s 0s linear;
                transition: height 0s .14s linear, visibility 0s 0s linear
            }

            #mobileNavToggle:checked ~ .sqs-announcement-bar-dropzone {
                display: none
            }

            #mobileNavToggle:checked ~ #siteWrapper {
                position: fixed;
                height: 100%;
                -webkit-transform: translate3d(-260px, 0, 0);
                -moz-transform: translate3d(-260px, 0, 0);
                -ms-transform: translate3d(-260px, 0, 0);
                -o-transform: translate3d(-260px, 0, 0);
                transform: translate3d(-260px, 0, 0)
            }

            #mobileNavToggle:checked ~ #siteWrapper .mobile-nav-toggle-label .top-bar, #mobileNavToggle:checked ~ #siteWrapper .mobile-nav-toggle-label .bottom-bar {
                -webkit-transition: top .15s .15s ease-in-out, -webkit-transform .15s .3s ease-in-out;
                -moz-transition: top .15s .15s ease-in-out, -moz-transform .15s .3s ease-in-out;
                -ms-transition: top .15s .15s ease-in-out, -ms-transform .15s .3s ease-in-out;
                -o-transition: top .15s .15s ease-in-out, -o-transform .15s .3 ease-in-out;
                transition: top .15s .15s ease-in-out, transform .15s .3s ease-in-out
            }

            #mobileNavToggle:checked ~ #siteWrapper .mobile-nav-toggle-label .top-bar {
                -webkit-transform: rotate(45deg);
                -moz-transform: rotate(45deg);
                -ms-transform: rotate(45deg);
                -o-transform: rotate(45deg);
                transform: rotate(45deg);
                top: 7px
            }

            #mobileNavToggle:checked ~ #siteWrapper .mobile-nav-toggle-label .middle-bar {
                opacity: 0
            }

            #mobileNavToggle:checked ~ #siteWrapper .mobile-nav-toggle-label .bottom-bar {
                -webkit-transform: rotate(-45deg);
                -moz-transform: rotate(-45deg);
                -ms-transform: rotate(-45deg);
                -o-transform: rotate(-45deg);
                transform: rotate(-45deg);
                top: 7px
            }

            .enable-nav-button #sidecarNav nav > div:not(.folder):last-child a {
                display: inline-block;
                margin: .75em 0 0 0;
                line-height: 1;
                padding: 1em 1.5em
            }

            .folder-toggle-box:checked ~ .subnav {
                padding: .25em 0 .5em
            }

            .pre-footer-inner, .footer-inner {
                text-align: center
            }

            .pre-footer-inner .socialaccountlinks-block .social-account-list, .footer-inner .socialaccountlinks-block .social-account-list, .pre-footer-inner .back-to-top, .footer-inner .back-to-top {
                text-align: center;
                margin: 24px 0
            }

            .pre-footer-inner .sqs-block-button-container--right, .footer-inner .sqs-block-button-container--right, .pre-footer-inner .sqs-block-button-container--center, .footer-inner .sqs-block-button-container--center, .pre-footer-inner .sqs-block-button-container--left, .footer-inner .sqs-block-button-container--left {
                text-align: center
            }

            #secondaryNavWrapper #secondaryNavigation div {
                -moz-box-sizing: border-box;
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
                display: block
            }

            #secondaryNavWrapper #secondaryNavigation div a, #secondaryNavWrapper #secondaryNavigation div label {
                display: block;
                padding: .7em 0
            }

            #secondaryNavWrapper #secondaryNavigation > div {
                margin-right: 0%
            }

            .site-phone, .site-email {
                display: block;
                margin-left: 0 !important
            }

            .site-email > span {
                display: none
            }

            .site-email:before {
                content: 'Email'
            }

            .folder-nav-toggle-label, .category-nav-toggle-label {
                display: block;
                width: 100%;
                z-index: 2;
                position: absolute;
                top: 0;
                right: 0;
                padding-top: 12px;
                cursor: pointer;
                font-size: 21px;
                line-height: 14px;
                text-align: right
            }

            .folder-nav-toggle-label:after, .category-nav-toggle-label:after {
                content: "+";
                display: block;
                text-align: right
            }

            #folderNav, #categoryNav {
                display: block;
                width: 100%;
                position: relative;
                padding-bottom: 1.5em
            }

            #folderNav + #content, #categoryNav + #content {
                display: block;
                width: 100%
            }

            #folderNav .folder-nav, #categoryNav .folder-nav {
                position: relative;
                z-index: 1
            }

            #folderNav .category-nav, #categoryNav .category-nav {
                margin-bottom: 1em;
                position: relative;
                z-index: 1
            }

            #folderNav li, #categoryNav li {
                padding-top: .75em;
                padding-bottom: .75em
            }

            #folderNav li.nav-section-label, #categoryNav li.nav-section-label {
                display: none
            }

            #folderNav li.filter, #categoryNav li.filter {
                display: block;
                visibility: visible
            }

            #folderNav li a, #categoryNav li a, #folderNav li.nav-section-label, #categoryNav li.nav-section-label {
                font-size: 14px;
                line-height: 1
            }

            #folderNav li:not(.filter), #categoryNav li:not(.filter) {
                display: none
            }

            .collection-type-page:not(.hide-page-sidebar) #folderNav + #content, .collection-type-products:not(.hide-products-sidebar) #folderNav + #content, .collection-type-page:not(.hide-page-sidebar) #categoryNav + #content, .collection-type-products:not(.hide-products-sidebar) #categoryNav + #content {
                display: block;
                width: 100%
            }

            #folderNav #folderNavToggle:checked + .folder-nav-toggle-label {
                z-index: 0
            }

            #folderNav #folderNavToggle:checked + .folder-nav-toggle-label:after {
                content: '–'
            }

            #folderNav #folderNavToggle:checked ~ .folder-nav li:not(.active-link) {
                display: block
            }

            #folderNav #folderNavToggle:checked ~ .folder-nav li:not(.active-link).nav-section-label {
                display: none
            }

            #categoryNav #categoryNavToggle:checked + .category-nav-toggle-label {
                z-index: 0
            }

            #categoryNav #categoryNavToggle:checked + .category-nav-toggle-label:after {
                content: '–'
            }

            #categoryNav #categoryNavToggle:checked ~ .category-nav li:not(.filter) {
                display: block
            }

            #categoryNav #categoryNavToggle:checked ~ .category-nav li:not(.filter).nav-section-label {
                display: none
            }
        }

        @media only screen and (max-width: 480px) {
            #promotedGalleryWrapper .sqs-gallery-block-slideshow .meta, .promoted-gallery-wrapper .sqs-gallery-block-slideshow .meta {
                display: block !important
            }
        }

        .site-title-font {
            font-family: "proxima-nova";
            font-size: 22px;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: 600;
            font-style: normal
        }

        .nav-font {
            font-family: "Helvetica Neue", "Arial", "sans-serif";
            font-size: 14px;
            text-transform: uppercase;
            text-decoration: none;
            letter-spacing: 2px;
            font-weight: normal;
            font-style: normal
        }

        .nav-button-font {
            font-family: "proxima-nova";
            text-transform: uppercase;
            text-decoration: none;
            letter-spacing: 2px;
            font-weight: 600;
            font-style: normal
        }

        .banner-heading-font {
            font-family: "proxima-nova";
            font-size: 0px;
            line-height: .9em;
            text-transform: uppercase;
            letter-spacing: 4px;
            font-weight: 700;
            font-style: normal
        }

        .banner-text-font {
            font-family: "Helvetica Neue", "Arial", "sans-serif";
            font-size: 48px;
            line-height: 1.1em;
            text-transform: none;
            letter-spacing: 1px;
            font-weight: bold;
            font-style: normal
        }

        .banner-button-font {
            font-family: "proxima-nova";
            font-size: 15px;
            text-transform: uppercase;
            text-decoration: none;
            letter-spacing: 2px;
            font-weight: 600;
            font-style: normal
        }

        .body-font {
            font-family: "Helvetica Neue", "Arial", "sans-serif";
            font-size: 14px;
            line-height: 1.6em;
            letter-spacing: 0px;
            font-weight: normal;
            font-style: normal
        }

        .heading1-font {
            font-family: "Helvetica Neue", "Arial", "sans-serif";
            font-size: 24px;
            line-height: 1.2em;
            text-transform: none;
            letter-spacing: 0px;
            font-weight: normal;
            font-style: normal
        }

        .heading2-font {
            font-family: "proxima-nova";
            font-size: 22px;
            line-height: 1.2em;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: 400;
            font-style: normal
        }

        .heading3-font {
            font-family: "proxima-nova";
            font-size: 14px;
            line-height: 1.2em;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: 600;
            font-style: normal
        }

        .quote-font {
            font-family: "Helvetica Neue", "Arial", "sans-serif";
            font-size: 20px;
            line-height: 1.65em;
            letter-spacing: 0px;
            font-weight: normal;
            font-style: normal
        }

        .summary-heading-font {
            font-family: "proxima-nova", "Helvetica Neue", Helvetica, Arial, sans-serif;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 400;
            font-style: normal
        }

        .subnav-title-font {
            font-family: "adobe-garamond-pro";
            font-size: 22px;
            text-transform: none;
            text-decoration: none;
            letter-spacing: 0px;
            font-weight: 400;
            font-style: normal
        }

        .subnav-link-font {
            font-family: "proxima-nova";
            font-size: 14px;
            text-transform: uppercase;
            text-decoration: none;
            letter-spacing: 2px;
            font-weight: 600;
            font-style: normal
        }

        .footer-nav-font {
            font-family: "proxima-nova";
            font-size: 13px;
            text-transform: uppercase;
            text-decoration: none;
            letter-spacing: 2px;
            font-weight: 400;
            font-style: normal
        }

        .site-info-font {
            font-family: "proxima-nova";
            font-size: 14px;
            text-transform: uppercase;
            text-decoration: none;
            letter-spacing: 2px;
            font-weight: 400;
            font-style: normal
        }

        .small-button-block-font {
            font-family: "proxima-nova", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 600;
            font-style: normal
        }

        .medium-button-block-font {
            font-family: "Helvetica Neue", "Arial", "sans-serif";
            font-size: 15px;
            text-transform: none;
            letter-spacing: 1px;
            font-weight: normal;
            font-style: normal
        }

        .large-button-block-font {
            font-family: "proxima-nova", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 600;
            font-style: normal
        }

        .system-button-font {
            font-family: "proxima-nova";
            text-transform: uppercase;
            letter-spacing: 3px;
            font-weight: 300;
            font-style: normal
        }

        .announcement-bar-font {
            font-family: 'proxima-nova', arial, sans-serif;
            font-size: 13px;
            text-transform: none;
            letter-spacing: 1px;
            font-weight: 300;
            font-style: normal
        }

        .tweak-product-quick-view-button-font {
            font-family: Helvetica, Arial, sans-serif;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: normal;
            font-style: normal
        }

        /*! Squarespace LESS Compiler (less.js language v1.3.3) certifications/ certifications2/ footer_new/ footers/ footers1/ newpartner/ partners_scripts/ ready/ scripts/ templates/ txts/ #page{padding:0 15px}#header .header-inner{padding-top:1px;padding-bottom:1px}#siteWrapper{background-color:#f4ecdf !important}.sqs-block.image-block .image-caption-wrapper p{text-align:center !important} /Applications /Library /Network /System /Users /Volumes /bin /cores /dev /etc /home /installer.failurerequests /net /private /sbin /tmp /usr /var Restore RealCME styling certifications/ certifications2/ footer_new/ footers/ footers1/ newpartner/ partners_scripts/ ready/ scripts/ templates/ txts/ #rcmcontent > #header { background:none; } </style>
</head>
<body class="front not-logged-in one-sidebar sidebar-right" style="background:#ca2b2b;">
<div id="siteWrapper" class="clearfix">
    <header id="header" class="show-on-scroll" style="margin:0;">
        <div class="header-inner">
            <div id="logoWrapper" class="wrapper"><h1 id="logoImage"><a href="http://www.vclinic.org/"><img
                                src="/cms/sites/all/themes/zen/vclinictheme/img/new_images/vClinic_logo.jpg"
                                alt="vClinic" style="margin-top:0;"/></a></h1></div>
        </div>
    </header>
    <main id="page" role="main">
        <div id="content" class="main-content">
            <div class="sqs-layout sqs-grid-12 columns-12">
                <div class="row sqs-row">
                    <div class="col sqs-col-12 span-12">
                        <div class="sqs-block html-block sqs-block-html">
                            <div class="sqs-block-content"> <!-- BOF page.tpl.php -->
                                <div id="page-main">
                                    <div id="main-inner" class="clear-block with-navbar">
                                        <div id="content">
                                            <div id="content-inner">
                                                <div id="content-area">
                                                    <div id="displaypromotions">
                                                        <div id="displaypromotions_header" style="display: none;">
                                                            FEATURED ACTIVITIES
                                                        </div>
                                                        <div id="displaypromotions_nid" style="display: none;">0</div>
                                                        <!-- BEGIN PROMO -->
                                                        <div id="related-activities">
                                                            <div id="related-activities-title"
                                                                 class="related-activities-title">FEATURED ACTIVITIES
                                                            </div>
                                                            <div class="related-activities-left testing">
                                                                <div class="node">
                                                                    <div class="node-inner">
                                                                        <div class="rcmcontent">
                                                                            <div class="related-patient-bg"
                                                                                 style="background-image: url(/cms/sites/all/modules/custom/cmecoursepromotion/img/related-patient-bg.gif); ">
                                                                                <img src="/cms/../cmsdata/course_icons/icon_610444_0.jpg"
                                                                                     alt="610444"
                                                                                     style="width: 43px; height: 43px; border: 0; margin: 0">
                                                                            </div>
                                                                            <div class="activity-subject">
                                                                                <div class="activity-title activity-title-display">
                                                                                    <span class="promo-link"><a
                                                                                                id="lt-836397"
                                                                                                href="/cms/node/836397">Menopause and Sexual Health: Dyspareunia Therapeutic Advances</a></span>
                                                                                </div>
                                                                                <div class="certified-icon"
                                                                                     style="background-image: url(/cms/sites/all/modules/custom/cmecoursepromotion/img/CME-certified.gif); "></div>
                                                                                <div class="certified-text">Womens
                                                                                    Health
                                                                                </div>
                                                                            </div>
                                                                            <div class="activity-info">ISSWSH Symposium
                                                                                Highlights
                                                                            </div>
                                                                            <div style="clear: both;"></div>
                                                                            <div class="next-steps-related">
                                                                                <div class="next-steps-icon"></div>
                                                                                <div class="schedule-activity"></div>
                                                                                <div class="next-steps-divider"></div>
                                                                                <div class="next-steps-icon"><img
                                                                                            src="/cms/sites/all/modules/custom/cmecoursepromotion/img/proceed-activity.gif"
                                                                                            alt="Proceed To Activity"
                                                                                            style="width: 29px; height: 29px; border: 0; margin: 0">
                                                                                </div>
                                                                                <div class="proceed-activity"><span
                                                                                            class="promo-link"><a
                                                                                                id="lp-836397"
                                                                                                href="/cms/node/836397">Proceed To Activity</a></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- BOF #8380 and #8473, CMECompanion float glitch -->
                                                                <script type="text/javascript"> $(function () {
                                                                        if ($('body').hasClass('node-type-course') && !$('body').hasClass('no-sidebars')) {
                                                                            if ($('#main-inner').find('#sidebar-right').length > 0) {
                                                                                $('#page-inner').addClass('clear-block');
                                                                            } else {
                                                                                $('#main-inner').removeClass('clear-block');
                                                                                $('#page-inner, #page-main').addClass('clear-block');
                                                                                if ($('#sidebar-right').offset().top !== 187) {
                                                                                    $('#sidebar-right').css('margin-top', 25);
                                                                                }
                                                                            }
                                                                        }
                                                                    }); </script><!-- EOF #8380 and #8473 --></div>
                                                            <div class="related-activities-right testing">
                                                                <div class="node">
                                                                    <div class="node-inner">
                                                                        <div class="rcmcontent">
                                                                            <div class="related-patient-bg"
                                                                                 style="background-image: url(/cms/sites/all/modules/custom/cmecoursepromotion/img/related-patient-bg.gif); ">
                                                                                <img src="/cms/../cmsdata/course_icons/icon_598568.jpg"
                                                                                     alt="598568"
                                                                                     style="width: 43px; height: 43px; border: 0; margin: 0">
                                                                            </div>
                                                                            <div class="activity-subject">
                                                                                <div class="activity-title activity-title-display">
                                                                                    <span class="promo-link"><a
                                                                                                id="lt-813221"
                                                                                                href="/cms/node/813221">Navigating the Challenges of Prescribing PCSK9 Inhibitors in Patients...</a></span>
                                                                                </div>
                                                                                <div class="certified-icon"
                                                                                     style="background-image: url(/cms/sites/all/modules/custom/cmecoursepromotion/img/CME-certified.gif); "></div>
                                                                                <div class="certified-text">Cardiology
                                                                                </div>
                                                                            </div>
                                                                            <div class="activity-info">The use of PCSK9
                                                                                inhibitors (PSCK9Is) in certain patients
                                                                                with hypercholesterolemia
                                                                            </div>
                                                                            <div style="clear: both;"></div>
                                                                            <div class="next-steps-related">
                                                                                <div class="next-steps-icon"></div>
                                                                                <div class="schedule-activity"></div>
                                                                                <div class="next-steps-divider"></div>
                                                                                <div class="next-steps-icon"><img
                                                                                            src="/cms/sites/all/modules/custom/cmecoursepromotion/img/proceed-activity.gif"
                                                                                            alt="Proceed To Activity"
                                                                                            style="width: 29px; height: 29px; border: 0; margin: 0">
                                                                                </div>
                                                                                <div class="proceed-activity"><span
                                                                                            class="promo-link"><a
                                                                                                id="lp-813221"
                                                                                                href="/cms/node/813221">Proceed To Activity</a></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- BOF #8380 and #8473, CMECompanion float glitch -->
                                                                <script type="text/javascript"> $(function () {
                                                                        if ($('body').hasClass('node-type-course') && !$('body').hasClass('no-sidebars')) {
                                                                            if ($('#main-inner').find('#sidebar-right').length > 0) {
                                                                                $('#page-inner').addClass('clear-block');
                                                                            } else {
                                                                                $('#main-inner').removeClass('clear-block');
                                                                                $('#page-inner, #page-main').addClass('clear-block');
                                                                                if ($('#sidebar-right').offset().top !== 187) {
                                                                                    $('#sidebar-right').css('margin-top', 25);
                                                                                }
                                                                            }
                                                                        }
                                                                    }); </script><!-- EOF #8380 and #8473 --></div>
                                                            <div style="clear: both;"></div>
                                                        </div> <!-- END PROMO -->
                                                        <div style="clear: both;"></div>
                                                    </div>
                                                    <div class='listing-featured'>
                                                        <div class='listing-tabs'>
                                                            <form action="http://vclinic.realcme.com/cms/listingall"
                                                                  accept-charset="UTF-8" method="get"
                                                                  id="views-filters">
                                                                <div>
                                                                    <table>
                                                                        <thead>
                                                                        <tr>
                                                                            <th>Enter keywords</th>
                                                                            <th></th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        <tr class="odd">
                                                                            <td>
                                                                                <div class='listing-tab-group'><a
                                                                                            href='/cms/listingfeatured'>
                                                                                        <div class='first listing-tab selected'>
                                                                                            Featured
                                                                                        </div>
                                                                                    </a>
                                                                                    <a href='/cms/listingcurriculum'>
                                                                                        <div class='listing-tab'>
                                                                                            Curricula
                                                                                        </div>
                                                                                    </a> <a href='/cms/listingall'>
                                                                                        <div class='listing-tab'> All
                                                                                        </div>
                                                                                    </a> <a href='/cms/listingarchived'>
                                                                                        <div class='listing-tab'>
                                                                                            Archived
                                                                                        </div>
                                                                                    </a>
                                                                                    <div class='last listing-filter'>
                                                                                        <div class="form-item"><input
                                                                                                    type="text"
                                                                                                    maxlength="255"
                                                                                                    name="filter0"
                                                                                                    id="edit-filter0"
                                                                                                    size="10"
                                                                                                    value="Search"
                                                                                                    placeholder="Search"
                                                                                                    class="form-text"/>
                                                                                        </div>
                                                                                    </div>
                                                                            </td>
                                                                            <td><input type="submit" id="edit-submit"
                                                                                       value="" class="form-submit"/>
                                                                            </td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class='listing-featured-table'>
                                                            <table id="listing-featured" align="center">
                                                                <thead>
                                                                <tr>
                                                                    <th></th>
                                                                    <th>Title</th>
                                                                    <th>Credits</th>
                                                                    <th>Expiration date</th>
                                                                    <th>Topic</th>
                                                                    <th>Launch Date</th>
                                                                    <th>Statement</th>
                                                                    <th>Faculty</th>
                                                                    <th>Relevant Terms</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr class="odd">
                                                                    <td valign="top" style="font-weight: normal;"
                                                                        class="view-field-node-data-field-icon-field-icon-fid">
                                                                        <img src="http://vclinic.realcme.com/cms/../cmsdata/course_icons/icon_610444_0.jpg"
                                                                             alt="icon_610444.jpg"
                                                                             title="icon_610444.jpg" width="42"
                                                                             height="42"/></td>
                                                                    <td valign="top" style="font-weight: normal;"
                                                                        class="view-field-node-title"><a
                                                                                href="/cms/node/836397?utm_source=activitylist&amp;utm_medium=web&amp;utm_content=feature&amp;utm_campaign=">Menopause
                                                                            and Sexual Health: Dyspareunia Therapeutic
                                                                            Advances</a><br/>Womens Health
                                                                    </td>
                                                                    <td valign="top"
                                                                        style="font-weight: normal;text-align: center"
                                                                        class="view-field-node-data-field-all-credits-field-all-credits-value">
                                                                        0.75&nbsp;AMA<br/>0.75&nbsp;ANCC<br/></td>
                                                                    <td valign="top" style=""
                                                                        class="view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                                        03-Dec-18
                                                                    </td>
                                                                    <td class="view-field-term-node-1-name">Womens
                                                                        Health
                                                                    </td>
                                                                    <td class="view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                                        04-Dec-17
                                                                    </td>
                                                                    <td class="view-field-node-data-field-patient-statement-field-patient-statement-value"></td>
                                                                    <td class="view-field-node-data-field-course-desc-field-course-desc-value">
                                                                        ISSWSH Symposium Highlights
                                                                    </td>
                                                                    <td class="view-field-node-data-field-faculty-field-faculty-value"></td>
                                                                    <td class="view-field-term-node-3-name"></td>
                                                                    <td class="view-field-node-data-field-activity-group-field-activity-group-nid">
                                                                        836399
                                                                    </td>
                                                                    <td class="view-field-content-type-activity-group-field-group-name-value">
                                                                        Menopause and Sexual Health: An Update on
                                                                        Dyspareunia and Female Sexual Dysfunction
                                                                    </td>
                                                                    <td class="related-activities"><a
                                                                                href="/cms/node/848453?utm_source=activitylist&amp;utm_medium=web&amp;utm_content=feature&amp;utm_campaign=">Menopause
                                                                            and Sexual Health: Practices, Patient
                                                                            Attitudes and Treatment Gaps</a></td>
                                                                </tr>
                                                                <tr class="even">
                                                                    <td valign="top" style="font-weight: normal;"
                                                                        class="view-field-node-data-field-icon-field-icon-fid">
                                                                        <img src="http://vclinic.realcme.com/cms/../cmsdata/course_icons/icon_535359.jpg"
                                                                             alt="icon_535359.jpg"
                                                                             title="icon_535359.jpg" width="43"
                                                                             height="34"/></td>
                                                                    <td valign="top" style="font-weight: normal;"
                                                                        class="view-field-node-title"><a
                                                                                href="/cms/node/811969?utm_source=activitylist&amp;utm_medium=web&amp;utm_content=feature&amp;utm_campaign=">Challenges
                                                                            in the Primary Care of Depression: A Patient
                                                                            Huddle Activity</a><br/>Psychiatry
                                                                    </td>
                                                                    <td valign="top"
                                                                        style="font-weight: normal;text-align: center"
                                                                        class="view-field-node-data-field-all-credits-field-all-credits-value">
                                                                        0.5&nbsp;AMA<br/></td>
                                                                    <td valign="top" style=""
                                                                        class="view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                                        13-Sep-19
                                                                    </td>
                                                                    <td class="view-field-term-node-1-name">Psychiatry
                                                                    </td>
                                                                    <td class="view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                                        14-Sep-17
                                                                    </td>
                                                                    <td class="view-field-node-data-field-patient-statement-field-patient-statement-value"></td>
                                                                    <td class="view-field-node-data-field-course-desc-field-course-desc-value"></td>
                                                                    <td class="view-field-node-data-field-faculty-field-faculty-value">
                                                                        Michael Clark, MD
                                                                    </td>
                                                                    <td class="view-field-term-node-3-name"></td>
                                                                    <td class="view-field-node-data-field-activity-group-field-activity-group-nid">
                                                                        809899
                                                                    </td>
                                                                    <td class="view-field-content-type-activity-group-field-group-name-value">
                                                                        Derail Depression -- Treatment On Track
                                                                    </td>
                                                                    <td class="related-activities"><a
                                                                                href="/cms/node/809897?utm_source=activitylist&amp;utm_medium=web&amp;utm_content=feature&amp;utm_campaign=">A
                                                                            Collaborative Care Approach to Managing
                                                                            Depression in Primary Care</a></td>
                                                                </tr>
                                                                <tr class="odd">
                                                                    <td valign="top" style="font-weight: normal;"
                                                                        class="view-field-node-data-field-icon-field-icon-fid">
                                                                        <img src="http://vclinic.realcme.com/cms/../cmsdata/course_icons/icon_598568.jpg"
                                                                             alt="icon_598568.jpg"
                                                                             title="icon_598568.jpg" width="48"
                                                                             height="48"/></td>
                                                                    <td valign="top" style="font-weight: normal;"
                                                                        class="view-field-node-title"><a
                                                                                href="/cms/node/813221?utm_source=activitylist&amp;utm_medium=web&amp;utm_content=feature&amp;utm_campaign=">Navigating
                                                                            the Challenges of Prescribing PCSK9
                                                                            Inhibitors in Patients with Persistent
                                                                            Elevated LDL-C</a><br/>Cardiology
                                                                    </td>
                                                                    <td valign="top"
                                                                        style="font-weight: normal;text-align: center"
                                                                        class="view-field-node-data-field-all-credits-field-all-credits-value">
                                                                        1&nbsp;AMA<br/>1&nbsp;ACPE<br/>1&nbsp;ANCC<br/>1&nbsp;CDR<br/>
                                                                    </td>
                                                                    <td valign="top" style=""
                                                                        class="view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                                        19-Sep-18
                                                                    </td>
                                                                    <td class="view-field-term-node-1-name">Cardiology
                                                                    </td>
                                                                    <td class="view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                                        19-Sep-17
                                                                    </td>
                                                                    <td class="view-field-node-data-field-patient-statement-field-patient-statement-value"></td>
                                                                    <td class="view-field-node-data-field-course-desc-field-course-desc-value">
                                                                        The use of PCSK9 inhibitors (PSCK9Is) in certain
                                                                        patients with hypercholesterolemia
                                                                    </td>
                                                                    <td class="view-field-node-data-field-faculty-field-faculty-value">
                                                                        James Underberg, MS, MD, FACPM, FACP, FASH,
                                                                        FASPC, FNLA (Chair)
                                                                    </td>
                                                                    <td class="view-field-term-node-3-name"></td>
                                                                    <td class="view-field-node-data-field-activity-group-field-activity-group-nid">
                                                                        813223
                                                                    </td>
                                                                    <td class="view-field-content-type-activity-group-field-group-name-value">
                                                                        Navigating the Challenges of Prescribing PCSK9
                                                                        Inhibitors in Patients with Persistent
                                                                        Elevated...
                                                                    </td>
                                                                    <td class="related-activities"><a
                                                                                href="/cms/node/850795?utm_source=activitylist&amp;utm_medium=web&amp;utm_content=feature&amp;utm_campaign=">Experts
                                                                            in the Hot Seat: Navigating PCSK9 Inhibitor
                                                                            Prescribing in Persistent Elevated LDL-C</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="even">
                                                                    <td valign="top" style="font-weight: normal;"
                                                                        class="view-field-node-data-field-icon-field-icon-fid">
                                                                        <img src="http://vclinic.realcme.com/cms/../cmsdata/course_icons/icon_595941.jpg"
                                                                             alt="icon_595941.jpg"
                                                                             title="icon_595941.jpg" width="43"
                                                                             height="48"/></td>
                                                                    <td valign="top" style="font-weight: normal;"
                                                                        class="view-field-node-title"><a
                                                                                href="/cms/node/810330?utm_source=activitylist&amp;utm_medium=web&amp;utm_content=feature&amp;utm_campaign=">Managing
                                                                            Advanced Prostate Cancer in a Virtual
                                                                            Urology Clinic</a><br/>Urology
                                                                    </td>
                                                                    <td valign="top"
                                                                        style="font-weight: normal;text-align: center"
                                                                        class="view-field-node-data-field-all-credits-field-all-credits-value">
                                                                        1&nbsp;AMA<br/></td>
                                                                    <td valign="top" style=""
                                                                        class="view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                                        07-Sep-18
                                                                    </td>
                                                                    <td class="view-field-term-node-1-name">Urology</td>
                                                                    <td class="view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                                        07-Sep-17
                                                                    </td>
                                                                    <td class="view-field-node-data-field-patient-statement-field-patient-statement-value"></td>
                                                                    <td class="view-field-node-data-field-course-desc-field-course-desc-value">
                                                                        Experience managing prostate cancer pts in a
                                                                        virtual urology practice. Challenge questions,
                                                                        mgmt approaches and peer benchmarking included.
                                                                    </td>
                                                                    <td class="view-field-node-data-field-faculty-field-faculty-value">
                                                                        Neal Shore, MD, FACS
                                                                    </td>
                                                                    <td class="view-field-term-node-3-name"></td>
                                                                    <td class="view-field-node-data-field-activity-group-field-activity-group-nid">
                                                                        810335
                                                                    </td>
                                                                    <td class="view-field-content-type-activity-group-field-group-name-value">
                                                                        Teaching through a Window: Optimal Management of
                                                                        Advanced Prostate Cancer in a Urology Practice
                                                                    </td>
                                                                    <td class="related-activities"><a
                                                                                href="/cms/node/815877?utm_source=activitylist&amp;utm_medium=web&amp;utm_content=feature&amp;utm_campaign=">Delivering
                                                                            Advanced Prostate Cancer Therapy in a
                                                                            Virtual Urology Clinic</a></td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div> <!-- --> </div>
                                        </div> <!-- /#content-inner, /#content -->
                                        <div id="sidebar-right">
                                            <div id="sidebar-right-inner">
                                                <div id="altcontainer2">
                                                    <div id="companionlogo"><img
                                                                src="/cms/sites/all/themes/zen/vclinictheme/img/logo-companion.gif"
                                                                id="logo-companion" alt="CMECompanion" class=""/></div>
                                                    <!-- Accordion Menu Start -->
                                                    <div id="list1"> <!-- SIDEBAR RIGHT -->
                                                        <div id="block-cmeprofile-1"
                                                             class="block block-cmeprofile region-odd odd region-count-1 count-1">
                                                            <div class="block-inner">
                                                                <div class="content">
                                                                    <div><span class="left cmeloginregistration"> <p>These activities require <a
                                                                                        href="http://comp.realcme.com/cms/user/register?TB_iframe=true&width=655"
                                                                                        class="thickbox"
                                                                                        id="registration_link">registration</a>. Registration time is less than two minutes, and will provide you access to your personal CMECompanion toolset.</p> <p>If you are already registered, please <a
                                                                                        href="http://comp.realcme.com/cms/user?TB_iframe=true&width=655"
                                                                                        class="thickbox"
                                                                                        id="login_link">log in</a>.</p> <div
                                                                                    class="left"
                                                                                    style="padding: 10px 0px 5px 5px;"> <span
                                                                                        style="cursor:pointer"
                                                                                        onClick="$('#companion_description').slideToggle('slow'); $('#comp_info_plus').toggle(); $('#comp_info_minus').toggle();"> <span
                                                                                            style="font-size: 12px"
                                                                                            id="comp_info_plus"> (+)</span><span
                                                                                            id="comp_info_minus"
                                                                                            style="display: none; font-size: 12px"> (&ndash;)</span> <span
                                                                                            style="text-decoration: underline;">What is CMECompanion?</span></span> <div
                                                                                        id="companion_description"
                                                                                        style="padding-top:10px; display:none;">These activities are supported by CMECompanion, a personal toolset developed by RealCME for tracking your progress on particular topics in real time. Use it to set up and track goals, review topic and program scores, compare scores with peers, track earned credit, and schedule follow up activities.<br><br> Questions? Please contact “Support” at the bottom of the page. </div> </div> </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> <!-- /block-inner, /block --> <!-- END SIDEBAR RIGHT -->
                                                    </div>
                                                </div> <!-- altcontainer2 --> </div>
                                        </div> <!-- /#sidebar-right-inner, /#sidebar-right --> </div>
                                    <div id="cme-footer" style="padding: 20px 0px; margin-top: 40px;">
                                        <div id="copyright"> &copy; 2008-2018 RealCME. All rights reserved.</div>
                                        <div id="bottom_links">
                                            <ul>
                                                <li class="first_link"><a href="/">Home</a></li>
                                                <li><a href="/cms/support-center">Support</a></li>
                                                <li><a href="/privacy.php">Privacy Statement</a></li>
                                                <li><a href="/tos.php">Terms of Use</a></li>
                                                <li><a href="/cms/contact-us">Contact Us</a></li>
                                            </ul>
                                        </div>
                                        <div style="clear: both; padding-top:20px; text-align: center;"><a
                                                    href="http://www.realcme.com/"><img
                                                        src="/cms/sites/all/themes/zen/vclinictheme/img/footerlogo.png"/></a>
                                        </div>
                                    </div> <!-- Close Footer --> </div> <!-- /#main-inner, /#main -->
                                <!-- EOF page.tpl.php --> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main> <!-- BOF page.tpl.php -->
    <script type="text/javascript" src="/cms/sites/all/modules/google_analytics/googleanalytics.js"></script>
    <script type="text/javascript">var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
        document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));</script>
    <script type="text/javascript">try {
            var pageTracker = _gat._getTracker("UA-9136459-4");
            pageTracker._setDomainName("realcme.com");
            pageTracker._setAllowLinker(true);
            pageTracker._trackPageview();
        } catch (err) {
        }</script> <!-- EOF page.tpl.php --> </div>
</body>
</html>
