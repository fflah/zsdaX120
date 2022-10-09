<?php

set_error_handler('exceptions_error_handler');
function exceptions_error_handler($severity, $message, $filename, $lineno)
{
    if (error_reporting() == 0) {
        return;
    }
    if (error_reporting() & $severity) {
        throw new ErrorException($message, 0, $severity, $filename, $lineno);
    }
}

function encode_id($id = null)
{
    $return = '';
    if (@$id) {
        require_once(APPPATH . '/third_party/hashids-1.0.5/lib/Hashids/HashGenerator.php');
        require_once(APPPATH . '/third_party/hashids-1.0.5/lib/Hashids/Hashids.php');
        $hashids = new Hashids\Hashids('this is my salt', 32);
        $hash = $hashids->encode($id);
        $return = $hash;
    }
    return $return;
}



function decode_id($hash = null)
{
    $return = null;
    if (@$hash) {
        try {
            require_once(APPPATH . '/third_party/hashids-1.0.5/lib/Hashids/HashGenerator.php');
            require_once(APPPATH . '/third_party/hashids-1.0.5/lib/Hashids/Hashids.php');
            $hashids = new Hashids\Hashids('this is my salt', 32);
            $id = $hashids->decode($hash);
            $return = $id[0];
        } catch (Exception $e) {
            // pass
        }
    }
    return @$return;
}
