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
    <ul class="treeview">
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
    </ul>
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
               $.getJSON(window.location.origin + "/vivid_test/api/allpermissions", function(permissions)
               {   
                   //console.log(permissions);
                    this.permissions= permissions;
               }.bind(this));
            },
            getTypePermissions: function()
            {
               $.getJSON(window.location.origin + "/vivid_test/api/typepermissions", function(typepermissions)
               {
                   //console.log(typepermissions);
                   this.typepermissions= typepermissions;
               }.bind(this));
            }
        }
    };

$(function() {

  $('input[type="checkbox"]').change(checkboxChanged);

  function checkboxChanged() {
    var $this = $(this),
        checked = $this.prop("checked"),
        container = $this.parent(),
        siblings = container.siblings();

    container.find('input[type="checkbox"]')
    .prop({
        indeterminate: false,
        checked: checked
    })
    .siblings('label')
    .removeClass('custom-checked custom-unchecked custom-indeterminate')
    .addClass(checked ? 'custom-checked' : 'custom-unchecked');

    checkSiblings(container, checked);
  }

  function checkSiblings($el, checked) {
    var parent = $el.parent().parent(),
        all = true,
        indeterminate = false;

    $el.siblings().each(function() {
      return all = ($(this).children('input[type="checkbox"]').prop("checked") === checked);
    });

    if (all && checked) {
      parent.children('input[type="checkbox"]')
      .prop({
          indeterminate: false,
          checked: checked
      })
      .siblings('label')
      .removeClass('custom-checked custom-unchecked custom-indeterminate')
      .addClass(checked ? 'custom-checked' : 'custom-unchecked');

      checkSiblings(parent, checked);
    } 
    else if (all && !checked) {
      indeterminate = parent.find('input[type="checkbox"]:checked').length > 0;

      parent.children('input[type="checkbox"]')
      .prop("checked", checked)
      .prop("indeterminate", indeterminate)
      .siblings('label')
      .removeClass('custom-checked custom-unchecked custom-indeterminate')
      .addClass(indeterminate ? 'custom-indeterminate' : (checked ? 'custom-checked' : 'custom-unchecked'));

      checkSiblings(parent, checked);
    } 
    else {
      $el.parents("li").children('input[type="checkbox"]')
      .prop({
          indeterminate: true,
          checked: false
      })
      .siblings('label')
      .removeClass('custom-checked custom-unchecked custom-indeterminate')
      .addClass('custom-indeterminate');
    }
  }
});
</script>
