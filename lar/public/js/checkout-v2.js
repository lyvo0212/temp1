jQuery(document).ready(function($) {
    showAddressAll();//xem tat ca dia chi
    btnBillNew ();// them dia chi nhan hanng
    showFullAddress (); //xem day du dia chi
    //paymentSelect (); //chon hinh thuc thanh toan
    // paymentMehtodSelect ('.online-atm'); //chon cac buoc thanh toan online
    // paymentMehtodSelect ('.online-visa');
    // paymentMehtodSelect ('.online-transfer');
    clickEvent (); // nhap diem sen, voucher
    $('.cols-info').find('label').on('click', function(event) {
      $('.cols-info').removeClass('checked');
      $(this).parents('.cols-info').addClass('checked');
  });
  //select ward
    $(document).on('click', '.box-ward .selected-ward', function() {
      $('.col-shipping-ward .box-ward').toggleClass('active');
    });

  $(document).on('keyup', '.selected-ward .shipping_ward', function() {
    $('.shipping_ward_hidden').val($(this).val());
    Checkout.checkGaTagManagerWard=$(this).val();
  }); 

   $(document).on('mouseup', function(event) {   
        var obj = $('div.box-ward');
        if (!obj.is(event.target) && obj.has(event.target).length == 0) {
            $('div.box-ward').removeClass('active');
        }

    });
   setCssBtOrder();
});
function showFullAddress () {
    $(document).on('click', '.cols-info .ic', function() {
        $(this).parent().toggleClass('show');
        $('.box-cols-info.has-6').toggleClass('addH');
    });
}
function showAddressAll () {
    $(document).on('click', '.show-address-all', function() {
        $(this).addClass('up');
       $('#checkout-step-shipping').find('.box-cols-info').css({height: 'auto'});
    });
    $(document).on('click', '.show-address-all.up', function() {
        $(this).removeClass('up');
       $('#checkout-step-shipping').find('.box-cols-info').removeAttr('style');
    });

}
function btnBillNew () {
    $(document).on('click', '.btn-bill-new', function() {
       $('.box-cols-info, .bt-add').hide();
       $('#shipping-new-address-form').show();
    });
    $(document).on('click', '.btn-close-bill-new', function() {
      $('.box-cols-info, .bt-add').show();
      $('#shipping-new-address-form').hide();
      Checkout.new_address=false;
      Checkout.change_more_address_shipping(false);
      Checkout.save_shipping_address(jQuery("input[name=current_address]").val());
      Checkout.check_new_address();
    });

}
/* new */
function checkBtnSaveOrder(bol){
  var  bol = bol || false;
  if (!bol) {
    $('#btn_save_order').addClass('disable');
    $('#btn_save_order').attr({disabled: 'disabled'});

  }else{
    $('#btn_save_order').removeClass('disable');
    $('#btn_save_order').removeAttr('disabled');
  }
}
function paymentSelect () {
    $('.online-payment .title').on('click', function() {
       $(this).parent().find('.online-step').addClass('onlineShow');
       $('.box-installment').removeClass('activeShow');
        var checked_atm = $('.online-atm input[name=card][checked]');
        var checked_visa = $('.online-visa input[name=card][checked]');
        var checked_transfer = $('.online-transfer input[name=card_type_tranfer][checked]');
        if(checked_atm.length == 0 && checked_visa.length == 0 && checked_transfer.length == 0){
            checkBtnSaveOrder(false);
        }
       $('#btn_save_order').text('THANH TOÁN');
       //$(".ecom_payment_note").show();
    });

    $('.installment-payment .title').on('click', function() {
        $(".check-installment").attr("checked","checked");
        $(".online-step").removeClass("onlineShow");
        $('.installment-step').addClass('onlineShow');
 	$('.box-installment').addClass('activeShow');
        var checked_visa = $('.installment-visa input[name=card-in][checked]');
        if(checked_visa.length == 0){
            checkBtnSaveOrder(false);
        }
       $('#btn_save_order').text('THANH TOÁN');
       //$(".ecom_payment_note").show();
    });

    $('#p_method_cod_payment').on('click', function() {
       $('.online-step').removeClass('onlineShow');
       $('.online-step .box-online').removeClass("activeShow");
       $('.box-online .bank-group div').removeClass("active");
       $('.box-installment').removeClass('activeShow');
       Checkout.chooseMethod();
       checkBtnSaveOrder(true);
       $('#btn_save_order').text('ĐẶT HÀNG');
    });
}
function senpaySelect(){
  $('.online-payment .title').parent().find('.online-step').addClass('onlinShow');
  //$(".ecom_payment_note").show();
}
function paymentMethodSelect (object) {
  var $run_object =$(object);
   /* chon block thanh toan */
   $run_object.on('click', function() {
      if(object == '#check-wallet'){
          $('.online-step .box-online').removeClass("activeShow");
          $run_object.parent().parent().addClass("activeShow");
          checkBtnSaveOrder(true);
      }else
      if(object == '#online-transfer'){
          $('.online-step .box-online').removeClass("activeShow");
          $run_object.parent().parent().addClass("activeShow");
          $run_object.parent().find('.logo-bank').addClass('active');
          checkBtnSaveOrder(true);
          Checkout.chooseMethod("ecom_payment");
      }else
      if(object == '.installment-visa'){
          $('.online-step').removeClass("activeShow");
          $('.box-online').removeClass("activeShow");
          /*$run_object.parent().find('.logo-bank-in').addClass('active');*/
          var checked = $(object +' input[name=card-in][checked]');
          if(checked.length == 0){
            checkBtnSaveOrder(false);
          }
      }else{
          $('.online-step .box-online').removeClass("activeShow");
          $run_object.addClass("activeShow");
          //$('.box-online .bank-group div').removeClass("active");
          var checked = $(object +' input[name=card][checked]');
          if(checked.length == 0){
            checkBtnSaveOrder(false);
          }

          //$(".ecom_payment_note").hide();
      }

   });
    $run_object.find('.logo-bank-in').on('click', function(e) {
        e.preventDefault();
        $(this).siblings('.active').removeClass('active');
        $(this).addClass('active');
        checkBtnSaveOrder(true);
        Checkout.chooseMethod("installment_payment");
        return;
      });

    /* chon ngan hang */
      $run_object.find('.logo-bank').on('click', function() {
        $(this).addClass('active').siblings('.active').removeClass('active');
        Checkout.chooseMethod("ecom_payment");
        checkBtnSaveOrder(true);
        return;
      });

}

