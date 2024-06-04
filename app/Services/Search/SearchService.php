<?php

namespace App\Services\Search;

use Illuminate\Support\Facades\DB;

class SearchService
{
public function searchByTerm($model,$term,$fields = [])
    {
           // تأكد من وجود قائمة الحقول، إذا لم يتم تمريرها، فافترض أن البحث يجب أن يتم في حقل الاسم
           //  $fields = $fields ?? ['name'];
             if (is_null($term)) {
                return $model::paginate(10);
            }
       return $model::where(function ($query) use ($term, $fields) {
        if (is_numeric($term) ) {
            // إذا كان "term" عددًا صحيحًا وكان البحث يجب أن يتم في حقل الـ "id"
            $query->where('id', $term);
        } 
            // إذا كان "term" سلسلة نصية، يبحث عنه في الحقول المعينة
            foreach ($fields as $field) {
                $query->orWhere(DB::raw('LOWER('.$field.')'), 'LIKE', '%' . $term . '%');
            }
    })->paginate(10);
       
    }



}


