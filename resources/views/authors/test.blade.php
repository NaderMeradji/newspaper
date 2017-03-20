<!DOCTYPE html>
<html>
<head>

<title></title>

</head>


<body>
<h1>
<li>
  Authors
<ul>

  @foreach($author as $author)
  <li>{{$author->name}}</li>
  <li>{{$author->email}}</li>
  <li>{{$author->created_at}}</li>
  @endforeach
</ul>
</li>
</h1>
</body>
</html>
