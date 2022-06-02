<template>
        <div class="box-body">
            <table id="" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <td>Name</td>    
                    <th>Description</th>
                    <th>Status</th>
                    <th>Created At</th>
                    <th>Last Update</th>
                    <th>Operations</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="category in categories" :key="category.id">
                    <th>{{ category.id }}</th>
                    <td>{{ category.name }}</td>    
                    <td>{{ category.description }}</td>
                    <td>{{ category.status }}</td>
                    <td>{{ category.created_at }}</td>
                    <td>{{ category.updated_at }}</td>
                    <td>Operations</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th>ID</th>
                    <td>Name</td>    
                    <th>Description</th>
                    <th>Status</th>
                    <th>Created At</th>
                    <th>Last Update</th>
                    <th>Operations</th>
                </tr>
            </tfoot>
            </table>
        </div><!-- /.box-body -->
    </template>

<script>
    export default {
        data() {
            return {
                categories: []
            };
        },
        created : function(){
            this.getCategories();
        },
        methods:{
            getCategories: function()
            {
               $.getJSON("http://vividcustoms.test/api/category", function(categories)
               {
                   this.categories= categories;
               }.bind(this));

               //setTimeout(this.getCategories,1000);
            }
        }
    }
</script>
