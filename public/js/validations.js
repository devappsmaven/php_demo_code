// Form Validation
$(".reserved_word_form").validate({
    rules:{
        name:{
            required:true
        },
        status:{
            required:true,
        }
    },
    errorClass: "help-block",
    errorElement: "span",
    highlight:function(element, errorClass, validClass) {
        $(element).parents('.form-group').addClass('has-error');
        $(element).parents('.form-group').children('.glyphicon-ok').css( "display", "none" );
        $(element).parents('.form-group').children('.glyphicon-remove').css( "display", "block" );
    },
    unhighlight: function(element, errorClass, validClass) {
        $(element).parents('.form-group').removeClass('has-error');
        $(element).parents('.form-group').addClass('has-success');
        $(element).parents('.form-group').children('.glyphicon-ok').css( "display", "block" );
        $(element).parents('.form-group').children('.glyphicon-remove').css( "display", "none" );
        $(element).parents('.form-group').children('.invalid-feedback').css( "display", "none" );
    }
});

$(".products_form").validate({
    rules:{
        stylenumber:{
            required:true
        },
        fabric:{
            required:true
        },
        name:{
            required:true
        },
        price:{
            required:true,
            number:true
        },
        visibility:{
            required:true
        },
        image:{
            required:true
        },
        brand:{
            required:true
        },
        description:{
            required:true
        },
        status:{
            required:true,
        },
        'sizes[]':{
            required:true,
        },
        'categories[]':{
            required:true,
        }
    },
    errorClass: "help-block",
    errorElement: "span",
    highlight:function(element, errorClass, validClass) {
        $(element).parents('.form-group').addClass('has-error');
        $(element).parents('.form-group').children().children('.glyphicon-ok').css( "display", "none" );
        $(element).parents('.form-group').children().children('.glyphicon-remove').css( "display", "block" );
    },
    unhighlight: function(element, errorClass, validClass) {
        $(element).parents('.form-group').removeClass('has-error');
        $(element).parents('.form-group').addClass('has-success');
        $(element).parents('.form-group').children().children('.glyphicon-ok').css( "display", "block" );
        $(element).parents('.form-group').children().children('.glyphicon-remove').css( "display", "none" );
        $(element).parents('.form-group').children().children('.invalid-feedback').css( "display", "none" );
    }
});


$(".users_form").validate({
    rules:{
        firstname:{
            required:true
        },
        lastname:{
            required:true
        },
        /*birthday:{
            required:true
        },*/
        username:{
            required:true,
        },
        password:{
            required:true
        },
        password_confirmation:{
            required:true
        },
        email:{
            required:true,
            email:true
        },
        /*'roles[]':{
            required:true,
        }*/
    },
    errorClass: "help-block",
    errorElement: "span",
    highlight:function(element, errorClass, validClass) {
        $(element).parents('.form-group').addClass('has-error');
        $(element).parents('.form-group').children().children('.glyphicon-ok').css( "display", "none" );
        $(element).parents('.form-group').children().children('.glyphicon-remove').css( "display", "block" );
    },
    unhighlight: function(element, errorClass, validClass) {
        $(element).parents('.form-group').removeClass('has-error');
        $(element).parents('.form-group').addClass('has-success');
        $(element).parents('.form-group').children().children('.glyphicon-ok').css( "display", "block" );
        $(element).parents('.form-group').children().children('.glyphicon-remove').css( "display", "none" );
        $(element).parents('.form-group').children().children('.invalid-feedback').css( "display", "none" );
    }
});

$(".roles_form").validate({
    rules:{
        name:{
            required:true
        },
        slug:{
            required:true
        },
        description:{
            required:true
        },
        username:{
            required:true,
        },
        special:{
            required:true
        },
        'permissions[]':{
            required:true,
        }
    },
    errorClass: "help-block",
    errorElement: "span",
    highlight:function(element, errorClass, validClass) {
        $(element).parents('.form-group').addClass('has-error');
        $(element).parents('.form-group').children('.glyphicon-ok').css( "display", "none" );
        $(element).parents('.form-group').children('.glyphicon-remove').css( "display", "block" );
    },
    unhighlight: function(element, errorClass, validClass) {
        $(element).parents('.form-group').removeClass('has-error');
        $(element).parents('.form-group').addClass('has-success');
        $(element).parents('.form-group').children('.glyphicon-ok').css( "display", "block" );
        $(element).parents('.form-group').children('.glyphicon-remove').css( "display", "none" );
        $(element).parents('.form-group').children('.invalid-feedback').css( "display", "none" );
    }
});


$(".colors_form").validate({
    rules:{
        order:{
            required:true
        },
        name:{
            required:true
        },
        status:{
            required:true,
        },
    },
    errorClass: "help-block",
    errorElement: "span",
    highlight:function(element, errorClass, validClass) {
        $(element).parents('.form-group').addClass('has-error');
        $(element).parents('.form-group').children().children('.glyphicon-ok').css( "display", "none" );
        $(element).parents('.form-group').children().children('.glyphicon-remove').css( "display", "block" );
    },
    unhighlight: function(element, errorClass, validClass) {
        $(element).parents('.form-group').removeClass('has-error');
        $(element).parents('.form-group').addClass('has-success');
        $(element).parents('.form-group').children().children('.glyphicon-ok').css( "display", "block" );
        $(element).parents('.form-group').children().children('.glyphicon-remove').css( "display", "none" );
        $(element).parents('.form-group').children().children('.invalid-feedback').css( "display", "none" );
    }
});


$(".shirt_price_table_form").validate({
    rules:{
        _1_Color_Price:{
            required:true
        },
        _2_Color_Price:{
            required:true,
        },
        _3_Color_Price:{
            required:true
        },
        _4_Color_Price:{
            required:true,
        },
        _5_Color_Price:{
            required:true
        },
        _6_Color_Price:{
            required:true,
        },
        _7_Color_Price:{
            required:true
        },
        _8_Color_Price:{
            required:true,
        }
    },
    errorClass: "help-block",
    errorElement: "span",
    highlight:function(element, errorClass, validClass) {
        $(element).parents('.form-group').addClass('has-error');
        $(element).parents('.form-group').children('.glyphicon-ok').css( "display", "none" );
        $(element).parents('.form-group').children('.glyphicon-remove').css( "display", "block" );
    },
    unhighlight: function(element, errorClass, validClass) {
        $(element).parents('.form-group').removeClass('has-error');
        $(element).parents('.form-group').addClass('has-success');
        $(element).parents('.form-group').children('.glyphicon-ok').css( "display", "block" );
        $(element).parents('.form-group').children('.glyphicon-remove').css( "display", "none" );
        $(element).parents('.form-group').children('.invalid-feedback').css( "display", "none" );
    }
});