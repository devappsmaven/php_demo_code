<style>

* { margin: 0; padding: 0; }

#page-wrap {
  margin: auto 0;
}

.treeview {
  margin: 10px 0 0 20px;
}

ul { 
  list-style: none;
}

.treeview li {
  /*background: url(http://jquery.bassistance.de/treeview/images/treeview-default-line.gif) 0 0 no-repeat;*/
  padding: 2px 0 2px 16px;
}
.treeview > li:first-child > label {
  /* style for the root element - IE8 supports :first-child
  but not :last-child ..... */
  
}

.treeview li.last {
  background-position: 0 -1766px;
}

.treeview li > input {
  height: 16px;
  width: 16px;
  /* hide the inputs but keep them in the layout with events (use opacity) */
  opacity: 0;
  filter: alpha(opacity=0); /* internet explorer */ 
  -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(opacity=0)"; /*IE8*/
}

.treeview li > label {
  background: url(https://www.thecssninja.com/demo/css_custom-forms/gr_custom-inputs.png) 0 -1px no-repeat;
  /* move left to cover the original checkbox area */
  margin-left: -20px;
  /* pad the text to make room for image */
  padding-left: 20px;
}

/* Unchecked styles */

.treeview .custom-unchecked {
  background-position: 0 -1px;
}
.treeview .custom-unchecked:hover {
  background-position: 0 -21px;
}

/* Checked styles */

.treeview .custom-checked { 
  background-position: 0 -81px;
}
.treeview .custom-checked:hover { 
  background-position: 0 -101px; 
}

/* Indeterminate styles */

.treeview .custom-indeterminate { 
  background-position: 0 -141px; 
}
.treeview .custom-indeterminate:hover { 
  background-position: 0 -121px; 
}
</style>


<template>
    <!--<ul class="treeview">
        <li v-for="typepermission in typepermissions" :key="typepermission.type">
            <input type="checkbox">
            <label for="tall" class="custom-unchecked">{{typepermission.type}}</label>
            <ul v-for="permission in permissions" :key="permission.id">
                 <li v-show="typepermission.type==permission.type">
                     <input type="checkbox" name="permissions[]"  v-bind:value="permission.id">
                     <label for="tall-1" class="custom-unchecked">{{permission.name}}<em>{{permission.description}}</em></label>
                 </li>
            </ul>
        </li>
    </ul>-->
    <div id="treeview-checkbox-demo">
            <ul>
                <li v-for="typepermission in typepermissions" :key="typepermission.type">{{typepermission.type}}
                  <ul v-for="permission in permissions" :key="permission.id">
                    <li data-value="table" v-show="typepermission.type==permission.type" name="permissions[]"  v-bind:value="permission.id">{{permission.name}}<em>{{permission.description}}</em></li>
                        
                  </ul>
                </li>
            </ul>
        </div>
</template>



<script>
    export default {
        data() {
            return {
                permissions: [],
                typepermissions: [],
            };
        },
        created : function(){
            this.getPermissions();
            this.getTypePermissions();
        },
        methods:{
            getPermissions: function()
            {
               $.getJSON(window.location.origin + "/api/allpermissions", function(permissions)
               {   
                   //console.log(permissions);
                    this.permissions= permissions;
               }.bind(this));
            },
            getTypePermissions: function()
            {
               $.getJSON(window.location.origin + "/api/typepermissions", function(typepermissions)
               {
                   //console.log(typepermissions);
                   this.typepermissions= typepermissions;
               }.bind(this));
            }
        }
    };

  /*

    (function ($) {
    $.Logger = function( isDebugging, app ) {
        this.debug = {}
    
        if ( isDebugging ) {
            for ( var m in console ) {
                if ( typeof console[m] == 'function' ) {
                    this.debug[m] = console[m].bind(window.console, app.name + ":");
                }
            }
        }
        else {
            for ( var m in console ) {
                if ( typeof console[m] == 'function' ) {
                    this.debug[m] = function(){}
                }
            }
      }
      
      return this.debug
    }
})( jQuery );

(function( $ ){
    var plugin = {
        name: 'TreeView',
        version: '1.0.0'
    }
    var defaults = {
        debug : false,
        autoExpand : false,
        css : {
            list : 'fa-ul',
            listItem : 'fa-li fa',
            collapsed : 'fa-caret-right',
            expanded : 'fa-caret-down'
        }
    }
    
    var settings;
    var debug, me = null;
    
    function __changeHandler( e ) {
        var currentTarget = $(this);
        var isChecked = currentTarget.is(':checked');
        
        debug.log(currentTarget);
        debug.log("Checked ", isChecked)
        
        if (!isChecked) {
            debug.log('Uncheck all childs');
            
            currentTarget.parent()
                         .find('input.tw-control')
                         .prop('checked', false);
        }
        
        if (isChecked) {
            debug.log('Check my parents tree');
            
            currentTarget.parents('li')
                         .find('>input.tw-control')
                         .prop('checked', true);
        }
        
        _toggleCollapse( currentTarget );
        
        me.trigger('treeview.change', currentTarget, me);
    }
    
    function _toggleCollapse ( element ) {
        debug.log("Toggle collapse");
        
        var chk = $('input[type="checkbox"]:checked');
        
        if (chk.is(':checked')) {
            debug.log('Open checked branchs');
            chk.parent()
               .find('>ul.collapse')
               .collapse('show')
               .parent()
               .find('>i.fa-li')
               .removeClass(settings.css.collapsed)
               .addClass(settings.css.expanded);
        }
        
        if (!element.is(':checked')) {
            debug.log('Hide branch');
            
            element.parent()
                   .find('ul.collapse')
                   .collapse('hide')
                   .parent()
                   .find('i.fa-li')
                   .removeClass(settings.css.expanded)
                   .addClass(settings.css.collapsed);
        }
    }
    
    function _init() {
        debug.log( "Initializing plugin" );
        
        me.on('change', 'input.tw-control', __changeHandler);
        
        debug.log("Collapsing tree");
        
        
        me.find('>ul')
          .addClass(settings.css.list)
          .find('ul')
          .addClass('collapse ' +  settings.css.list)
          .parent()
          .prepend(
              $('<i></i>').addClass(settings.css.listItem + ' ' +
                                    settings.css.collapsed)
          );
          
        if (settings.autoExpand) {
            me.find('ul.collapse').collapse('show');
        }
        
        debug.log("Adding checkbox");
            
        me.find('li').each(function( index, element ) {
            var elmt = $(element);
            
            var chk = $('<input/>').prop('type', 'checkbox')
                                   .prop('class', 'tw-control')
                                   .prop('value', elmt.attr('data-value'));
            
            debug.log("Checking if the element is selected");
            
            var isChecked = elmt.attr('data-checked');
            
            elmt.prepend(chk);
            
            if ( isChecked ) {
                debug.log('Toggle checkbox');
                
                chk.prop('checked', true);
                
                chk.trigger('change');
            }
        });
    }
    
    function _fill( data ) {
        $( data ).each(function (index, element) {
            me.find('input[value="' + element + '"]')
              .prop('checked', true)
              .trigger('change');
        });
    }
    
    var publicMethods = {
        init : function( options ) {
            me = this;
            
            settings = $.extend( defaults, options );
            
            debug = $.Logger(settings.debug, plugin);
            
            _init();
            
            debug.log('Ready');
            
            _fill ( options.data );
            
            return this;
        },
        selectedValues: function() {
            debug.log("Getting selected values");
            
            var chk = me.find('input[type="checkbox"]:checked');
            var output = [];
            
            chk.each(function(index, item) {
                var item = $(item);
                
                if(typeof item.parent().attr('data-value') !== typeof undefined) {
                    output.push(item.attr('value'));
                }
            })
            
            return output;
        }
    }
    
    $.fn.treeview = function (options) {
        if ( publicMethods[options] ) {
            return publicMethods[ options ].apply( this, Array.prototype.slice.call( arguments, 1 ));
        } else if ( typeof options === 'object' || ! options ) {
            // Default to "init"
            return publicMethods.init.apply( this, arguments );
        } else {
            $.error( 'Method ' +  options  + ' does not exist on jQuery.treeview' );
        }
    }
    
}( jQuery ));

$('#treeview-checkbox-demo').treeview({
        debug : true,
        data : ['links', 'Do WHile loop']
    });
    $('#show-values').on('click', function(){ 
        $('#values').text(
            $('#treeview-checkbox-demo').treeview('selectedValues')
        );
    });*/
</script>
