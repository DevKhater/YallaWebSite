<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // yalla_website_frontend_homepage
        if ($pathinfo === '/main') {
            return array (  '_controller' => 'YallaWebsite\\FrontendBundle\\Controller\\DefaultController::indexAction',  '_route' => 'yalla_website_frontend_homepage',);
        }

        // yalla_website_frontend_page_about
        if ($pathinfo === '/about') {
            return array (  '_controller' => 'YallaWebsite\\FrontendBundle\\Controller\\DefaultController::aboutAction',  '_route' => 'yalla_website_frontend_page_about',);
        }

        // yalla_website_frontened_venues
        if ($pathinfo === '/guides') {
            return array (  '_controller' => 'YallaWebsite\\FrontendBundle\\Controller\\DefaultController::venuesAction',  '_route' => 'yalla_website_frontened_venues',);
        }

        // yalla_website_frontened_artists
        if ($pathinfo === '/artists') {
            return array (  '_controller' => 'YallaWebsite\\FrontendBundle\\Controller\\DefaultController::artistsAction',  '_route' => 'yalla_website_frontened_artists',);
        }

        if (0 === strpos($pathinfo, '/gossip')) {
            // yalla_website_frontened_articles
            if ($pathinfo === '/gossips') {
                return array (  '_controller' => 'YallaWebsite\\FrontendBundle\\Controller\\DefaultController::articlesAction',  '_route' => 'yalla_website_frontened_articles',);
            }

            // yalla_website_frontened_article
            if (preg_match('#^/gossip/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'yalla_website_frontened_article')), array (  '_controller' => 'YallaWebsite\\FrontendBundle\\Controller\\DefaultController::getArticleBySlugAction',));
            }

        }

        if (0 === strpos($pathinfo, '/event')) {
            // yalla_website_frontened_events
            if ($pathinfo === '/events') {
                return array (  '_controller' => 'YallaWebsite\\FrontendBundle\\Controller\\DefaultController::eventsAction',  '_route' => 'yalla_website_frontened_events',);
            }

            // yalla_website_frontened_event
            if (preg_match('#^/event/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'yalla_website_frontened_event')), array (  '_controller' => 'YallaWebsite\\FrontendBundle\\Controller\\DefaultController::getEventBySlugAction',));
            }

        }

        if (0 === strpos($pathinfo, '/a')) {
            // frontend_ajax_get_event_by_date
            if (0 === strpos($pathinfo, '/allevents') && preg_match('#^/allevents/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'frontend_ajax_get_event_by_date')), array (  '_controller' => 'YallaWebsite\\FrontendBundle\\Controller\\AjaxController::getEventByDateAction',));
            }

            // ads_manager_show
            if (0 === strpos($pathinfo, '/ads_manager/get') && preg_match('#^/ads_manager/get/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ads_manager_show')), array (  '_controller' => 'YallaWebsite\\BackendBundle\\Controller\\AdsManagerController::displayAction',));
            }

        }

        // social_media_follow_us
        if ($pathinfo === '/template/social_media') {
            return array (  '_controller' => 'YallaWebsite\\FrontendBundle\\Controller\\TemplateController::socialAction',  '_route' => 'social_media_follow_us',);
        }

        // gogogo
        if ($pathinfo === '/hp') {
            return array (  '_controller' => 'YallaWebsite\\FrontendBundle\\Controller\\TemplateController::homepageAction',  '_route' => 'gogogo',);
        }

        if (0 === strpos($pathinfo, '/calendar')) {
            // yfe_cal_page
            if ($pathinfo === '/calendar') {
                return array (  '_controller' => 'YallaWebsite\\FrontendBundle\\Controller\\CalendarController::loadAction',  '_route' => 'yfe_cal_page',);
            }

            if (0 === strpos($pathinfo, '/calendar/get')) {
                // frontend_ajax_get_calendar
                if ($pathinfo === '/calendar/get') {
                    return array (  '_controller' => 'YallaWebsite\\FrontendBundle\\Controller\\CalendarController::indexAction',  '_route' => 'frontend_ajax_get_calendar',);
                }

                // yfe_get_month
                if (preg_match('#^/calendar/get/(?P<month>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'yfe_get_month')), array (  '_controller' => 'YallaWebsite\\FrontendBundle\\Controller\\CalendarController::indexAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/backend')) {
            // yalla_website_backend_homepage
            if (rtrim($pathinfo, '/') === '/backend') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'yalla_website_backend_homepage');
                }

                return array (  '_controller' => 'YallaWebsite\\BackendBundle\\Controller\\DefaultController::indexAction',  '_route' => 'yalla_website_backend_homepage',);
            }

            if (0 === strpos($pathinfo, '/backend/homepage')) {
                // backend_homepage_index
                if (rtrim($pathinfo, '/') === '/backend/homepage') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'backend_homepage_index');
                    }

                    return array (  '_controller' => 'YallaWebsite\\BackendBundle\\Controller\\HomepageController::homePageAction',  '_route' => 'backend_homepage_index',);
                }

                if (0 === strpos($pathinfo, '/backend/homepage/a')) {
                    // backend_homepage_about
                    if ($pathinfo === '/backend/homepage/about') {
                        return array (  '_controller' => 'YallaWebsite\\BackendBundle\\Controller\\HomepageController::homePageAboutAction',  '_route' => 'backend_homepage_about',);
                    }

                    if (0 === strpos($pathinfo, '/backend/homepage/ajax')) {
                        if (0 === strpos($pathinfo, '/backend/homepage/ajax/slider')) {
                            // backend_ajax_set_slider
                            if (preg_match('#^/backend/homepage/ajax/slider/(?P<id>[^/]++)/(?P<pos>[^/]++)/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_ajax_set_slider')), array (  '_controller' => 'YallaWebsite\\BackendBundle\\Controller\\HomepageController::setSliderAction',));
                            }

                            // backend_ajax_update_slider_view
                            if ($pathinfo === '/backend/homepage/ajax/slider/get/view') {
                                return array (  '_controller' => 'YallaWebsite\\BackendBundle\\Controller\\HomepageController::updateSliderViewAction',  '_route' => 'backend_ajax_update_slider_view',);
                            }

                        }

                        // backend_ajax_update_video_link
                        if (0 === strpos($pathinfo, '/backend/homepage/ajax/video') && preg_match('#^/backend/homepage/ajax/video/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_ajax_update_video_link')), array (  '_controller' => 'YallaWebsite\\BackendBundle\\Controller\\HomepageController::setVideoLinkAction',));
                        }

                        // backend_ajax_update_featured_gallery
                        if (0 === strpos($pathinfo, '/backend/homepage/ajax/gallery') && preg_match('#^/backend/homepage/ajax/gallery/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_ajax_update_featured_gallery')), array (  '_controller' => 'YallaWebsite\\BackendBundle\\Controller\\HomepageController::setFeaturedGalleryAction',));
                        }

                        if (0 === strpos($pathinfo, '/backend/homepage/ajax/article')) {
                            // backend_ajax_update_featured_article
                            if (preg_match('#^/backend/homepage/ajax/article/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_ajax_update_featured_article')), array (  '_controller' => 'YallaWebsite\\BackendBundle\\Controller\\HomepageController::setFeaturedArticleAction',));
                            }

                            // backend_ajax_update_four_articles
                            if (0 === strpos($pathinfo, '/backend/homepage/ajax/articles') && preg_match('#^/backend/homepage/ajax/articles/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_ajax_update_four_articles')), array (  '_controller' => 'YallaWebsite\\BackendBundle\\Controller\\HomepageController::setFourArticlesAction',));
                            }

                        }

                        // backend_ajax_get_events_for_day
                        if (0 === strpos($pathinfo, '/backend/homepage/ajax/day') && preg_match('#^/backend/homepage/ajax/day/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_ajax_get_events_for_day')), array (  '_controller' => 'YallaWebsite\\BackendBundle\\Controller\\HomepageController::getEventsInDayAction',));
                        }

                        // backend_ajax_set_events_for_day
                        if (0 === strpos($pathinfo, '/backend/homepage/ajax/event') && preg_match('#^/backend/homepage/ajax/event/(?P<id>[^/]++)/(?P<d>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_ajax_set_events_for_day')), array (  '_controller' => 'YallaWebsite\\BackendBundle\\Controller\\HomepageController::setEventsInDayAction',));
                        }

                        if (0 === strpos($pathinfo, '/backend/homepage/ajax/set')) {
                            // backend_ajax_set_about
                            if (0 === strpos($pathinfo, '/backend/homepage/ajax/set/about') && preg_match('#^/backend/homepage/ajax/set/about/(?P<data>[^/]++)$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_ajax_set_about')), array (  '_controller' => 'YallaWebsite\\BackendBundle\\Controller\\HomepageController::setAboutAction',));
                            }

                            // backend_ajax_set_vision
                            if (0 === strpos($pathinfo, '/backend/homepage/ajax/set/vision') && preg_match('#^/backend/homepage/ajax/set/vision/(?P<data>[^/]++)$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_ajax_set_vision')), array (  '_controller' => 'YallaWebsite\\BackendBundle\\Controller\\HomepageController::setVisionAction',));
                            }

                        }

                    }

                }

            }

            if (0 === strpos($pathinfo, '/backend/artist')) {
                // backend_artist_index
                if (rtrim($pathinfo, '/') === '/backend/artist') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'backend_artist_index');
                    }

                    return array (  '_controller' => 'YallaWebsite\\BackendBundle\\Controller\\ArtistController::indexAction',  '_route' => 'backend_artist_index',);
                }

                // backend_artist_new
                if ($pathinfo === '/backend/artist/new') {
                    return array (  '_controller' => 'YallaWebsite\\BackendBundle\\Controller\\ArtistController::newAction',  '_route' => 'backend_artist_new',);
                }

                // backend_artist_show
                if (0 === strpos($pathinfo, '/backend/artist/show') && preg_match('#^/backend/artist/show/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_artist_show')), array (  '_controller' => 'YallaWebsite\\BackendBundle\\Controller\\ArtistController::showAction',));
                }

                // backend_artist_edit
                if (0 === strpos($pathinfo, '/backend/artist/edit') && preg_match('#^/backend/artist/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_artist_edit')), array (  '_controller' => 'YallaWebsite\\BackendBundle\\Controller\\ArtistController::editAction',));
                }

                // backend_artist_delete
                if (0 === strpos($pathinfo, '/backend/artist/delete') && preg_match('#^/backend/artist/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_artist_delete')), array (  '_controller' => 'YallaWebsite\\BackendBundle\\Controller\\ArtistController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/backend/venue')) {
                // backend_venue_index
                if (rtrim($pathinfo, '/') === '/backend/venue') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'backend_venue_index');
                    }

                    return array (  '_controller' => 'YallaWebsite\\BackendBundle\\Controller\\VenueController::indexAction',  '_route' => 'backend_venue_index',);
                }

                // backend_venue_new
                if ($pathinfo === '/backend/venue/new') {
                    return array (  '_controller' => 'YallaWebsite\\BackendBundle\\Controller\\VenueController::newAction',  '_route' => 'backend_venue_new',);
                }

                // backend_venue_show
                if (0 === strpos($pathinfo, '/backend/venue/show') && preg_match('#^/backend/venue/show/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_venue_show')), array (  '_controller' => 'YallaWebsite\\BackendBundle\\Controller\\VenueController::showAction',));
                }

                // backend_venue_edit
                if (0 === strpos($pathinfo, '/backend/venue/edit') && preg_match('#^/backend/venue/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_venue_edit')), array (  '_controller' => 'YallaWebsite\\BackendBundle\\Controller\\VenueController::editAction',));
                }

                // backend_venue_delete
                if (0 === strpos($pathinfo, '/backend/venue/delete') && preg_match('#^/backend/venue/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_venue_delete')), array (  '_controller' => 'YallaWebsite\\BackendBundle\\Controller\\VenueController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/backend/event')) {
                // backend_event_index
                if (rtrim($pathinfo, '/') === '/backend/event') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'backend_event_index');
                    }

                    return array (  '_controller' => 'YallaWebsite\\BackendBundle\\Controller\\EventController::indexAction',  '_route' => 'backend_event_index',);
                }

                // backend_event_new
                if ($pathinfo === '/backend/event/new') {
                    return array (  '_controller' => 'YallaWebsite\\BackendBundle\\Controller\\EventController::newAction',  '_route' => 'backend_event_new',);
                }

                // backend_event_create
                if ($pathinfo === '/backend/event/create') {
                    return array (  '_controller' => 'YallaWebsite\\BackendBundle\\Controller\\EventController::createAction',  '_route' => 'backend_event_create',);
                }

                // backend_event_show
                if (0 === strpos($pathinfo, '/backend/event/show') && preg_match('#^/backend/event/show/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_event_show')), array (  '_controller' => 'YallaWebsite\\BackendBundle\\Controller\\EventController::showAction',));
                }

                // backend_event_edit
                if (0 === strpos($pathinfo, '/backend/event/edit') && preg_match('#^/backend/event/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_event_edit')), array (  '_controller' => 'YallaWebsite\\BackendBundle\\Controller\\EventController::editAction',));
                }

                // backend_event_save
                if ($pathinfo === '/backend/event/save') {
                    return array (  '_controller' => 'YallaWebsite\\BackendBundle\\Controller\\EventController::updateAction',  '_route' => 'backend_event_save',);
                }

                // backend_event_delete
                if (0 === strpos($pathinfo, '/backend/event/delete') && preg_match('#^/backend/event/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_event_delete')), array (  '_controller' => 'YallaWebsite\\BackendBundle\\Controller\\EventController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/backend/gallery')) {
                // backend_gallery_index
                if (rtrim($pathinfo, '/') === '/backend/gallery') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'backend_gallery_index');
                    }

                    return array (  '_controller' => 'YallaWebsite\\BackendBundle\\Controller\\GalleryController::indexAction',  '_route' => 'backend_gallery_index',);
                }

                // backend_gallery_show
                if (0 === strpos($pathinfo, '/backend/gallery/show') && preg_match('#^/backend/gallery/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_gallery_show')), array (  '_controller' => 'YallaWebsite\\BackendBundle\\Controller\\GalleryController::showAction',));
                }

                // backend_gallery_edit
                if (0 === strpos($pathinfo, '/backend/gallery/edit') && preg_match('#^/backend/gallery/edit/(?P<id>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'backend_gallery_edit');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_gallery_edit')), array (  '_controller' => 'YallaWebsite\\BackendBundle\\Controller\\GalleryController::editAction',));
                }

                // backend_gallery_new
                if ($pathinfo === '/backend/gallery/new') {
                    return array (  '_controller' => 'YallaWebsite\\BackendBundle\\Controller\\GalleryController::newAction',  '_route' => 'backend_gallery_new',);
                }

                // backend_gallery_add_images_gallery
                if (0 === strpos($pathinfo, '/backend/gallery/add') && preg_match('#^/backend/gallery/add/(?P<id>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'backend_gallery_add_images_gallery');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_gallery_add_images_gallery')), array (  '_controller' => 'YallaWebsite\\BackendBundle\\Controller\\GalleryController::addImagesAction',));
                }

                // backend_gallery_delete_image
                if (0 === strpos($pathinfo, '/backend/gallery/deleteImage') && preg_match('#^/backend/gallery/deleteImage/(?P<id>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'backend_gallery_delete_image');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_gallery_delete_image')), array (  '_controller' => 'YallaWebsite\\BackendBundle\\Controller\\GalleryController::deleteImageAction',));
                }

                // backend_gallery_set_preview
                if (0 === strpos($pathinfo, '/backend/gallery/preview') && preg_match('#^/backend/gallery/preview/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_gallery_set_preview')), array (  '_controller' => 'YallaWebsite\\BackendBundle\\Controller\\GalleryController::setGalleryPreviewAction',));
                }

                // backend_gallery_delete
                if (0 === strpos($pathinfo, '/backend/gallery/delete') && preg_match('#^/backend/gallery/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_gallery_delete')), array (  '_controller' => 'YallaWebsite\\BackendBundle\\Controller\\GalleryController::deleteGalleryAction',));
                }

                if (0 === strpos($pathinfo, '/backend/gallery/ajax')) {
                    // backend_gallery_ajax_set_preview
                    if ($pathinfo === '/backend/gallery/ajax/set/preview') {
                        return array (  '_controller' => 'YallaWebsite\\BackendBundle\\Controller\\GalleryController::setAjaxGalleryPreviewAction',  '_route' => 'backend_gallery_ajax_set_preview',);
                    }

                    // backend_ajax_delete_tag
                    if ($pathinfo === '/backend/gallery/ajax/delete/tag') {
                        return array (  '_controller' => 'YallaWebsite\\BackendBundle\\Controller\\GalleryController::delAjaxGalleryTagAction',  '_route' => 'backend_ajax_delete_tag',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/backend/photographer')) {
                // backend_photographer_index
                if (rtrim($pathinfo, '/') === '/backend/photographer') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'backend_photographer_index');
                    }

                    return array (  '_controller' => 'YallaWebsite\\BackendBundle\\Controller\\PhotographerController::indexAction',  '_route' => 'backend_photographer_index',);
                }

                // backend_photographer_show
                if (0 === strpos($pathinfo, '/backend/photographer/show') && preg_match('#^/backend/photographer/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_photographer_show')), array (  '_controller' => 'YallaWebsite\\BackendBundle\\Controller\\PhotographerController::showAction',));
                }

                // backend_photographer_edit
                if (0 === strpos($pathinfo, '/backend/photographer/edit') && preg_match('#^/backend/photographer/edit/(?P<id>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'backend_photographer_edit');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_photographer_edit')), array (  '_controller' => 'YallaWebsite\\BackendBundle\\Controller\\PhotographerController::editAction',));
                }

                // backend_photographer_new
                if ($pathinfo === '/backend/photographer/new') {
                    return array (  '_controller' => 'YallaWebsite\\BackendBundle\\Controller\\PhotographerController::newAction',  '_route' => 'backend_photographer_new',);
                }

                // backend_photographer_delete
                if (0 === strpos($pathinfo, '/backend/photographer/delete') && preg_match('#^/backend/photographer/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_photographer_delete')), array (  '_controller' => 'YallaWebsite\\BackendBundle\\Controller\\PhotographerController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/backend/article')) {
                // backend_article_index
                if (rtrim($pathinfo, '/') === '/backend/article') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'backend_article_index');
                    }

                    return array (  '_controller' => 'YallaWebsite\\BackendBundle\\Controller\\ArticleController::indexAction',  '_route' => 'backend_article_index',);
                }

                // backend_article_new
                if ($pathinfo === '/backend/article/new') {
                    return array (  '_controller' => 'YallaWebsite\\BackendBundle\\Controller\\ArticleController::newAction',  '_route' => 'backend_article_new',);
                }

                // backend_article_show
                if (0 === strpos($pathinfo, '/backend/article/show') && preg_match('#^/backend/article/show/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_article_show')), array (  '_controller' => 'YallaWebsite\\BackendBundle\\Controller\\ArticleController::showAction',));
                }

                // backend_article_edit
                if (0 === strpos($pathinfo, '/backend/article/edit') && preg_match('#^/backend/article/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_article_edit')), array (  '_controller' => 'YallaWebsite\\BackendBundle\\Controller\\ArticleController::editAction',));
                }

                // backend_article_delete
                if (0 === strpos($pathinfo, '/backend/article/delete') && preg_match('#^/backend/article/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_article_delete')), array (  '_controller' => 'YallaWebsite\\BackendBundle\\Controller\\ArticleController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/backend/user')) {
                // backend_user_index
                if (rtrim($pathinfo, '/') === '/backend/user') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'backend_user_index');
                    }

                    return array (  '_controller' => 'YallaWebsite\\BackendBundle\\Controller\\UserController::indexAction',  '_route' => 'backend_user_index',);
                }

                // backend_user_new
                if ($pathinfo === '/backend/user/new') {
                    return array (  '_controller' => 'YallaWebsite\\BackendBundle\\Controller\\UserController::newAction',  '_route' => 'backend_user_new',);
                }

                // backend_user_addpriv
                if (0 === strpos($pathinfo, '/backend/user/modify') && preg_match('#^/backend/user/modify/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_user_addpriv')), array (  '_controller' => 'YallaWebsite\\BackendBundle\\Controller\\UserController::modifyAction',));
                }

                // backend_user_delete
                if (0 === strpos($pathinfo, '/backend/user/edit') && preg_match('#^/backend/user/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_user_delete')), array (  '_controller' => 'YallaWebsite\\BackendBundle\\Controller\\UserController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/backend/profile')) {
                // backend_profile_index
                if (rtrim($pathinfo, '/') === '/backend/profile') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'backend_profile_index');
                    }

                    return array (  '_controller' => 'YallaWebsite\\BackendBundle\\Controller\\ProfileController::indexAction',  '_route' => 'backend_profile_index',);
                }

                // backend_profile_new
                if ($pathinfo === '/backend/profile/new') {
                    return array (  '_controller' => 'YallaWebsite\\BackendBundle\\Controller\\ProfileController::createAction',  '_route' => 'backend_profile_new',);
                }

                // backend_profile_edit
                if ($pathinfo === '/backend/profile/edit') {
                    return array (  '_controller' => 'YallaWebsite\\BackendBundle\\Controller\\ProfileController::editAction',  '_route' => 'backend_profile_edit',);
                }

            }

            if (0 === strpos($pathinfo, '/backend/adv')) {
                // backend_ads_manager_index
                if ($pathinfo === '/backend/adv/display/all') {
                    return array (  '_controller' => 'YallaWebsite\\BackendBundle\\Controller\\AdsManagerController::indexAction',  '_route' => 'backend_ads_manager_index',);
                }

                // backend_ads_manager_change
                if (0 === strpos($pathinfo, '/backend/adv/add/new') && preg_match('#^/backend/adv/add/new/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_ads_manager_change')), array (  '_controller' => 'YallaWebsite\\BackendBundle\\Controller\\AdsManagerController::changeAction',));
                }

                // backend_ads_manager_save
                if (rtrim($pathinfo, '/') === '/backend/adv/update') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'backend_ads_manager_save');
                    }

                    return array (  '_controller' => 'YallaWebsite\\BackendBundle\\Controller\\AdsManagerController::modifyAction',  '_route' => 'backend_ads_manager_save',);
                }

            }

            if (0 === strpos($pathinfo, '/backend/member')) {
                // backend_member_index
                if (rtrim($pathinfo, '/') === '/backend/member') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'backend_member_index');
                    }

                    return array (  '_controller' => 'YallaWebsite\\BackendBundle\\Controller\\MemberController::indexAction',  '_route' => 'backend_member_index',);
                }

                // backend_member_new
                if ($pathinfo === '/backend/member/new') {
                    return array (  '_controller' => 'YallaWebsite\\BackendBundle\\Controller\\MemberController::newAction',  '_route' => 'backend_member_new',);
                }

                // backend_member_show
                if (0 === strpos($pathinfo, '/backend/member/show') && preg_match('#^/backend/member/show/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_member_show')), array (  '_controller' => 'YallaWebsite\\BackendBundle\\Controller\\MemberController::showAction',));
                }

                // backend_member_edit
                if (0 === strpos($pathinfo, '/backend/member/edit') && preg_match('#^/backend/member/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_member_edit')), array (  '_controller' => 'YallaWebsite\\BackendBundle\\Controller\\MemberController::editAction',));
                }

                // backend_member_delete
                if (0 === strpos($pathinfo, '/backend/member/delete') && preg_match('#^/backend/member/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_member_delete')), array (  '_controller' => 'YallaWebsite\\BackendBundle\\Controller\\MemberController::deleteAction',));
                }

            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/snapshots')) {
            // sonata_media_gallery_index
            if (rtrim($pathinfo, '/') === '/snapshots') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_media_gallery_index');
                }

                return array (  '_controller' => 'Application\\Sonata\\MediaBundle\\Controller\\GalleryController::indexAction',  '_route' => 'sonata_media_gallery_index',);
            }

            // sonata_media_gallery_view
            if (0 === strpos($pathinfo, '/snapshots/view') && preg_match('#^/snapshots/view/(?P<id>.*)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_media_gallery_view')), array (  '_controller' => 'Application\\Sonata\\MediaBundle\\Controller\\GalleryController::viewAction',));
            }

        }

        if (0 === strpos($pathinfo, '/media')) {
            // sonata_media_view
            if (0 === strpos($pathinfo, '/media/view') && preg_match('#^/media/view/(?P<id>[^/]++)(?:/(?P<format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_media_view')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaController::viewAction',  'format' => 'reference',));
            }

            // sonata_media_download
            if (0 === strpos($pathinfo, '/media/download') && preg_match('#^/media/download/(?P<id>.*)(?:/(?P<format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_media_download')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaController::downloadAction',  'format' => 'reference',));
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        if (0 === strpos($pathinfo, '/secured')) {
            if (0 === strpos($pathinfo, '/secured/vote/voting-')) {
                // voting_upvote
                if ($pathinfo === '/secured/vote/voting-upvote') {
                    return array (  '_controller' => 'Kunstmaan\\VotingBundle\\Controller\\VotingController::upVoteAction',  '_route' => 'voting_upvote',);
                }

                // voting_downvote
                if ($pathinfo === '/secured/vote/voting-downvote') {
                    return array (  '_controller' => 'Kunstmaan\\VotingBundle\\Controller\\VotingController::downVoteAction',  '_route' => 'voting_downvote',);
                }

                if (0 === strpos($pathinfo, '/secured/vote/voting-facebook')) {
                    // voting_facebooklike
                    if ($pathinfo === '/secured/vote/voting-facebooklike') {
                        return array (  '_controller' => 'Kunstmaan\\VotingBundle\\Controller\\VotingController::facebookLikeAction',  '_route' => 'voting_facebooklike',);
                    }

                    // voting_facebooksend
                    if ($pathinfo === '/secured/vote/voting-facebooksend') {
                        return array (  '_controller' => 'Kunstmaan\\VotingBundle\\Controller\\VotingController::facebookSendAction',  '_route' => 'voting_facebooksend',);
                    }

                }

                // voting_linkedinshare
                if ($pathinfo === '/secured/vote/voting-linkedinshare') {
                    return array (  '_controller' => 'Kunstmaan\\VotingBundle\\Controller\\VotingController::linkedInShareAction',  '_route' => 'voting_linkedinshare',);
                }

            }

            if (0 === strpos($pathinfo, '/secured/connect')) {
                // hwi_oauth_connect_service
                if (0 === strpos($pathinfo, '/secured/connect/service') && preg_match('#^/secured/connect/service/(?P<service>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'hwi_oauth_connect_service')), array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::connectServiceAction',));
                }

                // hwi_oauth_connect_registration
                if (0 === strpos($pathinfo, '/secured/connect/registration') && preg_match('#^/secured/connect/registration/(?P<key>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'hwi_oauth_connect_registration')), array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::registrationAction',));
                }

                // hwi_oauth_service_redirect
                if (preg_match('#^/secured/connect/(?P<service>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'hwi_oauth_service_redirect')), array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::redirectToServiceAction',));
                }

            }

            if (0 === strpos($pathinfo, '/secured/login')) {
                // hwi_oauth_connect
                if (rtrim($pathinfo, '/') === '/secured/login') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'hwi_oauth_connect');
                    }

                    return array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::connectAction',  '_route' => 'hwi_oauth_connect',);
                }

                // facebook_login
                if ($pathinfo === '/secured/login/login_facebook') {
                    return array (  '_controller' => 'YallaWebsite\\FrontendBundle\\Controller\\DefaultController::FaceBookRedirectAction',  '_route' => 'facebook_login',);
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
