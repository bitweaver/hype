{strip}
{if $gHypeSystem->getPluginStyle('furl') == 'icon'}
	<a href="http://www.furl.net/storeIt.jsp?u={$gContent->getDisplayUri()|escape:'url'}&amp;t={$gContent->getTitle()|escape:'url'}&amp;nostatic=1&amp;name=&amp;rx_id=">{biticon ipackage="hype" iname="furl-wide" iexplain="Furl this!" iforce="icon"}</a>
{elseif $gHypeSystem->getPluginStyle('furl') == 'text-icon'}
	{biticon ipackage="hype" iname="furl" iexplain="Furl this!" iforce="icon"}<a href="http://www.furl.net/storeIt.jsp?u={$gContent->getDisplayUri()|escape:'url'}&amp;t={$gContent->getTitle()|escape:'url'}&amp;nostatic=1&amp;name=&amp;rx_id=">{tr}furl this!{/tr}</a>
{else}
	<a href="http://www.furl.net/storeIt.jsp?u={$gContent->getDisplayUri()|escape:'url'}&amp;t={$gContent->getTitle()|escape:'url'}&amp;nostatic=1&amp;name=&amp;rx_id=">{biticon ipackage="hype" iname="furl" iexplain="Furl this!" iforce="icon"}</a>
{/if}
{/strip}