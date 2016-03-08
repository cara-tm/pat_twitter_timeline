<?php
/*
 * pat_twitter_timeline Textpattern CMS plugin
 * @author:  © Patrick LEFEVRE, all rights reserved. <patrick[dot]lefevre[at]gmail[dot]com>
 * @link:    http://cara-tm.com
 * @type:    Public
 * @prefs:   no
 * @order:   5
 * @version: 0.4
 * @license: GPLv2
*/

/**
 * This plugin tags registry
 *
 */
if (class_exists('\Textpattern\Tag\Registry')) {
	Txp::get('\Textpattern\Tag\Registry')
		->register('pat_twitter_timeline');
}


/**
 * Generate Twitter timeline
 *
 * @param  array    Tag attributes
 * @return string   HTML tags and custom script
 */
function pat_twitter_timeline($atts)
{

	global $prefs;

	extract(lAtts(array(
		'id'			=> 'timeline1',
		'account' 		=> '378968489748226048',
		'max_tweets' 		=> 3,
		'enable_links' 		=> true,
		'show_time' 		=> true,
		'show_user' 		=> true,
		'show_retweets' 	=> true,
		'show_interaction' 	=> true,
		'show_images' 		=> true,
		'new_window' 		=> true,
		'show_permalinks' 	=> true,
		'show_year' 		=> true,
		'language' 		=> $prefs['language'],
	), $atts));

	$txt = '_pat_txt';

	$language !== $prefs['language'] ? $prefs['language'] = load_lang($language) : '';
	$lang = strtolower( substr($language, 0, 2) );
	$list = 'months_'.$lang.'=["'.$txt($language, 'january').'","'.$txt($language, 'february').'","'.$txt($language, 'march').'","'.$txt($language, 'april').'","'.$txt($language, 'may').'","'.$txt($language, 'june').'","'.$txt($language, 'july').'","'.$txt($language, 'august').'","'.$txt($language, 'september').'","'.$txt($language, 'october').'","'.$txt($language, 'november').'","'.$txt($language, 'december').'"]';
	'true' === $show_year ? $el = 'year' : $el = '""';

	$out = <<<EOF

		<div id="$id"></div>
<script>
/*!
* Twitter Post Fetcher v15.0.1
* Coded by Jason Mayes 2015. www.jasonmayes.com/projects/twitterApi/
* Github: https://github.com/jasonmayes/Twitter-Post-Fetcher
*/
(function(C,p){"function"===typeof define&&define.amd?define([],p):"object"===typeof exports?module.exports=p():p()})(this,function(){function C(a){if(null===r){for(var g=a.length,c=0,k=document.getElementById(D),f="<ul>";c<g;)f+="<li>"+a[c]+"</li>",c++;k.innerHTML=f+"</ul>"}else r(a)}function p(a){return a.replace(/<b[^>]*>(.*?)<\/b>/gi,function(a,c){return c}).replace(/class="(?!(tco-hidden|tco-display|tco-ellipsis))+.*?"|data-query-source=".*?"|dir=".*?"|rel=".*?"/gi,"")}function E(a){a=a.getElementsByTagName("a");
for(var g=a.length-1;0<=g;g--)a[g].setAttribute("target","_blank")}function l(a,g){for(var c=[],k=new RegExp("(^| )"+g+"( |$)"),f=a.getElementsByTagName("*"),h=0,b=f.length;h<b;h++)k.test(f[h].className)&&c.push(f[h]);return c}function F(a){if(void 0!==a&&0<=a.innerHTML.indexOf("data-srcset"))return a=a.innerHTML.match(/data-srcset="([A-z0-9%_\.-]+)/i)[0],decodeURIComponent(a).split('"')[1]}var D="",g=20,G=!0,v=[],x=!1,y=!0,w=!0,z=null,A=!0,B=!0,r=null,H=!0,I=!1,t=!0,J=!0,K=!1,m=null,L={fetch:function(a){void 0===
a.maxTweets&&(a.maxTweets=20);void 0===a.enableLinks&&(a.enableLinks=!0);void 0===a.showUser&&(a.showUser=!0);void 0===a.showTime&&(a.showTime=!0);void 0===a.dateFunction&&(a.dateFunction="default");void 0===a.showRetweet&&(a.showRetweet=!0);void 0===a.customCallback&&(a.customCallback=null);void 0===a.showInteraction&&(a.showInteraction=!0);void 0===a.showImages&&(a.showImages=!1);void 0===a.linksInNewWindow&&(a.linksInNewWindow=!0);void 0===a.showPermalinks&&(a.showPermalinks=!0);void 0===a.dataOnly&&
(a.dataOnly=!1);if(x)v.push(a);else{x=!0;D=a.domId;g=a.maxTweets;G=a.enableLinks;w=a.showUser;y=a.showTime;B=a.showRetweet;z=a.dateFunction;r=a.customCallback;H=a.showInteraction;I=a.showImages;t=a.linksInNewWindow;J=a.showPermalinks;K=a.dataOnly;var l=document.getElementsByTagName("head")[0];null!==m&&l.removeChild(m);m=document.createElement("script");m.type="text/javascript";m.src="https://cdn.syndication.twimg.com/widgets/timelines/"+a.id+"?&lang="+(a.lang||"en")+"&callback=twitterFetcher.callback&suppress_response_codes=true&rnd="+
Math.random();l.appendChild(m)}},callback:function(a){function m(a){var b=a.getElementsByTagName("img")[0];b.src=b.getAttribute("data-src-2x");return a}var c=document.createElement("div");c.innerHTML=a.body;"undefined"===typeof c.getElementsByClassName&&(A=!1);a=[];var k=[],f=[],h=[],b=[],q=[],n=[],e=0;if(A)for(c=c.getElementsByClassName("timeline-Tweet");e<c.length;){0<c[e].getElementsByClassName("timeline-Tweet-retweetCredit").length?b.push(!0):b.push(!1);if(!b[e]||b[e]&&B)a.push(c[e].getElementsByClassName("timeline-Tweet-text")[0]),
q.push(c[e].getAttribute("data-tweet-id")),k.push(m(c[e].getElementsByClassName("timeline-Tweet-author")[0])),f.push(c[e].getElementsByClassName("dt-updated")[0]),n.push(c[e].getElementsByClassName("timeline-Tweet-timestamp")[0]),void 0!==c[e].getElementsByClassName("timeline-Tweet-media")[0]?h.push(c[e].getElementsByClassName("timeline-Tweet-media")[0]):h.push(void 0);e++}else for(c=l(c,"timeline-Tweet");e<c.length;){0<l(c[e],"timeline-Tweet-retweetCredit").length?b.push(!0):b.push(!1);if(!b[e]||
b[e]&&B)a.push(l(c[e],"timeline-Tweet-text")[0]),q.push(c[e].getAttribute("data-tweet-id")),k.push(m(l(c[e],"timeline-Tweet-author")[0])),f.push(l(c[e],"dt-updated")[0]),n.push(l(c[e],"timeline-Tweet-timestamp")[0]),void 0!==l(c[e],"timeline-Tweet-media")[0]?h.push(l(c[e],"timeline-Tweet-media")[0]):h.push(void 0);e++}a.length>g&&(a.splice(g,a.length-g),k.splice(g,k.length-g),f.splice(g,f.length-g),b.splice(g,b.length-g),h.splice(g,h.length-g),n.splice(g,n.length-g));var c=[],e=a.length,d=0;if(K)for(;d<
e;)c.push({tweet:a[d].innerHTML,author:k[d].innerHTML,time:f[d].textContent,image:F(h[d]),rt:b[d],tid:q[d],permalinkURL:void 0===n[d]?"":n[d].href}),d++;else for(;d<e;){if("string"!==typeof z){var b=f[d].getAttribute("datetime"),u=new Date(f[d].getAttribute("datetime").replace(/-/g,"/").replace("T"," ").split("+")[0]),b=z(u,b);f[d].setAttribute("aria-label",b);if(a[d].textContent)if(A)f[d].textContent=b;else{var u=document.createElement("p"),r=document.createTextNode(b);u.appendChild(r);u.setAttribute("aria-label",
b);f[d]=u}else f[d].textContent=b}b="";G?(t&&(E(a[d]),w&&E(k[d])),w&&(b+='<div class="user">'+p(k[d].innerHTML)+"</div>"),b+='<p class="tweet">'+p(a[d].innerHTML)+"</p>",y&&(b=J?b+('<p class="timePosted"><a href="'+n[d]+'" target="_blank">'+f[d].getAttribute("aria-label")+"</a></p>"):b+('<p class="timePosted">'+f[d].getAttribute("aria-label")+"</p>"))):(w&&(b+='<p class="user">'+k[d].textContent+"</p>"),b+='<p class="tweet">'+a[d].textContent+"</p>",y&&(b+='<p class="timePosted">'+f[d].textContent+"</p>"));H&&(b+=
'<p class="interact"><a href="https://twitter.com/intent/tweet?in_reply_to='+q[d]+'" class="twitter_reply_icon"'+(t?' target="_blank">':">")+'{$txt($language, 'reply')}</a><a href="https://twitter.com/intent/retweet?tweet_id='+q[d]+'" class="twitter_retweet_icon"'+(t?' target="_blank">':">")+'{$txt($language, 'retweet')}</a><a href="https://twitter.com/intent/favorite?tweet_id='+q[d]+'" class="twitter_fav_icon"'+(t?' target="_blank">':">")+"{$txt($language, 'favorite')}</a></p>");I&&void 0!==h[d]&&(b+='<div class="media"><img src="'+F(h[d])+'" alt="{$txt($language, 'image_from_tweet')}" /></div>');
c.push(b);d++}C(c);x=!1;0<v.length&&(L.fetch(v[0]),v.splice(0,1))}};return window.twitterFetcher=L});var $id={
"id":'$account',"domId":'$id',"maxTweets":$max_tweets,"enableLinks":$enable_links,"showUser":$show_user,"showTime":$show_time,"showRetweet":$show_retweets,"showInteraction":$show_interaction,"showImages":$show_images,"dateFunction":dateFormatter,"linksInNewWindow":$new_window,"showPermalinks":$show_permalinks,"lang":"$lang"};function dateFormatter(date){var day=date.getDate(),month=date.getMonth(),{$list},year=date.getFullYear();return day+" "+months_{$lang}[month]+" "+{$el};};twitterFetcher.fetch($id);</script>

EOF;


	foreach ($atts as $value) {
 		if ( empty($value) )
			return trigger_error('missing required attibute', E_USER_WARNING);
	}

	return $out;

}


/**
 * Load proper language strings
 *
 * @param  string   $lang   ISO country code
 * @param  string   $str    word
 * @return string   translation
 */
function _pat_txt($lang, $str)
{

	global $prefs;

	if ($lang !== $prefs['language'])
		$out = $prefs['language'][$str];
	else
		$out = gTxt($str);

	return $out;

}
