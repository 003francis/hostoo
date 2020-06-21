/**
 * Created by ramseytiger on 7/31/17.
 */
$(function () {
  $('#exphysform').submit(function (e) {
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
        $('#mesexphys').find('tr').remove();
      },
      success: function (data) {
        alert('Enregistrement effectué');
        //$('#messv').show().html('');
        $.each(data.items, function(index,value) {

          $('#mesexphys').prepend('<tr><td>'+value.id+'</td><td>'+value.type+'</td><td>'+value.observation+'</td><td></td></tr>');

        });
      }
    });

      });

});