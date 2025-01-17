<?php

namespace App\Modules\Items\Services;

use App\Modules\Items\Models\Item;
use App\Modules\Items\Models\ItemGroup;
use App\Models\Auth;

class ItemService
{
    public function query()
    {
        $user = Auth::user();

        return Item::forBusiness([$user->business_id ?? 0 , 0])->get();
    }
    
    public function groups()
    {
        $user = Auth::user();

        return ItemGroup::forBusiness([$user->business_id ?? 0 , 0])->get();
    }

    public function find(int $id)
    {
        return Item::findOrFail($id);
    }

    public function findGroup($id)
    {
        return ItemGroup::findOrFail($id);
    }

    public function createItem(array $data)
    {
        return Item::create($data);
    }

    public function createGroup(array $data)
    {
        return ItemGroup::create($data);
    }

    public function updateItem($id, array $data)
    {
        $item = $this->find($id);
        $item->update($data);
        return $item;
    }

    public function updateGroup($id, array $data)
    {
        $item = $this->findGroup( $id);
        $item->update($data);
        return $item;
    }

    public function deleteItem($id)
    {
        $item = $this->find($id);
        return $item->delete();
    }
    
    public function deleteGroup($id)
    {
        $item = $this->findGroup($id);
        return $item->delete();
    }
}
