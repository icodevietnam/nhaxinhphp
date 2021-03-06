var ListTable = {
	init : function(){
		this.showTable();
	},
	path : function(){
		return CONSOLE_DIR + this.getTable() + '/table';
	},
	createUrl : function(){
		var url =  CONSOLE_DIR + this.getTable() + '/create?token=' + TOKEN;
		window.location.href = url;
	},
	editUrl : function(id){
		var url =  CONSOLE_DIR + this.getTable() + '/edit?itemId='+id+'&token=' + TOKEN;
		window.location.href = url;
	},
	getTable : function(){
		var table = $("#iTable").html();
		return table;
	},
	deleteItem : function(){

	},
	showTable : function(){
		var dataItems = [];
		$.ajax({
			url : this.path(),
			type : "GET",
			dataType : "JSON",
			data : {
				'iTable' : this.getTable(),
			},
			success : function(response) {
				var i = 0;
				$.each(response, function(key, value) {
					i++;
					dataItems.push([
					i,value.name,value.description,value.created_date,value.last_updated,
					"<a href='#' class='btn btn-sm btn-primary' onclick='return ListTable.editUrl("
					+ value.id + ");' >Sửa</a>",
					"<button class='btn btn-sm btn-danger' onclick='deleteItem("
										+ value.id + ");'>Xóa</button>" ]);
				});
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
						"sTitle" : "Số"
					}, {
						"sTitle" : "Tên"
					}, {
						"sTitle" : "Chú Thích"
					}, {
						"sTitle" : "Ngày Tạo"
					}, {
						"sTitle" : "Sửa Lần Cuối"
					}, {
						"sTitle" : "Sửa"
					}, {
						"sTitle" : "Xóa"
					} ]
				});
			}
		});
	}
};
ListTable.init();