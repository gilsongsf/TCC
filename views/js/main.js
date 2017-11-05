/**
 * Passa o Id do Ambiente para o Modal, e atualiza o link para exclusão
 */
$('#modal-delete').on('show.bs.modal', function (event) {
  
  var button = $(event.relatedTarget);
  var id = button.data('id');
  
  var modal = $(this);
  modal.find('#confirm').attr('href', 'delete.php?id=' + id);
})

$('#modal-edit').on('show.bs.modal', function (event) {
				var button = $(event.relatedTarget) 
				var recipient = button.data('id') 
				var recipientdescricao = button.data('descricao')
				
				var modal = $(this)
				modal.find('#id').val(recipient)
				modal.find('#descricao').val(recipientdescricao)
})

