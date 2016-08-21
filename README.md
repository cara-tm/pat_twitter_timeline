# pat_twitter_timeline

Textpattern CMS plugin.

Allow you to display your Twitter timelines with style, the way you want. Browsers support: IE 7+ and all major modern browsers.

![pat-twitter-timeline sneak peek](http://s3.postimg.org/xmn43fkn7/image.png)

## Usage

    <txp:pat_twitter_timeline id="" account="" max_tweets="" enable_links="" show_time="" show_user="" show_retweets="" show_interaction="" show_images="" new_window="" show_permalinks="" show_year="" language="" />


## Attributes

>    `id`: string (optional). The unique ID attribute of the HTML markup for the Twitter timeline. To be used only if you want multiple instance of this plugin. Default: __timeline1__.
> 
>    `account`: integer (required). Your Twitter account number. This is a 18 digit number. You can find it when you create a new Widget from your settings account. Default: __txp-fr__ (the french TXP community network).
> 
>    `max_tweets`: integer (optional). The number of Tweets to display. Default: __3__.
> 
>    `enable_links`: boolean (optional). automatically hyperlinks URLs, user mentions and hashtags. Default: __true__.
> 
>    `show_time`: boolean (optional). Display the date of the Tweets. Default: __true__.
> 
>    `show_user`: boolean (optional). Display the user account into the Tweets. Default: __true__.
> 
>    `show_retweets`: boolean (optional). Show the retweets into the timeline. Default: __true__.
> 
>    `show_interaction`: boolean (optional). Set __false__ if you don't want links for Reply, Retweet and Favourite to show. Default: __true__.
> 
>    `show_images`: boolean (optional). Display the image link into the timeline if the Tweets have images attached to. Default: __true__.
> 
>    `new_window`: boolean (optional). Set __false__ if you don't want links to open in new window. Default: __true__.
> 
>    `show_permalinks`: boolean (optional). Set __false__ if you don't want time to be permalinked. Default: __true__.
> 
>    `show_year`: boolean (optional). Set __false__ if you don't want to display the year for the Tweet date. Default: __true__.
> 
>    `language`: string (optional). Sets the language for translation (i18n support). Default: __TXP lang prefs__.
> 

## CSS styles examples

1°. Display your timeline into a "Flat" blue square with a big white Twitter icon on the top (perfect place: your website sidebar):

    /*
    Assuming your id attribute is set to "timeline1"
    */
    #timeline1 ul {padding-left:0 !important}
    #timeline1 ul li {
        margin:2em 0px;
        padding:10em 1em 1em;
        background: #55acee url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAACACAMAAAD04JH5AAABfVBMVEUAAAD////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////w/VAaAAAAfnRSTlMAAAIEBggKDA4QEhQWGBocHiAiJCYoKiwuMDI0Njg6PD5AQkRGSEpMTlBSVFZYWlxeYGJkZmhqbG5wcnR2eHp8foGDhYeJi42PkZWXmZudn6Gjpaepq62vsbO1t7m7vb/Bw8XHycvNz9HT1dfZ293h4+Xn6evt7/Hz9ff5+/2+yHFiAAAEo0lEQVQYGe3B+SNUawAG4Pc7ZxqGKSNZ0qWylKvIlmsoW1ou4VaWmwoVWS6FodnO9/7tV6SGOTNzzneWn+Z5UFRUVFRU5L4r95/MLr57t7Qw+7T/dhA+qxrdlMyQXOgsgW9E83vJLN+fR2BGXG+Fu+pXaS49WYaLROsqW+Cm4AuDOe13CGQKdG6QGwIZ7jfCkdpt5jUVwBlRObbHY+3IoO8mmuFAW5wFfAzjROmDD5I/fBLI0E4mm6GsJ82CdmqFVtm7mOAp2YAMYplk8g4UdRm0IL2xz99mkKlC8ljqDpS0pGjbbgiZ+nki1QYFVYe0LV6Hc97yVKodtgU+0rZUC87RYvwp3Qm7Bmlb+h5OaWU4UclfjKiALZHvtCt1Hz+IisH1ZzjRxN/kUx12zNCueCsAvTq6anAriBPdzDRfAuuqUrRpuy5wtWv2K4/Fa3AqynPWI7DsOW2Sy6sHPCXb8dMwzztoFbCmZJ/K5COcGeEFxngAltylumcCZ6LM8rkGVryksmkNv/QyW2IwgIK0Hap6reO3NppZbxAooDxJRa90ZLhGU8ZMBfKroRo5pSOTnqS5+FgI+dymEjmq4RzxibnEhkPIrZ0qEp24aJS5xcYrkMsDKvivDln+YD7J2RsaTPVSQS+yaTvMS649LBfI1kcFHTAxxELiix0hgQt6qKANJsJJFhZf6q/SkamdCppgZoKWyJ3Z7uqgwE83qaABZkIxWnb4aXKgtao0IBAxaF8tTHXTpuTe5vv5NO2LwJQ2R5+UwVz5V/oiHUAONTH6YV9HlpDADzfj9MGmhiwf3tRrONZ4QO+9Q7ZlGqv9EQ2o3qHnXiLbPI+lt1723ar/TK8NI9vfPCOT9No9ZBugj+qQrZX+SQWRLSzpmw2BbOILfTMDM0P0TQ/MhJP0yzWYmqFP9nSYqjboj1fIYZb+6EQOkQT9kA4jl8f0w4pALpe+0AdR5FZ9SM8ZEeRxK0mvLQvk05agx3qQX/N3eipRhgKu79BLr1FQ+F96qBGFad0xemVNgxXhiRi90QWLQv0bku7bD8IyvX5kg24bRGFNE9GHfX1/DY1PfUzSZQelKKye3nkEC7R1emW/FFZ00Ct9sETfoDc2ArCmVdILsgUWaYv0woIGqyr26b7DCljXlKbrumHHgKTLljTYoY1IuuogAnu0EUkXGXdgl+hK0j0TAvY1bNMtKwGoKHmRoit2L0ONqJkz6NxRHZSJuskjOpS+C0dK26Z3JdUZvQJO6ZdbBqc2qURGBdygdcaoZESDG64sSKqQTzS4QOs5pBI5rMEF9SuSSowBAeci02mqSXQIOFY5maSig0Y4pd2aS1HVehUcqny8JalKTgfhhF4/smZQXbxbg7LQzejioaQTq1Wwo7rjRFd3/9DY5MJ2mg4lHumwRR+I00VLVbDtyoxBl3y9p0FFzZykCw4Hg1Akal8bdOhovAxOXJ1M0IGDxyE4VT78jWrk564g3KD/uWTQttjkDQHXhB+uGLQh9k9rAO4S5Z1vDmhFeu1Jgw5PaDV9M1sG89h7O9ZcAm9dut45Oru8cySZIfVtff5pX1MYRUVFRUVFbvkfzK5mEguXqjQAAAAASUVORK5CYII=") no-repeat scroll center 20px;
        color:#fff
    }
    #timeline1 .tweet,#timeline1 a {color: #fff}
    #timeline1 .user,#timeline1 .timePosted {margin: 1em 0;text-align: center}
    #timeline1 .interact {text-align: center}
    #timeline1 .interact a {margin: 0 .5em;text-decoration: underline !important}
    #timeline1 .interact a:hover {text-decoration: none !important}

