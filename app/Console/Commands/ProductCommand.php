<?php

namespace App\Console\Commands;

use App\Models\Product;
use Illuminate\Console\Command;

class ProductCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'product:command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        header('Content-Type: application/json');
		$api_key = 'uF9EwYzT9xZ5HInupmZY4En5dAivMbNRccWaaMcN';

		$request_context = stream_context_create(array(
			'http' => array(
				'header'  => "Authorization: Bearer " . $api_key
			)
		));
		echo '<pre>';
		$result_json = file_get_contents("https://api.packt.com/api/v1/products?token=" . $api_key);
		
		$products = json_decode($result_json, true);
		if (!empty($products['products'])) {
			foreach ($products['products'] as $product) {
				// print_r($product);exit;
				$obj = new Product;
				$obj->product_id = $product['id'];
				$obj->title = $product['title'];
				$obj->authors = implode(', ', $product['authors']);
				$obj->categories = implode(', ', $product['categories']);
				$obj->vendor = $product['vendor'];
				$obj->language = $product['language'];
				$obj->publication_date = $product['publication_date'];
				$obj->save();
			}
		}
    }
}
