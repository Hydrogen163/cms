<div id="sidebar" class="sidebar sidebar-transparent">
    <!-- begin sidebar scrollbar -->
    <div data-scrollbar="true" data-height="100%">
        <!-- begin sidebar user -->
        <ul class="nav">
            <li class="nav-profile">
                <div class="image">
                    <a href="javascript:;"><img src="{{ asset('asset_admin/assets/img/user-13.jpg') }}" alt=""/></a>
                </div>
                <div class="info">
                    {{ auth('admin')->user()->name }}
                    <small>{{ auth('admin')->user()->email }}</small>
                </div>
            </li>
        </ul>
        <!-- end sidebar user -->
        <!-- begin sidebar nav -->
        <ul class="nav">
            <li class="has-sub">
                <a href="javascript:;"><b class="glyphicon glyphicon-th-large"></b><span>系统配置</span></a>
                <ul class="sub-menu">
                    <li class="has-sub active"><a href="{{url('admin/admin')}}"><b class="caret pull-right"></b>用户管理</a></li>
                    <li class="has-sub active"><a href="{{url('admin/log')}}"><b class="caret pull-right"></b>日志管理</a></li>
                    {{--<li><a href="{{url('admin/menu')}}"><b class="caret pull-right"></b>菜单管理</a></li>--}}
                    {{--<li><a href="{{url('admin/role')}}"><b class="caret pull-right"></b>角色管理</a></li>--}}
                    {{--<li><a href="#"><b class="caret pull-right"></b>用户管理</a></li>--}}
                </ul>
            </li>


            <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i
                            class="fa fa-angle-double-left"></i></a></li>
            <!-- end sidebar minify button -->
        </ul>

        <!-- end sidebar nav -->
    </div>
    <!-- end sidebar scrollbar -->
</div>
<script>
    var activeNode = $('.active');
    activeNode.parents('li').addClass('active');
</script>