<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Titel</title>
</head>
  <body>
	
	
	<!-- include extends for all sites -->
	<script src="{{ asset('js/monitor.js') }}"></script>
    <script>monitor("{{route('monitorClient')}}", "{{$otkuda}}")</script>
  </body>
</html>
