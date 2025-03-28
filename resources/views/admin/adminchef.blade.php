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
 <div class="form text-center" style="align-content: center;  width:100%; position:relative;"> 
  <form action="{{url('/uploadchef')}}" method="post" enctype="multipart/form-data">
    @csrf
     <div>
        <label for="" style="font-size:24px;right:30px">Name</label>
        <input style="border-radius: 10px; padding: 5px;background-color: black;;width:30% ;" type="text" name="name" required="" placeholder="Enter the name">
    </div>
    <div>
        <label for="" style="font-size:24px;right:30px">Speciality</label>
        <input style="border-radius: 10px; padding: 5px;background-color: black;;width:30% ;" type="text" name="speciality" required="" placeholder="Enter the speciality">
    </div>

    <div> 
        <input  type="file" name="image" required="">
    </div>

    <div>
        <input  style="font-size:24px;right:30px;border-radius: 10px; padding: 5px;background-color: black;;width:30% " type="submit" value="Save">
    </div>

  </form>

  <table bgcolor="black" class="table text-center"  border="3px">
     <tr>
        <th style=" font-size: 27px;" > Chef Name</th>
        <th style=" font-size: 27px;">Speciality</th>
        <th style=" font-size: 27px;">Image</th>
        <th style=" font-size: 27px;">Action1</th>
        <th style=" font-size: 27px;">Action2</th>
     </tr>
     @foreach($data as $data)
     <tr>
      <td>{{$data->name}}</td>
      <td>{{$data->speciality}}</td>
      <td  style="width:170px;"><img  style="width:100px;height:75px"  src="/chefimage/{{$data->image}}" alt=""></td>
      <td><a href="{{url('/updatechef',$data->id)}}">Update</a></td>
      <td><a href="{{url('/deletechef',$data->id)}}">Delete</a></td>
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
