<template>
    <div id="clipartCategory">
        <div id="clipArtMenu" class="panel panel-info">
            <div id="clipArtCategories">
                <ol class="breadcrumb" id="breadcrumb" style="cursor:pointer; margin-bottom: 5px;">
                    <li class="active" id="li-start" v-on:click="startcategory()">Clip Art Categories</li>
                    <li id="li-categories" style="display: none;" v-on:click="startsubcategory()"></li>
                    <li id="li-subcategories" style="display: none;"></li>
                </ol>
            </div>                        
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search clipart by name" name="searchclipart" id="searchclipart" v-model="searchclipart" v-on:input="activefiltercliparts()">
                <div class="input-group-btn">
                <button class="btn btn-success" type="button"  style="background-color: #4fc1f0 !important;">
                    <i class="glyphicon glyphicon-search" style="color: white;"></i>
                </button>
                </div>
            </div>
            <div id="clipArtTable">
                <div id="div-clipartcategories" style="display:block">
                    <div class="row text-center">
                        <div class="col-xs-4" v-for="category in categories" :key="category.id" style="padding-top: 5px; height: 122px;">
                            <a href="javascript:void(0);" v-on:click="setcategory(category)">
                                <img v-bind:src=" path + '/img/clipart-embroidery/'+ category.slug + '/' + category.filename"  class="hover" style="padding: 1vw;">
                                <div class="caption">
                                    <p>{{category.title}}</p>
                                </div>
                            </a>
                        </div>
                    </div>                       
                </div>
                <div id="div-clipartsubcategories" style="display:none">
                    <div class="row text-center">
                        <div class="col-xs-4" v-for="subcategory in subcategories" :key="subcategory.id" style="padding-top: 5px; height: 122px;">
                            <a href="javascript:void(0);" v-on:click="setsubcategory(subcategory)">
                                <img v-bind:src=" path + '/img/clipart-embroidery/'+ subcategories.category + '/' + subcategory.slug + '/' + subcategory.filename"  class="hover" style="padding: 1vw;">
                                <div class="caption">
                                    <p>{{subcategory.title}}</p>
                                </div>
                            </a>
                        </div>
                    </div>                       
                </div>
                <div id="div-cliparts" style="display:none">
                    <div class="row text-center">
                        <div class="col-xs-4" v-for="clipart in cliparts" :key="clipart.id" style="float:left !important; padding-top: 5px; height: 122px;">
                            <a href="javascript:void(0);" v-on:click="addimg(clipart.id)">
                                <img v-bind:src=" path + '/img/clipart-embroidery/'+ cliparts.category + '/' + cliparts.subcategory + '/' + clipart.filename"  class="hover" style="padding: 1vw;">
                            </a>
                        </div>
                    </div>                       
                </div>
                <div id="div-filtercliparts" style="display:none">
                    <div class="row text-center">
                        <div class="col-xs-4" v-for="clipart in allcliparts" :key="clipart.id" style="float:left !important; padding-top: 5px; height: 122px;">
                            <a href="javascript:void(0);" v-on:click="addimg(clipart.id)">
                                <img v-bind:src=" path + '/img/clipart-embroidery/'+ clipart.category + '/' + clipart.subcategory + '/' + clipart.filename"  class="hover" style="padding: 1vw;">
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
            cliparts: [],
            allcliparts: [],
            category: '',
            subcategory: '',
            clipart: '',
            searchclipart:'',
            path: window.location.origin + '/vivid_test',
            urlcategories : window.location.origin + '/vivid_test/api/clipartcategoryembroidery',
            urlsubcategories : window.location.origin + '/vivid_test/api/clipartsubcategoryembroidery',
            urlcliparts : window.location.origin + '/vivid_test/api/clipartembroidery',
            urlallcliparts : window.location.origin + '/vivid_test/api/allclipartsembroidery',
        }
    },
    mounted(){
       // this.getCategories()
    },
    computed:{
        filteredCliparts: function(){  
            return this.cliparts.filter((clipart) =>{
                return clipart.title.toUpperCase().match(this.searchclipart.toUpperCase())
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
                document.getElementById('div-clipartcategories').style.display = 'block';
                document.getElementById('div-clipartsubcategories').style.display = 'none';
                document.getElementById('div-cliparts').style.display = 'none';
                document.getElementById('div-filtercliparts').style.display = 'none';
            });
        },
        getSubCategories: function(element)
        {
            let $this = this
            axios.get(this.urlsubcategories + "/" + element.id).then(response => {
                this.subcategories = response.data;
                this.subcategories.category = element.slug;
                this.category = element;
                 document.getElementById('div-clipartsubcategories').style.display = 'block';
                 document.getElementById('div-clipartcategories').style.display = 'none';
                 document.getElementById('div-cliparts').style.display = 'none';
                 document.getElementById('div-filtercliparts').style.display = 'none';
            });
        },
        getCliparts: function(element)
        {
            let $this = this
            axios.get(this.urlcliparts + "/" + this.category.id + "/" + element.id).then(response => {
                this.cliparts = response.data;
                this.cliparts.category = this.category.slug;
                this.cliparts.subcategory = element.slug;
                this.subcategory = element;
                 document.getElementById('div-clipartsubcategories').style.display = 'none';
                 document.getElementById('div-clipartcategories').style.display = 'none';
                 document.getElementById('div-cliparts').style.display = 'block';
                 document.getElementById('div-filtercliparts').style.display = 'none';
            });
        },
        setcategory(element)
        {
            this.category = element.slug;
            document.getElementById("li-categories").innerHTML = "";
            document.getElementById("li-categories").innerHTML = element.title;
            document.getElementById("li-categories").style.display = 'inline-block';
            document.getElementById("li-subcategories").style.display = 'none';
            
            this.getSubCategories(element);
        },
        setsubcategory(element)
        {
            this.subcategory = element.slug;
            document.getElementById("li-subcategories").innerHTML = "";
            document.getElementById("li-subcategories").innerHTML = element.title;
            document.getElementById("li-subcategories").style.display = 'inline-block';
            document.getElementById("li-subcategories").style.display = 'inline-block';
            this.getCliparts(element);
        },
        startcategory()
        {
            this.getCategories();
            document.getElementById("li-categories").innerHTML = "";
            document.getElementById("li-categories").style.display = 'inline-none';
            document.getElementById("li-subcategories").innerHTML = "";
            document.getElementById("li-subcategories").style.display = 'none';
        },
        startsubcategory()
        {
            this.getSubCategories(this.category);
            document.getElementById("li-categories").style.display = 'inline-block';
            document.getElementById("li-subcategories").innerHTML = "";
            document.getElementById("li-subcategories").style.display = 'none';
        },
        addimg(element)
        {
            addimg(element);
        },
        activefiltercliparts()
        {
            //console.log()
            if(document.getElementById('searchclipart').value != '')
            {
                document.getElementById('div-clipartcategories').style.display = 'none';
                document.getElementById('div-clipartsubcategories').style.display = 'none';
                document.getElementById('div-cliparts').style.display = 'none';
                document.getElementById('div-filtercliparts').style.display = 'block';
            }
            else
            {
                document.getElementById('div-clipartcategories').style.display = 'block';
                document.getElementById('div-clipartsubcategories').style.display = 'none';
                document.getElementById('div-cliparts').style.display = 'none';
                document.getElementById('div-filtercliparts').style.display = 'none';
            }
            
        }
    }
 }
 </script>