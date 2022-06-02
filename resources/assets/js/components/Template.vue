<style>

</style>

<template>
    <div id="templateCategory">
        <div id="TemplateMenu" class="panel panel-info">
            <div id="TemplateCategories">
                <ol class="breadcrumb" id="breadcrumb" style="cursor:pointer; margin-bottom: 5px;">
                    <li class="active" id="li-start" v-on:click="resetcategory(); startcategory()">Template Categories</li>
                    <li id="li-template-categories" style="display: none;" v-on:click="resetsubcategory(); startsubcategory()"></li>
                    <li id="li-template-subcategories" style="display: none;"></li>
                </ol>
            </div>                        
            <div class="input-group"  style="margin-bottom: 30px;">
                <input type="text" class="form-control" placeholder="Search template by name" name="searchtemplate" id="searchtemplate" v-model="searchtemplate" v-on:input="activefiltertemplates()">
                <div class="input-group-btn">
                <button class="btn btn-success" type="button"  style="background-color: #4fc1f0 !important;">
                    <i class="glyphicon glyphicon-search" style="color: white;"></i>
                </button>
                </div>
            </div>
            <div id="TemplateTable">
                <div id="div-templatecategories" style="display:block">
                    <div class="row text-center">
                        <div class="col-xs-6" v-for="category in categories" :key="category.id" >
                            <a href="javascript:void(0);" v-on:click="resetcategory(); setcategory(category)">
                                <img v-bind:src=" path + '/public/img/category/' + category.filename"  class="hover2" v-bind:style="'padding: 1em; background-color:' + category.background">
                                <div class="caption">
                                    <p>{{category.name}}</p>
                                </div>
                            </a>
                        </div>
                        <infinite-loading @infinite="infiniteHandlerCategory" ref="infiniteLoadingCategory">
                            <span slot="no-more">
                            </span>
                        </infinite-loading>
                    </div>                       
                </div>
                <div id="div-templatesubcategories" style="display:none">
                    <div class="row text-center">
                        <div class="col-xs-6" v-for="subcategory in subcategories" :key="subcategory.id">
                            <a href="javascript:void(0);" v-on:click="resetsubcategory();setsubcategory(subcategory)">
                                <div class="caption" style="text-transform: uppercase; font-size: 1.2rem;">
                                    <p>{{subcategory.name}}</p>
                                </div>
                            </a>
                        </div>
                          <infinite-loading @infinite="infiniteHandlerSubCategory"  ref="infiniteLoadingSubCategory">
                            <span slot="no-more">
                            </span>
                          </infinite-loading>
                    </div>                       
                </div>
                <div id="div-templates" style="display:none">
                    <div class="row text-center">
                        <div class="col-xs-6" v-for="template in templates" :key="template.id">
                            <a href="javascript:void(0);" v-on:click="loadtemplatedesigns(template.title)">
                                <img v-bind:src=" path + '/public/designs/template/'+ templates.category + '/' + templates.subcategory + '/' + template.title + '_' + template.defaultside + '_preview.png'"  class="hover" v-bind:style="'background-color:'+template.background/*padding: 1em;*/">
                                <div class="caption">
                                    <p>{{template.displayname}}</p>
                                </div>
                            </a>
                        </div>
                          <infinite-loading @infinite="infiniteHandlerClipart"  ref="infiniteLoadingClipart">
                            <span slot="no-more">
                            </span>
                          </infinite-loading>
                    </div>                       
                </div>
                <div id="div-filtertemplates" style="display:none">
                    <div class="row text-center">
                        <div class="col-xs-6" v-for="template in alltemplates" :key="template.id">
                            <a href="javascript:void(0);" v-on:click="loadtemplatedesigns(template.title)">
                                <img v-bind:src=" path + '/public/designs/template/'+ templates.category + '/' + templates.subcategory + '/' + template.title + '_' + template.defaultside + '_preview.png'"  class="hover" v-bind:style="'background-color:'+template.background/*padding: 1em;*/">
                                <div class="caption">
                                    <p>{{template.displayname}}</p>
                                </div>
                            </a>
                        </div>
                          <infinite-loading @infinite="infiniteHandlerAllCliparts">
                            <span slot="no-more">
                            </span>
                          </infinite-loading>
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
            path: window.location.origin + '/vivid_test' ,
            urlcategories : window.location.origin + '/vivid_test/api/templatecategory',
            urlsubcategories : window.location.origin + '/vivid_test/api/templatesubcategory',
            urltemplates : window.location.origin + '/vivid_test/api/template',
            urlalltemplates : window.location.origin + '/vivid_test/api/alltemplates',
            /*pagecategory:2,
            pagesubcategory:2,
            pagetemplate:2,
            pagealltemplate:2,*/
        }
    },
    mounted(){
       // this.getCategories()
    },
    computed:{
        filteredCliparts: function(){  
            return this.templates.filter((template) =>{
                return template.dispayname.toUpperCase().match(this.searchtemplate.toUpperCase())
            });
        },
    },
    created : function(){
        this.initcategories();
    },
    methods:{
        getCategories: function()
        {
            /*let $this = this
            axios.get(this.urlcategories).then(response => {
                this.categories = response.data.data;
                document.getElementById('div-templatecategories').style.display = 'block';
                document.getElementById('div-templatesubcategories').style.display = 'none';
                document.getElementById('div-templates').style.display = 'none';
                document.getElementById('div-filtertemplates').style.display = 'none';
            });*/
            // this.$refs.infiniteLoading.reset();
            //this.$refs.infiniteLoading.$state().reset();
        },
        getSubCategories: function(element)
        {
            let $this = this
            axios.get(this.urlsubcategories + "/" + element.id).then(response => {
                this.subcategories = response.data.data;
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
                this.templates = response.data.data;
                this.templates.category = this.category.slug;
                this.templates.subcategory = element.slug;
                this.subcategory = element;
                 document.getElementById('div-templatesubcategories').style.display = 'none';
                 document.getElementById('div-templatecategories').style.display = 'none';
                 document.getElementById('div-templates').style.display = 'block';
                 document.getElementById('div-filtertemplates').style.display = 'none';
            });
        },
        resetcategory() {
           this.subcategories = [];
            this.$refs.infiniteLoadingSubCategory.stateChanger.reset(); 
        },
        resetsubcategory() {
            this.templates = [];
            this.$refs.infiniteLoadingClipart.stateChanger.reset(); 
        },
        getAllCliparts: function()
        {
           /* let $this = this
            axios.get(this.urlalltemplates).then(response => {
                this.alltemplates = response.data;
            });*/
        },
        setcategory(element)
        {  
            document.getElementById("li-template-categories").style.display = 'inline-block';
            document.getElementById("li-template-subcategories").innerHTML = "";
            document.getElementById("li-template-subcategories").style.display = 'none';
            this.category = element.slug;
            document.getElementById("li-template-categories").innerHTML = "";
            document.getElementById("li-template-categories").innerHTML = element.name;
            document.getElementById("li-template-categories").style.display = 'inline-block';
            document.getElementById("li-template-subcategories").style.display = 'none';
            
            this.getSubCategories(element);
        },
        setsubcategory(element)
        {
            this.subcategory = element.slug;
            document.getElementById("li-template-subcategories").innerHTML = "";
            document.getElementById("li-template-subcategories").innerHTML = element.name;
            document.getElementById("li-template-subcategories").style.display = 'inline-block';
            document.getElementById("li-template-subcategories").style.display = 'inline-block';
            this.getCliparts(element);
        },
        initcategories()
        {
            this.categories = [];
            let $this = this
            axios.get(this.urlcategories).then(response => {
                this.categories = response.data.data;
            });

            
            /*this.categories = [];
            axios.get(this.urlcategories, {
                params: {
                    page: this.categories.length / 9 + 1,
                },
            }).then(({ data }) => {
                if (data.data.length) 
                {
                    this.categories = this.categories.concat(data.data);
                    //if($state != undefined)
                    //{
                    //    $state.loaded();
                    //}
                    if (data.current_page === data.last_page) 
                    {
                        $state.complete();
                    }
                } 
                else 
                {
                    $state.complete();
                }
            });*/
        },
        startcategory()
        {
            
            document.getElementById("li-template-categories").innerHTML = "";
            document.getElementById("li-template-categories").style.display = 'inline-none';
            document.getElementById("li-template-subcategories").innerHTML = "";
            document.getElementById("li-template-subcategories").style.display = 'none';
            document.getElementById('div-templatesubcategories').style.display = 'none';
            document.getElementById('div-templatecategories').style.display = 'block';
            document.getElementById('div-templates').style.display = 'none';
            document.getElementById('div-filtertemplates').style.display = 'none';
        },
        startsubcategory()
        {
            
            document.getElementById("li-template-categories").style.display = 'inline-block';
            document.getElementById("li-template-subcategories").innerHTML = "";
            document.getElementById("li-template-subcategories").style.display = 'none';
            document.getElementById('div-templatesubcategories').style.display = 'block';
            document.getElementById('div-templatecategories').style.display = 'none';
            document.getElementById('div-templates').style.display = 'none';
            document.getElementById('div-filtertemplates').style.display = 'none';
        },
        loadtemplatedesigns(element)
        {
            loadtemplatedesigns(element);
        },
        activefiltertemplates()
        {
            /*if(document.getElementById('searchtemplate').value != '')
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
            }*/
        },
        infiniteHandlerCategory($state) {
            axios.get(this.urlcategories, {
                params: {
                    page: 2,
                },
            }).then(({ data }) => {
                if (data.data.length) 
                {
                    this.categories = this.categories.concat(data.data);
                    $state.loaded();
                    if (data.current_page === data.last_page) 
                    {
                        $state.complete();
                    }
                } 
                else 
                {
                    $state.complete();
                }
            });
        },
        infiniteHandlerSubCategory($state) {
            console.log(this);
            axios.get(this.urlsubcategories + "/" + this.subcategory.id, {
                params: {
                page: this.subcategories.length / 9 + 1,
                },
            }).then(({ data }) => {
                if (data.data.length) 
                {
                    this.subcategories = this.subcategories.concat(data.data);
                     this.subcategories.category = this.category.slug;
                    $state.loaded();
                    if (data.current_page === data.last_page) 
                    {
                        $state.complete();
                    }
                } 
                else 
                {
                    $state.complete();
                }
            });
        },
        infiniteHandlerClipart($state) {
            console.log(this.urltemplates + "/" + this.category.id + "/" + this.subcategory.id);
            axios.get(this.urltemplates + "/" + this.category.id + "/" + this.subcategory.id, {
                params: {
                page: (this.templates.length / 9 + 1) > 1 ? (this.templates.length / 9 + 1) : 1,
                },
            }).then(({ data }) => {
                if (data.data.length) 
                {
                    this.templates = this.templates.concat(data.data);
                    this.templates.category = this.category.slug;
                    this.templates.subcategory = this.subcategory.slug;
                    $state.loaded();
                    if (data.current_page === data.last_page) 
                    {
                        $state.complete();
                    }
                } 
                else 
                {
                    $state.complete();
                }
            });
        },
        infiniteHandlerAllCliparts($state) {
            let vm = this;
            this.$http.get(this.urltemplates + '?page='+ this.pagealltemplate).then(response => {
                    return response.json();
                }).then(data => {
                    $.each(data.data, function(key, value) {
                        vm.alltemplates.push(value);
                    });
                    $state.loaded();
                });

            this.pagealltemplate = this.pagealltemplate + 1;
        },

    }
 }
 </script>