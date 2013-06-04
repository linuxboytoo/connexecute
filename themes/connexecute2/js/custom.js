$(document).ready(function() {
	
	jQuery('input[default]')
		.focus(function() { if ($(this).val()==$(this).attr("default")) { $(this).val(""); $(this).removeClass('empty'); } })
		.blur( function() { if ($(this).val()=="") { $(this).val($(this).attr("default")); $(this).addClass('empty'); } }).blur();
		
});

function category_hoverrow_item(groupid,itemid,imagehtml,title)
{

	var photofade = .50;
	jQuery('<div/>',	{	id: 'item_'+itemid,
							class: 'item',
							html: '<div class="itemimage">'+imagehtml+'</div><div class="itemtitle">'+title+'</div>',
							css: { 'float': 'left','cursor':'pointer','position':'relative' }
						})
						.mouseover(function() 	{ 	
													if(jQuery('#items_'+groupid).data('selected')!=itemid)
						 							{
						 								jQuery('#items_'+groupid+' .item').removeClass('selected');
						 								jQuery('#items_'+groupid+' .item .itemtitle').show(); 
						 								
						 								jQuery(this).addClass('selected');
						 								jQuery('#items_'+groupid+' #item_'+itemid+' .itemtitle').hide();
						 								
						 								jQuery('#descs_'+groupid+' .desc').hide(); 
						 								jQuery('#desc_'+itemid).fadeToggle(300,'swing');
						 								jQuery('#items_'+groupid).data('selected',itemid);
						 							}
						 					})
						.appendTo('#items_'+groupid);
}

function category_hoverrow_desc(groupid,itemid,html,title)
{
	jQuery('<div/>', 	{	id: 'desc_'+itemid,
							html: '<h2>'+title+'</h2><br />'+html,
							class: 'desc',
							css: { 'display': 'none' }
						})
						.appendTo('#descs_'+groupid);
}