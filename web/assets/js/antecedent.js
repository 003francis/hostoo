/**
 * Created by ramseytiger on 7/31/17.
 */
$(function () {
  $('#antecedentform').submit(function (e) {
    e.preventDefault();
    var datas=$(this).serialize();
    $.ajax({
      type:'POST',
        data: datas,
      url: $(this).attr('action'),
      cache: false,
      timeout:3000,

      success:
        alert('Enregistrement effectué')

    });

      });

});