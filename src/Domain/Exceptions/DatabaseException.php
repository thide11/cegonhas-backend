<?php

namespace Cegonhas\Domain\Exceptions;

class DatabaseException extends \Exception {
    public function __contruct($message) {
        parent::__construct($message);
    }
}