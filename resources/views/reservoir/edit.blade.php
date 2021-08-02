<form method="POST" action="{{route('reservoir.update',$reservoir)}}">
    Title: <input type="text" name="reservoir_title" value="{{$reservoir->title}}">
    Area: <input type="text" name="reservoir_area" value="{{$reservoir->area}}">
    About: <textarea name="reservoir_about" value="{{$reservoir->about}}"></textarea>
   @csrf
   <button type="submit">Edit</button>
</form>