2°. Display your timeline text inline with a blue "Retweet" button (perfect place: your website footer):

    /*
    Assuming your id attribute is set to "timeline2"
    */
    #timeline2 ul {list-style:none}
    #timeline2 .interact {margin-right: 20%;text-align: right}
    #timeline2 .twitter_reply_icon,#timeline2 .twitter_fav_icon {display: none}
    #timeline2 .twitter_retweet_icon {
        display: inline-block;
        width: auto;
        height: 2em;
        padding: 0px 8px 0px 24px;
        background: #55acee url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABCUlEQVQ4jaWSvS4EURiGn2+y2UK2FHEBspWoNxoiqo1CIeICXICIu1Bu4QJUGo0KjUSEhih1ChGiIiQKNo9iZ9idzIxd3vI73/tzznvgn4hhltRJYBmoA0cRcZPOG6gT6mYFeV598Qcf6o56rM6ittODbbWWI9fUO4txqW6gtnLDtpqkAs0SsuqhOoaapMR+3Ku7aqdCYD2LuaAeqN2K5SIsZQLj6uuI5K69Zr4fa1V9H0HgLF9VQ92zV9EwWMm4CUBEvAFPwECNJTgB9os+DOqaelrhfDtw9yyBCjAFNIHpEudrYC4iHvPOi+p5heuDuqXWi1SjL8EM0AKyiM/AFXAREZ+/vsxf8QWh+QbKezZPWwAAAABJRU5ErkJggg==") no-repeat scroll 5px 50%;
        color: #fff;
        font-size: .9em;
        line-height: 2em;
        border-radius:3px
    }
