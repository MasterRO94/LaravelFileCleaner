<?php 

return [

    /*
    |--------------------------------------------------------------------------
    | File clear settings
    |--------------------------------------------------------------------------
    |
    | paths - defines relative root paths array, where directories and files store
    | 
    | time_before_remove - defines how many minutes files may be store
    |
    | model - if not null will be deleted with the associated file
    |
    | file_field_name - name of the table field where filename is stored. Work only if model set
    |
    */

    /**
     * array
     */
    'paths' => [
        'storage/app/temp/images',
    ],


    /**
     * integer
     */
    'time_before_remove' => 60,


    /**
     * EloquentModel|null
     */
    'model' => null,

    /**
     * string|null
     */
    'file_field_name' => null,

];