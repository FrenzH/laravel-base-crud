@foreach ($comics as $comic)
<a href="{{route('comics.show', $comic->id)}}">
    <p>{{$comic['title']}}</p>

</a>



@endforeach
<a href="{{route('comics.create')}}">add comics</a>
