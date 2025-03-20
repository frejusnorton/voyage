<script>
     //MODIDIER TRAJET 
     $(document).on('click', '#trajet_edit', function () {
        var ville_depart = $(this).data('ville_depart');
        var ville_arrive = $(this).data('ville_arrive');
        var description = $(this).data('description');
        var prix = $(this).data('prix');
        var date_depart = $(this).data('date-depart');
        var heure_depart = $(this).data('heure-depart');
        var statut = $(this).data('statut');


        $("input[name='ville_depart']").val(ville_depart);
        $("input[name='ville_arrive']").val(ville_arrive);
        $("#trajet_description").val(description);
        $("#date_depart").val(date_depart);
        $("input[name='prix']").val(prix);
        $("input[name='heure_depart']").val(heure_depart);
        $("select[name='statut']").val(statut).trigger("change");

    });
</script>