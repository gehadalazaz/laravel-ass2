<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Category</title>
</head>
<body>
    <p>update Category page</p>
    <form method="get" action="{{  ('/editeArticle') }}">
       <input name="id" type="hidden" value="{{$articls['id']}}">
        Name: <input type="text" name="name"value="{{$articls['name']}}">
         <input type="hidden" name="catID"value="{{$articls['catID']}}">
      

        <button>Submit</button>
    </form>
</body>
</html>