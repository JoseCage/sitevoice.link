<?php

namespace App\Console\Commands;

use Illuminate\Foundation\Console\ModelMakeCommand;
use Illuminate\Support\Str;

class MakeModelCommand extends ModelMakeCommand
{

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new model class with Models namespace';


    /**
     * Get the Models path
     *
     * @param  string $name The name of the Model to be generated
     * @return string
     */
    protected function getPath($name): string
    {
        $name = Str::replaceFirst($this->rootNamespace(), '', $name);

        return $this->laravel[ 'path' ].'/Models/' .str_replace('\\', '/', $name).'.php';
    }
    /**
     * Get the root namespace for the class.
     *
     * @return string
     */
    protected function rootNamespace(): string
    {
        return $this->laravel->getNamespace().'Models';
    }

}
