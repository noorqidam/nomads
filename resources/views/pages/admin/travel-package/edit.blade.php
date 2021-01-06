@extends('layouts.admin')

@section('content')
     <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Edit Paket Travel {{ $item->title}}</h1>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('travel-package.update', $item->id) }}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                @include('pages.admin.travel-package.partials.form')
            </form>
        </div>
    </div>

  </div>
  <!-- /.container-fluid -->

@endsection
