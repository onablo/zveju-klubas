<form method="POST" action="{{route('member.update',[$member])}}">
    Name: <input type="text" name="member_name" value="{{$member->name}}">
    Surname: <input type="text" name="member_surname" value="{{$member->surname}}">
    Live:: <input type="text" name="member_live" value="{{$member->live}}">
    Experience: <input type="text" name="member_experience" value="{{$member->experience}}">
    Registered: <input type="text" name="member_registered" value="{{$member->registered}}">
    <select name="reservoir_id">
        @foreach ($reservoirs as $reservoir)
            <option value="{{$reservoir->id}}" @if($reservoir->id == $member->reservoir_id) selected @endif>
                {{$reservoir->title}} {{$reservoir->area}} {{$reservoir->about}}
            </option>
        @endforeach
    </select>
    @csrf
    <button type="submit">Edit</button>
</form>
