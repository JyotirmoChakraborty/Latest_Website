<?php

use CodeIgniter\Router\RouteCollection;

use App\Controllers\Home;
use App\Controllers\AboutUs;
use App\Controllers\Catagory;
use App\Controllers\Testimonial;
use App\Controllers\Blog;
use App\Controllers\Contact;

use App\Controllers\Dashboard;
use App\Controllers\Slider;



/**
 * @var RouteCollection $routes
 */




// $routes->get('/', 'Home::index');
//  $routes->get('/', 'Home::showHome');

/**#################################################################  WEBSITE DEVISION ###################################################################### */

 $routes->get('/',              [Home::class, 'showHome']);//Done
 $routes->get('/about-us',      [AboutUs::class, 'showAboutUs']);//Done
 $routes->get('/category',      [Catagory::class, 'showCategory']);//Done
 $routes->get('/testimonial',   [Testimonial::class, 'showTestimonial']);//Done
 $routes->get('/blog',          [Blog::class, 'showBlog']);//Done
 $routes->get('/contact',       [Contact::class, 'showContact']);//Done

/**#################################################################  WEBSITE DEVISION ###################################################################### */








/**#################################################################  BACKOFFICE DEVISION ###################################################################### */

$routes->get('/backoffice-dashboard',     [Dashboard::class, 'showDashboard']);

$routes->get('/backoffice-slider',     [Slider::class, 'showSliderDetailes']);
$routes->get('/create-slider', [Slider::class, 'showSliderForm']);
$routes->get('edit-slider/(:segment)', [Slider::class, 'editSlider']);
$routes->post('update-slider-data/(:segment)', [Slider::class, 'updateSlider']);
$routes->get('delete-slider/(:segment)', [Slider::class, 'deleteSlider']);
$routes->post('/slider-create-material', [Slider::class, 'createSlider']);


$routes->get('/backoffice-about-us',      [AboutUs::class, 'showbackofficeAboutUs']);
$routes->get('/edit-article/(:segment)', [AboutUs::class, 'editArticle']);
// $routes->post('update-article/(:segment)', [AboutUs::class, 'updateArticle']);
$routes->get('/delete-article/(:segment)', [[AboutUs::class, 'deleteArticle']]);
$routes->get('/backoffice-new-article', [AboutUs::class, 'createNewArticle']);
$routes->post('/backoffice-create-article', [AboutUs::class, 'createArticle']);


$routes->get('/backoffice-category',      [Catagory::class, 'showbackofficeCategory']);
$routes->get('/backoffice-new-category',      [Catagory::class, 'createNewCatagory']);
$routes->post('/backoffice-create-category', [Catagory::class, 'createCatagory']);
$routes->get('/edit-category/(:segment)', [Catagory::class, 'editCatagory']);
// $routes->post('/update-category/(:segment)', [Catagory::class, 'updateCatagory']);
$routes->get('/delete-category/(:segment)', [Catagory::class, 'deleteCatagory']);


$routes->get('/backoffice-testimonial',   [Testimonial::class, 'showbackofficeTestimonial']);
$routes->get('/backoffice-new-testimonial', [Testimonial::class, 'createNewTestimonial']);
$routes->post('backoffice-create-testimonial', [Testimonial::class, 'createTestimonial']);
$routes->get('/edit-testimonial/(:segment)', [Testimonial::class, 'editTestimonial']);
// $routes->post('/update-testimonial/(:segment)', [Testimonial::class, 'updateTestimonial']);
$routes->get('/delete-testimonial/(:segement)', [Testimonial::class, 'deleteTestimonial']);


$routes->get('/backoffice-blog',          [Blog::class, 'showbackofficeBlog']);
$routes->get('/backoffice-new-blog', [Blog::class, 'createNewBlog']);
$routes->post('backoffice-create-blog', [Blog::class, 'createBlog']);
$routes->get('/edit-blog/(:segment)', [Blog::class, 'editBlog']);
// $routes->post('/update-blog/(:segment)', [Blog::class, 'updateBlog']);
$routes->get('/delete-blog/(:segement)', [Blog::class, 'deleteBlog']);


$routes->get('/backoffice-contact',       [Contact::class, 'showbackofficeContact']);
// $routes->get('/backoffice-new-contact', [Contact::class, 'createNewContact']);
// $routes->post('backoffice-create-contact', [Contact::class, 'createContact']);
// $routes->get('/edit-contact/(:segment)', [Contact::class, 'editContact']);
// $routes->post('/update-contact/(:segment)', [Contact::class, 'updateContact']);
// $routes->get('/delete-contact/(:segement)', [Contact::class, 'deleteContact']);

/**#################################################################  BACKOFFICE DEVISION ###################################################################### */
