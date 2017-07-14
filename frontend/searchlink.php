<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			font-family: verdana;

		}
		#search{
			width: 480px;
			padding: 10px;
			display: block;
			border-radius: 3px;
			border: 1px solid silver;
			margin:0 auto;
			float: left;
		}
		div#output{
			padding: 10px;
			width: 480px;
			margin-top:auto;
			border-top: none;
			float: left;
			display: none;
			border-left: 1px solid  silver;
			border-right: 1px solid  silver;
			border-bottom:  1px solid  silver;
		}
		#search:focus + .rock{
			display: block;
		}
		#pic{
			vertical-align: middle;
		}
		#user{

		}
	</style>
</head>
<body>
<form method="post" action="searchlink.php">

<input type="search" name="search" placeholder="search" id="search" onkeydown="searchq();">
<div id="output" class="rock"></div>
<input type="submit" name="submit" value="search" style="float: left;">


</form>




<script src="assets/js/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript">
	function searchq(){
		var searchTxt =  $("input[name='search']").val();
        $.post("search.php", {searchVal:searchTxt},function(output){
        
        $("#output").html(output);
        
        });

	}
</script>
  
</body>
</html>