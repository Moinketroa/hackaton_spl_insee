@extends('layouts.app')

@section('content')
    <div id="map"></div>
@endsection

@section('extra-js')
    
    <script>
        
        var brut;
        
        
        
        
		
	
    function initMap() {
       var defaut = imageRETRAITE = baseUrl+'/assets/image/Point_GN.png';
		var imageundefined = imageCommercial = imageHOPITAL = baseUrl+'/assets/image/Point_Cible.png';
		var imagePiscine, imageFootball, imageTennis;
		imagePiscine = imageFootball = imageTennis = imageAthlétisme = imageCLUB= imageSki = baseUrl+'/assets/image/Point_Loisir.png';	  
		var imageSUPERIEUR =baseUrl+'/assets/image/Point_Ecole.png';
		var imageResidenceU =  baseUrl+'/assets/image/Point_ResidU.png';
		var imageRESTAURANT = imageFASTFOOD =   baseUrl+'/assets/image/Point_Resto.png';
	    var imageBAR = baseUrl+'/assests/image/Point_Bar.png';
        var imageVELO = baseUrl+'/assets/image/Point_Velo.png';
        var imageCINEMA = baseUrl+'/assets/image/Point_Cinema.png';
        var imageSTAN = baseUrl+'/assets/image/Point_Stan.png';
	
		
		var parse_brut = JSON.parse(brut);
		var places = [];
		
		places[0] = parse_brut.center;
		
		for ( plop in parse_brut.places){
			places[plop +1] = parse_brut.places[plop];
		}
	
		
		var data_trambus = '{"positions":[ {"lat":48.678100, "lng":6.189100}, {"lat":48.678200, "lng":6.189100}, {"lat":48.678200, "lng":6.189400} ]}';
		var trambus = JSON.parse(data_trambus);

		var test = [ {lat:48.678100, lng:6.189100}, {lat:48.678200, lng:6.189100}, {lat:48.678200, lng:6.189400} ];
        
        
        
        var mapDiv = document.getElementById('map');
		
        var map = new google.maps.Map(mapDiv, {
          center:{lat: parseFloat(places[0].y), lng: parseFloat(places[0].x)},
          zoom: 14
        });
		
		//for (var trb in trambus){
			//console.log(trambus[trb].positions);
			new google.maps.Polyline({
				path: test,
				geodesic: true,
				strokeColor: '#FF0000',
				strokeOpacity: 1.0,
				strokeWeight: 2
			  });
		//}
		
		
		// Construct the circle for each value in citymap.
		// Note: We scale the area of the circle based on the population.
		for (var place in places) {
		
			var center = {lat: parseFloat(places[place].y), lng: parseFloat(places[place].x)};
			//console.log(places[place]);
			//console.log(center);
			
			var image = "image";
			
			console.log(image.concat(places[place].type));
			if (places[place].z < 0.0001) {
				new google.maps.Marker({
					title: places[place].nom,
					position: center,
					map: map,
					icon: eval((image.concat(places[place].type)))
				  });
			} else
				new google.maps.Circle({
					strokeColor: '#0000FF',
					strokeOpacity: 0.8,
					strokeWeight: 2,
					fillColor: '#0000FF',
					fillOpacity: 0.1,
					map: map,
					center: center,
					radius: Math.sqrt(places[place].z) * 8000
				});
		}
	}
    
    
    $.ajax({
            url: baseUrl+'/place',
            success: function(data){
                brut=data;
                console.log(data)
                initMap();
                
                
            }
        });
        
        
    </script>
    <script src="https://maps.googleapis.com/maps/api/js"
        async defer></script>
@endsection