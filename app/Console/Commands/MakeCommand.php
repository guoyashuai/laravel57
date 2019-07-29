<?php

namespace App\Console\Commands;

//use Illuminate\Console\Command;
use Illuminate\Console\GeneratorCommand;

class MakeCommand extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:make {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new  make class';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Service';
    /**
     * Get the stub file for the generator.
     * 指定模板位置
     * @return string
     */
    protected function getStub()
    {
        return __DIR__.'/stubs/make.stub';
    }

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Console\Commands';
    }
}
