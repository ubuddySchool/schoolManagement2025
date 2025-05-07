<?php

namespace App\Http\Requests\Auth;

use GuzzleHttp\Psr7\Request;
use Illuminate\Auth\Events\Lockout;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Log;  
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB; 


class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'school_username' => ['required', 'string'], 
            'password' => ['required', 'string'],
        ];
    }

    /**
     * Attempt to authenticate the request's credentials.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    // public function authenticate(): void
    // {
    //     $this->ensureIsNotRateLimited();

    //     if (! Auth::attempt($this->only('school_username', 'password'), $this->boolean('remember'))) {
    //         RateLimiter::hit($this->throttleKey());

    //         throw ValidationException::withMessages([
    //             'school_username' => trans('auth.failed'),
    //         ]);
    //     }

    //     RateLimiter::clear($this->throttleKey());
    // }

    public function authenticate(): void
{
    $this->ensureIsNotRateLimited();

    $credentials = $this->only('school_username', 'password');

    if (! Auth::attempt($credentials, $this->boolean('remember'))) {
        
        RateLimiter::hit($this->throttleKey());

        throw ValidationException::withMessages([
            'school_username' => trans('auth.failed'),
        ]);
    }

   
    RateLimiter::clear($this->throttleKey());

    $user = Auth::user();

    $activeSession = DB::table('schoolsessions')
        ->where('school_id', $user->id) 
        ->where('status',1)
        ->first();

        Log::info('Session ID stored in session.', [
            'user_id' => $user->id,
            'session_id' => $activeSession->session_id,
        ]);

    if ($activeSession) {
        Session::put('session_id', $activeSession->session_id);
    }
}


    /**
     * Ensure the login request is not rate limited.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function ensureIsNotRateLimited(): void
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        event(new Lockout($this));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
            'email' => trans('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    /**
     * Get the rate limiting throttle key for the request.
     */
    public function throttleKey(): string
    {
        return Str::transliterate(Str::lower($this->string('school_username')).'|'.$this->ip());
    }
}
