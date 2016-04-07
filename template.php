/* main ul */
function ifa_menu_tree__main_menu($variables) {
	//dpm($variables);
	if(strpos($variables['tree'], 'IFA FX</a>') !== false){
		return '<ul class="nav navbar-nav">' . $variables['tree'] . '</ul>';
	}else{
		return '<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a><ul class="dropdown-menu">' . $variables['tree'] . '</ul>';
	}
}