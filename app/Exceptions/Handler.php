<?php

namespace App\Exceptions;
use Illuminate\Support\Facades\Auth;
use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        if($this->isHttpException($exception))
        {
            switch ($exception->getStatusCode()) {
                case 401:
                        if (Auth::check() && Auth::user()->type == 'Admin') 
                        {
                            return redirect()->route('errors.401');
                        }
                        else
                        {
                            return redirect()->route('401');
                        }
                        break;
                case 403:
                   
                        if (Auth::check() && Auth::user()->type == 'Admin') 
                        {
                            return redirect()->route('errors.403');
                        }
                        else
                        {
                            return redirect()->route('403');
                        }
                    break;
                case 404:
                        if (Auth::check() && Auth::user()->type == 'Admin') 
                        {
                            return redirect()->route('errors.404');
                        }
                        else
                        {
                            return redirect()->route('404');
                        }
                    break;
                case 500:
                        if (Auth::check() && Auth::user()->type == 'Admin') 
                        {
                            return  redirect()->route('errors.500');
                        }
                        else
                        {
                            return redirect()->route('500');
                        }
                    break;
                default:
                    //return $this->renderHttpException($e);
                    if (Auth::check() && Auth::user()->type == 'Admin') 
                    {
                        return redirect()->route('errors.500');
                    }
                    else
                    {
                        return redirect()->route('500');
                    }
                    break;
            }
        }
        else
        {
            return parent::render($request, $exception);
        }
    }

    
}
