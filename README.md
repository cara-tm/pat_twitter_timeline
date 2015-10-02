# pat_twitter_timeline

Textpattern CMS plugin.

Allow you to display your Twitter timelines with style, the way you want. Browsers support: IE 7+ and all major modern browsers.

## Usage

    <txp:pat_twitter_timeline id="" account="" max_tweets="" enable_links="" show_time="" show_user="" show_retweets="" show_interaction="" show_images="" new_window="" show_permalinks="" show_year="" language="" />


## Attributes

>    `id`: string (optional). The unique ID attribute of the HTML markup for the Twitter timeline. To be used only if you want multiple instance of this plugin. Default: __timeline1__.
> 
>    `account`: integer (required). Your Twitter account number. Default: __txp-fr__ (the french TXP community network).
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
        background: #55acee url("../images/twitter-icon-128x128.png") no-repeat scroll center 20px;
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
