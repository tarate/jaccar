var createMask =function(){
		jQuery("#maskDiv").css("width",jQuery("body").width());
		jQuery("#maskDiv").css("height",jQuery("body").height()); 
		jQuery("#maskDiv").show();
	}
	
var cancelMark=function(){
   jQuery("#maskDiv").hide();
}

var loadimg = function(obj){ 
	  
	var f = "<img src="+obj+" />"; 
	createMask();
	jQuery("#load_img").html(f); 
	var bodywidth = jQuery("body").width();  
	var bodyheight = jQuery("body").height(); 
	jQuery("#put_img_div").css("top","100px");  
	var width = jQuery("#put_img_div").width();
	var obtainwidth=(bodywidth-width)/2;
	jQuery("#put_img_div").css("left",obtainwidth+"px"); 
	jQuery("#put_img_div").show(500);
}

var closeimg = function(){
cancelMark();
jQuery("#put_img_div").hide(300); 
}