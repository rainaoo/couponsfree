/*$(document).ready(function(){
//confirm delete of weetAleart
$(document).on("click",".confirmDelete",function(){
  var record=$(this).attr("record");
  var recordid=$(this).attr("recordid");
  Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.value) {
       window.location.href="/"+record+"-delete/"+recordid;
      
      }
    });
}); 
}); */

$(document).ready(function(){

  $(document).on("click",".show-code",function(){
    var couponId = $(this).data('id');
    $(".modal-body #m-id").val( couponId );

    var couponTitle = $(this).data('title');
    $(".modal-body #m-title").val( couponTitle );
    // As pointed out in comments, 
    // it is unnecessary to have to manually call the modal.
    // $('#addBookDialog').modal('show');
  });
  
//update sections status
  //$(".updateCategoryStatus").click(function(){
      $(document).on("click",".updateCategoryStatus",function(){
      var status=$(this).children("i").attr("status");
      var category_id=$(this).attr("category_id");
     //  alert(status);
      //alert(section_id);
     $.ajax({
         type:'post',
         url:'update-category-status',
         data:{status:status,category_id:category_id},
         success:function(resp){
          // alert (resp['status']);
          // alert (resp['section_id']);
           if(resp['status']==0){
               $("#category-"+category_id).html("<i class='fa fa-toggle-off' aria-hidden='true' status='Inactive'></i>");
           }else if(resp['status']==1){
              $("#category-"+category_id).html("<i class='fa fa-toggle-on' aria-hidden='true' status='Active'></i>");
           }
         },error:function(){
             alert("error");
         }
     });
  });

   //update brands  status
  // $(".updateBrandStatus").click(function(){
  $(document).on("click",".updateStoreStatus",function(){
      var status=$(this).children("i").attr("status");
      var store_id=$(this).attr("store_id");
     // alert(status);
  //alert(section_id);
     $.ajax({
         type:'post',
         url:'update-store-status',
         data:{status:status,store_id:store_id},
         success:function(resp){
          // alert (resp['status']);
          // alert (resp['section_id']);
           if(resp['status']==0){
               $("#store-"+store_id).html("<i class='fa fa-toggle-off' aria-hidden='true' status='Inactive'></i>");
           }else if(resp['status']==1){
              $("#store-"+store_id).html("<i class='fa fa-toggle-on' aria-hidden='true' status='Active'></i>");
           }
         },error:function(){
             alert("error");
         }
     });
  });

  //update banner  status
  // $(".updateBannerStatus").click(function(){
      $(document).on("click",".updateBannerStatus",function(){
          var status=$(this).children("i").attr("status");
          var banner_id=$(this).attr("banner_id");
        // alert(status);
      //alert(section_id);
         $.ajax({
             type:'post',
             url:'update-banner-status',
             data:{status:status,banner_id:banner_id},
             success:function(resp){
              // alert (resp['status']);
              // alert (resp['section_id']);
               if(resp['status']==0){
                   $("#banner-"+banner_id).html("<i class='fa fa-toggle-off' aria-hidden='true' status='Inactive'></i>");
               }else if(resp['status']==1){
                  $("#banner-"+banner_id).html("<i class='fa fa-toggle-on' aria-hidden='true' status='Active'></i>");
               }
             },error:function(){
                 alert("error");
             }
         });
      });
  


  //update categories status
 



   //update blog status
   //$(".updateProductStatus").click(function(){
   $(document).on("click",".updateCouponStatus",function(){
      var status=$(this).children("i").attr("status");
      var coupon_id=$(this).attr("coupon_id");
    //  alert(status);
  //alert(section_id);
     $.ajax({
         type:'post',
         url:'update-coupon-status',
         data:{status:status,coupon_id:coupon_id},
         success:function(resp){
          // alert (resp['status']);
          // alert (resp['section_id']);
           if(resp['status']==0){
               $("#coupon-"+coupon_id).html("<i class='fa fa-toggle-off' aria-hidden='true' status='Inactive'></i>");
           }else if(resp['status']==1){
              $("#coupon-"+coupon_id).html("<i class='fa fa-toggle-on' aria-hidden='true' status='Active'></i>");
           }
         },error:function(){
             alert("error");
         }
     });
  });

  //update blog status
   //$(".updateProductStatus").click(function(){
    $(document).on("click",".updateDealStatus",function(){
      var status=$(this).children("i").attr("status");
      var deal_id=$(this).attr("deal_id");
    //  alert(status);
  //alert(section_id);
     $.ajax({
         type:'post',
         url:'update-deal-status',
         data:{status:status,deal_id:deal_id},
         success:function(resp){
          // alert (resp['status']);
          // alert (resp['section_id']);
           if(resp['status']==0){
               $("#deal-"+deal_id).html("<i class='fa fa-toggle-off' aria-hidden='true' status='Inactive'></i>");
           }else if(resp['status']==1){
              $("#deal-"+deal_id).html("<i class='fa fa-toggle-on' aria-hidden='true' status='Active'></i>");
           }
         },error:function(){
             alert("error");
         }
     });
  });


   //update blog status
   //$(".updateProductStatus").click(function(){
    $(document).on("click",".updateBlogStatus",function(){
      var status=$(this).children("i").attr("status");
      var blog_id=$(this).attr("blog_id");
    // alert(status);
  //alert(section_id);
     $.ajax({
         type:'post',
         url:'update-blog-status',
         data:{status:status,blog_id:blog_id},
         success:function(resp){
          // alert (resp['status']);
          // alert (resp['section_id']);
           if(resp['status']==0){
               $("#blog-"+blog_id).html("<i class='fa fa-toggle-off' aria-hidden='true' status='Inactive'></i>");
           }else if(resp['status']==1){
              $("#blog-"+blog_id).html("<i class='fa fa-toggle-on' aria-hidden='true' status='Active'></i>");
           }
         },error:function(){
             alert("error");
         }
     });
  });

  //append categories level
  /*$('#section_id').change(function(){
      var section_id=$(this).val();
      //alert(section_id);
      $.ajax({
          type:'post',
          url:'/admin/append-categories-level',
          data:{section_id:section_id},
          success:function(resp){
           $("#appendCategoriesLevel").html(resp);
          },error:function(){
              alert("Error");
          }
      });
  });*/

  //confirm delete of record
 /*  $(".confirmDelete").click(function(){
      var name=$(this).attr("name");
      if(confirm("Are you sure to delet this "+name+"?")){
          return true;
      }
      return false;
  }); */

  //confirm delete of sweetAleart
   $(document).on("click",".confirmDelete",function(){
      var record=$(this).attr("record");
      var recordid=$(this).attr("recordid");
      Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.value) {
           window.location.href="delete-"+record+"/"+recordid;
          
          }
        });
  }); 

