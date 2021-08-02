<form method="POST" action="{{route('member.store')}}">
    Name: <input type="text" name="member_name">
    Surname: <input type="text" name="member_surname">
    Live: <input type="text" name="member_live">
    Experience: <input type="text" name="member_experience">
    Registered: <input type="text" name="member_registered">    
    <select name="reservoir_id">
        @foreach ($reservoirs as $reservoir)
            <option value="{{$reservoir->id}}">{{$reservoir->title}} {{$reservoir->area}} {{$reservoir->about}}</option>
        @endforeach
    </select>
    @csrf
    <button type="submit">Add</button>
 </form>
 
