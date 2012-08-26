var SelectBox = function() {
};  
// 显示和隐蔽下框选项
var initchangeobj = null;
SelectBox.changeSelectBox = function(id) { 
	if(initchangeobj != null){
		 initchangeobj.slideUp("fast");
	}
	if ($("#" + id).css("display") != "none")
		$("#" + id).slideUp("fast");
	else
		$("#" + id).slideDown("fast");
	
		
		initchangeobj = $("#" + id);
}

SelectBox.autoSelect = function(changeObj, obj, selectClass) {  
	var children = "#" + obj + " li";
	var childrenObj =null;
	if(obj =='search_year_select2'){ 
		childrenObj = $(children, changeObj);
	}else{
		childrenObj = $(children, changeObj).not($(children)[0]);
	}
	
	childrenObj.mouseover(function() {
		// 如果当前的下拉的ID和下拉框的ID相同就跳出
		$(this).addClass(selectClass);
	});

	childrenObj.mouseout(function() {
		$(this).removeClass(selectClass); 
	});

	childrenObj.click(function() {
		 
		//$("#"+obj+"_label").html($(this).text()); 
		// 给对应的SELECT设置值 
		//$("#" + obj, changeObj).slideUp("fast"); 
		window.location.href=jQuery(this).attr("lang");
	});
	if(obj !='search_year_select2'){
	   var children2 = "#" + obj + " li:eq(0)";
	   jQuery(children2).addClass(selectClass);
	   jQuery(children2).css("line-height","31px");
	   jQuery(children2).css("height","31px");
	}
}

/**
 * 替换所有的SELECT标签 id表示ID属-id 选中的下拉框的值-val 显示条的样式CLASS-class
 */
SelectBox.replaceSelect = function(id, val, classes) {
	$("#" + id).parent().prepend(
			"<p class=\"" + classes + "\" id='" + id
					+ "_main' onclick=\"SelectBox.changeSelectBox('" + id
					+ "');\">" + val + "</p>");
	// $("#" + id + "_new").css("display", "none");

}

/**
 * 替换所有的SELECT标签 id表示ID属-id 选项选中时的CLASS-selectClass 选项容器的selectUl
 * 显示条的样式CLASS-classes
 */
SelectBox.replaceAllSelect = function(obj, classes, selectClass, selectUl) {
	var children = $("#" + obj).children();
	var createUl = "";
	var createChildren = "";
	var top = $("#" + obj).offset().top;
	var left = $("#" + obj).offset().left;
	children.each(function() {
		createChildren += "<li title=\"" + $(this).val() + "\">"
				+ $(this).text() + "</li>"
	});
	var createSelect = $("<ul class=\"" + selectUl + "\"></ul>");
	var createUl = createSelect.html(createChildren);
	createUl.css("display", "none");
	var val = $("#" + obj).find("option:selected").text();
	;
	var newId = obj;

	createUl.attr("id", newId);
	$("#" + newId).after(createUl);
	$("#" + obj).remove();
	var oldId = $("#" + obj).attr("id");
	// $("#" + obj).attr("id", oldId + "_new");
	SelectBox.replaceSelect(oldId, val, classes);
	SelectBox.autoSelect(document, obj, selectClass);
	// createSelect.css("top", top + $("#" + oldId + "_main").height() + "px");
	// createSelect.css("left",left + "px");

}
