
window._ = require('lodash');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

try {
    window.$ = window.jQuery = require('jquery');

    //require('bootstrap-sass');
    require('admin-lte/bower_components/jquery/dist/jquery');
    require('admin-lte/bower_components/jquery-ui/jquery-ui');
    require('admin-lte/bower_components/bootstrap/dist/js/bootstrap');
    require('admin-lte/bower_components/select2/dist/js/select2.full');
    require('admin-lte/plugins/input-mask/jquery.inputmask');
    require('admin-lte/plugins/input-mask/jquery.inputmask.date.extensions');
    require('admin-lte/plugins/input-mask/jquery.inputmask.extensions');
    require('admin-lte/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker');
    require('admin-lte/bower_components/moment/moment');
    require('admin-lte/bower_components/raphael/raphael');
    require('admin-lte/bower_components/morris.js/morris');
    require('admin-lte/bower_components/jquery-sparkline/dist/jquery.sparkline');
    require('admin-lte/bower_components/datatables.net/js/jquery.dataTables');
    require('admin-lte/bower_components/datatables.net-bs/js/dataTables.bootstrap');
    //require('admin-lte/plugins/jvectormap/jquery-jvectormap-usa-en');
    //require('admin-lte/plugins/jvectormap/jquery-jvectormap-world-mill-en');
    require('admin-lte/bower_components/jquery-knob/js/jquery.knob');
    require('admin-lte/bower_components/bootstrap-daterangepicker/daterangepicker');
    require('admin-lte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker');
    require('admin-lte/bower_components/jquery-slimscroll/jquery.slimscroll');
    require('admin-lte/bower_components/fastclick/lib/fastclick');
    require('admin-lte/plugins/iCheck/icheck');
    require('admin-lte/dist/js/adminlte');
    require('admin-lte/dist/js/demo');
    require('admin-lte/plugins/bootstrap-slider/bootstrap-slider.js');
    
} catch (e) {}

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Next we will register the CSRF Token as a common header with Axios so that
 * all outgoing HTTP requests automatically have it attached. This is just
 * a simple convenience so we don't have to attach every token manually.
 */

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo'

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: 'your-pusher-key',
//     cluster: 'mt1',
//     encrypted: true
// });
