$(document).ready(function () {

    // KETUA
    $("#fak_ketua").change(function() {

        var loc = window.location.origin;
        var fak_id = $(this).val();
        //$("#debugger").html(fak_id);
        if (fak_id != '') {
            $.ajax
              ({
                type: "GET",
                url: loc+"/fakultas/"+fak_id,
                success: function(prodi)
                {
                    $("#prodi_ketua").html('<option value="" disabled selected>Choose your option</option>');
                    $.each( prodi, function( key, value ) {
                        $("#prodi_ketua").append(
                            $("<option></option>")
                            .attr("value", value.id_prodi)
                            .text(value.program_studi)
                            );
                    $("select").material_select();
                    });
                },
                error: function(prodi)
                {
                    console.log(loc+"/fakultas/"+fak_id);
                }
              });
        }
         else {
            $("#prodi_ketua").html('<option value="" disabled selected>Choose your option</option>');
         }
    });

    // ANGGOTA 1
    $("#fak_agg1").change(function() {

        var loc = window.location.origin;
        var fak_id = $(this).val();
        //$("#debugger").html(fak_id);
        if (fak_id != '') {
            $.ajax
              ({
                type: "GET",
                url: loc+"/fakultas/"+fak_id,
                success: function(prodi)
                {
                    $("#prodi_agg1").html('<option value="" disabled selected>Choose your option</option>');
                    $.each( prodi, function( key, value ) {
                        $("#prodi_agg1").append(
                            $("<option></option>")
                            .attr("value", value.id_prodi)
                            .text(value.program_studi)
                            );
                    $("select").material_select();
                    });
                },
                error: function(prodi)
                {
                    console.log(loc+"/fakultas/"+fak_id);
                }
              });
        }
         else {
            $("#prodi_agg1").html('<option value="" disabled selected>Choose your option</option>');
         }
    });

    // ANGGOTA 2
    $("#fak_agg2").change(function() {

        var loc = window.location.origin;
        var fak_id = $(this).val();
        //$("#debugger").html(fak_id);
        if (fak_id != '') {
            $.ajax
              ({
                type: "GET",
                url: loc+"/fakultas/"+fak_id,
                success: function(prodi)
                {
                    $("#prodi_agg2").html('<option value="" disabled selected>Choose your option</option>');
                    $.each( prodi, function( key, value ) {
                        $("#prodi_agg2").append(
                            $("<option></option>")
                            .attr("value", value.id_prodi)
                            .text(value.program_studi)
                            );
                    $("select").material_select();
                    });
                },
                error: function(prodi)
                {
                    console.log(loc+"/fakultas/"+fak_id);
                }
              });
        }
         else {
            $("#prodi_agg2").html('<option value="" disabled selected>Choose your option</option>');
         }
    });
});