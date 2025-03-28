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

  <div style="position: relative; top:70px;right:-150px;">
    <table bgcolor="black" border="2px">
        <tr style="font-size: 24px;">
            <th style="padding:30px;padding-bottom: 10px;">Name</th>
            <th style="padding:30px;padding-bottom: 10px;">Email</th>
            <th style="padding:30px;padding-bottom: 10px;">Guest</th>
            <th style="padding:30px;padding-bottom: 10px;">Date & Time</th>
            <th style="padding:30px;padding-bottom: 10px;">Message</th>
        </tr>
        @foreach($data as $data)
        <tr align="center">
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->guest}}</td>
            <td>{{$data->datetime}}</td>
            <td style="padding-left:30px">{{$data->message}}</td>
            
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
