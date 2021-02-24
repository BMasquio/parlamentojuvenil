<?php

use Illuminate\Support\Facades\Route;
use App\Models\State;
use App\Models\School;
use App\Services\News\Service as NewsSync;
use App\Http\Controllers\Home as HomeController;
use App\Http\Controllers\Auth;
use App\Http\Controllers\EmailAuth;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SocialAuthController;
use App\Http\Controllers\Subscriptions;
use App\Http\Controllers\Vote;
use App\Http\Controllers\FlagContest;
use App\Http\Controllers\User;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Docs;
use App\Http\Controllers\Api;
use App\Http\Controllers\ApiSearch;
use App\Http\Controllers\News;
use App\Http\Controllers\Training;
use App\Http\Controllers\Quiz;
use App\Http\Controllers\Pages;
use App\Http\Controllers\Admin\Students as AdminStudents;
use App\Http\Controllers\Admin\Subscriptions as AdminSubscriptions;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
//
/*
 * Main route
 */
Route::get('/{year?}', [HomeController::class, 'index'])
    ->where('year', '\d{4}')
    ->name('home.year');

/*
 * Auth
 */
Route::group(['prefix' => '/auth'], function () {
    Route::get('/logout', [Auth::class, 'logout'])->name('auth.logout');

    Route::get('/login', [Auth::class, 'index'])->name('auth.index');

    Route::get('/login/email', [EmailAuth::class, 'index'])->name('auth.login.email');
    Route::post('/login/email', [EmailAuth::class, 'post'])->name('auth.login.email.post');
    Route::post('/login/email/register', [EmailAuth::class, 'register'])->name(
        'auth.login.email.register'
    );
    Route::get('/login/email/student', [EmailAuth::class, 'student'])->name(
        'auth.login.email.student'
    );
    Route::get('/login/email/password', [EmailAuth::class, 'password'])->name(
        'auth.login.email.password'
    );
    Route::post('/login/email/password', [EmailAuth::class, 'resetPassword'])->name(
        'auth.login.email.password'
    );

    Route::get('/student/identify', [StudentController::class, 'identify'])->name(
        'student.identify'
    );

    /*
     * Social
     */
    Route::group(['prefix' => 'social'], function () {
        Route::get('/login/{socialNetwork}', [SocialAuthController::class, 'login'])->name(
            'auth.social.redirect'
        );

        Route::get('/login/{socialNetwork}/callback', [
            SocialAuthController::class,
            'socialNetworkCallback',
        ])->name('auth.social.callback');
    });

    /*
     * Student
     */
    Route::group(['prefix' => 'student'], function () {
        Route::post('/login', [StudentController::class, 'login'])->name('auth.student.login');
        Route::get('/wrongAge', [StudentController::class, 'wrongAge'])->name(
            'auth.student.wrong-age'
        );
    });
});

Route::group(
    [
        'prefix' => '/subscribe/{force?}',
        'middleware' => [
            'subscribing',
            'auth',
            'student-login',
            'check-student-age',
            'cannot-re-subscribe',
        ],
    ],
    function () {
        Route::get('/', [Subscriptions::class, 'index'])->name('subscribe.index');
    }
);

Route::group(['prefix' => '/vote'], function () {
    Route::group(['middleware' => ['voting', 'auth', 'student-login']], function () {
        Route::get('/', [Vote::class, 'index'])->name('vote.index');

        Route::get('/in/{subscription_id}', [Vote::class, 'voteIn'])->name('vote.in');

        Route::get('/confirm/{subscription_id}', [Vote::class, 'confirm'])->name('vote.confirm');

        Route::get('/error', [Vote::class, 'error'])->name('vote.error');

        Route::get('/delete/my/votes', [Vote::class, 'deleteMyVotes'])->name('vote.delete');
    });

    Route::get('/voted', [Vote::class, 'deleteMyVotes'])->name('vote.voted');
});

Route::group(
    [
        'prefix' => '/flag-contest/subscribe',
        'middleware' => [
            'flag-contest-subscribing',
            'auth',
            'student-login',
            'flag-contest-cannot-re-subscribe',
        ],
    ],
    function () {
        Route::get('/', [FlagContest::class, 'subscribe'])->name('flag-contest.subscribe.index');

        Route::post('/', [FlagContest::class, 'post'])->name('flag-contest.subscribe.post');

        Route::get('/confirm/email/{confirmation_key}/{email}', [
            FlagContest::class,
            'confirmEmail',
        ])->name('flag-contest.confirm.email');
    }
);

