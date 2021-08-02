@foreach ($reservoirs as $reservoir)
  <a href="{{route('reservoir.edit',[$reservoir])}}">{{$reservoir->title}} {{$reservoir->area}} {{$reservoir->about}}</a><br>
  <form method="POST" action="{{route('reservoir.destroy', [$reservoir])}}">
   @csrf
   <button type="submit">Delete</button>
  </form>
  <br>
@endforeach


