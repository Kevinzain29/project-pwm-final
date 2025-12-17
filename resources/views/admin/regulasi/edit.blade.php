@extends('layouts.app')

@section('title', 'Edit Regulasi')

@section('content')
<div class="container mt-4">
    <h1>Edit Regulasi</h1>
    @include('admin.regulasi.form', ['regulasi' => $regulasi])
</div>
@endsection