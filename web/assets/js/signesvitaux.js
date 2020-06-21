/**
 * Created by ramseytiger on 7/31/17.
 */
$(function () {
  $('#svform').submit(function (e) {
    e.preventDefault();
    var datas=$(this).serialize();
    $.ajax({
      type:'POST',
        data: datas,
      dataType:'json',
      url: $(this).attr('action'),
      cache: false,
      timeout:3000,
      beforeSend: function () {
        $('#messv').find('tr').remove();
      },
      success: function (data) {
        //alert('Enregistrement effectué');
        //$('#messv').show().html('');
        $.each(data.items, function(index,value) {

          $('#messv').prepend('<tr><td>'+value.temperature+'</td><td>'+value.poids+'</td><td>'+value.taille+'</td><td>'+value.tension+'</td><td>'+value.frequencecardiaque+'</td><td>'+value.frequencerespiratoire+'</td><td>'+value.glycemiedextro+'</td><td>'+value.saturationoxygene+' %</td><td>'+value.imc+'</td><td>'+value.pc+'</td><td>'+value.pb+'</td><td>'+value.pa+'</td><td'+value.pp+'</td><td>'+value.wrh+'</td><td>'+value.date+'</td></tr>');

        });
      }
    });

      });

});