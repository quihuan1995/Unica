@extends('cms.layout.main', array(
"pageTitle" => "Edit Menu",
"breadCrumbs" => array(
array(
"name" => "Edit Menu",
"link" => "/name/",
"active" => true
)
)))

@push("head-title")
eidtmeus
@endpush
@push('style-custome')
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/nestable2/1.6.0/jquery.nestable.min.css">
		<link rel="stylesheet" href="css/menu.css">
@endpush
@section('content')
<div id="main">
	<form method="POST" action="{{route('menus.update',['id'=>$menu->id])}}" >
        @csrf
        @method('put')
        
		<div class="row">
				<div class="col-md-9">
					<div class="main-form">
						<div class="form-body">
							<div class="form-group">
								<label for="name" class="control-label required" aria-required="true">Name</label>
								<input class="form-control" placeholder="" data-counter="120" name="name" type="text" value="{{ $menu->name }}" id="name">
								{!!showError($errors,'name')!!}
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="row widget-menu">
						<div class="col-md-4">
							<div class="panel-group" id="accordion">
								<div class="widget meta-boxes">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapsePages">
										<h4 class="widget-title" style="margin-top: 0">
											<span>Pages</span>
											<i class="fa fa-angle-down narrow-icon"></i>
										</h4>
									</a>
									<div id="collapsePages" class="panel-collapse collapse in">
										<div class="widget-body">
											<div class="box-links-for-menu">
												<div class="the-box">
													<ul class="list-item">
														<li>
															<label for="menu_id_botblepagemodelspage_1" data-title="Contact" data-reference-id="1" data-reference-type="Botble\Page\Models\Page">
																<input id="menu_id_Botble\Page\Models\Page_1" name="menu_id" type="checkbox" value="1">
																Contact
															</label>
														</li>
													</ul>
													<div class="text-right">
														<div class="btn-group btn-group-devided">
															<a href="#" class="btn-add-to-menu btn btn-primary">
																<span class="text"><i class="fa fa-plus"></i> Add to menu</span>
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="widget meta-boxes">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseCategories">
										<h4 class="widget-title">
											<span>Categories</span>
											<i class="fa fa-angle-down narrow-icon"></i>
										</h4>
									</a>
									<div id="collapseCategories" class="panel-collapse collapse">
										<div class="widget-body">
											<div class="box-links-for-menu">
												<div class="the-box">
													<ul class="list-item">
														@foreach ($categories as $key=>$category)
														<li>
															<label for="menu_id_botbleblogmodelscategory_9" data-title="Business" data-reference-id="9" data-reference-type="Botble\Blog\Models\Category">
																<input id="menu_id_Botble\Blog\Models\Category_9" name="menu_id" type="checkbox" value="9">
																{{$category->name}}
															</label>
														</li>
														@endforeach
													</ul>
													<div class="text-right">
														<div class="btn-group btn-group-devided">
															<a href="#" class="btn-add-to-menu btn btn-primary">
																<span class="text"><i class="fa fa-plus"></i> Add to menu</span>
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="widget meta-boxes">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseTags">
										<h4 class="widget-title">
											<span>Tags</span>
											<i class="fa fa-angle-down narrow-icon"></i>
										</h4>
									</a>
									<div id="collapseTags" class="panel-collapse collapse">
										<div class="widget-body">
											<div class="box-links-for-menu">
												<div class="the-box">
													<ul class="list-item">

														@foreach ($tags as $key=>$tag)
														<li>
															<label for="menu_id_botbleblogmodelstag_25" data-title="popular" data-reference-id="25" data-reference-type="Botble\Blog\Models\Tag">
																<input id="menu_id_Botble\Blog\Models\Tag_25" name="menu_id" type="checkbox" value="25">
																{{$tag->title}}
															</label>
														</li>
														@endforeach

													</ul>
													<div class="text-right">
														<div class="btn-group btn-group-devided">
															<a href="#" class="btn-add-to-menu btn btn-primary">
																<span class="text"><i class="fa fa-plus"></i> Add to menu</span>
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
                            <!--Add Link-->
								<div class="widget meta-boxes">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseCustomLink">
										<h4 class="widget-title">
											<span>Add link</span>
											<i class="fa fa-angle-down narrow-icon"></i>
										</h4>
									</a>
									<div id="collapseCustomLink" class="panel-collapse collapse">
										<form method="post" action="{{ route('menus.item_store') }}">
												@csrf
											<div class="widget-body">
												<div class="box-links-for-menu">
													<div id="external_link" class="the-box">
														<div class="node-content">
															<div class="form-group">
																<label for="node-title">Title</label>
																<input type="text" name="title" class="form-control" id="title" autocomplete="false">
															</div>
															<div class="form-group">
																<label for="node-url">URL</label>
																<input type="text" name="link" class="form-control" id="link" placeholder="http://" autocomplete="false">
															</div>
															<div class="form-group">
																<label for="node-icon">Icon</label>
																<input type="text" name="icon" class="form-control" id="icon" placeholder="fa fa-home" autocomplete="false">
															</div>

															<div class="form-group">
																<div class="text-right add-button">
																	<div class="btn-group">
																		<button id="addlink" class="btn-add-to-menu btn btn-primary"><span class="text"><i class="fa fa-plus"></i> Add to menu</span></button>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>

									<!--End Add Link-->
							</div>
						</div>
						<div class="col-md-8">
							<div class="widget meta-boxes">
								<div class="widget-title">
						 			<h4>
									<span>Menu structure</span>
									</h4>
								</div>
							</div>
						<div class="widget-body" style="background: #fff;">
							<div class="dd" id="nestable">
								<ol class="dd-list">
									@include('cms.components.menu-list', array("items" => $items))
								</ol>
							</div>
							<textarea name="parent_id" id="nestable-output"></textarea>
							<p id="demo"></p>
							<hr>
							<h3>Menu settings</h3>
							<div class="row">
								<div class="col-md-4">
									<p><i>Display location</i></p>
								</div>
								<div class="col-md-8">
									<div>
										<input 
										@if ($menu_location[0]->location=='menu_slide' && $menu_location[0]->status==1)
										checked
										@endif
										type="checkbox" class="hrv-checkbox" name="location[]" value="menu_slide" id="menu_location_header-menu">
										<label for="menu_location_header-menu">MenuSlide</label>
									</div>
									<div>
										<input
										@if ($menu_location[1]->location=='menu_footer_left' && $menu_location[1]->status==1)
										checked
										@endif
										type="checkbox" class="hrv-checkbox" name="location[]" value="menu_footer_left" id="menu_location_main-menu">
										<label for="menu_location_main-menu">Menufooterleft</label>
									</div>
									<div>
										<input
										@if ($menu_location[2]->location=='menu_footer_right' && $menu_location[2]->status==1)
										checked
										@endif
										type="checkbox" class="hrv-checkbox" name="location[]" value="menu_footer_right" id="menu_location_footer-menu">
										<label for="menu_location_footer-menu">Menufooterright</label>
									</div>
								</div>
							</div>
						</div>
					</div>
					</div>
				</div>
				<div class="col-md-3 right-sidebar">
					<div class="widget meta-boxes form-actions form-actions-default action-horizontal">
						<div class="widget-title">
							<h4>
								<span>Publish</span>
							</h4>
						</div>
						<div class="widget-body">
							<div class="btn-set">
								<button type="submit" name="submit" value="save" class="btn btn-info">
									<i class="fa fa-save"></i> Save
								</button>
								&nbsp;
								<button type="submit" name="submit" value="save and edit" class="btn btn-success">
									<i class="fa fa-check-circle"></i> Save & Edit
								</button>
								<div id="isOutput"></div>
							</div>
						</div>
					</div>

				</div>
		</div>
	</form>
