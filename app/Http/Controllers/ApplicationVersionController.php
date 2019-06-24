<?php

namespace App\Http\Controllers;

use App\ApplicationVersion;
use Illuminate\Http\Request;
use PHLAK\SemVer\Version;

class ApplicationVersionController extends Controller
{

    /**
     *  Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \PHLAK\SemVer\Version
     */
    public function __invoke(Request $request)
    {
        $version = new Version(ApplicationVersion::API);

        return $version;
    }
}
