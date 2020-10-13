$(function() {
$.getJSON('/js/pref_city.json', function(data) {
    for(var i=0; i<47; i++) {
    var code = i+1;
        code = ('00'+code).slice(-2);
        $('#select-pref').append('<option value="'+code+'">'+data[i][code].pref+'</option>');
    }
    });
});

$('#select-pref').on('change', function() {
    $('#select-city option:nth-child(n+2)').remove();
    var select_pref = ('00'+$('#select-pref option:selected').val()).slice(-2);
    var key = Number(select_pref)-1;
    $.getJSON('/js/pref_city.json', function(data) {
    for(var i=0; i<data[key][select_pref].city.length; i++){
        $('#select-city').append('<option value="'+data[key][select_pref].city[i].id+'">'+data[key][select_pref].city[i].name+'</option>');
    }
    });
});