Route::group(
    [
        'prefix' => '/flag-contest/vote',
        'middleware' => [
            'flag-contest-voting',
            'auth',
            'student-login',
            'flag-contest-can-vote-only-once',
        ],
    ],
    function () {
        Route::get('/', [FlagContest::class, 'vote'])->name('flag-contest.vote.index');

        Route::get('/select/{flag_id}', [FlagContest::class, 'select'])->name(
            'flag-contest.vote.select'
        );

        Route::get('/confirm', [FlagContest::class, 'confirm'])->name('flag-contest.vote.confirm');

        Route::get('/cast', [FlagContest::class, 'cast'])->name('flag-contest.vote.cast');
    }
);

Route::group(['prefix' => '/flag-contest/vote'], function () {
    Route::get('/show/{registration}', [FlagContest::class, 'showVote'])->name(
        'flag-contest.vote.show-vote'
    );
});

Route::group(['prefix' => '/vote'], function () {
    Route::get('/elected/round/{round}', [Vote::class, 'elected'])->name('vote.elected');
});

Route::group(['prefix' => '/', 'middleware' => ['auth']], function () {
    Route::get('/forget/me', [User::class, 'forgetMe'])->name('forget.me');
});

Route::get('news/sync', function (NewsSync $news) {
    return $news->sync();
});

Route::get('cities', function () {
    return State::where('code', 'RJ')
        ->first()
        ->cities()
        ->orderBy('name')
        ->get();
});

Route::group(['prefix' => '/docs'], function () {
    Route::get('/terms', [Docs::class, 'terms'])->name('docs.terms');
    Route::get('/privacy', [Docs::class, 'privacy'])->name('docs.privacy');
});

Route::get('schools/{city}', [
    'middleware' => 'cors',
    function ($city) {
        return School::allByName($city);
    },
]);

Route::get('download/{file}', [
    function ($file) {
        $path =
            env('LOCAL_BASE_DIR') .
            DIRECTORY_SEPARATOR .
            env('BASE_DIR') .
            DIRECTORY_SEPARATOR .
            env('SITE_DIR') .
            DIRECTORY_SEPARATOR;

        return response()->download(public_path($path) . $file);
    },
])->name('download');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'only-administrators']], function () {
    Route::get('/', function () {
        return redirect()->route('admin.subscriptions');
    })->name('admin.home');

    Route::get('/subscriptions', [Admin::class, 'index'])->name('admin.subscriptions');

    Route::get('/schools', [Admin::class, 'schools'])->name('admin.schools');

    Route::get('/elected', [Admin::class, 'elected'])->name('admin.elected');

    Route::get('/seeduc', [Admin::class, 'seeduc'])->name('admin.seeduc');

    Route::get('/users', [Admin::class, 'users'])->name('admin.users');

    Route::get('/votes/{subscription_id}', [Admin::class, 'votesPerStudent'])->name(
        'admin.votes.student'
    );

    Route::get('/vote/statistics', [Admin::class, 'voteStatistics'])->name('admin.vote.statistics');

    Route::get('/training/{subscription}', [Admin::class, 'training'])->name('admin.training');

    Route::get('/contest', [Admin::class, 'contest'])->name('admin.contest');

    Route::get('/contest/votes', [Admin::class, 'contestVotes'])->name('admin.contest-votes');

    /// Must be last
    Route::get('/{city}', [Admin::class, 'city'])->name('admin.city');

    Route::group(['prefix' => '/students'], function () {
        Route::get('/{id}', [AdminStudents::class, 'show'])->name('students.show');
    });

    Route::group(['prefix' => '/subscriptions'], function () {
        Route::get('/{id}', [AdminSubscriptions::class, 'show'])->name('subscriptions.show');
    });
});

Route::get('subscriptions/schools', [Subscriptions::class, 'bySchool'])->name(
    'subscriptions.schools'
);

Route::get('subscriptions/students', [Subscriptions::class, 'byStudent'])->name(
    'subscriptions.students'
);

Route::group(['middleware' => 'check-student-age'], function () {
    Route::post('subscriptions', [Subscriptions::class, 'store'])->name('subscriptions.store');
});

