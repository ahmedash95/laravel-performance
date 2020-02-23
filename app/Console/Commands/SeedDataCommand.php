<?php

namespace App\Console\Commands;

use App\Category;
use App\Post;
use App\Tag;
use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class SeedDataCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'data:seed';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Seeding some fake data';

    public function __construct()
    {
        parent::__construct();
        ini_set('memory_limit', '500MB');
        DB::disableQueryLog();
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->seedUsers();
        $this->seedCategories();
        $this->seedTags();
        $this->seedPosts();
        $this->seedTagsLinks();
    }

    public function __destruct()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }

    private function seedUsers()
    {
        $this->info('Creating users');
        User::truncate();
        factory(User::class, 500)->create();
    }

    private function seedTags()
    {
        $this->info('Creating tags');
        Tag::truncate();
        foreach(range(1,4) as $_) {
            Tag::insert(factory(Tag::class, 1000)->make()->toArray());
        }
    }

    private function seedCategories()
    {
        $this->info('Creating categories');
        Category::truncate();
        foreach(range(1,7) as $_) {
            Category::insert(factory(Category::class, 500)->make()->toArray());
        }
    }

    private function seedPosts($target = 50000)
    {
        $this->info('Creating posts');
        $this->output->progressStart($target);
        Post::truncate();
        $totalUsers = User::count();
        $totalCategories = Category::count();
        $entries = [];
        $i = 0;
        while ($i < $target) {
            $i++;
            $entries[] = factory(Post::class)->make([
                    'user_id' => rand(1,$totalUsers),
                    'category_id' => rand(1, $totalCategories),
            ])->toArray();

            if($i % 500 == 0) {
                Post::insert($entries);
                $entries = [];
                $this->output->progressAdvance(500);
            }
        }

        $this->output->progressFinish();
    }

    private function seedTagsLinks()
    {
        $postsCount = Post::count();
        DB::statement('Truncate posts_tags');
        $this->info('linking tags');
        $this->output->progressStart($postsCount);
        Post::chunk(
            1000,
            function ($posts) {
                $links = [];
                $ids = Tag::inRandomOrder()->limit(3)->get()->pluck('id')->toArray();
                $posts->each(
                    function ($post) use ($ids, &$links) {
                        foreach ($ids as $id) {
                            $links[] = [
                                'post_id' => $post->id,
                                'tag_id' => $id,
                            ];
                        }
                    }
                );
                DB::table('posts_tags')->insert($links);
                $this->output->progressAdvance(1000);
            }
        );
        $this->output->progressFinish();
    }
}
