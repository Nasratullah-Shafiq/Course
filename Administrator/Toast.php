<?php 

include('./Assets/_Partial Components/Header.php');

?>

<div class="row" id="row">
<!-- BEGIN LEFT SIDE BAR -->
    <div class="left-side-bar">
        <?php include('./Assets/_Partial Components/Navigation.php');?>
    </div>
    <!-- END OF LEFT SIDE BAR DIV-->
    <!-- BEGIN RIGHT SIDE BAR DIV-->
    <div class="right-side-bar">
        <div class="row" style="margin-top: 0px; padding-top: 0px;">
            <div class = "col-md-12" style="padding-left: 0px;">
                <div class="col-md-5">
                    <h3 style="color: rgb(71,144,153); padding-top: 0px; margin-top: 0px;"> News </h3>
                </div>
                <div class="col-md-7" style="margin-bottom: 0px; padding-bottom: 0px;">
                    <form class=" "  method="POST">
                        <div class="form-group">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" name ="searchNews" id ="searchNews" placeholder="Search for...">
                                <span class="input-group-btn">
                                    <button class="btn btn-green" type="button">Go!</button>
                                </span>
                            </div>
                        </div>
                    </form>  
                </div>
                <!-- end of col-md-8 -->
            </div>
            <!-- end of col-md-12 -->  

            <div class="col-sm-12" style="padding: 0px; margin: 0px;">
                <div class="col-md-1">
                    <button class="btn btn-secondary btn-sm" style="color: white; background-color: rgb(71,144,153);" type="button" data-toggle="modal" data-target="#News_Data_Modal"> New </button>
                </div>
            
                <div class = "col-sm-8" style="float:right">
                    <div class="col-md-2">
                        <div class="dropdown">
                            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                              <span> <i class="fa fa-cog"></i> </span> Action 
                            </button> 
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#"> Archive </a></li>
                                <li><a class="dropdown-item" href="#"> Delete </a></li>
                            </ul>
                        </div>
                    </div> 
                    <div class="col-md-2" style="margin-left: 0px; padding-left: 0px;">
                        <button class="btn btn-secondary btn-sm" type="button" data-toggle="modal" data-target="#News_Data_Modal">
                        <span> <i class="fa fa-cog"></i> </span> Filter </button> 
                    </div>
                    <div class="col-md-2" style="margin-left: 0px; padding-left: 0px;">
                        <button class="btn btn-secondary btn-sm" type="button" data-toggle="modal" data-target="#News_Data_Modal">
                        <span> <i class="fa fa-cog"></i> </span> Group by </button> 
                    </div>
                    <div class="col-md-2" style="margin-left: 0px; padding-left: 0px;">
                        <button class="btn btn-secondary btn-sm" type="button" data-toggle="modal" data-target="#News_Data_Modal">
                        <span> <i class="fa fa-cog"></i> </span> Favorite </button> 
                    </div>
                </div>
            </div>
        </div>  
        <!-- End of div class row -->
            
<!--=====================================================================================================================
    START OF MODAL DIV WE CAN CREATE NEWS AND SUBMIT IT TO THE DATABASE
======================================================================================================================-->
<div class="row">
<div id="News_Data_Modal" class="modal Myfade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel"> You can add news here </h4>
        </div>

        <div class="modal-body">
            <form class="form-horizontal" method="POST" id = "News_Form">
                      
                      <div class="form-group">
                        <label style="text-align: left;" class="col-sm-2 control-label"> Heading </label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name = "Heading" id="Heading" placeholder="Heading">
                        </div>
                      </div>
                      <div class="form-group">
                        <label style="text-align: left;" class="col-sm-2 control-label"> Body </label>
                        <div class="col-sm-10">
                          <textarea id="Body" col="40" rows="7" class="form-control" name="Body" ></textarea>
                        </div>
                      </div>
                        <div class="form-group">
                        <label style="text-align: left;" class="col-sm-2 control-label"> Source </label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name = "Source" id="Source" placeholder="Sourse">
                        </div>
                      </div> 
                        <div class="form-group">
                            <label style="text-align: left;" class="col-sm-2 control-label"> File </label>
                            <div class="col-sm-10">
                                <input type = "file" name = "News_Image" id = "News_Image"/>
                                
                            </div>
                        </div>  
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                        <input type = "hidden" name = "action" id = "action"/>
                        <input type = "submit" name = "button_action" class = "button-start-the-quiz" id = "button_action" value = "Add News" />
                          <span id="span-val" class="span-validation"></span> 
                        </div>

                    </div>
                
                </form>
            </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    
        </div>
    </div>    
</div>
<!--====================================================================================================================
    END OF MODAL DIV
