<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
<x-app-layout>
</x-app-layout>

    <!-- Required meta tags -->
   @include("admin.admincss")
   <link rel="stylesheet" href="{{asset('admin/hi')}}">
  </head>
  <body>
  <div class="container-scroller ">
           @include("admin.navbar")
    
    <div class="row justify-content-center" style="align-content: center; right:-40px; width:70%;position:relative; top:-60px; background-color: rgba(43, 42, 42, 0.281);">
        <div class="col-md-8 offset-md-2">
        <table class="table text-center"  border="3px">
            <tr>
                <th style=" font-size: 27px;">Name</th>
                <th style=" font-size: 27px;">Email</th>
                <th style=" font-size: 27px;">Action</th>
            </tr>

            @foreach($data as $data)
            <tr>
                <td style=" font-size: 24px;">{{$data->name}}</td>
                <td style=" font-size: 24px;">{{$data->email}}</td>
                @if($data->usertype=='0')
                <td style=" font-size: 24px; "><a href="{{url('/deleteuser',$data->id)}}">Delete</a></td>
                @else
                <td style=" font-size: 24px;"><a >Not Allowed</a></td>
                @endif
            </tr>

            @endforeach

        </table>
            
        </div>
    </div>
    </div>
    @include("admin.adminscript")
    <!-- End custom js for this page -->
  </body>
</html>

