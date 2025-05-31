@extends('layout.list')

@section('title', 'ini adalah judul meta')
@section('content')

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Product</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $post)
        <tr>
            <td>{{ $post['id'] }}</td>
            <td>{{ $post['Product'] }}</td>
            <!-- data lainnya -->
        </tr>
        @endforeach
    </tbody>
</table>

@endsection