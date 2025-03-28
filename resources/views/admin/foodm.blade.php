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
<div class="form text-center" style="align-content: center;  width:100%; position:relative;  ">
    <form action="{{url('/uploadfood')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="" style="font-size:24px;right:30px">Title</label>
            <input style="border-radius: 10px; padding: 5px;background-color: black;width:30% " type="text" name="title" placeholder="Write a title" required>
        </div>

        <div >
            <label for="" style="font-size:24px;right:30px ;">Price</label>
            <input style="border-radius: 10px; padding: 5px;background-color: black;; width:30%" type="num" name="price" placeholder="Write a price" required>
        </div>

        <div >
            <label for="" style="font-size:24px;right:30px">Image</label>
            <input style="border-radius: 10px; padding: 5px;background-color: black;;width:30% " type="file" name="image"  required>
        </div>

        <div >
            <label for="" style="font-size:24px;right:30px">Description</label>
            <input style="border-radius: 10px; padding: 5px;background-color: black;;width:30% " type="text" name="description" placeholder="Write a description" required>
        </div>

       
        <input style="border-radius: 10px; padding: 5px;background-color: black;width:20%; " type="submit" value="Save" >
    </form>

   <div style="align-content: center;  width:100%; position:relative; top:20px ;left:300px;">
    <table bgcolor="black" >
        <tr>
            <th style="padding: 30px;padding-top: 10px;">Food Name</th>
            <th style="padding: 30px;padding-top: 10px;">Price</th>
            <th style="padding: 30px;padding-top: 10px;">Description</th>
            <th style="padding: 30px;padding-top: 10px;">Image</th>
            <th style="padding: 30px;padding-top: 10px;">Action</th>
            <th style="padding: 30px;padding-top: 10px;">Action2</th>
        </tr>
        @foreach($data as $data)
        <tr align:"center" >
            <td >{{$data->title}}</td>
            <td>{{$data->price}}</td>
            <td>{{$data->description}}</td>
            <td  style="width:170px;"><img  style="width:150px;height:100px"  src="/foodimage/{{$data->image}}" alt=""></td>
            <td> <a href="{{url('/deletem',$data->id)}}">Delete</a></td>
            <td> <a href="{{url('/updatem',$data->id)}}">Update</a></td>
        </tr>
        @endforeach
    </table>
   </div>

</div>

    <!-- container-scroller -->
</div>
    @include("admin.adminscript")
    <!-- End custom js for this page -->
  </body>
</html>
