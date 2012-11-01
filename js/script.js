$(function(){
	$('#calculate-button').bind('click', function(){ retweach(); });	
});

function retweach() {
$('#retweach-results').html("<img src='ajax-loader.gif' />");
var data = {
who : $('#who').val(),
what : $('#what').val(),
magic : $('#magic').val()
};

$.ajax({
type: "POST",
url: "retweach.php",
data: data,
success: function(msg){
$('#retweach-results').html(msg);
}
}); 

}
