<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <title></title>
</head>
  <body>
	
	
	<!-- this include for all sites-->
	<script src="{{ asset('js/monitor.js') }}"></script>
    <script>monitor("{{route('monitorClient')}}", "{{$otkuda}}")</script>
  </body>
</html>