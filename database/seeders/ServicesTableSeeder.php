<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create(["name" => "Glass Shower Cubicles, Balcony, Stairways, and Canopies Installation","icon"=>"bi bi-cart","description" => "Elevate your living spaces with our bespoke glass installations. From stylish shower cubicles that redefine your bathroom experience to elegant balcony enclosures and stairway enhancements, we create spaces that seamlessly blend functionality with sophistication."]);
        Service::create(["name" => "Alluminium Works","icon"=>"bi bi-cart","description" => "Precision meets durability with our aluminum works. Whether it's framing for glass installations or standalone aluminum structures, our craftsmanship ensures longevity and a modern aesthetic."]);
        Service::create(["name" => "Stainless Steel Works","icon"=>"bi bi-calendar4-week","description" => "For a touch of contemporary elegance and resilience, our stainless steel works are unparalleled. From handrails to structural elements, we seamlessly integrate stainless steel into our designs to enhance both the visual appeal and structural integrity of your spaces."]);
        Service::create(["name" => "Office Glass Partitions","icon"=>"bi bi-card-checklist","description" => "Foster a collaborative and modern work environment with our custom-designed office glass partitions. We understand the importance of open and fluid spaces in the workplace, and our solutions are crafted to enhance productivity while maintaining a sleek and professional aesthetic."]);
        Service::create(["name" => "Window Panes Installations","icon"=>"bi bi-cart","description" => "Our window pane installations are designed to let the natural light flood into your spaces while providing thermal and sound insulation. Whether it's for residential or commercial properties, we offer a range of options to suit your preferences and needs."]);
        Service::create(["name" => "Mirrors and Glass Decoration","icon"=>"bi bi-cart","description" => "Reflect your style with our expertly crafted mirrors and glass decorations. From statement mirrors that add depth to your interiors to decorative glass elements that become conversation starters, we bring your vision to life with finesse and creativity."]);
    }
}
