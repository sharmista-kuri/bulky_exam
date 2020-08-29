@extends('layouts.app')
@section('content')
<div class="container-fluid app-body settings-page">
	<h3>Recent Posts Sent To Buffer</h3>
    <table border="1">
    <tr>
        <th>Group Name</th>
        <th>Group Type</th>
        <th>Account Name</th>
        <th>Post Text</th>
        <th>Time</th>
    </tr>
    @foreach($BufferPosting as $buffer)
    <tr>
        <td>{{$buffer->group_name}}</td>
        <td>{{$buffer->group_type}}</td>
        <td>{{$buffer->account_name}}</td>
        <td>{{$buffer->post_text}}</td>
        <td>{{$buffer->account_name}}</td>
        
    </tr>
    @endforeach

    </table>
    {{$BufferPosting->links()}}
	
</div>
@endsection