<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" href="https://corddigital.com/system/public/cssm/styleee.css">
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,700" rel="stylesheet" type="text/css">
 
 
<style>
table, th, td {
  border: 2px solid black;
  text-align: center;
}

 td{
  padding: 10px;
 }
</style>
</head>
<body>
<div class="container">
    
     <?php 
   $id = Auth::user()->id;
   if ($id==15|$id==11) {?>
   
   <h1>All Sales </h1>

<p>All sales in Cord Digital <a class="btn btn-primary" href="https://corddigital.com/system/public/site/admin/sales1" role="button">add new</a> </p>


<table >
  <tr>
   
    <td>Id</td>
    <td> Sales Name</td>
    <td>Edit</td>
    <td>Delete</td>
  
  </tr>
@foreach($data as $student)
  <tr>
   @if(empty($student->Person))
 <input type="hidden" id="custId" name="custId" >
@else
  <td>{{$student->id}}</td>
    <td>{{$student->Person}}</td>
    <td><a class="btn btn-primary" href="{{url('site/admin/editsales/'.$student->id)}}" role="button">Edit</a></td>
     <input type="hidden" id="custId" name="custId" value="{{$student->id}}">
     <td><a class="btn btn-danger" href="{{url('site/admin/deletesa/'.$student->id)}}  " value="{{$student}}" role="button">Delete</a></td>
  </tr>           
  @endif
  
@endforeach

  
</table>
    
   
  <?php }  elseif ($id==40){?>
 <h1>All Sales </h1>

<p>All sales in Cord Digital <a class="btn btn-primary" href="https://corddigital.com/system/public/site/admin/sales1" role="button">add new</a> </p>


<table >
  <tr>
   
    <td>Id</td>
    <td> Sales Name</td>
    <td>Edit</td>
    <td>Delete</td>
  
  </tr>
@foreach($data as $student)
  <tr>
   @if(empty($student->Person))
 <input type="hidden" id="custId" name="custId" >
@else
  <td>{{$student->id}}</td>
    <td>{{$student->Person}}</td>
    <td><a class="btn btn-primary" href="{{url('site/admin/editsales/'.$student->id)}}" role="button">Edit</a></td>
     <input type="hidden" id="custId" name="custId" value="{{$student->id}}">
     <td><a class="btn btn-danger" href="{{url('site/admin/deletesa/'.$student->id)}}  " value="{{$student}}" role="button">Delete</a></td>
  </tr>           
  @endif
  
@endforeach

  
</table>
  
         <?php        }else {
  
} ?>
    
    








</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>
