<?php

use App\Http\Controllers\AjaxController;
use App\Http\Controllers\Auth\SocialAuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SiteMapController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Language Route
Route::post('/lang', [LanguageController::class, 'index'])->middleware('LanguageSwitcher')->name('lang');
// For Language direct URL link
Route::get('/lang/{lang}', [LanguageController::class, 'change'])->middleware('LanguageSwitcher')->name('langChange');
Route::get('/locale/{lang}', [LanguageController::class, 'locale'])->middleware('LanguageSwitcher')->name('localeChange');
// .. End of Language Route

// No Permission
Route::get('/403', function () {
    return view('errors.403');
})->name('NoPermission');


// Not Found
Route::get('/404', [HomeController::class, 'error_404'])->name('NotFound');

// Backend Routes
Route::get('/login', function () {
    return redirect('/');
});
Route::get('/register', function () {
    return redirect('/');
});

// RSS Feed Routes
if (env("RSS_STATUS", 0)) {
    Route::feeds();
}

// Social Auth
Route::get('/oauth/{driver}', [SocialAuthController::class, 'redirectToProvider'])->name('social.oauth');
Route::get('/oauth/{driver}/callback', [SocialAuthController::class, 'handleProviderCallback'])->name('social.callback');

Route::Group(['prefix' => env('BACKEND_PATH')], function () {
    Auth::routes();
});
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

// Start of Frontend Routes
// ../site map
Route::get('/sitemap.xml', [SiteMapController::class, 'siteMap'])->name('siteMap');
Route::get('/{lang}/sitemap', [SiteMapController::class, 'siteMap'])->name('siteMapByLang');

Route::get('/search', [MainController::class, 'index']);
Route::get('/unscramble', [MainController::class, 'unscramble']);
Route::post('/unscramble', [MainController::class, 'unscramble']);
Route::post('/search', [AjaxController::class, 'index']);
Route::post('/search', [AjaxController::class, 'search'])->name('search');
Route::get('/kelimebulucu', [AjaxController::class, 'kelimebulucu'])->name('kelimebulucu');
Route::get('/getMeaning', [AjaxController::class, 'getMeaning'])->name('getMeaning');
Route::get('/results', [AjaxController::class, 'results'])->name('results');
Route::get('/definition', [AjaxController::class, 'definition']);

Route::get('{harfler}/harflerden-kelime-turetme', [AjaxController::class, 'wordHarfler'])->name('search.harflerWord');

Route::get('/{start}-ile-baslayan-kelimeler', [AjaxController::class, 'wordStartsWith'])->name('search.start');
Route::get('/{end}-ile-biten-kelimeler', [AjaxController::class, 'wordEndsWith'])->name('search.end');
Route::get('/icinde-{contains}-olan-kelimeler', [AjaxController::class, 'wordContains'])->name('search.contains');
Route::get('/{length}-harfli-kelimeler', [AjaxController::class, 'wordLength'])->name('search.length');

Route::get('/{start}-ile-baslayan-icinde-{contains}-olan-kelimeler', [AjaxController::class, 'wordStartContains'])->name('search.start_contains');
Route::get('/{start}-ile-baslayan-{ends}-ile-biten-kelimeler', [AjaxController::class, 'wordStartEnds'])->name('search.start_ends');
Route::get('/{start}-ile-baslayan-{length}-harfli-kelimeler', [AjaxController::class, 'wordStartLength'])->name('search.start_length');
Route::get('/icinde-{contains}-olan-{end}-ile-biten-kelimeler', [AjaxController::class, 'wordContainsEnd'])->name('search.contains_end');
Route::get('/icinde-{contains}-olan-{length}-harfli-kelimeler', [AjaxController::class, 'wordContainsLength'])->name('search.contains_length');
Route::get('/{end}-ile-biten-{length}-harfli-kelimeler', [AjaxController::class, 'wordEndLength'])->name('search.end_length');

