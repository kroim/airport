
function checkAircraft(id) {
    console.log('#req-aircraft'+id);
    $("#req-aircraft"+id).click();
}
function edit_aircraft_line(data1, data2) {
    var id = data1['aircraft_id'];
    var name = data1['aircraft_name'];
    var model = data1['aircraft_model'];
    for (var index = 0; index < data2.length; index++){
        if(data2[index]['aircraft_id'] == id){
            $("#aircraft-line"+id).css('background-color', 'lightblue');
            $("#edit-aircraft-modal").prop('disabled', false);
            $("#delete-aircraft-modal").prop('disabled', false);
            $("#edit-aircraft-id").val(id);
            $("#edit-aircraft-name").val(name);
            $("#edit-aircraft-model").val(model);
            $("#delete-aircraft-id").val(id);
            $("#aircraft-name-text").html("Aircraft Name: " + name);
            $("#aircraft-model-text").html("Aircraft Model: " + model);
        }else{
            $("#aircraft-line"+data2[index]['aircraft_id']).css('background-color', 'white');
        }
    }
}
function edit_airport_line(data1, data2) {
    var id = data1['airport_id'];
    var icao = data1['airport_icao'];
    var arabic = data1['airport_arabic'];
    var city = data1['airport_city'];
    console.log(icao);
    for (var index = 0; index < data2.length; index++){
        if(data2[index]['airport_id'] == id){
            $("#airport-line"+id).css('background-color', 'lightblue');
            $("#edit-airport-modal").prop('disabled', false);
            $("#delete-airport-modal").prop('disabled', false);
            $("#airport-id").val(id);
            $("#edit-airport-icao").val(icao);
            $("#edit-airport-arabic").val(arabic);
            $("#edit-airport-city").val(city);
            $("#delete-airport-id").val(id);
            $("#airport-icao-text").html("Airport ICAO: " + icao);
            $("#airport-arabic-text").html("Airport Arabic: " + arabic);
            $("#airport-city-text").html("Airport City: " + city);
        }else{
            $("#airport-line"+data2[index]['airport_id']).css('background-color', 'white');
        }
    }
}
function edit_request_line(data1, data2, data3, data4) {
    var id = data1['request_id'];
    var aircraft = data1['aircraft'];
    var aircraft_index = 0;
    for(index1 = 0; index1 < data3.length; index1++){
        if(data3[index1]['aircraft_name'] == aircraft){
            aircraft_index = index1 + 1;
        }
    }
    var from = data1['from'];
    var to = data1['to'];
    var airport_en = data1['airport'];
    var airport_ar = data1['airport_ar'];
    var airport_en_num = 0;
    var airport_ar_num = 0;
    for(index2 = 0; index2 < data4.length; index2++){
        if(data4[index2]['airport_icao'] == airport_en){
            airport_en_num = index2 + 1;
            airport_ar_num = index2 + 1;
        }
    }
    var purpose = data1['purpose'];
    var purpose_ar = data1['purpose_ar'];
    var image = data1['image'];
    for(var index = 0; index < data2.length; index++){
        if(data2[index]['request_id'] == id){
            $("#request-line"+id).css('background-color', 'lightblue');
            $("#edit-request-modal").prop('disabled', false);
            $("#delete-request-modal").prop('disabled', false);
            $("#edit-request-id-m").val(id);
            $("#edit-request-aircraft-m-line").val(aircraft_index);
            $("#edit-request-image-prev").attr('src', image);
            $("#edit-request-airport-m-line-en").val(airport_en_num);
            $("#edit-request-airport-m-line-ar").val(airport_ar_num);
            $("#edit-request-from-m").val(from);
            $("#edit-request-to-m").val(to);
            $("#edit-request-purpose-m-en").val(purpose);
            $("#edit-request-purpose-m-ar").val(purpose_ar);
        }else {
            $("#request-line"+data2[index]['request_id']).css('background-color', 'white');
        }
    }
}
$("#add-request-image").change(function () {
    if (this.files && this.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            console.log(e.target.result);
            $('#add-request-image-prev').attr('src', e.target.result);
        };
        reader.readAsDataURL(this.files[0]);
    }
});
$("#edit-request-image").change(function () {
    if (this.files && this.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#edit-request-image-prev').attr('src', e.target.result);
        };
        reader.readAsDataURL(this.files[0]);
    }
});