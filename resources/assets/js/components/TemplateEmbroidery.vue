<template>
    <div id="templateCategory">
        <div id="clipArtMenu" class="panel panel-info">
            <div id="clipArtCategories">
                <ol class="breadcrumb" id="breadcrumbtemplate" style="cursor:pointer; margin-bottom: 5px;">
                    <li class="active" id="li-starttemplate" v-on:click="startcategory()">Template Categories</li>
                    <li id="li-categoriestemplate" style="display: none;" v-on:click="startsubcategory()"></li>
                    <li id="li-subcategoriestemplate" style="display: none;"></li>
                </ol>
            </div>                        
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search template by name" name="searchtemplate" id="searchtemplate" v-model="searchtemplate" v-on:input="activefiltertemplates()">
                <div class="input-group-btn">
                <button class="btn btn-success" type="button"  style="background-color: #4fc1f0 !important;">
                    <i class="glyphicon glyphicon-search" style="color: white;"></i>
                </button>
                </div>
            </div>
            <div id="clipArtTable">
                <div id="div-templatecategories" style="display:block">
                    <div class="row text-center">
                        <div class="col-xs-4" v-for="category in categories" :key="category.id" style="padding-top: 5px; height: 122px;">
                            <a href="javascript:void(0);" v-on:click="setcategory(category)">
                                <img v-bind:src=" path + '/img/template-embroidery/'+ category.slug + '/' + category.filename"  class="hover" style="padding: 1vw;">
                                <div class="caption">
                                    <p>{{category.title}}</p>
                                </div>
                            </a>
                        </div>
                    </div>                       
                </div>
                <div id="div-templatesubcategories" style="display:none">
                    <div class="row text-center">
                        <div class="col-xs-4" v-for="subcategory in subcategories" :key="subcategory.id" style="padding-top: 5px; height: 122px;">
                            <a href="javascript:void(0);" v-on:click="setsubcategory(subcategory)">
                                <img v-bind:src=" path + '/img/template-embroidery/'+ subcategories.category + '/' + subcategory.slug + '/' + subcategory.filename"  class="hover" style="padding: 1vw;">
                                <div class="caption">
                                    <p>{{subcategory.title}}</p>
                                </div>
                            </a>
                        </div>
                    </div>                       
                </div>
                <div id="div-templates" style="display:none">
                    <div class="row text-center">
                        <div class="col-xs-4" v-for="template in templates" :key="template.id" style="float:left !important; padding-top: 5px; height: 122px;">
                            <a href="javascript:void(0);" v-on:click="addtemplate(template.id)">
                                <img v-bind:src=" path + '/img/template-embroidery/'+ templates.category + '/' + templates.subcategory + '/' + template.filename"  class="hover" style="padding: 1vw;">
                            </a>
                        </div>
                    </div>                       
                </div>
                <div id="div-filtertemplates" style="display:none">
                    <div class="row text-center">
                        <div class="col-xs-4" v-for="template in alltemplates" :key="template.id" style="float:left !important; padding-top: 5px; height: 122px;">
                            <a href="javascript:void(0);" v-on:click="addtemplate(template.id)">
                                <img v-bind:src=" path + '/img/template-embroidery/'+ template.category + '/' + template.subcategory + '/' + template.filename"  class="hover" style="padding: 1vw;">
                            </a>
                        </div>
                    </div>                       
                </div>
            </div>      
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            categories: [],
            subcategories: [],
            templates: [],
            alltemplates: [],
            category: '',
            subcategory: '',
            template: '',
            searchtemplate:'',
            path: window.location.origin + '/vivid_test',
            urlcategories : window.location.origin + '/vivid_test/api/templatecategoryembroidery',
            urlsubcategories : window.location.origin + '/vivid_test/api/templatesubcategoryembroidery',
            urltemplates : window.location.origin + '/vivid_test/api/templateembroidery',
            urlalltemplates : window.location.origin + '/vivid_test/api/alltemplatesembroidery',
        }
    },
    mounted(){
       // this.getCategories()
    },
    computed:{
        filteredCliparts: function(){  
            return this.templates.filter((template) =>{
                return template.title.toUpperCase().match(this.searchtemplate.toUpperCase())
            });
        },
    },
    created : function(){
        this.getCategories();
    },
    methods:{
        getCategories: function()
        {
            let $this = this
            axios.get(this.urlcategories).then(response => {
                this.categories = response.data;
                document.getElementById('div-templatecategories').style.display = 'block';
                document.getElementById('div-templatesubcategories').style.display = 'none';
                document.getElementById('div-templates').style.display = 'none';
                document.getElementById('div-filtertemplates').style.display = 'none';
            });
        },
        getSubCategories: function(element)
        {
            let $this = this
            axios.get(this.urlsubcategories + "/" + element.id).then(response => {
                this.subcategories = response.data;
                this.subcategories.category = element.slug;
                this.category = element;
                 document.getElementById('div-templatesubcategories').style.display = 'block';
                 document.getElementById('div-templatecategories').style.display = 'none';
                 document.getElementById('div-templates').style.display = 'none';
                 document.getElementById('div-filtertemplates').style.display = 'none';
            });
        },
        getCliparts: function(element)
        {
            let $this = this
            axios.get(this.urltemplates + "/" + this.category.id + "/" + element.id).then(response => {
                this.templates = response.data;
                this.templates.category = this.category.slug;
                this.templates.subcategory = element.slug;
                this.subcategory = element;
                 document.getElementById('div-templatesubcategories').style.display = 'none';
                 document.getElementById('div-templatecategories').style.display = 'none';
                 document.getElementById('div-templates').style.display = 'block';
                 document.getElementById('div-filtertemplates').style.display = 'none';
            });
        },
        setcategory(element)
        {
            this.category = element.slug;
            document.getElementById("li-categoriestemplate").innerHTML = "";
            document.getElementById("li-categoriestemplate").innerHTML = element.title;
            document.getElementById("li-categoriestemplate").style.display = 'inline-block';
            document.getElementById("li-subcategoriestemplate").style.display = 'none';            
            this.getSubCategories(element);
        },
        setsubcategory(element)
        {
            this.subcategory = element.slug;
            document.getElementById("li-subcategoriestemplate").innerHTML = "";
            document.getElementById("li-subcategoriestemplate").innerHTML = element.title;
            document.getElementById("li-subcategoriestemplate").style.display = 'inline-block';
            document.getElementById("li-subcategoriestemplate").style.display = 'inline-block';
            this.getCliparts(element);
        },
        startcategory()
        {
            this.getCategories();
            document.getElementById("li-categoriestemplate").innerHTML = "";
            document.getElementById("li-categoriestemplate").style.display = 'inline-none';
            document.getElementById("li-subcategoriestemplate").innerHTML = "";
            document.getElementById("li-subcategoriestemplate").style.display = 'none';
        },
        startsubcategory()
        {
            this.getSubCategories(this.category);
            document.getElementById("li-categoriestemplate").style.display = 'inline-block';
            document.getElementById("li-subcategoriestemplate").innerHTML = "";
            document.getElementById("li-subcategoriestemplate").style.display = 'none';
        },
        addtemplate(element)
        {
            addtemplate(element);
        },
        activefiltertemplates()
        {
            //console.log()
            if(document.getElementById('searchtemplate').value != '')
            {
                document.getElementById('div-templatecategories').style.display = 'none';
                document.getElementById('div-templatesubcategories').style.display = 'none';
                document.getElementById('div-templates').style.display = 'none';
                document.getElementById('div-filtertemplates').style.display = 'block';
            }
            else
            {
                document.getElementById('div-templatecategories').style.display = 'block';
                document.getElementById('div-templatesubcategories').style.display = 'none';
                document.getElementById('div-templates').style.display = 'none';
                document.getElementById('div-filtertemplates').style.display = 'none';
            }
            
        }
    }
 }
 </script>