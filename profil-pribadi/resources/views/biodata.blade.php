@extends('layouts.main')
@section('container')
<title>Biodata</title>
</head>
<body>
<img src ="img/{{ $image }}" alt ="{{ $nama }}" width ="150">
    <h3>{{ $nama }}</h3>
    <p>{{ $nim }}</p>
    <p>{{ $prodi }}</p>
    <p>{{ $email }}</p>
    <p>{{ $tempatlahir }}</p>
    <p>{{ $tanggallahir }}</p>

@endsection