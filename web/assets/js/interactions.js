/**
 * Created by ramseytiger on 12/21/16.
 */
$(function () {
    $('input[name=montantrecu]').keyup(function () {
        //alert($('input[name=montantecu]').val());
        var montantrecu =0;
        var montanttotal=0;
        var differences=0;
        montantrecu=parseInt($(this).val());
        montanttotal=parseInt($('input[name=montantttc]').val());
        differences=parseInt(montantrecu-montanttotal);
        $('input[name=montantremis]').val(differences);
        $('#btn-completer').removeAttr('disabled');
    });

$( "#keyboard_toggle" ).click(function(e) {
    e.preventDefault();
    $( "#keyboardhelp" ).toggle();
});
$(".loading").hide();
var $inp=$("#motcle");
$inp.focus();
/*$inp.autocomplete({
    source: Routing.generate('ts_recherche'),
    minLength: 0,
    select: function(event,ui)
    {
        alert(ui.items.item.value);
        //$('#add_item_form').ajaxSubmit({target: "#register_container", beforeSubmit: salesBeforeSubmit, success: itemScannedSuccess});

    }
}).data("ui-autocomplete")._renderItem = function (ul, item) {
    return $("<li class='item-suggestions'></li>")
        .data("item.autocomplete", item)
        .append('<a class="suggest-item"><div class="item-image">' +
            '<img src="' + item.image + '" alt="">' +
            '</div>' +
            '<div class="details">' +
            '<div class="name">' +
            item.libelle +
            '</div>' +
            '<span class="attributes">' +
            'Catégorie' + ' : <span class="value">' + item.Prix+ '</span>' +
            '</span>' +
            '</div>')
        .appendTo(ul);
};*/

$inp.keyup(function(event){
    $('#mesitems').show().html('');
    //$(".loading").show();
    var motcle = $(this).val();
    var DONNEE = 'motcle=' + motcle;
    $.ajax({
        type: "POST",
        dataType:'json',
        url: Routing.generate('recherche_patient'),
        data: DONNEE,
        cache: false,
        minLength: 2,
        beforeSend: function () {
            $('#mesitems').find('li').remove();
        },
        success: function(data) {


            $.each(data.items, function(index,value) {
                //$("#ott").text(value.libelle+'<br/>'+value.Prix);
                var nophoto="../../jquery-ui/images/no_image.jpg";
                var lien='#';
                $('#mesitems').prepend('<li class="list-group-item"><img src='+nophoto+' class="box-carre" /> <a href='+lien+'>'+value.nom+'  Prix :'+value.postnom+'</a></li>');
                //$('#resultats').html('<div>'+value.libelle+'</div>');
                //alert(value.libelle);
            });

           // $(".loading").hide();
        }
    });
    return false;
});

var popform=$('.popover');
var xedit=$('.xeditable');
popform.hide();
xedit.click(function () {
    var num=$(this).attr('valeur');
    var box=$('#'+num);
    box.show();
    box.children('input').val($(this).text());
    box.children('input').focus();
});
/* gestion des rabais */
    xedit.click(function () {
        var num=$(this).attr('valeur');
        var box=$('#'+num);
        box.show();
        box.children('input').val($(this).text());
        box.children('input').focus();
    });

$('.editable-cancel').click(function () {
    popform.hide();
});
$('.editable-submit').click(function () {
    $(this).parent('<form>').submit();
});

});