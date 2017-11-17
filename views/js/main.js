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

$('#modal-edit-usuario').on('show.bs.modal', function (event) {
				var button = $(event.relatedTarget) 
				var recipient = button.data('id') 
				var recipienteditnome = button.data('editnome')
				var recipientemail = button.data('editemail')
				var recipientperfil = button.data('editperfil')
				
				var modal = $(this)
				modal.find('#id').val(recipient)
				modal.find('#editnome').val(recipienteditnome)
				modal.find('#editemail').val(recipientemail)
				modal.find('#editperfil').val(recipientperfil)
})

$('#modal-edit-locador').on('show.bs.modal', function (event) {
				var button = $(event.relatedTarget) 
				var recipient = button.data('id') 
				var recipientlocadornome = button.data('locadornome')
				var recipientlocadoremail = button.data('locadoremail')
				var recipientlocadortelefone = button.data('locadortelefone')
				var recipientlocadorcpfcnpj = button.data('locadorcpfcnpj')
				
				var modal = $(this)
				modal.find('#id').val(recipient)
				modal.find('#locadornome').val(recipientlocadornome)
				modal.find('#locadoremail').val(recipientlocadoremail)
				modal.find('#locadortelefone').val(recipientlocadortelefone)
				modal.find('#locadorcpfcnpj').val(recipientlocadorcpfcnpj)

})

$('#modal-edit-perfil').on('show.bs.modal', function (event) {
				var button = $(event.relatedTarget) 
				var recipient = button.data('id') 
				var recipienteditperfil = button.data('editperfil')
				var recipienteditpermissoes = button.data('editpermissoes')

				var modal = $(this)
				modal.find('#id').val(recipient)
				modal.find('#editperfil').val(recipienteditperfil)
				
   				//document.getElementById("vistoria_visualizar").checked = true;
})

