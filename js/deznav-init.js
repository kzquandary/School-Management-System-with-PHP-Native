

function getUrlParams(dParam) {
		var dPageURL = window.location.search.substring(1),
			dURLVariables = dPageURL.split('&'),
			dParameterName,
			i;

		for (i = 0; i < dURLVariables.length; i++) {
			dParameterName = dURLVariables[i].split('=');

			if (dParameterName[0] === dParam) {
				return dParameterName[1] === undefined ? true : decodeURIComponent(dParameterName[1]);
			}
		}
}

	
var direction =  getUrlParams('dir');


var dezSettingsOptions = {
	typography: "poppins",
	version: "dark",
	layout: "Vertical",
	headerBg: "color_1",
	navheaderBg: "color_1",
	sidebarBg: "color_1",
	sidebarStyle: "full",
	sidebarPosition: "fixed",
	headerPosition: "fixed",
	containerLayout: "full",
	direction: direction
};

if(direction == 'rtl')
{
	direction = 'rtl'; 
}else{
	direction = 'ltr'; 
}

new dezSettings(dezSettingsOptions); 

jQuery(window).on('resize',function(){
	new dezSettings(dezSettingsOptions); 
});



var themeOptionArr = {
			typography: '',
			version: '',
			layout: '',
			primary: '',
			headerBg: '',
			navheaderBg: '',
			sidebarBg: '',
			sidebarStyle: '',
			sidebarPosition: '',
			headerPosition: '',
			containerLayout: '',
			direction: '',
		};

function setCookie(cname, cvalue, exhours) 
	{
		var d = new Date();
		d.setTime(d.getTime() + (30*60*1000)); /* 30 Minutes */
		var expires = "expires="+ d.toString();
		document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
	}
	
function getCookie(cname) 
	{
		var name = cname + "=";
		var decodedCookie = decodeURIComponent(document.cookie);
		var ca = decodedCookie.split(';');
		for(var i = 0; i <ca.length; i++) {
			var c = ca[i];
			while (c.charAt(0) == ' ') {
				c = c.substring(1);
			}
			if (c.indexOf(name) == 0) {
				return c.substring(name.length, c.length);
			}
		}
		return "";
	}



(function($) {
	"use strict"
		
	function setThemeInCookie(themeSettings)
	{
		jQuery.each(themeSettings, function(optionKey, optionValue) {
			setCookie(optionKey,optionValue);
		});
	}
	
	function setThemeOptionOnPage()
	{
		if(getCookie('version') != '')
		{
			jQuery.each(themeOptionArr, function(optionKey, optionValue) {
				var optionData = getCookie(optionKey);
				themeOptionArr[optionKey] = (optionData != '')?optionData:dezSettingsOptions[optionKey];
			});
			dezSettingsOptions = themeOptionArr;
			new dezSettings(dezSettingsOptions);
		}
	}

	jQuery(window).on('load', function(){
		setThemeOptionOnPage();
	
		jQuery('.dz-theme-mode').on('click',function(){
			jQuery(this).toggleClass('active');
			if(jQuery(this).hasClass('active')){
				jQuery('body').attr('data-theme-version','dark');
				setCookie('version','dark');
				jQuery('.nav-header .brand-title').attr('src','./images/logo-text-white.png');
			}else{
				jQuery('body').attr('data-theme-version','light');	
				setCookie('version','light');
				jQuery('.nav-header .brand-title').attr('src','./images/logo-text2.png');
			}
			
		});
		if(jQuery('body').data('theme-version') == 'light'){
			jQuery('.nav-header .brand-title').attr('src','./images/logo-text2.png');
			jQuery('.dz-theme-mode').removeClass('active');
			
		}else if(jQuery('body').data('theme-version') == 'dark'){
			jQuery('.dz-theme-mode').addClass('active');
			jQuery('.nav-header .brand-title').attr('src','./images/logo-text-white.png');
		}
		
	});
	
})(jQuery);
