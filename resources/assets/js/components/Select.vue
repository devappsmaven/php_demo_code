<template>
    <div class="row">
        <div class="col-sm-6 ">
            <div class="form-group">
                <label for="title">Category Name</label>
                <select class='form-control' v-model='category' @change='getSubCategories()' id="category_id" name="category_id">
                    <option value='0' >Select Category</option>
                    <option v-for="category in categories" :key="category.id" :value="category.id">{{ category.title }}</option>
                </select>
            </div>
        </div>
        <div class="col-sm-6 ">
            <div class="form-group">
                <label for="title">SubCategory Name</label>
                <select class='form-control' v-model='subcategory' id="subcategory_id" name="subcategory_id">
                    <option value='0' >Select State</option>
                    <option v-for='subcategory in subcategories' :key='subcategory.id' :value='subcategory.id'>{{ subcategory.title }}</option>
                </select>
            </div>
        </div>
    </div>
</template>
<script>
 export default {
    data() {
        return {
            category: 0,
            categories: [],
            subcategory: 0,
            subcategories: [],
        };
    },
    created : function(){
        this.getCategories();
    },
    methods:{
        getCategories: function()
        {
            $("#category_id").empty();
            $.getJSON(window.location.origin + "/vivid_test/api/clipartcategorylist", function(categories)
            {
                this.categories= categories;
            }.bind(this));
        },
        getSubCategories: function()
        {   
            var category_id =document.getElementById('category_id').value;
            $.getJSON(window.location.origin + "/vivid_test/api/clipartsubcategorylist/"+category_id, function(subcategories)
            {
                this.subcategories= subcategories;
            }.bind(this));
        }
    }
}
</script>