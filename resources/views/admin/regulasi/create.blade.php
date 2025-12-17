@extends('layouts.app')

@section('title', 'Tambah Regulasi')

@section('content')
<div class="container mt-4">
    <h1>Tambah Regulasi</h1>
    @include('admin.regulasi.form', ['regulasi' => new \App\Models\Regulasi()])
</div>
@endsection