//blog Atribute
var maxField = 10; //Input fields increment limitation
var addButton = $('.add_button'); //Add button selector
var wrapper = $('.field_wrapper'); //Input field wrapper
var fieldHTML = '<div style="margin-top:10px"><input type="text" name="size[]" value="" placeholder="size"/><a href="javascript:void(0);" class="remove_button"></a>&nbsp;<input type="text" name="sku[]" value="" placeholder="sku"/><a href="javascript:void(0);" class="remove_button"></a>&nbsp;<input type="text" name="price[]" value="" placeholder="price"/><a href="javascript:void(0);" class="remove_button"></a>&nbsp;<input type="text" name="stock[]" value=""  placeholder="stock"/><a href="javascript:void(0);" class="remove_button">Delete</a></div>'; //New input field html 
var x = 1; //Initial field counter is 1

//Once add button is clicked
$(addButton).click(function(){
  //Check maximum number of input fields
  if(x < maxField){ 
      x++; //Increment field counter
      $(wrapper).append(fieldHTML); //Add field html
  }
});

//Once remove button is clicked
$(wrapper).on('click', '.remove_button', function(e){
  e.preventDefault();
  $(this).parent('div').remove(); //Remove field html
  x--; //Decrement field counter
});

//update blog attribute status
//$(".updateAttributeStatus").click(function(){
$(document).on("click",".updateAttributeStatus",function(){
  var status=$(this).text();
  var attribute_id=$(this).attr("attribute_id");
//  alert(status);
//alert(attribute_id);
 $.ajax({
     type:'post',
     url:'/admin/update-attribute-status',
     data:{status:status,attribute_id:attribute_id},
     success:function(resp){
      // alert (resp['status']);
      // alert (resp['section_id']);
       if(resp['status']==0){
           $("#attribute-"+attribute_id).html(" Inactive");
       }else if(resp['status']==1){
          $("#attribute-"+attribute_id).html(" Active ");
       }
     },error:function(){
         alert("error");
     }
 });
});

//update blog images status
//$(".updateImageStatus").click(function(){
  $(document).on("click",".updateImageStatus",function(){
  var status=$(this).text();
  var image_id=$(this).attr("image_id");
// alert(status);
//  alert(image_id);
 $.ajax({
     type:'post',
     url:'/admin/update-image-status',
     data:{status:status,image_id:image_id},
     success:function(resp){
      // alert (resp['status']);
      // alert (resp['imge_id']);
       if(resp['status']==0){
           $("#image-"+image_id).html(" Inactive");
       }else if(resp['status']==1){
          $("#image-"+image_id).html(" Active ");
       }
     },error:function(){
         alert("error");
     }
 });
});

});