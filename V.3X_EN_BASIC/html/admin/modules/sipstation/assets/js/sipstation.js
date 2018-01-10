$(function() {
	sipstationToggle = $.parseJSON($.cookie('sipstationToggle')) || {};
	if(!$.isEmptyObject(sipstationToggle)) {
		$.each(sipstationToggle, function( section, state ) {
			if(!state) {
				$('.'+section).hide()
				$(this).removeClass('toggle-minus').addClass('toggle-plus');
			}
		});
	}
});

function getextinfo(ext,did) {
	var dat = {};
	dat.type = "getextinfo";
	dat.ext = ext;
	$.post("config.php?module=sipstation&quietmode=1&file=ajax.html.php&handler=file&restrictmods=core/dashboard&skip_astman=0", dat,
		function(data){
			if(data.status) {
				if(data.outboundcid != '') {
					if($("#setcid-"+did+" option[value='"+data.outboundcid+"']").length > 0) {
						$('#setcid-'+did).val(data.outboundcid);
					} else {
						$('#setcid-'+did).val('unchanged');
					}
				} else {
					$('#setcid-'+did).val('none');
				}
				
				if(data.emergency_cid != '') {
					if($("#selectecid-"+did+" option[value='"+data.emergency_cid+"']").length > 0) {
						$('#selectecid-'+did).val(data.emergency_cid);
					} else {
						$('#selectecid-'+did).val('unchanged');
					}
				} else {
					$('#selectecid-'+did).val('none');
				}									
			}
		}, 
	"json");
}

$('.sipstation-section').click(function() {
	var section = $(this).attr('id');
	if($('.'+section).is(":visible")) {
		$('.'+section).hide()
		$(this).removeClass('toggle-minus').addClass('toggle-plus');
		//set cookie of hidden section
		sipstationToggle = $.parseJSON($.cookie('sipstationToggle')) || {};
		sipstationToggle[section] = false;
		$.cookie('sipstationToggle', JSON.stringify(sipstationToggle));
	} else {
		$('.'+section).show()
		$(this).removeClass('toggle-plus').addClass('toggle-minus');
		//set cookie of hidden section
		sipstationToggle = $.parseJSON($.cookie('sipstationToggle')) || {};
		if (sipstationToggle.hasOwnProperty(section)){
			sipstationToggle[section] = true;
			$.cookie('sipstationToggle', JSON.stringify(sipstationToggle));
		}
	}
});