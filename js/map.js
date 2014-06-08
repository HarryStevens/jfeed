var map;
var layer_0;
function initialize() {
	map = new google.maps.Map(document.getElementById('map-canvas'), {
		center : new google.maps.LatLng(40.78892198710414, -73.91289938354491),
		zoom: 10,
		streetViewControl : false,
		panControl : false,
		mapTypeControl: false
	});

	//Styles map to reduce saturation and remove unnecessary elements
	var style = [{
		featureType : 'landscape',
		elementType : 'all',
		stylers : [{
			saturation : -90
		}]
	},	
	{
		featureType : 'water',
		elementType : 'all',
		stylers : [{
			saturation : -30
		}]
	}];

	var styledMapType = new google.maps.StyledMapType(style, {
		map : map,
		name : 'Styled Map'
	});
	map.mapTypes.set('map-style', styledMapType);
	map.setMapTypeId('map-style');
	
	layer_0 = new google.maps.FusionTablesLayer({
		query : {
			select : "col2",
			from : "1gPl-G23UfCgZ9EwGZkSCHBO1qDcqtfz_Ovr4kD2Q"
		},
		map : map,
		styleId : 2,
		templateId : 2
	});
}

//Updates the map based on first name searches
function changeMap_firstname() {
	var whereClause;
	var searchString = document.getElementById('search-string_firstname').value.replace(/'/g, "\\'");
	whereClause = "'First' CONTAINS IGNORING CASE '" + searchString + "'";
	layer_0.setOptions({
		query : {
			select : "col2",
			from : "1gPl-G23UfCgZ9EwGZkSCHBO1qDcqtfz_Ovr4kD2Q",
			where : whereClause
		}
	});
}

//Updates the map based on last name searches
function changeMap_lastname() {
	var whereClause;
	var searchString = document.getElementById('search-string_lastname').value.replace(/'/g, "\\'");
	whereClause = "'Last' CONTAINS IGNORING CASE '" + searchString + "'";
	layer_0.setOptions({
		query : {
			select : "col2",
			from : "1gPl-G23UfCgZ9EwGZkSCHBO1qDcqtfz_Ovr4kD2Q",
			where : whereClause
		}
	});
}

//Updates the map based on company searches
function changeMap_company() {
	var whereClause;
	var searchString = document.getElementById('search-string_company').value.replace(/'/g, "\\'");
	whereClause = "'Company' CONTAINS IGNORING CASE '" + searchString + "'";
	layer_0.setOptions({
		query : {
			select : "col2",
			from : "1gPl-G23UfCgZ9EwGZkSCHBO1qDcqtfz_Ovr4kD2Q",
			where : whereClause
		}
	});
}

//Updates the map based on position searches
function changeMap_position() {
	var whereClause;
	var searchString = document.getElementById('search-string_position').value.replace(/'/g, "\\'");
	whereClause = "'Position' CONTAINS IGNORING CASE '" + searchString + "'";
	layer_0.setOptions({
		query : {
			select : "col2",
			from : "1gPl-G23UfCgZ9EwGZkSCHBO1qDcqtfz_Ovr4kD2Q",
			where : whereClause
		}
	});
}

//Global variables are arrays to update with data from Fusion Table for autocomplete search
var firstnameArray = [];
var lastnameArray = [];
var companyArray = [];
var positionArray = [];

//This function grabs the data and makes appropriate arrays to serve to the autocompletes
function complete(d) {
	//this will grab some data; may need to be moved
	var rows = d.rows;
	for (var i = 0; i < rows.length; i++) {
		var currObj = rows[i];
		var currFirstname = currObj[0];
		firstnameArray.push(currFirstname);
		var currLastname = currObj[1];
		lastnameArray.push(currLastname);
		var currCompany = currObj[3];
		companyArray.push(currCompany);
		var currPosition = currObj[4];
		positionArray.push(currPosition);
	}
	
	//Deduplicate arrays and make new arrays without duplicates
	var firstnameUniques = [];
	$.each(firstnameArray, function(i, el) {
		if ($.inArray(el, firstnameUniques) === -1)
			firstnameUniques.push(el);
	});
	
	var lastnameUniques = [];
	$.each(lastnameArray, function(i, el) {
		if ($.inArray(el, lastnameUniques) === -1)
			lastnameUniques.push(el);
	});
	
	var companyUniques = [];
	$.each(companyArray, function(i, el) {
		if ($.inArray(el, companyUniques) === -1)
			companyUniques.push(el);
	});
	
	var positionUniques = [];
	$.each(positionArray, function(i, el) {
		if ($.inArray(el, positionUniques) === -1)
			positionUniques.push(el);
	});
		
	//jQuery UI does the autocomplete
	$(".map-search-field").on("keypress", function() {

		var firstnameTags = firstnameUniques;
		$("#search-string_firstname").autocomplete({
			source : firstnameTags
		});
		var lastnameTags = lastnameUniques;
		$("#search-string_lastname").autocomplete({
			source : lastnameTags
		});
		var companyTags = companyUniques;
		$("#search-string_company").autocomplete({
			source : companyTags
		});
		var positionTags = positionUniques;
		$("#search-string_position").autocomplete({
			source : positionTags
		});
	});
}

//This sets the Google Maps in motion
google.maps.event.addDomListener(window, 'load', initialize);

//This loads the data from the Fusion Table for the search form autocomplete
$(document).ready(function() {
	$.getJSON('https://www.googleapis.com/fusiontables/v1/query?sql=SELECT+*+FROM+1gPl-G23UfCgZ9EwGZkSCHBO1qDcqtfz_Ovr4kD2Q&key=AIzaSyB-QJux9WIJmey5IJYzPImNzg-xP1gpvU8', complete);
});
