/**
 * call appAjax function after any profile tab click.
 * new dom rendered in page by ajax on every click and need to run all js functionality for new elements.
 */
function appAjax() {
    $(document).on('blur keyup', '.phonenumber-check,#zip-code', function() {
		this.value=this.value.replace(/[^\d]/,'');
	});
    //hide hints messages
    $('.emailcheck, .phonenumber-check').siblings('.hint').hide();
    $('.email_invalid_hint').hide();
    $('[data-toggle="tooltip"]').tooltip();

    // profile edit pic trigger
    $(".pro-img-edit").on('click', function() {
        $(".profile-image").trigger("click");
    });
    $('.profile-image').on('change', function() {
        var type = ['image/jpeg', 'image/jpg', 'image/png'];
        var input = document.getElementById('profile-image').files[0];
        if (type.indexOf(input.type) != -1) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('.nb-thumbnail-circle').css({
                    'background': 'url("' + e.target.result + '")',
                    'background-size': 'cover'
                });
                $('div.avatar').css({
                    'background-image': 'url("' + e.target.result + '")',
                });
            };

            $('div.pic_profile').css('background-image','');
            reader.readAsDataURL(input);
        }
    });

    // addClass check for radio parent
    $('.radio-input').each(function() {
        if ($(this).is(':checked')) {
            $(this).parent().addClass('checked');
        }
    });

    //-----------------    data-star-rate ------------
    $('.datasr').each(function () {
        var StarRate = $(this).data('star-rate');
        var StarRateResult = Math.round(StarRate);
        StarRateResult = 5 - StarRateResult;
        $(this).find('.icon').slice(0, StarRateResult).addClass('gray-star');
        // $(this).css({'width':rateResult+'%'});
        // $(this).parents('.prog-bar').siblings().find('.data-current-rate').append(currentRate);
    })

    //reg number ckecker
    function number_checker(nc) {
        $(nc).keyup(function(e) {
            this.value = this.value.replace(/[^0-9\.]/g, '');
        });
    }
    number_checker('.wal-ch');
    number_checker('#national-code');
    number_checker('#phone');

    // afzayesh mojudi
    var pay_input = $('.pay-key').find('input');
    var pay_button = $('.pay-key').find('button');
    pay_input.keyup(function(e) {
        if ($(pay_input).val().length < 4) {
            $('.bank-checker').hide();
        }

        if (!(e.keyCode >= 48 && e.keyCode <= 57) || !(e.keyCode >= 96 && e.keyCode <= 105)) {
            e.preventDefault();
        }//prevent farsi number

    });

    $('.bag .collapse-group button.btn').on('click', function(e) {
        e.preventDefault();
        var $this = $(this);
        var $collapse = $this.closest('.collapse-group').find('.collapse');
        if ($(pay_input).val().length > 3) {
            $('.bank-checker').show();
        } else {
            $('.bank-checker').hide();
        }
    });

    // social_login window
    $('.social-btn').on('click', function() {
        var url = $(this).data('url');
        newwindow = window.open(url, 'name', 'height=400,width=600');
        if (window.focus) {
            newwindow.focus()
        }
        return false;
    });

    // // email validation Pattern
    // var validateEmail = function(elementValue) {
    //     var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    //     return emailPattern.test(elementValue);
    // };
    // //mobile number validation pattern

    // var validatePhonenumber = function(phonevalue) {
    //     var phonenumberpattern = /(0|\+98)?([ ]|-|[()]){0,2}9[1|2|3|4]([ ]|-|[()]){0,2}(?:[0-9]([ ]|-|[()]){0,2}){8}/ig;
    //     return phonenumberpattern.test(phonevalue);
    // };

    // // form validation
    // $('.emailcheck').siblings('.hint').html(msg.email_valid)
    // $('.phonenumber-check').siblings('.hint').html(msg.phonenumber_valid)
    // $('.emailcheck').blur(function() {
    //     var value = $(this).val();
    //     var valid = validateEmail(value);
    //     if (!valid) {
    //         $(this).addClass('red');
    //         $(this).siblings('.hint').show();
    //         return false;
    //     } else {
    //         $(this).removeClass('red');
    //         $(this).siblings('.hint').hide();
    //     }
    // });
    // $('.phonenumber-check').blur(function() {
    //     var value = $(this).val();
    //     var valid = validatePhonenumber(value);
    //     if (!valid) {
    //         $(this).addClass('red');
    //         $(this).siblings('.hint').show();
    //         return false;
    //     } else {
    //         $(this).removeClass('red');
    //         $(this).siblings('.hint').hide();
    //     }
    // });
    // $('.emailcheck , .phonenumber-check').keyup(function() {
    //     $('.emailcheck').siblings('.hint').html(msg.email_valid)
    //     $('.phonenumber-check').siblings('.hint').html(msg.phonenumber_valid)
    //     var value = $(this).val();
    //     var valid = validateEmail(value);
    //     if (!valid) {
    //         $(this).addClass('red');
    //         $(this).siblings('.hint').show();
    //     } else {
    //         $(this).removeClass('red');
    //         $(this).siblings('.hint').hide();
    //     }
    // });

    // //form submit check notempty
    // $("button[type='submit']").click(function() {
    //     var isFormValid = true;
    //     // alert('asdasd');
    //     // console.log($(this).closest('form').find(".required-input").length);
    //     $(this).closest('form').find(".required-input").each(function() {
    //         if ($.trim($(this).val()).length == 0) {
    //             $(this).siblings('.hint').html(msg.required_input)
    //             // console.log('empty')
    //             isFormValid = false;
    //             $(this).addClass('red');
    //             $(this).siblings('.hint').show();
    //             $('.required-input').keyup(function() {
    //                 if ($.trim(!$(this).val()).length >= 1) {
    //                     $(this).removeClass('red');
    //                     $(this).siblings('.hint').hide();
    //                 }
    //             });
    //         } else {
    //             // console.log('')
    //         }
    //     });
    //     return isFormValid;
    // });

    //confirm password validation
    // $('.password_validation, .password_confirm').on('keyup', function () {
    //     $(this).siblings('.hint').html(msg.pass_verify)
    //     if ($('.password_validation').val() == $('.password_confirm').val()) {
    //         $(this).removeClass('red');
    //         $(this).siblings('.hint').hide();
    //     } else
    //         $(this).addClass('red');
    //     $(this).siblings('.hint').show();
    // });

    //alert show
    function alertPrompt(data) {
        var alert_class = 'danger';
        if (data.status) {
            alert_class = 'success';
        }
        var alert_text = data.text;
        var alert_element = '<div class="nb-alert nb-alert-' + alert_class + '">' + alert_text + '</div>';
        if ($(".modal-dialog").prepend(alert_element)) {
            return true;
        }
        return false;
    }

    //dismiss modal alert
    $('[data-dismiss="modal"],[data-toggle="modal"]').click(function() {
        $('.modal .nb-alert').remove();
    });

    // netbarg.labelAnimate ();
    $('.ajaxform').submit(function(e) {
        var postData = {};
        postData.data = $(this).serialize();
        var formURL = $(this).attr("action");
        $.ajax({
            url: 'test.php',
            type: "POST",
            data: postData,
            success: function(data, textStatus, jqXHR) {
                //data: return data from server
                console.log('success');
            },
            error: function(jqXHR, textStatus, errorThrown) {
                //if fails
                console.log('asdasd');
            }
        });
        e.preventDefault(); //STOP default action
    });

    // toggle hidden number in (my netbarg) table responsive .
    if ($('#accordion .panel-collapse')[0]) {
        $('#accordion .panel-collapse').each(function() {
            var w = $(this);
            var mc = w.find('.morecode').length;
            if (mc > 3) {
                w.find(".morecode:not(:first)").css('display', 'none');
                $('<tr class="mobile-toggle-moreCode"><td colspan="4"><i class="icon icon-arrow-down open-meRe"></i></td></tr>').insertAfter(w.find('.morecode:last'));
            }

        });

        $(document).on('click', '.open-meRe', function() {
            var openicon = $(this);
            var w = $(this).parents('.panel-collapse');
            if (!openicon.hasClass('open')) {
                w.find('.morecode').css('display', ' table-row');
                openicon.addClass('open');
            } else {
                w.find(".morecode:not(:first)").css('display', 'none');
                openicon.removeClass('open');
            }
        });
    }


    netbarg.fn.labelAnimate();
    netbarg.fn.moreCode();
}