<div style="display: none;" class="modal fade" id="editModal10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
                <div class="modal-content">
                        <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <h4 class="modal-title" id="myModalLabel">{{$group->name}} Classes</h4>
                        </div>

                        <div class="portlet-body form">
                                <div class="portlet">
                                        <div class="portlet-body">
                                                <div class="table-responsive">
                                                        <table class="table table-bordered">
                                                                <thead>
                                                                        <tr>
                                                                                <th width="10px">ID</th>
                                                                                <th>Name</th>
                                                                                <th>Group</th>
                                                                                <th>Venue</th>
                                                                        </tr>
                                                                </thead>
                                                                <tbody>
                                                                        <i style="color: transparent;">{{$i = 1}}</i>
                                                                        @foreach($group->classes as $class)
                                                                        <tr>
                                                                                <td>{{$i++}}</td>
                                                                                <td>{{$class->name}}</td>
                                                                                <td>{{$class->group['name']}}</td>
                                                                                <td><a href="dashboard/venue/{{$class->id}}">{{$class->location->name}}</a></td>
                                                                        </tr>
                                                                        @endforeach
                                                                </tbody>
                                                        </table>
                                                </div>
                                        </div>
                                </div>  
                        </div>
                        
                </div>
        </div>
</div>