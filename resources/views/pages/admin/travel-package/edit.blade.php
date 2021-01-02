@extends('layouts.admin')

@section('content')
     <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Edit Paket Travel{{ $item->title}}</h1>
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
            <form action="{{ route('travel-package.update', $item->id) }}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : ''}}" name="title" placeholder="Title" value="{{ $item->title }}">
                    {!! $errors->first('title', '<span class="invalid-feedback">:message</span>')!!}
                </div>
                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" class="form-control" name="location{{ $errors->has('location') ? ' is-invalid' : ''}}" placeholder="Location" value="{{ $item->location }}">
                    {!! $errors->first('location', '<span class="invalid-feedback">:message</span>')!!}
                </div>
                <div class="form-group">
                    <label for="about">About</label>
                    <textarea name="about" rows="10" class="d-block w-100 form-control{{ $errors->has('about') ? ' is-invalid' : ''}}">{{ $item->about }}</textarea>
                    {!! $errors->first('about', '<span class="invalid-feedback">:message</span>')!!}
                </div>
                <div class="form-group">
                    <label for="featured_event">Featured Event</label>
                    <input type="text" class="form-control{{ $errors->has('featured_event') ? ' is-invalid' : ''}}" name="featured_event" placeholder="Featured Event" value="{{ $item->featured_event }}">
                    {!! $errors->first('featured_event', '<span class="invalid-feedback">:message</span>')!!}
                </div>
                <div class="form-group">
                    <label for="language">Language</label>
                    <input type="text" class="form-control{{ $errors->has('language') ? ' is-invalid' : ''}}" name="language" placeholder="Language" value="{{ $item->language }}">
                    {!! $errors->first('language', '<span class="invalid-feedback">:message</span>')!!}
                </div>
                <div class="form-group">
                    <label for="foods">Foods</label>
                    <input type="text" class="form-control{{ $errors->has('foods') ? ' is-invalid' : ''}}" name="foods" placeholder="Foods" value="{{ $item->foods }}">
                    {!! $errors->first('foods', '<span class="invalid-feedback">:message</span>')!!}
                </div>
                <div class="form-group">
                    <label for="departure_date">Departure Date</label>
                    <input type="date" class="form-control{{ $errors->has('departure_date') ? ' is-invalid' : ''}}" name="departure_date" placeholder="Departure Date" value="{{ $item->departure_date }}">
                    {!! $errors->first('departure_date', '<span class="invalid-feedback">:message</span>')!!}
                </div>
                <div class="form-group">
                    <label for="duration">Duration</label>
                    <input type="text" class="form-control{{ $errors->has('duration') ? ' is-invalid' : ''}}" name="duration" placeholder="Duration" value="{{ $item->duration }}">
                    {!! $errors->first('duration', '<span class="invalid-feedback">:message</span>')!!}
                </div>
                <div class="form-group">
                    <label for="type">Type</label>
                    <input type="text" class="form-control{{ $errors->has('type') ? ' is-invalid' : ''}}" name="type" placeholder="Type" value="{{ $item->type }}">
                    {!! $errors->first('type', '<span class="invalid-feedback">:message</span>')!!}
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control{{ $errors->has('price') ? ' is-invalid' : ''}}" name="price" placeholder="Price" value="{{ $item->price }}">
                    {!! $errors->first('price', '<span class="invalid-feedback">:message</span>')!!}
                </div>
                <div class="form-group">
                    <label for="image_cover">Image Cover</label>
                    <input type="file" class="form-control{{ $errors->has('image_cover') ? ' is-invalid' : ''}}" name="image_cover" placeholder="Image">
                    {!! $errors->first('image_cover', '<span class="invalid-feedback">:message</span>')!!}
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    Ubah
                </button>
            </form>
        </div>
    </div>

  </div>
  <!-- /.container-fluid -->

@endsection
