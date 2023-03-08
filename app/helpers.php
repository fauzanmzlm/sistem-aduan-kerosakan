<?php
if (!function_exists('isValidData')) {
    /**
     * Check if a given data value is valid.
     *
     * @param $data The status value to check
     * @param $dataArray The data array receices array of data
     * @return bool Returns true if the status value is valid, false otherwise.
     */
    function isValidData($status, $dataArray)
    {
        return array_key_exists($status, $dataArray);
    }
}

?>