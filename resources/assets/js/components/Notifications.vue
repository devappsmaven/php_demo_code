<template>
 <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
      <li class="dropdown messages-menu">
          <a class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-history"></i>
            <span class="label label-info">{{ logs.length }}</span>
          </a>
          <ul class="dropdown-menu">
            <li class="header">Last recent {{ logs.length }} activities</li>
            <li>
              
              <ul class="menu">
                <li v-for="log in logs" :key="log.id">
                  <a  v-bind:href="'/admin/records/' + log.id">
                    <div class="pull-left">
                       <img v-bind:src="'/img/profile/' + log.image" class="img-circle" alt="User Image">
                    </div>
                    <h4>
                     {{log.firstname}} {{log.lastname}}
                     <small><i class="fa fa-clock-o"></i> {{ moment(log.created_at).fromNow() }}</small>
                    </h4>
                    <p>{{ log.event }} - {{ log.auditable_type }}</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="footer"><a  v-bind:href="'/admin/records'">See All Activities</a></li>
          </ul>
        </li>
       <li class="dropdown user user-menu">
                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                  <img v-bind:src="image" class="user-image" alt="User Image">
                  <span class="hidden-xs">{{ user.firstname }} {{  user.lastname }}</span>
                </a>
                <ul class="dropdown-menu">
                 
                  <li class="user-header">
                     <img v-bind:src="image" class="img-circle" alt="User Image">
                    <p>
                       {{  user.firstname }} {{  user.lastname }} - Web Developer
                      <small>Member since {{ moment(user.created_at).fromNow() }}</small>
                    </p>
                  </li>
                
                  <li class="user-footer">
                    <div class="pull-left">
                      <a  v-bind:href="'/admin/profile'" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                        <a  v-bind:href="'/admin/logout'" class="btn btn-default btn-flat" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            Sign out
                        </a>
                        <form id="logout-form" action="/admin/logout" method="POST" style="display: none;">
                          <input type="hidden" name="_token" :value="csrf">
                        </form>

                    </div>
                  </li>
                
                  
                </ul>
              </li>
      <li>
        <a href="javascript:void(0);" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
      </li>
    </ul>
  </div>
</template>

<script>
var moment = require('moment');
    export default {
       props: ['user'],
        data() {
            return {
                logs: [],
                moment: moment,
                image:  window.location.origin + '/vivid_test/public/img/profile/' + this.user.image,
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            };
        },
        created : function(){
            this.getLogs();
        },
        methods:{
            getLogs: function()
            {
               $.getJSON(window.location.origin + "/vivid_test/api/log", function(logs)
               {
                   this.logs= logs;
               }.bind(this));
               //setTimeout(this.getLogs,1000);
            }
        }
    }
</script>