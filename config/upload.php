<?php
/*         UPLOAD CONFIG FILE                */

return [


    // This is a way we want to upload a file
    // In a public schema we use a move method and copy image on public/uploaded path
    // In a storage schema we use storage class for upload
    // NOTICE: for storage you should run command `php artisan storage:link` firsts
    // alternative type `storage`, `public`

    "schema" => "public",

    
    
    
    // location of a upload file for `public` schema

    'path' => env('UPLOAD_PATH', public_path("/uploaded/"))

    // Name of file model
    

];