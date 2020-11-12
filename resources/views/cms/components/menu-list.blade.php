@foreach ($items as $key => $item)
    <li class="dd-item" data-id="{{$item->id}}">
        <div class="dd-handle dd3-handle"></div>
        <div class="dd3-content">
            <span class="text float-left" data-update="title">{{$item->title}}</span>
            <a data-toggle="collapse" href="#item{{$item->id}}" role="button" aria-expanded="false" aria-controls="item{{$item->id}}" class="show-item-details"><i class="fa fa-angle-down"></i></a>
            <div class="clearfix"></div>
        </div>
        <div class="item-details collapse" id="item{{$item->id}}">
            <label class="pad-bot-5">
                <span class="text pad-top-5 dis-inline-block" data-update="title">Title</span>
                <input type="text" name="menu[{{$item->id}}][title]" value="{{$item->title}}" data-old="{{$item->title}}">
            </label>
            <label class="pad-bot-5 dis-inline-block">
                <span class="text pad-top-5" data-update="link">Link</span>
                <input type="text" name="menu[{{$item->id}}][link]" value="{{$item->link}}" data-old="{{$item->link}}">
            </label>
            <label class="pad-bot-10">
                <span class="text pad-top-5 dis-inline-block">Icon</span>
                <input type="text" name="menu[{{$item->id}}][icon]" value="{{$item->icon}}" data-old="{{$item->icon}}">
            </label>
            <div class="clearfix"></div>
            <div class="text-right" style="margin-top: 5px">
                <a href="#" class="btn btn-danger btn-remove btn-sm">Remove</a>
                <a href="#" class="btn btn-primary btn-cancel btn-sm">Cancel</a>
            </div>
        </div>
        <div class="clearfix"></div>
        @if (count($item->childrend) > 0)
            <ol class="dd-list">
                @include('cms.components.menu-list', array("items" => $item->childrend))
            </ol>
        @endif
    </li>
@endforeach