<?php

namespace Acme\Interfaces;

Interface Imodel{

    public function create();

    public function read();

    public function update($id);

    public function delete($id);

    public function findBy($id);
}