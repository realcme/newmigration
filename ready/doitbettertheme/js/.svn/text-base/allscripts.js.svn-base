/**
 * jQuery.Preload
 * Copyright (c) 2008 Ariel Flesler - aflesler(at)gmail(dot)com
 * Dual licensed under MIT and GPL.
 * Date: 3/25/2009
 *
 * @projectDescription Multifunctional preloader
 * @author Ariel Flesler
 * @version 1.0.8
 *
 * @id jQuery.preload
 * @param {String, jQuery, Array< String, <a>, <link>, <img> >} original Collection of sources to preload
 * @param {Object} settings Hash of settings.
 *
 * @id jQuery.fn.preload
 * @param {Object} settings Hash of settings.
 * @return {jQuery} Returns the same jQuery object, for chaining.
 *
 * @example Link Mode:
 *	rcme.preload( '#images a' );
 *
 * @example Rollover Mode:
 *	rcme.preload( '#images img', {
 *		find:/\.(gif|jpg)/,
 *		replace:'_over.rcme1'
 *	});
 *
 * @example Src Mode:
 *	rcme.preload( [ 'red', 'blue', 'yellow' ], {
 *		base:'images/colors/',
 *		ext:'.jpg'
 *	});
 *
 * @example Placeholder Mode:
 *	rcme.preload( '#images img', {
 *		placeholder:'placeholder.jpg',
 *		notFound:'notfound.jpg'
 *	});
 *
 * @example Placeholder+Rollover Mode(High res):
 *	rcme.preload( '#images img', {
 *		placeholder:true,
 *		find:/\.(gif|jpg)/,
 *		replace:'_high.rcme1'
 *	});
 */

var rcme = $.noConflict()
;(function( rcme ){

    var rcmepreload = rcme.preload = function( original, settings ){
        if( original.split ) // selector
            original = rcme(original);

        settings = rcme.extend( {}, rcmepreload.defaults, settings );
        var sources = rcme.map( original, function( source ){
            if( !source )
                return; // skip
            if( source.split ) // URL Mode
                return settings.base + source + settings.ext;
            var url = source.src || source.href; // save the original source
            if( typeof settings.placeholder == 'string' && source.src ) // Placeholder Mode, if it's an image, set it.
                source.src = settings.placeholder;
            if( url && settings.find ) // Rollover mode
                url = url.replace( settings.find, settings.replace );
            return url || null; // skip if empty string
        });

        var data = {
            loaded:0, // how many were loaded successfully
            failed:0, // how many urls failed
            next:0, // which one's the next image to load (index)
            done:0, // how many urls were tried
            /*
             index:0, // index of the related image
             found:false, // whether the last one was successful
             */
            total:sources.length // how many images are being preloaded overall
        };

        if( !data.total ) // nothing to preload
            return finish();

        var imgs = rcme(Array(settings.threshold+1).join('<img/>'))
            .load(handler).error(handler).bind('abort',handler).each(fetch);

        function handler( e ){
            data.element = this;
            data.found = e.type == 'load';
            data.image = this.src;
            data.index = this.index;
            var orig = data.original = original[this.index];
            data[data.found?'loaded':'failed']++;
            data.done++;

            // This will ensure that the images aren't "un-cached" after a while
            if( settings.enforceCache )
                rcmepreload.cache.push(
                    rcme('<img/>').attr('src',data.image)[0]
                );

            if( settings.placeholder && orig.src ) // special case when on placeholder mode
                orig.src = data.found ? data.image : settings.notFound || orig.src;
            if( settings.onComplete )
                settings.onComplete( data );
            if( data.done < data.total ) // let's continue
                fetch( 0, this );
            else{ // we are finished
                if( imgs && imgs.unbind )
                    imgs.unbind('load').unbind('error').unbind('abort'); // cleanup
                imgs = null;
                finish();
            }
        };
        function fetch( i, img, retry ){
            // IE problem, can't preload more than 15
            if( img.attachEvent /* msie */ && data.next && data.next % rcmepreload.gap == 0 && !retry ){
                setTimeout(function(){ fetch( i, img, true ); }, 0);
                return false;
            }
            if( data.next == data.total ) return false; // no more to fetch
            img.index = data.next; // save it, we'll need it.
            img.src = sources[data.next++];
            if( settings.onRequest ){
                data.index = img.index;
                data.element = img;
                data.image = img.src;
                data.original = original[data.next-1];
                settings.onRequest( data );
            }
        };
        function finish(){
            if( settings.onFinish )
                settings.onFinish( data );
        };
    };

    // each time we load this amount and it's IE, we must rest for a while, make it lower if you get stack overflow.
    rcmepreload.gap = 14;
    rcmepreload.cache = [];

    rcmepreload.defaults = {
        threshold:2, // how many images to load simultaneously
        base:'', // URL mode: a base url can be specified, it is prepended to all string urls
        ext:'', // URL mode:same as base, but it's appended after the original url.
        replace:'' // Rollover mode: replacement (can be left empty)
        /*
         enforceCache: false, // If true, the plugin will save a copy of the images in rcme.preload.cache
         find:null, // Rollover mode: a string or regex for the replacement
         notFound:'' // Placeholder Mode: Optional url of an image to use when the original wasn't found
         placeholder:'', // Placeholder Mode: url of an image to set while loading
         onRequest:function( data ){ ... }, // callback called every time a new url is requested
         onComplete:function( data ){ ... }, // callback called every time a response is received(successful or not)
         onFinish:function( data ){ ... } // callback called after all the images were loaded(or failed)
         */
    };

    rcme.fn.preload = function( settings ){
        rcmepreload( this, settings );
        return this;
    };

})( jQuery );

//date.js
// ===================================================================
// Author: Matt Kruse <matt@mattkruse.com>
// WWW: http://www.mattkruse.com/
//
// NOTICE: You may use this code for any purpose, commercial or
// private, without any further permission from the author. You may
// remove this notice from your final code if you wish, however it is
// appreciated by the author if at least my web site address is kept.
//
// You may *NOT* re-distribute this code in any way except through its
// use. That means, you can include it in your product, or your web
// site, or any other form where the code is actually being used. You
// may not put the plain javascript up on your site for download or
// include it in your javascript libraries for download.
// If you wish to share this code with others, please just point them
// to the URL instead.
// Please DO NOT link directly to my .js files from your site. Copy
// the files to your server and use them there. Thank you.
// ===================================================================

var MONTH_NAMES=new Array('January','February','March','April','May','June','July','August','September','October','November','December','Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec');var DAY_NAMES=new Array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sun','Mon','Tue','Wed','Thu','Fri','Sat');
function LZ(x){return(x<0||x>9?"":"0")+x}
function isDate(val,format){var date=getDateFromFormat(val,format);if(date==0){return false;}return true;}
function compareDates(date1,dateformat1,date2,dateformat2){var d1=getDateFromFormat(date1,dateformat1);var d2=getDateFromFormat(date2,dateformat2);if(d1==0 || d2==0){return -1;}else if(d1 > d2){return 1;}return 0;}
function formatDate(date,format){format=format+"";var result="";var i_format=0;var c="";var token="";var y=date.getYear()+"";var M=date.getMonth()+1;var d=date.getDate();var E=date.getDay();var H=date.getHours();var m=date.getMinutes();var s=date.getSeconds();var yyyy,yy,MMM,MM,dd,hh,h,mm,ss,ampm,HH,H,KK,K,kk,k;var value=new Object();if(y.length < 4){y=""+(y-0+1900);}value["y"]=""+y;value["yyyy"]=y;value["yy"]=y.substring(2,4);value["M"]=M;value["MM"]=LZ(M);value["MMM"]=MONTH_NAMES[M-1];value["NNN"]=MONTH_NAMES[M+11];value["d"]=d;value["dd"]=LZ(d);value["E"]=DAY_NAMES[E+7];value["EE"]=DAY_NAMES[E];value["H"]=H;value["HH"]=LZ(H);if(H==0){value["h"]=12;}else if(H>12){value["h"]=H-12;}else{value["h"]=H;}value["hh"]=LZ(value["h"]);if(H>11){value["K"]=H-12;}else{value["K"]=H;}value["k"]=H+1;value["KK"]=LZ(value["K"]);value["kk"]=LZ(value["k"]);if(H > 11){value["a"]="PM";}else{value["a"]="AM";}value["m"]=m;value["mm"]=LZ(m);value["s"]=s;value["ss"]=LZ(s);while(i_format < format.length){c=format.charAt(i_format);token="";while((format.charAt(i_format)==c) &&(i_format < format.length)){token += format.charAt(i_format++);}if(value[token] != null){result=result + value[token];}else{result=result + token;}}return result;}
function _isInteger(val){var digits="1234567890";for(var i=0;i < val.length;i++){if(digits.indexOf(val.charAt(i))==-1){return false;}}return true;}
function _getInt(str,i,minlength,maxlength){for(var x=maxlength;x>=minlength;x--){var token=str.substring(i,i+x);if(token.length < minlength){return null;}if(_isInteger(token)){return token;}}return null;}
function getDateFromFormat(val,format){val=val+"";format=format+"";var i_val=0;var i_format=0;var c="";var token="";var token2="";var x,y;var now=new Date();var year=now.getYear();var month=now.getMonth()+1;var date=1;var hh=now.getHours();var mm=now.getMinutes();var ss=now.getSeconds();var ampm="";while(i_format < format.length){c=format.charAt(i_format);token="";while((format.charAt(i_format)==c) &&(i_format < format.length)){token += format.charAt(i_format++);}if(token=="yyyy" || token=="yy" || token=="y"){if(token=="yyyy"){x=4;y=4;}if(token=="yy"){x=2;y=2;}if(token=="y"){x=2;y=4;}year=_getInt(val,i_val,x,y);if(year==null){return 0;}i_val += year.length;if(year.length==2){if(year > 70){year=1900+(year-0);}else{year=2000+(year-0);}}}else if(token=="MMM"||token=="NNN"){month=0;for(var i=0;i<MONTH_NAMES.length;i++){var month_name=MONTH_NAMES[i];if(val.substring(i_val,i_val+month_name.length).toLowerCase()==month_name.toLowerCase()){if(token=="MMM"||(token=="NNN"&&i>11)){month=i+1;if(month>12){month -= 12;}i_val += month_name.length;break;}}}if((month < 1)||(month>12)){return 0;}}else if(token=="EE"||token=="E"){for(var i=0;i<DAY_NAMES.length;i++){var day_name=DAY_NAMES[i];if(val.substring(i_val,i_val+day_name.length).toLowerCase()==day_name.toLowerCase()){i_val += day_name.length;break;}}}else if(token=="MM"||token=="M"){month=_getInt(val,i_val,token.length,2);if(month==null||(month<1)||(month>12)){return 0;}i_val+=month.length;}else if(token=="dd"||token=="d"){date=_getInt(val,i_val,token.length,2);if(date==null||(date<1)||(date>31)){return 0;}i_val+=date.length;}else if(token=="hh"||token=="h"){hh=_getInt(val,i_val,token.length,2);if(hh==null||(hh<1)||(hh>12)){return 0;}i_val+=hh.length;}else if(token=="HH"||token=="H"){hh=_getInt(val,i_val,token.length,2);if(hh==null||(hh<0)||(hh>23)){return 0;}i_val+=hh.length;}else if(token=="KK"||token=="K"){hh=_getInt(val,i_val,token.length,2);if(hh==null||(hh<0)||(hh>11)){return 0;}i_val+=hh.length;}else if(token=="kk"||token=="k"){hh=_getInt(val,i_val,token.length,2);if(hh==null||(hh<1)||(hh>24)){return 0;}i_val+=hh.length;hh--;}else if(token=="mm"||token=="m"){mm=_getInt(val,i_val,token.length,2);if(mm==null||(mm<0)||(mm>59)){return 0;}i_val+=mm.length;}else if(token=="ss"||token=="s"){ss=_getInt(val,i_val,token.length,2);if(ss==null||(ss<0)||(ss>59)){return 0;}i_val+=ss.length;}else if(token=="a"){if(val.substring(i_val,i_val+2).toLowerCase()=="am"){ampm="AM";}else if(val.substring(i_val,i_val+2).toLowerCase()=="pm"){ampm="PM";}else{return 0;}i_val+=2;}else{if(val.substring(i_val,i_val+token.length)!=token){return 0;}else{i_val+=token.length;}}}if(i_val != val.length){return 0;}if(month==2){if( ((year%4==0)&&(year%100 != 0) ) ||(year%400==0) ){if(date > 29){return 0;}}else{if(date > 28){return 0;}}}if((month==4)||(month==6)||(month==9)||(month==11)){if(date > 30){return 0;}}if(hh<12 && ampm=="PM"){hh=hh-0+12;}else if(hh>11 && ampm=="AM"){hh-=12;}var newdate=new Date(year,month-1,date,hh,mm,ss);return newdate.getTime();}
function parseDate(val){var preferEuro=(arguments.length==2)?arguments[1]:false;generalFormats=new Array('y-M-d','MMM d, y','MMM d,y','y-MMM-d','d-MMM-y','MMM d');monthFirst=new Array('M/d/y','M-d-y','M.d.y','MMM-d','M/d','M-d');dateFirst =new Array('d/M/y','d-M-y','d.M.y','d-MMM','d/M','d-M');var checkList=new Array('generalFormats',preferEuro?'dateFirst':'monthFirst',preferEuro?'monthFirst':'dateFirst');var d=null;for(var i=0;i<checkList.length;i++){var l=window[checkList[i]];for(var j=0;j<l.length;j++){d=getDateFromFormat(val,l[j]);if(d!=0){return new Date(d);}}}return null;}

