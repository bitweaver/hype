{strip}
{if $gContent}
	<div class="hype">	
		{foreach from=$gHypeSystem->getPlugins() key=id item=data}
			{if $gHypeSystem->isPluginActive( $id, $gContent ) }
				{include file=$data.template}&nbsp;
			{/if}
		{/foreach}
	</div>
{/if}
{/strip}