{strip}
{form}	
	{legend legend="Hype"}
		<input type="hidden" name="page" value="hype" />

		{legend legend="Locations"}
			{formhelp note="You must select one or more of the following places to display the promotion badges"}
			{foreach from=$formHypeLocations key=item item=output}
				<div class="control-group">
					{formlabel label=`$output.label` for=$item}
					{forminput}
						{html_checkboxes name="$item" values="y" checked=$gBitSystem->getConfig($item) labels=false id=$item}
						{formhelp note=`$output.note` page=`$output.page`}
					{/forminput}
				</div>
			{/foreach}
		{/legend}
		{legend legend="Services"}
		{jstabs}
			{foreach from=$gHypeSystem->getPlugins() key=item item=data}
				{jstab title=$item}
					{assign var=toggle value="hype_`$item`"}
					{assign var=style value="hype_`$item`_style"}
					<div class="control-group">
						{formlabel label=$data.label for="$toggle"}
						{forminput}
							{html_checkboxes name="$toggle" values="y" checked=$gBitSystem->getConfig($toggle) labels=false id=$toggle}
							{assign var=item_style value=$style}
							{formhelp note=`$data.note`}
						{/forminput}
					</div>
					<div class="control-group">
						{formlabel label="Style" for=$style}
						{forminput}
							{html_options options=$data.styles name="$style" id="$style" selected=$gHypeSystem->getPluginStyle($item)}
							{formhelp note="Select the style to use for this service."}
						{/forminput}
					</div>
					<div class="control-group">
						{formlabel label="Content Types"}
						{forminput}
							{assign var=guids value=$formContentTypes.$item.guid}
							{assign var=checked value=$formContentTypes.$item.checked}
							{html_checkboxes options=$guids value=y name="hype_`$item`_guid" separator="<br />" checked=$checked}
							{formhelp note="Here you can select which content types show this services badge."}
						{/forminput}
					</div>
				{/jstab}
			{/foreach}
		{/jstabs}
		{/legend}
	{/legend}

	<div class="control-group submit">
		<input type="submit" class="btn" name="change_prefs" value="{tr}Change preferences{/tr}" />
	</div>
{/form}
{/strip}
