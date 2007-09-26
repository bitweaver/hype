{strip}
{if $gHypeSystem->getPluginStyle('stumbleupon') == 'icon'}
	<a href="http://www.stumbleupon.com/submit?url={$gContent->getDisplayUri()|escape:'url'}&amp;title={$gContent->getTitle()|escape:'url'}&amp;bodytext={$parsed_data|escape:'url'|truncate:350}" />{biticon ipackage="hype" iname="su-wide" iexplain="stumbleupon this!" iforce="icon"}</a>
{elseif $gHypeSystem->getPluginStyle('stumbleupon') == 'text-icon'}
	{biticon ipackage="hype" iname="su" iexplain="stumbleupon this!" iforce="icon"}<a href="http://www.stumbleupon.com/submit?url={$gContent->getDisplayUri()|escape:'url'}&amp;title={$gContent->getTitle()|escape:'url'}&amp;bodytext={$parsed_data|escape:'url'|truncate:350}" />{tr}stumbleupon!{/tr}</a>
{else}
	<a href="http://www.stumbleupon.com/submit?url={$gContent->getDisplayUri()|escape:'url'}&amp;title={$gContent->getTitle()|escape:'url'}&amp;bodytext={$parsed_data|escape:'url'|truncate:350}" />{biticon ipackage="hype" iname="su" iexplain="stumbleupon this!" iforce="icon"}</a>
{/if}
{/strip}