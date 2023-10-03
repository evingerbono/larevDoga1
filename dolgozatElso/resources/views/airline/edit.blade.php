<form action="/api/airline/{{$airline->airline_id}}" method="POST">
    {{csrf_field()}}
    {{method_field('PUT')}}

    <div class="form-group">
        <input type="text" name="name" placeholder="Name" value="{{ $airline->name }}">
    </div>

    <div class="form-group">
        <input type="text" name="country" placeholder="Country" value="{{ $airline->country }}">
    </div>
    <br>
    <input type="submit" class="btn btn-primary">Küldés</input>
</form>