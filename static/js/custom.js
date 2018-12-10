$(document).ready(function(){
  $('#SearchEmployee').click(function(e){
    e.preventDefault();
    var id = $('#Employee_ID').val();
    $.ajax({
      type: 'POST',
      datatype: 'json',
      data: {id: id},
      url: site_url + '/view/',
      success: function(result){
        var employee = $.parseJSON(result)[0];
      }
    });
  });
});
