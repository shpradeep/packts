

@extends('layout')

@section('content')
<div style="margin-left: 1%;margin-right: 1%;">
<h1>Product List</h1>
<?php // print_r($user);?>
<table border="solid">
	<tr>
		<th>Title</th>
		<th>Authors</th>
		<th>Categories</th>
		<th>Publication Date</th>
	</hr>
@foreach ($product as $u)
	<tr>
		<td>
			&nbsp;&nbsp;&nbsp;
			{{$u->title}}
			&nbsp;&nbsp;&nbsp;
		</td>
		<td>
			&nbsp;&nbsp;&nbsp;
			{{$u->authors}}
			&nbsp;&nbsp;&nbsp;
		</td>
		<td>
			&nbsp;&nbsp;&nbsp;
			{{$u->categories}}
			&nbsp;&nbsp;&nbsp;
		</td>
		<td>
			&nbsp;&nbsp;&nbsp;
			{{$u->publication_date}}
			&nbsp;&nbsp;&nbsp;
		</td>
	</tr>
@endforeach
</ul>
</table>
</div>
@endsection