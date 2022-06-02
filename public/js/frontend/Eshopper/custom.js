$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

window.onload = function() 
{ 
    
    var today = new Date();
    $("#freeshippingindex").html(dateformat(getDeliveryDateObj(today,9)));
    var today = new Date();
    $("#rushdelivery").html(dateformat(getDeliveryDateObj(today,5)));
}

 if (window.location.href.includes('contact-us')) 
 {
    refreshcaptcha();
 }

 function refreshcaptcha()
 {
    $.ajax({
        type:'GET',
        dataType: 'json',
        url: '/refreshcaptcha',
        success:function(data)
        {
            document.getElementById("image-captcha").src = '';
            document.getElementById("image-captcha").src = '/img/captcha/' + data.image;
        }
    });  
 }

function display_child_product_image(url_imag,url_designstudio )
{
    document.getElementById('zoom_03').src = url_imag;
    //$(".zoomLens").css("background-image", "url('"+url_imag+"')");
    document.getElementById('go_designstudio').href = url_designstudio;
}

if(document.getElementById('birthday') != undefined )
{   
    var cleave = new Cleave('.input-date', {
        date: true,
        delimiter: '/',
        datePattern: ['m','d','Y']
    });
}

if(document.getElementById('phone') != undefined )
{   
    var cleavePhone = new Cleave('.input-phone', {
        phone: true,
        phoneRegionCode: 'US',
        delimiter: '-'
    });
}


    /*var cleaveCreditCard = new Cleave('.input-credit-card', {
        creditCard: true
    });
    
    var cleavePhone = new Cleave('.input-phone', {
        phone: true,
        phoneRegionCode: 'US',
        delimiter: '-'
    });
   
    
    var cleave = new Cleave('.input-month', {
        date: true,
        datePattern: ['m']
    });
    
    var cleave = new Cleave('.input-year', {
        date: true,
        datePattern: ['y']
    });*/


    const navExpand = [].slice.call(document.querySelectorAll('.nav-expand'))
const backLink = `<li class="nav-item">
	<a class="nav-link nav-back-link" href="javascript:;">
		Back
	</a>
</li>`

navExpand.forEach(item => {
	item.querySelector('.nav-expand-content').insertAdjacentHTML('afterbegin', backLink)
	item.querySelector('.nav-link').addEventListener('click', () => item.classList.add('active'))
	item.querySelector('.nav-back-link').addEventListener('click', () => item.classList.remove('active'))
})


// ---------------------------------------
// not-so-important stuff starts here

const ham = document.getElementById('ham')
ham.addEventListener('click', function() {
	document.body.classList.toggle('nav-is-toggled')
})
