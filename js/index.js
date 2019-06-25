$(document).ready(function(){
	$(".site").on('mouseover', function(){
		var s = $(this).data("site");
		$(".websites").text(s);
	});
	$(".body").on('mouseover', function(){
		$(".websites").text("Websites Made");
	});
	$("header").on('mouseover', function(){
		$(".websites").text("Websites Made");
	});
});