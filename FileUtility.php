<?php
class FileUtility
{
    // Write data to a CSV file
    public static function writeToFile($filename, $data)
    {
        $file = fopen($filename, 'w');
        foreach ($data as $row) {
            fputcsv($file, $row);
        }
        fclose($file);
    }

    // Open a CSV file and read the data
    public static function openFile($filename)
    {
        $data = [];
        if (file_exists($filename)) {
            $file = fopen($filename, 'r');
            while (($row = fgetcsv($file)) !== false) {
                $data[] = $row;
            }
            fclose($file);
        }
        return $data;
    }
}
