/**
 * Created by ramseytiger on 7/31/17.
 */
$(function () {
  $('#rdvmedform').submit(function (e) {
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
        $('#mesrdv').find('tr').remove();
      },
      success: function (data) {
        alert('Enregistrement effectué');
        //$('#messv').show().html('');
        $.each(data.items, function(index,value) {

          $('#mesrdv').prepend('<tr><td>'+value.id+'</td><td>'+value.daterdv+'</td><td></td><td></td></tr>');

        });
      }
    });

      });

});