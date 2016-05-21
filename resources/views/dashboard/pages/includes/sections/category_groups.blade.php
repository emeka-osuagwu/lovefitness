<div style="display: none;" class="modal fade" id="editModal10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
                <div class="modal-content">
                        <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <h4 class="modal-title" id="myModalLabel">{{$category->name}} Groups</h4>
                        </div>

                        <div class="portlet-body form">
                                <div class="portlet">
                                        <div class="portlet-body">
                                                <div class="table-responsive">
                                                        <table class="table table-bordered">
                                                                <thead>
                                                                        <tr>
                                                                                <th width="10px">ID</th>
                                                                                <th>Image</th>
                                                                                <th>Name</th>
                                                                                <th>Description</th>
                                                                        </tr>
                                                                </thead>
                                                                <tbody>
                                                                        <i style="color: transparent;">{{$i = 1}}</i>
                                                                        @foreach($category->groups as $group)
                                                                        <tr>
                                                                                <td>{{$i++}}</td>
                                                                                        @if($group->image == '' || $group->image == null )
                                                                                                <td><img  width="40" src="{{asset('images/no_gym_group_image.jpg')}}"></td>
                                                                                        @else
                                                                                                <td><img  width="40" src="{{$group->image}}"></td>
                                                                                        @endif
                                                                                <td>{{$group->name}}</td>
                                                                                <td>{{$group->description}}</td> 
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