Route::get('/{start}-baslayan-icinde-{contains}-{end}-ile-biten-kelimeler', [AjaxController::class, 'wordStartContainsEnds'])->name('search.start_contains_end');
Route::get('/{start}-baslayan-icinde-{contains}-{length}-harfli-kelimeler', [AjaxController::class, 'wordStartContainsLength'])->name('search.start_contains_length');
Route::get('/{start}-baslayan-{end}-biten-{length}-harfli-kelimeler', [AjaxController::class, 'wordStartEndsLength'])->name('search.start_ends_length');
Route::get('/icinde-{contains}-{end}-biten-{length}-harfli-kelimeler', [AjaxController::class, 'wordContainsEndsLength'])->name('search.contains_ends_length');


Route::get('/{start}-baslayan-icinde-{contains}-{end}-biten-{length}-harfli-kelimeler', [AjaxController::class, 'wordAllOptions'])->name('search.all_options');

Route::get('/', [HomeController::class, 'HomePage'])->name('Home');

Route::post('/form-submit', [HomeController::class, 'formSubmit'])->name('formSubmit');

// ../home url
Route::get('/home', [HomeController::class, 'HomePage'])->name('HomePage');
Route::get('/{lang?}/home', [HomeController::class, 'HomePageByLang'])->name('HomePageByLang');
// ../subscribe to newsletter submit  (ajax url)
Route::post('/subscribe', [HomeController::class, 'subscribeSubmit'])->name('subscribeSubmit');
// ../Comment submit  (ajax url)
Route::post('/comment', [HomeController::class, 'commentSubmit'])->name('commentSubmit');
// ../Order submit  (ajax url)
Route::post('/order', [HomeController::class, 'orderSubmit'])->name('orderSubmit');
// ..Custom URL for contact us page ( www.site.com/contact )
Route::get('/contact', [HomeController::class, 'ContactPage'])->name('contactPage');
Route::get('/{lang?}/contact', [HomeController::class, 'ContactPageByLang'])->name('contactPageByLang');
// ../contact message submit  (ajax url)
Route::post('/contact/submit', [HomeController::class, 'ContactPageSubmit'])->name('contactPageSubmit');
// ..if page by name ( ex: www.site.com/about )
Route::get('/topic/{id}', [HomeController::class, 'topic'])->name('FrontendPage');
// ..if page by user id ( ex: www.site.com/user )
Route::get('/user/{id}', [HomeController::class, 'userTopics'])->name('FrontendUserTopics');
Route::get('/{lang?}/user/{id}', [HomeController::class, 'userTopicsByLang'])->name('FrontendUserTopicsByLang');
// ../search
Route::get('/search', [HomeController::class, 'searchTopics'])->name('searchTopics');

// ..Topics url  ( ex: www.site.com/news/topic/32 )
Route::get('/{section}/topic/{id}', [HomeController::class, 'topic'])->name('FrontendTopic');
Route::get('/{lang?}/{section}/topic/{id}', [HomeController::class, 'topicByLang'])->name('FrontendTopicByLang');

// ..Sub category url for Section  ( ex: www.site.com/products/2 )
Route::get('/{section}/{cat}', [HomeController::class, 'topics'])->name('FrontendTopicsByCat');
Route::get('/{lang?}/{section}/{cat}', [HomeController::class, 'topicsByLang'])->name('FrontendTopicsByCatWithLang');

// ..Section url by name  ( ex: www.site.com/news )
Route::get('/{section}', [HomeController::class, 'topics'])->name('FrontendTopics');
Route::get('/{lang?}/{section}', [HomeController::class, 'topicsByLang'])->name('FrontendTopicsByLang');

// ..SEO url  ( ex: www.site.com/title-here )
Route::get('/{seo_url_slug}', [HomeController::class, 'SEO'])->name('FrontendSEO');
Route::get('/{lang?}/{seo_url_slug}', [HomeController::class, 'SEOByLang'])->name('FrontendSEOByLang');

// ..if page by name and language( ex: www.site.com/ar/about )
Route::get('/{lang?}/topic/{id}', [HomeController::class, 'topicByLang'])->name('FrontendPageByLang');
// .. End of Frontend Route

