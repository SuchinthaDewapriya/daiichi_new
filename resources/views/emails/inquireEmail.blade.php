<div>
    <p><b>Name    : </b> {{$name}}</p>
    <p><b>Email   : </b> {{$email}}</p>
    <p><b>phonetic   : </b> {{$phonetic}}</p>
    <p><b>Phone   : </b> {{$phone}}</p>
    <p><b>Post Code   : </b> {{$post_code}}</p>
    <p><b>Address   : </b> {{$address}}</p>
    <p><b>Contents  : </b>
    @foreach ($content as $item)
        {{$item}} <br>
    @endforeach
    </p>
    <p><b>Inquire   : </b> {{$inquire}}</p>
    <p><b>Confirm   : </b> {{$confirm}}</p>

</div>
