<form action="/api/airline/new" method="POST">
    {{csrf_field()}}
    {{method_field('PUT')}}

    <div class="form-group">
        <input type="text" name="name" placeholder="Name" value="{{ $airline->name }}">
    </div>

    <div class="form-group">
        <input type="text" name="country" placeholder="Country" value="{{ $airline->country }}">
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Felvisz</button>
</form>