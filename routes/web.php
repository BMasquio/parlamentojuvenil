<?php

use Illuminate\Support\Facades\Route;
use App\Data\Models\State;
use App\Data\Models\School;
use App\Services\News\Service as NewsSync;
use App\Http\Controllers\Home as HomeController;

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

Route::get('/', ['as' => 'home', 'uses' => [HomeController::class, 'index']]);

/*
 * Main route
 */
Route::get('/{year?}', ['as' => 'home.year', 'uses' => 'Home@index'])->where(
    'year',
    '\d{4}'
);

/*
 * Auth
 */
Route::group(['prefix' => '/auth'], function () {
    Route::get('/logout', ['as' => 'auth.logout', 'uses' => 'Auth@logout']);

    Route::get('/login', ['as' => 'auth.index', 'uses' => 'Auth@index']);

    Route::get('/login/email', [
        'as' => 'auth.login.email',
        'uses' => 'EmailAuth@index',
    ]);
    Route::post('/login/email', [
        'as' => 'auth.login.email.post',
        'uses' => 'EmailAuth@post',
    ]);
    Route::post('/login/email/register', [
        'as' => 'auth.login.email.register',
        'uses' => 'EmailAuth@register',
    ]);
    Route::get('/login/email/student', [
        'as' => 'auth.login.email.student',
        'uses' => 'EmailAuth@student',
    ]);
    Route::get('/login/email/password', [
        'as' => 'auth.login.email.password',
        'uses' => 'EmailAuth@password',
    ]);
    Route::post('/login/email/password', [
        'as' => 'auth.login.email.password',
        'uses' => 'EmailAuth@resetPassword',
    ]);
    Route::get('/student/identify', [
        'as' => 'student.identify',
        'uses' => 'StudentController@identify',
    ]);

    /*
     * Social
     */
    Route::group(['prefix' => 'social'], function () {
        Route::get('/login/{socialNetwork}', [
            'as' => 'auth.social.redirect',
            'uses' => 'SocialAuthController@login',
        ]);

        Route::get('/login/{socialNetwork}/callback', [
            'as' => 'auth.social.callback',
            'uses' => 'SocialAuthController@socialNetworkCallback',
        ]);
    });

    /*
     * Student
     */
    Route::group(['prefix' => 'student'], function () {
        Route::post('/login', [
            'as' => 'auth.student.login',
            'uses' => 'StudentController@login',
        ]);
        Route::get('/wrongAge', [
            'as' => 'auth.student.wrong-age',
            'uses' => 'StudentController@wrongAge',
        ]);
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
        Route::get('/', [
            'as' => 'subscribe.index',
            'uses' => 'Subscriptions@index',
        ]);
    }
);

Route::group(['prefix' => '/vote'], function () {
    Route::group(
        ['middleware' => ['voting', 'auth', 'student-login']],
        function () {
            Route::get('/', ['as' => 'vote.index', 'uses' => 'Vote@index']);
            Route::get('/in/{subscription_id}', [
                'as' => 'vote.in',
                'uses' => 'Vote@voteIn',
            ]);
            Route::get('/confirm/{subscription_id}', [
                'as' => 'vote.confirm',
                'uses' => 'Vote@confirm',
            ]);
            Route::get('/error', [
                'as' => 'vote.error',
                'uses' => 'Vote@error',
            ]);
            Route::get('/delete/my/votes', [
                'as' => 'vote.delete',
                'uses' => 'Vote@deleteMyVotes',
            ]);
        }
    );

    Route::get('/voted', ['as' => 'vote.voted', 'uses' => 'Vote@voted']);
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
        Route::get('/', [
            'as' => 'flag-contest.subscribe.index',
            'uses' => 'FlagContest@subscribe',
        ]);

        Route::post('/', [
            'as' => 'flag-contest.subscribe.post',
            'uses' => 'FlagContest@post',
        ]);

        Route::get('/confirm/email/{confirmation_key}/{email}', [
            'as' => 'flag-contest.confirm.email',
            'uses' => 'FlagContest@confirmEmail',
        ]);
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
        Route::get('/', [
            'as' => 'flag-contest.vote.index',
            'uses' => 'FlagContest@vote',
        ]);

        Route::get('/select/{flag_id}', [
            'as' => 'flag-contest.vote.select',
            'uses' => 'FlagContest@select',
        ]);

        Route::get('/confirm', [
            'as' => 'flag-contest.vote.confirm',
            'uses' => 'FlagContest@confirm',
        ]);

        Route::get('/cast', [
            'as' => 'flag-contest.vote.cast',
            'uses' => 'FlagContest@cast',
        ]);
    }
);

Route::group(['prefix' => '/flag-contest/vote'], function () {
    Route::get('/show/{registration}', [
        'as' => 'flag-contest.vote.show-vote',
        'uses' => 'FlagContest@showVote',
    ]);
});

Route::group(['prefix' => '/vote'], function () {
    Route::get('/elected/round/{round}', [
        'as' => 'vote.elected',
        'uses' => 'Vote@elected',
    ]);
});

Route::group(['prefix' => '/', 'middleware' => ['auth']], function () {
    Route::get('/forget/me', ['as' => 'forget.me', 'uses' => 'User@forgetMe']);
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
    Route::get('/terms', ['as' => 'docs.terms', 'uses' => 'Docs@terms']);
    Route::get('/privacy', ['as' => 'docs.privacy', 'uses' => 'Docs@privacy']);
});

Route::get('schools/{city}', [
    'middleware' => 'cors',
    function ($city) {
        return School::allByName($city);
    },
]);

Route::get('download/{file}', [
    'as' => 'download',
    'uses' => function ($file) {
        $path =
            env('LOCAL_BASE_DIR') .
            DIRECTORY_SEPARATOR .
            env('BASE_DIR') .
            DIRECTORY_SEPARATOR .
            env('SITE_DIR') .
            DIRECTORY_SEPARATOR;

        return response()->download(public_path($path) . $file);
    },
]);

Route::group(
    ['prefix' => 'admin', 'middleware' => ['auth', 'only-administrators']],
    function () {
        Route::get('/', [
            'as' => 'admin.home',
            'uses' => function () {
                return redirect()->route('admin.subscriptions');
            },
        ]);

        Route::get('/subscriptions', [
            'as' => 'admin.subscriptions',
            'uses' => 'Admin@index',
        ]);

        Route::get('/schools', [
            'as' => 'admin.schools',
            'uses' => 'Admin@schools',
        ]);

        Route::get('/elected', [
            'as' => 'admin.elected',
            'uses' => 'Admin@elected',
        ]);

        Route::get('/seeduc', [
            'as' => 'admin.seeduc',
            'uses' => 'Admin@seeduc',
        ]);

        Route::get('/users', ['as' => 'admin.users', 'uses' => 'Admin@users']);

        Route::get('/votes/{subscription_id}', [
            'as' => 'admin.votes.student',
            'uses' => 'Admin@votesPerStudent',
        ]);

        Route::get('/vote/statistics', [
            'as' => 'admin.vote.statistics',
            'uses' => 'Admin@voteStatistics',
        ]);

        Route::get('/training/{subscription}', [
            'as' => 'admin.training',
            'uses' => 'Admin@training',
        ]);

        Route::get('/contest', [
            'as' => 'admin.contest',
            'uses' => 'Admin@contest',
        ]);

        Route::get('/contest/votes', [
            'as' => 'admin.contest-votes',
            'uses' => 'Admin@contestVotes',
        ]);

        /// Must be last
        Route::get('/{city}', ['as' => 'admin.city', 'uses' => 'Admin@city']);
    }
);

Route::get('subscriptions/schools', [
    'as' => 'subscriptions.schools',
    'uses' => 'Subscriptions@bySchool',
]);

Route::get('subscriptions/students', [
    'as' => 'subscriptions.students',
    'uses' => 'Subscriptions@byStudent',
]);

Route::group(['middleware' => 'check-student-age'], function () {
    Route::post('subscriptions', [
        'as' => 'subscriptions.store',
        'uses' => 'Subscriptions@store',
    ]);
});

Route::post('subscriptions/start', [
    'as' => 'subscriptions.start',
    'uses' => 'Subscriptions@start',
]);

Route::get('subscriptions/download', [
    'as' => 'subscriptions.download',
    'uses' => 'Subscriptions@download',
]);

Route::get('subscriptions/ignore/{id}', [
    'as' => 'subscriptions.ignore',
    'uses' => 'Subscriptions@ignore',
]);

Route::get('subscriptions/edit/{id}', [
    'as' => 'subscriptions.edit',
    'uses' => 'Subscriptions@edit',
]);

Route::post('subscriptions/edit/{id}', [
    'as' => 'subscriptions.edit',
    'uses' => 'Subscriptions@update',
]);

Route::group(
    [
        'prefix' => '/inscricao',
        'middleware' => [
            'subscribing',
            'auth',
            'student-login',
            'check-student-age',
        ],
    ],
    function () {
        Route::get('/', [
            'as' => 'subscriptions.index',
            'uses' => 'Subscriptions@index',
        ]);
    }
);

Route::group(['prefix' => 'api/v1'], function () {
    Route::get('timeline/{year}', [
        'as' => 'api.timeline',
        'uses' => 'Api@getTimeline',
    ]);

    Route::get('congressmen/{year}', [
        'as' => 'api.congressmen',
        'uses' => 'Api@getCongressmen',
    ]);

    Route::get('subscriptions', [
        'as' => 'subscriptions',
        'uses' => 'Subscriptions@byState',
    ]);

    Route::get('search/seeduc', [
        'as' => 'api.search.seeduc',
        'uses' => 'ApiSearch@seeduc',
    ]);

    Route::get('search/contest', [
        'as' => 'api.search.contest',
        'uses' => 'ApiSearch@contest',
    ]);

    Route::get('search/contest/votes', [
        'as' => 'api.search.contest.votes',
        'uses' => 'ApiSearch@contestVotes',
    ]);

    Route::get('search/users', [
        'as' => 'api.search.users',
        'uses' => 'ApiSearch@users',
    ]);

    Route::get('elected/{year?}', [
        'as' => 'api.elected',
        'uses' => 'Api@getElected',
    ]);

    Route::get('vote/statistics/{year?}', [
        'as' => 'api.vote.statistics',
        'uses' => 'Api@getVoteStatistics',
    ]);

    Route::post('validate/{type}', [
        'as' => 'api.validate',
        'uses' => 'Api@validateType',
    ]);

    Route::post('seeduc/upload', [
        'as' => 'api.seeduc.upload',
        'uses' => 'Api@seeducUpload',
    ]);
});

Route::get('article/{id}', [
    'as' => 'article.show',
    'uses' => 'News@showArticle',
]);

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
        Route::get('/', ['as' => 'training.index', 'uses' => 'Training@index']);
        Route::post('/', [
            'as' => 'training.login',
            'uses' => 'Training@login',
        ]);
        Route::get('/content', [
            'as' => 'training.content',
            'uses' => 'Training@content',
        ]);
        Route::get('/watch/{video}', [
            'as' => 'training.watch',
            'uses' => 'Training@watch',
        ]);
        Route::get('/download/{document}', [
            'as' => 'training.download',
            'uses' => 'Training@download',
        ]);
        Route::get('/logout', [
            'as' => 'training.download',
            'uses' => 'Training@logout',
        ]);

        Route::group(
            [
                'prefix' => '/quiz',
                'middleware' => ['training', 'auth', 'student-login'],
            ],
            function () {
                Route::get('/', ['as' => 'quiz.index', 'uses' => 'Quiz@index']);
                Route::get('/{id}/questions', [
                    'as' => 'quiz.questions',
                    'uses' => 'Quiz@questions',
                ]);
                Route::get('/{id}/answer/{number}/{answer}', [
                    'as' => 'quiz.answer',
                    'uses' => 'Quiz@answer',
                ]);
                Route::post('/answers/', [
                    'as' => 'quiz.answers',
                    'uses' => 'Quiz@answers',
                ]);
                Route::get('/result', [
                    'as' => 'quiz.result',
                    'uses' => 'Quiz@result',
                ]);
                Route::get('/result/{id}', [
                    'as' => 'quiz.result',
                    'uses' => 'Quiz@result',
                ]);
            }
        );
    }
);

Route::get('{year}', ['as' => 'edition', 'uses' => 'Pages@edition'])->where(
    'year',
    '[0-9][0-9][0-9][0-9]'
);

Route::get('{year}/gallery', [
    'as' => 'page.gallery',
    'uses' => 'Pages@gallery',
]);
Route::get('{year}/news', ['as' => 'page.news', 'uses' => 'Pages@news']);

Route::get('{year}/members', [
    'as' => 'page.members',
    'uses' => 'Pages@members',
]);
Route::get('{year}/clipping', [
    'as' => 'page.clipping',
    'uses' => 'Pages@clipping',
]);

Route::get('/fillregional', [
    'as' => 'fillregional',
    'uses' => 'Subscriptions@fillRegional',
]);

Route::get('/must-be-congressman', [
    'as' => 'must.be.congressman',
    'uses' => 'Auth@mustBeCongressman',
]);
