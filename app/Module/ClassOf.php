<?php
/**
 * @author Graham Crocker
 */
namespace Gpcrocker\Module;

class ClassOf
{
    /*
     * @var string
     */
    protected $name;

    /**
     * string $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * Returns who the class belongs to
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
