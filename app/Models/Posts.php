<?php  
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;




class Posts extends Model
{
    // public static function all()
    // {
    //     return
    //     [
    //         [
            
    //             'id' => 1,
    //             'title' =>  'judul 1',
    //             'slug' => ' Judul-Artikel-1',
    //             'author' => 'M Zaky Nugraha A R',
    //             'body' => ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint magni ratione possimus velit, i
    //             ure facere labore vitae fugiat quo, sit exercitationem fuga minus, sed aut nisi ullam hic illo sequi a
    //             ccusantium distinctio veniam. Minus veniam doloribus harum voluptatibus sed, asperiores numquam ad 
    //             sunt sapiente aliquid voluptates at aspernatur est unde sint magni consectetur mollitia. Dignissimos,
    //              deleniti maxime? Magni aperiam placeat quam amet. Molestiae, mollitia illo maxime recusandae nisi amet 
    //              ipsa eveniet est facilis fugit ratione id corrupti expedita vitae quidem culpa odit nesciunt officia 
    //              deleniti autem. Iusto vitae, sapiente molestias, tenetur aspernatur harum totam rem aut exercitationem 
    //              laboriosam, sequi nobis eum veniam est vel repellendus nemo reiciendis incidunt? Nobis, molestiae porro'
    //         ],
    //         [
    //             'id' => 2,
    //             'slug' => ' Judul-Artikel-2',
    //             'title' =>  'judul 2',
    //             'author' => 'M Zaky Nugraha A R',
    //             'body' => ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint magni ratione possimus velit, i
    //             ure facere labore vitae fugiat quo, sit exercitationem fuga minus, sed aut nisi ullam hic illo sequi a
    //             ccusantium distinctio veniam. Minus veniam doloribus harum voluptatibus sed, asperiores numquam ad 
    //             sunt sapiente aliquid voluptates at aspernatur est unde sint magni consectetur mollitia. Dignissimos,
    //              deleniti maxime? Magni aperiam placeat quam amet. Molestiae, mollitia illo maxime recusandae nisi amet 
    //              ipsa eveniet est facilis fugit ratione id corrupti expedita vitae quidem culpa odit nesciunt officia 
    //              deleniti autem. Iusto vitae, sapiente molestias, tenetur aspernatur harum totam rem aut exercitationem 
    //              laboriosam, sequi nobis eum veniam est vel repellendus nemo reiciendis incidunt? Nobis, molestiae porro'
    //         ]
    //     ];
    // }
    
    // // public static function find($slug)
    // // {
    // // // return Arr::first(static:: all(), function ($post) use ($slug) {

    // // //     return $post['slug'] == $slug; 
    // // // });
    // // // } 
    // // return Arr::first(static:: all(), fn ($post) => $post ['slug'] == $slug);
    // // } 

    // //fungsinya untuk menampilkan halaman random agar tidak error
    // public static function find($slug) : array
    // {
    // // return Arr::first(static:: all(), function ($post) use ($slug) {

    // //     return $post['slug'] == $slug; 
    // // });
    // // } 
    // $post = Arr::first(static:: all(), fn ($post) => $post ['slug'] == $slug);

    // if (!$post) {
    //     abort(404);
    //     }
    //     return $post;
    // } 

    // jika table di database berbeda nama maka{
    // protected $table = 'nama_table';

    // Buat untuk insert database dari form atau tinker
    protected $fillable = ['title', 'author', 'slug', 'body'];

}