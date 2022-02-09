<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3 ">
 <center> 
 <a class="nav-link active" aria-current="page" href="/create">CREATE New Category</a>

 <a class="nav-link active" aria-current="page" href="/createArticle">CREATE New article</a>

 @foreach ($categories as $category)
  
  <div class="card bg-secondary" style="width:400px">
    <div class="card-body">
      <h4 class="card-title">{{ $category-> name }}</h4>
      <a href="{{ ('/article/'.$category['id']) }}" class="btn btn-success">See Articles </a>
      <!-- <a href=  "{{('delete/' .$category['id'])}}" class="btn btn-danger">
      @method('DELETE')
      Delete Category </a> -->
      <a href=  "{{('update/' .$category-> id )}}" class="btn btn-info">
        
      update Category </a>

      <form method="post" action="{{('delete/' .$category['id'])}}">
      @csrf
    @method('delete')
        
        <button class="btn btn-danger">delete</button>
    </form>

    </div>
  </div>
  <br>
  @endforeach






  
</center>
</div>

</body>
</html>
