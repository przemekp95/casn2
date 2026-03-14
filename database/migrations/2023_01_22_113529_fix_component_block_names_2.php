<?php

use A17\Twill\Facades\TwillBlocks;
use A17\Twill\Models\Block;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Str;

return new class extends Migration
{
    public function up(): void
    {
        $blockList = TwillBlocks::getAll();

        $mapping = [];

        foreach ($blockList as $block) {
            if ($block->componentClass) {
                $mapping[Str::slug(Str::replace('\\', '-', $block->componentClass))] =
                    $block->componentClass::getBlockIdentifier();
            }
        }

        Block::each(function (Block $block) use ($mapping) {
            if (isset($mapping[$block->type])) {
                $block->type = $mapping[$block->type];
                $block->save();
            }
        });
    }
};
