<form action="/api/participates" method="post">
    {{csrf_field()}}
    <input type="id" name="participate_id" placeholder="id">
    <input type="boolean" name="present" placeholder="false">
    <select name="participate_id" placeholder="participate_id">
        @foreach($participates as $participate)
            <option value="{{participate_id}}">{{$particpate->present}}</option>
        @endforeach
    </select>
    <input type="foreignid" name="event_id" placeholder="event_id">
        <option value="1">Open</option>
        <option value="0">Closed</option>
    </select>
    <input type="foreignid" name="user_id" placeholder="user_id">
        <option value="1">Open</option>
        <option value="0">Closed</option>
    </select>
    <input type="submit" value="ok">
</form>