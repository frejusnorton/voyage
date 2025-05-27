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


        document.querySelectorAll('.open-edit-btn').forEach(button => {
            button.addEventListener('click', () => {
                const modal = document.getElementById('editTrajetModal');
             
                document.getElementById('edit_trajet_id').value = button.getAttribute('data-id');
                document.getElementById('edit_ville_depart').value = button.getAttribute('data-ville-depart');
                document.getElementById('edit_ville_arrive').value = button.getAttribute('data-ville-arrive');
                document.getElementById('edit_prix').value = button.getAttribute('data-prix');
                document.getElementById('edit_date_depart').value = button.getAttribute('data-date-depart');
                document.getElementById('edit_heure_depart').value = button.getAttribute('data-heure-depart');
                document.getElementById('edit_description').value = button.getAttribute('data-description');
    
                modal.classList.remove('hidden');
            });
        });
    
        function closeEditModal() {
            const modal = document.getElementById('editTrajetModal');
            modal.classList.add('hidden');
        }
    
        document.getElementById('editTrajetForm').addEventListener('submit', function (e) {
            e.preventDefault();
            const formData = new FormData(this);
            fetch(this.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    'Accept': 'application/json'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Le trajet a été modifié avec succès.');
                    window.location.reload();
                } else {
                    alert(data.message || 'Une erreur est survenue lors de la modification.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Une erreur est survenue lors de la modification.');
            });
        });
    
        document.getElementById('editTrajetModal').addEventListener('click', function (e) {
            if (e.target === this) {
                closeEditModal();
            }
        });
    </script>
    
</script>