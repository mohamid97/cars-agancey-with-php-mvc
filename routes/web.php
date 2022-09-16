<?php



/**
 * array contain three element
 * 1-controller name
 * 2-function name
 * 3-user or admin controller
 */

//admin routes
app()->router->get('/admin_panel' , ['HomeController' , 'home' , 'admin']);
app()->router->get('/admin_panel/login' , ['Auth' , 'login' , 'admin']);
app()->router->post('/admin_panel/login' , ['Auth' , 'checkLogin' , 'admin']);
app()->router->get('/admin_panel/contact' , ['Contact' , 'contact' , 'admin']);


/** strat cars */
app()->router->get('/admin_panel/addCar' , ['Cars' , 'addCar' , 'admin']);
app()->router->post('/admin_panel/addCar' , ['Cars' , 'checkCar' , 'admin']);
app()->router->get('/admin_panel/getCars' , ['Cars' , 'getCars' , 'admin']);

/** start category */
app()->router->get('/admin_panel/categories' , ['Category' , 'getAll' , 'admin']);
app()->router->get('/admin/addCategory' , ['Category' , 'addCategory' , 'admin']);
app()->router->post('/admin_panel/addCategory' , ['Category' , 'checkCategory' , 'admin']);
app()->router->get('/admin_panel/deleteCategory' , ['Category' , 'deleterow' , 'admin']);
app()->router->get('/admin_panel/editCategory' , ['Category' , 'getEdit' , 'admin']);
app()->router->post('/admin_panel/editCategory' , ['Category' , 'edit' , 'admin']);
/** end category */

/** start users */
app()->router->get('/admin_panel/users' , ['User' , 'users' , 'admin']);
app()->router->get('/admin_panel/deleteUser' , ['User' , 'deleteRow' , 'admin']);
/** start logout */
app()->router->get('/admin_panel/logout' , ['Logout' , 'logout' , 'admin']);

app()->router->get('/' , ['Home' , 'home' , 'user']);
app()->router->get('/search/cars' , ['Home' , 'search' , 'users']);
