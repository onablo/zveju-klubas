@foreach ($members as $member)
<a href="{{route('member.edit',[$member])}}">{{$member->title}} title: {{$member->memberReservoir->title}} area: {{$member->memberReservoir->area}} about: {{$member->memberReservoir->about}} </a>
  <form method="POST" action="{{route('member.destroy', [$member])}}">
   @csrf
   <button type="submit">Delete</button>
  </form>
  <br>
@endforeach
