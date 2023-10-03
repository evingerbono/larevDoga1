@foreach ($airlines as $airline)
    <form action="/api/airline/list" method="GET">
    {{csrf_field()}}
    {{method_field('GET')}}
    <div class="form-group">
        <p>{{$airline->name}}</p>
        <p>{{$airline->country}}</p>
        <br>
    </div>
     </form>
@endforeach