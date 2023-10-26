@extends('layout.layout')
@section('content')
<title>carGarage | home</title>

@foreach ($carPosts as $posts)
  @if($posts->owner != $id)
<div style="border: 1px solid #000000; border-radius: 5px;" class="text-white mb-3">
<!----pic details-->
<div style="display: flex; align-items: center; width: 50%;" class="ms-3">
    <div class="mb-2 mt-2" style="display: flex; align-items: center;">
      <div style="width: 50px; height: 50px; border-radius: 50%; overflow: hidden;">
        <img src="/imgs/anime.jfif" alt="" style="width: 100%; height: 100%; object-fit: cover;">
      </div>
      <span style="margin-left: 10px;"><b><small>{{$posts->user->username}}</small></b><small class="text-muted ms-4">{{$posts->created_at}}</small></span>
    </div>
  </div>
<!----end of pic details--->
<!----caption details-->
<div  class="ms-3 me-3 text-white">
    <p>
      {!! $posts -> description !!}
    </p>
    <small><b>Rate per day: GHC {{$posts -> Rate_per_day}}</b></small>
  </div>
<!----end of caption details--->
<div style=" width:60%;  margin: 20px auto;">
  <div class="text-center mb-2 mt-2">
  <img src="{{ Storage::url($posts->image) }}" alt="" style="width: 100%; max-width: none; max-height: 100%; object-fit: cover; border-radius: 10px;"/> 
</div>
</div>
<div class="mb-4 text-center" >
<button class="btn text-white me-4" style="border: 1px solid red">

   @if ($posts -> status == 1)
  
    <small>Status: Available</small>
  
  @else
  
    <small>Status: Rented</small>
  
  @endif

</button>
<a @if ($posts->status == 1)
href="{{url('user/rentcar')}}"
@endif >
  <button class="btn text-white ms-4" style="border: 1px solid blue; width:20%" @if ($posts->status == 0) disabled
    
  @endif<small>Rent car</small></button></a>
</div>
</div>
@endif
@endforeach



@endsection