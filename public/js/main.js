var token = $('meta[name="csrf-token"]').attr('content');
var a = function() {
    window.location.href = "http://www.hownes.com/loan/sim/";
}
var b = function() {
    window.location.href = "http://www.sk-f.co.jp/temp.php?dir=contact&page=index";
}
var c = function() {
    window.location.href = "http://www.fudousan.or.jp/kiso/buy/index.html";
}
var d = function() {
    window.location.href = "http://www.fudousan.or.jp/kiso/buy/1_1.html";
}

function init() {

    var lat = 35.658995;
    var lng = 140.109880;
    var homeLatlng = new google.maps.LatLng(lat, lng);
    var homeMarker = new google.maps.Marker({
        position: homeLatlng,
        map: map,
        draggable: true
    });
    var myOptions = {
        center: new google.maps.LatLng(35.658995, 140.109880),
        zoom: 17,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById("map"),
        myOptions);
    google.maps.event.addListener(homeMarker, 'position_changed', function() {
        var lat = homeMarker.getPosition().lat();
        var lng = homeMarker.getPosition().lng();
        $('#lat').val(lat);
        $('#lng').val(lng);
    });

    google.maps.event.addListener(map, 'center_changed', function() {
        var lat = homeMarker.getPosition().lat();
        var lng = homeMarker.getPosition().lng();
    });
    var input = document.getElementById('search_new_places');
    var autocomplete = new google.maps.places.Autocomplete(input);
    autocomplete.bindTo('bounds', map);

    google.maps.event.addListener(autocomplete, 'place_changed', function() {

        var place = autocomplete.getPlace();

        if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
        } else {
            map.setCenter(place.geometry.location);
            map.setZoom(17);
        }
        homeMarker.setMap(map);
        homeMarker.setPosition(place.geometry.location);

    });
}

function addnews() {

    $.post('addnews', {
        head: $('#headline').val(),
        link: $('#link').val(),
        _token: token
    }, (f) => {
        if (f) {
            $('#tb').append('<tr id="tr' + f + '"><td>' + f + '</td><td>' + $('#headline').val() + '</td><td>' + $('#link').val() + '</td>            <td>Now</td><td><button class="btn btn-primary" onclick="edit(' + f + ');">Edit</button>                <button class="btn btn-danger" onclick="delet(' + f + ');">Delete</button></td></tr>');
            $('#headline').val('');
            $('#link').val('');
        }
    });
}

function edit(i) {
    $.post('getnews', {
        id: i,
        _token: token
    }, (f) => {
        $.each(f, function(v, p) {
            $('#headline').val(p.headline);
            $('#link').val(p.link);
            $('#id').val(p.id);
            $('#sub').attr('onclick', 'update();');
            $('#sub').text('Update');
        });
    });
}

function update() {

    $.post('updatenews', {
        head: $('#headline').val(),
        link: $('#link').val(),
        id: $('#id').val(),
        _token: token
    }, (f) => {
        if (f == 'Done') {
            $('#headline').val('');
            $('#link').val('');
            $('#id').val('');
            $('#sub').attr('onclick', 'addnews();');
            $('#sub').text('Add');
        }
    });
}

function delet(i) {
    $.post('deletnews', {
        id: i,
        _token: token
    }, (f) => {
        if (f == 'Done') {
            $('#tr' + i).remove();
        }
    });
}