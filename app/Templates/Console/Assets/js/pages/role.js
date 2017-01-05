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
		var dataItems = [];
		$('#tblItems').dataTable({
				"bDestroy" : true,
				"bSort" : true,
				"bFilter" : true,
				"bLengthChange" : true,
				"bPaginate" : true,
				"sDom" : '<"top">rt<"bottom"flp><"clear">',
				"bProcessing": true,
				"bServerSide": true,
				"aaData" : dataItems,
				"sAjaxSource": this.path(),
				"fnServerData": function ( sSource, aoData, fnCallback, oSettings ) {
			      	oSettings.jqXHR = $.ajax( {
				        "dataType": 'json',
				        "type": "GET",
				        "url": sSource,
				        "async" : false,
				        "data": aoData,
				        "success": function(response){
				        	console.log(response);
				        	var i = 0;
							$.each(response, function(key, value) {
								i++;
								dataItems.push([
										i,
										value.name,value.description,
										"<button class='btn btn-sm btn-primary' onclick='getItem("
												+ value.id + ");' >Edit</button>",
										"<button class='btn btn-sm btn-danger' onclick='deleteItem("
												+ value.id + ");'>Delete</button>" ]);
							});
				        }
			      	} );
    			},
				"aaSorting" : [],
				"aoColumns" : [ {
					"sTitle" : "No"
				}, {
					"sTitle" : "Name"
				}, {
					"sTitle" : "Description"
				}, {
					"sTitle" : "Edit"
				}, {
					"sTitle" : "Delete"
				} ]
		});
	}
};
Role.init();