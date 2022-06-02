<template>
        <div class="box-body">
            <table id="" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <td>Name</td>    
                    <td>Category</td>    
                    <th>Description</th>
                    <th>Status</th>
                    <th>Created At</th>
                    <th>Last Update</th>
                    <th>Operations</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="subcategory in subcategories" :key="subcategory.id">
                    <th>{{ subcategory.id }}</th>
                    <td>{{ subcategory.name }}</td>    
                    <td>{{ subcategory.category_id }}</td>    
                    <td>{{ subcategory.description }}</td>
                    <td>{{ subcategory.status }}</td>
                    <td>{{ subcategory.created_at }}</td>
                    <td>{{ subcategory.updated_at }}</td>
                    <td>Operations</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th>ID</th>
                    <td>Name</td>    
                    <td>Category</td>    
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
                subcategories: []
            };
        },
        created : function(){
            this.getSubCategories();
        },
        methods:{
            getSubCategories: function()
            {
               $.getJSON("http://vividcustoms.test/api/subcategory", function(subcategories)
               {
                   this.subcategories= subcategories;
               }.bind(this));

               //setTimeout(this.getSubCategories,1000);
            }
        }
    }
</script>
