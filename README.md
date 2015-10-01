# pat_twitter_timeline

Textpattern CMS plugin.

Allow you to display your Twitter timelines with style. Browsers support: IE 7+ and all major modern browsers.

## Usage

    <txp:pat_twitter_timeline id="" account="" max_tweets="" enable_links="" show_time="" show_user="" show_retweets="" show_interaction="" show_images="" new_window="" show_permalinks="" show_year="" lang="" />


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

