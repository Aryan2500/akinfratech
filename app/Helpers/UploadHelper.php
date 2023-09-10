<?php

namespace App\Helpers;

use Illuminate\Http\Client\Request;

class UploadHelper
{
    public function upload(Request $request, $fieldName, $dirName)
    {
        if ($request->hasFile($fieldName)) {
            $file = $request->file($fieldName);
            $filename = time() . $fieldName . '_' . $file->getClientOriginalName();
            $file->storeAs($dirName, $filename, 'public'); // 'uploads' is the storage path
            // You can save the filename in the database or perform any other necessary actions.
            return $filename;
        }

        return null;
    }
}
