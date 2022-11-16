@foreach ($comics as $comic)
<a href="{{route('comics.show', $comic->id)}}">
    <p>{{$comic['title']}}</p>

</a>

<button onclick="askUserToSubmitForm({{ $comic->id }})"> Elimina </button>
            <form id="new-comic-form-{{ $comic->id }}" class="" method="POST"
                action="{{ route('comics.destroy', $comic->id) }}">
                @csrf
                @method('DELETE')
            </form>



@endforeach
<a href="{{route('comics.create')}}">add comics</a>

<script>
    function askUserToSubmitForm(id) {
        if (confirm('are you sure?')) {
            document.getElementById('new-comic-form-' + id).submit();
        }
    }
</script>
