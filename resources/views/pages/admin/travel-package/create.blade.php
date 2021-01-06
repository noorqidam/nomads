@extends('layouts.admin')

@section('content')
     <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Tambah Paket Travel</h1>
    </div>

    {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}

    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('travel-package.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @include('pages.admin.travel-package.partials.form')
            </form>
        </div>
    </div>

  </div>
  <!-- /.container-fluid -->

@endsection
