<?php

namespace App\Exceptions\Course;

use Exception;

class CourseUpdateException extends Exception
{
    /**
     * Render the exception as an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function render($request)
    {
        //
    }

    /**
     * Get the exception's context information.
     *
     * @return array
     */
    public function context()
    {
        return [
            "Update failed",
        ];
    }
}