function getValueRadio (val) {
  var is_installment_card = arrCardIdInstallment.indexOf(val);
  if(is_installment_card == -1){
    var val_input = $('.box-online .bank-group input[value="'+val+'"]');
    $('.online-step').addClass('onlineShow');
    $('#p_method_ecom_payment').attr({checked: 'checked'});
    val_input.attr({checked: 'checked'});
    $(val_input).parents('.box-online').addClass("activeShow");
    $(val_input).parent().addClass("active");
    //$(".ecom_payment_note").hide();
  }else{
    var val_input = $('.box-installment .bank-group input[value="'+val+'"]');
    $('#p_method_installment_payment').attr({checked: 'checked'});
    val_input.attr({checked: 'checked'});
    $(val_input).parent().addClass("active");
    $(val_input).parents('.box-installment').addClass("activeShow");
    $('.online-step').removeClass('onlineShow');
    $('#p_method_ecom_payment').removeAttr('checked');
  }
}


function clickEvent () {
    $(document).on('click', '.caption-rw-checkout.ttl-loyalty', function() {
        $(this).find('.ic-collape').toggleClass('show');
        $(this).parent().toggleClass('show');
        var senPoint=typeof $(".cur-sen-point b")!= undefined? parseInt($(".cur-sen-point b").html().replace(",","")):0;
        
        if($(this).parent().hasClass('show')){
            pushDataEventTrackingGATagManager('Buttons',"Click - Expand Sen points form", 'Checkout form', senPoint, false);
        }else{
            pushDataEventTrackingGATagManager('Buttons',"Click - Collapse Sen points form", 'Checkout form', senPoint, false);
        }
        $('.input_sen_point input').focus();
        Checkout.calculateTimeStart=Date.now();
        //scrollBoxRight();
    });
    $(document).on('click', '.caption-rw-checkout.ttl-voucher', function() {
        $(this).find('.ic-collape').toggleClass('show');
        $(this).parent().toggleClass('show');
        if($(this).parent().hasClass('show')){
            pushDataEventTrackingGATagManager('Buttons',"Click - Expand voucher form", 'Checkout form', -1, false);
        }else{
            pushDataEventTrackingGATagManager('Buttons',"Click - Collapse voucher form", 'Checkout form', -1, false);
        }
        $('.input-voucher01 input').focus();
        Checkout.calculateTimeStart=Date.now();
        //scrollBoxRight();
    });
}
function rwCheckoutLoyalty(object){
  var $run_object = $(object);
  $run_object.toggleClass('toggle');
  $run_object.addClass('show');
}

function showAddressAll () {
    $(document).on('click', '.show-address-all', function() {
        $(this).addClass('up');
       $('#checkout-step-shipping').find('.box-cols-info').css({height: 'auto'});
       //scrollBoxRight ();
    });
    $(document).on('click', '.show-address-all.up', function() {
        $(this).removeClass('up');
       $('#checkout-step-shipping').find('.box-cols-info').removeAttr('style');
       //scrollBoxRight ();
    });
}

function setCssBtOrder(){  
    $('.box_modal_address input,.box_modal_address select').on('focus', function(){
       $('#review-buttons-container').removeClass('buttons-set-fixed');
    });
    $('.box_modal_address input, .box_modal_address select').on('blur', function(){
      if ($('#review-buttons-container').hasClass('buttons-set-fixed')) {
        return true;
      }else{
        $('#review-buttons-container').addClass('buttons-set-fixed');        
      }
      
    });
  
}
