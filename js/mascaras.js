	var options = {
      onKeyPress: function (cpf, ev, el, op) {
          var masks = ['000.000.000-000', '00.000.000/0000-00'],
             mask = (cpf.length > 14) ? masks[1] : masks[0];
         el.mask(mask, op);
      }
    }

      $('.cpfcnpj').mask('000.000.000-000', options);
  		$('.time').mask('00:00:00');
  		$('.date_time').mask('99/99/9999 00:00:00');
  		$('.cep').mask('99999-999');
  		$('.phone_with_ddd').mask('(99) 9999-99999');