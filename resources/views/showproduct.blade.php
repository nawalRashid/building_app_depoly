<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table width="50%" border="">
    <tr>
        <td>Product Name</td>
        <td>Product Image</td>
    </tr>
     @foreach ($products as $item)
     <tr>
   <td>
   {{$item->name}}
 </td>
 <td>
 <img width="20%" src="{{asset('images')}}/{{$item->img}}" alt="">
 </td>
@endforeach
</tr>
</table>
</body>
</html>