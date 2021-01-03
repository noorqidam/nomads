<div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : ''}}" name="title" placeholder="Title" value="{{ old('title') ?? $item->title }}">
    {!! $errors->first('title', '<span class="invalid-feedback">:message</span>')!!}
</div>
<div class="form-group">
    <label for="location">Location</label>
    <input type="text" class="form-control{{ $errors->has('location') ? ' is-invalid' : ''}}" name="location" placeholder="Location" value="{{ old('location') ?? $item->location }}">
    {!! $errors->first('location', '<span class="invalid-feedback">:message</span>')!!}
</div>
<div class="form-group">
    <label for="about">About</label>
    <textarea name="about" rows="10" class="d-block w-100 form-control{{ $errors->has('about') ? ' is-invalid' : ''}}">{{ old('about') ?? $item->about }}</textarea>
    {!! $errors->first('about', '<span class="invalid-feedback">:message</span>')!!}
</div>
<div class="form-group">
    <label for="featured_event">Featured Event</label>
    <input type="text" class="form-control{{ $errors->has('featured_event') ? ' is-invalid' : ''}}" name="featured_event" placeholder="Featured Event" value="{{ old('featured_event') ?? $item->featured_event }}">
    {!! $errors->first('featured_event', '<span class="invalid-feedback">:message</span>')!!}
</div>
<div class="form-group">
    <label for="language">Language</label>
    <input type="text" class="form-control{{ $errors->has('language') ? ' is-invalid' : ''}}" name="language" placeholder="Language" value="{{ old('language') ?? $item->language }}">
    {!! $errors->first('language', '<span class="invalid-feedback">:message</span>')!!}
</div>
<div class="form-group">
    <label for="foods">Foods</label>
    <input type="text" class="form-control{{ $errors->has('foods') ? ' is-invalid' : ''}}" name="foods" placeholder="Foods" value="{{ old('foods') ?? $item->foods }}">
    {!! $errors->first('foods', '<span class="invalid-feedback">:message</span>')!!}
</div>
<div class="form-group">
    <label for="departure_date">Departure Date</label>
    <input type="date" class="form-control{{ $errors->has('departure_date') ? ' is-invalid' : ''}}" name="departure_date" placeholder="Departure Date" value="{{ old('departure_date') ?? $item->departure_date }}">
    {!! $errors->first('departure_date', '<span class="invalid-feedback">:message</span>')!!}
</div>
<div class="form-group">
    <label for="duration">Duration</label>
    <input type="text" class="form-control{{ $errors->has('duration') ? ' is-invalid' : ''}}" name="duration" placeholder="Duration" value="{{ old('duration') ?? $item->duration }}">
    {!! $errors->first('duration', '<span class="invalid-feedback">:message</span>')!!}
</div>
<div class="form-group">
    <label for="type">Type</label>
    <input type="text" class="form-control{{ $errors->has('type') ? ' is-invalid' : ''}}" name="type" placeholder="Type" value="{{ old('type') ?? $item->type }}">
    {!! $errors->first('type', '<span class="invalid-feedback">:message</span>')!!}
</div>
<div class="form-group">
    <label for="price">Price</label>
    <input type="number" class="form-control{{ $errors->has('price') ? ' is-invalid' : ''}}" name="price" placeholder="Price" value="{{ old('price') ?? $item->price }}">
    {!! $errors->first('price', '<span class="invalid-feedback">:message</span>')!!}
</div>
<div class="form-group">
    <label for="image_cover">Image Cover</label>
    <input type="file" class="form-control{{ $errors->has('image_cover') ? ' is-invalid' : ''}}" name="image_cover" placeholder="Image" value="{{ old('image_cover') ?? $item->image_cover }}">
    {!! $errors->first('image_cover', '<span class="invalid-feedback">:message</span>')!!}
</div>
<button type="submit" class="btn btn-primary btn-block">
    {{ $submit_button }}
</button>
