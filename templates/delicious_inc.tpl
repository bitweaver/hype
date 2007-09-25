{strip}
{if $gHypeSystem->getPluginStyle('delicious') == 'active'}
	<script type="text/javascript">
    		if (typeof window.Delicious == "undefined") window.Delicious = {ldelim}{rdelim};
		    Delicious.BLOGBADGE_DEFAULT_CLASS = 'delicious-blogbadge-line';
	</script>
	<script src="http://images.del.icio.us/static/js/blogbadge.js"></script>
{elseif $gHypeSystem->getPluginStyle('delicious') == 'icon'}
	<a href="http://del.icio.us/post?url={$gContent->getDisplayUri()|escape:'url'}&amp;title={$gContent->getTitle()|escape:'url'}&amp;" />{biticon ipackage="hype" iname="delicious-wide" iexplain="delicious!" iforce="icon"}</a>
{else}
	{biticon ipackage="hype" iname="delicious" iexplain="delicious!" iforce="icon"}<a href="http://del.icio.us/post?url={$gContent->getDisplayUri()|escape:'url'}&amp;title={$gContent->getTitle()|escape:'url'}&amp;" />{tr}save this!{/tr}</a>
{/if}
{/strip}