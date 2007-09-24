{strip}
{form}	
	{legend legend="Hype"}
		{legend legend="Locations"}
			{formhelp note="You must select one or more of the following places to display the promotion badges"}
			{foreach from=$formHypeLocations key=item item=output}
				<div class="row">
					{formlabel label=`$output.label` for=$item}
					{forminput}
						{html_checkboxes name="$item" values="y" checked=$gBitSystem->getConfig($item) labels=false id=$item}
						{formhelp note=`$output.note` page=`$output.page`}
					{/forminput}
				</div>
			{/foreach}
		{/legend}
		{legend legend="Services"}
			{foreach from=$formHypeTypes key=item item=output}
				<div class="row">
					{formlabel label=`$output.label` for=$item}
					{forminput}
						{html_checkboxes name="$item" values="y" checked=$gBitSystem->getConfig($item) labels=false id=$item}
						{assign var=item_style value=$item|cat:_style}
						Style:&nbsp;{html_options options=$output.styles name="$item_style" id="$item_style" selected=$gBitSystem->getConfig($item_style)}
						{formhelp note=`$output.note` page=`$output.page`}
					{/forminput}
				</div>
			{/foreach}
		{/legend}
	{/legend}

	<div class="row submit">
		<input type="submit" name="change_prefs" value="{tr}Change preferences{/tr}" />
	</div>
{/form}
{/strip}
