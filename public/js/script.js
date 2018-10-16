$(document).ready(function(){
	console.log(1);
	app.submitFormAjax();
})

app = {}
app.submitFormAjax = function(){
	$('form').submit(function(){
		console.log(1);
			var url = "/test.php";
			var params = {};
			params.data = $('form textarea').val();
			$.ajax({type: "post", dataType: "json",data: params,url: url, complete:function(a){
				
			}});
		return false;
	});
}
app.f_lock = function(){
	console.log(1);
	return false;
}