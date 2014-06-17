$(document).ready(function(){
	//This one is for sidebar
	var $toggle = $('.toggle-link');
	var $sidebar = $('.sidebar');
	var $mainwrap = $('.main-wrap');
	
	$toggle.click(function(){
		toggleActive();
	});
	
	function toggleActive(){
		$sidebar.toggleClass('active');
		$mainwrap.toggleClass('active');
	}
});