======================================================================================================================-->

 
            <div class="col-md-12" id = "New_Table">
                 <!-- id = "resultNews" -->

            </div>  
            

            <div class="col-md-12">
                <div class="buttons">
                    <button onclick = "showToast(successMsg)"> Success </button >
                    <button onclick = "showToast(errorMsg)"> Error </button>
                    <button onclick = "showToast(invalidMsg)"> Invalid </button>
                </div>               
                 
            </div>
            <div id="toastBox">
                    
            </div>
<script type="text/javascript">
    let toastBox = document.getElementById('toastBox');

    let successMsg = '<i class="fa fa-check"></i> Successfully Submitted';
    let errorMsg = '<i class="fab fa-facebook-square"></i> Please fix the error!';
    let invalidMsg = '<i class="fa fa-exclamation"></i> Invalid input! Check again';

    function showToast(msg){
        let toast = document.createElement('div');
        toast.classList.add('toast');
        toast.innerHTML = msg;
        toastBox.appendChild(toast);

        if(msg.includes('error')){
            toast.classList.add('error');
        }
        if(msg.includes('Invalid')){
            toast.classList.add('invalid');
        }
        setTimeout(()=>{
            toast.remove();
        },10000);

    }
</script>
    <!-- </div> -->
<script type="text/javascript">
    // Your jQuery code goes here
    var inputs = document.querySelectorAll('#javascript'),
    allSelect = document.querySelector('#allselect'),
    quantity = document.querySelector('.quantity'),
    skills = document.querySelector('.skills'),
    quantityText = "<span>  </span>",
    skillText = "<span> Name of Skills: </span>"
console.log(inputs);

var allCheckboxes = document.querySelectorAll('#javascript');
var totalCheckboxCount = allCheckboxes.length;

console.log("Total number of checkboxes:", totalCheckboxCount);


    console.log(allSelect);
    console.log(inputs);
let listArray = [];

inputs.forEach(input => {

    allSelect.addEventListener('click', ()=>{
        if(allSelect.checked){
            input.checked = true;
            input.classList.add("checked");

            quantity.innerHTML = quantityText + "All Selected";
        }

        else{
            input.checked = false;
            input.classList.remove("checked");
            quantity.innerHTML = quantityText + "";
        }

        var checked = document.querySelectorAll('.checked');
        // quantity.innerHTML = quantityText + checked.length;

        if(input.checked){
        listArray.push(input.value)
    }
    else{
        listArray = listArray.filter(val => val !== input.value)
    }

    let newUniqueArr = [...new Set(listArray)]//
    skills.innerHTML = skillText + listArray.join(', ')

    })


    input.addEventListener('click', () => {
        input.classList.toggle("checked");
        var checked = document.querySelectorAll('.checked');
        quantity.innerHTML = quantityText + checked.length + " Selected";

        //if input is checked it searches through all check boxes weather all check boxes are checked or not after that if all the check boxes
        //were selected it select all #allselect check box
        if(input.checked){
        listArray.push(input.value)
        if(totalCheckboxCount == checked.length){
           allSelect.checked = true 
           quantity.innerHTML = quantityText + "All Selected";
        }
       
    }
    else{
        listArray = listArray.filter(val => val !== input.value)
        allSelect.checked = false
    }

    let newUniqueArr = [...new Set(listArray)]
    skills.innerHTML = skillText + listArray.join(', ')
    
    });
});


</script>
<!--=============================================================================================================================
    END OF DIV SHOWING NEWS RESULT TABLE
===============================================================================================================================-->
</div>
<!-- Start of Div show Edit News -->

<div id = "Edit-News-Modal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"> Edit News Here...</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" id = "News_For">
                      <div class="form-group" style="">
                        <label style="text-align: left;" class="col-sm-2 control-label"> ID </label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name = "News-News-ID" id="News-News_ID" placeholder="News ID">
                        </div>
                        </div>
                      <div class="form-group">
                        <label style="text-align: left;" class="col-sm-2 control-label"> Heading </label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name = "News-Heading" id="News-Heading" placeholder="Heading">
                        </div>
                      </div>
                      <div class="form-group">
                        <label style="text-align: left;" class="col-sm-2 control-label"> Body </label>
                        <div class="col-sm-10">
                          <textarea id="News-Body" col="30" rows="10" class="form-control" name="Body" ></textarea>
                        </div>
                      </div>
                        <div class="form-group">
                        <label style="text-align: left;" class="col-sm-2 control-label"> Source </label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name = "Source" id="News-Source" placeholder="Sourse">
                        </div>
                      </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="button-start-the-quiz" name="btn-edit-news" id = "btn-edit-news" > Update News </button>
                        <span id="span-valid" class="span-validation"></span>
                        </div>

                    </div>
                    
                </form>
          
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div> 

<!-- End of Div show Edit News -->

	</div>
<!-- END OF RIGHT SIDE BAR DIV -->
</div>
<!-- END OF ROW DIV -->
<script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
<?php 
include('./Assets/_Partial Components/Footer.php');
?>