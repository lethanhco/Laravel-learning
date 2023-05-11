<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Base;

class Product extends Base
{
    use HasFactory;

    public $title = "Sản phẩm";

    public function configs() {
        $defaultListingConfigs = parent::defaultListingConfigs();
        $listingConfigs = array (
            array(
                'field' => 'id',
                'name' => 'ID',
                'type' => 'text',
                'filter' => 'equal',
                'sort' => true,
                'listing' => true,
                'editing' => false
            ),
            array(
                'field' => 'name',
                'name' => 'Tên Sản Phẩm',
                'type' => 'text',
                'filter' => 'like',
                'sort' => true,
                'listing' => true,
                'editing' => true,
                'validate' => 'required|max:100'
            ),
            array(
                'field' => 'image',
                'name' => 'Ảnh Sản Phẩm',
                'type' => 'image',
                'listing' => true,
                'editing' => true
            ),
            array(
                'field' => 'price',
                'name' => 'Giá Sản Phẩm',
                'type' => 'number',
                'filter' => 'between',
                'sort' => true,
                'listing' => true,
                'editing' => true,
                'validate' => 'required|Numeric'
            ),
            array(
                'field' => 'content',
                'name' => 'Nội dung sản phẩm',
                'type' => 'ckeditor',
                'listing' => false,
                'editing' => true
            ),
        );
        return array_merge($listingConfigs, $defaultListingConfigs);
    }

}