</div>	


@endsection
@push('foot-scripts')
<script src="//cdnjs.cloudflare.com/ajax/libs/nestable2/1.6.0/jquery.nestable.min.js"></script>
<script>
$(document).ready(function()
{

    var updateOutput = function(e)
    {
        var list   = e.length ? e : $(e.target),
            output = list.data('output');
        if (window.JSON) {
            output.val(window.JSON.stringify(list.nestable('serialize')));//, null, 2));
        } else {
            output.val('JSON browser support required for this demo.');
        }
	};
    // activate Nestable for list 1
    $('#nestable').nestable({
        group: 1
    })
    .on('change', updateOutput);

    // output initial serialised data
    updateOutput($('#nestable').data('output', $('#nestable-output')));

});
</script>
<script>
$(document).ready(function()
{
	
        var list   = e.length ? e : $(e.target),
            output = list.data('output');
        if (window.JSON) {
            output.val(window.JSON.stringify(list.nestable('serialize')));//, null, 2));
        } else {
            output.val('JSON browser support required for this demo.');
        }
	
	var i, j, x = "";
	for (i in output.children) {
	x += "<h2>" + output.children[i].id + "</h2>";
	for (j in myObj.cars[i].models) {
		x += myObj.cars[i].models[j] + "<br>";
	}
	}

document.getElementById("demo").innerHTML = ;
});
</script>

@endpush

{{-- [
{"id":2,"children":[
	{"id":26,"children":[
		{"id":13,"children":[{"id":14}]}
		]}
	]
},
{"id":3,"children":[
	{"id":25}
	]
},
{"id":4,"children":[{"id":24}]},
{"id":6,"children":[{"id":22}]},
{"id":7,"children":[{"id":21}]},
{"id":9,"children":[{"id":17}]},
{"id":12,"children":[{"id":15}]}
] --}}