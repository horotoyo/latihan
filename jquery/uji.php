<!DOCTYPE html>
<html>
<head>
	<title>asj</title>
</head>
<body>
<form method="post">
<textarea name="postes" id="textAreaPost" placeholder="Write what's you new"></textarea>

<div id="char_namb">0</div>
</form>

<script src="js/jquery-3.3.1.js"></script>
<script>
$(function(){
    $('#textAreaPost').keyup(function(){
      var charsno = $(this).val().length;
      $('#char_namb').html(charsno);
    });
});
</script>
</body>
</html>