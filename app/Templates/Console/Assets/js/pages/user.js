var Role = {
	init : function(){
		this.showTable();
	},
	list : function(){

	},
	showTable : function(){
		var dataItems = [];
		$('#tblItems').dataTable({
				"bDestroy" : true,
				"bSort" : true,
				"bFilter" : true,
				"bLengthChange" : true,
				"bPaginate" : true,
				"sDom" : '<"top">rt<"bottom"flp><"clear">',
				"aaData" : dataItems,
				"aaSorting" : [],
				"aoColumns" : [ {
					"sTitle" : "No"
				}, {
					"sTitle" : "Username"
				}, {
					"sTitle" : "Full Name"
				}, {
					"sTitle" : "Email"
				}, {
					"sTitle" : "Role"
				}, {
					"sTitle" : "Avatar"
				}, {
					"sTitle" : "Edit"
				}, {
					"sTitle" : "Delete"
				} ]
		});
	}
};
Role.init();