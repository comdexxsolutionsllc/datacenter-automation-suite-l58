<?php

namespace App\Http\Controllers\Auth;

use App\Models\Roles\RoleCollection;

trait Loginable
{
    public static function bootLoginable()
    {
        self::setGuestMiddleware();
    }

    /**
     * Set Guest Middleware.
     */
    protected function setGuestMiddleware(): void
    {
        ($this->guard() === 'customer') ? $this->middleware('guest')->except('logout') : $this->middleware('guest:' . $this->role())->except('logout');
    }

    /**
     * @return mixed
     */
    private function role()
    {
        preg_match("/(?:.login\/)(?'role'.*)/", url()->current(), $matches);

        $role = $matches['role'] ?? RoleCollection::default();

        // cache()->put('guard', $role);

        return $role;
    }

    /**
     * Where to redirect users after login.
     *
     * @return string
     */
    public function redirectTo(): string
    {
        switch ($this->role()) {
            case 'customer':
                return route('home.customer');
                break;
            case 'employee':
                return route('home.employee');
                break;
            case 'vendor':
                return route('home.vendor');
                break;
            case 'whitegloves':
                return route('home.whitegloves');
                break;
            default:
                break;
        }
    }

    /**
     * @param $role
     *
     * @return \Illuminate\Contracts\Routing\UrlGenerator|string
     */
    private function postUrl($role)
    {
        return $this->roles->has($role) ? url("login/{$role}") : url('login');
    }
}
