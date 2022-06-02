  <aside class="control-sidebar control-sidebar-dark">
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">

      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <div class="tab-content">     
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>    
      <div class="tab-pane active" id="control-sidebar-settings-tab">       
        <h3 class="control-sidebar-heading">General Settings</h3>
        <div class="form-group">
          <label class="control-sidebar-subheading">
            Clear Cache
            <a href="{{route('configuration.clearcache')}}" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
          </label>
        </div>
         <div class="form-group">
          <label class="control-sidebar-subheading">
            Clear Route
            <a href="{{route('configuration.clearroute')}}" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
          </label>
        </div>
        <div class="form-group">
          <label class="control-sidebar-subheading">
            Clear View
            <a href="{{route('configuration.clearview')}}" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
          </label>
        </div>
      </div>
    </div>
  </aside>