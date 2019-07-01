<div>
    <p><b>Name    : </b> {{$name}}</p>
    <p><b>Email   : </b> {{$email}}</p>
    <p><b>Phone   : </b> {{$phone}}</p>
    <p><b>FAX   : </b> {{$fax}}</p>
    <p><b>Contact Method   : </b> {{$contact_method}}</p>
    <p><b>Contents  : </b>
    @foreach ($content as $item)
        {{$item}} <br>
    @endforeach
    </p>
    <p><b>Location   : </b> {{$pro_location}}</p>
    <p><b>Pro Name   : </b> {{$pro_name}}</p>

</div>
