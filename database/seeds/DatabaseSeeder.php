<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       //Permissions Seeders
       $this->call(ConfigurationsPermissionsTableSeeder::class);
       $this->call(AdminPermissionsTableSeeder::class);
       $this->call(UsersRolesPermissionsTableSeeder::class);
       $this->call(NewslettersPermissionsTableSeeder::class);
       $this->call(CategoryPermissionsTableSeeder::class);
       $this->call(SubCategoryPermissionsTableSeeder::class);
       $this->call(SizePermissionsTableSeeder::class);
       $this->call(SidePermissionsTableSeeder::class);
       $this->call(RecordsPermissionsTableSeeder::class);
       $this->call(FontsCategoriesPermissionsTableSeeder::class);
       $this->call(FontsPermissionsTableSeeder::class);
       $this->call(ReserverdWordsPermissionsTableSeeder::class);
       $this->call(PromoCodePermissionsTableSeeder::class);
       $this->call(BrandPermissionsTableSeeder::class);
       $this->call(ProductPermisionTableSeeder::class);
       $this->call(AditionalImagePermissionsTableSeeder::class);
       $this->call(ChildProductPermissionsTableSeeder::class);
       $this->call(ClipartCategoryPermissionsTableSeeder::class);
       $this->call(ClipartSubCategoryPermissionsTableSeeder::class);
       $this->call(ClipartPermissionsTableSeeder::class);
       $this->call(CommentPermissionsTableSeeder::class);
       $this->call(DesignPermissionsTableSeeder::class);
       $this->call(TemplateDesignPermissionsTableSeeder::class);
       $this->call(StoreDesignPermissionsTableSeeder::class);
       $this->call(InkColorPermissionsTableSeeder::class);
       $this->call(ShirtColorPermissionsTableSeeder::class);
       $this->call(MediaPermissionsTableSeeder::class);
       $this->call(OrderPermissionsTableSeeder::class);
       $this->call(PostPermissionsTableSeeder::class);
       $this->call(PriceTablePermissionsTableSeeder::class);
       $this->call(TagPermissionsTableSeeder::class);
       $this->call(ThemePermissionsTableSeeder::class);
       $this->call(PagePermissionsTableSeeder::class);
       $this->call(MailablePermissionsTableSeeder::class);
       $this->call(ComponentPermissionsTableSeeder::class);
       $this->call(OpenCartPermissionsTableSeeder::class);


        //Data Seeders
       $this->call(ConfigurationsTableSeeder::class);
       $this->call(RolesTableSeeder::class);
       $this->call(UsersTableSeeder::class);
       $this->call(BrandTableSeeder::class);
       $this->call(InkColorTableSeeder::class);
       $this->call(ShirtColorTableSeeder::class);
       //$this->call(FontsCategoriesTableSeeder::class);
       //$this->call(FontsTableSeeder::class);
       $this->call(CategoriesTableSeeder::class);
       $this->call(SubCategoriesTableSeeder::class);
       $this->call(SizeTableSeeder::class);
       $this->call(SideTableSeeder::class);
       //$this->call(ReserverdWordsTableSeeder::class);
       //$this->call(ProductsTableSeeder::class);
       //$this->call(ChildProductTableSeeder::class);
       $this->call(PriceShirtTableSeeder::class);
       $this->call(PriceDiscountTableSeeder::class);
       $this->call(PricePersonalizeTableSeeder::class);
       $this->call(ClipartsTableSeeder::class);
       //$this->call(TagsTableSeeder::class);
       //$this->call(PostTableSeeder::class);
       //$this->call(GalleryTableSeeder::class);
       //$this->call(CommentsTableSeeder::class);
       $this->call(MediaTableSeeder::class);
       //$this->call(OrderTableSeeder::class);
       //$this->call(DesignTableSeeder::class);
       //$this->call(MailableTableSeeder::class);
       $this->call(ThemeTableSeeder::class);
       $this->call(ComponentTableSeeder::class);
       $this->call(PageTableSeeder::class);
    }
}
