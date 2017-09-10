<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image">
            <img src="{{asset('bower_components/adminbsb-materialdesign/images/user.png')}}" width="48" height="48"
                 alt="User"/>
        </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
            <div class="email">john.doe@example.com</div>
            <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">
                    <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                    <li role="seperator" class="divider"></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                    <li role="seperator" class="divider"></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
	<?php $menu_configs = ( strpos( Route::getCurrentRoute()->getPrefix(), 'configs' ) !== false ); ?>

    <div class="menu">
        <ul class="list">
            <li class="header">MAIN NAVIGATION</li>
            <li @if(Route::currentRouteName()=='index') class="active" @endif>
                <a href="{{route('index')}}">
                    <i class="material-icons">home</i>
                    <span>Início</span>
                </a>
            </li>
            <li @if($menu_configs) class="active" @endif>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">build</i>
                    <span>Configurações</span>
                </a>
                <ul class="ml-menu">
                    <li @if(Route::currentRouteName()=='kinships.index') class="active" @endif>
                        <a class="menu-toggle">
                            <span>Pacientes</span>
                        </a>
                        <ul class="ml-menu">
                            <li @if(Route::currentRouteName()=='kinships.index') class="active" @endif>
                                <a href="{{route('kinships.index')}}">Parentesco</a>
                            </li>
                        </ul>
                    </li>
                    <li @if((Route::currentRouteName()=='phone_types.index')) class="active" @endif>
                        <a class="menu-toggle">
                            <span>Contatos</span>
                        </a>
                        <ul class="ml-menu">
                            <li @if(Route::currentRouteName()=='phone_types.index') class="active" @endif>
                                <a href="{{route('phone_types.index')}}">Tipo Telefone</a>
                            </li>
                        </ul>
                    </li>
                    <li @if((Route::currentRouteName()=='brands.index') || (Route::currentRouteName()=='units.index')) class="active" @endif>
                        <a class="menu-toggle">
                            <span>Produtos</span>
                        </a>
                        <ul class="ml-menu">
                            <li @if(Route::currentRouteName()=='brands.index') class="active" @endif>
                                <a href="{{route('brands.index')}}">Marcas</a>
                            </li>
                            <li @if(Route::currentRouteName()=='units.index') class="active" @endif>
                                <a href="{{route('units.index')}}">Unidades</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li @if(Route::currentRouteName()=='patients.index') class="active" @endif>
                <a href="{{route('patients.index')}}">
                    <i class="material-icons">face</i>
                    <span>Pacientes</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);">
                    <i class="material-icons">list</i>
                    <span>Produtos</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- #Menu -->
    <!-- Footer -->
    <div class="legal">
        <div class="copyright">
            &copy; 2017 <a href="javascript:void(0);">Supera</a>
        </div>
        <div class="version">
            <b>Version: </b> 1.0
        </div>
    </div>
    <!-- #Footer -->
</aside>
<!-- #END# Left Sidebar -->
<!-- Right Sidebar -->
<aside id="rightsidebar" class="right-sidebar">
    <ul class="nav nav-tabs tab-nav-right" role="tablist">
        <li role="presentation" class="active"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
    </ul>
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade in active in active" id="settings">
            <div class="demo-settings">
                <p>GENERAL SETTINGS</p>
                <ul class="setting-list">
                    <li>
                        <span>Report Panel Usage</span>
                        <div class="switch">
                            <label><input type="checkbox" checked><span class="lever"></span></label>
                        </div>
                    </li>
                    <li>
                        <span>Email Redirect</span>
                        <div class="switch">
                            <label><input type="checkbox"><span class="lever"></span></label>
                        </div>
                    </li>
                </ul>
                <p>SYSTEM SETTINGS</p>
                <ul class="setting-list">
                    <li>
                        <span>Notifications</span>
                        <div class="switch">
                            <label><input type="checkbox" checked><span class="lever"></span></label>
                        </div>
                    </li>
                    <li>
                        <span>Auto Updates</span>
                        <div class="switch">
                            <label><input type="checkbox" checked><span class="lever"></span></label>
                        </div>
                    </li>
                </ul>
                <p>ACCOUNT SETTINGS</p>
                <ul class="setting-list">
                    <li>
                        <span>Offline</span>
                        <div class="switch">
                            <label><input type="checkbox"><span class="lever"></span></label>
                        </div>
                    </li>
                    <li>
                        <span>Location Permission</span>
                        <div class="switch">
                            <label><input type="checkbox" checked><span class="lever"></span></label>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</aside>
<!-- #END# Right Sidebar -->