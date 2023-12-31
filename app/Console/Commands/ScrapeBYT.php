<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Goutte\Client;
use App\Models\News;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
class ScrapeBYT extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'scrape:BYT';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    // public function handle(){
    // try {
    //     // Sử dụng Goutte để cào dữ liệu từ trang web
    //     $client = new Client();
    //     $crawler = $client->request('GET', 'https://moh.gov.vn/');
    //     //ul.list-news-3.m-t-10
    //     // Lọc và hiển thị nội dung của các thẻ a có class là 'fon6'
    //     $title=$crawler->filter('ul.list-news-3.m-t-10')->each(function ($node) {
    //         return $node->text();
    //     });
    //     $slug = Str::slug($title[0]);

    //     $description=$crawler->filter('ul.list-news-3.m-t-10')->each(function ($node) {
    //         return $node->text();
    //     })[0];
    //     // $slug = Str::slug($title[0]);
    //      $description=Str($description);
    //     return 0;
    // } catch (\Exception $e) {
    //     // Xử lý lỗi nếu có
    //     return 1;
    // }
    public function handle()
    {
        $client = new Client();
        $crawler = $client->request('GET', 'https://moh.gov.vn/');

        $articleLinks = $crawler->filter('ul.list-news-3.m-t-10 a')->each(function ($node) {
            return [
                'title' => $node->text(),
                'url' => $node->link()->getUri(),
            ];
        });

        foreach ($articleLinks as $article) {
            $detailPageCrawler = $client->request('GET', $article['url']);

            // Cào nội dung từ trang chi tiết
            $content = $detailPageCrawler->filter('h2')->text();

            // Tạo slug từ tiêu đề
            $slug = Str::slug($article['title']);

            // Lấy giá trị của các trường khác (thumbnall, description) từ trang chi tiết
            $thumbnall = $detailPageCrawler->filter('img')->attr('src');
            $description = $detailPageCrawler->filter('p.sapo')->text();

            // Lưu thông tin vào cơ sở dữ liệu
            News::create([
                'title' => $article['title'],
                'slug' => $slug,
                'thumbnall' => $thumbnall,
                'description' => $description,
                'content' => $content,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        $this->info('Scraping completed.');
        return 0;
    }
}

