<script>
    // Use Google Maps autocomplete API to give location suggestions
    function placeSearch() {
        var locationA = document.getElementById('origin');
        var locationB = document.getElementById('destination');

        var suggestionForLocationA = new google.maps.places.Autocomplete(locationA);
        var suggestionForLocationB = new google.maps.places.Autocomplete(locationB);
    }
</script>
{{--Script to connect with Google Maps autocomplete API --}}
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUJs_46QaXwSn4y_QD8YrH5v6EyKUXOjk&libraries=places&callback=placeSearch"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script>
    $(document).ready(function() {
        $('#fetchData').click(function () {
            //Pass token as part of laravel security
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val()
                }
            });

            var origin = $('#origin').val();
            var destination = $('#destination').val();

            $.ajax({
                method: 'POST',
                url: '/locations/send',
                data: {origin : origin, destination: destination},
                success: function(response){
                    var response = $.parseJSON(response);

                    $('.table tbody').append("<tr>" +
                        "<td>" + response.origin_addresses + "</td>" +
                        "<td>" + response.destination_addresses + "</td>" +
                        "<td>" + response.rows[0].elements[0].distance.text + "</td>" +
                        "<td>" +response.rows[0].elements[0].duration.text + "</td>" +
                        "</tr>");
                }
            });
        });
    });
</script>