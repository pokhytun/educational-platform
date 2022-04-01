<div class="module-block">
    <div class="module-head tab-item" data-tab="{{$module->id}}">
        <div class="module-title ">{{$module->title}}</div>
        <svg class="module-svg "></svg>
    </div>
    <div class="module-menu tab-content" data-content="{{$module->id}}">
        <nav class="module-munu__list">
            <ul>
                @foreach ($module->submodules as $submodule)
                <li class="module-munu__item">
                    <div class="module-munu__title icon_video">{{$submodule->title}}</div>
                    <span class='module-menu__size'>01:25</span>
                </li>
                @endforeach
            </ul>
        </nav>
    </div>
</div>