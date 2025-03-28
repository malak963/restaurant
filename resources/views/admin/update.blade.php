<x-app-layout>
</x-app-layout>

   <!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
     <base href="/public">
   @include("admin.admincss")
  </head>
  <body>
  <div class="container-scroller ">
  @include("admin.navbar")

  <div class="form text-center" style="align-content: center;  width:100%; position:relative;  ">
    <form action="{{url('/update',$data->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="" style="font-size:24px;right:30px">Title</label>
            <input style="border-radius: 10px; padding: 5px;background-color: black;width:30% " type="text" name="title" value="{{$data->title}}" required>
        </div>
<br>
        <div >
            <label for="" style="font-size:24px;right:30px ;">Price</label>
            <input style="border-radius: 10px; padding: 5px;background-color: black;; width:30%" type="num" name="price" value="{{$data->price}}" required>
        </div>
<br>

        <div >
            <label for="" style="font-size:24px;right:30px">Description</label>
            <input style="border-radius: 10px; padding: 5px;background-color: black;;width:30% " type="text" name="description" value="{{$data->description}}" required>
        </div>
<br>
<br>
<br>
<br>
        <div >
            
            <label for="" style="font-size:24px;">OldImage</label>
            <br>
            <br>
            <img style="width:150px;right:250px;border-radius:10px;position:absolute;top:290px" src="/foodimage/{{$data->image}}" alt="">
            
        </div>

        <div >
            
            <label for="" style="font-size:24px;">NewImage</label>
            
            <input style="border-radius:10px;"type="file" name="image" required>
            
        </div>
        
        <input style="border-radius: 10px; padding: 5px;background-color: black;width:20%; top:20px" type="submit" value="Save" >
    </form>

  </div>
    <!-- container-scroller -->
    @include("admin.adminscript")
    <!-- End custom js for this page -->
  </body>
</html>