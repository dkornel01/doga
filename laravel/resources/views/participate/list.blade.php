@foreach ($participates as $participate)
    <form action="/api/participates/{{$participate->id}}" method="post">
    {{csrf_field()}}
    {{csrf_token('Get')}}
    <div class="form-group">
        <input type='submit' value="{{$participate->title}}">
    </div>
    </form>
    @endforeach