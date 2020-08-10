$(document).ready(function(){
  // save comment to database
  $(document).on('click', '#submit_btn', function(){
    var quantity = $('#quantity').val();
    var prodid = $('#product_id').val();
    /*console.log(quantity);
    console.log(comment);*/
    $.ajax({
      url: 'serverfiles/server.php',
      type: 'POST',
      data: {
        'save': 1,
        'qty': quantity,
        'prodid': prodid,
      },
      success: function(response){
        $('#quantity').val('');
        $('#product_id').val('');
        $('#display_area').append(response);
        console.log(response);
      }
    });
  });
});

