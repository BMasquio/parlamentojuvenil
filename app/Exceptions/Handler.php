<?php

namespace App\Exceptions;

use Exception;
use Psr\Log\LoggerInterface;
use App\Services\Views\Builder;
use App\Data\Repositories\Data;
use Illuminate\Support\Facades\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [
        HttpException::class,
    ];

    /**
     * @var Builder
     */
    protected $viewBuilder;

    public function __construct(Builder $viewBuilder, LoggerInterface $log, Data $dataRepository)
    {
        $this->viewBuilder = $viewBuilder;

        $this->viewBuilder->setDataRepository($dataRepository);

        parent::__construct($log);
    }

    protected function handleException($e)
    {
        if ($e instanceof Authentication) {
            return redirect()
                    ->back()
                    ->withInput()
                    ->withErrors($e->getMessage());
        }

        if ($e instanceof StudentAlreadyVoted)
        {
            $view = $this
                ->viewBuilder
                ->buildViewData(
                    view(make_view_name_year_based('messages.already-voted'))
                );

            return Response::make($view);
        }

        if ($e instanceof AlreadySubscribed)
        {
            $view = $this
                        ->viewBuilder
                        ->buildViewData(
                            view(make_view_name_year_based('messages.already-subscribed'))
                        );

            return Response::make($view);
        }

        if ($e instanceof StudentAlreadyVotedOnFlag)
        {
            return redirect()->route('flag-contest.vote.show-vote', ['registration' => $e->getRegistration()]);
        }

        if ($e instanceof NotFoundHttpException)
        {
            return Response::make(view('errors.404'), 404);
        }

        return Response::make(view('errors.500'), 500);
    }

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $e
     * @return void
     */
    public function report(Exception $e)
    {
        return parent::report($e);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $e
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $e)
    {
        if (! config('app.debug'))
        {
            if ($response = $this->handleException($e))
            {
                return $response;
            }
        }

        return parent::render($request, $e);
    }
}
