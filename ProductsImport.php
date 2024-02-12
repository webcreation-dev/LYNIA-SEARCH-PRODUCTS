<?php

namespace App\Imports;

use App\Models\Employee;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class ProductsImport implements ToModel, WithStartRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        if (!array_filter($row)) {
            return null;
        }

        try {

            DB::beginTransaction();

            $description = str_replace('"', '', $row[1]);
            $text = strip_tags($description);
            $text = trim($text);
            
            $product = new Product([
                'name'  => $row[0],
                'price' => $row[3] ?? 0,
                'description' => $text,
            ]);
            $product->save();

            $product_id = $product->id;

            preg_match_all('/https?:\/\/[^\s|]+/', $row[4], $matches);
            $urls_images = $matches[0];

            foreach ($urls_images as $url) {

                $image = str_replace('https://lynia.ci/wp-content/uploads/', 'images/', $url);

                DB::table('product_images')->insert([
                    'product_id' => $product_id,
                    'image' => $image
                ]);
            }

            // $file_path = public_path('files');

            // $file      = $file_path . '/products.csv';
            // Excel::import(new ProductsImport, $file);

            DB::commit();
            return $product;

        } catch (\Throwable $th) {

            DB::rollBack();
            throw $th;
        }
    }


    public function startRow(): int
    {
        return 2;
    }
}
