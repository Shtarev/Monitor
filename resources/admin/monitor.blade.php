@extends('admin.template')
@section('content')<br><center><h5>Статистика посещаемости</h5></center>
{{$locale8}}{{$all}}<hr>
{{$locale9}}<br>
@foreach($dateArr as $key=>$value) 
	<details>
		<summary><b>{{$key}}</b> - <a href="{{$self}}?del={{$key}}" onClick="del(); return false;">{{$locale14}}</a></summary>
		@foreach($value as $value2)
			<a href="{{$self}}?date={{$value2}}"><font color="#006600">{{$value2}}</font></a><br>
		@endforeach
	</details><br>
@endforeach
<hr>
{{$locale10}}{{$date}} - <i>{{$count}}{{$locale11}}</i><br>
@foreach($dateClients as $value)
	<details>
		<summary><b>{{$locale12}}{{$value['client']}}</b></summary>
		<b>{{$locale13}}{{$value['client_ip']}}</b><br>
		<b>{{$value['clienr_referer']}}</b><br>
		{!!$value['site']!!}
	</details><br>
@endforeach
<script>
function del(){
	var result = confirm("Delete?");
	if(result){
		throw "stop";  
	}
}
</script>
@endsection