function buka(nama) {
    $("#konten").html('<div class="panel-heading"><span class="panel-title">Loading Konten...</span></div><div class="panel-body"><div class="progress progress-striped active"><div class="progress-bar progress-bar-info" style="width: 100%"></div></div></div>');
    $.ajax({
        url: nama + '.php',
        type: 'GET',
        dataType: 'html',
        success: function (isi) {
            $("#konten").html(isi);
        },
    });
}

function post() {
    $('#result').html('<div class="progress progress-striped active"><div class="progress-bar progress-bar-inverse" style="width: 100%"></div></div>');
    $("input").attr("disabled", "disabled");
    $("select").attr("disabled", "disabled");
    $("button").attr("disabled", "disabled");
    $("textarea").attr("disabled", "disabled");
}