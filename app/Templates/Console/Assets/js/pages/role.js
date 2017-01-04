var Role = {
	init : function(){
		this.showTable();
	},
	path : function(){
		return CONSOLE_DIR + 'role/table';
	},
	list : function(){

	},
	showTable : function(){
		$('#tblItems').dataTable({
				"bDestroy" : true,
				"bSort" : true,
				"bFilter" : true,
				"bLengthChange" : true,
				"bPaginate" : true,
				"sDom" : '<"top">rt<"bottom"flp><"clear">',
				"bServerSide": true,
				"sAjaxSource": this.path(),
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