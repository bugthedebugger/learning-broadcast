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
		This is an event listener page.
	</p>
</div>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>