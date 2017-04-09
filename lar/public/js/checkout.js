if(!window.Checkout)window.Checkout=Checkout={
    new_address : false,
    address_data:"",
    payment_data:"",
    qty_global:99999,
    no_senpay:false,
    is_passed:false,
    is_quantity:false,
    is_request_first: false,
    is_first_reload: true,
    calculateTimeStart:Date.now(),
    checkGaTagManagerWard:"",
    changeVisible: function(method, mode) {
        var block = 'payment_form_' + method;
        [block + '_before', block, block + '_after'].each(function(el) {
            element = $(el);
            if (element) {
                element.style.display = (mode) ? 'none' : '';
                element.select('input', 'select', 'textarea', 'button').each(function(field) {
                    field.disabled = mode;
                });
            }
        });
    },
    check_new_address: function(){
        if(Checkout.new_address){
            Checkout.new_address = false;
            Checkout.shippingLoad();
        }
    },
    save_shipping_address : function(address_id){
        var validation_failed = jQuery(".new-shipping-form").find(".validation-failed");
        var address_id = address_id || false;
        if(!address_id){
            return false;
        }
        Checkout.ajax_loader_show(true,true);
        jQuery('#current_form_input_shipping').val(0);
        $(".cols-info").removeClass('checked');
        //var address_id = jQuery(e).val();
        jQuery.ajax({
            url:CHECKOUT_DOMAIN + "checkout/onepage/saveShipping/",
            data:{"address_id":address_id,"action":"set_shipping_address"},
            type :"POST",
            success: function(data){
                Checkout.ajax_loader_hide();
                if(!data.error){
                    Checkout.reviewLoad();
                    jQuery('#checkout-step-review').removeClass('disable-payment_');
                    jQuery('#checkout-step-payment').removeClass('disable-payment_');
                    jQuery("input[name=current_address]").val(address_id);
                }
            },
            timeout: 10000,
            error:function(){
                Checkout.ajax_loader_hide();
            }
        })
    },
    chooseMethod : function(not_reload){
        var not_reload = not_reload || false;
        var is_change_payment = true;
        var tmp = jQuery("#payment-method").serialize();
        if(tmp == Checkout.payment_data){
            is_change_payment = false;
        }
        if(tmp.indexOf("cod_payment") != -1){
            jQuery('#btn_save_order').html('Đặt hàng');
        }
        else{
            jQuery('#btn_save_order').html('Thanh toán');
        }
        if(jQuery('#current_form_input_shipping').val() == 1){
            checkBtnSaveOrder(true);
            return false;
        }
        if(is_change_payment){
            Checkout.ajax_loader_show(true,true);
            Checkout.payment_data = tmp;
            jQuery.ajax({
                url:CHECKOUT_DOMAIN + "checkout/onepage/saveInfo/",
                data:jQuery("#payment-method").serialize()+"&action=set_shipping_payment",
                type :"POST",
                success: function(data){
                    Checkout.ajax_loader_hide();
                    if(!data.error){
                        if(not_reload && not_reload == "ecom_payment" || not_reload == "installment_payment"){
                            Checkout.reviewLoad("#block_order","checkout/onepage/reviewLoad/","#checkout-review-choose-supplier",false);
                        }else{
                            Checkout.reviewLoad("#block_order","checkout/onepage/reviewLoad/","#checkout-review-choose-supplier","#payment-method");
                        }


                    }else{
                        if(data.message !=null){
                            checkBtnSaveOrder(false);
                            alert(data.message);
                        }
                    }
                },
                timeout: 10000,
                error:function(){
                    Checkout.ajax_loader_hide();
                }
            });
        }
    },
    chooseShippingCarrier : function(e,u,s){
        var e = e || false;
        var u = u || false;
        var s = s || false;
        var tmp = '#box_supplier'+s+' input:checked';
        var index=jQuery('#box_supplier'+s+' input').index(jQuery(tmp));
        pushDataEventTrackingGATagManager('Buttons',"Click - Confirm carrier", 'Carrier popup',index, false);  
        var method = jQuery(tmp).val();
        
        jQuery.ajax({
            url:CHECKOUT_DOMAIN + "checkout/onepage/saveInfo/",
            data:{"method":method,"action":"set_shipping_method","s":s},
            type :"POST",
            success: function(data){
                if(!data.error){
                    Checkout.reviewLoad(e,u);
                }
            }
        })
    },
    choiceSupplierClick : function(){
      pushDataEventTrackingGATagManager('Popups',"Show popup", 'Carrier popup',-1, false);  
    },
    choiceOneSupplier : function(el,s){
        var index=jQuery('#box_supplier'+s+' input').index(jQuery(el));
        pushDataEventTrackingGATagManager('Radio buttons',"Click - Carrier option", 'Carrier popup',index, false);  
    },
    saveOrder : function(){
        pushDataEventTrackingGATagManager('Buttons',"Click - Order", 'Checkout form',-1, false);  
    },
    getDistrict : function(e,d){
        var d = parseInt(d) || 0;
        var city_id = parseInt(e) || 0;
        if(!city_id){
            var option = '<option>Quận / Huyện</option>';
            jQuery(".shipping_district").html(option);
            jQuery(".select-box-ward").html('');
            jQuery(".shipping_ward_show").val('');
            return;
        } 
        jQuery(".shipping_region_h").val(city_id);
        jQuery(".shipping_district_h").val("");
        jQuery(".shipping_ward_show").val("");
        jQuery(".shipping_ward").val("");
        jQuery(".select-box-ward").html('');
        var option = '';
        jQuery.ajax({
            url:CHECKOUT_DOMAIN + "checkout/onepage/getDistrict/?city_id="+city_id,
            type :"GET",
            asycn: false,
            success: function(data){
                var select = '';
                option += '<option value="">Quận / Huyện</option>';
                for(i in data){
                    if(data[i].id == d){
                        select = 'selected';
                    }else{
                        select = '';
                    }
                    option += '<option value="'+data[i].id+'" '+select+'>' + data[i].name + '</option>';
                }
                jQuery(".shipping_district").html(option);
                jQuery.cookie('ecom_cus_to_region_name', jQuery("select.shipping_region option").filter(":selected").text().trim(), {path: '/', expires: 7, domain:DOMAIN_COOKIE});
                jQuery.cookie('ecom_cus_to_region_id', city_id, {path: '/', expires: 7, domain:DOMAIN_COOKIE});
            }
        })
    },
    getWard : function(e,d,f){
        var d = d || 0;
        var district_id = e || 0;
        if(!district_id){
            var option = '';
            jQuery(".select-box-ward").html(option);
            jQuery(".shipping_ward").val("");
            return;
        }
        jQuery(".shipping_district_h").val(district_id);
        jQuery(".shipping_ward_show").val("");
        jQuery(".shipping_ward").val("");
        var option = '';
        jQuery.ajax({
            url:CHECKOUT_DOMAIN + "checkout/onepage/getWard/?district_id="+district_id,
            type :"GET",
            asycn: false,
            success: function(data){
                var select = '';
                jQuery('.shipping_district').removeClass("validation-failed");
                for(i in data){
                    if(data[i].name == d){
                        select = 'class="selected"';
                    }
                    else if(data[i].id == parseInt(jQuery(".shipping_ward_id_hidden").val())){
                        select = 'class="selected"';
                        jQuery(".shipping_ward_show").val(data[i].name);
                        jQuery(".shipping_ward_hidden").val(data[i].name);
                        Checkout.checkGaTagManagerWard=data[i].name;
                    }
                    else{
                        select = '';
                    }
                    option += '<span '+select+' wid=' + data[i].id + '>' + data[i].name + '</span>';
                }
                jQuery.cookie('ecom_cus_to_district_id', district_id, { expires:7, path: '/' , domain:DOMAIN_COOKIE});
                jQuery(".select-box-ward").html(option);
                if(f==true){
                    Checkout.checkGaTagManagerWard="";
                }
                Checkout.setWard();
            }
        })
    },
    setWard : function(){
        $(".select-box-ward span").on('click', function() {
            $('.col-shipping-ward .box-ward').removeClass('active');
            $('.selected-ward .shipping_ward, .shipping_ward_hidden').val($(this).html()).removeClass("validation-failed");
            jQuery.cookie('ecom_cus_to_ward_id', jQuery(this).attr('wid'), { expires:7, path: '/' , domain:DOMAIN_COOKIE});
            Checkout.update_shipping();
           Checkout.checkGaTagManagerWard=$(this).html();
           Checkout.checkGaTagManager("#shipping_ward_input");
        });
        
    },
    update_note : function(){
        var note = jQuery("#review_note").val()
        jQuery.ajax({
            url:CHECKOUT_DOMAIN + "checkout/onepage/saveInfo/",
            data:{"action":"set_customer_note","note":note},
            type :"POST",
            success: function(data){

            }
        })
    },
    reviewLoad : function(e,u,review,payment,wallet){
        Checkout.ajax_loader_show(true,true);
        var e = e || "#block_order";
        var review = review || "#checkout-review-choose-supplier";
        var payment = payment  || "#payment-method";
        var u = u || "checkout/onepage/reviewLoad/"+e+"="+e+"&"+review+"="+review+"&"+payment+"="+payment;
        var check_wallet = wallet || false;
        jQuery.ajax({
            url:CHECKOUT_DOMAIN + u,
            type :"GET",
            dataType: "json",
            success: function(data){
                if(data != null){
                    if(data.payment_method !=null){
                        if(payment){
                            jQuery(payment).html(data.payment_method);
                        }
                    }
                    if(data.block_order !=null){
                        jQuery(e).html(data.block_order);
                    }
                    if(data.shippingfee_total !=null){
                        if(review){
                            jQuery(review).html(data.shippingfee_total);
                        }
                    }
                    if(Checkout.no_senpay){

                        checkBtnSaveOrder(false);
                    }
                    if(check_wallet){
                        Checkout.check_wallet();
                    }
                    if(data.error_product == 1){
                        if(data.remove_all == 0){
                            var list = data.list_product_failed;
                            var html_list_product_failed = "";
                            $("#checkout-status-text").html("Giỏ hàng của bạn đã được cập nhật do có sản phẩm hết hàng:");
                            $(".number-pr-off").html(list.length);
                            for (i = 0; i < list.length; i++) { 
                                html_list_product_failed = html_list_product_failed + '<li><img src="' + list[i].image + '" alt="sold-out"><span>' + list[i].product_name + '</span></li>';
                            }
                            $("#list-pr-off").html(html_list_product_failed);
                        }else{
                            $("#checkout-status-text").html("Giỏ hàng của bạn chứa các sản phẩm hết hàng. Vui lòng kiểm tra lại Giỏ Hàng!");
                            $(".checkout-status .note").show();
                            if(data.is_null_cart == 1){
                                $(".checkout-status .note a").attr("href", DOMAIN);
                                $(".checkout-status .note a").html("Về Trang Chủ.");
                            }else{
                                $(".checkout-status .note a").attr("href", DOMAIN + "checkout/cart/");
                                $(".checkout-status .note a").html("Về Giỏ Hàng.");
                            }
                        }
                        $(".checkout-status").removeClass("hide");
                        if(data.disable_button == 1){
                            checkBtnSaveOrder(false);
                        }
                    }else{
                        if(data.not_support_tvc_area == 1){
                            $("#checkout-status-text").html("Bạn không thể thanh toán vào lúc này do shop chỉ hỗ trợ vận chuyển đến các tỉnh/TP: <strong style='margin-top: 10px;display: block;''><span>" + data.list_area + "</span></strong>");
                            $(".checkout-status").removeClass("hide");
                            checkBtnSaveOrder(false);
                        }else{
                            if(data.error_payment == 1){
                                $("#checkout-status-text").html("Đơn hàng không đủ điều kiện để thanh toán trả góp, vui lòng chọn hình thức thanh toán khác!");
                                $(".checkout-status").removeClass("hide");
                            }else{
                                $(".checkout-status").addClass("hide");
                                jQuery("#error_product").hide();
                            }
                        }
                        if(data.disable_button == 1){
                            checkBtnSaveOrder(false);
                        }
                    }
                    if(data.not_support_tvc_area == 1){

                        checkBtnSaveOrder(false);
                    }
                    if(Checkout.is_first_reload && userLogin){
                        Checkout.suggestVoucher();
                    }
                }
                jQuery("#ajax_loader").hide();
            }
        })
    },
    suggestVoucher : function(){
        var url = DOMAIN + "su-kien/ajax/validateVoucherEvent/";
        var list_product_qty = $("#list_product_qty").val();
        jQuery.ajax({
            url:url,
            type :"POST",
            data : {"productIds":list_product_qty},
            dataType: "json",
            success: function(data){
                if(data.error_code == 0){
                    $(".caption-rw-checkout.ttl-voucher").click();
                    $("#catpcha_input_voucher").val(data.voucher_code);
                    $("#btnSubmitVoucher").click();
                    Checkout.is_first_reload = false;
                }
            }
        });
    },
    calculateTime : function(){
        Checkout.calculateTimeStart=Date.now();
    },
    checkGaTagManager : function(el){
        var elm=jQuery(el);
        var dueTime=Date.now()- Checkout.calculateTimeStart;
        if (elm.attr("name")=="phone"){
            pushDataEventTrackingGATagManager('Form fields',"Time - Phone", 'Checkout form',dueTime, true);
            if(elm.val().length == 0){
                pushDataEventTrackingGATagManager('Form fields',"Skip - Phone", 'Checkout form', -1, true);
            }
            else if(!Checkout.validatePhone(elm.val())){
                pushDataEventTrackingGATagManager('Errors - Checkout form',"Error - Phone", 'Vui lòng nhập số điện thoại di động hợp lệ. Ví dụ: 0912345678, 01234567890, 0888123123...',-1 , true);
            }
            else{
                pushDataEventTrackingGATagManager('Form fields',"Complete - Phone", 'Checkout form', -1, true);
            }
        }
        if (elm.attr("name")=="region"){
            
                pushDataEventTrackingGATagManager('Form fields',"Time - City", 'Checkout form',dueTime, true);
                if(elm.hasClass("validation-failed")){
                    pushDataEventTrackingGATagManager('Form fields',"Skip - City", 'Checkout form', -1, true);
                }else{
                    pushDataEventTrackingGATagManager('Form fields',"Complete - City", 'Checkout form', -1, true);
                } 
            
        }
        if (elm.attr("name")=="locality"){
            pushDataEventTrackingGATagManager('Form fields',"Time - District", 'Checkout form',dueTime, true);
            if(elm.hasClass("validation-failed")){
                pushDataEventTrackingGATagManager('Form fields',"Skip - District", 'Checkout form', -1, true);
            }else{
                pushDataEventTrackingGATagManager('Form fields',"Complete - District", 'Checkout form', -1, true);
            } 
        }
        if (elm.attr("name")=="shipping[ward_show]"){
            if(elm.val()==Checkout.checkGaTagManagerWard){
                pushDataEventTrackingGATagManager('Form fields',"Time - Ward", 'Checkout form',dueTime, true);
                if(elm.val()==""){
                    pushDataEventTrackingGATagManager('Form fields',"Skip - Ward", 'Checkout form', -1, true);
                }else{
                    pushDataEventTrackingGATagManager('Form fields',"Complete - Ward", 'Checkout form', -1, true);
                } 
            }
        }
        if (elm.attr("name")=="street-address"){
            pushDataEventTrackingGATagManager('Form fields',"Time - Address", 'Checkout form',dueTime, true);
            if(elm.val().length == 0){
                pushDataEventTrackingGATagManager('Form fields',"Skip - Address", 'Checkout form', -1, true);
            }else{
                pushDataEventTrackingGATagManager('Form fields',"Complete - Address", 'Checkout form', -1, true);
            } 
        }
        if (elm.attr("name")=="firstname"){
            pushDataEventTrackingGATagManager('Form fields',"Time - FirstName", 'Checkout form',dueTime, true);
            if(elm.val().length == 0){
                pushDataEventTrackingGATagManager('Form fields',"Skip - FirstName", 'Checkout form', -1, true);
            }else{
                pushDataEventTrackingGATagManager('Form fields',"Complete - FirstName", 'Checkout form', -1, true);
            } 
        }
        if (elm.attr("name")=="lastname"){
            pushDataEventTrackingGATagManager('Form fields',"Time - LastName", 'Checkout form',dueTime, true);
            if(elm.val().length == 0){
                pushDataEventTrackingGATagManager('Form fields',"Skip - LastName", 'Checkout form', -1, true);
            }else{
                pushDataEventTrackingGATagManager('Form fields',"Complete - LastName", 'Checkout form', -1, true);
            } 
        }
        if (elm.attr("id")=="catpcha_input_voucher"){
            pushDataEventTrackingGATagManager('Form fields',"Time - Voucher", 'Checkout form',dueTime, true);
            if(elm.val().length == 0){
                pushDataEventTrackingGATagManager('Form fields',"Skip - Voucher", 'Checkout form', -1, true);
            }else{
                pushDataEventTrackingGATagManager('Form fields',"Complete - Voucher", 'Checkout form', -1, true);
            } 
        }
        if (elm.attr("id")=="loyalty_input"){
            var senPoint=typeof $(".cur-sen-point b")!= undefined? parseInt($(".cur-sen-point b").html().replace(",","")):0;
            pushDataEventTrackingGATagManager('Form fields',"Time - Sen points", 'Checkout form',dueTime, true);
            if(elm.val().length == 0){
                pushDataEventTrackingGATagManager('Form fields',"Skip - Sen points", 'Checkout form', senPoint, true);
            }else{
                pushDataEventTrackingGATagManager('Form fields',"Complete - Sen points", 'Checkout form', senPoint, true);
            } 
        }
        if (elm.attr("id")=="review_note"){
            pushDataEventTrackingGATagManager('Form fields',"Time - Note", 'Checkout form',dueTime, true);
            if(elm.val().length == 0){
                pushDataEventTrackingGATagManager('Form fields',"Skip - Note", 'Checkout form', -1, true);
            }else{
                pushDataEventTrackingGATagManager('Form fields',"Complete - Note", 'Checkout form', -1, true);
            } 
        }
    },
    update_shipping : function (){
        Checkout.ajax_loader_show(false,true);
        jQuery("#checkout-step-shipping input:radio").attr("checked", false);
        jQuery('.same_as_billing').val('0');
        jQuery(".require_s").hide();
        jQuery(".email_error").hide();
        jQuery(".message_error").hide();
        var form_new_address = jQuery('#shipping-new-address-form')
        var require_list = form_new_address.find(".required-entry");
        var valid = true;
        var is_change_data = true;
        if(!Checkout.is_request_first){
            var validate_firstname = form_new_address.find(".validate-firstname");
            var validate_lastname = form_new_address.find(".validate-lastname");
            var validate_email = form_new_address.find(".validate-email");
            var validate_phone = form_new_address.find(".validate-phone");
            var validate_street = form_new_address.find(".validate-street");
            var shipping_region_h = jQuery(".shipping_region_h").val();
            var shipping_district_h = jQuery(".shipping_district_h").val();
            var shipping_ward = jQuery(".shipping_ward").val();
            jQuery(validate_phone).each(function(k,v){                                
                if(v.value.length == 0){
                    jQuery(v).addClass("validation-failed");
                    jQuery(".message_error").html("(*) Vui lòng nhập số điện thoại!").show();
                    valid=false;
                }
                else if(!Checkout.validatePhone(jQuery(v).val())){
                    jQuery(v).addClass("validation-failed");
                    jQuery(".message_error").html("(*) Vui lòng nhập số điện thoại di động hợp lệ. Ví dụ: 0912345678, 01234567890, 0888123123...").show();
                    valid=false;
                }
                else{
                    jQuery(v).removeClass("validation-failed");
                }
            });
            if(shipping_region_h.length == 0 || shipping_district_h.length == 0 || shipping_ward.length == 0){
                jQuery(".message_error").html("(*) Vui lòng nhập địa chỉ!").show();
                valid=false;
            }

            jQuery(validate_street).each(function(k,v){
                if(v.value.length == 0){
                    jQuery(v).addClass("validation-failed");
                    jQuery(".message_error").html("(*) Vui lòng nhập địa chỉ!").show();
                    valid=false;
                }else{
                    jQuery(v).removeClass("validation-failed");
                }        
            });
            jQuery(validate_firstname).each(function(k,v){
                if(v.value.length == 0){
                    jQuery(v).addClass("validation-failed");
                    jQuery(".message_error").html("(*) Vui lòng nhập họ và tên!").show();
                    valid=false;
                }
                else{
                    jQuery(v).removeClass("validation-failed");
                }
            });
            jQuery(validate_lastname).each(function(k,v){
                 if(v.value.length == 0){
                    jQuery(v).addClass("validation-failed");
                    jQuery(".message_error").html("(*) Vui lòng nhập họ và tên!").show();
                    valid=false;
                }
                else{
                    jQuery(v).removeClass("validation-failed");
                }
            });
            jQuery(validate_email).each(function(k,v){
                if(v.value.length == 0){
                    jQuery(v).addClass("validation-failed");
                    jQuery(".message_error").html("(*) Vui lòng nhập địa chỉ email!").show();
                    valid=false;
                }
                else if(!Checkout.validateEmail(jQuery(v).val())){
                    jQuery(v).addClass("validation-failed");
                    jQuery(".message_error").html("(*) Địa chỉ email không hợp lệ!").show();
                    valid=false;
                }
                else{
                    jQuery(v).removeClass("validation-failed");
                }
    
            });
            
            jQuery(require_list).each(function(k,v){
                if(jQuery(".shipping_district_h").val().length == 0){
                    if(jQuery(v).val().trim() == "" || jQuery(v).val().length == 0){
                        jQuery(v).addClass("validation-failed");
                        valid=false;
                    }else{
                        jQuery(v).removeClass("validation-failed");
                    }
                }
            });
        }
        
        var data_change = jQuery("#new-shipping-form").serialize();
        if(data_change == Checkout.address_data){
            is_change_data=false;
            return false;
        }else{
            is_change_data=true;
            Checkout.address_data = data_change;
        }
        
        if((valid && is_change_data) || (!Checkout.is_passed && Checkout.is_request_first)) {
            jQuery('#current_form_input_shipping').val(0);
            jQuery.ajax({
                url:CHECKOUT_DOMAIN + "checkout/onepage/saveShipping/",
                data:jQuery("#new-shipping-form").serialize(),
                type :"POST",
                beforeSend: function(){
                    checkBtnSaveOrder(true);
                    jQuery('#current_form_input_shipping').val(1);
                },
                success: function(data){
                    Checkout.ajax_loader_hide();
                    Checkout.is_request_first = true;
                    if (data.error == 1) {
                        if(data.message.message !=null){
                            message = data.message.message;
                            Checkout.is_passed = false;
                            $.each(message, function (k, v) {
                                jQuery(".message_error").html("(*) " + v).show();
                            });
                            if(data.has_ward == 0){
                                checkBtnSaveOrder(true);
                                jQuery('#checkout-step-review').removeClass('disable-payment_');
                                jQuery('#checkout-step-payment').removeClass('disable-payment_');
                            }
                            else{
                                checkBtnSaveOrder(false);
                            }
                            
                        }
                    }else{
                        jQuery(".require_s").hide();
                        jQuery(".message_error").html("").hide();

                        Checkout.reviewLoad();
                        Checkout.is_passed = true;
                        checkBtnSaveOrder(false);
                    }
                },
                timeout: 10000,
                error: function(){
                    Checkout.ajax_loader_hide();
                }
            });
        }
        if(!valid){
            checkBtnSaveOrder(false);
            jQuery('#current_form_input_shipping').val(1);
            jQuery(".require_s").show();
            return false;
        }
        else{
            checkBtnSaveOrder(true);
            jQuery('#checkout-step-review').removeClass('disable-payment_');
            jQuery('#checkout-step-payment').removeClass('disable-payment_');
        }
    },
    processForms: function(elm){
        Checkout.new_address = true;
        var valid = true;
        var eventlist = ["resizeend","rowenter","dragleave","beforepaste","dragover","beforecopy","page","beforeactivate","beforeeditfocus","controlselect","blur",
                    "beforedeactivate","keydown","dragstart","scroll","propertychange","dragenter","rowsinserted","mouseup","contextmenu","beforeupdate",
                    "readystatechange","mouseenter","resize","copy","selectstart","move","dragend","rowexit","activate","focus","focusin","mouseover","cut",
                    "mousemove","focusout","filterchange","drop","blclick","rowsdelete","keypress","losecapture","deactivate","datasetchanged","dataavailable",
                    "afterupdate","mousewheel","keyup","movestart","mouseout","moveend","cellchange","layoutcomplete","help","errorupdate","mousedown","paste",
                    "mouseleave","click","drag","resizestart","datasetcomplete","beforecut","change","error","abort","load","select"];
        var somethingChanged = false;

        function track_change(e,t){
            var e = e || false;
            var t = t || false;
            input = jQuery(e);
             if(input.val().trim() == "" || input.val().trim() == "Chọn.."){
                input.addClass("validation-failed");
                valid=false;
             }else{
                input.removeClass("validation-failed");
             }

        }
        //setInterval(function() { track_change(".shipping_ward_show")}, 100);
        //setInterval(function() { track_change(".shipping_telephone")}, 100);

        jQuery('.required-entry', elm).each(function() {
            jQuery(this).bind("blur input change paste copy readystatechange",function(){
                var input = $(this);
                if(!input.val().trim() || input.val().trim() =="Chọn.."){
                    input.addClass("validation-failed");
                    valid = false;
                }else{
                    input.removeClass("validation-failed");
                }
            })
        });
        return valid;
    },
    placeOrder : function(e){

        Checkout.ajax_loader_show(true,true);
        jQuery(".require_s").hide();
        if(Checkout.new_address){
            valid_false = jQuery(document).find(".validation-failed");
            if(valid_false.length >0){
                jQuery(".require_s").show();
                Checkout.ajax_loader_hide();
                return;
            }
        }
        /*jQuery.ajax({
            url:CHECKOUT_DOMAIN + "checkout/onepage/saveOrder/",
            type :"GET",
            success: function(data){
                if (data.error == 1) {
                    Checkout.ajax_loader_hide();
                    return false;
                }
            }
        })*/
        //Checkout.ajax_loader_hide();
        //jQuery("#checkout-place-order").submit();
        //Checkout.setLocation(CHECKOUT_DOMAIN + "checkout/onepage/saveOrder/");
    },
    check_voucher : function(){
        jQuery(".showerror").html("");
        var voucher_wait = jQuery("#voucher-please-wait");
        voucher_wait.show();
        var voucher = jQuery("#catpcha_input_voucher").val();
        if(voucher.length < 5 || voucher.length > 20){
            jQuery('#divloadingmask').hide();
            jQuery('.showerror').html('Mã giảm giá không hợp lệ.').css('display','block');
            voucher_wait.hide();
            pushDataEventTrackingGATagManager('Errors - Checkout form',"Error - Use voucher", 'Mã giảm giá không hợp lệ.', -1, false);
            return false;
        }
        jQuery.ajax({
            url:CHECKOUT_DOMAIN + "checkout/onepage/checkVoucher/",
            data:jQuery("#checkout-voucher-form").serialize(),
            type :"POST",
            success: function(data){
                voucher_wait.hide();                
                if(!data.error){
                    Checkout.reviewLoad();
                    Checkout.show_captcha();
                    pushDataEventTrackingGATagManager('Buttons',"Click - Use voucher", 'Checkout form', -1, false);
                }else if(data.error){
                    pushDataEventTrackingGATagManager('Errors - Checkout form',"Error - Use voucher", data.message, -1, false);
                    if(data.message != null){
                        jQuery(".showerror").html(data.message);
                    }
                    if(data.error == 1){
                        Checkout.show_captcha();
                    }
                    if(data.error == 2){
                        Checkout.reviewLoad();
                    }
                }
                return true;
            },
            timeout: 30000,
            error: function(xhr, textStatus, errorThrown){
                voucher_wait.hide();
                jQuery(".showerror").html('Đã có lỗi khi thực hiện. Vui lòng thử lại.').css('display','block');
                pushDataEventTrackingGATagManager('Errors - Checkout form',"Error - Use voucher", 'Đã có lỗi khi thực hiện. Vui lòng thử lại.', -1, false);
                return;
            }
        });
        return false;
    },
    remove_voucher: function(){
        jQuery.ajax({
            url:CHECKOUT_DOMAIN + "checkout/onepage/removeVoucher/",
            data:{"action":"remove_voucher"},
            type :"POST",
            success: function(data){
                if(!data.error){
                    Checkout.reviewLoad();
                }
            }
        });
        return false;
    },
    change_more_address_shipping: function(status){
        jQuery.ajax({
            url:CHECKOUT_DOMAIN + "checkout/onepage/changeMoreAddressShipping/",
            type :"POST",
            data :"is_change=" + status,
            success: function(data){
                if(data.data == 1 && status){
                    if(!Checkout.is_passed){
                        Checkout.reviewLoad();
                    }
                }
            }
        });
        return false;
    },
    setLocation: function(e){
        var e = e || location.href;
        window.location.href = e;
    },
    deleteAddress : function(e){
        var confirm = window.confirm("Bạn thực sự muốn xoá địa chỉ này?");
        if(!confirm){
            return false;
        }
        var e = e || false;
        if(e){
            jQuery.ajax({
                url:DOMAIN + "checkout/onepage/deleteAddress/",
                data:{"address_id":e},
                type :"POST",
                success: function(data){
                    if(data.error){
                        alert(data.message);
                    }else{
                        Checkout.shippingLoad();
                    }

                }
            })
        }
    },
    shippingLoad : function(e,u){
        var e = e || "#block_shipping";
        var u = u || "checkout/onepage/shippingLoad/";
        jQuery.ajax({
            url:CHECKOUT_DOMAIN + u,
            type :"GET",
            dataType: "json",
            success: function(data){
                if(data != null){
                    if(data.block_shipping !=null){
                        jQuery(e).html(data.block_shipping);
                    }
                }
            }
        })
    },
    show_captcha : function(e){
        var e = e || '.captcha_img';
        jQuery.ajax({
            type:"GET",
            url: CHECKOUT_DOMAIN + 'checkout/onepage/renewcaptcha/',
            dataType: 'html',
            success:function(html){
                jQuery(e).attr('src', html);
            }
        });
    },
    login_docheckout: function(bol_buy,u){
        bol_buy = bol_buy || false;
        if(bol_buy == true){
            jQuery('#Modal_login').addClass('for-buynow');
            jQuery('#Modal_login').find('.box-fl').addClass('active');
            jQuery('#Modal_login').find('.box-mhktk').show();
            jQuery('#Modal_login').addClass('modal-login-mhktk');
            jQuery('#flag_popup').html("3");
        }else{
            jQuery('#Modal_login').removeClass('for-buynow');
            jQuery('#Modal_login').find('.box-fl').removeClass('active');
            jQuery('#Modal_login').find('.box-mhktk').hide();
            jQuery('#flag_popup').html("");
        }

        OpenIDConnect.loginurl= u;
        jQuery('#fosp_login_current_url').val(u);
        jQuery('#fosp_register_current_url').val(u);
        login_click(true,false,false,true,3);
        //guest checkout

        jQuery('#checkout_guest').click(function(){
            location.href = u;
        })
    },
    update_qty : function(q,e,cur_qty, quantity){
        var qty = jQuery(e).val();
        qty = parseInt(qty);
        quantity = parseInt(quantity);
        if(parseInt(quantity) > 0){ 
            if(qty > quantity){
                if(quantity >= 10){
                    jQuery(e).parent().parent().find('.error-quantity').html('Còn lại ' + quantity + ' sản phẩm.').css('display', 'block');
                }
                else{
                    jQuery(e).parent().parent().find('.error-quantity').html('Chỉ còn lại ' + quantity + ' sản phẩm.').css('display', 'block');
                }
                Checkout.is_quantity = true
                checkBtnSaveOrder(false);
                return false;
            }
        }
        quote_id = q || false;
        if(quote_id){
            if((qty != Checkout.qty_global && qty != cur_qty) || (qty == cur_qty && Checkout.is_quantity)){
                Checkout.ajax_loader_show(true, false);
                if(!Checkout.isNumber(qty)){
                    jQuery(e).addClass("validation-failed");
                    jQuery(e).val(1);
                    Checkout.ajax_loader_hide();
                    return false;
                }else{
                    jQuery(e).removeClass("validation-failed");
                }
                if(qty <= 0){
                    qty = 1;
                }
                jQuery.ajax({
                    url:CHECKOUT_DOMAIN + "checkout/cart/update/"+quote_id+"/",
                    data:{"update_cart_action":"update_qty","qty":qty},
                    type :"POST",
                    success: function(data){
                        Checkout.is_first_reload = true;
                        Checkout.reviewLoad();
                        Checkout.ajax_loader_hide();
                        Checkout.qty_global = qty;
                    }
                })
            }

        }
    },
    checkNumber : function(e){
        var qty = jQuery(e).val();
        if(!Checkout.isNumber(qty)){
            jQuery(e).addClass("validation-failed");
            jQuery(e).val("1");
            return false;
        }else{
            jQuery(e).removeClass("validation-failed");
        }
    },
    isNumber : function(n) {
      return !isNaN(parseFloat(n)) && isFinite(n);
    },
    onlyNumberKey : function(evt){
        var theEvent = evt || window.event;
        var key = theEvent.keyCode || theEvent.which;
        var backspace = key;

        key = String.fromCharCode( key );
        var regex = /[0-9]|\./;
        if( !regex.test(key) && backspace != 8) {
            theEvent.returnValue = false;
            if(theEvent.preventDefault) theEvent.preventDefault();
        }
    },
    check_copy_paste : function(){
        var ctrlDown = false;
        var ctrlKey = 17, vKey = 86, cKey = 67;

        $(document).keydown(function(e)
        {
            if (e.keyCode == ctrlKey) ctrlDown = true;
        }).keyup(function(e)
        {
            if (e.keyCode == ctrlKey) ctrlDown = false;
        });

        $("input").keydown(function(e)
        {
            if (ctrlDown && (e.keyCode == vKey || e.keyCode == cKey)){
                $(e).css("display","block");
                $(e).focus();
                console.log("ctrl v down");
            }
        });

        $("input").keyup(function(e)
        {
            if (ctrlDown && (e.keyCode == vKey || e.keyCode == cKey)){
                $(e).blur();
                //do your sanitation check or whatever stuff here
                console.log("ctrl v up");

            }
        });
    },
    send_message_to_shop : function(shop_id){
        var shop_id = shop_id || false;
        if(!userLogin){
            return false;
        }
        if(shop_id){
            jQuery('.sendmsg_modal').html('<span class="img-ajax-loader"><img src="'+ST_IMAGE+'loading.svg" alt=""  /></span>');
            jQuery.ajax({
                url: DOMAIN+'hop-thu/goi-tin-nhan/',
                type: "POST",
                data: 'sid='+shop_id,
                success: function(data){
                    jQuery('.sendmsg_modal').html(data);
                }
            });
        }
    },
    validateEmail: function(v) {
        var reg = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return result = reg.test(v);
    },
    validatePhone: function(phone) {
        var patern09 = /^09[0-9]{8}?$/;
        var patern01 = /^01[0-9]{9}?$/;
        var patern088 = /^088[0-9]{7}?$/;
        var patern086 = /^086[0-9]{7}?$/;
        var patern089 = /^089[0-9]{7}?$/;
        if( !patern09.test( phone ) && !patern01.test( phone ) && !patern088.test( phone ) && !patern086.test( phone ) && !patern089.test( phone )) {
            return false;
        } else {
            return true;
        }
    },
    validateString: function(string) {
        var patern = /[!$%^&*()_+|~=`{}\\:";'<>?,.]+/;

        if( !patern.test(string)) {
            return false;
        } else {
            return true;
        }
    },
    check_change : function(e){
        jQuery(e).each(function() {
            var elem = jQuery(this);

            // Save current value of element
            elem.data('oldVal', elem.val());
            var eventlist = ["resizeend","rowenter","dragleave","beforepaste","dragover","beforecopy","page","beforeactivate","beforeeditfocus","controlselect","blur",
                    "beforedeactivate","keydown","dragstart","scroll","propertychange","dragenter","rowsinserted","mouseup","contextmenu","beforeupdate",
                    "readystatechange","mouseenter","resize","copy","selectstart","move","dragend","rowexit","activate","focus","focusin","mouseover","cut",
                    "mousemove","focusout","filterchange","drop","blclick","rowsdelete","keypress","losecapture","deactivate","datasetchanged","dataavailable",
                    "afterupdate","mousewheel","keyup","movestart","mouseout","moveend","cellchange","layoutcomplete","help","errorupdate","mousedown","paste",
                    "mouseleave","click","drag","resizestart","datasetcomplete","beforecut","change","error","abort","load","select"];
                    $.each(eventlist, function(i, el){
                        elem.bind(el, function(event){
                            if (elem.data('oldVal') != elem.val()) {
                            // Updated stored value
                            elem.data('oldVal', elem.val());



                            }
                        });
                    });
            // Look for changes in the value
            /*elem.bind("propertychange change keyup input paste", function(event){
                // If value has changed...
                if (elem.data('oldVal') != elem.val()) {
                // Updated stored value
                elem.data('oldVal', elem.val());
                alert("change data");


                }
            });*/
        });
    },
    ajax_loader_show : function(a,b){
        var a=a||false;
        var b=b||false;
        if(a){
            jQuery("#ajax_loader").show();
        }
        if(b){
            if(jQuery(".checkout-status").hasClass("hide") == true){
                checkBtnSaveOrder(true);
            } else {
                checkBtnSaveOrder(false);
            }
        }
    },
    ajax_loader_hide : function(){
        jQuery("#ajax_loader").hide();
        jQuery('#btn_save_order').removeClass('disable').removeAttr('disabled');
        //jQuery('#btn_save_order').css({"background":"#ff4444"});
    },
    limit_address :  function(){
        alert("Bạn chỉ có thể tạo tối đa 10 địa chỉ nhận hàng!");
        return;
    },
    use_loyalty : function(all){
        var all = all || false;
        var gaTagManagerNameError= all==true? "Error - Use all Sen points" : "Error - Use Sen points"  ;
        var gaTagManagerNameSuccess= all==true? "Click - Use all Sen points" : "Click - Use Sen points" ;
        var senPoint=typeof $(".cur-sen-point b")!= undefined? parseInt($(".cur-sen-point b").html().replace(/,/g,"")):0;
        var senPointUse=typeof $("#loyalty_input")!= undefined? parseInt($("#loyalty_input").val().replace(/,/g,"")):0;
        var totalPrice=typeof $(".tt-in-order .fr")!= undefined? parseInt($(".tt-in-order .fr strong").html().replace(/,/g,"")):0;
        senPoint=senPoint>totalPrice? Math.floor(totalPrice/1000)*1000:senPoint;
        senPointUse=senPointUse>totalPrice? Math.floor(totalPrice/1000)*1000 :senPointUse;
        Checkout.ajax_loader_show(true,true);
        jQuery(".showerror_loyalty").html("");
        jQuery.ajax({
            url:CHECKOUT_DOMAIN + "checkout/onepage/useLoyalty/",
            data:jQuery("#checkout-loyalty-form").serialize() + "&use_all="+all,
            type :"POST",
            success: function(data){
                Checkout.ajax_loader_hide();
                if(!data.error){
                    Checkout.reviewLoad();
                    pushDataEventTrackingGATagManager('Buttons',gaTagManagerNameSuccess, 'Checkout form', senPointUse, false);
                }else if(data.error==1){
                    if(data.message != null){
                        jQuery(".showerror_loyalty").html(data.message);
                        jQuery(".cur-sen-point span b").html(data.loyalty_point);
                        jQuery(".h_sen_point span b").html(data.loyalty_point);
                        if(!cod){
                            checkBtnSaveOrder(false);
                        }
                        pushDataEventTrackingGATagManager('Errors - Checkout form',gaTagManagerNameError, data.message, -1, false);
                    }
                    
                }else if(data.error==2){
                    if(data.message != null){
                        jQuery(".showerror_loyalty").html(data.message);
                        if(all==true){
                            senPointUse=Math.floor(senPoint/1000)*1000;
                            pushDataEventTrackingGATagManager('Buttons',gaTagManagerNameSuccess, 'Checkout form', senPointUse, false);
                        }else{
                            senPointUse=Math.floor(senPointUse/1000)*1000;
                            pushDataEventTrackingGATagManager('Buttons',gaTagManagerNameSuccess, 'Checkout form', senPointUse, false);
                        }
                    }
                    if(data.data.point_loyalty_free){
                        jQuery(".loyalty-free").html(data.data.point_loyalty_free);
                        Checkout.reviewLoad();
                    }
                    jQuery(".cur-sen-point span b").html(data.loyalty_point);
                    jQuery(".h_sen_point span b").html(data.loyalty_point);
                }
                return true;
            },
            timeout: 30000,
            error: function(xhr, textStatus, errorThrown){
                jQuery(".showerror_loyalty").html('Đã có lỗi khi thực hiện. Vui lòng thử lại.').css('display','block');
                Checkout.ajax_loader_hide();
                pushDataEventTrackingGATagManager('Errors - Checkout form',gaTagManagerNameError, 'Đã có lỗi khi thực hiện. Vui lòng thử lại.', -1, false);
                return;
            }
        });
        return false;
    },
    remove_loyalty : function(){
        jQuery.ajax({
            url:CHECKOUT_DOMAIN + "checkout/onepage/removeLoyalty/",
            type :"POST",
            data: {"action":"remove_loyalty"},
            success: function(data){
                if(!data.error){
                    Checkout.reviewLoad();
                }
                return true;
            }
        });
        return false;
    },
    check_wallet : function(){
        Checkout.ajax_loader_show(true,true);
        jQuery("#check_wallet_senpay").html('<p class="grey">Vui lòng chờ trong giây lát...</p>');
        jQuery('.check_method_ecom_payment').hide();
        checkBtnSaveOrder(true);
        if(is_login == false){
            Checkout.ajax_loader_hide();
            jQuery(".check_wallet").html('<p class="red">Vui lòng đăng nhập để dùng ví Senpay.</p>');
            return false;
        }

        jQuery.ajax({
            url: CHECKOUT_DOMAIN + 'checkout/onepage/checkWallet/',
            cache: false,
            type:'POST',
            dataTypr:"json" ,
            success:function(data){
                //reload data
                Checkout.ajax_loader_hide();

                if(data.error == -1){
                    jQuery("#check_wallet_senpay").html('<p class="red">Bạn không thể thực hiện thanh toán Ví Senpay lúc này, vui lòng chọn hình thức thanh toán khác.</p>');
                    checkBtnSaveOrder(false);
                    return;
                }
                if(data.error == -2){//error & not login by fpt id
                    jQuery("#check_wallet_senpay").html('<a href="javascript:void(0);" onclick="login_modal_click(true,true);" style="color: red;text-decoration: underline;">Đăng nhập FPT ID</a>');
                    checkBtnSaveOrder(false);
                    return;
                }

                if(data.error == -3){//<= balance
                    jQuery("#check_wallet_senpay").html('<p class="grey">Bạn còn '+Checkout.addPeriod(parseInt(data.data))+' VNĐ trong tài khoản, số dư Ví Senpay không đủ thanh toán hoá đơn này.</p>');
                    Checkout.ajax_loader_show(false,true);
                    checkBtnSaveOrder(false);
                    return;
                }
                if(data.error == 0){//true
                    Checkout.reviewLoad("#block_order","checkout/onepage/reviewLoad/","#checkout-review-choose-supplier","false");
                    jQuery("#check_wallet_senpay").html('<p class="grey">Bạn còn '+Checkout.addPeriod(parseInt(data.data))+' VNĐ trong tài khoản.</p>');
                    checkBtnSaveOrder(false);
                    Checkout.payment_data = jQuery("#payment-method").serialize();
                    return;
                }

            },
            timeout: 10000,
            error: function(xhr, textStatus, errorThrown){
                Checkout.ajax_loader_hide();
                Checkout.ajax_loader_show(false,true);
                jQuery("#check_wallet_senpay").html('<p class="red">Bạn không thể thực hiện thanh toán Ví Senpay lúc này, vui lòng chọn hình thức thanh toán khác.</p>');
                return;
            }
        });

        return false;
    },
    addPeriod : function(nStr){
        nStr += '';
        x = nStr.split('.');
        x1 = x[0];
        x2 = x.length > 1 ? ',' + x[1] : '';
        var rgx = /(\d+)(\d{3})/;
        while (rgx.test(x1)) {
            x1 = x1.replace(rgx, '$1' + ',' + '$2');
        }
        return x1 + x2;
    },
    format_currency : function(evt, ctrl){
        if (evt.keyCode == 37 || evt.keyCode == 38 || evt.keyCode == 39 || evt.keyCode == 40){
            return;
        }
        var val = ctrl.value;

        val = val.replace(/,/g, "")
        ctrl.value = "";
        val += '';
        x = val.split('.');
        x1 = x[0];
        x2 = x.length > 1 ? '.' + x[1] : '';

        var rgx = /(\d+)(\d{3})/;

        while (rgx.test(x1)) {
            x1 = x1.replace(rgx, '$1' + '.' + '$2');
        }
        ctrl.value = x1 + x2;
    },
    check_telephone : function(e){
        var phone = jQuery(e);
        if(Checkout.validatePhone(phone.val())){
            Checkout.update_shipping();
        }

    },
    hide_modal: function(){
        /*
        jQuery(".modal-backdrop.fade.in").each(function(k,v){
            jQuery(v).hide()
        })*/
    }

}
function closeModalCart () {
    $(document).on('click','.modal-cart .close ,.modal-cart .choice_supplier_btn',function(){
        $('.modal-cart').modal('hide');
    });
    $(document).on('click','.modal-ship-for-cart .close',function(){
        $('.modal-ship-for-cart').modal('hide');
    });
   $(document).on('click','.modal-ship-for-cart .choice_supplier_btn',function(){
        $('.modal-ship-for-cart').modal('hide');
    });
}

jQuery(document).ready(function($) {
    closeModalCart ();
});

function pushTrackingBoughtView(arrPush, url) {
    if (arrPush.length > 0) {
        var fluentd_url = location.protocol + '//track.sendo.vn/';
        var strPush = 'json={' + arrPush.toString() + '}';
        jQuery.post(fluentd_url + url,
            strPush,
            function(data, textStatus, jqXHR)
            {
            }).fail(function(jqXHR, textStatus, errorThrown) {
            });
    }
}
function pushDataEventTrackingGATagManager(category, action, opt_label, opt_value, opt_noninteraction){
	_gaq.push(['_trackEvent', category, action, opt_label, opt_value, opt_noninteraction]);

    dataLayer.push({'eventCategory': category, 
       'eventAction': action, 
       'eventLabel': opt_label,
       'eventValue': opt_value,
       'eventNoninteraction': opt_noninteraction,
       'event': 'gaEvent'
   });
}