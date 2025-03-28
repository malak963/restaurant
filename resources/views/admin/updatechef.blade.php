<x-app-layout>
</x-app-layout>

   <!DOCTYPE html>
<html lang="en">
  <head>

  <base href="/public">
    <!-- Required meta tags -->
     
   @include("admin.admincss")
  </head>
  <body>
  <div class="container-scroller ">
  @include("admin.navbar")
  <div class="form text-center" style="align-content: center;  width:100%; position:relative;  ">
  <form action="{{url('/updateafoodchef',$data->id)}}" method="Post" enctype="multipart/form-data">
    @csrf
    <div>
        <label style="font-size:24px;right:30px" for="">Chef Name</label>
        <input style="border-radius: 10px; padding: 5px;background-color: black;; width:50%" type="text" name="name" value="{{$data->name}}">
    </div>
    <div>
        <label style="font-size:24px;right:30px" for="">Speciality</label>
        <input style="border-radius: 10px; padding: 5px;background-color: black;; width:50%" type="text" name="speciality" value="{{$data->speciality}}">
    </div>
    <div >
            
            <label for="" style="font-size:24px;">OldImage</label>
            <br>
            <br>
            <img style="width:150px;right:250px;border-radius:10px;position:absolute;top:290px" src="/chefimage/{{$data->image}}" alt="">
            
        </div>

        <div >
            
            <label for="" style="font-size:24px;">NewImage</label>
            
            <input style="border-radius:10px;"type="file" name="image" required>
            
        </div>
        <input style="border-radius: 10px; padding: 5px;background-color: black;width:20%; top:20px" type="submit" value="Update Chef" >
  </form>
</div>
  </div>
    <!-- container-scroller -->
    @include("admin.adminscript")
    <!-- End custom js for this page -->
  </body>
</html>