Route::post('subscriptions/start', [Subscriptions::class, 'start'])->name('subscriptions.start');

Route::get('subscriptions/download', [Subscriptions::class, 'download'])->name(
    'subscriptions.download'
);

Route::get('subscriptions/ignore/{id}', [Subscriptions::class, 'ignore'])->name(
    'subscriptions.ignore'
);

Route::get('subscriptions/edit/{id}', [Subscriptions::class, 'edit'])->name('subscriptions.edit');

Route::post('subscriptions/edit/{id}', [Subscriptions::class, 'update'])->name(
    'subscriptions.edit'
);

Route::group(
    [
        'prefix' => '/inscricao',
        'middleware' => ['subscribing', 'auth', 'student-login', 'check-student-age'],
    ],
    function () {
        Route::get('/', [Subscriptions::class, 'index'])->name('subscriptions.index');
    }
);

Route::group(['prefix' => 'api/v1'], function () {
    Route::get('timeline/{year}', [Api::class, 'getTimeline'])->name('api.timeline');

    Route::get('congressmen/{year}', [Api::class, 'getCongressmen'])->name('api.congressmen');

    Route::get('subscriptions', [Subscriptions::class, 'byState'])->name('subscriptions');

    Route::get('search/seeduc', [ApiSearch::class, 'seeduc'])->name('api.search.seeduc');

    Route::get('search/contest', [ApiSearch::class, 'contest'])->name('api.search.contest');

    Route::get('search/contest/votes', [ApiSearch::class, 'contestVotes'])->name(
        'api.search.contest.votes'
    );

    Route::get('search/users', [ApiSearch::class, 'users'])->name('api.search.users');

    Route::get('elected/{year?}', [Api::class, 'getElected'])->name('api.elected');

    Route::get('vote/statistics/{year?}', [Api::class, 'getVoteStatistics'])->name(
        'api.vote.statistics'
    );

    Route::post('validate/{type}', [Api::class, 'validateType'])->name('api.validate');

    Route::post('seeduc/upload', [Api::class, 'seeducUpload'])->name('api.seeduc.upload');
});

Route::get('article/{id}', [News::class, 'showArticle'])->name('article.show');

Route::group(
    [
        'prefix' => '/training',
        'middleware' => [
            /*
             * Desabilitando os middlewares a pedido de todos poderem acessar (23/09)

                'training',
                'auth',
                'student-login',
                'must-be-congressman',
             */
        ],
    ],
    function () {
        Route::get('/', [Training::class, 'index'])->name('training.index');
        Route::post('/', [Training::class, 'login'])->name('training.login');
        Route::get('/content', [Training::class, 'content'])->name('training.content');
        Route::get('/watch/{video}', [Training::class, 'watch'])->name('training.watch');
        Route::get('/download/{document}', [Training::class, 'download'])->name(
            'training.download'
        );
        Route::get('/logout', [Training::class, 'logout'])->name('training.download');

        Route::group(
            [
                'prefix' => '/quiz',
                'middleware' => ['training', 'auth', 'student-login'],
            ],
            function () {
                Route::get('/', [Quiz::class, 'index'])->name('quiz.index');
                Route::get('/{id}/questions', [Quiz::class, 'questions'])->name('quiz.questions');
                Route::get('/{id}/answer/{number}/{answer}', [Quiz::class, 'answer'])->name(
                    'quiz.answer'
                );
                Route::post('/answers/', [Quiz::class, 'answers'])->name('quiz.answers');
                Route::get('/result', [Quiz::class, 'result'])->name('quiz.result');
                Route::get('/result/{id}', [Quiz::class, 'result'])->name('quiz.result');
            }
        );
    }
);

Route::get('{year}/news', [Pages::class, 'news'])->name('page.news');

Route::get('{year}', [Pages::class, 'edition'])
    ->where('year', '[0-9][0-9][0-9][0-9]')
    ->name('edition');

Route::get('{year}/gallery', [Pages::class, 'gallery'])->name('page.gallery');

Route::get('{year}/members', [Pages::class, 'members'])->name('page.members');
Route::get('{year}/clipping', [Pages::class, 'clipping'])->name('page.clipping');

Route::get('/fillregional', [Subscriptions::class, 'fillRegional'])->name('fillregional');

Route::get('/must-be-congressman', [Auth::class, 'mustBeCongressman'])->name('must.be.congressman');
