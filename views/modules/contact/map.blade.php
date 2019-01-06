        <div class="m-t-20 border p-10">
            <div id="map" style="height: 300px; width: 100%; background-color: #fff;"></div>
        </div>
        @push('js-inline')
            <script>
                function initMap() {

                    var center = {lat: {{ setting('contact::contact-map-lat') }}, lng: {{ setting('contact::contact-map-lng') }} };

                    var map = new google.maps.Map(document.getElementById('map'),{
                        center: center,
                        zoom: 16
                    });

                    var infoWindow = new google.maps.InfoWindow({
                        content: "{{ setting('theme::company-name') }}"
                    });

                    var marker = new google.maps.Marker({
                        position: center,
                        map: map,
                        title: "{{ setting('theme::company-name') }}"
                    });

                    marker.addListener('click', function () {
                        infoWindow.open(map, marker);
                    });
                }
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key={{ setting('contact::contact-map-key') }}&callback=initMap&language={{ locale() }}"></script>
        @endpush
