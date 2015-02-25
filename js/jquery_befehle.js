$.ajax({
  url: 'http://api.randomuser.me/',
  dataType: 'json',
  success: function(data){
	$("h1").after(
		$("<p>").text(
			data.results[0].user.name.first
			+ ","
			+ data.results[0].user.name.last
			)
		);
	$("h1").after("<img src=" + data.results[0].user.picture.thumbnail + ">");
  }
});
