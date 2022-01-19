<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        //
        "update-banner-status","delete-banner","update-store-status","delete-store",
        "update-category-status","delete-category","update-coupon-status","delete-coupon",
        "update-deal-status","delete-deal","update-blog-status","delete-blog",
    ];
}
