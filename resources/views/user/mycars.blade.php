@extends('layout.layout')
@section('content')
<title>carGarage | mycars</title>

<div class="text-white" style="border: 1px solid #000000; border-radius:10px">
    <div class="ms-3 mb-3 me-2" >
        <b>Upload a Car:</b><br>
        <form action="{{url('user/saveCar')}}" enctype="multipart/form-data" method="post">
            @csrf
            @method('GET')
        <label for="carImage" class="text-white mt-3">Image</label>
        <input type="file" name="carImage" id="" class="form-control mb-4 mt-2 text-white" style="width:min-content; background-color:#1d2224; border:1px solid bluevoilet">
        @if ($errors->any())
        @foreach ( $errors ->all() as $error )
        <p class="text-danger">{{$error}}</p>
            
        @endforeach
            
        @endif
        <label for="description">Description:</label>
        <textarea name="description" required id="" cols="20" rows="5" class="form-control me-4 text-white" style="background-color: #1d2224; outline:none"></textarea>
        <label for="rate" class="mt-2 form-label">Rate per day:</label>
        <input type="number" name="rate" class="form-control text-white" required style="width: fit-content;background-color: #1d2224; outline:none">
        <div class="text-center">
            <button class="btn text-primary mt-3" type="submit" style="border: 1px solid blue;">Save Car</button>
        </div>
        <input type="hidden" name="owner" id="" value="{{$id}}" >
        @if (Session::has('success_mg'))
        <p class="text-center text-success">{{session('success_mg')}}</p>      
        @endif
        </form>
    </div>
</div>




@endsection