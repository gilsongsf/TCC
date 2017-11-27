$('#modal-delete').on('show.bs.modal', function (event) {
  
  var button = $(event.relatedTarget);
  var id = button.data('deleteid');
  
  var modal = $(this);
  modal.find('#deleteid').val(id);
})

$('#modal-delete-ambiente').on('show.bs.modal', function (event) {
  
  var button = $(event.relatedTarget);
  var id = button.data('deleteambiente');
  var idvistoria = button.data('idvistoria');
  
  var modal = $(this);
  modal.find('#deleteambiente').val(id);
  modal.find('#idvistoria').val(idvistoria);
})

$('#modal-delete-item').on('show.bs.modal', function (event) {
  
  var button = $(event.relatedTarget);
  var id = button.data('deleteitem');
  var idvistoria = button.data('idvistoria');
  var idambiente = button.data('idambiente');
  
  var modal = $(this);
  modal.find('#deleteitem').val(id);
  modal.find('#idvistoria').val(idvistoria);
  modal.find('#idambiente').val(idambiente);
})


$('#modal-delete-foto').on('show.bs.modal', function (event) {
  
  var button = $(event.relatedTarget);
  var id = button.data('deletefoto');
  var foto = button.data('foto');
  var idvistoria = button.data('idvistoria');
  var idambiente = button.data('idambiente');
  
  var modal = $(this);
  modal.find('#deletefoto').val(id);
  modal.find('#foto').val(foto);
  modal.find('#idvistoria').val(idvistoria);
  modal.find('#idambiente').val(idambiente);
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

$('#modal-edit-imovel').on('show.bs.modal', function (event) {
				var button = $(event.relatedTarget) 
				var recipient = button.data('id') 
				var recipientendereco = button.data('endereco')
				var recipientnumero = button.data('numero')
				var recipientcomplemento = button.data('complemento')
				var recipientbairro = button.data('bairro')
				var recipientcidade = button.data('cidade')
				var recipientuf = button.data('uf')
				var recipienttipoimovel = button.data('tipoimovel')
				var recipientcep = button.data('cep')
				
				var modal = $(this)
				modal.find('#id').val(recipient)
				modal.find('#endereco').val(recipientendereco)
				modal.find('#numero').val(recipientnumero)
				modal.find('#complemento').val(recipientcomplemento)
				modal.find('#bairro').val(recipientbairro)
				modal.find('#cidade').val(recipientcidade)
				modal.find('#uf').val(recipientuf)
				modal.find('#tipoimovel').val(recipienttipoimovel)
				modal.find('#cep').val(recipientcep)

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

$('#modal-edit-inquilino').on('show.bs.modal', function (event) {
				var button = $(event.relatedTarget) 
				var recipient = button.data('id') 
				var recipientinquilinonome = button.data('inquilinonome')
				var recipientinquilinoemail = button.data('inquilinoemail')
				var recipientinquilinotelefone = button.data('inquilinotelefone')
				var recipientinquilinocpfcnpj = button.data('inquilinocpfcnpj')
				
				var modal = $(this)
				modal.find('#id').val(recipient)
				modal.find('#inquilinonome').val(recipientinquilinonome)
				modal.find('#inquilinoemail').val(recipientinquilinoemail)
				modal.find('#inquilinotelefone').val(recipientinquilinotelefone)
				modal.find('#inquilinocpfcnpj').val(recipientinquilinocpfcnpj)

})


$('#modal-edit-perfil').on('show.bs.modal', function (event) {
				var button = $(event.relatedTarget) 
				var recipient = button.data('id') 
				var recipienteditperfil = button.data('editperfil')
				var recipienteditpermissoes = button.data('editpermissoes')

				var modal = $(this)
				modal.find('#id').val(recipient)
				modal.find('#editperfil').val(recipienteditperfil)
				
    			/*if(recipienteditpermissoes.indexOf("vistoria_inserir") >= 0){
    				document.getElementById("vistoria_inserir").checked = true;
    			}
    			else{
    				document.getElementById("vistoria_inserir").checked = false;
    			}*/

    			
   				
})