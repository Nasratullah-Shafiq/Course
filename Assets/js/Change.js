  $(function(){
  
  ////////   For User Login   //////////////////////////////////////////////////////////////////

  $("#btn-signin").click(function(event) {
    // Prevent default form submission
    event.preventDefault();
  
    var Username = $("#Username").val();
    var Password = $("#Password").val();
    var dataString = 'Username=' + Username + '&Password=' + Password;
  
    alert("Server Response: ");
    $.ajax({
      type: "POST",
      url: "Assets/Ajax Search/getLogin.php",
      data: dataString,
      success: function(data) {
        
           }
      
    });
  
    return false; // prevent form submission
  });
});
