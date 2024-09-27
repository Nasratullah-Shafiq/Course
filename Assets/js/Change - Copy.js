  $(function(){
  //For user Registration (sign up);


  $("#btn_signup").click(function(){
    var Full_Name = $("#Full_Name").val();
    var Username = $("#Username").val();
    var Password = $("#Password").val();
    var Email = $("#Email").val();
    var Gender = $("#Gender").val();
    var Phone_No = $("#Phone_No").val();
    var image = $("#image").val();
    var dataString = 'Full_Name='+Full_Name+'&Username='+Username+'&Password='+Password+'&Email='+Email+'&Gender='+Gender+'&Phone_No='+Phone_No+'&image='+image;
    $.ajax({
      type: "POST",
      url: "Assets/Ajax Search/GetSignup.php",
      data: dataString,
      success: function(data){
        $("#span-valid").html(data);
      }
    });
    return false;
  });
  
//For Adding Comment to the specific post of newsportal system

  $("#btnAddLike").click(function(){
    var News_ID = $("#News_ID").val();
    var User_ID = $("#User_ID").val();
    
    var dataString = 'News_ID='+News_ID+'&User_ID='+User_ID;
    $.ajax({
      type: "POST",
      url: "Assets/Ajax Search/addLike.php",
      data: dataString,
      success: function(data){
        $("#span-valid").html(data);
      }
    });
    return false;
  });

  $("#btndislike").click(function(){
    var Like_ID = $("#Like_ID").val();
    
    var dataString = 'Like_ID='+Like_ID;
    $.ajax({
      type: "POST",
      url: "Assets/Ajax Search/disLike.php",
      data: dataString,
      success: function(data){
        $("#span-valid").html(data);
      }
    });
    return false;
  });

  $("#btnAddComment").click(function(){
    var News_ID = $("#News_ID").val();
    var User_ID = $("#User_ID").val();
    var Comment = $("#Comment").val();
    
    var dataString = 'News_ID='+News_ID+'&User_ID='+User_ID+'&Comment='+Comment;
    $.ajax({
      type: "POST",
      url: "Assets/Ajax Search/addComment.php",
      data: dataString,
      success: function(data){
        $("#span-valid").html(data);
      }
    });
    return false;
  });
  

// $("#btn-send-messge").click(function(){
    
//     alert("This is working");
//     var Full_Name = $("#Full_Name").val();
//     var Email = $("#Email").val();
//     var Phone_No = $("#Phone_No").val();
//     var Message = $("#Message").val();
//     var dataString = 'Full_Name='+Full_Name+'&Email='+Email+'&Phone_No='+Phone_No+'&Message='+Message;
//     $.ajax({
//       type: "POST",
//       url: "Assets/Ajax Search/Add_Contact.php",
//       data: dataString,
//       success: function(data){
//         $("#span-valid").html(data);    
//       }
    
//     });

//     return false;
//   });
  $("#btn-update-profile").click(function(){
    var FullName = $("#FullName").val();
    var Username = $("#Username").val();
    var Email = $("#Email").val();
    var Gender = $("#Gender").val();
    var Phone_No = $("#Phone_No").val();
    var Image = $("#Image").val();
    var dataString = 'FullName='+FullName+'&Username='+Username+'&Gender='+Gender+'&Phone_No='+Phone_No+'&Image='+Image;
    $.ajax({
      type: "POST",
      url: "updateProfile.php",
      data: dataString,
      success: function(data){
        $("#span-valid").html(data);
      }

    });
    return false;
  });

 $("#Unit").click(function(){
    $('#Reading-Audio-Data-Modal').modal('hide');
    alert("kjfkhgjkhgjhgjh");
  });


  $("#btn-update-password").click(function(){
    
    var Password = $("#Password").val();
    var User_ID = $("#User_ID").val();
           
    var dataString = 'Password='+Password+'&User_ID='+User_ID;
    $.ajax({
      type: "POST",
      url: "updatePass.php",
      data: dataString,
      success: function(data){
        $("#span-valid").html(data);
        setTimeout(function(){
            $("#span-valid").fadeOut();
          },5000);
        // window.location = "index.php";
      }

    });
    // }
    return false;
  });
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
