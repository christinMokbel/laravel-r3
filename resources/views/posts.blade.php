<!DOCTYPE html>
<html lang="en">
<head>
  <title>posts</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
@include('include.nav')

<div class="container">
  <h2>all posts</h2>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>title</th>
        <th>description</th>
        <th>published</th>
        <th>auther</th>
        <th>Edit</th>
        <th>Show</th>
        <th>Delete</th>

      </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
      <tr>
        <td>{{$post-> title}}</td>
        <td>{{$post-> description}}</td>
        <td>
            @if($post-> published)
            Yes
            @else
            No
            @endif
        </td>
        <td>{{$post-> auther}}</td>
        <td><a href="updatePost/{{$post->id}}">edit</a></td>
        <td><a href="showPost/{{$post->id}}">Show</a></td>
        <td><a href="deletePost/{{$post->id}}" onclick="return confirm('Are you sure you want to delete?')" >delete</a></td>
      </tr>
      @endforeach

    </tbody>
  </table>
</div>

</body>
</html>
