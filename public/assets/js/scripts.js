(function($) {
"use strict";
// Add active state to sidbar nav links
var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
$("#layoutSidenav_nav .sb-sidenav a.nav-link").each(function() {
if (this.href === path) {
$(this).addClass("active");
}
});
// Toggle the side navigation
$("#sidebarToggle").on("click", function(e) {
e.preventDefault();
$("body").toggleClass("sb-sidenav-toggled");
});
})(jQuery);
$('[data-toggle="datepicker"]').datepicker({ dateFormat: 'dd-mm-yy' });

(function($){

$(document).ready(function() {
	var editor = new $.fn.dataTable.Editor( {
		ajax: '../../../app/views/recruitment/index',
		table: '#recruitment',
		fields: [
			{
				"label": "status:",
				"name": "status"
			},
			{
				"label": "job_id:",
				"name": "job_id"
			},
			{
				"label": "company_id:",
				"name": "company_id"
			},
			{
				"label": "user_id:",
				"name": "user_id"
			}
		]
	} );

	var table = $('#recruitment').DataTable( {
		dom: 'Bfrtip',
		ajax: 'php/table.recruitment.php',
		columns: [
			{
				"data": "status"
			},
			{
				"data": "candidate_id"
			},
			{
				"data": "job_id"
			},
			{
				"data": "company_id"
			},
			{
				"data": "user_id"
			}
		],
		select: true,
		lengthChange: false,
		buttons: [
			{ extend: 'create', editor: editor },
			{ extend: 'edit',   editor: editor },
			{ extend: 'remove', editor: editor }
		]
	} );
} );

}(jQuery));
