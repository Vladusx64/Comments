<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .column {
        -webkit-column-width: 200px;
        -moz-column-width: 200px;
        column-width: 200px;
        -webkit-column-count: 3;
        -moz-column-count: 3;
        column-count: 3;
        -webkit-column-gap: 30px;
        -moz-column-gap: 30px;
        column-gap: 30px;
        -webkit-column-rule: 1px solid #ccc;
        -moz-column-rule: 1px solid #ccc;
        column-rule: 1px solid #ccc;
   }
    </style>

    <title>Comments</title>
</head>
<body>
    @include('pages.createcomments')
    @include('pages.allcomments')



</body>
</html>