<?php

namespace App\Console\Commands\Scraper;

use Illuminate\Console\Command;
use Goutte\Client;
use App\Models\News;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class Crawldata extends Command
{
    protected $signature = 'scraper:crawldata';
    protected $description = 'Scrape and update data from a website';

    public function handle()
    {
        try {
            // Sử dụng Goutte để cào dữ liệu từ trang web
            $client = new Client();
            $crawler = $client->request('GET', 'https://moh.gov.vn/');

            // Lấy nội dung từ trang web
            $soHieu = $crawler->filter('.so-hieu-selector')->text();
            $trichYeuNoiDung = $crawler->filter('.trich-yeu-noi-dung-selector')->text();
            $coQuan = $crawler->filter('.co-quan-selector')->text();
            $ngayBanHanh = $crawler->filter('.ngay-ban-hanh-selector')->text();

            // Kiểm tra xem tin tức có tồn tại trong cơ sở dữ liệu chưa
            $existingNews = News::where('so_hieu', $soHieu)->first();

            if (!$existingNews) {
                // Nếu tin tức chưa tồn tại, thêm mới vào cơ sở dữ liệu
                News::create([
                    'so_hieu' => $soHieu,
                    'trich_yeu_noi_dung' => $trichYeuNoiDung,
                    'co_quan' => $coQuan,
                    'ngay_ban_hanh' => Carbon::parse($ngayBanHanh)->format('Y-m-d'),
                ]);

                $this->info("News added to the database.");
            } else {
                $this->info("News already exists in the database.");
            }
            $this->info("Scraped data: $soHieu, $trichYeuNoiDung, $coQuan, $ngayBanHanh");

            // Lấy dữ liệu từ cơ sở dữ liệu sau khi cập nhật
            $newsData = News::first();

            // Hiển thị thông báo trên console
            $this->info("Scraped data: $soHieu, $trichYeuNoiDung, $coQuan, $ngayBanHanh");
        } catch (\Exception $e) {
            Log::error('Có lỗi khi cập nhật dữ liệu: ' . $e->getTraceAsString());
            $this->error('Có lỗi xảy ra khi cập nhật dữ liệu.');
        }
    }
}
