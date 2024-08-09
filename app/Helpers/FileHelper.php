<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Storage;

class FileHelper
{
    /**
     * Upload a file to the specified directory within the 'storage' folder.
     *
     * @param \Illuminate\Http\UploadedFile $file
     * @param string $directory
     * @return string $path
     */
    public static function uploadFile($file, $directory)
    {
        // Simpan file ke direktori yang ditentukan di dalam storage/public
        $path = $file->store($directory, 'public');
        return "storage/$path";
    }

    /**
     * Update a file by deleting the old one and uploading a new one.
     *
     * @param \Illuminate\Http\UploadedFile $newFile
     * @param string $directory
     * @param string|null $oldFilePath
     * @return string $path
     */
    public static function updateFile($newFile, $directory, $oldFilePath = null)
    {
        // Hapus file lama jika ada
        if ($oldFilePath) {
            self::deleteFile($oldFilePath);
        }

        // Upload file baru
        return self::uploadFile($newFile, $directory);
    }

    /**
     * Delete a file from the storage.
     *
     * @param string $filePath
     * @return bool
     */
    public static function deleteFile($filePath)
    {
        // Hapus file dari storage/public
        if (Storage::disk('public')->exists($filePath)) {
            return Storage::disk('public')->delete($filePath);
        }

        return false;
    }
}
