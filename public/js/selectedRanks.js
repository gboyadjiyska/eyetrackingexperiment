



$(document).ready(function () {

  var $selects = $('select');
  $selects.on('change', function() {
  $("option", $selects).prop("disabled", false);
  $selects.each(function() {
  var $select = $(this),
    $options = $selects.not($select).find('option'),
    selectedText = $select.children('option:selected').text();
  $options.each(function() {
    if ($(this).text() == selectedText) $(this).prop("disabled",
      true);
  });
  });
  });
  $selects.eq(0).trigger('change');



$("#reset").on("click", function(){
    $('#select1 option').prop('selected', function(){
      return this.defaultSelected;
    }).prop('disabled', false);
     $('#select2 option').prop('selected', function(){
      return this.defaultSelected;
    }).prop('disabled', false);
     $('#select3 option').prop('selected', function(){
      return this.defaultSelected;
    }).prop('disabled', false);
    $('#select4 option').prop('selected', function(){
      return this.defaultSelected;
    }).prop('disabled', false);
     $('#select5 option').prop('selected', function(){
      return this.defaultSelected;
    }).prop('disabled', false);
     $('#select6 option').prop('selected', function(){
      return this.defaultSelected;
    }).prop('disabled', false);
});

 });
