<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add post</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    @include('include.nav')
<div class="container">
  <h2>Add new post</h2>
  <form action="{{ route('storepost') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" value="{{ old('title') }}">
    </div>
    @error('title')
    {{ $message }}
    @enderror
    <div class="form-group">
      <label for="description">description:</label>
      <textarea class="form-control" name="description" id="" cols="60" rows="3">{{ old('description') }}</textarea>
    </div>
    @error('description')
    {{ $message }}
    @enderror
    <div class="form-group">
      <label for="image">Image:</label>
      <input type="file" class="form-control" id="image" placeholder="Enter image" name="image">
      @error('image')
        {{ $message }}
      @enderror
    </div>

    <div class="checkbox">
      <label><input type="checkbox" name="published"> Published me</label>
    </div>
    <div class="form-group">
      <label for="auther">auther:</label>
      <input type="text" class="form-control" id="auther" placeholder="Enter auther" name="auther" value="{{ old('auther') }}">
    </div>
    @error('auther')
    {{ $message }}
    @enderror
    <div> <button type="submit" class="btn btn-default">Insert</button></div>
  </form>
</div>

</body>
</html>
