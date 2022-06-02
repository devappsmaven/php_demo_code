<template>
<section class="section">
  <div id="app">
    <ul>
      <div v-infinite-scroll="loadMore" infinite-scroll-disabled="busy" infinite-scroll-distance="limit">
        <li v-for="post in posts" style="margin-bottom: 2rem;" data-aos="slide-up" data-aos-offset="100" data-aos-easing="ease-out-back">
          <div class="card">
            <header class="card-header">
              <p class="card-header-title">
                {{post.title}}
              </p>
            </header>
            <div class="card-content">
              <div class="content">
                <p>{{post.body}}</p>
              </div>
            </div>
          </div>
        </li>
      </div>
    </ul>
  </div>
</section>
</template>
<script>
export default {
    data() {
        return {
            posts: [],
            limit: 10,
            busy: false,
            path: window.location.origin + '/vivid_test',
            urlcategories : window.location.origin + '/vivid_test/api/clipartcategory',
            urlsubcategories : window.location.origin + '/vivid_test/api/clipartsubcategory',
            urlcliparts : window.location.origin + '/vivid_test/api/clipart',
            urlallcliparts : window.location.origin + '/vivid_test/api/allcliparts'
        }
    },
    created: function(){
        this.loadMore();
    },
    methods:
    {   
        loadMore() 
        {
            console.log("Adding 10 more data results");
            this.busy = true;
            axios.get("https://jsonplaceholder.typicode.com/posts").then(response => 
            {
                const append = response.data.slice(
                    this.posts.length,
                    this.posts.length + this.limit
                );
                this.posts = this.posts.concat(append);
                this.busy = false;
            });
        }
    }
 }
//AOS.init();

 </script>