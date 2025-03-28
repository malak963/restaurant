<x-app-layout>
</x-app-layout>

   <!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
     
   @include("admin.admincss")
  </head>
  <body>
  <div class="container-scroller ">
  @include("admin.navbar")

<div class="container">
  <h1  style="top:30px">Costumer Orders</h1>

  <form action="{{url('/search')}}" method="get">
    @csrf
    <input type="text" name="search"  style="color:white;border-radius: 10px; padding: 5px;background-color: black;">
    <input type="submit" value="Search" class="btn btn-success">
  </form>

  <table class="table text-center"  border="3px">
    <tr>
        <td style="padding:25px;font-size: 27px">Name</td>
        <td style="padding:25px;font-size: 27px">Phone</td>
        <td style="padding:25px;font-size: 27px">Address</td>
        <td style="padding:25px;font-size: 27px">Foodname</td>
        <td style="padding:25px;font-size: 27px">Price</td>
        <td style="padding:25px;font-size: 27px">Quantity</td>
        <td style="padding:25px;font-size: 27px">Total Price</td>
    </tr>
    @foreach($data as $data)
    <tr style="background-color:black ">
        <td>{{$data->name}}</td>
        <td>{{$data->phone}}</td>
        <td>{{$data->address}}</td>
        <td>{{$data->foodname}}</td>
        <td>{{$data->price}}$</td>
        <td>{{$data->quantity}}</td>
        <td>{{$data->price * $data->quantity}}$</td>
    </tr>
    @endforeach
  </table>
  </div>
  </div>
    <!-- container-scroller -->
    @include("admin.adminscript")
    <!-- End custom js for this page -->
  </body>
</html>
