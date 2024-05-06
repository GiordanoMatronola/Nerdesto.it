<?php

use App\Models\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
        
         /** Zero separation of concern mettendo la logica nella migration, la lezione dice così ma secondo me è una merda - Eli */

        $Videogames=__('ui.Videogames');
        $Comics=__('ui.Comics');
        $Manga=__('ui.Manga');
        $ActionFigure=__('ui.ActionFigure');
        $Cosplay=__('ui.Cosplay');
        $Gadgets=__('ui.Gadgets');
        $CardCollection=__('ui.CardCollection');

        $categories=["$Videogames", "$Comics", "$Manga", "$ActionFigure", "$Cosplay", "$Gadgets", "$CardCollection"];
        
        foreach($categories as $category){
            Category::create(['name'=>$category]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
