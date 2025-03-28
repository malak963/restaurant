<div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>
                <h1 class="mb-5">Most Popular Items</h1>
            </div>
            <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                            <i class="fa fa-coffee fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Popular</small>
                                <h6 class="mt-n1 mb-0">Breakfast</h6>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                            <i class="fa fa-hamburger fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Special</small>
                                <h6 class="mt-n1 mb-0">Launch</h6>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                            <i class="fa fa-utensils fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Lovely</small>
                                <h6 class="mt-n1 mb-0">Dinner</h6>
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    
                        <div class="row g-4">

                         @foreach($data as $data)
                         <form action="{{url('/addcart',$data->id)}}" method="post">
                            @csrf
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="foodimage/{{$data->image}}" alt="" style="width: 180px; height: 150px;border-radius: 20px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>{{$data->title}}</span>
                                            <span class="text-primary">{{$data->price}}</span>
                                        </h5>
                                        <small class="fst-italic">{{$data->description}}</small>
                                    </div>
                                    
                                </div>
                                <input type="number" name="quantity" min="1" style="width=10px;border-radius: 5px; padding: 2px;background-color: rgb(253, 253, 160);">
                                <input type="submit" value="add cart">
                         <i class="fas fa-shopping-cart" style="font-size: 24px;color: #ff5722;" ></i> 
                               
                            </div>
                            </form>
                           @endforeach

                        </div>
                    </div>
                   
                </div>
            
        </div>
    </div>