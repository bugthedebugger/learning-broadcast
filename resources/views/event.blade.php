<!DOCTYPE html>
<html>
<head>
	<title>Learning Broadcast</title>
	<meta charset="utf-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

<div id="app">
	<p>
		<ul>
			
		</ul>
	</p>
	<form>
		{{ csrf_field() }}
		<input type="text" name="user" placeholder="User">
		<input type="text" name="message">
		<button type="submit">Send</button>
	</form>
</div>

<script src="{{ asset('js/app.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
	$('form').submit(function(e){

		e.preventDefault();
		var formData = {
			'user'    : $('input[name=user]').val(),
			'message' : $('input[name=message]').val()
		};
		
		console.log("Sent");
		console.log(formData);
		$.ajax({
			type: 'GET',
			url: '{{ route("event.handler") }}',
			data: formData,
			dataType: 'json',
			encode: true
		});

	});
</script>
</body>
</html>