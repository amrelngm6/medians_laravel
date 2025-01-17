<?php

namespace App\Modules\Countries\Services;

class CountryService
{
    public function createCountry(array $data)
    {
        // Business logic for creating a Country
    }

    public function updateCountry($id, array $data)
    {
        // Business logic for updating a Country
    }

    public function deleteCountry($id)
    {
        // Business logic for deleting a Country
    }
    

    public function list()
    {
        $list = json_decode(file_get_contents('../app/Modules/Countries/Services/list.json'));
        
        return $list;
    }

}