// jquery.easing.js
/*
 * jQuery Easing v1.1.1 - http://gsgd.co.uk/sandbox/jquery.easing.php
 *
 * Uses the built in easing capabilities added in jQuery 1.1
 * to offer multiple easing options
 *
 * Copyright (c) 2007 George Smith
 * Licensed under the MIT License:
 *   http://www.opensource.org/licenses/mit-license.php
 */
jQuery.extend(jQuery.easing, {
    easein: function(x, t, b, c, d) {
        return c*(t/=d)*t + b; // in
    },
    easeinout: function(x, t, b, c, d) {
        if (t < d/2) return 2*c*t*t/(d*d) + b;
        var ts = t - d/2;
        return -2*c*ts*ts/(d*d) + 2*c*ts/d + c/2 + b;
    },
    easeout: function(x, t, b, c, d) {
        return -c*t*t/(d*d) + 2*c*t/d + b;
    },
    expoin: function(x, t, b, c, d) {
        var flip = 1;
        if (c < 0) {
            flip *= -1;
            c *= -1;
        }
        return flip * (Math.exp(Math.log(c)/d * t)) + b;
    },
    expoout: function(x, t, b, c, d) {
        var flip = 1;
        if (c < 0) {
            flip *= -1;
            c *= -1;
        }
        return flip * (-Math.exp(-Math.log(c)/d * (t-d)) + c + 1) + b;
    },
    expoinout: function(x, t, b, c, d) {
        var flip = 1;
        if (c < 0) {
            flip *= -1;
            c *= -1;
        }
        if (t < d/2) return flip * (Math.exp(Math.log(c/2)/(d/2) * t)) + b;
        return flip * (-Math.exp(-2*Math.log(c/2)/d * (t-d)) + c + 1) + b;
    },
    bouncein: function(x, t, b, c, d) {
        return c - jQuery.easing['bounceout'](x, d-t, 0, c, d) + b;
    },
    bounceout: function(x, t, b, c, d) {
        if ((t/=d) < (1/2.75)) {
            return c*(7.5625*t*t) + b;
        } else if (t < (2/2.75)) {
            return c*(7.5625*(t-=(1.5/2.75))*t + .75) + b;
        } else if (t < (2.5/2.75)) {
            return c*(7.5625*(t-=(2.25/2.75))*t + .9375) + b;
        } else {
            return c*(7.5625*(t-=(2.625/2.75))*t + .984375) + b;
        }
    },
    bounceinout: function(x, t, b, c, d) {
        if (t < d/2) return jQuery.easing['bouncein'] (x, t*2, 0, c, d) * .5 + b;
        return jQuery.easing['bounceout'] (x, t*2-d,0, c, d) * .5 + c*.5 + b;
    },
    elasin: function(x, t, b, c, d) {
        var s=1.70158;var p=0;var a=c;
        if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
        if (a < Math.abs(c)) { a=c; var s=p/4; }
        else var s = p/(2*Math.PI) * Math.asin (c/a);
        return -(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
    },
    elasout: function(x, t, b, c, d) {
        var s=1.70158;var p=0;var a=c;
        if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
        if (a < Math.abs(c)) { a=c; var s=p/4; }
        else var s = p/(2*Math.PI) * Math.asin (c/a);
        return a*Math.pow(2,-10*t) * Math.sin( (t*d-s)*(2*Math.PI)/p ) + c + b;
    },
    elasinout: function(x, t, b, c, d) {
        var s=1.70158;var p=0;var a=c;
        if (t==0) return b;  if ((t/=d/2)==2) return b+c;  if (!p) p=d*(.3*1.5);
        if (a < Math.abs(c)) { a=c; var s=p/4; }
        else var s = p/(2*Math.PI) * Math.asin (c/a);
        if (t < 1) return -.5*(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
        return a*Math.pow(2,-10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )*.5 + c + b;
    },
    backin: function(x, t, b, c, d) {
        var s=1.70158;
        return c*(t/=d)*t*((s+1)*t - s) + b;
    },
    backout: function(x, t, b, c, d) {
        var s=1.70158;
        return c*((t=t/d-1)*t*((s+1)*t + s) + 1) + b;
    },
    backinout: function(x, t, b, c, d) {
        var s=1.70158;
        if ((t/=d/2) < 1) return c/2*(t*t*(((s*=(1.525))+1)*t - s)) + b;
        return c/2*((t-=2)*t*(((s*=(1.525))+1)*t + s) + 2) + b;
    }
});
// jquery.dimensions.js
/* Copyright (c) 2007 Paul Bakaus (paul.bakaus@googlemail.com) and Brandon Aaron (brandon.aaron@gmail.com || http://brandonaaron.net)
 * Dual licensed under the MIT (http://www.opensource.org/licenses/mit-license.php)
 * and GPL (http://www.opensource.org/licenses/gpl-license.php) licenses.
 *
 * rcmeLastChangedDate: 2007-10-06 20:11:15 +0200 (Sa, 06 Okt 2007) rcme
 * rcmeRev: 3581 rcme
 *
 * Version: @VERSION
 *
 * Requires: jQuery 1.2+
 */

(function(rcme){

    rcme.dimensions = {
        version: '@VERSION'
    };

// Create innerHeight, innerWidth, outerHeight and outerWidth methods
    rcme.each( [ 'Height', 'Width' ], function(i, name){

        // innerHeight and innerWidth
        rcme.fn[ 'inner' + name ] = function() {
            if (!this[0]) return;

            var torl = name == 'Height' ? 'Top'    : 'Left',  // top or left
                borr = name == 'Height' ? 'Bottom' : 'Right'; // bottom or right

            return num( this, name.toLowerCase() ) + num(this, 'padding' + torl) + num(this, 'padding' + borr);
        };

        // outerHeight and outerWidth
        rcme.fn[ 'outer' + name ] = function(options) {
            if (!this[0]) return;

            var torl = name == 'Height' ? 'Top'    : 'Left',  // top or left
                borr = name == 'Height' ? 'Bottom' : 'Right'; // bottom or right

            options = rcme.extend({ margin: false }, options || {});

            return num( this, name.toLowerCase() )
                + num(this, 'border' + torl + 'Width') + num(this, 'border' + borr + 'Width')
                + num(this, 'padding' + torl) + num(this, 'padding' + borr)
                + (options.margin ? (num(this, 'margin' + torl) + num(this, 'margin' + borr)) : 0);
        };
    });

// Create scrollLeft and scrollTop methods
    rcme.each( ['Left', 'Top'], function(i, name) {
        rcme.fn[ 'scroll' + name ] = function(val) {
            if (!this[0]) return;

            return val != undefined ?

                // Set the scroll offset
                this.each(function() {
                    this == window || this == document ?
                        window.scrollTo(
                            name == 'Left' ? val : rcme(window)[ 'scrollLeft' ](),
                            name == 'Top'  ? val : rcme(window)[ 'scrollTop'  ]()
                        ) :
                        this[ 'scroll' + name ] = val;
                }) :

                // Return the scroll offset
                this[0] == window || this[0] == document ?
                self[ (name == 'Left' ? 'pageXOffset' : 'pageYOffset') ] ||
                rcme.boxModel && document.documentElement[ 'scroll' + name ] ||
                document.body[ 'scroll' + name ] :
                    this[0][ 'scroll' + name ];
        };
    });

    rcme.fn.extend({
        position: function() {
            var left = 0, top = 0, elem = this[0], offset, parentOffset, offsetParent, results;

            if (elem) {
                // Get *real* offsetParent
                offsetParent = this.offsetParent();

                // Get correct offsets
                offset       = this.offset();
                parentOffset = offsetParent.offset();

                // Subtract element margins
                offset.top  -= num(elem, 'marginTop');
                offset.left -= num(elem, 'marginLeft');

                // Add offsetParent borders
                parentOffset.top  += num(offsetParent, 'borderTopWidth');
                parentOffset.left += num(offsetParent, 'borderLeftWidth');

                // Subtract the two offsets
                results = {
                    top:  offset.top  - parentOffset.top,
                    left: offset.left - parentOffset.left
                };
            }

            return results;
        },

        offsetParent: function() {
            var offsetParent = this[0].offsetParent;
            while ( offsetParent && (!/^body|htmlrcme/i.test(offsetParent.tagName) && rcme.css(offsetParent, 'position') == 'static') )
                offsetParent = offsetParent.offsetParent;
            return rcme(offsetParent);
        }
    });

    function num(el, prop) {
        return parseInt(rcme.css(el.jquery?el[0]:el,prop))||0;
    };

})(jQuery);
// jquery.accordion.js
/*
 * jQuery UI Accordion 1.6
 *
 * Copyright (c) 2007 Jörn Zaefferer
 *
 * http://docs.jquery.com/UI/Accordion
 *
 * Dual licensed under the MIT and GPL licenses:
 *   http://www.opensource.org/licenses/mit-license.php
 *   http://www.gnu.org/licenses/gpl.html
 *
 * Revision: rcmeId: allscripts.js,v 1.33 2010-08-10 18:35:45 scott Exp rcme
 *
 */

;(function(rcme) {

// If the UI scope is not available, add it
    rcme.ui = rcme.ui || {};

    rcme.fn.extend({
        accordion: function(options, data) {
            var args = Array.prototype.slice.call(arguments, 1);

            return this.each(function() {
                if (typeof options == "string") {
                    var accordion = rcme.data(this, "ui-accordion");
                    accordion[options].apply(accordion, args);
                    // INIT with optional options
                } else if (!rcme(this).is(".ui-accordion"))
                    rcme.data(this, "ui-accordion", new rcme.ui.accordion(this, options));
            });
        },
        // deprecated, use accordion("activate", index) instead
        activate: function(index) {
            return this.accordion("activate", index);
        }
    });

    rcme.ui.accordion = function(container, options) {

        // setup configuration
        this.options = options = rcme.extend({}, rcme.ui.accordion.defaults, options);
        this.element = container;

        rcme(container).addClass("ui-accordion");

        if ( options.navigation ) {
            var current = rcme(container).find("a").filter(options.navigationFilter);
            if ( current.length ) {
                if ( current.filter(options.header).length ) {
                    options.active = current;
                } else {
                    options.active = current.parent().parent().prev();
                    current.addClass("current");
                }
            }
        }

        // calculate active if not specified, using the first header
        options.headers = rcme(container).find(options.header);
        options.active = findActive(options.headers, options.active);

        if ( options.fillSpace ) {
            var maxHeight = rcme(container).parent().height();
            options.headers.each(function() {
                maxHeight -= rcme(this).outerHeight();
            });
            var maxPadding = 0;
            options.headers.next().each(function() {
                maxPadding = Math.max(maxPadding, rcme(this).innerHeight() - rcme(this).height());
            }).height(maxHeight - maxPadding);
        } else if ( options.autoheight ) {
            var maxHeight = 0;
            options.headers.next().each(function() {
                maxHeight = Math.max(maxHeight, rcme(this).outerHeight());
            }).height(maxHeight);
        }

        options.headers
            .not(options.active || "")
            .next()
            .hide();
        options.active.parent().andSelf().addClass(options.selectedClass);

        if (options.event)
            rcme(container).bind((options.event) + ".ui-accordion", clickHandler);
    };

    rcme.ui.accordion.prototype = {
        activate: function(index) {
            // call clickHandler with custom event
            clickHandler.call(this.element, {
                target: findActive( this.options.headers, index )[0]
            });
        },

        enable: function() {
            this.options.disabled = false;
        },
        disable: function() {
            this.options.disabled = true;
        },
        destroy: function() {
            this.options.headers.next().css("display", "");
            if ( this.options.fillSpace || this.options.autoheight ) {
                this.options.headers.next().css("height", "");
            }
            rcme.removeData(this.element, "ui-accordion");
            rcme(this.element).removeClass("ui-accordion").unbind(".ui-accordion");
        }
    }

    function scopeCallback(callback, scope) {
        return function() {
            return callback.apply(scope, arguments);
        };
    }

    function completed(cancel) {
        // if removed while animated data can be empty
        if (!rcme.data(this, "ui-accordion"))
            return;
        var instance = rcme.data(this, "ui-accordion");
        var options = instance.options;
        options.running = cancel ? 0 : --options.running;
        if ( options.running )
            return;
        if ( options.clearStyle ) {
            options.toShow.add(options.toHide).css({
                height: "",
                overflow: ""
            });
        }
        rcme(this).triggerHandler("change.ui-accordion", [options.data], options.change);
    }

    function toggle(toShow, toHide, data, clickedActive, down) {
        var options = rcme.data(this, "ui-accordion").options;
        options.toShow = toShow;
        options.toHide = toHide;
        options.data = data;
        var complete = scopeCallback(completed, this);

        // count elements to animate
        options.running = toHide.size() == 0 ? toShow.size() : toHide.size();

        if ( options.animated ) {
            if ( !options.alwaysOpen && clickedActive ) {
                rcme.ui.accordion.animations[options.animated]({
                    toShow: jQuery([]),
                    toHide: toHide,
                    complete: complete,
                    down: down,
                    autoheight: options.autoheight
                });
            } else {
                rcme.ui.accordion.animations[options.animated]({
                    toShow: toShow,
                    toHide: toHide,
                    complete: complete,
                    down: down,
                    autoheight: options.autoheight
                });
            }
        } else {
            if ( !options.alwaysOpen && clickedActive ) {
                toShow.toggle();
            } else {
                toHide.hide();
                toShow.show();
            }
            complete(true);
        }
    }

    function clickHandler(event) {
        var options = rcme.data(this, "ui-accordion").options;
        if (options.disabled)
            return false;

        // called only when using activate(false) to close all parts programmatically
        if ( !event.target && !options.alwaysOpen ) {
            options.active.parent().andSelf().toggleClass(options.selectedClass);
            var toHide = options.active.next(),
                data = {
                    instance: this,
                    options: options,
                    newHeader: jQuery([]),
                    oldHeader: options.active,
                    newContent: jQuery([]),
                    oldContent: toHide
                },
                toShow = options.active = rcme([]);
            toggle.call(this, toShow, toHide, data );
            return false;
        }
        // get the click target
        var clicked = rcme(event.target);

        // due to the event delegation model, we have to check if one
        // of the parent elements is our actual header, and find that
        if ( clicked.parents(options.header).length )
            while ( !clicked.is(options.header) )
                clicked = clicked.parent();

        var clickedActive = clicked[0] == options.active[0];

        // if animations are still active, or the active header is the target, ignore click
        if (options.running || (options.alwaysOpen && clickedActive))
            return false;
        if (!clicked.is(options.header))
            return;

        // switch classes
        options.active.parent().andSelf().toggleClass(options.selectedClass);
        if ( !clickedActive ) {
            clicked.parent().andSelf().addClass(options.selectedClass);
        }

        // find elements to show and hide
        var toShow = clicked.next(),
            toHide = options.active.next(),
        //data = [clicked, options.active, toShow, toHide],
            data = {
                instance: this,
                options: options,
                newHeader: clicked,
                oldHeader: options.active,
                newContent: toShow,
                oldContent: toHide
            },
            down = options.headers.index( options.active[0] ) > options.headers.index( clicked[0] );

        options.active = clickedActive ? rcme([]) : clicked;
        toggle.call(this, toShow, toHide, data, clickedActive, down );

        return false;
    };

    function findActive(headers, selector) {
        return selector != undefined
            ? typeof selector == "number"
            ? headers.filter(":eq(" + selector + ")")
            : headers.not(headers.not(selector))
            : selector === false
            ? rcme([])
            : headers.filter(":eq(0)");
    }

    rcme.extend(rcme.ui.accordion, {
        defaults: {
            selectedClass: "selected",
            alwaysOpen: true,
            animated: 'slide',
            event: "click",
            header: "a",
            autoheight: true,
            running: 0,
            navigationFilter: function() {
                return this.href.toLowerCase() == location.href.toLowerCase();
            }
        },
        animations: {
            slide: function(options, additions) {
                options = rcme.extend({
                    easing: "swing",
                    duration: 300
                }, options, additions);
                if ( !options.toHide.size() ) {
                    options.toShow.animate({height: "show"}, options);
                    return;
                }
                var hideHeight = options.toHide.height(),
                    showHeight = options.toShow.height(),
                    difference = showHeight / hideHeight;
                options.toShow.css({ height: 0, overflow: 'hidden' }).show();
                options.toHide.filter(":hidden").each(options.complete).end().filter(":visible").animate({height:"hide"},{
                    step: function(now) {
                        var current = (hideHeight - now) * difference;
                        if (rcme.browser.msie || rcme.browser.opera) {
                            current = Math.ceil(current);
                        }
                        options.toShow.height( current );
                    },
                    duration: options.duration,
                    easing: options.easing,
                    complete: function() {
                        if ( !options.autoheight ) {
                            options.toShow.css("height", "auto");
                        }
                        options.complete();
                    }
                });
            },
            bounceslide: function(options) {
                this.slide(options, {
                    easing: options.down ? "bounceout" : "swing",
                    duration: options.down ? 1000 : 200
                });
            },
            easeslide: function(options) {
                this.slide(options, {
                    easing: "easeinout",
                    duration: 700
                })
            }
        }
    });

})(jQuery);

rcme(document).ready(function(){
    // accordion init
    rcme('#list1').accordion({
        autoheight: false,
        header: "h3",
        active: false,
        animated: 'easeslide',
        alwaysOpen: false,
        selectedClass: "nav-active"
    });
});

// jquery.cookie.js
/**
 * Cookie plugin
 *
 * Copyright (c) 2006 Klaus Hartl (stilbuero.de)
 * Dual licensed under the MIT and GPL licenses:
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 *
 */
jQuery.cookie=function(name,value,options){if(typeof value!='undefined'){options=options||{};if(value===null){value='';options.expires=-1;}var expires='';if(options.expires&&(typeof options.expires=='number'||options.expires.toUTCString)){var date;if(typeof options.expires=='number'){date=new Date();date.setTime(date.getTime()+(options.expires*24*60*60*1000));}else{date=options.expires;}expires='; expires='+date.toUTCString();}var path=options.path?'; path='+(options.path):'';var domain=options.domain?'; domain='+(options.domain):'';var secure=options.secure?'; secure':'';document.cookie=[name,'=',encodeURIComponent(value),expires,path,domain,secure].join('');}else{var cookieValue=null;if(document.cookie&&document.cookie!=''){var cookies=document.cookie.split(';');for(var i=0;i<cookies.length;i++){var cookie=jQuery.trim(cookies[i]);if(cookie.substring(0,name.length+1)==(name+'=')){cookieValue=decodeURIComponent(cookie.substring(name.length+1));break;}}}return cookieValue;}};
// thickbox.js
/*
 * Thickbox 3.1 - One Box To Rule Them All.
 * By Cody Lindley (http://www.codylindley.com)
 * Copyright (c) 2007 cody lindley
 * Licensed under the MIT License: http://www.opensource.org/licenses/mit-license.php
 *
 * Patched Version by Jamie Thompson - Fixes IE7 Positioning Issues
 * http://jamazon.co.uk/web/2008/03/17/thickbox-31-ie7-positioning-bug/
 */

var tb_baseToImage = rcme.cookie('cdn_url');
if (tb_baseToImage == null) {
    tb_baseToImage = '';
} else {
    tb_baseToImage = tb_baseToImage + '';
}
if (tb_baseToImage.length <= 0) {
    tb_baseToImage = "/cms/";
}
var tb_pathToImage = tb_baseToImage + "sites/all/modules/custom/cmebase/img/loadingAnimation.gif";

/*!!!!!!!!!!!!!!!!! edit below this line at your own risk !!!!!!!!!!!!!!!!!!!!!!!*/

// fixes the fact that ie7 now reports itself as MSIE 6.0 compatible


//on page load call tb_init
rcme(document).ready(function(){
    tb_init('a.thickbox, area.thickbox, input.thickbox');//pass where to apply thickbox
    imgLoader = new Image();// preload image
    imgLoader.src = tb_pathToImage;
});

//add thickbox to href & area elements that have a class of .thickbox
function tb_init(domChunk){
    rcme(domChunk).click(function(){
        var t = this.title || this.name || null;
        var a = this.href || this.alt;
        var g = this.rel || false;
        tb_show(t,a,g);
        this.blur();
        return false;
    }).removeClass('thickbox');
}

function tb_show(caption, url, imageGroup) {//function called when the user clicks on a thickbox link

    try {
        if (typeof document.body.style.maxHeight === "undefined") {//if IE 6
            rcme("body","html").css({height: "100%", width: "100%"});
            rcme("html").css("overflow","hidden");
            if (document.getElementById("TB_HideSelect") === null) {//iframe to hide select elements in ie6
                rcme("body").append("<iframe src='javascript:false;' id='TB_HideSelect'></iframe><div id='TB_overlay'></div><div id='TB_window'></div>");
                rcme("#TB_overlay").click(tb_remove);
            }
        }else{//all others
            if(document.getElementById("TB_overlay") === null){
                rcme("body").append("<div id='TB_overlay'></div><div id='TB_window'></div>");
                rcme("#TB_overlay").click(tb_remove);
            }
        }

        if(tb_detectMacXFF()){
            rcme("#TB_overlay").addClass("TB_overlayMacFFBGHack");//use png overlay so hide flash
        }else{
            rcme("#TB_overlay").addClass("TB_overlayBG");//use background and opacity
        }

        if(caption===null){caption="";}
        if (imgLoader.src.length > 0) {
            rcme("body").append("<div id='TB_load'><img src='"+imgLoader.src+"' /></div>");//add loader to the page
            rcme('#TB_load').show();//show loader
        }

        var baseURL;
        if(url.indexOf("?")!==-1){ //ff there is a query string involved
            baseURL = url.substr(0, url.indexOf("?"));
        }else{
            baseURL = url;
        }

        var urlString = /\.jpgrcme|\.jpegrcme|\.pngrcme|\.gifrcme|\.bmprcme/;
        var urlType = baseURL.toLowerCase().match(urlString);

        if(urlType == '.jpg' || urlType == '.jpeg' || urlType == '.png' || urlType == '.gif' || urlType == '.bmp'){//code to show images

            TB_PrevCaption = "";
            TB_PrevURL = "";
            TB_PrevHTML = "";
            TB_NextCaption = "";
            TB_NextURL = "";
            TB_NextHTML = "";
            TB_imageCount = "";
            TB_FoundURL = false;
            if(imageGroup){
                TB_TempArray = rcme("a[@rel="+imageGroup+"]").get();
                for (TB_Counter = 0; ((TB_Counter < TB_TempArray.length) && (TB_NextHTML === "")); TB_Counter++) {
                    var urlTypeTemp = TB_TempArray[TB_Counter].href.toLowerCase().match(urlString);
                    if (!(TB_TempArray[TB_Counter].href == url)) {
                        if (TB_FoundURL) {
                            TB_NextCaption = TB_TempArray[TB_Counter].title;
                            TB_NextURL = TB_TempArray[TB_Counter].href;
                            TB_NextHTML = "<span id='TB_next'>&nbsp;&nbsp;<a href='#'>Next &gt;</a></span>";
                        } else {
                            TB_PrevCaption = TB_TempArray[TB_Counter].title;
                            TB_PrevURL = TB_TempArray[TB_Counter].href;
                            TB_PrevHTML = "<span id='TB_prev'>&nbsp;&nbsp;<a href='#'>&lt; Prev</a></span>";
                        }
                    } else {
                        TB_FoundURL = true;
                        TB_imageCount = "Image " + (TB_Counter + 1) +" of "+ (TB_TempArray.length);
                    }
                }
            }

            imgPreloader = new Image();
            imgPreloader.onload = function(){
                imgPreloader.onload = null;

                // Resizing large images - orginal by Christian Montoya edited by me.
                var pagesize = tb_getPageSize();
                var x = pagesize[0] - 150;
                var y = pagesize[1] - 150;
                var imageWidth = imgPreloader.width;
                var imageHeight = imgPreloader.height;
                if (imageWidth > x) {
                    imageHeight = imageHeight * (x / imageWidth);
                    imageWidth = x;
                    if (imageHeight > y) {
                        imageWidth = imageWidth * (y / imageHeight);
                        imageHeight = y;
                    }
                } else if (imageHeight > y) {
                    imageWidth = imageWidth * (y / imageHeight);
                    imageHeight = y;
                    if (imageWidth > x) {
                        imageHeight = imageHeight * (x / imageWidth);
                        imageWidth = x;
                    }
                }
                // End Resizing

                TB_WIDTH = imageWidth + 30;
                TB_HEIGHT = imageHeight + 60;
                rcme("#TB_window").append("<img id='TB_Image' src='"+url+"' width='"+imageWidth+"' height='"+imageHeight+"' alt='"+caption+"'/>" + "<div id='TB_caption'>"+caption+"<div id='TB_secondLine'>" + TB_imageCount + TB_PrevHTML + TB_NextHTML + "</div></div><div id='TB_closeWindow'><a href='#' id='TB_closeWindowButton' title='Close'>close</a></div>");

                rcme("#TB_closeWindowButton").click(tb_remove);

                if (!(TB_PrevHTML === "")) {
                    function goPrev(){
                        if(rcme(document).unbind("click",goPrev)){rcme(document).unbind("click",goPrev);}
                        rcme("#TB_window").remove();
                        rcme("body").append("<div id='TB_window'></div>");
                        tb_show(TB_PrevCaption, TB_PrevURL, imageGroup);
                        return false;
                    }
                    rcme("#TB_prev").click(goPrev);
                }

                if (!(TB_NextHTML === "")) {
                    function goNext(){
                        rcme("#TB_window").remove();
                        rcme("body").append("<div id='TB_window'></div>");
                        tb_show(TB_NextCaption, TB_NextURL, imageGroup);
                        return false;
                    }
                    rcme("#TB_next").click(goNext);

                }

                document.onkeydown = function(e){
                    if (e == null) { // ie
                        keycode = event.keyCode;
                    } else { // mozilla
                        keycode = e.which;
                    }
                    if(keycode == 27){ // close
                        tb_remove();
                    } else if(keycode == 190){ // display previous image
                        if(!(TB_NextHTML == "")){
                            document.onkeydown = "";
                            goNext();
                        }
                    } else if(keycode == 188){ // display next image
                        if(!(TB_PrevHTML == "")){
                            document.onkeydown = "";
                            goPrev();
                        }
                    }
                };

                tb_position();
                rcme("#TB_load").remove();
                rcme("#TB_Image").click(tb_remove);
                rcme("#TB_window").css({display:"block"}); //for safari using css instead of show
            };

            imgPreloader.src = url;

            // ticket #3077
            rcme("#TB_window").addClass('slideshow');

        }else{//code to show html

            var queryString = url.replace(/^[^\?]+\??/,'');
            var params = tb_parseQuery( queryString );

            TB_WIDTH = (params['width']*1) + 0 || 630; //defaults to 630 if no paramaters were added to URL
            TB_HEIGHT = (params['height']*1) + 0 || getTBHeight(); //defaults to 440 if no paramaters were added to URL
            ajaxContentW = TB_WIDTH - 0;
            ajaxContentH = TB_HEIGHT - 0;

            if(url.indexOf('TB_iframe') != -1){// either iframe or ajax window
                urlNoQuery = url.split('TB_');
                rcme("#TB_iframeContent").remove();
                if(params['modal'] != "true"){//iframe no modal
                    // Name the window from the brand
                    rcme("#TB_window").append("<div id='TB_title'><div id='TB_ajaxWindowTitle'>"+caption+"</div><div id='TB_closeAjaxWindow'><a href='#' id='TB_closeWindowButton' title='Close'>close</a></div></div><iframe frameborder='0' hspace='0' src='"+urlNoQuery[0]+"' id='TB_iframeContent' name='"+find_cmecompanion_name()+"' onload='tb_showIframe()' allowtransparency=\"true\" style='width:"+(ajaxContentW + 29)+"px;height:"+(ajaxContentH + 17)+"px;' > </iframe>");
                }else{//iframe modal
                    rcme("#TB_overlay").unbind();
                    rcme("#TB_window").append("<iframe frameborder='0' hspace='0' src='"+urlNoQuery[0]+"' id='TB_iframeContent' name='TB_iframeContent"+Math.round(Math.random()*1000)+"' onload='tb_showIframe()' style='width:"+(ajaxContentW + 29)+"px;height:"+(ajaxContentH + 17)+"px;'> </iframe>");
                }
            }else{// not an iframe, ajax
                if(rcme("#TB_window").css("display") != "block"){
                    if(params['modal'] != "true"){//ajax no modal
                        rcme("#TB_window").append("<div id='TB_title'><div id='TB_ajaxWindowTitle'>"+caption+"</div><div id='TB_closeAjaxWindow'><a href='#' id='TB_closeWindowButton'>close</a></div></div><div id='TB_ajaxContent' style='width:"+ajaxContentW+"px;height:"+ajaxContentH+"px'></div>");
                    }else{//ajax modal
                        rcme("#TB_overlay").unbind();
                        rcme("#TB_window").append("<div id='TB_ajaxContent' class='TB_modal' style='width:"+ajaxContentW+"px;height:"+ajaxContentH+"px;'></div>");
                    }
                }else{//this means the window is already up, we are just loading new content via ajax
                    rcme("#TB_ajaxContent")[0].style.width = ajaxContentW +"px";
                    rcme("#TB_ajaxContent")[0].style.height = ajaxContentH +"px";
                    rcme("#TB_ajaxContent")[0].scrollTop = 0;
                    rcme("#TB_ajaxWindowTitle").html(caption);
                }
            }

            rcme("#TB_closeWindowButton").click(tb_remove);

            if(url.indexOf('TB_inline') != -1){
                rcme("#TB_ajaxContent").append(rcme('#' + params['inlineId']).children());
                rcme("#TB_window").unload(function () {
                    rcme('#' + params['inlineId']).append( rcme("#TB_ajaxContent").children() ); // move elements back when you're finished
                });
                tb_position();
                rcme("#TB_load").remove();
                rcme("#TB_window").css({display:"block"});
            }else if(url.indexOf('TB_iframe') != -1){
                tb_position();
                if(rcme.browser.safari || rcme.browser.msie){//safari & ie need help because it will not fire iframe onload
                    rcme("#TB_load").remove();
                    rcme("#TB_window").css({display:"block"});
                }
            }else{
                rcme("#TB_ajaxContent").load(url += "&random=" + (new Date().getTime()),function(){//to do a post change this load method
                    tb_position();
                    rcme("#TB_load").remove();
                    tb_init("#TB_ajaxContent a.thickbox");
                    rcme("#TB_window").css({display:"block"});
                });
            }

        }

        if(!params['modal']){
            document.onkeyup = function(e){
                if (e == null) { // ie
                    keycode = event.keyCode;
                } else { // mozilla
                    keycode = e.which;
                }
                if(keycode == 27){ // close
                    tb_remove();
                }
            };
        }

    } catch(e) {
        //nothing here
    }
}

//helper functions below
function tb_showIframe(){
    rcme("#TB_load").remove();
    rcme("#TB_window").css({display:"block"});
}

function tb_remove() {
    // This is the hack to make parent frame refresh on closing the CMECompanion
    // All parents should be refreshed except when the course is being played
    // when on the authoring tool

    /*
     var ref = location.href;
     if ((ref.indexOf('author.') >= 0)  || (ref.indexOf('peek.') >= 0) || (ref.indexOf('authoringjoanne.') >= 0) ) {
     // author site
     return false;
     }
     //
     if (ref.indexOf('/lms/') < 0 && ref.indexOf('author') < 0) {
     var pos = ref.indexOf('?comp=');
     if (pos > 0) {
     // Make sure to remove the link on the CMECompanion otherwise it keeps poping up!
     ref = ref.substr(0, pos);
     }
     window.location.href=ref;
     }
     */
    // Refresh only if coming from a page with no user logged in
    // (i.e. a page that contains the registration block)
    if (rcme("#list1").find(".cmeloginregistration").length > 0) {
        var ref = location.href;
        var pos = ref.indexOf('?comp=');
        if (pos > 0) {
            // Make sure to remove the link on the CMECompanion otherwise it keeps poping up!
            ref = ref.substr(0, pos);
        }
        window.location.href=ref;
    } else {
        // not redirecting, so do the usual tb_remove stuff
        rcme("#TB_imageOff").unbind("click");
        rcme("#TB_closeWindowButton").hide("click");
        rcme("#TB_window").fadeOut("fast",function(){rcme('#TB_window,#TB_overlay,#TB_HideSelect').trigger("unload").unbind().remove();});
        rcme("#TB_load").remove();
        if (typeof document.body.style.maxHeight == "undefined") {//if IE 6
            rcme("body","html").css({height: "auto", width: "auto"});
            rcme("html").css("overflow","");
        }
        document.onkeydown = "";
        document.onkeyup = "";
    }
    return false;
}

function tb_position() {
    rcme("#TB_window").css({marginLeft: '-' + parseInt((TB_WIDTH / 2),10) + 'px', width: TB_WIDTH + 'px'});

    if ( !(jQuery.browser.msie6)) { // take away IE6
        rcme("#TB_window").css({marginTop: '-' + parseInt((TB_HEIGHT / 2),10) + 'px'});
    }
}

function tb_parseQuery ( query ) {
    var Params = {};
    if ( ! query ) {return Params;}// return empty object
    var Pairs = query.split(/[;&]/);
    for ( var i = 0; i < Pairs.length; i++ ) {
        var KeyVal = Pairs[i].split('=');
        if ( ! KeyVal || KeyVal.length != 2 ) {continue;}
        var key = unescape( KeyVal[0] );
        var val = unescape( KeyVal[1] );
        val = val.replace(/\+/g, ' ');
        Params[key] = val;
    }
    return Params;
}

function tb_getPageSize(){
    var de = document.documentElement;
    var w = window.innerWidth || self.innerWidth || (de&&de.clientWidth) || document.body.clientWidth;
    var h = window.innerHeight || self.innerHeight || (de&&de.clientHeight) || document.body.clientHeight;
    arrayPageSize = [w,h];
    return arrayPageSize;
}

function tb_detectMacXFF() {
    var userAgent = navigator.userAgent.toLowerCase();
    if (userAgent.indexOf('mac') != -1 && userAgent.indexOf('firefox')!=-1) {
        return true;
    }
}

function getWindowHeight(win, doc) {
    var myHeight = 0;
    if ((win.innerHeight) && ( typeof( win.innerHeight ) == 'number' ))  {
        //Non-IE
        myHeight = win.innerHeight;
    } else if( doc.documentElement && (  doc.documentElement.clientHeight ) ) {
        //IE 6+ in 'standards compliant mode'
        myHeight = doc.documentElement.clientHeight;
    } else if( doc.body && ( doc.body.clientHeight ) ) {
        //IE 4 compatible
        myHeight = doc.body.clientHeight;
    }
    //alert('height = ' + myHeight);
    return myHeight;
}

function getTBHeight(){
    var h = getWindowHeight(window, window.document);
    var tbh = 0;
    if (h <= 560) {
        tbh = 400;
    } else if (h <= 740) {
        tbh = 550;
    } else {
        tbh = 700;
    }
    //alert('TB HEIGHT' + tbh);
    return tbh;
}
//nav.js
function navclick(el) {
    var rcmewait = rcme(el).next('div.divbg').find('div.divwait');
    if (rcmewait.length) {
        var rcmeajax = rcme('<div></div>').hide().css({ opacity: 0 }).insertAfter(rcmewait);
        if (el.id == 'tracker') rcmeajax.css({ paddingRight: 12 });	// layout tweak
        rcmeajax.load('/cms/getblock' + el.id, function() {		// el.id is 'planner' or 'tracker'
            tb_init(rcme('a.thickbox', rcmeajax));
            rcmewait.animate({ opacity: 0, height: 0 }, function() { rcmewait.remove() });
            rcmeajax.slideDown().animate({ opacity: 1 });
        });
    }
}


rcme(document).ready(function(){
    rcme("#biobutton1").click(function () {rcme("#biotext1").toggle();});
    rcme("#biobutton2").click(function () {rcme("#biotext2").toggle();});
    rcme("#biobutton3").click(function () {rcme("#biotext3").toggle();});
    rcme("#biobutton4").click(function () {rcme("#biotext4").toggle();});
    rcme("#biobutton5").click(function () {rcme("#biotext5").toggle();});
    rcme("#biobutton6").click(function () {rcme("#biotext6").toggle();});
    rcme("#biobutton7").click(function () {rcme("#biotext7").toggle();});
    rcme("#biobutton8").click(function () {rcme("#biotext8").toggle();});
    rcme("#biobutton9").click(function () {rcme("#biotext9").toggle();});
    rcme("#biobutton10").click(function () {rcme("#biotext10").toggle();});
});
/*
 * realcme.js
 */
function roll(img_name, img_src) {
    document[img_name].src = img_src;
}

/**
 * Returns the brand from the CMECompanion (name of the window);
 */
function get_bg_brand() {
    // Name of the window is the parent URL - extract the brand
    var url = window.name;
    if (url == '') {
        // The registration isn't happening in a window, its in the main page
        url = window.location.href;
    }
    var s = url.split('.');
    var b = '';
    if (s.length == 3) {
        // 3-level subdomain -> xxx.realcme.com
        b = s[0];
    }
    if (s.length == 4) {
        // 3-level subdomain -> something.xxx.realcme.com
        b = s[1];
    }
    if ((b == null) || (b.length <= 0) || (b == 'www')) {
        b = 'realcme';
    }
    return b;
}

/**
 * Returns the brand from the CMECompanion (name of the window);
 */
function get_bg_url() {
    // Name of the window is the parent URL
    return window.name;
}

/**
 * Returns the trimmed top URL (i,e, www.xxx.com) to be used as the CMECompanion name
 */
function find_cmecompanion_name() {
    var baseurl = window.location.href + '';
    var name = baseurl.substr(baseurl.indexOf('//') + 2);
    var pos = name.indexOf('/');
    if (pos > 0) {
        name = name.substr(0, pos);
    }
    return name;
}

/* Copyright (c) 2006 Brandon Aaron (http://brandonaaron.net)
 * Dual licensed under the MIT (http://www.opensource.org/licenses/mit-license.php)
 * and GPL (http://www.opensource.org/licenses/gpl-license.php) licenses.
 *
 * rcmeLastChangedDate: 2007-07-21 18:45:56 -0500 (Sat, 21 Jul 2007) rcme
 * rcmeRev: 2447 rcme
 *
 * Version 2.1.1
 * MODIFIED 04/16/2009 / SCOTT - the navigator test was looking for '6.0' to id IE6. But on a VISTA box, that also
 * matches "Windows NT 6.0;" which will appear in the userAgent for IE7.
 * The fix here is the patch proposed at -> http://plugins.jquery.com/node/5148
 */
(function(rcme){rcme.fn.bgIframe=rcme.fn.bgiframe=function(s){if(rcme.browser.msie&&rcme.browser.version<7){s=rcme.extend({top:'auto',left:'auto',width:'auto',height:'auto',opacity:true,src:'javascript:false;'},s||{});var prop=function(n){return n&&n.constructor==Number?n+'px':n;},html='<iframe class="bgiframe"frameborder="0"tabindex="-1"src="'+s.src+'"'+'style="display:block;position:absolute;z-index:-1;'+(s.opacity!==false?'filter:Alpha(Opacity=\'0\');':'')+'top:'+(s.top=='auto'?'expression(((parseInt(this.parentNode.currentStyle.borderTopWidth)||0)*-1)+\'px\')':prop(s.top))+';'+'left:'+(s.left=='auto'?'expression(((parseInt(this.parentNode.currentStyle.borderLeftWidth)||0)*-1)+\'px\')':prop(s.left))+';'+'width:'+(s.width=='auto'?'expression(this.parentNode.offsetWidth+\'px\')':prop(s.width))+';'+'height:'+(s.height=='auto'?'expression(this.parentNode.offsetHeight+\'px\')':prop(s.height))+';'+'"/>';return this.each(function(){if(rcme('> iframe.bgiframe',this).length==0)this.insertBefore(document.createElement(html),this.firstChild);});}return this;};})(jQuery);

/* Start Preview Code */

/* Start Live Query plugin code */

/* Copyright (c) 2007 Brandon Aaron (brandon.aaron@gmail.com || http://brandonaaron.net)
 * Dual licensed under the MIT (http://www.opensource.org/licenses/mit-license.php)
 * and GPL (http://www.opensource.org/licenses/gpl-license.php) licenses.
 *
 * Version: 1.0.2
 * Requires jQuery 1.1.3+
 * Docs: http://docs.jquery.com/Plugins/livequery
 */

(function(rcme) {

    rcme.extend(rcme.fn, {
        livequery: function(type, fn, fn2) {
            var self = this, q;

            // Handle different call patterns
            if (rcme.isFunction(type))
                fn2 = fn, fn = type, type = undefined;

            // See if Live Query already exists
            rcme.each( rcme.livequery.queries, function(i, query) {
                if ( self.selector == query.selector && self.context == query.context &&
                    type == query.type && (!fn || fn.rcmelqguid == query.fn.rcmelqguid) && (!fn2 || fn2.rcmelqguid == query.fn2.rcmelqguid) )
                // Found the query, exit the each loop
                    return (q = query) && false;
            });

            // Create new Live Query if it wasn't found
            q = q || new rcme.livequery(this.selector, this.context, type, fn, fn2);

            // Make sure it is running
            q.stopped = false;

            // Run it
            rcme.livequery.run( q.id );

            // Contnue the chain
            return this;
        },

        expire: function(type, fn, fn2) {
            var self = this;

            // Handle different call patterns
            if (rcme.isFunction(type))
                fn2 = fn, fn = type, type = undefined;

            // Find the Live Query based on arguments and stop it
            rcme.each( rcme.livequery.queries, function(i, query) {
                if ( self.selector == query.selector && self.context == query.context &&
                    (!type || type == query.type) && (!fn || fn.rcmelqguid == query.fn.rcmelqguid) && (!fn2 || fn2.rcmelqguid == query.fn2.rcmelqguid) && !this.stopped )
                    rcme.livequery.stop(query.id);
            });

            // Continue the chain
            return this;
        }
    });

    rcme.livequery = function(selector, context, type, fn, fn2) {
        this.selector = selector;
        this.context  = context || document;
        this.type     = type;
        this.fn       = fn;
        this.fn2      = fn2;
        this.elements = [];
        this.stopped  = false;

        // The id is the index of the Live Query in rcme.livequery.queries
        this.id = rcme.livequery.queries.push(this)-1;

        // Mark the functions for matching later on
        fn.rcmelqguid = fn.rcmelqguid || rcme.livequery.guid++;
        if (fn2) fn2.rcmelqguid = fn2.rcmelqguid || rcme.livequery.guid++;

        // Return the Live Query
        return this;
    };

    rcme.livequery.prototype = {
        stop: function() {
            var query = this;

            if ( this.type )
            // Unbind all bound events
                this.elements.unbind(this.type, this.fn);
            else if (this.fn2)
            // Call the second function for all matched elements
                this.elements.each(function(i, el) {
                    query.fn2.apply(el);
                });

            // Clear out matched elements
            this.elements = [];

            // Stop the Live Query from running until restarted
            this.stopped = true;
        },

        run: function() {
            // Short-circuit if stopped
            if ( this.stopped ) return;
            var query = this;

            var oEls = this.elements,
                els  = rcme(this.selector, this.context),
                nEls = els.not(oEls);

            // Set elements to the latest set of matched elements
            this.elements = els;

            if (this.type) {
                // Bind events to newly matched elements
                nEls.bind(this.type, this.fn);

                // Unbind events to elements no longer matched
                if (oEls.length > 0)
                    rcme.each(oEls, function(i, el) {
                        if ( rcme.inArray(el, els) < 0 )
                            rcme.event.remove(el, query.type, query.fn);
                    });
            }
            else {
                // Call the first function for newly matched elements
                nEls.each(function() {
                    query.fn.apply(this);
                });

                // Call the second function for elements no longer matched
                if ( this.fn2 && oEls.length > 0 )
                    rcme.each(oEls, function(i, el) {
                        if ( rcme.inArray(el, els) < 0 )
                            query.fn2.apply(el);
                    });
            }
        }
    };

    rcme.extend(rcme.livequery, {
        guid: 0,
        queries: [],
        queue: [],
        running: false,
        timeout: null,

        checkQueue: function() {
            if ( rcme.livequery.running && rcme.livequery.queue.length ) {
                var length = rcme.livequery.queue.length;
                // Run each Live Query currently in the queue
                while ( length-- )
                    rcme.livequery.queries[ rcme.livequery.queue.shift() ].run();
            }
        },

        pause: function() {
            // Don't run anymore Live Queries until restarted
            rcme.livequery.running = false;
        },

        play: function() {
            // Restart Live Queries
            rcme.livequery.running = true;
            // Request a run of the Live Queries
            rcme.livequery.run();
        },

        registerPlugin: function() {
            rcme.each( arguments, function(i,n) {
                // Short-circuit if the method doesn't exist
                if (!rcme.fn[n]) return;

                // Save a reference to the original method
                var old = rcme.fn[n];

                // Create a new method
                rcme.fn[n] = function() {
                    // Call the original method
                    var r = old.apply(this, arguments);

                    // Request a run of the Live Queries
                    rcme.livequery.run();

                    // Return the original methods result
                    return r;
                }
            });
        },

        run: function(id) {
            if (id != undefined) {
                // Put the particular Live Query in the queue if it doesn't already exist
                if ( rcme.inArray(id, rcme.livequery.queue) < 0 )
                    rcme.livequery.queue.push( id );
            }
            else
            // Put each Live Query in the queue if it doesn't already exist
                rcme.each( rcme.livequery.queries, function(id) {
                    if ( rcme.inArray(id, rcme.livequery.queue) < 0 )
                        rcme.livequery.queue.push( id );
                });

            // Clear timeout if it already exists
            if (rcme.livequery.timeout) clearTimeout(rcme.livequery.timeout);
            // Create a timeout to check the queue and actually run the Live Queries
            rcme.livequery.timeout = setTimeout(rcme.livequery.checkQueue, 20);
        },

        stop: function(id) {
            if (id != undefined)
            // Stop are particular Live Query
                rcme.livequery.queries[ id ].stop();
            else
            // Stop all Live Queries
                rcme.each( rcme.livequery.queries, function(id) {
                    rcme.livequery.queries[ id ].stop();
                });
        }
    });

// Register core DOM manipulation methods
    rcme.livequery.registerPlugin('append', 'prepend', 'after', 'before', 'wrap', 'attr', 'removeAttr', 'addClass', 'removeClass', 'toggleClass', 'empty', 'remove');

// Run Live Queries when the Document is ready
    rcme(function() { rcme.livequery.play(); });


// Save a reference to the original init method
    var init = rcme.prototype.init;

// Create a new init method that exposes two new properties: selector and context
    rcme.prototype.init = function(a,c) {
        // Call the original init and save the result
        var r = init.apply(this, arguments);

        // Copy over properties if they exist already
        if (a && a.selector)
            r.context = a.context, r.selector = a.selector;

        // Set properties
        if ( typeof a == 'string' )
            r.context = c || document, r.selector = a;

        // Return the result
        return r;
    };

// Give the init function the jQuery prototype for later instantiation (needed after Rev 4091)
    rcme.prototype.init.prototype = rcme.prototype;

})(jQuery);

/* End Live Query plugin code */

rcme(function(){
    // alert("Code in Preview Code section started loading."); // FOR TESTING ONLY
    // Script overrides CME Companion ThickBox settings
    var peek_wide = 800;
    var peek_narrow = 568;
    rcme('iframe[src*="/peek/"]')
        .livequery('load', function(event) {
            // alert('iFrame has been loaded'); // FOR TESTING ONLY
            // START TEMP CODE
            rcme("#TB_window").width(peek_wide).css({marginLeft: '-' + (peek_wide/2) + 'px'});
            rcme("#TB_iframeContent").width(peek_wide);
            // END TEMP CODE
            rcme('#TB_window').css("background-color","white").css("padding","4px");
            rcme('#TB_overlay').fadeTo("slow",".75");
            rcme('div#TB_ajaxWindowTitle').html('&nbsp;').css({top: '30px',left: '0px'});
            rcme('div#TB_ajaxWindowTitle a').css({color:'blue'});
            rcme('#TB_closeAjaxWindow').css({top: '-15px', left: '0px'});
            rcme('#TB_closeAjaxWindow a').css({color: 'blue'});
        });

    // Create resize helper function here
});

/* End Preview Code */


/* Start CME Authoring Tool Kit code */

function getGlobalToolSize() {
    var sz = { width: rcme(window).width() - 160, height: rcme(window).height() - 50 };
    if (sz.width < 720) sz.width = 720;		// width is limited by the global tool title "Front Matter Statements"
    if (sz.height < 360) sz.height = 360;
    return sz;
}

// document.ready
rcme(function() {
    function globalToolDropdownLinks(tool) {
        var sz = Drupal.gtsz = getGlobalToolSize();
        tb_show("", "/cms/globaltool/" + tool + "?node=-1&KeepThis=true&TB_iframe=true&height=" + sz.height + "&width=" + sz.width);
    }
    rcme('a.curriculum').click(function() {
        globalToolDropdownLinks('curriculum_auth');
    });
    rcme('a.picmelite').click(function() {
        globalToolDropdownLinks('picmelite_auth');
    });
    rcme('a.faculty').click(function() {
        globalToolDropdownLinks('faculty_auth');
    });
    rcme('a.learning_objectives').click(function() {
        globalToolDropdownLinks('learn_obj_auth');
    });
    rcme('a.quality_measures').click(function() {
        globalToolDropdownLinks('qual_meas_auth');
    });
    rcme('a.patients').click(function() {
        globalToolDropdownLinks('patient_auth');
    });
    rcme('a.consultants').click(function() {
        globalToolDropdownLinks('consultant_auth');
    });
    rcme('a.series').click(function() {
        globalToolDropdownLinks('series_auth');
    });
    rcme('a.certificate').click(function() {
        globalToolDropdownLinks('cert_design_auth');
    });
    rcme('a.surveys').click(function() {
        globalToolDropdownLinks('survey_auth');
    });
    rcme('a.references').click(function() {
        globalToolDropdownLinks('reference_auth');
    });
    rcme('a.relevant_terms').click(function() {
        globalToolDropdownLinks('tag/relevant_term');
    });
    rcme('a.front_matter').click(function() {
        globalToolDropdownLinks('fine_print_auth');
    });
    rcme('a.primary_audience').click(function() {
        globalToolDropdownLinks('tag/primary_audience');
    });
    rcme('a.evaluation_questions').click(function() {
        globalToolDropdownLinks('eval_ques_auth');
    });
    rcme('a.metrics').click(function() {
        globalToolDropdownLinks('metric_auth');
    });
    rcme('a.account_management').click(function() {
        globalToolDropdownLinks('account_management');
    });
});
/* End CME Authoring Tool Kit code */

// Start help text code
rcme(function() {
    if (rcme("title:contains(Create)").length) {
        rcme('#gt-header-txt:contains(Patient)').html("Create a New Patient");
        if (rcme("#gt-header-txt:contains(Statements)").length) {
            rcme('label:contains(Title)').html('Title for Statements:<span class="form-required" title="This field is required.">*</span>');
        }
    }

    if (rcme("#gt-header-txt:contains(Series)").length) {
        rcme('#field-series-icon-attach-wrapper legend+.description').html('Please upload an icon for this HarmonyRounds Series.');
        rcme('#field-series-icon-attach-wrapper #edit-field-series-icon-upload+.description').html('The dimensions of the icon you wish to use to represent the HarmonyRounds should be 43x43 pixels in size. In order to upload properly, the icon needs to be in one of the following formats: jpg, jpeg, png, or gif.');
    }

});
// End help text code

/* http://www.beyondstandards.com/archives/input-placeholders/ */
function activatePlaceholders() {
    //var detect = navigator.userAgent.toLowerCase();
    //if (detect.indexOf('safari') > 0) return false;
    var inputs = document.getElementsByTagName('input');
    for (var i=0;i<inputs.length;i++) {
        if (inputs[i].getAttribute('type') == 'text') {
            if (inputs[i].getAttribute('placeholder') && inputs[i].getAttribute('placeholder').length > 0) {
                inputs[i].value = inputs[i].getAttribute('placeholder');
                inputs[i].onclick = function() {
                    if (this.value == this.getAttribute('placeholder')) {
                        this.value = '';
                    }
                    return false;
                }
                inputs[i].onblur = function() {
                    if (this.value.length < 1) {
                        this.value = this.getAttribute('placeholder');
                    }
                }
            }
        }
    }
}

//new LANDING PAGE stuff

function relatedActivities(rcmetr, rowtitle) {
    var related, text, link, title, acts = [];
    var rcmerelated = rcmetr.find('td.related-activities');
    if (rcmerelated.length) {
        rcmerelated.find('a').each(function() {
            text = rcme(this).text();
            title = text.split(':')[0].split('-')[0];
            link = rcme(this).attr('href').replace(/utm_campaign=/, 'utm_campaign=popup');
            link = '<a href="' + link + '">' + title + '</a>';
            acts.push(link);
        });
    } else {
        related = rcmetr.find('td.view-field-node-data-field-activity-group-field-activity-group-nid a').text();
        if (related) {
            rcmerelated = rcmetr.parents('table').find('td.view-field-node-data-field-activity-group-field-activity-group-nid').contains(related);
            rcmerelated.each(function() {
                rcmerelated = rcme(this).parents('tr').find('td.view-field-node-title');
                text = rcmerelated.text();
                title = text.split(':')[0].split('-')[0];
                if (title != rowtitle) {
                    link = rcmerelated.html().replace(/utm_campaign=/, 'utm_campaign=popup');
                    acts.push(link.replace(text, title));
                }
            });
        }
    }
    return acts.join('<br />');
}

function buildPopup(rcmediv, rcmetr) {
    // get the icon
    var img = rcmetr.find('td.view-field-node-data-field-icon-field-icon-fid').html();

    // get the title
    var rcmetitle = rcmetr.find('td.view-field-node-title');
    var title = rcmetitle.html();
    var tt = rcmetitle.text().split(':')[0].split('-')[0];

    // analytics tracking adjustment
    title = title.replace(/utm_campaign=/, 'utm_campaign=popup');

    // get specialty & statement
    var spec = rcmetr.find('td.view-field-term-node-1-name').text();
    var stmt = rcmetr.find('td.view-field-node-data-field-patient-statement-field-patient-statement-value').text();
    if (stmt == null || stmt.length == 0) stmt = rcmetr.find('td.view-field-node-data-field-course-desc-field-course-desc-value').text();

    // get relevant terms (will be either in a list or presented flat, comma-separated)
    /*
     var terms, rcmeterms = rcmetr.find('td.view-field-term-node-3-name li a');
     if (rcmeterms.length == 0) {
     terms = rcmetr.find('td.view-field-term-node-3-name').text();
     } else {
     terms = [];
     rcmeterms.each(function() { terms.push(rcme(this).text()); });
     terms = terms.join(', ');
     }
     */

    // get faculty
    //var fac = rcmetr.find('td.view-field-node-data-field-faculty-field-faculty-value').text();

    // get begin date
    var launch = rcmetr.find('td.view-field-node-data-field-active-begin-date-field-active-begin-date-value').text();

    // get credits
    //var credits = rcmetr.find('td.view-field-node-data-field-all-credits-field-all-credits-value').html().replace(/<br>[^rcme]/gi, ', ');
    var tmp_credits = rcmetr.find('td.view-field-node-data-field-all-credits-field-all-credits-value').html().split("<br>");
    var credits = "";
    tmp_credits = tmp_credits.filter(Boolean);
    for (var i=0; i < tmp_credits.length-1; i++){
        credits += tmp_credits[i] + ", ";
    }
    credits += tmp_credits[tmp_credits.length-1];
    // get expiration date
    var expire = rcmetr.find('td.view-field-node-data-field-credit-expire-field-credit-expire-value').text();

    // activity group name
    var group = rcmetr.find('td.view-field-content-type-activity-group-field-group-name-value').text();

    // related activities
    var related = relatedActivities(rcmetr, tt);

    // popup template top and bottom
    var top = 	'<div class="top">' +
        '<table width="100%">' +
        '<tr><td class="image"></td> <td width="100%" class="title"></td></tr>' +
        '<tr><td class="stmt" colspan="2"></td></tr>' +
        '</table>';
    '</div>';
    var bottom ='<div class="bottom">' +
        '<table width="100%">' +
//						'<tr><td class="label">Terms</td><td width="100%" class="terms"></td></tr>' +
//						'<tr><td class="label">Chair</td><td width="100%" class="fac"></td></tr>' +
        '<tr><td class="label">Launched</td><td width="100%" class="launch"></td></tr>' +
        '<tr><td class="label">Credits</td><td width="100%" class="credits"></td></tr>' +
        '<tr><td class="label">Expires</td><td width="100%" class="expire"></td></tr>' +
        '<tr class="sep"><td colspan="2" width="100%" class="group"></td></tr>' +
        '<tr><td class="label">Related</td><td width="100%" class="related"></td></tr>' +
        '</table>' +
        '</div>';

    // build the popup divs
    rcmediv.empty();
    var rcmetop = rcme(top).appendTo(rcmediv);
    var rcmebottom = rcme(bottom).appendTo(rcmediv);

    // start assigning content
    rcmediv.find('td.image').append('<div class="image">' + img + '</div>');
    rcmediv.find('td.title').append('<div class="title">' + title + '</div><div class="spec">' + spec + '</div>');
    rcmediv.find('td.stmt').append('<div class="stmt">' + stmt + '</div>');

    /*
     if (terms)
     rcmediv.find('td.terms').append('<div class="terms">' + terms + '</div>');
     else
     rcmediv.find('td.terms').parent().remove();
     */
    /*
     if (fac)
     rcmediv.find('td.fac').append('<div class="fac">' + fac + '</div>');
     else
     rcmediv.find('td.fac').parent().remove();
     */
    if (launch)
        rcmediv.find('td.launch').append('<div class="launch">' + launch + '</div>');
    else
        rcmediv.find('td.launch').parent().remove();

    if (credits)
        rcmediv.find('td.credits').append('<div class="credits">' + credits + '</div>');
    else
        rcmediv.find('td.credits').parent().remove();

    if (expire)
        rcmediv.find('td.expire').append('<div class="expire">' + expire + '</div>');
    else
        rcmediv.find('td.expire').parent().remove();

    if (group)
        rcmediv.find('td.group').append('<div class="group">' + group + '</div>');
    else
        rcmediv.find('td.group').parent().remove();

    if (related)
        rcmediv.find('td.related').append('<div class="related">' + related + '</div>');
    else
        rcmediv.find('td.related').parent().remove();

    // adjust bottom height
    var hyt = rcmebottom.height();
    rcmebottom.css('background-position', '0 ' + (hyt - 270) + 'px').height(hyt + 20);
}

rcme(function() {

    activatePlaceholders();
    var m = window.location.search.match(/[?&]filter0=([^&]*)/);
    m && m[1] && rcme('input[placeholder]').val(m[1]);

    // edit submit (magnifying glass)
    var rcmetd = rcme('div.listing-tabs #edit-submit').parent();
    rcme('div.listing-tabs #edit-submit').insertAfter('div.listing-tabs #edit-filter0');
    rcmetd.remove();

    // table
    var rcmetable = rcme('div.view-content-listing-all table, div.view-content-listing-curriculum table, div.view-content-listing-archived table, div.listing-featured-table table');

    // ignore category headings & if no rows then this code isn't applicable
    var rcmerows = rcme('tr:not(:has(td.listingtopic,td.listingcurriculum))', rcmetable);
    if (rcmerows.length == 0) return;

    // create the popup
    var rcmediv = rcme('<div class="popover">').appendTo('body');
    var rcmearr = rcme('<div class="arrows">').appendTo(rcmediv);
    var rcmemain = rcme('<div class="popmain">').appendTo(rcmediv);

    var timeout = 0;

    rcmerows.hover(function(ev) {

        clearTimeout(timeout);

        var rcmerow = ev.target.tagName == 'TR' ? rcme(ev.target) : rcme(ev.target).parents('tr');
        var title = rcmerow.find('td.view-field-node-title').text();
        if (rcmemain.data('title') == title) return false;

        rcmemain.data('title', null);
        rcmediv.css('visibility', 'hidden');

        timeout = setTimeout(function() {

            // mouseenter logic - build and set visible
            buildPopup(rcmemain, rcmerow);
            /*
             // arrow on left or right side, depending on space
             var x = ev.clientX + 40;

             var left = rcmerow.find('td:visible:eq(2)').offset().left;
             if (left < x) left = x;

             if (rcme(window).width() < left + rcmediv.outerWidth(true)) {
             //rcmediv.addClass('flip-x');
             //rcmearr.addClass('flip-x');
             left = ev.clientX - 40 - rcmediv.outerWidth(true);
             } else {
             //rcmediv.removeClass('flip-x');
             //rcmearr.removeClass('flip-x');
             }
             */
            // arrow on left or right side, depending on space
            var left = ev.clientX + 40;
            if (rcme(window).width() < left + rcmediv.outerWidth(true)) {
                rcmediv.addClass('flip-x');
                rcmearr.addClass('flip-x');
                left = ev.clientX - 40 - rcmediv.outerWidth(true);
            } else {
                rcmediv.removeClass('flip-x');
                rcmearr.removeClass('flip-x');
            }

            // main popover
            var arrow = ev.eventY;
            var pos = rcmerow.offset();
            if (pos) {
                var hyt = rcmerow.outerHeight();
                var y = pos.top - rcme(window).scrollTop();
                arrow = y + hyt / 2;
            }

            var wh = rcme(window).height();
            var dh = rcmemain.height();

            // keep the popup entirely on-screen
            var top = arrow - dh / 2;	// top of popover div
            if (top < -20) {
                top = -20;
            } else if (wh - 15 < top + dh) {
                top = wh - 15 - dh;
            }
            rcmediv.css({ left: left, top: top }).css('visibility', 'visible');

            // figure out arrow top relative to main
            if (arrow < 60) {
                rcmearr.removeClass('set-lo').addClass('set-hi');
                if (arrow < 40) arrow = 40;
            } else if (wh - 60 < arrow) {
                rcmearr.removeClass('set-hi').addClass('set-lo');
                if (wh - 40 < arrow) arrow = wh - 40;
            } else {
                rcmearr.removeClass('set-hi set-lo');
            }
            rcmearr.css({ top: arrow - top - 34 });

        }, 1000);

    }, function(ev) {
        // mouseleave- popup disappears
        var el = ev.toElement || ev.relatedTarget || ev.originalEvent.toElement;
        if (rcme(el).parents('div.popover').length)
            return;
        clearTimeout(timeout);
        rcmemain.data('title', null);
        rcmediv.css('visibility', 'hidden');
    });

    rcmediv.bind('mouseleave', function() {
        clearTimeout(timeout);
        rcmemain.data('title', null);
        rcmediv.css('visibility', 'hidden');
    })

    // all/archive topic expand/collapse (1st level expando)
    rcme('div.view-content-listing-all > table, div.view-content-listing-archived > table')
        .find('td.listingtopic')
        .prepend(rcme('<span class="plus">+&nbsp;</span><span class="minus">&minus;&nbsp;</span>'))
        .parent('tr').show().click(function() {
            rcme(this).find('span.plus, span.minus').toggleClass('plus').toggleClass('minus');
            rcme(this).nextAll('tr').each(function() {
                if (rcme(this).find('td.listingtopic').length) return false;
                rcme(this).toggle();
            });
        });

    // curriculum topic expand/collapse (1st level expando)
    rcme('div.view-content-listing-curriculum > table')
        .find('td.listingtopic')
        .prepend(rcme('<span class="plus">+&nbsp;</span><span class="minus">&minus;&nbsp;</span>'))
        .parent().show().click(function() {
            rcme(this).find('span.plus, span.minus').toggleClass('plus').toggleClass('minus');
            rcme(this).nextAll('tr').each(function() {
                if (rcme(this).find('td.listingtopic').length) return false;
                rcme(this).toggleClass('hid');
            });
        });

    // curriculum curriculum expand/collapse (2nd level expando)
    rcme('div.view-content-listing-curriculum > table')
        .find('td.listingcurriculum')
        .prepend(rcme('<span class="indent"></span><span class="plus">+&nbsp;</span><span class="minus">&minus;&nbsp;</span>'))
        .parent('tr').show().click(function() {
            rcme(this).find('span.plus, span.minus').toggleClass('plus').toggleClass('minus');
            rcme(this).nextAll('tr').each(function() {
                if (rcme(this).find('td.listingtopic,td.listingcurriculum').length) return false;
                rcme(this).toggle();
            });
        });
});


/*
 //handle sizing of embedded iframes for already published activities
 rcme(function() {
 var rcmelmsview = rcme('iframe').load(function() {
 console.log('loaded ' + rcmelmsview('id'));
 var scormwin, lmswin = rcmelmsview[0].contentWindow, rcmercme = lmswin.jQuery, rcmercmescormmain = rcmercme('#scormmain');
 rcmelmsview.height(10 + (lmswin.document.body.offsetHeight || lmswin.document.body.scrollHeight));
 if (scormwin = rcmercmescormmain[0].contentWindow) {
 rcmercmescormmain.load(function() {
 rcmercmescormmain.height(10 + (scormwin.document.body.offsetHeight || scormwin.document.body.scrollHeight));
 });
 var count = 0, interval = setInterval(function() {
 if (scormwin.document) {
 rcmercmescormmain.height(10 + (scormwin.document.body.offsetHeight || scormwin.document.body.scrollHeight));
 rcmelmsview.height(10 + (lmswin.document.body.offsetHeight || lmswin.document.body.scrollHeight));
 }
 if (++count == 10) clearInterval(interval);
 }, 500);
 }
 });
 });
 */

/*

 // handle sizing of embedded iframes for already published activities
 rcme(function() {
 var rcmelmsview = rcme('#lmsview').load(function() {
 var scormwin, lmswin = rcmelmsview.get(0).contentWindow, rcmescormmain = lmswin.jQuery('#scormmain');
 rcmelmsview.height(10 + (lmswin.document.body.offsetHeight || lmswin.document.body.scrollHeight));
 if (scormwin = rcmescormmain.get(0).contentWindow) {
 // #forumframe might be dynamically loaded, so for 5 seconds, every 1/2 second - recompute frame heights ..
 var count = 0, interval = setInterval(function() {
 if (scormwin.document) {
 rcmescormmain.height(10 + (scormwin.document.body.offsetHeight || scormwin.document.body.scrollHeight));
 rcmelmsview.height(10 + (lmswin.document.body.offsetHeight || lmswin.document.body.scrollHeight));
 }
 if (++count == 10) clearInterval(interval);
 }, 500);
 }
 });
 });


 */


/*

 //handle sizing of embedded iframes for already published activities
 rcme(function() {
 var rcmelmsview = rcme('#lmsview').load(function() {
 var lmswin = rcmelmsview[0].contentWindow, rcmercme = lmswin.jQuery, rcmercmescormmain = rcmercme('#scormmain'), scormwin = rcmercmescormmain[0].contentWindow;
 rcmelmsview.height(rcme(lmswin).height());
 if (scormwin) {
 // #forumframe might be dynamically loaded, so for 5 seconds, every 1/2 second - recompute frame heights ..
 var count = 0, interval = setInterval(function() {
 if (scormwin.document) {
 rcmercmescormmain.height(rcmercme(scormwin).height());
 rcmelmsview.height(rcme(lmswin).height());
 }
 if (++count == 10) clearInterval(interval);
 }, 500);
 }
 });
 });


 */

/*
 rcme(function() {
 var prepframe = function() {
 var win = this.contentWindow;
 var rcmercme = win.jQuery;
 if (rcmercme) {
 console.log('prepping ' + this.id);
 rcme(this).load(prepframe);
 rcme(this).height(10 + (win.document.body.offsetHeight || win.document.body.scrollHeight));
 var count = 0, interval = setInterval(function() {
 if (0 < rcmercme('iframe').each(prepframe).length || ++count == 10) {
 clearInterval(interval);
 }
 }, 500);
 }
 };
 rcme('iframe').each(prepframe);
 });
 */

/*
 rcme(function() {
 rcme('lmsview').load();
 // lmsview has loaded
 var x = document.getElementById('scormmain');
 if (x) {
 console.log('resizing scormmain');
 x.style.height = parseInt(x.contentWindow.document.body.offsetHeight || x.contentWindow.document.body.scrollHeight || x.contentDocument.height + 50) + 'px';
 var win = x.contentWindow;
 if (win.resize_scormframe) {
 console.log('setting up resize_scormframe');
 win.resize_scormframe = function() {
 var x = document.getElementById('forumframe');


 if (win.resize_forumframe) {
 console.log('setting up resize_forumframe');
 win.resize_forumframe = function() {
 var x = document.getElementById('forumframe');
 if (x) {
 console.log('resizing forumframe');
 x.style.height = parseInt(x.contentWindow.document.body.offsetHeight || x.contentWindow.document.body.scrollHeight || x.contentDocument.height + 50)/5 + 'px';
 }
 };
 }
 };
 }
 }
 });
 */
rcme(document).ready(function(){
    rcme( ".reflections.postit" ).bind( "click", function() {
        var ctx = rcme(this);
        rcme(this).toggleClass('collapsed');
        rcme('.teaser', ctx).toggle();
        rcme('.header', ctx).toggle();
        rcme('.notes', ctx).toggle();
    });

});
