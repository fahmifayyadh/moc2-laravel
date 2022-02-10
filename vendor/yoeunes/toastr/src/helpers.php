<?php

use Yoeunes\Toastr\Toastr;

if (! function_exists('toastr')) {
    /**
<<<<<<< HEAD
     * @param  string  $message
     * @param  string  $type
     * @param  string  $title
     * @param  array  $options
=======
     * @param string $message
     * @param string $type
     * @param string $title
     * @param array  $options
     *
>>>>>>> parent of 31cfa1b1 (p)
     * @return Toastr
     */
    function toastr(string $message = null, string $type = 'success', string $title = '', array $options = []): Toastr
    {
        if (is_null($message)) {
            return app('toastr');
        }

        return app('toastr')->addNotification($type, $message, $title, $options);
    }
}

if (! function_exists('toastInfo')) {
    /**
<<<<<<< HEAD
     * @param  string  $message
     * @param  string  $title
     * @param  array  $options
=======
     * @param string $message
     * @param string $title
     * @param array  $options
     *
>>>>>>> parent of 31cfa1b1 (p)
     * @return Toastr
     */
    function toastInfo(string $message = null, string $title = '', array $options = []): Toastr
    {
        return app('toastr')->addNotification(Toastr::INFO, $message, $title, $options);
    }
}

if (! function_exists('toastSuccess')) {
    /**
<<<<<<< HEAD
     * @param  string  $message
     * @param  string  $title
     * @param  array  $options
=======
     * @param string $message
     * @param string $title
     * @param array  $options
     *
>>>>>>> parent of 31cfa1b1 (p)
     * @return Toastr
     */
    function toastSuccess(string $message = null, string $title = '', array $options = []): Toastr
    {
        return app('toastr')->addNotification(Toastr::SUCCESS, $message, $title, $options);
    }
}

if (! function_exists('toastWarning')) {
    /**
<<<<<<< HEAD
     * @param  string  $message
     * @param  string  $title
     * @param  array  $options
=======
     * @param string $message
     * @param string $title
     * @param array  $options
     *
>>>>>>> parent of 31cfa1b1 (p)
     * @return Toastr
     */
    function toastWarning(string $message = null, string $title = '', array $options = []): Toastr
    {
        return app('toastr')->addNotification(Toastr::WARNING, $message, $title, $options);
    }
}

if (! function_exists('toastError')) {
    /**
<<<<<<< HEAD
     * @param  string  $message
     * @param  string  $title
     * @param  array  $options
=======
     * @param string $message
     * @param string $title
     * @param array  $options
     *
>>>>>>> parent of 31cfa1b1 (p)
     * @return Toastr
     */
    function toastError(string $message = null, string $title = '', array $options = []): Toastr
    {
        return app('toastr')->addNotification(Toastr::ERROR, $message, $title, $options);
    }
}

if (! function_exists('toastr_js')) {
    /**
<<<<<<< HEAD
     * @param  string  $version
     * @param  string  $src
=======
     * @param string $version
     * @param string $src
     *
>>>>>>> parent of 31cfa1b1 (p)
     * @return string
     */
    function toastr_js(string $version = '2.1.4', string $src = null): string
    {
        if (null === $src) {
            $src = 'https://cdnjs.cloudflare.com/ajax/libs/toastr.js/'.$version.'/toastr.min.js';
        }

        return '<script type="text/javascript" src="'.$src.'"></script>';
    }
}

if (! function_exists('toastr_css')) {
    /**
<<<<<<< HEAD
     * @param  string  $version
     * @param  string  $href
=======
     * @param string $version
     * @param string $href
     *
>>>>>>> parent of 31cfa1b1 (p)
     * @return string
     */
    function toastr_css(string $version = '2.1.4', string $href = null): string
    {
        if (null === $href) {
            $href = 'https://cdnjs.cloudflare.com/ajax/libs/toastr.js/'.$version.'/toastr.min.css';
        }

        return '<link rel="stylesheet" type="text/css" href="'.$href.'">';
    }
}

if (! function_exists('jquery')) {
    /**
<<<<<<< HEAD
     * @param  string  $version
     * @param  string  $src
=======
     * @param string $version
     * @param string $src
     *
>>>>>>> parent of 31cfa1b1 (p)
     * @return string
     */
    function jquery(string $version = '3.3.1', string $src = null): string
    {
        if (null === $src) {
            $src = 'https://cdnjs.cloudflare.com/ajax/libs/jquery/'.$version.'/jquery.min.js';
        }

        return '<script type="text/javascript" src="'.$src.'"></script>';
    }
}

<<<<<<< HEAD
if (! function_exists('toastr_path')) {
    /**
     * normalize paths for linux and windows.
     *
     * @param  string  $path
=======
if (!function_exists('toastr_path')) {
    /**
     * normalize paths for linux and windows
     *
     * @param string $path
     *
>>>>>>> parent of 31cfa1b1 (p)
     * @return string
     */
    function toastr_path($path = ''): string
    {
<<<<<<< HEAD
        return str_replace(['/', '\\'], DIRECTORY_SEPARATOR, $path);
=======
        return str_replace(array('/', '\\'), DIRECTORY_SEPARATOR, $path);
>>>>>>> parent of 31cfa1b1 (p)
    }
}
