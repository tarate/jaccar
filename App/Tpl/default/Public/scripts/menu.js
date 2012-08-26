var lastselectobj=null;
var secondselectobj=null;
var showsecond=null;
$("#ul_firstmenu li").each(function(){ 
 $(this).mouseover(function(e){   
  if(lastselectobj != null)
   lastselectobj.removeClass("noselected");
  $(this).addClass("noselected");
  var id = $(this).attr("id");
  
  if(id=="main_people"){ 
  	   jQuery(".secondmenu").addClass('peoplebg');
  	   jQuery(".secondmenu").removeClass('secondbg'); 
  }else{
	   jQuery(".secondmenu").removeClass('peoplebg');
	   jQuery(".secondmenu").addClass('secondbg');
	  }
  var toppx=0;
  if(id=="main_company"){
	  toppx=45;
  }else if(id=="main_investment"){
	  toppx=97;
  }else if(id=="main_news"){
	  toppx=152;
  } else if(id=="main_people"){
	  toppx=253;
  } 
  lastselectobj = $(this);
  var tempid=$(this).attr("id");
  var sid=(tempid.split("_"))[1];  
  var x =e.originalEvent.y || e.originalEvent.layerY || 0; 
  $(".secondmenu").hide();
  secondmenu(sid,toppx);
 });

});  
$(".secondmenu li").each(function(){ 
								  
 $(this).mouseover(function(){   
	$(".secondmenu").show();
  if(secondselectobj != null)
   	secondselectobj.removeClass("selected2");
  $(this).addClass("selected2");
  	secondselectobj = $(this);
 }); 
  $(this).click(function(){
   var url = $(this).children().eq(0).attr("href");
   window.location.href=url;
 });
}); 

$(".secondmenu").mouseout(function(){
  $(".secondmenu").hide();
 });
jQuery(".firstmenu").mouseout(function(){
  $(".secondmenu").hide();
 });
jQuery(".firstmenu").mouseover(function(){
  $(".secondmenu").show();
 });
$(".secondmenu").mouseover(function(){$(".secondmenu").show();});
var secondmenu=function(id,x){  
  $(".secondmenu").show();
  if(showsecond != null)
   showsecond.hide();
   $("#"+id).show(); 
  // x = x-70;
   $(".secondmenu").css("top",x+"px");
   showsecond = $("#"+id);
} 
 jQuery("a img").mouseover(function(){
	 var par = jQuery(this).parent().parent();
	 if(par.attr("class") !="logo" && par.attr("class") !="logodiv")
	 jQuery(this).animate({opacity:"0.5"});
 });
 jQuery("a img").mouseout(function(){
	jQuery(this).animate({opacity:"1"});
}); 
 
 jQuery(".logo img").mouseover(function(){ 
	var oldimg = jQuery(this).attr("src")+"";	
	oldimg = oldimg.replace("logo","logo2"); 
	jQuery(this).attr("src",oldimg);
	jQuery(this).css("opacity","0.5");
	jQuery(this).animate({opacity:"1"},1000); 
  });
 jQuery(".logo img").mouseout(function(){
    jQuery(this).show();
	var oldimg = jQuery(this).attr("src")+"";	
	oldimg = oldimg.replace("logo2","logo");
	jQuery(this).attr("src",oldimg);
  });
   
 
 jQuery(".golist").click(function(){
 	history.go(-1);
 });