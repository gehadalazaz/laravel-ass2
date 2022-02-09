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
          <a class="nav-link active" aria-current="page" href="/createArticle">CREATE new article</a>
      <form class="d-flex">

        <a href="/create">create new category </a>
      </form>
    </div>
<br>
 <center> 

  
  <div class="card bg-secondary" style="width:400px">
    <div class="card-body">
      <h4 class="card-title">NAME :{{ $articls->name }}</h4>
      <p class="card-title">CATEGORY ID :{{ $articls->catID}}</p>
      <p class="card-title">Description :{{ $articls->details }}</p>
      <p class="card-title">is_used :{{ $articls->is_used }}</p>
      <p class="card-title">slug :{{ $articls->slug }}</p>

   

    </div>
  </div>
  <br>







  
</center>
</div>

</body>
</html>
