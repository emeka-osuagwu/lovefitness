@extends('dashboard.master')

@section('title', 'Admin')

@section('content')
	@include('dashboard.pages.includes.sections.top_nav')
	<div class="clearfix"> </div>
		<div class="page-container">
			<div class="page-sidebar-wrapper">
				@include('dashboard.pages.includes.sections.left_nav')
				<div class="page-content-wrapper">
<div class="page-content" style="min-height:1497px">
                    <!-- BEGIN PAGE HEAD-->
                    <div class="page-head">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1>Portfolio 1
                                <small>Portfolio 1 - Basic Grid</small>
                            </h1>
                        </div>
                        <!-- END PAGE TITLE -->
                        <!-- BEGIN PAGE TOOLBAR -->
                        <div class="page-toolbar">
                            <!-- BEGIN THEME PANEL -->
                            <div class="btn-group btn-theme-panel">
                                <a href="javascript:;" class="btn dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-settings"></i>
                                </a>
                                <div class="dropdown-menu theme-panel pull-right dropdown-custom hold-on-click">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <h3>THEME</h3>
                                            <ul class="theme-colors">
                                                <li class="theme-color theme-color-default" data-theme="default">
                                                    <span class="theme-color-view"></span>
                                                    <span class="theme-color-name">Dark Header</span>
                                                </li>
                                                <li class="theme-color theme-color-light active" data-theme="light">
                                                    <span class="theme-color-view"></span>
                                                    <span class="theme-color-name">Light Header</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-8 col-sm-8 col-xs-12 seperator">
                                            <h3>LAYOUT</h3>
                                            <ul class="theme-settings">
                                                <li> Theme Style
                                                    <select class="layout-style-option form-control input-small input-sm">
                                                        <option value="square">Square corners</option>
                                                        <option value="rounded" selected="selected">Rounded corners</option>
                                                    </select>
                                                </li>
                                                <li> Layout
                                                    <select class="layout-option form-control input-small input-sm">
                                                        <option value="fluid" selected="selected">Fluid</option>
                                                        <option value="boxed">Boxed</option>
                                                    </select>
                                                </li>
                                                <li> Header
                                                    <select class="page-header-option form-control input-small input-sm">
                                                        <option value="fixed" selected="selected">Fixed</option>
                                                        <option value="default">Default</option>
                                                    </select>
                                                </li>
                                                <li> Top Dropdowns
                                                    <select class="page-header-top-dropdown-style-option form-control input-small input-sm">
                                                        <option value="light">Light</option>
                                                        <option value="dark" selected="selected">Dark</option>
                                                    </select>
                                                </li>
                                                <li> Sidebar Mode
                                                    <select class="sidebar-option form-control input-small input-sm">
                                                        <option value="fixed">Fixed</option>
                                                        <option value="default" selected="selected">Default</option>
                                                    </select>
                                                </li>
                                                <li> Sidebar Menu
                                                    <select class="sidebar-menu-option form-control input-small input-sm">
                                                        <option value="accordion" selected="selected">Accordion</option>
                                                        <option value="hover">Hover</option>
                                                    </select>
                                                </li>
                                                <li> Sidebar Position
                                                    <select class="sidebar-pos-option form-control input-small input-sm">
                                                        <option value="left" selected="selected">Left</option>
                                                        <option value="right">Right</option>
                                                    </select>
                                                </li>
                                                <li> Footer
                                                    <select class="page-footer-option form-control input-small input-sm">
                                                        <option value="fixed">Fixed</option>
                                                        <option value="default" selected="selected">Default</option>
                                                    </select>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END THEME PANEL -->
                        </div>
                        <!-- END PAGE TOOLBAR -->
                    </div>
                    <!-- END PAGE HEAD-->
                    <!-- BEGIN PAGE BREADCRUMB -->
                    <ul class="page-breadcrumb breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <a href="#">General</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <span class="active">Portfolio</span>
                        </li>
                    </ul>
                    <!-- END PAGE BREADCRUMB -->
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="portfolio-content portfolio-1">
                        <div id="js-filters-juicy-projects" class="cbp-l-filters-button">
                            <div data-filter="*" class="cbp-filter-item btn dark btn-outline uppercase"> All
                                <div class="cbp-filter-counter">12</div>
                            </div>
                            <div data-filter=".identity" class="cbp-filter-item btn dark btn-outline uppercase"> Identity
                                <div class="cbp-filter-counter">5</div>
                            </div>
                            <div data-filter=".web-design" class="cbp-filter-item btn dark btn-outline uppercase"> Web Design
                                <div class="cbp-filter-counter">7</div>
                            </div>
                            <div data-filter=".graphic" class="cbp-filter-item btn dark btn-outline uppercase"> Graphic
                                <div class="cbp-filter-counter">7</div>
                            </div>
                            <div data-filter=".logos" class="cbp-filter-item btn dark btn-outline uppercase cbp-filter-item-active"> Logo
                                <div class="cbp-filter-counter">4</div>
                            </div>
                        </div>
                        <div id="js-grid-juicy-projects" class="cbp cbp-caption-active cbp-caption-overlayBottomReveal cbp-ready" style="height: 799px;"><div class="cbp-wrapper-outer"><div class="cbp-wrapper">
                            <div class="cbp-item graphic cbp-item-off" style="width: 323px; left: 0px; top: 0px;"><div class="cbp-item-wrapper">
                                <div class="cbp-caption">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="../assets/global/img/portfolio/600x600/013.jpg" alt=""> </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="cbp-l-caption-alignCenter">
                                            <div class="cbp-l-caption-body">
                                                <a href="../assets/global/plugins/cubeportfolio/ajax/project1.html" class="cbp-singlePage cbp-l-caption-buttonLeft btn red uppercase btn red uppercase" rel="nofollow">more info</a>
                                                <a href="../assets/global/img/portfolio/1200x900/57.jpg" class="cbp-lightbox cbp-l-caption-buttonRight btn red uppercase btn red uppercase" data-title="Dashboard<br>by Paul Flavius Nechita">view larger</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cbp-l-grid-projects-title uppercase text-center uppercase text-center">Dashboard</div>
                                <div class="cbp-l-grid-projects-desc uppercase text-center uppercase text-center">Web Design / Graphic</div>
                            </div></div>
                            <div class="cbp-item web-design logos" style="width: 323px; left: 0px; top: 0px;"><div class="cbp-item-wrapper">
                                <div class="cbp-caption">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="../assets/global/img/portfolio/600x600/05.jpg" alt=""> </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="cbp-l-caption-alignCenter">
                                            <div class="cbp-l-caption-body">
                                                <a href="../assets/global/plugins/cubeportfolio/ajax/project2.html" class="cbp-singlePage cbp-l-caption-buttonLeft btn red uppercase btn red uppercase" rel="nofollow">more info</a>
                                                <a href="../assets/global/img/portfolio/1200x900/50.jpg" class="cbp-lightbox cbp-l-caption-buttonRight btn red uppercase btn red uppercase" data-title="World Clock Widget<br>by Paul Flavius Nechita">view larger</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cbp-l-grid-projects-title uppercase text-center">World Clock Widget</div>
                                <div class="cbp-l-grid-projects-desc uppercase text-center">Logo / Web Design</div>
                            </div></div>
                            <div class="cbp-item graphic logos" style="width: 323px; left: 353px; top: 0px;"><div class="cbp-item-wrapper">
                                <div class="cbp-caption">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="../assets/global/img/portfolio/600x600/16.jpg" alt=""> </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="cbp-l-caption-alignCenter">
                                            <div class="cbp-l-caption-body">
                                                <a href="../assets/global/plugins/cubeportfolio/ajax/project1.html" class="cbp-singlePage cbp-l-caption-buttonLeft btn red uppercase btn red uppercase" rel="nofollow">more info</a>
                                                <a href="http://vimeo.com/14912890" class="cbp-lightbox cbp-l-caption-buttonRight btn red uppercase btn red uppercase" data-title="To-Do Dashboard<br>by Tiberiu Neamu">view video</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cbp-l-grid-projects-title uppercase text-center">To-Do Dashboard</div>
                                <div class="cbp-l-grid-projects-desc uppercase text-center">Graphic / Logo</div>
                            </div></div>
                            <div class="cbp-item web-design graphic cbp-item-off" style="width: 323px; left: 706px; top: 0px;"><div class="cbp-item-wrapper">
                                <div class="cbp-caption">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="../assets/global/img/portfolio/600x600/33.jpg" alt=""> </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="cbp-l-caption-alignCenter">
                                            <div class="cbp-l-caption-body">
                                                <a href="../assets/global/plugins/cubeportfolio/ajax/project2.html" class="cbp-singlePage cbp-l-caption-buttonLeft btn red uppercase btn red uppercase" rel="nofollow">more info</a>
                                                <a href="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/4900333&amp;auto_play=true&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true" class="cbp-lightbox cbp-l-caption-buttonRight btn red uppercase btn red uppercase" data-title="Events and  More<br>by Tiberiu Neamu">view sound</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cbp-l-grid-projects-title uppercase text-center">Events and More</div>
                                <div class="cbp-l-grid-projects-desc uppercase text-center">Web Design / Graphic</div>
                            </div></div>
                            <div class="cbp-item identity web-design cbp-item-off" style="width: 323px; left: 0px; top: 0px;"><div class="cbp-item-wrapper">
                                <div class="cbp-caption">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="../assets/global/img/portfolio/600x600/38.jpg" alt=""> </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="cbp-l-caption-alignCenter">
                                            <div class="cbp-l-caption-body">
                                                <a href="../assets/global/plugins/cubeportfolio/ajax/project1.html" class="cbp-singlePage cbp-l-caption-buttonLeft btn red uppercase btn red uppercase" rel="nofollow">more info</a>
                                                <a href="../assets/global/img/portfolio/1200x900/4.jpg" class="cbp-lightbox cbp-l-caption-buttonRight btn red uppercase btn red uppercase" data-title="WhereTO App<br>by Tiberiu Neamu">view larger</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cbp-l-grid-projects-title uppercase text-center">Where To App</div>
                                <div class="cbp-l-grid-projects-desc uppercase text-center">Web Design / Identity</div>
                            </div></div>
                            <div class="cbp-item identity web-design cbp-item-off" style="width: 323px; left: 353px; top: 0px;"><div class="cbp-item-wrapper">
                                <div class="cbp-caption">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="../assets/global/img/portfolio/600x600/88.jpg" alt=""> </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="cbp-l-caption-alignCenter">
                                            <div class="cbp-l-caption-body">
                                                <a href="../assets/global/plugins/cubeportfolio/ajax/project2.html" class="cbp-singlePage cbp-l-caption-buttonLeft btn red uppercase btn red uppercase" rel="nofollow">more info</a>
                                                <a href="../assets/global/img/portfolio/1200x900/7.jpg" class="cbp-lightbox cbp-l-caption-buttonRight btn red uppercase btn red uppercase" data-title="Ski * Buddy<br>by Tiberiu Neamu">view larger</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cbp-l-grid-projects-title uppercase text-center">Ski * Buddy</div>
                                <div class="cbp-l-grid-projects-desc uppercase text-center">Identity / Web Design</div>
                            </div></div>
                            <div class="cbp-item graphic logos" style="width: 323px; left: 706px; top: 0px;"><div class="cbp-item-wrapper">
                                <div class="cbp-caption">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="../assets/global/img/portfolio/600x600/02.jpg" alt=""> </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="cbp-l-caption-alignCenter">
                                            <div class="cbp-l-caption-body">
                                                <a href="../assets/global/plugins/cubeportfolio/ajax/project1.html" class="cbp-singlePage cbp-l-caption-buttonLeft btn red uppercase" rel="nofollow">more info</a>
                                                <a href="../assets/global/img/portfolio/1200x900/60.jpg" class="cbp-lightbox cbp-l-caption-buttonRight btn red uppercase" data-title="Seemple* Music for iPad<br>by Tiberiu Neamu">view sound</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cbp-l-grid-projects-title uppercase text-center uppercase text-center">Seemple* Music for iPad</div>
                                <div class="cbp-l-grid-projects-desc uppercase text-center">Graphic / Logo</div>
                            </div></div>
                            <div class="cbp-item identity graphic cbp-item-off" style="width: 323px; left: 353px; top: 417px;"><div class="cbp-item-wrapper">
                                <div class="cbp-caption">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="../assets/global/img/portfolio/600x600/62.jpg" alt=""> </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="cbp-l-caption-alignCenter">
                                            <div class="cbp-l-caption-body">
                                                <a href="../assets/global/plugins/cubeportfolio/ajax/project2.html" class="cbp-singlePage cbp-l-caption-buttonLeft btn red uppercase" rel="nofollow">more info</a>
                                                <a href="http://www.youtube.com/watch?v=Bu9OiDmxCrQ" class="cbp-lightbox cbp-l-caption-buttonRight btn red uppercase" data-title="Remind~Me More<br>by Tiberiu Neamu">view video</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cbp-l-grid-projects-title uppercase text-center">Remind~Me More</div>
                                <div class="cbp-l-grid-projects-desc uppercase text-center">Identity / Graphic</div>
                            </div></div>
                            <div class="cbp-item web-design graphic cbp-item-off" style="width: 323px; left: 706px; top: 417px;"><div class="cbp-item-wrapper">
                                <div class="cbp-caption">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="../assets/global/img/portfolio/600x600/81.jpg" alt=""> </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="cbp-l-caption-alignCenter">
                                            <div class="cbp-l-caption-body">
                                                <a href="../assets/global/plugins/cubeportfolio/ajax/project1.html" class="cbp-singlePage cbp-l-caption-buttonLeft btn red uppercase" rel="nofollow">more info</a>
                                                <a href="https://www.ted.com/talks/andrew_bastawrous_get_your_next_eye_exam_on_a_smartphone" class="cbp-lightbox cbp-l-caption-buttonRight btn red uppercase" data-title="Workout Buddy<br>by Tiberiu Neamu">view video</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cbp-l-grid-projects-title uppercase text-center">Workout Buddy</div>
                                <div class="cbp-l-grid-projects-desc uppercase text-center">Web Design / Graphic</div>
                            </div></div>
                            <div class="cbp-item identity web-design cbp-item-off" style="width: 323px; left: 0px; top: 417px;"><div class="cbp-item-wrapper">
                                <div class="cbp-caption">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="../assets/global/img/portfolio/600x600/87.jpg" alt=""> </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="cbp-l-caption-alignCenter">
                                            <div class="cbp-l-caption-body">
                                                <a href="../assets/global/plugins/cubeportfolio/ajax/project2.html" class="cbp-singlePage cbp-l-caption-buttonLeft btn red uppercase" rel="nofollow">more info</a>
                                                <a href="https://www.youtube.com/watch?v=3wbvpOIIBQA" class="cbp-lightbox cbp-l-caption-buttonRight btn red uppercase" data-title="Bills Bills Bills<br>by Cosmin Capitanu">view video</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cbp-l-grid-projects-title uppercase text-center">Bills Bills Bills</div>
                                <div class="cbp-l-grid-projects-desc uppercase text-center">Identity / Web Design</div>
                            </div></div>
                            <div class="cbp-item identity logos" style="width: 323px; left: 0px; top: 417px;"><div class="cbp-item-wrapper">
                                <div class="cbp-caption">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="../assets/global/img/portfolio/600x600/102.jpg" alt=""> </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="cbp-l-caption-alignCenter">
                                            <div class="cbp-l-caption-body">
                                                <a href="../assets/global/plugins/cubeportfolio/ajax/project1.html" class="cbp-singlePage cbp-l-caption-buttonLeft btn red uppercase" rel="nofollow">more info</a>
                                                <a href="../assets/global/img/portfolio/1200x900/92.jpg" class="cbp-lightbox cbp-l-caption-buttonRight btn red uppercase" data-title="Generic Apps<br>by Cosmin Capitanu">view video</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cbp-l-grid-projects-title uppercase text-center">Generic Apps</div>
                                <div class="cbp-l-grid-projects-desc uppercase text-center">Identity / Logo</div>
                            </div></div>
                            <div class="cbp-item graphic web-design cbp-item-off" style="width: 323px; left: 0px; top: 834px;"><div class="cbp-item-wrapper">
                                <div class="cbp-caption">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="../assets/global/img/portfolio/600x600/96.jpg" alt=""> </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="cbp-l-caption-alignCenter">
                                            <div class="cbp-l-caption-body">
                                                <a href="../assets/global/plugins/cubeportfolio/ajax/project2.html" class="cbp-singlePage cbp-l-caption-buttonLeft btn red uppercase" rel="nofollow">more info</a>
                                                <a href="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/26519543&amp;auto_play=true&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true" class="cbp-lightbox cbp-l-caption-buttonRight btn red uppercase" data-title="Speed Detector<br>by Cosmin Capitanu">view sound</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cbp-l-grid-projects-title uppercase text-center">Speed Detector</div>
                                <div class="cbp-l-grid-projects-desc uppercase text-center">Graphic / Web Design</div>
                            </div></div>
                        </div></div></div>
                        <div id="js-loadMore-juicy-projects" class="cbp-l-loadMore-button">
                            <a href="../assets/global/plugins/cubeportfolio/ajax/loadMore.html" class="cbp-l-loadMore-link btn grey-mint btn-outline" rel="nofollow">
                                <span class="cbp-l-loadMore-defaultText">LOAD MORE</span>
                                <span class="cbp-l-loadMore-loadingText">LOADING...</span>
                                <span class="cbp-l-loadMore-noMoreLoading">NO MORE WORKS</span>
                            </a>
                        </div>
                    </div>
                    <!-- END PAGE BASE CONTENT -->
                </div>				</div>
			</div>
		</div>
@endsection