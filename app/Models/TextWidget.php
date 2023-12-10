<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TextWidget extends Model
{
    use HasFactory;

    protected $table = "text_widgets";

    public static function getTitle(string $key)
    {
        $textWidget = TextWidget::query()->where('key', '=', $key)->where('active', '=', 1)->first();
        if($textWidget){
            $textWidget->title;
        }else{
            return "";
        }
    }

    protected $fillable = [
        'title',
        'key',
        'content',
        'image',
        'active'
    ];
}
