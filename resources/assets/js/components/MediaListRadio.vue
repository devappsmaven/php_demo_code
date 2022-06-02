<style>
.c-sliding-pagination__list{
    display:inline-block;
    padding-left:0;
    margin:20px 0;
    border-radius:4px
}
.c-sliding-pagination__list>li{
    display:inline
}
.c-sliding-pagination__list>li>a,.pagination>li>span{
    position:relative;
    float:left;
    padding:6px 12px;
    margin-left:-1px;
    line-height:1.42857143;
    color:#337ab7;
    text-decoration:none;
    background-color:#fff;
    border:1px solid #ddd
}
.c-sliding-pagination__list>li:first-child>a,.pagination>li:first-child>span{
    margin-left:0;
    border-top-left-radius:4px;
    border-bottom-left-radius:4px
}
.c-sliding-pagination__list>li:last-child>a,.pagination>li:last-child>span{
    border-top-right-radius:4px;
    border-bottom-right-radius:4px
}
.c-sliding-pagination__list>li>a:focus,.pagination>li>a:hover,.pagination>li>span:focus,.pagination>li>span:hover{
    z-index:3;
    color:#23527c;
    background-color:#eee;
    border-color:#ddd
}
.c-sliding-pagination__list>.active>a,.pagination>.active>a:focus,.pagination>.active>a:hover,.pagination>.active>span,.pagination>.active>span:focus,.pagination>.active>span:hover{
    z-index:2;
    color:#fff;
    cursor:default;
    background-color:#337ab7;
    border-color:#337ab7
}
.c-sliding-pagination__list>.disabled>a,.pagination>.disabled>a:focus,.pagination>.disabled>a:hover,.pagination>.disabled>span,.pagination>.disabled>span:focus,.pagination>.disabled>span:hover{
    color:#777;
    cursor:not-allowed;
    background-color:#fff;
    border-color:#ddd
}
.c-sliding-pagination__list-lg>li>a,.pagination-lg>li>span{
    padding:10px 16px;
    font-size:18px;
    line-height:1.3333333
}
.c-sliding-pagination__list-lg>li:first-child>a,.pagination-lg>li:first-child>span{
    border-top-left-radius:6px;
    border-bottom-left-radius:6px
}
.c-sliding-pagination__list-lg>li:last-child>a,.pagination-lg>li:last-child>span{
    border-top-right-radius:6px;
    border-bottom-right-radius:6px
}
.c-sliding-pagination__list-sm>li>a,.pagination-sm>li>span{
    padding:5px 10px;
    font-size:12px;
    line-height:1.5
}
.c-sliding-pagination__list-sm>li:first-child>a,.pagination-sm>li:first-child>span{
    border-top-left-radius:3px;
    border-bottom-left-radius:3px
}
.c-sliding-pagination__list-sm>li:last-child>a,.pagination-sm>li:last-child>span{
    border-top-right-radius:3px;
    border-bottom-right-radius:3px
}

</style>

<template>
    <div style="display: inline-block; vertical-align: top;" class="row">
        <div class="col-sm-1" v-for="media in medias.data" :key="media.id" v-bind:style="'width: 120px; height: 120px; position: relative; display: inline-block;'">
             <label>
                <input type="radio" v-bind:name="slug + 'media'" class="radio-image" v-bind:value=" path + '/img/' + media.url + '/' + media.file" v-on:change="previewmedia($event.target);">
                <img class="img-responsive"   v-lazy=" path + '/img/' + media.url + '/' + media.file" style="width:100px; max-width:100px; max-height: 100px;" />
            </label>
        </div>
        <br>
        <center><sliding-pagination :current="medias.current_page" :total="medias.last_page" @page-change="pageChangeHandler"></sliding-pagination></center>
        <!--<infinite-loading @infinite="infiniteHandlerCategory">
            <span slot="no-more">
            </span>
        </infinite-loading>-->
    </div>
</template>

<script>

import VueLazyload from 'vue-lazyload'
import SlidingPagination from 'vue-sliding-pagination'
//Vue.use(VueLazyload)
Vue.use(VueLazyload, {
  preLoad: 1.3,
  error: 'dist/error.png',
  loading: window.location.origin + '/vivid_test/img/others/loading.gif',
  attempt: 1,
  // set observer to true
  observer: true,
})
export default {
    props: ['slug'],
    // in component or vue instance
    components: {
      // ...
      SlidingPagination
    },
    data() {
        return {
            currentPage: 1,
            medias: {data:[], current_page: 1, last_page: 1},
            media:'',
            path: window.location.origin + '/vivid_test' ,
            urlmedia : window.location.origin + '/vivid_test/api/media?page='
        }
    },
    created : function(){
        //this.getMedias();
        this. getResults();
    },
    methods:{
        getMedias: function()
        {
            let $this = this

            axios.get(this.urlmedia).then(response => {

                this.medias = response.data.data;//.data;
            });
        },
        pageChangeHandler(selectedPage) {
          this.currentPage = selectedPage
          this.getResults(selectedPage)
        },
        getResults(page) {
            if (typeof page === 'undefined') {
                page = 1;
            }
            this.$http.get(this.urlmedia + page)
                .then(response => {
                    return response.json();
                }).then(data => {
                    this.medias = data;
                });
        },
        previewmedia: function(element)
        {
            previewmedia(element);
        },
        /*infiniteHandlerCategory($state) {
            axios.get(this.urlmedia, {
                params: {
                    page: this.medias.length / 60 + 1,
                },
            }).then(({ data }) => {
                if (data.data.length)
                {
                    this.medias = this.medias.concat(data.data);
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
        },*/
    }
 }
 </script>
