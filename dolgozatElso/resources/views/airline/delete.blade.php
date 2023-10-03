@foreach ($airlines as $airline)
    <form action="/api/airline/{airline_id}" method="POST">
    {{method_field('DELETE')}}
    <input type="submit" class="btn btn-primary">Törlés</input>
     </form>
@endforeach