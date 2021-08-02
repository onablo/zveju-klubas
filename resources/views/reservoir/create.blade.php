<form method="POST" action="{{route('reservoir.store')}}">
    Title: <input type="text" name="reservoir_title">
    Area: <input type="text" name="reservoir_area">
    About: <textarea name="reservoir_about"></textarea>
    @csrf
    <button type="submit">Add</button>
 </form>
 