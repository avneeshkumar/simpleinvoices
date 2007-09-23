{*
/*
* Script: manage.tpl
* 	 Manage payment types template
*
* Authors:
*	 Justin Kelly, Nicolas Ruflin, Ben Brown
*
* Last edited:
* 	 2007-09-22
*
* License:
*	 GPL v2 or above
*
* Website:
*	http://www.simpleinvoices.org
*/
*}

{if $paymentTypes==null }
<p><em>{$LANG.no_payment_types}.</em></p>
{else}
<h3>{$LANG.manage_payment_types} :: <a href="index.php?module=payment_types&view=add">{$LANG.add_new_payment_type}</a></h3>
<hr />
<table align="center" class="ricoLiveGrid manage" id="rico_payment_types">
	<colgroup>
		<col style="width:7%;" />
		<col style="width:15%;" />
		<col style="width:48%;" />
		<col style="width:20%;" />
	</colgroup>
	<thead>
		<tr class="sortHeader">
			<th class="noFilter sortable">{$LANG.actions}</th>
			<th class="index_table sortable">{$LANG.payment_type_id}</th>
			<th class="index_table sortable">{$LANG.description}</th>
			<th class="noFilter index_table sortable">{$LANG.enabled}</th>
		</tr>
	</thead>
	{foreach from=$paymentTypes item=paymentType}
	<tr class="index_table">
		<td class="index_table"><a title="{$LANG.view}" class="index_table" href="index.php?module=payment_types&view=details&submit={$paymentType.pt_id}&action=view"><img src="images/common/view.png" height="16" border="0" align="absmiddle" /></a>
			<a title="{$LANG.edit}" class="index_table" href="index.php?module=payment_types&view=details&submit={$paymentType.pt_id}&action=edit"><img src="images/common/edit.png" height="16" border="0" align="absmiddle" /></a>
		</td>
		<td class="index_table">{$paymentType.pt_id}</td>
		<td class="index_table">{$paymentType.pt_description}</td>
		<td class="index_table">{$paymentType.pt_enabled}</td>
	</tr>
	{/foreach}
</table>
{/if}
