<x-app-layout>
   
</x-app-layout>


<!DOCTYPE html>
<html lang="en">
    <head>
        @include('admin.css')

        <style type="text/css"> 
        .title{
            colour:white; padding-top: 25px; font-size: 25px;
        }

        label{
            display: inline-block;
            width: 200px;
        }

    </style>
    </head>
    <body>
        @include('admin.sidebar')
            <!-- partial -->
            @include('admin.navbar')
            <div class="container-fluid page-body-wrapper">
              <div class="container" align="center"> 
            <h1 class ="title">Add the Mechandise Here</h1>

@if(session()->has('message'))

<div class="alert alert-success">
<button type="button" class="close" data-dismiss="alert" >x</button>
{{session()->get('message')}}
    </div>
@endif

<form action="{{url('uploadproduct')}}" method="post" enctype="multipart/form-data">
@csrf

            <div style="padding:15px;">
                <label>Merch title</label>
                <input style="color:black;" type="text" name="title" placeholder="Give a Merch Title" required="">
    </div>


    <div style="padding:15px;">
                <label>Merch Price</label>
                <input style="color:black;" type="number" name="price" placeholder="Give a Merch price" required="">
    </div>

    <div style="padding:15px;">
                <label>Merch Description</label>
                <input style="color:black;" type="text" name="des" placeholder="Give a Merch Description" required="">
    </div>


    <div style="padding:15px;">
                <label>Quantity</label>
                <input style="color:black;" type="number" name="quantity" placeholder="Give a Merch Quantity" required="">
    </div>


    <div style="padding:15px;">
        <input type ="file" name="file">
    </div>

    <div style="padding:15px;">
            <input class="btn btn-success" type ="submit">  
    </div>

    <form>

    </div>

</div>

               @include('admin.script')
    </body>
</html>

